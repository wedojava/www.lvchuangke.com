<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Lawyer;
use Illuminate\Contracts\Bus\SelfHandling;

// 这个 job 将在我们获取表单内容并将之填充到 form 的时候起作用
class LawyerFormFields extends Job implements SelfHandling
{
    /**
     * The id(if any) of the Post row.
     * @var integer
     */
    protected $id;

    /**
     * List of fields and default value for each field
     * @var array
     */
    protected $fieldList = [
        'username' => '',
        'telephone' => '',
        'email' => '',
        'QQ' => '',
        'description' => '',
    ];

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($id = null)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $fields = $this->fieldList;

        // 如果 id 不是 null，通过模型返回 id 是 $id 的 array，并跳出 job.
        // 如果 id 是 null,说明可能处于创建数据，此时如果提交失败，填充数据应当为request里的内容，即适用old()调用
        if ($this->id) {
            $fields = $this->fieldsFromModel($this->id, $fields);
        }

        // id 是 null，遍历 fieldList 内容,设定$fields的键值对为old键值。
        foreach ($fields as $fieldName => $fieldValue) {
            $fields[$fieldName] = old($fieldName, $fieldValue);
        }

        return array_merge(
            $fields
        );
    }

    /**
     * Return the field values from the model
     * @param  integer $id     Post ID
     * @param  array  $fields postModelFieldList
     * @return array         $fieldsList
     */
    public function fieldsFromModel($id, array $fields)
    {
        $lawyer = Lawyer::findOrFail($id);

        $fieldNames = array_keys($fields);

        $fields = ['id' => $id];

        foreach ($fieldNames as $field) {
            $fields[$field] = $lawyer->{$field};
        }

        return $fields;
    }
}

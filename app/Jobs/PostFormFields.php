<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Jobs\fieldsFromModel;

class PostFormFields extends Job
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
        'title' => '',
        'content' => '',
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

        // 如果 id 不是 null，通过模型返回 id 是 $id 的字段内容的 array。
        if ($this->id) {
            $fields = $this->fieldsFromModel($this->id, $fields);
        }

        // 遍历 fieldList 内容并设定对应的old的值。
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
        $posts = Post::findOrFail($id);

        $fieldNames = array_keys($fields);

        $fields = ['id' => $id];

        foreach ($fieldNames as $field) {
            $fields[$field] = $posts->{$field};
        }

        return $fields;
    }
}

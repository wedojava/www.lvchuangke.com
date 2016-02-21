<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class LawCaseFormFields extends Job implements SelfHandling
{
    // use InteractsWithQueue, SerializesModels;
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
        'nickname' => '',
        'telephone' => '',
        'email' => '',
        'QQ' => '',
        'detail' => '',
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
        $law_cases = LawCase::findOrFail($id);

        $fieldNames = array_keys($fields);

        $fields = ['id' => $id];

        foreach ($fieldNames as $field) {
            $fields[$field] = $law_cases->{$field};
        }

        return $fields;
    }

}

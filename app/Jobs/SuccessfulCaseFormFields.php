<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;

class SuccessfulCaseFormFields extends Job implements SelfHandling
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
        'caseTitle' => '',
        'caseDetail' => '',
        'lawyer' => '',
        'lawOffice' => '',
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

        if ($this->id) {
            $fields = $this->fieldsFromModel($this->id, $fields);
        }

        foreach ($fields as $fieldName => $fieldValue) {
            $fields[$fieldName] = old($fieldName, $fieldValue);
        }

        return array_merge(
            $fields
        );
    }

    public function fieldsFromModel($id, array $fields)
    {
        $successful_case = SuccessfulCase::findOrFail($id);

        $fieldNames = array_keys($fields);

        $fields = ['id'=>$id];

        foreach ($fieldNames as $fieldName) {
            $fields[$fieldName] = $successful_case->{$fieldName};
        }

        return $fields;
    }


}

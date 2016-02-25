<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\LawOffice;
use Illuminate\Contracts\Bus\SelfHandling;

class LawOfficeFormFields extends Job implements SelfHandling
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
        'officeName' => '',
        'telephone' => '',
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

        if ($this->id) {
            $fields = $this->fieldsFromModel($this->id, $fields);
        }

        foreach ($fields as $fieldName => $fieldValue) {
            $fiedls[$fieldName] = old($fieldName, $fieldValue);
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
        $LawOffice = LawOffice::findOrFail($id);

        $fieldNames = array_keys($fields);

        $fields = ['id' => $id];

        foreach ($fieldNames as $field) {
            $fields[$field] = $LawOffice->{$field};
        }

        return $fields;
    }
}

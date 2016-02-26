<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SuccessfulCaseCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'caseTitle'  => 'required|min:4|max:50',
            'caseDetail' => 'required|min:10',
            'lawyer' => 'min:4|max:50',
            'lawOffice' => 'min:4|max:200',
        ];
    }

    /**
     * Get the validation postFillData that apply to the request.
     *
     * @return array
     */
    public function postFillData()
    {
        return [
            'caseTitle' => $this->caseTitle,
            'caseDetail_raw' => $this->get('caseDetail'),
            'lawyer' => $this->lawyer,
            'lawOffice' => $this->lawOffice,
        ];
    }
}

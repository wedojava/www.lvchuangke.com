<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LawOfficeCreateRequest extends Request
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
            'officeName'  => 'required|max:120',
            'telephone' => 'required',
            'description' => 'required',
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
            'officeName' => $this->officeName,
            'telephone' => $this->telephone,
            'description_raw' => $this->get('description'),
        ];
    }
}

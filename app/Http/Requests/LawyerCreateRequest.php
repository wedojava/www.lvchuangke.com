<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LawyerCreateRequest extends Request
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
            'username'  => 'required|max:50',
            'professional_field'  => 'required|max:50',
            'certified_no'  => 'required|max:50',
            'certified_ages'  => '',
            'telephone' => 'required',
            'email' => 'email',
            'QQ' => 'numeric',
            'description' => '',
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
            'username' => $this->username,
            'professional_field' => $this->professional_field,
            'certified_no' => $this->certified_no,
            'certified_ages' => $this->certified_ages,
            'telephone' => $this->telephone,
            'email' => $this->email,
            'QQ' => $this->QQ,
            'description_raw' => $this->get('description'),
        ];
    }
}

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
            'telephone' => 'required',
            'email' => 'email',
            'QQ' => 'numeric',
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
            'username' => $this->username,
            'telephone' => $this->telephone,
            'email' => $this->email,
            'QQ' => $this->QQ,
            'description_raw' => $this->get('description'),
        ];
    }
}

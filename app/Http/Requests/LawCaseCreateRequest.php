<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LawCaseCreateRequest extends Request
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
            'nickname'  => 'required|mix:4|max:50',
            'telephone' => 'required',
            'email' => 'email',
            'QQ' => 'numeric',
            'detail' => 'required',
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
            'nickname' => $this->nickname,
            'telephone' => $this->telephone,
            'email' => $this->email,
            'QQ' => $this->QQ,
            'detail_raw' => $this->get('detail'),
        ];
    }
}

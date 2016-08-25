<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DocFormRequest extends Request
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
                'Doc_uploaded' => 'bail|required|mimes:doc,docx,pdf',
                'User_ID' => 'required|numeric',
                
                
            
        ];
    }
}

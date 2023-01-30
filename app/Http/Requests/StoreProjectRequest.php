<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_project'=>'required|unique:projects|string',
            'summary' => 'required|string|max:500',
            'client' => 'required|string|max:50',
            'shipped_at' => 'required|date|before:tomorrow',
            'project_logo_img' => 'nullable|image|max:2048',
            'doc_project' => 'nullable|mimes:zip,txt,pdf|max:2048'
        ];
    }
}

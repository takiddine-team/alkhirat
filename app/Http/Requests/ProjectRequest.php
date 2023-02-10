<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            "name" => "required|string|max:255",
            "description" => "required|string",
            "start_date" => "required|date",
            "end_date" => "required|date",
            "attachment" => "nullable|file|max:30000",
            "management_id" => "required|numeric|exists:managements,id"
        ];
    }
}

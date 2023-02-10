<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityRequest extends FormRequest
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
            "activity_name" => "nullable",
            "activity_code" => "nullable",
            "plan_code" => "nullable",
            "description" => "nullable",
            "quantity" => "nullable",
            "monthly_cost" => "nullable",
            "target_class" => "nullable",
            "management_id" => "nullable",
            "start_date" => "nullable",
            "end_date" => "nullable",
            "attachment" => "nullable",
            "note" => "nullable",
            "is_done" => "nullable",
        ];
    }
}

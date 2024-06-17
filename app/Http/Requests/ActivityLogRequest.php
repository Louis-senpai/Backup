<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityLogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'log_name' => 'string',
			'description' => 'required|string',
			'subject_type' => 'string',
			'causer_type' => 'string',
			'properties' => 'string',
			'event' => 'string',
			'batch_uuid' => 'string',
        ];
    }
}

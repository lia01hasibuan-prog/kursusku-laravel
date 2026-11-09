<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule; // ← JANGAN LUPA INI!

class UpdateCourseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // PENTING: Harus true
    }

    public function rules(): array
    {
        $course = $this->route('course');

        return [
            'code' => [
                'required',
                'string',
                'max:20',
                Rule::unique('courses', 'code')->ignore($course), // ← PENTING: Ignore record sendiri
            ],
            'name'        => ['required', 'string', 'min:3', 'max:120'],
            'description' => ['nullable', 'string', 'max:2000'],
            'fee'         => ['required', 'integer', 'min:0'],
            'quota'       => ['required', 'integer', 'between:1,500'],
            'start_date'  => ['required', 'date'],
            'status'      => ['required', 'in:draft,open,closed'],
        ];
    }
}
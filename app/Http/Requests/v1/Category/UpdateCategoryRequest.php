<?php

namespace App\Http\Requests\v1\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'name' => 'string|max:255',
            'slug' => 'string|max:255|unique:categories',
            'cover' => 'string|max:255',
            'meta' => 'string|max:255',
            'description' => 'string',
            'status' => 'integer',
            'parent_id' => 'integer'
        ];
    }
}

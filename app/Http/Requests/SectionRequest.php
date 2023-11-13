<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
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
        $validation = [
            'is_component' => 'nullable|boolean',
            'order' => 'nullable',
            'cover' => 'nullable',
            'additional' => 'nullable|json',
            'parent_id' => 'nullable',
            'is_component' => 'nullable',
            'type_id' => 'required',
        ];

        foreach (config('app.locales') as $locale) {
            $validation = $validation + [
                "{$locale}.title" => 'required|string|max:255',
                "{$locale}.desc" => 'nullable|string|max:255',
                "{$locale}.slug" => 'required|unique:slugs,slug',
                "{$locale}.base" => 'nullable|string',
                "{$locale}.icon" => 'nullable',
                "{$locale}.locale_additional" => 'nullable|json',
                "{$locale}.active" => 'nullable|integer',
                "{$locale}.keywords" => 'nullable|string|max:255',
            ];
        }

        return $validation;
    }

    /**
     * Prepare for validaiton
     */
    protected function prepareForValidation()
    {
        $data = [];
        foreach (config('app.locales') as $locale) {
            $data[$locale] = $this->{$locale};
            $data[$locale]['slug'] = $locale . '/' . Str::slug($this->{$locale}['slug'], '-');
            $data[$locale]['base'] = '/' . Str::slug($this->{$locale}['slug'], '-');
        }
        $this->merge($data);
    }
}

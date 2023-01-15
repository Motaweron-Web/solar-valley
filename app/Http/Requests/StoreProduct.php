<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
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
            'image' => 'required|image',
            'title_ar' => 'required',
            'title_en' => 'required',
            'sub_title_ar' => 'required',
            'sub_title_en' => 'required',
            // 'sku' => 'required',
            'category_id' => 'required',
            'tags' => 'required',
            'desc_ar' => 'required',
            'desc_en' => 'required',
            'part_number' => 'required',
            'weight' => 'required',
            'dimensions' => 'required',
            'model_number' => 'required'
        ];
    }
}

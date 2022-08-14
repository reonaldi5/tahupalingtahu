<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdukRequest extends FormRequest
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
            'name' => 'required|max:255',
            'ukuran' => 'required',
            'stok' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'rate' => 'required',
            'types' => '',
            'picturePath' => 'required|image',
        ];
    }
}

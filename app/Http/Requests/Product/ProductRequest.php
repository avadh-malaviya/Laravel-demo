<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Route;

// use Route;

class ProductRequest extends FormRequest
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
        switch (Route::currentRouteName()) {
            case 'product.add': {
                    $rule = [
                        'title' => 'required',
                        'description' => 'required',
                        'price' => ['required', 'numeric'],
                        'compare_price' => ['required', 'numeric'],
                        'cost_price' => ['required', 'numeric'],
                        'charge_tax' => 'nullable',
                        'sale_channel' => 'required',
                        'vendor' => 'required',
                        'tags' => 'required',
                        'image' => 'mimes:jpg,jpeg,png,pdf'
                    ];
                    return $rule;
                }

            case 'product.update': {
                    $rule = [
                        'title' => 'required',
                        'description' => 'required',
                        'price' => ['required', 'numeric'],
                        'compare_price' => ['required', 'numeric'],
                        'cost_price' => ['required', 'numeric'],
                        'charge_tax' => 'nullable',
                        'sale_channel' => 'required',
                        'vendor' => 'required',
                        'tags' => 'required',
                        'image' => ['nullable', 'mimes:jpg,jpeg,png,pdf']
                    ];
                    return $rule;
                }

            default:
                break;
        }
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'A title is required'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $response = new JsonResponse(['error' => $validator->errors()], 422);
        throw new ValidationException($validator, $response);
    }
}

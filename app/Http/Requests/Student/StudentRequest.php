<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Route;

class StudentRequest extends FormRequest
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
            case 'student.add': {
                    $rule = [
                        'name' => 'required',
                        'father_name' => 'required',
                        'mother_name' => 'required',
                        'contact_no' => ['required', 'numeric'],
                        'address' => 'required',
                        'city' => 'required',
                        'state' => 'required',
                        'country' => 'required',
                        'school' => 'required',
                        'standard' => ['required', 'numeric'],
                        'mark' => ['required', 'numeric'],
                        'images' => ['required', 'image']
                    ];
                    return $rule;
                }

            case 'student.update': {
                    $rule = [
                        'name' => 'required',
                        'father_name' => 'required',
                        'mother_name' => 'required',
                        'contact_no' => ['required', 'numeric'],
                        'address' => 'required',
                        'city' => 'required',
                        'state' => 'required',
                        'country' => 'required',
                        'school' => 'required',
                        'standard' => ['required', 'numeric'],
                        'mark' => ['required', 'numeric'],
                        'images' => ['required']
                    ];
                    return $rule;
                }

            default:
                break;
        }
    }

    protected function failedValidation(Validator $validator)
    {
        $response = new JsonResponse(['error' => $validator->errors()], 422);
        throw new ValidationException($validator, $response);
    }
}

<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Route;

class UserRequest extends FormRequest
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
            case 'register': {
                    $rule = [
                        'name' => 'required',
                        'email' => ['required', 'email:rfc', 'unique:users,email'],
                        'password' => 'required',
                        'confirm_password' => ['required', 'same:password']
                    ];
                    return $rule;
                }

            case 'user.update': {
                    $rule = [
                        'role' => 'required',
                        'name' => 'required',
                        'email' => ['required', 'email:rfc'],
                    ];
                    return $rule;
                }

            case 'user.add': {
                    $rule = [
                        'role' => 'required',
                        'name' => 'required',
                        'email' => ['required', 'email:rfc', 'unique:users,email'],
                        'password' => 'required',
                        'confirm_password' => ['required', 'same:password']
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

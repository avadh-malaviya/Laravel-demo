<?php

namespace App\Http\Requests\Permission;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Route;


class PermissionRequest extends FormRequest
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
            case 'permission.add': {
                    $rule = [
                        'name' => 'required',
                    ];
                    return $rule;
                }

            case 'permission.update': {
                    $rule = [
                        'name' => 'required',
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

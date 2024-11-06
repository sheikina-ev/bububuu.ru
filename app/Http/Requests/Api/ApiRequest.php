<?php

namespace App\Http\Requests\Api;

use App\Exceptions\ApiException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class ApiRequest extends FormRequest
{
    // Вызов исключения при провале авторизации
    public function failedAuthorization()
    {
        throw new ApiException('Forbidden', 403);
    }
    // Вызов исключения при провале валидации данных
    public function failedValidation(Validator $validator)
    {
        throw new ApiException('Unprocessable Content', 422, $validator->errors());
    }
}

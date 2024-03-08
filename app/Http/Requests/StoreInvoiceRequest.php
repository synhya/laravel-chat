<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Auth\Access\AuthorizationException;

class StoreInvoiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): void
    {
        // 세션에서 사용자 정보를 가져옵니다.
        $user = session('user');

        // 사용자 정보가 없으면 인증에 실패하고 예외를 발생시킵니다.
        if ($user) {
            return;
        }

        // 사용자 정보가 있으면 인증에 성공합니다.
        throw new AuthorizationException();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}

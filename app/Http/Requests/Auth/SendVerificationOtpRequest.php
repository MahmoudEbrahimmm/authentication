<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SendVerificationOtpRequest extends FormRequest
{
    public function authorize(): bool{
        return true;
    }

    public function rules(): array{
        return [
            'identifier' => 'required|string|max:255',
            'method' => 'required|string|in:phone,email'
        ];
    }
}

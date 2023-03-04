<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:255'],
            'phone' => ['required', 'max:15'],
            'email' => ['required', 'email', 'unique:people,email'],
            'body' => ['required'],
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'Name',
            'phone' => 'Phone Number',
            'email' => 'Email',
            'body' => 'Email Content',
        ];
    }
}

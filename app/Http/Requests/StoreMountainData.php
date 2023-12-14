<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMountainData extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"=>"required",
            "height"=>"required",
            "location"=>"required",
        ];
    }
    public function message(){
        return[
            "name.required"=>"A név mező nem lehet üres.",
            "height.required"=>"A magasság mező nem lehet üres.",
            "location.required"=>"A hely mező nem lehet üres.",
        ];
    }
}


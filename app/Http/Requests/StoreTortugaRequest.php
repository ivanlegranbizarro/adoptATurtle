<?php

namespace App\Http\Requests;

use App\Rules\NoEmojis;
use Illuminate\Foundation\Http\FormRequest;

class StoreTortugaRequest extends FormRequest
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
      'name' => ['required', 'string', 'min:2', 'max:100', 'unique:tortugas', new NoEmojis],
      'birthday' => 'required|date',
      'image' => 'required|image:jpeg,png,jpg,gif,svg|max:2048',
    ];
  }
}

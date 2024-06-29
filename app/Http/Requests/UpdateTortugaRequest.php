<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTortugaRequest extends FormRequest
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
      'name' => 'required|string|min:2|max:100|unique:tortugas,name,' . $this->tortuga->id,
      'birthday' => 'required|date',
      'comments' => 'required|string|min:2|max:1000',
      'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];
  }
}

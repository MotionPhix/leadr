<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;

class CompanyStoreRequest extends FormRequest
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
   * @return array<string, mixed>
   */
  public function rules()
  {
    return [
      'name' => 'required',
      'slogan' => 'nullable|min:10',
      'category_id' => 'required|exists:categories,id',
      'website' => 'nullable|string',
      'address' => 'required',
      'country' => 'required',
    ];
  }

  public function messages()
  {
    return [
      'name.required' => 'Company name cannot be empty',
      'slogan.min' => 'Tagline should be more than :min characters long',
      'category_id.required' => 'Please pick a category',
      'address.required' => 'We need to know where the company is located',
      'website.string' => 'A valid website would be a string',
      'country.required' => 'We need to know where the company is based',
    ];
  }
}

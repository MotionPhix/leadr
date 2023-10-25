<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
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
      'first_name' => 'required',
      'last_name' => 'required',
      'email' => 'required|email:rns|unique:contacts,email,except,id',
      'company_id' => 'required|exists:companies,id',
      'phones' => 'sometimes|nullable',
      'phones.*.type' => 'required|in:work,mobile,office',
      'phones.*.number' => 'required|string',
      'job_title' => 'required',
      'bio' => 'nullable|min:30',
    ];
  }

  public function messages()
  {
    return [
      'first_name.required' => 'Provide contact\'s first name',
      'last_name.required' => 'Last name cannot be empty',
      'email.required' => 'Fill out an email address',
      'email.email' => 'That is a fake email address',
      'company_id.required' => 'Please pick a company',
      'company_id.exists' => 'Oops! We don\'t have that company yet!',
      'phones.*.type.required' => 'Pick a phone type',
      'phones.*.type.in' => 'That\'s out of bounds!',
      'phones.*.number.required' => 'Fill out a phone number',
      'job_title.required' => 'Fill out contact\'s job',
    ];
  }
}

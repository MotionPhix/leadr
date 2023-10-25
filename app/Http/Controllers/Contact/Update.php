<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\ContactStoreRequest;
use App\Models\Contact;
use ProtoneMedia\Splade\Facades\Toast;

class Update extends Controller
{
  /**
   * Handle the incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(ContactStoreRequest $request, Contact $contact)
  {
    $contact->update($request->validated());

    // $contact->image()->save(\App\Models\Image::make(['path' => $path]));

    Toast::title('Hooray!')
      ->success('Contact was updated')
      ->leftBottom()
      ->autoDismiss(5);

    return redirect(route('contacts.show', $contact));
  }
}

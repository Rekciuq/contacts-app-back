<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Contact;
use App\Http\Requests\V1\StoreContactRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ContactResource;
use App\Http\Resources\V1\ContactCollection;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ContactCollection(Contact::paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        return new ContactResource(Contact::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return new ContactResource($contact);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}

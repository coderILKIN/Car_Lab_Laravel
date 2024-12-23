<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {

        $contacts = Contact::all();

        return view('admin.contact.index', compact('contacts'));
        
    }


    public function destroy(string $id) {

        $contact = Contact::findOrFail($id);

        $contact->delete();

        return redirect()->back();
        
    }


    
    public function read(string $id) {

        $contact = Contact::findOrFail($id);

        $contact->status = 1;

        $contact->save();

        return redirect()->back();
        
    }
}

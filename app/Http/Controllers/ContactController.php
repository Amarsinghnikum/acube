<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contactStore(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|digits_between:1,14',
                'query' => 'required|string',
            ]);
          
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            
            Contact::create($request->all());
            
            return redirect()->back()->with('success', 'Message sent successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while sending the message.');
        }        
    }

    public function queries(){
        $queries = Contact::get();
        return view('admin.queries.list', compact('queries'));
    }

    public function updateStatus(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        
        $request->validate([
            'status' => 'required|boolean',
        ]);
    
        if ($request->status == 1) {
            $contact->status = 1;
        } else {
            $contact->status = 0;
        }
    
        $contact->save();
    
        // return response()->json(['message' => 'Status updated successfully']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Exception;

class ContactUsesController extends Controller
{


    public function index()
    {
        $contactUses = ContactUs::paginate(25);

        return view('contact_uses.index', compact('contactUses'));
    }


    public function create()
    {
        

        return view('contact_uses.create');
    }


    public function store(Request $request)
    {

            
            $data = $this->getData($request);
            
            ContactUs::create($data);

            return redirect()->route('contact_uses.contact_us.index')
                ->with('success_message', 'Contact Us was successfully added.');

    }


    public function show($id)
    {
        $contactUs = ContactUs::findOrFail($id);

        return view('contact_uses.show', compact('contactUs'));
    }


    public function edit($id)
    {
        $contactUs = ContactUs::findOrFail($id);
        

        return view('contact_uses.edit', compact('contactUs'));
    }


    public function update($id, Request $request)
    {

            
            $data = $this->getData($request);
            
            $contactUs = ContactUs::findOrFail($id);
            $contactUs->update($data);

            return redirect()->route('contact_uses.contact_us.index')
                ->with('success_message', 'Contact Us was successfully updated.');

    }


    public function destroy($id)
    {
        try {
            $contactUs = ContactUs::findOrFail($id);
            $contactUs->delete();

            return redirect()->route('contact_uses.contact_us.index')
                ->with('success_message', 'Contact Us was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
                'name' => 'string|min:1|max:255|nullable',
            'subject' => 'string|min:1|max:255|nullable',
            'email' => 'nullable',
            'message' => 'numeric|nullable',
            'is_read' => 'boolean|nullable', 
        ];

        
        $data = $request->validate($rules);


        $data['is_read'] = $request->has('is_read');


        return $data;
    }

}

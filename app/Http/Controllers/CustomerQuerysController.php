<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CustomerQuerys;
use Illuminate\Http\Request;
use Exception;

class CustomerQuerysController extends Controller
{


    public function index()
    {
        $customerQuerysObjects = CustomerQuerys::paginate(25);

        return view('customer_querys.index', compact('customerQuerysObjects'));
    }


    public function create()
    {
        

        return view('customer_querys.create');
    }


    public function store(Request $request)
    {

            
            $data = $this->getData($request);
            
            CustomerQuerys::create($data);

            return redirect()->route('customer_querys.customer_querys.index')
->with('success_message', 'Customer Querys was successfully added.');

    }
    public function apistore(Request $request)
    {

            
            $data = $this->getData($request);
            
            CustomerQuerys::create($data);

            return response('Customer Querys was successfully added.', 200)
                  ->header('Content-Type', 'text/plain');
        

    }



    public function show($id)
    {
        $customerQuerys = CustomerQuerys::findOrFail($id);

        return view('customer_querys.show', compact('customerQuerys'));
    }


    public function edit($id)
    {
        $customerQuerys = CustomerQuerys::findOrFail($id);
        

        return view('customer_querys.edit', compact('customerQuerys'));
    }


    public function update($id, Request $request)
    {

            
            $data = $this->getData($request);
            
            $customerQuerys = CustomerQuerys::findOrFail($id);
            $customerQuerys->update($data);

            return redirect()->route('customer_querys.customer_querys.index')
                ->with('success_message', 'Customer Querys was successfully updated.');

    }


    public function destroy($id)
    {
        try {
            $customerQuerys = CustomerQuerys::findOrFail($id);
            $customerQuerys->delete();

            return redirect()->route('customer_querys.customer_querys.index')
                ->with('success_message', 'Customer Querys was successfully deleted.');
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
            'message' => 'string|min:1|max:255',
            'is_read' => 'boolean|nullable', 
        ];

        
        $data = $request->validate($rules);


        $data['is_read'] = $request->has('is_read');


        return $data;
    }

}

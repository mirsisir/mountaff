<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Exception;

class CategoriesController extends Controller
{


    public function index()
    {
        $categories = Category::paginate(25);

        return view('categories.index', compact('categories'));
    }


    public function create()
    {
        

        return view('categories.create');
    }


    public function store(Request $request)
    {

            
            $data = $this->getData($request);
            
            Category::create($data);

            return redirect()->route('categories.category.index')
                ->with('success_message', 'Category was successfully added.');

    }


    public function show($id)
    {
        $category = Category::findOrFail($id);

        return view('categories.show', compact('category'));
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        

        return view('categories.edit', compact('category'));
    }


    public function update($id, Request $request)
    {

            
            $data = $this->getData($request);
            
            $category = Category::findOrFail($id);
            $category->update($data);

            return redirect()->route('categories.category.index')
                ->with('success_message', 'Category was successfully updated.');

    }


    public function destroy($id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->delete();

            return redirect()->route('categories.category.index')
                ->with('success_message', 'Category was successfully deleted.');
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
                'title' => 'string|min:1|max:255|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Exception;

class PostsController extends Controller
{


    public function index()
    {
        $posts = Post::with('category')->paginate(25);

        return view('posts.index', compact('posts'));
    }


    public function create()
    {
        $categories = Category::pluck('title','id')->all();

        return view('posts.create', compact('categories'));
    }


    public function store(Request $request)
    {

            
            $data = $this->getData($request);
            
            Post::create($data);

            return redirect()->route('posts.post.index')
                ->with('success_message', 'Post was successfully added.');

    }


    public function show($id)
    {
        $post = Post::with('category')->findOrFail($id);

        return view('posts.show', compact('post'));
    }


    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::pluck('title','id')->all();

        return view('posts.edit', compact('post','categories'));
    }


    public function update($id, Request $request)
    {

            
            $data = $this->getData($request);
            
            $post = Post::findOrFail($id);
            $post->update($data);

            return redirect()->route('posts.post.index')
                ->with('success_message', 'Post was successfully updated.');

    }


    public function destroy($id)
    {
        try {
            $post = Post::findOrFail($id);
            $post->delete();

            return redirect()->route('posts.post.index')
                ->with('success_message', 'Post was successfully deleted.');
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
                'author' => 'string|min:1|nullable',
            'title' => 'string|min:1|max:255|nullable',
            'slug' => 'string|min:1|nullable',
            'body' => 'string|min:1|nullable',
            'is_published' => 'boolean|nullable',
            'category_id' => 'nullable', 
        ];

        
        $data = $request->validate($rules);


        $data['is_published'] = $request->has('is_published');


        return $data;
    }

}

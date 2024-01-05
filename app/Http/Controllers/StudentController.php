<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Blog;


class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showBlogList()
    {
        
        $userId = Auth::id();
    
    $blogs = Blog::where('student_id', $userId)
                  ->orderBy('created_at', 'desc')
                  ->get();

    $blogCount = Blog::where('student_id', $userId)->count();

    return view('blogs.index', ['blogs' => $blogs, 'blogCount' => $blogCount]);



    }



     public function createBlogList()
    {
        
        $userId = Auth::id();

        $blogCount = Blog::where('student_id', $userId)->count();

        return view('blogs.create',['blogCount' => $blogCount]);
    }


    public function submitBlog(Request $request)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Save the form data to the database
        $blog = new Blog;
        $blog->student_id = Auth::id();
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');

        // Save the image to the specified location
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/img/blog_images'), $imageName);

        // Save the image path to the database
        $blog->image = $imageName;

        $blog->save();

        return response()->json(['success' => true, 'message' => 'Blog saved successfully']);
    }

}



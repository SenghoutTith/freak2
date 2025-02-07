<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        // return view and pass in the variable
        return view('blog-page', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($request)
    {
        return $request;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'is_active' => 'required',
        ]);

        // save to database Blog
        Blog::create($data);

        // return status 200, message success, and data
        return response()->json([
            'status' => 200,
            'message' => 'Blog created successfully',
            'data' => $data
        ]);
        
    }
}

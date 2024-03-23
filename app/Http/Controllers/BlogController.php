<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Exception;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index(blog $blog)
    {
        return blog::all();
    }

    public function store(Request $request)
    {
        $blog = new blog();
        return $blog::create($request->all());
    }

    public function create()
    {
        return view('store');
    }
}

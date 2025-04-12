<?php

// app/Http/Controllers/PostController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Get all posts
    }

    public function show($id)
    {
        // Show a single post
    }

    public function create(Request $request)
    {
        // Create a new post
    }

    public function update(Request $request, $id)
    {
        // Update an existing post
    }

    public function destroy($id)
    {
        // Delete a post
    }
}

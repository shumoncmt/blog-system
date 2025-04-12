<?php

// app/Http/Controllers/CommentController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Store a new comment
    }

    public function update(Request $request, $id)
    {
        // Update a comment
    }

    public function destroy($id)
    {
        // Delete a comment
    }
}
<?php

// app/Http/Controllers/BookmarkController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookmark;

class BookmarkController extends Controller
{
    public function store(Request $request)
    {
        // Bookmark a post
    }

    public function destroy($id)
    {
        // Remove a bookmark
    }
}
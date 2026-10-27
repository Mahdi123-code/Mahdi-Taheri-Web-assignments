<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate the form input
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:150'],
            'author' => 'required|string|max:100',
            'pages' => 'required|integer|min:1|max:10000',
        ]);

        // 2. Save the book for the authenticated user
        Book::create([
            ...$validated,
            'user_id' => $request->user()->id,
        ]);

        // 3. Redirect with a success message
        return redirect()
            ->route('dashboard')
            ->with('success', 'Book registered successfully!');
    }
}

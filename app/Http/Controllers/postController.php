<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = Post::create($validated);

        return response()->json($post, 201);
    }

    // Display the specified resource.
    public function show($id)
    {
        $post = Post::find($id);
        if ($post) {
            return response()->json($post);
        } else {
            return response()->json(['error' => 'Post not found'], 404);
        }
    }

    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        if ($post) {
            $validated = $request->validate([
                'title' => 'sometimes|required',
                'body' => 'sometimes|required',
            ]);

            $post->update($validated);
            return response()->json($post);
        } else {
            return response()->json(['error' => 'Post not found'], 404);
        }
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $post = Post::find($id);

        if ($post) {
            $post->delete();
            return response()->json(['message' => 'Post deleted successfully']);
        } else {
            return response()->json(['error' => 'Post not found'], 404);
        }
    }
}

<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    public function create()
    {
        return view('admin.post');
    }

    public function index(){
        $posts = Post::all();
        return view('admin.news', compact('posts'));
    }

    public function listPosts(){
        $posts = Post::all();
        return view('blog', compact('posts'));
    }

    public function show($id){
        $post = Post::find($id);

        return view('view-post', compact('post'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tags' => 'nullable|string',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/posts');
        }

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'author' => Auth::user()->name ?? "Admin",
            'image' => $imagePath,
            'tags' => $request->tags
        ]);

        return redirect()->route('admin.news', $post->id)->with('success', 'Post created successfully.');
    }

    /**
     * A method to delete post
     *
     * @param [type] $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        // Delete the associated image if it exists
        if ($post->image) {
            $imagePath = storage_path("app/public/{$post->image}");
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        $post->delete();

        return redirect()->route('admin.news')->with('success', 'Post deleted successfully.');
    }


}

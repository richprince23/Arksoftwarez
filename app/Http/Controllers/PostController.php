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
        try {
            //code...
            $request->validate([
                'title' => 'required|string',
                'content' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'tags' => 'nullable|string',
            ]);

            $imageName = null;

            if ($request->hasFile('image')) {
                $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('/images/posts'), $imageName);
            }

            $post = Post::create([
                'title' => $request->title,
                'content' => $request->content,
                'author' => Auth::user()->name ?? "Admin",
                'image' => 'images/posts/'.$imageName,
                'tags' => $request->tags
            ]);

            return redirect()->route('admin.news', $post->id)->with('success', 'Post created successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'There was a problem adding this post. Please try again');
        }
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
            $imagePath = public_path("images/posts/{$post->image}");
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        $post->delete();

        return redirect()->route('admin.news')->with('success', 'Post deleted successfully.');
    }


}

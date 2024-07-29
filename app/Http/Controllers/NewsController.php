<?php
namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show($id)
    {
        $newsItem = News::find($id);

        if (!$newsItem) {
            return response()->json(['error' => 'News not found'], 404);
        }

        return response()->json($newsItem);
    }

    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function getNews()
    {
        $news = News::all();
        return response()->json($news);
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imageName,
        ]);

        return redirect()->route('news.index')
                         ->with('success', 'News created successfully.');
    }

    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $news->image = $imageName;
        }

        $news->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $news->image,
        ]);

        return redirect()->route('news.index')
                         ->with('success', 'News updated successfully.');
    }

    public function destroy(News $news)
    {
        if ($news->image) {
            unlink(public_path('images') . '/' . $news->image);
        }
        $news->delete();

        return redirect()->route('news.index')
                         ->with('success', 'News deleted successfully.');
    }
}

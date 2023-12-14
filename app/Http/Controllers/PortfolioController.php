<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio', compact('portfolios'));
    }
    public function list()
    {
        $portfolios = Portfolio::all();
        return view('portfolio', compact('portfolios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/portfolios'), $imageName);

        Portfolio::create([
            'name' => $request->name,
            'image' => 'images/portfolios/'.$imageName,
        ]);

        return redirect()->back()->with('success', 'Portfolio added successfully.');
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        unlink(public_path($portfolio->image));
        $portfolio->delete();

        return redirect()->back()->with('success', 'Portfolio deleted successfully.');
    }
}

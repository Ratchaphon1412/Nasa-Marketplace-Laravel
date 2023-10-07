<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

use App\Models\Project;

use Illuminate\Support\Facades\Auth;


class MarketPlaceController extends Controller
{
    //
    public function index(Request $request)
    {

        $categories = Category::all();

        return view('marketplace.index', compact('categories'));
    }

    public function details(Request $request)
    {

        return view('marketplace.details');
    }
    public function create(Request $request)
    {


        $categories = Category::all();

        return view('marketplace.create-project', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required|max:255',
            'image_poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
            'sub_category_id' => 'required',

        ]);

        $imageName = $request->file('image_poster')->getClientOriginalName();
        $pathImage = $request->file('image_poster')->storeAs('project/posters', $imageName, 'public');


        $project = Project::create(
            [
                'name' => $request->name,
                'description' => $request->description,
                'sub_category_id' => $request->sub_category_id,
                'owner_id' => Auth::user()->id,
                'image_poster' => $pathImage,
                'content' => $request->content,

            ]
        );
        return redirect()->route('dashboard');
    }
}

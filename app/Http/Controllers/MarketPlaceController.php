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


        $imageName = $request->file('image_poster')->getClientOriginalName();
        $pathImage = $request->file('image_poster')->storeAs('project/posters', $imageName, 'public');


        $project = Project::create(
            [
                'title' => $request->name,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'user_id' => Auth::user()->id,
                'image_poster' => $pathImage,
            ]
        );


        return view('marketplace.create-project');
    }
}

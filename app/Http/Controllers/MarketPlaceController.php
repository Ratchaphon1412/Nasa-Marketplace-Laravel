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
        $projects = Project::all();

        return view('marketplace.index', compact('categories', 'projects'));
    }

    public function details(Project $project)
    {

        return view('marketplace.details', compact('project'));
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

    public function update(Request $request, Project $project)
    {

        $project = Project::find($project->id);

        $name = $project->name;
        $description = $project->description;
        $sub_category_id = $project->sub_category_id;
        $owner_id = $project->owner_id;
        $image_poster = $project->image_poster;
        $content = $project->content;

        if ($request->name != null) {
            $name = $request->name;
        }
        if ($request->description != null) {
            $description = $request->description;
        }
        if ($request->sub_category_id != null) {
            $sub_category_id = $request->sub_category_id;
        }
        if ($request->owner_id != null) {
            $owner_id = $request->owner_id;
        }
        if ($request->image_poster != null) {

            $imageName = $request->file('image_poster')->getClientOriginalName();
            $image_poster = $request->file('image_poster')->storeAs('project/posters', $imageName, 'public');
        }
        if ($request->content != null) {
            $content = $request->content;
        }




        $project->update(
            [
                'name' => $name,
                'description' => $description,
                'sub_category_id' => $sub_category_id,
                'owner_id' => $owner_id,
                'image_poster' => $image_poster,
                'content' => $content,

            ]
        );

        return redirect()->route('dashboard');
    }

    public function delete(Project $project)
    {
        $project->delete();
        return redirect()->route('dashboard');
    }

    public function projectOwner()
    {
        $projects = Project::where('owner_id', Auth::user()->id)->get();
        return view('dashboard', compact('projects'));
    }
}

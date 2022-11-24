<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use App\Models\Post;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::paginate(10);

        return view('dashboard.sections.list', compact('sections')); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $posts = Post::all();
            return view('dashboard.sections.create',compact('posts')); 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $section = new Section();
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'description' => 'required',
            'post_id' => 'required'
        ]);

        $data['user_id'] = auth()->user()->id;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image');
            $filename = $request->file('image')->getClientOriginalName();
            $data['image']->move(public_path('images'), $filename);
            $data['image'] = $filename;
        }

        $section = Section::create($data);

        return redirect()->route('dashboard.sections')->with('message', 'section created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        $data = Section::find($section->id);
        return view('dashboard.sections.edit', ['section' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        if($section->id) {
            $data = Section::find($section->id);
            $data->delete();
            return redirect()->route('dashboard.sections')->with('message', 'Section deleted successfully');
        }
        return redirect()->route('dashboard.sections')->with('message', 'Section not found');
    }
}

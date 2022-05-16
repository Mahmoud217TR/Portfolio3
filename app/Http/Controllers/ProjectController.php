<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Attachment;
use Illuminate\Support\Facades\File;
use Image;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin')->except('index', 'show');
    }

    private function removeDir($path){
        if(File::isDirectory($path)){
            File::cleanDirectory($path);
            File::deleteDirectory($path);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->paginate(15);
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Project::class);
        return view('projects.create', ['project'=>new Project]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $this->authorize('create', Project::class);
        $project = Project::create($request->all());

        $thumb = $request->thumb;
        $original_url = $thumb->store('uploads/'.$project->title.'/original','public'); // Storing the Original thumb
        $current_url = $thumb->store('uploads/'.$project->title,'public'); // Storing the thumb

        $img = Image::make('storage/'.$current_url); // Fitting the thumb
        $img->fit(733, 400)->save();

        Attachment::create([
            'url' => asset('/storage/'.$current_url),
            'original' => asset('/storage/'.$original_url),
            'project_id' => $project->id,
            'thumb' => true,
        ]);
        return redirect()->route('attachment.create',$project);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $project->with('attacments');
        return view('projects.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $this->authorize('update', $project);
        $project->with('attachments');
        return view('projects.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $this->authorize('update', $project);
        $project->update($request->all());
        return redirect()->route('project.show',$project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $this->authorize('delete',$project);
        $this->removeDir('storage/uploads/'.$project->title);
        $project->delete();
        return redirect()->route('project.index');
    }
}

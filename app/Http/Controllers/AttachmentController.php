<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Http\Requests\StoreAttachmentRequest;
use App\Http\Requests\UpdateAttachmentRequest;
use App\Models\Project;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Image;

class AttachmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project)
    {
        $project->with('attachments');
        return view('attachments.create',compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAttachmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttachmentRequest $request, Project $project)
    {
        $images = Collection::wrap($request->file);
        $images->each(function($image) use ($project){
            $original_url = $image->store('uploads/'.$project->title.'/original','public'); // Storing the original image
            $current_url = $image->store('uploads/'.$project->title,'public'); // Storing the image

            $img = Image::make('storage/'.$current_url); // Fitting the image
            $img->fit(733, 400)->save();

            Attachment::create([
                'url' => asset('/storage/'.$current_url),
                'original' => asset('/storage/'.$original_url),
                'project_id' => $project->id,
                'thumb' => false,
            ]);

        });
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function show(Attachment $attachment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function edit(Attachment $attachment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttachmentRequest  $request
     * @param  \App\Models\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttachmentRequest $request)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attachment $attachment)
    {
        //
    }
}

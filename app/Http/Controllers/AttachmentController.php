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

    private function get_real_path($path){
        return substr($path, strpos($path,"storage"), strlen($path));
    }

    private function removeFile($path){
        $real_path = $this->get_real_path($path);
        if($real_path){
            if(File::exists($real_path)){
                File::delete($real_path);
            }
        }
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
    public function edit(Project $project)
    {
        $project->with('attachments');
        return view('attachments.edit',compact('project'));
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
        if($attachment->project->thumb()->id == $attachment->id){
            $new_thumb = $attachment->project->attachments()->where('id','!=',$attachment->id)->first();
            if($new_thumb){
                $new_thumb->makeThumb();
            }else{
                return back();
            }
        }
        $this->removeFile($attachment->url);
        $this->removeFile($attachment->original);
        $attachment->delete();
        return back();
    }

    public function thumb(Attachment $attachment)
    {
        $attachment->makeThumb();
        return redirect()->route('project.show',$attachment->project);
    }
}

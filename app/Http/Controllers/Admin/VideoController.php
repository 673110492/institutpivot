<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::all();
           return view('admin.acceuil.video.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'titre' => 'required|string',
            'photo' => 'required',
            'video' => 'required'
        ]);
        $requestData = $request->except('token');
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
            ->store('uploads', 'public');
        }
        if ($request->hasFile('video')) {
            $requestData['video'] = $request->file('video')
            ->store('uploads', 'public');
        }
        // dd($requestData);
        $video = Video::create($requestData);
        return to_route('video.index')->with('message', 'Video ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $video = Video::findOrFail($id);
        $requestData = $request->all();
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
            ->store('uploads', 'public');
        }
        if ($request->hasFile('video')) {
            $requestData['video'] = $request->file('video')
            ->store('uploads', 'public');
        }
        $video->update($requestData);

        return back()->with('message', 'Video modifiée avec succes!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();
        return back()->with('message', 'Suppression effectuée avec succes');
    }
    public function statut($id)
    {
        $video = Video::findOrFail($id);
        if($video->statut == true){
            $video->update(['statut' => false]);
            return back()->with('message', 'video désactivé avec succes!');
        }else{
            $video1 = Video::where('statut',true)->get();
            if($video1->count() != 0){
                foreach($video1 as $item){
                    $item->update(['statut' => false]);
                }
            }
            $video->update(['statut' => true]);
            return back()->with('message', 'video activé avec succes!');
        }
    }
}

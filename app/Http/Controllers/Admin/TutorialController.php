<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TutorialRequest;
use App\Models\Admin\Media;
use App\Models\Admin\ProLang;
use App\Models\Admin\Tutorial;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    //
   public function index()
   {
       $tutorial = Tutorial::with('prolang')->get(); // Eager load the relationship
       return view('admin.tutorial.index', compact('tutorial'));
   }


   public function create(){
       $prolangs = Prolang::all();
       return view('admin.tutorial.create', compact('prolangs'));
   }

   public function store(TutorialRequest $request){

       $tutorial = Tutorial::create($request->only(['prolangs_id', 'title', 'content']));


       // Handle media uploads
       if ($request->hasFile('media')) {
           foreach ($request->file('media') as $file) {
               // Determine file type
               $fileType = str_starts_with($file->getMimeType(), 'image/') ? 'image' : 'video';

               // Store file
               $path = $file->store('uploads/media', 'public');

               // Create media record
               Media::create([
                   'file_path' => $path,
                   'file_type' => $fileType,
                    'tutorial_id' => $tutorial->id // Corrected variable name
               ]);
           }
       }



         return redirect()->route('tutorials.index')
           ->with('success', 'Tutorial created successfully.');



   }

   public function show($id){
   $toutorial = Tutorial::with('prolang', 'media')->findOrFail($id);
   return view('admin.tutorial.view', compact('toutorial'));
   }

   public function edit($id){

   }

   public function update(Request $request, $id){

   }

   public function destroy($id){

   }



}

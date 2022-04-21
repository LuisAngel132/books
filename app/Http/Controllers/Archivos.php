<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Archivos extends Controller
{
    public function store(request $request){
       $file = $request->asFile('doctorProfileImageFile');
       $fileName = (string) Str::uuid();
       $folder = config('filesystems.disks.do.folder');

       Storage::disk('do')->put(
         "{$folder}/{$fileName}",
         file_get_contents($file)
       );

       return response()->json(['message' => 'File uploaded'], 200);
    }
}

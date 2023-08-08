<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KMLController extends Controller
{
    public function showUploadForm()
    {
        return view('Pages.Upload.upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'kml_file' => 'required',
        ]);

        $kmlFile = $request->file('kml_file');
        $filePath = $kmlFile->store('uploads', 'public');

        return redirect()->route('map')->with('file_path', $filePath);
    }

    public function showMap()
    {
        $filePath = session('file_path');
        return view('Pages.Map.map', compact('filePath'));
    }


}

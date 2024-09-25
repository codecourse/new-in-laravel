<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function index()
    {
        return view('files.index', [
            'files' => File::latest()->get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|max:5000'
        ]);

        $upload = $request->file('file');

        File::create([
            'name' => $upload->getClientOriginalName(),
            'path' => $upload->storeAs('uploads', $upload->getClientOriginalName())
        ]);

        return back();
    }

    public function download(File $file)
    {
        $url = Storage::temporaryUrl($file->path, now()->addMinutes(10));

        return redirect($url);
    }
}

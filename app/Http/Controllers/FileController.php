<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view('files.index', compact('files'));
    }

    public function create()
    {
        return view('files.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:jpg,jpeg,png,bmp,pdf|max:20000',
    ]);

    $fileModel = new File;

    if ($request->file()) {
        $fileName = time().'_'.$request->file->getClientOriginalName();
        $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

        $fileModel->name = $fileName;
        $fileModel->path = '/storage/' . $filePath;
        $fileModel->save();

        return redirect()->route('files.index')
            ->with('success','File has been uploaded.');
    }
}

    public function edit($id)
    {
        $file = File::findOrFail($id);
        return view('files.edit', compact('file'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'file' => 'mimes:jpg,jpeg,png,bmp,pdf|max:20000',
    ]);

    $file = File::findOrFail($id);

    if ($request->file()) {
        // Delete old file
        Storage::disk('public')->delete('uploads/'.$file->name);

        // Upload new file
        $fileName = time().'_'.$request->file->getClientOriginalName();
        $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

        $file->name = $fileName;
        $file->path = '/storage/' . $filePath;
        $file->save();
    }

    return redirect()->route('files.index')
        ->with('success', 'File has been updated.');
}

    public function destroy($id)
    {
        $file = File::findOrFail($id);

        // Delete file from storage
        Storage::disk('public')->delete('uploads/'.$file->name);

        // Delete file record from database
        $file->delete();

        return redirect()->route('files.index')
            ->with('success', 'File has been deleted.');
    }
}

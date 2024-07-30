
@extends('layouts.template')


@include('layouts.navbar')   





<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <h2>Files List</h2>
    <a href="{{ route('files.create') }}">Crear documentos </a>
    <ul>
        @foreach ($files as $file)
            <li>
                {{ $file->name }} - 
                <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                <a href="{{ $file->path }}" target="_blank">View</a> - 
</button>
<button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
<a href="{{ route('files.edit', $file->id) }}">Edit</a> - 
</button>

              
                <form  class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"action="{{ route('files.destroy', $file->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>

@extends('layouts.template')

@include('layouts.navbar')   

<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <h2>Crear Nuevo Archivo</h2>
    <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
      

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
  Subir Archivo
</button>
        
    </form>
</body>
</html>

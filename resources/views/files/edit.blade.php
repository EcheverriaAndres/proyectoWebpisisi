@extends('layouts.template')


@include('layouts.navbar')   





<!DOCTYPE html>
<html>
<head>
    <title>Edit File</title>
</head>
<body>
    <h2>Edit File</h2>
    <form action="{{ route('files.update', $file->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="file" name="file">
        <button type="submit">Update</button>
    </form>
</body>
</html>

@extends('layouts.contentNav')

@section('title', 'web content')

@section('content')
    <div class="cpage">
        @if (session()->has('status'))
            <p class="alert alert-success">{{ session('status') }}</p>
        @endif
        <form action="{{ route('content.update') }}" method="POST" enctype="multipart/form-data">
            @method('post')
            @csrf
            <div class="page">
                <h4>WRITE WEB CONTENT</h4>
                <input type="number" name="id" value="{{ $content->id }}" id="">
                <hr>
                <p>Page</p>
                <p>
                    <select name="page" id="page">
                        @foreach ($pages as $p)
                            <option value="{{ $p->page }}">{{ strtolower($p->page) }}</option>
                        @endforeach
                    </select>
                </p>
                <p>Section</p>
                <p><input type="text" name="section" id="section" value="{{ $content->section }}"></p>
                <p>Title</p>
                <p><input type="text" name="title" id="title" value="{{ $content->title }}"></p>
                <p>Content</p>
                <p><textarea name="content" id="content" rows="8">{{ $content->content }}</textarea></p>
                <p>Image</p>
                <p><input type="file" name="image" id="image"></p>    
                <p><button class="btn btn-primary">UPDATE</button></p>
            </div>
        </form>
    </div>

@endsection
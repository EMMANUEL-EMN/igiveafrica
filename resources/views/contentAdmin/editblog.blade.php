@extends('layouts.contentNav')

@section('title', 'web content')

@section('content')
    <div class="cpage">
        <form action="{{ route('blog.update') }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="page">
                <input type="text" name="id" hidden value="{{ $blog->id}}" id="">
                <h4>EDIT BLOG</h4>
                <hr>
                <p>Title</p>
                <p><input type="text" name="title" id="title" value="{{ $blog->title }}"></p>
                <p>introduction</p>
                <p><textarea name="content" id="content" rows="8" >{{ $blog->introduction }}</textarea></p>
                <P>Heading</P>
                <p><input type="text" name="heading1" id="head1" value="{{ $blog->heading1 }}"></p>
                <p>Content</p>
                <p><textarea name="content1" id="content" rows="8">{{ $blog->content1 }}</textarea></p>
                <P>Heading</P>
                <p><input type="text" name="heading2" id="head1" value="{{ $blog->heading2 }}"></p>
                <p>Content</p>
                <p><textarea name="content2" id="content" rows="8">{{ $blog->content2 }}</textarea></p>
                <P>Heading</P>
                <p><input type="text" name="heading3" id="head1" value="{{ $blog->heading3 }}"></p>
                <p>Content</p>
                <p><textarea name="content3" id="content" rows="8">{{ $blog->content3 }}</textarea></p>
                <p>Image</p>
                <p><input type="file" name="image" id="image"></p>    
                <p><button class="btn btn-primary">PUBLISH</button></p>
            </div>
        </form>
    </div>
@endsection
@extends('layouts.contentNav')

@section('title', 'blogs')

@section('content')
    <div class="cpage">
        @if (session()->has('status'))
            <p class="alert alert-success">{{ session('status') }}</p>
        @endif
        <form action="{{ route('blog.add') }}" method="POST" enctype="multipart/form-data">
            @method('post')
            @csrf
            <div class="page">
                <h4>WRITE BLOG</h4>
                <hr>
                <p>Title</p>
                <p><input type="text" name="title" id="title"></p>
                <p>introduction</p>
                <p><textarea name="content" id="content" rows="8"></textarea></p>
                <P>Heading</P>
                <p><input type="text" name="heading1" id="head1"></p>
                <p>Content</p>
                <p><textarea name="content1" id="content" rows="8"></textarea></p>
                <P>Heading</P>
                <p><input type="text" name="heading2" id="head1"></p>
                <p>Content</p>
                <p><textarea name="content2" id="content" rows="8"></textarea></p>
                <P>Heading</P>
                <p><input type="text" name="heading3" id="head1"></p>
                <p>Content</p>
                <p><textarea name="content3" id="content" rows="8"></textarea></p>
                <p>Image</p>
                <p><input type="file" name="image" id="image"></p>    
                <p><button class="btn btn-primary">PUBLISH</button></p>
            </div>
        </form>
    </div>
    <div class="cform">
        <h4>BLOGS</h4>
        <div class="cont">
            <table>
                <tr>
                    <th>Title</th>
                    <th>Created at</th>
                    <th>Updated on</th>
                    <th>Action</th>
                </tr>
                @foreach ($blogs as $co)
                    <tr>
                        <td>{{ $co->title }}</td>
                        <td>{{ $co->created_at }}</td>
                        <td>{{ $co->updated_at }}</td>
                        <td>
                            <a href="/deleteBlog/{{ $co->id }}" class="btn btn-danger">
                                <i class="fa fa-trash-alt"></i>
                            </a>
                            <a href="/editBlog/{{ $co->id }}" class="btn btn-success">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
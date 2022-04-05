@extends('layouts.contentNav')

@section('title', 'web content')

@section('content')
    <div class="cpage">
        @if (session()->has('status'))
            <p class="alert alert-success">{{ session('status') }}</p>
        @endif
        <form action="{{ route('content.store') }}" method="POST" enctype="multipart/form-data">
            @method('post')
            @csrf
            <div class="page">
                <h4>WRITE WEB CONTENT</h4>
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
                <p>
                    <select name="section" id="section">
                        <option value="intro">Intro</option>
                        <option value="top">Top</option>
                        <option value="donor">Donor</option>
                        <option value="center">center</option>
                        <option value="bottom">Bottom</option>
                    </select>
                </p>
                <p>Title</p>
                <p><input type="text" name="title" id="title"></p>
                <p>Content</p>
                <p>
                    <textarea name="content" id="content" rows="8"></textarea>
                </p>
                <p>Image</p>
                <p><input type="file" name="image" id="image"></p>
                <p><button class="btn btn-primary">PUBLISH</button></p>
            </div>
        </form>
    </div>
    <div class="cform">
        <h4>WEB CONTENT</h4>
        <div class="cont">
            <table>
                <tr>
                    <th>Page</th>
                    <th>Section</th>
                    <th>Title</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
                @foreach ($contents as $co)
                    <tr>
                        <td>{{ $co->page }}</td>
                        <td>{{ $co->section }}</td>
                        <td>{{ $co->title }}</td>
                        <td>{{ $co->created_at }}</td>
                        <td>
                            <a href="/deleteContent/{{ $co->id }}" class="btn btn-danger">
                                <i class="fa fa-trash-alt"></i>
                            </a>
                            <a href="/editContent/{{ $co->id }}" class="btn btn-success">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

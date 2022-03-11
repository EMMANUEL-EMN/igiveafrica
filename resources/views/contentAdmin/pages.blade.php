@extends('layouts.contentNav')

@section('title', 'add pages')

@section('content')
    <div class="cform">
        @if (session()->has('status'))
            <p class="alert alert-success">{{ session('status') }}</p>
        @endif
        <form action="{{ route('pages.add') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="page">
                <h4>ADD PAGE</h4>
                <hr>
                <p>Page</p>
                <p><input type="text" name="page" id="page"></p>
                <p><button class="btn btn-primary">Submit</button></p>
            </div>
        </form>
    </div>
    <div class="cform">
        <h4>ALL PAGES</h4>
        <table>
            <tr>
                <th>Page</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Action</th>
            </tr>
            @foreach ($pages as $p)
                <tr>
                    <td>{{ $p->page }}</td>
                    <td>{{ $p->created_at }}</td>
                    <td>{{ $p->updated_at }}</td>
                    <td>
                        <a href="/c_delete_pages/{{ $p->id }}" class="btn btn-danger">
                            <i class="fa fa-trash-alt"></i>
                        </a>
                        {{-- <a href="/c_pages/{{ $p->id}}" class="btn btn-success">
                            <i class="fa fa-edit"></i>
                        </a> --}}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
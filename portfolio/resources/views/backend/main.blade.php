@extends('layouts/admin-layout');

@section('main')

{{-- Breadcamp --}}
<nav aria-label="breadcrumb" class="">
    <h1 class="mt-4 text-center">{{ strtoupper(substr(strrchr(url()->current(),"/"),1)) }}</h1>
    <ol class="breadcrumb py-2 px-2">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Admin</a></li>
        <li class="breadcrumb-item"><a
                href="{{ url('/admin/'.substr(strrchr(url()->current(),"/"),1)) }}">{{ ucfirst(substr(strrchr(url()->current(),"/"),1)) }}</a>
        </li>
    </ol>
</nav>
{{-- Breadcamp --}}


<div class="container">
    <div class="row">
        {{-- <h2>Background Image</h2>
        <div class="text-center">
            <img src="{{ asset('assets/img/header-bg.jpg') }}" class="img-fluid img-thumbnail" alt="Background Image">
    </div> --}}

    @if(session()->has('msg'))
    <div class="alert alert-success">
        {{ session()->get('msg') }}
    </div>
    @endif


    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold ">Main Form Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">

                    <form action="{{ url('/admin/main/add-data') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sub Title</label>
                            <input type="text" name="subtitle" class="form-control" id="subtitle"
                                placeholder="Enter Sub title">
                            @error('subtitle')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Background Image</label>
                            <input type="file" name="bgimage" class="form-control" id="title">
                            @error('bgimage')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Resume</label>
                            <input type="file" name="resume" class="form-control" id="resume">
                            @error('resume')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <input type="submit" class="btn btn-primary" value="Add Data">
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">Add
            Data</a>

    </div>


    {{-- End Of Modal Form --}}



    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Subtitle</th>
                <th scope="col">Resume</th>
                <th scope="col">Background Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($mainData as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <th scope="row">{{ $item->title }}</th>
                <th scope="row">{{ $item->sub_title }}</th>
                {{-- <th><img src="{{ $item->resume }}" alt=""></th> --}}

                {{-- <th>{{ $item->bg_image }}</th> --}}

                <th>{{$item->resume}}</th>
                <th><img style="height: 100px ; width: 100px" class="img img-thumbnail"
                        src="{{ asset($item->bg_image) }}" alt="backgroung"></th>

                <td>
                    <a href="{{ url('/admin/main/delete-data/'.$item->id) }}" class="btn btn-info">Edit</a>
                    {{-- <a href="{{ url('/admin/main/edit-data/'.$item->id) }}" class="btn btn-danger">Delete</a> --}}
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>

    

</div>
</div>


@endsection

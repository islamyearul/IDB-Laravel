@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Category List</div>
                 <table class="table">
                     <thead>
                         <tr>
                             <th>ID</th>
                             <th>User ID</th>
                             <th>Category Name</th>
                             <th>Action</th>
                          
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($cats as $item)
                         <tr>
                            <td scope="row">{{ $item->id }}</td>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>
                                <a href="" class="btn btn-info">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                            
                        </tr>
                         @endforeach
                         
                   
                     </tbody>
                 </table>
            </div>
        </div>
    </div>
</div>
@endsection
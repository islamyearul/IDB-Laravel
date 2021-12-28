@extends('layouts/admin-layout');

@section('service')
{{-- Breadcamp --}}
<nav aria-label="breadcrumb" class="">
    <h1 class="mt-4 text-success">{{ strtoupper(substr(strrchr(url()->current(),"/"),1)) }}</h1>
    <ol class="breadcrumb py-2 px-2">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Admin</a></li>
        <li class="breadcrumb-item "><a class="text-success" href="{{ url('/admin/'.substr(strrchr(url()->current(),"/"),1)) }}">{{ ucfirst(substr(strrchr(url()->current(),"/"),1)) }}</a></li>
    </ol>
</nav>
{{-- End Vreadcamp --}}

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-Primary float-end" data-toggle="modal" data-target="#exampleModal">ADD DATA</button>
                </div>
                <div class="card-body">
                    <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Service Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                
                              <form action="{{ url('/admin/service/add-data') }}" method="post">
                                @csrf  
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" @isset() @endisset id="name" name="name"  placeholder="Enter name">
                                    @error('name')
                                         <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label><br>                                   
                                   <textarea class="form-control" name="description" id="description" cols="80" rows="5" placeholder="Please Write Description "></textarea>
                                   @error('description')
                                     <div class="alert alert-danger">{{ $message }}</div>
                                   @enderror
                                </div>                            
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary srvcmodalclose" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                                </div>

                              </form>
                            </div>
                            </div>
                        </div>

                        
                </div>
            </div>
        </div>
    </div>
</div>

{{-- edit modal  --}}
                    
<div class="modal fade" id="Serviceeditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Service Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        
      <form action="{{ url('/admin/service/update-data') }}" method="post">
        @csrf  
        {{-- @method('PUT') --}}
        <input type="hidden" name="id" id="svc_id" value="">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="edt_name" name="name" value="" >
        </div>
        <div class="form-group">
            <label for="description">Description</label><br>
            
           <textarea class="form-control" name="description" id="edt_description" cols="80" rows="5"></textarea>
        </div>                            
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
        </div>

      </form>
    </div>
    </div>
</div>
{{--End edit modal  --}}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @if(session('success'))
                        <h3 class="alert alert-success">
                            {{ session('success') }}
                        </h3>
                    @elseif (session('deletesms'))
                        <h3 class="alert alert-danger">
                            {{ session('deletesms') }}
                        </h3>                    
                    @endif
                </div>
                <div class="card-body">
                                        
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col" colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($serData as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <th scope="row">{{ $item->name }}</th>
                                <th scope="row">{{ $item->description }}</th>
                                <th scope="row">
                                    <button type="button" id="editbtn" value="{{ $item->id }}" class="btn btn-success btn-sm editbtn">edit</button>
                                   
                                </th>
                                
                                <th scope="row">
                                    <a href="{{ url('/admin/service/delete-data/'.$item->id ) }}" onclick=" return confirm('Are You Sure??')" class="btn btn-danger btn-sm">delete</a>
                                </th>                               
                            </tr>
                            @endforeach              
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

@if (count($errors) > 0)
<script type="text/javascript">
    $( document ).ready(function() {
         $('#exampleModal').modal('show');
    });
</script>
@endif

    <script>
        $(document).ready(function(){

            $(".editbtn").click(function(){

                $srv_id = $(this).val();
                //alert($std_id);
                $('#Serviceeditmodal').modal('show');

                $.ajax({
                    type: "get",
                    url: "/admin/service/edit-data/"+$srv_id,
                    success: function (response) {
                         $('#svc_id').val(response.serviceData.id);
                         $('#edt_name').val(response.serviceData.name);
                         $('#edt_description').val(response.serviceData.description);

                        //alert(response);
                    }
                });
              
            })
        })

    </script>


@endsection


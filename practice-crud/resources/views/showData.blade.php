<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Laravel Crud</title>
  </head>
  <body>
   

  <div class="container my-5">
      <div class="text-center py-2">
          <a href="{{ url('/add-data') }}" class="btn btn-primary">add Data</a>
      </div>
      @if(Session::has('msg'))
        <p class="text-dark">{{ Session::get('msg') }}</p>
      @endif
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($alldata as $data)
             <tr>
                <th scope="row">{{ $data->id }}</th>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>
                  <a href="{{ url('/edit-data/'.$data->id) }}" class="btn btn-primary">Edit</a>
                  <a href="{{ url('/delete-data/'.$data->id) }}" onclick="return confirm('Are You Sure?')" class="btn btn-danger">Delete</a>
                </td>
              </tr>
               
            @endforeach
        
        </tbody>
      </table>
      {{$alldata->links() }}

  </div>



















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
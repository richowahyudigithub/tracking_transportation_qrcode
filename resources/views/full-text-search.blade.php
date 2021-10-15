<!DOCTYPE html>
<html>
<head>
     
    <meta charset="utf-8">
    <title>Laravel 7, 6, 5 Full Text Search Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
 
   <body>
    <div class="container mt-5">
        <div class="card">
          <div class="card-header">
            <h1>Laravel 7/6 Full Text Search Tutorial From Scratch</h1>
          </div>
          <div class="card-body">
                    <form method="GET" action="{{ url('full-text-search') }}">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="term" class="form-control" placeholder="Search">
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
               <br/>
               <table class="table table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    @if($lists)
                        @foreach($lists as $list)
                        <tr>
                            <td>{{ $list->id }}</td>
                            <td>{{ $list->name }}</td>
                            <td>{{ $list->email }}</td>
                        </tr>
                        @endforeach
                    @else
                    <tr>
                        <td colspan="3" class="text-danger">Result not found.</td>
                    </tr>
                    @endif
              </table>
          </div>
        </div>
    </div>
</body>
</html>
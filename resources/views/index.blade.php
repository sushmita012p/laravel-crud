
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>User</title>
</head>
<body>
<a href="{{route('users.create')}}"><button class="btn btn-primary float-right">Create User</button></a>
@if(session()->has('success'))
  <h1>{{session()->get('success')}}</h1>
@endif
<table class="table">
  <thead>
    
    <tr>
      <th >Firstname</th>
      <th >Lastname</th>
      <th >Email</th>
      <th>Contact</th>
      <th>Action</th>
    </tr>
   
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
      <td>{{$user->first_name}}</td>
      <td>{{$user->last_name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->contact_number}}</td>

      <td> <a href="{{route('users.delete', ['id'=> $user->id])}}"><button class="btn btn-danger">Delete</button></a>
      <td> <a href="{{route('users.edit', ['id'=> $user->id])}}"><button class="btn btn-success">Edit</button></a>

    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>


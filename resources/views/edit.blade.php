<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center">Update users</h1>
       
       <form action="{{route('users.update',['id'=> $users->id])}}" method= "post">
           @csrf
           @method('PUT')
           <div class="form-group">
       <label for="exampleInputEmail1">First Name</label>
       <input type="text" name="first_name" class="form-control" value="{{$users->first_name}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter firstname">
     <span class="text-danger"> @error('first_name') {{$message}} @enderror</span>
      </div>
     <div class="form-group">
       <label for="exampleInputEmail1">Last Name</label>
       <input type="text" name="last_name" class="form-control" value="{{$users->last_name}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter lastname">
       <span class="text-danger"> @error('last_name') {{$message}} @enderror</span>
      </div>
     <div class="form-group">
       <label for="exampleInputEmail1">Email address</label>
       <input type="email" name="email" class="form-control" value="{{$users->email}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
       <span class="text-danger"> @error('email') {{$message}} @enderror</span>
      </div>
     <div class="form-group">
       <label for="exampleInputPassword1">Password</label>
       <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
       <span class="text-danger"> @error('password') {{$message}} @enderror</span>
      </div>
     
     <div class="form-group">
       <label for="exampleInputEmail1">Contact Number</label>
       <input type="number" name="contact_number" class="form-control" value="{{$users->contact_number}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter contact">
       <span class="text-danger"> @error('contact_number') {{$message}} @enderror</span>
      </div>
     <div class="form-group form-check">
       <input type="checkbox" class="form-check-input" id="exampleCheck1">
       <label class="form-check-label" for="exampleCheck1">Check me out</label>
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
   </form>
    </div>

<a href="{{route('users.index')}}">Back to homepage</a>
</body>
</html>
    

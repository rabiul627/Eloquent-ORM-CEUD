<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  <title>Stylish Table</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom styles */
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 500px;
      margin: 50px auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }
    .form-control {
      border: 2px solid #ced4da;
      border-radius: 20px;
      box-shadow: none;
    }
    .form-control:focus {
      border-color: #007bff;
      box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      border-radius: 20px;
      padding: 10px 20px;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
    .custom-input {
      border: 2px solid #ced4da;
      border-radius: 5px;
      padding: 10px;
      font-size: 16px;
      transition: border-color 0.2s;
    }
    .custom-input:focus {
      border-color: #007bff;
      outline: none;
      box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
    }
  </style>
</head>
<body>
   <div class="container">
     <div class="row">
        <div class="bg-primary text-center bg-primary bg-gradient text-white p-2 pb-3">
          <h1 class="">Eloquent CRUD</h1>
        </div>
     </div>
     <div class="row">
        @yield('title')
     </div>
     @if (session('key'))
     <div class="alert alert-success text-center text-bold">
         {{ session('key') }}
     </div>
    @endif
    @if (session('update'))
     <div class="alert alert-success text-center text-bold">
         {{ session('update') }}
     </div>
    @endif
    @if (session('delete'))
    <div class="alert alert-success text-center text-bold">
        {{ session('delete') }}
    </div>
   @endif
     <div class="row justify-content-center">
       <div class="col-8">
         @yield('content')
       </div>
     </div>
   </div>
</body>
</html>
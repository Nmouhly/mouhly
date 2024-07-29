<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>membres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
     <h2 class="text-center">Ajouter un membre</h2> 
     <hr>  
    <form action="/membre/add" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">First name</label>
            <input type="text" name="first" class="form-control" value="{{@old('first')}}" id="exampleFormControlInput1" placeholder="First name">
          </div>
          @error('first')
          <span class="text-danger"  > {{$message}}</span>
          @enderror
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">last name</label>
            <input type="text"  name="last" class="form-control" value="{{@old('last')}}"  id="exampleFormControlInput1" placeholder="last name">
          </div>
          @error('last')
          <span class="text-danger"  > {{$message}}</span>
          @enderror
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{@old('email')}}" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          @error('email')
          <span class="text-danger"  > {{$message}}</span>
          @enderror
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Team's id</label>
            <input type="text" name="team" class="form-control" id="exampleFormControlInput1" placeholder="last name">
          </div>
          <label for="exampleDataList" class="form-label">Status</label>
<input name="status" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
<datalist id="datalistOptions">
  <option value="Maître de Conférences">
  <option value="Ingénieur de Recherche">
  <option value="Professeur des Universités">
  <option value="Doctorant">
  <option value="Post Doctorant">
</datalist>
@error('status')
           <span class="text-danger"  > {{$message}}</span>
          @enderror
<button type="submit" class="btn btn-primary ">Ajouter</button>
</form> 
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
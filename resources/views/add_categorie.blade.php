<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
<div class="col-12">
    <form method="post" action="{{route('addCategorie')}}">
        @csrf
        <div class="form-group">
          <label for="">Code </label>
          <input type="text" class="form-control" id=""  name="code">
        </div>
        <div class="form-group">
            <label for="">nom </label>
            <input type="text" class="form-control" id=""  name="nom">
          </div>
          <div class="form-group">
            <label for="">Description </label>
            <input type="text" class="form-control" id=""  name="description">
          </div>
       
     
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

    </div>
</body>
</html>
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
    <h2> Liste des Categories:</h2>
    <a type="button" class="btn btn-outline-primary m-5" href="{{route('addCategorieForm')}}">Ajouter Une categorie</a>
    <table class="table ">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Code</th>
            <th scope="col">Nom</th>
           
          </tr>
        </thead>
        <tbody>
         @foreach($categories as $cat)
            
      
          <tr>
            <th scope="row">{{$cat->id}}</th>
            <td>{{$cat->code}}</td>
            <td>{{$cat->nom}}</td>
         
          </tr>
          @endforeach
        </tbody>
      </table>
</div>

    </div>
</body>
</html>
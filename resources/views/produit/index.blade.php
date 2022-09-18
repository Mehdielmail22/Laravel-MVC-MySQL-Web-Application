<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body class='container'>
<form action="/produit/create">
<button type="submit" class="btn btn-success">Add</button>
</form>
<form action="/produit/chercher" width=40%>
<label for="inputPassword5" class="form-label">Recherche</label>
<input type="text" name='nom' id="" class="form-control" aria-describedby="">
<button type='submit' class="btn btn-success">Go</button>

</form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prix</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>



@foreach($produits as $produit)
<tr>
      <th scope="row">1</th>
      <td><a href="/produit/{{$produit->id}}/visite">{{$produit->nom}}</a></td>
      <td>{{$produit->prix}}</td>
      <td><form action="/produit/{{$produit->id}}/delete"><button type="submit" class="btn btn-danger">Delete</button></form></td>
      <td><form action="/produit/{{$produit->id}}/edit"><button type="submit" class="btn btn-success">Edit</button></form></td>
</tr>
            
@endforeach
</tbody>
</table>

</body>
</html>
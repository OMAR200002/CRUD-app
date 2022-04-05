<?php
  include 'connect.php';

  if(isset($_POST['submit'])){
    $nom = $_POST['p_nom'];
    $prix = $_POST['prix'];

    $sql = "insert into `produits` (nom,prix) values('$nom',$prix)";
    $result = mysqli_query($con,$sql);

    if($result){
      header('location:display.php');
    }else{
      die(mysqli_error($con));
    }
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>PHP CRUD</title>
  </head>
  <body>
    <div class="container my-5">
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nom de produit</label>
                        <input type="text" name="p_nom" class="form-control" placeholder="Entrerle nom de produit" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prix</label>
                        <input type="text" name="prix" class="form-control" placeholder="Entrer le prix du produit" autocomplete="off">
                    </div>
            
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
  </body>
</html>
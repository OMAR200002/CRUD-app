<?php
  include 'connect.php';

  if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];
    $sql = "select * from `produits`";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    if(isset($_POST['update'])){
        $nom = $_POST['p_nom'];
        $prix = $_POST['prix'];
    
        $sql = "update `produits` set nom = '$nom', prix = $prix where id = $id";
        $result = mysqli_query($con,$sql);
    
        if($result){
          header('location:display.php');
        }else{
          die(mysqli_error($con));
        }
      }    
  }else{
      die(mysqli_error($con));
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
                        <input type="text" name="p_nom" class="form-control" placeholder="Entrerle nom de produit"  
                        value="<?php echo $row['nom']?>" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prix</label>
                        <input type="text" name="prix" class="form-control" placeholder="Entrer le prix du produit"
                        value ="<?php echo $row['prix']?>"
                        autocomplete="off">
                    </div>
            
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
            </form>
    </div>
  </body>
</html>
<?php
    include 'connect.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Ajouter un produit</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom de produit</th>
      <th scope="col">prix</th>
      <th scope="col">Opertions</th>
    </tr>
  </thead>
  <tbody>
      <?php
        $sql = "select * from `produits`";
        $result = mysqli_query($con,$sql);

        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $nom = $row['nom'];
                $prix = $row['prix'];
                echo ' <tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$nom.'</td>
                            <td>'.$prix.'</td>
                            <td>
                            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>                    
                            </td>
                        </tr>';
            }
        }
      ?>
        

  </tbody>
</table>
    </div>
</body>
</html>
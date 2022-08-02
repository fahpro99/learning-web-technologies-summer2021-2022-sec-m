<?php
    $pdo=new PDO('mysql:host=localhost;port=3306;dbname=farmers','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $statement=$pdo->prepare('SELECT * FROM farmer_product ORDER BY create_date DESC');
    $statement->execute();
    $products= $statement->fetchAll(PDO::FETCH_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farmer's Products</title>
  <link rel="stylesheet" href="../css/app.css">
</head>
<body>
  <h1>Products Crud</h1>
  <p>
    <a href="../View/create.php"><button class="create">Create Product</button></a>
  </p>
<table class="content-table">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Description</th>
      <!-- <th>Image</th> -->
      <th>Price</th>
      <th>Date</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($products as $i=>$product): ?>
      <tr>
      <td><?php echo $product['id']  ?></td>
      <td><?php echo $product['title']  ?></td>
      <td><?php echo $product['description']  ?></td>
      <td><?php echo $product['price']  ?></td>
      <td><?php echo $product['create_date']  ?></td>
      <td><button type="button" class="edit">Edit</button>
      <button type="button" class="delete">Delete</button>
      </td>
      
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  
</body>
</html>
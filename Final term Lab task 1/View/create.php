<?php
    $pdo=new PDO('mysql:host=localhost;port=3306;dbname=farmers','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $errors=[];
    $title='';
    $description='';
    $price='';
    
    if($_SERVER['REQUEST_METHOD']==='POST')
    {
    $title=$_POST['title'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $create_date=date('Y-m-d H:i:s');

    

    if(!$title){
        $errors[]='Product titels required';
    }
    if(!$description){
        $errors[]='Product description required';
    }
    if(!$price){
        $errors[]='Product price required';
    }
    
    if(empty($errors)){
    $statement=$pdo->prepare("INSERT INTO farmer_product(title,description,image,price,create_date) VALUES(:title,:description,:image,:price,:create_date)");
    $statement->bindValue(':title',$title);
    $statement->bindValue(':description',$description);
    $statement->bindValue(':image','');
    $statement->bindValue(':price',$price);
    $statement->bindValue(':create_date',$create_date);
    $statement->execute();
    }
}

   
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farmer's Products</title>
  <link rel="stylesheet" href="../css/create.css">
</head>
<body>
    <?php if(!empty($errors)): ?>
        <div class="danger">
                <?php foreach($errors as $error):?>
                    <div><?php echo $error ?> </div>
                <?php endforeach; ?>
        </div>
    <?php endif ?>

    <div class="main">
    <div class="create">
    <h1>Create New Product</h1>
    <form action="" method="post">
        <label>Product Title</label>
        <br>
        <input type="text" name="title" id="title" placeholder="Enter Product Title" value="<?php echo $title ?>">
        <br>
        <label>Product Description</label>
        <br>
        <textarea class="textarea" name="description" value="<?php echo $description ?>"></textarea>
        <br>
        <label>Product price</label>
        <br>
        <input type="number" name="price" id="price" placeholder="Enter Product price" value="<?php echo $price ?>">
        <br>
    <button type="submit" class="button">Submit</button>
    <a href="../index.php"><button class="back">Back</button></a>
    </form>

    </div>

    </div>

</body>
</html>
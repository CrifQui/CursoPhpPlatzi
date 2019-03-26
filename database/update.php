<?php
require_once 'config.php';
$result=false;
if(!empty($_POST)){
    $id= $_POST['id'];
    $newName=$_POST['name'];
    $newEmail=$_POST['email'];

    $sql= "UPDATE users SET name=:name, email=:email WHERE id=:id";
    $query= $pdo->prepare($sql);
    $result=$query->execute([
        'name'=>$newName,
        'email'=>$newEmail,
        'id'=>$id
    ]);
    $nameValue=$newName;
    $emailValue=$newEmail;
}else{
    $id= $_GET['id'];
    $sql ="SELECT * FROM users WHERE id=:id";
    $query= $pdo->prepare($sql);
    $query->execute([
        'id'=>$id
    ]);
    $row= $query->fetch(PDO::FETCH_ASSOC);
    $nameValue= $row['name'];
    $emailValue= $row['email'];
}



?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Database</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Update User </h1>
        <a href="list.php">Back</a>
        <?php
            if ($result) {
                echo '<div class="alert alert-success"role="alert">Update Success</div>';
            }
        ?>

        <form action="update.php" method="post">
        
            <label for="name">Name</label>
            <input type="text" name="name" id="id" value="<?php echo $nameValue?>">
            <br>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?php echo $emailValue?>">
            <br>
            <input type="hidden" name="id" value="<?php echo $id?>">
            <input type="submit" value="Update">
          
        </form>
        
    </div>
</body>
</html>
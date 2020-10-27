<?php 

//Database credentials
$user = "a3003584_SCPuser";
$pw = "Toiohomai1234";
$db = "a3003584_SCP";

//Database connection object

$connection = new mysqli('localhost', $user, $pw, $db) or die(mysqli_error($connection));

$result = $connection->query("select * from pages1") or die($connection->error());

if(isset($_POST['submit'])){
    
    $pg = $_POST['pg'];
    $objectclass = $_POST['objectclass'];
    $h1 = $_POST['h1'];
    $d1 = $_POST['d1'];
    $h2 = $_POST['h2'];
    $d2 = $_POST['d2'];
    
    $sql = "insert into pages1(pg, h1, h2, d1,d2,objectclass)
    values('$pg','$h1','$h2', '$d1', '$d2', '$objectclass')";
    
    if($connection->query($sql) === TRUE){
        echo "
        <h1>Record has been added successfully</h1>
        <p><a href='index.php'>Back to index page</a><p>
        ";
    }else{
        echo "
        <h1>There has been an error when trying to add a new record</h1>
        <p><a href='index.php'>Back to index page</a><p>
        ";
    }
            
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $del = "delete from pages1 where id=$id";
    
    if($connection->query($del)===TRUE){
        echo"<p>Record was deleted<a href= 'index.php'>Go back to the home page</a></p>";
    }
    else{
        echo"<p>There was an error deleting this record.<a href= 'index.php'>Go back to the home page</a></p>";
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $pg = $_POST['pg'];
    $objectclass = $_POST['objectclass'];
    $h1 = $_POST['h1'];
    $d1 = $_POST['d1'];
    $h2 = $_POST['h2'];
    $d2 = $_POST['d2'];
    
    $update = "
            update pages1 set pg='$pg', objectclass='$objectclass', h1='$h1',
            d1='$d1', h2='$h2', d2='$d2' where id='$id'
            
    ";
    
    if($connection->query($update) === TRUE){
        echo "
        <h1>Record has been updated successfully</h1>
        <p><a href='index.php'>Back to index page</a><p>
        ";
    }else{
        echo "
        <h1>There has been an error when trying to update a new record</h1>
        <p><a href='index.php'>Back to index page</a><p>
        ";
    }
            
}


?>
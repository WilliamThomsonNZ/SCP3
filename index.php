<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="src/styles.css" />
      <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <title>SCP-002</title>
  </head>
  <body>
    <?php include "connection.php"; ?>
    <header>
      <nav class="nav-footer">
          <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    SCP Files
  </button>
 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <?php foreach($result as $page): ?>

               <a href="index.php?page=<?php echo $page['pg']; ?>" class="dropdown-item"><?php echo $page['pg']; ?></a>
            <?endforeach; ?>
   
  </div>
</div>
        <ul>
             
            
            <li><a href="create.php">Create New File</a></li>
            <li><a href="update.php">Update A File</a></li>
        </ul>
      </nav>
    </header>
    <main class="container">
        <?php
        
        if(isset($_GET['page']))
        {
            
        $pg = $_GET['page'];
           $record = $connection->query("select * from pages1 where pg='$pg'") or die($connection->error());
            
            $row = $record->fetch_assoc();
            $objectclass = $row['objectclass'];
            $h1 = $row['h1'];
            $d1 = $row['d1'];
            $h2 = $row['h2'];
            $d2 = $row['d2'];
            
            $id = $row['id'];
            $update = "update.php?update=" . $id;
            $delete = "connection.php?delete=" . $id;
            echo "
            <h2>Object Class: {$objectclass}</h2>
            <h3>{$h1}</h3>
            <p>{$d1}</p>
            <h3>{$h2}</h3>
            <p>{$d2}</p>
            
            ";
            
            echo " <a href = '{$update}' class='btn btn-warning'>Update</a>
                <a href ='{$delete}'class ='btn btn-danger'>Delete</a> ";
        }
        else{
            
            echo"<h2>Welcome to the SCP website</h2>
            <p>Please click one of the links above to view the files</p>";
        }
    
    ?>
     
    </main>
    <footer class="nav-footer">
      <p>&copy;Copyright SRC 2020</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

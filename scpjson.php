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
     $scpjson = json_decode(file_get_contents('scp.json'));
     
     ?>
     <?php foreach($scpjson as $display):?>
         <h3>Item:<?php echo $display->item; ?></h3>
         <h3>Object Class:<?php echo $display->objectClass; ?></h3>
         <p>Special Containment Procedures:<?php echo $display->specialContainmentProcedures; ?></p>
         <p>Desciption:<?php echo $display->description; ?> </p>
     <?php endforeach; ?>
     
    </main>
    <footer class="nav-footer">
      <p>&copy;Copyright SRC 2020</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
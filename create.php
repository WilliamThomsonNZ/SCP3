<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="src/styles.css" />
    <title>Create New SCP File</title>
  </head>
  <body>
      <?php include "connection.php"; ?>
    <nav class="nav-footer">
      <ul>
           
        <li><a href="index.php" class="selected">Home</a></li>
       
      </ul>
    </nav>
    <div class="container formContainer">
      <h1>Create a new SCP File</h1>
      <form class="form-group" action="connection.php" method="post">
        <label>
          Enter a SCP file number.
          <input
            type="text"
            name="pg"
            placeholder="Enter SCP file number here"
            class="form-control"
          />
        </label>
        <br />
        <label>
          What is the objects class?
          <input
            type="text"
            name="objectclass"
            placeholder="Enter object class here"
            class="form-control"
          />
        </label>
        <br />
        <label>
          Enter heading one.
          <input
            type="text"
            name="h1"
            placeholder="Enter heading one here"
            class="form-control"
          />
        </label>
        <br />
        <label>
          Enter description one.
          <input
            type="text"
            name="d1"
            placeholder="Enter description one here"
            class="form-control"
          />
        </label>
        <br />
        <label>
          Enter heading two.
          <input
            type="text"
            name="h2"
            placeholder="Enter heading two here"
            class="form-control"
          />
        </label>
        <br />
        <label>
          Enter description two.
          <input
            type="text"
            name="d2"
            placeholder="Enter description two here"
            class="form-control"
          />
        </label>
        <input type="submit" name="submit" class="btn btn-primary" />
      </form>
    </div>
    <footer class="nav-footer">
      <p>&copy;Copyright SRC 2020</p>
    </footer>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

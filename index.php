<?php
$pdo = require 'Connection.php';
$sql  = "select * from users";
$result = $pdo->query($sql);
$rows = $result->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <title>Hello, world!</title>
</head>

<body>
  <div class="container">
    <h1>Hello, world!</h1>
    <form method="post" action="./query.php">
      <div class="mb-3">
        <label for="exampleInputName" class="form-label">exampleInputName</label>
        <input type="text" class="form-control" name="Name" id="exampleInputName" aria-describedby="emailHelp" autofocus />
      </div>
      <div class="mb-3">
        <label for="exampleInputUsername" class="form-label">exampleInputUsername</label>
        <input type="text" class="form-control" name="Username" id="exampleInputUsername" aria-describedby="emailHelp" />
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword" class="form-label">Password</label>
        <input type="password" class="form-control" name="Password" id="exampleInputPassword" />
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <hr>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12"> <code>
          <pre>

        <?php print_r($rows); ?>
      </pre>
        </code></div>
      <div class="col-lg-6 col-md-6 col-12">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr class="text-center">
                <th>Name</th>
                <th>Username</th>
                <th>Password (MD5)</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($rows as $key => $value) {
                # code...
              ?>
                <tr>
                  <td scope="row"><?php echo $value->Name; ?></td>
                  <td><?php echo $value->Username; ?></td>
                  <td><?php echo $value->Password; ?></td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>



  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
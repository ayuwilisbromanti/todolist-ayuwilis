<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO List</title>
    <style>
        .cencel{
            text-decoration: line-trough;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>
    <?php
        include "connection.php";
        $id = $_GET['id'];
        $Rdata = mysqli_query($conn, "SELECT * FROM list WHERE id='$id'");
        $data = mysqli_fetch_array($Rdata);
    ?>
<body class="bg-warning" >
    <form action="proses_edit.php" method="POST">
    <div class="container">
        <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
            <h3 class="text-center text-danger text-monospace">TODO</h3>
            <div class="col-8">
              <input type="text" name="todo" id="todo" class="form-control" value="<?= $data['to_do']?>">
            </div>
            <div class="col-8">
              <input type="hidden" name="id" id="todo" class="form-control" value="<?= $data['id']?>">
            </div>
            <div class="col-2">
                <button class="btn btn-success">Simpan</button>
            </div>
        </div>
    </div>
    </form>
    </body>
</html>
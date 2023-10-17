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
<body class="bg-warning" >
    <form action="add_list.php" method="POST">
    <div class="container">
        <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
            <h3 class="text-center text-danger text-monospace">TODO</h3>
            <div class="col-8">
              <input type="text" name="todo" id="todo" class="form-control">
            </div>
            <div class="col-2">
                <button class="btn btn-success">+</button>
            </div>
        </div>
    </div>
    </form>

    <?php

    include "connection.php";
    $list = mysqli_query($conn, "SELECT * FROM list");
    ?>

    <div class="container">
        <div class=" col-8 bg-white m-auto mt-3">

        <table class="table">
            <tbody>
                <?php
                while($data = mysqli_fetch_array($list)){
                ?>
                <tr>
                    <td><input type="checkbox" aria-label="Checkbox for following text input"> </td>
                    <td><?= $data['to_do']; ?></td>
                    <td style="width: 10%;"> <a href="hapus.php?id=<?= $data['id']?>" class="btn btn-danger"> hapus </a> </td>
                    <td style="width: 10%;"> <a href="edit.php?id=<?= $data['id']?>" class="btn btn-warning"> edit </a> </td>
                </tr>

                <?php
                }
                ?>
            </tbody>
        </table>

        </div>
    </div>
</body>
</html>
<?php

include("config.php");
$sql = "Select Distinct Squad from post";
$res = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="table-responsive container">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Squad</th>
                <th>Option</th>
            </tr>
        </thead>
            <tbody>
                <?php 
                while($rows=mysqli_fetch_array($res)){
                ?>
                <tr>
                <td><?php echo $rows['Squad']?></td>
                <td><a href="SquadDetail.php?Squad=<?= $rows['Squad'];?>" class="btn btn-success">Detail</a></td>
                <?php
                }
                ?>
            </tbody>
        </table>

</body>
</html>
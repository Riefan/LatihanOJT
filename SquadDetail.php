<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
    include 'config.php';
        if(isset($_GET['Squad'])){
            $Squad = $_GET['Squad'];
                
                    
            $query = "SELECT * FROM `post` WHERE `Squad`= '$Squad'";
            $data = mysqli_query($con, $query);

                if(!$data){
                    die("query failed".mysqli_error());
                }
                    else {$row= mysqli_fetch_assoc($data);
                    // print_r($row);
                }
                }
                ?>

            <h1 style="color:blue">Hello! Welcome to <?php echo $row['Squad'];?> detail.</h1>
            <div class="table-responsive container">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Issue Type</th>
                            <th>Key</th>
                            <th>Summary</th>
                            <th>Asignee</th>
                            <th>Reporter</th>
                            <th>Priority</th>
                            <th>Status</th>
                            <!-- <th>Squad</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($row=mysqli_fetch_assoc($data)){ 
                    ?>
                    <tr>
                        <td><?php echo $row['issueType']?></td>
                        <td><?php echo $row['Key']?></td>
                        <td><?php echo $row['Summary']?></td>
                        <td><?php echo $row['Assignee']?></td>
                        <td><?php echo $row['Reporter']?></td>
                        <td><?php echo $row['Priority']?></td>
                        <td><?php echo $row['Status']?></td>
                        <!-- <td><?php echo $row['Squad']?></td> -->
                    </tr>
                    <?php
                    }
                    ?>
</body>
</html>
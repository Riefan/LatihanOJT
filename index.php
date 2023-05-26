<?php
include("config.php");
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
    <style type="text/css">
    #filters{
        margin-left: 10%;
        margin-top: 2%:
        margin-bottom: 2%;
    }
    </style>
    <title>Document</title>
</head>
<body>
<div class="card-body">
            <div id="filters">
                <span> Fetch results by &nbsp;</span>
                <select name="status" id="status">
                    <option value="" disabled="" selected="">Select status</option>
                    <option value="Screening">Screening</option>
                    <option value="Live">Live</option>
                    <option value="Development">Development</option>
                    <option value="Testing">Testing</option>
                    <option value="Deployment">Deployment</option>
                    <option value="Submission">Submission</option>
                    <option value="Done">Done</option>
                    <option value="Verification">Verification</option>
                </select>
                <span> Fetch results by &nbsp;</span>
                <select name="priority" id="priority">
                    <option value="" disabled="" selected="">Select priority</option>
                    <option value="Highest">Highest</option>
                    <option value="High">High</option>
                    <option value="Medium">Medium</option>
                    <option value="Low">Low</option>
                    <option value="Emergency">Emergency</option>
                </select>
                <a href="squad.php">Squad</a>  
        </div>
            <div class="table-responsive container">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <!-- <th>Issue Type</th>
                            <th>Key</th>
                            <th>Summary</th>
                            <th>Asignee</th>
                            <th>Reporter</th> -->
                            <th>Priority</th>
                            <th>Status</th>
                            <th>Squad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $query= "SELECT * FROM post";
                        $r = mysqli_query($con, $query);
                        while($row=mysqli_fetch_assoc($r)){

                        
                        ?>
                        <tr>
                            <!-- <td><?php echo $row['issueType']?></td>
                            <td><?php echo $row['Key']?></td>
                            <td><?php echo $row['Summary']?></td>
                            <td><?php echo $row['Assignee']?></td>
                            <td><?php echo $row['Reporter']?></td> -->
                            <td><?php echo $row['Priority']?></td>
                            <td><?php echo $row['Status']?></td>
                            <td><?php echo $row['Squad']?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $("#status").on('change',function(){
                                    var value=$(this).val();
                                    // alert(value);

                                    $.ajax({
                                        url:"fetchStatus.php",
                                        type:"POST",
                                        data: 'request=' + value,
                                        beforeSend:function(){
                                            $(".container").html("<span>Working...</span>");

                                        },
                                        success:function(data){
                                            $(".container").html(data);
                                    }
                                    });
                                });
                            });
                        </script>
                         <script type="text/javascript">
                            $(document).ready(function(){
                                $("#priority").on('change',function(){
                                    var value=$(this).val();
                                    // alert(value);

                                    $.ajax({
                                        url:"fetchPriority.php",
                                        type:"POST",
                                        data: 'request=' + value,
                                        beforeSend:function(){
                                            $(".container").html("<span>Working...</span>");

                                        },
                                        success:function(data){
                                            $(".container").html(data);
                                    }
                                    });
                                });
                            });
                        </script>
        </div>
    </div>

</div>

</body>
</html>
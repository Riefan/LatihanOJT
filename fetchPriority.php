<?php


include("config.php");
if(isset($_POST['request'])){

    $request = $_POST['request'];

    $query = "SELECT * FROM post WHERE Priority = '$request'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);
    ?>

    <table class="table">
        <?php

        if($count){
            ?>
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

                <?php
        }else{
            echo "Sorry! No record found";
        }
        ?>
            </thead>
            <tbody>
            <?php
            while($rows=mysqli_fetch_assoc($result)){

                        
                ?>
                <tr>
                    <!-- <td><?php echo $rows['issueType']?></td>
                    <td><?php echo $rows['Key']?></td>
                    <td><?php echo $rows['Summary']?></td>
                    <td><?php echo $rows['Assignee']?></td>
                    <td><?php echo $rows['Reporter']?></td> -->
                    <td><?php echo $rows['Priority']?></td>
                    <td><?php echo $rows['Status']?></td>
                    <td><?php echo $rows['Squad']?></td>
                </tr>
                <?php
            }
                ?>
                        
            </tbody>
        </table>
    <?php    
}?>
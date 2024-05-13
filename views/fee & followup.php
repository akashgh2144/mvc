<?php
session_start();
require '../model/data.php';

$fees =fees_followup();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient List</title>
</head>
<body style="background-color: rgb(192 132 252);">
    <form method="post" novalidate>
        <br><br><br><br><br>
        <center><h4>Salary List List</h4></center>
        <center>
            <table border="1">
                <thead>
                    <tr>
                        <th>FeeID</th>
                        <th>Dortor ID</th>
                        <th>fee</th>
                        <th>FollowUp Fee</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($fees  as $fee_followup): ?>
                    <tr>
                    <td><?php echo $fees['feeID']; ?><b><label for="feeID">FeeID</label></b></td>
                    <td><?php echo $fees['doctorID']; ?><b><label for="doctorID">DoctorID</label></b></td>
                    <td><?php echo $fees['fee']; ?><b><label for="fee">Fee</label></b></td>
                    <td><?php echo $fees['followup_fee']; ?><b><label for="followup_fee">followup fee</label></b></td>
                       
                        
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br><br><br>
        </center>
    </form>
</body>
</html>

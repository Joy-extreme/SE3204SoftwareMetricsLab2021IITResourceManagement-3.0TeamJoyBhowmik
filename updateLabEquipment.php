<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Complaints</title>

    <script src="https://kit.fontawesome.com/9778dd3679.js" crossorigin="anonymous"></script>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="ManageComplaints.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


</head>
<body>
  
  <div class="header">
    <h1>Manage Complaints</h1>
    <a href="LabAssistantPage.html"><p class="home"><i class="fa-solid fa-house-user"></i> Home</p> </a> 
    <a href="logInPage.html"><p class="log-out"><i class="fa-solid fa-right-from-bracket"></i> log out</p> </a>
  </div>
    
  <table>

  <tr>
    <th>Id</th>
    <th>Lab Equipment Type </th>
    <th>Amount</th>
    <th>Actions</th>
  </tr>

  <?php
  include('DatabaseConnection.php');

  $sql = "SELECT * From labequipment";

  $res = mysqli_query($conn, $sql);

  if($res==true){

    $count = mysqli_num_rows($res);

    if($count>0){
        while($rows = mysqli_fetch_assoc($res)){
            $id = $rows['id'];
            $LabEquipmentType = $rows['LabEquipmentType'];
            $amount = $rows['amount'];
               

    ?>

                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $LabEquipmentType; ?> </td>
                    <td><?php echo $amount; ?></td>
                   
                    <td>
                        
                        <a href="#?idd=<?php echo $id; ?>" class="accept-button">Update</a>
                    </td>
                </tr>

            <?php
        }
    }

}

  ?>         


  </table>
  
     
</body>
</html>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
 
 <!-- <p>Click<strong> Add</strong> button to insert data.</p> -->
 <a href="dept2.php" button type="button" class="btn btn-primary btn pull-right"><strong>Add Data Here</strong> </a>

<div class="container">
    <tr>
    <table class="table table-bordered">
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Contact</th>
    <th>Department</th>
    <th>DOB</th>
    <th>Action</th>
    </tr>


    <?php
    include('dept1.php');
 $sql_query="SELECT * FROM deptmnt";
 $result_set=mysql_query($sql_query);
 while($row=mysql_fetch_row($result_set))
 {
    ?>
  <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[5]; ?></td>
        <td><?php echo $row[6]; ?></td>
        
            
        <td align="center">
            <button class="btn btn-success"> <a style="color:black" href="edit.php?id=<?php echo $row[0]; ?>">Edit  </a></button>
            <button class="btn btn-primary"><a style="color:black" href="delete.php?id=<?php echo $row[0]; ?>">Delete</a></button>
            </td>
        <!-- <td align="center"><a href="edit.php?id=<?php echo $row[0]; ?>">edit</a></td>
        <td align="center"><a href="delete.php?id=<?php echo $row[0]; ?>">delete</a></td>
       -->
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>


</body>
</html>
<?php
  include '../components/connection.php';
  
  if(isset($_COOKIE['tutor_id']))
  {
    $tutor_id = $_COOKIE['tutor_id'];
  }else{
    $tutor_id = '';
    header('location: login.php');
  }
?>
<style>
  <?php include '../css/admin.css'; ?>
</style>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <!-- Boxicon link  -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!-- css link  -->
   <link rel="stylesheet" href="../css/admin.css">

</head>
<body>
  <?php include '../components/admin_header.php';?>
  <script src="../js/admin_script.js"></script>
</body>
</html>
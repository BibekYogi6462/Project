<?php
  include '../components/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <style>
  <?php include '../css/admin.css'; ?>
</style>
</head>
<body>
  
<?php
// Display messages if available
if (isset($message)) {
    foreach ($message as $msg) {
        echo '
        <div class="message">
            <span>' . $msg . '</span>
            <i class="bx bx-x" onclick="this.parentElement.remove()"></i>
        </div>
        ';
    }
}
?>

<div class="box-container">
  <img src="../image/fun.jpg"class="form-img" alt="" style="left: 10%;">
  <form action="" method="POST" enctype="multipart/form-data">
    <h3>Register Now</h3>
    <div class="flex">
      <div class="col">
        <p>Your Name Here<span> * </span></p>
        <input type="text" name="name" id="" placeholder="Enter Your Name" maxlength="50" required>
        <p>Your Profession <span>*</span></p>
        <select name="profession" id="" required class="box">
           <option value="" disabled selected>
            --select your profession--
           </option>
           <option value="student">Student</option>
           <option value="teacher">Teacher</option>
           <option value="developer">Developer</option>
           <option value="photograph">pHOTOGRAPHER</option>
           <option value=""></option>
           <option value="designer">Designer</option>
           <option value="musician">Musician</option>
           <option value="engineer">Engineer</option>
           <option value="accountant">Accountant</option>
           <option value="journalist">Journalist</option>
        </select>

           <p>your email <span>*</span> </p>
           <input type="email" name="email" id="" placeholder="enter your email" maxlength="50" required class="box">

      </div>
      <div class="col">
        <p>your password <span>*</span></p>
        <input type="password" name="pass" id="" placeholder="enter your password" maxlength="20" required class="box">
        <p>your password</p>
        <input type="password" name="cpass" id="" placeholder="confirm your password" maxlength="20" required class="box">
        <p>select pic <span>*</span></p>
        <input type="file" name="image" id="" accept="image/*" required class="box">

      </div>
      <p>already have an account ? <a href="login.php">Login Now</a></p>
      <input type="submit"  name="submit" class="btn" value="register now">
    </div>
  </form>

</div>


</body>
</html>
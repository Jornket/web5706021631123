<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> เย้ !!! </title>
  </head>
  <body>
    <?php
    $name=$_POST['name'];
    $lname=$_POST['lname'];
    $nname=$_POST['nname'];
    $day=$_POST['day'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $fb=$_POST['fb'];
    $sex=$_POST['sex'];
      if($age<100 && $age>20){
    echo "<p>";
    echo "<b> ข้อมูล USer </b><br/>";
    echo "Name :: <i> $name </i><br/>";
    echo "lName :: <i> $lname </i><br/>";
    echo "Nname :: <i> $nname </i><br/>";
    echo "day :: <i> $day </i><br/>";
    echo "Age :: <i> $age </i><br/>";
    echo "phone :: <i> $phone </i><br/>";
    echo "email :: <i> $email </i><br/>";
    echo "fb :: <i> $fb </i><br/>";
    echo "sex :: <i> $sex </i><br/>";
    echo "Result !! :";
  }
  else {
    echo "plase tye again !!";
  }
     ?>
  </body>
</html>

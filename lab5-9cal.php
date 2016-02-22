<html>
  <head>
    <meta charset="utf-8">
    <title> summation </title>
  </head>
  <body>
    <?php
    $name=$_POST['name'];
    $nic=$_POST['nic'];
    $age=$_POST['age'];
    $day=$_POST['day'];

    $sex=$_POST['sex'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $univ=$_POST['fb'];
    $loc=$_POST['col'];
    $hob=$_POST['lo'];

    echo "<p>";
    echo "<b> USER DATA </b><br/>";
    echo "Name :: <i> $name </i><i> ($nic) </i><br/>";

    if($age>="1"&&$age<="100"){


         if ($age>=1&&$age<=12){
       echo "Age :: <i> $age </i> เด็ก <br/>";}
    else  if ($age>=13&&$age<=20){
    echo "Age :: <i> $age </i>วัยรุ่น <br/>";}
    else  if ($age>=21&&$age<=59){
    echo "Age :: <i> $age </i>วัยทำงาน <br/>";}
    else  if ($age<=60){
    echo "Age :: <i> $age </i>วัยทอง <br/>";}

}
    else echo " Age :: Again!!!! </i><br/>";


    echo "Brithday :: <i> $day </i><br/>";

    if($sex ==  "1") echo("Sex :: ชาย <br/>");
    if($sex ==  "0") echo("Sex :: หญิง <br/>");
    echo "Number Phone :: <i> $phone </i><br/>";
    echo "Email :: <i> $email </i><br/>";
    echo "Facebook :: <i> $fb </i><br/>";
    echo "Location :: <i> $col </i><br/>";
    echo "Hobby :: <i> $lo </i><br/>";

     ?>
  </body>
</html>

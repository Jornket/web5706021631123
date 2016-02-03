<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> การสร้างฟอร์มในการรับค่าเพื่อคำนวน </title>
  </head>
  <body>
    <form method="post" action="lab5-9cal.php">
      <table border="1" align="center" width="50%">
        <tr>
          <td colspan="2" align="center" bgcolor="#999999">
          <big> ทดสอบการใช้ </big>
        </td></tr>
        <tr>
          <td> Enter Name :: </td>
          <td><input type="text" name="name" size="25" value=""/></td>
        </tr>
        <tr>
          <td> Enter Lastname :: </td>
          <td><input type="text" name="lname" size="25" value=""/></td>
        </tr>
        <tr>
          <td> Enter Nicname :: </td>
          <td><input type="text" name="nname" size="25" value=""/></td>
        </tr>
        <tr>
          <td> Your birth day :: </td>
          <td><input type="text" name="day" size="25" value=""/></td>
        </tr>
        <tr>
          <td> Enter age :: </td>
          <td><input type="text" name="age" size="25" value=""/></td>
        </tr>
        <tr>
          <td> Enter Number phone :: </td>
          <td><input type="text" name="phone" size="25" value=""/> </td>
        </tr>
        <tr>
          <td> Enter  email :: </td>
          <td><input type="text" name="email" size="25" value=""/> </td>
        </tr>
        <tr>
          <td> Enter Facebook :: </td>
          <td><input type="text" name="fb" size="25" value=""/> </td>
        </tr>
        <tr>
          <td>Sex</td>
            <td>
                <input type="radio" name="sex" value="ชาย"  >ชาย <br>
                <input type="radio" name="sex" value="หญิง" >หญิง<br>

            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
              <input type="submit" value="   OK   "/>
              <input type="reset" value="   Reset   "/>
            </td>
        </tr>
        </table>
      </form>
  </body>
</html>

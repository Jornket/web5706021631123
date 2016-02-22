<html>
  <head>
    <meta charset="utf-8">
    <title> การสร้างฟอร์มในการรับค่า </title>

  </head>
  <body bgcolor="#ADFF2F">
  <style>
    h1{font:bold 48px JasmineUPC;color:#6A5ACD;}
  h2{font:bold 22px JasmineUPC;color:#6A5ACD;}
  </style><center>
    <form method="post" action="lab5-9cal.php">

      <table width="50%"  bgcolor="#FFC0CB">
        <tr>
          <td colspan="2" align="center" bgcolor="#999999">
          <big><h1> Profile </h1></big>
        </td></tr>
        <tr>
          <td><h2> Enter Name :: </h2></td>
          <td><input type="text" name="name" size="25" value=""/></td>
        </tr>
        <tr>
          <td><h2> Enter Nick name :: </h2></td>
          <td><input type="text" name="nic" size="25" value=""/></td>
        </tr>
        <tr>
          <td><h2> Enter age :: </h2></td>
          <td><input type="number" min=1 max=100 name="age" value=""/></td>
        </tr>
        <tr>
          <td><h2> Enter Brithday (dd/mm/yyyy):: </h2></td>
          <td><input type="date" name="day"  value=""/>
          </td>
        </tr>
        <tr>
          <td><h2> Enter sex :: </h2></td>
          <td><input type="radio" name="sex" value="1"> ชาย <br>
          <input type="radio" name="sex" value="0"> หญิง <br>
        </td>
        </tr>
        <tr>
          <td><h2> Enter Number phone :: </h2></td>
          <td><input type="text" maxlength="10"length name="phone" size="25" value=""/> </td>
        </tr>
        <tr>
          <td><h2> Enter Email :: </h2></td>
          <td><input type="Email" name="email" size="25" value=""/> </td>
        </tr>
        <tr>
          <td><h2> Facebook :: </h2></td>
          <td><input type="text" name="fb" size="25" value=""/> </td>
        </tr>
        <tr>
          <td><h2> Do you like color :: </h2></td>
          <td><input type="text" name="col" size="25" value=""/> </td>
        </tr>
        <tr>
          <td><h2> location :: </h2></td>
          <td><textarea name="lo" cols="50" rows="5" wrap="virtual"></textarea ></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
              <input type="submit" value="   OK   "/>
              <input type="reset" value="   Reset   "/>
            </td>
        </tr>
        </table>
      </form>
    </center>
  </body>
</html>

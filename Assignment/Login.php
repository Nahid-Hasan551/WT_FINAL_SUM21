<?php

include 'controllers/UserController.php';

 ?>

<html >
<body>

  <fieldset >
    <form action="" method="POST">
      <h2>Login</h2>
      <h5><?php echo $err_db; ?></h5>
      <tr>
        <td >Username</td>
        <td>
          :  <input name="username" value="<?php echo $uname;?>" type="text"><br>
          <span><?php echo $err_uname;?></span><br>
        </td>

      </tr>
      <tr>
        <td >Password</td>
        <td>:  <input name="password" value="<?php echo $pass;?>" type="password" ><br>
          <span ><?php echo $err_pass;?></span><br>
        </td>
      </tr>

            <tr>
              <td align="center"><input type="submit" name="login" value="Login" ></td>
            </tr>

            <tr>

              <td  align="center">Don't have an account? <a href="Signup.php"> Singup </a> </td>
            </tr>
        </table>
    </form>
  </fieldset>

</body>
</html>
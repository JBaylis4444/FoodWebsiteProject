<?php require_once('lib/logic_signup.php'); ?>

	<form method="POST" action="sign_up.php">
    <table align="center">
    <tbody>
    
<tr>
          <td><b>User Name</b></td>
          <td><input name="username" type="text" class="textInput" size="30" placeholder="USERNAME" required/></td> 
          
</tr>
<tr>
         <td><b>EMAIL</b></td>
          <td> <input name="email" type="text" class="textInput" size="30" placeholder="name@domain.com" required /></td>
          
         
        </tr>
<tr>
          <td><b>PASSWORD</b></td>
          <td><input name="password" type="password" class="textInput" size="30" placeholder="Password" required/></td>
          
</tr>
<tr>
          <td><b>Verify PASSWORD</b></td>
          <td><input name="password2" type="password" class="textInput" size="30" placeholder="Password" required/> </td>
          
          
</tr>
        </tbody>
        </table>
        <br>
  <div class="button">
   	 <input type="submit" name="register" value="Register" />
     <input type="reset" value="Clear" /> 
</div>
        </form>
        <?php echo disclaimer(); ?>

  </body>
 </html>
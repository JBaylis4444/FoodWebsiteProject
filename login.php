<?php require_once('lib/logic_login.php');
?>
	<form method="POST" action="login.php">
    <table align="center">
    <tbody>
    
<tr>
          <td><b>User Name</b></td>
          <td><input name="username" type="text" class="textInput" size="30" placeholder="USERNAME" /></td> 
</tr>

          <td><b>PASSWORD</b></td>
          <td><input name="password" type="password" class="textInput" size="30" placeholder="Password" /> </td>
</tr>

        </tbody>
        </table>
        <br>
  <div class="button">
   	 <input type="submit" name="log_in" value="login" />
     <input type="reset" value="Clear" /> 
</div>

        </form>
        <div class="commands1">
		<a href="sign_up.php">Sign Up</a>
		</div>
		<p> If you have forgotten your password, Email us at this <a href="Group_S@domain.ca">Group_S@domain.ca</a> with your username and email then we will get back to you as soon as possible.
		 <?php echo disclaimer(); ?>
  </body>
 </html>
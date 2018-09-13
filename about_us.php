            
<?php require_once('lib/logic_contactus.php');
?>

  <h2>Contact Us</h2>
  <?php
  if (isset($_SESSION['message'])) {
    echo "<div id='error_msg2'>".$_SESSION['message']."</div>";
    unset($_SESSION['message']);
  }
?><!-- This is a succes message that has been handled above in php to check all validation checks and if it passes then a succes message appears -->
    <p> Our purpose is to help you enhance your knowledge and skills, so you can express your creative ideas at a higher level. Please leave your details with your concerns and we will get back to you as soon as possible.</p>
    
    <span class="error"><b><p>(*required field.)</p></b></span>
    <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
    <input type="hidden" name="action" value="submit">

<div class = "contact_us">	
   <table align="center">
    <tbody>
    
<tr>
          <td><b>FIRST NAME</b></td>
          <td><input name="fname" type="text" value="<?php
            if(isset($_POST['fname']))
              echo($_POST['fname']);
             ?>" size="30" placeholder="Grey" /></td>
         <td><span class="error">* <?php echo $fnameErr;?></span></td> 
</tr>

<tr>
          <td><b>LAST NAME</b></td>
          <td><input name="lname" type="text" value="<?php
            if(isset($_POST['lname']))
              echo($_POST['lname']);
             ?>" size="30" placeholder="Joe" /> </td>
          <td><span class="error">* <?php echo $lnameErr;?></span></td>
</tr>

<tr>
         <td><b>EMAIL ADDRESS </b></td>
          <td> <input name="email" type="text" value=
            "<?php
            if(isset($_POST['email']))
              echo($_POST['email']);
             ?>" size="30" placeholder = "name@domain.com" /></td>
          <td> <span class="error">* <?php echo $emailErr;?> </span></td>
        </tr>
        <br>
        </tbody>
 </table>
 </div>
 
        <br>
    <p><b>YOUR MESSAGE</b> <span class="error">* <?php echo $message;?></span></p><br>
    <p><textarea name="message" rows="15" cols="80" placeholder="Type your Message here!"><?php
    if(isset($_POST['message']))
      echo($_POST['message']);
     ?></textarea>
    <div class="Contact">
    
    <br><p><b>GENDER</b> <span class="error">* <?php echo $genderErr;?></span></p>
   <b><p>Female <input type="radio" name="gender" value="female"></b></p> 
    <b><p>Male <input type="radio" name="gender" value="male"></b></p> 
    <b><p>Other <input type="radio" name="gender" value="other"></b></p> 
    
  <br> <br>
<div class="button">
    <input type="submit" name="submit" value="Send" />
    <input type="reset" value="Clear"/>
</div>
</div>
    </form>
    
  <?php if(isset($_SESSION['username'])) { ?>
  <div class="commands">
  <a href="logout.php">Logout</a>
  </div>
  <?php } ?>
  <br>
  <br>
  <br>
    <div class="button2">
    <a href="#top">Go to the Top</a>
    </div>
     <?php echo disclaimer(); ?>
    </body>
    </html>
    
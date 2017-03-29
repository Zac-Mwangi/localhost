<?php include"header.php" ?>
<style type="text/css">
<!--
.style1 {
	font-family: monospace, Calibri, "Calibri Light", "Calisto MT";
	color: #0066FF;
}
.style4 {font-family: "Courier New", Courier, monospace; color: #660099; }
.style5 {color: #660099}
-->
</style>
<body background="Backgrounds/269.bmp">



        <div class="container">
		
	<div class="row" style="background:#FFFFFF; opacity:0.8; border-radius:20px; margin-top:50px;">  
	<h3 
	align="center" class="style1"> Register Box </h3> 
	<form action="reg-submit-exec.php" method="post" id="fileForm" role="form">
        <div class="col-md-6">
         
            <div class="form-group"> 	 
     <label for="firstname"><span class="style4">First name</span>: </label>
    <input class="form-control" type="text" name="firstname" 
	id = "txt" onkeyup = "Validate(this)" required /> 
         <div id="errFirst"></div>    
            </div>

            <div class="form-group">
           <label for="lastname"><span class="style4">Last name:</span> </label> 
    <input class="form-control" type="text" name="lastname" 
	id = "txt" onkeyup = "Validate(this)" 
	placeholder="input your last name" required />  
                        <div id="errLast"></div>
            </div>

            <div class="form-group">
   <label for="email"><span class="style4">Email Address:</span> </label> 
   <input class="form-control" required type="text" name="email"
    id = "email"  onchange="email_validate(this.value);" />   
                        <div class="status" id="status"></div>
            </div>
<div class="form-group">
            <label for="phonenumber"><span class="style4">Phone Number:</span> </label>
    <input required type="text" name="phonenumber"
	 id="phone" class="form-control phone" maxlength="28"
onKeyUp="validatephone(this);" placeholder="phone number"/> 
          </div>
        
        </div><!-- ends col-6 -->
   
            <div class="col-md-6">
            <div class="form-group">
      <label for="username"><span class="style4">User name:</span></label> 
     <input class="form-control" type="text" name="username" 
	 id = "txt" onkeyup = "Validate(this)" 
	 placeholder="username to log in" required />  
                        <div id="errLast"></div>
            </div>

            <div class="form-group">
  <label for="password"><span class="style4">Password</span>: </label>
  <input required name="password" type="password" 
  class="form-control inputpass" minlength="4" maxlength="16"
    id="pass1" /> </p>

   <label for="password"><span class="style5">ReWrite Password</span>: </label>
    <input required name="password" type="password" 
	class="form-control inputpass" minlength="4" maxlength="16"
	 placeholder="Enter again to validate"  id="pass2" 
	 onKeyUp="checkPass(); return false;" />
         <span id="confirmMessage" class="confirmMessage"></span>
            </div>

            <div class="form-group">
            
                <?php //$date_entered = date('m/d/Y H:i:s'); ?>
      <input type="hidden" value="<?php //echo $date_entered; ?>" 
	  name="dateregistered">
                <input type="hidden" value="0" name="activate" />
                <hr>



            <div class="form-group">
  <input class="btn btn-success" type="submit" name="submit_reg" 
  value="Register">
            </div>
			
			 <div class="form-group">
  <input class="btn btn-success" type="reset" name="submit_reg" 
  value="Clear">
            </div>                     

            </fieldset>
      </form>
<!-- ends register form -->


          </div>
		   <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">LogIn</a></li>
            </ul>

	</div>
</div>
       <?php include"footer.php" ?>
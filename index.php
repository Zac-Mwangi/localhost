<?php include"header.php" ?>
<style type="text/css">
<!--
.style1 {
	font-family: monospace, Calibri, "Calibri Light", "Calisto MT";
	color: #0066FF;
}
.style4 {font-family: "Courier New", Courier, monospace; color: #660099; }
.style5 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
-->
</style>
<body background="Backgrounds/scene 11.JPG">
<div class="row" style="background:#FFFFFF; opacity:0.8; border-radius:20px; margin-top:50px; margin-left:350px; margin-right:350px;">  
	<h3 
	align="center" class="style1">Log In form </h3> 
	<form action="reg-submit-exec.php" method="post" id="fileForm" role="form">
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
	
	  <hr><div>
	  	  <p>not registered? do it here</p>
		                     </div>
		   <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">LogIn</a></li>
            </ul>
		   <ul class="nav navbar-nav navbar-right">
                <li><a href="reg.php">Register</a></li>
            </ul>
				</div>



            <div class="form-group">
  <input class="btn btn-success" type="submit" name="submit_reg" 
  value="Log In">
            </div>
			
			 <div class="form-group">
  <input class="btn btn-success" type="reset" name="submit_reg" 
  value="Clear">
            </div>                     

	
	          </div>
		   <ul class="nav navbar-nav navbar-right">
                
</ul>

	</div>
	</hr>
	 <?php include"footer.php" ?>
	 
	

	
	

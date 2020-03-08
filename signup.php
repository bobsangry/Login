<?php
	require "header.php";
	// include_once 'dbh.php'
?>
		<main>	
		<section>	
			<div style="background-image: url('images/banner-04.jpg')">	
		<section>	
					
                <div id="container_demo">  								
                    <div id="wrapper" >				
                        <div id="register" class="animate form">
                            <form  action="includes/signup.inc.php" method= "post"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname"><b>> Your username <</b></label>
                                    <input id="usernamesignup" name="uid" required="required" type="text" placeholder="toadlover47" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail"><b>> Your email <</b></label>
                                    <input id="emailsignup" name="mail" required="required" type="email" placeholder="yournameis@gmail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd"><b>> Your password <</b></label>
                                    <input id="passwordsignup" name="pwd" required="required" type="password" placeholder="Password"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd"><b>> Please confirm your password <</b></label>
                                    <input id="passwordsignup_confirm" name="pwd2" required="required" type="password" placeholder="Confirm"/>
                                </p>
                                <p class="signin-button" > 
								    <p><b>By creating an account you agree to our </b><a href="terms.php">Terms & Conditions</a>.</p>
									<input type="submit" name="signup-submit" value="Register"/> 			
								</p>							
                            </form>
                        </div>						
                    </div>
                </div>  
            </section>
<br><br><br><br><br><br>
                </div>  
            </section>
   
		</main>

<?php
	require "footer.php";
?>
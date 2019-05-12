<?php
	if(isset($_POST[a2'Submit']))
	{
		$name=$_POST['name'];
		$country=$_POST['country'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$Msg=$_POST['Msg'];

		$to='udaratharindu59@gmail.com';
		$subject='form submission';
		$Message="name: ".$name. "\n"."country: ".$country."\n"."email: ".$email."\n"."contact: ".$contact."\n"."Msg: ".$Msg;
		$headers="form: ".$email;

		if(mail($to,$subject,$Message,$headers))
		{
			echo "<h1> Sent Successfuly your msg"." ".$name.",We will contact your shotly!</h1>";
		}
		elseif 
	    {
			echo "Something went wrong!";
		}

	}

?>
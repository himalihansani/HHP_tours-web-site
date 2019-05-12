<?php
	if(isset($_POST['Submit']))
	{
		$name=$_POST['name'];
		$country=$_POST['country'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$msg=$_POST['msg'];

		$to='himalihansani869@gmail.com';
		$subject='form submission';
		$Message="name: ".$name. "\n"."country: ".$country."\n"."email: ".$email."\n"."contact: ".$contact."\n"."Msg: ".$msg;
		$headers="form: ".$email;

		if(mail($to,$subject,$Message,$headers))
		{
			echo "<h1> Sent Successfully your msg"." ".$name.",We will contact you shortly!</h1>";
		}
		elseif 
	    {
			echo "Sry..Something went wrong!!";
		}

	}

?>
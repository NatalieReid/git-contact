
<?php


/* Author: Natalie Reid
   Date:12-14-20
   Title:Contact Form
*/
// check if we set each field info  using if statement


if (isset($_POST['contact_name'])&& isset($_POST['contact_email']) && isset($_POST['contact_text'])){
	
	
	 $contact_name= $_POST['contact_name'];
	 $contact_email= $_POST['contact_email'];
	 $contact_text= $_POST['contact_text'];
	
	if(!empty($contact_name)&& !empty($contact_email) && !empty($contact_text)){
		
		$to='natalierougier@yahoo.com';
		$subject=' Contact form sent';
		$body=$contact_text;
		$headers='From:'.$contact_email;
		
		if(@mail($to,$subject,$body,$headers)){
			
			echo'Thanks for contact us.';
		}else{ 
		
		    echo 'Sorry error has occured try again later';
			
		}
		
		
		
		echo 'ok';
		
	} else{
		
	   echo ' All fields are required';
		
	}
}
?>

<br><br><br><br>


<h1><u><strong> Fill out Contact Form </h1></u></strong>

<form action="contact.php" method="POST">

    Name: <br><input type="text"   name="contact_name"><br><br>


     Email Address:<br> <input type="text"   name="contact_email"><br><br>


    Message:<br> <textarea   name="contact_text"  rows="7"  columns="30"></textarea><br><br>
	
	             <input type="submit" value=" Send">

               
			   

</form>


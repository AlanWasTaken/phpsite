    <?php

		if($_POST["submit"]){
						
			if($_POST['name']){
				$error="<br />Please enter your name";
			}
			
			if($_POST['email']){
				$error.="<br />Please enter your e-mail";
			}
			
			if($_POST['comment']){
				$error.="<br />Please enter a comment";
			}
			
			if($_POST['email'] AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
				$error.="<br />Please enter a valid e-mail address";
			}
			
			if($error){	
				$result='<div class="alert alert-danger">There were error(s):'.$error.'</div>';
			} else{
				if(mail("alan@blurbit.co.uk", "Comment from Site", "Name: ".$_POST['name']."Email: ".$_POST['email']."Comments: ".$_POST['comment'])){
					$result='<div class="alert alert-success">Thanks for reaching out!</div>';
				} else{
					$result='<div class="alert alert-danger">There was an error, please try again</div>';
				}
			}
		}

	?>
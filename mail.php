<!doctype html>
<html>
<head>
<title>My First Webpage</title>
!
<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
!
</head>
!
<body>
<div>

!
<?php




$email="";
$emailTo=$_POST['to'];

$subject=$_POST['subject'];
$body=$_POST['message'];
$headers= "From: " . $_POST['from'] . $_POST['fr'] ;
$j=0;
for($i=0;$i<strlen( $emailTo );$i++){
	
      
	if($emailTo[$i]==',')
	{
		$k=0;
               $email="";
		for(;$j!=$i;$j++)
			{
                                      $email .= $emailTo[$j];
                      
                        }


		$j++;
		
    
        echo $email;
    
    if (mail($email, $subject, $body, $headers)) {
        echo "   Mail sent successfully!   <br/>";
echo "  \n";
    } else {
        echo "   Mail not sent! <br/>";
echo "  \n";
    }
	}
    
	}
$email ="";
		$k=0;
		for(;$j!=$i;$j++)
			$email .=$emailTo[$j];
		$j++;
		echo $email;
   
    if (mail($email, $subject, $body, $headers)) {
        echo "   Mail sent successfully!   <br/>";
echo  "  \n";
    } else {
        echo "   Mail not sent! <br/>";
echo "  \n";
    }
?>
!
</div>
</body>
</html>
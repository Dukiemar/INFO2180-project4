hp
mysql_connect(
"0.0.0.0",
"yahsharahla"
);
mysql_select_db("cheapomail");

$recepient = $_POST["recipient"];
$subject = $_POST["subject"];
$body = $_POST["body"];


if(isset($_SESSION['username'])){
    $useridquery =  "SELECT id FROM User WHERE name = '$_SESSION[username]'; ";
    $recidquery =  "SELECT id FROM User WHERE name = '$recipient'; ";
    $userres = mysql_query($useridquery);
    $recres = mysql_query($recidquery);
    if(mysql_fetch_array($recres)==0){
        echo "Invalid Recipient Username";
        
    }else{
    
        while($row=mysql_fetch_array($userres)){
            while($row2=mysql_fetch_array($recres)){
                $sql = "INSERT INTO message (body,subject,user_id,recipient_id) VALUES ($body,$subject,'$row[id]','$row2[id]');";
            
                if (!mysql_query($sql))
  				    {
  					    die('Error: ' . mysql_error($con));
  				    }else{
				        echo "1 record added";
  				    }
            }
        }
    }
}else{
    echo "Session not set";
}
  

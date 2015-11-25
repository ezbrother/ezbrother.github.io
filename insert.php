
<?php
	header("Content-Type: text/html; charset=UTF-8");
	$db_host="localhost";
	$db_database="im21cace";
	$db_user="im21cace";
	$db_pass="tkatjd12"; 
	$dbconnection=mysql_connect($db_host,$db_user,$db_pass);
	$msg = "감사합니다. 곧 찾아뵙겠습니다.";

	mysql_select_db($db_database,$dbconnection);
	
	$email = $_POST['email'];
	

	mysql_query("INSERT INTO ssm_clients (`email`) VALUES ('$email')");

	mysql_close($dbconnection);
	
	
	 echo " <html><head>
                 <script name=javascript>
                if('$msg' != '') {
                         self.window.alert('$msg');
                 }

                location.href='index.html?';
 
                </script>
                </head>
                </html> ";
	
?>


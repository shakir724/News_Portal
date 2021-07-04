<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div>
		<h2>Payment Failure</h2>
	</div>

	<div>
		<?php 
			if(isset($_POST['status'])){
				if($_POST['status']=="failure"){
					echo "<p>Payment Failed.<br>Details Are Below.</p>";
					echo "<p>Failure Reason: ".$_POST['unmappedstatus']."</p>";
					echo "<p>Txn Id: ".$_POST['txnid']."</p>";
					echo "<p>Name: ".$_POST['firstname']."</p>";
					echo "<p>Email: ".$_POST['email']."</p>";
					echo "<p>Amount: ".$_POST['amount']."</p>";
					echo "<p>Phone No: ".$_POST['phone']."</p>";
					echo "<p>Product Info: ".$_POST['productinfo']."</p>";


				}
			}
								
/*					$subject="PAYMENT FAILURE";
			$to=$_POST['email'];
$body="Payment has not been done by ".$_POST['firstname']."for ".$_POST['productinfo']."
<br>Details:<br>
Name- ".$_POST['firstname']." <br>
Email- ".$_POST['email']." <br>
Mobile- ".$_POST['phone']." <br>
Stream- ".$_POST['productinfo']." <br>
Url- https://aic-demo.xyz/colleges/CMR/ <br>";

$sender_email  = 'From: _mainaccount@aic-demo.xyz' . "\r\n" .
                       'BCC: kishnu451@gmail.com' . "\r\n" .

            'MIME-Version: 1.0' . "\r\n" .

            'Content-type: text/html; charset=utf-8';

                         mail($to, $subject, $body, $sender_email);
                         
*/
			?>   
			
			<a href="home.php">Home</a>
	</div>
</body>
</html>
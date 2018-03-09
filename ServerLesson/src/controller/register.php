<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = $_POST['username'] ?? null;
    $password_1 = $_POST['password_1'] ?? null;
    $password_2 = $_POST['password_2'] ?? null;
    $telephon = $_POST['telephon'] ?? null;
    
    echo "Validate data" . "<br/>";
    $usernameSuccess = (is_string($username) && strlen($username) >= 2);
    $passwordSuccess = ($password_1 === $password_2 && strlen($password_1));
    $telephonSuccess = (is_numeric($telephon) && strlen($telephon) > 7);
    
    if ($usernameSuccess && $passwordSuccess && $telephonSuccess) {
        try {
            $connection = Service\DBConnector::getConnection();
        } catch (PDOException $exception) {
            http_response_code(500);
            echo "A problem occured, contact support";
            exit(10);
        }
        $sql = "INSERT INTO user(username, password) VALUES (\"$username\", \"$password_1\")";
        $affected = $connection->exec($sql);
        // $id = $connection->lastInsertId();
        if (! $affected) {
            echo implode(',', $connection->errorInfo());
        }
    }
    ;
}
;

// echo "if validate fail" . "<br/>";

?>

<!DOCTYPE HTML>
<HTML>
	<head>
		<meta charset="UTF-8">
		<title>Register  PHP</title>		
		<style>
		div{
		color:red;
		font-size: 60px;
				  
		}
				
		.bodyForm{
		padding:50px;
		margin: auto;
		text-align : center;
		border-radius:5px;
		
		width: 30%;
		 background: linear-gradient(to bottom, #33ccff 0%, #006EC4 100%);
		 box-shadow: 1px 1px 10px 1px #C9D4DC;
		}
		
		button{
		width:250px;
		border-radius:5px;
	
		}
		button:hover{
		width: 300px;
		}
		
		
		</style>
	</head>
	<body>
	<section class="bodyForm">
	<form action="/src/controller/register.php" method="POST" >
	
		<label for="username">Your username:</label>
		<input type="text" name="username" value="<?php

echo htmlentities($username ?? "")?>" />
		
		<br/>
		<?php

if (! ($usernameSuccess ?? true)) {
    ?>
		<div>
			<p>Error in your username STUPID</p>
		</div>
		<?php
}
?>
		
		<label for="telephone" > Telephon : </label>
		<input type="tel" name="telephon">
		<?php

if (! ($telephonSuccess ?? true)) {
    ?>
		<div>
			<p> error Telephon DICKHEAD</p>
		</div>
		<?php
}
?>
		<br/>
		<label for="password_1">Your password:</label>
		<input type="password" name="password_1"/>
		
		<br/>
		<?php

if (! ($passwordSuccess ?? true)) {
    ?>
		<div>
			<p>Error not only your Password, you're also a Error!</p>
		</div>
		<?php
}
?>
		<label for="password_2">Retype your password:</label>
		<input type="password" name="password_2"/>
		
		<br/>
		<button style="padding-bottum: 20px" type="submit">Submit</button>
		<br/>
	</form>
	</section>
	</body>
	

</html> 



<?php 
$currentTimeSlot = (new DateTime())->format("H");

if ($currentTimeSlot < 12){
     $toDisplay = "Good morning";    
}else if($currentTimeSlot < 18) {
    $toDisplay = "good Afternoon";    
}else if ( $currentTimeSlot < 22){
}else {
    $toDisplay = "Please, Sleep!";
}


$firstname = $_GET['firstname'] ?? 'John';
$firstname= htmlentities($firstname);

$lastname = $_GET['lastname'] ?? 'Doe';
$lastname= htmlentities($lastname);

$range= range(0,10);
?>

<!DOCTYPE HTML>
<HTML>
	<head>
		<meta charset="UTF-8">
		<title>My Title PHP</title>		
	</head>
	<body>
	<div class="conteiner" style="border: 1px solid black; text-align : center">
		Hello <?php echo  $firstname . ' ' . $lastname ?>
		the current time is : <?php echo $toDisplay; ?>
	<br/>
	<ul >
    	<?php foreach ($range as $element) {
    	    echo '<li>' . $element . '</li>';
    	}?>
	</ul>
	</div>
	</body>
	

</html> 


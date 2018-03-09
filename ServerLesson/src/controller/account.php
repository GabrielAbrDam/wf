<?php
include __DIR__ . '/init.php'?>


<!DOCTYPE html>
<html>
    <head>
        <title> ACCOUNT </title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php
        // get IG
        $displayAccountId = $_GET['id'] ?? null;
        
        // if id not given or not numeric dislay error else
        if (! $displayAccountId || ! is_numeric($displayAccountId)) {
            ?>
               	<div>
               		<P>To be displayed, this page need a valid numericid as ........</P>
               	</div>
           	<?php
        } else {
            try {
                $connection = Service\DBConnector::getConnector();
            } catch (PDOException $exception) {
                // if connectio fail display db driver error
                http_response_code(500);
                echo 'A problem occured, contact support';
                exit(1);
            }
            
            $sql = 'SELECT * FROM user WHERE username = :username ';
            $statement = $connection->prepare($sql);
            
            $statement->bindParam('username', $displayAccountUsername, PDO::PARAM_STR);
            
            $statement->execute();
            
            // create sql QUERY (string)
            // $sql = "Select username, PASSWORD from user WHERE id =" . $displayAccountId; // relation entre code et db username anbd password = nom dans MYSQL ATTENTION a lorthographe
            
            // execute the query and get the result (resulte = object)
            // $result = $connection->query($sql);
            
            // fetch all result in the object
            // $resultArray = $result->fetchAll();
            
            // check if we have line in restult
            if (empty($resultArray)) {
                ?>
                <div>
              	  <p>to be display, this page need a valid numeric id</p>
                </div>
               <?php
                return;
            }
            
            // foreach line displaY username and password
            foreach ($resultArray as $row) {
                ?>
                 <div>
                 	<P> Username : <?php
                
                echo $row['uername'];
                ?></p>                         
                 	<P> password : <?php
                
                echo $row['PASSWORD'];
                ?></P>             
                 </div>
                 <?php
            }
            
            // if no line display error
            // if we have lines into result
            // foreach line displaY username and password
        }
        ?>
        
        
  


 




    </body>
</html>
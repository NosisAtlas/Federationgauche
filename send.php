<?php


    // Database connection
        if(isset($_POST['name']) &&isset($_POST['adress']) && isset($_POST['telephone'])){
            include 'db_conn.php';

            function validate($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
             }

             $name = validate($_POST['name']); 
             $adresse = validate($_POST['adress']); 
             $telephone = validate($_POST['telephone']); 

             if (empty($name) || empty($adresse) || empty($telephone)){
                header("Location: index.html");
             }else{
                $sql = "INSERT INTO benevoles(name, adresse, telephone) VALUES('$name', '$adresse', '$telephone')";
                $res = mysqli_query($conn, $sql);
        
                if ($res) {
                    echo "Vous êtes enregistrer avec succes!";
                }else {
                    echo "Your message could not be sent!";
                }
             }


        }else{
            header("Location: index.html");
        }

?>
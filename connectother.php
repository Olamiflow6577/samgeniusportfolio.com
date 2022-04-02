<?php

$name = filter_input(INPUT_POST, 'name')
$email = filter_input(INPUT_POST, 'email')
$subject = filter_input(INPUT_POST, 'subject')
$message = filter_input(INPUT_POST, 'message')
if (!empty($name)){
    if (!empty($email)){
        if (!empty($subject)){
            if (!empty($message)){
            $host = "localhost";
            $dbname = "root";
            $dbemail = "root";
            $dbsubject = "root";
            $dbmessage = "root";
            $db = "portfolio"
            
            //Database Connection
            $conn = new sqli('localhost', 'root', 'portfolio');
            if (mysqli_connect_error()){
                die('Connect Error('.mysqli_connect_errno().')'
                .mysqli_connect_error());
            }
            else{
                $sql = "INSERT INTO my-portfolio (name, email, subject, message)
                value ('$name', '$email', '$subject', '$message')";
                if ($conn->query($sql)){
                    echo "Message Delivered"
                }
                else {
                    echo "Error: ".$sql ."<br>".conn->error;
                }
                $conn->close();
            }
            }
            else{ 
                echo "Message should not be Empty";
                die();
            }

        }
        else{ 
            echo "Subject should not be Empty";
            die();
        }

    }
    else{ 
        echo "Email should not be Empty";
        die();
    }

}
else{ 
    echo "Name should not be Empty";
    die();
}
?>
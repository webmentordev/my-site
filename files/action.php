<?php
    require 'init.php';
    $errors = array();

    if(isset($_POST['contact'])){
	    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        function generate_string($input, $strength = 16) {
            $input_length = strlen($input);
            $random_string = '';
            for($i = 0; $i < $strength; $i++) {
                $random_character = $input[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
            }
            return $random_string;
        }
        $c_code = generate_string($permitted_chars, 12);
        
        $name = htmlspecialchars(mysqli_real_escape_string($con, $_POST['c_name']));
        $email = htmlspecialchars(mysqli_real_escape_string($con, $_POST['c_email']));
        $subject = htmlspecialchars(mysqli_real_escape_string($con, $_POST['c_subject']));
        $msg = htmlspecialchars(mysqli_real_escape_string($con, $_POST['c_message']));
        
        
        if(empty($name)){array_push($errors, "Name is Empty");}
        if(empty($email)){array_push($errors, "Email is Empty");}
        if(empty($subject)){array_push($errors, "Subject is Empty");}
        if(empty($msg)){array_push($errors, "Message is Empty");}

        if(strpos($email, '@') !== false){}else{array_push($errors, "Email is not Correct");}
        if(strlen($msg) > 255){array_push($errors, "Message Words should be less then 255");}

        if(count($errors) == 0){
            $sql = "INSERT INTO contacts (c_name, c_email, c_subject, c_message, c_code) VALUES ('$name','$email','$subject','$msg','$c_code')";
            $res = mysqli_query($con, $sql);
            if($res){
                $success = "<div class='success'><p>Messsage Sent.! We'll Contact You In Few Hours</p></div>";
            }
            else{
                array_push($errors, "Message Couldn't be Sent");
            }
        }
    }
?>

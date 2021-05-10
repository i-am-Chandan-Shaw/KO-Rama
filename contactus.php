<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $message = $_POST['message'];
        $html = "Name = " . $name . " Email = " . $email;
        include('smtp/PHPMailerAutoload.php');
        try {
          $mail = new PHPMailer();
          $mail->Host = 'smtp.gmail.com';
          $mail->SMTPAuth = true;
          $mail->Username = 'chandanshawcampk12@gmail.com';
          $mail->Password = 'chandan12345';
          $mail->SMTPSecure = "ssl";
          $mail->SetFrom("chandanshawcampk12@gmail.com", 'New Form');
          $mail->addAddress('chandanshawcampk12@gmail.com');
          $mail->Subject = "New Form" ;
          $mail->Body = "Form Details : \r\n Name: " .$name . "\r\n Email: " .$email ."\r\n Phone: " .$tel ."\r\n Message: " .$message ;
                if ($mail->Send()) {
                    header('Location: index.html');
                }
            } catch (Exception $e) {
            echo '<script type="text/JavaScript">
                alert("Some error occured. Please try again");
                </script>' ;
        }
    }
?>

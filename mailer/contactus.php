<?php
    include('smtp/PHPMailerAutoload.php');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $message = $_POST['message'];
        $html = "Name = " . $name . " Email = " . $email;
        $mail = new PHPMailer(true);
        try {
          include('smtp/PHPMailerAutoload.php');
      $mail = new PHPMailer();
      $mail->Host = "smtp.ionos.com";
      $mail->Username = "chandan@thecontentjunction.com";
      $mail->Password = "Chandan@KOrama12345";
      $mail->SetFrom("chandan@thecontentjunction.com", 'TALLY-ACADEMY');
      $mail->addAddress('chandan@thecontentjunction.com');
      $mail->Subject = "New Job Enquiry(Outside Student)";
      $mail->Body = $html;
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

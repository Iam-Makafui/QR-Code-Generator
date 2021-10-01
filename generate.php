<?php
    session_start();
    // Include qrcode.php file.
    include "controller/qrcode.php";

    //creating conditional statments to store the data
    if($_POST['url']){
        $url = $_POST['url'];
        $imageName = "url.png";

        // Create object
        $qc = new QRCODE();
        // Create Text Code
        $qc->URL($url);
        // Save QR Code
        $qc->QRCODE(400,$imageName);
        //passing image name to session
        $_SESSION['QR_IMAGE'] = $imageName;

    }
    elseif ($_POST['email'] && $_POST['email_subject'] && $_POST['email_message']) {
      $email = $_POST['email'];
      $emailSubject = $_POST['email_subject'];
      $emailMessage = $_POST['email_message'];
      $imageName = "email.png";

      // Create object
      $qc = new QRCODE();
      // Create Text Code
      $qc->EMAIL($email, $emailSubject, $emailMessage);
      // Save QR Code
      $qc->QRCODE(400,$imageName);
      //passing image name to session
      $_SESSION['QR_IMAGE'] = $imageName;
    }
    elseif ($_POST['phone']) {
      $phone = $_POST['phone'];
      $imageName = "phone.png";

      // Create object
      $qc = new QRCODE();
      // Create Text Code
      $qc->PHONE($phone);
      // Save QR Code
      $qc->QRCODE(400,$imageName);
      //passing image name to session
      $_SESSION['QR_IMAGE'] = $imageName;
    }
    elseif ($_POST['tel'] && $_POST['sms']) {
      $phone = $_POST['tel'];
      $sms_text = $_POST['sms'];
      $imageName = "sms.png";

      // Create object
      $qc = new QRCODE();
      // Create Text Code
      $qc->SMS($phone, $sms_text);
      // Save QR Code
      $qc->QRCODE(400,$imageName);
      //passing image name to session
      $_SESSION['QR_IMAGE'] = $imageName;
    }
    elseif ($_POST['text']) {
      $message = $_POST['text'];
      $imageName = "text.png";

      // Create object
      $qc = new QRCODE();
      // Create Text Code
      $qc->TEXT($message);
      // Save QR Code
      $qc->QRCODE(400,$imageName);
      //passing image name to session
      $_SESSION['QR_IMAGE'] = $imageName;
    }
    elseif ($_POST['name'] && $_POST['address'] && $_POST['contact_phone'] && $_POST['contact_email']) {
      $name = $_POST['name'];
      $address = $_POST['address'];
      $phone = $_POST['contact_phone'];
      $email = $_POST['contact_email'];
      $imageName = "contact.png";

      // Create object
      $qc = new QRCODE();
      // Create Text Code
      $qc->CONTACT($name, $address, $phone, $email);
      // Save QR Code
      $qc->QRCODE(400,$imageName);
      //passing image name to session
      $_SESSION['QR_IMAGE'] = $imageName;
    }else {
      echo "Invalid Data";
    }

?>

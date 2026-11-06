<?php
ob_start();
header("X-Robots-Tag: noindex, nofollow", true);

if (!empty($_POST['name']) && !empty($_POST['email'])) {
    // IP Address
    $client  = $_SERVER['HTTP_CLIENT_IP'] ?? '';
    $forward = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? '';
    $remote  = $_SERVER['REMOTE_ADDR'];

    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }

    // Sanitize Input
    $name   = htmlspecialchars(trim($_POST['name']));
   $email       = htmlspecialchars(trim($_POST['email']));
    $phone       = htmlspecialchars(trim($_POST['phone']));
    
    $message    = htmlspecialchars(trim($_POST['message']));
    

    // File Upload
    $hs_image = '';
    if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) {
        $hs_targetDir = "uploads/";
        $hs_fileName = basename($_FILES["fileToUpload"]["name"]);
        $hs_fileType = pathinfo($hs_fileName, PATHINFO_EXTENSION);
        $allowedTypes = ['pdf', 'doc', 'docx', 'jpg', 'png'];

        if (in_array(strtolower($hs_fileType), $allowedTypes)) {
            $uniqueFileName = base64_encode(date("dmYhis")) . "_" . $hs_fileName;
            $hs_targetFilePath = $hs_targetDir . $uniqueFileName;

            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $hs_targetFilePath)) {
                $hs_image = $hs_targetFilePath;
            }
        }
    }

    // Email Content
    $email_subject = "$name - Sharp Associates Form";
    $email_message = "
    <html>
    <head><title>  Sharp Associates </title></head>
    <body style='font-family: Arial, sans-serif; background-color: #f8f8f8; padding: 20px;'>
        <div style='max-width: 700px; margin: auto; background: #fff; padding: 20px; border-radius: 10px;'>
            <h2 style='color: #d5630f;'>Sharp Associates Website Contact Form </h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Message:</strong> $message</p>";

    if ($hs_image !== '') {
        $email_message .= "<p><strong>Uploaded File:</strong> <a href='https://yourdomain.com/$hs_image' target='_blank'>View File</a></p>";
    }

    $email_message .= "</div></body></html>";

    // Headers
    $email_from = "abelraj@fyndxmarketing.com";
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "From: $name <$email_from>\r\n";

    // Recipients
    $recipients1 = "fyndxadmin@gmail.com";
    $recipients2 = "maaran@ysa-india.com";

    // Mail Send   
    if (mail($recipients1, $email_subject, $email_message, $headers, "-f $email_from")) {
        mail($recipients2, $email_subject, $email_message, $headers, "-f $email_from");

        echo '<script>alert("Thank you for contacting us! Our team will respond shortly.");</script>';
        echo '<meta http-equiv="refresh" content="3; URL=index.php">';
    } else {
        echo '<script>alert("Email sending failed. Please try again later.");</script>';
        echo '<meta http-equiv="refresh" content="3; URL=index.php">';
    }
} else {
    header("Location: contact.php");
    exit;
}

ob_flush();
?>

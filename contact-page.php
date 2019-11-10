<?php if(isset($_POST['submit'])) {
    $to="amitkeshri572@gmail.com";
    $from=$_REQUEST['name'];
    $subject="My Portfolio Contact \n\n";
    $body="Enquiry: My Portfolio Contact \n\n";
    $body.="Name :".$_REQUEST['name']."\n\n";
    $body.="Email Id :".$_REQUEST['email']."\n\n";
    $body.="Message:".$_REQUEST['message']."\n\n";
    if(mail($to, $subject, $body, "From:$from")) {
        ?> <script language="JavaScript"> location.replace("https://keshri-amit.github.io/portfolio/");
        alert("Thanks for Enquiry");
        </script> <?php
    }
    else {
        echo "Email Sending Error..";
    }
}
?>

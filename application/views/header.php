<?php
if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
$email = ($this->session->userdata['logged_in']['email']);
} else {
header("location: user_authentication/user_login_process");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="<?php echo base_url() ?>/assets/css/core.css" rel="stylesheet"/>
        <title><?php echo $title; ?></title> 
    </head>
    <body>
<?php


Class userPasswords{

    public $userPasswords;

    public function __construct()
    {
        // check if the user is logged in
        if(isset($_SESSION['user_id'])){
            header('Location: /auth/login.php');
        }
    }

    public function saveNewPassword($websiteUrl, $websiteName, $websitePassword, $websiteUsername)
    {

    }

}

// Load the view for the password dashboard
require "views/index.view.php";
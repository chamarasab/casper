<?php
session_start();

//$_SESSION["code"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # code...
    $userCaptcha = $_POST['captcha'];

    if (isset($_SESSION["code"]) && $userCaptcha == $_SESSION["code"]) {
        # code...
        showToast("captcha-success");
    } else {
        # code...
        showToast("captcha-failed");
    }
    
} else {
    # code...
    showToast("welcome");

}

function showToast($message) {
    $_SESSION["message"] = $message;
}

$captcha_url = "logic/captcha.php";

include_once "view/insert.html";
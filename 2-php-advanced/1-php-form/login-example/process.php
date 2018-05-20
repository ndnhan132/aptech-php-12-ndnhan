<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        echo "ko co email";
    }else{
        echo "co email";
    }
}
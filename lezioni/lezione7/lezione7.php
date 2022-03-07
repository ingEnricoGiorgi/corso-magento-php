<?php
$cookie_name = "user2";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + 100);
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}

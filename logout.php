<?php
session_start();
session_destroy();
header("location: login.php?message = 'you are  logged out'");
?
<?php
session_start();

session_destroy();
header('Location: http://sandbox.test/login.php');
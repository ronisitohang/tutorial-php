<?php 
session_start();
session_destroy();
header("location:../form-post-buatlogin.php");
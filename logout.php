<?php
session_start();

unset($_SESSION['registration']);
echo"<script>location.href='index.php';</script>";

?>
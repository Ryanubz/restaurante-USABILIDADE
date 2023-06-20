<?php
session_start();
session_destroy();
header('Location: loginfun1.php');
exit();
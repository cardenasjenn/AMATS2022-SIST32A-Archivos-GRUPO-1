<?php

session_start();

$_SESSION ['usuarioinfo'] = array();
header('Location: index.php');
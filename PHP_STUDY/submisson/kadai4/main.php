<?php
require "AirConditioner.php";

$airconditioner = new AirConditioner(20, 1);

$airconditioner ->showStatus();

$airconditioner ->heating();

$airconditioner ->showStatus();
?>

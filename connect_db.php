<?php
// **********************login gegevens van localhost***************************
// We gaan contact maken in de code met de mysql database
define("SERVER_NAME", "localhost");
define("USER_NAME", "am1a_loginregis18");
define("PASSWORD", "Geheim!");
define("DATABASE_NAME", "am1a_loginregistration");
// Met deze functie maken we contact met de mysql server
$conn = mysqli_connect(SERVER_NAME, USER_NAME, PASSWORD, DATABASE_NAME);
// *****************************************************************************
?>
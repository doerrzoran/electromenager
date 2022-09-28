<?php
echo $_POST["Host"];

$conn = pg_connect("host=$dbhost dbname=$dbname user=$dbuser port=$dbport password=$dbpassword")
<?php
print_r($_POST);

$conn = pg_connect("host=$dbhost dbname=$dbname user=$dbuser port=$dbport password=$dbpassword")
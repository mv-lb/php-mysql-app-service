<?php

// Configuration for database connection
putenv('DB_HOST="hmc-velocity-server"');
putenv('DB_USERNAME="hmcadmin"');
putenv('DB_PASSWORD="hmc@1234"');
putenv('DB_DATABASE="hmc-velocity-database"');

$host       = getenv('DB_HOST');
$username   = getenv('DB_USERNAME');
$password   = getenv('DB_PASSWORD');
$db_name     = getenv('DB_DATABASE');
$sslcert    = "ssl/DigiCertGlobalRootCA.crt.pem";

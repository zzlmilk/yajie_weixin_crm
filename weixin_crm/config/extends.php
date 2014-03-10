<?php


function setDatebase($database){

	 $_ENV['DBNAME'] = $database['DBNAME'];

     $_ENV['DBHOST'] = $database['DBHOST'];

     $_ENV['USER'] = $database['USER'];

     $_ENV['PASSWORD'] = $database['PASSWORD'];

}


?>
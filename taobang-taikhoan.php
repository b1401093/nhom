<?php
function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}
   $db = pg_connect(pg_connection_string_from_database_url() );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
   
   $sql =<<<EOF
      CREATE TABLE taikhoan
      (ID INT PRIMARY KEY     NOT NULL,
      tentk          CHAR(50)    NOT NULL,
      email       VCHAR(50) NOT NULL,
      mk       VCHAR(50) NOT NULL,
	   quyen     int    NOT NULL );
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret){
      echo "csdl da ton tai!!";
   } else {
      echo "tao csdl thanh cong!";
   }
   pg_close($db);
?>

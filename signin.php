<!DOCTYPE html>
<html lang="en">
<body>
Them Tai Khoan
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="border">
      ID<BR> <input type="text" name="id" value ="<?php echo $id;?>"><BR>
      tentk<BR> <input type="text" name="tentk" value ="<?php echo $tentk;?>"><BR>
      email<BR> <input type="text" name="email" value ="<?php echo $email; ?>"><BR>
      mật khẩu<br> <input type="text" name="mk" value="<?php echo $mk; ?>"> <br>
      quyền <BR> <input type="text" name="quyen" value ="<?php echo $quyen ?>"><BR>
         <input type="submit" name="submit" value="submit">
</form>
<?php
   $id=$_POST["id"];
   $tentk=$_POST["tentk"];
   $email=$_POST["email"];
   $mk=$_POST["mk"];
   $quyen=$_POST["quyen"];
   function pg_connection_string_from_database_url() {
      extract(parse_url($_ENV["DATABASE_URL"]));
      return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
   }
   $db = pg_connect(pg_connection_string_from_database_url() );
      if(!$db){
         echo "Error : Unable to open database\n";
      } else {
         echo "Open database successfully\n";
      }
   $sql = "INSERT INTO taikhoan (id, tentk, email, mk, quyen) VALUES ('$id','$tentk','$email', '$mk', '$quyen')";
      print "<BR>$sql<BR>";
      $ret = pg_query($db, $sql);
      if(!$ret){
         echo pg_last_error($db);
      } else {
         echo "thêm tài khoản thành công\n";
      }

      pg_close($db);
?>

</body>
</html>
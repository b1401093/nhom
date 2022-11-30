<!DOCTYPE html>
<html lang="en">
<body>
Xem bang tai khoan
    <?php
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
        $sql2 = "SELECT * FROM taikhoan";
            print "<BR>$sql2<BR>";
        $ret2 = pg_query($db, $sql2);
            if(!$ret2){
                echo pg_last_error($db);
            } else {
                echo "chon bang thanh cong\n";
            }
    ?>
        <br>
            <table boder="1" cellspacing="2" cellpadding="2">
            <tr><td>id</td> <td>tentk</td> <td>email</td> <td>mật khẩu</td> <td>quyền hạn</td> </tr>
        <?php 
            while($myrow=pg_fetch_assoc($ret2)){
                printf("<tr> <td>%d</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td>  </tr>,$myrow['id'],$myrow['tentk'],$myrow['email'],$myrow['mk'],$myrow['quyen']");
            }
	        pg_close($db);
        ?>
	</table>
</body>
</html>




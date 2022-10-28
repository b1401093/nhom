<?php
echo "a";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
		<title>BT-Nhom</title>
	</head>
	<body>
		<!-- menu -->
		<div class="header">
			<div class="header-menu">
				<ul class="menu">
					<li><a href="https://b1401093.github.io/nhom/">Trang chủ</a></li>
					<li>
						<a href="#ltw">Học LTW</a>
						<ul class="menu-con">
							<li><a href="">html</a></li>
							<li><a href="">css</a></li>
							<li><a href="">js</a></li>
						</ul>
					</li>
					<li><a href="#thanh">Thành</a></li>
					<li><a href="#ngan">Ngân</a></li>
					<li><a href="https://b1401093.github.io/nhom/">Github</a></li>
					<li><a href="#ht">Liên hệ</a></li>
					
				</ul>
			</div>
            <div class="dn-icon">
				<img src="user.jpg" alt="img of user!">
			</div>
        </div>
<!-- dang nhap -->

    <div id="id01" class="modal">
        
        <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
                
            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>

<!-- / -->	
		<script src="main.js">

		</script>
<!-- / -->	
		<br>
		<table class="poster">
			<tr>
				<th>Thông tin liên hệ:</th>
				<th>Học LTW w3shool:</th>
			</tr>
		
			<tr>
				<td>Email: ntthanh335@gmail.com <br>Email: nganb1908398@student.ctu.edu.vn</td>
				<td>					
					<a href="https://www.w3schools.com/html/default.asp">w3shool</a>					
				</td>
			</tr>
			
		</table>
		
<!-- kh/ -->
		<footer class="end"><i>Chúc các bạn học tốt</i></footer>
	</body>
</html>

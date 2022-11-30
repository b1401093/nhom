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
					<li><a href="https://bt-nhom5-ltw.herokuapp.com/">Trang chủ</a></li>
					<li>
						<a href="#ltw">Học LTW</a>
						<ul class="menu-con">
							<li><a href="https://bt-nhom5-ltw.herokuapp.com/hochtml.php">HTML</a></li>
							<li><a href="">CSS</a></li>
							<li><a href="">JavaScript</a></li>
							<li><a href="">PHP</a></li>
							<li><a href="">SQL</a></li>
							<li><a href="">HEROKU</a></li>
						</ul>
					</li>
					<li><a href="#thanh">Thành</a></li>
					<li><a href="https://github.com/b1401093/nhom.git">Github</a></li>
					<li><a href="#ht">Liên hệ</a></li>
					
				</ul>
			</div>
            <div class="dn-icon">
				<button onclick="document.getElementById('dn').style.display='block'">Đăng nhập</button>
				<img src="user.jpg" alt="img of user!">
			</div>
        </div>
<!-- dn -->
	<div id="dn" class="dn">
		<form class="form-dn" action="/signinin.php" method="post">
			<div class="img-user">
				<span onclick="document.getElementById('dn').style.display='none'" class="close" title="Close Modal">&times;</span>
				<img src="user.jpg" alt="Avatar">
			</div>

			<div class="container">
				<label for="uname"><b>Your Gmail</b></label><br>
				<input type="email" placeholder="Enter Your Gmail" name="uname" required><br>

				<label for="psw"><b>Password</b></label><br>
				<input type="password" placeholder="Enter Password" name="psw" required><br>
				
				<button type="submit">Login</button><br>
				<label>
					<input type="checkbox" checked="checked" name="remember"> Remember me
				</label>
			</div>

			<div class="sub-container" style="background-color:#f1f1f1">
				<button type="button" onclick="document.getElementById('dn').style.display='none'" class="cancelbtn">Cancel</button>
				<span class="psw">Forgot <a href="">password?</a></span>
				<button type="button" onclick="dk()" class="psw" >Đăng ký</button>
			</div>
		</form>
	</div>
<!-- dk -->
<div id="dk" class="dk">
	<form class="form-dk" action="/signin.php" method="post">
		<div class="img-user">
			<span onclick="document.getElementById('dk').style.display='none'" class="close" title="Close Modal">&times;</span>
			<img src="user.jpg" alt="Avatar">
		</div>
		<div class="container">
			<label for="psw"><b>Gmail</b></label><br>
			<input type="email" placeholder="Enter Gmail" name="psw" required><br>

			<label for="psw"><b>Password</b></label><br>
			<input type="password" placeholder="Enter Password" name="psw" required><br>
			<label for="psw"><b>Pre-Password</b></label><br>
			<input type="password" placeholder="Enter Pre-Password" name="psw" required><br>
			<label>
				<input type="checkbox" checked="checked" name="remember"> Tôi đồng ý tạo tài khoảng
			</label>		
		</div>		
		<div class="sub-container" style="background-color:#f1f1f1">
			<button type="button" onclick="signin()" class="psw">Đăng ký</button>
		</div>
	</form>
</div>

<!-- kh -->
		
		<div id="ltw">
			<div class="can-50"></div>
			<table class="kh" >
				<tr>
					<th colspan="3" class="kh-row-1"><h2>Các khóa học</h2></th>
				</tr>
				<tr>
					<td class="kh-row-2">
						<div class="html">
							<p>HTML là ngôn ngữ đánh dấu tiêu chuẩn cho các trang Web.<br>
								<br>
								Với HTML, bạn có thể tạo trang web của riêng mình.<br>
								<br>
								HTML rất dễ học - Bạn sẽ thích nó!</p>
							<button onclick="html()">Học HTML</button>
						</div>
					</td>
					<td class="kh-row-2">
						<div class="css">
							<p>CSS là ngôn ngữ chúng tôi sử dụng để tạo kiểu cho một tài liệu HTML.<br>
								<br>
								CSS mô tả cách hiển thị các phần tử HTML.<br>
								<br>
								Hướng dẫn này sẽ dạy bạn CSS từ cơ bản đến nâng cao.</p>
							<button>Học CSS</button>
						</div>
					</td>
					<td class="kh-row-2">
						<div class="js">
							<p>JavaScript là ngôn ngữ lập trình phổ biến nhất thế giới.<br>
								<br>
								JavaScript là ngôn ngữ lập trình của Web.<br>
								<br>
								JavaScript rất dễ học.<br>
								<br>
								Hướng dẫn này sẽ dạy bạn JavaScript từ cơ bản đến nâng cao.</p>
							<button>Học JS</button>
						</div>
					</td>	
				</tr>
				<tr>
					<td class="kh-row-2">
						<div class="php">
							<p>PHP là ngôn ngữ kịch bản máy chủ và là công cụ mạnh mẽ <br>
								<br>
								để tạo các trang Web động và tương tác.<br>
								<br>
								PHP là một giải pháp thay thế được sử dụng rộng rãi,<br>
								<br>
								miễn phí và hiệu quả cho các đối thủ cạnh tranh như ASP của Microsoft.<br></p>
							<button>Học PHP</button>
						</div>
					</td>
					<td class="kh-row-2">
						<div class="sql">
							<p>SQL là một ngôn ngữ tiêu chuẩn để lưu trữ, thao tác và truy xuất dữ liệu trong cơ sở dữ liệu.<br>
								<br>
								Hướng dẫn SQL của chúng tôi sẽ hướng dẫn bạn cách sử dụng SQL trong:<br>
								<br>
								MySQL, SQL Server, MS Access, Oracle, Sybase, Informix, Postgres <br>
								<br>
								và các hệ thống cơ sở dữ liệu khác.</p>
							<button>Học SQL</button>
						</div>
					</td>
					<td class="kh-row-2">
						<div class="heroku">
							<p>Heroku là gì? Nó là nền tảng đám mây cho phép các lập trình viên xây dựng,<br>
								<br>
								triển khai, quản lý và mở rộng ứng dụng (PaaS – Platform as a service).</p>
							<button>Học HEROKU</button>
						</div>
					</td>	
				</tr>							
			</table>			
		</div>

<!--thanh/ -->
		<div id="thanh">
			<div class="can-50"></div>			
			<table class="thanh-table" >
				<tr>
					<td rowspan="5" class="thanh-col-1">
						<img src="b1401093.jpg" alt="img of b1401093" >
					</td>
					<td class="thanh-col-2">&nbsp;</td>
				</tr>
				<tr>					
					<td class="thanh-col-2">
						<h4>Nguyễn Tấn Thành</h2>
					</td>	
				</tr>
				<tr>
					<td class="thanh-col-2">
						<h4>B1401093</h2>
					</td>
				</tr>
				<tr>
					<td class="thanh-col-2">
						<button type="button"><a href="https://b1401093.github.io/thanh/">CV</a></button>
					</td>			
				</tr>
				<tr>
					<td class="thanh-col-2">
						&nbsp;
					</td>
				</tr>
			</table> 
		</div>

	<!-- / -->		
		<div id="ht">
			<div class="ht-content">
				<h2>Content</h2>
				<label >Nội dung bạn muốn gửi đến chúng tôi</label><br>
				<input class="input-nd" type="text" name="nd" id="nd" value=""><br>
				<label>Tên của bạn</label><br>
				<input class="input-style" type="text" name="ten" id="ten" value=""><br>
				<label>Email của bạn</label><br>
				<input class="input-style" type="email" name="email" id="email" value=""><br>
				<button onclick="submit()">Gửi</button>
			</div>
			<div class="ht-as" id="demo">

			</div>
						
		</div>
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
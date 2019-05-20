<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<style type="text/css">
	* {
		padding: 0;
		margin: 0;
		box-sizing: border-box;
		font-family: sans-serif;
	}

	body {
		background: #C0C0C0;
	}

	div.konten {
		background: #FFFFFF;
		width: 350px;
		margin: 222px auto 0;
		border-radius: 16px;
		min-height: 256px;
		overflow: hidden;
	}

	div.kepala {
		background: #F85252;
		padding: 10px 22px;
		height: 60px;
	}

	div.kepala h2.judul {
		color: #FFF;
		font-weight: normal;
		line-height: 40px;
		display: inline-block;
	}

	div.lock {
		background-image: url("lock.png")
		background-position: center;
		background-size: 38px;
		display: inline-block;
		width: 25px;
		height: 25px;
    	margin-top: 8px;
    	float: left;
    	margin-right: 10px;
}

	div.artikel {
    	padding:10px 22px 0;
    	color: #808080;
}

	div.artikel div.grup {
    	margin: 16px 0;
}

	div.artikel div.grup label,
	div.artikel div.grup input {
    	display: block;
}

	div.artikel div.grup label {
    	font-size: 13px;
    	margin-bottom: 10px;
}

	div.artikel div.grup input[type="text"],
	div.artikel div.grup input[type="password"] {
    	width: 100%;
    	height: 30px;
    	padding: 0 10px;
    	background: #eeeeee;
    	border:none;
    	color: #808080;
}

	div.artikel div.grup input[type="submit"] {
    	background: #33cd77;
    	padding: 4px 16px;
    	margin: 0 auto;
    	border: 1px solid #33cd77;
    	border-radius: 2px;
    	color: #fff;
    	cursor: pointer;
}

	div.artikel div.grup input[type="submit"]:hover{
    	background: #28a45e;
}

	}
</style>
	<link rel="stylesheet">
</head>
<body>
	<div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">Login</h2>
        </div>
        <div class="artikel">
            <form action="http://localhost/baru/login.php" method="post">
                <div class="grup">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Masukkan Username Anda">
                </div>
                <div class="grup">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Masukkan password Anda">
                </div>
                <div class="grup">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
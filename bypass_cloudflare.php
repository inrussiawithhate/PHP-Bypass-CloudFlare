<?php
$data_msg = "";

if(isset($_POST['get'])){
	$target = $_POST['target'];

	// You Can Add More Sub Domains
	$subs = array(
		'ftp.',
		'webmail.',
		'mail.',
		'blog.',
		'forum.',
		'driect-connect.',
		'direct-connect.',
		'vb.',
		'cpanel.',
		'forums.',
		'home.',
		'shop.',
		'blogs.'
	);

	$data_msg = "<div class=\"status\">";

	foreach($subs as $sub){
		$ipaddr = @gethostbyname($sub.$target);
		if(intval($ipaddr)){
			$data_msg .= "<p>IP Address : ".$ipaddr."</p>";
		}
	}

	$data_msg .= "</div>";
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bypass CloudFlare</title>
	<style type="text/css">
	*{margin:0px; padding:0px;}
	body{direction:ltr; background:#ecf0f1;}

	div.status{
		font-family:Tahoma;
		font-size:12px;
		font-weight:bold;
		text-align:center;
		padding:15px 0;
	}

	div.head_fix{
		width:500px;
		margin:0px auto;
	}
	div.head_fix h1.title{
		font-family:Tahoma;
		font-size:36px;
		font-weight:bold;
		text-align:center;
		color:#2c3e50;
	}

	div.body_fix{
		width:310px;
		margin:0px auto;
	}
	div.body_fix td.text{
		font-family:Tahoma;
		font-size:12px;
		font-weight:bold;
	}
	div.body_fix input[type=text]{
		border:1px solid #000;
		border-radius:5px;
		padding:3px;
	}
	div.body_fix input[type=submit]{
		background:#2c3e50;
		border:1px solid #000;
		border-radius:5px;
		padding:3px;
		font-family:Tahoma;
		font-size:12px;
		font-weight:bold;
		color:#ffffff;
	}
	</style>
</head>

<body>
	<div class="head_fix">
		<h1 class="title">Bypass CloudFlare</h1>
	</div>

	<div style="padding:10px;"></div>

	<div class="body_fix">

		<form method="post" action="">
			<table border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td class="text"># Your Target :&nbsp;</td>
					<td><input type="text" name="target" placeholder="cloudflare.com" value="" /></td>
					<td>&nbsp;<input type="submit" name="get" value="Bypass" /></td>
				</tr>
			</table>
		</form>

		<?php echo $data_msg; ?>


	</div>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Teste RestFull</title>
<script type="text/javascript" src="application/lib/jquery-1.5.1.min.js"></script>
<script type="text/javascript">
$(document).ready(
	function() {
		$.ajax({
			url:'http://localhost/restfull/public/',
			type:'delete',
			data:'id=123456789/nome=HErmenegildo',
			success:function(data) {
				$("#div").html(data);
			},
			error:function() {
				alert("erro!!!");
			}
		});
	}
);

</script>
</head>
<body>
	<div id="div">
	</div>
</body>
</html>
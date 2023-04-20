<?php
	setcookie("India1","Virat Kohli",time()+2*24*60*60);
?>
<html>
	<body>
		<?php
			if(isset($_COOKIE["India1"]))
			{
					echo "Indian Player is ".$_COOKIE["India1"];
			}
			else
			{
				echo "No players from India";
			}
		?>
		<p>
			<strong>Note:</strong>
			You might have to reload the
			page to see the value of cookie.
		</p>
	</body>
</html>
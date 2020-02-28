<html>
	<body>
		<?php 
		$Number=$_POST["Number"];
		$Cost=$_POST["Cost"];
		 ?>
		 <?php 
		function Tongtien($Num,$Cost)
		 {
		 	if ($Num <=1; $Cost <=1) {
		 		return 1;
		 	}
		 	else{
		 		return $Num*$Cost*1.1;
		 	}
		 }
		 $Ketqua=Tongtien($Number)
		 echo "Tổng số tiền" .$Number."là:".$Ketqua;
		  ?>
	</body>
</html>
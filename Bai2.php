<html>
	<body>

		<?php 
		$Number=$_POST["Number"];
		$Cost=$_POST["Cost"];
		?>

		<?php 
			function Tongtien($Num,$Cost)
			{
				if ($Num <=1 && $Cost <=1) {
					return 1;
				}else {
					return $Num*$Cost*1.1;
				}
			}
			function HienthiM($value) {
				if ($value<0) return "-".HienthiM(-$value);
				return  number_format($value, 0) .' VNĐ';
			}
			$Ketqua=Tongtien($Number,$Cost);
			echo "Tổng số tiền ". HienthiM($Number) ." là: ". HienthiM($Ketqua);
		?>
	</body>
</html>
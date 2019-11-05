<DOCTYPE! html>
<html>
<head>
   <meta charset="utf-8">
	 <title>PHP</title>
</head>
<body>
     <?php
     $i = 0;
	   $i =++;
	   echo '<table border = "1" cellspacing = "0" cellpadding = "0" width = "700px" >';
	   for($i=0; $i<=100; $i++){
		 echo "<tr>";
		 echo "<td><center>$i</center></td>";
		 echo "<td><center>$i</center></td>";
		 echo "<td><center>$i</center></td>";
		 echo "<td><center>$i</center></td>";
		 echo "<td><center>$i</center></td>";
		 echo "<td><center>$i</center></td>";
		 echo "<td><center>$i</center></td>";
		 echo "<td><center>$i</center></td>";
		 echo "<td><center>$i</center></td>";
		 echo "<td><center>$i</center></td>";
		 echo "</tr>";
		 
	   }
	   echo '</table>';
	 
	   ?>
	 <fieldset style="width: 500px; margin: 0 auto">
	     <legend><strong>FORM</strong></legend>
		   <form action="index.php" method="post">
		   <label>Большая днина прямоугольного параллелепипеда</label><br>
		   <input type="float" name="Большая днина" placeholder="Большая днина"><br>
		   <label>Меньшая днина прямоугольного параллелепипеда</label><br>
		   <input type="float" name="Меньшая днина" placeholder="Меньшая днина"><br>
		   <label>Высота прямоугольного параллелепипеда</label><br>
		   <input type="float" name="Высота" placeholder="Высота"><br> <br>
		   <input type="submit" name="submit" value="Выводит результат"><br>
		   </form>
		 
	 </fieldset>
	 <?php
	   $S1 = $_POST['Меньшая днина']*$_POST['Большая днина'];
		 $S2 = $_POST['Меньшая днина']*$_POST['Высота'];
		 $S3 = $_POST['Высота']*$_POST['Большая днина'];
		 $V = $_POST['Меньшая днина']*$_POST['Большая днина']*$_POST['Высота'];
	     if(isset($_POST['submit'])){
			 echo "Площадь параллелепипеда 1 = ".$S1;
			 echo "<hr>";
			 echo "Площадь параллелепипеда 2 = ".$S2;
			 echo "<hr>";
			 echo "Площадь параллелепипеда 3 = ".$S3;
			 echo "<hr>";
			 echo "Оьбем параллелепипеда = ".$V;
			 echo "<hr>";
		 }else{
             echo "Пока нет габариты";
             echo "<hr>";			 
		 }
	 ?>
</body>
</html>

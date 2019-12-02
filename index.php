<DOCTYPE! html>
<html>
<head>
   <meta charset="utf-8">
	 <title>PHP</title>
</head>
<body>
     <table border="1" width="700px" height="700px" cellspacing="0">
     <?php 
	     $a =0;
		 for($i=1;$i<=10; $i++)
		 { echo "<tr>";
	       for ($j=1;$j<=10;$j++)
		   {
			   echo "<td><center>".$a."</td></center>";
			   $a++;
			   
		   }
			echo "</tr>";
		 }
      ?>
    </table>     
     <fieldset style="width: 500px; margin: 0 auto">
	      <legend><strong>FORM</strong></legend>
		  <form  method="post">
		   <label>Большая днина прямоугольного параллелепипеда</label><br>
		   <input type="number" name="Большая_днина" placeholder="Большая днина" value="1"><br>
		   <label>Меньшая днина прямоугольного параллелепипеда</label><br>
		   <input type="number" name="Меньшая_днина" placeholder="Меньшая днина" value="2"><br>
		   <label>Высота прямоугольного параллелепипеда</label><br>
		   <input type="number" name="Высота" placeholder="Высота" value="3"><br> <br>
		   <input type="submit" name="submit" value="Выводит результат"><br>
		  </form>
	 </fieldset>
	 <?php
	     if(isset($_POST['submit'])){
			 $S1 = $_POST['Меньшая_днина']*$_POST['Большая_днина'];
		         $S2 = $_POST['Меньшая_днина']*$_POST['Высота'];
		         $S3 = $_POST['Высота']*$_POST['Большая_днина'];
		         $V = $_POST['Меньшая_днина']*$_POST['Большая_днина']*$_POST['Высота'];
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

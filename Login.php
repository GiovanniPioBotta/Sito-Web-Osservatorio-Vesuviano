<html>
<header>
<div style="background:red;
border:1px solid red;">
<br>

<style="display: inline;position: relative;bottom:-6px;"><a href="Accesso.php" style="text-decoration: none;"><font size="4" face="Helvetica" color="white"> HOME &nbsp;&nbsp;&nbsp;&nbsp;</font></a></style>
<p align= center> <img src=https://www.ingv.it/images/INGV_Acronimo_50.png></p>
</div>
<style> 
body{ 	background-color: orange; } 
</style>
<body>
<br>
<?php
$db=mysqli_connect("localhost","root","","database")
or die ("non riesco a creare la connessione".mysqli_connect_error());
echo"<body> 
<div align='center'>
<table border='3'> 
<tr> 
<td align='center'>
<h4>Accesso alla piattaforma</h4>
</td>
<tr><td> 
<table> 
<form method='post' action='Login.php'> 

	<tr> 
	<td>Email</td> 
	<td><input type='text' name='email' size='50'></td> 
	</tr> 
	<tr> 
	<td>Password</td> 
	<td><input type='password' name='password' size='50'></td> 
	</tr> 
	
	<tr><tr><tr><td>
	<div class='col-12'>
    <button input type='submit' name='submit' class='btn btn-primary'>Invia</button>
	<button type='reset' class='btn btn-primary'>Reset</button>
    </div></td></tr></tr></tr>
	</form>
	</table>
	</td>
	</tr>
	</table>
	</div>
	</body>";
	If(ISSET($_POST["submit"])){
$email= $_POST['email'];
$password=$_POST["password"];
$cont = 0;
$cont2 = 0;
$comando1 =" SELECT email FROM informazioni";
		$comando2 = " SELECT password FROM informazioni";

		$ris1 = mysqli_query ($db,$comando1) or die ("Query fallita");
		
		
		
		while ($conf1= mysqli_fetch_array($ris1))
		{
			if ($conf1["email"] == $email){
				$cont = 1;
		}}



		$ris2 = mysqli_query ($db,$comando2) or die ("Query fallita");
		
		
		
		while ($conf2= mysqli_fetch_array($ris2))
		{
			if ($conf2["password"] == $password){
				$cont2 = 1;
		}}
		
		if($cont==1 && $cont2==1){
			echo "<form method='post' action='INGV.php'> 
				 <p align=center> <button input type='submit'>Accedi</button>
				  </form></p>";
		}else{
			echo "<h4> Errore, i dati inseriti non sono corretti. Ti invitiamo a riprovare. </h4>";
			
		}}
?>


</body> 
</html>
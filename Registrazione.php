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

<?php
	$db=mysqli_connect("localhost","root","","database")
or die ("non riesco a creare la connessione".mysqli_connect_error());

echo"<body> 
<br>
<div align='center'>
<table border='5'> 
<tr> 
<td align='center'>
<h4>Inserisci le informazioni</h4>
</td>
<tr><td> 
<br>
<table> 
<form method='post' action='Registrazione.php'> 

<div>
	<tr> 
	<td>ID</td> 
	<td><input type='text' name='ID' size='50'></td> 
	</tr>
</div><div>	
	<tr> 
	<td>Nome</td> 
	<td><input type='text' name='name' size='50'></td> 
	</tr> 
</div><div>
	<tr> 
	<td>Cognome</td> 
	<td><input type='text' name='username' size='50'></td> 
	</tr> 
</div><div>
	<tr> 
	<td>Indirizzo</td> 
	<td><input type='text' name='indirizzo' size='50'></td> 
	</tr>
</div><div>	
	<tr> 
	<td>Email</td> 
	<td><input type='text' name='mail' size='50'></td> 
	</tr>
</div><div>	
<tr> 
	<td>Password</td> 
	<td><input type='password' name='password' size='50'></td> 
	</tr>
</div><div>
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
$id=$_POST["ID"];
$nome=$_POST["name"];
$cognome=$_POST["username"];
$indirizzo=$_POST["indirizzo"];
$email=$_POST["mail"];
$password=$_POST["password"];

$query = "INSERT INTO informazioni (id,nome,cognome,indirizzo,email,password)
       VALUES ('$id','$nome','$cognome','$indirizzo','$email','$password')";
	   
$registrazioni = mysqli_query($db,$query);
if (!$registrazioni) {
   die("Errore nella query $query: " . mysqli_error());
   }else{
	   echo "<form method='post' action='INGV.php'> 
				 <p align=center> <button input type='submit'>Accedi</button>
				  </form></p>";
	   
}}
?>
</body>
</html>
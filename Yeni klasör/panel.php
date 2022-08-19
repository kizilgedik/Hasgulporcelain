<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #AA0444;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
   	<th>Id</th>
    <th>Name - Surname</th>
    <th>Phone number</th>
    <th>E-mail </th>
    <th>Topic</th>
    <th>Message</th>
    <th>Edit</th>
  </tr>
  
  <?php
	
	
     include("baglanti.php");
	
    session_start();
    if($_SESSION["user"]=="")
    {
        echo "<script>window.location.href='cikis.php'</script>";
    }
    
    else{
		echo"Merhaba!!!<br>";
        echo"User Name : ".$_SESSION['user']."<br>";
        echo"<a href='cikis.php'>Exit </a><br><br><br>";
        
        
       

$sec="Select * From message";
$sonuc=$baglan->query($sec);

if($sonuc->num_rows>0)
	
{
    while($cek=$sonuc->fetch_assoc())
    {
        echo "
        
        <tr>
			<td>".$cek['Id']."</td>
            <td>".$cek['NameSurname']."</td>
            <td>".$cek['PhoneNumber']."</td>
            <td>".$cek['Email']."</td>
            <td>".$cek['Topic']."</td>
            <td>".$cek['Message']."</td>			
			<td><a href=''> Edit </a> | <a href=''> Delete </a></td>  
			
			
		</tr>";
		//edit ve delete kısmını çalıştıramadım.
		
    }
}

else{
    
    echo"There is no data stored in the database !!!<br>"; 
    }

		
}
?>


</table>

</body>
</html>




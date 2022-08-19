<!DOCTYPE html>
<html>
<head>
<title>Enter Form </title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: #aa0444;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid #aa0444;
}

/* Set a style for the submit button */
.btn {
  background-color: #aa0444;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form action="panelgiris.php" method="post" style="max-width:500px;margin:auto">
  <h2>				Panel Form</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="User Name" name="usrnm">
  </div>


  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>

  <button type="submit" class="btn">	ENTER </button>
</form>

</body>
</html>

  <?php

    session_start();

    if(isset($_POST["usrnm"], $_POST["psw"]))
    {
        if($_POST["usrnm"]=="admin" && $_POST["psw"]=="admin1234")
        {
            $_SESSION["user"]=$_POST["usrnm"];
            header("location:panel.php");
            
        }
        
        else{
            echo "<script>alert('Username or password is incorrect! !')</script>";
        }
            
    }




?>

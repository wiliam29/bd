<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	// checking empty fields
	if(empty($name) || empty($age) || empty($email)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$age = $res['age'];
	$email = $res['email'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cursinho</title>
<link rel="stylesheet" type="text/css" href="css/theme.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script>
   var StyleFile = "theme" + document.cookie.charAt(6) + ".css";
   document.writeln('<link rel="stylesheet" type="text/css" href="css/' + StyleFile + '">');
</script>
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="css/ie-sucks.css" />
<![endif]-->
</head>

<body>
	<div id="container">
    	<div id="header">
        	<h2>Cursinho solidario 29 de Abril</h2>
    <div id="topmenu">
            	<ul>
                	
                    
                    
              </ul>
          </div>
      </div>
        
        <div id="wrapper">
            <div id="content">
       			<div id="rightnow">
                    <h3 class="reallynow">
                        <span>CADASTRO ALUNO</span>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age" value="<?php echo $age;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
 <div id="sidebar">
  				<ul>
                	<li><h3><a href="#" class="house">inicio</a></h3>
                        <ul>
                        	<li><a href="index.html" class="report">inicio</a></li>
                    		<li><a href="#" class="report_seo">-----------</a></li>
                            <li><a href="#" class="search">-----------</a></li>
                        </ul>
                    </li>
                    <li><h3><a href="#" class="folder_table">-----------</a></h3>
          				<ul>
                        	<li><a href="#" class="addorder">-----------</a></li>
                          <li><a href="#" class="shipping">-----------</a></li>
                            <li><a href="#" class="invoices">-----------</a></li>
                        </ul>
                        <li><h3><a href="#" class="user">professor</a></h3>
                            <ul>
                              <li><a href="cadasto_prof.html" class="useradd">Adicionar Professor</a></li>
                              
                              <li><a href="pesquisa_prof.html" class="search">pesquisar professor</a></li>
                              
                          </ul>
                      </li>
                        <li><h3><a href="#" class="user">Coordenador</a></h3>
                            <ul>
                              <li><a href="cadasto_coordenador.html" class="useradd">Adicionar Coordenador</a></li>
                                                                                         
                          </ul>
                            <li><h3><a href="#" class="user">Coordenador de materia</a></h3>
                            <ul>
                              <li><a href="cadasto_comateria.html" class="useradd">Adicionar C. materia</a></li>
                                                                                         
                          </ul>
                      </li>
                  <li><h3><a href="#" class="user">Aluno</a></h3>
          				<ul>
                            <li><a href="cadasto_aluno.html" class="useradd">Adicionar aluno</a></li>
                            
            				<li><a href="pesquisa_aluno.html" class="search">pesquisar aluno</a></li>
                            <li><a href="#" class="report">presensa</a></li>                            
                        </ul>
                    </li>
				</ul>       
          </div>
      </div>
        
        

        </div>
</div>
</body>
</html>


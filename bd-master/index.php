<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
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
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Age</td>
		<td>Email</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['age']."</td>";
		echo "<td>".$res['email']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
	
	
	 <div id="sidebar">
  				<ul>
                	<li><h3><a href="#" class="house">inicio</a></h3>
                        <ul>
                        	<li><a href="index.php" class="report">inicio</a></li>
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



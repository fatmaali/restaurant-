<?php
include_once "menu.php";

   $idX = $_POST['foodX'];
   $w=new menu(25);
   $found=$w->search($idX);
   if($found){
	$s=new menu($found);
    $s->deletefood($s);
       if($s->deletefood($s)){
			echo "deleted";
		}else
		{
			echo"failed";
		}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Rosto</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript"   type="text/javascript" >

		
function validateForm() { 
  
var x=document.forms.userform.Email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  } 
  	 

    
		  
		return true;
}
		</script>
</head>
<body>
<div id="container_wrapper_outter">
  <div id="container_wrapper_inner">
    <div id="container">
      <div id="menu">
        <ul>
          <li><a href="Home.html" class="current">Home</a></li>
          <li><a href="Gallery.html">Gallery</a></li>
          <li><a href="Diraction.html" class="margin_r_330">Direction</a></li>
          <li><a href="reservationOut.php">Reservation</a></a></li>
          <li><a href="Menu.html">Menu</a></a></li>
          <li><a href="evaluationnn.php">Evaluation</a></li>
        </ul>
        <div id="site_title">
          <h1> <a href="Home.html">Rosto <span><p dir="rtl" lang="ar">  </p>  </p> </span></a> </h1>
        </div>
      </div>
      <!-- end of menu -->
      <div id="banner">
        <div id="banner_section">
          <h2>Our Goals</h2>
          <p>We introduce what suits the Egyptian taste and integrate between different cultures, by merging different Oriental and western recipes to make new dishes that are a fusion of the Eastern and the Western tastes with the overwhelming Egyptian touch..</p>
        </div>
        <!-- banner section -->
      </div>
      <!-- end of banner -->
      
      
      <div id="content_wrapper""  >
        <div id="content" >
          <div id="main_column" >
          
          
          <H1>ADMIN</H1> 
          
           <br /><br /> <br /><br /> <br /><br /> <br /><br />
          
		<form name ="delete" action = "delete2.php" onsubmit = "return validateForm()">
			<table>
				<tr>
					<td><input type="text" name= "Email" ></td>
					<td><input type ="submit" name="submit" value="DELETE"></td>
				</tr>
			</table>
		</form>
	
          <br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br />
     
     
<table  align="center">
<tr><td>
  



</td></tr>
</table>
     
          
<div>
		



     </div>       
            
          <!-- end of main column -->
          
          
          
          <div id="side_column"  style="position:absolute;right:-5px;top:65px;" >
            <div class="side_column_section"  >
              <h4>Categories</h4>
              <ul class="category_list" id="nav">
                <li><a href="Login.php">Login</a></li>
                <li><a href="signup.php">Signup</a></li>
                 <li><a href="Order.php">Order</a></li>
                 <li><a href="partyReserv.html">Party Reservation</a></li>
                 <li><a href="ReservEdit.php">Track Your Reservation</a></li>
                  <li><a href="partyupdate.html">Track Your Reservation Party</a></li>
                    
                <li><a href="About.html">About</a></li>
                
              </ul>
            </div>
            <div class="side_column_section"  >
              <h4>Our Address</h4>
              <a href="Diraction.html"><img src="images/map.jpg" alt="" /></a>
              <p> Address:6 - Oct.,<br />
                El-Hossary Square<br />
                <br />
                Tel: (002)388-3200<br />
                Tel: (002)345-5555<br />
                <br />
                Email:<br />
                <a href="#">sales@rosto.com</a> </p>
            </div>
            <div class="side_column_bottom"  id="nav"> </div>
          </div>
          <!-- end of side column -->
          <div class="cleaner"></div>
        </div>
        <!-- end of content -->
        <div class="cleaner"></div>
        <div class="content_bottom"></div>
      </div>
      <!-- end of content wrapper -->
      <div id="footer">
        <ul class="footer_menu">
          <li><a href="Home.html">Home</a></li>
          <li><a href="Menu.html">Menu</a></li>
          <li><a href="Gallery.html">Gallery</a></li>
          <li><a href="Evaluation.html">Evaluation</a></li>
          <li><a href="About.html">About</a></li>
          <li class="last_menu"><a href="logout.php">Logout</a></li>
        </ul>
        Copyright &copy; 2016 <a href="#">ACU</a> | Designed by <a target="_blank" rel="nofollow" href="http://www.templatemo.com">templatemo</a></div>
    </div>
    <!-- end of container -->
  </div>
</div>
</body>
</html>

<?php
require_once 'dbconnection.php';
include_once 'class_login.php';
include_once 'functions.php';
dbconnection::getConnection();

class class_application {
    private static $instance = null;
    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new class_application();
        }
        return self::$instance;
    }    

public static function submit_app($fn,$ln,$mn,$sn,$co,$yl,$un,$pa,$ma,$la,$mo,$mon,$fan,$moa,$faa,
								  $mol,$mom,$fal,$fam,$gn,$ga,$re,$gl,$gm,$sc,$cov,$br,$in){    
   
$firstname = ucwords(strtolower(filter_var($fn,FILTER_SANITIZE_STRING)));
$lastname = ucwords(strtolower(filter_var($ln,FILTER_SANITIZE_STRING)));
$middlename = ucwords(strtolower(filter_var($mn,FILTER_SANITIZE_STRING)));
$student_number = filter_var($sn,FILTER_VALIDATE_INT);
$course = ucwords(strtolower(filter_var($co,FILTER_SANITIZE_STRING)));
$year_level = filter_var($yl,FILTER_VALIDATE_INT);
$units = filter_var($un,FILTER_VALIDATE_INT);
$perm_address=ucwords(strtolower(filter_var($pa,FILTER_SANITIZE_STRING)));
$mailing_address=ucwords(strtolower(filter_var($ma,FILTER_SANITIZE_STRING)));
$landline=filter_var($la,FILTER_VALIDATE_INT);
$mobile=filter_var($mo,FILTER_VALIDATE_INT);

$mother_name= ucwords(strtolower(filter_var($mon,FILTER_SANITIZE_STRING)));
$father_name= ucwords(strtolower(filter_var($fan,FILTER_SANITIZE_STRING)));
$mother_address= ucwords(strtolower(filter_var($moa,FILTER_SANITIZE_STRING)));
$father_address= ucwords(strtolower(filter_var($faa,FILTER_SANITIZE_STRING)));
$mother_landline= filter_var($mol,FILTER_VALIDATE_INT);
$mother_mobile= filter_var($mom,FILTER_VALIDATE_INT);
$father_landline= filter_var($fal,FILTER_VALIDATE_INT);
$father_mobile= filter_var($fam,FILTER_VALIDATE_INT);

$guardian_name= ucwords(strtolower(filter_var($gn,FILTER_SANITIZE_STRING)));
$guardian_address= ucwords(strtolower(filter_var($ga,FILTER_SANITIZE_STRING)));
$relationship = ucwords(strtolower(filter_var($re,FILTER_SANITIZE_STRING)));
$guardian_landline= filter_var($gl,FILTER_VALIDATE_INT);
$guardian_mobile= filter_var($gm,FILTER_VALIDATE_INT);

$scholarship= ucwords(strtolower(filter_var($sc,FILTER_SANITIZE_STRING)));
$coverage=$cov;
$bracket=$br;
$income=$in;

        
 if(preg_match('/^[a-zA-Z ]{1,30}$/', $firstname )) { }  /*checks for valid input, otherwise displays error*/
 else {
 	echo  "<li class='list-group-item list-group-item-danger'>Invalid first name!</li>" ;
  } 

 if(preg_match('/^[a-zA-Z ]{2,30}$/', $lastname)) {}
 else {
 	echo  "<li class='list-group-item list-group-item-danger'>Invalid last name!</li>" ;
  } 
  
  if(preg_match('/^[a-zA-Z ]{2,30}$/', $middlename)) {}
 else {
 	echo  "<li class='list-group-item list-group-item-danger'>Invalid middle name!</li>" ;
  } 
 if(preg_match('/^[\d]-{8,11}$/', $student_number))  {}
 else {
 	echo  "<li class='list-group-item list-group-item-danger'>Invalid student number!</li>" ;
  }
  
  
  
  echo'</ul></div><div class="col-sm-4"><ul class="list-group">';

 if(preg_match('/^[\w\d]{4,30}$/', $password)) {}
 else {
 	echo  "<p id=\"error\">&nbsp&nbspInvalid password!</p>" ;
  }
  
  if(preg_match('/^[\w\d]{4,30}$/', $password2)) {}
 else {
 	echo  "<p id=\"error\">&nbsp&nbspConfirm password!</p>" ;
  }
   if($password==$password2) {}
 else {
 	echo  "<p id=\"error\">&nbspPasswords don't match!</p>" ;
  }
 
   echo'</ul></div><div class="col-sm-4"><ul class="list-group">';
 
 if(preg_match('/^[\w\d ,#.]{4,50}$/',$home)) {}
 else {
 	echo  "<p id=\"error\">&nbsp&nbspInvalid home address!</p>" ;
 return false;
  }

  if($bday) {}
 else {
 	echo  "<p id=\"error\">&nbsp&nbspInvalid birthday!</p>" ;
 return false;
  }
if(preg_match('/^[a-zA-Z ]{6,50}$/',$occupation)) {}
 else {
 	echo  "<p id=\"error\">&nbsp&nbspInvalid occupation!</p>" ;
 return false;
  }
  

 
 if(preg_match('/^[\d]{3,8}$/', $income)) {}
 else {
 	echo  "<p id=\"error\">&nbsp&nbspInvalid income!</p>" ;
 return false;
  }

 if($creditcard)  {}
 else {
 	echo  "<p id=\"error\">&nbsp&nbspInvalid Credit Card!</p>" ;
 return false;}

 if(preg_match('/^[\d]{4,30}$/', $creditno))  {}
 else {
 	echo  "<p id=\"error\">&nbsp&nbspInvalid Credit Card no.!</p>" ;
 return false;
  }
  
   if(isset($_POST['agree'])) {}
 else {
 	echo  "<p id=\"error2\">&nbspYou must agree to the &nbsp&nbsp terms and conditions!</p>" ;
 return false;
  }
  
		
mysql_query("INSERT INTO personalinfo VALUES(0,'$firstname','$lastname','$email','$home','$password','$bday')") or die("Error in query1:".mysql_error());	
             
logdata( " registered - Name: ".$firstname." ".$lastname." Email: ".$email,null);

echo "<p id=\"sucess\">&nbspThank you for submitting your application!</p>";
sleep(1);


return true;
    }  
    
 public static function update_profile($f,$l,$e,$p,$p2,$h,$b,$o,$i,$c,$cn,$userid){ /*updates user information, done by either the user himself or by an admin*/
        
$firstname = ucwords(strtolower(filter_var($f,FILTER_SANITIZE_STRING)));
$lastname = ucwords(strtolower(filter_var($l,FILTER_SANITIZE_STRING)));
$password = filter_var($p,FILTER_SANITIZE_STRING);  
$password2 = filter_var($p2,FILTER_SANITIZE_STRING);
$home = ucwords(strtolower(filter_var($h,FILTER_SANITIZE_STRING)));
$bday = $b;                         /*this doesnt need validation since it can be easily selected*/
$occupation = ucwords(strtolower(filter_var($o,FILTER_SANITIZE_STRING)));
$income = filter_var($i,FILTER_SANITIZE_NUMBER_FLOAT);
$creditno =filter_var($cn,FILTER_VALIDATE_INT);
$email = filter_var($e,FILTER_VALIDATE_EMAIL);
$creditcard=$c;                     /*this doesnt need validation since its from a dropdown list*/

 if(preg_match('/^[a-zA-Z ]{3,30}$/', $firstname)) { }  /*checks for valid input, otherwise displays error*/
 else {     
     echo  "<p id=\"error\">&nbsp&nbspInvalid first name!</p>" ;
     return false;
    } 
  
 if(preg_match('/^[a-zA-Z ]{2,30}$/', $lastname)) {}
 else {
 	echo  "<p id=\"error\">&nbsp&nbspInvalid last name!</p>" ;
 return false;
  } 

   if($email) {}
 else {
 	echo  "<p id=\"error\">&nbsp&nbspInvalid email!</p>" ;
 return false;
  }

 if(preg_match('/^[\w\d]{4,30}$/', $password)) {}
 else {
 	echo  "<p id=\"error\">&nbsp&nbspInvalid password!</p>" ;
 return false;
  }
  
   if(preg_match('/^[\w\d]{4,30}$/', $password2)) {}
 else {
 	echo  "<p id=\"error\">&nbsp&nbspConfirm password!</p>" ;
 return false;
  }
   if($password==$password2) {}
 else {
 	echo  "<p id=\"error\">&nbspPasswords don't match!</p>" ;
 return false;
  }
 
 if(preg_match('/^[\w\d ,#.]{4,50}$/', $home)) {}
 else {
 	echo  "<p id=\"error\">&nbsp&nbspInvalid home address!</p>" ;
 return false;
  }

  if($bday) {}
 else {
 	echo  "<p id=\"error\">&nbsp&nbspInvalid birthday!</p>" ;
 return false;
  }
 
  if(preg_match('/^[a-zA-Z ]{6,50}$/',$occupation)) {}
 else {
 	echo  "<p id=\"error\">&nbsp&nbspInvalid occupation!</p>" ;
 return false;
  }
 
 if(preg_match('/^[\d]{4,8}$/', $income)) {}
 else {
 	echo  "<p id=\"error\">&nbsp&nbspInvalid income!</p>" ;
 return false;
  }

 if($creditcard) {}
 else {
 	echo  "<p id=\"error\">&nbsp&nbspInvalid Credit Card!</p>" ;
 return false;}

 if(preg_match('/^[\d]{4,30}$/', $creditno)) {}
 else {
 	echo  "<p id=\"error\">&nbsp&nbspInvalid Credit Card no.!</p>" ;
 return false;
  }	  
			
mysql_query("UPDATE personalinfo SET firstname='$firstname',lastname='$lastname',email='$email',home='$home',password='$password',bday='$bday' WHERE userid=$userid") or die("Error in query1:".mysql_error());	
mysql_query("UPDATE workinfo SET occupation='$occupation',income='$income',creditcard='$creditcard', cardno='$creditno' WHERE userid=$userid") or die ("Error in query".mysql_error());
                
echo "<p id=\"sucess\">&nbspSucesfully Updated Info!</p>";
return true; /*for TDD test purposes, upon sucesful profile update*/
}   
     
}
?>

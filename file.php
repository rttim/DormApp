<?php
require_once 'functions.php';
require_once 'class_application.php';
include 'head.php'
?>

<div class="alert alert-info fade in" data-alert="alert">
      <h3>
        <strong>
         Application for Admission to UPV Dormitories 
        </strong>
      </h3>
  </div>
  <div class="row">
  <div class="col-sm-4">
<ul class="list-group">
  <?php
 if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST['agree'])){
          
		  $coverage = isset($_POST['coverage']) ? $_POST['coverage'] : 'none' ;
	
		  
     class_application::submit_app(trim($_POST['first_name']),
        trim($_POST['last_name']),
		trim($_POST['middle_name']),
		trim($_POST['student_number']),
		trim($_POST['course']),
		trim($_POST['year_level']),
		trim($_POST['units']),
		trim($_POST['perm_address']),
		trim($_POST['mail_address']),
		trim($_POST['landline']),
		trim($_POST['mobile']),
		trim($_POST['mother_name']),
		trim($_POST['father_name']),
		trim($_POST['mother_address']),
		trim($_POST['father_address']),
		trim($_POST['mother_occupation']),
		trim($_POST['father_occupation']),
		trim($_POST['mother_landline']),
		trim($_POST['mother_mobile']),
		trim($_POST['father_landline']),
		trim($_POST['father_mobile']),
		trim($_POST['guardian_name']),
		trim($_POST['guardian_address']),
		trim($_POST['relationship']),
		trim($_POST['guardian_landline']),
		trim($_POST['guardian_mobile']),
		trim($_POST['scholarship']),
		$coverage,
		$_POST['bracket'],
		$_POST['income']		
		);    
 }
 
 else if($_SERVER['REQUEST_METHOD']=='POST' && empty($_POST['agree'])){

 echo '<div class="alert alert-danger" role="alert">
  You must Agree to the Terms & Conditions
</div>';
 }
    ?>
</ul>
</div>
</div>
<form action="file.php" method="post"> 
	  
 <div class="row">
  <div class="col-md-6">
  <div class="panel panel-info">
    <div class="panel-heading">A. Student Infomation</div>
    <div class="panel-body">
     
	   	<div class="row">
				<div class="col-sm-6 left">
					<div class="form-group">
                        <input type="text" name="first_name" class="form-control input-md" placeholder="Given Name" tabindex="1">
					</div>
				</div>
				<div class="col-sm-6 right">
					<div class="form-group">
						<input type="text" name="last_name" class="form-control input-md" placeholder="Family Name" tabindex="2">
					</div>
				</div>
			</div>

				<div class="row">
				<div class="col-sm-6 left">
<div class="form-group">
						<input type="text" name="middle_name" class="form-control input-md" placeholder="Middle Name" tabindex="3">
					</div>
					</div>
<div class="col-sm-6 right">
<div class="form-group">
						<input type="text" name="student_number" class="form-control input-md" placeholder="Student Number" tabindex="4">
					</div>
					</div>
					</div>

<div class="row">
				<div class="col-sm-6 left">
<div class="form-group">
						<input type="text" name="course" class="form-control input-md" placeholder="Course" tabindex="5">
					</div>
					</div>
<div class="col-sm-3 left right">
<div class="form-group">
						<input type="text" name="year_level" class="form-control input-md" placeholder="Year Level" tabindex="6">
					</div>
					</div>
					<div class="col-sm-3 right">
					 <div class="form-group">
		<input type="text" name="units" class="form-control input-md" placeholder="Units Enrolled" tabindex="7">
</div>
			</div>		
					</div>



 <div class="form-group">
		<input type="text" name="perm_address" class="form-control input-md" placeholder="Permanent Address" tabindex="8">
</div>

 <div class="form-group">
		<input type="text" name="mail_address" class="form-control input-md" placeholder="Mailing Address" tabindex="9">
</div>

	<div class="row">
				<div class="col-sm-6 left">
<div class="form-group">
						<input type="text" name="landline" class="form-control input-md" placeholder="Landline no. (with area code)" tabindex="10">
					</div>
					</div>
<div class="col-sm-6 right">
<div class="form-group">
						<input type="text" name="mobile" class="form-control input-md" placeholder="Mobile no." tabindex="11">
					</div>
					</div>
					</div>
	  

    </div>
  </div>
  </div>
  
   <div class="col-md-6">
   
     <div class="panel panel-info">
    <div class="panel-heading">C. Guardians' Information</div>
    <div class="panel-body">
     
  <div class="form-group">
 
 <div class="form-group">
						<input type="text" name="guardian_name" class="form-control input-md" placeholder="Guardians' Name">
					</div>

  <div class="form-group">
						<input type="text" name="guardian_address" class="form-control input-md" placeholder="Guardians' Address">
					</div>

 <div class="form-group">
						<input type="text" name="relationship" class="form-control input-md" placeholder="Relationship with Applicant">
					</div>

<div class="row">
				<div class="col-sm-6 left">
<div class="form-group">
						<input type="text" name="guardian_landline" class="form-control input-md" placeholder="Guardians' Landline no.">
					</div>
					</div>
<div class="col-sm-6 right">
<div class="form-group">
						<input type="text" name="guardian_mobile" class="form-control input-md" placeholder="Guardians' Mobile no.">
					</div>
					</div>
					</div>
   
   
  </div>


    </div>
  </div>
   
   
</div>
</div>
  
  <div class="row">
    <div class="col-md-6">
  
   <div class="panel panel-info">
    <div class="panel-heading">B. Mothers' Information</div>
    <div class="panel-body">
     
 <div class="form-group">
						<input type="text" name="mother_name" class="form-control input-md" placeholder="Mothers' Name">
					</div>
					
 <div class="form-group">
						<input type="text" name="mother_address" class="form-control input-md" placeholder="Mothers' Address">
					</div>

 <div class="form-group">
						<input type="text" name="mother_occupation" class="form-control input-md" placeholder="Mothers' Occupation">
					</div>
					
<div class="row">
				<div class="col-sm-6 left">
<div class="form-group">
						<input type="text" name="mother_landline" class="form-control input-md" placeholder="Mothers' Landline no.">
					</div>
					</div>
<div class="col-sm-6 right">
<div class="form-group">
						<input type="text" name="mother_mobile" class="form-control input-md" placeholder="Mothers' Mobile no.">
					</div>
					</div>
					</div>

</div>
</div>


 <div class="panel panel-info">
    <div class="panel-heading">B. Fathers' Information</div>
    <div class="panel-body">
 <div class="form-group">
						<input type="text" name="father_name" class="form-control input-md" placeholder="Fathers' Name">
					</div>
<div class="form-group">
						<input type="text" name="father_address" class="form-control input-md" placeholder="Fathers' Address">
					</div>

 <div class="form-group">
						<input type="text" name="father_occupation" class="form-control input-md" placeholder="Fathers' Occupation">
					</div>
					
<div class="row">
				<div class="col-sm-6 left">
<div class="form-group">
						<input type="text" name="father_landline" class="form-control input-md" placeholder="Fathers' Landline no.">
					</div>
					</div>
<div class="col-sm-6 right">
<div class="form-group">
						<input type="text" name="father_mobile" class="form-control input-md" placeholder="Fathers' Mobile no.">
					</div>
					</div>
					</div>


</div>
</div>
</div>
  

  

   <div class="col-md-6">
    <div class="panel panel-info">
    <div class="panel-heading">D. Scholarship and Financial Assistance</div>
    <div class="panel-body">
     
  <div class="form-horizontal">
 

<div class="form-group">
<label class="col-sm-5 control-label" for="scholarship">Name of Scholarship</label>
<div class="col-sm-7"><input class="form-control" name="scholarship" placeholder="(leave blank if none)" /></div>
</div>

 <div class="form-group">

<label class="col-sm-5 control-label" for="scholarship">Coverage</label>
<div class="col-sm-7">
		<div class="checkbox">
      <label>
        <input type="checkbox" name="coverage[]" value="Tuition and Miscellaneous">
         Tuition and Miscellaneous
      </label>
    </div>
	<div class="checkbox">
      <label>
        <input type="checkbox" name="coverage[]" value="Accommodation">
        Accommodation
      </label>
    </div>
	<div class="checkbox">
      <label>
        <input type="checkbox" name="coverage[]" value="Food">
        Food
      </label>
    </div>
	<div class="checkbox">
      <label>
        <input type="checkbox" name="coverage[]" value="Transportation">
        Transportation
      </label>
    </div>
	<div class="checkbox">
      <label>
        <input type="checkbox" name="coverage[]" value="Books">
       Books
      </label>
	  </div>
    </div>
</div>

 <div class="form-group">

<label class="col-sm-5 control-label" for="scholarship">Assigned STFAP bracket</label>
<div class="col-sm-7">
		<div class="radio">
      <label>
        <input type="radio" name="bracket" value="A" checked>
         A
      </label>
    </div>
	<div class="radio">
      <label>
        <input type="radio" name="bracket" value="B">
        B
      </label>
    </div>
	<div class="radio">
      <label>
        <input type="radio" name="bracket" value="C">
        C
      </label>
    </div>
	<div class="radio">
      <label>
        <input type="radio" name="bracket" value="D">
       D
      </label>
    </div>
	<div class="radio">
      <label>
        <input type="radio" name="bracket" value="E">
      E1/E2
      </label>
	  </div>
    </div>
</div>

 <div class="form-group">

<label class="col-sm-5 control-label" for="scholarship">Annual Family income</label>
<div class="col-sm-7">
		<div class="radio">
      <label>
        <input type="radio" name="income" value="80" checked>
          Below 80,00 
      </label>
    </div>
	<div class="radio">
      <label>
        <input type="radio" name="income" value="135">
       80,000-135,000 
      </label>
    </div>
	<div class="radio">
      <label>
        <input type="radio" name="income" value="500">
       135,001-500,000 
      </label>
    </div>
	<div class="radio">
      <label>
        <input type="radio" name="income" value="1000">
        500,001-1,000,000
      </label>
    </div>
	<div class="radio">
      <label>
        <input type="radio" name="income" value="1m">
      Above 1 million
      </label>
	  </div>
    </div>
</div>
   
   
  </div>


    </div>
  </div>
  </div>
  
  </div>
  
  
  <div class="row">
  <div class="col-md-10 col-md-offset-1">
  <p>Through this Application, I am binding myself to the following conditions:</p>
<p>1. Initial lodging fee equivalent to two (2) months upon check-in to cover for the first and last month of stay, 
non-refundable unless refused admission to the College or upon withdrawal of application within seven (7) days 
 after the start of classes or payment of lodging fee (P1,500.00 per semester) and other dorm fees. </p>
<p>2. Payment of 50% of the remaining months in case of leaving the dormitory before the end of the semester. </p>
<p>3. Submit myself to a personal interview (as scheduled).</p>
<p>I am fully responsible for the information I voluntarily provided. </p>
  
    <input  name="agree" type="checkbox" checked />
        <label for="agree">I agree to the terms and conditions.</label> <br/>
		
  <input class="btn btn-default" name="commit" type="submit" value="Submit Application">
  
  		
    </div>
  </div>
  
  </form>
  <?
  include 'footer.php'
?>


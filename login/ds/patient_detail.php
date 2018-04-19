<!DOCTYPE html>
<html lang="en">
<head>
  <title>Join with us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
	  <form action="../include/config_hospitaldetail.php" method="POST">
    <div class="form-group" style="width:40%;margin:2%">
      <label for="Text">Patient Name</label>
      <input type="Text" class="form-control" id="email" placeholder="Enter Doctor Name">
    </div>
    <div class="form-group" style="width:40%;margin:2%">
      <label for="Number">Patient Age</label>
      <input type="Number" class="form-control" id="pwd" placeholder="Department id">
    </div>
	<div class="form-group" style="width:40%;margin:2%">
      <label for="Number">Patient Phone No.</label>
      <input type="Number" class="form-control" id="pwd" placeholder="Patient Phone No.">
    </div>
	<div class="form-group" style="width:40%;margin:2%">
      <label for="Number">Patient Gender</label>
      <input type="Number" class="form-control" id="pwd" placeholder="Patient Gender">
    </div>
	<div class="form-group" style="width:40%;margin:2%">
      <label for="Text">Disease</label>
      <input type="Text" class="form-control" id="pwd" placeholder="Disease">
    </div>
	<div class="form-group" style="width:40%;margin:2%">
      <label for="Number">Doctor id</label>
      <input type="Number" class="form-control" id="pwd" placeholder="Doctor id">
    </div>
	<div class="form-group" style="width:40%;margin:2%">
      <label for="Text">Patient Type</label>
      <input type="Text" class="form-control" id="pwd" placeholder="Inpatient/outpatient">
    </div>
	<div class="form-group" style="width:40%;margin:2%">
      <label for="Text">Doctor Appointment Time:</label>
      <input type="Text" class="form-control" id="pwd" placeholder="----/--/-- format">
    </div>
    <button type="submit" class="btn btn-default" style="margin-left:2%" name="patient_detail">Submit</button>
  </form>
</body> 
</html>
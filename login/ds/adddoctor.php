<!DOCTYPE html>
<html lang="en">
<head>
  <title>Join with us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
	  <form action="../database/database_connection2.php" method="POST">
    <div class="form-group" style="width:40%;margin:2%">
      <label for="Text">Doctor Name</label>
      <input type="Text" class="form-control" id="email" name="doctorname" placeholder="Enter Doctor Name">
    </div>
    <div class="form-group" style="width:40%;margin:2%">
      <label for="Number">Department id</label>
      <input type="Number" class="form-control" id="pwd" name="departmentid"  placeholder="Department id">
    </div>
	<div class="form-group" style="width:40%;margin:2%">
      <label for="Text">Gender</label>
      <input type="Text" class="form-control" id="email" name="gender" placeholder="Gender">
    </div>
    <button type="submit" class="btn btn-default" style="margin-left:2%" name="adddoctor">Submit</button>
  </form>
</body> 
</html>

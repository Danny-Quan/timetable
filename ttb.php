
<?php
include_once('header.php');
?>
<body style="background: #161623;">
<style>
.navbar-default .navbar-nav>li>a{
    color:#fff;
    transition: color 0.3s;
}
</style>


<div class="row">
<div class="form">
  
<div class="form-group">
<select class="form-control" id="faculty_select">
<option value="1">SELECT SCHOOL</option>
<option value="2">Sciences</option>
<option value="3">Engineering</option>
<option value="4">Natural Resources</option>
<option value="5">Management Sciences and Law</option>
</select>
</div>

<!-- <div class="form-group">
<select class="form-control" id="student_select">
<option value="1">STUDENT TYPE</option>
<option value="2">Diploma</option>
<option value="3">Degree</option>
</select>
</div> -->


<div class="form-group">
<select class="form-control" id="level_select">
<option value="1">SELECT LEVEL</option>
<option value="2">100</option>
<option value="3">200</option>
<option value="4">300</option>
<option value="5">400</option>
</select>
</div>

<div class="form-group">
  <select class="form-control" id="program_select">
    <option>SELECT PROGRAM</option>
  </select>
  </div>

<div class="form-group">
<input type="submit" class="form-control" id="submit_btn" name="submit" value="Generate Timetable">
</div>
</div>


<div class="table_sec_and_header">
  <div class="successful-message"><div class="alert alert-info text-center">Timetable generated successfully</div></div>
<h2 class="text-center text-capitalize">your time table</h2>
<div class="table_sec table-responsive">
<table class="table table-bordered table-striped">
<thead>
<tr class="success">
<th>Days</th>
<th>7:00 - 7:55</th>
<th>8:00 - 8:55</th>
<th>9:00 - 9:55</th>
<th>10:00 - 10:55</th>
<th>11:00 - 11:55</th>
<th>12:00 - 12:55</th>
<th>13:00 - 13:55</th>
<th>14:00 - 14:55</th>
<th>15:00 - 15:55</th>
<th>16:00 - 16:55</th>
<th>17:00 - 17:55</th>
<th>18:00 - 18:55</th>
</tr>
    </thead>

    <tbody>
  
    </tbody>
    </table><br>
      <div class="errorMessage text-center">
        <div class="alert alert-danger text-center">Oops! Please your Time Table has not been recorded yet. please visit this page again after 24 hours</div>
      </div>
    </div>
    <div class="download_btn">
        <button class="my_btn" id="download_btn">Download</button>
      </div>
  </div>
  </div>
  <?php
include_once('footer.php');
  ?>
  <script type="text/javascript" src="custom_js.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="vendors/js/bootstrap.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
 
  </body>
</html>
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
    <link rel="stylesheet" href="home31.css" type="text/css">                                                        	
    
</head>
<body id="homemain">
     <div class="homea">
          <a href="display.php">Student_All</a>
          <a href="student_attendance_all.php">Attendance_information</a>
          <a href="total_attendance.php">Total_Attendance</a>
          <a href="today.php">Today_att</a>
          <a href="week_attendance.php">Week Attendance</a>
          <a href="search_val.php">MONTH_Search</a>
          <a href="sixmonth.php">6 MONTH</a>
          <a href="logout.php">Logout</a>
     </div>
    <div class="homeparaall">
         <div id="homeimgin"></div>
         <div id="homeh">
              <h1 id="homeh11">dr. kalaignar government arts college</h1>
              <h1 id='homeh11'> MSC - COMPUTER SCIENCE</h1>
              <h1 id="homeh12">Hello,  <?php echo $_SESSION['name']; ?></h1>
         </div>
     </div>
     <marquee id="moveh1">
          <h1>Welcome to MSC Computer science Attendance_information - <?php echo $_SESSION['name']; ?></h1>
     </marquee>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
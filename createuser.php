<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="kkk.css">
    <link rel="stylesheet" type="text/css" href="./css/navbar.css">
    <link rel="stylesheet" type="text/css" href="./css/createuser.css">
</head>

<body style="background-color: #82E0AA;">
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $date=$_POST['date'];
        $time_in=$_POST['time_in'];
        $time_out=$_POST['time_out'];
        $program=$_POST['program'];
        $semester=$_POST['semester'];
        $subject=$_POST['subject'];
        $topic=$_POST['topic'];
        $class_taken=$_POST['class_taken'];
        $experience=$_POST['experience'];
        $payment=$_POST['payment'];

        $sql="insert into users(name,date,time_in,time_out,program,semester,subject,topic,class_taken,experience,payment) values('{$name}','{$date}','{$time_in}','{$time_out}','{$program}','{$semester}','{$subject}','{$topic}','{$class_taken}','{$experience}','{$payment}')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "<script> alert('Hurray! User created');
                            window.location='history.php';
                  </script>";
        }
    }
?>

<?php
  include 'navbar.php';
?>

<h2 class="text-center pt-4" style="color: black;">Create a Class</h2>
<br>

<div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="Img/user3.jpg" style="border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Date" type="date" name="date" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Time_in" type="time" name="time_in" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Time_out" type="time" name="time_out" required>
            </div>
            <div class="app-form-group">
              <select class="app-form-control" name="program" required>
                <option value="" disabled selected>Select Program</option>
                <option value="DIT">DIT</option>
                <option value="B TECH">B TECH</option>
                <option value="BCA">BCA</option>
              </select>
            </div>
            <div class="app-form-group">
              <select class="app-form-control" name="semester" required>
                <option value="" disabled selected>Select Semester</option>
                <option value="Semester 1">Semester 1</option>
                <option value="Semester 2">Semester 2</option>
                <option value="Semester 3">Semester 3</option>
                <option value="Semester 4">Semester 4</option>
                <option value="Semester 5">Semester 5</option>
                <option value="Semester 6">Semester 6</option>
                <option value="Semester 7">Semester 7</option>
                <option value="Semester 8">Semester 8</option>
                
              </select>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Subject" type="text" name="subject" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="topic" type="text" name="topic" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="class_taken" type="text" name="class_taken" required>
            </div>
            <div class="app-form-group">
              <select class="app-form-control" name="experience" required>
                <option value="" disabled selected>Select Experience</option>
                <option value="6- years">6- years</option>
                <option value="5+ years">5+ years</option>
               
              </select>
            </div>
            <div class="app-form-group">
              <select class="app-form-control" name="payment" required>
                <option value="" disabled selected>Select Payment</option>
                <option value="300">350</option>
                <option value="500">500</option>
              </select>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="CREATE" name="submit">
              <input class="app-form-button" type="reset" value="RESET" name="reset">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="text-center mt-5 py-2">
  <p>&copy; 2024. Developer: <b>꧁༒☬Mr.☬Virus☬༒꧂</b> <br> Mr. Virus Foundation</p>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn></script>
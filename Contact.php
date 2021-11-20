<?php
session_start();
error_reporting(0);
$user = 'root';
$password = ''; 
$database = 'voterportal'; 
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user, $password, $database);
if ($mysqli->connect_error) {die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);} 
if(isset($_POST['submit'])){
    $_SESSION['status'] = "MAILED!";
    $_SESSION['message'] = "Message sent successfully";
    $_SESSION['status-code'] = "success";
if(isset($_SESSION['status'])){
    ?><script>
    Swal.fire({
        title: "<?php echo $_SESSION['status']?>",
        text: "<?php echo $_SESSION['message']?>",
        icon: "<?php echo $_SESSION['status-code']?>",
        button: "OK!",
      });
      </script>
      <?php
      }
}
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="icon" href="image3.ico" type="image/x-icon">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<title>Contact us</title>
<!------ Include the above in your HEAD tag ---------->
<style>
    .jumbotron {
    background: #24252a;
    color: #FFF;
    border-radius: 0px;
    }
    .jumbotron-sm { padding-top: 24px;
    padding-bottom: 24px; }
    .jumbotron small {
    color: #FFF;
    }
    .h1 small {
    font-size: 24px;
    font-family: "Montserrat", sans-serif;
    }
    </style>
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form action="" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" name="Name"id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" name="email"id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="name">
                                Voter ID</label>
                            <input type="text" class="form-control" name="vid"  id="VID" placeholder="Enter your VID" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">Vote casting issue</option>
                                <option value="suggestions">Login/Registration issue</option>
                                <option value="product">Suggestions</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message"  name="msg" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>Voter Portal, Inc.</strong><br>
                Nirvachan Sadan, Ashoka Road<br>
                New Delhi 110001, India<br>
                <abbr title="Phone">
                    Phone:</abbr>
                    23052220, 23052221
            </address>
            <address>
                <strong>Email us at:</strong><br>
                <a href="mailto:voterportal888@gmail.com">voterportal838@gmail.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
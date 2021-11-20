<?php
$user = 'root';
$password = ''; 
$database = 'registration'; 
$servername='localhost';
$mysqli = new mysqli($servername, $user, $password, $database);
if ($mysqli->connect_error) {die('Connect Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);} 
$sql = "SELECT * FROM candidatedetails";
$res = $mysqli->query($sql);

session_start();
if(isset($session['userdata'])){
    header("location: home.php");
}
$userdata = $_SESSION['userdata'];
$group = mysqli_query($mysqli,"SELECT * from candidatedetails where name ='$candidatename' ");
$groupdata = mysql_fetch_all($group);
$mysqli->close(); 
?>

<div class="box3" id="box3">
<section class="home-section">
    <div class="heading2">Dashboard</div><br>
    <div class="content">
       <?php
       if($_SESSION['groupdata']){
           for($i=0; $i<count($groupdata); $i++){
               ?>
               <div>
                   <img src="C:\xampp\htdocs\cwh\CandidateImages/<?php echo $groupdata[$i]['image']?>" height="100" width="100">
                   <b>Name:</b>
                   <b>party name: </b>
                   <b>votes: </b>
                   <form action="#">
                       <input type="hidden" name="gvotes" value="">
                       <input type="submit" name="votebtn" value="vote" id="votebtn">
                   </form>
               </div>
        <?php
           }
       }
       else{

       }
       ?>
<
</section>
</div>
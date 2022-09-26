<?php
include '../db_connection.php';
$sql = $mysqli->query("SELECT Phase FROM phase WHERE NO = 1");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/sidebar.css">
  <link rel="icon" href="../images/image3.ico" type="image/x-icon">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://kit.fontawesome.com/8ba4e36762.js" crossorigin="anonymous"></script>
  <script>
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <div class="logo_name"><a href="/" style="text-decoration: none; color:white;">VoterPortal</a></div>

      <i class="fas fa-bars" id="btn"></i>
    </div>
    <ul class="nav-list">
      <li id="vote">
        <a href="index.php">
          <i class="fas fa-vote-yea"></i>
          <span class="links_name">VOTE</span>
        </a>
        <span class="tooltip">VOTE NOW!</span>
      </li>
      <li>
        <a href="#" id="info">
          <i class="fas fa-border-all"></i>
          <span class="links_name">Information</span>
        </a>
        <span class="tooltip">Information</span>
      </li>
      <li id="results">
        <a href="results.php">
          <i class="fas fa-poll"></i>
          <span class="links_name">RESULTS</span>
        </a>
        <span class="tooltip">RESULTS</span>
      </li>
      <li id="chart">
        <a href="resultchart.php">
          <i class="far fa-chart-bar"></i>
          <span class="links_name">STATISTICS</span>
        </a>
        <span class="tooltip">Result Statistics</span>
      </li>
      <?php
     while($rows= $sql->fetch_assoc()){
       $phase= $rows['Phase'];
     }
     if($phase == "VOTING" || $phase == "REGISTRATION"){
       ?>
      <script>
      var link = document.getElementById('results');
      link.style.display = 'none';
      var link = document.getElementById('chart');
      link.style.display = 'none';
      </script>
      <?php
     }else{
       
     }
     ?>
      <li class="profile">
        <div class="profile-details">
          <img src="<?php echo '../'.$_SESSION['image']?>" width="45px" height="45px" alt="Img">
          <div class="name_job">
            <div class="name"><?php echo $_SESSION['user']?></div>
            <div class="job"><?php echo $_SESSION['VID']?></div>
          </div>
        </div>
        <div class="delete"><a onclick="confirmation(event)" href="../home.php"><i class="fas fa-sign-out-alt"
              id="log_out"></i></a></div>
        <script>
        function confirmation(ev) {
          ev.preventDefault();
          var urlToRedirect = ev.currentTarget.getAttribute(
            'href'
          ); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
          console.log(urlToRedirect); // verify if this is the right URL
          Swal.fire({
            title: 'LOG OUT?',
            text: "You will be redirected to the Home page",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Log out!'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = "../index.php";
            }
          })
        }
        </script>
      </li>
    </ul>
  </div>
  <script>
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
  </script>
  <script src="https://kit.fontawesome.com/8ba4e36762.js" crossorigin="anonymous"></script>
  <script src="../js/sidebarscript.js"></script>
  <script src="../js/sweetalert.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
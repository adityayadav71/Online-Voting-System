<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/sidebar.css">
  <link rel="stylesheet" href="../css/table.css">
  <link rel="stylesheet" href="../css/form.css">
  <link rel="icon" href="../images/image3.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <div class="logo_name"><a href="/" style="text-decoration: none; color:white;">VoterPortal</a></div>
      <i class="fas fa-bars" id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="index.php">
          <i class="fas fa-border-all"></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="CandidateDetails.php">
          <i class="fas fa-user"></i>
          <span class="links_name">Candidate Details</span>
        </a>
        <span class="tooltip">Candidate Details</span>
      </li>
      <li>
        <a href="AddaCandidate.php">
          <i class="fas fa-user-plus"></i>
          <span class="links_name">Add a Candidate</span>
        </a>
        <span class="tooltip">Add a Candidate</span>
      </li>
      <li>
        <a href="RemoveaCandidate.php">
          <i class="fas fa-user-minus"></i>
          <span class="links_name">Remove a candidate</span>
        </a>
        <span class="tooltip">Remove a candidate</span>
      </li>
      <li>
        <a href="ChangePhaseofElection.php">
          <i class="fas fa-calendar-alt"></i>
          <span class="links_name">Change Phase</span>
        </a>
        <span class="tooltip">Change Phase</span>
      </li>
      <li class="profile">
        <div class="profile-details">
          <img src="<?php if(isset($_SESSION['adminlogin'])){echo "../images/adminimage.png";}?>" width="40px"
            height="40px" alt="Img">
          <div class="name_job">
            <div class="name"><?php if(isset($_SESSION['adminlogin'])){echo "Admin";}?></div>
            <div class="job"><?php if(isset($_SESSION['adminlogin'])){echo "123";}?></div>
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
  <script src="../js/sidebarscript.js"></script>
  <script src="https://kit.fontawesome.com/8ba4e36762.js" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
  </script>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">
  </script>
</body>
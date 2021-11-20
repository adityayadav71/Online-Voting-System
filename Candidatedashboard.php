<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="AdminPage/sweetalert.min.js"></script>
    <script src="https://kit.fontawesome.com/8ba4e36762.js" crossorigin="anonymous"></script>
    <title>Candidate </title>
    <!-- <link rel="stylesheet" href="test.css"> -->
<style>
        /* .home-section{
        position: absolute;
        background: #E4E9F7;
        min-height: 100vh;
        top: 0;
        left: 78px;
        width: calc(100% - 78px);
        transition: all 0.5s ease;
        overflow-y: auto;
        } */
    .home-section .heading2{
    display: flex;
    color: #ffffff;
    position: absolute;
    left: 27vw;
    width: 212px;
    font-size: 25px;
    z-index: 99;
    background-color: #11101D;
    border-radius: 10px;
    justify-content: center;
    top: -113px;
        }
        .home-section .content{
            /* display: flex;  */
    position: absolute;
    width: 75vw;
    min-height: 85vh;
    top: -100px;
    padding-right: 0px;
    vertical-align: center;
    background: #ffffff;
    box-sizing: border-box;
    overflow: hidden;
        }
          div.polaroid {
           width: 100%;
           height:auto;
           background-color: white;
           box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
          }
          div.container {
          text-align: center;
          padding: 10px 20px;
          }
          .flex-container {
            display: -webkit-inline-box;
            width: min-content;
            margin: -42px;
            margin-top: auto;
            margin-left: auto;
            flex-wrap: wrap;
          }
          .flex-container > div {
            width: min-content;
            margin: 50px;
            text-align: center;
            line-height: 75px;
            font-size: 30px;
          }
          .img{
            height:fit-content;
          }
        .home{
            display: flex;
        }
        *{
            margin: 0%;
            padding: 0%;
        }
        .sidebar{
            background-color: rgb(102, 102, 117);
            display: flex;
            width: 20vw;
            height: 100vmax;
            justify-content: space-between;
            box-shadow: 5px 7px #8a8686;
                }
        .sidebar ul{
        margin-top: 20px;
        }
        .sidebar ul li{
            position: relative;
            height: 50px;
            width: 130%;
            margin:15px 12px;
            list-style:none;
            line-height: 50px;   
        }
        .sidebar ul li .bx-search{
            position: absolute;
            /* z-index: 99; */
            color: #fff;
        }
        .sidebar ul li a{
            color: #fff;
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: all 0.4s ease;
            border-radius: 12px;
            width: 90%;
        }
        .sidebar ul li a:hover{
            color:  #11101d;
            background: #fff;
            transition: 0.5s;
            width: 100%;

        }
        .sidebar ul li i{
            height: 50px;
            min-width: 50px;
            border-radius: 12px;
            line-height: 50px;
            text-align: center;
        }
        
        .sidebar .profile_contents{
            position: relative;
            top: 70px;
            left: 20px;
            color: rgb(255, 255, 255);
            bottom: 0%;
            left: 0%;
        }
        .info_page{
            display: flex;
            flex-direction: column;
            align-content: flex-end;
            position: relative;
            }
        .heading
            {
                display: flex;
            margin: 5px;
            padding: 5px;
            width: 60vw;
            position: relative;
            left: 30px;
            height: 30px;
            background-color: cadetblue;
            visibility: visible;
            }
        .box3{
        /* display: flex;
        margin: 5px;
        padding: 5px;
        width: 60vw;
        /* background-color: aquamarine; */
        /* left: 30px; */
        /* position: relative; */
        visibility: hidden;
            }
        .box4{
        display: flex;
        margin: 5px;
        padding: 5px;
        width: 60vw;
        background-color: aquamarine;
        left: 30px;
        visibility: hidden;
        position: relative;
            }
        .box5{
        display: flex;
        margin: 5px;
        padding: 5px;
        width: 60vw;
        background-color: aquamarine;
        left: 30px;
        position: relative;
        visibility: hidden;
            }
        .voter_registration{
            display: flex;
            flex-direction: column;
            position: relative;
            top: 96px;
            right: -3vw;
            visibility: hidden;
            }
        .container{
        max-width: 650px;
        width: 100%;
        background-color: #fff;
        padding: 25px 25px;
        border-radius: 8px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.15);
        position: relative;
        /* left: 805px; */
        bottom: 100px;
        }
        .container .title{
        font-size: 20px;
        font-weight: 500;
        position: relative;
        text-align: center;
        }
        .container .title::before{
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 30px;
        border-radius: 5px;
        }
        form .login-link a{
        color: #930bee; 
        text-decoration: none;
        }
        form .login-link a:hover{
            text-decoration: underline;   
            }
        .content form .user-details{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px 0 12px 0;
        }
        form .user-details .input-box{
        margin-bottom: 15px;
        width: calc(100% / 2 - 20px);
        }
        form .input-box span.details{
        display: block;
        font-weight: 500;
        margin-bottom: 5px;
        }
        .user-details .input-box input{
        height: 35px;
        width: 100%;
        outline: none;
        font-size: 15px;
        border-radius: 5px;
        padding-left: 15px;
        border: 1px solid #ccc;
        border-bottom-width: 2px;
        transition: all 0.3s ease;
        }
        .user-details .input-box input:focus,
        .user-details .input-box input:valid{
        border-color: #9b59b6;
        }
        #login{
            text-align: center;
        }
        button{
            background-color: #4CAF50;
            border-radius: 30px;
            width: 65px;
            height: auto;
            padding: 4px;
        }
        
    </style>
</head>
<body>
    <div class="home">
        <div class="sidebar">
                <ul class="nav_list">
                    <li>
                        <a href="#">
                            <i class='bx bx-grid-alt'></i>
                            <span class="links_name1" onclick="information()" >How to?</span>
                        </a>
                    </li>  
                    <li>
                        <a href="#">
                            <i class='bx bxs-message-rounded-dots'></i>
                            <span class="links_name3" onclick="voting_area()" >VOTE</span>
                        </a>
                    </li>  
                    <li>
                        <a href="#">
                            <i class='bx bxs-user-plus' ></i>
                            <span class="links_name" onclick="results()" >RESULTS</span>
                        </a>
                    </li> 
                    <li>
                        <a href="#">
                            <i class='bx bx-log-out'></i>
                            <span class="links_name" onclick="logout()" >LOGOUT</span>
                        </a>
                    </li>
                </ul>
        </div>
        <div class="info_page">
            <div class="heading" id="heading" >
                box1
            </div>        
            <div class="box3" id="box3">
            <section class="home-section">
                <div class="heading2">Dashboard</div><br>
                <div class="content">
                    <?php
                    ?>
            </div> 
            </section>
            </div>
            <div class="box4" id="box4">
                box 4
            </div>
            <div class="box5" id="box5">
                box 5
            </div>  
            
<script>
function confirming(){
      window.alert("you have submitted the form");
    }
        function information(){
                var x = document.getElementById("heading");
                x.style.visibility="visible";
                document.getElementById("voter_registration").style.visibility="hidden"
                document.getElementById("box3").style.visibility="hidden"
                document.getElementById("box4").style.visibility="hidden"
                document.getElementById("box5").style.visibility="hidden"
        }
        function voting_area(){
                var x = document.getElementById("box3");
                x.style.visibility="visible";
                x.style.top ="-456px";
                document.getElementById("voter_registration").style.visibility="hidden"
                document.getElementById("heading").style.visibility="hidden"
                document.getElementById("box4").style.visibility="hidden"
                document.getElementById("box5").style.visibility="hidden"
        }
        function results(){
                var x = document.getElementById("box4");
                x.style.visibility="visible";
                x.style.top ="-506px";
                document.getElementById("voter_registration").style.visibility="hidden"
                document.getElementById("box3").style.visibility="hidden";
                document.getElementById("heading").style.visibility="hidden"
                document.getElementById("box5").style.visibility="hidden"
        }
        function logout(){
                <?php  
                    session_start();
                    $_SESSION['status'] = "LOGOUT ?";
                    $_SESSION['message'] = "Are you sure you want to log out ?";
                    $_SESSION['status-code'] = "warning";
                ?>
                var ans = window.confirm("");
                    if (ans) {
                        window.location="home.php";
                }
                document.getElementById("voter_registration").style.visibility="hidden"
                document.getElementById("box3").style.visibility="hidden"
                document.getElementById("box4").style.visibility="hidden"
                document.getElementById("heading").style.visibility="hidden"
        }  
</script>
</body>
</html>
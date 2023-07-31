<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ATOM BANK</title>
        <style>
              @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

            :root{
                --div-color1:#5680E9;
                --div-color2:#84CEEB;
                --div-color3:#5AB9EA;
                --div-color4:#C1C8E4;
                --div-color5:#8860D0;
            }
            a{
                text-decoration: none;
            }
            @media only screen and (max-width:1279px){
                body{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                width: 20rem;
                margin: 0;
                padding: 0;
                margin-left: auto;
                margin-right: auto;
                overflow-x: hidden;
            }
            main{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .side1{
                width: 20rem;
                display: none;
            }
            .side2{
                width: 20rem;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-image: linear-gradient(var(--div-color3),var(--div-color2));
            }
            .menu{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
                width: 100%;
            }
             .menu h2{
                margin-top: 0;
                display: none;
                color: var(--div-color4);
                font-size: 25px;
                width: 20rem;
                border-radius: 10px;
                font-family: 'Roboto', sans-serif;
                cursor: pointer;
            }
            .three{
                margin-top: 1rem;
                display: flex;
                flex-direction: column;
                margin-left:15rem ;
                cursor: pointer;
            }
            h4{
                text-align: right;
                margin-top: 0;
                margin-bottom: 5px;
                width: 4rem;
                height: 0.5rem;
                background-color:var(--div-color4);
            }
             .side2 h1{
                text-align: center;
                font-size: 32px;
                color: var(--div-color1);
                font-family: 'Roboto', sans-serif;
            }
            form{
                width: 60%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            form .row1,form .row2{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .row3{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
             .R1,.R2,.R3,.R4{
                display: flex;
                flex-direction: column;
                 justify-content: center;
                align-items: center;
            }
             label{
                font-family: 'Roboto', sans-serif;
                font-size: 28px;
                margin-top: 2.3rem;
                color: var(--div-color1);
            }
            input{
                margin-top: 1rem;
                width: 17rempx;
                height: 40px;
                border: none;
                border-color: var(--div-color4);
                border-radius: 10px;
                font-size: 20px;
                color: var(--div-color1);
                outline: none;
            }
             #btn{
                margin-top: 2.5rem;
                font-family: 'Roboto', sans-serif;
                font-size: 45px;
                color: var(--div-color5);
                border: none;
                border-radius: 16px;
                cursor: pointer;
                transition: 0.6s;
            }
            h3{
                margin-top: 0;
                margin-bottom: 0;
                font-family: 'Roboto', sans-serif;
                color: red;
                font-size: 14px;
                display: none;
            }
            }

            @media only screen and (min-width:1280px){
            body{
                margin: 0;
                padding: 0;
                overflow: hidden;
            }
            main{
                display: flex;
                flex-direction: row;
                width: 100%;
                height: 100vh;
            }
            .side1{
                width: 30%;
                background-image: linear-gradient(var(--div-color5),var(--div-color1));
            }
            img{
                width: 30%;
                position: absolute;
                bottom: 0;
                left: 15%;
            }
            .side2{
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 70%;
                background-image: linear-gradient(var(--div-color3),var(--div-color2));
            }
             .menu{
                margin-bottom: 2vh;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                text-align: center;
                width: 100%;
            }
            .menu h2{
                color: var(--div-color4);
                font-size: 30px;
                border-radius: 16px;
                margin-left: 8rem;
                font-family: 'Roboto', sans-serif;
                cursor: pointer;
            }
            #m1{
                margin-left: 0;
            }
             .side2 h1{
                margin-top: 0;
                margin-bottom: 2vh;
                text-align: center;
                font-size: 45px;
                color: var(--div-color1);
                font-family: 'Roboto', sans-serif;
            }
            form{
                width: 60%;
                margin-top: 0;
                margin-bottom: 2vh;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                margin-left: auto;
                margin-right: auto;
            }
            .row1,.row2{
                display: flex;
                flex-direction: row;
                margin-top: 0;
            }
            .row3{
                margin-top: 0;
                display: flex;
                flex-direction: column;
            }
            .R1,.R2,.R3,.R4{
                display: flex;
                flex-direction: column;
                margin-right: 3rem;
            }
            label{
                font-family: 'Roboto', sans-serif;
                font-size: 28px;
                margin-bottom: 2vh;
                color: var(--div-color1);
            }
            input{
                width: 300px;
                margin-bottom: 3vh;
                height: 50px;
                border: none;
                border-color: var(--div-color4);
                border-radius: 10px;
                font-size: 20px;
                color: var(--div-color1);
                outline: none;
            }
            #btn{
                font-family: 'Roboto', sans-serif;
                font-size: 45px;
                color: var(--div-color5);
                border: none;
                border-radius: 16px;
                cursor: pointer;
                transition: 0.6s;
            }
            h3{
                margin-top: 0;
                margin-bottom: 0;
                font-family: 'Roboto', sans-serif;
                color: red;
                font-size: 14px;
                display: none;
            }
        }

        </style>
    </head>
    <body>
        <main>
            <div class="side1">
                <img src="../Images in saly/Saly-12.png" alt="image">
            </div>
            <div class="side2">
            <div class="three" id="three">
                    <h4></h4>
                    <h4></h4>
                    <h4></h4>
                </div>
                <div class="menu">
                <a href="../home.html"> <h2 id="m1">ATOM</h2></a>
                <a href="../home.html"> <h2 id="m2">Home</h2></a>
                        <a href="../Assert/Contact_us.html"><h2 id="m3">Contact Us</h2></a>
                       <a href="../Assert/About_Us.html"> <h2 id="m4">About Us</h2></a>
                </div>
                <h1>Create Account</h1>
                <form method="POST" action="Create.inc.php">
                    <div class="row1">
                        <div class="R1">
                            <label>Account Number</label>
                            <input type="text" name="account" id="account">
                            <h3 id="e1">Can't Empty Account Number</h3>
                        </div>
                        <div class="R2">
                            <label>Email</label>
                            <input type="text" name="email" id="email">
                            <h3 id="e2">Can't Empty Email</h3>
                        </div>
                    </div>
                    <div class="row2">
                        <div class="R3">
                            <label>Usename</label>
                            <input type="text" name="username" id="username">
                            <h3 id="e3">Can't Empty Username</h3>
                        </div>
                        <div class="R4">
                            <label>Password</label>
                            <input type="text" name="password" id="password">
                            <h3 id="e4">Can't Empty Password</h3>
                        </div>
                    </div>
                    <div class="row3">
                        <label>Phone</label>
                        <input type="text" name="phone" id="phone">
                        <h3 id="e5">Can't Empty phone</h3>
                    </div>
                    <button id="btn" type="submit">Submit</button>
                </form>
               
            </div>
        </main>
        <script>
            var M1=document.getElementById("m1");
            var M2=document.getElementById("m2");
            var M3=document.getElementById("m3");
            var M4=document.getElementById("m4");
            var U=document.getElementById("user");
            var P=document.getElementById("pass");
            var BTN=document.getElementById("btn");
            var E1=document.getElementById("account");
            var E2=document.getElementById("email");
            var E3=document.getElementById("username");
            var E4=document.getElementById("password");
            var E5=document.getElementById("phone");
            var P1=document.getElementById("e1");
            var P2=document.getElementById("e2");
            var P3=document.getElementById("e3");
            var P4=document.getElementById("e4");
            var P5=document.getElementById("e5");
            var pattern=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var B=document.getElementById("three");

            M1.onmousemove=function(){
                M1.style.backgroundColor="var(--div-color5)";
            }
             M1.onmouseleave=function(){
                M1.style.backgroundColor="var(--div-color3)";
            }
             M2.onmousemove=function(){
                M2.style.backgroundColor="var(--div-color5)";
            }
             M2.onmouseleave=function(){
                M2.style.backgroundColor="var(--div-color3)";
            }
            M3.onmousemove=function(){
                M3.style.backgroundColor="var(--div-color5)";
            }
             M3.onmouseleave=function(){
                M3.style.backgroundColor="var(--div-color3)";
            }
            M4.onmousemove=function(){
                M4.style.backgroundColor="var(--div-color5)";
            }
             M4.onmouseleave=function(){
                M4.style.backgroundColor="var(--div-color3)";
            }
            BTN.onmousemove=function(){
                BTN.style.backgroundColor="#FF8000";
            }
            BTN.onmouseleave=function(){
                BTN.style.backgroundColor="white";
            }




            BTN.onclick=function(){
                if(E2.value=="" && E3.value=="" && E4.value=="" && E5.value=="" && E1.value==""){
                P1.style.display="block";    
                P2.style.display="block";
                P3.style.display="block";
                P4.style.display="block";
                P5.style.display="block";
                }
               else if(E2.value=="" && E3.value=="" && E4.value=="" && E5.value=="" ){
                P2.style.display="block";
                P3.style.display="block";
                P4.style.display="block";
                P5.style.display="block";
               }
              else if(E1.value=="" && E3.value=="" && E4.value=="" && E5.value=="" ){
                P1.style.display="block";
                P3.style.display="block";
                P4.style.display="block";
                P5.style.display="block";
               }
              else if(E2.value=="" && E1.value=="" && E4.value=="" && E5.value=="" ){
                P2.style.display="block";
                P1.style.display="block";
                P4.style.display="block";
                P5.style.display="block";
               }
              else if(E2.value=="" && E3.value=="" && E1.value=="" && E5.value=="" ){
                P2.style.display="block";
                P3.style.display="block";
                P1.style.display="block";
                P5.style.display="block";
               }
              else if(E2.value=="" && E3.value=="" && E4.value=="" && E1.value=="" ){
                P2.style.display="block";
                P3.style.display="block";
                P4.style.display="block";
                P1.style.display="block";
               }
              else if(E3.value=="" && E4.value=="" && E5.value==""){
                P5.style.display="block";
                P3.style.display="block";
                P4.style.display="block";
              } 
              else if(E2.value=="" && E4.value=="" && E5.value==""){
                P5.style.display="block";
                P2.style.display="block";
                P4.style.display="block";
              }
              else if(E1.value=="" && E4.value=="" && E5.value==""){
                P5.style.display="block";
                P1.style.display="block";
                P4.style.display="block";
              } 
              else if(E1.value=="" && E2.value=="" && E5.value==""){
                P5.style.display="block";
                P1.style.display="block";
                P2.style.display="block";
              }  
              else if(E1.value=="" && E2.value=="" && E5.value==""){
                P5.style.display="block";
                P1.style.display="block";
                P2.style.display="block";
              } 
              else if(E1.value=="" && E2.value=="" && E3.value==""){
                P3.style.display="block";
                P1.style.display="block";
                P2.style.display="block";
              }
              else if(E1.value=="" && E4.value=="" && E5.value==""){
                P5.style.display="block";
                P1.style.display="block";
                P4.style.display="block";
              }   
              else if(!email.value.match(pattern)){
                alert("Invalid Email !");
              }
               
            }
            B.onclick = function() {
                if (M1.style.display === "none") {
                M1.style.display = "block";
                M2.style.display = "block";
                M3.style.display = "block";
                M4.style.display = "block";
                } else {
                M1.style.display = "none";
                M2.style.display = "none";
                M3.style.display = "none";
                M4.style.display = "none";
                }
  }




            </script>
    </body>
</html>
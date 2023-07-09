<!DOCTYPE html>
<html lang="en">
    <head>
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

            body{
                margin: 0;
                padding: 0;
                overflow: hidden;
            }
            .container-login{
                display: flex;
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
                top: 49%;
                left: 15%;
            }
            .side2{
                width: 70%;
                background-image: linear-gradient(var(--div-color3),var(--div-color2));
            }
            .menu{
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
                text-align: center;
                font-size: 45px;
                color: var(--div-color1);
                font-family: 'Roboto', sans-serif;
            }
            form{
                width: 60%;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                margin-left: auto;
                margin-right: auto;
            }
            .row1,.row2{
                display: flex;
                flex-direction: column;
            }
            label{
                font-family: 'Roboto', sans-serif;
                font-size: 28px;
                margin-top: 2.3rem;
                color: var(--div-color1);
            }
            input{
                margin-top: 1rem;
                width: 300px;
                height: 50px;
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
            

        </style>
    </head>
    <body>
        <main>
            <div class="container-login">
                <div class="side1">
                    <img src="../Images in saly/Saly-16.png" alt="image">
                </div>
                <div class="side2">
                    <div class="menu">
                        <h2 id="m1">ATOM</h2>
                        <h2 id="m2">Home</h2>
                        <h2 id="m3">Contact Us</h2>
                        <h2 id="m4">About Us</h2>
                    </div>
                    <h1>Login</h1>
                    <form method="POST" action="login.php">
                        <div class="row1">
                            <label>Username</label>
                            <input type="text" name="username" id="user">
                            <h3 id="e1">Can't empty Username</h3>
                        </div>
                        <div class="row2">
                            <label>Password</label>
                            <input type="text" name="password" id="pass">
                            <h3 id="e2">Can't empty password </h3>
                        </div>
                        <button id="btn" type="button">Loging</button>
                    </form>
                </div>
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
            var E1=document.getElementById("e1");
            var E2=document.getElementById("e2");

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
                if(U.value=="" && P.value==""){
                    E1.style.display="block";
                    E2.style.display="block";
                }
                else if(P.value==""){
                    E2.style.display="block";
                }
                else if(U.value==""){
                    E1.style.display="block";
                }
            }
                
                
        

        </script>
    </body>
</html>
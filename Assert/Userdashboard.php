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
            .details{
                display: flex;
                flex-direction: column;
                justify-content: center;
                
            }
            .row1,.row2{
                margin-top: 5%;
                margin-bottom: 5%;
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                width: 100%;
            }
            span{
                cursor: pointer;
                font-family: 'Roboto', sans-serif;
                font-size: 25px;
                width: 15%;
                background-image: linear-gradient(var(--div-color4),var(--div-color2));
                border-radius: 50%;
                text-align: center;
                margin-left: 5vw;
                margin-right: 5vw;
                padding-top: 8vh;
                padding-bottom: 8vh;
            }

        </style>
    </head>
    <body>
        <main>
        <div class="side1">
            <img src="../Images in saly/Saly-45.png" alt="image">
        </div>
            <div class="side2">
            <div class="menu">
                <h2 id="m1">ATOM</h2>
                <h2 id="m2">Home</h2>
                <h2 id="m3">Contact Us</h2>
                <h2 id="m4">About Us</h2>
                <h2 id="m5">Log Out</h2>
            </div>
            <div class="details">
                <div class="row1">
                    <span id="e1">Menu</span>
                    <span id="e2">Transfer</span>
                    <span id="e3">Payment</span>
                </div>
                <div class="row2">
                    <span id="e4">Feedback</span>
                    <span id="e5">Add Inquiry</span>
                    <span id="e6">View inquiry</span>
                </div>
            </div>
            </div>
        </main>
        <script>
            var M1=document.getElementById("m1");
            var M2=document.getElementById("m2");
            var M3=document.getElementById("m3");
            var M4=document.getElementById("m4");
            var M5=document.getElementById("m5");
            var E1=document.getElementById("e1");
            var E2=document.getElementById("e2");
            var E3=document.getElementById("e3");
            var E4=document.getElementById("e4");
            var E5=document.getElementById("e5");
            var E6=document.getElementById("e6");


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
            M5.onmousemove=function(){
                M5.style.backgroundColor="var(--div-color5)";
            }
             M5.onmouseleave=function(){
                M5.style.backgroundColor="var(--div-color3)";
            }

            E1.onmousemove=function(){
                E1.style.backgroundImage="linear-gradient(var(--div-color5),var(--div-color1))";
            }
            E1.onmouseleave=function(){
                E1.style.backgroundImage="linear-gradient(var(--div-color4),var(--div-color2))";
            }
            E2.onmousemove=function(){
                E2.style.backgroundImage="linear-gradient(var(--div-color5),var(--div-color1))";
            }
            E2.onmouseleave=function(){
                E2.style.backgroundImage="linear-gradient(var(--div-color4),var(--div-color2))";
            }
            E3.onmousemove=function(){
                E3.style.backgroundImage="linear-gradient(var(--div-color5),var(--div-color1))";
            }
            E3.onmouseleave=function(){
                E3.style.backgroundImage="linear-gradient(var(--div-color4),var(--div-color2))";
            }
            E4.onmousemove=function(){
                E4.style.backgroundImage="linear-gradient(var(--div-color5),var(--div-color1))";
            }
            E4.onmouseleave=function(){
                E4.style.backgroundImage="linear-gradient(var(--div-color4),var(--div-color2))";
            }
            E5.onmousemove=function(){
                E5.style.backgroundImage="linear-gradient(var(--div-color5),var(--div-color1))";
            }
            E5.onmouseleave=function(){
                E5.style.backgroundImage="linear-gradient(var(--div-color4),var(--div-color2))";
            }
            E6.onmousemove=function(){
                E6.style.backgroundImage="linear-gradient(var(--div-color5),var(--div-color1))";
            }
            E6.onmouseleave=function(){
                E6.style.backgroundImage="linear-gradient(var(--div-color4),var(--div-color2))";
            }

            </script>
    </body>
</html>
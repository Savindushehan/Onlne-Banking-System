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
            body{
                margin: 0;
                padding: 0;
               
            }

            @media only screen and (min-width:1280px){
                /* this is userdashboad*/
           .back1{
            display: none;
           }
            main{
                width: 100%;
                height: 100vh;
            }
            .background1{
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
                left: 15.5%;
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
                margin-left: 6vw;
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
                margin-top: 10vh;
                margin-bottom: 10vh;
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
        }
        @media only screen and (min-width:1280px){
           /* this is add inquiry*/
            .back2{
                display: block;
            }
            .background2{
                width: 100%;
                height: 100vh;
                display: flex;
                flex-direction: row;
            }
            .menu{
                margin-bottom: 1vh;
            }
            img{
                width: 30%;
                position: absolute;
                bottom: 0;
                left: 14%;
            }
            .background2 .details{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .background2 h1{
                margin-top: 0;
                 font-family: 'Roboto', sans-serif;
                 font-size: 45px;
                color: var(--div-color5);
                margin-bottom: 2vh;
            }
            .background2 form{
                display: flex;
                flex-direction: column;
            }
            form label{
                margin-top: 3vh;
                  font-family: 'Roboto', sans-serif;
                  font-size: 30px; 
            }
            form #title{
                margin-top: 1rem;
                border-radius: 0.5vw;
                margin-bottom: 0;
                width: 40vw;
                height: 5vh;
                outline: none;
                border: none;
            }
            h3{
                display: none;
                margin-top: 0;
                font-family: 'Roboto', sans-serif;
                color: red;
            }
            form #description{
                margin-top: 1rem;
                width: 40vw;
                border-radius: 1vw;
                height: 15vh;
                outline: none;
                border: none;
            }
            #btn1{
                margin-top: 2.5rem;
                font-family: 'Roboto', sans-serif;
                font-size: 45px;
                color: var(--div-color5);
                border: none;
                border-radius: 16px;
                cursor: pointer;
                transition: 0.6s;
            }
        }

        </style>
    </head>
    <body>
        <main>
            <div class="back1">
            <div class="background1">
        <div class="side1">
            <img src="../Images in saly/Saly-41.png" alt="image">
        </div>
            <div class="side2">
            <div class="menu">
                <h2 id="m6">ATOM</h2>
                <h2 id="m7">Home</h2>
                <h2 id="m8">Contact Us</h2>
                <h2 id="m9">About Us</h2>
                <h2 id="m10">Log Out</h2>
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
            </div>
    </div>
            <div class="back2">
            <div class="background2">
                <div class="side1">
                    <img src="../Images in saly/Saly-9.png" alt="image">
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
                    <h1>Inquiry</h1>
                    <form method="POST" action="Userdashboard.php">
                        <label>Inquiry Title</label>
                        <input type="text" name="title" id="title">
                        <h3 id="Ie1">Can't Empty Title</h3>
                        <label>Inquiry Description</label>
                        <input type="text" name="description" id="description">
                        <h3 id="Ie2">Can't Empty Description</h3>
                    </form>
                    <button type="button" id="btn1">Submit</button>
                </div>
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
            var M6=document.getElementById("m6");
            var M7=document.getElementById("m7");
            var M8=document.getElementById("m8");
            var M9=document.getElementById("m9");
            var M10=document.getElementById("m10");
            var E1=document.getElementById("e1");
            var E2=document.getElementById("e2");
            var E3=document.getElementById("e3");
            var E4=document.getElementById("e4");
            var E5=document.getElementById("e5");
            var E6=document.getElementById("e6");
            var BTN1=document.getElementById("btn1");
            var IE1=document.getElementById("Ie1");
            var IE2=document.getElementById("Ie2");

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
            M6.onmousemove=function(){
                M6.style.backgroundColor="var(--div-color5)";
            }
             M6.onmouseleave=function(){
                M6.style.backgroundColor="var(--div-color3)";
            }
             M7.onmousemove=function(){
                M7.style.backgroundColor="var(--div-color5)";
            }
             M7.onmouseleave=function(){
                M7.style.backgroundColor="var(--div-color3)";
            }
            M8.onmousemove=function(){
                M8.style.backgroundColor="var(--div-color5)";
            }
             M8.onmouseleave=function(){
                M8.style.backgroundColor="var(--div-color3)";
            }
            M9.onmousemove=function(){
                M9.style.backgroundColor="var(--div-color5)";
            }
             M9.onmouseleave=function(){
                M9.style.backgroundColor="var(--div-color3)";
            }
            M10.onmousemove=function(){
                M10.style.backgroundColor="var(--div-color5)";
            }
             M10.onmouseleave=function(){
                M10.style.backgroundColor="var(--div-color3)";
            }
            BTN1.onmousemove=function(){
                BTN1.style.backgroundColor="#FF8000";
            }
             BTN1.onmouseleave=function(){
                BTN1.style.backgroundColor="white";
            }

            BTN1.onclick = function() {
                if (title.value == "" && description.value == "") {
                    IE1.style.display = "block";
                    IE2.style.display = "block";
                } else if (title.value == "") {
                    IE1.style.display = "block";
                } else if (description.value == "") {
                    IE2.style.display = "block";
                }
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
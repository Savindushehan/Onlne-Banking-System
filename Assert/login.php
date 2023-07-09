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
                width: 60%;
            }
            .side2{
                width: 70%;
                background-image: linear-gradient(var(--div-color3),var(--div-color2));
            }
            .menu{
                display: flex;
                flex-direction: row;
                align-items: center;
                text-align: center;
            }
            .menu h2{
                color: var(--div-color4);
                font-size: 30px;
                width: 100%;
                font-family: 'Roboto', sans-serif;
            }
            .side2 h1{
                text-align: center;
                font-size: 40px;
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
                margin-top: 2.5rem;
                color: var(--div-color1);
            }
            input{
                margin-top: 1rem;
                width: 300px;
                height: 50px;
                border: none;
                border-radius: 10px;
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
                            <input type="text" name="username">
                        </div>
                        <div class="row2">
                            <label>Password</label>
                            <input type="text" name="password">
                        </div>
                        <label type="submit">loging</label>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ATOM BANK</title>
    </head>
    <body>
        <main>
            <div class="side1"></div>
            <div class="side2">
                <div class="menu">
                    <h2 id="m1">ATOM</h2>
                    <h2 id="m2">Home</h2>
                    <h2 id="m3">Contact Us</h2>
                    <h2 id="m4">About Us</h2>
                </div>
                <h1>Create Account</h1>
                <form method="POST" action="Create_Account.php">
                    <div class="row1">
                        <div class="R1">
                            <label>Account Number</label>
                            <input type="text" name="account" id="account">
                        </div>
                        <div class="R2">
                            <label>Email</label>
                            <input type="text" name="email" id="email">
                        </div>
                    </div>
                    <div class="row2">
                        <div class="R3">
                            <label>Usename</label>
                            <input type="text" name="username" id="username">
                        </div>
                        <div class="R4">
                            <label>Password</label>
                            <input type="text" name="password" id="password">
                        </div>
                    </div>
                    <div class="row3">
                        <label>Phone</label>
                        <input type="text" name="phone" id="phone">
                    </div>
                </form>
                <button id="btn">Submit</button>
            </div>
        </main>
    </body>
</html>
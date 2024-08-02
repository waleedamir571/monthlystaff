
<?php

include 'partials/header.php';

?>

<body>
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <h1 class="opacity">Login</h1>
                <form action="index.php" method="post">

                    <label for="name">Name</label>
                    <input type="text" name="Name" placeholder="Name" id="name" required>

                    <label for="phone">Password</label>
                    <input type="pasword" name="Password" placeholder="Password" id="phone" required>

                 

                    <button type="submit" class="opacity">SUBMIT</button>
                </form>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>
</body>

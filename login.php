<?php

include 'partials/header.php';

?>
<body>
    <section class="container">
        <div class="login-container">
            <div class="form-container">
                <h1>LOGIN</h1>
                <form action="process_login.php" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email" required />

                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" required />

                    <button type="submit">LOGIN</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>

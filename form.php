

<?php

include 'partials/header.php';

?>


<body>
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <h1 class="opacity">REGISTER</h1>
                <form action="index.php" method="post">

                    <label for="name">Salary Per Month</label>
                    <input type="text" name="Salary" placeholder="Salary" id="name" required>

                    <label for="phone">Experience</label>
                    <input type="text" name="Experience" placeholder="Experience" id="phone" required>

                    <label for="stack">Image</label>
                    <input type="file" name="Image" id="stack" required>

                    <label for="city">Full Name </label>
                    <input type="text" name="Name" placeholder="Full Name" id="city" required>

                    <label for="country">Stack</label>
                    <input type="text" name="Stack" placeholder="Stack" id="country" required>

                    <label for="country">City</label>
                    <input type="text" name="City" placeholder="City" id="country" required>

                    <label for="salary">Number</label>
                    <input type="number" name="Number" placeholder="Number" id="salary" required>

                    <button type="submit" class="opacity">SUBMIT</button>
                </form>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>
</body>




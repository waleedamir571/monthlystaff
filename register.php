

<?php

include 'partials/header.php';

?>


<body>
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <h1 class="opacity">REGISTER</h1>
                <form action="process_registration.php" method="post" enctype="multipart/form-data">
                    <label for="salary">Salary Per Month</label>
                    <input type="text" name="Salary" placeholder="Salary" id="salary" required pattern="\d{1,3}(,\d{3})*" title="Enter a valid salary (e.g., 1,000)" />

                    <label for="experience">Experience</label>
                    <input type="text" name="Experience" placeholder="Experience" id="experience" required />

                    <label for="image">Image</label>
                    <input type="file" name="Image" id="image" accept="image/*" required />

                    <label for="name">Full Name</label>
                    <input type="text" name="Name" placeholder="Full Name" id="name" required pattern="[A-Za-z\s]+" title="Enter a valid name" />

                    <label for="stack">Stack</label>
                    <input type="text" name="Stack" placeholder="Stack" id="stack" required pattern="[A-Za-z\s]+" title="Enter a valid stack" />

                    <label for="city">City</label>
                    <input type="text" name="City" placeholder="City" id="city" required />

                    <label for="number">Number</label>
                    <input type="number" name="Number" placeholder="Number" id="number" required />

                    <button type="submit" class="opacity">SUBMIT</button>
                </form>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>
</body>




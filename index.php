<?php  include_once"header.php";?>

<body>

    <div class="wrapper">
        <section class="form signup">
            <header>Real time chat app</header>

            <form action="#" enctype="multipart/form-data">
                <div class="error-txt">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First name</label>
                        <input type="text" placeholder="First name" name="fname" required>
                    </div>
                    <div class="field input">
                        <label for="">Last name</label>
                        <input type="text" placeholder="Last name" name="lname" required>
                    </div>
                </div>
                <div class="field input">
                    <label for="">Email address</label>
                    <input type="text" placeholder="Enter your email" name="email" required>
                </div>
                <div class="field input">
                    <label for="">Password</label>
                    <input type="password" placeholder="Enter your password" name="password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label for="">Select Image</label>
                    <input type="file" name="image">
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat" name="" id="">
                </div>
            </form>
            <div class="link">Already Have an account? <a href="login.php">Login now</a></div>
        </section>
    </div>
    <script src="js/pass-show-hide.js"></script>
    <script src="js/signup.js"></script>

</body>

</html>
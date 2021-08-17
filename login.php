<?php  include_once"header.php";?>

<body>

    <div class="wrapper">
        <section class="form login">
            <header>Real time chat app</header>
            <form action="#">
                <div class="error-txt"></div>

                <div class="field input">
                    <label for="">Email address</label>
                    <input type="text" name="email" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Enter your password">
                    <i class="fas fa-eye"></i>
                </div>

                <div class="field button">
                    <input type="submit" value="Continue to Chat" name="" id="">
                </div>
            </form>
            <div class="link">Don't Have an account? <a href="index.php">Signup now</a></div>
        </section>
    </div>
    <script src="js/pass-show-hide.js"></script>
    <script src="js/login.js"></script>
</body>

</html>
<?php
session_start();
if (!isset ( $_SESSION['unique_id'] )) {
    header("location: login.php");
}
?>
<?php  include_once"header.php";?>
<style>
.contacts .btn {
    background-color: #333;
    height: 45px;
    padding: 10px;
    border-radius: 10px;
    width: 40%;
    margin-left: 60%;
}

.contacts .btn i {
    border-radius: 50%;
    padding: 3px;
}


.contacts .btn a {
    color: white;
}
</style>

<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <?php 
            include_once"php/config.php";
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if (mysqli_num_rows($sql) >0) {
                $row = mysqli_fetch_assoc($sql);
                
            }
            ?>
                <div class="content">
                    <img src="php/images/<?php echo $row['img']; ?>" alt="">
                    <div class="details">
                        <span>
                            <?php echo $row['fname'] . " " . $row['lname'];?>
                        </span>
                        <p>
                            <?php echo $row['status'];?>
                        </p>
                    </div>
                </div>
                <a href="logout.php" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select an user to start chat</span>
                <input type="text" placeholder="Enter name to search..">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">

            </div>
        </section>
    </div>
    <script src="js/users.js"></script>
</body>

</html>
<?php 
session_start();
include_once"config.php";
$outgoing_id = $_SESSION['unique_id'];
$sql = mysqli_query($conn, "SELECT * FROM users");
$output = "";
if (mysqli_num_rows($sql) == 1 ) {
    $output .= "No users are available to chat!";
}
elseif (mysqli_num_rows($sql) >0 ){
    while ($row = mysqli_fetch_assoc($sql)) {
        $output .= '
                    <a href="chat.php?user_id='.$row['unique_id'].'">
                         <div class="content">
                        <img src="php/images/'.$row['img'].'" alt="">
                        <div class="details">
                            <span>'.$row['fname'] . " " . $row['lname'].'</span>
                            <p>Start a conversation</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>';
    }
}

echo $output;
?>
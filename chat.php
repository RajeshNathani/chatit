<?php
        require('config.php');
        $query = "SELECT DISTINCT Name , msg FROM chatting ORDER BY id";
       $time = " DELETE FROM on_search WHERE search_date < UNIX_TIMESTAMP(DATE_SUB(NOW(), INTERVAL 3 DAY))";
       $run = $conn->query($time);
        $sql = "DELETE FROM `chatting` WHERE msg = '' ";
        $run = $conn->query($sql);
        $run = $conn->query($query);
            while($row = $run->fetch_array()):
        ?>
            <div class="chat-data">
                <span class="name" > <h5><?php echo $row['Name'];?>:</h5></span>
                <span class="msg"> <h5><?php echo $row['msg'];?></h5></span>
                
                
               
    </div><?php endwhile;?>
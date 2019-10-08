   <?php
   include '../database/Config.php';
           $sql=      ("SELECT * FROM cms_contact");
           $res = $conn->query($sql);
            
          

        $row = mysqli_fetch_row($res);
        echo $row->cnt_address ;
            
            ?>
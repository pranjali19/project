<HTML>
     <head>
       <?php
            $value1 = trim($_POST[name]);
        $value2 = trim($_POST[address]);
    $value3= trim($_POST[city]);
        ?>
     </head>
     <body>
       <form action="secondpage.php" method="POST">
         //content of form
        <?php
           echo "<a href='secondpage.php?name=" . $value1 . " && address=" . $value2 .              " && city=" . $value3 . "'><input type='button' value='Proceed To Customer Profile!!!' class='submit' style='cursor:pointer;cursor:hand;' />";
           ?>
  </body>
 </html>
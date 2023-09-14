<?php
       require 'data/data.php' ; 

?>
<div class='content'>
        <?php 
             foreach($list_post as $item)
             {
         ?>  
                <div class='content_item'>
                       <h3> <?php echo $item['title'] ;  ?></h3>
                       <p><?php  echo  $item['content'] ; ?></p>

                </div> 
         <?php       
             }   
        ?>


</div>

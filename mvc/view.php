<?php

//The view display the sate passesd by the controller
//It should only cokntain canimal php to diplay variables

?>
<h1> product list </h1> 
<ul>
    <?php foreach ($product as $product):?>
        <li>
            <?phpecho $product['name']; ?>      
            <?phpecho $product['price']; ?>
           
        </li>
        <?php endforeach; ?>
        </ul>
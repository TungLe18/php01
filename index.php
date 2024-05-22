<?php 
include_once('header.php');









if (isset($_GET['page_layout'])) {
   switch ($_GET['page_layout']) {
       case 'cart':
          include_once('cart.php');
           break;

           case 'category':
          include_once('category.php');
           break;

           case 'product':
          include_once('product.php');
           break;

           case 'search':
          include_once('search.php');
           break;

           case 'success':
          include_once('success.php');
           break;
       
     
   }
}else{


    include_once('static.php');
}

 ?>
                
        








<?php 

include_once('footer.php');
 ?>




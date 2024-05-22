<?php
include_once('header.php');
?>
	

<?php 
//master page: switch-case + GET
//location/vietpro_mobile_shop/admin.php?page+layout=user



//có tồn tại or không sủa dụng hàm isset

if (isset($_GET['page_layout'])) {
	switch ($_GET['page_layout']) {
	case 'category':

		include_once('category.php');
		break;

		case 'add_category':

		include_once('add_category.php');
		break;

		case 'add_product':

		include_once('add_product.php');
		break;

		case 'add_user':

		include_once('add_user.php');
		break;

		case 'edit_category':

		include_once('edit_category.php');
		break;

		case 'edit_product':

		include_once('edit_product.php');
		break;

		case 'edit_user':

		include_once('edit_user.php');
		break;

		// case 'login':

		// include_once('login.php');
		// break;

		case 'product':

		include_once('product.php');
		break;

		case 'user':

		include_once('user.php');
		break;
}
}
else{

	include_once('static.php');
}


	
	




 ?>





<?php
include_once('footer.php');
?>
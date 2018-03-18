<?php
session_start();
include_once "models/database.php";
include_once "models/category_model.php";
include_once "models/product_model.php";
include_once "models/user_model.php";
include_once "models/catelog_model.php";

if(isset($_POST['action'])){
    $action = $_POST['action'];
}elseif(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = 'home';
}

switch($action){
        case 'home':
            if(isset($_SESSION['hot_this_week'])){unset($_SESSION['hot_this_week']);}
            $products = $products->getRandomProductsForHome();
            $_SESSION['hot_this_week'] = $products;
            header('Location: view/home.php');
            break;

        case 'Iphone':
            $category_id = $_GET['id'];
            $side_bar = 'left';
            if(isset($_GET['sb'])){$side_bar = $_GET['sb'];}
            $location = 'category-' . $side_bar . '.php';
            $category = $category->getCategory($category_id);
            $products_by_category = $products->getProductsByCategory($category_id, "product_id");
            $_SESSION['category'] = $category;
            $_SESSION['products_by_category'] = $products_by_category;
            header("Location: view/$location");
            break;
          
        case 'Samsung':
           $category_id = $_GET['id'];
            $side_bar = 'left';
            if(isset($_GET['sb'])){$side_bar = $_GET['sb'];}
            $location = 'category-' . $side_bar . '.php';
            $category = $category->getCategory($category_id);
            $products_by_category = $products->getProductsByCategory($category_id, "product_id");
            $_SESSION['category'] = $category;
            $_SESSION['products_by_category'] = $products_by_category;
            header("Location: view/$location");
            break;

        case 'Pixel':
            $category_id = $_GET['id'];
            $side_bar = 'left';
            if(isset($_GET['sb'])){$side_bar = $_GET['sb'];}
            $location = 'category-' . $side_bar . '.php';
            $category = $category->getCategory($category_id);
            $products_by_category = $products->getProductsByCategory($category_id, "product_id");
            $_SESSION['category'] = $category;
            $_SESSION['products_by_category'] = $products_by_category;
            header("Location: view/$location");
            break;

        case 'Tecno':
            $category_id = $_GET['id'];
            $side_bar = 'left';
            if(isset($_GET['sb'])){$side_bar = $_GET['sb'];}
            $location = 'category-' . $side_bar . '.php';
            $category = $category->getCategory($category_id);
            $products_by_category = $products->getProductsByCategory($category_id, "product_id");
            $_SESSION['category'] = $category;
            $_SESSION['products_by_category'] = $products_by_category;
            header("Location: view/$location");
            break;

        case 'Infinix':
            $category_id = $_GET['id'];
            $side_bar = 'left';
            if(isset($_GET['sb'])){$side_bar = $_GET['sb'];}
            $location = 'category-' . $side_bar . '.php';
            $category = $category->getCategory($category_id);
            $products_by_category = $products->getProductsByCategory($category_id, "product_id");
            $_SESSION['category'] = $category;
            $_SESSION['products_by_category'] = $products_by_category;
            header("Location: view/$location");
            break;

        case 'HP':
           $category_id = $_GET['id'];
            $side_bar = 'left';
            if(isset($_GET['sb'])){$side_bar = $_GET['sb'];}
            $location = 'category-' . $side_bar . '.php';
            $category = $category->getCategory($category_id);
            $products_by_category = $products->getProductsByCategory($category_id, "product_id");
            $_SESSION['category'] = $category;
            $_SESSION['products_by_category'] = $products_by_category;
            header("Location: view/$location");
            break;

        case 'Macbook':
            $category_id = $_GET['id'];
            $side_bar = 'left';
            if(isset($_GET['sb'])){$side_bar = $_GET['sb'];}
            $location = 'category-' . $side_bar . '.php';
            $category = $category->getCategory($category_id);
            $products_by_category = $products->getProductsByCategory($category_id, "product_id");
            $_SESSION['category'] = $category;
            $_SESSION['products_by_category'] = $products_by_category;
            header("Location: view/$location");
            break;

        case 'Lenovo':
           $category_id = $_GET['id'];
            $side_bar = 'left';
            if(isset($_GET['sb'])){$side_bar = $_GET['sb'];}
            $location = 'category-' . $side_bar . '.php';
            $category = $category->getCategory($category_id);
            $products_by_category = $products->getProductsByCategory($category_id, "product_id");
            $_SESSION['category'] = $category;
            $_SESSION['products_by_category'] = $products_by_category;
            header("Location: view/$location");
            break;

        case 'Dell':
           $category_id = $_GET['id'];
            $side_bar = 'left';
            if(isset($_GET['sb'])){$side_bar = $_GET['sb'];}
            $location = 'category-' . $side_bar . '.php';
            $category = $category->getCategory($category_id);
            $products_by_category = $products->getProductsByCategory($category_id, "product_id");
            $_SESSION['category'] = $category;
            $_SESSION['products_by_category'] = $products_by_category;
            header("Location: view/$location");
            break;

        case 'Acer':
            $category_id = $_GET['id'];
            $side_bar = 'left';
            if(isset($_GET['sb'])){$side_bar = $_GET['sb'];}
            $location = 'category-' . $side_bar . '.php';
            $category = $category->getCategory($category_id);
            $products_by_category = $products->getProductsByCategory($category_id, "product_id");
            $_SESSION['category'] = $category;
            $_SESSION['products_by_category'] = $products_by_category;
            header("Location: view/$location");
            break;

        case 'Product details':
            $product_key = $_GET['key'];
            $location = $_GET['location'];
            $product = $products->getProduct($product_key);
            $category = $category->getCategory($product['category_id']);
            $products = $products->getRandomProductsForYouMayLikeThis();
            if(isset($_SESSION['prev_url_to_redirect_to_after_adding_product_from_details_page'])){
                unset($_SESSION['prev_url_to_redirect_to_after_adding_product_from_details_page']);
            }
            if(isset($_SESSION['product'])){ unset($_SESSION['product']); }
            if(isset($_SESSION['category'])){unset($_SESSION['category']);}
            if(isset($_SESSION['you_may_also_like_these'])){unset($_SESSION['you_may_also_like_these']);}
            $_SESSION['prev_url_to_redirect_to_after_adding_product_from_details_page'] = $location;
            $_SESSION['product'] = $product;
            $_SESSION['you_recently_viewed'][$product_key] = $product;
            $_SESSION['category'] = $category;
            $_SESSION['you_may_also_like_these'] = $products;
            header("Location: view/detail.php"); 
            break;

        case 'Register':
            $name = filter_input(INPUT_POST, 'name');
            $password = filter_input(INPUT_POST, 'password');
            $email = filter_input(INPUT_POST, 'email');
            $validate_input = $user->validateUserReg($name, $email, $password);
            if($validate_input !== TRUE){
                $_SESSION['reg_err'] = $validate_input;
                header("Location: view/register.php");
                break;
            }else{
                $register = $user->register($name, $email, $password);
                if($register === TRUE){
                    $user_data = $user->login($email, $password);
                    $_SESSION['user_data'] = $user_data;
                    header("Location: view/home.php");
                    break;
                }else{
                    $_SESSION['reg_err'] = array('email exist' => 'A user with that email address already exists!',
                                                 'cor_name_4_email_problem'=>$name,
                                                 'cor_email_4_email_problem'=>$email);
                    header("Location: view/register.php");
                    break;
                }
                
            }
        
        case 'Logout':
            $user->logout($_SESSION['user_data']['user_email']);
            header("Location: view/home.php");
            break;

        case 'Login':
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');
            $validate_input = $user->validateUserLogin($email, $password);
            if($validate_input !== TRUE){
                $_SESSION['log_err'] = $validate_input;
                header("Location: view/register.php");
                break;
            }else{
                $user_data = $user->login($email, $password);
                if($user_data){
                    $_SESSION['user_data'] = $user_data;
                    header("Location: view/home.php");
                    break;
                }else{
                    $_SESSION['log_err'] = array('Not registerd' => 'Invalid Login data. Kindly register for more access');
                    header("Location: view/register.php");
                    break;
                }
            }
            
        case 'Add to basket':
            $product_key = $_GET['key'];
            $location = $_GET['location'];
            if($location === 'detail'){
                $location = $_SESSION['prev_url_to_redirect_to_after_adding_product_from_details_page'];
            }
            $catelog->addItem($product_key);
            $count_cart = $catelog->countCartItem();
            $cart_total = $catelog->getCartTotal();
            $_SESSION['count_cart'] = $count_cart;
            $_SESSION['cart_total'] = $cart_total;
            header("Location: view/$location.php");
            break;

        case 'Delete item from cart':
            $product_key = $_GET['key'];
            $catelog->deleteCartItem($product_key);
            header("Location: view/basket.php");
            break;

        case 'Update cart':
            $update_data = $_POST['update_cart_qty'];
            foreach($update_data as $key=>$qty){
                if($qty > 0){
                    $catelog->updateCartItem($key, $qty);
                    $count_cart = $catelog->countCartItem();
                    $cart_total = $catelog->getCartTotal();
                    $_SESSION['count_cart'] = $count_cart;
                    $_SESSION['cart_total'] = $cart_total;
                }else{
                    $catelog->deleteCartItem($key);
                }
            }
            header("Location: view/basket.php");
            break;

        case 'Basket':
            $prev = $_GET['prev'];
            if($prev !== 'basket'){
                if($prev === 'detail'){
                    $_SESSION['prev_url_to_continue_shoping_from_basket'] = $_SESSION['prev_url_to_redirect_to_after_adding_product_from_details_page'];
                }else{
                    $_SESSION['prev_url_to_continue_shoping_from_basket'] = $prev;
                }
                
            }
            header('Location: view/basket.php');
            break;
            
        case 'Change pasword':
            $user_id = $_SESSION['user_data']['id'];
            $old_password = $_POST['old_password'];
            $new_password = $_POST['new_password'];
            $confirm_new_password = $_POST['confirm_new_password'];
            $result = $user->changeUserPassword($user_id, $old_password, $new_password, $confirm_new_password);
            if(isset($_SESSION['password_change_message'])){ unset($_SESSION['password_change_message']); }
            $_SESSION['password_change_message'] = $result;
            header('Location: view/customer-account.php');
            break;

        // case 'Sidebar-right':
            // $category_id = $_GET['id'];
            // $side_bar = 'left';
            // if(isset($_GET['sb'])){$side_bar = $_GET['sb'];}
            // $location = 'category-' . $side_bar . '.php';

            // $category = $category->getCategory($category_id);
            // $products_by_category = $products->getProductsByCategory($category_id, "product_id");
            // $_SESSION['category'] = $category;
            // $_SESSION['products_by_category'] = $products_by_category;
            

            

}

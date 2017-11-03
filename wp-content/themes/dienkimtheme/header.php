<!DOCTYPE html>
<?php 
global $customizerGlobal;
?>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php 
        wp_title('|', true,'right');
        bloginfo('name');
        ?>
    </title>    
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri() . '/';?>js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head();?>    
    
</head>
<body>
    <?php
/*require_once get_template_directory()."/check-page.php";
new CheckPage();*/ 
global $zController,$zendvn_sp_settings;
$zController->getController("/frontend","ProductController");
$page_id_register_member = $zController->getHelper('GetPageId')->get('_wp_page_template','register-member.php');  
$page_id_account = $zController->getHelper('GetPageId')->get('_wp_page_template','account.php');
$page_id_security = $zController->getHelper('GetPageId')->get('_wp_page_template','security.php');  
$page_id_history = $zController->getHelper('GetPageId')->get('_wp_page_template','history.php');  
$page_id_cart = $zController->getHelper('GetPageId')->get('_wp_page_template','zcart.php');   
$page_id_search = $zController->getHelper('GetPageId')->get('_wp_page_template','search.php');          
$register_member_link = get_permalink($page_id_register_member);
$account_link = get_permalink($page_id_account);
$security_link=get_permalink($page_id_security);
$history_link=get_permalink($page_id_history );
$cart_link=get_permalink($page_id_cart );
$search_link = get_permalink($page_id_search);  
$ssName="vmuser";
$ssNameCart="vmart";
$ssValue="userlogin";
$ssValueCart="zcart";
$arrUser=array();
$ssUser     = $zController->getSession('SessionHelper',$ssName,$ssValue);
$ssCart     = $zController->getSession('SessionHelper',$ssNameCart,$ssValueCart);
$arrUser = @$ssUser->get($ssValue)["userInfo"];
$arrCart = @$ssCart->get($ssValueCart)["cart"];   
$contacted_phone=$zendvn_sp_settings['contacted_phone'];
$email_to=$zendvn_sp_settings['email_to'];
$address=$zendvn_sp_settings['address'];
$to_name=$zendvn_sp_settings['to_name'];
$telephone=$zendvn_sp_settings['telephone'];
$website=$zendvn_sp_settings['website'];
$opened_time=$zendvn_sp_settings['opened_time'];
$opened_date=$zendvn_sp_settings['opened_date'];
$contaced_name=$zendvn_sp_settings['contacted_name'];
$facebook_url=$zendvn_sp_settings['facebook_url'];
$twitter_url=$zendvn_sp_settings['twitter_url'];
$google_plus=$zendvn_sp_settings['google_plus'];
$youtube_url=$zendvn_sp_settings['youtube_url'];
$instagram_url=$zendvn_sp_settings['instagram_url'];
$pinterest_url=$zendvn_sp_settings['pinterest_url'];     
$quantity=0; 
if(count($arrCart) > 0){
    foreach($arrCart as $cart){    
        $quantity+=(int)$cart['product_quantity'];
    }
}
?>    
<header class="header">
    <div class="container">
        <div class="col-lg-12 no-padding">
            <div class="top-menu-wrapper">
                <?php     
                $args = array( 
                    'menu'              => '', 
                    'container'         => '', 
                    'container_class'   => '', 
                    'container_id'      => '', 
                    'menu_class'        => 'topmenu', 
                    'menu_id'           => 'top-menu', 
                    'echo'              => true, 
                    'fallback_cb'       => 'wp_page_menu', 
                    'before'            => '', 
                    'after'             => '', 
                    'link_before'       => '', 
                    'link_after'        => '', 
                    'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
                    'depth'             => 3, 
                    'walker'            => '', 
                    'theme_location'    => 'top-menu' 
                );
                wp_nav_menu($args);
                ?>
            </div>                    
        </div>
    </div>
    <div class="bg-header">
        <div class="container">        
            
                <div class="col-lg-10 no-padding">                
                    <a href="<?php echo home_url(); ?>">                
                        <img src="<?php echo $customizerGlobal->general_section('site-logo');?>" />
                    </a>
                </div>                
                <div class="col-lg-2 no-padding">
                    <div class="hotline">
                        <span>Hotline:</span>
                        <span><?php echo $contacted_phone; ?></span>
                    </div>
                </div>      
                <div class="clr"></div>      
           
        </div>    
    </div>   
    <div class="main-menu-wrapper">
        <div class="container">
            <div id="smoothmainmenu" class="ddsmoothmenu">
                <?php     
                $args = array( 
                    'menu'              => '', 
                    'container'         => '', 
                    'container_class'   => '', 
                    'container_id'      => '', 
                    'menu_class'        => 'mainmenu', 
                    'menu_id'           => 'main-menu', 
                    'echo'              => true, 
                    'fallback_cb'       => 'wp_page_menu', 
                    'before'            => '', 
                    'after'             => '', 
                    'link_before'       => '', 
                    'link_after'        => '', 
                    'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
                    'depth'             => 3, 
                    'walker'            => '', 
                    'theme_location'    => 'main-menu' 
                );
                wp_nav_menu($args);
                ?>   
                <div class="clr"></div>
            </div>   
            <div class="clr"></div>             
        </div>        
    </div>
    <div class="mobilemenu">
        <div class="container">
            <div>
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>                   
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <?php     
                            $args = array( 
                                'menu'              => '', 
                                'container'         => '', 
                                'container_class'   => '', 
                                'container_id'      => '', 
                                'menu_class'        => 'nav navbar-nav', 
                                'menu_id'           => 'mobile-menu', 
                                'echo'              => true, 
                                'fallback_cb'       => 'wp_page_menu', 
                                'before'            => '', 
                                'after'             => '', 
                                'link_before'       => '', 
                                'link_after'        => '', 
                                'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
                                'depth'             => 3, 
                                'walker'            => '', 
                                'theme_location'    => 'mobile-menu' 
                            );
                            wp_nav_menu($args);
                            ?>             
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>



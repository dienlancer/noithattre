<?php 
	/*
	 Template Name: HomePage
	 */	 
     global $zendvn_sp_settings;
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
     ?>
     <?php get_header();     ?>
     <div class="container margin-top-15 free-coffee">
         <div class="col-lg-3 no-padding"><div><center><img src="<?php echo site_url( '/wp-content/uploads/mien-phi-1.png', null ); ?>" /></center></div></div>
         <div class="col-lg-3 no-padding"><div><center><img src="<?php echo site_url( '/wp-content/uploads/mien-phi-2.png', null ); ?>" /></center></div></div>
         <div class="col-lg-3 no-padding"><div><center><img src="<?php echo site_url( '/wp-content/uploads/mien-phi-3.png', null ); ?>" /></center></div></div>
         <div class="col-lg-3 no-padding"><div><center><img src="<?php echo site_url( '/wp-content/uploads/mien-phi-4.png', null ); ?>" /></center></div></div>
     </div>
     <div class="margin-top-5 relative">            
        <?php if(is_active_sidebar('slideshow-widget')):?>
            <?php dynamic_sidebar('slideshow-widget')?>
        <?php endif; ?>    
        <div class="container news-absolute">          
                <?php if(is_active_sidebar('thiet-bi-ve-sinh-widget')):?>
                    <?php dynamic_sidebar('thiet-bi-ve-sinh-widget')?>
                <?php endif; ?>            
        </div>            
    </div>
    <div class="container featured-article">
        <?php if(is_active_sidebar('featured-article-widget')):?>
        <?php dynamic_sidebar('featured-article-widget')?>
        <?php endif; ?>    
    </div>    
    <div class="container main featured-instruction margin-top-15">
        <h2 class="title-box-news"><a class="text-title-box" title="" href="/cong-trinh-tieu-bieu/">Công trình tiêu biểu</a></h2>     
        <div class="margin-top-15 product-kemma">            
            <script type="text/javascript" language="javascript">
                jQuery(document).ready(function(){
                    jQuery("div.tab-power > div:nth-child(2)").show();
                    jQuery("div.tab-power > div.tab > div > div:first-child > button").addClass('active');
                });
                function openCity(evt, cityName) {    
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }   
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }   
                    document.getElementById(cityName).style.display = "block";
                    evt.currentTarget.className += " active";
                }
            </script>
            <div class="room-dimention">
                               
                    <div class="tab-power">                
                        <div class="tab">                    
                            <div class="javapec">
                                <div class="tab-instruction"><button class="tablinks h-title" onclick="openCity(event, 'chung-cu')">Chung cư</button></div>
                                <div class="tab-instruction"><button class="tablinks h-title" onclick="openCity(event, 'biet-thu')">Biệt thự</button></div>
                                <div class="tab-instruction"><button class="tablinks h-title" onclick="openCity(event, 'khach-san')">Khách sạn</button></div>
                                <div class="tab-instruction"><button class="tablinks h-title" onclick="openCity(event, 'nha-lien-ke')">Nhà liền kề</button></div>
                                <div class="tab-instruction"><button class="tablinks h-title" onclick="openCity(event, 'nha-pho')">Nhà phố</button></div>
                                <div class="tab-instruction"><button class="tablinks h-title" onclick="openCity(event, 'van-phong')">Văn phòng</button></div>
                                <div class="tab-instruction"><button class="tablinks h-title" onclick="openCity(event, 'phong-khach')">P. Khách</button></div>
                                <div class="tab-instruction"><button class="tablinks h-title" onclick="openCity(event, 'phong-ngu')">P. Ngủ</button></div>
                                <div class="tab-instruction"><button class="tablinks h-title" onclick="openCity(event, 'phong-bep')">P. Bếp</button></div>
                                <div class="tab-instruction"><button class="tablinks h-title" onclick="openCity(event, 'phong-an')">P. Ăn</button></div>
                                <div class="tab-instruction"><button class="tablinks h-title" onclick="openCity(event, 'phong-tre-em')">P. Trẻ em</button></div>                                    
                                <div class="clr"></div>                                  
                            </div>                                                
                        </div>
                        <div id="chung-cu" class="tabcontent">
                            <?php if(is_active_sidebar('chung-cu-widget')):?>
                                <?php dynamic_sidebar('chung-cu-widget')?>
                            <?php endif; ?>        
                        </div>
                        <div id="biet-thu" class="tabcontent">
                            <?php if(is_active_sidebar('biet-thu-widget')):?>
                                <?php dynamic_sidebar('biet-thu-widget')?>
                            <?php endif; ?>  
                        </div> 
                        <div id="khach-san" class="tabcontent">
                            <?php if(is_active_sidebar('khach-san-widget')):?>
                                <?php dynamic_sidebar('khach-san-widget')?>
                            <?php endif; ?>  
                        </div>
                        <div id="nha-lien-ke" class="tabcontent">
                            <?php if(is_active_sidebar('nha-lien-ke-widget')):?>
                                <?php dynamic_sidebar('nha-lien-ke-widget')?>
                            <?php endif; ?>  
                        </div>
                        <div id="nha-pho" class="tabcontent">
                            <?php if(is_active_sidebar('nha-pho-widget')):?>
                                <?php dynamic_sidebar('nha-pho-widget')?>
                            <?php endif; ?>  
                        </div>
                        <div id="van-phong" class="tabcontent">
                            <?php if(is_active_sidebar('van-phong-widget')):?>
                                <?php dynamic_sidebar('van-phong-widget')?>
                            <?php endif; ?>  
                        </div>
                        <div id="phong-khach" class="tabcontent">
                            <?php if(is_active_sidebar('phong-khach-widget')):?>
                                <?php dynamic_sidebar('phong-khach-widget')?>
                            <?php endif; ?>  
                        </div>
                        <div id="phong-ngu" class="tabcontent">
                            <?php if(is_active_sidebar('phong-ngu-widget')):?>
                                <?php dynamic_sidebar('phong-ngu-widget')?>
                            <?php endif; ?>  
                        </div>
                        <div id="phong-bep" class="tabcontent">
                            <?php if(is_active_sidebar('phong-bep-widget')):?>
                                <?php dynamic_sidebar('phong-bep-widget')?>
                            <?php endif; ?>  
                        </div>
                        <div id="phong-an" class="tabcontent">
                            <?php if(is_active_sidebar('phong-an-widget')):?>
                                <?php dynamic_sidebar('phong-an-widget')?>
                            <?php endif; ?>  
                        </div>
                        <div id="phong-tre-em" class="tabcontent">
                            <?php if(is_active_sidebar('phong-tre-em-widget')):?>
                                <?php dynamic_sidebar('phong-tre-em-widget')?>
                            <?php endif; ?>  
                        </div>  
                    </div>
               
            </div>
        </div>                  
    </div>        
    <div class="container main margin-top-15">
        <h2 class="title-box-news"><a class="text-title-box" title="" href="/cong-trinh-tieu-bieu/">Thiết kế nội thất phòng</a></h2>     
        <div class="margin-top-15">
            <?php if(is_active_sidebar('thiet-ke-noi-that-phong-widget')):?>
                <?php dynamic_sidebar('thiet-ke-noi-that-phong-widget')?>
            <?php endif; ?> 
        </div>
    </div>
    <div class="container main margin-top-15">
        <h2 class="title-box-news"><a class="text-title-box" title="" href="/cong-trinh-tieu-bieu/">Thi công nội thất</a></h2>     
        <div class="margin-top-15">
            <?php if(is_active_sidebar('thi-cong-noi-that-widget')):?>
                <?php dynamic_sidebar('thi-cong-noi-that-widget')?>
            <?php endif; ?> 
        </div>
    </div>
    <div class="container main margin-top-15">
        <h2 class="title-box-news"><a class="text-title-box" title="" href="/cong-trinh-tieu-bieu/">Kiến thức nhà đẹp</a></h2>     
        <div class="margin-top-15">
            <?php if(is_active_sidebar('kien-thuc-nha-dep-widget')):?>
                <?php dynamic_sidebar('kien-thuc-nha-dep-widget')?>
            <?php endif; ?> 
        </div>
    </div>
    <div class="container margin-top-15">
            <h2 class="title-box-news"><a class="text-title-box" title="" href="/cong-trinh-tieu-bieu/">Đối tác</a></h2>     
           
                <?php if(is_active_sidebar('partner-widget')):?>
                    <?php dynamic_sidebar('partner-widget')?>
                <?php endif; ?>  
           
        </div>   
    
        <div class="cleverhouse">
            <div class="container">
                <div class="col-lg-4 no-padding">
                    <div class="padding-top-5 padding-bottom-5">
                        <div class="col-lg-3 no-padding"><center><span class="follow-us">Follow us</span></center></div>
                        <div class="col-lg-9 no-padding">
                            <div class="warasocial"><ul class="social-block ">
                                <li class="facebook"><a class="_blank" href="<?php echo $facebook_url; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a class="_blank" href="<?php echo $twitter_url; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li class="rss"><a class="_blank" href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                <li class="google_plus"><a class="_blank" href="<?php echo $google_plus; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li class="pinterest"><a class="_blank" href="<?php echo $pinterest_url; ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                            </ul></div>                        
                        </div>
                        <div class="clr"></div>       
                    </div>                
                </div>
                <div class="col-lg-8 no-padding-right">
                    <div class="menu-bottom">
                        <?php     
                        $args = array( 
                            'menu'              => '', 
                            'container'         => '', 
                            'container_class'   => '', 
                            'container_id'      => '', 
                            'menu_class'        => 'bottommenu', 
                            'menu_id'           => 'bottom-menu', 
                            'echo'              => true, 
                            'fallback_cb'       => 'wp_page_menu', 
                            'before'            => '', 
                            'after'             => '', 
                            'link_before'       => '', 
                            'link_after'        => '', 
                            'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
                            'depth'             => 3, 
                            'walker'            => '', 
                            'theme_location'    => 'bottom-menu' 
                        );
                        wp_nav_menu($args);
                        ?>         
                    </div>   
                    <div class="clr"></div>             
                </div>
                <div class="clr"></div>       
            </div>
            <div class="clr"></div>       
        </div>
    <?php get_footer(); ?>
    <?php wp_footer();?>
</body>
</html>
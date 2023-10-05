<?php get_header();?>



<div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="hero")">
                    <?php 
                    $hero_title = get_theme_mod('set_hero_title', __('Please type some title', 'barbershop'));
                    $hero_subtitle = get_theme_mod('set_hero_subtitle', __('Please type some subtitle', 'barbershop'));
                    $hero_image = wp_get_attachment_url( get_theme_mod('set_hero_image'));
                    ?>
                        <div class="container">
                            <div class="grid2x2">
                                <div class="box box1"><h2><?php echo esc_html($hero_title);?></h2></div>
                                <div class="box box2"><div><p><?php echo nl2br(esc_html($hero_subtitle));?></p></div></div>
                                <div class="box box3"><div><img class="image1" src="<?php echo esc_url($hero_image);?>" ></div></div>
                            </div>  
                        </div>
                    </section>
                    <section class="services">
                        <div class="container">
                            <div class="service-l">
                                <h3>
                                
                                    <?php
                                    $services_title = get_theme_mod('set_services_title', __('Please type some title', 'wp-devs'));
                                    $services_subtitle = get_theme_mod('set_services_subtitle', __('Please type some subtitle', 'wp-devs'));
                                    $services_button_link = get_theme_mod('set_services_button_link', '#');
                                    $services_button_text = get_theme_mod('set_services_button_text', __('Learn More', 'wp-devs'));
                                    
                                    
                                    $services_bullet = get_theme_mod('set_services_bullet','First service, Second service, Third service');
                                    $bullet = explode(",", ($services_bullet));

                                    ?>
                                    <ul>
                                    <?php            
                                        for($i=0; $i<count($bullet); $i+=1):
                                            echo "<li>$bullet[$i]</li>";
                                        endfor;
                                    ?>   
                                    </ul>
                                </h3>

                            </div>
                            <div class="service-r">
                                <div><h2><?php echo esc_html($services_title);?></h2></div>
                                <div><p><?php echo nl2br(esc_html($services_subtitle)); ?></p></div>
                                <div><a href="<?php echo esc_url($hero_button_link)?>"><button class="myButton"><?php echo esc_html($services_button_text);?></button></a></div>
                            </div>
                        </div>
                    </section>
                    <section class="step">
                        <div class="container">
                        <?php
                                    $step_title = get_theme_mod('set_step_title', __('Please type some title', 'barbershop'));
                                    $step_bullet = get_theme_mod('set_step_bullet','First step, Second step, Third step');
                                    $bullet = explode(",", ($step_bullet));
                                    $step_image = wp_get_attachment_url( get_theme_mod('set_step_image'));

                                    ?>
                                    
                            <div class="step1">
                                <h2><?php echo esc_html($step_title);?></h2>
                                
                            </div>
                            <div class="step2">
                            <h3>
                                <ul>
                                    <?php            
                                        for($i=0; $i<count($bullet); $i+=1):
                                            echo "<li>$bullet[$i]</li>";
                                        endfor;
                                    ?> 
                                </ul>
                            <h3>
                            </div>
                            <div class="step3 image2">
                                <img class="image1" src="<?php echo esc_url($step_image);?>" >
                            </div>
                        </div>
                        

                    </section>
                    <section class="prix">
                        <div class="container">
                            <div class="prix-u">
                                <h2>The Best Planning Price For You</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto explicabo ipsa des</p>
                            </div>
                        </div>
                        <div class="car">
                        <input type="radio" name="position" />
                        <input type="radio" name="position" checked/>
                        <input type="radio" name="position" />
                        <input type="radio" name="position" />
                        
                        <main id="carousel">
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                            <div class="item"></div>
                            
                        </main>
                        </div>
                    </section>
                    <section class="avis">
                        <div class="container">
                            <div>
                                <h2>What Do They Think For Us</h2>
                            </div>
                            <div class="com">
                                <div class="contenu-com">

                                </div>
                                <div class="contenu-profil">
                                    <div class="profil">Naym Assal</div>
                                    <div class="fleches"><< >></div>
                                </div>
                                
                                
                            </div>
                            
                        </div>  
                    </section>
                    <section class="foot">
                        <div class="container">
                            <div><h2>Get Our Free Pounch Cukurib Just For You</h2></div>
                            <div><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, quod quis iusto doloremque</p></div>
                            <div><button class="myButton">Subscribe Now</button></div>
                        </div>
                    </section>
                </main>
            </div>
        </div>

<?php get_footer();?>
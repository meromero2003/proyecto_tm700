<header id="masthead" class="site-header header-four">
	
	
	<div class="bottom-header fixed-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4 d-none d-lg-flex align-items-center">
					<img class="img-fluid" src="https://dev-v-nexxus.pantheonsite.io/wp-content/uploads/2024/06/V-NEXUS.png">

				</div>

				<div class="col-md-5 d-none d-lg-flex align-items-center">
					<?php if ( !get_theme_mod( 'disable_header_woo_cat_menu', false ) ) {
						if ( has_nav_menu( 'menu-4' ) ) { ?>
							<nav class="header-category-nav">
					            <ul class="nav navbar-nav navbar-left">
					                <li class="menu-item menu-item-has-children">
					                    <a href="#">
					                    	<i class="fas fa-bars"></i>
					                        <?php esc_html_e( 'Categories', 'bosa-shop-dark' ); ?>
					                    </a>
					                    <?php
					                    wp_nav_menu(array(
					                        'container'      => '',
											'theme_location' => 'menu-4',
											'menu_id'        => 'woo-cat-menu',
											'menu_class' => 'dropdown-menu',
					                    ));
					                    ?>
					                </li>
					            </ul>
					        </nav>
	            		<?php } else {
	            			if( class_exists( 'WooCommerce' ) ){ 
	            				$categories = get_categories( 'taxonomy=product_cat' );
            					if( is_array( $categories ) && !empty( $categories ) ){ ?>
					                <nav class="header-category-nav">
					                	<ul class="nav navbar-nav navbar-left">
							                <li class="menu-item menu-item-has-children">
							                    <a href="#">
							                    	<i class="fas fa-bars"></i>
							                        <?php esc_html_e( 'Services', 'bosa-shop-dark' ); ?>
							                    </a>
							                    <ul class="menu-categories-menu dropdown-menu">
							                        <?php
							                        foreach( $categories as $category ) {
							                            $category_permalink = get_category_link( $category->cat_ID ); ?>
							                            <li class="menu-item <?php echo esc_attr( $category->category_nicename ); ?>">
							                            	<a href="<?php echo esc_url( $category_permalink ); ?>">
							                            		<?php echo esc_html( $category->cat_name ); ?>
							                            	</a>
							                            </li>  
							                        <?php } ?>
							                    </ul>
							                </li>
							            </ul>
					                </nav>
				        		<?php } ?>
				        	<?php } ?>
				        <?php } ?>
			        <?php } ?>
					<nav id="site-navigation" class="main-navigation d-none d-lg-flex">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bosa-shop-dark' ); ?></button>
						<?php if ( has_nav_menu( 'menu-1' ) ) :
							wp_nav_menu( 
								array(
									'container'      => '',
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'menu_class'     => 'menu nav-menu',
								)
							);
						?>
						<?php else :
							wp_page_menu(
								array(
									'menu_class' => 'menu-wrap',
									'before'     => '<ul id="primary-menu" class="menu nav-menu">',
									'after'      => '</ul>',
								)
							);
						?>
						<?php endif; ?>
					</nav><!-- #site-navigation -->	
				</div>
				<div class="col-md-3 d-none d-md-block mt-2">
					<?php if ( class_exists('WooCommerce' ) ) { ?>
					    <div class="header-right hidden-xs" >
					        <?php
					       
					        if( !get_theme_mod( 'disable_woocommerce_wishlist', false ) ){bosa_shop_dark_head_wishlist();
					        }
					        if( !get_theme_mod( 'disable_woocommerce_account', false ) ){bosa_shop_dark_my_account();
					        }
					        if( !get_theme_mod( 'disable_woocommerce_cart', false ) ){bosa_shop_dark_header_cart();
					        }
					        ?>
					    </div>	
					<?php } ?>
				</div>
			</div>
		</div>	
		<!-- header search form end-->
		<div class="mobile-menu-container"></div>
	</div>
	<?php get_template_part( 'template-parts/offcanvas', 'menu' ); ?>
</header><!-- #masthead -->
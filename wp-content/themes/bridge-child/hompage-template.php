<?php
/**
 * Template Name: Home Page Template
 *
 */

get_header(); ?>

<div class="container homepage">



	<div class="container_inner default_template_holder clearfix page_container_inner">
		<div class="two_columns_75_25 background_color_sidebar grid2 clearfix">
			<div class="column1 leftside">
			<?php while ( have_posts() ) : the_post(); ?>
            
            <div class="latest-articles">
            
                <div class="big-article">
                <?php
                global $post;
                $args = array( 'posts_per_page' => 1 );
                
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                  <div class="td-module-thumb">
                  <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'full' ); ?></a>
                  </div>
                  
                  <div class="post-meta-info">
                      <div class="td-big-grid-meta">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        
                        <div class="post-content"> 
                            <?php $content = get_the_content();
							echo substr(strip_tags($content),0,200);  ?>
                          </div>
						<div class="btn-read-more">
                          <a href="<?php the_permalink(); ?>">Read More</a>
						</div>
                      </div>
                  </div>
                <?php endforeach; 
                 wp_reset_postdata();?>
                </div> 
                
                
                
            <div class="big-article three-col-post">
                <?php
                global $post;
                $args = array( 'posts_per_page' => 3, 'offset' => 1 );
                
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                <div class="vc_col-md-4 vc_col-sm-4 post-three">
                  <div class="td-module-thumb">
                  <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'full' ); ?></a>
                  </div>
                  
                  <div class="post-meta-info">
                      <div class="td-big-grid-meta">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        
                        <div class="post-content"> 
                            <?php $content = get_the_content();
							echo substr(strip_tags($content),0,100);  ?>
                          </div>
						<div class="btn-read-more">
                          <a href="<?php the_permalink(); ?>">Read More</a>
						</div>
                      </div>
                  </div>
                  </div>
                <?php endforeach; 
                 wp_reset_postdata();?>
                </div>
				
				
				
                
                <div class="big-article article-single">
                <?php
                global $post;
                $args = array( 'posts_per_page' => 3, 'offset' => 4 ,'category' => 1 );
                
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                  <div class="td-module-thumb">
                  <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'full' );  ?></a>
                  </div>
                  
                  <div class="post-meta-info">
                      <div class="td-big-grid-meta">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        
                        <div class="post-content"> 
                            <?php $content = get_the_content();
							echo substr(strip_tags($content),0,200);  ?>
                          </div>
						<div class="btn-read-more">
                          <a href="<?php the_permalink(); ?>">Read More</a>
						</div>
                      </div>
                  </div>
                <?php endforeach; 
                 wp_reset_postdata();?>
                </div>            
                
				
				
				
                </div>
                 
                
                
                
                
                
                            
            </div>                 
			<?php endwhile; // end of the loop. ?>
			
			<div class="column2">
            <?php dynamic_sidebar( 'Homepage Sidebar' ); ?>

            </div>
			
			</div>
			
			
            
            
		</div><!-- .two_columns_75_25 -->
	</div><!-- .container_inner -->
<section class="new_section_class" style="padding: 130px;border: 1px solid black;height: 200px;background: #737373; background: url(/wp-content/uploads/2017/12/slide01.jpg);">
				<div class="new_section"><h2 style="text-align: center;color: #ffffff;font-size: 80px; text-transform: initial; font-weight: 700;">Thank You for Visiting!</h2><br>
					<h4 style="text-align: center;color: #fff; font-size:21px">We hope you enjoyed your virtual shopping<br> experience. Please let us know if we can<br> help you with anything else. </h4>
				</div>
			</section>
            <div class="email_demo" style="background-color: #262626;border-bottom: 1px solid #fff;height: 55px;padding: 10px 0;background:#000;">
				<div class="input_class" style="text-align: center;">
				   <div class="row input-mail">
					<div class="col-md-6"><h3 style="font-size: 24px;padding: 12px;color: #fff;background-color: #000;font-weight: 900; letter-spacing: 0px;">HEAR GOOD STUFF:</h3></div>
                  <div class="col-md-6 "><input type="text" name="email_section" placeholder="Your Email Address..."></div></div>
				</div>
				
			</div>

<?php get_footer(); ?>
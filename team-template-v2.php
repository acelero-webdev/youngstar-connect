<?php /* Template Name: Team v2 */ ?>
<?php get_header(); ?>
<?php $banner = get_field('banner'); ?>


<style type="text/css">

    .m-d.expand-list{
    
        padding: 0;
        margin: 0 0 25px 0;
    }
    .m-d.expand-list > li{
        list-style-type: none;
        padding: 15px;      
        position: relative;
		background-color: #ccc;
		border-radius: 6px;
		margin-bottom: 5px;
		width: 70%;
		margin-left: 15%;
    }
    
 
 @media (max-width: 600px) {
    .m-d.expand-list > li{
		width: 90%;
		margin-left: 3%;
    }
}
    
    .m-d label[class^="tab"] {
        position: static;
    }
    
    .m-d label[class^="tab"]:hover{
        cursor: pointer;
    }

    .m-d label[class^="tab"] > a {
        color: black;
        text-decoration: none;
        position: relative;
        z-index: 10;
    }

    .m-d label[class^="tab"] > a:hover {
        text-decoration: underline;
    }
    
    .m-d input{
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }
    .m-d input[class^="tab"]{
        width: 100%;
        height: 40px;
        position: absolute;
        left: 0;
        top: 0; 
    }
	
	.m-d input[class^="tab"]:hover{
			cursor: pointer;
	}
	
    .m-d label[class^="tab"]{
        
    }
    
    .m-d .content{
        height: auto;
        max-height: 0;
                overflow: hidden;
        transform: translateY(20px);
        transition: all 180ms ease-in-out 0ms; 
    }
    
    .m-d li[data-md-content="100"] input[class^="tab"]:checked ~ .content{
        max-height: 100px;
        transition: all 150ms ease-in-out 0ms;
    }
    
    .m-d li[data-md-content="200"] input[class^="tab"]:checked ~ .content{
        max-height: 200px;
        transition: all 200ms ease-in-out 0ms;
    }
    
    .m-d li[data-md-content="300"] input[class^="tab"]:checked ~ .content{
        max-height: 300px;
        transition: all 250ms ease-in-out 0ms;
    }
    
    .m-d li[data-md-content="400"] input[class^="tab"]:checked ~ .content{
        max-height: 400px;
        transition: all 250ms ease-in-out 0ms;
    }
    .m-d li[data-md-content="500"] input[class^="tab"]:checked ~ .content{
        max-height: 500px;
        transition: all 250ms ease-in-out 0ms;
    }
    .m-d li[data-md-content="600"] input[class^="tab"]:checked ~ .content{
        max-height: 600px;
        transition: all 250ms ease-in-out 0ms;
    }
    .m-d li[data-md-content="700"] input[class^="tab"]:checked ~ .content{
        max-height: 700px;
        transition: all 300ms ease-in-out 0ms;
    }
    .m-d li[data-md-content="800"] input[class^="tab"]:checked ~ .content{
        max-height: 800px;
        transition: all 300ms ease-in-out 0ms;
    }
    .m-d li[data-md-content="900"] input[class^="tab"]:checked ~ .content{
        max-height: 900px;
        transition: all 300ms ease-in-out 0ms;
    }
    .m-d li[data-md-content="1000"] input[class^="tab"]:checked ~ .content{
        max-height: 1000px;
        transition: all 350ms ease-in-out 0ms;
    }
		.m-d li[data-md-content=""] input[class^="tab"]:checked ~ .content{
        max-height: 1000px;
        transition: all 250ms ease-in-out 0ms;
    }
    .m-d input[class^="tab"]:checked ~ .content{
        margin-bottom: 20px;
    }
    
    .m-d .open-close-icon{
        display: inline-block;
        position: absolute;
        right: 20px;
        transform: translatey(2px);
    }
    .m-d .open-close-icon i{
        position: absolute;
        left: 0;
    }
    .m-d .open-close-icon .fa-minus{
        transform:rotate(-90deg);
        transition: transform 150ms ease-in-out 0ms;
    }
    .m-d input[class^="tab"]:checked ~ .open-close-icon .fa-minus{
        transform: rotate(0deg);
        transition: transform 150ms ease-in-out 0ms;
    }
    .m-d .open-close-icon .fa-plus{
        opacity: 1;
        transform:rotate(-90deg);
        transition: opacity 50ms linear 0ms, transform 150ms ease-in-out 0ms;
    }
    .m-d input[class^="tab"]:checked ~ .open-close-icon .fa-plus{
        opacity: 0;
        transform: rotate(0deg);
        transition: opacity 50ms linear 0ms, transform 150ms ease-in-out 0ms; 
    }
    
	.fa-plus::before
	{
		font-family: roboto, arial;
		content: "+";
	}

	.fa-minus::before
	{	
		font-family: roboto, arial;
		content: "-";
	}


	li:has(input[class^="tab"]:checked)
	{
		background-color: #ffb512;
	}

	label{
	font-size: .8rem;
	}
	label strong{
	font-size: 1.2rem;
	padding-right: .2rem;
	}

h4 {
    margin: 0 auto;
    text-align: center;
    padding: 2rem 0 2rem 0;
}

</style>



<div class="container-full homepage_top subpage_top"
    style="background-image: url('<?php echo $banner['background_image']['url']?>');">
    <div class="container">
        <div class="row row-50-50">
            <div>
                <?php echo $banner['content']; ?>
            </div>
            <div></div>
        </div>
    </div>
</div>
<div class="container-full homepage_content">
    <div class="container">
        <div class="row">
            <div>
                <h2><?php echo get_field('grid_content_title'); ?></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row team-grid">
        
        
        <ul class="m-d expand-list">

        
            <?php
            if( have_rows('grid_content') ):
                while( have_rows('grid_content') ) : the_row(); ?>

            
		   
				<li data-md-content="600">
                    <?php // CUSTOM EMAIL LOGIC ?>
                    <?php $isEmailAvailble = get_sub_field('email') != ''; ?>
					
                    <?php if($isEmailAvailble) { ?>
                        <label name="tab" for="tab1" tabindex="-1" class="tab_lab" role="tab"><a href="mailto:<?php echo get_sub_field('email'); ?>" target="_blank"><strong><?php echo get_sub_field('title'); ?></strong></a> <?php echo get_sub_field('position'); ?></label>
                    <?php } else { ?>
                        <label name="tab" for="tab1" tabindex="-1" class="tab_lab" role="tab"><strong><?php echo get_sub_field('title'); ?></strong> <?php echo get_sub_field('position'); ?></label>
                    <?php } ?>
					<input type="checkbox"  class="tab" id="tab1" tabindex="0" />
					<span class="open-close-icon">
						<i class="fas fa-plus"></i>
						<i class="fas fa-minus"></i>
					</span>
					<div class="content">
						<?php echo get_sub_field('rollover_content'); ?>
					</div>
				</li>
				 
           

            <?php endwhile;
            endif;
            ?>
            </ul>
        </div>
    </div>
    
     <div class="container">
        <div class="row">
            <div>
                <h2><?php echo get_field('grid_content_title_region'); ?></h2>
            </div>
        </div>
    </div>
    
    
    

       <div class="container">
        <div class="row">
            <div>
                <h4>Northern Region <small>YoungStar Office – Rhinelander</small></h4>
            </div>
        </div>
    </div>  
    <div class="container">
        <div class="row team-grid">
        <ul class="m-d expand-list">
            <?php
            if( have_rows('grid_content_region') ):
                while( have_rows('grid_content_region') ) : the_row(); ?>

 				<li data-md-content="600">
                    <?php // CUSTOM EMAIL LOGIC ?>
                    <?php $isEmailAvailble = get_sub_field('email') != ''; ?>
					
                    <?php if($isEmailAvailble) { ?>
                        <label name="tab" for="tab1" tabindex="-1" class="tab_lab" role="tab"><a href="mailto:<?php echo get_sub_field('email'); ?>" target="_blank"><strong><?php echo get_sub_field('title'); ?></strong></a> <?php echo get_sub_field('position'); ?></label>
                    <?php } else { ?>
                        <label name="tab" for="tab1" tabindex="-1" class="tab_lab" role="tab"><strong><?php echo get_sub_field('title'); ?></strong> <?php echo get_sub_field('position'); ?></label>
                    <?php } ?>

					<input type="checkbox"  class="tab" id="tab1" tabindex="0" />
					<span class="open-close-icon">
						<i class="fas fa-plus"></i>
						<i class="fas fa-minus"></i>
					</span>
					<div class="content">
						<?php echo get_sub_field('rollover_content'); ?>
					</div>
				</li>

            <?php endwhile;
            endif;
            ?>
             </ul>
        </div>
    </div>
       
       
       
         <div class="container">
        <div class="row">
            <div>
                <h4>Northeastern Region <small>YoungStar Office – Appleton</small></h4>
            </div>
        </div>
    </div>  
    <div class="container">
        <div class="row team-grid">
        <ul class="m-d expand-list">
            <?php
            if( have_rows('grid_content_ne_region') ):
                while( have_rows('grid_content_ne_region') ) : the_row(); ?>

 				<li data-md-content="600">
                    <?php // CUSTOM EMAIL LOGIC ?>
                    <?php $isEmailAvailble = get_sub_field('email') != ''; ?>
					
                    <?php if($isEmailAvailble) { ?>
                        <label name="tab" for="tab1" tabindex="-1" class="tab_lab" role="tab"><a href="mailto:<?php echo get_sub_field('email'); ?>" target="_blank"><strong><?php echo get_sub_field('title'); ?></strong></a> <?php echo get_sub_field('position'); ?></label>
                    <?php } else { ?>
                        <label name="tab" for="tab1" tabindex="-1" class="tab_lab" role="tab"><strong><?php echo get_sub_field('title'); ?></strong> <?php echo get_sub_field('position'); ?></label>
                    <?php } ?>

					<input type="checkbox"  class="tab" id="tab1" tabindex="0" />
					<span class="open-close-icon">
						<i class="fas fa-plus"></i>
						<i class="fas fa-minus"></i>
					</span>
					<div class="content">
						<?php echo get_sub_field('rollover_content'); ?>
					</div>
				</li>

            <?php endwhile;
            endif;
            ?>
             </ul>
        </div>
    </div>
            
   


    
    <div class="container">
        <div class="row">
            <div>
                <h4>Southeastern Region <small>YoungStar Office – Milwaukee</small></h4>
            </div>
        </div>
    </div>  
    <div class="container">
        <div class="row team-grid">
        <ul class="m-d expand-list">
            <?php
            if( have_rows('grid_content_se_region') ):
                while( have_rows('grid_content_se_region') ) : the_row(); ?>

 				<li data-md-content="600">
                    <?php // CUSTOM EMAIL LOGIC ?>
                    <?php $isEmailAvailble = get_sub_field('email') != ''; ?>
					
                    <?php if($isEmailAvailble) { ?>
                        <label name="tab" for="tab1" tabindex="-1" class="tab_lab" role="tab"><a href="mailto:<?php echo get_sub_field('email'); ?>" target="_blank"><strong><?php echo get_sub_field('title'); ?></strong></a> <?php echo get_sub_field('position'); ?></label>
                    <?php } else { ?>
                        <label name="tab" for="tab1" tabindex="-1" class="tab_lab" role="tab"><strong><?php echo get_sub_field('title'); ?></strong> <?php echo get_sub_field('position'); ?></label>
                    <?php } ?>

					<input type="checkbox"  class="tab" id="tab1" tabindex="0" />
					<span class="open-close-icon">
						<i class="fas fa-plus"></i>
						<i class="fas fa-minus"></i>
					</span>
					<div class="content">
						<?php echo get_sub_field('rollover_content'); ?>
					</div>
				</li>

            <?php endwhile;
            endif;
            ?>
             </ul>
        </div>
    </div>
            
         
    <div class="container">
        <div class="row">
            <div>
                <h4>Southern Region <small>YoungStar Office – Fitchburg</small></h4>
            </div>
        </div>
    </div>  
    <div class="container">
        <div class="row team-grid">
        <ul class="m-d expand-list">
            <?php
            if( have_rows('grid_content_s_region') ):
                while( have_rows('grid_content_s_region') ) : the_row(); ?>

 				<li data-md-content="600">
                    <?php // CUSTOM EMAIL LOGIC ?>
                    <?php $isEmailAvailble = get_sub_field('email') != ''; ?>
					
                    <?php if($isEmailAvailble) { ?>
                        <label name="tab" for="tab1" tabindex="-1" class="tab_lab" role="tab"><a href="mailto:<?php echo get_sub_field('email'); ?>" target="_blank"><strong><?php echo get_sub_field('title'); ?></strong></a> <?php echo get_sub_field('position'); ?></label>
                    <?php } else { ?>
                        <label name="tab" for="tab1" tabindex="-1" class="tab_lab" role="tab"><strong><?php echo get_sub_field('title'); ?></strong> <?php echo get_sub_field('position'); ?></label>
                    <?php } ?>

					<input type="checkbox"  class="tab" id="tab1" tabindex="0" />
					<span class="open-close-icon">
						<i class="fas fa-plus"></i>
						<i class="fas fa-minus"></i>
					</span>
					<div class="content">
						<?php echo get_sub_field('rollover_content'); ?>
					</div>
				</li>

            <?php endwhile;
            endif;
            ?>
             </ul>
        </div>
    </div>  
       
     <div class="container">
        <div class="row">
            <div>
                <h4>Western Region <small>YoungStar Office – Eau Claire</small></h4>
            </div>
        </div>
    </div>  
    <div class="container">
        <div class="row team-grid">
        <ul class="m-d expand-list">
            <?php
            if( have_rows('grid_content_w_region') ):
                while( have_rows('grid_content_w_region') ) : the_row(); ?>

 				<li data-md-content="600">
                    <?php // CUSTOM EMAIL LOGIC ?>
                    <?php $isEmailAvailble = get_sub_field('email') != ''; ?>
					
                    <?php if($isEmailAvailble) { ?>
                        <label name="tab" for="tab1" tabindex="-1" class="tab_lab" role="tab"><a href="mailto:<?php echo get_sub_field('email'); ?>" target="_blank"><strong><?php echo get_sub_field('title'); ?></strong></a> <?php echo get_sub_field('position'); ?></label>
                    <?php } else { ?>
                        <label name="tab" for="tab1" tabindex="-1" class="tab_lab" role="tab"><strong><?php echo get_sub_field('title'); ?></strong> <?php echo get_sub_field('position'); ?></label>
                    <?php } ?>

					<input type="checkbox"  class="tab" id="tab1" tabindex="0" />
					<span class="open-close-icon">
						<i class="fas fa-plus"></i>
						<i class="fas fa-minus"></i>
					</span>
					<div class="content">
						<?php echo get_sub_field('rollover_content'); ?>
					</div>
				</li>

            <?php endwhile;
            endif;
            ?>
             </ul>
        </div>
    </div>     
    
         <div class="container">
        <div class="row">
            <div>
               &nbsp;
            </div>
        </div>
    </div>  
    <div class="container">
        <div class="row">
            <div>
                <h2><?php echo get_field('grid_content_title_2'); ?></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row team-grid">
        <ul class="m-d expand-list">
            <?php
            if( have_rows('grid_content_2') ):
                while( have_rows('grid_content_2') ) : the_row(); ?>

 				<li data-md-content="600">
                    <?php // CUSTOM EMAIL LOGIC ?>
                    <?php $isEmailAvailble = get_sub_field('email') != ''; ?>
					
                    <?php if($isEmailAvailble) { ?>
                        <label name="tab" for="tab1" tabindex="-1" class="tab_lab" role="tab"><a href="mailto:<?php echo get_sub_field('email'); ?>" target="_blank"><strong><?php echo get_sub_field('title'); ?></strong></a> <?php echo get_sub_field('position'); ?></label>
                    <?php } else { ?>
                        <label name="tab" for="tab1" tabindex="-1" class="tab_lab" role="tab"><strong><?php echo get_sub_field('title'); ?></strong> <?php echo get_sub_field('position'); ?></label>
                    <?php } ?>

					<input type="checkbox"  class="tab" id="tab1" tabindex="0" />
					<span class="open-close-icon">
						<i class="fas fa-plus"></i>
						<i class="fas fa-minus"></i>
					</span>
					<div class="content">
						<?php echo get_sub_field('rollover_content'); ?>
					</div>
				</li>

            <?php endwhile;
            endif;
            ?>
             </ul>
        </div>
    </div>
    
    
    <div class="container">
        <div class="row">
            <div>
                <h2><?php echo get_field('grid_content_title_3'); ?></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row team-grid">
         <ul class="m-d expand-list">
            <?php
            if( have_rows('grid_content_3') ):
                while( have_rows('grid_content_3') ) : the_row(); ?>

				<li data-md-content="600">
                    <?php // CUSTOM EMAIL LOGIC ?>
                    <?php $isEmailAvailble = get_sub_field('email') != ''; ?>
					
                    <?php if($isEmailAvailble) { ?>
                        <label name="tab" for="tab1" tabindex="-1" class="tab_lab" role="tab"><a href="mailto:<?php echo get_sub_field('email'); ?>" target="_blank"><strong><?php echo get_sub_field('title'); ?></strong></a> <?php echo get_sub_field('position'); ?></label>
                    <?php } else { ?>
                        <label name="tab" for="tab1" tabindex="-1" class="tab_lab" role="tab"><strong><?php echo get_sub_field('title'); ?></strong> <?php echo get_sub_field('position'); ?></label>
                    <?php } ?>
                

					<input type="checkbox"  class="tab" id="tab1" tabindex="0" />
					<span class="open-close-icon">
						<i class="fas fa-plus"></i>
						<i class="fas fa-minus"></i>
					</span>
					<div class="content">
						<?php echo get_sub_field('rollover_content'); ?>
					</div>
				</li>
				 
            <?php endwhile;
            endif;
            ?>
              </ul>
        </div>
    </div>    
     
    <div class="container">
        <div class="row">
            <div>
                <h2><?php echo get_field('grid_content_title_4'); ?></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row team-grid">
         <ul class="m-d expand-list">
            <?php
            if( have_rows('grid_content_4') ):
                while( have_rows('grid_content_4') ) : the_row(); ?>

				<li data-md-content="600">
					<label name="tab" for="tab1" tabindex="-1" class="tab_lab" role="tab"><strong><?php echo get_sub_field('title'); ?></strong> <?php echo get_sub_field('position'); ?></label>
					<input type="checkbox"  class="tab" id="tab1" tabindex="0" />
					<span class="open-close-icon">
						<i class="fas fa-plus"></i>
						<i class="fas fa-minus"></i>
					</span>
					<div class="content">
						<?php echo get_sub_field('rollover_content'); ?>
					</div>
				</li>
				 
            <?php endwhile;
            endif;
            ?>
              </ul>
        </div>
    </div>       
</div>
<?php
$bottom = get_field('bottom_section');
if( $bottom ): ?>
<div class="container-full homepage_bottom">
    <div class="container">
        <div class="row row-45-55">
            <div class="p-0-10">
                <?php echo $bottom['left_side_content']; ?>
            </div>
            <div>
                <div class="homepage_bottom_grid p-0-10">
                    <div class="row">

                        <?php
                            $rows = $bottom['grid_content'];
                            if( $rows ) {
                                foreach( $rows as $row ) {
                                    $title = $row['title']; $image = $row['background_image']; ?>
                        <div class="grid-item">
                            <div style="background-image:url('<?php echo $image['url']; ?>');">
                                <div>
                                    <h4><?php echo $title; ?></h4>
                                    <img src="/wp-content/uploads/2023/02/black-arrow.png" alt="right facing arrow">
                                </div>
                            </div>
                        </div>
                        <?php 
                                }
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>
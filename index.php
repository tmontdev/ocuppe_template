<?php get_header();?>
<section class="whole-block home" id="home">
<div class="home-slider whole-block">
	<?php
	$posts = array();
	$args = array(
	    	'post_type' => 'home'
	);
	$query = new WP_Query( $args );
	while($query->have_posts()) {
		$query->the_post();
	    	$posts[] = array(
	    		'title' => get_the_title(),
	    		'description' => get_the_excerpt(),
	      		'link' => get_field('redirect_to'),
	      		'button' => get_field('redirect_name'),
	        	'thumb' => get_the_post_thumbnail_url(),
	        	'color' => get_field('color'),
	        	'position' => get_field('image_align'),
	        	'icon' => get_field('icon')
	    	);
	}
	?>
		<?php foreach ($posts as $post): ?>
		<div class=" slide" style="background-image: url('<?php echo $post['thumb']; ?>'); background-position: <?php echo $post['position']; ?>;">
			<div class="overlay">
				<div class="container">
					<h3 class="text-title text-center"><?php echo $post['title']; ?></h3>
					<h4 class="text-subtitle text-center"><?php echo $post['description']; ?></h4>
					<a href="<?php echo $post['link']; ?>" class="slide-link text-center"  style="background-color: <?php echo $post['color']; ?>">
						<?php echo $post['icon']; ?> <span class="link-text"> <?php echo $post['button'] ?></span>
					</a>

				</div>
			</div>
		</div>
	<?php endforeach;  wp_reset_query();?>
	</div>
</section>
<section class="company whole-block" id="company">
    
    <?php
	$posts = array();
	$args = array(
	    	'post_type' => 'company'
	);
	$query = new WP_Query( $args );
	while($query->have_posts()) {
		$query->the_post();
	    	$posts[] = array(
	    		'title' => get_the_title(),
	    		'description' => get_the_content(),
	        	'thumb' => get_the_post_thumbnail_url(),
	        	'icon' => get_field('icon')
	    	);
	}
    ?>
    <div class="whole-block company-presentation">
		<div class="company-img" style="background-image: url('<?php echo get_template_directory_uri()."/assets/img/company.jpg'"; ?>">

		</div>
		<div class="company-content-area">
			<div class="company-title"><h3>Esta é a Ocuppe</h3></div>
			<div class="company-content">
				<div class="content-text">
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores, quidem. Consequatur, obcaecati. Eveniet dicta nihil veritatis accusamus atque, asperiores sapiente perferendis aliquam nulla quaerat assumenda odio, vel, soluta animi deleniti.
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod at quo vero deserunt iusto cumque velit numquam, nemo corporis animi rem iste, ipsa assumenda nulla sit ipsam impedit, quidem blanditiis?
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro consequuntur laudantium, quibusdam deserunt assumenda autem doloribus, iure excepturi recusandae illo sed neque voluptatum sit perferendis eaque. Autem nisi ullam ut.
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sint commodi quos voluptates. Reiciendis rerum nesciunt sequi fuga mollitia aliquid dolorem libero quas vero placeat, excepturi nisi dolores expedita voluptatibus.
				</div>
				<div class="company-content-itens">
					<?php foreach ($posts as $key=>$post): ?>
					<div class="company-content-item <?php echo str_replace(" ", "-", $post['title']); ?>">
						<div class="company-icon-field">
							<?php echo $post['icon']; ?>
						</div>
						<div class="company-content-field">
							<h4>
								<?php echo $post['title']; ?>
							</h4>
						</div>
					</div>
					<div id="<?php echo str_replace(" ", "-", $post['title']); ?>" class="modal">
						<!-- Modal content -->
						<div class="modal-content">
							<span class="close">x</span>							
							<h1><?php echo $post['icon']." ".$post['title'];?></h1>
							<div class="content-square">
								<span>
								<?php echo $post['description']; ?>
								</span>	
							</div>
							
						</div>
					</div>
					<?php endforeach;  wp_reset_query();?>
				</div>
			</div>
		</div>
    </div>
</section>
<section id="services" class="services whole-block">
<?php
	$posts = array();
	$args = array(
	    	'post_type' => 'services'
	);
	$query = new WP_Query( $args );
	while($query->have_posts()) {
		$query->the_post();
	    	$posts[] = array(
	    		'title' => get_the_title(),
	    		'description' => get_the_content(),
	        	'thumb' => get_the_post_thumbnail_url(),
	        	'icon' => get_field('icon')
	    	);
	}
?>
	<div class="services-presentation whole-block">
		<div class="container">
			<div class="row">
				<div class="services-presentation-title">
					<h3 class="services-title">
						<i class="fa fa-cog service-title-cog"></i> Serviços
					</h3>
					<span class="services-subtitle">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed officiis iure qui accusantium debitis nobis mollitia quia officia voluptatibus inventore magnam praesentium, atque ipsum reiciendis eius et in cumque nisi.
					</span>
				</div>
				<div class="service-itens">
				<?php foreach ($posts as $post): ?>
					<div class="service-item">
						<div class="service-item-title">
							<h5 class="service-item-title-text"><i class="fa fa-cog service-item-icon"></i> <?php echo $post['title']; ?></h5> 
						</div>
					</div>
				<?php endforeach;  wp_reset_query();?>	
				</div>
			</div>
		</div>
	</div>
</section>
<section id="depositions" class="depositions whole-block" style="background-image: url('<?php echo str_replace("<!-- End shortcoder v4.1.7-->", "", str_replace("<!-- Start shortcoder -->","", do_shortcode('[sc name="depoimentos background"]')))  ?>');">
<?php
	$posts = array();
	$args = array(
	    	'post_type' => 'depositions'
	);
	$query = new WP_Query( $args );
	while($query->have_posts()) {
		$query->the_post();
	    	$posts[] = array(
	    		'title' => get_the_title(),
	    		'description' => get_the_content(),
				'thumb' => get_the_post_thumbnail_url(),
				'who' => get_field('quem'),
				'cargo' => get_field('cargo')
	    	);
	}
?>
<div class="depositions-presentation whole-block">
		<div class="container">
			<div class="row">
				<div class="depositions-presentation-title">
					<h2 class="depositions-title">
						<i class="fa fa-quote-left"></i> Depoimentos
					</h2>
					<span class="depositions-subtitle">
						Veja o que os nossos clientes tem a dizer:
					</span>
				</div>
				<div class="depositions-content whole-block">
				<?php foreach ($posts as $post): ?>
					<div class="deposition">
						<div class="deposition-img">
							<img class="deposition-img-content" src="<?php echo $post['thumb']; ?>" alt="">
						</div>
						<div class="deposition-title">
							<?php echo $post['title']; ?><br>
							<?php echo $post['who']; ?><br>
							<?php echo $post['cargo']; ?><br>
						</div>
						<div class="deposition-content">
						<i class="fa fa-quote-left"></i > <?php echo $post['description']; ?> <i class="fa fa-quote-right"></i>
						</div>
					</div>
				<?php endforeach;  wp_reset_query();?>	
				</div>
			</div>
		</div>
	</div>
</section>
<section id="clients" class="clients whole-block" style="background-image: url('<?php echo str_replace("<!-- End shortcoder v4.1.7-->", "", str_replace("<!-- Start shortcoder -->","", do_shortcode('[sc name="depoimentos background"]')))  ?>');">
<?php
	$posts = array();
	$args = array(
			'post_type' => 'clients',
			'posts_per_page' => 60 
	);
	$query = new WP_Query( $args );
	while($query->have_posts()) {
		$query->the_post();
	    	$posts[] = array(
				'thumb' => get_the_post_thumbnail_url()
	    	);
	}
?>
<div class="clients-presentation whole-block">
		<div class="container">
			<div class="row">
				<div class="clients-presentation-title">
					<h2 class="clients-title">
						<i class="fa fa-users"></i> Clientes
					</h2>
					<span class="clients-subtitle">
						Conheça nossos Clientes
					</span>
				</div>
				<div class="clients-content whole-block">
				<?php foreach ($posts as $post): ?>
					<div class="client">
						<div class="client-img">
							<img class="client-img-content" src="<?php echo $post['thumb']; ?>" alt="">
						</div>
					</div>
				<?php endforeach;  wp_reset_query();?>	
				</div>
			</div>
		</div>
	</div>
</section>
<section id="contact" class="contact whole-block">
<div class="services-presentation whole-block">
		<div class="container">
			<div class="row">
				<div class="contact-presentation-title">
					<h3 class="contact-title">
						<i class="fa fa-phone"></i> Contato
					</h3>
					<span class="contact-subtitle">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed officiis iure qui accusantium debitis nobis mollitia quia officia voluptatibus inventore magnam praesentium, atque ipsum reiciendis eius et in cumque nisi.
					</span>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>





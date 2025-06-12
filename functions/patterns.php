<?php

		// Hero Cover
		register_block_pattern(
			'Basetheme/basetheme-hero',
			array(
					'title'       => __( 'basetheme - Hero Cover', 'basetheme' ),
					'description' => _x( 'Hero section with button, title and description.', 'Block pattern description', 'basetheme' ),
					'categories'    => array( 'banners', 'headers' ),
					'keywords'      => array( 'cta', 'hero', 'cover' ),
					'content'     =>"<!-- wp:cover {\"url\":\"https://picsum.photos/seed/picsum/1400/1000\",\"id\":170,\"dimRatio\":50,\"overlayColor\":\"black\",\"isUserOverlayColor\":true,\"focalPoint\":{\"x\":0.5,\"y\":0.5},\"minHeight\":100,\"minHeightUnit\":\"vh\",\"metadata\":{\"name\":\"Hero\"},\"align\":\"full\",\"className\":\"hero\",\"fontSize\":\"medium\",\"layout\":{\"type\":\"constrained\"}} -->

					<div class=\"wp-block-cover alignfull hero has-medium-font-size\" style=\"min-height:100vh\">
					<span aria-hidden=\"true\" class=\"wp-block-cover__background has-black-background-color has-background-dim\"></span>
					<img class=\"wp-block-cover__image-background wp-image-170\" alt=\"\" src=\"https://picsum.photos/seed/picsum/1400/1000\" style=\"object-position:50% 50%\" data-object-fit=\"cover\" data-object-position=\"50% 50%\"/>
					<div class=\"wp-block-cover__inner-container\">

					<!-- wp:columns {\"align\":\"wide\"} -->
					<div class=\"wp-block-columns alignwide\">
					<!-- wp:column {\"width\":\"\"} -->
					<div class=\"wp-block-column\">

					<!-- wp:heading {\"textAlign\":\"left\",\"level\":1,\"className\":\"fade-in\",\"style\":{\"typography\":{\"fontSize\":\"60px\"}}} -->
					<h1 class=\"wp-block-heading has-text-align-left fade-in\" style=\"font-size:60px\">Maecenas tincidunt ex nec placerat vestibulum.</h1>
					<!-- /wp:heading -->
					
					<!-- wp:spacer {\"height\":\"30px\"} -->
					<div style=\"height:30px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
				
					<!-- wp:paragraph {\"align\":\"left\",\"className\":\"fade-in\"} -->
					<p class=\"has-text-align-left fade-in\">Vivamus accumsan fringilla facilisis. Fusce dapibus risus at eros posuere egestas. Maecenas fringilla quam turpis, id commodo felis feugiat non. Curabitur et neque varius, faucibus leo ut, gravida tortor. Integer id suscipit neque, sed dapibus risus.</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {\"height\":\"40px\"} -->
					<div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:buttons -->
					<div class=\"wp-block-buttons\">
					<!-- wp:button {\"className\":\"button fade-in scroll\",\"style\":{\"border\":{\"radius\":\"0px\"}},\"fontSize\":\"large\"} -->
					<div class=\"wp-block-button has-custom-font-size button fade-in scroll has-large-font-size\">
					<a class=\"wp-block-button__link wp-element-button\" href=\"#\" style=\"border-radius:0px\">Call to action</a>
					</div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class=\"wp-block-column\"></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div></div>
					<!-- /wp:cover -->",
			)
		);


		// last three Article 
		register_block_pattern(
			'Basetheme/basetheme-last-article',
			array(
					'title'       => __( 'basetheme - Last three article', 'basetheme' ),
					'description' => _x( 'Last three article blog', 'Block pattern description', 'basetheme' ),
					'categories'    => array( 'articles' ),
					'content'     => "<!-- wp:group {\"metadata\":{\"name\":\"Last News\"},\"className\":\"fade-in-scroll\",\"layout\":{\"type\":\"constrained\"}} -->
					<div class=\"wp-block-group fade-in-scroll\"><!-- wp:spacer {\"height\":\"200px\"} -->
					<div style=\"height:200px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					
					<!-- /wp:spacer -->
					<!-- wp:heading {\"textAlign\":\"center\",\"fontSize\":\"x-large\"} -->\n<h2 class=\"wp-block-heading has-text-align-center has-x-large-font-size\">Last News</h2>
					<!-- /wp:heading -->

					<!-- wp:spacer {\"height\":\"15px\"} -->
					<div style=\"height:15px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph {\"align\":\"center\",\"fontSize\":\"medium\"} -->
					<p class=\"has-text-align-center has-medium-font-size\">In varius faucibus quam vestibulum semper tristique libero nec finibus. <br>Proin sed varius metus.</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {\"height\":\"60px\"} -->
					<div style=\"height:60px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->

					<!-- wp:shortcode -->
						[latest_posts]
					<!-- /wp:shortcode -->

					<!-- wp:spacer {\"height\":\"15px\"} -->
					<div style=\"height:15px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->

					<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->
					<div class=\"wp-block-buttons\">

					<!-- wp:button {\"className\":\"button\",\"fontSize\":\"medium\"} -->
					<div class=\"wp-block-button has-custom-font-size button has-medium-font-size\"><a class=\"wp-block-button__link wp-element-button\" href=\"/blog\">Blog</a></div>
					<!-- /wp:button -->
					</div>

					<!-- /wp:buttons -->

					<!-- wp:spacer {\"height\":\"30px\"} -->
					<div style=\"height:30px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					</div>
					<!-- /wp:group -->
					",
			)
		);


		// Icon Box
		register_block_pattern(
			'Basetheme/basetheme-icon-box',
			array(
					'title'       => __( 'basetheme - Icon Box', 'basetheme' ),
					'description' => _x( 'Two-column icon block, on the left column there is the title, on the right column there are 4 blocks with icons and text', 'Block pattern description', 'basetheme' ),
					'categories'    => array( 'about', 'services' ),
					'content'     => "<!-- wp:columns --><div class=\"wp-block-columns\" id=\"contact\">
					<!-- wp:column {\"width\":\"35%\",\"className\":\"fade-in-scroll\"} -->
					<div class=\"wp-block-column fade-in-scroll\" style=\"flex-basis:35%\">

					<!-- wp:heading -->
					<h2 class=\"wp-block-heading\">Extreme skiing<br>and adrenaline<br>rush tour.</h2>
					<!-- /wp:heading --></div>
					
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class=\"wp-block-column\"><!-- wp:columns -->
					<div class=\"wp-block-columns\">
					<!-- wp:column {\"className\":\"fade-in-scroll\"} -->
					<div class=\"wp-block-column fade-in-scroll\">
					
					<!-- wp:image {\"id\":136,\"width\":\"50px\",\"height\":\"50px\",\"scale\":\"cover\",\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->
					<figure class=\"wp-block-image size-full is-resized\">
					<img src=\"http://localhost:10010/wp-content/uploads/2024/07/black-placeholder-variant.png\" alt=\"\" class=\"wp-image-136\" style=\"object-fit:cover;width:50px;height:50px\"/>
					</figure>					
					<!-- /wp:image -->

					<!-- wp:spacer {\"height\":\"15px\"} -->
					<div style=\"height:15px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->

					<!-- wp:heading {\"level\":3,\"fontSize\":\"medium\"} -->
					<h3 class=\"wp-block-heading has-medium-font-size\">Local</h3>
					<!-- /wp:heading -->

					<!-- wp:spacer {\"height\":\"10px\"} -->
					<div style=\"height:10px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:paragraph -->
					<p>Integer tempus blandit eros at posuere. Quisque commodo sit amet nibh vel vehicula.&nbsp;</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->
					
					
					<!-- wp:column {\"className\":\"fade-in-scroll\"} -->
					<div class=\"wp-block-column fade-in-scroll\">

					<!-- wp:image {\"id\":146,\"width\":\"50px\",\"height\":\"50px\",\"scale\":\"cover\",\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->
					<figure class=\"wp-block-image size-full is-resized\"><img src=\"http://localhost:10010/wp-content/uploads/2024/07/man-with-bag-and-walking-stick.png\" alt=\"\" class=\"wp-image-146\" style=\"object-fit:cover;width:50px;height:50px\"/></figure>
					<!-- /wp:image -->

					<!-- wp:spacer {\"height\":\"15px\"} -->
					<div style=\"height:15px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->

					<!-- wp:heading {\"level\":3,\"fontSize\":\"medium\"} -->
					<h3 class=\"wp-block-heading has-medium-font-size\">Adventures</h3>
					<!-- /wp:heading -->

					<!-- wp:spacer {\"height\":\"10px\"} -->
					<div style=\"height:10px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph -->
					<p>Integer tempus blandit eros at posuere. Quisque commodo sit amet nibh vel vehicula.&nbsp;</p>
					<!-- /wp:paragraph --></div>

					<!-- /wp:column --></div>

					<!-- /wp:columns -->

					<!-- wp:spacer -->
					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->

					<!-- wp:columns -->
					<div class=\"wp-block-columns\">
					
					<!-- wp:column {\"className\":\"fade-in-scroll\"} -->
					<div class=\"wp-block-column fade-in-scroll\">
					
					<!-- wp:image {\"id\":147,\"width\":\"50px\",\"height\":\"50px\",\"scale\":\"cover\",\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->
					<figure class=\"wp-block-image size-full is-resized\"><img src=\"http://localhost:10010/wp-content/uploads/2024/07/mountains.png\" alt=\"\" class=\"wp-image-147\" style=\"object-fit:cover;width:50px;height:50px\"/>
					</figure>
					<!-- /wp:image -->

					<!-- wp:spacer {\"height\":\"15px\"} -->
					<div style=\"height:15px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->

					<!-- wp:heading {\"level\":3,\"fontSize\":\"medium\"} -->
					<h3 class=\"wp-block-heading has-medium-font-size\">Mountains</h3>
					<!-- /wp:heading -->

					<!-- wp:spacer {\"height\":\"10px\"} -->
					<div style=\"height:10px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph -->
					<p>Integer tempus blandit eros at posuere. Quisque commodo sit amet nibh vel vehicula.&nbsp;</p>
					<!-- /wp:paragraph --></div>

					<!-- /wp:column -->

					<!-- wp:column {\"className\":\"fade-in-scroll\"} -->
					<div class=\"wp-block-column fade-in-scroll\">

					<!-- wp:image {\"id\":148,\"width\":\"50px\",\"height\":\"50px\",\"scale\":\"cover\",\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->
					<figure class=\"wp-block-image size-full is-resized\">
					<img src=\"http://localhost:10010/wp-content/uploads/2024/07/dslr-camera.png\" alt=\"\" class=\"wp-image-148\" style=\"object-fit:cover;width:50px;height:50px\"/></figure>
					<!-- /wp:image -->

					<!-- wp:spacer {\"height\":\"15px\"} -->
					<div style=\"height:15px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->

					<!-- wp:heading {\"level\":3,\"fontSize\":\"medium\"} -->
					<h3 class=\"wp-block-heading has-medium-font-size\">Photographer</h3>
					<!-- /wp:heading -->

					<!-- wp:spacer {\"height\":\"10px\"} -->
					<div style=\"height:10px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph -->					
					<p>Integer tempus blandit eros at posuere. Quisque commodo sit amet nibh vel vehicula.&nbsp;</p>
					<!-- /wp:paragraph --></div>

					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->
					",
			)
		);


		// Our Team box
		register_block_pattern(
			'Basetheme/basetheme-our-team-box',
			array(
					'title'       => __( 'basetheme - Our Team', 'basetheme' ),
					'description' => _x( 'Four-column box ideal for the "our team" section, each column includes the profile image, name, job title, short description, social link and detail button.', 'Block pattern description', 'basetheme' ),
					'categories'    => array( 'about', 'Team' ),
					'content'     => "<!-- wp:group {\"layout\":{\"type\":\"constrained\"}} --><div class=\"wp-block-group\">

					<!-- wp:columns -->
					<div class=\"wp-block-columns\">
					
					<!-- wp:column -->
					<div class=\"wp-block-column\"></div>
					<!-- /wp:column -->

					<!-- wp:column {\"width\":\"50%\"} -->
					<div class=\"wp-block-column\" style=\"flex-basis:50%\">
					
					<!-- wp:heading {\"textAlign\":\"center\"} -->
					<h2 class=\"wp-block-heading has-text-align-center\">Our Team</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {\"align\":\"center\",\"fontSize\":\"medium\"} -->
					<p class=\"has-text-align-center has-medium-font-size\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus rutrum tortor id dolor venenatis aliquet.</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {\"height\":\"60px\"} -->

					<div style=\"height:60px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->

					</div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class=\"wp-block-column\"></div>
					<!-- /wp:column --></div>
					
					<!-- /wp:columns -->

					<!-- wp:columns -->
					<div class=\"wp-block-columns\">


					
					<!-- wp:column {\"className\":\"p-30 mb-15  radius-10\",\"backgroundColor\":\"white\"} -->
					<div class=\"wp-block-column p-30 mb-15  radius-10 has-white-background-color has-background\">

					<!-- wp:image {\"id\":78,\"width\":\"169px\",\"height\":\"auto\",\"aspectRatio\":\"1\",\"scale\":\"cover\",\"sizeSlug\":\"large\",\"linkDestination\":\"none\",\"align\":\"center\",\"className\":\"is-style-rounded img-circle-border\"} -->
					<figure class=\"wp-block-image aligncenter size-large is-resized is-style-rounded img-circle-border\">
					<img src=\"https://picsum.photos/id/319/200/200\" alt=\"\" class=\"wp-image-78\" style=\"aspect-ratio:1;object-fit:cover;width:169px;height:auto\"/>
					</figure>
					<!-- /wp:image -->

					<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"className\":\"pb-5 pt-10\",\"style\":{\"typography\":{\"fontSize\":\"26px\"}}} -->
					<h3 class=\"wp-block-heading has-text-align-center pb-5 pt-10\" style=\"font-size:26px\">John Born</h3>
					<!-- /wp:heading -->

					<!-- wp:heading {\"textAlign\":\"center\",\"level\":4,\"className\":\"pb-20\",\"style\":{\"typography\":{\"fontSize\":\"16px\"}}} -->
					<h4 class=\"wp-block-heading has-text-align-center pb-20\" style=\"font-size:16px\">Graphic Designer</h4>
					<!-- /wp:heading -->

					<!-- wp:paragraph {\"align\":\"center\",\"className\":\"pb-20\"} -->
					<p class=\"has-text-align-center pb-20\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</p>
					<!-- /wp:paragraph -->

					<!-- wp:social-links {\"openInNewTab\":true,\"align\":\"center\",\"className\":\"is-style-logos-only\",\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->
					<ul class=\"wp-block-social-links aligncenter is-style-logos-only\"><!-- wp:social-link {\"url\":\"#\",\"service\":\"facebook\"} /-->
					<!-- wp:social-link {\"url\":\"#\",\"service\":\"instagram\"} /-->
					<!-- wp:social-link {\"url\":\"#\",\"service\":\"linkedin\"} /-->
					<!-- wp:social-link {\"url\":\"#\",\"service\":\"fivehundredpx\"} /--></ul>
					<!-- /wp:social-links -->
					
					<!-- wp:spacer {\"height\":\"30px\"} -->
					<div style=\"height:30px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->

					<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->
					<div class=\"wp-block-buttons\">
					<!-- wp:button {\"className\":\"button\"} -->
					<div class=\"wp-block-button button\"><a class=\"wp-block-button__link wp-element-button\" href=\"#\">read more</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>

					<!-- /wp:column -->




					<!-- wp:column {\"className\":\"p-30 mb-15  radius-10\",\"backgroundColor\":\"white\"} -->
					<div class=\"wp-block-column p-30 mb-15  radius-10 has-white-background-color has-background\">
					
					<!-- wp:image {\"id\":78,\"width\":\"169px\",\"height\":\"auto\",\"aspectRatio\":\"1\",\"scale\":\"cover\",\"sizeSlug\":\"large\",\"linkDestination\":\"none\",\"align\":\"center\",\"className\":\"is-style-rounded img-circle-border\"} -->
					<figure class=\"wp-block-image aligncenter size-large is-resized is-style-rounded img-circle-border\">
					<img src=\"https://picsum.photos/id/319/200/200\" alt=\"\" class=\"wp-image-78\" style=\"aspect-ratio:1;object-fit:cover;width:169px;height:auto\"/></figure>
					<!-- /wp:image -->

					<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"className\":\"pb-5 pt-10\",\"style\":{\"typography\":{\"fontSize\":\"26px\"}}} -->
					<h3 class=\"wp-block-heading has-text-align-center pb-5 pt-10\" style=\"font-size:26px\">John Born</h3>
					<!-- /wp:heading -->

					<!-- wp:heading {\"textAlign\":\"center\",\"level\":4,\"className\":\"pb-20\",\"style\":{\"typography\":{\"fontSize\":\"16px\"}}} -->
					<h4 class=\"wp-block-heading has-text-align-center pb-20\" style=\"font-size:16px\">Graphic Designer</h4>
					<!-- /wp:heading -->

					<!-- wp:paragraph {\"align\":\"center\",\"className\":\"pb-20\"} -->
					<p class=\"has-text-align-center pb-20\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:social-links {\"openInNewTab\":true,\"align\":\"center\",\"className\":\"is-style-logos-only\",\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->
					<ul class=\"wp-block-social-links aligncenter is-style-logos-only\"><!-- wp:social-link {\"url\":\"#\",\"service\":\"facebook\"} /-->
					<!-- wp:social-link {\"url\":\"#\",\"service\":\"instagram\"} /-->
					<!-- wp:social-link {\"url\":\"#\",\"service\":\"linkedin\"} /-->
					<!-- wp:social-link {\"url\":\"#\",\"service\":\"fivehundredpx\"} /--></ul>
					<!-- /wp:social-links -->
					
					<!-- wp:spacer {\"height\":\"30px\"} -->
					<div style=\"height:30px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->

					<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->
					<div class=\"wp-block-buttons\"><!-- wp:button {\"className\":\"button\"} -->
					<div class=\"wp-block-button button\"><a class=\"wp-block-button__link wp-element-button\" href=\"#\">read more</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>

					<!-- /wp:column -->

					<!-- wp:column {\"className\":\"p-30 mb-15  radius-10\",\"backgroundColor\":\"white\"} -->
					<div class=\"wp-block-column p-30 mb-15  radius-10 has-white-background-color has-background\">

					<!-- wp:image {\"id\":78,\"width\":\"169px\",\"height\":\"auto\",\"aspectRatio\":\"1\",\"scale\":\"cover\",\"sizeSlug\":\"large\",\"linkDestination\":\"none\",\"align\":\"center\",\"className\":\"is-style-rounded img-circle-border\"} -->
					<figure class=\"wp-block-image aligncenter size-large is-resized is-style-rounded img-circle-border\">
					<img src=\"https://picsum.photos/id/319/200/200\" alt=\"\" class=\"wp-image-78\" style=\"aspect-ratio:1;object-fit:cover;width:169px;height:auto\"/>
					</figure>
					<!-- /wp:image -->

					<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"className\":\"pb-5 pt-10\",\"style\":{\"typography\":{\"fontSize\":\"26px\"}}} -->
					<h3 class=\"wp-block-heading has-text-align-center pb-5 pt-10\" style=\"font-size:26px\">John Born</h3>
					<!-- /wp:heading -->
					
					<!-- wp:heading {\"textAlign\":\"center\",\"level\":4,\"className\":\"pb-20\",\"style\":{\"typography\":{\"fontSize\":\"16px\"}}} -->
					<h4 class=\"wp-block-heading has-text-align-center pb-20\" style=\"font-size:16px\">Graphic Designer</h4>
					<!-- /wp:heading -->
					
					<!-- wp:paragraph {\"align\":\"center\",\"className\":\"pb-20\"} -->
					<p class=\"has-text-align-center pb-20\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</p>
					<!-- /wp:paragraph -->

					<!-- wp:social-links {\"openInNewTab\":true,\"align\":\"center\",\"className\":\"is-style-logos-only\",\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->
					<ul class=\"wp-block-social-links aligncenter is-style-logos-only\"><!-- wp:social-link {\"url\":\"#\",\"service\":\"facebook\"} /-->
					<!-- wp:social-link {\"url\":\"#\",\"service\":\"instagram\"} /-->
					<!-- wp:social-link {\"url\":\"#\",\"service\":\"linkedin\"} /-->
					<!-- wp:social-link {\"url\":\"#\",\"service\":\"fivehundredpx\"} /--></ul>
					<!-- /wp:social-links -->
					
					<!-- wp:spacer {\"height\":\"30px\"} -->
					<div style=\"height:30px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->

					<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->
					<div class=\"wp-block-buttons\"><!-- wp:button {\"className\":\"button\"} -->
					<div class=\"wp-block-button button\"><a class=\"wp-block-button__link wp-element-button\" href=\"#\">read more</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>

					<!-- /wp:column -->


					
					<!-- wp:column {\"className\":\"p-30 mb-15  radius-10\",\"backgroundColor\":\"white\"} -->
					<div class=\"wp-block-column p-30 mb-15  radius-10 has-white-background-color has-background\">

					<!-- wp:image {\"id\":78,\"width\":\"169px\",\"height\":\"auto\",\"aspectRatio\":\"1\",\"scale\":\"cover\",\"sizeSlug\":\"large\",\"linkDestination\":\"none\",\"align\":\"center\",\"className\":\"is-style-rounded img-circle-border\"} -->
					<figure class=\"wp-block-image aligncenter size-large is-resized is-style-rounded img-circle-border\">
					<img src=\"https://picsum.photos/id/319/200/200\" alt=\"\" class=\"wp-image-78\" style=\"aspect-ratio:1;object-fit:cover;width:169px;height:auto\"/>
					</figure>
					<!-- /wp:image -->

					<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"className\":\"pb-5 pt-10\",\"style\":{\"typography\":{\"fontSize\":\"26px\"}}} -->
					<h3 class=\"wp-block-heading has-text-align-center pb-5 pt-10\" style=\"font-size:26px\">John Born</h3>
					<!-- /wp:heading -->

					<!-- wp:heading {\"textAlign\":\"center\",\"level\":4,\"className\":\"pb-20\",\"style\":{\"typography\":{\"fontSize\":\"16px\"}}} -->
					<h4 class=\"wp-block-heading has-text-align-center pb-20\" style=\"font-size:16px\">Graphic Designer</h4>
					<!-- /wp:heading -->

					<!-- wp:paragraph {\"align\":\"center\",\"className\":\"pb-20\"} -->
					<p class=\"has-text-align-center pb-20\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</p>
					<!-- /wp:paragraph -->

					<!-- wp:social-links {\"openInNewTab\":true,\"align\":\"center\",\"className\":\"is-style-logos-only\",\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->
					<ul class=\"wp-block-social-links aligncenter is-style-logos-only\">
					<!-- wp:social-link {\"url\":\"#\",\"service\":\"facebook\"} /-->
					<!-- wp:social-link {\"url\":\"#\",\"service\":\"instagram\"} /-->
					<!-- wp:social-link {\"url\":\"#\",\"service\":\"linkedin\"} /-->
					<!-- wp:social-link {\"url\":\"#\",\"service\":\"fivehundredpx\"} /--></ul>
					<!-- /wp:social-links -->

					<!-- wp:spacer {\"height\":\"30px\"} -->
					<div style=\"height:30px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->

					<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->
					<div class=\"wp-block-buttons\"><!-- wp:button {\"className\":\"button\"} -->
					<div class=\"wp-block-button button\">
					<a class=\"wp-block-button__link wp-element-button\" href=\"#\">read more</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>


					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:spacer -->
					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer --></div>

					<!-- /wp:group -->
					",
			)
		);
		
		
		// Media Text
		register_block_pattern(
			'Basetheme/basetheme-media-text',
			array(
					'title'       => __( 'basetheme - Media Text', 'basetheme' ),
					'description' => _x( 'Media text with 2 blocks with alternating image text positions.', 'Block pattern description', 'basetheme' ),
					'categories'  => array( 'banners', 'headers' ),
					'content'     =>"<!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->
					<div class=\"wp-block-group\">

					<!-- wp:media-text {\"align\":\"\",\"mediaId\":168,\"mediaLink\":\"https://picsum.photos/id/11/768/1024\",\"mediaType\":\"image\",\"className\":\"fade-in-scroll\"} -->
					<div class=\"wp-block-media-text is-stacked-on-mobile fade-in-scroll\">

					<figure class=\"wp-block-media-text__media\">
					<img src=\"https://picsum.photos/id/11/768/1024\" alt=\"\" class=\"wp-image-168 size-full\"/>
					</figure>

					<div class=\"wp-block-media-text__content\">
					<!-- wp:heading -->
					<h2 class=\"wp-block-heading\">Sed at sodales tellus. <br>Morbi iaculis, leo ac tempus pharetra, odio ipsum fringilla leo.</h2>
					<!-- /wp:heading -->

					<!-- wp:spacer {\"height\":\"40px\"} -->
					<div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph -->
					<p>Mauris et rutrum ipsum. <br>Sed non tempor magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>Morbi euismod, ex id volutpat pellentesque, orci dolor placerat justo, vel hendrerit felis orci nec nisl. Sed sit amet tincidunt velit. <br>Fusce sit amet purus vel nibh tristique faucibus vitae et eros. Aliquam semper sit amet augue vel feugiat.&nbsp;</p>
					<!-- /wp:paragraph -->
					</div></div>
					<!-- /wp:media-text -->

					<!-- wp:media-text {\"align\":\"\",\"mediaPosition\":\"right\",\"mediaId\":168,\"mediaLink\":\"https://picsum.photos/id/16/768/1024\",\"mediaType\":\"image\",\"className\":\"fade-in-scroll\"} -->
					<div class=\"wp-block-media-text has-media-on-the-right is-stacked-on-mobile fade-in-scroll\"><div class=\"wp-block-media-text__content\">
					<!-- wp:heading -->
					<h2 class=\"wp-block-heading\">Sed at sodales tellus. <br>Morbi iaculis, leo ac tempus pharetra, odio ipsum fringilla leo.</h2>
					<!-- /wp:heading -->

					<!-- wp:spacer {\"height\":\"40px\"} -->
					<div style=\"height:40px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph -->
					<p>Mauris et rutrum ipsum. <br>Sed non tempor magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>Morbi euismod, ex id volutpat pellentesque, orci dolor placerat justo, vel hendrerit felis orci nec nisl. Sed sit amet tincidunt velit. <br>Fusce sit amet purus vel nibh tristique faucibus vitae et eros. Aliquam semper sit amet augue vel feugiat.&nbsp;</p>
					<!-- /wp:paragraph --></div>
					
					<figure class=\"wp-block-media-text__media\">
					<img src=\"https://picsum.photos/id/16/768/1024\" alt=\"\" class=\"wp-image-168 size-full\"/>
					</figure>
					</div>
					<!-- /wp:media-text --></div>

					<!-- /wp:group -->	
					",
			)
		);
		

		// Logo Slider
		register_block_pattern(
			'Basetheme/basetheme-logo-slider',
			array(
					'title'       => __( 'basetheme - Logo Slider', 'basetheme' ),
					'description' => _x( 'Logo slider with destination url.', 'Block pattern description', 'basetheme' ),
					'categories'  => array( 'banners', 'headers' ),
					'content'     =>"<!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->
					<div class=\"wp-block-group\">
					<!-- wp:spacer -->
					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:heading {\"textAlign\":\"center\",\"level\":3} -->
					<h3 class=\"wp-block-heading has-text-align-center\">Logo slider</h3>
					<!-- /wp:heading -->
					<!-- wp:heading {\"textAlign\":\"center\",\"level\":4} -->
					<h4 class=\"wp-block-heading has-text-align-center\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</h4>
					<!-- /wp:heading -->
					
					<!-- wp:shortcode -->
					[logo_slider_splide]
					<!-- /wp:shortcode -->
					
					<!-- wp:spacer -->
					<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					</div>
					<!-- /wp:group -->
					",
			)
		);


		// Testimonials 
		register_block_pattern(
			'Basetheme/basetheme-testimonials',
			array(
					'title'       => __( 'basetheme - Testimonials', 'basetheme' ),
					'description' => _x( 'A testimonials section with, photo, name, text and valuation.', 'Block pattern description', 'basetheme' ),
					'categories'    => array( 'testimonials', 'text'),
					'keywords'      => array( 'cta', 'testimonials', 'content' ),
					'content'     => "<!-- wp:cover {\"dimRatio\":0,\"overlayColor\":\"nv-light-bg\",\"isUserOverlayColor\":true,\"minHeight\":420,\"isDark\":false,\"metadata\":{\"categories\":[\"testimonials\",\"text\"],\"patternName\":\"basetheme/basetheme-testimonials\",\"name\":\"basetheme - Testimonials\"}} -->
					
					<div class=\"wp-block-cover is-light\" style=\"min-height:420px\">
					<span aria-hidden=\"true\" class=\"wp-block-cover__background has-nv-light-bg-background-color has-background-dim-0 has-background-dim\"></span>
					<div class=\"wp-block-cover__inner-container\">
					
					<!-- wp:spacer {\"height\":\"80px\"} -->
					<div style=\"height:80px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:columns -->
					<div class=\"wp-block-columns\">
					
					<!-- wp:column {\"width\":\"25%\"} -->
					<div class=\"wp-block-column\" style=\"flex-basis:25%\"></div>
					<!-- /wp:column -->
					<!-- wp:column {\"width\":\"50%\"} -->
					<div class=\"wp-block-column\" style=\"flex-basis:50%\"><!-- wp:heading {\"textAlign\":\"center\",\"textColor\":\"neve-text-color\"} -->
					<h2 class=\"wp-block-heading has-text-align-center has-neve-text-color-color has-text-color\">Our testimonials</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"nv-dark-bg\",\"fontSize\":\"medium\"} -->
					<p class=\"has-text-align-center has-nv-dark-bg-color has-text-color has-medium-font-size\">Lorem ipsum dolor sit amet, consectetur vivamus rutrum tortor id dolor venenatis aliquet..</p>
					<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					
					<!-- wp:column {\"width\":\"25%\"} -->
					<div class=\"wp-block-column\" style=\"flex-basis:25%\"></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->
					
					<!-- wp:spacer {\"height\":\"60px\"} -->
					<div style=\"height:60px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->\n\n<!-- wp:columns -->
					
					<div class=\"wp-block-columns\">


					
					<!-- wp:column -->
					<div class=\"wp-block-column\"><!-- wp:image {\"id\":215,\"width\":\"100px\",\"height\":\"100px\",\"scale\":\"cover\",\"sizeSlug\":\"large\",\"align\":\"center\",\"className\":\"is-style-rounded\"} -->
					
					<figure class=\"wp-block-image aligncenter size-large is-resized is-style-rounded\">
					<img src=\"https://picsum.photos/id/338/400/400\" alt=\"\" class=\"wp-image-215\" style=\"object-fit:cover;width:100px;height:100px\"/>
					</figure>
					<!-- /wp:image -->
					
					<!-- wp:spacer {\"height\":\"30px\"} -->\n<div style=\"height:30px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"neve-text-color\"} -->
					<p class=\"has-text-align-center has-neve-text-color-color has-text-color\"><strong><em>Janet Morris</em></strong></p>
					<!-- /wp:paragraph -->
					
					<!-- wp:spacer {\"height\":\"15px\"} -->
					<div style=\"height:15px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:paragraph {\"align\":\"left\",\"textColor\":\"neve-text-color\"} -->
					
					<p class=\"has-text-align-left has-neve-text-color-color has-text-color\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					<!-- /wp:paragraph -->
					
					<!-- wp:spacer {\"height\":\"15px\"} -->
					<div style=\"height:15px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:paragraph {\"align\":\"center\"} -->
					<p class=\"has-text-align-center\">⭐⭐⭐⭐⭐</p>
					<!-- /wp:paragraph -->
					
					</div>
					
					
					
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class=\"wp-block-column\">
					
					<!-- wp:image {\"id\":215,\"width\":\"100px\",\"height\":\"100px\",\"scale\":\"cover\",\"sizeSlug\":\"large\",\"align\":\"center\",\"className\":\"is-style-rounded\"} -->
					<figure class=\"wp-block-image aligncenter size-large is-resized is-style-rounded\">
					<img src=\"https://picsum.photos/id/338/400/400\" alt=\"\" class=\"wp-image-215\" style=\"object-fit:cover;width:100px;height:100px\"/>
					</figure>
					<!-- /wp:image -->

					<!-- wp:spacer {\"height\":\"30px\"} -->
					<div style=\"height:30px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"neve-text-color\"} -->
					<p class=\"has-text-align-center has-neve-text-color-color has-text-color\"><strong><em>Jon Doe</em></strong></p>
					<!-- /wp:paragraph -->
					
					<!-- wp:spacer {\"height\":\"15px\"} -->
					<div style=\"height:15px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:paragraph {\"align\":\"left\",\"textColor\":\"neve-text-color\"} -->
					<p class=\"has-text-align-left has-neve-text-color-color has-text-color\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
					<!-- /wp:paragraph -->
					
					<!-- wp:spacer {\"height\":\"15px\"} -->
					<div style=\"height:15px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:paragraph {\"align\":\"center\"} -->
					<p class=\"has-text-align-center\">⭐⭐⭐</p>
					<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->



					<!-- wp:column -->
					<div class=\"wp-block-column\"><!-- wp:image {\"id\":215,\"width\":\"100px\",\"height\":\"100px\",\"scale\":\"cover\",\"sizeSlug\":\"large\",\"align\":\"center\",\"className\":\"is-style-rounded\"} -->
					
					<figure class=\"wp-block-image aligncenter size-large is-resized is-style-rounded\">
					<img src=\"https://picsum.photos/id/338/400/400\" alt=\"\" class=\"wp-image-215\" style=\"object-fit:cover;width:100px;height:100px\"/>
					</figure>
					<!-- /wp:image -->
					
					<!-- wp:spacer {\"height\":\"30px\"} -->
					<div style=\"height:30px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:paragraph {\"align\":\"center\",\"textColor\":\"neve-text-color\"} -->
					<p class=\"has-text-align-center has-neve-text-color-color has-text-color\"><strong><em>Vladimir Stamink</em></strong></p>
					<!-- /wp:paragraph -->
					
					<!-- wp:spacer {\"height\":\"15px\"} -->\n<div style=\"height:15px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:paragraph {\"align\":\"left\",\"textColor\":\"neve-text-color\"} -->
					<p class=\"has-text-align-left has-neve-text-color-color has-text-color\">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:spacer {\"height\":\"15px\"} -->
					<div style=\"height:15px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:paragraph {\"align\":\"center\"} -->
					<p class=\"has-text-align-center\">⭐⭐⭐⭐</p>
					<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->



					</div>					
					<!-- /wp:columns -->
					
					<!-- wp:spacer {\"height\":\"60px\"} -->
					<div style=\"height:60px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					</div>
					</div>
					<!-- /wp:cover -->					
					",
			)
		);


		// YouTube video block
		register_block_pattern(
			'Basetheme/basetheme-video-block',
			array(
					'title'       => __( 'basetheme - Video block', 'basetheme' ),
					'description' => _x( 'YouTube video block with title', 'Block pattern description', 'basetheme' ),
					'categories'  => array( 'Video', 'Audio' ),
					'content'     =>"<!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->
					<div class=\"wp-block-group\">
					
					<!-- wp:heading {\"textAlign\":\"center\"} -->
					<h2 class=\"wp-block-heading has-text-align-center\">Mountain climbing is a great way to rejuvenate your mind and body</h2>
					<!-- /wp:heading -->
					
					<!-- wp:spacer {\"height\":\"60px\"} -->
					<div style=\"height:60px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->

					<!-- wp:embed {\"url\":\"https://www.youtube.com/watch?v=mTvhFQ3aT2U\",\"type\":\"video\",\"providerNameSlug\":\"youtube\",\"responsive\":true,\"className\":\"wp-embed-aspect-16-9 wp-has-aspect-ratio\"} -->
					
					<figure class=\"wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio\">
					<div class=\"wp-block-embed__wrapper\">
					https://www.youtube.com/watch?v=mTvhFQ3aT2U
					</div>
					</figure>
					
					<!-- /wp:embed -->
					
					</div>
					<!-- /wp:group -->
					",
			)
		);


		// Accordion
		register_block_pattern(
			'Basetheme/basetheme-accordion',
			array(
					'title'       => __( 'basetheme - Accordion', 'basetheme' ),
					'description' => _x( 'Two column accordion block', 'Block pattern description', 'basetheme' ),
					'categories'  => array( 'banners', 'headers' ),
					'content'     =>"<!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->
					<div class=\"wp-block-group\">
					
					<!-- wp:spacer {\"height\":\"60px\"} -->
					<div style=\"height:60px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:columns {\"className\":\"fade-in-scroll\"} -->
					<div class=\"wp-block-columns fade-in-scroll\">
					
					<!-- wp:column -->
					<div class=\"wp-block-column\">
					<!-- wp:group {\"className\":\"accordion\",\"layout\":{\"type\":\"constrained\"}} -->
					<div class=\"wp-block-group accordion\">
					<!-- wp:group {\"className\":\"accordion-item\",\"layout\":{\"type\":\"constrained\"}} -->
					<div class=\"wp-block-group accordion-item\">
					
					<!-- wp:heading {\"level\":5,\"className\":\"accordion-header\"} -->
					<h5 class=\"wp-block-heading accordion-header\">What is Lorem Ipsum?</h5><!-- /wp:heading -->
					
					<!-- wp:group {\"className\":\"accordion-content\",\"layout\":{\"type\":\"constrained\"}} -->
					<div class=\"wp-block-group accordion-content\">
					
					<!-- wp:paragraph -->\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<!-- /wp:paragraph -->
					
					</div>					
					<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					
					
					<!-- wp:group {\"className\":\"accordion-item\",\"layout\":{\"type\":\"constrained\"}} -->
					<div class=\"wp-block-group accordion-item\">
					
					<!-- wp:heading {\"level\":5,\"className\":\"accordion-header\"} -->
					<h5 class=\"wp-block-heading accordion-header\">Why do we use it?</h5>
					<!-- /wp:heading -->
					
					<!-- wp:group {\"className\":\"accordion-content\",\"layout\":{\"type\":\"constrained\"}} -->
					<div class=\"wp-block-group accordion-content\">
					
					<!-- wp:paragraph -->
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
					<!-- /wp:paragraph -->
					
					</div>
					
					<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
					
					<!-- wp:column -->
					<div class=\"wp-block-column\">
					<!-- wp:group {\"className\":\"accordion\",\"layout\":{\"type\":\"constrained\"}} -->
					<div class=\"wp-block-group accordion\">
					<!-- wp:group {\"className\":\"accordion-item\",\"layout\":{\"type\":\"constrained\"}} -->
					<div class=\"wp-block-group accordion-item\">
					
					<!-- wp:heading {\"level\":5,\"className\":\"accordion-header\"} -->
					<h5 class=\"wp-block-heading accordion-header\">Where does it come from?</h5>
					<!-- /wp:heading -->
					
					<!-- wp:group {\"className\":\"accordion-content\",\"layout\":{\"type\":\"constrained\"}} -->
					<div class=\"wp-block-group accordion-content\">
					
					<!-- wp:paragraph -->
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.<br><br>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, </p>
					<!-- /wp:paragraph -->
					
					</div>
					<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					
					<!-- wp:group {\"className\":\"accordion-item\",\"layout\":{\"type\":\"constrained\"}} -->
					<div class=\"wp-block-group accordion-item\">
					
					<!-- wp:heading {\"level\":5,\"className\":\"accordion-header\"} -->
					<h5 class=\"wp-block-heading accordion-header\">Where can I get some?</h5>
					<!-- /wp:heading -->
					
					<!-- wp:group {\"className\":\"accordion-content\",\"layout\":{\"type\":\"constrained\"}} -->
					<div class=\"wp-block-group accordion-content\">
					
					<!-- wp:paragraph -->
					<p>The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
					<!-- /wp:paragraph -->
					
					</div>
					<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->
					
					<!-- wp:spacer {\"height\":\"60px\"} -->
					<div style=\"height:60px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					</div>
					<!-- /wp:group -->					
					",
			)
		);


		// Contact block
		register_block_pattern(
			'Basetheme/basetheme-cntact-block',
			array(
					'title'       => __( 'basetheme - Contact block', 'basetheme' ),
					'description' => _x( ' Three-column contact block with text and link icons', 'Block pattern description', 'basetheme' ),
					'categories'  => array( 'banners', 'headers' ),
					'content'     =>"<!-- wp:columns {\"verticalAlignment\":null} -->
					<div class=\"wp-block-columns\"><!-- wp:column {\"verticalAlignment\":\"center\",\"className\":\"p-20 radius-10\",\"style\":{\"color\":{\"background\":\"#f8f8f8\"}}} -->

					<div class=\"wp-block-column is-vertically-aligned-center p-20 radius-10 has-background\" style=\"background-color:#f8f8f8\">
					
					<!-- wp:group {\"className\":\"text-center\",\"fontSize\":\"x-large\",\"layout\":{\"type\":\"constrained\"}} -->
					<div class=\"wp-block-group text-center has-x-large-font-size\">
					
					<!-- wp:spacer {\"height\":\"30px\"} -->
					<div style=\"height:30px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:html -->
					<i class='bx bxs-phone color-secondary'></i>
					<!-- /wp:html -->
					
					</div>					
					<!-- /wp:group -->
					
					<!-- wp:spacer {\"height\":\"15px\"} -->
					<div style=\"height:15px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:heading {\"textAlign\":\"center\",\"level\":4,\"fontSize\":\"medium\"} -->
					<h4 class=\"wp-block-heading has-text-align-center has-medium-font-size\">Phone</h4>
					<!-- /wp:heading -->
					
					<!-- wp:spacer {\"height\":\"10px\"} -->
					<div style=\"height:10px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:paragraph {\"align\":\"center\",\"fontSize\":\"medium\"} -->
					<p class=\"has-text-align-center has-medium-font-size\"><a href=\"tel:391234567\">+39 123 45 67</a></p>
					<!-- /wp:paragraph -->
					
					<!-- wp:spacer {\"height\":\"30px\"} -->
					<div style=\"height:30px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					</div>					
					<!-- /wp:column -->
					
					<!-- wp:column {\"verticalAlignment\":\"center\",\"className\":\"p-20 radius-10\",\"style\":{\"color\":{\"background\":\"#f8f8f8\"}}} -->
					<div class=\"wp-block-column is-vertically-aligned-center p-20 radius-10 has-background\" style=\"background-color:#f8f8f8\">
					
					<!-- wp:group {\"className\":\"text-center\",\"fontSize\":\"x-large\",\"layout\":{\"type\":\"constrained\"}} -->
					<div class=\"wp-block-group text-center has-x-large-font-size\">
					
					<!-- wp:spacer {\"height\":\"30px\"} -->
					<div style=\"height:30px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:html -->
					<i class='bx bxs-envelope color-secondary'></i>
					<!-- /wp:html -->
					
					</div>
					<!-- /wp:group -->
					
					<!-- wp:spacer {\"height\":\"15px\"} -->
					<div style=\"height:15px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:heading {\"textAlign\":\"center\",\"level\":4,\"fontSize\":\"medium\"} -->
					<h4 class=\"wp-block-heading has-text-align-center has-medium-font-size\">Email</h4>
					<!-- /wp:heading -->
					
					<!-- wp:spacer {\"height\":\"10px\"} -->
					<div style=\"height:10px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:paragraph {\"align\":\"center\",\"fontSize\":\"medium\"} -->
					<p class=\"has-text-align-center has-medium-font-size\"><a href=\"mailto:info@yoursite.com\">info@yoursite.com</a></p>
					<!-- /wp:paragraph -->
					
					<!-- wp:spacer {\"height\":\"30px\"} -->
					<div style=\"height:30px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					</div>
					<!-- /wp:column -->
					
					<!-- wp:column {\"verticalAlignment\":\"center\",\"className\":\"p-20 radius-10\",\"style\":{\"color\":{\"background\":\"#f8f8f8\"}}} -->
					<div class=\"wp-block-column is-vertically-aligned-center p-20 radius-10 has-background\" style=\"background-color:#f8f8f8\">
					
					<!-- wp:group {\"className\":\"text-center\",\"fontSize\":\"x-large\",\"layout\":{\"type\":\"constrained\"}} -->
					<div class=\"wp-block-group text-center has-x-large-font-size\">
					
					<!-- wp:spacer {\"height\":\"30px\"} -->
					<div style=\"height:30px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:html -->
					<i class='bx bxs-map color-secondary'></i>
					<!-- /wp:html -->
					
					</div>
					<!-- /wp:group -->
					
					<!-- wp:spacer {\"height\":\"15px\"} -->
					<div style=\"height:15px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:heading {\"textAlign\":\"center\",\"level\":4,\"fontSize\":\"medium\"} -->
					<h4 class=\"wp-block-heading has-text-align-center has-medium-font-size\">Address</h4>
					<!-- /wp:heading -->
					
					<!-- wp:spacer {\"height\":\"10px\"} -->
					<div style=\"height:10px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:paragraph {\"align\":\"center\",\"fontSize\":\"medium\"} -->
					<p class=\"has-text-align-center has-medium-font-size\">Your Address, 1 Italy</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:spacer {\"height\":\"30px\"} -->
					<div style=\"height:30px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>
					<!-- /wp:spacer -->
					
					</div>
					<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->
					",
			)
		);

        
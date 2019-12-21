<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sitepad_theme.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}


function sitepad_overview_theme(){
	
global $insid, $user, $autoid, $__settings, $globals, $software, $iscripts, $soft, $theme, $sign_on_url, $error, $l, $SESS, $sitepad_plans;
	
	softheader($l['<title>']);
	
	$num_themes = '345+';
	
	echo '<style>
	.spicons-background{
		background: #F0F0F0 none repeat scroll 0 0;
		border-radius: 100%;
		height: 75px;
		width: 75px;
		margin: 30px 0 0 -12px;
	}
	.smeicons, .smeicons-before::before{
		margin: -6px 0 0;
	}
	.spicons{
		color: #4b77be;
		font-size: 36px;
		height: 50px;
		width: 50px;
		margin: 20px;
	}
	.feature-wrap h4{
		position: absolute;
		top: 35px;
		left: 95px;
	}
	.feature-wrap{
		padding: 5px;
	}
	.feature-wrap p{
		position: absolute;
		top: 70px;
		left: 95px;
	}
	.sitepad_getstarted_but {
		padding:10px 25px;
		font-weight:bold;
		text-align:center;
		font-size: 15px;
		color: #FFFFFF;
		background: #5CB85C;
		text-decoration:none;
	}
	.sitepad_getstarted_but a{
		text-decoration: none;
		color:#fff;
		display:block;
	}
	.sitepad_getstarted_but:hover{
		background: #449d44;
	}
	
	.plans_heading{
		background: #00B249;
		color: #FFFFFF !important;
		font-size: 24px !important;
	}
	.plans_price{
		background: #33C16D;
		color: #FFFFFF !important;
		font-size: 20px !important;
		line-height: 45%;
	}
	.head_span{
		border-bottom: 1px solid #fff;
	}
	.most_popular{
		background: #FA9300 !important;
	}

	.buy_button{
		font-size: 16px;
		padding: 5px 30px;
		line-height: 25px;
		background: #FA9300 !important;
		color: #FFFFFF !important;
		border: 0px;
		cursor: pointer;
		text-decoration:none !important;
	}
	.buy_button:hover{
		background: #D77E00 !important;
	}

	.pricing_tab ul{
		border: 1px solid rgba(0, 0, 0, 0.14);
		box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14);
		margin-top: -1px;
	}
	.pricing_tab{
		padding: 10px;
		width: 25%;
		padding-top: 0px;
	}
	.pricing_tab li {
		border-bottom: 1px solid rgba(0, 0, 0, 0.05);
		color: #737373;
		margin-bottom: 0;
		padding: 20px;
		text-align: center;
		list-style-type: none;
		font-size: 16px;
	}
	.pricing_tab ul {
		padding: 0;
	}
	.plan_highlight{
		width:25%;
	}
	.tab{
		display: inline-flex;
		width: 100%;
	}
	
	</style>
	
	<script>
	
	function toggle_plans(){
		$("#sitepad_plans").toggle("100");
	}
	
	</script>
	
	<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/css/smeicons.css" />
	<div class="bg"><br />
	
		<div class="row sai_main_head" style="width:100%;" align="center">
			<div class="col-sm-5 col-xs-5" style="padding:0px 10px 0 0; text-align:right;">
				<img src="'.$theme['images'].'sitepad_32.gif" />
			</div>
			<div class="col-sm-7 col-xs-7" style="padding-top:0px; padding-left:0; text-align:left;">SitePad '.$l['builder'].'</div>
		</div><hr>
		
		<div class="row">
			<div id="carousel-generic" class="carousel slide carousel-fade" data-ride="carousel">
				
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-generic" data-slide-to="1"></li>
					<li data-target="#carousel-generic" data-slide-to="2"></li>
					<li data-target="#carousel-generic" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
				
					<div class="item active">
						<img src="'.$theme['images'].'sitepad_banner.jpg" class="img-responsive" alt="SitePad Website Builder">
						<div class="carousel-caption content" style="margin-right : 25% !important; left:5% !important; text-shadow:none !important; top: 5%">
							<h2 style="color:#FFFFFF;"><font size="15px">SitePad '.$l['builder'].'</font></h2>
							<p style="color:#FFFFFF; !important">'.$l['slider1_desc'].'<br />
							'.$num_themes.' '.$l['slider1_desc2'].' <br /><br />
							'.$l['slider1_desc3'].'<br /></p>
						</div>
					</div>
					
					<div class="item">
						<img src="'.$theme['images'].'themes_collection.jpg" class="img-responsive" alt="Themes Collection">
						<div class="carousel-caption content" style="margin-right : 25% !important;margin-bottom:2% !important; left:5% !important; text-shadow:none !important;">
							<h2 style="color:#000000;"><font size="15px">'.$num_themes.' '.$l['slider2_title'].'</font></h2>
							<p style="color:#000000; !important">'.$l['slider2_desc'].'<br /><br />'.$l['slider2_desc2'].'</p>
						</div>
					</div>
					
					<div class="item">
						<img src="'.$theme['images'].'oneclick_publish.jpg" class="img-responsive" alt="One Click Publish">
						<div class="carousel-caption content" style="margin-left : 22% !important;margin-bottom:2% !important; right:5% !important; text-shadow:none !important;">
							<h2 style="color:#FFFFFF;"><font size="15px">'.$l['slider3_title'].'</font></h2>
							<p style="color:#fff;"><br />'.$l['slider3_desc'].'<br /><br />
							'.$l['slider3_desc2'].'<br /><br /></p>
						</div>
					</div>
					
					<div class="item">
						<img src="'.$theme['images'].'sitepad_widget.jpg" class="img-responsive" alt="SitePad Widget">
						<div class="carousel-caption content" style="margin-left : 22% !important;margin-bottom:2% !important; right:5% !important; text-shadow:none !important;">
							<h2 style="color:#fff;"><font size="15px">'.$l['slider4_title'].'</font></h2>
							<p style="color:#fff;">'.$l['slider4_desc'].'<br /><br />
							'.$l['slider4_desc2'].'</p>
						</div>
					</div>
				
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
					<span class="fa icon-prev fa-2x" aria-hidden="true" style="margin-left:-65px; font-size:18px !important; background:#000;border-radius:50%;padding:5px;"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
					<span class="fa icon-next fa-2x" aria-hidden="true" style="margin-right:-65px; font-size:18px!important;background:#000;border-radius:50%;padding:5px;"></span>
					<span class="sr-only">Next</span>
				</a>
				
			</div>
		</div>
		<br /><br />
		
		<div class="row" align="center">
			<div class="col-sm-12 col-xs-12">
				<a href="'.$globals['ind'].'act=sitepad" target="_blank" style="text-decoration:none;">
					<span class="sitepad_getstarted_but">'.$l['get_started_btn'].'</span>
				</a>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<a target="_blank" style="text-decoration:none; cursor:pointer;" onClick="toggle_plans(); return false;">
					<span class="sitepad_getstarted_but">'.$l['view_plan_btn'].'</span>
				</a>
			</div>
		</div>
		<br /><br />
		
		<div id="sitepad_plans" class="row" style="display:none;">
		<h3 class="orange text-center">'.$l['seu_plan_title'].'</h3><hr class="style-two" />';
		
		foreach($sitepad_plans as $slug => $plan){
			
			echo '
			<div class="col-sm-3 pricing_tab" id="'.$slug.'" width="100%">
				<ul>
					<li class="plans_heading" id="plan"><span class="head_span">'.$plan['name'].'</span></li>
					<li class="plans_price" id="price"><span data-price="'.$plan['price'].'">'.(empty($plan['price']) ? 'No Cost' : '$'.$plan['price'].'/Year').'</span></li>
					<li>'.(empty($plan['themes']) ? $l['plan_unlimited'] : $plan['themes']).' Themes</li>
					<li>'.(empty($plan['sites']) ? $l['plan_unlimited'] : $plan['sites']).' Site'.($plan['sites'] != 1 ? 's' : '').' *</li>
					<li>'.(empty($plan['pages']) ? $l['plan_unlimited'] : $plan['pages']).' Pages'.(empty($plan['pages']) ? '' : ' per site').'</li>
					<li>'.(empty($plan['blogs']) ? $l['plan_unlimited'] : $plan['blogs']).' Blog Posts'.(empty($plan['blogs']) ? '' : ' per site').'</li>
					<li>'.$l['plan_download'].' '.(!empty($plan['download_sites']) ? '<span class="fa sai-success fa-lg" style="color:#00B249;"></span>' : '<span class="fa sai-remove fa-lg" style="color:#D41B27;"></span>').'</li>
					<li>'.$plan['space_display'].' '.$l['plan_storage'].' **</li>
					<li><a href="'.$globals['ind'].'act=sitepad" target="_blank" class="buy_button">'.$l['get_started_btn'].'</a></li>
				</ul>
			</div>';
		}
		
		echo '<div align="center">* '.$l['domain_notice'].'</div>
		<div align="center">** '.$l['storage_notice'].'</div>
		</div><br />
		
		<div align="center">'.$l['sitepad_no_hosting'].'</div>
		
		<div id="top_feature">
			
			<h3 class="orange text-center">'.$l['feature_title'].'</h3><hr class="style-two" />		
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-download fa-2x spicons"></span></div>
						<h4>'.$l['one_click_title'].'</h4>
						<p>'.$l['one_click_desc'].'</p>
					</div>
				</div>			
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-galleries fa-2x spicons"></span></div>
						<h4>'.$num_themes.' '.$l['num_themes_title'].'</h4>
						<p>'.$num_themes.' '.$l['num_themes_desc'].'</p>
					</div>
				</div>			
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-gridview fa-2x spicons"></span></div>
						<h4>'.$l['widgets_title'] .'</h4>
						<p>'.$l['widgets_desc'] .'</p>
					</div>
				</div>
			</div>		
			
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-files fa-2x spicons"></span></div>
						<h4>'.$l['responsive_title'].'</h4>
						<p>'.$l['responsive_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-file fa-2x spicons"></span></div>
						<h4>'.$l['static_title'].'</h4>
						<p>'.$l['static_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-success fa-2x spicons"></span></div>
						<h4>'.$l['easy_to_title'].'</h4>
						<p>'.$l['easy_to_desc'].'</p>
					</div>
				</div>
			</div>
		</div>
	
	<div id="all_feature">
		<div id="feature_sec">
			
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa fa-2x spicons sai-twitch"></span></div>
						<h4>'.$l['social_title'].'</h4>
						<p>'.$l['social_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa fa-2x spicons sai-projectman"></span></div>
						<h4>'.$l['blog_title'].'</h4>
						<p>'.$l['blog_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa fa-2x spicons sai-video"></span></div>
						<h4>'.$l['media_title'].'</h4>
						<p>'.$l['media_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-copy fa-2x spicons"></span></div>
						<h4>'.$l['replicate_title'].'</h4>
						<p>'.$l['replicate_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-shuffle fa-2x spicons"></span></div>
						<h4>'.$l['flexible_title'].'</h4>
						<p>'.$l['flexible_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="fa sai-www fa-2x spicons"></span></div>
						<h4>'.$l['multisite_title'].'</h4>
						<p>'.$l['multisite_desc'].'</p>
					</div>
				</div>
			</div>
		</div>

		<div id="all_widgets"><br /><br />
			<h3 class="orange text-center">'.$l['list_widgets_title'].'</h3><hr class="style-two" />
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_heading"></span></div>
						<h4>'.$l['widget_title_title'].'</h4>
						<p>'.$l['widget_title_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_text"></span></div>
						<h4>'.$l['widget_paragraph_title'].'</h4>
						<p>'.$l['widget_paragraph_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_code"></span></div>
						<h4>'.$l['widget_richtext_title'].'</h4>
						<p>'.$l['widget_richtext_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_quote"></span></div>
						<h4>'.$l['widget_quote_title'].'</h4>
						<p>'.$l['widget_quote_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_list"></span></div>
						<h4>'.$l['widget_list_title'].'</h4>
						<p>'.$l['widget_list_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_icon"></span></div>
						<h4>'.$l['widget_icon_title'].'</h4>
						<p>'.$l['widget_icon_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_image"></span></div>
						<h4>'.$l['widget_image_title'].'</h4>
						<p>'.$l['widget_image_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_image_slider" style="margin-left: 10px"></span></div>
						<h4>'.$l['widget_slider_title'].'</h4>
						<p>'.$l['widget_slider_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_grid_gallery"></span></div>
						<h4>'.$l['widget_gridgallery_title'].'</h4>
						<p>'.$l['widget_gridgallery_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-mpce_image_hotspot"></span></div>
						<h4>'.$l['widget_hotspot_title'].'</h4>
						<p>'.$l['widget_hotspot_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_button"></span></div>
						<h4>'.$l['widget_button_title'].'</h4>
						<p>'.$l['widget_button_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_button_group"></span></div>
						<h4>'.$l['widget_btngroup_title'].'</h4>
						<p>'.$l['widget_btngroup_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_download_button"></span></div>
						<h4>'.$l['widget_downloadbtn_title'].'</h4>
						<p>'.$l['widget_downloadbtn_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_social_buttons"></span></div>
						<h4>'.$l['widget_sharebtn_title'].'</h4>
						<p>'.$l['widget_sharebtn_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_wp_audio"></span></div>
						<h4>'.$l['widget_audio_title'].'</h4>
						<p>'.$l['widget_audio_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_video"></span></div>
						<h4>'.$l['widget_video_title'].'</h4>
						<p>'.$l['widget_video_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-mpceva_video_slider"></span></div>
						<h4>'.$l['widget_videoslider_title'].'</h4>
						<p>'.$l['widget_videoslider_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-mpceva_video_lightbox"></span></div>
						<h4>'.$l['widget_vLightbox_title'].'</h4>
						<p>'.$l['widget_vLightbox_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_service_box"></span></div>
						<h4>'.$l['widget_servicebox_title'].'</h4>
						<p>'.$l['widget_servicebox_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_tabs"></span></div>
						<h4>'.$l['widget_tabs_title'].'</h4>
						<p>'.$l['widget_tabs_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_accordion"></span></div>
						<h4>'.$l['widget_accordian_title'].'</h4>
						<p>'.$l['widget_accordian_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_table"></span></div>
						<h4>'.$l['widget_table_title'].'</h4>
						<p>'.$l['widget_table_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_cta"></span></div>
						<h4>'.$l['widget_cta_title'].'</h4>
						<p>'.$l['widget_cta_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_modal"></span></div>
						<h4>'.$l['widget_modal_title'].'</h4>
						<p>'.$l['widget_modal_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_popup"></span></div>
						<h4>'.$l['widget_splash_title'].'</h4>
						<p>'.$l['widget_splash_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_space"></span></div>
						<h4>'.$l['widget_space_title'].'</h4>
						<p>'.$l['widget_space_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_embed"></span></div>
						<h4>'.$l['widget_embed_title'].'</h4>
						<p>'.$l['widget_embed_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_google_chart"></span></div>
						<h4>'.$l['widget_chart_title'].'</h4>
						<p>'.$l['widget_chart_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_google_map"></span></div>
						<h4>'.$l['widget_maps_title'].'</h4>
						<p>'.$l['widget_maps_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-mpce_countdown_timer"></span></div>
						<h4>'.$l['widget_timer_title'].'</h4>
						<p>'.$l['widget_timer_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-mpce_pta_pricing_table"></span></div>
						<h4>'.$l['widget_pricingtble_title'].'</h4>
						<p>'.$l['widget_pricingtble_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-mpce_cfa_contact_form"></span></div>
						<h4>'.$l['widget_contact_title'].'</h4>
						<p>'.$l['widget_contact_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_site_title"></span></div>
						<h4>'.$l['widget_sitetitle_title'].'</h4>
						<p>'.$l['widget_sitetitle_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_primary_nav_menu"></span></div>
						<h4>'.$l['widget_primarymenu_title'].'</h4>
						<p>'.$l['widget_primarymenu_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_posts_grid"></span></div>
						<h4>'.$l['widget_postgrid_title'].'</h4>
						<p>'.$l['widget_postgrid_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_wp_pages"></span></div>
						<h4>'.$l['widget_pages_title'].'</h4>
						<p>'.$l['widget_pages_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_wp_posts"></span></div>
						<h4>'.$l['widget_recent_title'].'</h4>
						<p>'.$l['widget_recent_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_wp_calendar"></span></div>
						<h4>'.$l['widget_calendar_title'].'</h4>
						<p>'.$l['widget_calendar_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_posts_slider" style="margin-left: 14px"></span></div>
						<h4>'.$l['widget_postslider_title'].'</h4>
						<p>'.$l['widget_postslider_desc'].'</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_wp_categories"></span></div>
						<h4>'.$l['widget_categories_title'].'</h4>
						<p>'.$l['widget_categories_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_wp_archives"></span></div>
						<h4>'.$l['widget_archives_title'].'</h4>
						<p>'.$l['widget_archives_desc'].'</p>
					</div>
				</div>
				<div class="col-sm-4 col-sm-6">
					<div class="feature-wrap">
						<div class="spicons-background"><span class="smeicons fa-2x smeicons-before spicons smeicons-sm_wp_tagcloud " style="margin-left: 12px;"></span></div>
						<h4>'.$l['widget_tags_title'].'</h4>
						<p>'.$l['widget_tags_desc'].'</p>
					</div>
				</div>
			</div>
		</div>
		<br /><br />
		
		<div class="row" align="center">
			<div class="col-sm-12 col-xs-12">
				<a href="'.$globals['ind'].'act=sitepad" target="_blank" style="text-decoration:none;">
					<span class="sitepad_getstarted_but">'.$l['get_started_btn'].'</span>
				</a>
			</div>
		</div>
		<br /><br /><br />
	</div>
</div>';
	
	softfooter();

}

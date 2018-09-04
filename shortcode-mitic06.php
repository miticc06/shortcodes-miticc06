<?php
/*
 Plugin Name:       Shortcodes miticc06 plugin
 Author:            KienThuc24h.com
 Author URI: https://kienthuc24h.com
 Description: Plugin wordpress chèn phần đánh giá vào bài viết bằng Shortcodes. Cách dùng: [DANHGIA title="Tên tiêu đề phần đánh giá" percent="90" cmt="Tuyệt vời" tc1_title="Tiêu đề 1" tc1_percent="20" tc2_title="Tiêu đề 2" tc2_percent="40" tc3_title="Tiêu đề 3" tc3_percent="60" tc4_title="Tiêu đề 4" tc4_percent="80"]

*/




  wp_register_style ( 'plugin_css_miticc06', plugins_url ( 'inc/style.css', __FILE__ ) );

   
function create_shortcode_DANHGIA($args, $content)
{
		wp_enqueue_style('plugin_css_miticc06');
		
		$x = '<div class="big-5 betterstudio-review type-stars review-bottom panel panel-green">
	<div class="panel-heading clearfix">
        <h3 class="panel-title">'.$args['title'].'</h3>
    </div>
    <div class="verdict clearfix">
        <div class="overall"> <span class="rate">'.$args['percent'].'<span class="percentage">%</span></span>
            <div class="rating-stars"><span style="width: '.$args['percent'].'%;"></span>
            </div> <span class="verdict-title">'.$args['cmt'].'</span> </div>
        <div class="the-content verdict-summary">
            <div class="criteria-list clearfix">
                <ul>
                    <li class="clearfix ">
                        <div class="criterion"> <span class="title">'.$args['tc1_title'].'</span> </div>
                        <div class="rating rating-stars rating-type-stars "><span style="width: '.$args['tc1_percent'].'%;"></span>
                        </div>
                    </li>
                    <li class="clearfix ">
                        <div class="criterion"> <span class="title">'.$args['tc2_title'].'</span> </div>
                        <div class="rating rating-stars rating-type-stars "><span style="width: '.$args['tc2_percent'].'%;"></span>
                        </div>
                    </li>
                    <li class="clearfix ">
                        <div class="criterion"> <span class="title">'.$args['tc3_title'].'</span> </div>
                        <div class="rating rating-stars rating-type-stars "><span style="width: '.$args['tc3_percent'].'%;"></span>
                        </div>
                    </li>
                    <li class="clearfix ">
                        <div class="criterion"> <span class="title">'.$args['tc4_title'].'</span> </div>
                        <div class="rating rating-stars rating-type-stars "><span style="width: '.$args['tc4_percent'].'%;"></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>';
        return $x;
}


  
function create_shortcode_box_download($args, $content)
{
		wp_enqueue_style('plugin_css_miticc06');		
		$x = '<div class="boxdownload_miticc06"><div class="boxdownload_miticc06_box-inner-block"><i class="fa fa-download boxdownload_miticc06_boxicon"></i>'.$content.'</div></div>';
        return $x;
}

add_shortcode( 'DANHGIA', 'create_shortcode_DANHGIA' );

add_shortcode( 'box', 'create_shortcode_box_download' );

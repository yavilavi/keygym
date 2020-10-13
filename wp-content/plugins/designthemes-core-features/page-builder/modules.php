<?php
global $dt_modules, $dt_animation_types, $woothemes_sensei, $dtthemes_columns;

$dt_animation_types = array("flash" => "flash", "shake" => "shake", "bounce" => "bounce", "tada" => "tada", "swing" => "swing", "wobble" => "wobble", "pulse" => "pulse", "flip" => "flip", "flipInX" => "flipInX", "flipOutX" => "flipOutX", "flipInY" => "flipInY", "flipOutY" => "flipOutY", "fadeIn" => "fadeIn", "fadeInUp" => "fadeInUp", "fadeInDown" => "fadeInDown", "fadeInLeft" => "fadeInLeft", "fadeInRight" => "fadeInRight", "fadeInUpBig" => "fadeInUpBig", "fadeInDownBig" => "fadeInDownBig", "fadeInLeftBig" => "fadeInLeftBig", "fadeInRightBig" => "fadeInRightBig", "fadeOut" => "fadeOut", "fadeOutUp" => "fadeOutUp","fadeOutDown" => "fadeOutDown", "fadeOutLeft" => "fadeOutLeft", "fadeOutRight" => "fadeOutRight", "fadeOutUpBig" => "fadeOutUpBig", "fadeOutDownBig" => "fadeOutDownBig", "fadeOutLeftBig" => "fadeOutLeftBig","fadeOutRightBig" => "fadeOutRightBig", "bounceIn" => "bounceIn", "bounceInUp" => "bounceInUp", "bounceInDown" => "bounceInDown", "bounceInLeft" => "bounceInLeft", "bounceInRight" => "bounceInRight", "bounceOut" => "bounceOut", "bounceOutUp" => "bounceOutUp", "bounceOutDown" => "bounceOutDown", "bounceOutLeft" => "bounceOutLeft", "bounceOutRight" => "bounceOutRight", "rotateIn" => "rotateIn", "rotateInUpLeft" => "rotateInUpLeft", "rotateInDownLeft" => "rotateInDownLeft", "rotateInUpRight" => "rotateInUpRight", "rotateInDownRight" => "rotateInDownRight", "rotateOut" => "rotateOut", "rotateOutUpLeft" => "rotateOutUpLeft","rotateOutDownLeft" => "rotateOutDownLeft", "rotateOutUpRight" => "rotateOutUpRight", "rotateOutDownRight" => "rotateOutDownRight", "hinge" => "hinge", "rollIn" => "rollIn", "rollOut" => "rollOut", "lightSpeedIn" => "lightSpeedIn", "lightSpeedOut" => "lightSpeedOut", "slideDown" => "slideDown", "slideUp" => "slideUp", "slideLeft" => "slideLeft", "slideRight" => "slideRight", "slideExpandUp" => "slideExpandUp", "expandUp" => "expandUp", "expandOpen" => "expandOpen", "bigEntrance" => "bigEntrance", "hatch" => "hatch", "floating" => "floating", "tossing" => "tossing", "pullUp" => "pullUp", "pullDown" => "pullDown", "stretchLeft" => "stretchLeft", "stretchRight" => "stretchRight");

$variations = array("avocado" => "avocado", "black" => "black", "blue" => "blue", "blueiris" => "blueiris", "blueturquoise" => "blueturquoise", "brown" => "brown", "burntsienna" => "burntsienna", "chillipepper" => "chillipepper", "eggplant" => "eggplant", "electricblue" => "electricblue", "graasgreen" => "graasgreen", "grey" => "grey", "green" => "green", "orange" => "orange", "palebrown" => "palebrown", "pink" => "pink", "radiantorchid" => "radiantorchid", "red" => "red", "skyblue" => "skyblue", "yellow" => "yellow", "chocolate" => "Chocolate", "coral" => "Coral");

$button_types = array('type1' => 'Type 1', 'type2' => 'Type 2');

$button_size = array('small' => 'Small', 'medium' => 'Medium', 'large' => 'Large', 'xlarge' => 'Xlarge');

$page_targets = array('_blank' => 'Blank', '_new' => 'New', '_parent' => 'Parent', '_self' => 'Self', '_top' => 'Top');

$box_types = array('titled-box' => 'Titled Box', 'error-box' => 'Error Box', 'warning-box' => 'Warning Box', 'success-box' => 'Success Box', 'info-box' => 'Info Box');

$blocquote_types = array('type1' => 'Type 1', 'type2' => 'Type 2', 'type3' => 'Type 3', 'type4' => 'Type 4', 'type5' => 'Type 5', 'type6' => 'Type 6');

$pullquote_types = array('pullquote1' => 'Pullquote 1', 'pullquote2' => 'Pullquote 2', 'pullquote3' => 'Pullquote 3', 'pullquote4' => 'Pullquote 4', 'pullquote5' => 'Pullquote 5', 'pullquote6' => 'Pullquote 6');

$callout_box_types = array('type1' => 'Type 1', 'type2' => 'Type 2', 'type3' => 'Type 3', 'type4' => 'Type 4', 'type5' => 'Type 5');

$pricingtable_types = $testimonial_types = $colored_icon_box_types = array('type1' => 'Type 1', 'type2' => 'Type 2');

$align = array('left' => 'Left', 'right' => 'Right', 'center' => 'Center');

$yesorno = array('yes' => 'Yes', 'no' => 'No');

$trueorfalse = array('true' => 'True', 'false' => 'False');

$tooltip_positions = array('top' => 'Top', 'right' => 'Right', 'bottom' => 'Bottom', 'left' => 'Left');

$tooltip_types = array('default' => 'Default', 'boxed' => 'Boxed');

$dropcap_types = array('Default' => 'Default', 'Circle' => 'Circle', 'Bordered Circle' => 'Bordered Circle', 'Square' => 'Square', 'Bordered Square' => 'Bordered Square');

$bacground_repeat = array('no-repeat' => 'No Repeat', 'repeat' => 'Repeat', 'repeat-x' => 'Repeat X', 'repeat-y' => 'Repeat Y');

$bacground_position = array('left top' => 'Left Top', 'left center' => 'Left Center', 'left bottom' => 'Left Bottom', 'right top' => 'Right Top', 'right center' => 'Right Center', 'right bottom' => 'Right Bottom', 'center top' => 'Center Top', 'center center' => 'Center Center', 'center bottom' => 'Center Bottom');

$lengths = array(5 => 5, 10 => 10, 15 => 15, 20 => 20, 25 => 25, 30 => 30, 35 => 35, 40 => 40, 45 => 45, 50 => 50, 55 => 55, 60 => 60, 65 => 65, 70 => 70, 75 => 75, 80 => 80, 85 => 85, 90 => 90, 95 => 95, 100 => 100);

$post_columns = array(2 => 2, 3 => 3);

$portfolio_columns = array(2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6);

$teacher_columns = array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5);

$icon_box_types = array('type1' => 'Type 1', 'type2' => 'Type 2', 'type3' => 'Type 3', 'type4' => 'Type 4', 'type5' => 'Type 5', 'type6' => 'Type 6', 'type7' => 'Type 7');

$progressbar_types = array('standard' => 'Standard', 'progress-striped' => 'Striped', 'progress-striped-active' => 'Striped Active');

$oltypes = array('decimal' => 'Decimal', 'decimal-leading-zero' => 'Decimal With Leading Zero', 'lower-alpha' => 'Lower Alpha', 'lower-roman' => 'Lower Roman', 'upper-alpha' => 'Upper Alpha', 'upper-roman' => 'Upper Roman');

$ultypes = array('arrow' => 'Arrow', 'rounded-arrow' => 'Rounded Arrow', 'double-arrow' => 'Double Arrow', 'heart' => 'Heart', 'trash' => 'Trash', 'star' => 'Star', 'tick' => 'Tick', 'rounded-tick' => 'Rounded Tick', 'cross' => 'Cross', 'rounded-cross' => 'Rounded Cross', 'rounded-question' => 'Rounded Question', 'rounded-info' => 'Rounded Info', 'delete' => 'Delete', 'warning' => 'Warning', 'comment' => 'Comment', 'edit' => 'Edit', 'share' => 'Share', 'plus' => 'Plus', 'rounded-plus' => 'Rounded Plus', 'minus' => 'Minus', 'rounded-minus' => 'Rounded Minus', 'asterisk' => 'Asterisk', 'cart' => 'Cart', 'folder' => 'Folder', 'folder-open' => 'Folder Open', 'desktop' => 'Desktop', 'tablet' => 'Tablet', 'mobile' => 'Mobile', 'reply' => 'Reply', 'quote' => 'Quote', 'mail' => 'Mail', 'external-link' => 'External Link', 'adjust' => 'Adjust', 'pencil' => 'Pencil', 'print' => 'Print', 'tag' => 'Tag', 'thumbs-up' => 'Thumbs Up', 'thumbs-down' => 'Thumbs Down', 'time' => 'Time', 'globe' => 'Globe', 'pushpin' => 'Pushpin', 'map-marker' => 'Map Marker', 'link' => 'Link', 'paper-clip' => 'Paper Clip', 'download' => 'Download', 'key' => 'Key', 'search' => 'Search', 'rss' => 'Rss', 'twitter' => 'Twitter', 'facebook' => 'Facebook', 'linkedin' => 'Linkedin', 'google-plus' => 'Google Plus', 'circle-tick' => 'Circle Tick', 'location-arrow' => 'Location', 'paper-plane' => 'Paper Plane', 'circle-o' => 'Circle', 'key' => 'Key', 'download' => 'Download');

$slider_types = array('LayerSlider' => 'Layer Slider', 'RevolutionSlider' => 'Revolution Slider');

$options = array(
	'id' => array(
		'title' => esc_html__('ID', 'dt_themes'),
		'type' => 'text',
		'default_value' => ''
	),
	'type' => array(
		'title' => esc_html__('Type', 'dt_themes'),
		'type' => 'select',
		'options' => array('type1' => 'Type 1', 'type2' => 'Type 2'),
		'default_value' => array(),
	),
	'style' => array(
		'title' => esc_html__('Style', 'dt_themes'),
		'type' => 'text',
		'default_value' => ''
	),
	'class' => array(
		'title' => esc_html__('Custom Class', 'dt_themes'),
		'type' => 'text',
		'default_value' => ''
	)
);

/*  Start of Columns Definition */

$dtthemes_columns['one_column'] = array( 
	'name' => __('1 Column', 'dt_themes'),
	'type' => 'column',
	'options' => $options
);
$dtthemes_columns['one_half'] = array( 
	'name' => __('1/2 Column', 'dt_themes'),
	'type' => 'column',
	'options' => $options
);
$dtthemes_columns['one_third'] = array( 
	'name' => __('1/3 Column', 'dt_themes'),
	'type' => 'column',
	'options' => $options
	);
$dtthemes_columns['one_fourth'] = array( 
	'name' => __('1/4 Column', 'dt_themes'),
	'type' => 'column',
	'options' => $options
);
$dtthemes_columns['one_fifth'] = array( 
	'name' => __('1/5 Column', 'dt_themes'),
	'type' => 'column',
	'options' => $options
);
$dtthemes_columns['one_sixth'] = array( 
	'name' => __('1/6 Column', 'dt_themes'),
	'type' => 'column',
	'options' => $options
);
$dtthemes_columns['two_third'] = array( 
	'name' => __('2/3 Column', 'dt_themes'),
	'type' => 'column',
	'options' => $options
);
$dtthemes_columns['two_fifth'] = array( 
	'name' => __('2/5 Column', 'dt_themes'),
	'type' => 'column',
	'options' => $options
);
$dtthemes_columns['two_sixth'] = array( 
	'name' => __('2/6 Column', 'dt_themes'),
	'type' => 'column',
	'options' => $options
);
$dtthemes_columns['three_fourth'] = array( 
	'name' => __('3/4 Column', 'dt_themes'),
	'type' => 'column',
	'options' => $options
);
$dtthemes_columns['three_fifth'] = array( 
	'name' => __('3/5 Column', 'dt_themes'),
	'type' => 'column',
	'options' => $options
);
$dtthemes_columns['three_sixth'] = array( 
	'name' => __('3/6 Column', 'dt_themes'),
	'type' => 'column',
	'options' => $options
);
$dtthemes_columns['four_fifth'] = array( 
	'name' => __('4/5 Column', 'dt_themes'),
	'type' => 'column',
	'options' => $options
);
$dtthemes_columns['four_sixth'] = array( 
	'name' => __('4/6 Column', 'dt_themes'),
	'type' => 'column',
	'options' => $options
);
$dtthemes_columns['five_sixth'] = array( 
	'name' => __('5/6 Column', 'dt_themes'),
	'type' => 'column',
	'options' => $options
);
$dtthemes_columns['resizable'] = array( 
	'name' => __('Resizable Column', 'dt_themes') ,
	'type' => 'column',
	'options' => $options
);

$dtthemes_columns['fullwidth_section'] = array( 
	'name' => __('Fullwidth Section', 'dt_themes'),
	'type' => 'section',
	'separatecolumns' => 'true',	
	'options' => array(
		'backgroundcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => ''
		),
		'backgroundimage' => array(
			'title' => __('Background Image', 'dt_themes'),
			'type' => 'upload',
			'default_value' => ''
		),
		'opacity' => array(
			'title' => __('Background Opacity', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'parallax' => array(
			'title' => __('Parallax Effect', 'dt_themes'),
			'type' => 'select',
			'options' => $yesorno,
			'default_value' => array('no')
		),
		'backgroundrepeat' => array(
			'title' => __('Background Repeat', 'dt_themes'),
			'type' => 'select',
			'options' => $bacground_repeat,
			'default_value' => array('no-repeat')
		),
		'backgroundposition' => array(
			'title' => __('Background Position', 'dt_themes'),
			'type' => 'select',
			'options' => $bacground_position,
			'default_value' => array('left top')
		),
		'paddingtop' => array(
			'title' => __('Padding Top', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'paddingbottom' => array(
			'title' => __('Padding Bottom', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'textcolor' => array(
			'title' => __('Text Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => ''
		),
		'class' => array(
			'title' => __('CSS Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		)
	)
);

$dtthemes_columns['fullwidth_video'] = array( 
	'name' => __('Fullwidth Section Video', 'dt_themes'),
	'type' => 'section',
	'options' => array(
		'mp4' => array(
			'title' => __('MP4', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'webm' => array(
			'title' => __('WEBM', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'ogv' => array(
			'title' => __('OGV', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'poster' => array(
			'title' => __('Poster Image', 'dt_themes'),
			'type' => 'upload',
			'default_value' => ''
		),
		'backgroundimage' => array(
			'title' => __('Background Image', 'dt_themes'),
			'type' => 'upload',
			'default_value' => ''
		),
		'paddingtop' => array(
			'title' => __('Padding Top (in px)', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'paddingbottom' => array(
			'title' => __('Padding Bottom (in px)', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'class' => array(
			'title' => __('CSS Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		)
	)
);

/*  End of Columns definition */


/*  Start of General Modules */

$dt_modules['general']['doshortcode_anycontent'] = array(
	'name' => __('Add Any Content Here', 'dt_themes'),
	'tooltip' => 'Add any content using this module',
	'icon_class' => 'ico-anycontent',
	'options' => array(
		'acc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true
		)
	)
);

$dt_modules['general']['doshortcode_accordion_framed'] = array(
	'name' => __('Accordion Framed', 'dt_themes'),
	'tooltip' => 'Add Accordion Framed Module',
	'icon_class' => 'ico-accordion',
	'options' => array(
		'acc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_accordion_group]<br>
							[dt_sc_toggle_framed title="Accordion 1"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle_framed]<br>
							[dt_sc_toggle_framed title="Accordion 2"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle_framed]<br>
							[dt_sc_toggle_framed title="Accordion 3"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle_framed]<br>
						[/dt_sc_accordion_group]'
		)
	)
);

$dt_modules['general']['doshortcode_accordion_default'] = array(
	'name' => __('Accordion Default', 'dt_themes'),
	'tooltip' => 'Add Accordion Default Module',
	'icon_class' => 'ico-accordion',
	'options' => array(
		'acc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_accordion_group]<br>
							[dt_sc_toggle title="Accordion 1"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle]<br>
							[dt_sc_toggle title="Accordion 2"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle]<br>
							[dt_sc_toggle title="Accordion 3"]<br>
							
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							
							[/dt_sc_toggle]<br>
						[/dt_sc_accordion_group]'
		)
	)
);

$dt_modules['general']['animation'] = array(
	'name' => __('Animation', 'dt_themes'),
	'tooltip' => 'Add Animation effect for any content',
	'icon_class' => 'ico-animation',
	'options' => array(
		'effect' => array(
			'title' => __('Choose Effect', 'dt_themes'),
			'type' => 'select',
			'options' => $dt_animation_types,
			'default_value' => array('fadeIn')
		),
		'delay' => array(
			'title' => __('Delay', 'dt_themes'),
			'type' => 'text',
			'default_value' => 300
		),
		'an_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
		)
	)
);

$dt_modules['general']['button'] = array(
	'name' => __('Button', 'dt_themes'),
	'tooltip' => 'Add Button',
	'icon_class' => 'ico-button',
	'separatecolumns' => 'true',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $button_types,
			'default_value' => array('type1')
		),
		'iconstyle' => array(
			'title' => __('Icon Style', 'dt_themes'),
			'type' => 'select',
			'options' => array('no-icon' => 'No Icon', 'with-icon' => 'With Icon'),
			'default_value' => array('no-icon')
		),
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'fa-home'
		),
		'htext' => array(
			'title' => __('Hover Text', 'dt_themes'),
			'type' => 'text'
		),
		'link' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),
		'size' => array(
			'title' => __('Size', 'dt_themes'),
			'type' => 'select',
			'options' => $button_size,
			'default_value' => array('medium')
		),
		'animation' => array(
			'title' => __('Animation', 'dt_themes'),
			'type' => 'select',
			'options' => array( '' => 'Animate (Default)', 'no-animate' => 'Non-Animate' ),
			'default_value' => array('')
		),		
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker'
		),
		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		'textcolor' => array(
			'title' => __('Text Color', 'dt_themes'),
			'type' => 'colorpicker'
		),
		'target' => array(
			'title' => __('Target', 'dt_themes'),
			'type' => 'select',
			'options' => $page_targets,
			'default_value' => array('_blank')
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'button_content' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Click me!'
		)
	)
);

$dt_modules['general']['notify_button'] = array(
	'name' => __('Notify Button', 'dt_themes'),
	'tooltip' => 'Add Notify Button',
	'icon_class' => 'ico-button',
	'separatecolumns' => 'true',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $button_types,
			'default_value' => array('type1')
		),
		'iconstyle' => array(
			'title' => __('Icon Style', 'dt_themes'),
			'type' => 'select',
			'options' => array('no-icon' => __('No Icon', 'dt_themes'), 'with-icon' => __('With Icon', 'dt_themes')),
			'default_value' => array('no-icon')
		),
		'icon' => array(
			'title' => __('Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'htext' => array(
			'title' => __('Hover Text', 'dt_themes'),
			'type' => 'text'
		),
		'link' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),
		'size' => array(
			'title' => __('Size', 'dt_themes'),
			'type' => 'select',
			'options' => $button_size,
			'default_value' => array('medium')
		),
		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => array('info' => __('Info', 'dt_themes'), 'success' => __('Success', 'dt_themes'), 'warning' => __('Warning', 'dt_themes'), 'danger' => __('Danger', 'dt_themes')),
			'default_value' => array('info')
		),
		'target' => array(
			'title' => __('Target', 'dt_themes'),
			'type' => 'select',
			'options' => $page_targets,
			'default_value' => array('_blank')
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'button_content' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Click me!'
		)
	)
);

$dt_modules['general']['blockquote'] = array(
	'name' => __('Blockquote', 'dt_themes'),
	'tooltip' => 'Add Blockquote',
	'icon_class' => 'ico-blockquote',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $blocquote_types,
			'default_value' => array('type1')
		),
		'align' => array(
			'title' => __('Align', 'dt_themes'),
			'type' => 'select',
			'options' => $align,
			'default_value' => array()
		),
		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		'textcolor' => array(
			'title' => __('Text Color', 'dt_themes'),
			'type' => 'colorpicker'
		),
		'cite' => array(
			'title' => __('Cite Name', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'role' => array(
			'title' => __('Role', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'bq_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac luctus ligula. Phasellus a ligula blandit.'
		)
	)
);

$dt_modules['general']['pullquote'] = array(
	'name' => __('Pullquote', 'dt_themes'),
	'tooltip' => 'Add different types of pullquotes',
	'icon_class' => 'ico-quote',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $pullquote_types,
			'default_value' => array('pullquote1')
		),
		'align' => array(
			'title' => __('Align', 'dt_themes'),
			'type' => 'select',
			'options' => $align,
			'default_value' => array('left')
		),
		'icon' => array(
			'title' => __('Show Icon', 'dt_themes'),
			'type' => 'select',
			'options' => $yesorno,
			'default_value' => array('yes')
		),
		'textcolor' => array(
			'title' => __('Text Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => ''
		),
		'cite' => array(
			'title' => __('Cite Name', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Dolor sit amet'
		),
		'pq_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac luctus ligula. Phasellus a ligula blandit'
		)
	)
);

$dt_modules['general']['fancy_ul'] = array(
	'name' => __('Unordered Lists', 'dt_themes'),
	'tooltip' => 'Add items in unordered lists',
	'icon_class' => 'ico-unorderedlists',
	'options' => array(
		'style' => array(
			'title' => __('Style', 'dt_themes'),
			'type' => 'select',
			'options' => $ultypes,
			'default_value' => array('arrow')
		),
		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text'
		),
		'ul_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '<ul>
							<li>Lorem ipsum dolor sit</li>
							<li>Praesent convallis nibh</li>
							<li>Nullam ac sapien sit</li>
							<li>Phasellus auctor augue</li>
						</ul>'
		)
	)
);

$dt_modules['general']['fancy_ol'] = array(
	'name' => __('Ordered Lists', 'dt_themes'),
	'tooltip' => 'Add items in ordered list',
	'icon_class' => 'ico-orderedlists',
	'options' => array(
		'style' => array(
			'title' => __('Style', 'dt_themes'),
			'type' => 'select',
			'options' => $oltypes,
			'default_value' => array('decimal')
		),
		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'ol_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '<ol>
							<li>Lorem ipsum dolor sit</li>
							<li>Praesent convallis nibh</li>
							<li>Nullam ac sapien sit</li>
							<li>Phasellus auctor augue</li>
						</ol>'
		)
	)
);

$dt_modules['general']['pricing_table'] = array(
	'name' => __('Pricing Table', 'dt_themes'),
	'tooltip' => 'Add pricing table',
	'icon_class' => 'ico-pricingtable',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => array('type1' => 'Type1'),
			'default_value' => array('type1')
		),
		'space' => array(
			'title' => __('Style', 'dt_themes'),
			'type' => 'select',
			'options' => array('space' => 'Space', 'no-space' => 'No Space'),
			'default_value' => array('space')
		),
		'pt_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => "[dt_sc_one_third first]
				[dt_sc_pricing_table_item heading='Heading' button_text='Buy Now' button_link='#' price='$15' per='month' target='_blank' class='' selected]
				<ul>
				<li>Text</li>
				<li>Text</li>
				<li>Text</li>
				</ul>
				[/dt_sc_pricing_table_item]
				[/dt_sc_one_third]
				[dt_sc_one_third]
				[dt_sc_pricing_table_item heading='Heading' button_text='Buy Now' button_link='#' price='$15' per='month' target='_blank' class='']
				<ul>
				<li>Text</li>
				<li>Text</li>
				<li>Text</li>
				</ul>
				[/dt_sc_pricing_table_item]
				[/dt_sc_one_third]
				[dt_sc_one_third]
				[dt_sc_pricing_table_item heading='Heading' button_text='Buy Now' button_link='#' price='$15' per='month' target='_blank' class='']
				<ul>
				<li>Text</li>
				<li>Text</li>
				<li>Text</li>
				</ul>
				[/dt_sc_pricing_table_item]
				[/dt_sc_one_third]"
		)
	)
);

$dt_modules['general']['pricing_table_two'] = array(
	'name' => __('Pricing Table Two', 'dt_themes'),
	'tooltip' => 'Add pricing table',
	'icon_class' => 'ico-pricingtable',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => array('type2' => 'Type2'),
			'default_value' => array('type2')
		),
		'space' => array(
			'title' => __('Style', 'dt_themes'),
			'type' => 'select',
			'options' => array('space' => __('Space', 'dt_themes'), 'no-space' => __('No Space', 'dt_themes')),
			'default_value' => array('space')
		),
		'pt_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => "[dt_sc_one_third first]
					[dt_sc_pricing_table_item_two color='darkpink' heading='Self Directed Training' subtitle='Gain Without a Personal Trainer' price1='$119.99' text1='3 Months' price2='$219.99' text2='6 Months' price3='$449.99' text3='Full year Subscription' button_text='Enroll Now' button_link='#' button_size='medium' button_target='_blank' class='']
					<ul>
					<li>Text</li>
					<li>Text</li>
					<li>Text</li>
					</ul>
					[/dt_sc_pricing_table_item_two]
				[/dt_sc_one_third]

				[dt_sc_one_third]
					[dt_sc_pricing_table_item_two color='purple' heading='Personal Trainers' subtitle='Train with your Personal Trainer' ribben='Best Plan' price1='$119.99' text1='3 Months' price2='$219.99' text2='6 Months' price3='$449.99' text3='Full year Subscription' button_text='Enroll Now' button_link='#' button_size='medium' button_target='_blank' class='' selected]
					<ul>
					<li>Text</li>
					<li>Text</li>
					<li>Text</li>
					</ul>
					[/dt_sc_pricing_table_item_two]
				[/dt_sc_one_third]

				[dt_sc_one_third]
					[dt_sc_pricing_table_item_two color='skyblue' heading='Result Gainer' subtitle='Complete Training Set' price1='$119.99' text1='3 Months' price2='$219.99' text2='6 Months' price3='$449.99' text3='Full year Subscription' button_text='Enroll Now' button_link='#' button_size='medium' button_target='_blank' class='']
					<ul>
					<li>Text</li>
					<li>Text</li>
					<li>Text</li>
					</ul>
					[/dt_sc_pricing_table_item_two]
				[/dt_sc_one_third]"
		)
	)
);

$dt_modules['general']['progressbar'] = array(
	'name' => __('Progress Bar', 'dt_themes'),
	'tooltip' => 'Add different types of progres bar',
	'icon_class' => 'ico-progressbar',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $progressbar_types,
			'default_value' => array('standard')
		),
		'color' => array(
			'title' => __('Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#e0316f'
		),
		'value' => array(
			'title' => __('Value', 'dt_themes'),
			'type' => 'text',
			'default_value' => 65
		),
		'content' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor'
		)
	)
);

$dt_modules['general']['progressbar'] = array(
	'name' => __('Progress Bar', 'dt_themes'),
	'tooltip' => 'Add different types of progres bar',
	'icon_class' => 'ico-progressbar',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $progressbar_types,
			'default_value' => array('standard')
		),
		'color' => array(
			'title' => __('Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#e0316f'
		),
		'value' => array(
			'title' => __('Value', 'dt_themes'),
			'type' => 'text',
			'default_value' => 65
		),
		'content' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor'
		)
	)
);

$dt_modules['general']['donutchart_small'] = array(
	'name' => __('Progress Round Small', 'dt_themes'),
	'tooltip' => __('Use this module to add progress round', 'dt_themes'),
	'icon_class' => 'ico-donutchart',
	'options' => array(
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#f5f5f5'
		),
		'fgcolor' => array(
			'title' => __('Foreground Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#9bb70d'
		),
		'percent' => array(
			'title' => __('Percent', 'dt_themes'),
			'type' => 'text',
			'default_value' => 70
		),
		'text' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text'
		)
	)
);

$dt_modules['general']['donutchart_medium'] = array(
	'name' => __('Progress Round Medium', 'dt_themes'),
	'tooltip' => __('Use this module to add progress round', 'dt_themes'),
	'icon_class' => 'ico-donutchart',
	'options' => array(
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#f5f5f5'
		),
		'fgcolor' => array(
			'title' => __('Foreground Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#9bb70d'
		),
		'percent' => array(
			'title' => __('Percent', 'dt_themes'),
			'type' => 'text',
			'default_value' => 65
		),
		'text' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text'
		)
	)
);

$dt_modules['general']['donutchart_large'] = array(
	'name' => __('Progress Round Large', 'dt_themes'),
	'tooltip' => __('Use this module to add progress round', 'dt_themes'),
	'icon_class' => 'ico-donutchart',
	'options' => array(
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Lorem'
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#f5f5f5'
		),
		'fgcolor' => array(
			'title' => __('Foreground Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#9bb70d'
		),
		'percent' => array(
			'title' => __('Percent', 'dt_themes'),
			'type' => 'text',
			'default_value' => 50
		),
		'text' => array(
			'title' => __('Text', 'dt_themes'),
			'type' => 'text'
		)
	)
);

$dt_modules['general']['doshortcode_donut_morris'] = array(
	'name' => __('Donut Chart', 'dt_themes'),
	'tooltip' => 'Use this module to display donutchart',
	'icon_class' => 'ico-donutchart',
	'options' => array(
		'dc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_donutchart_morris color="#9bb70d"]<br>
					[dt_sc_morris_label label="PHP" value="25" /]<br>
					[dt_sc_morris_label label="WordPress" value="55" /]<br>
					[dt_sc_morris_label label="HTML" value="20" /]<br>
				[/dt_sc_donutchart_morris]'
		)
	)
);

$dt_modules['general']['doshortcode_pie_chart'] = array(
	'name' => __('PIE Chart', 'dt_themes'),
	'tooltip' => 'Use this module to display piechart',
	'icon_class' => 'ico-donutchart',
	'options' => array(
		'pc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_pie_chart]<br>
					[dt_sc_pie_data label="PHP" value="25" /]<br>
					[dt_sc_pie_data label="WordPress" value="35" /]<br>
					[dt_sc_pie_data label="CSS" value="30" /]<br>
					[dt_sc_pie_data label="HTML" value="20" /]<br>
				[/dt_sc_pie_chart]'
		)
	)
);

$dt_modules['general']['tabs_horizontal'] = array(
	'name' => __('Tabs - Horizontal', 'dt_themes'),
	'tooltip' => 'Add horizontal tabs',
	'icon_class' => 'ico-tabs',
	'options' => array(

		'th_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '<br>[dt_sc_tab title="Tab1"]<br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
								[/dt_sc_tab]<br>
								
								<br>[dt_sc_tab title="Tab2"]<br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>[/dt_sc_tab]<br>
								
								<br>[dt_sc_tab title="Tab3"]<br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>[/dt_sc_tab]<br>'
		)
	)
);

$dt_modules['general']['tabs_vertical'] = array(
	'name' => __('Tabs - Vertical', 'dt_themes'),
	'tooltip' => 'Add vertical tabs',
	'icon_class' => 'ico-tabs',
	'options' => array(
		'tv_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '<br>[dt_sc_tab title="Tab1"]<br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
								[/dt_sc_tab]<br>
								
								<br>[dt_sc_tab title="Tab2"]<br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>[/dt_sc_tab]<br>
								
								<br>[dt_sc_tab title="Tab3"]<br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>[/dt_sc_tab]<br>'
		)
	)
);

$dt_modules['general']['tabs_vertical_right'] = array(
	'name' => __('Tabs - Vertical Right', 'dt_themes'),
	'tooltip' => 'Add vertical right tabs',
	'icon_class' => 'ico-tabs',
	'options' => array(
		'tv_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '<br>[dt_sc_tab title="Tab1"]<br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
								[/dt_sc_tab]<br>
								
								<br>[dt_sc_tab title="Tab2"]<br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>[/dt_sc_tab]<br>
								
								<br>[dt_sc_tab title="Tab3"]<br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>[/dt_sc_tab]<br>'
		)
	)
);

$dt_modules['general']['tabs_vertical_with_icon'] = array(
	'name' => __('Tabs - Vertical with Icon', 'dt_themes'),
	'tooltip' => 'Add vertical tabs with icon',
	'icon_class' => 'ico-tabs',
	'options' => array(
		'tv_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '<br>[dt_sc_tab title="Tab1" icon="home"]<br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
								[/dt_sc_tab]<br>
								
								<br>[dt_sc_tab title="Tab2" icon="gift"]<br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>[/dt_sc_tab]<br>
								
								<br>[dt_sc_tab title="Tab3" icon="support"]<br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>[/dt_sc_tab]<br>'
		)
	)
);

$dt_modules['general']['tabs_vertical_right_with_icon'] = array(
	'name' => __('Tabs - Vertical Right with Icon', 'dt_themes'),
	'tooltip' => 'Add vertical right tabs with icon',
	'icon_class' => 'ico-tabs',
	'options' => array(
		'tv_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '<br>[dt_sc_tab title="Tab1" icon="home"]<br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
								[/dt_sc_tab]<br>
								
								<br>[dt_sc_tab title="Tab2" icon="gift"]<br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>[/dt_sc_tab]<br>
								
								<br>[dt_sc_tab title="Tab3" icon="support"]<br>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>[/dt_sc_tab]<br>'
		)
	)
);

$dt_modules['general']['icon_box'] = array(
	'name' => __('Icon Box', 'dt_themes'),
	'tooltip' => __('Use this module to add icon box', 'dt_themes'),
	'icon_class' => 'ico-iconbox',
	'separatecolumns' => 'true',
	'options' => array(
		'type' => array(
			'title' => __('Types', 'dt_themes'),
			'type' => 'select',
			'options' => $icon_box_types,
			'default_value' => array('type1')
		),
		'fontawesome_icon' => array(
			'title' => __('Fontawesome Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'flat_icon' => array(
			'title' => __('Flat Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'custom_img_class' => array(
			'title' => __('Custom Image Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'custom_img_hover' => array(
			'title' => __('Custom Image Icon', 'dt_themes'),
			'type' => 'upload',
			'default_value' => ''
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Well Trained Professionals'
		),
		'subtitle' => array(
			'title' => __('Sub Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'link' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),
		'target' => array(
			'title' => __('Target', 'dt_themes'),
			'type' => 'select',
			'options' => $page_targets,
			'default_value' => array('_blank')
		),
		'class' => array(
			'title' => __('Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'ib_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Nunc at pretium est curabitur commodo leac est venenatis egestas sed aliquet auguevelit.'
		)
	)
);

$dt_modules['general']['icon_box_colored'] = array(
	'name' => __('Icon Box Colored', 'dt_themes'),
	'tooltip' => 'Add the colored icon box',
	'icon_class' => 'ico-iconbox-colored',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $colored_icon_box_types,
			'default_value' => array('type1')
		),
		'fontawesome_icon' => array(
			'title' => __('Fontawesome Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'book'
		),
		'custom_icon' => array(
			'title' => __('Custom Icons', 'dt_themes'),
			'type' => 'upload',
			'default_value' => ''
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Well Trained Professionals'
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker',
			'default_value' => '#087dc2'
		),
		'ibc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => "<p> Nunc at pretium est curabitur commodo leac est venenatis egestas sed aliquet auguevelit. </p><br>[dt_sc_button link='#' size='small' target='_blank']Know More[/dt_sc_button]"
		)
	)
);

$dt_modules['general']['titled_box'] = array(
	'name' => __('Titled Box', 'dt_themes'),
	'tooltip' => 'Add titled box and different types of messgae box',
	'icon_class' => 'ico-box',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $box_types,
			'default_value' => array('titled-box')
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Title Comes Here'
		),
		'icon' => array(
			'title' => __('Fontawesome Icon', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'fa-cloud'
		),
		'variation' => array(
			'title' => __('Variation', 'dt_themes'),
			'type' => 'select',
			'options' => $variations,
			'default_value' => array()
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker'
		),
		'textcolor' => array(
			'title' => __('Text Color', 'dt_themes'),
			'type' => 'colorpicker'
		),
		'box_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos.,'
		)
	)
);

$dt_modules['general']['doshortcode_toggledefault'] = array(
	'name' => __('Toggle Default', 'dt_themes'),
	'tooltip' => 'Add default toggles',
	'icon_class' => 'ico-toggle',
	'options' => array(
		'td_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_toggle title="Toggle 1"]<br>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							[/dt_sc_toggle]<br>

							[dt_sc_toggle title="Toggle 2"]<br>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							[/dt_sc_toggle]<br>

							[dt_sc_toggle title="Toggle 3"]<br>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							[/dt_sc_toggle]'
		)
	)
);

$dt_modules['general']['doshortcode_toggleframed'] = array(
	'name' => __('Toggle Framed', 'dt_themes'),
	'tooltip' => 'Add framed toggles',
	'icon_class' => 'ico-toggle',
	'options' => array(
		'tf_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_toggle_framed title="Toggle 1"]<br>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							[/dt_sc_toggle_framed]<br>

							[dt_sc_toggle_framed title="Toggle 2"]<br>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
							[/dt_sc_toggle_framed]<br>

							[dt_sc_toggle_framed title="Toggle 3"]<br>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
						[/dt_sc_toggle_framed]'
		)
	)
);

$dt_modules['general']['tooltip'] = array(
	'name' => __('Tooltip', 'dt_themes'),
	'tooltip' => 'Add tooltip with different positions',
	'icon_class' => 'ico-pullquote',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $tooltip_types,
			'default_value' => array('default')
		),
		'tooltip' => array(
			'title' => __('Tooltip Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Consectetur adipisicing elit'
		),
		'position' => array(
			'title' => __('Position', 'dt_themes'),
			'type' => 'select',
			'options' => $tooltip_positions,
			'default_value' => array('top')
		),
		'href' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),
		'target' => array(
			'title' => __('Target', 'dt_themes'),
			'type' => 'select',
			'options' => $page_targets,
			'default_value' => array('_blank')
		),
		'bgcolor' => array(
			'title' => __('Background Color', 'dt_themes'),
			'type' => 'colorpicker'
		),
		'textcolor' => array(
			'title' => __('Text Color', 'dt_themes'),
			'type' => 'colorpicker'
		),
		'tp_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Lorem ipsum'
		)
	)
);

$dt_modules['general']['tip_one'] = array(
	'name' => __('Tooltip Line', 'dt_themes'),
	'tooltip' => 'Add line tooltip with different positions',
	'icon_class' => 'ico-pullquote',
	'options' => array(
		'link' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),
		'position' => array(
			'title' => __('Position', 'dt_themes'),
			'type' => 'select',
			'options' => array( '' => 'Top', 'bottom' => 'Bottom' ),
			'default_value' => array('')
		),
		'text' => array(
			'title' => __('Link Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Tooltip'
		),
		'tto_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Lorem ipsum'
		)
	)
);

$dt_modules['general']['tip_two'] = array(
	'name' => __('Tooltip Box', 'dt_themes'),
	'tooltip' => 'Add box tooltip with different positions',
	'icon_class' => 'ico-pullquote',
	'options' => array(
		'link' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),
		'position' => array(
			'title' => __('Position', 'dt_themes'),
			'type' => 'select',
			'options' => array( '' => 'Top', 'bottom' => 'Bottom' ),
			'default_value' => array('')
		),
		'text' => array(
			'title' => __('Link Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Tooltip'
		),
		'ttt_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'text',
			'is_content' => true,
			'default_value' => 'Lorem ipsum'
		)
	)
);

$dt_modules['general']['tip_three'] = array(
	'name' => __('Tooltip Classic', 'dt_themes'),
	'tooltip' => 'Add classic tooltip with different positions',
	'icon_class' => 'ico-pullquote',
	'options' => array(
		'link' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => '#'
		),
		'position' => array(
			'title' => __('Position', 'dt_themes'),
			'type' => 'select',
			'options' => array( '' => 'Top', 'bottom' => 'Bottom' ),
			'default_value' => array('')
		),
		'text' => array(
			'title' => __('Link Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Tooltip'
		),
		'image' => array(
			'title' => __('Package Image', 'dt_themes'),
			'type' => 'upload',
			'default_value' => 'http://placehold.it/129x170'
		),
		'ttt_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent.'
		)
	)
);

/*  End of General Modules */

/*  Start of Unique Modules */

$dt_modules['unique']['doshortcode_team'] = array(
	'name' => __('Team I', 'dt_themes'),
	'tooltip' => 'Use this module to display team member',
	'icon_class' => 'ico-team',
	'options' => array(
		'ts_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_team_one name="Stephen Matthew" role="Gymnastics Instructor" image="http://placehold.it/130" twitter="#" facebook="#" google="#" button_text="Ask a Question" button_link="#" phone_no="+(41) 20 324 2211" /]'
		)
	)
);

$dt_modules['unique']['doshortcode_team_two'] = array(
	'name' => __('Team II', 'dt_themes'),
	'tooltip' => 'Use this module to display team member',
	'icon_class' => 'ico-team',
	'options' => array(
		'ts_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_team_two fname="Selena" lname="Kyle" role="Fitness Instructor" image="http://placehold.it/270x400" twitter="#" facebook="#" google="#" awards="5" author_known="Meditation, Yoga" exp="3+ years" /]'
		)
	)
);

$dt_modules['unique']['doshortcode_timetable'] = array(
	'name' => __('Time Table', 'dt_themes'),
	'tooltip' => __('Use this module to add timetable', 'dt_themes'),
	'icon_class' => 'ico-time',
	'options' => array(
		'tm_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_ts_wrapper title="Our Schedule"]<br>
			[dt_sc_ts_group]<br>
				[dt_sc_ts_time text="05:00 – 06:00" /]<br>
				[dt_sc_ts_work title="Warmup" link="#" author="Alan Trump" /]<br>
				[dt_sc_ts_work title="Yoga" link="#" author="James Goodwin" /]<br>
				[dt_sc_ts_work /]<br>
				[dt_sc_ts_work title="Chest" link="#" author="Kelly Wyane" /]<br>
				[dt_sc_ts_work title="Wings" link="#" author="Marlon Kate" /]<br>
				[dt_sc_ts_work title="Biceps" link="#" author="William kane" /]<br>
				[dt_sc_ts_work /]<br>
			[/dt_sc_ts_group]<br>
			[dt_sc_ts_group]<br>
				[dt_sc_ts_time text="06:00 – 07:00" /]<br>
				[dt_sc_ts_work /]<br>
				[dt_sc_ts_work title="Wings" link="#" author="Marlon Kate" /]<br>
				[dt_sc_ts_work title="Biceps" link="#" author="William kane" /]<br>
				[dt_sc_ts_work title="Warmup" link="#" author="Alan Trump" /]<br>
				[dt_sc_ts_work title="Yoga" link="#" author="James Goodwin" /]<br>
				[dt_sc_ts_work /]<br>
				[dt_sc_ts_work title="Chest" link="#" author="Kelly Wyane" /]<br>
			[/dt_sc_ts_group]<br>
			[/dt_sc_ts_wrapper]'
		)
	)
);

$dt_modules['unique']['doshortcode_testimonial_carousel'] = array(
	'name' => __('Testimonial Carousel', 'dt_themes'),
	'tooltip' => __('Use this module to add testimonial carousel', 'dt_themes'),
	'icon_class' => 'ico-testimonial',
	'options' => array(
		'tmc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_testimonial_carousel]<br>
			<ul>
				<li>[dt_sc_testimonial image="http://placehold.it/300" name="Jeniffer Aniston" role="Fitness Analyst, BELGRAM"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.[/dt_sc_testimonial]</li>
				<li>[dt_sc_testimonial image="http://placehold.it/300" name="James White" role="Fitness Enthuisast, Global Inc"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.[/dt_sc_testimonial]</li>
				<li>[dt_sc_testimonial image="http://placehold.it/300" name="Paul Jackson" role="Gymnastics Trainer, Sky Media"]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.[/dt_sc_testimonial]</li>
			</ul>
			[/dt_sc_testimonial_carousel]'
		)
	)
);

$dt_modules['unique']['doshortcode_clients_carousel'] = array(
	'name' => __('Clients Carousel', 'dt_themes'),
	'tooltip' => __('Use this module to add clients carousel', 'dt_themes'),
	'icon_class' => 'ico-testimonial',
	'options' => array(
		'cc_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_clients_carousel]<br>
				<ul>
					<li>[dt_sc_client_item title="The National Physical Activity." link="#" image="http://placehold.it/247x67" /]</li>
					<li>[dt_sc_client_item title="Donec tincidunt sed mauris." link="#" image="http://placehold.it/247x67" /]</li>
					<li>[dt_sc_client_item title="Nam viverra nunc eu arcum." link="#" image="http://placehold.it/247x67" /]</li>
					<li>[dt_sc_client_item title="Vestibulum feugiat lacus." link="#" image="http://placehold.it/247x67" /]</li>
					<li>[dt_sc_client_item title="Quisque consequat pulvinar." link="#" image="http://placehold.it/247x67" /]</li>
				</ul>
			[/dt_sc_clients_carousel]'
		)
	)
);

$dt_modules['unique']['blog_posts'] = array(
	'name' => __('Blog Posts', 'dt_themes'),
	'tooltip' => __('Use this module to display blog posts', 'dt_themes'),
	'icon_class' => 'ico-recentposts',
	'options' => array(
		'excerpt_length' => array(
			'title' => __('Excerpt Length', 'dt_themes'),
			'type' => 'text',
			'default_value' => '25'
		),
		'show_meta' => array(
			'title' => __('Show Meta', 'dt_themes'),
			'type' => 'select',
			'options' => array( 'true' => 'Yes (Default)', 'false' => 'No'),
			'default_value' => array('true')
		),
		'limit' => array(
			'title' => __('Limit', 'dt_themes'),
			'type' => 'text',
			'default_value' => '3'
		),
		'categories' => array(
			'title' => __('Post Categories', 'dt_themes'),
			'type' => 'text',
			'default_value' => '2,4'
		),
		'posts_column' => array(
			'title' => __('Columns', 'dt_themes'),
			'type' => 'select',
			'options' => array( 'one-column' => 'I Column', 'one-half-column' => 'II Columns', 'one-third-column' => 'III Columns'),
			'default_value' => array('one-third-column')
		),
	)
);

$dt_modules['unique']['recent_posts'] = array(
	'name' => __('Recent Posts', 'dt_themes'),
	'tooltip' => __('Use this module to display recent posts', 'dt_themes'),
	'icon_class' => 'ico-recentposts',
	'options' => array(
		'limit' => array(
			'title' => __('Limit', 'dt_themes'),
			'type' => 'text',
			'default_value' => '3'
		),
		'excerpt_length' => array(
			'title' => __('Excerpt Length', 'dt_themes'),
			'type' => 'text',
			'default_value' => '25'
		),
	)
);

$dt_modules['unique']['gallery_items'] = array(
	'name' => __('Recent Gallery Items', 'dt_themes'),
	'tooltip' => __('Use this module to add recent gallery items', 'dt_themes'),
	'icon_class' => 'ico-portfolio-item',
	'options' => array(
		'limit' => array(
			'title' => __('Limit', 'dt_themes'),
			'type' => 'text',
			'default_value' => '4'
		),
		'categories' => array(
			'title' => __('Gallery Categories', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'posts_column' => array(
			'title' => __('Columns', 'dt_themes'),
			'type' => 'select',
			'options' => array( 'one-half-column' => __('Two Column', 'dt_themes'), 'one-third-column' => __('Three Column', 'dt_themes'), 'one-fourth-column' => __('Four Column', 'dt_themes') ),
			'default_value' => array('one-half-column')
		),
		'filter' => array(
			'title' => __('Show Filter','dt_themes'),
			'type' => 'select',
			'options' => array( 'true' => __('Yes (Default)', 'dt_themes'), 'false' => __('No', 'dt_themes')),
			'default_value' => array("true")
		),
		'fullwidth' => array(
			'title' => __('Enable Fullwidth','dt_themes'),
			'type' => 'select',
			'options' => array( 'true' => __('Yes', 'dt_themes'), 'false' => __('No (Default)', 'dt_themes')),
			'default_value' => array("false")
		)
	)
);

$dt_modules['unique']['gallery_item'] = array(
	'name' => __('Gallery Item Slider', 'dt_themes'),
	'tooltip' => __('Use this module to add gallery item slider', 'dt_themes'),
	'icon_class' => 'ico-portfolio-item',
	'options' => array(
		'id' => array(
			'title' => __('Gallery Item ID', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		)
	)
);

$dt_modules['unique']['workout_items'] = array(
	'name' => __('Recent Workout Items', 'dt_themes'),
	'tooltip' => __('Use this module to add recent workout items', 'dt_themes'),
	'icon_class' => 'ico-video',
	'options' => array(
		'excerpt_length' => array(
			'title' => __('Excerpt Length', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'show_meta' => array(
			'title' => __('Show Meta', 'dt_themes'),
			'type' => 'select',
			'options' => array( 'true' => __('Yes (Default)', 'dt_themes'), 'false' => __('No', 'dt_themes')),
			'default_value' => array('true')
		),
		'limit' => array(
			'title' => __('Limit', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'categories' => array(
			'title' => __('Workout Categories', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'posts_column' => array(
			'title' => __('Columns', 'dt_themes'),
			'type' => 'select',
			'options' => array( 'one-half-column' => __('Two Column', 'dt_themes'), 'one-third-column' => __('Three Column', 'dt_themes') ),
			'default_value' => array('one-third-column')
		)
	)
);

$dt_modules['unique']['workout_plan'] = array(
	'name' => __('Workout Plan', 'dt_themes'),
	'tooltip' => __('Use this module to add workout plan', 'dt_themes'),
	'icon_class' => 'ico-greetings',
	'options' => array(
		'step_no' => array(
			'title' => __('Step No', 'dt_themes'),
			'type' => 'text',
			'default_value' => '1'
		),
		'step_sup' => array(
			'title' => __('Step (st)', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'st'
		),
		'step_name' => array(
			'title' => __('Step Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Steps'
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'link' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'wplan_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.'
		)
	)
);

$dt_modules['unique']['workouts_list'] = array(
	'name' => __('Workouts List', 'dt_themes'),
	'tooltip' => __('Use this module to add workouts list', 'dt_themes'),
	'icon_class' => 'ico-video',
	'options' => array(
		'excerpt_length' => array(
			'title' => __('Excerpt Length', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'limit' => array(
			'title' => __('Limit', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'categories' => array(
			'title' => __('Workout Categories', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'posts_column' => array(
			'title' => __('Columns', 'dt_themes'),
			'type' => 'select',
			'options' => array( 'one-half-column' => __('Two Column', 'dt_themes'), 'one-third-column' => __('Three Column', 'dt_themes'), 'one-fourth-column' => __('Four Column', 'dt_themes') ),
			'default_value' => array('one-third-column')
		)
	)
);

$dt_modules['unique']['package_item'] = array(
	'name' => __('Package Item', 'dt_themes'),
	'tooltip' => __('Use this module to add package item', 'dt_themes'),
	'icon_class' => 'ico-greetings',
	'separatecolumns' => 'true',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => array( '' => __('Default', 'dt_themes'), 's2member' => __('S2 Member', 'dt_themes') ),
			'default_value' => ''
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'subtitle' => array(
			'title' => __('Sub Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'image' => array(
			'title' => __('Package Image', 'dt_themes'),
			'type' => 'upload',
			'default_value' => 'http://placehold.it/370x220'
		),
		'button_text' => array(
			'title' => __('Button Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => __('Enroll Now', 'dt_themes'),
		),
		'button_link' => array(
			'title' => __('Button Link', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'start_price' => array(
			'title' => __('Starting Price', 'dt_themes'),
			'type' => 'text',
			'default_value' => '89.99'
		),
		'start_duration' => array(
			'title' => __('Initial Duration', 'dt_themes'),
			'type' => 'text',
			'default_value' => '6'
		),
		'start_dwmy' => array(
			'title' => __('Duration Tag', 'dt_themes'),
			'type' => 'select',
			'options' => array( 'D' => __('Days', 'dt_themes'), 'W' => __('Weeks', 'dt_themes'), 'M' => __('Months', 'dt_themes'), 'Y' => __('Years', 'dt_themes') ),
			'default_value' => array('M')
		),
		'recurring_price' => array(
			'title' => __('Recurring Price', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'recurring_duration' => array(
			'title' => __('Recurring Duration', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'recurring_dwmy' => array(
			'title' => __('Duration Tag', 'dt_themes'),
			'type' => 'select',
			'options' => array( 'D' => __('Days', 'dt_themes'), 'W' => __('Weeks', 'dt_themes'), 'M' => __('Months', 'dt_themes'), 'Y' => __('Years', 'dt_themes') ),
			'default_value' => ''
		),
		'pic_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_fancy_ul style="circle-o"]<ul><li>Lorem ipsum dolor sit</li><li>Praesent convallis nibh</li><li>Phasellus auctor augue</li></ul>[/dt_sc_fancy_ul]'
		)
	)
);

$dt_modules['unique']['upcoming_events'] = array(
	'name' => __('Upcoming Events', 'dt_themes'),
	'tooltip' => __('Use this module to list upcoming events', 'dt_themes'),
	'icon_class' => 'ico-events',
	'options' => array(
		'limit' => array(
			'title' => __('Limit', 'dt_themes'),
			'type' => 'text',
			'default_value' => '-1'
		),
		'excerpt_length' => array(
			'title' => __('Excerpt Length', 'dt_themes'),
			'type' => 'text',
			'default_value' => '25'
		)
	)
);

$dt_modules['unique']['timetable_events'] = array(
	'name' => __('TimeTable Events', 'dt_themes'),
	'tooltip' => __('Use this module to add timetable events', 'dt_themes'),
	'icon_class' => 'ico-events',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => array( '' => 'Type I', 'type2' => 'Type II' )
		),
		'excerpt_length' => array(
			'title' => __('Excerpt Length', 'dt_themes'),
			'type' => 'text',
			'default_value' => '22'
		),
		'limit' => array(
			'title' => __('Limit', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'categories' => array(
			'title' => __('Event Categories', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'posts_column' => array(
			'title' => __('Columns', 'dt_themes'),
			'type' => 'select',
			'options' => array( 'one-half-column' => __('Two Column', 'dt_themes'), 'one-third-column' => __('Three Column', 'dt_themes'), 'one-fourth-column' => __('Four Column', 'dt_themes') ),
			'default_value' => array('one-third-column')
		)
	)
);

$dt_modules['unique']['subscribe_form'] = array(
	'name' => __('Newsletter Form', 'dt_themes'),
	'tooltip' => __('Use this module to show subscribe form', 'dt_themes'),
	'icon_class' => 'ico-newsletter-section',
	'options' => array(
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'notify' => array(
			'title' => __('Notify Text', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'list_id' => array(
			'title' => __('List ID', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		)
	)
);

$dt_modules['unique']['contact_form'] = array(
	'name' => __('Contact Form', 'dt_themes'),
	'tooltip' => __('Use this module to display contact form', 'dt_themes'),
	'icon_class' => 'ico-newsletter-section',
	'options' => array(
		'to_email' => array(
			'title' => __('Recipient Email', 'dt_themes'),
			'type' => 'text',
			'default_value' => get_bloginfo('admin_email')
		),
		'success_msg' => array(
			'title' => __('Success Message', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Thanks for Contacting Us, We will call back to you soon.'
		),
		'error_msg' => array(
			'title' => __('Error Message', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Sorry your message not sent, Try again Later.'
		)
	)
);

$dt_modules['unique']['doshortcode_social_profile'] = array(
	'name' => __('Social Profile', 'dt_themes'),
	'tooltip' => __('Use this module to add social icons', 'dt_themes'),
	'icon_class' => 'ico-socials',
	'options' => array(
		'nl_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_social target="_blank" /]'
		)
	)
);

$dt_modules['unique']['doshortcode_icon_service'] = array(
	'name' => __('Icon Service', 'dt_themes'),
	'tooltip' => __('Use this module to add icon service', 'dt_themes'),
	'icon_class' => 'ico-iconbox',
	'options' => array(
		'nl_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_icon_service title="Best Results Guranteed" subtitle="If you train with our trainers" image="http://placehold.it/140" button_text="Know More" link="#"]
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
			[/dt_sc_icon_service]'
		)
	)
);

$dt_modules['unique']['doshortcode_info_title'] = array(
	'name' => __('Info Title', 'dt_themes'),
	'tooltip' => __('Use this module to add info title', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'nl_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_info_title tag="h2" number="1" text="Lorem ipsum dolor" /]'
		)
	)
);

$dt_modules['unique']['doshortcode_section_title'] = array(
	'name' => __('Section Title', 'dt_themes'),
	'tooltip' => __('Use this module to add section title', 'dt_themes'),
	'icon_class' => 'ico-headings',
	'options' => array(
		'nl_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_section_title tag="h2" text="Lorem ipsum dolor" /]'
		)
	)
);

$dt_modules['unique']['doshortcode_service_pack'] = array(
	'name' => __('Feature Content', 'dt_themes'),
	'tooltip' => __('Use this module to add feature content', 'dt_themes'),
	'icon_class' => 'ico-iconbox',
	'options' => array(
		'nl_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_one_third first type="type1"]<br>
				[dt_service_pack title1="Lorem ipsum" title2="Class taciti"]<br>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br>
				[/dt_service_pack]<br>
			[/dt_sc_one_third]'
		)
	)
);

$dt_modules['unique']['doshortcode_working_hours'] = array(
	'name' => __('Working Hours', 'dt_themes'),
	'tooltip' => __('Use this module to add working hours', 'dt_themes'),
	'icon_class' => 'ico-time',
	'options' => array(
		'wh_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_working_hours text="<b>Note:</b> At vero eos et accusamus dignissimos ducimus will be presented."]<br>
				[dt_sc_work_hour day="Monday" time="16:00 - 20:00"]<br>
				[dt_sc_work_hour day="Tuesday" time="16:00 - 20:00"]<br>
				[dt_sc_work_hour day="Wednesday" time="17:00 - 20:00"]<br>
				[dt_sc_work_hour day="Thursday" time="17:00 - 20:00"]<br>
				[dt_sc_work_hour day="Friday" time="Holiday"]<br>
				[dt_sc_work_hour day="Saturday" time="10:00 - 20:00"]<br>
				[dt_sc_work_hour day="Sunday" time="10:00 - 14:00"]<br>
			[/dt_sc_working_hours]'
		)
	)
);

$dt_modules['unique']['running_number'] = array(
	'name' => __('Running Number', 'dt_themes'),
	'tooltip' => __('Use this module to add running number', 'dt_themes'),
	'icon_class' => 'ico-timeline',
	'options' => array(
		'value' => array(
			'title' => __('Value', 'dt_themes'),
			'type' => 'text',
			'default_value' => 3400
		),
		'title' => array(
			'title' => __('Title', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Trained Professionals'
		),
		'rn_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Nunc at pretium est curabitur commodo leac est venenatis egestas sed aliquet auguevelit.'
		)
	)
);

$dt_modules['unique']['callout_box'] = array(
	'name' => __('Callout Box', 'dt_themes'),
	'tooltip' => __('Use this module to add callout box', 'dt_themes'),
	'icon_class' => 'ico-iconbox',
	'options' => array(
		'type' => array(
			'title' => __('Type', 'dt_themes'),
			'type' => 'select',
			'options' => $blocquote_types,
			'default_value' => array('type1')
		),
		'cb_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => '[dt_sc_h2 class="aligncenter"]Lorem ipsum dolor sit amet[/dt_sc_h2]
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
								[dt_sc_hr_invisible_small /] <a href="#">Class aptent taciti sociosqu ads</a> [dt_sc_hr_invisible_small /][dt_sc_clear /]<br>
								[dt_sc_button type="type1" link="#" size="medium"]View Programs[/dt_sc_button]<br>
								[dt_sc_button type="type1" link="#" size="medium"]Sign Up Now[/dt_sc_button]<br>'
		)
	)
);

$dt_modules['unique']['bmi_calc'] = array(
	'name' => __('BMI Calc', 'dt_themes'),
	'tooltip' => __('Use this module to add bmi calculater', 'dt_themes'),
	'icon_class' => 'ico-planavisit',
	'options' => array(
		'view_link' => array(
			'title' => __('Link', 'dt_themes'),
			'type' => 'text'
		)
	)
);

/*  End of Unique Modules */

/*  Start of Others Modules */

$dt_modules['others']['clear'] = array(
	'name' => __('Clear', 'dt_themes'),
	'tooltip' => __('Add this module to add space between contents', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_border'] = array(
	'name' => __('Bordered Horizontal Rule', 'dt_themes'),
	'tooltip' => __('Use this module to add bordered horizontal rule', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr'] = array(
	'name' => __('Horizontal Rule', 'dt_themes'),
	'tooltip' => __('Use this module to add horizontal rule', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_medium'] = array(
	'name' => __('Horizontal Rule Medium', 'dt_themes'),
	'tooltip' => __('Use this module to add medium horizontal rule', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_large'] = array(
	'name' => __('Horizontal Rule Large', 'dt_themes'),
	'tooltip' => __('Use this module to add large horizontal rule', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_top'] = array(
	'name' => __('Horizontal Rule With Top Link', 'dt_themes'),
	'tooltip' => __('Use this module to add horizontal rule with top link', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_invisible'] = array(
	'name' => __('Whitespace', 'dt_themes'),
	'tooltip' => __('Use this module to add whitespace', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_invisible_small'] = array(
	'name' => __('Whitespace Small', 'dt_themes'),
	'tooltip' => __('Use this module to add small whitespace', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_invisible_medium'] = array(
	'name' => __('Whitespace Medium', 'dt_themes'),
	'tooltip' => __('Use this module to add medium whitespace', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['hr_invisible_large'] = array(
	'name' => __('Whitespace Large', 'dt_themes'),
	'tooltip' => __('Use this module to add large whitespace', 'dt_themes'),
	'icon_class' => 'ico-divider',
	'disable_resize' => true,
);

$dt_modules['others']['address'] = array(
	'name' => __('Address', 'dt_themes'),
	'tooltip' => __('Use this module to add address', 'dt_themes'),
	'icon_class' => 'ico-address',
	'options' => array(
		'line1' => array(
			'title' => __('Line 1', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'No: 58 A, East Madison St'
		),
		'line2' => array(
			'title' => __('Line 2', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Baltimore, MD, USA'
		),
		'line3' => array(
			'title' => __('Line 3', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'line4' => array(
			'title' => __('Line 4', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'class' => array(
			'title' => __('CSS Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		)
	)
);

$dt_modules['others']['timing'] = array(
	'name' => __('Timing', 'dt_themes'),
	'tooltip' => __('Use this module to add phone', 'dt_themes'),
	'icon_class' => 'ico-timeline',
	'options' => array(
		'line1' => array(
			'title' => __('Line 1', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Monday to Saturday 04:00 - 20:00'
		),
		'line2' => array(
			'title' => __('Line 2', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'Sunday - Holiday'
		),
		'line3' => array(
			'title' => __('Line 3', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'line4' => array(
			'title' => __('Line 4', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		),
		'class' => array(
			'title' => __('CSS Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		)
	)
);

$dt_modules['others']['phone'] = array(
	'name' => __('Phone', 'dt_themes'),
	'tooltip' => __('Use this module to add phone', 'dt_themes'),
	'icon_class' => 'ico-phone',
	'options' => array(
		'phone' => array(
			'title' => __('Phone No', 'dt_themes'),
			'type' => 'text',
			'default_value' => '+1 200 258 2145'
		),
		'class' => array(
			'title' => __('CSS Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		)
	)
);

$dt_modules['others']['mobile'] = array(
	'name' => __('Mobile', 'dt_themes'),
	'tooltip' => __('Use this module to add mobile', 'dt_themes'),
	'icon_class' => 'ico-mobile',
	'options' => array(
		'mobile' => array(
			'title' => __('Mobile No', 'dt_themes'),
			'type' => 'text',
			'default_value' => '+91 99548 65214'
		),
		'class' => array(
			'title' => __('CSS Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		)
	)
);

$dt_modules['others']['fax'] = array(
	'name' => __('Fax', 'dt_themes'),
	'tooltip' => __('Use this module to add fax', 'dt_themes'),
	'icon_class' => 'ico-fax',
	'options' => array(
		'fax' => array(
			'title' => __('Fax No', 'dt_themes'),
			'type' => 'text',
			'default_value' => '+1 100 458 2345'
		),
		'class' => array(
			'title' => __('CSS Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		)
	)
);

$dt_modules['others']['email'] = array(
	'name' => __('Email', 'dt_themes'),
	'tooltip' => __('Use this module to add email', 'dt_themes'),
	'icon_class' => 'ico-email',
	'options' => array(
		'emailid' => array(
			'title' => __('Mail ID', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'yourname@somemail.com'
		),
		'class' => array(
			'title' => __('CSS Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		)
	)
);

$dt_modules['others']['web'] = array(
	'name' => __('Web', 'dt_themes'),
	'tooltip' => __('Use this module to add website', 'dt_themes'),
	'icon_class' => 'ico-web',
	'options' => array(
		'url' => array(
			'title' => __('URL', 'dt_themes'),
			'type' => 'text',
			'default_value' => 'http://www.google.com'
		),
		'class' => array(
			'title' => __('CSS Class', 'dt_themes'),
			'type' => 'text',
			'default_value' => ''
		)
	)
);

$dt_modules['others']['h1'] = array(
	'name' => __('H1', 'dt_themes'),
	'tooltip' => 'Add title H1',
	'icon_class' => 'ico-headings',
	'options' => array(
		'class' => array(
			'title' => __('Align', 'dt_themes'),
			'type' => 'select',
			'options' => array('' => __('Align Left', 'dt_themes'), 'aligncenter' => __('Align Center', 'dt_themes'), 'alignright' => __('Align Right', 'dt_themes')),
			'default_value' => array('')
		),
		'h1_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet'
		)
	)
);

$dt_modules['others']['h2'] = array(
	'name' => __('H2', 'dt_themes'),
	'tooltip' => 'Add title H2',
	'icon_class' => 'ico-headings',
	'options' => array(
		'class' => array(
			'title' => __('Align', 'dt_themes'),
			'type' => 'select',
			'options' => array('' => __('Align Left', 'dt_themes'), 'aligncenter' => __('Align Center', 'dt_themes'), 'alignright' => __('Align Right', 'dt_themes')),
			'default_value' => array('')
		),
		'h2_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet'
		)
	)
);

$dt_modules['others']['h3'] = array(
	'name' => __('H3', 'dt_themes'),
	'tooltip' => 'Add title H3',
	'icon_class' => 'ico-headings',
	'options' => array(
		'class' => array(
			'title' => __('Align', 'dt_themes'),
			'type' => 'select',
			'options' => array('' => __('Align Left', 'dt_themes'), 'aligncenter' => __('Align Center', 'dt_themes'), 'alignright' => __('Align Right', 'dt_themes')),
			'default_value' => array('')
		),
		'h3_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet'
		)
	)
);

$dt_modules['others']['h4'] = array(
	'name' => __('H4', 'dt_themes'),
	'tooltip' => 'Add title H4',
	'icon_class' => 'ico-headings',
	'options' => array(
		'class' => array(
			'title' => __('Align', 'dt_themes'),
			'type' => 'select',
			'options' => array('' => __('Align Left', 'dt_themes'), 'aligncenter' => __('Align Center', 'dt_themes'), 'alignright' => __('Align Right', 'dt_themes')),
			'default_value' => array('')
		),
		'h4_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet'
		)
	)
);

$dt_modules['others']['h5'] = array(
	'name' => __('H5', 'dt_themes'),
	'tooltip' => 'Add title H5',
	'icon_class' => 'ico-headings',
	'options' => array(
		'class' => array(
			'title' => __('Align', 'dt_themes'),
			'type' => 'select',
			'options' => array('' => __('Align Left', 'dt_themes'), 'aligncenter' => __('Align Center', 'dt_themes'), 'alignright' => __('Align Right', 'dt_themes')),
			'default_value' => array('')
		),
		'h5_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet'
		)
	)
);

$dt_modules['others']['h6'] = array(
	'name' => __('H6', 'dt_themes'),
	'tooltip' => 'Add title H6',
	'icon_class' => 'ico-headings',
	'options' => array(
		'class' => array(
			'title' => __('Align', 'dt_themes'),
			'type' => 'select',
			'options' => array('' => __('Align Left', 'dt_themes'), 'aligncenter' => __('Align Center', 'dt_themes'), 'alignright' => __('Align Right', 'dt_themes')),
			'default_value' => array('')
		),
		'h6_content' => array(
			'title' => __('Content', 'dt_themes'),
			'type' => 'wp_editor',
			'is_content' => true,
			'default_value' => 'Lorem ipsum dolor sit amet'
		)
	)
);

/*  End of Others Modules */?>
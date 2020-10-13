(function() {

	var dummy_conent = "Lorem ipsum dolor sit amet, consectetur"
				+ " adipiscing elit. Morbi hendrerit elit turpis,"
				+ " a porttitor tellus sollicitudin at."
				+ " Class aptent taciti sociosqu ad litora "
				+ " torquent per conubia nostra,"
				+ " per inceptos himenaeos.";

	var dummy_tabs = '<br>[dt_sc_tab title="Tab 1"]'
					+ "<br>" + dummy_conent + "<br>" + '[/dt_sc_tab]' + "<br>"
					+ '[dt_sc_tab title="Tab 2"]' + "<br>"
					+ dummy_conent + "<br>" + '[/dt_sc_tab]' + "<br>"
					+ '[dt_sc_tab title="Tab 3"]' + "<br>"
					+ dummy_conent + "<br>" + '[/dt_sc_tab]<br>';
					
	var dummy_tabs_icon = '<br>[dt_sc_tab title="What is Lorem Ipsum?" icon="home"]'
			+ "<br>" + dummy_conent + "<br>" + '[/dt_sc_tab]' + "<br>"
			+ '[dt_sc_tab title="Where does it come from?" icon="gift"]' + "<br>"
			+ dummy_conent + "<br>" + '[/dt_sc_tab]' + "<br>"
			+ '[dt_sc_tab title="Why do we use it?" icon="support"]' + "<br>"
			+ dummy_conent + "<br>" + '[/dt_sc_tab]<br>';

	var testimonal = '[dt_sc_testimonial image="http://placehold.it/300" name="Jeniffer Aniston" role="Fitness Enthuisast, BELGRAM"]'+dummy_conent+'[/dt_sc_testimonial]';

	// add DTCoreShortcodePlugin plugin
	tinymce.PluginManager.add("DTCoreShortcodePlugin",function( editor , url ) {
		
		editor.on('init', function() {

			editor.addCommand("scnOpenDialog", function(obj) {
				scnSelectedShortcodeType = obj.identifier;
				jQuery.get(url + "/dialog.php", function(b) {
					jQuery("#scn-dialog").remove();
					jQuery("body").append(b);
					jQuery("#scn-dialog").hide();
					var f = jQuery(window).width();
					b = jQuery(window).height();
					f = 720 < f ? 720 : f;
					f -= 80;
					b -= 84;
					tb_show("Insert Shortcode", "#TB_inline?width=800"+ "&height=400&inlineId=scn-dialog");
					jQuery("#scn-options h3:first").text("Customize the " + obj.title + " Shortcode");
				});
			});
		});
	

		editor.addButton('designthemes_sc_button', {
			title : "DT Shortcodes",
			icon : "dt-icon",
			type: 'menubutton',
			menu: [

				{ text : 'Accordion',
					menu : [
						{ text: 'Default', onclick: function(e){
							e.stopPropagation();
							var content = "[dt_sc_accordion_group]"
								+'<br>[dt_sc_toggle title="Accordion 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+'<br>[dt_sc_toggle title="Accordion 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+'<br>[dt_sc_toggle title="Accordion 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
								+"<br>[/dt_sc_accordion_group]";
								editor.insertContent(content);
							}
						},

						{ text: 'Framed', onclick: function(e){
							e.stopPropagation();
							var content = "[dt_sc_accordion_group]"
								+'<br>[dt_sc_toggle_framed title="Accordion 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+'<br>[dt_sc_toggle_framed title="Accordion 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+'<br>[dt_sc_toggle_framed title="Accordion 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
								+"<br>[/dt_sc_accordion_group]";
							editor.insertContent(content);
							}
						}
					]
				},

				{ text: 'Animation' , onclick: function() {

						editor.windowManager.open({

							title : "Add Animation",
							body : [

								{ type: 'listbox', name:'effect', label:'Choose Effect',values:[
									{ text: 'Flash', value : 'flash' },							{ text: 'Shake', value : 'shake' },							{ text: 'Bounce', value : 'bounce' },
									{ text: 'Tada', value : 'tada' },							{ text: 'Swing', value : 'swing'},							{ text: 'Wobble', value : 'wobble' },
									{ text: 'Pulse', value : 'pulse' },							{ text: 'Flip', value : 'flip' },							{ text: 'Flip In X Axis', value : 'flipInX' },
									{ text: 'Flip Out X Axis', value : 'flipOutX' },			{ text: 'Flip In Y Axis', value : 'flipInY' },				{ text: 'Flip Out Y Axis', value : 'flipOutY' },
									{ text: 'fadeIn', value:'fadeIn'},							{ text: 'fadeInUp', value:'fadeInUp'},						{ text: 'fadeInDown', value:'fadeInDown'},
									{ text: 'fadeInLeft', value:'fadeInLeftfadeInLeft'},		{ text: 'fadeInRight', value:'fadeInRight'},				{ text: 'fadeInUpBig', value:'fadeInUpBig'},
									{ text: 'fadeInDownBig', value:'fadeInDownBig'},			{ text: 'fadeInLeftBig', value:'fadeInLeftBig'},			{ text: 'fadeInRightBig', value:'fadeInRightBig'},
									{ text: 'fadeOut', value:'fadeOut'},						{ text: 'fadeOutUp', value:'fadeOutUp'},					{ text: 'fadeOutDown', value:'fadeOutDown'},
									{ text: 'fadeOutLeft', value:'fadeOutLeft'},				{ text: 'fadeOutRight', value:'fadeOutRight'},				{ text: 'fadeOutUpBig', value:'fadeOutUpBig'},
									{ text: 'fadeOutDownBig', value:'fadeOutDownBig'},			{ text: 'fadeOutLeftBig', value:'fadeOutLeftBig'},			{ text: 'fadeOutRightBig', value:'fadeOutRightBig'},
									{ text: 'bounceIn', value:'bounceIn'},						{ text: 'bounceInUp', value:'bounceInUp'},					{ text: 'bounceInDown', value:'bounceInDown'},
									{ text: 'bounceInLeft', value:'bounceInLeft'},				{ text: 'bounceInRight', value:'bounceInRight'},			{ text: 'bounceOut', value:'bounceOut'},
									{ text: 'bounceOutUp', value:'bounceOutUp'},				{ text: 'bounceOutDown', value:'bounceOutDown'},			{ text: 'bounceOutLeft', value:'bounceOutLeft'},
									{ text: 'bounceOutRight', value:'bounceOutRight'},			{ text:'rotateIn', value:'rotateIn'},						{ text:'rotateInUpLeft', value:'rotateInUpLeft'},		
									{ text:'rotateInDownLeft', value:'rotateInDownLeft'},		{ text:'rotateInUpRight', value:'rotateInUpRight'},			{ text:'rotateInDownRight', value:'rotateInDownRight'},		
									{ text:'rotateOut', value:'rotateOut'},						{ text:'rotateOutUpLeft', value:'rotateOutUpLeft'},			{ text:'rotateOutDownLeft', value:'rotateOutDownLeft'},		
									{ text:'rotateOutUpRight', value:'rotateOutUpRight'},		{ text:'rotateOutDownRight', value:'rotateOutDownRight'},	{ text:'hinge', value:'hinge'},		
									{ text:'rollIn', value:'rollIn'},							{ text:'rollOut', value:'rollOut'},							{ text:'lightSpeedIn', value:'lightSpeedIn'},		
									{ text:'lightSpeedOut', value:'lightSpeedOut'},				{ text:'slideDown', value:'slideDown'},						{ text:'slideUp', value:'slideUp'},		
									{ text:'slideLeft', value:'slideLeft'},						{ text:'slideRight', value:'slideRight'},					{ text:'slideExpandUp', value:'slideExpandUp'},
									{ text:'expandUp', value:'expandUp'},						{ text:'expandOpen', value:'expandOpen'},					{ text:'bigEntrance', value:'bigEntrance'},		
									{ text:'hatch', value:'hatch'},								{ text:'floating', value:'floating'},						{ text:'tossing', value:'tossing'},		
									{ text:'pullUp', value:'pullUp'},							{ text:'pullDown', value:'pullDown'},						{ text:'stretchLeft', value:'stretchLeft'},
									{ text:'stretchRight', value:'stretchRight'}],
								},

								{ type: 'textbox', name:'delay',label : "Time Delay"},
							],
							onsubmit: function(e) {
								editor.insertContent('[dt_sc_animation effect="'+e.data.effect +'" delay="'+ e.data.delay+'"] Add Content to Animate [/dt_sc_animation]');
							}
						});	}
				},

				{ text : 'Button',
					onclick: function(e) {
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "button"});
					}
				},

				{ text : 'Notify Button',
					onclick: function(e) {
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "notifybutton"});
					}
				},

				{ text: 'Block Quote',
					onclick: function(e) {
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "blockquote"});
					}
				},

				{ text : 'Call Out Boxes',
					menu : [
						{ text: 'Type I', onclick: function(e){
							e.stopPropagation();
							var content = "[dt_sc_callout_box type='type1']"
								+"<br>[dt_sc_h2 class='aligncenter']Lorem ipsum dolor sit amet[/dt_sc_h2]"
								+"<br><p>"+ dummy_conent +"</p>"
								+"<br>[dt_sc_hr_invisible_small /] <a href='#'>Class aptent taciti sociosqu ads</a> [dt_sc_hr_invisible_small /][dt_sc_clear /]"
								+"<br>[dt_sc_button type='type1' link='#' size='medium']View Programs[/dt_sc_button]"
								+"<br>[dt_sc_button type='type1' link='#' size='medium']Sign Up Now[/dt_sc_button]"
								+"<br>[/dt_sc_callout_box]"
								editor.insertContent(content);
							}
						},

						{ text: 'Type II', onclick: function(e){
							e.stopPropagation();
							var content = "[dt_sc_callout_box type='type2']"
								+"<br>[dt_sc_four_fifth first]"
									+"<br><img class='alignleft' src='http://placehold.it/150x165&text=Logo' alt='logo'><h4>Lorem ipsum dolor sit amet</h4>"
									+"<p>"+ dummy_conent + dummy_conent +"</p>"
								+"[/dt_sc_four_fifth]"
								+"<br>[dt_sc_one_fifth]"
									+"<br>[dt_sc_hr_invisible /][dt_sc_hr_invisible_small /]"
									+"<br>[dt_sc_button type='type1' link='#' size='medium']Purchase Now[/dt_sc_button]"
								+"<br>[/dt_sc_one_fifth]"
								+"<br>[/dt_sc_callout_box]"
								editor.insertContent(content);
							}
						},

						{ text: 'Type III', onclick: function(e){
							e.stopPropagation();
							var content = "[dt_sc_callout_box type='type3']"
								+"<p>"+ dummy_conent +"</p>"
								+"[dt_sc_button type='type1' link='#' size='medium']Purchase Now[/dt_sc_button]"
								+"<br>[dt_sc_hr_medium /]"
								+"<br>[/dt_sc_callout_box]"
								editor.insertContent(content);
							}
						},
						
						{ text: 'Type IV', onclick: function(e){
							e.stopPropagation();
							var content = "[dt_sc_callout_box type='type4']"
								+"<h3>Lorem ipsum dolor sit amet, consectetur</h3>"
								+"<p>"+ dummy_conent +"</p>"
								+"[dt_sc_button type='type1' link='#' size='medium']View Programs[/dt_sc_button]"
								+"<br>[dt_sc_button type='type1' link='#' size='medium']Sign Up Now[/dt_sc_button]"
								+"<br>[/dt_sc_callout_box]"
								editor.insertContent(content);
							}
						},

						{ text: 'Type V', onclick: function(e){
							e.stopPropagation();
							var content = "[dt_sc_callout_box type='type5']"
								+"<br><img class='alignleft' src='http://placehold.it/190x240&text=Logo' alt='logo'>"
								+"<h4>Lorem ipsum dolor amet</h4>"
								+"<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.</p>"
								+"[dt_sc_button type='type1' link='#' size='small']Subscribe Now[/dt_sc_button]"
								+"<br>[/dt_sc_callout_box]"
								editor.insertContent(content);
							}
						},
						
						{ text: 'Type VI', onclick: function(e){
							e.stopPropagation();
							var content = "[dt_sc_callout_box type='type6']"
								+"<br><img class='alignright' src='http://placehold.it/190x240&text=Logo' alt='logo'>"
								+"<h4>Lorem ipsum dolor amet</h4>"
								+"<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas.</p>"
								+"[dt_sc_button type='type1' link='#' size='small']Subscribe Now[/dt_sc_button]"
								+"<br>[/dt_sc_callout_box]"
								editor.insertContent(content);
							}
						}
					]
				},

				{ text: 'Column Layout', 
					onclick: function(e) {
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "column"});
					}
				},

				{ text: 'Colored Box',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "coloredbox"});
					}
				},

				{ text : 'Contact Info', menu :[

					{ text: 'Address', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_address line1="No: 58 A, East Madison St" line2="Baltimore, MD, USA"/]');
					}},

					{ text: 'Timing', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_timing line1="Monday to Saturday 04:00 - 20:00" line2="Sunday - Holiday"/]');
					}},

					{ text: 'Phone', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_phone phone="+1 200 258 2145"/]');
					}},

					{ text: 'Mobile', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_mobile mobile="+91 99548 65214"/]');
					}},

					{ text: 'Fax', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_fax fax="+1 100 458 2345"/]');
					}},

					{ text: 'Email', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_email emailid="yourname@somemail.com"/]');
					}},

					{ text: 'Web', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_web url="http://www.google.com"/]');
					}},
				] },

				{ text : 'Dividers', menu:[

					{ text: 'Clear', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_clear]');
					}},

					{ text: 'Bordered Horizontal Rule', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_border]');
					}},

					{ text: 'Horizontal Rule', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr]');
					}},

					{ text: 'Horizontal Rule Medium', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_medium]');
					}},

					{ text: 'Horizontal Rule Large', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_large]');
					}},

					{ text: 'Horizontal Rule with top link', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr top]');
					}},

					{ text: 'Whitespace', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_invisible]');
					}},

					{ text: 'Whitespace Small', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_invisible_small]');
					}},

					{ text: 'Whitespace Medium', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_invisible_medium]');
					}},

					{ text: 'Whitespace Large', onclick: function(e){
						e.stopPropagation();
						editor.insertContent('[dt_sc_hr_invisible_large]');
					}},
				] },

				{ text: 'Donut Chart', onclick: function(e){
					e.stopPropagation();
					editor.insertContent('[dt_sc_donutchart_morris color="#9bb70d"]<br>'
											+ '[dt_sc_morris_label label="PHP" value="25" /]<br>'
											+ '[dt_sc_morris_label label="WordPress" value="55" /]<br>'
											+ '[dt_sc_morris_label label="HTML" value="20" /]<br>'
									   + '[/dt_sc_donutchart_morris]');
				}},

				{ text: 'PIE Chart', onclick: function(e){
					e.stopPropagation();
					editor.insertContent('[dt_sc_pie_chart]<br>'
											+ '[dt_sc_pie_data label="PHP" value="25" /]<br>'
											+ '[dt_sc_pie_data label="WordPress" value="35" /]<br>'
											+ '[dt_sc_pie_data label="CSS" value="30" /]<br>'
											+ '[dt_sc_pie_data label="HTML" value="20" /]<br>'
									   + '[/dt_sc_pie_chart]');
				}},

				{ text: 'Full Width Section', 
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "fullwidth"});
					}
				},

				{ text: 'Full Width Video',
					onclick: function(){

						editor.windowManager.open({
							title: "Add Full Width  Video Section",
							body:[
								{ type:'textbox', label:'MP4', name: 'mp4'},
								{ type:'textbox', label:'WEBM', name: 'webm'},
								{ type:'textbox', label:'OGV', name: 'ogv'},
								{ type:'textbox', label:'Poster Image', name: 'poster'},
								{ type:'textbox', name:'backgroundimage', label: 'Background Image'},
								{ type:'textbox', name:'paddingtop', label: 'Padding Top( in px)'},
								{ type:'textbox', name:'paddingbottom', label: 'Padding Bottom( in px)'},
								{ type:'textbox', name:'class', label: 'CSS Class'},
							],
							onsubmit: function(e){
								editor.insertContent('[dt_sc_fullwidth_video mp4="'+e.data.mp4+'" webm="'+e.data.we+'" ogv="'+e.data.ogv+'" poster="'+e.data.po+'" backgroundimage="'+e.data.backgroundimage+'" paddingtop="'+e.data.paddingtop+'" paddingbottom="'+e.data.paddingbottom+'" class="'+e.data.class+'"][/dt_sc_fullwidth_video]');
							}
						});
					}
				}, 

				{ text: 'Icon Boxes', 
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "iconbox"});
					}
				},

				{ text: 'Lists',
					menu :[
						{
							text: 'Ordered List',
							onclick : function() {
								editor.windowManager.open({
									title: "Add New Stylish Ordered List",
									body: [
										{
											type: 'listbox',
											name: 'style',
											label:'Style',
											values:[
												{ text: 'Decimal', value: 'decimal' }, { text: 'Decimals With Leading Zero', value: 'decimal-leading-zero' }, { text:'Lower Alpha', value:'lower-alpha'},
												{ text:'Lower Roman', value:'lower-roman'}, { text:'Upper Alpha', value:'upper-alpha'},{ text:'Upper Roman', value:'upper-roman'}
											],
										},
										{
											type: 'listbox',
											name: 'variation',
											label: 'Variation',

											values:[
												{ text: 'Default', value: '' }, { text: 'Avocado', value: 'avocado' }, { text: 'Black', value: 'black' }, { text: 'Blue', value: 'blue' },
												{ text: 'Blueiris', value: 'blueiris' }, { text: 'Blueturquoise', value: 'blueturquoise' },	{ text: 'Brown', value: 'brown' },
												{ text: 'Burntsienna', value: 'burntsienna' }, { text: 'Chillipepper', value: 'chillipepper' },	{ text: 'Emerald', value: 'emerald' },
												{ text: 'Eggplant', value: 'eggplant' }, { text: 'Electric blue', value: 'electricblue' }, { text: 'Graas green', value: 'graasgreen' },
												{ text: 'Gray', value: 'gray' }, { text: 'Green', value: 'green' }, { text: 'Orange', value: 'orange' }, { text: 'Pale brown', value: 'palebrown' },
												{ text: 'Pink', value: 'pink' }, { text: 'radiantorchid', value: 'radiantorchid' }, { text: 'Red', value: 'red' }, { text: 'Sky Blue', value: 'skyblue' },
												{ text: 'Violet', value: 'violet' },	{ text: 'wetasphalt', value: 'wetasphalt' }, { text: 'Yellow', value: 'yellow' }, { text: 'Chocolate', value: 'chocolate' }
											],
										},
									],
									onsubmit: function(e){
										var defaultContent =  "<ol>"
												+ "<li>Lorem ipsum dolor sit </li>"
												+ "<li>Praesent convallis nibh</li>"
												+ "<li>Nullam ac sapien sit</li>"
												+ "<li>Phasellus auctor augue</li></ol>";

										editor.insertContent('[dt_sc_fancy_ol style="'+e.data.style+'" variation="'+e.data.variation+'"]'+ defaultContent+'[/dt_sc_fancy_ol]');
									}
								});
							}
						},

						{
							text: 'Unordered List',
							onclick : function(){
								editor.windowManager.open({
									title: "Add New Stylish Unordered List",
									body: [

										{
											type: 'listbox',
											name: 'style',
											label:'Style',
											values:[
												{ text: 'Arrow', value: 'arrow' },					{ text: 'Rounded Arrow', value: 'rounded-arrow' },			{ text: 'Double Arrow', value: 'double-arrow' },
												{ text: 'Heart', value: 'heart' },					{ text: 'Trash', value: 'trash' },							{ text: 'Star', value: 'star' },
												{ text: 'Tick', value: 'tick' },					{ text: 'Rounded Tick', value: 'rounded-tick' },			{ text: 'Cross', value: 'cross' },
												{ text: 'Rounded Cross', value: 'rounded-cross' },	{ text: 'Rounded Question', value: 'rounded-question' },	{ text: 'Rounded Info', value: 'rounded-info' },
												{ text: 'Delete', value: 'delete' },				{ text: 'Warning', value: 'warning' },						{ text: 'Comment', value: 'comment' },
												{ text: 'Edit', value: 'edit' },					{ text: 'Share', value: 'share' },							{ text: 'Plus', value: 'plus' },
												{ text: 'Rounded Plus', value: 'Rounded Plus' },	{ text: 'Minus', value: 'minus' },							{ text: 'Rounded minus', value: 'rounded-minus' },
												{ text: 'Asterisk', value: 'asterisk' },			{ text: 'Cart', value: 'cart' },							{ text: 'Folder', value: 'folder' },
												{ text: 'Folder Open', value: 'folder-open' },		{ text: 'Desktop', value: 'desktop' },						{ text: 'Tablet', value: 'tablet' },
												{ text: 'Mobile', value: 'mobile' },				{ text: 'Reply', value: 'reply' },							{ text: 'Quote', value: 'quote' },
												{ text: 'Mail', value: 'mail' },					{ text: 'External Link', value: 'external-link' },			{ text: 'Adjust', value: 'adjust' },

												{ text: 'Pencil', value: 'pencil' },				{ text: 'Print', value: 'print' },							{ text: 'Tag', value: 'tag' },
												{ text: 'Thumbs Up', value: 'thumbs-up' },			{ text: 'Thumbs Down', value: 'thumbs-down' },				{ text: 'Time', value: 'time' },
												{ text: 'Globe', value: 'globe' },					{ text: 'Pushpin', value: 'pushpin' },						{ text: 'Map Marker', value: 'map-marker' },
												{ text: 'Link', value: 'link' },					{ text: 'Paper Clip', value: 'paper-clip' },				{ text: 'Download', value: 'download' },
												{ text: 'Key', value: 'key' },						{ text: 'Search', value: 'search' },						{ text: 'Rss', value: 'rss' },
												{ text: 'Twitter', value: 'twitter' },				{ text: 'Facebook', value: 'facebook' },					{ text: 'Linkedin', value: 'linkedin' },
												{ text:'Google Plus', value:'google-plus'}, 		{ text: 'Location', value:'location-arrow'},				{ text: 'Paper Plane', value:'paper-plane'},
												{ text: 'Circle', value:'circle-o'},                { text: 'Key', value:'key'},                                { text: 'Download', value:'download'}
											],
										},

										{
											type: 'listbox',
											name: 'variation',
											label: 'Variation',

											values:[
												{ text: 'Default', value: '' }, { text: 'Avocado', value: 'avocado' }, { text: 'Black', value: 'black' }, { text: 'Blue', value: 'blue' },
												{ text: 'Blueiris', value: 'blueiris' }, { text: 'Blueturquoise', value: 'blueturquoise' },	{ text: 'Brown', value: 'brown' },
												{ text: 'Burntsienna', value: 'burntsienna' }, { text: 'Chillipepper', value: 'chillipepper' },	{ text: 'Ferngreen', value: 'ferngreen' },
												{ text: 'Eggplant', value: 'eggplant' }, { text: 'Electric blue', value: 'electricblue' }, { text: 'Graas green', value: 'graasgreen' },
												{ text: 'Grey', value: 'grey' }, { text: 'Green', value: 'green' }, { text: 'Orange', value: 'orange' }, { text: 'Pale brown', value: 'palebrown' },
												{ text: 'Pink', value: 'pink' }, { text: 'Raspberry', value: 'raspberry' }, { text: 'Red', value: 'red' }, { text: 'Sky Blue', value: 'skyblue' },
												{ text: 'Purple', value: 'purple' },	{ text: 'wetasphalt', value: 'wetasphalt' }, { text: 'Yellow', value: 'yellow' }, { text: 'Ocean', value: 'ocean' }
											],
										},
									],
									onsubmit: function(e){
										var defaultContent =  "<ul>"
												+ "<li>Lorem ipsum dolor sit </li>"
												+ "<li>Praesent convallis nibh</li>"
												+ "<li>Nullam ac sapien sit</li>"
												+ "<li>Phasellus auctor augue</li></ul>";

										editor.insertContent('[dt_sc_fancy_ul style="'+e.data.style+'" variation="'+e.data.variation+'"]'+ defaultContent+'[/dt_sc_fancy_ul]');
									}
								});
							}
						},
					]
				},

				{ text:'Pull Quote',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "pullquote"});
					}
				},

				{ text:'Pricing Table',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "pricingtable"});
					}
				},

				{ text: 'Progress Bar',
					menu:[

						{ text:'Active',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_progressbar value="45" type="progress-striped-active" color="#9428d6"]Lorem ipsum dolor[/dt_sc_progressbar]');
							}
						},

						{ text:'Standard',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_progressbar value="85" type="standard" color="#e0316f"]Lorem ipsum dolor[/dt_sc_progressbar]');
							}
						},

						{ text:'Stripe',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_progressbar value="75" type="progress-striped" color="#00adef"]Lorem ipsum dolor[/dt_sc_progressbar]');
							}
						},
					]
				},
				
				{ text : 'Progress Round', menu:[

					{ text: 'Small', onclick: function(e) {
						e.stopPropagation();
						editor.insertContent('[dt_sc_donutchart_small title="Lorem" bgcolor="#f5f5f5" fgcolor="#9bb70d" percent="70"/]');
					} },


					{ text: 'Medium', onclick: function(e) {
						e.stopPropagation();
						editor.insertContent('[dt_sc_donutchart_medium title="Lorem" bgcolor="#f5f5f5" fgcolor="#9bb70d" percent="65"/]');
					} },


					{ text: 'Large', onclick: function(e) {
						e.stopPropagation();
						editor.insertContent('[dt_sc_donutchart_large title="Lorem" bgcolor="#f5f5f5" fgcolor="#9bb70d" percent="50"/]');
					} },
				] },
				
				{ text: 'Tabs',
					menu:[
						{ text:'Horizontal',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent("[dt_sc_tabs_horizontal]" + dummy_tabs + "[/dt_sc_tabs_horizontal]");
							}
						},
						{ text:'Vertical',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent("[dt_sc_tabs_vertical]" + dummy_tabs+ "[/dt_sc_tabs_vertical]");
							}
						},
						{ text:'Vertical Right',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent("[dt_sc_tabs_vertical_right]" + dummy_tabs+ "[/dt_sc_tabs_vertical_right]");
							}
						},
                        { text: 'Vertical with Icon',
	                        onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent("[dt_sc_tabs_vertical]" + dummy_tabs_icon + "[/dt_sc_tabs_vertical]");
                            }
                        },
                        { text: 'Vertical Right with Icon',
	                        onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent("[dt_sc_tabs_vertical_right]" + dummy_tabs_icon + "[/dt_sc_tabs_vertical_right]");
                            }
                        }
					]
				},

				{ text: 'Title',
					menu:[
						{
							text:'H1',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h1]Lorem ipsum dolor sit amet[/dt_sc_h1]');
							}
						},

						{
							text:'H2',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h2]Lorem ipsum dolor sit amet[/dt_sc_h2]');
							}
						},
						{
							text:'H3',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h3]Lorem ipsum dolor sit amet[/dt_sc_h3]');
							}
						},
						{
							text:'H4',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h4]Lorem ipsum dolor sit amet[/dt_sc_h4]');
							}
						},
						{
							text:'H5',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h5]Lorem ipsum dolor sit amet[/dt_sc_h5]');
							}
						},
						{
							text:'H6',
							onclick:function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_h6]Lorem ipsum dolor sit amet[/dt_sc_h6]');
							}
						},
					]
				},

				{ text:'Title Box',
					onclick: function(e){
						e.stopPropagation();
						tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "box"});
					}
				},

				{ text: 'Toggle',
					menu:[
						{
							text: 'Default',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_toggle title="Toggle 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
										+'<br>[dt_sc_toggle title="Toggle 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]"
										+'<br>[dt_sc_toggle title="Toggle 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle]");
							}
						},

						{
							text: 'Framed',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_toggle_framed title="Toggle 1"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
										+'<br>[dt_sc_toggle_framed title="Toggle 2"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]"
										+'<br>[dt_sc_toggle_framed title="Toggle 3"]<br>'+ dummy_conent + "<br>[/dt_sc_toggle_framed]");
							}
						},
					]
				},

				{ text: 'Tool tip',
					menu:[
						{
							text:'Standard',
							onclick: function(e){
								e.stopPropagation();
								tinyMCE.activeEditor.execCommand("scnOpenDialog", {title: this.text() ,identifier: "tooltip"});
							}
						},
						{
							text: 'Line',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_tip_one link="#" position="top" text="Tooltip Text"]Tooltip[/dt_sc_tip_one]');
							}
						},
						{
							text: 'Box',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_tip_two link="#" position="bottom" text="Tooltip Text"]Tooltip[/dt_sc_tip_two]');
							}
						},
						{
							text: 'Classic',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_tip_three link="#" position="top" image="http://placehold.it/129x170" text="Tooltip"]<br>'+ dummy_conent +'<br>[/dt_sc_tip_three]');
							}
						},
					]
				},

				{ text:'Others',
					menu:[

						{ text:'Team I',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_team_one name="Stephen Matthew" role="Gymnastics Instructor" image="http://placehold.it/130" twitter="#" facebook="#" google="#" button_text="Ask a Question" button_link="#" phone_no="+(41) 20 324 2211" /]');
							}
						},

						{ text:'Team II',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_team_two fname="Selena" lname="Kyle" role="Fitness Instructor" image="http://placehold.it/270x400" twitter="#" facebook="#" google="#" awards="5" author_known="Meditation, Yoga" exp="3+ years" /]');
							}
						},

						{ text:'Time Table',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_ts_wrapper title="Our Schedule"]'
									+'<br>[dt_sc_ts_group]'
										+'<br>[dt_sc_ts_time text="05:00 – 06:00" /]'
										+'<br>[dt_sc_ts_work title="Warmup" link="#" author="Alan Trump" /]'
										+'<br>[dt_sc_ts_work title="Yoga" link="#" author="James Goodwin" /]'
										+'<br>[dt_sc_ts_work /]'
										+'<br>[dt_sc_ts_work title="Chest" link="#" author="Kelly Wyane" /]'
										+'<br>[dt_sc_ts_work title="Wings" link="#" author="Marlon Kate" /]'
										+'<br>[dt_sc_ts_work title="Biceps" link="#" author="William kane" /]'
										+'<br>[dt_sc_ts_work /]'
									+'<br>[/dt_sc_ts_group]'
									+'<br>[dt_sc_ts_group]'
										+'<br>[dt_sc_ts_time text="06:00 – 07:00" /]'
										+'<br>[dt_sc_ts_work /]'
										+'<br>[dt_sc_ts_work title="Wings" link="#" author="Marlon Kate" /]'
										+'<br>[dt_sc_ts_work title="Biceps" link="#" author="William kane" /]'
										+'<br>[dt_sc_ts_work title="Warmup" link="#" author="Alan Trump" /]'
										+'<br>[dt_sc_ts_work title="Yoga" link="#" author="James Goodwin" /]'
										+'<br>[dt_sc_ts_work /]'
										+'<br>[dt_sc_ts_work title="Chest" link="#" author="Kelly Wyane" /]'
									+'<br>[/dt_sc_ts_group]'
									+'<br>[/dt_sc_ts_wrapper]');
							}
						},

						{ text:'Testimonial Carousel',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_testimonial_carousel]<br>'
									+'<ul>'
									+'<li>'+testimonal+'</li>'
									+'<li>'+testimonal+'</li>'
									+'<li>'+testimonal+'</li>'
									+'</ul>'
									+'[/dt_sc_testimonial_carousel]');
							}
						},

						{ text:'Clients Carousel',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_clients_carousel]<br>'
									+'<ul>'
									+'<li>[dt_sc_client_item title="The National Physical Activity." link="#" image="http://placehold.it/247x67" /]</li>'
									+'<li>[dt_sc_client_item title="Donec tincidunt sed mauris." link="#" image="http://placehold.it/247x67" /]</li>'
									+'<li>[dt_sc_client_item title="Nam viverra nunc eu arcum." link="#" image="http://placehold.it/247x67" /]</li>'
									+'<li>[dt_sc_client_item title="Vestibulum feugiat lacus." link="#" image="http://placehold.it/247x67" /]</li>'
									+'<li>[dt_sc_client_item title="Quisque consequat pulvinar." link="#" image="http://placehold.it/247x67" /]</li>'
									+'</ul>'
									+'<br>[/dt_sc_clients_carousel]');
							}
						},

						{
                            text: 'Contact Form',
							value: 'contactform',
							onclick: function() {
							editor.windowManager.open( {
									title: 'Insert Contact Form',
									body: [{
										type: 'textbox',
										name: 'to_email',
										label: 'Recipient Email',
										tooltip: 'Enter Recipient Email Address'
									},
									{
										type: 'textbox',
										name: 'success_msg',
										label: 'Success Message',
										tooltip: 'If leaves: "Thanks for Contacting Us, We will call back to you soon."'
									},
									{
										type: 'textbox',
										name: 'error_msg',
										label: 'Error Message',
										tooltip: 'If leaves: "Sorry your message not sent, Try again Later."'
									}],
									onsubmit: function( e ) {
										var $out = '[dt_sc_contact_form';
										
										jQuery.each( e.data, function( key, value ) {
											if(value !== "") {
												$out += ' ' + key + '="'+ value+'"';
											}
										});
										
										$out += ' /]';
										editor.insertContent( $out );
									}
								});
							}
                        },

						{
                            text: 'Social Profile',
                            value: '<br>[dt_social target="_blank" /]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }
                        },
						
						{
                            text: 'Icon Service',
                            value: '[dt_sc_icon_service title="Best Results Guranteed" subtitle="If you train with our trainers" image="http://placehold.it/140" button_text="Know More" link="#"]'
									+ '<p>' + dummy_conent + '</p>'
									+'[/dt_sc_icon_service]',
                            onclick: function(e) {
                                e.stopPropagation();
                                editor.insertContent(this.value());
                            }
                        },

						{ text: 'Special Shortcodes',
							menu:[
								{
									text: 'Info Title',
									onclick: function(e){
										e.stopPropagation();
										editor.insertContent('[dt_info_title tag="h2" number="1" text="Lorem ipsum dolor" /]');
									}
								},

								{
									text: 'Section Title',
									onclick: function(e){
										e.stopPropagation();
										editor.insertContent('[dt_section_title tag="h2" text="Lorem ipsum dolor" /]');
									}
								},

								{
									text: 'Feature Content',
									onclick: function(e){
										e.stopPropagation();
										editor.insertContent('[dt_sc_one_third first type="type1"]<br>[dt_service_pack title1="Lorem ipsum" title2="Class taciti"]<br>' + dummy_conent + '<br>[/dt_service_pack]<br>[/dt_sc_one_third]');
									}
								},

								{
									text: 'BMI Calc',
									onclick: function(e){
										e.stopPropagation();
										editor.insertContent('[dt_sc_bmi_calc view_link="" /]');
									}
								},
							]
						},

						{
                            text: 'Blog Posts',
							value: 'blogposts',
							onclick: function() {
							editor.windowManager.open( {
									title: 'Insert Blog Posts',
									body: [{
										type: 'textbox',
										name: 'excerpt_length',
										label: 'Excerpt Length',
										value: '25',
										tooltip: 'Put the value of excerpt length'
									},
									{
										type: 'listbox',
										name: 'show_meta',
										label: 'Show Meta',
										tooltip: 'Enable post meta for posts',
										'values': [
											{text: 'Yes (Default)', value: 'true'}, {text: 'No', value: 'false'}
										]
									},									
									{
										type: 'textbox',
										name: 'limit',
										label: 'Limit',
										tooltip: 'Enter no.of posts to show. By default shows all posts(-1)'
									},
									{
										type: 'textbox',
										name: 'categories',
										label: 'Post Categories',
										tooltip: 'Put the categories you want to display (seperated by commas(,))'
									},
									{
										type: 'listbox',
										name: 'posts_column',
										label: 'Column Type',
										'values': [
											{text: 'One Column', value: 'one-column'}, {text: 'Two Column', value: 'one-half-column'}, {text: 'Three Column', value: 'one-third-column'}
										]
									}],
									onsubmit: function( e ) {
										var $out = '[dt_sc_blog_posts';
										
										jQuery.each( e.data, function( key, value ) {
											if(value !== "") {
												$out += ' ' + key + '="'+ value+'"';
											}
										});
										
										$out += ' /]';
										editor.insertContent( $out );
									}
								});
							}
                        },

						{
                            text: 'Recent Posts',
							value: 'recentposts',
							onclick: function() {
							editor.windowManager.open( {
									title: 'Insert Recent Posts',
									body: [{
										type: 'textbox',
										name: 'limit',
										label: 'Limit',
										tooltip: 'Enter no.of posts to show. By default shows all posts(-1)'
									},
									{
										type: 'textbox',
										name: 'excerpt_length',
										label: 'Excerpt Length',
										value: '25',
										tooltip: 'Put the value of excerpt length'
									}],
									onsubmit: function( e ) {
										var $out = '[dt_sc_recent_posts';
										
										jQuery.each( e.data, function( key, value ) {
											if(value !== "") {
												$out += ' ' + key + '="'+ value+'"';
											}
										});
										
										$out += ' /]';
										editor.insertContent( $out );
									}
								});
							}
                        },		

                        {
                            text: 'Gallery Items',
							value: 'galleryitems',
							onclick: function() {
							editor.windowManager.open( {
									title: 'Insert Gallery Items',
									body: [{
										type: 'textbox',
										name: 'limit',
										label: 'Limit',
										tooltip: 'Enter no.of items to show. By default shows all items(-1)'
									},
									{
										type: 'textbox',
										name: 'categories',
										label: 'Gallery Categories',
										tooltip: 'Put the categories you want to display (seperated by commas(,))'
									},
									{
										type: 'listbox',
										name: 'posts_column',
										label: 'Column Type',
										'values': [
											{text: 'Two Column', value: 'one-half-column'}, {text: 'Three Column', value: 'one-third-column'}, {text: 'Four Column', value: 'one-fourth-column'}
										]
									},									
									{
										type: 'listbox',
										name: 'filter',
										label: 'Show Filter',
										tooltip: 'Enable gallery categories filter.',
										'values': [
											{text: 'Yes (Default)', value: 'true'}, {text: 'No', value: 'false'}
										]
									},
									{
										type: 'listbox',
										name: 'fullwidth',
										label: 'Enable Fullwidth',
										tooltip: 'Enable fullwidth option.',
										'values': [
											{text: 'No (Default)', value: 'false'}, {text: 'Yes', value: 'true'}
										]
									}],
									onsubmit: function( e ) {
										var $out = '[dt_sc_gallery_items';
										
										jQuery.each( e.data, function( key, value ) {
											if(value !== "") {
												$out += ' ' + key + '="'+ value+'"';
											}
										});
										
										$out += ' /]';
										editor.insertContent( $out );
									}
								});
							}
                        },

                        {
                            text: 'Gallery Item',
							value: 'galleryitem',
							onclick: function() {
							editor.windowManager.open( {
									title: 'Insert Gallery Item',
									body: [{
										type: 'textbox',
										name: 'id',
										label: 'Gallery Item ID',
										tooltip: 'Enter the gallery item ID.'
									}],
									onsubmit: function( e ) {
										var $out = '[dt_sc_gallery_item';
										
										jQuery.each( e.data, function( key, value ) {
											if(value !== "") {
												$out += ' ' + key + '="'+ value+'"';
											}
										});
										
										$out += ' /]';
										editor.insertContent( $out );
									}
								});
							}
                        },

                        {
                            text: 'Workout Items',
							value: 'workoutitems',
							onclick: function() {
							editor.windowManager.open( {
									title: 'Insert Workout Items',
									body: [{
										type: 'textbox',
										name: 'excerpt_length',
										label: 'Excerpt Length',
										tooltip: 'Put the value of excerpt length'
									},
									{
										type: 'listbox',
										name: 'show_meta',
										label: 'Show Meta',
										tooltip: 'Enable item meta for workouts',
										'values': [
											{text: 'Yes (Default)', value: 'true'}, {text: 'No', value: 'false'}
										]
									},
									{
										type: 'textbox',
										name: 'limit',
										label: 'Limit',
										tooltip: 'Enter no.of items to show. By default shows all items(-1)'
									},
									{
										type: 'textbox',
										name: 'categories',
										label: 'Workout Categories',
										tooltip: 'Put the categories you want to display (seperated by commas(,))'
									},
									{
										type: 'listbox',
										name: 'posts_column',
										label: 'Column Type',
										'values': [
											{text: 'Two Column', value: 'one-half-column'}, {text: 'Three Column', value: 'one-third-column'}
										]
									}],
									onsubmit: function( e ) {
										var $out = '[dt_sc_workout_items';

										jQuery.each( e.data, function( key, value ) {
											if(value !== "") {
												$out += ' ' + key + '="'+ value+'"';
											}
										});

										$out += ' /]';
										editor.insertContent( $out );
									}
								});
							}
                        },

                        {
                            text: 'Workout Plan',
							value: 'workoutplan',
							onclick: function() {
							editor.windowManager.open( {
									title: 'Insert Workout Plan',
									body: [{
										type: 'textbox',
										name: 'step_no',
										label: 'Step No',
										tooltip: 'Put the value of step no'
									},
									{
										type: 'textbox',
										name: 'step_sup',
										label: 'Step (st)',
										tooltip: 'Put the join text of step. eg: (st)'
									},
									{
										type: 'textbox',
										name: 'step_name',
										label: 'Step Text',
										tooltip: 'Put the text of step.'
									},
									{
										type: 'textbox',
										name: 'title',
										label: 'Title',
										tooltip: 'Put the title of step.'
									},
									{
										type: 'textbox',
										name: 'link',
										label: 'Link',
										tooltip: 'Put the link of step.'
									}],
									onsubmit: function( e ) {
										var $out = '[dt_sc_workout_plan';

										jQuery.each( e.data, function( key, value ) {
											if(value !== "") {
												$out += ' ' + key + '="'+ value+'"';
											}
										});

										$out += ']<br>' + dummy_conent + '<br>[/dt_sc_workout_plan]';
										editor.insertContent( $out );
									}
								});
							}
                        },						

                        {
                            text: 'Workouts List',
							value: 'workoutslist',
							onclick: function() {
							editor.windowManager.open( {
									title: 'Insert Workouts List',
									body: [{
										type: 'textbox',
										name: 'excerpt_length',
										label: 'Excerpt Length',
										tooltip: 'Put the value of excerpt length'
									},
									{
										type: 'textbox',
										name: 'limit',
										label: 'Limit',
										tooltip: 'Enter no.of items to show. By default shows all items(-1)'
									},
									{
										type: 'textbox',
										name: 'categories',
										label: 'Workout Categories',
										tooltip: 'Put the categories you want to display (seperated by commas(,))'
									},
									{
										type: 'listbox',
										name: 'posts_column',
										label: 'Column Type',
										'values': [
											{text: 'Two Column', value: 'one-half-column'}, {text: 'Three Column', value: 'one-third-column'}, {text: 'Four Column', value: 'one-fourth-column'}
										]
									}],
									onsubmit: function( e ) {
										var $out = '[dt_sc_workouts_list';

										jQuery.each( e.data, function( key, value ) {
											if(value !== "") {
												$out += ' ' + key + '="'+ value+'"';
											}
										});

										$out += ' /]';
										editor.insertContent( $out );
									}
								});
							}
                        },

                        {
                            text: 'Package Item',
							value: 'packageitem',
							onclick: function() {
							editor.windowManager.open( {
									title: 'Insert Package Item',
									body: [{
										type: 'listbox',
										name: 'type',
										label: 'Type',
										'values': [
											{text: 'Default', value: ''}, {text: 'S2 Member', value: 's2member'}
										]
									},
									{
										type: 'textbox',
										name: 'title',
										label: 'Title',
										tooltip: 'Put the package title'
									},
									{
										type: 'textbox',
										name: 'subtitle',
										label: 'Sub Title',
										tooltip: 'Put the package sub title'
									},
									{
										type: 'textbox',
										name: 'image',
										label: 'Package Image',
										tooltip: 'Put the image url of package'
									},
									{
										type: 'textbox',
										name: 'button_text',
										label: 'Button Text',
										tooltip: 'Put the title of package button'
									},
									{
										type: 'textbox',
										name: 'button_link',
										label: 'Link',
										tooltip: 'Put the url of package button'
									},
									{
										type: 'textbox',
										name: 'start_price',
										label: 'Starting Price',
										tooltip: 'Put the starting price of package (eg: 89.99)'
									},
									{
										type: 'textbox',
										name: 'start_duration',
										label: 'Initial Duration',
										tooltip: 'Put the starting duration of package (eg: 6)'
									},
									{
										type: 'listbox',
										name: 'start_dwmy',
										label: 'Duration Tag',
										'values': [
											{text: 'Months', value: 'M'}, {text: 'Days', value: 'D'}, {text: 'Weeks', value: 'W'}, {text: 'Years', value: 'Y'}
										]
									},
									{
										type: 'textbox',
										name: 'recurring_price',
										label: 'Recurring Price',
										tooltip: 'Put the recurring price of package'
									},
									{
										type: 'textbox',
										name: 'recurring_duration',
										label: 'Recurring Duration',
										tooltip: 'Put the recurring duration of package'
									},
									{
										type: 'listbox',
										name: 'recurring_dwmy',
										label: 'Duration Tag',
										'values': [
											{text: 'Months', value: 'M'}, {text: 'Days', value: 'D'}, {text: 'Weeks', value: 'W'}, {text: 'Years', value: 'Y'}
										]
									}],
									onsubmit: function( e ) {
										var $out = '[dt_sc_package_item';

										jQuery.each( e.data, function( key, value ) {
											if(value !== "") {
												$out += ' ' + key + '="'+ value+'"';
											}
										});

										$out += ']';
										$out += '<br>[dt_sc_fancy_ul style="circle-o"]<ul><li>Lorem ipsum dolor sit</li><li>Praesent convallis nibh</li>';
										$out += '<li>Phasellus auctor augue</li></ul>[/dt_sc_fancy_ul]<br>[/dt_sc_package_item]';
										editor.insertContent( $out );
									}
								});
							}
                        },

                        {
                            text: 'Upcoming Events',
							value: 'upcomingevents',
							onclick: function() {
							editor.windowManager.open( {
									title: 'Insert Upcoming Events',
									body: [{
										type: 'textbox',
										name: 'limit',
										label: 'Limit',
										tooltip: 'Enter no.of events to show. By default shows all posts(-1)'
									},
									{
										type: 'textbox',
										name: 'excerpt_length',
										label: 'Excerpt Length',
										value: '25',
										tooltip: 'Put the value of excerpt length'
									}],
									onsubmit: function( e ) {
										var $out = '[dt_sc_upcoming_events';

										jQuery.each( e.data, function( key, value ) {
											if(value !== "") {
												$out += ' ' + key + '="'+ value+'"';
											}
										});

										$out += ' /]';
										editor.insertContent( $out );
									}
								});
							}
                        },

                        {
                            text: 'TimeTable Events',
							value: 'timetableevents',
							onclick: function() {
							editor.windowManager.open( {
									title: 'Insert TimeTable Events',
									body: [{
										type: 'listbox',
										name: 'type',
										label: 'Type',
										tooltip: 'Select style of events list.',
										'values': [
											{text: 'Type I', value: ''}, {text: 'Type II', value: 'type2'}
										]
									},
									{
										type: 'textbox',
										name: 'excerpt_length',
										label: 'Excerpt Length',
										value: '22',
										tooltip: 'Put the value of excerpt length'
									},
									{
										type: 'textbox',
										name: 'limit',
										label: 'Limit',
										tooltip: 'Enter no.of events to show. By default shows all posts(-1)'
									},
									{
										type: 'textbox',
										name: 'categories',
										label: 'Event Categories',
										tooltip: 'Put the categories you want to display (seperated by commas(,))'
									},
									{
										type: 'listbox',
										name: 'posts_column',
										label: 'Column Type',
										'values': [
											{text: 'Two Column', value: 'one-half-column'}, {text: 'Three Column', value: 'one-third-column'}, {text: 'Four Column', value: 'one-fourth-column'}
										]
									}],
									onsubmit: function( e ) {
										var $out = '[dt_sc_timetable_events';

										jQuery.each( e.data, function( key, value ) {
											if(value !== "") {
												$out += ' ' + key + '="'+ value+'"';
											}
										});

										$out += ' /]';
										editor.insertContent( $out );
									}
								});
							}
                        },

                        {
                            text: 'Newsletter Form',
							value: 'newsletterform',
							onclick: function() {
							editor.windowManager.open( {
									title: 'Insert Newsletter Form',
									body: [{
										type: 'textbox',
										name: 'title',
										label: 'Title',
										tooltip: 'Enter the title of newsletter.'
									},
									{
										type: 'textbox',
										name: 'notify',
										label: 'Notify Text',
										tooltip: "eg: Get to know the latest offers on this site. we don't spam"
									},
									{
										type: 'textbox',
										name: 'list_id',
										label: 'List ID',
										tooltip: "Enter the List ID from mailchimp account."
									}],
									onsubmit: function( e ) {
										var $out = '[dt_sc_subscribe_form';
										
										jQuery.each( e.data, function( key, value ) {
											if(value !== "") {
												$out += ' ' + key + '="'+ value+'"';
											}
										});
										
										$out += ' /]';
										editor.insertContent( $out );
									}
								});
							}
                        },

						{ text: 'Working Hours',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_working_hours text="<b>Note:</b> At vero eos et accusamus dignissimos ducimus will be presented."]<br>'
									+'[dt_sc_work_hour day="Monday" time="16:00 - 20:00"]<br>'
									+'[dt_sc_work_hour day="Tuesday" time="16:00 - 20:00"]<br>'
									+'[dt_sc_work_hour day="Wednesday" time="17:00 - 20:00"]<br>'
									+'[dt_sc_work_hour day="Thursday" time="17:00 - 20:00"]<br>'
									+'[dt_sc_work_hour day="Friday" time="Holiday"]<br>'
									+'[dt_sc_work_hour day="Saturday" time="10:00 - 20:00"]<br>'
									+'[dt_sc_work_hour day="Sunday" time="10:00 - 14:00"]'
									+'<br>[/dt_sc_working_hours]');
							}
						},

						{ text: 'Running Number',
							onclick: function(e){
								e.stopPropagation();
								editor.insertContent('[dt_sc_running_number value="3400" title="Happy Members" /]');
							}
						},						
					]
				}
			]
		});

	});
})();
scnShortcodeMeta = {
	attributes : [
			{
				label : "Style",
				id : "type",
				help : "Select which type of button you would like to use.",
				controlType : "select-control",
				selectValues : [ 'type1', 'type2' ],
				defaultValue : 'type1',
				defaultText : 'type1'
			},

			{
				label : "Icon Style",
				id : "iconstyle",
				help : "Select which type of icon style button you would like to use.",
				controlType : "select-control",
				selectValues : [ 'no-icon', 'with-icon' ],
				defaultValue : 'type1',
				defaultText : 'type1'
			},

			{
				label : "Icon",
				id : "icon",
				help : "Add Font Awesome Icon to button (fa-check-circle) ",
			},

			{
				label : "Title",
				id : "content",
				help : "The button title.",
			},

			{
				label : "Hover Text",
				id : "htext",
				help : "The button hover text.",
			},

			{
				label : "Link",
				id : "link",
				help : "Optional link (e.g. http://google.com).",
			},
			{
				label : "Size",
				id : "size",
				help : "Values: &lt;empty&gt; for normal size, small, large, xl.",
				controlType : "select-control",
				selectValues : [ 'small', 'medium', 'large', 'xlarge' ],
				defaultValue : 'medium',
				defaultText : 'medium (Default)'
			},
			{
				label : 'Variation',
				id : 'variation',
				help : 'Choose one of our variation to use with your list.',
				controlType : "select-control",
				selectValues : [ 'info','success','warning','danger' ],
				defaultValue : 'info',
				defaultText : 'Info (Default)'
			},
			{
				label : "Target",
				id : 'target',
				help : 'Setting the target to _blank will open your page in a new tab when the reader clicks on the button.',
				controlType : "select-control",
				selectValues : [ '_blank', '_new', '_parent', '_self', '_top' ],
				defaultValue : '_blank',
				defaultText : '_blank (Default)'
			} ],
	defaultContent : "Click me!",
	shortcode : "dt_sc_notify_button"

};
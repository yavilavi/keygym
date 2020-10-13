scnShortcodeMeta = {
	attributes : [ {
		label : "Type",
		id : "type",
		help : "Select which type of pricing table you would like to use.",
		controlType : "select-control",
		selectValues : [ 'type1', 'type2' ],
		defaultValue : 'type1',
		defaultText : 'type1'
	},
	{
		label : "Style",
		id : "space",
		help : "Select spacing you would like to for pricing table.",
		controlType : "select-control",
		selectValues : [ 'space', 'no-space' ],
		defaultValue : 'space',
		defaultText : 'space'
	},
	{
		label : "Columns",
		id : "content",
		controlType : "column-control"
	}],
	customMakeShortcode : function(b) {
		var a = b.data, type = b.type, space = b.space;
		
		if (!a)
			return "";
		b = a.numColumns;
		var c = a.content;
		a = [ "0", "one", "two", "three", "four", "five", 'six' ];
		var x = [ "0", "0", "half", "third", "fourth", "fifth", 'sixth' ];
		var f = x[b];
		c = c.split("|");
		var g = g2 = "";
		var colors = ['blue', 'lightgreen', 'darkpink', 'chocolate', 'slateblue', 'skyblue', 'red', 'raspberry', 'ocean'];
		
		for ( var h in c) {
			var d = jQuery.trim(c[h]);
			if (d.length > 0) {
				var e = a[d.length] + '_' + f;
				if (b == 4 && d.length == 2)
					e = "one_half";

				var z = e;
				var selected = "";
				if (h == 0) {
					e += " first";
					selected = "selected";
				}

				if(type == 'type2') {
					g += "[dt_sc_"
							+ e
							+ "] "
							+ "<br>[dt_sc_pricing_table_item_two color='" + colors[h] + "' heading='Personal Trainers' subtitle='Train with your Personal Trainer' ribben='Best Plan' price1='$119.99' text1='3 Months' price2='$219.99' text2='6 Months' price3='$449.99' text3='Full year Subscription' button_text='Enroll Now' button_link='#' button_size='medium' button_target='_blank' class='']<br/>"
							+ "<ul>" + "<li>Text</li>" + "<li>Text</li>" + "<li>Text</li>" + "</ul>"
							+ "<br/>[/dt_sc_pricing_table_item_two]<br>" + " [/dt_sc_" + z
							+ "] <br/>";
				} else {
					g += "[dt_sc_"
							+ e
							+ "] "
							+ "<br>[dt_sc_pricing_table_item heading='Heading' button_text='Buy Now' button_link='#' target='_blank' price='$15' per='month' class='' "
							+ selected + "]<br>" + "<ul>" + "<li>Text</li>"
							+ "<li>Text</li>" + "<li>Text</li>" + "</ul>"
							+ "[/dt_sc_pricing_table_item]<br>" + " [/dt_sc_" + z
							+ "] <br/>";
				}
			}
		}

		return "[dt_sc_pricing_table type='" + type + "' space='" + space + "']<br>" + g + "<br>[/dt_sc_pricing_table]";
	}
};
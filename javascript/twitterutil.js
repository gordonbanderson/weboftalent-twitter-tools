window.twttr = (function (d, s, id) {
  var t, js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id; js.src= "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
  return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
}(document, "script", "twitter-wjs"));
	twttr.ready(function (twttr) {

	  twttr.events.bind('rendered', function (event) {
		  	var jqtarget = $(event.target);
		  	// check the class of the widget, as getting the content of buttons causes a security error.
	  		if (jqtarget.hasClass('twitter-tweet')) {
	  			jqtarget = $(event.target).contents();
			  	//console.log(jqtarget);
			  	//console.log("Searching for images");
			  	var delta_height = 0;
			  	jqtarget.find('img.autosized-media').each(function(e) {
				  	jqthis = $(this);
					var bigUrl = jqthis.attr('src');
					
					var srcset = jqthis.attr('data-srcset');
					var decoded = decodeURIComponent(srcset);
					var large_details = decoded.split(',')[0];

					//console.log('LARGE DETAILS:'+large_details);
					var splits2 = large_details.split(' ');
					var url = splits2[0];
					var big_width = splits2[1];
					big_width = big_width.replace('w','');
					var original_height = jqthis.attr('height');
					var large_height = Math.round(original_height*big_width / jqthis.attr('width'));
					//console.log('large height:'+large_height);

					//big_width=parseInt(big_width);
					//console.log(url+' of width '+big_width);
					var largeWidth = jqthis.attr('data-width');
					//console.log('current width:'+jqthis.attr('width')+', data-width='+largeWidth);
					var largeHeight = jqthis.attr('data-height');
					//console.log('current height:'+original_height+', data-height='+largeHeight);

					delta_height = large_height - original_height;
					//console.log(big_width+'x'+large_height);
					//console.log('delta height:'+delta_height);

					//console.log("Image WxH set to "+big_width+'x'+large_height);
					jqthis.attr('width', big_width);
					jqthis.attr('height', large_height);

					//jqthis.removeAttr('width');
					//jqthis.removeAttr('height');
			  	});
	  		}
		  	

//console.log("Alterting height of iframe");

		var current_height = $(event.target).attr('height');
		//console.log("CURRENT HEIGHT:"+current_height);
		//console.log("DELTA:"+delta_height);
		var new_height = current_height+delta_height;

	  	jqtarget.attr('height', new_height);
	  });	

	  
});
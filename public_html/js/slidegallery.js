var count = 1;

$(document).ready(function(){
	$("#gallery_inner img:not(:first)").fadeTo( 1000, 0.5);
	var max_images = $("#gallery_inner img").length;
	getTitle(count);
	// console.log("Max: " + max_images);
})

function navigate(offsets){
	var index = 0;
	var max_images = $("#gallery_inner img").length;
	 $("#gallery_prev").click(function() {
		 index = (index + offsets.length - 1) % offsets.length;
		 $("#gallery_inner").css('left', -offsets[index] + 'px');
		 $("#gallery_inner img:nth-child("+  count + ")").fadeTo( 750, 0.5);
		 $("#gallery_inner img:nth-child("+  (count-1) + ")").fadeTo( 750, 1);
		 count--;
		 if (count < 1 ){
	    	count = max_images;
	    	$("#gallery_inner img:nth-child("+  count + ")").fadeTo( 750, 1);
	    }
		// console.log("Count: " + count + " of " + max_images);

		getTitle(count);
		 return false;
	 });
		
    $("#gallery_next").click(function() {
    	count++;
	    $("#gallery_inner img:nth-child("+  count + ")").fadeTo( 750, 1);
	    $("#gallery_inner img:nth-child("+  (count-1) + ")").fadeTo( 750, 0.5);
	    index = (index + 1) % offsets.length;
	    $("#gallery_inner").css('left', -offsets[index] + 'px');
	    if (count > max_images){
	    	count = 1;
	    	$("#gallery_inner img:nth-child("+  count + ")").fadeTo( 750, 1);
	    }
	    // console.log("Count: " + count + " of " + max_images);

	    getTitle(count);
	    return false;
	});
}

function navigateFront(offsets){
	var count = 1;
	var index = 0;
	var title, url;
	var max_images = $("#gallery_inner a img").length;
	$("#gallery_prev").click(function() {
		 index = (index + offsets.length - 1) % offsets.length;
		 $("#gallery_inner").css('left', -offsets[index] + 'px');
		 $("#gallery_inner a:nth-child("+  count + ") img").fadeTo( 750, 0.5);
		 $("#gallery_inner a:nth-child("+  (count-1) + ") img").fadeTo( 750, 1);
		 count--;
		 if (count < 1 ){
		 	count = max_images;
		 	// console.log("Wrap - Count: " + count + " of " + max_images);
	    	$("#gallery_inner a:nth-child("+  count + ") img").fadeTo( 750, 1);
	    }
	    title = $("#gallery_inner a:nth-child("+  count + ") img").attr("alt");    
	    $("#image_title").html(title);
		 return false;
	 });
		
    $("#gallery_next").click(function() {  
    	count++;  	   
	    $("#gallery_inner a:nth-child("+  count + ") img").fadeTo( 750, 1);
	    $("#gallery_inner a:nth-child("+  (count-1) + ") img").fadeTo( 750, 0.5);
	    
    	//console.log("Count: " + count + " of " + max_images);
	    index = (index + 1) % offsets.length;
	    $("#gallery_inner").css('left', -offsets[index] + 'px');
	    if (count > max_images){
	    	count = 1;
	    	//console.log("Wrap - Count: " + count + " of " + max_images);
	    	$("#gallery_inner a:nth-child("+  count + ") img").fadeTo( 750, 1);	
	    }
	    title = $("#gallery_inner a:nth-child("+  count + ") img").attr("alt");    
	    $("#image_title").html(title);
	    return false;
	});
}

function getTitle(){
	var title = $("#gallery_inner img:nth-child("+  count + ")").attr("alt");
	$("#image_title").html(title);
}


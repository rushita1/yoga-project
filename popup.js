jQuery(function($) {
	 
	    $("a.topopup").click(function() {

	    	var pose_id = $(this).attr("id");
    		var popup = $(this.parentElement.parentElement).find('.content-logged-details');
            loading(); // loading
	            setTimeout(function(pose_id){ // then show popup, deley in .5 second
	            	//pose = getPoseById(pose_id);
	            	
	                loadPopup(popup); // function show popup
	            }, 500); // .5 second
	    return false;
	    });

	    var getPoseById = function(pose_id) {
			for(i in poses) {
				var pose = poses[i];
				if(pose.pose_id == pose_id)
					return pose;
			}
		}
	 
	    /* event for close the popup */
	    $("div.close").hover(
	                    function() {
	                        $('span.ecs_tooltip').show();
	                    },
	                    function () {
	                        $('span.ecs_tooltip').hide();
	                    }
	                );
	 
	    $("div.close").click(function() {
	        disablePopup();  // function close pop up
	    });
	 
	    $(this).keyup(function(event) {
	        if (event.which == 27) { // 27 is 'Ecs' in the keyboard
	            disablePopup();  // function close pop up
	        }
	    });
	 
	        $("div#backgroundPopup").click(function() {
	        disablePopup();  // function close pop up
	    });
	 
	    $('a.livebox').click(function() {
	        alert('Hello World!');
	    return false;
	    });
	 
	     /************** start: functions. **************/
	    function loading() {
	        $("div.loader").show();
	    }
	    function closeloading() {
	        $("div.loader").fadeOut('normal');
	    }
	 
	    var popupStatus = 0; // set value
	 
	    function loadPopup(popup) {
	        if(popupStatus == 0) { // if value is 0, show popup
	            closeloading(); // fadeout loading
	            //var popup = $(this.parentElement.parentElement).find('.content-logged-details');
	            //$("#content-logged-details").fadeIn(0500); // fadein popup div
	            popup.fadeIn(0500);
	            $("#backgroundPopup").css("opacity", "0.7"); // css opacity, supports IE7, IE8
	            $("#backgroundPopup").fadeIn(0001);

	            //renderpopup(pose);
	            popupStatus = 1; // and set value to 1
	        }
	    }
	 
		// function renderpopup(yogapose){
		// 	$('#content-logged-details').empty();
		// 	var template = $('#company-media-object').html();
		// 	var companyTemplate = Handlebars.compile(template);
		// 	var foo = companyTemplate(yogapose);
		// 	$('#content-logged-details').append(foo);
		// }

	    function disablePopup() {
	        if(popupStatus == 1) { // if value is 1, close popup
	            $(".content-logged-details").fadeOut("normal");
	            // popup.fadeOut("normal");
	            $("#backgroundPopup").fadeOut("normal");
	            popupStatus = 0;  // and set value to 0
	        }
	    }
	    /************** end: functions. **************/
	}); // jQuery End

$(function() {

	var cart = [];


	$('.btn').on('click', function() {
		
		// Get our class name resource
		var className = $(this).parent().parent().find('.topopup').text();
		var id = $(this).parent().parent().find('.topopup').attr('id');
		var img = $(this).parent().find('img').clone();

		cart.push({

			name : className,
			img : img,
			id : id

 		});

		renderView();

	 });

	// Click Remove One
	
	$('.savebtn').click(function(){
		event.preventDefault();
		var items = [];
		for(var i in cart) {
			var item = cart[i];
			items.push(item.id);
		}


		//TODO: get the routine name as a field in savePose

		var savePose = {
			pose_id: JSON.stringify(items),
			routine_name: $('#routine-name').val(),

			// pose: $(this).prev().find('.0').text(),
			user_id: $('#form-user-id').val()
		}

		$.ajax({
			url: "routine.php",
			cache: false,
			dataType: 'json',
			type: 'POST',
			data: savePose,
			error: function(data){
				console.log(data + "this is an error");
			},
			success: function(data){
				console.log(data + "success!");
				window.location.replace("showroutine.php?routine_id="+data);
			},
		})
		// $('.main').hide();
		// $('.main2').show();
	});

	
	$('body').on('click', '.cart button', function() {
		var className = $(this).parent().parent().find('.topopup').clone();
		var img = $(this).parent().find('img').clone();
		
		cart.pop({
			name : className,
			img : img
		});

		renderView();
	});

	// Remove All
	$('.removeAll').on('click', function() {

		cart = [];

		renderView();
	});



	// Render the View
	var renderView = function() {


		// Wipe out whatever DOM is currently in the cart
		$('.cart').html('');

		// Loop the entire cart, and build the whole thing
		for (i in cart) {



			$('<li>')
				
				.append(cart[i].name)
				.append(cart[i].img)
				.append('<button>Remove</button>')
				.addClass(i)
				.appendTo('.cart');


		}

	}

	renderView();

});







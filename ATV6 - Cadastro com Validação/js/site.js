window.onload =function(){
			$('.tab').hide();
    		$('#tab1').show();

    		$(".btn").click(function() {
	        	$('.btn').removeClass("active");
	        	$('.tab').hide();
	        	var idTab = $(this).attr('href');
	        	$(idTab).show();
	        	$(this).addClass("active");
    		});
		};
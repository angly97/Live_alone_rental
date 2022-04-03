$(document).ready(function(){

	// Lift card and show stats on Mouseover
	$('.product-card').hover(function(){
			$(this).addClass('animate');
		 }, function(){
			$(this).removeClass('animate');
	});

	// Flip card to the back side
	$('.view_details_AirPurifier').click(function(){
		location.href = './AirPurifierMotion_Detail.php';

	});



	// Flip card back to the front side
	$('#flip-back').click(function(){
		setTimeout(function(){
			setTimeout(function(){}, 100);
		}, 150);
	});
});

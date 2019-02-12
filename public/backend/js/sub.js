	$(document).ready(function(){
	$('.timkiem').keyup(function(){
		var txt = $('.timkiem').val();

		$.post('controller/api/controller_ajax_sub.php', {data: txt}, function(data){

			$('.danhsach').html(data);  
			console.log(data);
		});
	});
});
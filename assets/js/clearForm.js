var descBox = 0;
$('#reviewText').click(function(){
	if(descBox < 1){
		descBox = 1;
		$('#reviewText').val('');
	}
});

// OR THIS

$(document).ready(function(){
	$('#reviewPost').click(function(){
		$('#review.text').val('');
	});
});
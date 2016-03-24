var perPage = 2;
var totalPosts = $('.post-preview').length;

$(function(){
	if ($('#start-position').val() == '') {
		$('#start-position').val(totalPosts);
	}
	loadPage();
});

function loadPage() {
	var startPosition = $('#start-position').val();
	$('.post-preview').each(function() {
		console.log(this.id <= startPosition && this.id > startPosition - perPage);
		if (this.id <= startPosition && this.id > startPosition - perPage){
			$(this).removeClass('hidden');
			$('#hr-' + this.id).removeClass('hidden');
		} else {
			if (!$(this).hasClass('hidden')) {
				$(this).addClass('hidden');
				$('#hr-' + this.id).addClass('hidden');
			}
		}
	});
}

function nextPage() {

}
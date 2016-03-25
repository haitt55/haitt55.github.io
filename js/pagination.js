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
	var currentStartPosition = $('#start-position').val();
	// set start position
	if (currentStartPosition - perPage > 0) {
		$('#start-position').val(currentStartPosition - perPage);
		loadPage();
		showHideNextButton(currentStartPosition - perPage);
	}
}

function showHideNextButton(startPosition) {
	if (startPosition - perPage < perPage) {
		if (!$('#next-page').hasClass('hidden')) {
			$('#next-page').addClass('hidden');
		} else {
			$('#next-page').removeClass('hidden');
		}
	}
}

function showHideBackButton(endPosition) {
	if (endPosition + perPage > totalPosts) {
		if (!$('#back-page').hasClass('hidden')) {
			$('#back-page').addClass('hidden');
		} else {
			$('#back-page').removeClass('hidden');
		}
	}
}
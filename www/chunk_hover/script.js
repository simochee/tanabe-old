$(function() {
	var poss = [];
	for(var i=0; i<100; i++) {
		$('body').append('<span class="chunk" style="line-height: 40px">Lorem ipsum dolor sit amet</span>');
		var $this = $('.chunk').eq(i)
		var pos = $this.position();
		var h = $this.height();
		var w = $this.width();
		poss.push(pos.push([w, h]));
	}
	console.log(poss);
	/*
	$('.chunk').hover(function() {
		$(this).addClass('active');
	},
	function() {
		$(this).removeClass('active');
	});
	*/
	
	$(window).mousedown(function(e) {
		console.log(e.pageX);
	});
});

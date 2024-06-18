$(function(){
	if($('target').length > 0)
	{
		// Elemento existe, dar scroll em algum objeto
		var elemento = "#"+$('target').attr('target');
		var divScroll = $(elemento).offset().top;

		$('html,body').animate({'scrollTop': divScroll});
	}
})
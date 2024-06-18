$(function(){
	$('.nav-mobile').click(function(){
		var listaMenu = $('.nav-mobile ul');


		if(listaMenu.is(':hidden'))
		{
			listaMenu.show();
		}
		else
		{
			listaMenu.hide();
		}

	})
})
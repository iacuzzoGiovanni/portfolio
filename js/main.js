( function ( $ ) {
	
	//Global vars
	var infosHTML = '<div id="infosWrapper"><a href="#" class="icon-cancel"></a><div class="container"><img src="" width="460" height="400"><div id="moreInfos"><h1>Smartplan</h1><div id="littleTechnologies"><span>php</span><span>wordpress</span><span>design</span></div><p>Tout le monde fait du travail. Pourtant il n\'est pas le même partout. Tout simplement car certains sont de bons éléments et d\'autres pas. la vie est faites ainsi</p> <a href="#">Voir le site</a></div></div></div>';
	
	//Method
	var displayInfos = function(e){
		$(this).addClass("infosOn");
		$(this).parent().after(infosHTML);
		$("#infosWrapper").slideDown();

		$.ajax({
            url: php_array.admin_ajax,
            type: "GET",
            data: ({ action:'get_post_infos'}),
            success: function( data, textStatus, jqXHR ){

                var ajax_response = data;
                console.log( ajax_response );                                                        

            }
        });
	};

	var cancelInfos = function(e){
		e.preventDefault();
		$("article").removeClass("infosOn");
		$("#infosWrapper").slideUp("middle", function(){
			$("#infosWrapper").remove();
		});
	};

	//Onload routine
	$(function(){
		$("#realisations article").on("click", displayInfos);
		$("body").delegate(".icon-cancel", "click", cancelInfos);
	});

}( jQuery ) );

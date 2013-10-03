( function ( $ ) {
	
	//Global vars
	var infosHTML = '<div id="infosWrapper"><a href="#" class="icon-cancel"></a><div class="container"><img src="" width="460" height="400"><div id="moreInfos"><h1></h1><div id="littleTechnologies"></div><p></p><a href="#">Voir le site</a></div></div></div>';
	
	//Method
	var displayInfos = function(e){
		
		var post_id = parseInt($(this).attr("data-id")),
			article = $(this),
			information;
		
		$.ajax({
            url: php_array.admin_ajax,
            type: "POST",
            data: ({ action:'get_post_infos', id:post_id}),
            success: function(data){
            	
            	//Recuperations des données
            	information = JSON.parse(data);
            	article.parent().after(infosHTML);

            	//Ajout des infos dans l'html
            	$("#infosWrapper img").attr("src", information.image);
            	$("#infosWrapper h1").text(information.title);
            	for(var i = 0; i<information.technologies.length; i++){
            		$("#infosWrapper #littleTechnologies").append("<span>" + information.technologies[i].name + "</span>");
            	}
				$("#infosWrapper p").text(information.description);
            	$("#infosWrapper #moreInfos a").attr("href", information.lien);

            	//affichage et effet à l'écran
            	article.addClass("infosOn");                                                     
                $("#infosWrapper").slideDown();
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
		$("body").on("click", "#realisations article",displayInfos);
		$("body").on("click", ".icon-cancel", cancelInfos);
	});

}( jQuery ) );

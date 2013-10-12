( function ( $ ) {
	
	//Global vars
	var infosHTML = '<div id="infosWrapper"><a href="#" class="icon-cancel"></a><div class="container"><img src="" width="460" height="400"><div id="moreInfos"><h1></h1><div id="littleTechnologies"></div><p></p><a href="#">Voir le site</a></div></div></div>',
		boolInfos = false;
	
	//Method
	var displayInfos = function(e){
		e.preventDefault();	
		
		var post_id = parseInt($(this).attr("data-id")),
			article = $(this),
			information,
			oldRow = $("#infosWrapper").attr("class");
		
		$.ajax({
            url: php_array.admin_ajax,
            type: "POST",
            data: ({ action:'get_post_infos', id:post_id}),
            success: function(data){

            	//Recuperations des données
            	information = JSON.parse(data);
            	if(boolInfos){
            		if(oldRow != article.parent().attr("data-row")){
            			$("#infosWrapper").slideUp("middle", function(){
							$("#infosWrapper").remove();
							article.parent().after(infosHTML);
							addInfos(information);
							$("#infosWrapper").slideDown();
							$("#infosWrapper").removeClass();
            				$("#infosWrapper").addClass(article.parent().attr("data-row"));
						});
            		}else{
            			$("#infosWrapper").remove();
	            		article.parent().after(infosHTML);
	            		addInfos(information);
	            		$("#infosWrapper").css("display","block");
            		}

            	}else{
            		article.parent().after(infosHTML);
            		addInfos(information);
            	}

            	//affichage et effet à l'écran
            	if(boolInfos){
            		$("article").removeClass("infosOn");
            	}else{	            		                                                     
                	$("#infosWrapper").slideDown();
            	}
            	article.addClass("infosOn");
            	$("#infosWrapper").removeClass();
            	$("#infosWrapper").addClass(article.parent().attr("data-row"));
                boolInfos = true;
            }
        });
	};

	var addInfos = function(information){
		$("#infosWrapper img").attr("src", information.image);
    	$("#infosWrapper h1").text(information.title);
    	$("#infosWrapper #littleTechnologies span").remove();
    	for(var i = 0; i<information.technologies.length; i++){
    		$("#infosWrapper #littleTechnologies").append("<span>" + information.technologies[i].name + "</span>");
    	}
		$("#infosWrapper p").html(information.description).text();
    	$("#infosWrapper #moreInfos a").attr("href", information.lien);
	};

	var cancelInfos = function(e){
		e.preventDefault();
		boolInfos = false;
		$("article").removeClass("infosOn");
		$("#infosWrapper").slideUp("middle", function(){
			$("#infosWrapper").remove();
		});
	};

	var sendForm = function(e){
		e.preventDefault();

		var $contactForm = $(this),
			isNameOk = checkIsNotEmpty('nom'),
			isEmailOk = checkIsNotEmpty('email') && checkIsMailOk('email'),
			isSujetOk = checkIsNotEmpty('sujet'),
			isTelOk = checkIsNotEmpty('tel') && checkIsNumberOk('tel'),
			isMessageOk = checkIsNotEmpty('message');

		if( isNameOk && isEmailOk && isMessageOk && isSujetOk && isTelOk ){

			$.ajax({
				url: $contactForm.attr('action'),
				type:"post",
				data: $contactForm.serialize(),
				success:function(data){
					$(".formIsSend").css("opacity","0");
					$(".formIsSend").css("display","block");
					$(".formIsSend").animate({opacity: 1}, 500, function(){resetToZero()}).delay(1000).animate({opacity: 0}, 500, function(){$(this).css("display","none");});
					
				}
			});
		}
	};

	var checkIsNotEmpty = function(input){
		if(!$.trim($("#"+input).val())){
			$("#"+input).addClass("error");
			$("#"+input).attr("placeholder",'');
			$("#"+input).parent().find(".errorText").css("display","block");
			return false;
		}else{
			return true;
		}
	};

	var checkIsMailOk = function(input){
		var reg = new RegExp('[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}', 'i');
		
		if(!reg.test($("#"+input).val())){
			$("#"+input).addClass("error");
			$("#"+input).attr("placeholder",'');
			$("#"+input).parent().find(".errorText").css("display","block");
			return false;
		}else{
			return true;
		}
	};

	var checkIsNumberOk = function(input){
		if(!$.isNumeric($("#"+input).val())){
			$("#"+input).addClass("error");
			$("#"+input).attr("placeholder",'');
			$("#"+input).parent().find(".errorText").css("display","block");
			return false;
		}else{
			return true;
		}
	};

	var resetInput = function(e){
		$(this).parent().find(".errorText").css("display","none");
	};

	var resetInput2 = function(e){
		$(this).css("display","none");
		$(this).parent().find("input").focus();
	};

	var resetToZero = function(){
		$("input").val("").removeClass("error");
		$("#nom").attr("placeholder","Nom");
		$("#email").attr("placeholder","Email");
		$("#tel").attr("placeholder","Tél");
		$("#sujet").attr("placeholder","Sujet");
		$("#message").val("").attr("placeholder","Message").removeClass("error");
	};

	var smoothScroll = function(e){
		var the_id = $(this).attr("href"); 
		$('html, body').animate({  
			scrollTop:$(the_id).offset().top  
		}, 'slow');  
		e.preventDefault();
	};

	var displayLink = function(e){
		$(this).find(".alreadyInfos").addClass("clickedInfos");
		setTimeout(unDisplayLink, 5000);
	};

	var unDisplayLink = function(){
		$(".alreadyInfos").removeClass("clickedInfos");
	};

	//Onload routine
	$(function(){
		$("body").on("click", ".full article",displayInfos);
		$("body").on("click", ".icon-cancel", cancelInfos);
		$("#contactForm").on("submit", "form", sendForm);
		$("#contactForm").on("focus", ".error", resetInput);
		$("#contactForm").on("click", ".errorText", resetInput2);
		$("#menu-portfolio").on("click", "a", smoothScroll);
		$("#mobileRea").on("click", "article", displayLink);
	});

}( jQuery ) );

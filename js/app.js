/*** PÁGINA DE TURISMOS ****/

$(document).ready(function(){
	var classActive = 'active';

    $('#tab-menu a').first().addClass(classActive);
	$('.item').first().addClass(classActive);


 	$('#tab-menu a').click(function(e){
		e.preventDefault();
		var itemId = $(this).attr('href');

		$('#tab-menu a, .item').removeClass(classActive);
		$(this).addClass(classActive);
		$(itemId).addClass(classActive);

		console.log("OSISISDISDO");

    });

});


/*** PÁGINA NOSSA FROTA ***/

$(document).ready(function(){
	var classActive = 'active';

    $('#tab-menu_frota a').first().addClass(classActive);
	$('.item_frota').first().addClass(classActive);


 	$('#tab-menu_frota a').click(function(e){
		e.preventDefault();
		var itemId = $(this).attr('href');

		$('#tab-menu_frota a, .item_frota').removeClass(classActive);
		$(this).addClass(classActive);
		$(itemId).addClass(classActive);

		console.log("OSISISDISDO");

    });

});


/*** PÁGINA CONTATOS ***/

var coll = document.getElementsByClassName("perguntas_frequentes");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
       
    var resposta_pergunta = this.nextElementSibling;
    if (resposta_pergunta.style.display === "block") {
      resposta_pergunta.style.display = "none"; 
        $(".resposta_pergunta").each().slideToggle(800);
    
        
    } else {
      resposta_pergunta.style.display = "block";

              
    }
  });
}


// AREA DO SLIDE //

$('#slide_home > :first').addClass('active'); // Adiciona a classe active no primeiro item ('div' no caso)  que estiver dentro do #slide_home

function rotateSlide() {
	var activeSlide = $('#slide_home > .active'), // ele vai agir em todos #slide_home que contem active
	nextSlide = activeSlide.next();   // proximo slide
	
	if(nextSlide.length == 0) { // Se não existir um próximo slide (0) ele retorna ao primeiro
		nextSlide = $('#slide_home > :first');
		
	}
	activeSlide.removeClass('active');
	nextSlide.addClass('active');
    
	
}

setInterval(rotateSlide, 5000); // A CADA 5 SEGUNDOS O SLIDE VAI MUDAR

$(document).ready(function(){
    var classActive = 'active';
    
    $("#texto_slide").hover(function(){
        $('#linha_cima').addClass(classActive);
        $('#linha_baixo').addClass(classActive);
        var div = $(".texto_slide");  
        // div.animate({fontSize: '45px'}, "faster");
        $('#texto_slide_2').addClass(classActive);
        
    });
    
    $("#texto_slide").click(function(){
        $('#linha_cima').removeClass(classActive);
        $('#linha_baixo').removeClass(classActive);
        var div = $(".texto_slide");  
        // div.animate({fontSize: '45px'}, "faster");
        $('#texto_slide_2').removeClass(classActive);
        
    });    
    
});

$(document).ready(function(){
    var classActive = 'active';
    
    $("#texto_slide_rotate2 ").hover(function(){
        $('#linha_baixo_rotate2').addClass(classActive);
        $('#sub_texto_slide').addClass(classActive);
        $('.sub_texto_slide_2').addClass(classActive);        

        
    });
    
    $("#texto_slide_rotate2 ").click(function(){
        $('#linha_baixo_rotate2').removeClass(classActive);
        $('#sub_texto_slide').removeClass(classActive);
        $('.sub_texto_slide_2').removeClass(classActive);        

        
    });
    
});


$(window).scroll(function() {
    var windowTop = $(this).scrollTop();
    $('.container_passagens').each(function() {
       if(windowTop > $(this).offset().top - 600) {
           $(this).addClass('active');
       } else {
           $(this).removeClass('active')
       }
        
    });
});

$(window).scroll(function() {
    var windowTop = $(this).scrollTop();
    $('.container_passagens_2').each(function() {
       if(windowTop > $(this).offset().top - 600) {
           $(this).addClass('active');
       } else {
           $(this).removeClass('active')
       }
        
    });
});


// LINK RODAPÉ - PARA O TOPO DO CABEÇALHO

$('#up_page').click(function(e){
	e.preventDefault();
	$('html, body').animate({
		scrollTop: 0
	}, 500)
});


// MISSÃO VISÃO E VALORES 

// Parallax 

$(document).ready(function(){
    $('div.bgParallax').each(function(){
        var $obj = $(this);

        $(window).scroll(function() {
            var yPos = -($(window).scrollTop() / $obj.data('speed')); 

            var bgpos = '50% '+ yPos + 'px';

            $obj.css('background-position', bgpos );

        }); 
    });
});

// Posotos Rodoviarios - Label

$(document).ready(function(){
    var classActive = 'active';
    
    $("#select_selecione_estado").click(function(){
        $('#selecione_label').addClass(classActive);
        
    });
    
    $("#select_selecione_cidade").click(function(){
        $('#selecione_label_cidade').addClass(classActive);
        
    });    
    
});


// NOSSAS FROTAS - Background Move 

var lFollowX = 0,
    lFollowY = 0,
    x = 0,
    y = 0,
    friction = 2 / 30;


function moveBackground() {
  x += (lFollowX - x) * friction;
  y += (lFollowY - y) * friction;
  
  translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

  $('#background_frotas').css({
    '-webit-transform': translate,
    '-moz-transform': translate,
    'transform': translate
  });
    
  $('#meteor_contatos1').css({
    '-webit-transform': translate,
    '-moz-transform': translate,
    'transform': translate
  });  
    
  $('#meteor_contatos3').css({
    '-webit-transform': translate,
    '-moz-transform': translate,
    'transform': translate
  });   
        
  $('#meteor_contatos4').css({
    '-webit-transform': translate,
    '-moz-transform': translate,
    'transform': translate
  });  
    
  window.requestAnimationFrame(moveBackground);
    
}


$(window).on('mousemove click', function(e) {

  var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
  var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
  lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
  lFollowY = (10 * lMouseY) / 100;

});

moveBackground();

////////////////////////////////// ANIMAÇÃO ESPECÍFICA PARA A LUA //////////////////////////////////

var lFollowXX = 5,
    lFollowYY = 5,
    xx = 0,
    yy = 0,
    frictionn = 2 / 30;

function moveBackground2() {
  xx += (lFollowXX - xx) * frictionn;
  yy += (lFollowYY - yy) * frictionn;
  
  translate = 'translate(' + xx + 'px, ' + yy + 'px) scale(1.1)';

    
  $('#meteor_contatos2').css({
    '-webit-transform': translate,
    '-moz-transform': translate,
    'transform': translate
  });  
        
  window.requestAnimationFrame(moveBackground2);
    
}


$(window).on('mousemove click', function(e) {

  var lMouseXX = Math.max(-20, Math.min(20, $(window).width() / 2 - e.clientX));
  var lMouseYY = Math.max(-20, Math.min(20, $(window).height() / 2 - e.clientY));
  lFollowXX = (20 * lMouseXX) / 100; // 100 : 12 = lMouxeX : lFollow
  lFollowYY = (10 * lMouseYY) / 100;

});

moveBackground2();


// PARALAX 2 
$(document).ready(function(){
    $('div.bgParallax2').each(function(){
        var $obj = $(this);

        $(window).scroll(function() {
            var yPos = -($(window).scrollTop() / $obj.data('speed')); 

            var bgpos = '30px '+ yPos + 'px';

            $obj.css('background-position', bgpos );     
      
            
        }); 
    });
});

// CONTEUDO PARAR ATRAVES DO SCROLL


//$(window).scroll(function(){ // funÃ§Ã£o para pegar o movimento do scroll (barra de rolagem)
//  var top = $(window).scrollTop(); // aqui vc pega a posiÃ§Ã£o da pÃ¡gina
//
//  if(top > 460){ // verifica a posiÃ§Ã£o da pÃ¡gina
//        $("#background_astronalt").addClass('active'); // aqui vc aplica o fade no menu
//        $(".bgParallax2").addClass('active'); 
//        $("#texto_contatos").addClass('active'); 
//  }else{
//        $("#background_astronalt").removeClass('active');
//        $(".bgParallax2").removeClass('active');
//       $("#texto_contatos").removeClass('active');
//        
//       
//        
//  }
//
//});


//$(window).scroll(function() {
//    var windowTop = $(this).scrollTop();
//    $('#background_astronalt').each(function() {
//       if(windowTop > $(this).offset().top - 900) {
//           $(this).addClass('active');
//       } else {
//           $(this).removeClass('active')
//       }
//        
//    });
//});



//$(document).ready(function(){
    
    
//  if(top > 460){ // verifica a posiÃ§Ã£o da pÃ¡gina
//        $("#background_astronalt").addClass('active'); // aqui vc aplica o fade no menu
//        $(".bgParallax2").addClass('active'); 
//        $("#texto_contatos").addClass('active'); 
//  }else{
//        $("#background_astronalt").removeClass('active');
//        $(".bgParallax2").removeClass('active');
//       $("#texto_contatos").removeClass('active');
//        
//       
//        
//  }    

// 	$('.perguntas_frequentes').click(function(){
//        $('.resposta_pergunta').addClass('active');
//
//		console.log("OSISISDISDO");
//
//    });
//
//});



// PROTOTIPO CHATBOT


//$('#chatbot_espaco').click(function(e){
//	e.preventDefault();
//	$('#chatbot_espaco').addClass('active')({
//
//	},)
//});


// SCROLL DUVIDAS FREQUENTES

$('#duvidas_freq_scroll').click(function(e){
	e.preventDefault();
	$('html, body').animate({
		scrollTop: 900
	}, 500)
});


// SCROLL - MANDE UM EMAIL

$('.email_scroll').click(function(e){
	e.preventDefault();
	$('html, body').animate({
		scrollTop: 1790
	}, 500)
});


// PÁGINA DE COMPRAS - CLICAR NO ASSENTO 

$(document).ready(function(){
    $('.assento_cadeira').each(function(){
        $(this).click(function(){      
            $(this).toggleClass('selecionado');      

        });
    });
    
    
    
});

$('.mobile-btn').click(function(){
   $(this).toggleClass('active');
    $('#menu').toggleClass('active');
    
});







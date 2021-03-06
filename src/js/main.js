function gtag_report_contact_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-339424182/k9CyCNbA1-oCELbn7KEB',
      'event_callback': callback
  });
  return false;
}
  
  
  //test navigator language

  var userLang = navigator.language || navigator.userLanguage; 
  //alert ("O idioma do navegador é: " + userLang.substr(0,2));



  // run function after page load :: get/set localstorage value and run function
  document.addEventListener("DOMContentLoaded", function(event) {

      var appLang = localStorage.getItem('lang');

      

      if (userLang.substr(0,2)=='pt' && appLang === null){
          appLang='pt';

      }else if (appLang === null) {  
          appLang='en';

      }


      localStorage.setItem('lang', appLang); // update local-storage

      // contentUpdate function with value from local-storage - en, ru..
      contentUpdate(appLang); 

      // select radiobutton which has data-value == local storage value
     // document.querySelector('[data-value="'+appLang+'"]').checked = true;
     
  
  });

  // change innerhtml on radiobtn click
  function changeLang(langVal){
  // set local-storage lang value from value given in onchange="changeLang(value)"
  localStorage.setItem('lang', langVal);

  // fun contentUpdate function with value from onchange="changeLang(value)"
  contentUpdate(langVal);
  }

  // content/innerhtml update/assign
  function contentUpdate(cl){
     // alert(cl);
  // get language json file
  fetch('src/lang/'+cl+'.json')
      .then(response=> response.json())
      .then(langJSON => {
                  // get current langage contents in array
      //var currLang = [Object.keys(langJSON)][1],
      //var currLang = JSON.parse(langJSON);

      // set languange menu
      if (document.getElementById('selectedLanguage'))
      document.getElementById('selectedLanguage').innerHTML='<img src="src/imgs/img-'+cl+'.png" alt="" /> '+langJSON['txtLang'];


      // get current language content array length
      langCont = document.querySelectorAll('.langchange').length; //Object.keys(langJSON).length; //Object.entries(currLang).length;
      
      //alert(langCont);

      for(let i = 0; i < langCont; i++){
      // get selectors which has .langchange classes
      var getSelector = document.querySelectorAll('.langchange')[i],
          // get data-key attribute from .langchange class selectors
          getAttr = getSelector.getAttribute('data-key');

      // test if the selector is image
      if(getSelector.nodeName.toLowerCase() === 'img'){
          getSelector.src='src/imgs/'+langJSON[getAttr];
          //alert(getAttr);
      }else{
      // assign the data-key value from current language array to the .langchange[data-key] selector
      getSelector.innerHTML = langJSON[getAttr];
      }
  }

      })



  }
  
  
  
  // SWIPERJS
   var swiper = new Swiper(".card-players", {
     slidesPerView: 3,
     spaceBetween: 50,
     pagination: {
       clickable: true,
     },
     autoplay: {
       delay: 2500,
       disableOnInteraction: false,
     },
     navigation: {
       nextEl: ".icon-avancar",
     },

     breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 2,
          spaceBetween: 30
        },
        // when window width is >= 640px
        640: {
          slidesPerView: 3,
          spaceBetween: 30
        }
      }

   });

  // SWIPERJS
   var swiper = new Swiper(".card-depoimentos", {
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 50,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      clickable: true,
    },
    autoplay: {
      delay: 10000,
      disableOnInteraction: true,
    },
    navigation: {
      nextEl: ".icon-avancar",
    },
     breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 1,
          spaceBetween: 30
        },
        // when window width is >= 640px
        640: {
          slidesPerView: 3,
          spaceBetween: 40
        }
      }
   });

   function changePlan(element){

    //change class active
    $.each($('.selectPlanoption'), function(key, value) {
      $(value).attr('class','btn btn__blue selectPlanoption');

    });

    $(element).attr('class','btn btn__blue--active selectPlanoption');

      var precos = {
        1: 99.00,
        2: 189.00,
        3: 499.00,
      };
      var multiplicar = $(element).data('multiplicar');
      var desconto = $(element).data('desconto');

      $.each($('.periodo-item'), function(key, value) {
        var plano = $(value).data('plano');
        var preco = precos[plano] * multiplicar;
        var preco_com_desconto = (preco*(1-(desconto/100))).toFixed(2);
        var preco_mensal_com_desconto =(precos[plano]*(1-(desconto/100))).toFixed(2);
        if (desconto==0){
          $(value).find('.planos__card-desconto').hide();
          $(value).find('.planos__card-cobrado').hide();
          $(value).find('.preco').html(preco_com_desconto.replace('.',','));
        }else{
          $(value).find('.planos__card-desconto').html(precos[plano].toFixed(2).replace('.',','));
          $(value).find('.planos__card-desconto').show();
          $(value).find('.preco').html(preco_mensal_com_desconto.replace('.',','));
          $(value).find('.preco_cobrado').html(preco_com_desconto.replace('.',','));
          $(value).find('.preco_periodo').html(multiplicar);
          $(value).find('.planos__card-cobrado').show();
        }
      });

   }

    //    CALCULAR VALORES PLANOS
   $(function() {
     // valores sem desconto
     var precos = {
       1: 99.00,
       2: 189.00,
       3: 499.00,
     };
     // Quando trocar...
         $("#periodo").on('change', function() {
           var periodo = this;
           var escolha = $(this).val();
           var multiplicar = $(this).find(':selected').data('multiplicar');
           var desconto = $(this).find(':selected').data('desconto');

           $.each($('.periodo-item'), function(key, value) {
             var plano = $(value).data('plano');
             var preco = precos[plano] * multiplicar;
             var preco_com_desconto = (preco*(1-(desconto/100))).toFixed(2);
             $(value).find('.preco').text(preco_com_desconto);
           });
         });
       $("#periodo").trigger('change');
     });
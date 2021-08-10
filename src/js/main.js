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
             var preco_com_desconto = (preco - (preco / 100 * multiplicar)).toFixed(2);
             $(value).find('.preco').text(preco_com_desconto);
           });
         });
       $("#periodo").trigger('change');
     });
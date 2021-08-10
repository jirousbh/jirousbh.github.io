<?php
define('U', '');
$titulo = "AppClick - A melhor plataforma para transformar os seus cliques em verdadeiros resultados";
include_once(U . 'includes/header.php');
?>

<main class="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-12">
                <div class="header__display display-heading">A melhor plataforma para transformar os seus cliques em
                    verdadeiros resultados</div>
                <p class="header__subtitulo">Otimize a experiência mobile de mais de <strong>90%</strong> dos seus
                    usuários e escale o poder das suas conversões com apenas 1 clique!</h5>
                <div class="d-sm-flex my-4">
                    <a href="" class="btn btn__blue">Faça seu teste grátis</a>
                    <a href="#planos" class="btn btn__blue--outline">Conheça nossos planos</a>
                </div>
                <div class="d-flex align-items-center">
                    <i class="icon__check"></i><span> Sem necessidade de <strong>cartão de crédito</strong></span>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="header__bg-woman">
                    <img class="header__animation"
                        src="<?php echo U?>src/imgs/icon/img-header-background-woman-desktop-mockup.png" alt="">
                </div>
            </div>
        </div>
    </div>
</main>

<section class="players">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-2 col-12 text-center text-sm-start">
                <span class="players__titulo">Grandes players que já utilizam</span>
            </div>
            <div class="col-md-10 players-container">
                <!-- Swiper -->
                <div class="swiper-container card-players">
                    <div class="swiper-wrapper">
                        <!-- Cards -->
                        <div class="swiper-slide">
                            <div class="players__card">
                                <div class="players__card--img">
                                    <img src="<?php echo U?>src/imgs/placeholder-user.png" alt="">
                                </div>
                                <div class="players__card__conteudo">
                                    <span class="players__card__conteudo--titulo">Peter Jordan</span>
                                    <span class="players__card__conteudo--canal">Ei Nerd</span>
                                </div>
                            </div>
                        </div>
                        <!-- Cards -->
                        <!-- Cards -->
                        <div class="swiper-slide">
                            <div class="players__card">
                                <div class="players__card--img">
                                    <img src="<?php echo U?>src/imgs/img-juliano-torriani.png" alt="">
                                </div>
                                <div class="players__card__conteudo">
                                    <span class="players__card__conteudo--titulo">Juliano Torriani</span>
                                    <span class="players__card__conteudo--canal">Produtor Digital</span>
                                </div>
                            </div>
                        </div>
                        <!-- Cards -->
                        <!-- Cards -->
                        <div class="swiper-slide">
                            <div class="players__card">
                                <div class="players__card--img">
                                    <img src="<?php echo U?>src/imgs/img-bagy.png" alt="">
                                </div>
                                <div class="players__card__conteudo">
                                    <span class="players__card__conteudo--titulo">Bagy</span>
                                    <span class="players__card__conteudo--canal">Startup</span>
                                </div>
                            </div>
                        </div>
                        <!-- Cards -->
                    </div>

                    <!-- Next -->
                    <div class="icon-avancar"></div>
                </div>
            </div>
        </div>
</section>

<article class="como-funciona">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12 text-sm-center">
                <h2 class="como-funciona__titulo" data-aos="fade-down">Como funciona?</h2>
                <p class="como-funciona__texto">O AppClick gera todos os seus links utilizando a Tecnologia de deep
                    links. Dessa forma, o sistema identifica se o clique leva para algum aplicativo e, se for o caso,
                    ele redireciona o usuário direto ao app, seja <strong>Youtube, Instagram, Twitch, iFood,
                        Spotify,</strong> entre outros.</p>
                <h3 class="como-funciona__subtitulo">Basicamente, o fluxo funciona dessa forma</h2>
            </div>
        </div>
        <div class="como-funciona--background">
            <div class="col-md-12 text-center">
                <h3>www.clico.link/encurtador</h3>
                <figure>
                    <img src="<?php echo U ?>src/imgs/como-funciona-appclick.svg" alt="" class="d-none d-sm-block">
                    <img src="<?php echo U ?>src/imgs/como-funciona-appclick-mobile.svg" alt="" class="d-block d-sm-none">
                </figure>
            </div>
            <div class="col-md-7">
                <h2 class="como-funciona__subtitulo">Isso garante que...</h2>
            </div>
            <div class="row justify-content-center">
                <!-- Passos -->
                <div class="col-md-4">
                    <div class="como-funciona--background__card"  >
                        <i class="icon__numero-um"></i>
                        <p>A experiência pós-clique dos usuários seja positiva tanto no desktop quanto no mobile,
                            melhorando esse último em até 90%;</p>
                    </div>
                </div>
                <div class="col-md-4" >
                    <div class="como-funciona--background__card" >
                        <i class="icon__numero-dois"></i>
                        <p>O usuário vai interagir diretamente com o seu conteúdo, aumentando a visualização, a retenção
                            e a possibilidade de conversão;</p>
                    </div>
                </div>
                <!-- Passos -->
            </div>
            <div class="row justify-content-center">
                <!-- Passos -->
                <div class="col-md-4">
                    <div class="como-funciona--background__card"  >
                        <i class="icon__numero-tres"></i>
                        <p>Você identifique os melhores canais de conversão desde o 1º clique e aumente a sua receita;
                        </p>
                    </div>
                </div>
                <div class="col-md-4" >
                    <div class="como-funciona--background__card" >
                        <i class="icon__numero-quatro"></i>
                        <p>Você identifique os melhores canais de conversão desde o 1º clique e aumente a sua receita;
                        </p>
                    </div>
                </div>
                <!-- Passos -->
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-md-6 col-md-auto text-sm-center">
                    <h3 class="como-funciona--background--subtitulo">Tudo isso podendo utilizar links dentro do seu
                        próprio domínio e tendo acesso a um Dashboard com as informações dos cliques em tempo real!</h3>
                    <a href="" class="btn btn__blue">Faça seu teste Grátis</a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="como-funciona--background__card--white" data-aos="fade-down">
                        <p class="como-funciona--background__card--white__texto">Relatórios indicam que usuários fazem
                            conversões
                            em uma <strong>taxa 2,5 vezes mais alta</strong> quando são direcionados
                            por um deep link, em comparação aos links que levam
                            a um Browser.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<article class="para-quem">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <span class="overline">veja quem está usando nossa tecnologia</span>
                <h2 class="para-quem__titulo">O AppClick é indispensável para</h2>
            </div>
            <!-- infoproduto -->
            <div class="col-md-3">
                <div class="para-quem__card">
                    <div class="para-quem__card-img">
                        <img src="<?php echo U?>src/imgs/img-infoproduto.png" alt="">
                    </div>
                    <div class="para-quem__card-texto">
                        <h3>Infoprodutos</h3>
                        <p>Otimize a experiência dos seus clientes e aumente a Conversão dos seus funis de e-mail,
                            youtube, instagram, e outros.</p>
                    </div>
                </div>
            </div>
            <!-- infoproduto -->
            <!-- restaurantes -->
            <div class="col-md-3">
                <div class="para-quem__card">
                    <div class="para-quem__card-img">
                        <img src="<?php echo U?>src/imgs/img-restaurantes.png" alt="">
                    </div>
                    <div class="para-quem__card-texto">
                        <h3>Restaurantes</h3>
                        <p>Transforme cliques em pedidos encaminhando os usuários direto para o seu cardápio nos
                            aplicativos de delivery.</p>
                    </div>
                </div>
            </div>
            <!-- restaurantes -->
            <!-- músicos -->
            <div class="col-md-3">
                <div class="para-quem__card">
                    <div class="para-quem__card-img">
                        <img src="<?php echo U?>src/imgs/img-musicos.png" alt="">
                    </div>
                    <div class="para-quem__card-texto">
                        <h3>Músicos</h3>
                        <p>Redirecione seus ouvintes direto para os aplicativos de streaming
                            e aumente as reproduções e o engajamento nas suas músicas.</p>
                    </div>
                </div>
            </div>
            <!-- músicos -->
            <!-- Streamers -->
            <div class="col-md-3">
                <div class="para-quem__card">
                    <div class="para-quem__card-img">
                        <img src="<?php echo U?>src/imgs/img-streamers.png" alt="">
                    </div>
                    <div class="para-quem__card-texto">
                        <h3>Streamers</h3>
                        <p>Aumente seus espectadores levando-os direto para o aplicativo da sua Stream e aumente o seu
                            público de remarketing.</p>
                    </div>
                </div>
            </div>
            <!-- Streamers -->
            <!-- Loja Virtual -->
            <div class="col-md-3">
                <div class="para-quem__card">
                    <div class="para-quem__card-img">
                        <img src="<?php echo U?>src/imgs/img-loja-virtual.png" alt="">
                    </div>
                    <div class="para-quem__card-texto">
                        <h3>Loja Virtual</h3>
                        <p>Rastreie os cliques nos seus produtos e elabore a melhor estratégia para aumentar suas vendas
                            sem aumentar seu investimento.</p>
                    </div>
                </div>
            </div>
            <!-- Loja Virtual -->
            <!-- Produtores de conteúdo -->
            <div class="col-md-3">
                <div class="para-quem__card">
                    <div class="para-quem__card-img">
                        <img src="<?php echo U?>src/imgs/img-produtores-de-conteudo.png" alt="">
                    </div>
                    <div class="para-quem__card-texto">
                        <h3>Produtores de conteúdo</h3>
                        <p>Aumente as suas visualizações e desenvolva uma audiência forte para aumentar a receita do seu
                            Canal.</p>
                    </div>
                </div>
            </div>
            <!-- Produtores de conteúdo -->
            <!-- Agências -->
            <div class="col-md-3">
                <div class="para-quem__card">
                    <div class="para-quem__card-img">
                        <img src="<?php echo U?>src/imgs/img-agencias.png" alt="">
                    </div>
                    <div class="para-quem__card-texto">
                        <h3>Agências</h3>
                        <p>Organize, rastreie e desenvolva com facilidade as campanhas dos seus clientes e aumente os
                            seus resultados.</p>
                    </div>
                </div>
            </div>
            <!-- Agências -->
            <!-- Gestores de tráfegos -->
            <div class="col-md-3">
                <div class="para-quem__card">
                    <div class="para-quem__card-img">
                        <img src="<?php echo U?>src/imgs/img-gestores-de-trafegos.png" alt="">
                    </div>
                    <div class="para-quem__card-texto">
                        <h3>Gestores de tráfegos</h3>
                        <p>Diminua o tempo de criação e otimização das suas campanhas tendo todos os links centralizados
                            em uma única plataforma.</p>
                    </div>
                </div>
            </div>
            <!-- Gestores de tráfegos -->
        </div>
    </div>
</article>

<article class="funcionalidades" id="funcionalidades">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <i class="icon__funcionalidades"></i>
                <h2>Funcionalidades</h2>
                <span>As funcionalidades mais desejadas <br> por nossos clientes.</span>
            </div>
            <!-- Deshboard -->
            <div class="col-md-4">
                <div class="funcionalidades__card" data-aos="fade-up" >
                    <i class="icon__deshboard"></i>
                    <h3>Dashboard</h3>
                    <p>Centralize todos os seus links em um só lugar e tenha o total controle das suas campanhas em
                        tempo real.</p>
                </div>
            </div>
            <!-- Deshboard -->
            <!-- Pixel -->
            <div class="col-md-4">
                <div class="funcionalidades__card" data-aos="fade-up" >
                    <i class="icon__pixel"></i>
                    <h3>Pixel</h3>
                    <p>Rastreie os cliques dos seus usuários através de Pixels do facebook e crie públicos extremamente
                        quentes e qualificados.</p>
                </div>
            </div>
            <!-- Pixel -->
            <!-- Alteração de Links -->
            <div class="col-md-4">
                <div class="funcionalidades__card" data-aos="fade-up" >
                    <i class="icon__links"></i>
                    <h3>Alteração de Links</h3>
                    <p>Errou um link que já foi enviado? Altere o destino dentro da plataforma e resolva o problema com
                        apenas 3 cliques.</p>
                </div>
            </div>
            <!-- Alteração de Links -->
            <!-- Domínio personalizado -->
            <div class="col-md-4">
                <div class="funcionalidades__card" data-aos="fade-up" >
                    <i class="icon__dominio"></i>
                    <h3>Domínio personalizado</h3>
                    <p>Crie deeplinks utilizando o seu próprio domínio e divulgue o link abertamente em redes sociais,
                        lives, e outros.</p>
                </div>
            </div>
            <!-- Domínio personalizado -->
            <!-- Deep links -->
            <div class="col-md-4">
                <div class="funcionalidades__card" data-aos="fade-up" >
                    <i class="icon__deep"></i>
                    <h3>Deep links</h3>
                    <p>Redirecione seus usuários/clientes direto para o aplicativo selecionado e melhore a experiência
                        deles em até 95% (isso aumenta o seu poder de conversão).</p>
                </div>
            </div>
            <!-- Deep links -->
            <!-- Relatório -->
            <div class="col-md-4">
                <div class="funcionalidades__card" data-aos="fade-up" >
                    <i class="icon__relatorio"></i>
                    <h3>Relatório</h3>
                    <p>Tenha acesso detalhado aos seus resultados, descubra exatamente de onde vem os seus principais
                        clientes e otimize a sua estratégia de marketing.
                    </p>
                </div>
            </div>
            <!-- Relatório -->
        </div>
    </div>
</article>


<section class="aplicativos">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <span class="overline mb-3">Redes sociais e Aplicativos</span>
                <h2 class="aplicativos__titulo">A experiência dos seus clientes e usuários será otimizada em todos esses
                    apps…</h2>
            </div>
            <div class="col-md-6 text-sm-end text-center">
                <span><strong>Não encontrou o aplicativo que você utiliza?</strong></span>
                <p>Entre em contato com a gente e sugira essa integração 😎</p>
                <a href="" class="btn btn__contato">Entre em contato</a>
            </div>
            <!-- Youtube -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-youtube.svg" alt="">
                </div>
            </div>
            <!-- Youtube -->
            <!-- instagram -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-instagram.svg" alt="">
                </div>
            </div>
            <!-- instagram -->
            <!-- tiktok -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-tiktok.svg" alt="">
                </div>
            </div>
            <!-- tiktok -->
            <!-- facebook -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-facebook.svg" alt="">
                </div>
            </div>
            <!-- facebook -->
            <!-- whatsapp -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-whatsapp.svg" alt="">
                </div>
            </div>
            <!-- whatsapp -->
            <!-- twitter -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-twitter.svg" alt="">
                </div>
            </div>
            <!-- twitter -->
            <!-- telegram -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-telegram.svg" alt="">
                </div>
            </div>
            <!-- telegram -->
            <!-- snapchat -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-snapchat.svg" alt="">
                </div>
            </div>
            <!-- snapchat -->
            <!-- clubhouse -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-clubhouse.svg" alt="">
                </div>
            </div>
            <!-- clubhouse -->
            <!-- spotify -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-spotify.svg" alt="">
                </div>
            </div>
            <!-- spotify -->
            <!-- deezer -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-deezer.svg" alt="">
                </div>
            </div>
            <!-- deezer -->
            <!-- iheart-radio -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-iheart-radio.svg" alt="">
                </div>
            </div>
            <!-- iheart-radio -->
            <!-- amazon-music -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-amazon-music.svg" alt="">
                </div>
            </div>
            <!-- amazon-music -->
            <!-- apple-music -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-apple-music.svg" alt="">
                </div>
            </div>
            <!-- apple-music -->
            <!-- soundcloud -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-soundcloud.svg" alt="">
                </div>
            </div>
            <!-- soundcloud -->
            <!-- twitch -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-twitch-tv.svg" alt="">
                </div>
            </div>
            <!-- twitch -->
            <!-- booyah -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-booyah.svg" alt="">
                </div>
            </div>
            <!-- booyah -->
            <!-- ifood -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-ifood.svg" alt="">
                </div>
            </div>
            <!-- ifood -->
            <!-- ubereats -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-ubereats.svg" alt="">
                </div>
            </div>
            <!-- ubereats -->
            <!-- aiqfome -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-aiqfome.svg" alt="">
                </div>
            </div>
            <!-- aiqfome -->
            <!-- rappi -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-rappi.svg" alt="">
                </div>
            </div>
            <!-- rappi -->
            <!-- amazon -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-amazon.svg" alt="">
                </div>
            </div>
            <!-- amazon -->
            <!-- mercadolivre -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-mercadolivre.svg" alt="">
                </div>
            </div>
            <!-- mercadolivre -->
            <!-- shopee -->
            <div class="col-md-2 col-6">
                <div class="aplicativos__card">
                    <img src="<?php echo U?>src/imgs/aplicativos/aplicativo-shopee.svg" alt="">
                </div>
            </div>
            <!-- shopee -->
        </div>
    </div>
</section>


<section class="planos" id="planos">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h2 class="planos__titulo mb-4">Escolha o plano que melhor funciona para você!</h2>
                <p class="planos__experimentar mb-4">Ou experimente o nosso <a href=""><strong>plano grátis</strong></a> com até 500 cliques no primeiro mês</span>
            </div>
            <!-- Selecionar Meses -->
            <div class="col-md-7 mb-4">
                <div class="planos__selecionar">
                    <div class="planos__selecionar-titulo">
                        <span><strong>Selecione o período de cobrança</strong></span>
                    </div>
                    <div class="planos__selecionar-form">
                        <select id="periodo" class="form-select">
                            <option data-desconto="0" data-multiplicar="1" value="1">Mensal</option>
                            <option data-desconto="6" data-multiplicar="6" value="2">Semestral 6% desc.</option>
                            <option data-desconto="12" data-multiplicar="12" value="3">Anual 12% desc.</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="periodo-selecionado">
             <!-- Selecionar Meses -->
             <!-- Pacotes Start -->
                <div class="col-md-4">
                    <div class="planos__card periodo-item" data-plano="1"  data-aos="fade-up">
                        <h2>Starter</h3>
                        <span>Dê os primeiros passoas, análise seus engajamentos de um jeito fácil.</span>
                        <div class="d-flex my-4">
                            <h2 class="planos__card-preco">R$ <span class="planos__card-preco preco"></span></h2>
                        </div>
                        <a href="" class="btn btn__assinar">Assinar plano Start</a>
                        <div class="planos__card-descricao">
                            <ul class="list-unstyled">
                                <li> <span><i class="icon__check-green-outline"></i> 5.000 números de cliques</span></li>
                                <li> <span><i class="icon__check-green-outline"></i> Experiências de link de aplicativo para iOS e Android</span></li>
                                <li> <span><i class="icon__check-green-outline"></i> Código QR Dinamico</span></li>
                                <li> <span><i class="icon__check-green-outline"></i> Google Tag Manager</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
             <!-- Pacotes Start -->
             <!-- Pacotes Professional -->
             <div class="col-md-4">
                    <div class="planos__card periodo-item" data-plano="2"  data-aos="fade-up">
                        <h2>Professional <span class="planos__card-tag">Recomendado</span></h3>
                        <span>Dê os primeiros passoas, análise seus engajamentos de um jeito fácil.</span>
                        <div class="d-flex my-4">
                        <h2 class="planos__card-preco">R$ <span class="planos__card-preco preco"></span></h2>
                        </div>
                        <a href="" class="btn btn__assinar">Assinar plano Profissional</a>
                        <div class="planos__card-descricao">
                            <ul class="list-unstyled">
                                <li> <span><i class="icon__check-green-outline"></i>10.000 números de cliques </span></li>
                                <p><strong>Funcionalidades do Start e mais:</strong></span>
                                <li> <span><i class="icon__check-green-outline"></i> Suporte via Email</span></li>
                                <li> <span><i class="icon__check-green-outline"></i> Suporte via WhatsApp</span></li>
                                <li> <span><i class="icon__check-green-outline"></i> UTM Source, Ref, Medium</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
             <!-- Pacotes Professional -->
              <!-- Pacotes Enterprise -->
              <div class="col-md-4">
                    <div class="planos__card periodo-item" data-plano="3"  data-aos="fade-up">
                        <h2>Enterprise</h2>
                        <span>Dê os primeiros passoas, análise seus engajamentos de um jeito fácil.</span>
                        <div class="d-flex my-4">
                        <h2 class="planos__card-preco">R$ <span class="planos__card-preco preco"></span></h2>
                        </div>
                        <a href="" class="btn btn__assinar">Assinar plano Enterprise</a>
                        <div class="planos__card-descricao">
                            <ul class="list-unstyled">
                                <li> <span><i class="icon__check-green-outline"></i>30.000 números de cliques  </span></li>
                                <p><strong>Funcionalidades do Start e mais:</strong></p>
                                <li> <span><i class="icon__check-green-outline"></i> Encurtador de link</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
             <!-- Pacotes Enterprise -->
        </div>
    </div>
</section>

<section class="tabela">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h2 class="tabela__titulo">Compare os planos</h2>
            </div>
            <div class="col-md-12">
            <table class="table table-responsive-sm table-hover">
                <thead>
                    <tr>
                        <th scope="col">Descrição</th>
                        <th scope="col">Free Trial</th>
                        <th scope="col">Starter</th>
                        <th scope="col">Professional</th>
                        <th scope="col">Enterprise</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Quantidade de cliques</th>
                        <td>500</td>
                        <td>5.000</td>
                        <td>10.000</td>
                        <td>30.000</td>
                    </tr>
                    <tr>
                    <th scope="row">Experiências de link de aplicativo para IOS e Android</th>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                    </tr>
                    <tr>
                    <th scope="row">Roteamento condicional de iphone, Ipad, Telefone, Tablet Android</th>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">Criptografia HTTPS automática em todos os URLS</th>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">Relatórios analíticos em tempo real</th>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">Qr code dinâmico</th>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">Altere os destinos do link a qualquer momento</th>
                        <td></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">Google Analytics</th>
                        <td></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">Google Tag manager</th>
                        <td></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">Pixel Facebook</th>
                        <td></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">Pixel do Taboola</th>
                        <td></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">Pixel do Twitter</th>
                        <td></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                    </tr>
                    
                    <tr>
                        <th scope="row">Links personalizado com o próprio domínio</th>
                        <td></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">Suporte via Chat</th>
                        <td></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">Suporte via Email</th>
                        <td></td>
                        <td></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">Suporte via WhatsApp</th>
                        <td></td>
                        <td></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">UTM Source, Ref, Medium</th>
                        <td></td>
                        <td></td>
                        <td><i class="icon__check-green"></i></td>
                        <td><i class="icon__check-green"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">Encurtador de link</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><i class="icon__check-green"></i></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<article class="depoimentos" id="quem-utiliza">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="overline">Depoimentos</span>
                <h2 class="depoimentos__titulo">Amamos os elogios dos nossos clientes</h2>
            </div>
        </div>
        <div class="row">
            <!-- Swiper -->
            <div class="swiper-container card-depoimentos">
                <div class="swiper-wrapper">
                    <!-- CARD DEPOIMENTO -->
                    <div class="swiper-slide">
                        <div class="depoimentos__card">
                            <i class="icon__chaves"></i>
                            <p>Nós sempre fazemos muitos eventos e quando a pessoa vinha da rede social, ou até e-mail, ficava aquele “xiszinho” do YouTube em cima que tornava muito fácil sair da nossa live.
                            Mas depois do AppClick, mais de 40 mil pessoas passaram pelo nosso link e tanto a retenção, quanto o resultado das vendas melhoraram.
                            É por isso que eu indico e recomendo todo mundo testar e usar nos próximos eventos, porque é transformador.</p>
                            <div class="depoimentos__card-footer">
                                <div class="depoimentos__card-footer-icon">
                                    <i class="icon__profile"></i>
                                </div>
                                <div class="depoimentos__card-footer-nome">
                                    <h3>Pedro Bagy</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CARD DEPOIMENTO -->
                    <!-- CARD DEPOIMENTO -->
                    <div class="swiper-slide">
                        <div class="depoimentos__card">
                            <i class="icon__chaves"></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel neque natus ad aliquid
                                dolor, distinctio quod sit, voluptas minima, consequatur laborum quae recusandae ea.
                                Quidem distinctio deleniti numquam minus esse!</p>
                            <div class="depoimentos__card-footer">
                                <div class="depoimentos__card-footer-icon">
                                    <i class="icon__profile"></i>
                                </div>
                                <div class="depoimentos__card-footer-nome">
                                    <h3>Francisca Dos Santos</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CARD DEPOIMENTO -->
                    <!-- CARD DEPOIMENTO -->
                    <div class="swiper-slide">
                        <div class="depoimentos__card">
                            <i class="icon__chaves"></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel neque natus ad aliquid
                                dolor, distinctio quod sit, voluptas minima, consequatur laborum quae recusandae ea.
                                Quidem distinctio deleniti numquam minus esse!</p>
                            <div class="depoimentos__card-footer">
                                <div class="depoimentos__card-footer-icon">
                                    <i class="icon__profile"></i>
                                </div>
                                <div class="depoimentos__card-footer-nome">
                                    <h3>Francisca Dos Santos</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CARD DEPOIMENTO -->
                    <!-- CARD DEPOIMENTO -->
                    <div class="swiper-slide">
                        <div class="depoimentos__card">
                            <i class="icon__chaves"></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel neque natus ad aliquid
                                dolor, distinctio quod sit, voluptas minima, consequatur laborum quae recusandae ea.
                                Quidem distinctio deleniti numquam minus esse!</p>
                            <div class="depoimentos__card-footer">
                                <div class="depoimentos__card-footer-icon">
                                    <i class="icon__profile"></i>
                                </div>
                                <div class="depoimentos__card-footer-nome">
                                    <h3>Francisca Dos Santos</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CARD DEPOIMENTO -->
                </div>
            </div>
        </div>
    </div>
</article>


<article class="garantia">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <i class="icon__garantia"></i>
                <h2 class="garantia__titulo">Garantia incondicional de 7 Dias</h2>
                <p>O AppClick é a ferramenta que vai facilitar o seu trabalho, otimizar a experiência dos seus clientes
                    e aumentar os seus resultados, por isso eu tenho toda a confiança pra te entregar uma garantia
                    incondicional de 7 dias.</p>
                <p><strong>Então, testa!</strong> No pior cenário você nos envia um e-mail e nós devolvemos o seu
                    investimento.</p>
            </div>
            <div class="col-md-8 px-sm-5 px-0">
                <div class="garantia__accordion" id="FAQ">
                    <!-- ITEM 1 -->
                    <div class="garantia__accordion-item">
                        <h2 class="accordion-header" id="deep-link">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#item-1" aria-expanded="true" aria-controls="item-1">
                                O que é o Deep Link?
                            </button>
                        </h2>
                        <div id="item-1" class="accordion-collapse collapse show" aria-labelledby="deep-link"
                            data-bs-parent="#FAQ">
                            <div class="accordion-body">
                                <p>O deeplink é uma tecnologia que redireciona o usuário para um conteúdo ou plataforma específica através do seu clique. Essa funcionalidade permite que você personalize e otimize a experiência do seu cliente.</p>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM 1 -->
                    <!-- ITEM 2 -->
                    <div class="garantia__accordion-item">
                        <h2 class="accordion-header" id="resultados">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#item-2" aria-expanded="true" aria-controls="item-2">
                                Por que o Deep Link pode aumentar meus resultados?
                            </button>
                        </h2>
                        <div id="item-2" class="accordion-collapse collapse" aria-labelledby="resultados"
                            data-bs-parent="#FAQ">
                            <div class="accordion-body">
                                <p>Imagine que você está na sua rede social e se interessou pelo anúncio de uma comida...</p>
                                <p>Quando clicou, foi encaminhado para o navegador dessa rede social e lá você não está logado na sua conta e muito menos tem acesso fácil às formas de pagamento que você costuma utilizar. Com tanto trabalho, você desiste.</p>
                                <p>Mas agora me diz, o que aconteceria se após o clique você fosse redirecionado direto para o aplicativo de comida, com o item já no seu carrinho e precisando de apenas um clique para fazer o pedido?</p>
                                <p>Um bom empreendedor sabe que encurtar o caminho e diminuir as barreiras até o seu conteúdo/conversão é a chave para ter grandes resultados.</p>
                                <p>E esse redirecionamento pode ser utilizado em centenas de aplicativos como YouTube, Instagram, Spotify, Twitch, iFood, entre muitos outros.</p>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM 2 -->
                    <!-- ITEM 3 -->
                    <div class="garantia__accordion-item">
                        <h2 class="accordion-header" id="oridem">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#item-3" aria-expanded="true" aria-controls="item-3">
                                Com o AppClick eu consigo saber a origem dos cliques?
                            </button>
                        </h2>
                        <div id="item-3" class="accordion-collapse collapse" aria-labelledby="oridem"
                            data-bs-parent="#FAQ">
                            <div class="accordion-body">
                                <p>Sim! Você consegue criar centenas de links personalizados e acompanhar exatamente de onde está vindo os seus cliques e conversões.</p>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM 3 -->
                    <!-- ITEM 4 -->
                    <div class="garantia__accordion-item">
                        <h2 class="accordion-header" id="anunciar">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#item-4" aria-expanded="true" aria-controls="item-4">
                                Posso anunciar com o deeplink?
                            </button>
                        </h2>
                        <div id="item-4" class="accordion-collapse collapse" aria-labelledby="anunciar"
                            data-bs-parent="#FAQ">
                            <div class="accordion-body">
                                <p>Não só pode como deve! Essa é a melhor maneira de acompanhar o seu funil e rastrear todas as suas conversões, já que através do AppClick você consegue colocar pixels diretamente nos seus links e criar públicos extremamente quentes e qualificados.</p>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM 4 -->
                     <!-- ITEM 5 -->
                     <div class="garantia__accordion-item">
                        <h2 class="accordion-header" id="comprar">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#item-5" aria-expanded="true" aria-controls="item-5">
                                Posso comprar cliques adicionais?
                            </button>
                        </h2>
                        <div id="item-5" class="accordion-collapse collapse" aria-labelledby="comprar"
                            data-bs-parent="#FAQ">
                            <div class="accordion-body">
                                <p>Sim! Você pode solicitar esse serviço a qualquer momento dentro do seu próprio dashboard ou entrando em contato com a nossa equipe de suporte.</p>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM 5 -->
                    <!-- ITEM 6 -->
                    <div class="garantia__accordion-item">
                        <h2 class="accordion-header" id="renovacao">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#item-6" aria-expanded="true" aria-controls="item-6">
                                A renovação é automática?
                            </button>
                        </h2>
                        <div id="item-6" class="accordion-collapse collapse" aria-labelledby="renovacao"
                            data-bs-parent="#FAQ">
                            <div class="accordion-body">
                                <p>Sim! Como o nosso serviço é por assinatura, você recebe uma nova cobrança a cada mês de acordo com o pacote que você escolheu.</p>
                                <p>Lembrando que nos primeiros 7 dias você tem acesso a uma garantia inconcidional. Isso significa que, após o seu pagamento, você pode cancelar sua assinatura a qualquer momento sem custo algum e nós devolveremos o seu dinheiro.</p>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM 6 -->
                    <!-- ITEM 7 -->
                    <div class="garantia__accordion-item">
                        <h2 class="accordion-header" id="plataforma">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#item-7" aria-expanded="true" aria-controls="item-7">
                                Como funciona o suporte da plataforma?
                            </button>
                        </h2>
                        <div id="item-7" class="accordion-collapse collapse" aria-labelledby="plataforma"
                            data-bs-parent="#FAQ">
                            <div class="accordion-body">
                                <p>Ao se inscrever na plataforma a nossa equipe vai entrar em contato direto contigo através do whatsapp tirar as suas dúvidas e te ajudar a escalar seus resultados.</p>
                                <p>Além disso, você pode entrar em contato conosco através do e-mail: <a href="mailto:suporte.appclick.me">suporte.appclick.me</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM 7 -->
                     <!-- ITEM 8 -->
                     <div class="garantia__accordion-item">
                        <h2 class="accordion-header" id="pagamento">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#item-8" aria-expanded="true" aria-controls="item-8">
                                Quais são as formas de pagamento?
                            </button>
                        </h2>
                        <div id="item-8" class="accordion-collapse collapse" aria-labelledby="pagamento"
                            data-bs-parent="#FAQ">
                            <div class="accordion-body">
                                <p>Você pode pagar em cartão de crédito, débito, PIX ou boleto bancário.</p>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM 8 -->
                </div>
            </div>
        </div>
    </div>
</article>

<section class="contato" id="contato">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="contato__titulo">Precisa de ajuda?</h2>
                <h3 class="contato__subtitulo">Podemos ajudá-lo a decidir o que é melhor para sua empresa.</h3>
                <a href="" class="btn btn__whatsapp"><i class="icon__whatsapp"></i> Entrar em contato via WhatsApp</a>
                <div class="contato__redes">
                <h3>Siga-nos</h3>
                    <div class="d-flex contato__redes-icones">
                        <a href=""><i class="icon__facebook-blue"></i></a>
                        <a href=""><i class="icon__twiiter-blue"></i></a>
                        <a href=""><i class="icon__instagram-blue"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include_once(U . 'includes/footer.php'); ?>
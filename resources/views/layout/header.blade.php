<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header pull-left">
            <a class="navbar-brand page-scroll" href="#page-top">
                <!-- replace with your brand logo/text -->
                <span class="brand-logo">{{getenv('STORE_NAME')}}</span>
            </a>
        </div>
        <div class="main-nav pull-right">
            <div class="button_container toggle">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
            </div>
        </div>
        <div class="overlay" id="overlay">
            <nav class="overlay-menu">
                <ul>
                    <li><a href="#about">Sobre nós</a></li>
                    {{--<li><a href="#services">O que fazemos?</a></li>--}}
                    <li><a href="#contact">Entre em contato</a></li>
                </ul>
            </nav>
        </div>
    </div><!-- /.container -->
</nav>
<!-- Intro Header -->

<!-- Full Page Image Background Carousel Header -->
<header id="intro-carousel" class="carousel slide">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div id="parallax-slide" class="fill"></div>
            <div class="carousel-caption">
                @if(!empty($lastOrder))
                    <h1 class="animated slideInDown">A {{getenv('STORE_NAME')}} é a responsável
                        pelo <br/><span class="highlight">{{strtoupper($lastOrder->store_url_host)}}</span>
                    </h1>
                    <p class="intro-text animated slideInUp">Fique tranquilo, você está em um ambiente seguro e da mesma
                        empresa em que realizou a sua última compra de número <strong>{{$lastOrder->order_ip}}</strong>
                        no dia
                        <strong>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $lastOrder->updated_at)->format('d/m/Y')}}</strong>.
                    </p>
                    <a href="#contact" class="btn btn-default btn-lg">Se ainda tem dúvidas, entre em contato :-)</a>
                @else
                    <h1 class="animated slideInDown">Bem-vindo ao portal da <span
                                class="highlight">{{getenv('STORE_NAME')}}</span> :-)
                    </h1>
                    <a href="#contact" class="btn btn-default btn-lg">Se ainda tem dúvidas, entre em contato :-)</a>
                @endif
            </div>
            <div class="overlay-detail"></div>
        </div><!-- /.item -->
    </div>
</header>

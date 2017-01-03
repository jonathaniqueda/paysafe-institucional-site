<!-- Contact section -->
<section id="contact" class="contact content-section alt-bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2>Entre em contato</h2>
                <h3 class="caption gray">
                    Quer tirar alguma dúvida sobre sua compra? Mande uma mensagem pra nós!
                </h3>
            </div><!-- /.col-md-12 -->

        </div><!-- /.row -->
    </div><!-- /.container -->

    <div class="container">
        <div class="row form-container">

            <div class="col-md-8 contact-form">
                <form class="ajax-form" id="contactForm" method="post" action="">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Seu nome..."
                               value="" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Seu email..."
                               value="" required>
                    </div>
                    <div class="form-group">
                        <input type="phone" class="form-control" id="phone" name="phone" placeholder="Seu telefone..."
                               value="" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="4" name="message" placeholder="Sua mensagem..."
                                  required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-default"><i
                                    class="fa fa-paper-plane fa-fw"></i> Enviar
                        </button>
                    </div>
                </form>
            </div><!-- /.contact-form -->

            <div class="col-md-4 contact-address">
                <h3>Nosso Endereço</h3>
                <p>{{getenv('STORE_ADDRESS')}},
                    <br/>{{getenv('STORE_CITY')}}, {{getenv('STORE_STATE')}}, {{getenv('STORE_ZIPCODE')}}
                    <br/>Brasil</p>
                <ul>
                    <li><span>E-mail:</span>{{getenv('STORE_EMAIL')}}</li>
                    <li><span>Telefone:</span>{{getenv('STORE_PHONE')}}</li>
                </ul>
            </div><!-- /.contact-address -->

        </div><!-- /.row -->
    </div><!-- /.container -->

    {{--<div class="container-fluid buffer-forty-top">--}}
    {{--<div class="row">--}}
    {{--<section id="cd-google-map no-bottom-pad">--}}
    {{--<div id="google-container"></div>--}}
    {{--<div id="cd-zoom-in"></div>--}}
    {{--<div id="cd-zoom-out"></div>--}}
    {{--</section>--}}
    {{--</div><!-- /.row -->--}}
    {{--</div><!-- /.container-fluid -->--}}

</section>
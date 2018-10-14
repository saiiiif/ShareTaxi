@extends('frontOffice.layout')

@section('head')
    @include('frontOffice.inc.head',
    ['title' => 'WellPic - Contactez Nous',
    'description' => 'Un service client à votre écoute WellPic'
    ])
@endsection

@section('header')
    @include('frontOffice.inc.header', ['contentClass' => 'sticky'])
@endsection

@section('content')
    <div class="clearfix"></div>

    <div id="titlebar" style="padding-bottom: 65px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2>Contactez Nous</h2>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="#">Accueil</a></li>
                            <li>Nous contacter</li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>


    <div class="container">

        <div class="row">

            <!-- Contact Details -->
            <div class="col-md-4">

                <h4 class="headline margin-bottom-30">Trouvez-nous là</h4>

                <!-- Contact Details -->
                <div class="sidebar-textbox">
                    <p>Un service client
                        à votre écoute !
                    </p>

                    <ul class="contact-details">
                        <li><i class="im im-icon-Globe"></i> <strong>Web:</strong> <span><a href="#">www.wellpic.com</a></span></li>
                        <li><i class="im im-icon-Envelope"></i> <strong>E-Mail:</strong> <span><a href="#">contact@wellpic.com</a></span></li>
                    </ul>
                </div>

            </div>

            <!-- Contact Form -->
            <div class="col-md-8">

                <section id="contact">
                    <h4 class="headline margin-bottom-35">Formulaire de Contact</h4>

                    <form method="post" action="{{ route('handleContact') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <input name="name" id="name" placeholder="Votre nom" required="required" type="text">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div>
                                    <input name="email" id="email" placeholder="Adresse Email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" type="email">
                                </div>
                            </div>
                        </div>

                        <div>
                            <input name="subject" id="subject" placeholder="Sujet" required="required" type="text">
                        </div>

                        <div>
                            <textarea name="comments" cols="40" rows="3" id="comments" placeholder="Message" spellcheck="true" required="required"></textarea>
                        </div>

                        <input class="submit button" id="submit" value="Envoyer le Message" type="submit">

                    </form>
                </section>
            </div>
            <!-- Contact Form / End -->

        </div>

    </div>
@endsection

@section('footer')
    @include('frontOffice.inc.footer')
@endsection
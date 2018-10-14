@extends('frontOffice.layout')

@section('head')
    @include('frontOffice.inc.head',
    ['title' => 'WellPic - Mentions Légales',
    'description' => 'Wellpic est une application éditée par la société BECOOL STUDIO SARL, Propulsée par BluePen Labs'
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

                    <h2>Mentions Légales</h2>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="#">Accueil</a></li>
                            <li>Mentions Légales</li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>


    <div class="container">


        <div class="row">

            <div class="col-md-6">
                <h4 class="headline margin-top-0 margin-bottom-30">Editeur</h4>
                <p>Wellpic est une application éditée par la société BECOOL STUDIO SARL.</p>

                <span>BECOOL STUDIO</span><br>
                <span>Société à Actions Responsabilité Limitée</span><br>
                <span>RCS Paris 494 503 550</span><br>
                <span>TVA intracommunautaire : FR 34494503550</span><br>
                <span>Enregistrement CNIL : 1996106</span>

                <br>

            </div>

            <div class="col-md-6">
                <h4 class="headline margin-top-0 margin-bottom-30">Contact</h4>

                <span><strong>Adresse:</strong> BECOOL STUDIO, 16 bis rue du Faubourg Saint-Denis 75010 Paris</span><br>

                <span><strong>Site internet:</strong> www.wellpic.com, le site internet est hébergé par la société OVH.</span><br>

                <span><strong>E-mail:</strong> contact@wellpic.com</span>

                <br>


            </div>

        </div>

        <div class="row">
            <br>
            <br>
            <div class="col-md-12">
                <h4 class="headline margin-top-0 margin-bottom-30">Propriété intellectuelle</h4>

                <span>Tous les éléments présents ou décrits sur ce site Web, incluant, mais sans s'y limiter, les logos, marques, photos, vidéos, applications produits de Wellpic sont la propriété de BECOOL STUDIO S.A.S. et ne peuvent être utilisés à des fins commerciales ou autres sans notre autorisation expresse.</span>

                <br>

            </div>

        </div>

        <br>
        <br>

    </div>
@endsection

@section('footer')
    @include('frontOffice.inc.footer')
@endsection
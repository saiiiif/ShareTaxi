@extends('frontOffice.layout')

@section('head')
    @include('frontOffice.inc.head',
    ['title' => 'WellPic - Comment ça fonctionne ?',
    'description' => 'Wellpic est une application éditée par la société BECOOL STUDIO SARL, Propulsée par BluePen Labs'
    ])
    <script language="JavaScript">
        function howAreYou(id){
            var selected = document.getElementById(id);

            if(id == 'model'){
                $( "#model" ).addClass( "howItWorks-selected-person" );
                $( "#photographe" ).removeClass( "howItWorks-selected-person" );
                document.getElementById('div-photographe').style.display = "none";
                document.getElementById('div-model').style.display = "initial";
            }else{
                $( "#photographe" ).addClass( "howItWorks-selected-person" );
                $( "#model" ).removeClass( "howItWorks-selected-person" );

                document.getElementById('div-photographe').style.display = "initial";
                document.getElementById('div-model').style.display = "none";


            }
        }



    </script>
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

                    <h2>Comment ça fonctionne</h2>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><h3>Vous êtes ?</h3></li>
                            <li id="model" onclick="howAreYou(this.id)" class="howItWorks-select howItWorks-selected-person">Model</li>
                            <li id="photographe" onclick="howAreYou(this.id)" class="howItWorks-select">Photographe</li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div id="div-model" class="row">
            <div class="col-md-6 col-xs-12 col-sm-12">
                <p class="text-center">
                    <img src="{{asset('img')}}/mod-1.png" id="img-phone-model" style="width: 220px;height: auto;">
                </p>

            </div>

            <div class="col-md-6">
                <div id="mod-1" class="model howItWorks-select">
                    <p><b>1. Inscrivez-vous</b><br/>
                    Connectez vous après avoir téléchargé l’application,
                    puis remplissez les champs : e-mail et mot de passe. </p>
                </div>

                <div id="mod-2" class="model howItWorks-select">
                    <p><b>2. Réservez</b><br/>
                    Localisez et choisissez votre photohgraphe selon le
                    type de photo que vous souhaitez réaliser ou en
                    fonction du niveau de professionnalisme éxigé. </p>
                </div>

                <div id="mod-3" class="model howItWorks-select">
                    <p><b>3. Shootez</b><br/>
                    Mettez vous en lumière et profitez de votre scéance de shooting. </p>
                </div>

                <div id="mod-4" class="model howItWorks-select">
                    <p><b>4. Séléctionnez</b><br/>
                    Choisissez les photos que vous désirez acheter puis faites les
                    retoucher, imprimer, encadrer et ou partagez les tous simplement. </p>
                </div>

                <div id="mod-5" class="model howItWorks-select">
                    <p><b>5. Notez</b><br/>
                    Évaluez la qualité de service de votre photographe. </p>
                </div>

            </div>

        </div>


        <div id="div-photographe" class="row" style="display:none;">
            <div class="col-md-6">
                <p class="text-center">
                    <img src="{{asset('img')}}/photo-1.png" id="img-phone-photo" style="width: 220px;height: auto;">
                </p>

            </div>

            <div class="col-md-6">
                <div id="photo-1" class="photo howItWorks-select">
                    <p><b>1. Inscrivez-vous</b><br/>
                        Connectez vous après avoir téléchargé l’application,
                        puis remplissez les champs : e-mail et mot de passe. </p>
                </div>

                <div id="photo-2" class="photo howItWorks-select">
                    <p><b>2. Créez votre profil </b><br/>
                        Cliquez sur « profil » puis « passer en mode photographe »
                        et remplissez les champs indiqués. </p>
                </div>

                <div id="photo-3" class="photo howItWorks-select">
                    <p><b>3. Travaillez quand et où vous voulez </b><br/>
                        Cliquez sur le bouton « En ligne » situé dans l’accueil de votre profil
                        photographe, pour vous rendre disponible où et quand vous le désirez.Vous
                        pourrez alors recevoir des demandes de shooting en immédiat ou à l’avance.</p>
                </div>

                <div id="photo-4" class="photo howItWorks-select">
                    <p><b>4. Shootez</b><br/>
                        Après avoir acceptée la demande, il ne vous reste plus qu’à effectuer
                        la prestation. </p>
                </div>

                <div id="photo-5" class="photo howItWorks-select">
                    <p><b>5. Paiement</b><br/>
                        Une fois vos photos vendues, recevez et consultez vos gains via votre
                        espace photographe.</p>
                </div>

            </div>

        </div>

        <div class="row">

        </div>

    </div>

    <script language="JavaScript">

        $( ".model" ).hover(function() {
            var idH = $( this ).attr('id');

            var hover = document.getElementById(idH);
            hover.style.opacity = '1';

            document.getElementById('img-phone-model').src = '{{asset('img')}}/'+idH+'.png';

            for($i=1; $i<=5;$i++)
                if($i != idH.substring(4, 5))
                    document.getElementById('mod-'+$i).style.opacity = '0.5';
        });

        $( ".photo" ).hover(function() {
            var idH = $( this ).attr('id');

            var hover = document.getElementById(idH);
            hover.style.opacity = '1';

            document.getElementById('img-phone-photo').src = '{{asset('img')}}/'+idH+'.png';

            for($i=1; $i<=5;$i++)
                if($i != idH.substring(6, 7))
                    document.getElementById('photo-'+$i).style.opacity = '0.5';

        });


    </script>
@endsection

@section('footer')
    @include('frontOffice.inc.footer')
@endsection
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

                    <h2>Foire Aux Questions</h2>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a  href="{{ route('showHome') }}">Accueil</a></li>
                            <li>FAQ</li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>


    <div class="container faq-and-conditions-content">
        <!--    <h2>Mentions Légales</h2>  -->
        <!-- Content -->
        <h1>
            FAQ Photographes
        </h1>
        <ol>
            <li>
                <h3> À qui appartiennent les photos ? </h3>
                <p>
                    Au photographe, il reste propriétaire de son oeuvre.
                </p>
            </li>
            <li>
                <h3> Ai-je des horaires à respecter ?
                </h3>
                <p>
                    L’utilisateur est libre d’utiliser l’application quand bon lui semble.

                </p>
            </li>
            <li>
                <h3> Suis-je obligé de déléguer la retouche à la plateforme ?

                </h3>
                <p>
                    Non le photographe, s’il le souhaite, peut effectuer la retouche lui même et par conséquent la facturée.

                </p>
            </li>
            <li>
                <h3> Qui fixe les prix ?


                </h3>
                <p>
                    Les tarifs sont fixés par les photographes.

                </p>
            </li>
            <li>
                <h3> Comment êtes vous rémunéré ?



                </h3>
                <p>
                    Wellpic prélève 15% de commission sur les ventes effectuées par le photographe. Cette commission est dégressive en fonction du chiffre d’affaires (voir CGU).

                </p>
            </li>
            <li>
                <h3> Que se passe t-il si le client commande et ne choisit aucune photos ?

                </h3>
                <p>
                    La probabilité pour que cela arrive dans le domaine de la photographie est très infime. Cependant, afin de prémunir les photographes de cela, le client fait l’objet d’une notation par la plateforme permettant au photographe de juger de son sérieux avant l’acceptation de la réservation. Lors de la commande, une demande d’autorisation de débit est effectuée auprès de l’établissement bancaire du client, puis en fin de prestation une demande de validation de l’autorisation acceptée. Cela assure le fait que le client soit éligible au paiement.

                </p>
            </li>
            <li>
                <h3> Comment être sur le client ne téléchargerai pas les photos avant l’achat ?
                </h3>
                <p>
                    Les photos sont marquées par un pictogramme qui disparaît une fois le paiement validé.

                </p>
            </li>
            <li>
                <h3> Est-ce que Wellpic propose du matériel pour les prestation ?






                </h3>


                <p>
                    Wellpic ne fournit pas de matériels pour l’instant, mais nos équipes travaillent actuellement dans sa réalisation.

                </p>
            </li>
            <li>
                <h3> Puis-je retoucher les photos ?
                </h3>


                <p>
                    Oui vous avez la possibilité de retoucher les photos vous mêmes, ou bien de les déléguer  à la plateforme.
                </p>
            </li>
        </ol>

        <h1>
            FAQ Model
        </h1>

        <ol>

            <li>
                <h3> Je paie quand ? </h3>
                <p>
                    Lors de votre commande une demande d’autorisation de débit est effectuée auprès de votre établissement bancaire puis en fin de prestation, une fois vos photos sélectionnées, une demande de validation de l’autorisation de débit est acceptée.

                </p>
            </li>



            <li>
                <h3> Dois-je payer le photographe quand il arrive ?
                </h3>
                <p>
                    Non, le photographe est payé uniquement en fin de prestation.

                </p>
            </li>



            <li>
                <h3> Combien cela coûte t-il  ?

                </h3>
                <p>
                    Le prix de la prestation est fixée préalablement par le photographe et peut être variable d’un prestataire à un autre en fonction de sa qualité, son domaine de compétence, et/ou de son expérience.

                </p>
            </li>




            <li>
                <h3> Comment puis-je sélectionner les photos qui m’intéresse ?


                </h3>
                <p>
                    Une fois la prestation terminée, le photographe mettra les photos à disposition sur le serveur Wellpic. Elles vous seront accessible depuis votre base client après vous êtres inscrit et connecté.  Vous pouvez les choisir, les retoucher et/ou les imprimer.
                </p>
            </li>



            <li>
                <h3> Peut ont utiliser Wellpic à l’étranger ?



                </h3>
                <p>
                    Wellpic peut être utilisé partout dans le monde sous réserve de localiser un photographe près de vous.
                </p>
            </li>


            <li>
                <h3> Puis-je me déplacer à un autre lieu avec le photographe ?




                </h3>
                <p>
                    Dans la première version de l’application, cette option ne vous sera pas possible.
                    Par conséquent, elle arrivera très prochainement dans la version à venir.
                </p>
            </li>


            <li>
                <h3> Dois-je en réserver un autre ?





                </h3>
                <p>
                    Vous pouvez effectivement réserver un autre photographe proche de l’endroit où vous vous rendez, ou soit réserver le même photographe en lui indiquant l’adresse du shooting.

                </p>
            </li>


            <li>
                <h3> Mes photos sont-elles visible au public ?
                </h3>
                <p>
                    Non l’accès est totalement privé.

                </p>
            </li>



            <li>
                <h3> Comment créer un compte ?

                </h3>
                <p>
                    Pour créer votre compte, il vous suffit de vous rendre sur le site Wellpic.com.
                    Cliquez sur l’onglet “Inscription” puis ajouter vos informations personnelles.


                </p>
            </li>



            <li>
                <h3> Comment créer mon compte photographe ?


                </h3>
                <p>
                    Pour devenir photographe, le manipulation est la même que la précédente.
                    Une fois votre compte créé, connectez-vous via l’onglet “Connexion” puis depuis le tableau de bord, cliquez sur “Je suis photographe” et remplissez le formulaire.


                </p>
            </li>
        </ol>
</br>
    </br>
    </div>

@endsection

@section('footer')
    @include('frontOffice.inc.footer')
@endsection
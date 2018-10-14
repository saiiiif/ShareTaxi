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

                    <h2>            Conditions générales de vente et d'utilisation
                    </h2>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a  href="{{ route('showHome') }}">Accueil</a></li>
                            <li>Conditions d'utilisation</li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>


    <div class="container faq-and-conditions-content">


        <ol>


            <li>
                <h3> Vue d'ensemble </h3>
                <p>
                    Wellpic est une application, mobile et web  (le «Site»),  qui vous permet de louer les services d'un photographe professionnel à tout moment et n'importe où à des prix accessibles pour tous. Un système de géolocalisation vous permet de visualiser les photographes (le «Service») disponibles à proximité . Vous choisissez votre photographe en fonction des photos que vous souhaitez réaliser et du niveau de professionnalisme exigé en explorant sa galerie pour vous décider. Vous pouvez bénéficier de l'expertise de photographes professionnels tout en jouissant d'un cadre naturel !  Une démarche simple et rentable qui permet de graver des souvenirs et de mettre en image des moments de sa vie.
                    La protection des informations privées de nos clients est notre plus haute priorité.
                    Cette politique de confidentialité régit toute collecte de données ainsi que l'utilisation par Wellpic, y compris à travers le Site. En utilisant le Site, vous acceptez les pratiques de collecte de données et d'utilisation décrites dans cette politique.
                </p>
            </li>
            <li>
                <h3> Collecte de vos renseignements personnels </h3>

                <p>
                    En fournissant ce service, Wellpic peut collecter des informations personnelles, telles que votre nom, votre email, votre adresse. Wellpic peut également collecter des informations démographiques anonymes telles que l'âge et le sexe, jamais de façon nominatives toutefois. Wellpic pourra également recueillir des renseignements supplémentaires à l'avenir, personnels ou non.
                    Wellpic s'engage à ne pas publier vos images photographiques sans votre consentement préalable. Vous restez propriétaire de toutes les images photographiques que vous stockez sur le site (portfolio, image de profile). Toute information sur votre matériel informatique et logiciels peut être collectée automatiquement par Wellpic. Ces informations peuvent inclure: votre adresse IP; le type de navigateur; noms de domaine. Ces informations sont utilisables dans le cadre du bon fonctionnement du Service, afin de maintenir la qualité de celui-ci, et de fournir des statistiques générales concernant l'utilisation du Site.
                </p>
            </li>
            <li>

                <h3> Utilisation de vos renseignements personnels </h3>

                <p>
                    Wellpic collecte et utilise vos informations personnelles afin d'assurer le bon fonctionnement du Site et fournir les services décrits. Wellpic peut également utiliser vos informations personnellement identifiables afin de vous proposer par le biais de ses partenaires des services complémentaires. Welllpic ne vend pas ou ne loue pas ses listes de clients à des services tiers.
                    Wellpic peut divulguer vos renseignements personnels et sans accord préalable, uniquement dans le cadre d'une demande judiciaire, et sous réserve d'une demande formulée par une autorité compétente. Ces demandes juridiques pourront être exercées afin de: (1) permettre à Wellpic de se conformer aux décrets législatifs en vigueur; (2) se protéger et défendre les droits ou la propriété de Wellpic; (3) agir en urgence pour protéger la sécurité personnelle des utilisateurs de Wellpic, ou le public.
                </p></li>
            <li>
                <h3> Utilisation des cookies </h3>

                <p>
                    Le site peut utiliser des «cookies» pour vous aider à personnaliser votre expérience en ligne. Un cookie est un fichier texte placé sur votre disque dur par un serveur Web. Les cookies ne peuvent pas être utilisés pour exécuter des programmes ou transmettre des virus à votre ordinateur. Les cookies sont attribués de façon unique, et ne peuvent pas être lus par un serveur Web que celui du domaine ayant émis le cookie.
                    L'un des principaux objectifs des cookies est de fournir une fonctionnalité pratique pour gagner du temps. Le but d'un cookie est principalement d'informer le serveur Web de votre parcours utilisateur. Vous avez la possibilité d'accepter ou de refuser les cookies. La plupart des navigateurs Web acceptent automatiquement les cookies, mais vous pouvez généralement modifier les paramètres de votre navigateur pour refuser les cookies si vous le préférez.
                </p></li>
            <li>
                <h3>  Sécurité de vos renseignements personnels et paiement </h3>

                <p>
                    Welllpic sécurise vos informations personnelles contre tout accès non autorisé, l'utilisation ou la divulgation. Lorsque des renseignements personnels (comme un numéro de carte de crédit) sont transmis à d'autres sites, il sont protégés par l'utilisation de cryptage tels que le protocole Secure Sockets Layer (SSL). Le paiement de votre commande peut s'effectuer par carte de crédit (CB, Visa, Mastercard), les données transitant sur notre réseau étant cryptées.
                </p></li>
            <li>

                <h3>   Droits d' auteur Protection </h3>

                <p>
                    Tous les contenus et les photos affichées sur le Site, tous les logiciels sous-jacents ou de la technologie utilisée dans le cadre du Site, tous les aspects de celui-ci, y compris les droits d'auteur, marques de commerce, sont la propriété de Wellpic ou de ses concédants.
                    Vous reconnaissez que le site, le contenu et les images photographiques affichées sur le Site contiennent des informations exclusives de Wellpic. Wellpic a le droit de contrôler le contenu que vous fournissez sur le Site, mais n'est pas tenu de le faire.
                    Le contenu du Site est protégé par le droit d'auteur conformément à la loi française. Vous vous engagez à respecter tous les avis de droits d'auteur et autres restrictions contenues dans le Site.
                    L'accès et l'utilisation du Site sont uniquement pour votre usage personnel et non commercial. L'affichage, l'exécution, la distribution, la copie ou le téléchargement de contenu à partir du site pour un usage autre que personnel et non-commercial est expressément interdite sans le consentement écrit préalable de Wellpic. Vous acceptez les conditions décrites dans les présentes conditions générales d'utilisation, et ceci dans leur intégralité, sans modification, sauf accord contraire par écrit Wellpic et vous.
                </p></li>
            <li>

                <h3>   Opt-Out & désinscrire </h3>

                <p>
                    Nous respectons votre vie privée et vous donnons la possibilité de refuser de recevoir certaines informations. Les utilisateurs peuvent choisir de recevoir une partie seulement ou la totalité des communications de Wellpic, en nous contactant et en utilisant les informations de contact figurant dans la section "Contact".
                </p></li>
            <li>

                <h3>  Modifications de cette politique </h3>

                <p>
                    Wellpic mettra occasionnellement à jour ces conditions générales d'utilisation afin de refléter la société et les commentaires de ses clients. Wellpic vous encourage à consulter régulièrement cette politique afin de rester informé de la façon dont Wellpic protège vos informations.
                </p></li>
            <li>

                <h3>   Responsabilités</h3>

                <p>
                    Le Site ne pourra en aucun cas être tenu responsable des erreurs techniques ou matérielles, de perte de données résultant de l'utilisation du Site ou de son interface. Pour l'ensemble du processus de commande, défini comme étant l'ensemble des étapes successives depuis la conception jusqu'à la livraison de votre commande, le Site n'a qu'une obligation de moyen. La responsabilité du Site ne saurait être engagée pour tout inconvénient, dommages directs ou indirects inhérents à l'utilisation de son service.
                </p></li>
            <li>
                <h3>   Informations de contact
                </h3>

                <p>
                    Wellpic est joignable afin de répondre à vos questions ou commentaires concernant cette politique de confidentialité, à travers l'email : contact@wellpic.com
                </p></li>
            <li>

                <h3>   Droit applicable - Juridiction compétente
                </h3>
                <p>
                    Le Site a été élaboré en accord avec la loi française. Tout litige susceptible de s'élever entre vous et Wellpic.com sera soumis aux juridictions compétentes du ressort de la Cour d'Appel de Paris.
                    CGU Paybox by verifone (lien vers les cgu de notre solution de paiement en ligne)
                </p>

        </ol>
</br>
        </br>
    </div>
@endsection

@section('footer')
    @include('frontOffice.inc.footer')
@endsection
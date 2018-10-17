<!-- Footer
    ================================================== -->
<div id="footer">
    <!-- Main -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <img class="footer-logo" src="{{ asset('img') }}/logo.png"  alt="">
            </div>

            <div class="col-md-6 col-sm-6 ">
                <ul class="footer-links">
                    @if(Auth::user())
                        <li><a href="">Déconnexion</a></li>
                    @else
                    <li><a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim">Se connecter</a></li>
                    <li><a href="#sign-up-dialog" class="sign-in popup-with-zoom-anim">S'inscrire</a></li>
                    @endif
                    <li><a href="#">A propos de WellPic</a></li>
                    <li><a href="{{ route('showHowItWorks') }}">Comment ça fonctionne ?</a></li>
                    <li><a href="{{ route('showConditions') }}">Conditions générale d'utilisation</a></li>
                    <li><a href="#">Politique de confidentialité</a></li>
                    <li><a href="{{ route('showLegalMentions') }}">Mentions légales</a></li>
                </ul>

                <ul class="footer-links">
                    <li><a href="{{ route('showFAQ') }}">FAQ</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Partenaire</a></li>
                    <li><a href="#">Presse</a></li>
                    <li><a href="#">Nous rejoindre</a></li>
                    <li><a href="{{ route('showContact') }}">Contact</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="col-md-2  col-sm-12">
                <div class="text-widget">
                    <span><img style="width: 16px;" src="{{ asset('img') }}/fr.png"/> Français</span>
                </div>

                <ul class="social-icons margin-top-20">
                    <li><a class="facebook" target="_blank" href="https://www.facebook.com/TaxiShare/"><i class="icon-facebook"></i></a></li>
                    <li><a class="twitter" target="_blank"  href="https://twitter.com/TaxiShare"><i class="icon-twitter"></i></a></li>
                    <li><a class="instagram" target="_blank"  href="https://www.instagram.com/TaxiShare/"><i class="icon-instagram"></i></a></li>
                </ul>

            </div>

        </div>

        <!-- Copyright -->
        <div class="row">
            <div class="col-md-12">
                <div class="copyrights">© 2018 <a href="http://www.wellpic.com">Triple I </a>. Tout droits réservés.
                @if(config('app.copyright') === 'on')
                    <br><small><small>Propulsé par <a href="https://www.TripleI.com" target="_blank">Triple I</a></small></small>
                @endif
                </div>
            </div>
        </div>

    </div>

</div>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>
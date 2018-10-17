<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-33598597-6', 'auto');
    ga('send', 'pageview');
</script>

<!-- Header Container
       ================================================== -->
<header id="header-container" class="{{ $headerClass or ''}}">

    <!-- Header -->
    <div id="header" class="{{ $contentClass or ''}}">
        <div class="container">

            <!-- Left Side Content -->
            <div class="left-side">

                <!-- Logo -->
                <div id="logo">
                    <a href="{{ route('showHome') }}"><img src="{{ asset('img') }}/logo.png"
                                                           alt="{{ config('app.name') }}"></a>
                </div>

                <!-- Mobile Navigation -->
                <div class="menu-responsive">
                    <i class="fa fa-reorder menu-trigger"></i>
                </div>

                <div class="clearfix"></div>
                <!-- Main Navigation / End -->

            </div>
            <!-- Left Side Content / End -->


            <!-- Right Side Content / End -->
            <div class="right-side">
                <div class="header-widget">
                    <a href="{{ route('showHome') }}" class="sign-in"><i
                                class="sl sl-icon-home"></i> Accueil</a>
                    @if(Auth::user())
                        <div class="user-menu">
                            <div class="user-name">
                              
                            </div>
                            <ul>
                                <li><a href=""><i class="sl sl-icon-settings"></i> Mon
                                        Compte</a></li>
                                <li><a href=""><i class="sl sl-icon-power"></i>
                                        Déconnexion</a></li>
                            </ul>
                        </div>
                    @else
                        <a href="#sign-in-dialog" class="sign-in popup-with-zoom-anim"><i class="sl sl-icon-login"></i>
                            Connexion</a>
                        <a href="#sign-up-dialog" class="sign-in popup-with-zoom-anim"><i
                                    class="sl sl-icon-user-follow"></i> Inscription</a>
                    @endif
                </div>
            </div>
            <!-- Right Side Content / End -->

            <!-- Sign In Popup -->
            <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

                <div class="small-dialog-header">
                    <h3>Connexion</h3>
                </div>

                <div class="sign-in-form style-1">


                    <form method="post" class="login" action="">
                        {{ csrf_field() }}

                        <p class="form-row form-row-wide">
                            <label for="email2">Email :
                                <i class="im im-icon-Mail"></i>
                                <input class="input-text" name="email" id="email" value="" type="email">
                            </label>
                        </p>

                        <p class="form-row form-row-wide">
                            <label for="password">Mot de Passe :
                                <i class="im im-icon-Lock-2"></i>
                                <input class="input-text" name="password" id="password" type="password">
                            </label>
                            <span class="lost_password">
										<a href="">Mot de passe perdu ?</a>
									</span>
                        </p>

                        <div class="form-row">
                            <div class="checkboxes margin-top-10">
                                <input id="remember-me" name="check" type="checkbox">
                                <label for="remember-me">Me garder connecté</label>
                            </div>
                        </div>
                        <button type="submit" class="button border margin-top-5">Connexion</button>

                    </form>

                </div>
            </div>
            <!-- Sign In Popup / End -->

            <div id="sign-up-dialog" class="zoom-anim-dialog mfp-hide">

                <div class="small-dialog-header">
                    <h3>Inscription</h3>
                </div>

                <div class="sign-in-form style-1">


                    <form method="post" class="register" action="">
                        {{ csrf_field() }}

                        <p class="form-row">
                            <label for="username">Nom :
                                <i class="im im-icon-Male"></i>
                                <input class="input-text" name="first_name" id="first_name" value="" type="text">
                            </label>
                        </p>
                        <p class="form-row">
                            <label for="username">Prénom :
                                <i class="im im-icon-Male"></i>
                                <input class="input-text" name="last_name" id="last_name" value="" type="text">
                            </label>
                        </p>

                        <p class="form-row form-row-wide">
                            <label for="email2">Email :
                                <i class="im im-icon-Mail"></i>
                                <input class="input-text" name="email" id="email" value="" type="email">
                            </label>
                        </p>

                        <p class="form-row form-row-wide">
                            <label for="password1">Mot de Passe :
                                <i class="im im-icon-Lock-2"></i>
                                <input class="input-text" name="password" id="password" type="password">
                            </label>
                        </p>

                        <button type="submit" class="button border margin-top-5" name="request" value="2">Inscription
                        </button>
                    </form>

                </div>
            </div>

        </div>
        <!-- Header / End -->

    </div>
</header>
<div class="clearfix"></div>
<!-- Header Container / End -->
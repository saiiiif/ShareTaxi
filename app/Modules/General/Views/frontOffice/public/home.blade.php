@extends('frontOffice.layout')

@section('head')
    @include('frontOffice.inc.head',
    ['title' => 'TaxiShare - Version Bêta',
    'description' => 'Votre photographe en quelques clics, où vous voulez et quand vous le désirez'
    ])
@endsection

@section('header')
    @include('frontOffice.inc.header')
@endsection

@section('content')

    @include('General::frontOffice.widgets.search')

    <!-- Content
        ================================================== -->
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 class="headline centered margin-top-75">
                  
                </h3>
            </div>

        </div>
    </div>

    <!-- Categories -->
    <div class="fullwidth-carousel-container margin-top-25">
        <div class="fullwidth-slick-carousel category-carousel" role="toolbar">
          
        </div>
    </div>

    <!-- Photographs -->
    <section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8"
             style="background: rgb(248, 248, 248) none repeat scroll 0% 0%;">

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h3 class="headline centered margin-bottom-45">
                        Photographes
                        <span class="margin-top-25">Découvrez les meilleurs photographes de votre localité</span>
                    </h3>
                </div>
                <script>
                    function bookmark(id) {
                        $.ajax({
                            url: "{{ route('showHome') }}",
                            headers: {
                                'X-CSRF-TOKEN': $('#csrf').val()
                            },
                            type: "POST",
                            contentType: "application/json",
                            dataType: "json",
                            success: function (response) {
                                if (!response.hasOwnProperty('toastr')) {
                                    if(response=== 2){
                                        $('.like-icon').removeClass('liked');
                                    } else {
                                        $('.like-icon').toggleClass('liked');
                                    }
                                } else {
                                    toastr.warning(response['toastr']);
                                }
                            },
                            error: function (e) {
                                console.log(e.responseText);
                            }
                        });
                    }
                </script>
                <input type="hidden" value="{{ csrf_token() }}" id="csrf">

                <div class="col-md-12">
                    <div class="simple-slick-carousel">
                        
                        <div class=" slick-slide">
                            <a class="listing-item-container" data-marker-id="1">
                                <div class="listing-item" onClick="window.location=" >
                                   
                                    <div class="listing-item-content">

                                     

                                    </div>
                                </div>
                                <div class="star-rating">
                                    <div class="rating-counter">
                                        
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Plan -->
    <div class="container fullwidth padding-bottom-75">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="headline centered margin-top-80">
                    Votre photographe à portée de main
                </h2>
            </div>
        </div>

        <div class="row icons-container">
            <!-- Stage -->
            <div class="col-md-4">
                <div class="icon-box-2 with-line">
                    <i class="im im-icon-Camera-5"></i>
                    <h3>La qualité instantanée</h3>
                    <p>Une qualité à bon prix et sans attendre. Avec de nombreux services qui vont réduire vos coûts, sans pour autant spolier les bénéfices du photographe.</p>
                </div>
            </div>

            <!-- Stage -->
            <div class="col-md-4">
                <div class="icon-box-2 with-line">
                    <i class="im im-icon-Globe-2"></i>
                    <h3>Où que vous soyez</h3>
                    <p>Géolocalisez et choisissez votre photographe selon le type de photo que vous souhaitez réaliser ou en fonction du niveau de professionnalisme exigé.</p>
                </div>
            </div>

            <!-- Stage -->
            <div class="col-md-4">
                <div class="icon-box-2">
                    <i class="im im-icon-Photo"></i>
                    <h3>Choisissez, Retouchez, Partagez</h3>
                    <p>Un accès direct à vos prises de vues. Sélectionnez vos photos, faites les retoucher, imprimer, encadrer et/ou partagez les tout simplement.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('frontOffice.inc.footer')
@endsection


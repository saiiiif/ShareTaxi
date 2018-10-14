@extends('frontOffice.layout')

@section('head')
    @include('frontOffice.inc.head',
    ['title' => 'WellPic - Version Bêta',
    'description' => 'Votre photographe en quelques clics, où vous voulez et quand vous le désirez'
    ])
@endsection

@section('header')
    @include('frontOffice.inc.header')
@endsection

@section('content')

    @include('General::frontOffice.widgets.search', ['categories' => $categories])

    <!-- Content
        ================================================== -->
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 class="headline centered margin-top-75">
                    @lang('General::common.popular_categories')
                    @lang('General::common.popular_categories_heading')
                </h3>
            </div>

        </div>
    </div>

    <!-- Categories -->
    <div class="fullwidth-carousel-container margin-top-25">
        <div class="fullwidth-slick-carousel category-carousel" role="toolbar">
            @foreach($categories as $category)
            <div class="category-box-container slick-slide">
                <a href="{{ route('showCategoryPhotographs', ['title' => strtolower($category->title)]) }}" class="category-box" data-background-image="{{ route('showHome').'/'.$category->media->link }}" tabindex="0">
                    <div class="category-box-content">
                        <h3>{{ $category->title }}</h3>
                        <span>{{ $category->photographs->count() }} Photographes</span>
                    </div>

                    <div class="category-box-background" style="background-image: url('{{ route('showHome').'/'.$category->media->link }}');"></div></a>
            </div>
            @endforeach
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
                            url: "{{ route('showHome') }}/photograph/"+ id +"/bookmark",
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
                        @foreach($photographs as $photograph)
                        <div class=" slick-slide">
                            <a class="listing-item-container" data-marker-id="1">
                                <div class="listing-item" onClick="window.location='{{ route('showPhotographProfile', ['id' => $photograph->id]) }}';" >
                                    <img src="@if($photograph->defaultPicture){{ route('showHome') .'/'. $photograph->defaultPicture->link }}@else{{ route('showHome') .'/'. $photograph->user->image}}@endif" alt="" >
                                    <div class="listing-item-content">

                                        <h3 >{{ $photograph->user->first_name }}, {{ $photograph->user->last_name }}</h3>

                                    </div>
                                </div>
                                <div class="star-rating">
                                    <div class="rating-counter">
                                        (@if(countPhotographReviews($photograph->id) == 0) 1
                                        @else {{  countPhotographReviews($photograph->id) }}
                                        @endif avis)
                                    </div>
                                    @if(countPhotographReviews($photograph->id) == 0)
                                        <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span>
                                    @else
                                        @for ($i = 0; $i < round(averagePhotographReviews($photograph->id)); $i++)
                                            <span class="star"></span>
                                        @endfor
                                        @for ($i = 0; $i < (5 - round(averagePhotographReviews($photograph->id))); $i++)
                                            <span class="star empty"></span>
                                        @endfor
                                    @endif
                                </div>
                                <span onclick="bookmark({{$photograph->id}})" class="like-icon @if(Auth::user() and checkUserPhotographBookmark(Auth::user()->id, $photograph->id)) liked @endif"></span>

                            </a>
                        </div>
                        @endforeach
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

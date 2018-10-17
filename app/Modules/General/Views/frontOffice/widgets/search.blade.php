<script>
    var placeSearch, autocomplete;
    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
    }

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        document.getElementById('lat').value = place.geometry.location.lat();
        document.getElementById('lng').value = place.geometry.location.lng();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy
                });
                autocomplete.setBounds(circle.getBounds());
            });
        }
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.googleMaps.key') }}&libraries=places&callback=initAutocomplete"
        async defer></script>

<div class="main-search-container" data-background-image="{{ asset('img') }}/bg.jpg"
     style="background-image: url('{{ asset('img') }}/bg.jpg');">
    <div class="main-search-inner">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>@lang('General::search.nearby_photographs')</h2>
                    <h4>@lang('General::search.nearby_photographs_heading')</h4>
                    <form method="post" action="">
                        {{ csrf_field() }}
                    <div class="main-search-input">
                        <a href="#" class="location"><i class="fa fa-map-marker"></i></a>
                        <div class="main-search-input-item" style="padding-right: 25%; padding-left: 7px !important;">
                            <input type="text" name="location" id="autocomplete" onFocus="geolocate()" placeholder="@lang('General::search.location')" value=""/>
                            <input type="hidden" id="lat" name="lat"/>
                            <input type="hidden" id="lng" name="lng"/>
                        </div>

                        <div class="main-search-input-item">
                            <select data-placeholder="@lang('General::common.all_categories')" class="chosen-select" name="category">
                                <option value="-1">@lang('General::common.all_categories')</option>
                                                         </select>
                        </div>

                        <button type="submit" class="button">@lang('General::search.button')</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

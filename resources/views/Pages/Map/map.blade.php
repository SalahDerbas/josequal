@extends('layouts.master')

@section('title')
Map  - Dashboard
@stop

@section('css')


@endsection

@section('title_page1')
{{trans('trans.Dashboard')}}
@endsection

@section('title_page2')
    
    Map 

@endsection
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIP8XItrqNZBRUdDjyj94uif2JSQgcyZg"></script>


@section('content')



<div id="map" style="width: 100%; height: 500px;"></div>



@endsection


@section('scripts')





<script>
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: -34.397, lng: 150.644 },
        zoom: 8
    });

    var kmlLayer = new google.maps.KmlLayer({
        url: "{{ asset('storage/' . $filePath) }}",
        map: map
    });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIP8XItrqNZBRUdDjyj94uif2JSQgcyZg&callback=initMap" async defer></script>


@endsection

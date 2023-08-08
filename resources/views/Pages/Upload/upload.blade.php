@extends('layouts.master')

@section('title')
Upload Kml - Dashboard
@stop

@section('css')


@endsection

@section('title_page1')
{{trans('trans.Dashboard')}}
@endsection

@section('title_page2')
    
    Upload Kml

@endsection

@section('content')




<div class="container">
    <form action="{{ url('/upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="kml_file">Upload KML File:</label>
            <input type="file" name="kml_file" class="form-control" accept=".kml">
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>




@endsection


@section('scripts')


@endsection

@extends('web.layouts.app')

@section('content')
    @if ($url)
        @include('web.pages.' . $url)
    @else

    @endif
@endsection

@extends('layouts.app')

@section('content')

	{{-- {{ $series->toJson() }} --}}

	<series-edit :data="{{ $series->toJson()}}"></series-edit>

@endsection
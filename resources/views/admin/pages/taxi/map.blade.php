@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <h1 class="title">Mapa</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d42099.51068872805!2d19.116167179101563!3d48.73950525000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssk!2ssk!4v1592403606090!5m2!1ssk!2ssk" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
@endsection
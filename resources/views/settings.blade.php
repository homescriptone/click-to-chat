@extends('statamic::layout')
@section('title', __('Create Coupon'))
@section('wrapper_class', 'max-w-3xl')

@section('content')
 
    <publish-form
        title="{{ __('Click To Chat') }}"
        action="{{ cp_route('homescriptone/click-to-chat.store') }}"
        :blueprint='@json($blueprint)'
        :meta='@json($meta)'
        :values='@json($values)'
        @saved="window.location.href = $event.data.redirect"
    ></publish-form>
@endsection

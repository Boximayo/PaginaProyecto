@extends('errors::illustrated-layout')

@section('title', __('Página Prohibida'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Página Prohibida'))

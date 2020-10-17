@extends('layouts.error')

@section('error.master.title', page_title('404'))

@section('error.code', '404')
@section('error.title', __('error.404_title'))
@section('error.message', __('error.404_message'))

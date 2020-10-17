@extends('layouts.error')

@section('error.master.title', page_title('429'))

@section('error.code', '429')
@section('error.title', __('error.429_title'))
@section('error.message', __('error.429_message'))
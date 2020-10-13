@extends('layouts.error')

@section('error.master.title', page_title('429'))

@section('error.code', '429')
@section('error.title', trans('error.429_title'))
@section('error.message', trans('error.429_message'))
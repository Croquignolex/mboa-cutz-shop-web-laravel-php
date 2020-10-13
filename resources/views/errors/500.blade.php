@extends('layouts.error')

@section('error.master.title', page_title('500'))

@section('error.code', '500')
@section('error.title', trans('error.500_title'))
@section('error.message', trans('error.500_message'))
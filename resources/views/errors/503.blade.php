@extends('layouts.error')

@section('error.master.title', page_title('503'))

@section('error.code', '503')
@section('error.title', __('error.503_title'))
@section('error.message', __('error.503_message'))
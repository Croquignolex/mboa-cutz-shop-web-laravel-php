@extends('layouts.mail.plain')

@section('mail.plain.content')
    {{ mb_strtoupper(__('page.pwd_reset')) }}

    @lang('mail.top_password_reset_msg', ['name' => $user->format_first_name]).

    @lang('mail.body_password_reset_msg' , ['date' => $user->creation_date]).

    @lang('mail.reset_my_password') ({{ $passwordReset->reset_link }})
@endsection
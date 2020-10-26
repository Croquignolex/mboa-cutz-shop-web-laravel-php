@extends('layouts.mail.plain')

@section('mail.plain.content')
    {{ mb_strtoupper(__('auth.account_validation')) }}

    @lang('mail.top_register_msg', ['name' => $user->format_first_name]).

    @lang('mail.body_register_msg' , ['date' => $user->creation_date]).

    @lang('mail.validate_my_account') ({{ $emailConfirmation->confirmation_link }})
@endsection
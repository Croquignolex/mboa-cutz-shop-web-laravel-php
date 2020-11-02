@extends('layouts.mail.normal')

@section('head', mb_strtoupper(__('auth.account_validation')))

@section('body')
    <tr>
        <td>
            <p style="text-align: justify;">
                <strong>@lang('mail.top_register_msg', ['name' => $user->format_first_name]).</strong>
            </p>
            <p style="text-align: justify;">
                @lang('mail.body_register_msg' , ['date' => $emailConfirmation->creation_date]).
            </p>
            <div style="text-align: center;">
                <a href="{{ $emailConfirmation->confirmation_link }}" style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #e83e8c; text-decoration:none;" target="_blank">
                    @lang('mail.validate_my_account')
                </a>
            </div>
        </td>
    </tr>
@endsection
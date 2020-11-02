@extends('layouts.mail.normal')

@section('head', mb_strtoupper(__('page.pwd_reset')))

@section('body')
    <tr>
        <td>
            <p style="text-align: justify;">
                <strong>@lang('mail.top_password_reset_msg', ['name' => $user->format_first_name]).</strong>
            </p>
            <p style="text-align: justify;">
                @lang('mail.body_password_reset_msg' , ['date' => $passwordReset->last_update_date]).
            </p>
            <div style="text-align: center;">
                <a href="{{ $passwordReset->reset_link }}" style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #e83e8c; text-decoration:none;" target="_blank">
                    @lang('mail.reset_my_password')
                </a>
            </div>
        </td>
    </tr>
@endsection
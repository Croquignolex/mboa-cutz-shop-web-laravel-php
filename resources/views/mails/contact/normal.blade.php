@extends('layouts.mail')

@section('head', mb_strtoupper('Formulaire de contact'))

@section('body')
    <tr>
        <td>
            <p style="text-align: justify;">
                <strong>
                    Ce méssage vous à été envoyé dépuis le formulaire de
                    contact le {{ $contact->short_creation_date }}.
                    Voici les détails de ce méssage:
                </strong>
            </p>
            <p style="text-align: justify;">
                <strong>Nom:</strong> {{ $contact->name }}<br />
                <strong>Email:</strong> {{ $contact->email }}<br />
                <strong>Tel:</strong> {{ $contact->phone }}<br />
                <strong>Sujet:</strong> {{ $contact->subject }}
            </p>
            <p style="text-align: justify; padding: 20px; background-color: #dddddd;">
                {{ $contact->message }}
            </p>
            <div style="text-align: center;">
                <a href="{{ config('app.url') }}" style="display: inline-block; padding: 11px 30px; margin: 20px 0 30px; font-size: 15px; color: #fff; background: #e83e8c; text-decoration:none;" target="_blank">
                    Répondre au méssage
                </a>
            </div>
        </td>
    </tr>
@endsection
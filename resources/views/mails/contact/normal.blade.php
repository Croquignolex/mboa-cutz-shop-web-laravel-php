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
            <p style="text-align: justify; padding: 20px; background-color: #fddee9;">
                {{ $contact->message }}
            </p>
            <div style="text-align: center;">
                <a href="{{ config('company.admin') }}" style="display: inline-block; padding: 11px 30px; margin: 20px 0 30px; font-size: 15px; color: #fff; background: #e83e8c; text-decoration:none;" target="_blank">
                    Répondre au méssage
                </a>
            </div>
            <p style="text-align: justify;">
                Si ce bouton ne fonctionne pas, essayez de copier et coller
                cet URL dans votre navigateur web. Si le problème perssiste,
                s'il vous plais sentez vous libre de contacter l'équipe
                de developpement.
            </p>
        </td>
    </tr>
@endsection
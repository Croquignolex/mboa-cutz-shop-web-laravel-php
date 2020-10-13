@extends('layouts.mail')

@section('title', 'Contact')

@section('head', mb_strtoupper('Formulaire de contact'))

@section('body')
<tr>
    <td>
        <p style="text-align: justify;">
            <strong>
                Ce méssage vous à été envoyé dépuis le formulaire de
                contact le {{ $contact->fr_created_date }} à {{ $contact->fr_created_time }}.
                Voici les détails de ce méssage:
            </strong>
        </p>
        <p style="text-align: justify;">
            <strong>Nom:</strong> {{ $contact->format_name }}<br />
            <strong>Email:</strong> {{ $contact->email }}<br />
            <strong>Tel:</strong> {{ $contact->phone }}<br />
            <strong>Sujet:</strong> {{ $contact->subject }}
        </p>
        <p style="text-align: justify; border: 1px solid #da7612; padding: 10px">
            {{ $contact->message }}
        </p>
        <div style="text-align: center;">
            <a href="#" style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #da7612; text-decoration:none;" target="_blank">
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
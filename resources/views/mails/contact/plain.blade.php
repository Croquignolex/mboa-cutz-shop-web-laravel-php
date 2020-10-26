@extends('layouts.mail.plain')

@section('mail.plain.content')
    {{ mb_strtoupper('Formulaire de contact') }}

    Ce méssage vous à été envoyé dépuis le formulaire de
    contact le {{ $contact->short_creation_date }}.
    Voici les détails de ce méssage:

    Nom: {{ $contact->format_name }}
    Email: {{ $contact->email }}
    Tel: {{ $contact->phone }}
    Sujet: {{ $contact->subject }}

    {{ $contact->message }}
@endsection
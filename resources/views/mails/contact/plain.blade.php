{{ mb_strtoupper('Formulaire de contact') }}

Ce méssage vous à été envoyé dépuis le formulaire de
contact le {{ $contact->short_creation_date }}.
Voici les détails de ce méssage:

Nom: {{ $contact->format_name }}
Email: {{ $contact->email }}
Tel: {{ $contact->phone }}
Sujet: {{ $contact->subject }}

{{ $contact->message }}

Ce mail à été envoyé à {{ $sender }}.
Si vous êtes pas le destinataire, vous pouvez ignorer ce mail
ou nous contacter directement en utilisant ce lien ({{ locale_route('contact.index') }}).

&copy; 2018 {{ config('app.name') }}, @lang('general.right').
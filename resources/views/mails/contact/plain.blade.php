{{ mb_strtoupper('Formulaire de contact') }}<br /><br /><br />
Ce méssage vous à été envoyé dépuis le formulaire de
contact le {{ $contact->fr_created_date }} à {{ $contact->fr_created_time }}.
Voici les détails de ce méssage:<br /><br />
Nom: {{ $contact->format_name }}<br />
Email: {{ $contact->email }}<br />
Tel: {{ $contact->phone }}<br />
Sujet: {{ $contact->subject }}<br /><br />
{{ $contact->message }}<br /><br />
<a href="#" target="_blank">Répondre au méssage</a><br /><br />
Si ce bouton ne fonctionne pas, essayez de copier et coller
cet URL dans votre navigateur web. Si le problème perssiste,
s'il vous plais sentez vous libre de contacter l'équipe
de developpement.<br /><br />
@lang('general.admin_thanks', ['app' => config('app.name')])<br /><br /><br />
&copy; 2018 {{ config('app.name') }}, @lang('general.right').
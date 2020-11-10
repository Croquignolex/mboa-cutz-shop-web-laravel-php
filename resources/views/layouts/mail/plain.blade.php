@yield('mail.plain.content')

@lang('mail.footer_plain', ['receiver' => $receiver, 'url' => locale_route('contact.index')])

&copy; 2018 {{ config('app.name') }}, @lang('general.right').
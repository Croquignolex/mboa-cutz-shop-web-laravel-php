<!DOCTYPE html>
<html lang="{{ Illuminate\Support\Facades\App::getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    </head>

    <body style="margin:0; background: #f8f8f8;">
        <div style="padding: 0 0; font-family:'Poppins', Arial, sans-serif; line-height:30px; height:100%; width: 100%;">
            <div style="max-width: 700px; padding:50px 0; margin: 0 auto; font-size: 14px;">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                    <tbody>
                    <tr>
                        <td style="vertical-align: top; padding-bottom:10px;" align="center">
                            <a href="{{ locale_route('home.index') }}" target="_blank">
                                <img src="{{ img_asset('logo-black') }}" alt="..." style="border:none; height: 100px"><br/>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                    <tbody>
                        <tr>
                            <td style="background:#e83e8c; padding:20px; color:#fff; text-align:center;">
                                <strong>
                                    @yield('head')
                                </strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div style="padding: 40px; background: #fff; border: 2px solid #dddddd; border-top: none;">
                    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                        <tbody>
                            @yield('body')
                            <tr>
                                <td>
                                    <p style="text-align: justify;">
                                        Ce mail à été envoyé à {{ $sender }}.
                                        Si vous êtes pas le destinataire, vous pouvez ignorer ce mail
                                        ou <a href="{{ locale_route('contact.index') }}" target="_blank">nous contacter directement</a>
                                        en cliquant sur ce lien.
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div style="text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px">
                    <p>&copy; 2018 {{ config('app.name') }}, @lang('general.right').</p>
                </div>
            </div>
        </div>
    </body>
</html>
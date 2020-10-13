<!DOCTYPE html>

<html lang="{{ App::getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
    </head>

    <body style="margin:0px; background: #f8f8f8;">
        <div style="padding: 0px 0px; font-family:arial; line-height:30px; height:100%; width: 100%;">
            <div style="max-width: 700px; padding:50px 0; margin: 0px auto; font-size: 14px;">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                    <tbody>
                    <tr>
                        <td style="vertical-align: top; padding-bottom:30px;" align="center">
                            <a href="{{ locale_route('home') }}" target="_blank">
                                <img src="{{ img_asset('logo') }}" alt="..." style="border:none; height: 40px"><br/>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                    <tbody>
                    <tr>
                        <td style="background:#DA7612; padding:20px; color:#fff; text-align:center;">
                            <strong>
                                @yield('head')
                            </strong>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div style="padding: 40px; background: #fff;">
                    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                        <tbody>
                        @yield('body')
                        <tr>
                            <td style="text-align: right">
                                <strong>@lang('general.admin_thanks', ['app' => config('app.name')])</strong>
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
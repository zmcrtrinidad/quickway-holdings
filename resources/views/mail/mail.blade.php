{{-- reference ang NEXUS email template --}}


<!DOCTYPE html>
<html>

<head>
    <title>Mail</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div width="100%"
        style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;">
        <div style="max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px">
            <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 20px">
                <tbody>
                    <tr>
                        <td style="vertical-align: top; padding-bottom:5px;" align="center">
                            {{-- <img src="http://strongholdinsurance.com.ph/assets/img/2logo.png" alt="Stronghold Logo"
                                width="300px" height="120px" style="border:none;"> --}}
                            <img src="{{ asset('img/QHI.png') }}" alt="Quickway Logo" width="200" height="100"
                                style="border:none;">
                        </td>
                    </tr>
                </tbody>
            </table>
            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                <tr>
                    <td align="center" style="background-color: #f7f7f7; padding: 20px;">
                        <table cellpadding="0" cellspacing="0" border="0" width="600">
                            <tr>
                                <td align="center" style="font-size: 24px; font-weight: bold; padding-bottom: 20px;">
                                    Subject: {{ $asignatura }} </td>
                            </tr>
                            <tr>
                                <td style="padding: 20px; background-color: #ffffff;">
                                    <p>Name: {{ $name }},</p>
                                    <p> Email: {{ $email }}</p>

                                    <p>Message:</p>
                                    <span>{!! $content !!}</span>


                                </td>

                            </tr>

                            <tr>

                                <td align="center" style="padding: 20px; background-color: #f7f7f7; font-size: 12px;">

                                    <p>This email was sent by {{ $name }} at {{ $currentTime }}.</p>

                                    <small><i>
                                            <center>This is a system generated message. Please DO NOT REPLY to this
                                                email.</center>
                                        </i></small>

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>

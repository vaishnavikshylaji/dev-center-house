<head>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            min-width: 100%!important;
        }
        .content {
            width: 100%; max-width: 660px;
        }
        .header {
            padding: 40px 30px 20px 30px;
        }
        .innerpadding {
            padding: 30px 30px 30px 30px; line-height: 25px;
        }
        .borderbottom {
            border-bottom: 1px solid #f2eeed;
        }
        .button a {
            color: #ffffff; text-decoration: none;
        }
        .footer {
            padding: 20px 30px 20px 30px;
        }
        .footercopy {
            font-size: 14px; color: #ffffff;
        }
        .footercopy a {
            color: #ffffff; text-decoration: underline;
        }
    </style>
</head>
<body>
<table bgcolor="#ffffff"
       class="content" align="center" cellpadding="0" cellspacing="0" border="0">
    <tbody>
    <tr>
        <td bgcolor="#f58457" class="header">
            <table width="70" align="center" border="0" cellpadding="0" cellspacing="0">
            </table>
        </td>
    </tr>
    <tr>
        <td class="innerpadding borderbottom" style="padding-top: 0px;">
            Hi {{$attributes['name']}},
            <br />
            <br />
            Thank you for being a part of Dev center house.<br><br>
            Email: {{$attributes['email']}}.<br>
            Password : {{$attributes['password']}}
            <br />
        </td>
    </tr>
    <tr>
        <td class="footer" bgcolor="#f58457">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr>
                    <td align="center" class="footercopy">
                        © {{ date('Y') }} Dev Center House, All rights reserved.
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
</body>


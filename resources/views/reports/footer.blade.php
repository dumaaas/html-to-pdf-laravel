<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/fonts.css">

    <title>Footer</title>
</head>
<body>
    <div class="footer">
        <div>
            <img class="ml-33" src="{{ public_path('/img/growth.png') }}" alt="growth">
        </div>
        <div>
            <img class="ml-33" src="{{ public_path('/img/uk.png') }}" alt="growth">
        </div><div>
            <img class="ml-33" src="{{ public_path('/img/cambridge.png') }}" alt="growth">
        </div><div>
            <img class="ml-33" src="{{ public_path('/img/businessboard.png') }}" alt="growth">
        </div>
    </div>

<style>
    .footer {
        display: flex;
        display: -webkit-box; /* wkhtmltopdf uses this one */
        -webkit-box-align: center;      /* WebKit */
        align-items: center;
        padding: 15px 0;
    }

    .header-logo {
        display: flex;
        display: -webkit-box; /* wkhtmltopdf uses this one */
        -webkit-box-pack: justify; /* wkhtmltopdf uses this one */
        justify-content: space-between;
        -webkit-box-align: center;      /* WebKit */
        align-items: center;
    }

    .header-info {
        display: flex;
        display: -webkit-box; /* wkhtmltopdf uses this one */
        -webkit-box-align: center;      /* WebKit */
        align-items: center;
        padding-right: 33px;
    }

    .header span {
        display: block;
        font-weight: bold;
    }

    .header p {
        font-size: 10px;
        line-height: 12px;
    }

    .ml-33 {
        margin-left: 60px;
    }
</style>
</body>
</html>

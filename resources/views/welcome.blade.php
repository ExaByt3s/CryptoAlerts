<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                width: 100%;
                height: 100%;
            }

            body {
                margin: 0;
            }

            .header {
                width: 100%;
                height: 60px;
                background: darkblue;
                padding-left: 12px;
                box-shadow: 0 3px 4px 0 rgba(0,0,0,.2), 0 3px 3px -2px rgba(0,0,0,.14), 0 1px 8px 0 rgba(0,0,0,.12);
            }

            .brand {
                color: white;
            }

            .flex-center {
                display: flex;
                align-items: center;
            }

            .content {
                height: calc(100% - 60px);
            }

            .content form {
                margin: 0 auto;
            }

            .content form * {
                width: 200px;
                height: 30px;
            }

            .content form button {
                border-radius: 10px;
                background: #1d68a7;
                color: white;
            }

            .content form button:hover {
                cursor: pointer;
            }

        </style>
    </head>
    <body>
        <nav class="header flex-center">
            <span class="brand">Crypto Alerts</span>
        </nav>

        <div class="content flex-center">
            <form action="" class="crypto-form">
                <select name="cryptos" id="cryptos">
                    <option value="">BTC</option>
                    <option value="">ETH</option>
                    <option value="">LTC</option>
                </select>
                <input type="number" name="price" id="price">

                <button>Notify Me</button>
            </form>
        </div>
    </body>
</html>

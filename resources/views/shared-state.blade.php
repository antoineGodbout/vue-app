<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shared States</title>

</head>
<body>

    <div id="one">
        <h1>
            @{{ user.name }}
        </h1>
    </div>
    <div id="two">
        <h1>
            @{{ user.name }}
        </h1>
    </div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="/js/app.js"></script>

</body>
</html>

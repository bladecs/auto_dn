<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Realtime Webhook Data</title>
</head>
<body>
    <h1>Realtime Webhook Data</h1>
    <ul id="data-list">
        <!-- Data dari webhook akan tampil di sini -->
    </ul>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/laravel-echo/dist/echo.iife.js"></script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="{{ asset('js/webhook.js') }}"></script>
</body>
</html>

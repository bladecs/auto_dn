import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'reverb',
    key: import.meta.env.VITE_REVERB_APP_KEY,
    wsHost: import.meta.env.VITE_REVERB_HOST,
    wsPort: import.meta.env.VITE_REVERB_PORT ?? 80,
    wssPort: import.meta.env.VITE_REVERB_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
});

window.Echo.channel('webhook-channel')
    .listen('.webhook.received', (e) => {
        console.log('Data baru diterima:', e.data);

        // Tampilkan data baru di list
        const dataList = document.getElementById('data-list');
        const li = document.createElement('li');
        li.textContent = JSON.stringify(e.data);
        dataList.prepend(li);
    });

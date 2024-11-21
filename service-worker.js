self.addEventListener('install', function(event) {
    console.log('Service Worker instalándose...');
});

self.addEventListener('activate', function(event) {
    console.log('Service Worker activado.');
});

self.addEventListener('fetch', function(event) {
    event.respondWith(
        fetch(event.request).catch(function() {
            return new Response("No se puede acceder a la red");
        })
    );
});

var cache_name = 'cache-intranet-v1';
    var urlsToCache = [
        '/',
        'index.html',
        'app/index.js',
        'media/icons/logo144.png',
        'media/icons/logo512.png',
        'media/icons/logo36.png',
        'media/icons/logo48.png',
        'assets/css/styles.css',
        'assets/css/alertify/alertify.min.css',
        'assets/js/alertify.min.js'
    ];

self.addEventListener('install', function(event){
    event.waitUntil(
    caches.open(cache_name)
      .then(function(cache) {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
})

self.addEventListener('fetch', function(event) {
    event.respondWith(
      caches.match(event.request)
        .then(function(response) {
          if (response) {
            return response;
          }  
          var fetchRequest = event.request.clone();
  
          return fetch(fetchRequest).then(
            function(response) {
              if(!response || response.status !== 200 || response.type !== 'basic') {
                return response;
              }  
              var responseToCache = response.clone();  
              caches.open(cache_name)
                .then(function(cache) {
                  cache.put(event.request, responseToCache);
                });
  
              return response;
            }
          );
        })
      );
  });
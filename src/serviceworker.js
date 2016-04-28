// we'll version our cache (and learn how to delete caches in
// some other post)
const cacheName = 'v2::static';

// once the SW is installed, go ahead and fetch the resources
// to make this work offline
self.addEventListener('install', e => {
  e.waitUntil(
    caches.open(cacheName).then(cache => {
      return cache.addAll([
        '/',
        '/resume',
        'assets/img/work/profile.png',
        'assets/img/work/manage.png',
        'assets/img/work/ycuad.png',
        'assets/img/work/schramm.png',
        'assets/img/work/profile-hero.png',
        'assets/img/work/profile-hero-small.png',
        'assets/img/work/profile-services-small.png',
        'assets/img/work/profile-services.png',
        'assets/img/work/schramm-hero.png',
        'assets/img/work/schramm-hero-small.png',
        'assets/img/work/ycuad-hero.png',
        'assets/img/work/ycuad-hero-small.png',
        'assets/img/work/manage-hero.png',
        'assets/img/work/manage-hero-small.png',
        'assets/img/work/manage-ui.png',
        'assets/img/work/payments.png',
        'assets/img/square_bg.png',
        'assets/img/curves.png',
        'assets/img/hi.jpg',
        'assets/img/hi-small.jpg',
        'assets/css/icons.data.svg.css',
        'assets/css/styles.css',
        'assets/js/production.min.js'
      ]).then(() => self.skipWaiting());
    })
  );
});

// when the browser fetches a url, either response with
// the cached object or go ahead and fetch the actual url
self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request).then(res => res || fetch(event.request))
  );
});
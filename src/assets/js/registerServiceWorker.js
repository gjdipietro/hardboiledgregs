'use strict';

/*========================================
REGISTER SERVICE WORKER
=========================================*/
(function() {
	if ('serviceWorker' in navigator) {
  		navigator.serviceWorker.register('/serviceWorker.js', {
    		scope: '/'
  		});
	}
})();
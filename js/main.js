var feed = new Instafeed({
        get: 'tagged',
        tagName: 'BN1_BABEL2016',
        clientId: 'CLIENT_ID',
				accessToken: 'ACCESS_TOKEN',
				after: function() {
					var el = document.getElementById('instagram');
					// if (el.classList)
					// 	el.classList.add('show');
					// else
					// 	el.className += ' ' + 'show';
				}
			});

			window.onload = function() {
				feed.run();
			};

var feed = new Instafeed({
        get: 'tagged',
        tagName: 'BN1_BABEL2016',
        clientId: 'a8de0f6c70b0464bbbb2895a3ca1afdf',
				accessToken: '271686075.a8de0f6.ca3a6a154fad465c850254bee62ebbd5',
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
// accessToken = 271686075.d219bd9.473a902f665b4d2e89910b4ef80a47b0 (bn1.juniard.id)
// clientId = d219bd9b57df43b69ba38389fb675832

// accessToken = 271686075.a8de0f6.ca3a6a154fad465c850254bee62ebbd5 (localhost/BN1)
// clientId = 	a8de0f6c70b0464bbbb2895a3ca1afdf

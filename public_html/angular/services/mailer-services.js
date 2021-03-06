app.constant("MAILER_ENDPOINT", "api/mailer/");
app.service("MailerService", function($http, MAILER_ENDPOINT) {
	function getUrl() {
		return(MAILER_ENDPOINT);
	}

	this.sendEmail = function(mailer) {
		return($http.post(getUrl(), mailer));
	};
});
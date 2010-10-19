// JavaScript Document
function sendmail() {
	var mail = new Array('patproct@iupui.edu', 'patrick42h@indianaoutboard.org', 'patrick42h@gmail.com', 'Comments about IOA 2010 site');
	var url = 'mailto:' + mail[1] + '?subject=' + mail[3] + '';
	newWin = window.open(url,'tidbits','width=700,height=450,screenX=50, screenY=50,top=50,left=50,location=no,status=no,scrollbars=yes,toolbar=no,resizable=no, menubar=yes');
	newWin.close();
	// window.alert('If you are not redirected to your mail client, you can reach me at ' + mail[1] + '.');
}
function mailform() {
	var mailurl = 'http://in-info-web4.informatics.iupui.edu/~patproct/n355/project/contact/';
	newWin = window.open(mailurl,'tidbits','width=700,height=460,screenX=50, screenY=50,top=50,left=50,location=no,status=no,scrollbars=yes,toolbar=no, resizable=no, menubar=yes');
}
function google() {
	var url = 'http://www.google.com/';
	newWin = window.open(url,'tidbits','width=700,height=450,screenX=50, screenY=50,top=50,left=50,location=no,status=no,scrollbars=yes,toolbar=no,resizable=no, menubar=yes');
}
	

var i = 0;
var txt = 'One reality of managing large organizations involves collectiong massive amounts od sensitive data that is stored and managed in databases. This makes databases a prime target for cyberattacks';
var speed = 50;

function typeWriter() {
  	if (i < txt.length) {
    	document.getElementById("typingText").innerHTML += txt.charAt(i);
    	i++;
    	setTimeout(typeWriter, speed);
  	}
}

typeWriter()

var requestURL = 'js/status.json';
var request = new XMLHttpRequest();
request.open('GET', requestURL);
request.responseType = 'json';
request.send();
request.onload = function() {
  var superHeroes = request.response;
  populateHeader(superHeroes);
  showHeroes(superHeroes);
}

step1 = $.getJSON('js/status.json');
step2 = step1.responseText;
step3 = JSON.parse(step2);
// now you can use dot notation on the step3 variable
// such as: step3.status.internal.OWA
step1;
step2;
console.log(step3);

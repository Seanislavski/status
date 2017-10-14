step1 = $.getJSON('js/status.json');
step2 = step1.responseText;
step3 = JSON.parse(step2);
// now you can use dot notation on the step3 variable
// such as: step3.status.internal.OWA

var express = require('express');
var app = express();
var dataFile = require('./status.json');

app.set('port', process.env.PORT || 3000 );
app.set('appData', dataFile);

app.use(express.static('ExpressJS/public'));

app.get('/', function(req, res) {
    res.send(`
        <h1>ACLS API part 2 (express)</h1>
        `);
});

app.get('/status', function(req, res) {
    var info = '';
    array.forEach(function(item) {
        info += `
        <li>
            <h2>${item}</h2>
            <p>${item.OWA}</p>
        </li>
        `;
    });
    res.send(`
        <h1>ACLS API part 2 (express)</h1>
        ${info}
        `);
});

var server = app.listen(app.get('port'), function() {
    console.log('Listening on port ' + app.get('port'));
});
// var http = require('http');

// var myServer = http.createServer(function(req, res)
// {
//     res.writeHead(200, {"Content-Type" : "text/html"});

//     res.write('<h1>ACLS API</h1>');
//     res.end();
// });

// myServer.listen(3000);
// console.log('Go to http://localhost:3000 on your browser');


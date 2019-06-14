let http = require('http');
let url = require('url');
let fs = require('fs');

http.createServer(function onRequest (req, res) {
    let urlObj = url.parse(req.url, true);
    let route = urlObj.pathname;
    let filename = '.' + urlObj.pathname;
    res.writeHead(200, {"Content-Type": "application/json"});

    if(route === '/home') {
        res.writeHead(200, {"Content-Type": "text/html"});
        res.write("<h1>Welcome to the home page</h1>");
        res.end();
    }
    else if (route === '/getData') {
        fs.readFile('getData.json', (err, data) => {
            res.writeHead(200, { 'Content-Type': 'application/json' });
            res.write(data);
            res.end();
        });
    }
    else {
        res.writeHead(404, {'Content-Type': 'text/html'});
        res.end("404 Not Found");        
    }
}).listen(8888);
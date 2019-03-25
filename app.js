const http = require('http');

let app = http.createServer((req, res) => {
    res.writeHead(200, {
        'content-Type': 'text/plain'
    });

    res.end('Hello World!\n');
});

app.listen(3000, '127.0.0.1');
console.log('Node server running on port 3000');






/// Event listener for collapsable episodes //////

var coll = document.getElementsByClassName("collapsible");
var epContent = document.getElementsByClassName("episode-content");

coll.addEventListener("click", function () {
    if (epContent.style.display === "block") {
        epContent.style.display = "none";
    } else {
        epContent.style.display = "block";
    }
});

console.log('what the hell is this, and where are we?');
const http = require('http');

const requestListener = http.createServer((req,res) => {
	console.log(req);
	res.write('Hello Node\n');
	res.end();
});

const server = http.createServer();
server.on('request',requestListener);

server.listen(4242,() => {
	console.log('Server is running...');
});

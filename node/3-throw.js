const fs = require('fs');

const files = ['./1-loop.js','./zzz.js','./2-try.js'];

files.forEach(file => {
	try {
	const data = fs.readFileSync(file);
	console.log('File data is ',data);
}
	catch (err) {
		if (err.code === 'ENDENT') {
			console.log('File not found');
		} else {
			throw err;
		}
	}
});

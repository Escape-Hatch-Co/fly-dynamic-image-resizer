const fs = require('fs')
const settings = require('../package.json');
const version = settings.version;
const package = `https://fly.escapehatch.dev/eh-maintenance-api_${version}.zip`;

const content = {
	"eh-fly-dynamic-image-resizer/eh-fly-dynamic-image-resizer.php": {
		version,
		package
	}
};

fs.writeFile('./dist/info.json', JSON.stringify(content, null, 2), err => {
	if (err) {
		console.error(err)
		return
	}

	console.log('./dist/info.json created.')
})

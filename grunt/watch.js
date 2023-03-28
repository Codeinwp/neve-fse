// https://github.com/gruntjs/grunt-contrib-watch
module.exports = {
	sass: {
		files: ['assets/css/src/**/*.scss'],
		tasks: ['build']
	},
};

/* jshint node:true */
// https://github.com/blazersix/grunt-wp-i18n
module.exports = {
	theme: {
		options: {
			updateDomains: true,
			textdomain: '<%= package.theme.textdomain %>',
		},
		files: {
			src: [ '<%= files.php %>' ],
		},
	},
	composer: {
		options: {
			textdomain: '<%= package.theme.textdomain %>',
			updateDomains: true,
		},
		files: {
			src: [ 'vendor/codeinwp/**/*.php' ],
		},
	},
};

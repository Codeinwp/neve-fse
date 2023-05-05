const path = require( 'path' );

const paths = {
	global: {
		config: path.join( __dirname, 'grunt/' ),
		grunt: path.join( __dirname, 'grunt/' ),
	},
	config: 'grunt/',
	grunt: 'grunt/',
	languages: 'languages/',
	logs: 'logs/',
	images: 'images/',
	vendor: 'packages/',
	css: 'assets/css/',
};

const taskMap = {
	rtlcss: 'grunt-rtlcss',
	sass: 'grunt-contrib-sass',
	watch: 'grunt-contrib-watch',
	addtextdomain: 'grunt-wp-i18n',
	postcss: '@lodder/grunt-postcss',
	wp_readme_to_markdown: 'grunt-wp-readme-to-markdown',
};

const files = {
	php: [
		'*.php',
		'**/*.php',
		'!.git/**',
		'!vendor/**',
		'!node_modules/**',
		'!logs/**',
	],
	css: [
		'*.css',
		'**/*.css',
		'!*.min.css',
		'!**/*.min.css',
		'!vendor/**',
		'!node_modules/**',
		'!logs/**',
	],
	js: [
		'*.js',
		'**/*.js',
		'!*.min.js',
		'!**/*.min.js',
		'!.git/**',
		'!vendor/**',
		'!node_modules/**',
		'!logs/**',
	],
};

const gruntConfig = ( grunt ) => {
	'use strict';

	const config = {};
	const loader = require( 'load-project-config' );

	config.paths = paths;
	config.taskMap = taskMap;
	config.files = files;
	loader( grunt, config ).init();
};

module.exports = gruntConfig;

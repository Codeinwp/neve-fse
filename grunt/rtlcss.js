// https://github.com/MohammadYounes/grunt-rtlcss
const ext = '-rtl.css';

const options = {
	autoRename: false,
	autoRenameStrict: false,
	blacklist: {},
	clean: true,
	greedy: false,
	processUrls: false,
	stringMap: [
		{
			name: 'left-right',
			priority: 100,
			search: ['left', 'Left', 'LEFT'],
			replace: ['right', 'Right', 'RIGHT'],
			options: {
				scope: '*',
				ignoreCase: false,
			},
		},
		{
			name: 'ltr-rtl',
			priority: 100,
			search: ['ltr', 'Ltr', 'LTR'],
			replace: ['rtl', 'Rtl', 'RTL'],
			options: {
				scope: '*',
				ignoreCase: false,
			},
		},
	],
};

module.exports = {
	css: {
		options,
		expand: true,
		cwd: '<%= paths.css %>/build',
		dest: '<%= paths.css %>/build',
		ext,
		src: ['*.css', '!*-rtl.css'],
	},
};

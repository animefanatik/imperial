module.exports = function(grunt) {

    grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		/**
		 * Sass
		 */
		sass: {
		  dev: {
		    options: {
              style: 'compressed',
              sourcemap: false
		    },
		    files: {
				'./css/style.css': 'scss/style.scss',
		    }
		  }
		},

	  	/**
	  	 * Watch
	  	 */
		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass']
			}
		},
		
		imagemin: {
			dynamic: {
				options: {
					optimizationLevel: 6, 
					progressive: true
				},
				files: [{
					expand: true,
					cwd: 'img/',
					src: ['**/*.{png,jpg,gif}'],
					dest: './img/'
				}]
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.registerTask('default',['watch', 'imagemin']);
}
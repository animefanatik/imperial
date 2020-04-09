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
		imagemin: {
			dynamic: {
				options: {
					optimizationLevel: 6,
					progressive: true
				},
				files: [{
					expand: true,
					cwd: 'images/',
					src: ['**/*.{png,jpg,gif}'],
					dest: './img/'
				}]
			}
		},
		
	  	/**
	  	 * Watch
	  	 */
		  watch: {
			src: {
				files: ['**/*.scss', '**/*.{png,jpg,gif}'],
				tasks: ['default']				
			}			
		}		
	});
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default',['imagemin', 'sass', 'watch']);
}
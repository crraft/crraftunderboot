module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    concat: {
      distjs: {
        src: ['src/js/jquery-3.1.0.js', 'src/js/bootstrap-3.3.7/bootstrap-sprockets.js', 'src/js/bootstrap-3.3.7/bootstrap.js', 'src/js/skip-link-focus-fix.js'],
        dest: 'js/cscript.js',
      },
    },
    uglify: {
    options: {
      mangle: false
    },
    my_target: {
      files: {
        'js/cscript.min.js': ['src/js/jquery-3.1.0.js', 'src/js/bootstrap-3.3.7/bootstrap-sprockets.js', 'src/js/bootstrap-3.3.7/bootstrap.js', 'src/js/skip-link-focus-fix.js']
        }
      }
    }
  });


  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');

};

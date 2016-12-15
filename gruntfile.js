module.exports = function (grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        postcss: {

            options: {
                processors: [
                    
                    require('postcss-cssnext')()

                    
                    , require('precss')()
                ]
            }
            , dist: {
                src: 'css/style.css'
                , dest: 'css/style.css'
            }

        }
        , sass: {
            options: {
                sourceMap: true
            }
            , dist: {
                files: {
                    'css/style.css': 'sass/style.scss'
                }
            }
        }
        , watch: {
            css: {
                files: '**/*.scss'
                , tasks: ['sass']
            }
        }

    });

    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default', ['watch']);
};
module.exports = function (grunt) {
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-qunit');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-htmlhint');
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            options: {
                separator: ';'
            },
            dist: {
                src: [
                    'resources/components/js/lib/**/*.js',
                    'resources/components/js/modules/sticky.js',
                    'resources/components/js/modules/_displayDeskopSearch.js',
                    'resources/components/js/modules/script.js'
                ],
                dest: 'dist/<%= pkg.name %>.js'
            }
        },
        htmlhint: {
            build: {
                options: {
                    'tag-pair': true,
                    'tagname-lowercase': true,
                    'attr-lowercase': true,
                    'attr-value-double-quotes': true,
                    'doctype-first': true,
                    'spec-char-escape': true,
                    'id-unique': true,
                    'head-script-disabled': true,
                    'style-disabled': true
                },
                src: ['index.html']
            }
        },
        uglify: {
            my_target: {
                files: {
                    'resources/js/script.js': ['resources/components/js/**/*.js']
                } // files
            } // my_target
        }, // uglify
        compass: {
            dev: {
                options: {
                    config: 'config.rb'
                } // options
            } // dev
        }, // compass
        jshint: {
            // define the files to lint
            files: 'resources/components/js/**/*.js',
            // configure JSHint (documented at http://www.jshint.com/docs/)
            options: {
                // more options here if you want to override JSHint defaults
                globals: {
                    jQuery: true,
                    console: true,
                    module: true
                }
            }
        },
        watch: {
            options: {livereload: true},
            scripts: {
                files: [
                    'resources/components/js/lib/**/*.js',
                    'resources/components/js/modules/sticky.js',
                    'resources/components/js/modules/_displayDeskopSearch.js',
                    'resources/components/js/modules/script.js',
                    'resources/components/js/modules/mobile-menu.js',
                ],
                tasks: ['uglify']
            }, // scripts
            sass: {
                files: ['resources/components/sass/**/*.scss'],
                tasks: ['compass:dev']
            }, // sass
            html: {
                files: ['*.html'],
                tasks: ['htmlhint']
            }, /* watch and see if our javascript files change, or new packages are installed */
            js: {
                files: ['resources/js/main.js', 'resources/components/js/**/*.js'],
                tasks: ['uglify']
            }
        }// watch
    }); // initConfig

    //Register grunt tasks
    grunt.registerTask('default', ['concat', 'uglify', 'htmlhint']);
} // exports
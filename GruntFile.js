module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON("package.json"),
        meta: {
            banner: "/*! <%= pkg.title || pkg.name %> - v<%= pkg.version %> - <%= grunt.template.today(\"yyyy-mm-dd\") %> */\n"
        },
        clean: {
            dev: {
                src: [
                    './resources/assets/css/**/*.css',
                    './public/assets/js/**/*.js',
                    './public/assets/css/**/*.css'
                ]
            },
            dist: {
                src: ['./public/assets/dist']
            }
        },
        less: {
            compile: {
                expand: true,
                cwd: './resources/assets/less',
                src: [
                    'app.less'
                ],
                dest: './resources/assets/css',
                ext: '.css'
            }
        },
        concat: {
            js: {
                src: [
                    './resources/assets/js/**/plugins.js',
                    './resources/assets/js/**/*.js'
                ],
                dest: './public/assets/js/app.js',
                separator: ";"
            },
            css: {
                src: ['./resources/assets/css/**/*.css'],
                dest: './public/assets/css/app.css'
            }
        },
        uglify: {
            js: {
                src: '<%= concat.js.dest %>',
                dest: './public/assets/dist/app.min.js'
            }
        },
        cssmin: {
            compress: {
                files: {
                    "./public/assets/dist/app.min.css" : "<%= concat.css.dest %>"
                }
            }
        },
        watch: {
            stylesheets: {
                files: '**/*.less',
                tasks: ['default']
            },
            scripts: {
                files: './resources/assets/js/**/*.js',
                tasks: ['default']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('dev', ['clean', 'less', 'concat', 'uglify', 'cssmin', 'watch']);
    grunt.registerTask('default', ['clean', 'less', 'concat', 'uglify', 'cssmin']);
}
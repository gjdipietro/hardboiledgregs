module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            options: {
                livereload: true,
            },
            configFiles: {
                files: [ 'Gruntfile.js', 'config/*.js' ],
                options: {
                    reload: true
                }
            },
            scripts: {
                files: ['src/assets/js/**/*.js'],
                tasks: ['uglify'],
                options: {
                    spawn: false,
                }
            },
            css: {
                files: ['**/*.scss', 'src/assets/css/critical/**/*.css'],
                tasks: ['sass'],
                options: {
                    livereload: true,
                },
            }
        },

        uglify: {
            options: {
                mangle: true
            },
            my_target: {
                files: { 
                    'src/assets/js/production.min.js' : ['src/assets/js/**/*.js'],
                }
            }
        }, 

        autoprefixer: {
            options: {
                browsers: ['last 8 versions']
            },
            dist: { // Target
                files: {
                  'src/assets/css/styles.css' : 'src/assets/css/styles.css',
                }
            }
        },
        
        smushit: {
            group1: {
                src: ['src/assets/img/**/*.png','src/assets/img/**/*.jpg', 'src/assets/img/**/*.svg'],
                dest: 'src/assets/img'
            },
        },

        sass: {
            dist: {                            
                options: {                       
                    style: 'compressed',
                    compass: true
                },
            }
        },

        htmlmin: {
            multiple: {  
                options: {
                    removeComments: true,
                    collapseWhitespace: true,
                    removeEmptyAttributes: true,
                    removeCommentsFromCDATA: true,
                    removeRedundantAttributes: true,
                    collapseBooleanAttributes: true
                },
                files: [{
                    expand: true,
                    cwd: 'build/',
                    src: ['**/*.php', '**/*.html'],
                    dest: 'build/'
                }]
            }
        },

        criticalcss: {
            home: {
                options: {
                    url: "http://127.0.0.1:9000/index.php",
                    width: 1200,
                    height: 900,
                    outputfile: "src/assets/css/critical/home.css",
                    filename:   "src/assets/css/styles.css",
                    buffer: 1200*900,
                }
            },
            work: {
                options: {
                    url: "http://127.0.0.1:9000/work/Guru-Profile/index.php",
                    width: 1200,
                    height: 900,
                    outputfile: "src/assets/css/critical/work.css",
                    filename:   "src/assets/css/styles.css",
                    buffer: 1200*900,
                }
            }
        },
        
        copy: {
            build: {
                // First src: copies all but some things.
                //src: ['src/**/*',  '!**/node_modules/**', '!**/config.rb', '!**/Gruntfile.js', '!**/package.json'],
                cwd: 'src/',
                src: ['**/*', '.htaccess'],
                dest: 'build/',
                expand: true,
            },
        },

        clean: {
            build: {
                src: [ 'build' ]
            },
            css: {
                src: ['build/assets/scss']
            },
            js: {
                src: ['build/assets/js/**/*.js', '!build/assets/js/production.min.js']
            },
        },

        php: {
            server: {
                options: {
                    base: 'src',
                    port: 9000,
                    keepalive: false,
                    open: true
                }
            },
            live: {
                options: {
                    base: 'build',
                    port: 9000,
                    keepalive: true,
                    open: true
                }
            },
        },

        connect: {
            server: {
                options: {
                    port: 9000,
                    open: true,
                    keepalive: false,
                }
            }
        },

        'ftp-deploy': {
            build: {
                auth: {
                    host: 'hardboiledgregs.com',
                    port: 21,
                    authKey: 'key1',
                },
                src: 'build/',
                dest: '/'
            }
        },

        'ftps_deploy': {
            deploy: {
              options: {
                auth:{
                    host: 'hardboiledgregs.com',
                    port: 3000,
                    authKey: 'key1',
                    secure: true
                },
                silent:false
              },
              files: [{
                expand: true,
                src: 'build/',
                dest: '/'
              }]
            }
          }
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-smushit');
    grunt.loadNpmTasks('grunt-contrib-connect');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-criticalcss');
    grunt.loadNpmTasks('grunt-php');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-ftp-deploy');
    grunt.loadNpmTasks('grunt-ftps-deploy');
    grunt.loadNpmTasks('grunt-ftps-deploy');
    
    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['php:server', 'watch']); //everyday work
    grunt.registerTask('livetest', ['criticalcss', 'clean:build', 'copy', 'clean:css', 'clean:js', 'htmlmin', 'php:live']); // test the build
    grunt.registerTask('build', ['php:server', 'smushit', 'criticalcss', 'htmlmin', 'autoprefixer', 'clean:build', 'copy', 'clean:css', 'clean:js', 'htmlmin', 'ftps_deploy']); //build it.
    grunt.registerTask('ftps', ['ftps_deploy']); //just ftp it up
    grunt.registerTask('critical', ['criticalcss']);

    // grunt connect << use that to spin the server up
};
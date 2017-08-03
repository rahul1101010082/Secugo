module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('bower.json'),
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
            },
            build: {
                src: ['./bower_components/jquery/dist/jquery.min.js',
                    './bower_components/jquery-ui/jquery-ui.min.js',
                    './bower_components/tether/dist/js/tether.min.js',
                    './bower_components/bootstrap/dist/js/bootstrap.min.js',
                    './bower_components/jquery-slimscroll/jquery.slimscroll.js',
                    './bower_components/modernizr/modernizr.js',
                    './bower_components/modernizr/feature-detects/css-scrollbars.js',
                    './bower_components/i18next/i18next.min.js',
                    './bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js',
                    './bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js',
                    './bower_components/jquery-i18next/jquery-i18next.min.js',
                    './bower_components/sweetalert/dist/sweetalert.min.js',
                    './bower_components/summernote/dist/summernote.js',
                    './bower_components/summernote/lang/summernote-ko-KR.js',
                    './bower_components/datatables.net/js/jquery.dataTables.min.js',
                    './bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
                    './bower_components/datatables.net-responsive/js/dataTables.responsive.min.js',
                    './bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js',
                    './bower_components/select2/dist/js/select2.full.min.js',
                    './bower_components/bootstrap-multiselect/dist/js/bootstrap-multiselect.js',
                    './bower_components/multiselect/js/jquery.multi-select.js',
                    './bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'
                ],
                dest: './public/js/main.min.js'
            }
        },
        concat: {
            dist: {
                src: [
                    './bower_components/bootstrap/dist/css/bootstrap.min.css',
                    './bower_components/sweetalert/dist/sweetalert.css',
                    './bower_components/bootstrap-multiselect/dist/css/bootstrap-multiselect.css',
                    './bower_components/multiselect/css/multi-select.css',
                    './bower_components/spectrum/spectrum.css',
                    './bower_components/select2/dist/css/select2.min.css',
                    './bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css'
                ],
                dest: './public/css/final.css'
            }
        },
        cssmin: {
            dist: {
                files: {
                    './public/css/main.min.css': [ './public/css/final.css' ]
                }
            }
        },
        copy: {
            files: {
                cwd: './bower_components/ckeditor',  // set working folder / root to copy
                src: '**/*',           // copy all files and subfolders
                dest: './public/default/assets/ckeditor',    // destination folder
                expand: true           // required when using cwd
            }
        }
    });

    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-css');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-copy');
    // Default task(s).
    grunt.registerTask('default', ['uglify', 'concat', 'cssmin', 'copy']);
};


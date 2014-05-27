# Grunt configuration updated to latest Grunt. That means your minimum
# version necessary to run these tasks is Grunt 0.4.
#
# Please install this locally and install `grunt-cli` globally to run.
module.exports = (grunt) ->
    # Initialize the configuration.
    grunt.initConfig
        pkg: grunt.file.readJSON "package.json"
        spritesheet:
            build1:
                sprites:
                    "/assets/img/spritesheet.png":__dirname + "assets/img/sprites/*.png"
                sheet: __dirname + "/assets/css/less/sprite.less"
        less:
            options:
                compress: true
            build1:
                src: __dirname + "/assets/css/style.less"
                dest: __dirname + "/assets/css/style.css"
        uglify:
            build1:
                src: __dirname + "/assets/js/main.js"
                dest: __dirname + "/assets/js/main.min.js"
        watch:
            myscripts:
                files:[ __dirname + "/assets/css/style.css", __dirname + "/assets/js/*.js"]
                tasks: ['myscripts']
            myless:
                files:[__dirname + "/assets/css/less/*.less"]
                tasks: ['less']
    # Load external Grunt task plugins.
    grunt.loadNpmTasks "grunt-fontsmith"
    grunt.loadNpmTasks "grunt-spritesheet"
    grunt.loadNpmTasks "grunt-contrib-less"
    grunt.loadNpmTasks "grunt-contrib-coffee"
    grunt.loadNpmTasks "grunt-contrib-uglify"
    grunt.loadNpmTasks "grunt-contrib-watch"
    # Default task.
    grunt.registerTask "default", ["spritesheet", "less", "coffee", "uglify"]
    grunt.registerTask "myscripts", ["coffee", "uglify"]
    grunt.event.on "watch", (action, filepath, target) ->
        grunt.log.writeln target + ': ' + filepath + ' has ' + action

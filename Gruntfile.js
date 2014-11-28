module.exports = function(grunt){
    grunt.initConfig({
        config: {},
        watch: {
            livereload: {
                options: { livereload: true },
                files: ["./**/*"]
            }
        },
        connect: {
            options: { open: true, port: 8080 },
            server: {
                options: {
                    livereload: true,
                    base: ["."]
                }
            }
        }
    });
    grunt.registerTask("default", ["connect", "watch"]);
    grunt.loadNpmTasks("grunt-contrib-watch");
    grunt.loadNpmTasks("grunt-contrib-connect");
}

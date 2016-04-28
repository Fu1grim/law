var gulp = require("gulp"),

    config = require("./config"),

    glob = require("glob"),
    cProcess = require("child_process"),

    imagemin = require("gulp-imagemin"),
    pngquant = require("imagemin-pngquant");


gulp.task("js", function(){

    var fileList = glob.sync(config.js + "app/*.js"),
        fileName = "",
        bundle;

    fileList.map(function(entry){
        fileName = entry.match(/\w+(?=\.js)/gi)[0];
        bundle = cProcess.exec('jspm bundle-sfx '+ entry +' '+ config.build + 'js/'+ fileName +'.bundle.min.js --minify --skip-source-maps');
    });

});

gulp.task("css", function(){

    var fileList = glob.sync(config.css +"*.less"),
        fileName = "",
        bundle;

    fileList.map(function(entry){
        fileName = entry.match(/\w+(?=\.less)/gi)[0];
        bundle = cProcess.exec('lessc --clean-css '+ entry +' --autoprefix="last 2 versions" '+ config.build +'css/'+ fileName +'.bundle.min.css');
    });

});

gulp.task("fonts", function(){
    gulp.src(config.fonts +"**/*.*")
        .pipe(gulp.dest(config.build +"fonts/"));
});

gulp.task("images", function(){
    gulp.src(config.image +"**/*.*")
		.pipe(imagemin({
			optimizationLevel: 4,
			progressive: true,
			svgoPlugins: [{removeViewBox: false}],
			use: [pngquant()]
		}))
		.pipe(gulp.dest(config.build +"images/"));
});

gulp.task("watcher", function(){
    gulp.watch(config.css +"**/*.less", ["css"]);
    gulp.watch(config.fonts +"**/*.*", ["fonts"]);
    gulp.watch(config.image +"**/*.*", ["images"]);
});

gulp.task("default", ["js", "css", "fonts", "images"]);

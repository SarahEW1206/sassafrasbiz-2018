var gulp = require("gulp");
var sass = require("gulp-sass");

var sassSources = "./scss/**/*.scss";
var sassOutput = "./css";

function style() {
  return gulp
    .src(sassSources)
    .pipe(sass().on("error", sass.logError))
    .pipe(gulp.dest(sassOutput));
}

function watch() {
  gulp.watch(sassSources, style);
}

var build = gulp.parallel(style, watch);

gulp.task(build);
gulp.task("default", build);

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cleanCss = require('gulp-clean-css');
var combineMq = require('gulp-combine-mq');
var notify = require('gulp-notify');
var rename = require('gulp-rename');
//var livereload = require('gulp-livereload');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var babel = require('gulp-babel');
var jsImport = require('gulp-js-import');
var imagemin = require('gulp-imagemin');
var newer = require('gulp-newer');

gulp.task('styles', function() {
    return gulp.src('resources/styles/main.scss')
        .pipe( sass().on('error', sass.logError) )
        .pipe(autoprefixer({
			browsers: ['last 2 versions']
		}))
        .pipe(combineMq({beautify: false}))
        .pipe(rename('styles.css'))
        .pipe(gulp.dest('assets'))
        .pipe(cleanCss())
        .pipe(gulp.dest('assets'))
//        .pipe(livereload())
        //.pipe(notify({ message: 'Styles task complete' }));
});

gulp.task('icons', function() {
    return gulp.src('node_modules/@fortawesome/fontawesome-free/webfonts/*')
        .pipe(gulp.dest('assets/webfonts/'));
});

gulp.task('scripts', function () {
    return gulp.src('resources/scripts/main.js')
        .pipe(jsImport({hideConsole: false}))        
        .pipe(rename('scripts.js'))
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(gulp.dest('assets'))
        .pipe(uglify())
        .pipe(gulp.dest('assets'))
        .pipe(notify({ message: 'Scripts task complete' }))
});

gulp.task('images', function() {
    return gulp.src('resources/assets/**/*')
        .pipe(newer('assets'))
        .pipe(imagemin())
        .pipe(gulp.dest('assets'))
        .pipe(notify({ message: 'Images task complete' }));
});

gulp.task('watch', function() {
//    livereload.listen();
    gulp.watch('resources/styles/**/*.scss', ['styles']);
    gulp.watch('resources/scripts/**/*.js', ['scripts']);
});

gulp.task('default', ['styles', 'scripts', 'images', 'icons']);

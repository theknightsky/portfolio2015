// --------------------------------------------------------
//  Gulp modules
// --------------------------------------------------------

var gulp = require('gulp'),
    jade = require('gulp-jade'),
    gutil = require('gulp-util'),
    rename = require('gulp-rename'),
    usemin = require('gulp-usemin'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    notify = require('gulp-notify'),
    optipng = require('gulp-optipng'),
    compass = require('gulp-compass'),
    plumber = require('gulp-plumber'),
    minify = require('gulp-minify-css'),
    bower = require('main-bower-files'),
    gulpFilter = require('gulp-filter'),
    livereload = require('gulp-livereload');

// --------------------------------------------------------
//  Paths
// --------------------------------------------------------

var paths = {
    assets: 'app/assets/',
    public: 'public/',
    views: 'app/views/'
}

// --------------------------------------------------------
//  Gulp Tasks
// --------------------------------------------------------

// Task for moving bower files to my app/assets folder
gulp.task('getBowerAssets', function(){
    var filters = {
        js: gulpFilter('*.js','!*.min.js'),
        css: gulpFilter(['*.css','!*.min.css']),
        sass: gulpFilter(['*.sass','*.scss','!*.min.sass','!*.min.scss']),
        fonts: gulpFilter(['*.eot', '*.woff', '*.svg', '*.ttf'])
    }
    return gulp.src(bower())

    // Get JS assets
    .pipe(filters.js)
    .pipe(gulp.dest(paths.assets + 'javascripts/libs/'))
    .pipe(filters.js.restore())

    // Get CSS assets
    .pipe(filters.css)
    .pipe(minify())
    .pipe(rename({
        suffix: ".min"
    }))
    .pipe(gulp.dest(paths.assets + 'stylesheets/css/'))
    .pipe(filters.css.restore())

    // Get Font assets
    .pipe(filters.fonts)
    .pipe(gulp.dest(paths.assets + 'fonts/'))
});

// Task for compiling compass and sass into app/stylesheets
gulp.task('compass-sass', function(){

    gulp.src(paths.assets + 'stylesheets/sass/*.sass')
        .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
        .pipe(compass({
            require: ['susy','breakpoint'],
            import_path: 'bower_components',
            css: paths.assets + 'stylesheets/css',
            sass: paths.assets + 'stylesheets/sass',
        }))
        .pipe(gulp.dest(paths.assets + 'stylesheets/css'))
        .pipe(notify({message: 'Sass compiled!', onLast: true}));

});

// Task for compiling jade and placing it into app/assets/templates
gulp.task('jade', function(){
    gulp.src(paths.assets + 'templates/jade/*.jade')
        .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
        .pipe(jade({ pretty: true }))
        .pipe(gulp.dest(paths.assets + 'templates/'))
        .pipe(notify({message: 'Templates compiled!', onLast: true}));
});

// Task for concatenating, minifying and moving css 
// files into public/assets as final.css
gulp.task('dist-css', function(){
    gulp.src([paths.assets + 'stylesheets/css/*.min.css', paths.assets + 'stylesheets/css/*.css'])
        .pipe(concat('final.css'))
        .pipe(minify())
        .pipe(gulp.dest(paths.public + 'assets/'))
        .pipe(livereload());
});

// Task for concatenating, uglifying and moving js
// files into public/assets as final.js
gulp.task('dist-js', function(){
    gulp.src([paths.assets + 'javascripts/libs/angular.js', paths.assets + 'javascripts/libs/*.js', paths.assets + 'javascripts/*.js'])
        .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
        .pipe(concat('final.js'))
        .pipe(uglify())
        .pipe(gulp.dest(paths.public + 'assets/'))
        .pipe(livereload());
});


// Task for moving app/assets/templates to
// public/assets/templates
gulp.task('dist-tpl', function(){

    gulp.src(paths.assets + 'templates/*.html')
        .pipe(gulp.dest(paths.public + 'assets/templates/'));

});

// Task for moving & renaming app/assets/templates/index.html
// to app/views/index.php
gulp.task('dist-index', function(){

    gulp.src(paths.assets + 'templates/index.html')
        .pipe(rename('index.php'))
        .pipe(gulp.dest(paths.views))
        .pipe(livereload());

});

// Task for compressing & moving app/assets/images to
// public/assets/images
gulp.task('dist-img', function(){

    gulp.src(paths.assets + 'images/*.png')
        // .pipe(optipng(['-o2']))
        .pipe(gulp.dest(paths.public + 'assets/images'))
        .pipe(notify({ message: 'Images optimized!', onLast: true}));

});

// Task for moving app/assets/fonts to
// public/assets/fonts
gulp.task('dist-fonts', function(){

    gulp.src(paths.assets + 'fonts/*')
        .pipe(gulp.dest(paths.public + 'assets/fonts/'));

});

// Task for running all distribution tasks
gulp.task('dist', ['dist-css','dist-js','dist-index','dist-tpl','dist-fonts','dist-img']);


// Watch task
gulp.task('watch', function(){
    gulp.watch(paths.assets + 'stylesheets/sass/*.sass', ['compass-sass','dist-css']);
    gulp.watch(paths.assets + '**/*.jade', ['jade','dist-tpl']);
    gulp.watch(paths.assets + '**/*.js', ['dist-js']);
    gulp.watch(paths.assets + 'templates/index.html', ['dist-index']);
    livereload.listen();
});

// Default task
gulp.task('default', ['watch','compass-sass','jade','dist-css','dist-js','dist-index','dist-tpl']);




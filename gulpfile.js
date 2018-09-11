const gulp = require('gulp');
const browserSync = require('browser-sync');
const sass = require('gulp-sass');


// Servidor

gulp.task('serve', ['sass'], () => {
    browserSync.init({
        server: './src'
    });

    gulp.watch([
        'node_modules/bootstrap/scss/bootstrap.scss',
        'scss/*.scss'
    ], ['sass']);


    gulp.watch('src/*.html').on('change', browserSync.reload);
});




// Compilar Sass a CSS

gulp.task('sass', () => {
    return gulp.src([
        'node_modules/bootstrap/scss/bootstrap.scss',
        'scss/main.scss'
    ])
    .pipe(sass({ outputStyle:'compressed' }))
    .pipe(gulp.dest('src/css'))
    .pipe(browserSync.stream());
});

// FontAwesome

gulp.task('font-awesome' , () => {
    return gulp.src('node_modules/font-awesome/css/font-awesome.min.css')
    .pipe(gulp.dest('src/css'));
});

gulp.task('fonts' , () => {
    return gulp.src('node_modules/font-awesome/fonts/*')
    .pipe(gulp.dest('src/fonts'));
});


// JS

gulp.task('js', () => {
    return gulp.src([
        'node_modules/bootstrap/dist/js/bootstrap.min.js',
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/popper.js/dist/umd/popper.min.js'
    ])
    .pipe(gulp.dest('src/js'))
    .pipe(browserSync.stream());
});

// Ejecutar Tareas

gulp.task('default', ['js','serve','font-awesome', 'fonts']);




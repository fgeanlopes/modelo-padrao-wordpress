var gulp = require("gulp");
var sass = require("gulp-sass");
var autoprefixer = require('gulp-autoprefixer');
var notify = require("gulp-notify");
var htmlmin = require('gulp-htmlmin');
var cache = require('gulp-cache');
var concat = require('gulp-concat');
var reset_heroi = require('browser-sync').create();

// Transforma o Sass da pasta source(desenvolvimento) em CSS levando para a pasta dist(produção)
gulp.task('thor', function () {
    return gulp.src('./source/sass/**')
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(autoprefixer({browsers:['last 6 version'], cascade:false}))
        .on('error', notify.onError({
            title: 'Erro no Scss, presta atenção!',
            message: '<%= error.message %>'
        }))
        .pipe(gulp.dest('./dist/css'))
        .pipe(reset_heroi.stream());
});

// Minifica o Javascript da pasta source(desenvolvimento) levando para a pasta dist(produção)
gulp.task('mulher-elastico', function () {
    return gulp.src([
        // *** OBS: Não alterar ordem ***
        './node_modules/jquery/dist/jquery.js',
        './node_modules/bootstrap/dist/js/bootstrap.bundle.js',
        './node_modules/bootstrap/dist/js/bootstrap.js',
        './source/js/navbar.js',
        './source/js/auto_margin_navbar.js',
        './source/js/exportar_svg_wordpress.js',
        './source/js/efeito_hover_navbar.js',
        ]
    )
        .pipe(concat('app.js'))
        .pipe(gulp.dest('./dist/js'));
});

// Minifica o HTML da pasta source(desenvolvimento) para a pasta raíz do projeto
gulp.task('stan-lee', function () {
    return gulp.src('./source/php/*.php')
        .pipe(htmlmin({collapseWhitespace: true}))
        .pipe(gulp.dest('./'));
});


// Atualiza o navegador automaticamente
gulp.task('reset_heroi', function () {
    reset_heroi.init({

        // INFORME O LOCAL DA PASTA DO PROJETO
        proxy:   'localhost/modelo-padrao-wordpress',
        open:    "external",
    })
});

// Limpa o cache do navegador
gulp.task('flash', () =>
    cache.clearAll()
);

// Assiste as tasks

gulp.task('demolidor', function () {
    gulp.watch('./source/sass/**', gulp.parallel('thor','flash'));
    gulp.watch('./source/js/**/**', gulp.parallel('mulher-elastico','flash')).on('change', reset_heroi.reload);
    gulp.watch('./source/php/**', gulp.parallel('stan-lee','flash')).on('change', reset_heroi.reload);
});

// Chama as tasks

gulp.task('default',
    gulp.parallel(
        'thor',
        'mulher-elastico',
        'demolidor',
        'stan-lee',
        'flash',
        'reset_heroi'
    )
);

// npm i
// npm audit fix --force

var gulp = require('gulp');
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
var clean = require('gulp-clean');
var rename = require('gulp-rename');
var handlebars = require('gulp-compile-handlebars');
var useref = require('gulp-useref');
var replace = require('gulp-replace');
var insert = require('gulp-insert');
var replaceName = require('gulp-replace-name');

var browserSync = require('browser-sync').create();
var reload      = browserSync.reload;
const using = require('gulp-using');
const get = require('simple-get');
const markdown = require('gulp-markdown');

var options = {
    batch : ['./src/components/', './content/html/']
    }

var dst =       '_dist/';
var prebuild =  'react/';
var fScss=      'src/scss/**/*.scss';
var fHtml=      'src/**/*.html';
var fImages=    'src/images/**/*';
var fAssets=    'src/util-images-assets/**/*';
var fJs=        'src/js/**/*';
var fJson=      ['src/**/*.json', 'content/**/*.json'];
var fMd=        'content/**/*.md';
var cssUtil=    'src/css-util/**/*';

var siteJson = require('./content/data/site.json');


gulp.task('browserSync', function(done) {
  browserSync.init({
    //proxy: "http://localhost:8888/wp-huc"
    server: {
      baseDir: dst
    },
    browser: ["google chrome"], //, "firefox"
  })
  done();
})

function reload(done) {
  browserSync.reload();
  done();
}

gulp.task('clean', function () {
    return gulp.src(dst, {read: false, allowEmpty: true})//{ allowEmpty: true }
        .pipe(plumber())
        .pipe(clean())
});


gulp.task('md', function() {
  return gulp.src(cssUtil)
    .pipe(markdown())
    .pipe(gulp.dest('content/html/'));
});




gulp.task('nav', function(done) {

  gulp.src('./src/templates/nav.html')
      .pipe(plumber())
      .pipe(handlebars(siteJson, options))
      .pipe(gulp.dest('src/components/'));
  done();
});



gulp.task('sass', function(){
  return gulp.src('./src/scss/*')
    .pipe(plumber())
    .pipe(sass()) //{outputStyle: 'compressed'}
    .pipe(gulp.dest(dst+'css'))
});



gulp.task('buildFromTemplates', function(done) {

  for(var i=0; i<siteJson.pages.length; i++) {
      var page = siteJson.pages[i],
          fileName = page.name.replace(/ +/g, '-').toLowerCase();
          template = page.template;

      gulp.src('./src/templates/'+template+'.html')
          .pipe(plumber())

          .pipe(handlebars(page, options))
          .pipe(rename(fileName + ".html"))
          .pipe(useref())
          .pipe(gulp.dest(dst))
          .pipe(browserSync.stream());
  }
  done();
});


gulp.task('copyFiles', function(done) {
  return gulp.src([fAssets, fImages])
      .pipe(gulp.dest(dst+'images'))


  return gulp.src(fJs)
      .pipe(gulp.dest(dst+'js'))
  done();
});





gulp.task('build',
  gulp.series('clean', 'md', 'sass', 'buildFromTemplates', 'copyFiles',
  function(done) {
      done();
  }
));


gulp.task('watch', function () {
  gulp.watch([fHtml, fScss, fJs, cssUtil, fAssets], gulp.series('build'));
});



gulp.task('default',
  gulp.series('build', gulp.parallel('browserSync','watch'),
  function(done) {
      done();
  }

));

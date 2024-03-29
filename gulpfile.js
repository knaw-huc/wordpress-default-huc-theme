// npm i
// npm audit fix --force

// gulp json

var gulp = require('gulp');
var sass = require('gulp-dart-sass');
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
const loadJsonFile = require('load-json-file');

// handlebars includes folders
var options = {
    batch : ['./src/components/']
    }

var dst =       '_dist/wp-huc-theme';//'_dist/';
var dstCopy =       '_dist/wp-huc-theme/**/*';//'_dist/';
var prebuild =  'react/';
var fScss=      'src/scss/**/*.scss';
var fHtml=      'src/**/*.html';
var fHtmlNot=   '!src/components/nav.html';
var fImages=    'src/images/**/*';
var fAssets=    'src/util-images-assets/**/*';
var fJs=        'src/js/**/*';
var fJson=      'content/data/**/*.json';
var fMd=        'content/**/*.md';
var cssUtil=    'src/css-util/**/*';
var fWp=        'src/wp/**/*';

var siteJson;
var copyPath;

gulp.task('loadJson', function(done) {
  loadJsonFile('./content/data/site.json').then(json => {
    siteJson =json;
  });
  loadJsonFile('./content/data/copyPath.json').then(json => {
    copyPath =json;
  });
  done();
});



// gulp.task('browserSync', function(done) {
//   browserSync.init({
//     //proxy: "http://localhost:8888/ga1",
//     server: {
//       baseDir: dst
//     },
//     browser: ["google chrome"], //, "firefox"
//   })
//   done();
// })

gulp.task('browserSync', function(done) {
    browserSync.init({
        //proxy: "http://localhost:8888/wp-default"
        proxy: "http://localhost:8888/wp-ga"

    });
    done();
});



function reload(done) {
  browserSync.reload();
  done();
}

gulp.task('clean', function () {
    return gulp.src(dst, {read: false, allowEmpty: true})//{ allowEmpty: true }
        .pipe(plumber())
        .pipe(clean())
});


gulp.task('json', function(done) {
  var prejson = [];

  gulp.src('./content/data/templ-site.html')
      .pipe(plumber())
      .pipe(handlebars(prejson, options))
      .pipe(rename('site.json'))
      .pipe(gulp.dest('content/data/'));
  done();
});







gulp.task('sass', function(){
  return gulp.src('./src/scss/*')
    .pipe(plumber())
    .pipe(sass()) //{outputStyle: 'compressed'}
    .pipe(gulp.dest(dst+'/css'))
});



gulp.task('buildFromTemplates', function(done) {

  for(var i=0; i<siteJson.pages.length; i++) {
      var page = siteJson.pages[i],
          fileName = page.name.replace(/ +/g, '-').toLowerCase();
          template = page.template;

      gulp.src('./src/templates/'+template)
          .pipe(plumber())
          .pipe(handlebars(page, options))
          .pipe(rename(fileName))
          .pipe(useref())
          .pipe(gulp.dest(dst))
          .pipe(browserSync.stream());
  }
  done();
});


gulp.task('copyFiles', function(done) {
    return gulp.src(fWp)
        .pipe(gulp.dest(dst))

  done();
});

gulp.task('copyImages', function(done) {
    return gulp.src(fImages)
        .pipe(gulp.dest(dst+'/images'))

  done();
});


gulp.task('copyFilesWebserver', function(done) {
    return gulp.src(dstCopy)
        .pipe(gulp.dest(copyPath.copyDestination))
  done();
});





gulp.task('build',
  gulp.series('loadJson', 'clean', 'sass', 'buildFromTemplates', 'copyImages', 'copyFiles', 'copyFilesWebserver',
  function(done) {
      done();
  }
));


gulp.task('watch', function () {
  gulp.watch([fJson, fHtml, fHtmlNot, fScss, fJs, cssUtil, fAssets,fWp], gulp.series('build'));
});



gulp.task('default',
  gulp.series('build', gulp.parallel('browserSync','watch'),
  function(done) {
      done();
  }

));

var exec      = require('child_process').exec;
var sys       = require('sys');
var path      = require('path');
var gulp      = require('gulp');
var gutil     = require('gulp-util');
var less      = require('gulp-less');
var minifycss = require('gulp-minify-css');
var uglify    = require('gulp-uglify');
var rename    = require("gulp-rename");
var imagemin  = require('gulp-imagemin');
var refresh   = require('gulp-livereload');
var lr        = require('tiny-lr');
var server    = lr();
var webshot   = require('webshot');

gulp.task('default', ['lr-server', 'styles', 'scripts', 'watch']);
// Not used in this project
// 'imageminifier', 'phpunit', 'screenshot'

gulp.task('lr-server', function() {
    server.listen(35729, function(err) {
        if(err) return console.log(err);
    });
})

gulp.task('styles', function() {
  return gulp.src('assets/less/style.less')
    .pipe(less())
    .pipe(minifycss())
    .pipe(rename(function (dir, base, ext) {
        return base + ".min" + ext;
    }))
    .pipe(gulp.dest('assets/css'))
    .pipe(refresh(server));
});

gulp.task('scripts', function() {
  return gulp.src('assets/js/src/*.js')
    .pipe(uglify())
    .pipe(rename(function (dir, base, ext) {
        return base + ".min" + ext;
    }))
    .pipe(gulp.dest('assets/js/dist'))
    .pipe(refresh(server));
});

gulp.task('watch', function() {
  gulp.watch('assets/less/*.less', ['styles']);
  //gulp.watch('app/tests/*Test.php', ['phpunit']);
  gulp.watch('assets/js/src/*.js', ['scripts']);
  //gulp.watch('app/views/**/**', ['scripts']);
  //gulp.watch('screenshots/watchfile.txt', ['screenshot']);
});

gulp.task('imageminifier', function() {
  return gulp.src('assets/images/src/*')
    .pipe(imagemin())
    .pipe(gulp.dest('assets/images/dist'));
});

gulp.task('phpunit', function() {
  //exec('C:/server/laravel_test/vendor/bin/phpunit', function(error, stdout) {
  exec(path.join(process.cwd(), 'vendor/bin/phpunit'), function(error, stdout) {
    sys.puts(stdout);
  });
});

gulp.task('screenshot', function() {

  var options = {
    screenSize: {
      width: 400
    , height: 480
    }
  , shotSize: {
      width: 400
    , height: 'all'
    }
  , userAgent: 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_2 like Mac OS X; en-us)'
      + ' AppleWebKit/531.21.20 (KHTML, like Gecko) Mobile/7B298g'
  }

  webshot('588336f7.ngrok.com/framework', 'screenshots/mobile.png', options, function(err) {
    // screenshot now saved to google.png
  });

  var options = {
    screenSize: {
      width: 1024
    , height: 768
    }
  , shotSize: {
      width: 1024
    , height: 'all'
    }
  , userAgent: 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:25.0) Gecko/20100101 Firefox/25.0'
  }

  webshot('588336f7.ngrok.com/framework', 'screenshots/desktop.png', options, function(err) {
    // screenshot now saved to google.png
  });

});
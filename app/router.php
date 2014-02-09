<?php

on('GET', '/', function () {
  //echo "hello, world!\n";
  render('home', ['name' => 'joe']);
});

error(404, function () {
  echo "Oops!\n";
});

dispatch();
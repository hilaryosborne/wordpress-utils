<?php

function flashbag() {
  return (new \Utils\Session\Flashbag());
}

function flashbag_set($path, $value) {
  return flashbag()::set($path, $value);
}

function flashbag_get($path, $default=false) {
  return flashbag()::get($path,$default);
}


function storage() {
    return (new \Utils\Session\Storage());
}

function storage_set($path, $value) {
    return storage()::set($path, $value);
}

function storage_get($path, $default=false) {
    return storage()::get($path,$default);
}
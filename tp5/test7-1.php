<?php
namespace beijing\name1;
function getData(){
    return "hello";
}
const NS1="name1";

namespace shanghai\name2;
function getData(){
    return "world";
}
const NS1="name2";

namespace shanghai;
function getData(){
    return "world";
}
const NS1="name3";

echo name2\NS1;
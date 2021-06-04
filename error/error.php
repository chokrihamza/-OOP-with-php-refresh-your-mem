<?php
function a($txt)
{
  b("hamza");
}
function b($txt)
{
  c("chokri");
}
function c($txt)
{
  var_dump(debug_backtrace());
}
a("ali");
//
function d($txt)
{
  b("Glenn");
}
function e($txt)
{
  c("Cleveland");
}
function f($txt)
{
  debug_print_backtrace();
}
d("Peter");

// ///
if (1 !== 2) {
  ini_set("SMTP", "smtp.gmail.tn");
  error_log("failed", 1, "chokrihamza1994@gmail.com");
}
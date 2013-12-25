<?php

/*
 * root of website or host name, for example 'wwww.google.com' or 
 * '/application-name' (if using in localhost)
 * */

 define("HOST", "/simpleMvc");
 
/*
 *  Location of folder containing views used in app
 * */
 
 define("VIEWS", "view");
 
/*
 * Path of Various public directories
 * */
 
 define("PUBLIC", "/simpleMvc/public" );
 define("IMAGES", "/simpleMvc/public/images");
 define("CSS", "/simpleMvc/public/css");
 define("JS", "/simpleMvc/public/js");
 
/*
 * Location of cache storage being used for views and other purposes
 * */
 
 define("CACHE", "cache");
 
/*
 * DEFAULTURL => name of the default controller 
 *   if controller specified is not found
 * 
 * DEFAULTPAGE => name fo the default method 
 *   if either the controller specified is not found 
 *  or if method is specified
 * */
 
 define("DEFAULTURL", "index");
 define("DEFAULTPAGE", "index");

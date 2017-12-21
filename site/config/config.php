<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');
c::set('debug',true);
c::set('panel.install', true);

/*Module Plugin*/
c::set('modules.directory', '/var/www/plainkit/site/modules');
c::set('modules.parent.uid', 'modules');
c::set('modules.template.prefix', 'module.');

/*Pattern Plugin*/
c::set('patterns.title', 'Patterns');
c::set('patterns.path', 'patterns');
c::set('patterns.directory', '/var/www/plainkit/site/patterns');
c::set('patterns.lock', false);
c::set('patterns.preview.css', 'assets/css/style.css');
c::set('patterns.preview.js', 'assets/js/index.js');
c::set('patterns.preview.background', false);

/*Algolia Plugin*/
c::set('algolia.app', 'ZJGGY9ZARC');
c::set('algolia.key', 'de75f55eab904ead60b17ab1beeb3947');
/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

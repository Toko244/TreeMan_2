<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/filemanager' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filemanager.base_route',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'filemanager.action_route',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/([^/]++)/(?|register(?|(*:105))|log(?|out(?|(*:126))|in(?|(*:140)))|password/(?|reset(?|(*:170)|/([^/]++)(*:187)|(*:195))|email(*:209)|confirm(?|(*:227)))|admin(?|/(?|s(?|ub(?|scribers(?|/(?|export(*:279)|delete/([^/]++)(*:302))|(*:311))|mission(?|s(*:331)|/(?|([^/]++)(*:351)|destroy/([^/]++)(*:375))))|e(?|ction(?|s(?|(*:402)|/(?|create(?|(*:423))|edit/([^/]++)(?|(*:448))|destroy/([^/]++)(*:473)|arrange(*:488)))|/(?|([^/]++)/posts(?|(*:519)|/create(?|(*:537)))|posts/([^/]++)/(?|edit(?|(*:572))|delete(*:587)|file/([^/]++)(*:608))))|ttings/edit(?|(*:633))))|u(?|sers(?|(*:655)|/(?|add(?|(*:673))|edit/([^/]++)(?|(*:698))|logs/([^/]++)(*:720)|destroy/([^/]++)(*:744)))|p(?|date_profile(*:770)|load/image(?|(*:791)|/delete(?|(*:809)))))|profile(?|(*:831))|banners/([^/]++)(?|(*:859)|/(?|create(?|(*:880))|edit(?|(*:896))|delete(*:911)))|directories/(?|([^/]++)(?|(*:947)|/(?|create(?|(*:968))|edit(?|(*:984))|delete(*:999)))|arrange(*:1016))|languages/edit(?|(*:1043))|component(?|s/([^/]++)(*:1075)|/(?|([^/]++)/(?|create(*:1106)|edit(*:1119)|destroy(*:1135))|arrange/([^/]++)(*:1161))))|(*:1173))|s(?|ub(?|mission(*:1199)|scribe(*:1214))|earch(*:1229)))|/([^/]++)?(*:1250)|/([^/]++)/(?|(.*)(*:1276)|front(*:1290)|photo(*:1304)|contact(*:1320)|text\\-page(*:1339)|home\\-page(*:1358)))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      105 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AgPLp2xQ6mZv8wW3',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      126 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q6SxpwZrZ0tWrXQr',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ObzxYE1i4pD3jf8s',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      170 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      195 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      209 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      227 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iJF0pjTItLX9BdGM',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      279 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FQ71YjuXgAl7bS7Z',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      302 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9XFicwf4UR3548iI',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1qWcmHjbp3BCxFB6',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      331 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ntx7DAbJtdDPZwQ8',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0tx42kdztYAm1JLj',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'submission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xfPz1gAVGdmpaxBG',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'submission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      402 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'section.list',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      423 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UeRUYxQ6mTKazpHk',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mHidmXuKa23YuRO4',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SGFkvPwg2j6M0owb',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uVXtN8IpQPEHcnKi',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      473 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sOLaN64jXm3YziNE',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      488 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Jlgy0CTmqpa15BJd',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      519 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.list',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'sec',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      537 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.create',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'sec',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'post.store',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'sec',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      572 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.edit',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'post.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'post',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      587 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.destroy',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'post',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      608 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'post.deletefiles',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'post',
            2 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      633 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.edit',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'settings.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      655 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t4erEFGEI49Ljam3',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      673 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SXmE5GCMouISIq3r',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tovVkd0LWaXTrWQg',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      698 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lS9ozy79PHiva93L',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5ZefgVkAWvZ0z5YX',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      720 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PEhBN9wgYDnNGpLm',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      744 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QWn17q8lvm1gnUD8',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      770 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateProfile',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      791 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'image.upload',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      809 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'image.del',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'image.clear',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      831 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'asdasdsa',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LTQNNhSqDaowfEn9',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      859 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'banner.list',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      880 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'banner.create',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'banner.store',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'type',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      896 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'banner.edit',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'banner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'banner.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'banner',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      911 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'banner.destroy',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'banner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      947 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'directory.list',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      968 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'directory.create',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'directory.store',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'type',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      984 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'directory.edit',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'directory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'directory.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'directory',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      999 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'directory.destroy',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'directory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1016 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pC3HJMd2QdDmLNfr',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1043 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.edit',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'languages.update',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1075 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'components.list',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1106 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::esGHgWbWaHnDG71I',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1119 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1TjOsKg2MnKmQI6R',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RE8n2Rj1dg8tv135',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1161 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zIe2p1alL5LSn9JW',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1173 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1199 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submission',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1214 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscribe',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1229 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1250 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::02GJ102kJiK6E3aX',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1276 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8ze1kN8sQbtGvJya',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'all',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yjFpZ6YP1CS3ngu6',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jhslBHtTMumJZuSN',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1320 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kO6lRe5ZnxmdJOyG',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1339 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8s3uxbGUnI02Ulyn',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1358 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::swBpRUMZlOaAJy2B',
            'locale' => NULL,
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filemanager.base_route' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/filemanager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Haruncpi\\LaravelSimpleFilemanager\\Controllers\\FilemanagerController@getIndex',
        'controller' => '\\Haruncpi\\LaravelSimpleFilemanager\\Controllers\\FilemanagerController@getIndex',
        'namespace' => '\\Haruncpi\\LaravelSimpleFilemanager\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'filemanager.base_route',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filemanager.action_route' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/filemanager',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Haruncpi\\LaravelSimpleFilemanager\\Controllers\\FilemanagerController@postAction',
        'controller' => '\\Haruncpi\\LaravelSimpleFilemanager\\Controllers\\FilemanagerController@postAction',
        'namespace' => '\\Haruncpi\\LaravelSimpleFilemanager\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'filemanager.action_route',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q6SxpwZrZ0tWrXQr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => '\\App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => '\\App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::q6SxpwZrZ0tWrXQr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ObzxYE1i4pD3jf8s' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::ObzxYE1i4pD3jf8s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AgPLp2xQ6mZv8wW3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::AgPLp2xQ6mZv8wW3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iJF0pjTItLX9BdGM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::iJF0pjTItLX9BdGM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FQ71YjuXgAl7bS7Z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/subscribers/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@exportSubscribers',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@exportSubscribers',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::FQ71YjuXgAl7bS7Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1qWcmHjbp3BCxFB6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/subscribers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@subscribers',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@subscribers',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::1qWcmHjbp3BCxFB6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9XFicwf4UR3548iI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/subscribers/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@deletesubsctiber',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@deletesubsctiber',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::9XFicwf4UR3548iI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t4erEFGEI49Ljam3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isSuperuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::t4erEFGEI49Ljam3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SXmE5GCMouISIq3r' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/users/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isSuperuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::SXmE5GCMouISIq3r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tovVkd0LWaXTrWQg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/users/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isSuperuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::tovVkd0LWaXTrWQg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lS9ozy79PHiva93L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/users/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isSuperuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::lS9ozy79PHiva93L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PEhBN9wgYDnNGpLm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/users/logs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isSuperuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@logs',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@logs',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::PEhBN9wgYDnNGpLm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5ZefgVkAWvZ0z5YX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/users/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isSuperuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::5ZefgVkAWvZ0z5YX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QWn17q8lvm1gnUD8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/users/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isSuperuser',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::QWn17q8lvm1gnUD8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'asdasdsa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@editProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@editProfile',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'asdasdsa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LTQNNhSqDaowfEn9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@updateProfile',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::LTQNNhSqDaowfEn9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateProfile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/update_profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UsersController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\UsersController@updateProfile',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'updateProfile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banner.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/banners/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'banner.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banner.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/banners/{type}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'banner.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banner.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/banners/{type}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'banner.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banner.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/banners/{banner}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'banner.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banner.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/banners/{banner}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'banner.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banner.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/banners/{banner}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BannerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\BannerController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'banner.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'section.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/sections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'section.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UeRUYxQ6mTKazpHk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/sections/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::UeRUYxQ6mTKazpHk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mHidmXuKa23YuRO4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/sections/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mHidmXuKa23YuRO4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SGFkvPwg2j6M0owb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/sections/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::SGFkvPwg2j6M0owb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uVXtN8IpQPEHcnKi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/sections/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::uVXtN8IpQPEHcnKi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sOLaN64jXm3YziNE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/sections/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::sOLaN64jXm3YziNE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jlgy0CTmqpa15BJd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/sections/arrange',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SectionController@arrange',
        'controller' => 'App\\Http\\Controllers\\Admin\\SectionController@arrange',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Jlgy0CTmqpa15BJd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/section/{sec}/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/section/{sec}/posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/section/{sec}/posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/section/posts/{post}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/section/posts/{post}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/section/posts/{post}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'post.deletefiles' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '{locale?}/admin/section/posts/{post}/file/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PostController@deletefiles',
        'controller' => 'App\\Http\\Controllers\\Admin\\PostController@deletefiles',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'post.deletefiles',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'image.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/upload/image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UploadFilesController@uploadImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\UploadFilesController@uploadImage',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'image.upload',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'image.del' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/upload/image/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UploadFilesController@deleteImage',
        'controller' => 'App\\Http\\Controllers\\Admin\\UploadFilesController@deleteImage',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'image.del',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'image.clear' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/upload/image/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UploadFilesController@clearChache',
        'controller' => 'App\\Http\\Controllers\\Admin\\UploadFilesController@clearChache',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'image.clear',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ntx7DAbJtdDPZwQ8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/submissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ntx7DAbJtdDPZwQ8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0tx42kdztYAm1JLj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/submission/{submission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionController@show',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::0tx42kdztYAm1JLj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xfPz1gAVGdmpaxBG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/submission/destroy/{submission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SubmissionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubmissionController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::xfPz1gAVGdmpaxBG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/settings/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'settings.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/settings/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'settings.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'directory.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/directories/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'directory.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'directory.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/directories/{type}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'directory.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'directory.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/directories/{type}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@store',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'directory.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'directory.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/directories/{directory}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'directory.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'directory.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/directories/{directory}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'directory.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'directory.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/directories/{directory}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'directory.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pC3HJMd2QdDmLNfr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/directories/arrange',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DirectoryController@arrange',
        'controller' => 'App\\Http\\Controllers\\Admin\\DirectoryController@arrange',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::pC3HJMd2QdDmLNfr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/languages/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'languages.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/languages/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LanguageController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\LanguageController@update',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'languages.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'components.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/components/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'components.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::esGHgWbWaHnDG71I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/component/{id}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@create',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::esGHgWbWaHnDG71I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1TjOsKg2MnKmQI6R' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/component/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@edit',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::1TjOsKg2MnKmQI6R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RE8n2Rj1dg8tv135' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/admin/component/{id}/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@destroy',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::RE8n2Rj1dg8tv135',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zIe2p1alL5LSn9JW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/admin/component/arrange/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
          2 => 'auth.check',
          3 => 'isAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComponentsController@arrange',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComponentsController@arrange',
        'namespace' => NULL,
        'prefix' => '{locale?}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zIe2p1alL5LSn9JW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'submission' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/submission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\PagesController@submission',
        'controller' => 'App\\Http\\Controllers\\Website\\PagesController@submission',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'submission',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscribe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale?}/subscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\PagesController@subscribe',
        'controller' => 'App\\Http\\Controllers\\Website\\PagesController@subscribe',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'subscribe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '{locale?}/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\SearchController@index',
        'controller' => 'App\\Http\\Controllers\\Website\\SearchController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::02GJ102kJiK6E3aX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '{locale?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\HomePageController@homePage',
        'controller' => 'App\\Http\\Controllers\\Website\\HomePageController@homePage',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::02GJ102kJiK6E3aX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8ze1kN8sQbtGvJya' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '{locale?}/{all}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\RoutesController@index',
        'controller' => 'App\\Http\\Controllers\\Website\\RoutesController@index',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::8ze1kN8sQbtGvJya',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'all' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yjFpZ6YP1CS3ngu6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/front',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:268:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:50:"function(){
    return \\view(\'website.front\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005020000000000000000";}";s:4:"hash";s:44:"4wjHyQv/D0C4V9prxdlo6QYDzJZ01HuGkWNk7pJiVRE=";}}',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::yjFpZ6YP1CS3ngu6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jhslBHtTMumJZuSN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/photo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:268:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:50:"function(){
    return \\view(\'website.photo\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005040000000000000000";}";s:4:"hash";s:44:"jrlUI8sBgm/lrQwSwfKjLWJLW3tm/j3q37HyNgl0Ex8=";}}',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::jhslBHtTMumJZuSN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kO6lRe5ZnxmdJOyG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:270:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:52:"function(){
    return \\view(\'website.contact\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005060000000000000000";}";s:4:"hash";s:44:"SBytejXG4jZVJ6DI4TE/tlbuwChCOiISOTi5itkYh54=";}}',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::kO6lRe5ZnxmdJOyG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8s3uxbGUnI02Ulyn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/text-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:272:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:54:"function(){
    return \\view(\'website.text-page\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005080000000000000000";}";s:4:"hash";s:44:"Fp36UzZcL5UEOMHluFwKEoKPMV3cp+zbp/Upw2kygkE=";}}',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::8s3uxbGUnI02Ulyn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::swBpRUMZlOaAJy2B' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale?}/home-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'locale',
          1 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:267:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:49:"function(){
    return \\view(\'website.home\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000050a0000000000000000";}";s:4:"hash";s:44:"ycjpGAC1Qtw4Y4aho63326DCsgD6N4nABPnfQX03fw4=";}}',
        'namespace' => NULL,
        'prefix' => '{locale?}',
        'where' => 
        array (
        ),
        'as' => 'generated::swBpRUMZlOaAJy2B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);

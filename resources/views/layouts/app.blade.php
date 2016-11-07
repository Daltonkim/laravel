<html lang="e+n">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alumni</title>
    <!-- layouts king-->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
<!--links-->
<meta charset="utf-8" /><script type="text/javascript" src="/7090D2CF463F44D88DEE096DC93721C6/6F2901A6-41A8-C447-9210-A4A2BCE5007A/main.js" charset="UTF-8"></script><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(){}function o(t,e,n){return function(){return i(t,[(new Date).getTime()].concat(u(arguments)),e?null:this,n),e?void 0:this}}var i=t("handle"),a=t(2),u=t(3),c=t("ee").get("tracer"),f=NREUM;"undefined"==typeof window.newrelic&&(newrelic=f);var s=["setPageViewName","setCustomAttribute","finished","addToTrace","inlineHit"],p="api-",l=p+"ixn-";a(s,function(t,e){f[e]=o(p+e,!0,"api")}),f.addPageAction=o(p+"addPageAction",!0),e.exports=newrelic,f.interaction=function(){return(new r).get()};var d=r.prototype={createTracer:function(t,e){var n={},r=this,o="function"==typeof e;return i(l+"tracer",[Date.now(),t,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[Date.now(),r,o],n),o)try{return e.apply(this,arguments)}finally{c.emit("fn-end",[Date.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){d[e]=o(l+e)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,(new Date).getTime()])}},{}],2:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],3:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(o<0?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?u(t,a,i):i()}function n(n,r,o){t&&t(n,r,o);for(var i=e(o),a=l(n),u=a.length,c=0;c<u;c++)a[c].apply(i,r);var s=f[m[n]];return s&&s.push([w,n,r,i]),i}function p(t,e){g[t]=l(t).concat(e)}function l(t){return g[t]||[]}function d(t){return s[t]=s[t]||o(n)}function v(t,e){c(t,function(t,n){e=e||"feature",m[n]=e,e in f||(f[e]=[])})}var g={},m={},w={on:p,emit:n,get:d,listeners:l,context:e,buffer:v};return w}function i(){return new r}var a="nr@context",u=t("gos"),c=t(2),f={},s={},p=e.exports=o();p.backlog=f},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!h++){var t=y.info=NREUM.info,e=s.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){c(m,function(e,n){t[e]||(t[e]=n)});var n="https"===g.split(":")[0]||t.sslForHttp;y.proto=n?"https://":"http://",u("mark",["onload",a()],null,"api");var r=s.createElement("script");r.src=y.proto+t.agent,e.parentNode.insertBefore(r,e)}}}function o(){"complete"===s.readyState&&i()}function i(){u("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var u=t("handle"),c=t(2),f=window,s=f.document,p="addEventListener",l="attachEvent",d=f.XMLHttpRequest,v=d&&d.prototype;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:d,REQ:f.Request,EV:f.Event,PR:f.Promise,MO:f.MutationObserver},t(1);var g=""+location,m={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-963.min.js"},w=d&&v&&v[p]&&!/CriOS/.test(navigator.userAgent),y=e.exports={offset:a(),origin:g,features:{},xhrWrappable:w};s[p]?(s[p]("DOMContentLoaded",i,!1),f[p]("load",r,!1)):(s[l]("onreadystatechange",o),f[l]("onload",r)),u("mark",["firstbyte",a()],null,"api");var h=0},{}]},{},["loader"]);</script>
<meta name="type" content="webform" />
<link rel="shortcut icon" href="" />
<link rel="shortlink" href="" />

    <link rel="apple-touch-icon" sizes="57x57" href="/profiles/wcmc/themes/wcmc_bootstrap/favicons/apple-touch-icon-57x57.png?v=2">
    <link rel="apple-touch-icon" sizes="60x60" href="/profiles/wcmc/themes/wcmc_bootstrap/favicons/apple-touch-icon-60x60.png?v=2">
    <link rel="apple-touch-icon" sizes="72x72" href="/profiles/wcmc/themes/wcmc_bootstrap/favicons/apple-touch-icon-72x72.png?v=2">
    <link rel="apple-touch-icon" sizes="76x76" href="/profiles/wcmc/themes/wcmc_bootstrap/favicons/apple-touch-icon-76x76.png?v=2">
    <link rel="apple-touch-icon" sizes="114x114" href="/profiles/wcmc/themes/wcmc_bootstrap/favicons/apple-touch-icon-114x114.png?v=2">
    <link rel="apple-touch-icon" sizes="120x120" href="/profiles/wcmc/themes/wcmc_bootstrap/favicons/apple-touch-icon-120x120.png?v=2">
    <link rel="apple-touch-icon" sizes="144x144" href="/profiles/wcmc/themes/wcmc_bootstrap/favicons/apple-touch-icon-144x144.png?v=2">
    <link rel="apple-touch-icon" sizes="152x152" href="/profiles/wcmc/themes/wcmc_bootstrap/favicons/apple-touch-icon-152x152.png?v=2">
    <link rel="apple-touch-icon" sizes="180x180" href="/profiles/wcmc/themes/wcmc_bootstrap/favicons/apple-touch-icon-180x180.png?v=2">
    <link rel="icon" type="image/png" href="/profiles/wcmc/themes/wcmc_bootstrap/favicons/favicon-32x32.png?v=2" sizes="32x32">
    <link rel="icon" type="image/png" href="/profiles/wcmc/themes/wcmc_bootstrap/favicons/favicon-194x194.png?v=2" sizes="194x194">
    <link rel="icon" type="image/png" href="/profiles/wcmc/themes/wcmc_bootstrap/favicons/favicon-96x96.png?v=2" sizes="96x96">
    <link rel="icon" type="image/png" href="/profiles/wcmc/themes/wcmc_bootstrap/favicons/android-chrome-192x192.png?v=2" sizes="192x192">
    <link rel="icon" type="image/png" href="/profiles/wcmc/themes/wcmc_bootstrap/favicons/favicon-16x16.png?v=2" sizes="16x16">
    <link rel="manifest" href="/profiles/wcmc/themes/wcmc_bootstrap/favicons/manifest.json?v=2">
    <link rel="mask-icon" href="/profiles/wcmc/themes/wcmc_bootstrap/favicons/safari-pinned-tab.svg?v=2" color="#5bbad5">
    <link rel="shortcut icon" href="/profiles/wcmc/themes/wcmc_bootstrap/favicons/favicon.ico?v=2">
    <meta name="apple-mobile-web-app-title" content="Weill Cornell Medicine">
    <meta name="application-name" content="Weill Cornell Medicine">
    <meta name="msapplication-TileColor" content="#b31b1b">
    <meta name="msapplication-TileImage" content="/profiles/wcmc/themes/wcmc_bootstrap/favicons/mstile-144x144.png?v=2">
    <meta name="msapplication-config" content="/profiles/wcmc/themes/wcmc_bootstrap/favicons/browserconfig.xml?v=2">
    <meta name="theme-color" content="#ffffff">

    <!-- http://t.co/dKP3o1e -->
    <!--css styles-->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="http://alumni.weill.cornell.edu/sites/default/files/css/css_wsoNWeugtjCBjD8S7BJ7kOsaaWsvPGL9lZ5VqWJPWLM.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,700,700italic" />
<script src="http://alumni.weill.cornell.edu/sites/default/files/js/js_jpJjaUC0z8JMIyav5oQrYykDRUb64rpaUDpB4Y9aklU.js"></script>

<script>(function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,"script","//www.google-analytics.com/analytics.js","ga");ga("create", "UA-81354304-1", {"cookieDomain":"auto"});ga("set", "anonymizeIp", true);ga("send", "pageview");</script>
<script src="http://alumni.weill.cornell.edu/sites/default/files/js/js_DsgePS6Ziaf28mCnytX8l5YqzGpnoad05qUeQJBP584.js"></script>

<script type="text/javascript">
    jQuery(function() {
      jQuery("a:not(:has(img))").filter(function() {
        return this.hostname && this.hostname !== location.hostname;
      }).attr("target","_blank").addClass( "external-link" );
    });
    </script>
<script src=""></script>
<script>jQuery.extend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"wcm_alumni","theme_token":"AXLzn4pA3-1WbU8zRjN0lwQEMBgFTiovMtpZ0XvG-Uo","js":{"profiles\/wcmc\/modules\/panopoly\/panopoly\/panopoly_widgets\/panopoly-widgets.js":1,"profiles\/wcmc\/modules\/panopoly\/panopoly\/panopoly_widgets\/panopoly-widgets-spotlight.js":1,"profiles\/wcmc\/themes\/wcmc_bootstrap\/images\/cta_icons\/svgxuse.min.js":1,"profiles\/wcmc\/modules\/panopoly\/contrib\/jquery_update\/replace\/jquery\/1.7\/jquery.min.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"profiles\/wcmc\/modules\/panopoly\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.core.min.js":1,"profiles\/wcmc\/modules\/panopoly\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.widget.min.js":1,"profiles\/wcmc\/modules\/panopoly\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.tabs.min.js":1,"profiles\/wcmc\/modules\/panopoly\/contrib\/jquery_update\/replace\/ui\/ui\/minified\/jquery.ui.accordion.min.js":1,"profiles\/wcmc\/modules\/panopoly\/contrib\/jquery_update\/replace\/ui\/external\/jquery.cookie.js":1,"profiles\/wcmc\/modules\/panopoly\/panopoly\/panopoly_images\/panopoly-images.js":1,"profiles\/wcmc\/modules\/panopoly\/panopoly\/panopoly_admin\/panopoly-admin.js":1,"profiles\/wcmc\/modules\/panopoly\/panopoly\/panopoly_magic\/panopoly-magic.js":1,"profiles\/wcmc\/modules\/panopoly\/panopoly\/panopoly_theme\/js\/panopoly-accordion.js":1,"profiles\/wcmc\/modules\/custom\/wcmc_banner_receiver\/js\/wcmc_banner_receiver.js":1,"profiles\/wcmc\/modules\/custom\/wcmc_drawer_nav\/js\/modernizr.custom.53035.js":1,"profiles\/wcmc\/modules\/panopoly\/contrib\/caption_filter\/js\/caption-filter.js":1,"profiles\/wcmc\/libraries\/jquery.imagesloaded\/jquery.imagesloaded.min.js":1,"profiles\/wcmc\/modules\/contrib\/webform\/js\/webform.js":1,"profiles\/wcmc\/modules\/contrib\/google_analytics\/googleanalytics.js":1,"0":1,"profiles\/wcmc\/modules\/custom\/wcmc_drawer_nav\/js\/wcmc-drawer-nav-alt.js":1,"1":1,"profiles\/wcmc\/themes\/wcmc_bootstrap\/js\/bootstrap.min.js":1,"profiles\/wcmc\/themes\/wcmc_bootstrap\/js\/jquery.lockfixed-revB.js":1,"profiles\/wcmc\/themes\/wcmc_bootstrap\/js\/select2\/select2.min.js":1,"profiles\/wcmc\/themes\/wcmc_bootstrap\/js\/wcmc-bootstrap-script.js":1,"sites\/all\/themes\/wcm_alumni\/js\/wcm_alumni.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"misc\/ui\/jquery.ui.theme.css":1,"misc\/ui\/jquery.ui.accordion.css":1,"profiles\/wcmc\/modules\/panopoly\/contrib\/date\/date_api\/date.css":1,"profiles\/wcmc\/modules\/panopoly\/contrib\/date\/date_popup\/themes\/datepicker.1.7.css":1,"modules\/field\/theme\/field.css":1,"profiles\/wcmc\/modules\/contrib\/google_appliance\/theme\/google_appliance.css":1,"modules\/node\/node.css":1,"profiles\/wcmc\/modules\/panopoly\/panopoly\/panopoly_admin\/panopoly-admin-navbar.css":1,"profiles\/wcmc\/modules\/panopoly\/panopoly\/panopoly_core\/css\/panopoly-dropbutton.css":1,"profiles\/wcmc\/modules\/panopoly\/panopoly\/panopoly_magic\/css\/panopoly-magic.css":1,"profiles\/wcmc\/modules\/panopoly\/panopoly\/panopoly_theme\/css\/panopoly-featured.css":1,"profiles\/wcmc\/modules\/panopoly\/panopoly\/panopoly_theme\/css\/panopoly-accordian.css":1,"profiles\/wcmc\/modules\/panopoly\/panopoly\/panopoly_theme\/css\/panopoly-layouts.css":1,"profiles\/wcmc\/modules\/panopoly\/panopoly\/panopoly_widgets\/panopoly-widgets.css":1,"profiles\/wcmc\/modules\/panopoly\/panopoly\/panopoly_widgets\/panopoly-widgets-spotlight.css":1,"profiles\/wcmc\/modules\/panopoly\/panopoly\/panopoly_wysiwyg\/panopoly-wysiwyg.css":1,"profiles\/wcmc\/modules\/panopoly\/contrib\/radix_layouts\/radix_layouts.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"profiles\/wcmc\/modules\/custom\/wcmc_banner_receiver\/css\/wcmc_banner.css":1,"profiles\/wcmc\/modules\/custom\/wcmc_drawer_nav\/css\/wcmc-drawer-nav.css":1,"profiles\/wcmc\/modules\/custom\/wcmc_fieldable_panes\/css\/wcmc_headshot.css":1,"profiles\/wcmc\/modules\/panopoly\/contrib\/views\/css\/views.css":1,"profiles\/wcmc\/modules\/panopoly\/contrib\/caption_filter\/caption-filter.css":1,"profiles\/wcmc\/modules\/panopoly\/contrib\/ctools\/css\/ctools.css":1,"profiles\/wcmc\/modules\/panopoly\/contrib\/panels\/css\/panels.css":1,"profiles\/wcmc\/themes\/wcmc_bootstrap\/layouts\/wcmc_twocol\/wcmc_twocol.css":1,"profiles\/wcmc\/modules\/contrib\/webform\/css\/webform.css":1,"profiles\/wcmc\/modules\/custom\/wcmc_drawer_nav\/css\/wcmc-drawer-nav-alt.css":1,"https:\/\/fonts.googleapis.com\/css?family=Open+Sans:400,300,300italic,400italic,700,700italic":1,"profiles\/wcmc\/themes\/wcmc_bootstrap\/css\/wcmc_bootstrap.css":1,"sites\/all\/themes\/wcm_alumni\/css\/wcm_alumni.css":1,"profiles\/wcmc\/modules\/panopoly\/panopoly\/panopoly_images\/panopoly-images.css":1,"profiles\/wcmc\/themes\/wcmc_bootstrap\/css\/altheader.css":1}},"CToolsModal":{"modalSize":{"type":"scale","width":".9","height":".9","addWidth":0,"addHeight":0,"contentRight":25,"contentBottom":75},"modalOptions":{"opacity":".55","background-color":"#FFF"},"animationSpeed":"fast","modalTheme":"CToolsModalDialog","throbberTheme":"CToolsModalThrobber"},"panopoly_magic":{"pane_add_preview_mode":"single"},"urlIsAjaxTrusted":{"\/contact-us\/class-notes":true},"googleanalytics":{"trackOutbound":1,"trackMailto":1,"trackDownload":1,"trackDownloadExtensions":"7z|aac|arc|arj|asf|asx|avi|bin|csv|doc(x|m)?|dot(x|m)?|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt(x|m)?|pot(x|m)?|pps(x|m)?|ppam|sld(x|m)?|thmx|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd|xls(x|m|b)?|xlt(x|m)|xlam|xml|z|zip"}});</script>

    <style>
        body {
            font-family: 'Lato';

        }

        .fa-btn {
            margin-right: 6px;
        }
        #primary-nav .level-1 {
         position: relative;
         float: left;
        list-style: none;
        margin: 0;
       width: 16.66667%;
          padding: 1em 4px;
}
    </style>
</head>
<!--header-->
<body>
  <div class="title-bar" style="box-sizing: border-box; background: grey; display: block;">
    <a href="/">
      <div class="container">
        <span class="home-icon"></span><span class="site-title" style="line-height: 1.65; font-weight:20px; box-sizing: border-box; display: block; font-size:50px; height:100px; ; text-align: center; color: white;">Laikipia Alumni</span>
      </div>
    </a>
  </div>

  <nav id="top-nav" role="navigation" style="line-height: 40px; ">
     <div id="primary-nav" style=" border-bottom: 5px solid grey;display: block; float: none; line-height: 24px;
font-weight: 700; box-sizing: border-box;">
<ul class="menu" data-li-count="7" style="position: relative;
display: block;
float: none;
margin: 0 auto; border-bottom: 5px solid grey;">
<li class="first menu-mlid-1495 level-1"><a href="/get-involved">Get Into the Circle</a></li>
<li class="menu-mlid-1496 level-1"><a href="/programs-events">Events</a></li>
<li class="menu-mlid-1497 level-1"><a href="/alumni-giving">Alumni Giving</a></li>
<li class="menu-mlid-1499 level-1"><a href="/reunion">Reunion</a></li>
<li class="menu-mlid-1502 level-1"><a href="/alumni-association">Alumni Association</a></li>
<li class=" menu-mlid-1501 level-1"><a href="/gallery">Gallery</a></li>
</ul></div>    <div id="drawer-nav">
<ul class="menu clearfix" role="menu"><li class="first menu-mlid-1495 level-1"> <a href="/get-involved">Get Involved</a><span class="expand-menu">+</span><ul class="menu clearfix" role="menu"><li class="first menu-mlid-1529 level-2"><a href="/get-involved/class-leaders-program">Class Leaders Program</a></li>
<li class="menu-mlid-1530 level-2"><a href="/get-involved/speaking-opportunities">Speaking Opportunities</a></li>
<li class="last menu-mlid-1531 level-2"><a href="/get-involved/mentoring">Mentoring</a></li>
</ul></li>
<li class="menu-mlid-1496 level-1"> <a href="/programs-events">Events</a><span class="expand-menu">+</span><ul class="menu clearfix" role="menu"><li class="first menu-mlid-1498 level-2"><a href="{{ url('/news') }}" title="">News &amp; Updates</a></li>
<li class="menu-mlid-1532 level-2"><a href="/programs-events/events-calendar">Events Calendar</a></li>
</ul></li>
<li class="menu-mlid-1497 level-1"> <a href="/alumni-giving">Alumni Giving</a><span class="expand-menu">+</span><ul class="menu clearfix" role="menu"><li class="first menu-mlid-1534 level-2"><a href="/alumni-giving/deans-circle">Dean&#039;s Circle</a></li>
<li class="last menu-mlid-1535 level-2"><a href="/alumni-giving/scholarships">Scholarships</a></li>
</ul></li>
<li class="menu-mlid-1499 level-1"> <a href="/reunion">Reunion</a><span class="expand-menu">+</span><ul class="menu clearfix" role="menu"><li class="first menu-mlid-1547 level-2"><a href="" title="">Schedule</a></li>
<li class="menu-mlid-1551 level-2"><a href="/reunion/travel">Travel</a></li>
<li class="last menu-mlid-1553 level-2"><a href="/reunion/attendees">Attendees</a></li>
</ul></li>
<li class="menu-mlid-1502 level-1"> <a href="/alumni-association">Alumni Association</a><span class="expand-menu">+</span><ul class="menu clearfix" role="menu"><li class="first menu-mlid-1538 level-2"><a href="/alumni-association/board-directors">Board of Directors</a></li>
<li class="menu-mlid-1537 level-2"><a href="/alumni-association/membership-privileges">Membership &amp; Privileges</a></li>
</ul></li>
<li class="menu-mlid-1501 level-1"> <a href="/gallery">Gallery</a><span class="expand-menu">+</span><ul class="menu clearfix" role="menu"><li class="first menu-mlid-1538 level-2"><a href="/gallery">Gallery</a></li>

    </ul></li></ul>     </div>
</nav>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Alumni
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                   
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->firstname }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-sign-out"></i>Profile</a></li>
                                <li><a href="{{ url('/dashboard') }}"><i class="fa fa-btn fa-sign-out"></i>Post</a></li>
                                <li><a href="{{ url('/gallery') }}"><i class="fa fa-btn fa-sign-out"></i>Gallery</a></li>
                                <li><a href="{{ url('/donate') }}"><i class="fa fa-btn fa-sign-out"></i>Donate</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')
                
<!--layouts king-->


    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <link href="css/main.css" rel="stylesheet">
</body>

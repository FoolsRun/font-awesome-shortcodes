<?php

// We need a function that can add ids to HTML header tags
function retitle($match) {
    list($_unused, $h3, $title) = $match;

    $id = strtolower(strtr($title, " .", "--"));

    return "<$h3 id='$id'>$title</$h3>";
}

# Install PSR-0-compatible class autoloader
spl_autoload_register(function($class){
	require 'php_markdown/' . preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

# Get Markdown class
//use \Michelf\Markdown;
use \Michelf\MarkdownExtra;

$text = file_get_contents(dirname(__FILE__) . '/../README.md');
$html = MarkdownExtra::defaultTransform($text);
?>
<!DOCTYPE html>
<html>
    <head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $("#selector .panel-body a").click(function() {
            event.preventDefault();
            var icon = $( "i", this ).attr('class').replace('icon-', '');
            var sendto = "[fa-icon type=\"" + icon + "\"]";
            var win = window.dialogArguments || opener || parent || top;
            win.send_to_editor(sendto);
        });
        
        $(".insert-code").click(function() {
            var example = $( this ).parent().prev().find("code").text();
            var lines = example.split('\n');
            var paras = '';
            $.each(lines, function(i, line) {
                if (line) {
                    paras += line + '<br>';
                }
            });
            var win = window.dialogArguments || opener || parent || top;
            win.send_to_editor(paras);
        });

    });
</script>
<style>
    #selector .panel-body a {
        font-size: 12px;
        min-height: 100px;
    }
    #selector .panel-body i {
        font-size: 20pt;
        color: #000 !important;
    }
    #selector .panel-body a, 
    #selector .panel-body i {
        display: block !important;
    }
    #selector .panel-body  a i {
        text-decoration: none !important;
    }
    #selector .panel-body .col-xs-3 {
        padding-left: 0px;
        padding-right: 0px;
    }
    #selector .panel-body .col-xs-3 a {
        height: 115px;
        padding: 10px;
        margin: 0 -1px -1px 0;
        font-size: 12px;
        line-height: 1.4;
        text-align: center;
        border: 1px solid #ddd;
    }
    .container {
        margin-top: 15px;
    }
    .bs-glyphicons li:hover {
        background-color: rgba(86,61,124,.1);
    }
</style>
        <title>Font Awesome Shortcodes Documentation</title>
    </head>
    <body>
        <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#selector" data-toggle="tab">Icon Selector</a></li>
            <li><a href="#documentation" data-toggle="tab">Plugin Documentation</a></li>
        </ul>
        <div class="tab-content">
      <div class="tab-pane active" id="selector">
          
          <div class="container">
              <p>Click an icon to automatically insert it into the WordPress editor.</p>
            <div class="panel-group" id="accordion">
                
                
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#webapplications">
                      Web Application Icons
                    </a>
                  </h4>
                </div>
                <div id="webapplications" class="panel-collapse collapse">
                  <div class="panel-body">
          <div class="row">
          <div class="col-xs-3"><a href="../icon/adjust"><i class="icon-adjust"></i> icon-adjust</a></div>
        
          <div class="col-xs-3"><a href="../icon/anchor"><i class="icon-anchor"></i> icon-anchor</a></div>
        
          <div class="col-xs-3"><a href="../icon/archive"><i class="icon-archive"></i> icon-archive</a></div>
        
          <div class="col-xs-3"><a href="../icon/asterisk"><i class="icon-asterisk"></i> icon-asterisk</a></div>
        
          <div class="col-xs-3"><a href="../icon/ban-circle"><i class="icon-ban-circle"></i> icon-ban-circle</a></div>
        
          <div class="col-xs-3"><a href="../icon/bar-chart"><i class="icon-bar-chart"></i> icon-bar-chart</a></div>
        
          <div class="col-xs-3"><a href="../icon/barcode"><i class="icon-barcode"></i> icon-barcode</a></div>
        
          <div class="col-xs-3"><a href="../icon/beaker"><i class="icon-beaker"></i> icon-beaker</a></div>
        
          <div class="col-xs-3"><a href="../icon/beer"><i class="icon-beer"></i> icon-beer</a></div>
        
          <div class="col-xs-3"><a href="../icon/bell"><i class="icon-bell"></i> icon-bell</a></div>
        
          <div class="col-xs-3"><a href="../icon/bell-alt"><i class="icon-bell-alt"></i> icon-bell-alt</a></div>
        
          <div class="col-xs-3"><a href="../icon/bolt"><i class="icon-bolt"></i> icon-bolt</a></div>
        
          <div class="col-xs-3"><a href="../icon/book"><i class="icon-book"></i> icon-book</a></div>
        
          <div class="col-xs-3"><a href="../icon/bookmark"><i class="icon-bookmark"></i> icon-bookmark</a></div>
        
          <div class="col-xs-3"><a href="../icon/bookmark-empty"><i class="icon-bookmark-empty"></i> icon-bookmark-empty</a></div>
        
          <div class="col-xs-3"><a href="../icon/briefcase"><i class="icon-briefcase"></i> icon-briefcase</a></div>
        
          <div class="col-xs-3"><a href="../icon/bug"><i class="icon-bug"></i> icon-bug</a></div>
        
          <div class="col-xs-3"><a href="../icon/building"><i class="icon-building"></i> icon-building</a></div>
        
          <div class="col-xs-3"><a href="../icon/bullhorn"><i class="icon-bullhorn"></i> icon-bullhorn</a></div>
        
          <div class="col-xs-3"><a href="../icon/bullseye"><i class="icon-bullseye"></i> icon-bullseye</a></div>
        
          <div class="col-xs-3"><a href="../icon/calendar"><i class="icon-calendar"></i> icon-calendar</a></div>
        
          <div class="col-xs-3"><a href="../icon/calendar-empty"><i class="icon-calendar-empty"></i> icon-calendar-empty</a></div>
        
          <div class="col-xs-3"><a href="../icon/camera"><i class="icon-camera"></i> icon-camera</a></div>
        
          <div class="col-xs-3"><a href="../icon/camera-retro"><i class="icon-camera-retro"></i> icon-camera-retro</a></div>
        
          <div class="col-xs-3"><a href="../icon/certificate"><i class="icon-certificate"></i> icon-certificate</a></div>
        
          <div class="col-xs-3"><a href="../icon/check"><i class="icon-check"></i> icon-check</a></div>
        
          <div class="col-xs-3"><a href="../icon/check-empty"><i class="icon-check-empty"></i> icon-check-empty</a></div>
        
          <div class="col-xs-3"><a href="../icon/check-minus"><i class="icon-check-minus"></i> icon-check-minus</a></div>
        
          <div class="col-xs-3"><a href="../icon/check-sign"><i class="icon-check-sign"></i> icon-check-sign</a></div>
        
          <div class="col-xs-3"><a href="../icon/circle"><i class="icon-circle"></i> icon-circle</a></div>
        
          <div class="col-xs-3"><a href="../icon/circle-blank"><i class="icon-circle-blank"></i> icon-circle-blank</a></div>
        
          <div class="col-xs-3"><a href="../icon/cloud"><i class="icon-cloud"></i> icon-cloud</a></div>
        
          <div class="col-xs-3"><a href="../icon/cloud-download"><i class="icon-cloud-download"></i> icon-cloud-download</a></div>
        
          <div class="col-xs-3"><a href="../icon/cloud-upload"><i class="icon-cloud-upload"></i> icon-cloud-upload</a></div>
        
          <div class="col-xs-3"><a href="../icon/code"><i class="icon-code"></i> icon-code</a></div>
        
          <div class="col-xs-3"><a href="../icon/code-fork"><i class="icon-code-fork"></i> icon-code-fork</a></div>
        
          <div class="col-xs-3"><a href="../icon/coffee"><i class="icon-coffee"></i> icon-coffee</a></div>
        
          <div class="col-xs-3"><a href="../icon/cog"><i class="icon-cog"></i> icon-cog</a></div>
        
          <div class="col-xs-3"><a href="../icon/cogs"><i class="icon-cogs"></i> icon-cogs</a></div>
        
          <div class="col-xs-3"><a href="../icon/collapse"><i class="icon-collapse"></i> icon-collapse</a></div>
        
          <div class="col-xs-3"><a href="../icon/collapse-alt"><i class="icon-collapse-alt"></i> icon-collapse-alt</a></div>
        
          <div class="col-xs-3"><a href="../icon/collapse-top"><i class="icon-collapse-top"></i> icon-collapse-top</a></div>
        
          <div class="col-xs-3"><a href="../icon/comment"><i class="icon-comment"></i> icon-comment</a></div>
        
          <div class="col-xs-3"><a href="../icon/comment-alt"><i class="icon-comment-alt"></i> icon-comment-alt</a></div>
        
          <div class="col-xs-3"><a href="../icon/comments"><i class="icon-comments"></i> icon-comments</a></div>
        
          <div class="col-xs-3"><a href="../icon/comments-alt"><i class="icon-comments-alt"></i> icon-comments-alt</a></div>
        
          <div class="col-xs-3"><a href="../icon/compass"><i class="icon-compass"></i> icon-compass</a></div>
        
          <div class="col-xs-3"><a href="../icon/credit-card"><i class="icon-credit-card"></i> icon-credit-card</a></div>
        
          <div class="col-xs-3"><a href="../icon/crop"><i class="icon-crop"></i> icon-crop</a></div>
        
          <div class="col-xs-3"><a href="../icon/dashboard"><i class="icon-dashboard"></i> icon-dashboard</a></div>
        
          <div class="col-xs-3"><a href="../icon/desktop"><i class="icon-desktop"></i> icon-desktop</a></div>
        
          <div class="col-xs-3"><a href="../icon/download"><i class="icon-download"></i> icon-download</a></div>
        
          <div class="col-xs-3"><a href="../icon/download-alt"><i class="icon-download-alt"></i> icon-download-alt</a></div>
        
          <div class="col-xs-3"><a href="../icon/edit"><i class="icon-edit"></i> icon-edit</a></div>
        
          <div class="col-xs-3"><a href="../icon/edit-sign"><i class="icon-edit-sign"></i> icon-edit-sign</a></div>
        
          <div class="col-xs-3"><a href="../icon/ellipsis-horizontal"><i class="icon-ellipsis-horizontal"></i> icon-ellipsis-horizontal</a></div>
        
          <div class="col-xs-3"><a href="../icon/ellipsis-vertical"><i class="icon-ellipsis-vertical"></i> icon-ellipsis-vertical</a></div>
        
          <div class="col-xs-3"><a href="../icon/envelope"><i class="icon-envelope"></i> icon-envelope</a></div>
        
          <div class="col-xs-3"><a href="../icon/envelope-alt"><i class="icon-envelope-alt"></i> icon-envelope-alt</a></div>
        
          <div class="col-xs-3"><a href="../icon/eraser"><i class="icon-eraser"></i> icon-eraser</a></div>
        
          <div class="col-xs-3"><a href="../icon/exchange"><i class="icon-exchange"></i> icon-exchange</a></div>
        
          <div class="col-xs-3"><a href="../icon/exclamation"><i class="icon-exclamation"></i> icon-exclamation</a></div>
        
          <div class="col-xs-3"><a href="../icon/exclamation-sign"><i class="icon-exclamation-sign"></i> icon-exclamation-sign</a></div>
        
          <div class="col-xs-3"><a href="../icon/expand"><i class="icon-expand"></i> icon-expand</a></div>
        
          <div class="col-xs-3"><a href="../icon/expand-alt"><i class="icon-expand-alt"></i> icon-expand-alt</a></div>
        
          <div class="col-xs-3"><a href="../icon/external-link"><i class="icon-external-link"></i> icon-external-link</a></div>
        
          <div class="col-xs-3"><a href="../icon/external-link-sign"><i class="icon-external-link-sign"></i> icon-external-link-sign</a></div>
        
          <div class="col-xs-3"><a href="../icon/eye-close"><i class="icon-eye-close"></i> icon-eye-close</a></div>
        
          <div class="col-xs-3"><a href="../icon/eye-open"><i class="icon-eye-open"></i> icon-eye-open</a></div>
        
          <div class="col-xs-3"><a href="../icon/facetime-video"><i class="icon-facetime-video"></i> icon-facetime-video</a></div>
        
          <div class="col-xs-3"><a href="../icon/female"><i class="icon-female"></i> icon-female</a></div>
        
          <div class="col-xs-3"><a href="../icon/fighter-jet"><i class="icon-fighter-jet"></i> icon-fighter-jet</a></div>
        
          <div class="col-xs-3"><a href="../icon/film"><i class="icon-film"></i> icon-film</a></div>
        
          <div class="col-xs-3"><a href="../icon/filter"><i class="icon-filter"></i> icon-filter</a></div>
        
          <div class="col-xs-3"><a href="../icon/fire"><i class="icon-fire"></i> icon-fire</a></div>
        
          <div class="col-xs-3"><a href="../icon/fire-extinguisher"><i class="icon-fire-extinguisher"></i> icon-fire-extinguisher</a></div>
        
          <div class="col-xs-3"><a href="../icon/flag"><i class="icon-flag"></i> icon-flag</a></div>
        
          <div class="col-xs-3"><a href="../icon/flag-alt"><i class="icon-flag-alt"></i> icon-flag-alt</a></div>
        
          <div class="col-xs-3"><a href="../icon/flag-checkered"><i class="icon-flag-checkered"></i> icon-flag-checkered</a></div>
        
          <div class="col-xs-3"><a href="../icon/folder-close"><i class="icon-folder-close"></i> icon-folder-close</a></div>
        
          <div class="col-xs-3"><a href="../icon/folder-close-alt"><i class="icon-folder-close-alt"></i> icon-folder-close-alt</a></div>
        
          <div class="col-xs-3"><a href="../icon/folder-open"><i class="icon-folder-open"></i> icon-folder-open</a></div>
        
          <div class="col-xs-3"><a href="../icon/folder-open-alt"><i class="icon-folder-open-alt"></i> icon-folder-open-alt</a></div>
        
          <div class="col-xs-3"><a href="../icon/food"><i class="icon-food"></i> icon-food</a></div>
        
          <div class="col-xs-3"><a href="../icon/frown"><i class="icon-frown"></i> icon-frown</a></div>
        
          <div class="col-xs-3"><a href="../icon/gamepad"><i class="icon-gamepad"></i> icon-gamepad</a></div>
        
          <div class="col-xs-3"><a href="../icon/cog"><i class="icon-gear"></i> icon-gear <span class="muted">(alias)</span></a></div>
        
          <div class="col-xs-3"><a href="../icon/cogs"><i class="icon-gears"></i> icon-gears <span class="muted">(alias)</span></a></div>
        
          <div class="col-xs-3"><a href="../icon/gift"><i class="icon-gift"></i> icon-gift</a></div>
        
          <div class="col-xs-3"><a href="../icon/glass"><i class="icon-glass"></i> icon-glass</a></div>
        
          <div class="col-xs-3"><a href="../icon/globe"><i class="icon-globe"></i> icon-globe</a></div>
        
          <div class="col-xs-3"><a href="../icon/group"><i class="icon-group"></i> icon-group</a></div>
        
          <div class="col-xs-3"><a href="../icon/hdd"><i class="icon-hdd"></i> icon-hdd</a></div>
        
          <div class="col-xs-3"><a href="../icon/headphones"><i class="icon-headphones"></i> icon-headphones</a></div>
        
          <div class="col-xs-3"><a href="../icon/heart"><i class="icon-heart"></i> icon-heart</a></div>
        
          <div class="col-xs-3"><a href="../icon/heart-empty"><i class="icon-heart-empty"></i> icon-heart-empty</a></div>
        
          <div class="col-xs-3"><a href="../icon/home"><i class="icon-home"></i> icon-home</a></div>
        
          <div class="col-xs-3"><a href="../icon/inbox"><i class="icon-inbox"></i> icon-inbox</a></div>
        
          <div class="col-xs-3"><a href="../icon/info"><i class="icon-info"></i> icon-info</a></div>
        
          <div class="col-xs-3"><a href="../icon/info-sign"><i class="icon-info-sign"></i> icon-info-sign</a></div>
        
          <div class="col-xs-3"><a href="../icon/key"><i class="icon-key"></i> icon-key</a></div>
        
          <div class="col-xs-3"><a href="../icon/keyboard"><i class="icon-keyboard"></i> icon-keyboard</a></div>
        
          <div class="col-xs-3"><a href="../icon/laptop"><i class="icon-laptop"></i> icon-laptop</a></div>
        
          <div class="col-xs-3"><a href="../icon/leaf"><i class="icon-leaf"></i> icon-leaf</a></div>
        
          <div class="col-xs-3"><a href="../icon/legal"><i class="icon-legal"></i> icon-legal</a></div>
        
          <div class="col-xs-3"><a href="../icon/lemon"><i class="icon-lemon"></i> icon-lemon</a></div>
        
          <div class="col-xs-3"><a href="../icon/level-down"><i class="icon-level-down"></i> icon-level-down</a></div>
        
          <div class="col-xs-3"><a href="../icon/level-up"><i class="icon-level-up"></i> icon-level-up</a></div>
        
          <div class="col-xs-3"><a href="../icon/lightbulb"><i class="icon-lightbulb"></i> icon-lightbulb</a></div>
        
          <div class="col-xs-3"><a href="../icon/location-arrow"><i class="icon-location-arrow"></i> icon-location-arrow</a></div>
        
          <div class="col-xs-3"><a href="../icon/lock"><i class="icon-lock"></i> icon-lock</a></div>
        
          <div class="col-xs-3"><a href="../icon/magic"><i class="icon-magic"></i> icon-magic</a></div>
        
          <div class="col-xs-3"><a href="../icon/magnet"><i class="icon-magnet"></i> icon-magnet</a></div>
        
          <div class="col-xs-3"><a href="../icon/share-alt"><i class="icon-mail-forward"></i> icon-mail-forward <span class="muted">(alias)</span></a></div>
        
          <div class="col-xs-3"><a href="../icon/reply"><i class="icon-mail-reply"></i> icon-mail-reply <span class="muted">(alias)</span></a></div>
        
          <div class="col-xs-3"><a href="../icon/mail-reply-all"><i class="icon-mail-reply-all"></i> icon-mail-reply-all</a></div>
        
          <div class="col-xs-3"><a href="../icon/male"><i class="icon-male"></i> icon-male</a></div>
        
          <div class="col-xs-3"><a href="../icon/map-marker"><i class="icon-map-marker"></i> icon-map-marker</a></div>
        
          <div class="col-xs-3"><a href="../icon/meh"><i class="icon-meh"></i> icon-meh</a></div>
        
          <div class="col-xs-3"><a href="../icon/microphone"><i class="icon-microphone"></i> icon-microphone</a></div>
        
          <div class="col-xs-3"><a href="../icon/microphone-off"><i class="icon-microphone-off"></i> icon-microphone-off</a></div>
        
          <div class="col-xs-3"><a href="../icon/minus"><i class="icon-minus"></i> icon-minus</a></div>
        
          <div class="col-xs-3"><a href="../icon/minus-sign"><i class="icon-minus-sign"></i> icon-minus-sign</a></div>
        
          <div class="col-xs-3"><a href="../icon/minus-sign-alt"><i class="icon-minus-sign-alt"></i> icon-minus-sign-alt</a></div>
        
          <div class="col-xs-3"><a href="../icon/mobile-phone"><i class="icon-mobile-phone"></i> icon-mobile-phone</a></div>
        
          <div class="col-xs-3"><a href="../icon/money"><i class="icon-money"></i> icon-money</a></div>
        
          <div class="col-xs-3"><a href="../icon/moon"><i class="icon-moon"></i> icon-moon</a></div>
        
          <div class="col-xs-3"><a href="../icon/move"><i class="icon-move"></i> icon-move</a></div>
        
          <div class="col-xs-3"><a href="../icon/music"><i class="icon-music"></i> icon-music</a></div>
        
          <div class="col-xs-3"><a href="../icon/off"><i class="icon-off"></i> icon-off</a></div>
        
          <div class="col-xs-3"><a href="../icon/ok"><i class="icon-ok"></i> icon-ok</a></div>
        
          <div class="col-xs-3"><a href="../icon/ok-circle"><i class="icon-ok-circle"></i> icon-ok-circle</a></div>
        
          <div class="col-xs-3"><a href="../icon/ok-sign"><i class="icon-ok-sign"></i> icon-ok-sign</a></div>
        
          <div class="col-xs-3"><a href="../icon/pencil"><i class="icon-pencil"></i> icon-pencil</a></div>
        
          <div class="col-xs-3"><a href="../icon/phone"><i class="icon-phone"></i> icon-phone</a></div>
        
          <div class="col-xs-3"><a href="../icon/phone-sign"><i class="icon-phone-sign"></i> icon-phone-sign</a></div>
        
          <div class="col-xs-3"><a href="../icon/picture"><i class="icon-picture"></i> icon-picture</a></div>
        
          <div class="col-xs-3"><a href="../icon/plane"><i class="icon-plane"></i> icon-plane</a></div>
        
          <div class="col-xs-3"><a href="../icon/plus"><i class="icon-plus"></i> icon-plus</a></div>
        
          <div class="col-xs-3"><a href="../icon/plus-sign"><i class="icon-plus-sign"></i> icon-plus-sign</a></div>
        
          <div class="col-xs-3"><a href="../icon/plus-sign-alt"><i class="icon-plus-sign-alt"></i> icon-plus-sign-alt</a></div>
        
          <div class="col-xs-3"><a href="../icon/off"><i class="icon-power-off"></i> icon-power-off <span class="muted">(alias)</span></a></div>
        
          <div class="col-xs-3"><a href="../icon/print"><i class="icon-print"></i> icon-print</a></div>
        
          <div class="col-xs-3"><a href="../icon/pushpin"><i class="icon-pushpin"></i> icon-pushpin</a></div>
        
          <div class="col-xs-3"><a href="../icon/puzzle-piece"><i class="icon-puzzle-piece"></i> icon-puzzle-piece</a></div>
        
          <div class="col-xs-3"><a href="../icon/qrcode"><i class="icon-qrcode"></i> icon-qrcode</a></div>
        
          <div class="col-xs-3"><a href="../icon/question"><i class="icon-question"></i> icon-question</a></div>
        
          <div class="col-xs-3"><a href="../icon/question-sign"><i class="icon-question-sign"></i> icon-question-sign</a></div>
        
          <div class="col-xs-3"><a href="../icon/quote-left"><i class="icon-quote-left"></i> icon-quote-left</a></div>
        
          <div class="col-xs-3"><a href="../icon/quote-right"><i class="icon-quote-right"></i> icon-quote-right</a></div>
        
          <div class="col-xs-3"><a href="../icon/random"><i class="icon-random"></i> icon-random</a></div>
        
          <div class="col-xs-3"><a href="../icon/refresh"><i class="icon-refresh"></i> icon-refresh</a></div>
        
          <div class="col-xs-3"><a href="../icon/remove"><i class="icon-remove"></i> icon-remove</a></div>
        
          <div class="col-xs-3"><a href="../icon/remove-circle"><i class="icon-remove-circle"></i> icon-remove-circle</a></div>
        
          <div class="col-xs-3"><a href="../icon/remove-sign"><i class="icon-remove-sign"></i> icon-remove-sign</a></div>
        
          <div class="col-xs-3"><a href="../icon/reorder"><i class="icon-reorder"></i> icon-reorder</a></div>
        
          <div class="col-xs-3"><a href="../icon/reply"><i class="icon-reply"></i> icon-reply</a></div>
        
          <div class="col-xs-3"><a href="../icon/reply-all"><i class="icon-reply-all"></i> icon-reply-all</a></div>
        
          <div class="col-xs-3"><a href="../icon/resize-horizontal"><i class="icon-resize-horizontal"></i> icon-resize-horizontal</a></div>
        
          <div class="col-xs-3"><a href="../icon/resize-vertical"><i class="icon-resize-vertical"></i> icon-resize-vertical</a></div>
        
          <div class="col-xs-3"><a href="../icon/retweet"><i class="icon-retweet"></i> icon-retweet</a></div>
        
          <div class="col-xs-3"><a href="../icon/road"><i class="icon-road"></i> icon-road</a></div>
        
          <div class="col-xs-3"><a href="../icon/rocket"><i class="icon-rocket"></i> icon-rocket</a></div>
        
          <div class="col-xs-3"><a href="../icon/rss"><i class="icon-rss"></i> icon-rss</a></div>
        
          <div class="col-xs-3"><a href="../icon/rss-sign"><i class="icon-rss-sign"></i> icon-rss-sign</a></div>
        
          <div class="col-xs-3"><a href="../icon/screenshot"><i class="icon-screenshot"></i> icon-screenshot</a></div>
        
          <div class="col-xs-3"><a href="../icon/search"><i class="icon-search"></i> icon-search</a></div>
        
          <div class="col-xs-3"><a href="../icon/share"><i class="icon-share"></i> icon-share</a></div>
        
          <div class="col-xs-3"><a href="../icon/share-alt"><i class="icon-share-alt"></i> icon-share-alt</a></div>
        
          <div class="col-xs-3"><a href="../icon/share-sign"><i class="icon-share-sign"></i> icon-share-sign</a></div>
        
          <div class="col-xs-3"><a href="../icon/shield"><i class="icon-shield"></i> icon-shield</a></div>
        
          <div class="col-xs-3"><a href="../icon/shopping-cart"><i class="icon-shopping-cart"></i> icon-shopping-cart</a></div>
        
          <div class="col-xs-3"><a href="../icon/sign-blank"><i class="icon-sign-blank"></i> icon-sign-blank</a></div>
        
          <div class="col-xs-3"><a href="../icon/signal"><i class="icon-signal"></i> icon-signal</a></div>
        
          <div class="col-xs-3"><a href="../icon/signin"><i class="icon-signin"></i> icon-signin</a></div>
        
          <div class="col-xs-3"><a href="../icon/signout"><i class="icon-signout"></i> icon-signout</a></div>
        
          <div class="col-xs-3"><a href="../icon/sitemap"><i class="icon-sitemap"></i> icon-sitemap</a></div>
        
          <div class="col-xs-3"><a href="../icon/smile"><i class="icon-smile"></i> icon-smile</a></div>
        
          <div class="col-xs-3"><a href="../icon/sort"><i class="icon-sort"></i> icon-sort</a></div>
        
          <div class="col-xs-3"><a href="../icon/sort-by-alphabet"><i class="icon-sort-by-alphabet"></i> icon-sort-by-alphabet</a></div>
        
          <div class="col-xs-3"><a href="../icon/sort-by-alphabet-alt"><i class="icon-sort-by-alphabet-alt"></i> icon-sort-by-alphabet-alt</a></div>
        
          <div class="col-xs-3"><a href="../icon/sort-by-attributes"><i class="icon-sort-by-attributes"></i> icon-sort-by-attributes</a></div>
        
          <div class="col-xs-3"><a href="../icon/sort-by-attributes-alt"><i class="icon-sort-by-attributes-alt"></i> icon-sort-by-attributes-alt</a></div>
        
          <div class="col-xs-3"><a href="../icon/sort-by-order"><i class="icon-sort-by-order"></i> icon-sort-by-order</a></div>
        
          <div class="col-xs-3"><a href="../icon/sort-by-order-alt"><i class="icon-sort-by-order-alt"></i> icon-sort-by-order-alt</a></div>
        
          <div class="col-xs-3"><a href="../icon/sort-down"><i class="icon-sort-down"></i> icon-sort-down</a></div>
        
          <div class="col-xs-3"><a href="../icon/sort-up"><i class="icon-sort-up"></i> icon-sort-up</a></div>
        
          <div class="col-xs-3"><a href="../icon/spinner"><i class="icon-spinner"></i> icon-spinner</a></div>
        
          <div class="col-xs-3"><a href="../icon/star"><i class="icon-star"></i> icon-star</a></div>
        
          <div class="col-xs-3"><a href="../icon/star-empty"><i class="icon-star-empty"></i> icon-star-empty</a></div>
        
          <div class="col-xs-3"><a href="../icon/star-half"><i class="icon-star-half"></i> icon-star-half</a></div>
        
          <div class="col-xs-3"><a href="../icon/star-half-empty"><i class="icon-star-half-empty"></i> icon-star-half-empty</a></div>
        
          <div class="col-xs-3"><a href="../icon/star-half-empty"><i class="icon-star-half-full"></i> icon-star-half-full <span class="muted">(alias)</span></a></div>
        
          <div class="col-xs-3"><a href="../icon/subscript"><i class="icon-subscript"></i> icon-subscript</a></div>
        
          <div class="col-xs-3"><a href="../icon/suitcase"><i class="icon-suitcase"></i> icon-suitcase</a></div>
        
          <div class="col-xs-3"><a href="../icon/sun"><i class="icon-sun"></i> icon-sun</a></div>
        
          <div class="col-xs-3"><a href="../icon/superscript"><i class="icon-superscript"></i> icon-superscript</a></div>
        
          <div class="col-xs-3"><a href="../icon/tablet"><i class="icon-tablet"></i> icon-tablet</a></div>
        
          <div class="col-xs-3"><a href="../icon/tag"><i class="icon-tag"></i> icon-tag</a></div>
        
          <div class="col-xs-3"><a href="../icon/tags"><i class="icon-tags"></i> icon-tags</a></div>
        
          <div class="col-xs-3"><a href="../icon/tasks"><i class="icon-tasks"></i> icon-tasks</a></div>
        
          <div class="col-xs-3"><a href="../icon/terminal"><i class="icon-terminal"></i> icon-terminal</a></div>
        
          <div class="col-xs-3"><a href="../icon/thumbs-down"><i class="icon-thumbs-down"></i> icon-thumbs-down</a></div>
        
          <div class="col-xs-3"><a href="../icon/thumbs-down-alt"><i class="icon-thumbs-down-alt"></i> icon-thumbs-down-alt</a></div>
        
          <div class="col-xs-3"><a href="../icon/thumbs-up"><i class="icon-thumbs-up"></i> icon-thumbs-up</a></div>
        
          <div class="col-xs-3"><a href="../icon/thumbs-up-alt"><i class="icon-thumbs-up-alt"></i> icon-thumbs-up-alt</a></div>
        
          <div class="col-xs-3"><a href="../icon/ticket"><i class="icon-ticket"></i> icon-ticket</a></div>
        
          <div class="col-xs-3"><a href="../icon/time"><i class="icon-time"></i> icon-time</a></div>
        
          <div class="col-xs-3"><a href="../icon/tint"><i class="icon-tint"></i> icon-tint</a></div>
        
          <div class="col-xs-3"><a href="../icon/trash"><i class="icon-trash"></i> icon-trash</a></div>
        
          <div class="col-xs-3"><a href="../icon/trophy"><i class="icon-trophy"></i> icon-trophy</a></div>
        
          <div class="col-xs-3"><a href="../icon/truck"><i class="icon-truck"></i> icon-truck</a></div>
        
          <div class="col-xs-3"><a href="../icon/umbrella"><i class="icon-umbrella"></i> icon-umbrella</a></div>
        
          <div class="col-xs-3"><a href="../icon/check-empty"><i class="icon-unchecked"></i> icon-unchecked <span class="muted">(alias)</span></a></div>
        
          <div class="col-xs-3"><a href="../icon/unlock"><i class="icon-unlock"></i> icon-unlock</a></div>
        
          <div class="col-xs-3"><a href="../icon/unlock-alt"><i class="icon-unlock-alt"></i> icon-unlock-alt</a></div>
        
          <div class="col-xs-3"><a href="../icon/upload"><i class="icon-upload"></i> icon-upload</a></div>
        
          <div class="col-xs-3"><a href="../icon/upload-alt"><i class="icon-upload-alt"></i> icon-upload-alt</a></div>
        
          <div class="col-xs-3"><a href="../icon/user"><i class="icon-user"></i> icon-user</a></div>
        
          <div class="col-xs-3"><a href="../icon/volume-down"><i class="icon-volume-down"></i> icon-volume-down</a></div>
        
          <div class="col-xs-3"><a href="../icon/volume-off"><i class="icon-volume-off"></i> icon-volume-off</a></div>
        
          <div class="col-xs-3"><a href="../icon/volume-up"><i class="icon-volume-up"></i> icon-volume-up</a></div>
        
          <div class="col-xs-3"><a href="../icon/warning-sign"><i class="icon-warning-sign"></i> icon-warning-sign</a></div>
        
          <div class="col-xs-3"><a href="../icon/wrench"><i class="icon-wrench"></i> icon-wrench</a></div>
        
          <div class="col-xs-3"><a href="../icon/zoom-in"><i class="icon-zoom-in"></i> icon-zoom-in</a></div>
        
          <div class="col-xs-3"><a href="../icon/zoom-out"><i class="icon-zoom-out"></i> icon-zoom-out</a></div>
        </div> <!-- end row -->
                    </div>
                </div>
              </div>

                
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#currency">
                      Currency Icons
                    </a>
                  </h4>
                </div>
                <div id="currency" class="panel-collapse collapse">
                  <div class="panel-body">
          <div class="row">
      <div class="col-xs-3"><a href="../icon/btc"><i class="icon-bitcoin"></i> icon-bitcoin <span class="muted">(alias)</span></a></div>
    
      <div class="col-xs-3"><a href="../icon/btc"><i class="icon-btc"></i> icon-btc</a></div>
    
      <div class="col-xs-3"><a href="../icon/cny"><i class="icon-cny"></i> icon-cny</a></div>
    
      <div class="col-xs-3"><a href="../icon/usd"><i class="icon-dollar"></i> icon-dollar <span class="muted">(alias)</span></a></div>
    
      <div class="col-xs-3"><a href="../icon/eur"><i class="icon-eur"></i> icon-eur</a></div>
    
      <div class="col-xs-3"><a href="../icon/eur"><i class="icon-euro"></i> icon-euro <span class="muted">(alias)</span></a></div>
    
      <div class="col-xs-3"><a href="../icon/gbp"><i class="icon-gbp"></i> icon-gbp</a></div>
    
      <div class="col-xs-3"><a href="../icon/inr"><i class="icon-inr"></i> icon-inr</a></div>
    
      <div class="col-xs-3"><a href="../icon/jpy"><i class="icon-jpy"></i> icon-jpy</a></div>
    
      <div class="col-xs-3"><a href="../icon/krw"><i class="icon-krw"></i> icon-krw</a></div>
    
      <div class="col-xs-3"><a href="../icon/cny"><i class="icon-renminbi"></i> icon-renminbi <span class="muted">(alias)</span></a></div>
    
      <div class="col-xs-3"><a href="../icon/inr"><i class="icon-rupee"></i> icon-rupee <span class="muted">(alias)</span></a></div>
    
      <div class="col-xs-3"><a href="../icon/usd"><i class="icon-usd"></i> icon-usd</a></div>
    
      <div class="col-xs-3"><a href="../icon/krw"><i class="icon-won"></i> icon-won <span class="muted">(alias)</span></a></div>
    
      <div class="col-xs-3"><a href="../icon/jpy"><i class="icon-yen"></i> icon-yen <span class="muted">(alias)</span></a></div>

        </div> <!-- end row -->
                    </div>
                </div>
              </div>  


              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#texteditor">
                      Text Editor Icons
                    </a>
                  </h4>
                </div>
                <div id="texteditor" class="panel-collapse collapse">
                  <div class="panel-body">
          <div class="row">
      <div class="col-xs-3"><a href="../icon/align-center"><i class="icon-align-center"></i> icon-align-center</a></div>
    
      <div class="col-xs-3"><a href="../icon/align-justify"><i class="icon-align-justify"></i> icon-align-justify</a></div>
    
      <div class="col-xs-3"><a href="../icon/align-left"><i class="icon-align-left"></i> icon-align-left</a></div>
    
      <div class="col-xs-3"><a href="../icon/align-right"><i class="icon-align-right"></i> icon-align-right</a></div>
    
      <div class="col-xs-3"><a href="../icon/bold"><i class="icon-bold"></i> icon-bold</a></div>
    
      <div class="col-xs-3"><a href="../icon/columns"><i class="icon-columns"></i> icon-columns</a></div>
    
      <div class="col-xs-3"><a href="../icon/copy"><i class="icon-copy"></i> icon-copy</a></div>
    
      <div class="col-xs-3"><a href="../icon/cut"><i class="icon-cut"></i> icon-cut</a></div>
    
      <div class="col-xs-3"><a href="../icon/eraser"><i class="icon-eraser"></i> icon-eraser</a></div>
    
      <div class="col-xs-3"><a href="../icon/file"><i class="icon-file"></i> icon-file</a></div>
    
      <div class="col-xs-3"><a href="../icon/file-alt"><i class="icon-file-alt"></i> icon-file-alt</a></div>
    
      <div class="col-xs-3"><a href="../icon/file-text"><i class="icon-file-text"></i> icon-file-text</a></div>
    
      <div class="col-xs-3"><a href="../icon/file-text-alt"><i class="icon-file-text-alt"></i> icon-file-text-alt</a></div>
    
      <div class="col-xs-3"><a href="../icon/font"><i class="icon-font"></i> icon-font</a></div>
    
      <div class="col-xs-3"><a href="../icon/indent-left"><i class="icon-indent-left"></i> icon-indent-left</a></div>
    
      <div class="col-xs-3"><a href="../icon/indent-right"><i class="icon-indent-right"></i> icon-indent-right</a></div>
    
      <div class="col-xs-3"><a href="../icon/italic"><i class="icon-italic"></i> icon-italic</a></div>
    
      <div class="col-xs-3"><a href="../icon/link"><i class="icon-link"></i> icon-link</a></div>
    
      <div class="col-xs-3"><a href="../icon/list"><i class="icon-list"></i> icon-list</a></div>
    
      <div class="col-xs-3"><a href="../icon/list-alt"><i class="icon-list-alt"></i> icon-list-alt</a></div>
    
      <div class="col-xs-3"><a href="../icon/list-ol"><i class="icon-list-ol"></i> icon-list-ol</a></div>
    
      <div class="col-xs-3"><a href="../icon/list-ul"><i class="icon-list-ul"></i> icon-list-ul</a></div>
    
      <div class="col-xs-3"><a href="../icon/paper-clip"><i class="icon-paper-clip"></i> icon-paper-clip</a></div>
    
      <div class="col-xs-3"><a href="../icon/paper-clip"><i class="icon-paperclip"></i> icon-paperclip <span class="muted">(alias)</span></a></div>
    
      <div class="col-xs-3"><a href="../icon/paste"><i class="icon-paste"></i> icon-paste</a></div>
    
      <div class="col-xs-3"><a href="../icon/repeat"><i class="icon-repeat"></i> icon-repeat</a></div>
    
      <div class="col-xs-3"><a href="../icon/undo"><i class="icon-rotate-left"></i> icon-rotate-left <span class="muted">(alias)</span></a></div>
    
      <div class="col-xs-3"><a href="../icon/repeat"><i class="icon-rotate-right"></i> icon-rotate-right <span class="muted">(alias)</span></a></div>
    
      <div class="col-xs-3"><a href="../icon/save"><i class="icon-save"></i> icon-save</a></div>
    
      <div class="col-xs-3"><a href="../icon/strikethrough"><i class="icon-strikethrough"></i> icon-strikethrough</a></div>
    
      <div class="col-xs-3"><a href="../icon/table"><i class="icon-table"></i> icon-table</a></div>
    
      <div class="col-xs-3"><a href="../icon/text-height"><i class="icon-text-height"></i> icon-text-height</a></div>
    
      <div class="col-xs-3"><a href="../icon/text-width"><i class="icon-text-width"></i> icon-text-width</a></div>
    
      <div class="col-xs-3"><a href="../icon/th"><i class="icon-th"></i> icon-th</a></div>
    
      <div class="col-xs-3"><a href="../icon/th-large"><i class="icon-th-large"></i> icon-th-large</a></div>
    
      <div class="col-xs-3"><a href="../icon/th-list"><i class="icon-th-list"></i> icon-th-list</a></div>
    
      <div class="col-xs-3"><a href="../icon/underline"><i class="icon-underline"></i> icon-underline</a></div>
    
      <div class="col-xs-3"><a href="../icon/undo"><i class="icon-undo"></i> icon-undo</a></div>
    
      <div class="col-xs-3"><a href="../icon/unlink"><i class="icon-unlink"></i> icon-unlink</a></div>
        </div> <!-- end row -->
                    </div>
                </div>
              </div> 


              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#direction">
                      Direction Icons
                    </a>
                  </h4>
                </div>
                <div id="direction" class="panel-collapse collapse">
                  <div class="panel-body">
          <div class="row">
      <div class="col-xs-3"><a href="../icon/angle-down"><i class="icon-angle-down"></i> icon-angle-down</a></div>
    
      <div class="col-xs-3"><a href="../icon/angle-left"><i class="icon-angle-left"></i> icon-angle-left</a></div>
    
      <div class="col-xs-3"><a href="../icon/angle-right"><i class="icon-angle-right"></i> icon-angle-right</a></div>
    
      <div class="col-xs-3"><a href="../icon/angle-up"><i class="icon-angle-up"></i> icon-angle-up</a></div>
    
      <div class="col-xs-3"><a href="../icon/arrow-down"><i class="icon-arrow-down"></i> icon-arrow-down</a></div>
    
      <div class="col-xs-3"><a href="../icon/arrow-left"><i class="icon-arrow-left"></i> icon-arrow-left</a></div>
    
      <div class="col-xs-3"><a href="../icon/arrow-right"><i class="icon-arrow-right"></i> icon-arrow-right</a></div>
    
      <div class="col-xs-3"><a href="../icon/arrow-up"><i class="icon-arrow-up"></i> icon-arrow-up</a></div>
    
      <div class="col-xs-3"><a href="../icon/caret-down"><i class="icon-caret-down"></i> icon-caret-down</a></div>
    
      <div class="col-xs-3"><a href="../icon/caret-left"><i class="icon-caret-left"></i> icon-caret-left</a></div>
    
      <div class="col-xs-3"><a href="../icon/caret-right"><i class="icon-caret-right"></i> icon-caret-right</a></div>
    
      <div class="col-xs-3"><a href="../icon/caret-up"><i class="icon-caret-up"></i> icon-caret-up</a></div>
    
      <div class="col-xs-3"><a href="../icon/chevron-down"><i class="icon-chevron-down"></i> icon-chevron-down</a></div>
    
      <div class="col-xs-3"><a href="../icon/chevron-left"><i class="icon-chevron-left"></i> icon-chevron-left</a></div>
    
      <div class="col-xs-3"><a href="../icon/chevron-right"><i class="icon-chevron-right"></i> icon-chevron-right</a></div>
    
      <div class="col-xs-3"><a href="../icon/chevron-sign-down"><i class="icon-chevron-sign-down"></i> icon-chevron-sign-down</a></div>
    
      <div class="col-xs-3"><a href="../icon/chevron-sign-left"><i class="icon-chevron-sign-left"></i> icon-chevron-sign-left</a></div>
    
      <div class="col-xs-3"><a href="../icon/chevron-sign-right"><i class="icon-chevron-sign-right"></i> icon-chevron-sign-right</a></div>
    
      <div class="col-xs-3"><a href="../icon/chevron-sign-up"><i class="icon-chevron-sign-up"></i> icon-chevron-sign-up</a></div>
    
      <div class="col-xs-3"><a href="../icon/chevron-up"><i class="icon-chevron-up"></i> icon-chevron-up</a></div>
    
      <div class="col-xs-3"><a href="../icon/circle-arrow-down"><i class="icon-circle-arrow-down"></i> icon-circle-arrow-down</a></div>
    
      <div class="col-xs-3"><a href="../icon/circle-arrow-left"><i class="icon-circle-arrow-left"></i> icon-circle-arrow-left</a></div>
    
      <div class="col-xs-3"><a href="../icon/circle-arrow-right"><i class="icon-circle-arrow-right"></i> icon-circle-arrow-right</a></div>
    
      <div class="col-xs-3"><a href="../icon/circle-arrow-up"><i class="icon-circle-arrow-up"></i> icon-circle-arrow-up</a></div>
    
      <div class="col-xs-3"><a href="../icon/double-angle-down"><i class="icon-double-angle-down"></i> icon-double-angle-down</a></div>
    
      <div class="col-xs-3"><a href="../icon/double-angle-left"><i class="icon-double-angle-left"></i> icon-double-angle-left</a></div>
    
      <div class="col-xs-3"><a href="../icon/double-angle-right"><i class="icon-double-angle-right"></i> icon-double-angle-right</a></div>
    
      <div class="col-xs-3"><a href="../icon/double-angle-up"><i class="icon-double-angle-up"></i> icon-double-angle-up</a></div>
    
      <div class="col-xs-3"><a href="../icon/hand-down"><i class="icon-hand-down"></i> icon-hand-down</a></div>
    
      <div class="col-xs-3"><a href="../icon/hand-left"><i class="icon-hand-left"></i> icon-hand-left</a></div>
    
      <div class="col-xs-3"><a href="../icon/hand-right"><i class="icon-hand-right"></i> icon-hand-right</a></div>
    
      <div class="col-xs-3"><a href="../icon/hand-up"><i class="icon-hand-up"></i> icon-hand-up</a></div>
    
      <div class="col-xs-3"><a href="../icon/long-arrow-down"><i class="icon-long-arrow-down"></i> icon-long-arrow-down</a></div>
    
      <div class="col-xs-3"><a href="../icon/long-arrow-left"><i class="icon-long-arrow-left"></i> icon-long-arrow-left</a></div>
    
      <div class="col-xs-3"><a href="../icon/long-arrow-right"><i class="icon-long-arrow-right"></i> icon-long-arrow-right</a></div>
    
      <div class="col-xs-3"><a href="../icon/long-arrow-up"><i class="icon-long-arrow-up"></i> icon-long-arrow-up</a></div>
 
        </div> <!-- end row -->
                    </div>
                </div>
              </div> 
 

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#video">
                      Video Player Icons
                    </a>
                  </h4>
                </div>
                <div id="video" class="panel-collapse collapse">
                  <div class="panel-body">
          <div class="row">
      <div class="col-xs-3"><a href="../icon/backward"><i class="icon-backward"></i> icon-backward</a></div>
    
      <div class="col-xs-3"><a href="../icon/eject"><i class="icon-eject"></i> icon-eject</a></div>
    
      <div class="col-xs-3"><a href="../icon/fast-backward"><i class="icon-fast-backward"></i> icon-fast-backward</a></div>
    
      <div class="col-xs-3"><a href="../icon/fast-forward"><i class="icon-fast-forward"></i> icon-fast-forward</a></div>
    
      <div class="col-xs-3"><a href="../icon/forward"><i class="icon-forward"></i> icon-forward</a></div>
    
      <div class="col-xs-3"><a href="../icon/fullscreen"><i class="icon-fullscreen"></i> icon-fullscreen</a></div>
    
      <div class="col-xs-3"><a href="../icon/pause"><i class="icon-pause"></i> icon-pause</a></div>
    
      <div class="col-xs-3"><a href="../icon/play"><i class="icon-play"></i> icon-play</a></div>
    
      <div class="col-xs-3"><a href="../icon/play-circle"><i class="icon-play-circle"></i> icon-play-circle</a></div>
    
      <div class="col-xs-3"><a href="../icon/play-sign"><i class="icon-play-sign"></i> icon-play-sign</a></div>
    
      <div class="col-xs-3"><a href="../icon/resize-full"><i class="icon-resize-full"></i> icon-resize-full</a></div>
    
      <div class="col-xs-3"><a href="../icon/resize-small"><i class="icon-resize-small"></i> icon-resize-small</a></div>
    
      <div class="col-xs-3"><a href="../icon/step-backward"><i class="icon-step-backward"></i> icon-step-backward</a></div>
    
      <div class="col-xs-3"><a href="../icon/step-forward"><i class="icon-step-forward"></i> icon-step-forward</a></div>
    
      <div class="col-xs-3"><a href="../icon/stop"><i class="icon-stop"></i> icon-stop</a></div>
    
      <div class="col-xs-3"><a href="../icon/youtube-play"><i class="icon-youtube-play"></i> icon-youtube-play</a></div>
 
        </div> <!-- end row -->
                    </div>
                </div>
              </div>
                

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#brand">
                      Brand Icons
                    </a>
                  </h4>
                </div>
                <div id="brand" class="panel-collapse collapse">
                  <div class="panel-body">
          <div class="row">
      <div class="col-xs-3"><a href="../icon/adn"><i class="icon-adn"></i> icon-adn</a></div>
    
      <div class="col-xs-3"><a href="../icon/android"><i class="icon-android"></i> icon-android</a></div>
    
      <div class="col-xs-3"><a href="../icon/apple"><i class="icon-apple"></i> icon-apple</a></div>
    
      <div class="col-xs-3"><a href="../icon/bitbucket"><i class="icon-bitbucket"></i> icon-bitbucket</a></div>
    
      <div class="col-xs-3"><a href="../icon/bitbucket-sign"><i class="icon-bitbucket-sign"></i> icon-bitbucket-sign</a></div>
    
      <div class="col-xs-3"><a href="../icon/btc"><i class="icon-bitcoin"></i> icon-bitcoin <span class="muted">(alias)</span></a></div>
    
      <div class="col-xs-3"><a href="../icon/btc"><i class="icon-btc"></i> icon-btc</a></div>
    
      <div class="col-xs-3"><a href="../icon/css3"><i class="icon-css3"></i> icon-css3</a></div>
    
      <div class="col-xs-3"><a href="../icon/dribbble"><i class="icon-dribbble"></i> icon-dribbble</a></div>
    
      <div class="col-xs-3"><a href="../icon/dropbox"><i class="icon-dropbox"></i> icon-dropbox</a></div>
    
      <div class="col-xs-3"><a href="../icon/facebook"><i class="icon-facebook"></i> icon-facebook</a></div>
    
      <div class="col-xs-3"><a href="../icon/facebook-sign"><i class="icon-facebook-sign"></i> icon-facebook-sign</a></div>
    
      <div class="col-xs-3"><a href="../icon/flickr"><i class="icon-flickr"></i> icon-flickr</a></div>
    
      <div class="col-xs-3"><a href="../icon/foursquare"><i class="icon-foursquare"></i> icon-foursquare</a></div>
    
      <div class="col-xs-3"><a href="../icon/github"><i class="icon-github"></i> icon-github</a></div>
    
      <div class="col-xs-3"><a href="../icon/github-alt"><i class="icon-github-alt"></i> icon-github-alt</a></div>
    
      <div class="col-xs-3"><a href="../icon/github-sign"><i class="icon-github-sign"></i> icon-github-sign</a></div>
    
      <div class="col-xs-3"><a href="../icon/gittip"><i class="icon-gittip"></i> icon-gittip</a></div>
    
      <div class="col-xs-3"><a href="../icon/google-plus"><i class="icon-google-plus"></i> icon-google-plus</a></div>
    
      <div class="col-xs-3"><a href="../icon/google-plus-sign"><i class="icon-google-plus-sign"></i> icon-google-plus-sign</a></div>
    
      <div class="col-xs-3"><a href="../icon/html5"><i class="icon-html5"></i> icon-html5</a></div>
    
      <div class="col-xs-3"><a href="../icon/instagram"><i class="icon-instagram"></i> icon-instagram</a></div>
    
      <div class="col-xs-3"><a href="../icon/linkedin"><i class="icon-linkedin"></i> icon-linkedin</a></div>
    
      <div class="col-xs-3"><a href="../icon/linkedin-sign"><i class="icon-linkedin-sign"></i> icon-linkedin-sign</a></div>
    
      <div class="col-xs-3"><a href="../icon/linux"><i class="icon-linux"></i> icon-linux</a></div>
    
      <div class="col-xs-3"><a href="../icon/maxcdn"><i class="icon-maxcdn"></i> icon-maxcdn</a></div>
    
      <div class="col-xs-3"><a href="../icon/pinterest"><i class="icon-pinterest"></i> icon-pinterest</a></div>
    
      <div class="col-xs-3"><a href="../icon/pinterest-sign"><i class="icon-pinterest-sign"></i> icon-pinterest-sign</a></div>
    
      <div class="col-xs-3"><a href="../icon/renren"><i class="icon-renren"></i> icon-renren</a></div>
    
      <div class="col-xs-3"><a href="../icon/skype"><i class="icon-skype"></i> icon-skype</a></div>
    
      <div class="col-xs-3"><a href="../icon/stackexchange"><i class="icon-stackexchange"></i> icon-stackexchange</a></div>
    
      <div class="col-xs-3"><a href="../icon/trello"><i class="icon-trello"></i> icon-trello</a></div>
    
      <div class="col-xs-3"><a href="../icon/tumblr"><i class="icon-tumblr"></i> icon-tumblr</a></div>
    
      <div class="col-xs-3"><a href="../icon/tumblr-sign"><i class="icon-tumblr-sign"></i> icon-tumblr-sign</a></div>
    
      <div class="col-xs-3"><a href="../icon/twitter"><i class="icon-twitter"></i> icon-twitter</a></div>
    
      <div class="col-xs-3"><a href="../icon/twitter-sign"><i class="icon-twitter-sign"></i> icon-twitter-sign</a></div>
    
      <div class="col-xs-3"><a href="../icon/vk"><i class="icon-vk"></i> icon-vk</a></div>
    
      <div class="col-xs-3"><a href="../icon/weibo"><i class="icon-weibo"></i> icon-weibo</a></div>
    
      <div class="col-xs-3"><a href="../icon/windows"><i class="icon-windows"></i> icon-windows</a></div>
    
      <div class="col-xs-3"><a href="../icon/xing"><i class="icon-xing"></i> icon-xing</a></div>
    
      <div class="col-xs-3"><a href="../icon/xing-sign"><i class="icon-xing-sign"></i> icon-xing-sign</a></div>
    
      <div class="col-xs-3"><a href="../icon/youtube"><i class="icon-youtube"></i> icon-youtube</a></div>
    
      <div class="col-xs-3"><a href="../icon/youtube-play"><i class="icon-youtube-play"></i> icon-youtube-play</a></div>
    
      <div class="col-xs-3"><a href="../icon/youtube-sign"><i class="icon-youtube-sign"></i> icon-youtube-sign</a></div>
 
        </div> <!-- end row -->
                    </div>
                </div>
              </div>


              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#medical">
                      Medical Icons
                    </a>
                  </h4>
                </div>
                <div id="medical" class="panel-collapse collapse">
                  <div class="panel-body">
          <div class="row">
      <div class="col-xs-3"><a href="../icon/ambulance"><i class="icon-ambulance"></i> icon-ambulance</a></div>
    
      <div class="col-xs-3"><a href="../icon/h-sign"><i class="icon-h-sign"></i> icon-h-sign</a></div>
    
      <div class="col-xs-3"><a href="../icon/hospital"><i class="icon-hospital"></i> icon-hospital</a></div>
    
      <div class="col-xs-3"><a href="../icon/medkit"><i class="icon-medkit"></i> icon-medkit</a></div>
    
      <div class="col-xs-3"><a href="../icon/plus-sign-alt"><i class="icon-plus-sign-alt"></i> icon-plus-sign-alt</a></div>
    
      <div class="col-xs-3"><a href="../icon/stethoscope"><i class="icon-stethoscope"></i> icon-stethoscope</a></div>
    
      <div class="col-xs-3"><a href="../icon/user-md"><i class="icon-user-md"></i> icon-user-md</a></div>
 
        </div> <!-- end row -->
                    </div>
                </div>
              </div>
                
                
            </div>  
        </div>
        </div>
            
            <div class="tab-pane" id="documentation">
                <div class="container">
                <?php
                    # Put HTML content in the document
                    $html = preg_replace('/(<a href="http:[^"]+")>/is','\\1 target="_blank">',$html);
                    $html = str_replace('<table>', '<table class="table table-striped">', $html);
                    $html = preg_replace_callback("#<(h[1-6])>(.*?)</\\1>#", "retitle", $html);
                    $html = str_replace('</pre>', '</pre><p><button class="btn btn-primary btn-sm insert-code">Insert Example <i class="glyphicon glyphicon-share-alt"></i></button></p>', $html);
                    echo $html;
                ?>
                </div>             
            </div>
        </div>
        
        

            
            
</div> <!-- end container -->
    </body>
</html>
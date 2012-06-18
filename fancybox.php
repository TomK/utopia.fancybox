<?php
utopia::AddCSSFile(utopia::GetRelativePath(dirname(__FILE__).'/lib/jquery.fancybox.css'));
utopia::AddJSFile(utopia::GetRelativePath(dirname(__FILE__).'/lib/jquery.fancybox.pack.js'));
uJavascript::AddText('$(function(){$(".fancybox").fancybox();});');
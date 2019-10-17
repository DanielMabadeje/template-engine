<?php
include 'Template.php';

$template = new Template();

$template->assign('username', 'test');

$template->render('mytemplate.html');

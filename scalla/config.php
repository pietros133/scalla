<?php
defined('MOODLE_INTERNAL') || die();

$THEME->name = "scalla";
$THEME->fullname = "Tema Scalla";
$THEME->parents = ['boost'];
$THEME->sheets = [
    'admin',
    'courses',
    'drawer-left',
    'drawer-right',
    'loginFormDesign',
    'LOGIN_FORM_welcomeMessage',
    'LOGIN_FORM_faixas',
    'main',
    'NAVBAR_welcomeScreen',
    'navbarDesign',
    'page',
    "variables",
];
$THEME->enable_dock = false;
$THEME->yuicssmodules = [];
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->requiredblocks = '';
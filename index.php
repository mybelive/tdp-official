<?php

// 载入公共库

define('APP_ROOT', strtr(__DIR__, '\\', '/') . '/');
require APP_ROOT . 'module/common.php';

// 加载请求模块

$model = newModel($_GET['mod'] ?? 'home');
$model->output();
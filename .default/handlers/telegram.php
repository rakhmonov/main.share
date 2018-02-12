<?php
/**
 * Created by PhpStorm.
 * User: Rakhmonov
 * Date: 12.02.2018
 * Time: 10:36
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

__IncludeLang(dirname(__FILE__)."/lang/".LANGUAGE_ID."/telegram.php");
$name = "telegram";
$title = GetMessage("BOOKMARK_HANDLER_TELEGRAM");
$icon_url_template = "<script>\n".
    "if (__function_exists('tg_click') == false) \n".
    "{\n".
    "function tg_click(url, title) \n".
    "{ \n".
    "window.open('https://t.me/share/url?url='+encodeURIComponent(url)); \n".
    "return false; \n".
    "} \n".
    "}\n".
    "</script>\n".
    "<a href=\"https://t.me/share/url?url=#PAGE_URL#\" onclick=\"return tg_click('#PAGE_URL#');\" target=\"_blank\" class=\"telegram\" title=\"".$title."\"><i class=\"fa fa-telegram\" aria-hidden=\"true\"></i> <span>Telegram</span></a>\n";
$sort = 700;
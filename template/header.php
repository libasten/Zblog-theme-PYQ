<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  {if $type=='index'}
  <title>{$name} - {$subname}{if $page>'1'} - 第{$pagebar.PageNow}页{/if}</title>
  <meta name="keywords" content="{$zbp->Config('PengYouQuan')->keywords}">
  <meta name="description" content="{$zbp->Config('PengYouQuan')->description}">
  {/if}
  {if $type=='article'}
  <title>{$title} - {$name}</title>
  <meta name="keywords" content="{foreach $article.Tags as $tag}{$tag.Name},{/foreach}{$name}" />
  <meta name="description" content="{php}echo preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(FormatString($article->Intro,'[nohtml]'),100)).'...');{/php}" />
  {/if}
  {if $type=='page'}
  <title>{$title} - {$name}</title>
  <meta name="keywords" content="{$title},{$name},">
  <meta name="description" content="{$title},{$name}">
  {/if}
  <link rel="icon" type="images/x-icon" href="{$zbp->Config('PengYouQuan')->favicon}">
  <link rel="shortcut icon" href="{$zbp->Config('PengYouQuan')->favicon}">
  <link rel="font" href="{$host}/zb_users/theme/PengYouQuan/style/font/HarmonyOS_Sans_SC_Medium.woff">
  <link rel="font" href="{$host}/zb_users/theme/PengYouQuan/style/font/HarmonyOS_Sans_SC_Medium.woff2">
  <link href="{$host}zb_users/theme/{$theme}/style/{$style}.css" rel="stylesheet">
  <link href="{$host}zb_users/theme/{$theme}/script/fancybox.css" rel="stylesheet">
  <!-- 灯箱用 -->
  <style type="text/css">span.view-image{cursor:zoom-in;}</style>
</head>
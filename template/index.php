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
  <link href="{$host}zb_users/theme/{$theme}/style/{$style}.css" rel="stylesheet">
  <link href="{$host}zb_users/theme/{$theme}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="icon" type="images/x-icon" href="{$zbp->Config('PengYouQuan')->favicon}">
  <link rel="shortcut icon" href="{$zbp->Config('PengYouQuan')->favicon}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/irozhi/HarmonyOS-Sans/HarmonyOS_Sans_SC/HarmonyOS_Sans_SC_Medium.woff">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/irozhi/HarmonyOS-Sans/HarmonyOS_Sans_SC/HarmonyOS_Sans_SC_Medium.woff2">
</head>
<div class="g-width g-block-center g-clear-both">
  {template:header}
  <main class="content">
    <div class="article-list">
      {foreach $articles as $article}
      {if $article.IsTop}
      {template:post-istop}
      {else}
      {template:post-multi}
      {/if}
      {/foreach}
    </div>
    <div class="pagination">
      {template:pagebar}
    </div>
  </main>
  <div class="clear"></div>
  <div class="rollbar" style="display: none;">
    <ul>
      <li><a href="javascript:(scrollTo({top:0,behavior:'smooth'}));"><i class="fa fa-angle-up"></i></a>
        <h6>去顶部<i></i></h6>
      </li>
    </ul>
  </div>
  {template:footer}
</div>
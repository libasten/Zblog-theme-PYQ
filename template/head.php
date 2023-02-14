<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  {if $type=='index'}
  <title>{$name} - {$subname}{if $page>'1'} - 第{$pagebar.PageNow}页{/if}</title>
  <meta name="keywords" content="{$zbp->Config('FriendCircle')->keywords}">
  <meta name="description" content="{$zbp->Config('FriendCircle')->description}">
  {elseif $type=='article'}
  <title>{$title} - {$name}</title>
  <meta name="keywords" content="{foreach $article.Tags as $tag}{$tag.Name},{/foreach}{$name}" />
  <meta name="description" content="{php}echo preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(FormatString($article->Intro,'[nohtml]'),100)).'...');{/php}" />
  {else}<title>{$title} - {$name}</title>
  <meta name="keywords" content="{$title},{$name},">
  <meta name="description" content="{$title},{$name}">{/else}
  {/if}
  <link rel="icon" type="images/x-icon" href="{$zbp->Config('FriendCircle')->favicon}">
  <link rel="shortcut icon" href="{$zbp->Config('FriendCircle')->favicon}">
  <link href="{$host}zb_users/theme/{$theme}/style/{$style}.css" rel="stylesheet">
  <!-- 灯箱用 -->
  <style>
    span.view-image {
      cursor: zoom-in;
    }
  </style>
</head>
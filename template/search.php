{template:header}
<div class="main">
  <div class="breadcrumb">
    <i class="fa fa-home"></i>
    <span class="info"><a href="{$host}">首页</a></span>
    &gt;&nbsp;{$title}的结果
  </div>
  <div class="content">
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
  </div>
  <div class="sider">
    {template:sidebar}
  </div>
  <div class="clear"></div>
  {template:sidebar}
</div>
{template:footer}
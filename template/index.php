{template:header}
<div class="main">
  <div class="breadcrumb">
    <!-- 首页暂不显示面包屑导航 -->
    {if $type=='index'}
      {if $page=='1'}<div class="index-info"></div>
      {else}<i class="fa fa-home"></i><span class="info"><a href="{$host}">&nbsp;首页</a></span>&nbsp;&gt;&nbsp;{$title}
      {/if}
    {/if}
    {if $type=='category'}<i class="fa fa-home"></i><span class="info"><a href="{$host}">&nbsp;首页</a></span>&nbsp;&gt;&nbsp;<a href="{$category.Url}">{$category.Name}</a>{/if}
    {if $type=='tag'}<i class="fa fa-home"></i><span class="info"><a href="{$host}">&nbsp;首页</a></span>&nbsp;&gt;&nbsp;包含&nbsp;&nbsp;{$title}&nbsp;&nbsp;标签的文章{/if}
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
  <div class="rollbar" style="display: none;">
      <ul>
          <li><a href="javascript:(scrollTo({top:0,behavior:'smooth'}));"><i class="fa fa-angle-up"></i></a>
              <h6>去顶部<i></i></h6>
          </li>
      </ul>
  </div>
</div>
{template:footer}
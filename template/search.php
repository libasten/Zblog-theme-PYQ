<!DOCTYPE html>
<html lang="zh-CN">
{template:header}

<body>
  <div class="g-width g-block-center g-clear-both">
    {template:top}
    <main class="content">
      <div class="article-list">
        {if count($articles)>0}
        <div class="search-result-tip">关键字 “<span class="keyword">{$search}</span>” 的搜索结果</div>
        {foreach $articles as $article}
        {template:post-multi}
        {/foreach}
        {else}
        <div class="no-result-tip">关键字 “<span class="keyword">{$search}</span>” 暂无搜索结果......
          <div><button class="back-index" onclick="window.location.href ='{$zbp->host}'">回到首页</button></div>
        </div>
        {/if}
      </div>
      {if count($articles)>0}
      <div class="pagination">
        {template:pagebar}
      </div>
      {/if}
    </main>
    <div class="clear"></div>
    {template:backTop}
    {template:bottom}
  </div>
  {template:footer}
</body>

</html>
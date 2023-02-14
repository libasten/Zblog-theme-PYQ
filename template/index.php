<!DOCTYPE html>
<html lang="zh-CN">
{template:header}

<body>
  <div class="g-width g-block-center g-clear-both">
    {template:top}
    <main class="content">
      <div class="article-list">
        {foreach $articles as $article}
        {template:post-multi}
        {/foreach}
      </div>
      <div class="pagination">
        {template:pagebar}
      </div>
    </main>
    <div class="clear"></div>
    {template:backTop}
    {template:bottom}
  </div>
  {template:footer}
</body>

</html>
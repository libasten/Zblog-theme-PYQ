{template:header}
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
{template:footer}
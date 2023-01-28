<div class="main">
  {template:header}
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
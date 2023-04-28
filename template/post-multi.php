<div class="article g-clear-both">
  <div class="post-avatar g-left">
    <img src="{$zbp->Config('FriendCircle')->avatar}" alt="avatar" class="g-alias-imgblock" />
  </div>
  <div class="post-main g-right">
    <header class="post-header g-clear-both">
      {php}
      $authorName = $article->Author->Alias==""? $article->Author->Name : $article->Author->Alias
      {/php}
      <div class="post-title g-left g-txt-ellipsis g-user-select">{$authorName}</div>
    </header>
    <div class="post-content g-inline-justify g-user-select" id="article-{$article.ID}">
      {php}
      $pattern = "/<img(.*?)src=('|\")([^>]*).(bmp|gif|jpeg|jpg|png|icon)('|\")(.*?)>/i";
      $replacement = '<span class="view-image" href=$2$3.$4$5 title="'.$article->Title.'"><img$1class="ue-image" src=$2$3.$4$5 $6></span>';
      {/php}
      {if $zbp.Config('FriendCircle').fullArticle}
        {php}
        $content = preg_replace($pattern, $replacement, $article->Content);
        {/php}
        {if $zbp.Config('FriendCircle').readMore}
          <div id="fold-article-{$article.ID}" class="fold-box">
          {php}
          echo($content)
          {/php}
          </div>
        {else}
          {php}
          echo($content)
          {/php}
        {/if}
      {else}
        {php}
        $intro = preg_replace($pattern, $replacement, $article->Intro);
        echo($intro)
        {/php}
      {/if}
    </div>
    {if !empty($article->Metas->location)}
    <div class="post-attachcontent g-txt-ellipsis g-user-select">
      {$article.Metas.location}
    </div>
    {/if}
    <footer class="post-footer g-clear-both">
      <div class="post-info g-left g-txt-ellipsis">
        {$article.Time('Y-m-d')}
      </div>
      <div class="post-fun g-right">
        <a href="{$article.Url}">
          <div class="fun-ico">互动交流</div>
        </a>
      </div>
    </footer>
  </div>
</div>
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
    <div class="post-content g-inline-justify g-user-select">
      {$article.Intro}
    </div>
    <div class="post-attachcontent g-txt-ellipsis g-user-select">
      {$article.Metas.location}
    </div>
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
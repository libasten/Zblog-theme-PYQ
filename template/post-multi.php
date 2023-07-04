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
      <div class="grid-pics">
      {if !empty(trim($article->Metas->gridPic1))}
        <img src="{$article.Metas.gridPic1}" class="pic-item1" alt="pic">
      {/if}
      {if !empty(trim($article->Metas->gridPic2))}
        <img src="{$article.Metas.gridPic2}" class="pic-item2" alt="pic">
      {/if}
      {if empty(trim($article->Metas->gridPic3))}
        <img src="{$article.Metas.gridPic3}" class="pic-item3" alt="pic">
      {/if}
      {if empty(trim($article->Metas->gridPic4))}
        <img src="{$article.Metas.gridPic4}" class="pic-item4" alt="pic">
        {/if}
      {if empty(trim($article->Metas->gridPic5))}
        <img src="{$article.Metas.gridPic5}" class="pic-item5" alt="pic">
      {/if}
      {if empty(trim($article->Metas->gridPic6))}
        <img src="{$article.Metas.gridPic6}" class="pic-item6" alt="pic">
      {/if}
      {if empty(trim($article->Metas->gridPic7))}
        <img src="{$article.Metas.gridPic7}" class="pic-item7" alt="pic">
      {/if}
      {if empty(trim($article->Metas->gridPic8))}
        <img src="{$article.Metas.gridPic8}" class="pic-item8" alt="pic">
      {/if}
      {if empty(trim($article->Metas->gridPic9))}
        <img src="{$article.Metas.gridPic9}" class="pic-item9" alt="pic">
      {/if}
      </div>
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
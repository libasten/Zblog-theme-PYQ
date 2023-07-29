<!DOCTYPE html>
<html lang="zh-CN">
{template:header}

<body>
  <div class="g-width g-block-center g-clear-both">
    {template:top}
    <main class="content">
      <div class="article-list">
        <div class="article g-clear-both">
          <div class="post-avatar g-left">
            <a href="{$zbp->host}"><img src="{$zbp->Config('FriendCircle')->avatar}" alt="avatar" class="g-alias-imgblock" /></a>
          </div>
          <div class="post-main g-right" style="border:none;">
            <header class="post-header g-clear-both">
              {php}
              $authorName = $article->Author->Alias==""? $article->Author->Name : $article->Author->Alias
              {/php}
              <a href="{$zbp->host}"><div class="post-title g-left g-txt-ellipsis g-user-select">{$authorName}</div></a>
            </header>
            <div class="post-content g-inline-justify g-user-select" id="article-{$article.ID}">
              {php}
              $pattern = "/<img(.*?)src=('|\")([^>]*).(bmp|gif|jpeg|jpg|png|icon)('|\")(.*?)>/i";
              $replacement = '<span class="view-image" href=$2$3.$4$5 title="'.$article->Title.'"><img$1class="ue-image" src=$2$3.$4$5 $6></span>';
              $content = preg_replace($pattern, $replacement, $article->Content);
              {/php}
              {$content}
              <!-- 九宫格 -->
              <div class="grid-box">
                <div class="grid-pics" id="gridpics-{$article.ID}">
                  {if !empty(trim($article->Metas->gridPic1))}<img src="{$article.Metas.gridPic1}" class="pic-item" alt="pic">{/if}
                  {if !empty(trim($article->Metas->gridPic2))}<img src="{$article.Metas.gridPic2}" class="pic-item" alt="pic">{/if}
                  {if !empty(trim($article->Metas->gridPic3))}<img src="{$article.Metas.gridPic3}" class="pic-item" alt="pic">{/if}
                  {if !empty(trim($article->Metas->gridPic4))}<img src="{$article.Metas.gridPic4}" class="pic-item" alt="pic">{/if}
                  {if !empty(trim($article->Metas->gridPic5))}<img src="{$article.Metas.gridPic5}" class="pic-item" alt="pic">{/if}
                  {if !empty(trim($article->Metas->gridPic6))}<img src="{$article.Metas.gridPic6}" class="pic-item" alt="pic">{/if}
                  {if !empty(trim($article->Metas->gridPic7))}<img src="{$article.Metas.gridPic7}" class="pic-item" alt="pic">{/if}
                  {if !empty(trim($article->Metas->gridPic8))}<img src="{$article.Metas.gridPic8}" class="pic-item" alt="pic">{/if}
                  {if !empty(trim($article->Metas->gridPic9))}<img src="{$article.Metas.gridPic9}" class="pic-item" alt="pic">{/if}
                </div>
              </div>
            </div>
            {if !empty($article->Metas->location)}
            <div class="post-attachcontent g-txt-ellipsis g-user-select">
              {$article.Metas.location}
            </div>
            {/if}
            <footer class="post-footer g-clear-both">
              <div class="post-info g-left g-txt-ellipsis">{$article.Time('Y-m-d')}</div>
            </footer>
            {if !$article.IsLock}
            <aside class="post-aside show">
              <div class="fun-area post-like-to-comment g-clear-both show">
                <ul class="like-userslist g-left-flex">
                  <li class="like-name g-user-select">留言评论</li>
                </ul>
              </div>
              {template:comments}
            </aside>
            {/if}
          </div>
        </div>
      </div>
    </main>
    <div class="clear"></div>
    {template:backTop}
    {template:bottom}
  </div>
  {template:footer}
</body>

</html>
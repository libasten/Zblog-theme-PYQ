<!DOCTYPE html>
<html lang="zh-CN">
{template:head}

<body>
  <div class="g-width g-block-center g-clear-both">
    {template:top}
    <main class="content">
      <div class="article-list">
        <div class="article g-clear-both">
          <div class="post-avatar g-left">
            <img src="{$zbp->Config('FriendCircle')->avatar}" alt="avatar" class="g-alias-imgblock" />
          </div>
          <div class="post-main g-right" style="border:none;">
            <header class="post-header g-clear-both">
              {php}
              $authorName = $article->Author->Alias==""? $article->Author->Name : $article->Author->Alias
              {/php}
              <div class="post-title g-left g-txt-ellipsis g-user-select">{$authorName}</div>
            </header>
            <div class="post-content g-inline-justify g-user-select">
              {$article->Content}
            </div>
            <div class="post-attachcontent g-txt-ellipsis g-user-select">
              {$article.Metas.location}
            </div>
            <footer class="post-footer g-clear-both">
              <div class="post-info g-left g-txt-ellipsis">{$article.Time('Y-m-d')}</div>
            </footer>
            <aside class="post-aside show">
              <div class="fun-area post-like-to-comment g-clear-both show">
                <ul class="like-userslist g-left-flex">
                  <li class="like-name g-user-select">留言评论</li>
                </ul>
              </div>
              {template:comments}

            </aside>
          </div>
        </div>
      </div>
    </main>
    <div class="clear"></div>
    {template:backTop}
    {template:footer}
  </div>
  {template:bottom-script}
</body>

</html>
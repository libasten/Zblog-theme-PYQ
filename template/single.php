{template:header}
<div class="g-width g-block-center g-clear-both">
    {template:top}
    <main class="content">
        <div class="article-list">
            <article class="g-clear-both">
                <div class="post-avatar g-left">
                    <img src="{$zbp->Config('PengYouQuan')->avatar}" alt="" class="g-alias-imgblock">
                </div>
                <div class="post-main g-right" style="border:none;">
                    <header class="post-header g-clear-both">
                        <div class="post-title g-left g-txt-ellipsis g-user-select">{$article.Author.Alias}</div>
                    </header>
                    <section class="post-content g-inline-justify g-user-select">
                        <!-- 嵌入了图片灯箱 -->
                        {php}
                        $pattern = "/<img(.*?)src=('|\")([^>]*).(bmp|gif|jpeg|jpg|png|icon)('|\")(.*?)>/i";
                        $replacement = '<span class="view-image" href=$2$3.$4$5 title="'.$article->Title.'"><img$1class="ue-image" src=$2$3.$4$5 $6></span>';
                        $content = preg_replace($pattern, $replacement, $article->Content);
                        {/php}
                        {$content}
                    </section>
                    <section class="post-attachcontent g-txt-ellipsis g-user-select"><span class="attachcontent-text">{$article.Metas.location}</span></section>
                    <footer class="post-footer g-clear-both">
                        <div class="post-info g-left g-txt-ellipsis"><span clsss="post-date">{$article.Time('Y-m-d')}</span></div>
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
            </article>
        </div>
    </main>
    <div class="clear"></div>
    {template:backTop}
    {template:footer}
</div>
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
                        {$article.Content}
                    </section>
                    <section class="post-attachcontent g-txt-ellipsis g-user-select"><span class="attachcontent-text">南京市 · 江南秘境国际旅游度假区</span></section>
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
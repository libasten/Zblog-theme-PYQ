<article class="g-clear-both">
    <div class="post-avatar g-left">
        <img src="{$zbp->Config('FriendCircle')->avatar}" alt="avatar" class="g-alias-imgblock" />
    </div>
    <div class="post-main g-right">
        <header class="post-header g-clear-both">
            <div class="post-title g-left g-txt-ellipsis g-user-select">{$article.Author.Alias}</div>
        </header>
        <section class="post-content g-inline-justify g-user-select">
            {$article.Intro}
        </section>
        <section class="post-attachcontent g-txt-ellipsis g-user-select">
            {$article.Metas.location}
        </section>
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
</article>
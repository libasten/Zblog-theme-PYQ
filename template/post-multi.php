<article class="g-clear-both">
    <div class="post-avatar g-left">
        <img src="{$zbp->Config('PengYouQuan')->avatar}" alt="" class="g-alias-imgblock">
    </div>

    <div class="post-main g-right">
        <header class="post-header g-clear-both">
            <div class="post-title g-left g-txt-ellipsis g-user-select">{$article.Author.Alias}</div>
        </header>
        <section class="post-content g-inline-justify g-user-select">
            {$article.Content}
        </section>
        <section class="post-attachcontent g-txt-ellipsis g-user-select"><span class="attachcontent-text">南京市 · 江南秘境国际旅游度假区</span></section>
        <footer class="post-footer g-clear-both">
            <div class="post-info g-left g-txt-ellipsis"><span clsss="post-date">{$article.Time('Y-m-d')}</span></div>
            <div class="post-fun g-right">
                <a href="{$article.Url}" target="_blank">
                    <div class="fun-ico">互动交流</div>
                </a>
            </div>
        </footer>
    </div>
</article>
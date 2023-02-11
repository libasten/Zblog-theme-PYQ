<article class="g-clear-both">
    <div class="post-avatar g-left">
        <img src="{$zbp->Config('PengYouQuan')->avatar}" alt="avatar" class="g-alias-imgblock" />
    </div>
    <div class="post-main g-right">
        <header class="post-header g-clear-both">
            <div class="post-title g-left g-txt-ellipsis g-user-select">{$article.Author.Alias}</div>
        </header>
        <section class="post-content g-inline-justify g-user-select">
            <!-- 嵌入了图片灯箱 -->
            {php}
            $pattern = "/<img(.*?)src=('|\")([^>]*).(bmp|gif|jpeg|jpg|png|icon)('|\")(.*?)>/i";
                $replacement = '<span class="view-image" href=$2$3.$4$5><img$1class="ue-image" src=$2$3.$4$5 $6></span>';
                $content = preg_replace($pattern, $replacement, $article->Content);
                {/php}
                {$content}
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
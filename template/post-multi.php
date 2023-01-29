<article class="article-list-item ">
    <figure class="post-img">
        <a href="{$article.Url}">
            {if $article.Metas.fdsImage!=null}
            <img src="{$article.Metas.fdsImage}" alt="{$article.Title}">
            {else}
            <img src="{$zbp->Config('PengYouQuan')->thumbnail}" alt="{$article.Title}">
            {/if}
        </a>
    </figure>
    <div class="post-text">
        <a href="{$article.Url}">
            <h2 class="post-header">{$article.Title}</h2>
        </a>
        <div class="post-content">{$article.Content}</div>
        <div class="post-meta meta-bottom clear">
            <span class="tags">
                <i class="fa fa-fw fa-tags"></i>{foreach $article.Tags as $tag}<a href="{$tag.Url}">{$tag.Name}</a>{/foreach}
            </span>
        </div>
    </div>
</article>
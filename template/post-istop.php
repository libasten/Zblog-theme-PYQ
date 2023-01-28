<article class="article-list-item">
    
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
        <a href="{$article.Url}"><h2 class="post-header"><span class="top-info"><i class="fa fa-bookmark-o"></i>置顶</span>{$article.Title}</h2></a>
        <div class="post-meta meta-top">
            <span class="category"><i class="fa fa-fw fa-folder-open-o"></i>&nbsp;<a href="{$article.Category.Url}">{$article.Category.Name}</a></span>
            <span class="date"><i class="fa fa-fw fa-calendar"></i>&nbsp;{$article.Time('Y-m-d')}</span>
            <span class="view"><i class="fa fa-fw fa-eye"></i>&nbsp;{$article.ViewNums}</span>
        </div>
        <div class="post-intro">{$article.Intro}</div>
        <div class="post-meta meta-bottom clear">
            <span class="tags"><i class="fa fa-fw fa-tags"></i>&nbsp;
                {foreach $article.Tags as $tag}
                <a href="{$tag.Url}">{$tag.Name}</a>
                {/foreach}
            </span>
            <span class="read-more"><a href="{$article.Url}">阅读全文...</a></span>
        </div>
    </div>
</article>
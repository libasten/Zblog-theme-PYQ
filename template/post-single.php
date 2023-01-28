<article class="single">
	<h1 class="single-header">{$article.Title}</h1>
	<div class="single-meta meta-top">
		<span class="category"><i class="fa fa-fw fa-folder-open-o"></i>&nbsp;<a href="{$article.Category.Url}">{$article.Category.Name}</a></span>
		<span class="date"><i class="fa fa-fw fa-calendar"></i>&nbsp;{$article.Time('Y-m-d')}</span>
		<span class="view"><i class="fa fa-fw fa-eye"></i>&nbsp;{$article.ViewNums}</span>
		<span class="comment"><i class="fa fa-fw fa-comments-o"></i>&nbsp;{$article.CommNums}</span>
	</div>
	<div class="single-text">
		{$article.Content}
	</div>
	<div class="single-meta meta-bottom clear">
		<span class="tags"><i class="fa fa-fw fa-tags"></i>&nbsp;{foreach $article.Tags as $tag}<a href="{$tag.Url}">{$tag.Name}</a>{/foreach}</span>
	</div>
</article>
<div class="single-navigation">
	<div class="single-previous">
		{if $article.Prev}
		<a href="{$article.Prev.Url}" rel="prev"><span class="title-prefix">上一篇：</span><span>{$article.Prev.Title}</span></a>
		{else}
		<span span class="title-prefix">上一篇</span><span>已是第一篇</span>
		{/if}
	</div>
	<div class="single-next">
		{if $article.Next}
		<a href="{$article.Next.Url}" rel="next"><span class="title-prefix">下一篇</span><span>{$article.Next.Title}</span></a>
		{else}
		<span class="title-prefix">下一篇</span><span>已是最后一篇</span>
		{/if}
	</div>
</div>
<div class="relates">
	<div class="title"><h3><i class="fa fa-newspaper-o"></i>&nbsp;相关推荐</h3></div>
	{$array=GetList($zbp->option['ZC_RELATEDLIST_COUNT'],null,null,null,null,null,array('is_related'=>$article->ID));}
	<ul id="related">
	{foreach $array as $related}
		<li><span class="title"><a href="{$related.Url}" title="{$related.Title}">{$related.Title}</a></span>&nbsp;&nbsp;<span class="time">{$related.Time('Y-m-d')}</span></li>
	{/foreach}
	</ul>
</div>
{if !$article.IsLock}
<div class="comments">
	{template:comments}
	{template:commentpost}
</div>
{/if}
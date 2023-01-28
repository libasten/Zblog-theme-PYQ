<article class="single fd-border">
	<h1 class="single-header">{$article.Title}</h1>
	<!-- <div class="single-meta meta-top">
		<span class="category"><i class="fa fa-fw fa-newspaper-o"></i>&nbsp;<a href="{$article.Category.Url}">{$article.Category.Name}</a></span>
		<span class="date"><i class="fa fa-fw fa-clock-o"></i>&nbsp;{$article.Time('Y年m月d日')}</span>
	</div> -->
	<div class="single-text sinlge-page">
		{$article.Content}
	</div>
</article>
{if !$article.IsLock}
<div class="comments fd-border">
	{template:comments}
	{template:commentpost}
</div>
{/if}
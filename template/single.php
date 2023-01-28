{template:header}
<div class="main">
	<div class="breadcrumb">
		<i class="fa fa-home"></i>
		<span class="info"><a href="{$host}">首页</a></span>
		{if $type=='article'}
		&gt;&nbsp;<a href="{$article.Category.Url}" target="_blank">{$article.Category.Name}</a>&nbsp;&gt;&nbsp;正文
		{else}&gt;&nbsp;正文
		{/if}
	</div>
	<div class="content">
		{if $type=='article'}
			{template:post-single}
		{else}
			{template:post-page}
		{/if}
	</div>
	<div class="sider">
		{template:sidebar}
	</div>
	<div class="clear"></div>
	<div class="rollbar" style="display: none;">
		<ul>
			<li><a href="javascript:(scrollTo({top:0,behavior:'smooth'}));"><i class="fa fa-angle-up"></i></a>
				<h6>去顶部<i></i></h6>
			</li>
		</ul>
	</div>
</div>
{template:footer}
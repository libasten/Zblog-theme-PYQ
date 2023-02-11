<ul class="msg" id="cmt{$comment.ID}">
	<li class="msgname">
		<span class="commentName">{$comment.Author.StaticName}</span>
		<span class="commentTime">@ {$comment.Time()}</span>
		<span class="revertcomment"><a href="#comment" onclick="zbp.comment.reply('{$comment.ID}')">回复</a></span>
	</li>
	<li class="msgarticle">{$comment.Content}
{foreach $comment.Comments as $comment}
{template:comment}
{/foreach}
	</li>
</ul>
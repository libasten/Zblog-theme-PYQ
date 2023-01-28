<div class="comment-list">
    <h3><i class="fa fa-comments-o"></i>&nbsp;留言评论</h3>
    <label id="AjaxCommentBegin"></label>
        {foreach $comments as $key => $comment}
            {template:comment}
        {/foreach}
    <div class="pagebar commentpagebar">{template:pagebar}</div>
    <label id="AjaxCommentEnd"></label>
</div>
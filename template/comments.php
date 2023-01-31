<div class="comment-list">
    <label id="AjaxCommentBegin"></label>
    {foreach $comments as $key => $comment}
    {template:comment}
    {/foreach}
    <div class="pagebar commentpagebar">{template:pagebar}</div>
    <label id="AjaxCommentEnd"></label>
    <!--评论框-->
    {template:commentpost}
</div>
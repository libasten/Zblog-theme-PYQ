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
            <div class="post-fun g-right" title="详情">
                <div class="fun-ico g-txt-hide">互动</div>
                <div class="fun-box g-clear-both">
                    <div class="fun-btn like allow">赞</div>
                    <div class="fun-btn comment allow">评论</div>
                </div>
            </div>
        </footer>
        <aside class="post-aside show">
            <div class="fun-area post-like g-clear-both show">
                <ul class="like-userslist g-right-flex">
                    <li class="like-name g-user-select">北枫</li>
                    <li class="like-name more">11位访客</li>
                </ul>
            </div>
            <div class="fun-area post-comment g-clear-both index show">
                <ul class="comment-itemslist">
                    <li>
                        <div class="comment-item g-inline-justify">
                            <span class="comment-name g-user-select"><a href="https://chenyyds.com/" target="_blank" rel="nofollow noopener noreferrer">老陳网志</a></span>
                            <span class="comment-text allow g-user-select">新年快乐~</span>
                        </div>
                    </li>
                    <li>
                        <div class="comment-item g-inline-justify">
                            <span class="comment-name g-user-select"><a href="http://beifeng.me" target="_blank" rel="nofollow noopener noreferrer">北枫</a></span>
                            <span class="comment-text allow g-user-select">王总新年快乐！</span>
                        </div>
                        <div class="comment-item g-inline-justify">
                            <span class="comment-name g-user-select"><a href="https://kam.zone" target="_blank" rel="nofollow noopener noreferrer">Kam</a></span>
                            <span class="comment-reply">回复</span><span class="comment-name">北枫</span>
                            <span class="comment-text allow g-user-select">靓仔新年快乐！哈哈。</span>
                        </div>
                    </li>
                    <li>
                        <div class="comment-item g-inline-justify">
                            <span class="comment-name g-user-select"><a href="https://yaoyuan.vip" target="_blank" rel="nofollow noopener noreferrer">姚远</a></span>
                            <span class="comment-text allow g-user-select">新年快乐，哥.....无法直视这个称呼了</span>
                        </div>
                        <div class="comment-item g-inline-justify">
                            <span class="comment-name g-user-select"><a href="https://kam.zone" target="_blank" rel="nofollow noopener noreferrer">Kam</a></span>
                            <span class="comment-reply">回复</span><span class="comment-name">姚远</span>
                            <span class="comment-text allow g-user-select">你也是，新年快乐。</span>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
</article>
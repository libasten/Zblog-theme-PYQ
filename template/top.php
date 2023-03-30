<div class="header">
  <div class="header-background" style="background-image:url({$zbp->Config('FriendCircle')->topBackground})">
    <div class="tool-right">
      <div class="search-tool" title="搜索" onclick="showSearch()"></div>
      <div class="camera-tool" title="登录管理" onclick="window.location.href ='{$zbp->host}zb_system/login.php'"></div>
    </div>
    {if $type!='index'}
    <div class="tool-left">
      <div class="back-tool" title="返回" onclick="window.history.go(-1)"></div>
    </div>
    {/if}
  </div>
  <div class="brand clear">
    <div class="name g-left g-txt-ellipsis g-user-select">
      <a href="{$host}">{$name}</a>
    </div>
    <div class="avatar g-right">
      <img src="{$zbp->Config('FriendCircle')->avatar}" alt="avatar" />
    </div>
  </div>
  <div class="subinfo g-txt-ellipsis g-user-select">{$subname}</div>
</div>
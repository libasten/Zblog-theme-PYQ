<div class="header">
  <div class="header-background" style="background-image:url({$zbp->Config('FriendCircle')->topBackground})">
    <div class="tool-right">
      <div class="search-tool" title="搜索" data-toggle="modal" data-target="#searchDialog"></div>
      <div class="camera-tool" title="登录管理" data-toggle="modal" data-target="#contorPanelDialog"></div>
    </div>
    <div class="tool-left">
      <div class="nav-tool" title="导航" data-toggle="modal" data-target="#navbarDialog"></div>
    </div>
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
  <!-- 控制面板弹窗 -->
  <div class="modal fade" id="contorPanelDialog" tabindex="-1" aria-labelledby="controlPanelModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width:450px">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="controlPanelModalLabel">管理面板</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="padding-bottom:25px;">
          {module:controlpanel}
        </div>
      </div>
    </div>
  </div>
  <!-- 搜索弹窗 -->
  <div class="modal fade" id="searchDialog" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width:450px">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="searchModalLabel">内容搜索</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="padding-bottom:30px;">
          <form action="zb_system/cmd.php?act=search" method="post" id="search" class="form-search">
            <div class="input-group">
              <input type="text" name="q" placeholder="请输入搜索关键字..." class="search-input form-control" required />
              <div class="input-group-append">
                <span class="input-group-text btn-search" onclick="document.getElementById('search').submit();return false;">搜索</span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- 导航弹窗 -->
  <div class="modal fade" id="navbarDialog" tabindex="-1" aria-labelledby="controlPanelModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width:250px">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="controlPanelModalLabel">网站导航</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="padding-bottom:25px;">
          {module:navbar}
        </div>
      </div>
    </div>
  </div>
</div>
<?php /* EL PSY CONGROO */ /* EL PSY CONGROO */
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';
$zbp->Load();
$action = 'root';
if (!$zbp->CheckRights($action)) {
	$zbp->ShowError(6);
	die();
}
if (!$zbp->CheckPlugin('FriendCircle')) {
	$zbp->ShowError(48);
	die();
}

$blogtitle = '朋友圈主题设置';

if (count($_POST) > 0) {
	CheckIsRefererValid();
	$zbp->Config('FriendCircle')->keywords = $_POST['keywords'];
	$zbp->Config('FriendCircle')->description = $_POST['description'];
	$zbp->Config('FriendCircle')->favicon = $_POST['favicon'];
	$zbp->Config('FriendCircle')->avatar = $_POST['avatar'];
	$zbp->Config('FriendCircle')->topBackground = $_POST['topBackground'];
	$zbp->Config('FriendCircle')->fullArticle = $_POST['fullArticle'];
	$zbp->Config('FriendCircle')->readMore = $_POST['readMore'];
	$zbp->SaveConfig('FriendCircle');
	$zbp->BuildTemplate();
	$zbp->SetHint('good');
	Redirect('./editor.php');
}

require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';
?>

<?php
if ($zbp->CheckPlugin('UEditor')) {
?>
	<script type="text/javascript" src="<?php echo $zbp->host; ?>zb_users/plugin/UEditor/ueditor.config.php"></script>
	<script type="text/javascript" src="<?php echo $zbp->host; ?>zb_users/plugin/UEditor/ueditor.all.min.js"></script>
	<script src="script/custom.js" type="text/javascript"></script>
<?php
}
?>

<div id="divMain" style="padding-left:6px;">
	<div class="divHeader"><?php echo $blogtitle; ?></div>
	<div class="SubMenu">
	</div>
	<div id="divMain2">
		<form id="edit" name="edit" method="post" action="#">
			<input type="hidden" name="csrfToken" value="<?php echo $zbp->GetCSRFToken() ?>">
			<div class="content-box">
				<div class="content-box-header">
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab  current"><span>基础设置</span></a></li>
						<li><a href="#tab2" class=""><span>SEO设置</span></a></li>
						<li><a href="#tab3" class=""><span>主题说明</span></a></li>
					</ul>
					<div class="clear"></div>
				</div>
				<div class="content-box-content">
					<div class="tab-content default-tab" style="border: none; padding: 0px; margin: 0px; display: block;" id="tab1">
						<table style="padding:0px;margin:0px;width:100%;" class="table_hover table_striped">
							<tbody>
								<tr>
									<td>
										<p><b>列表页是否全文输出</b><br><span class="note">开启后，文章列表页不再以文章摘要形式展示。</span></p>
									</td>
									<td>
										<input id="fullArticle" name="fullArticle" class="checkbox" type="text" value="<?php echo (bool) $zbp->Config('FriendCircle')->fullArticle; ?>" size="100" /><br />
									</td>
								</tr>
								<tr>
									<td>
										<p><b>列表页是否自动折叠</b><br><span class="note">只有在开启全文情况下有效<br />开启后，列表自动添加“阅读全文”的按钮。</span></p>
									</td>
									<td>
										<input id="readMore" name="readMore" class="checkbox" type="text" value="<?php echo (bool) $zbp->Config('FriendCircle')->readMore; ?>" size="100" /><br />
									</td>
								</tr>
								<tr>
									<td width="300px">
										<p><b>站长头像</b><br><span class="note">需要时正方形，最佳尺寸 100px * 100px 。</span></p>
									</td>
									<td>
										<p>
											<img id="pic_updatapic1" src="<?php echo $zbp->Config('FriendCircle')->avatar ?>" width="60" height="60" style="border:1px #afafaf solid;margin-bottom:-9px;">
											<input id="updatapic1" name="btn" type="button" class="button btn-upload-img" value="更换图片" />
										<div>图片路径：</div>
										<input type="text" id="url_updatapic1" name="avatar" style="width:100%" value="<?php echo $zbp->Config('FriendCircle')->avatar ?>" />
										</p>
									</td>
								</tr>
								<tr>
									<td>
										<p><b>头部背景图</b><br><span class="note">顶部大背景图，最佳尺寸800px * 400px 。</span></p>
									</td>
									<td>
										<p>
											<img id="pic_updatapic2" src="<?php echo $zbp->Config('FriendCircle')->topBackground ?>" width="200" height="100" style="border:1px #afafaf solid;margin-bottom:-9px;">
											<input id="updatapic2" name="btn" type="button" class="button btn-upload-img" value="更换图片" />
										<div>图片路径：</div>
										<input type="text" id="url_updatapic2" name="topBackground" style="width:100%" value="<?php echo $zbp->Config('FriendCircle')->topBackground ?>" />
										</p>
									</td>
								</tr>
								<tr>
									<td>
										<p><b>favicon</b><br><span class="note">收藏夹图标，如您不了解可不作修改。<br/> 最佳尺寸32 * 32</p>
									</td>
									<td>
										<p>
											<img id="pic_updatapic3" src="<?php echo $zbp->Config('FriendCircle')->favicon ?>" width="50" height="50" style="border:1px #afafaf solid;margin-bottom:-9px;">
											<input id="updatapic3" name="btn" type="button" class="button btn-upload-img" value="更换图片"  />
										<div>图片路径：</div>
										<input type="text" id="url_updatapic3" name="favicon" style="width:100%" value="<?php echo $zbp->Config('FriendCircle')->favicon ?>" />
										</p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="tab-content" style="border: none; padding: 0px; margin: 0px; display: none;" id="tab2">
						<table style="padding:0px;margin:0px;width:100%;" class="table_hover table_striped">
							<tbody>
								<tr>
									<td class="td25">
										<p><b>首页关键字（keywords）：</b><br><span class="note">关键词请用半角（半角）逗号隔开，不要出现引号和html标签。</span></p>
									</td>
									<td>
										<p><input type="text" name="keywords" value="<?php echo $zbp->Config('FriendCircle')->keywords; ?>" style="width:100%;" /></p>
									</td>
								</tr>
								<tr>
									<td class="td25">
										<p><b>网站描述（description）：</b><br><span class="note">建议不要超过200个字，不要出现引号和html标签。</span></p>
									</td>
									<td>
										<p><textarea name="description" id="" rows="4" style="width:100%;font-family: Arial;"><?php echo $zbp->Config('FriendCircle')->description; ?></textarea></p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="tab-content " style="border: none; padding: 0px; margin: 0px; display: none;" id="tab3">
						<table style="padding:0px;margin:0px;width:100%;" class="table_hover table_striped">
							<tr>
								<td>0. 若要发布文字较多的文章，并需在列表页中全文输出，建议在“基础设置”中开启自动折叠功能。</td>
							</tr>
							<tr>
								<td>1. 头像左侧的名称为后台“网站设置”中的网站标题，头像下侧的浅黑色“签名档”是网站副标题。</td>
							</tr>
							<tr>
								<td>2. 本主题头部的头像和背景图在顶部在主题设置的“基础设置”中修改。</td>
							</tr>
							<tr>
								<td>3. 页面列表中头像右侧的名称优先显示用户“别名”，在后台“用户管理”中设置。</td>
							</tr>
							<tr>
								<td>4. 每篇文章末尾的定位，要在发表文章的时候自行设定，在“新建文章”的标题下方任意输入地点名称。</td>
							</tr>
							<tr>
								<td>5. 默认字体是鸿蒙字体，如果发表文章时候没有自定设定，则以鸿蒙字体显示。</td>
							</tr>
							<tr>
								<td>本主题可能有些地方不是100%贴合您的需求，如有二次开发的需求，可通过<a href="https://www.feidaoboke.com/"> 飞刀博客 </a>，欢迎联系飞刀本人进行定制。</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<input type="submit" class="button" value="提交保存" style="margin:26px 0 6px 0" />
		</form>
		<!-- 这个隐藏的内容用于激活UE编辑器，因为这里要调用图片上传功能 -->
		<textarea name="ueimg" id="ueimg" style="display:none"></textarea>
	</div>
</div>
<style>

</style>

<?php
require $blogpath . 'zb_system/admin/admin_footer.php';
RunTime();
?>
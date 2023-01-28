<?php /* EL PSY CONGROO */ /* EL PSY CONGROO */
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';
$zbp->Load();
$action = 'root';
if (!$zbp->CheckRights($action)) {
	$zbp->ShowError(6);
	die();
}
if (!$zbp->CheckPlugin('PengYouQuan')) {
	$zbp->ShowError(48);
	die();
}

$blogtitle = 'PengYouQuan 主题';

if (count($_POST) > 0) {
	CheckIsRefererValid();
	$zbp->Config('PengYouQuan')->keywords = $_POST['keywords'];
	$zbp->Config('PengYouQuan')->description = $_POST['description'];
	$zbp->Config('PengYouQuan')->isImgLogo = $_POST['isImgLogo'];
	$zbp->Config('PengYouQuan')->logo = $_POST['logo'];
	$zbp->Config('PengYouQuan')->favicon = $_POST['favicon'];
	$zbp->SaveConfig('PengYouQuan');
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
						<li><a href="#tab1" class="default-tab current"><span>基础设置</span></a></li>
						<li><a href="#tab2" class=""><span>SEO设置</span></a></li>
						<li><a href="#tab3" class=""><span>关于主题</span></a></li>
					</ul>
					<div class="clear"></div>
				</div>
				<div class="content-box-content">
					<div class="tab-content default-tab" style="border: none; padding: 0px; margin: 0px; display: block;" id="tab1">
						<table style="padding:0px;margin:0px;width:100%;" class="table_hover table_striped">
							<tbody>
								<tr>
									<td class="td25">
										<p><b>是否用图片做Logo</b><br><span class="note">关闭后，显示网站名称文本。</span></p>
									</td>
									<td>
										<p><?php
											if ($zbp->Config('PengYouQuan')->isImgLogo == 1) {
												echo '<input type="text" name="isImgLogo" id="isImgLogo" class="checkbox" value="1"/>';
											} else {
												echo '<input type="text" name="isImgLogo" id="isImgLogo" class="checkbox" value="0"/>';
											}
											?>
										</p>
									</td>
								</tr>
								<tr>
									<td>
										<p><b>站点Logo</b><br><span class="note">仅在上一行开关打开的情况下有效。</span></p>
									</td>
									<td>
										<p>
											<img id="pic_updatapic1" src="<?php echo $zbp->Config('PengYouQuan')->logo ?>"  width="170" height="60" style="border:1px #6f6f6f solid;"><span class="note"> 最佳尺寸170 * 60</span><br />
											<input id="updatapic1" name="btn" type="button" class="button btn-upload-img" value="更换图片" style="margin:5px 0 6px 0;" />
											<div>图片路径：</div>
											<input type="text" id="url_updatapic1" name="logo" style="width:100%" value="<?php echo $zbp->Config('PengYouQuan')->logo ?>" />
										</p>
									</td>
								</tr>
								<tr>
									<td>
										<p><b>favicon</b><br><span class="note">收藏夹图标，格式为ico，如您不了解可不作修改。</span></p>
									</td>
									<td>
										<p>
											<img id="pic_updatapic2" src="<?php echo $zbp->Config('PengYouQuan')->favicon ?>"  width="32" height="32" style="border:1px #6f6f6f solid;"><span class="note"> 最佳尺寸32 * 32</span><br />
											<input id="updatapic2" name="btn" type="button" class="button btn-upload-img" value="更换图片" style="margin:5px 0 6px 0;" />
											<div>图片路径：</div>
											<input type="text" id="url_updatapic2" name="favicon" style="width:100%" value="<?php echo $zbp->Config('PengYouQuan')->favicon ?>" />
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
										<p><input type="text" name="keywords" value="<?php echo $zbp->Config('PengYouQuan')->keywords; ?>" style="width:100%;" /></p>
									</td>
								</tr>
								<tr>
									<td class="td25">
										<p><b>网站描述（description）：</b><br><span class="note">建议不要超过200个字，不要出现引号和html标签。</span></p>
									</td>
									<td>
										<p><textarea name="description" id="" rows="4" style="width:100%;font-family: Arial;"><?php echo $zbp->Config('PengYouQuan')->description; ?></textarea></p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="tab-content" style="border: none; padding: 0px; margin: 0px; display: none;" id="tab3">
						<table style="padding:0px;margin:0px;width:100%;" class="table_hover table_striped">
							<tr>
								<td>本主题为<a href="https://www.feidaobokecom/"> 飞刀博客 </a>作者用主题，长期维护和更新，希望您使用愉快。</td>
							</tr>
							<tr>
								<td>本主题可能有些地方不是100%贴合您的需求，如有二次开发的需求，可通过<a href="https://www.feidaobokecom/"> 飞刀博客 </a>，欢迎联系飞刀本人进行定制。</td>
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

<?php
require $blogpath . 'zb_system/admin/admin_footer.php';
RunTime();
?>
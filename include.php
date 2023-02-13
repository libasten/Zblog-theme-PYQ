<?php

RegisterPlugin("FriendCircle", "ActivePlugin_FriendCircle");

function ActivePlugin_FriendCircle()
{
    Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu', 'FriendCircle_AddMenu');
    Add_Filter_Plugin('Filter_Plugin_Edit_Response5', 'FriendCircle_Filter_Plugin_Edit_Response5');
}

// 在顶部添加菜单    	    	 	    	 	     
function FriendCircle_AddMenu(&$m)
{
    global $zbp;
    $m[] = MakeTopMenu("root", '朋友圈 - 主题设置', $zbp->host . "zb_users/theme/FriendCircle/editor.php", "", "topmenu_FriendCircle", "icon-nut-fill");
}

function FriendCircle_Filter_Plugin_Edit_Response5()
{
    global $zbp, $article;
    echo '<div class="editmod"><label for="editor_content" class="editinputname">文章定位（样例：上海市·外滩28号）</label><br>
    <input name="meta_location" id="articleLocation" maxlength="100" type="text" style="width:99%;margin:5px 0 0 0;" value="' . $article->Metas->location . '" />
    </div>';
}

function InstallPlugin_FriendCircle()
{
    global $zbp;
    if (!$zbp->HasConfig('FriendCircle')) {
        $zbp->Config('FriendCircle')->favicon = $zbp->host . 'zb_users/theme/FriendCircle/style/img/favicon.png';
        $zbp->Config('FriendCircle')->avatar = $zbp->host . 'zb_users/theme/FriendCircle/style/img/avatar.jpg';
        $zbp->Config('FriendCircle')->topBackground = $zbp->host . 'zb_users/theme/FriendCircle/style/img/topBackground.jpg';
        $zbp->Config('FriendCircle')->description = '朋友圈样式网站';
        $zbp->Config('FriendCircle')->keywords = '博客,网站,朋友圈';
        $zbp->SaveConfig('FriendCircle');
    }
}

function UninstallPlugin_FriendCircle()
{
}

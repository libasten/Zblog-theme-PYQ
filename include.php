<?php

RegisterPlugin("PengYouQuan", "ActivePlugin_PengYouQuan");

function ActivePlugin_PengYouQuan()
{
    Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu', 'PengYouQuan_AddMenu');
    Add_Filter_Plugin('Filter_Plugin_Edit_Response5', 'PengYouQuan_Filter_Plugin_Edit_Response5');
}

// 在顶部添加菜单    	    	 	    	 	     
function PengYouQuan_AddMenu(&$m)
{
    global $zbp;
    $m[] = MakeTopMenu("root", '朋友圈 - 主题设置', $zbp->host . "zb_users/theme/PengYouQuan/editor.php", "", "topmenu_PengYouQuan", "icon-nut-fill");
}

function PengYouQuan_Filter_Plugin_Edit_Response5()
{
    global $zbp, $article;
    echo '<div class="editmod"><label for="editor_content" class="editinputname">文章定位（样例：上海市·外滩28号）</label><br>
    <input name="meta_location" id="articleLocation" maxlength="100" type="text" style="width:99%;margin:5px 0 0 0;" value="' . $article->Metas->location . '" />
    </div>';
}

function InstallPlugin_PengYouQuan()
{
    global $zbp;
    if (!$zbp->HasConfig('PengYouQuan')) {
        $zbp->Config('PengYouQuan')->favicon = $zbp->host . 'zb_users/theme/PengYouQuan/style/img/favicon.png';
        $zbp->Config('PengYouQuan')->avatar = $zbp->host . 'zb_users/theme/PengYouQuan/style/img/avatar.jpg';
        $zbp->Config('PengYouQuan')->topBackground = $zbp->host . 'zb_users/theme/PengYouQuan/style/img/topBackground.jpg';
        $zbp->Config('PengYouQuan')->description = '朋友圈样式网站';
        $zbp->Config('PengYouQuan')->keywords = '博客,网站,朋友圈';
        $zbp->SaveConfig('PengYouQuan');
    }
}

function UninstallPlugin_PengYouQuan()
{
}

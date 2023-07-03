<?php

RegisterPlugin("FriendCircle", "ActivePlugin_FriendCircle");

function ActivePlugin_FriendCircle()
{
    Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu', 'FriendCircle_AddMenu');
    Add_Filter_Plugin('Filter_Plugin_Edit_Response5', 'FriendCircle_Filter_Plugin_Edit_Response5');
    // 挂接灯箱插件脚本和样式
    Add_Filter_Plugin('Filter_Plugin_Zbp_MakeTemplatetags', 'FriendCircle_MakeTemplatetags');
}
function FriendCircle_MakeTemplatetags()
{
    global $zbp;
    $zbp->header .= '<style type="text/css">span.view-image{cursor:zoom-in;}</style>';
    $zbp->footer .= '<script src="' . $zbp->host . 'zb_users/theme/FriendCircle/script/view-image.min.js"></script>';
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
    if (!$zbp->CheckPlugin('UEditor')) {
        $ueUrl = $zbp->host . 'zb_users/plugin/AppCentre/main.php?id=228';
        $pCUrl = $zbp->host . 'zb_system/cmd.php?act=PluginMng';
        $zbp->ShowHint('bad', '请<b>安装</b><a href="' . $ueUrl . '"> UEditor编辑器 </a> 插件！');
        $zbp->ShowHint('bad', '如已安装，请到<a href="' . $pCUrl . '"> 插件管理 </a>中<b>启用</b>！');
        die();
    }
    echo '<div class="editmod"><label for="editor_content" class="editinputname">文章定位（样例：上海市·外滩28号）</label><br>
    <input name="meta_location" id="articleLocation" type="text" style="width:99%;margin:5px 0 0 0;font-size:0.9rem;color:#33e;padding:6px 0 6px 6px;" value="' . $article->Metas->location . '" />
    </div>';
    $blankPicHolder = $zbp->host . 'zb_users/theme/FriendCircle/style/img/placeholder_120x120.png';
    echo <<<HTML
    <div class="np">
        <div name="gridImg" id="gridImg" style="display:none"></div>
        <div class="np-title" onclick="togglePics()">九宫格图片 · 点击展开</div>
        <div class="np-info">默认最多支持发布9张图片，如发不满，需从1-9依次上传，后面的留空即可。
            <br>如您需要发3张图片，则上传1~3号图片，4~9号留空。
            <br>和发微信朋友圈一样，上传了图片或者视频，在文章正文中就<b>不要再插入图片了</b>！当然，你可以添加，但是体检会不好。
        </div>
        <div class="pics-wrapper">
            <div class="pic-div">
                <div class="pic-box">
                    <img id="pic_upGridPic1" src="{$article->Metas->gridPic1}" class="image-wrapper"/>
                </div>
                <div class="pic-info-ctrl">
                    <div class="pic-index">图片 1</div>
                    <input type="button" id="upGridPic1" class="button btn-upload-img" name="btn"  value="上传图片" />
                    <input type="button" id="removeGridPic1" class="button btn-remove-img" name="btn" value="移除图片" />
                    <input type="text" id="url_upGridPic1" class="pic-path" name="meta_gridPic1" value="{$article->Metas->gridPic1}" placeholder="图片路径" />
                </div>
            </div>
            <div class="pic-div">
                <div class="pic-box">
                    <img id="" src="{$article->Metas->gridPic2}" class="image-wrapper"/>
                </div>
                <div class="pic-info-ctrl">
                    <div class="pic-index">图片 2</div>
                    <input  type="button" id="upGridPic2" class="button btn-upload-img " name="btn"  value="上传图片" />
                    <input  type="button" id="removeGridPic2" class="button btn-remove-img" name="btn"  value="移除图片" />
                    <input type="text" id="urlGridPic2" class="pic-path" name="meta_gridPic2" value="{$article->Metas->gridPic2}" placeholder="图片路径" />
                </div>
            </div>
            <div class="pic-div">
                <div class="pic-box">
                    <img id="" src="{$article->Metas->gridPic3}" class="image-wrapper"/>
                </div>
                <div class="pic-info-ctrl">
                    <div class="pic-index">图片 3</div>
                    <input  type="button" id="upGridPic3" class="button btn-upload-img " name="btn"  value="上传图片" />
                    <input  type="button" id="removeGridPic3" class="button btn-remove-img" name="btn"  value="移除图片" />
                    <input type="text" id="urlGridPic3" class="pic-path" name="meta_gridPic3" value="{$article->Metas->gridPic3}" placeholder="图片路径" />
                </div>
            </div>
            <div class="pic-div">
                <div class="pic-box">
                    <img id="" src="{$article->Metas->gridPic4}" class="image-wrapper"/>
                </div>
                <div class="pic-info-ctrl">
                    <div class="pic-index">图片 4</div>
                    <input  type="button" id="upGridPic4" class="button btn-upload-img " name="btn"  value="上传图片" />
                    <input  type="button" id="removeGridPic4" class="button btn-remove-img" name="btn"  value="移除图片" />
                    <input type="text" id="urlGridPic4" class="pic-path" name="meta_gridPic4" value="{$article->Metas->gridPic4}" placeholder="图片路径" />
                </div>
            </div>
            <div class="pic-div">
                <div class="pic-box">
                    <img id="" src="{$article->Metas->gridPic5}" class="image-wrapper"/>
                </div>
                <div class="pic-info-ctrl">
                    <div class="pic-index">图片 5</div>
                    <input  type="button" id="upGridPic5" class="button btn-upload-img " name="btn"  value="上传图片" />
                    <input  type="button" id="removeGridPic5" class="button btn-remove-img" name="btn"  value="移除图片" />
                    <input type="text" id="urlGridPic5" class="pic-path" name="meta_gridPic5" value="{$article->Metas->gridPic5}" placeholder="图片路径" />
                </div>
            </div>
            <div class="pic-div">
                <div class="pic-box">
                    <img id="" src="{$article->Metas->gridPic6}" class="image-wrapper"/>
                </div>
                <div class="pic-info-ctrl">
                    <div class="pic-index">图片 6</div>
                    <input  type="button" id="upGridPic6" class="button btn-upload-img " name="btn"  value="上传图片" />
                    <input  type="button" id="removeGridPic6" class="button btn-remove-img" name="btn"  value="移除图片" />
                    <input type="text" id="urlGridPic6" class="pic-path" name="meta_gridPic6" value="{$article->Metas->gridPic6}" placeholder="图片路径" />
                </div>
            </div>
            <div class="pic-div">
                <div class="pic-box">
                    <img id="" src="{$article->Metas->gridPic7}" class="image-wrapper"/>
                </div>
                <div class="pic-info-ctrl">
                    <div class="pic-index">图片 7</div>
                    <input  type="button" id="upGridPic7" class="button btn-upload-img " name="btn"  value="上传图片" />
                    <input  type="button" id="removeGridPic7" class="button btn-remove-img" name="btn"  value="移除图片" />
                    <input type="text" id="urlGridPic7" class="pic-path" name="meta_gridPic7" value="{$article->Metas->gridPic7}" placeholder="图片路径" />
                </div>
            </div>
            <div class="pic-div">
                <div class="pic-box">
                    <img id="" src="{$article->Metas->gridPic8}" class="image-wrapper"/>
                </div>
                <div class="pic-info-ctrl">
                    <div class="pic-index">图片 8</div>
                    <input  type="button" id="upGridPic8" class="button btn-upload-img " name="btn"  value="上传图片" />
                    <input  type="button" id="removeGridPic8" class="button btn-remove-img" name="btn"  value="移除图片" />
                    <input type="text" id="urlGridPic8" class="pic-path" name="meta_gridPic8" value="{$article->Metas->gridPic8}" placeholder="图片路径" />
                </div>
            </div>
            <div class="pic-div">
                <div class="pic-box">
                    <img id="gridImg1" src="{$article->Metas->gridPic9}" class="image-wrapper"/>
                </div>
                <div class="pic-info-ctrl">
                    <div class="pic-index">图片 9</div>
                    <input  type="button" id="upGridPic9" class="button btn-upload-img " name="btn"  value="上传图片" />
                    <input  type="button" id="removeGridPic9" class="button btn-remove-img" name="btn"  value="移除图片" />
                    <input type="text" id="urlGridPic9" class="pic-path" name="meta_gridPic9" value="{$article->Metas->gridPic9}" placeholder="图片路径" />
                </div>
            </div>
        </div>
    </div>
    <style>
        .np-title{padding-left:3px; line-height: 1em; font-size: 1.1em; font-weight: bold; margin-bottom:5px; cursor: pointer;}
        .np-info{display:none;padding-left:4px; margin-bottom:10px; line-height:1.6rem;}
        .np-info b{font-weight:700;color:#ee0000;}
        .pics-wrapper .pic-div {
            display:flex;
            width:99%;
            /* max-height: 0; */
            margin-bottom: 0px; 
            padding-bottom: 0px; 
            border-bottom: 0px dotted #ccc;
            overflow: hidden;
        }
        .pics-wrapper.show .pic-div {
            max-height: 500px; /* 根据实际需要调整最大高度 */
            margin-bottom: 10px; 
            padding-bottom: 10px; 
            border-bottom: 1px dotted #ccc;
        }
        .pic-box{flex-shrink: 0; flex-basis: 100px ;height:100px;position: relative;}
        .pic-box img{border:1px; width:100%; height:100%;padding:2px;position: relative;object-fit: cover;}
        .pic-box img:after {position: absolute ;top:0px; left:0px; content: ""; display: block; width: 100%;height: 100%;
        background-image: url($blankPicHolder); background-color:#fff; background-position: center; background-repeat: no-repeat;}
        .pic-info-ctrl{height:100px; flex-grow:1; margin-left:5px;position: relative;}
        .pic-info-ctrl .pic-index{position:absolute; bottom:76px;font-size:1rem;}
        .pic-info-ctrl .btn-upload-img{display:block;position:absolute; bottom:40px;font-size:0.9rem;}
        .pic-info-ctrl .btn-remove-img{display:block;position:absolute; bottom:40px;left:100px;font-size:0.9rem;background-color:#d55;border:0px;}
        .pic-info-ctrl .btn-remove-img:hover{background-color:#f11;}
        .pic-info-ctrl .pic-path{display:block;width: 100%;position:absolute; bottom:3px;font-size:0.9rem;padding:6px 2px;}
    </style>
    <script>
        // 展开收起图片区域
        function togglePics() {
            var picsWrapper = document.querySelector(".pics-wrapper");
            var title = document.querySelector(".np-title");
            var info = document.querySelector(".np-info");
            if (picsWrapper.classList.contains("show")) {
                // 如果图片内容元素可见，则收起它
                picsWrapper.classList.remove("show");
                title.innerHTML = "九宫格图片 · 点击展开";
                info.style.display = "none";
            } else {
                // 如果图片内容元素不可见，则展开它
                picsWrapper.classList.add("show");
                title.innerHTML = "九宫格图片 · 点击收起";
                info.style.display = "block";
            }
        }
        var gridEditorImage;
        var d, e;
        gridEditorImage = UE.getEditor('gridImg');
        gridEditorImage.ready(function () {
            gridEditorImage.hide();
        });
        // 打开窗体
        function upImage() {
            d = gridEditorImage.getDialog("insertimage");
            d.render();
            d.open();
        }
        // 点击上传图片
        $(".btn-upload-img").click(function () {
            upImage();
            e = $(this).attr("id");
            gridEditorImage.addListener('beforeInsertImage', function (t, arg) {
                $("#url_" + e).val(arg[0].src);
                $("#pic_" + e).attr("src", arg[0].src + "?" + Math.random());
            })
        });
        // 删除图片
    </script>
    HTML;
}

function InstallPlugin_FriendCircle()
{
    global $zbp;
    if (!$zbp->HasConfig('FriendCircle')) {
        $zbp->Config('FriendCircle')->fullArticle = "1";
        $zbp->Config('FriendCircle')->readMore = "1";
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

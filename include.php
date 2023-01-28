<?php
	  	    	 			  	
RegisterPlugin("PengYouQuan","ActivePlugin_PengYouQuan");    		  				    				   	
    	  	  		    				 			
function ActivePlugin_PengYouQuan() {    				 			     			  		
    Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu','PengYouQuan_AddMenu');    		 	  		    		    		
    Add_Filter_Plugin('Filter_Plugin_Edit_Response5','PengYouQuan_Filter_Plugin_Edit_Response5');    		     	    			   		
}       	        							 

// 在顶部添加菜单    	    	 	    	 	     
function PengYouQuan_AddMenu(&$m){    				        	 		 	  
    global $zbp;       	 	       	  	 	 
    $m[] = MakeTopMenu("root", '朋友圈样式主题设置', $zbp->host . "zb_users/theme/PengYouQuan/editor.php", "", "topmenu_PengYouQuan","icon-nut-fill");    			         			 	   
}

function PengYouQuan_Filter_Plugin_Edit_Response5(){     		  		       	   		
    global $zbp, $article;    			  		     				 	  
    echo "<script type=\"text/javascript\" src=\"{$zbp->host}zb_users/theme/PengYouQuan/script/lib.upload.js\"></script>";
	echo '<div class="uploadimg" style="width:80%; height:100%;float:left;border-bottom:1px solid #ddd;margin-bottom:16px;">
    <label for="editor_content" class="editinputname">封面缩略图地址</label><br>
    <input name="meta_fdsImage" id="edtTitle" type="text" class="uplod_img" maxwidth="100" value="'.$article->Metas->fdsImage.'" />
    <strong class="button" style="color: #fff; padding: 6px 18px 6px 18px;margin: 0.5em 0;
        background: #3a6ea5;border: 1px solid #3399cc;cursor: pointer;display: block; height: 32px;width: 122px;">浏览上传图片</strong>
    </div>
    <div style="width:20%;float:right;border-left:1px solid #ddd;padding-left:10px;border-bottom:1px solid #ddd;padding-left:10px;height: 102px;">
    <label for="editor_content" class="editinputname">封面缩略图</label><br>
    <a href="'.$article->Metas->fdsImage.'" target="_blank">
        <img id="preview" src="'.$article->Metas->fdsImage.'" max-width="95%" style="height:76px">
    </a></div>';
}
    		 	      			 			 
function InstallPlugin_PengYouQuan() {     	 	 		       	    	
    global $zbp;
    if(!$zbp->HasConfig('PengYouQuan')){
		$zbp->Config('PengYouQuan')->description = '博客网站';
        $zbp->Config('PengYouQuan')->keywords = '博客,网站';
        $zbp->Config('PengYouQuan')->isImgLogo = 1;
        $zbp->Config('PengYouQuan')->logo = $zbp->host . 'zb_users/theme/PengYouQuan/style/img/logo.png';
        $zbp->Config('PengYouQuan')->favicon = $zbp->host . 'zb_users/theme/PengYouQuan/style/img/favicon.ico';
        $zbp->Config('PengYouQuan')->avatar = $zbp->host . 'zb_users/theme/PengYouQuan/style/img/avatar.jpg';
        $zbp->Config('PengYouQuan')->topBackground = $zbp->host . 'zb_users/theme/PengYouQuan/style/img/topBackground.jpg';
		$zbp->SaveConfig('PengYouQuan');
    }
}    	 	 	 		      	  			

function UninstallPlugin_PengYouQuan() {}
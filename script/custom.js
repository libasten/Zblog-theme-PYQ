$(document).ready(function () {
  //这个地方是高亮当前选中的类别的，修改divNavBar a中的 on class即可。
  var s = document.location
  $(".nav-menu ul li a").each(function () {
    if (this.href == s.toString().split("#")[0]) {
      $(this).addClass("on")
      return false
    }
  })
  //   go to top
  var scroller = $('.rollbar');
  $(window).scroll(function () {
    var h = document.documentElement.scrollTop + document.body.scrollTop;
    h > 100 ? scroller.fadeIn() : scroller.fadeOut();
  })

  $('.menu-btn').click(function () {
    $('.nav-menu').slideToggle(200);
    $('.menu-btn').toggleClass('open')
  });
  // 插入图片
  // 检测UEditor插件是否存在
  if ('UE' in window) {
    var myEditorImage;
    var d, e;
    myEditorImage = UE.getEditor('ueimg');
    myEditorImage.ready(function () {
      myEditorImage.hide();
    });

    function upImage() {
      d = myEditorImage.getDialog("insertimage");
      d.render();
      d.open();
    }
    $(".btn-upload-img").click(function () {
      upImage();
      e = $(this).attr("id");
      myEditorImage.addListener('beforeInsertImage', function (t, arg) {
        $("#url_" + e).val(arg[0].src);
        $("#pic_" + e).attr("src", arg[0].src + "?" + Math.random());
      })
    });
  } else {
    $("#updatapic1").click(function () {
      alert("请先启用UEditor插件！");
    });
  }
});


// 动态显示评价框
zbp.plugin.unbind("comment.reply.start", "system")
zbp.plugin.on("comment.reply.start", "FriendCircle", function (id) {
  var i = id
  $("#inpRevID").val(i)
  var frm = $('#divCommentPost')
  var cancel = $("#cancel-reply")

  frm.before($("<div id='temp-frm' style='display:none'>")).addClass("reply-frm")
  $('#AjaxComment' + i).before(frm)

  cancel.show().click(function () {
    var temp = $('#temp-frm')
    $("#inpRevID").val(0)
    if (!temp.length || !frm.length) return
    temp.before(frm)
    temp.remove()
    $(this).hide()
    frm.removeClass("reply-frm")
    return false
  })
  try {
    $('#txaArticle').focus()
  } catch (e) {

  }
  return false
})


zbp.plugin.on("comment.got", "FriendCircle", function () {
  $("#cancel-reply").click()
})

zbp.plugin.on("comment.post.success", "FriendCircle", function () {
  $("#cancel-reply").click()
})

zbp.plugin.on("comment.post.start", "FriendCircle", function () {
  $("#inpId").parent("form").find(":submit").val("提交中...");
})
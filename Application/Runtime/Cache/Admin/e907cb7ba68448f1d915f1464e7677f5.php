<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
    <script language="JavaScript" src="/Public/Admin/js/jquery.js"></script>
</head>

<body>
    <div class="place">
        <span>位置：</span>
        <?php echo ($locate); ?>
    </div>
    <div class="formbody">
        <div class="formtitle"><span>商品相册</span></div>
        <li style="border: 1px solid grey;margin-bottom: 20px;">
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><span><img src="<?php echo (ltrim($vol["pics_mid"],'.')); ?>" height="178"><a href="javascript:;" data='<?php echo ($vol["pics_id"]); ?>' class="del">[-]</a>&emsp;</span><?php endforeach; endif; else: echo "" ;endif; ?>
        </li>
        <form action="" method="post" enctype="multipart/form-data">
            <ul class="forminfo">
                <li>
                    <label>商品图片[<a href="javascript:;" class="add">+</a>]</label>
                    <input name="goods_pic[]" type="file" />
                </li>
                <li>
                    <label>&nbsp;</label>
                    <input name="" id="btnSubmit" type="button" class="btn" value="确认保存" />
                </li>
            </ul>
        </form>
    </div>
</body>
<script type="text/javascript">
$(function() {
    $('#btnSubmit').on('click', function () {
        $('form').submit();
    });
    $('.add').click(function(){
        var li = "<li><label>商品图片[<a href='javascript:;' class='remove' >-</a>]</label><input name='goods_pic[]' type='file' /></li>";
        $(this).parent().parent().after(li);
    });
    $(document).on('click','.remove',function(){
        $(this).parent().parent().remove();
    });
    $('.del').click(function(){
        var pics_id=$(this).attr('data');
        var _this=this;
        $.get('/index.php/Admin/Goods/delPics/pics_id/'+pics_id,function(data){
            if (data == '0'){
                $(_this).parent().remove();
            }else{
                alert('删除失败');
            }
        });
    });
});
</script>
</html>
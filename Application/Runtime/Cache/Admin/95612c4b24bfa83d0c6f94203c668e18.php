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
        <div class="formtitle"><span>基本信息</span></div>
        <form action="" method="post">
            <ul class="forminfo">
                <li>
                    <label>分类名称</label>
                    <input name="type_name" placeholder="请输入权限名称" type="text" class="dfinput" /></li>
                <li>
                    <label>主类</label>
                    <select name="type_pid" class="dfinput">
                        <option value="0">作为主类</option>
                        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["type_id"]); ?>"><?php echo ($vo["type_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <i></i></li>
                <!--<li>-->
                    <!--<label>控制器名</label>-->
                    <!--<input name="auth_c" placeholder="请输入控制器名称" type="text" class="dfinput" />-->
                <!--</li>-->
                <!--<li>-->
                    <!--<label>方法名称</label>-->
                    <!--<input name="auth_a" placeholder="请输入方法名称" type="text" class="dfinput" />-->
                <!--</li>-->
                <!--<li>-->
                    <!--<label>导航显示</label>-->
                    <!--<cite>-->
                    <!--<input name="is_nav"  value="1" type="radio" checked="checked"/>是&emsp;&emsp;-->
                    <!--<input name="is_nav"  value="0" type="radio"  />否-->
                    <!--</cite>-->
                <!--</li>-->
                <li>
                    <label>&nbsp;</label>
                    <input name="" id="btnSubmit" type="button" class="btn" value="确认保存" />
                </li>
            </ul>
        </form>
    </div>
</body>
<script type="text/javascript">
//jQuery代码
$(function(){
    //给btnsubmit绑定点击事件
    $('#btnSubmit').on('click',function(){
        //表单提交
        $('form').submit();
    })
});
</script>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $(".click").click(function() {
            $(".tip").fadeIn(200);
        });

        $(".tiptop a").click(function() {
            $(".tip").fadeOut(200);
        });

        $(".sure").click(function() {
            $(".tip").fadeOut(100);
        });

        $(".cancel").click(function() {
            $(".tip").fadeOut(100);
        });

    });
    </script>
</head>

<body>
    <div class="place">
        <span>位置：</span>
        <?php echo ($locate); ?>
    </div>
    <div class="rightinfo">
        <div class="formbody">
            <form action="" method="post">
            <ul class="forminfo">
                <li>
                    <label>手机号码：</label>
                    <input name="user_name"  type="text" class="dfinput" />
                </li>
                <li>
                    <label>回访状态:</label>
                    <select name="jtype" class="dfinput">

                        <option value="2" selected="selected">未回访</option>
                        <option value="1">已回访</option>
                    </select>
                </li>
                <li><label>&nbsp;</label><input name="" id="btnSubmit" type="button"  class="btn" value="搜索" /></li>

                <!--<li><span><img src="/Public/Admin/images/t04.png" /></span>统计</li>-->
            </ul>
            </form>
        </div>
        <table class="tablelist">
            <thead>
                <tr>

                    <th>加盟用户ID</th>
                    <th>加盟名称</th>
                    <th>联系方式</th>
                    <th>联系地址</th>
                    <th>申请时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>

                    <td><?php echo ($vol["jid"]); ?></td>
                    <td><?php echo ($vol["jname"]); ?></td>
                    <td><?php echo ($vol["jphone"]); ?></td>
                    <td><?php echo ($vol["jaddress"]); ?></td>
                    <td><?php echo (date('Y-m-d H:i:s',$vol["jtime"])); ?></td>
                    <td><a href="/index.php/Admin/Join/detail/jid/<?php echo ($vol["jid"]); ?>" class="tablelink">查看</a></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <div class="pagin">
            <div class="message">共<i class="blue">1256</i>条记录，当前显示第&nbsp;<i class="blue">2&nbsp;</i>页</div>
            <ul class="paginList">
                <li class="paginItem"><a href="javascript:;"><span class="pagepre"></span></a></li>
                <li class="paginItem"><a href="javascript:;">1</a></li>
                <li class="paginItem current"><a href="javascript:;">2</a></li>
                <li class="paginItem"><a href="javascript:;">3</a></li>
                <li class="paginItem"><a href="javascript:;">4</a></li>
                <li class="paginItem"><a href="javascript:;">5</a></li>
                <li class="paginItem more"><a href="javascript:;">...</a></li>
                <li class="paginItem"><a href="javascript:;">10</a></li>
                <li class="paginItem"><a href="javascript:;"><span class="pagenxt"></span></a></li>
            </ul>
        </div>
        <div class="tip">
            <div class="tiptop"><span>提示信息</span>
                <a></a>
            </div>
            <div class="tipinfo">
                <span><img src="/Public/Admin/images/ticon.png" /></span>
                <div class="tipright">
                    <p>是否确认对信息的修改 ？</p>
                    <cite>如果是请点击确定按钮 ，否则请点取消。</cite>
                </div>
            </div>
            <div class="tipbtn">
                <input name="" type="button" class="sure" value="确定" />&nbsp;
                <input name="" type="button" class="cancel" value="取消" />
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('.tablelist tbody tr:odd').addClass('odd');
    </script>
    <script type="text/javascript">
        $(function() {
            //需要给button绑定点击事件
            $('#btnSubmit').click(function () {
                //事件处理程序
                $('form').submit();
            });
        });
    </script>
</body>

</html>
<!DOCTYPE html >
<html>
<head>
    <title>jquery仿WebQQ菜单ui界面 - 站长素材</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></meta>
    <link href="css/jquery-ui-1.8.24.custom.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/themesetting.css" rel="stylesheet"  type="text/css" >
    <link href="css/skins/black.css" rel="stylesheet" />
    <link href="css/powerFloat.css" rel="stylesheet" type="text/css"/>
    <link href="css/smartMenu.css" rel="stylesheet"  type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-powerFloat-min.js"></script>
    <script type="text/javascript" src="js/jquery-smartMenu-min.js"></script>
    <script type="text/javascript" src="js/jquery-class.js"></script>
    <script type="text/javascript" src="js/artDialog.js"></script>
    <script type="text/javascript" src="js/iframeTools.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.24.custom.min.js"></script>
    <script type="text/javascript" src="js/interface.js"></script>
    <script type="text/javascript" src="js/data.js"></script>
    <script type="text/javascript" src="js/bsv1.3-core.js"></script>
    <!--[if lt IE 7]>
    <style type="text/css">
        div, img { behavior: url(js/iepngfix.htc) }
    </style>
    <![endif]-->
    <style>
        #dash-box ul{
            list-style: none;
            background: #fff;
        }
        #dash-box ul li{
            padding: 7px 11px;
        }
        #dash-box{
            position: absolute;
            top: 300px;
            left: 35%;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-shadow: 0 20px 50px #333;
        }
        #dash-box table{
            width: 100%;
            border-collapse: collapse;
        }
        #dash-box table th{
            padding: 7px 11px;
            color: #fff;
            background: url(images/dock_up_c.png) repeat-x scroll center center transparent;
        }
        #dash-box table td{
            padding: 7px 11px;
            text-align: center;
            color: #555;
            background: #fff;
        }
    </style>
</head>
<body>
<div id="themeSetting_wrap" style="display:none;">
    <div id="themeSetting_head" class="themeSetting_head">
        <div id="themeSetting_tabTheme" class="themeSetting_tab current" style="display: block;">系统主题</div>
    </div>
    <div id="themeSetting_body" class="themeSetting_body">
        <div id="themeSetting_area"  class="themeSetting_area" style="display: block;">
            <a href="###" themeid="theme_blue" class="themeSetting_settingButton" id="themeSetting_theme_blue">
                <div style="background: url(images/theme_blue.jpg) no-repeat;" class="themeSetting_settingButton_icon"></div>
                <div class="themeSetting_settingButton_text">梦幻光影</div>
            </a>
            <a href="###" themeid="theme_pinky_night" class="themeSetting_settingButton" id="themeSetting_theme_pinky_night">
                <div style="background: url(images/theme_pinky_night.jpg) no-repeat;" class="themeSetting_settingButton_icon"></div>
                <div class="themeSetting_settingButton_text">粉红之夜</div>
            </a>
            <a href="###" themeid="theme_green" class="themeSetting_settingButton" id="themeSetting_theme_green">
                <div style="background: url(images/theme_green.jpg) no-repeat;" class="themeSetting_settingButton_icon"></div>
                <div class="themeSetting_settingButton_text">青青世界</div>
            </a>
            <a href="###" themeid="theme_wood1" class="themeSetting_settingButton" id="themeSetting_theme_wood1">
                <div style="background: url(images/theme_wood1.jpg) no-repeat;" class="themeSetting_settingButton_icon"></div>
                <div class="themeSetting_settingButton_text">温馨木纹</div>
            </a>
            <a href="###" themeid="theme_wood2" class="themeSetting_settingButton" id="themeSetting_theme_wood2">
                <div style="background: url(images/theme_wood2.jpg) no-repeat;" class="themeSetting_settingButton_icon"></div>
                <div class="themeSetting_settingButton_text">黑色木纹</div>
            </a>
        </div>
        <div id="themeSetting_wallpaper" class="themeSetting_wallpaper" style="display: none;"></div>
    </div>
</div>

<div id="zoomWallpaperGrid" class="zoomWallpaperGrid" style="position: absolute; z-index: -10; left: 0pt; top: 0pt; overflow: hidden; height: 381px; width: 1440px;">
    <img id="zoomWallpaper" class="zoomWallpaper" style="position: absolute; top: 0pt; left: 0pt; height: 381px; width: 1440px;" src="images/bg.jpg">
</div>
<div class="taskbar_start_menu_container" id="startMenuContainer" _olddisplay="block" style="display: none;">
    <div class="startMenuImg taskbar_start_menu_body" id="taskbar_start_menu_body">
        <div uin="0" class="taskbar_start_menu_selfinfo" id="startMenuSelfInfo">
            <div class="taskbar_start_menu_nick" id="startMenuSelfNick">请&nbsp;<a href="#">登录</a></div>
            <a title="反馈" href="###" class="startMenuImg startMenuTopControl_support" cmd="support">&nbsp;</a>
            <a title="锁定" href="###" class="startMenuImg startMenuTopControl_lock" cmd="lock">&nbsp;</a>
        </div>
        <ul class="taskbar_start_menu">
            <li cmd="favorite">
                <a title="添加到收藏夹" href="###">添加到收藏夹</a>
            </li>
            <li cmd="shortcut">
                <a title="保存桌面快捷方式" target="_blank" href="###">保存桌面快捷方式</a></li>
            <li cmd="download">
                <a title="下载客户端" href="###">下载客户端</a></li>
            <li title="关于Q+ Web" cmd="about" id="taskbar_helpButton">
                <a href="###">关于Q+ Web</a>
            </li>
            <li cmd="helper">
                <a title="新手指导" href="###">新手指导</a>
            </li></ul>
        <a class="startMenuImg logout_botton" title="注销当前用户" cmd="logout" href="###"></a>
    </div>
</div>
<div id="dash-box">
    <table>
        <thead>
        <tr>
            <th colspan="6">数据状态</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>总用户数</td>
            <td>{{ $dc['total'] }}</td>
            <td>最后执行</td>
            <td colspan="3" style="word-break: break-all;">{{ $dc['last_query'] }}</td>
        </tr>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th colspan="6">新增数</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>今日新增</td>
            <td>{{ $dc['now_new_day'] }}</td>
            <td>本周新增</td>
            <td>{{ $dc['now_new_week'] }}</td>
            <td>本月月新增</td>
            <td>{{ $dc['now_new_month'] }}</td>
        </tr>
        <tr>
            <td>昨日新增</td>
            <td>{{ $dc['last_new_day'] }}</td>
            <td>上周新增</td>
            <td>{{ $dc['last_new_day'] }}</td>
            <td>上月新增</td>
            <td>{{ $dc['last_new_day'] }}</td>
        </tr>
        </tbody>
    </table>
    <table>
        <thead>
        <tr>
            <th colspan="6">活跃数</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>今日活跃</td>
            <td>{{ $dc['now_hot_day'] }}</td>
            <td>本周活跃</td>
            <td>{{ $dc['now_hot_week'] }}</td>
            <td>本月活跃</td>
            <td>{{ $dc['now_hot_month'] }}</td>
        </tr>
        <tr>
            <td>昨日新增</td>
            <td>{{ $dc['last_hot_day'] }}</td>
            <td>上周新增</td>
            <td>{{ $dc['last_hot_week'] }}</td>
            <td>上月新增</td>
            <td>{{ $dc['last_hot_month'] }}</td>
        </tr>
        </tbody>
    </table>
    <table>
        <thead>
        <tr>
            <th colspan="6">存活率</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>次日平均存活率</td>
            <td>{{ $dc['last_avg_day'] }}</td>
            <td>7日平均存活率</td>
            <td>{{ $dc['last_avg_seven_day'] }}</td>
            <td>30日平均存活率</td>
            <td>{{ $dc['last_avg_thirty_day'] }}</td>
        </tr>
        <tr>
            <td><b>{{ $dc['now_avg_day_date'] }}</b> 次日存活率</td>
            <td>{{ $dc['now_avg_day'] }}</td>
            <td><b>{{ $dc['now_avg_week_date'] }}</b> 7日存活率</td>
            <td>{{ $dc['now_avg_week'] }}</td>
            <td><b>{{ $dc['now_avg_month_date'] }}</b> 30日存活率</td>
            <td>{{ $dc['now_avg_month'] }}</td>
        </tr>

        </tbody>
    </table>
</div>

</body>
</html>
<?xml version="1.0" encoding="utf-8"?>
<!-- generator="FeedCreator 1.7.2-ppt DokuWiki" -->
<?xml-stylesheet href="http://wiki.wooyun.org/lib/exe/css.php?s=feed" type="text/css"?>
<rdf:RDF
    xmlns="http://purl.org/rss/1.0/"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
    xmlns:dc="http://purl.org/dc/elements/1.1/">
    <channel rdf:about="http://wiki.wooyun.org/feed.php">
        <title>WooYun WiKi wooyunwifi</title>
        <description></description>
        <link>http://wiki.wooyun.org/</link>
        <image rdf:resource="http://wiki.wooyun.org/lib/tpl/bootstrap3/images/favicon.ico" />
       <dc:date>2015-12-04T11:02:38+08:00</dc:date>
        <items>
            <rdf:Seq>
                <rdf:li rdf:resource="http://wiki.wooyun.org/wooyunwifi:basic?rev=1438329390&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/wooyunwifi:bug_recovery?rev=1441764682&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/wooyunwifi:config?rev=1441764666&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/wooyunwifi:console?rev=1438329413&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/wooyunwifi:initial_setup?rev=1442972563&amp;do=diff"/>
            </rdf:Seq>
        </items>
    </channel>
    <image rdf:about="http://wiki.wooyun.org/lib/tpl/bootstrap3/images/favicon.ico">
        <title>WooYun WiKi</title>
        <link>http://wiki.wooyun.org/</link>
        <url>http://wiki.wooyun.org/lib/tpl/bootstrap3/images/favicon.ico</url>
    </image>
    <item rdf:about="http://wiki.wooyun.org/wooyunwifi:basic?rev=1438329390&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-31T15:56:30+08:00</dc:date>
        <title>wooyunwifi:basic</title>
        <link>http://wiki.wooyun.org/wooyunwifi:basic?rev=1438329390&amp;do=diff</link>
        <description>WooyunWifi基础功能介绍

本章节介绍WooyunWifi基础功能的使用方式。

登陆页面

----------

请在WEB页面中点击“WooyunWifi”链接进入WooyunWifi控制界面。

在登录页面，用户名默认为root，密码与Openwrt Luci管理密码相同，也与ssh密码相同，您如果之前已经修改过Openwrt Luci的默认密码，则您可以使用修改后的密码登陆（*若您没有修改默认密码，无法通过默认密码登陆）</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/wooyunwifi:bug_recovery?rev=1441764682&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-09-09T10:11:22+08:00</dc:date>
        <title>wooyunwifi:bug_recovery</title>
        <link>http://wiki.wooyun.org/wooyunwifi:bug_recovery?rev=1441764682&amp;do=diff</link>
        <description>WooyunWifi故障恢复

如果您的WooyunWifi出现异常，这里提供了一些解决方案.

检查可能的IP冲突

----------

如果您的路由器IP与上游路由器IP相同，可能会导致IP冲突，症状为DNS混乱，无法查看网页。如果出现这种情况，请按照《WooyunWifi 初始化配置》中的步骤重新设置路由器IP地址。</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/wooyunwifi:config?rev=1441764666&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-09-09T10:11:06+08:00</dc:date>
        <title>wooyunwifi:config</title>
        <link>http://wiki.wooyun.org/wooyunwifi:config?rev=1441764666&amp;do=diff</link>
        <description>WooyunWifi高级设置

对于具备一定安全技巧的测试者，我们的WooyunWifi路由器有一些高级功能及设置可供使用.

日志保存路径（Log Path）

----------

默认情况下，WooyunWifi的HTTP Log文件保存在/tmp临时文件夹下，而Mail的日志文件则会保存在/root下面，因此如果设备重新启动，HTTP的log日志文件将会丢失，而且当存储器满的时候功能将会自动终止。</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/wooyunwifi:console?rev=1438329413&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-31T15:56:53+08:00</dc:date>
        <title>wooyunwifi:console</title>
        <link>http://wiki.wooyun.org/wooyunwifi:console?rev=1438329413&amp;do=diff</link>
        <description>WooyunWifi 命令行功能

WooyunWifi为一些常用的安全测试功能提供了WEB控制界面，但是一些工具&amp;功能由于各种原因仍然只能在命令行界面下运行，本章节介绍WooyunWifi命令行功能的使用方法。

配置路由器SSH服务</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/wooyunwifi:initial_setup?rev=1442972563&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-09-23T09:42:43+08:00</dc:date>
        <title>wooyunwifi:initial_setup</title>
        <link>http://wiki.wooyun.org/wooyunwifi:initial_setup?rev=1442972563&amp;do=diff</link>
        <description>WooyunWifi 初始化配置

为了开始使用您的WooyunWifi路由器，您需要对WooyunWifi进行初始化配置，这些配置主要位于Openwrt Luci管理界面中，如果您对Openwrt路由器非常熟悉，您可以跳过这一章节。

本章节仅介绍能使WooyunWifi正常运行的最简配置，更多高级配置请参考Openwrt官方网站</description>
    </item>
</rdf:RDF>

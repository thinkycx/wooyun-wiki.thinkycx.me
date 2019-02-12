<?xml version="1.0" encoding="utf-8"?>
<!-- generator="FeedCreator 1.7.2-ppt DokuWiki" -->
<?xml-stylesheet href="http://wiki.wooyun.org/lib/exe/css.php?s=feed" type="text/css"?>
<rdf:RDF
    xmlns="http://purl.org/rss/1.0/"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
    xmlns:dc="http://purl.org/dc/elements/1.1/">
    <channel rdf:about="http://wiki.wooyun.org/feed.php">
        <title>WooYun WiKi client</title>
        <description></description>
        <link>http://wiki.wooyun.org/</link>
        <image rdf:resource="http://wiki.wooyun.org/lib/tpl/bootstrap3/images/favicon.ico" />
       <dc:date>2015-12-04T11:01:59+08:00</dc:date>
        <items>
            <rdf:Seq>
                <rdf:li rdf:resource="http://wiki.wooyun.org/client:activity?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/client:broadcast?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/client:provider?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/client:service?rev=1437672424&amp;do=diff"/>
            </rdf:Seq>
        </items>
    </channel>
    <image rdf:about="http://wiki.wooyun.org/lib/tpl/bootstrap3/images/favicon.ico">
        <title>WooYun WiKi</title>
        <link>http://wiki.wooyun.org/</link>
        <url>http://wiki.wooyun.org/lib/tpl/bootstrap3/images/favicon.ico</url>
    </image>
    <item rdf:about="http://wiki.wooyun.org/client:activity?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>client:activity</title>
        <link>http://wiki.wooyun.org/client:activity?rev=1437672424&amp;do=diff</link>
        <description>Activity

1、科普

----------

Android每一个Application都是由Activity、Service、content Provider和Broadcast Receiver等Android的基本组件所组成，其中Activity是实现应用程序的主体，它承担了大量的显示和交互工作，甚至可以理解为一个______________</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/client:broadcast?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>client:broadcast</title>
        <link>http://wiki.wooyun.org/client:broadcast?rev=1437672424&amp;do=diff</link>
        <description>Broadcast Reciever

1、科普

----------

Broadcast Recevier 广播接收器是一个专注于接收广播通知信息，并做出对应处理的组件。很多广播是源自于系统代码的──比如，通知时区改变、电池电量低、拍摄了一张照片或者用户改变了语言选项。应用程序也可以进行广播──比如说，通知其它应用程序一些数据下载完成并处于可用状态。 应用程序可以拥有任意数量的广播接收器以对所有它感兴趣的通知信息予以响应。所有的接收器均继承自BroadcastReceiver基类。 广播接收器没有用户界面。然而，它们可以启动一个activity来响应它们收到的信息，或者用NotificationManager来通知用户。通知可以用很多种方式来吸引用户的注意力──闪动背灯、震动、播放声音等等。一般来说是在状态栏上放一个持久的图标，用户可以打开它并获取消息。____…</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/client:provider?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>client:provider</title>
        <link>http://wiki.wooyun.org/client:provider?rev=1437672424&amp;do=diff</link>
        <description>Content Provider

1、科普

----------

内容提供器用来存放和获取数据并使这些数据可以被所有的应用程序访问。它们是应用程序之间共享数据的唯一方法；不包括所有Android软件包都能访问的公共储存区域。Android为常见数据类型（音频，视频，图像，个人联系人信息，等等）装载了很多内容提供器。你可以看到在android.provider包里列举了一些。你还能查询这些提供器包含了什么数据。当然，对某些敏感内容提供器，必须获取对应的权限来读取这些数据。__…</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/client:service?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>client:service</title>
        <link>http://wiki.wooyun.org/client:service?rev=1437672424&amp;do=diff</link>
        <description>Service

1、科普

----------

一个Service是没有界面且能长时间运行于后台的应用组件．其它应用的组件可以启动一个服务运行于后台，即使用户切换到另一个应用也会继续运行．另外，一个组件可以绑定到一个service来进行交互，即使这个交互是进程间通讯也没问题．例如，一个service可能处理网络事物，播放音乐，执行文件I/O，或与一个内容提供者交互，所有这些都在后台进行．</description>
    </item>
</rdf:RDF>

<?xml version="1.0" encoding="utf-8"?>
<!-- generator="FeedCreator 1.7.2-ppt DokuWiki" -->
<?xml-stylesheet href="http://wiki.wooyun.org/lib/exe/css.php?s=feed" type="text/css"?>
<rdf:RDF
    xmlns="http://purl.org/rss/1.0/"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
    xmlns:dc="http://purl.org/dc/elements/1.1/">
    <channel rdf:about="http://wiki.wooyun.org/feed.php">
        <title>WooYun WiKi android</title>
        <description></description>
        <link>http://wiki.wooyun.org/</link>
        <image rdf:resource="http://wiki.wooyun.org/lib/tpl/bootstrap3/images/favicon.ico" />
       <dc:date>2015-12-04T10:51:38+08:00</dc:date>
        <items>
            <rdf:Seq>
                <rdf:li rdf:resource="http://wiki.wooyun.org/android:client?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/android:communicate?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/android:server?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/android:system?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/android:tools?rev=1439955571&amp;do=diff"/>
            </rdf:Seq>
        </items>
    </channel>
    <image rdf:about="http://wiki.wooyun.org/lib/tpl/bootstrap3/images/favicon.ico">
        <title>WooYun WiKi</title>
        <link>http://wiki.wooyun.org/</link>
        <url>http://wiki.wooyun.org/lib/tpl/bootstrap3/images/favicon.ico</url>
    </image>
    <item rdf:about="http://wiki.wooyun.org/android:client?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>android:client</title>
        <link>http://wiki.wooyun.org/android:client?rev=1437672424&amp;do=diff</link>
        <description>客户端

组件安全

	*  Activity
	*  Service
	*  Broadcast Reciever
	*  Content Provider
	*  WebView RCE UXSS

敏感信息

	*  logcat
	*  private key
	*  其它文件
	*  内部存储

应用加固

	*  代码混淆/花指令
	*  反编译保护
	*  注入Smali 注入
	*  完整性验证，防篡改

安全配置

	*</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/android:communicate?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>android:communicate</title>
        <link>http://wiki.wooyun.org/android:communicate?rev=1437672424&amp;do=diff</link>
        <description>通信

通信证书校验

敏感数据加密

重要数据摘要/签名</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/android:server?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>android:server</title>
        <link>http://wiki.wooyun.org/android:server?rev=1437672424&amp;do=diff</link>
        <description>服务端

	* 常见的android服务端使用http/https协议，调用web服务器上的api进行工作。android服务端上的漏洞请参考WEB应用节点。

	* 其他协议
		* tcp
		* xmpp</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/android:system?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>android:system</title>
        <link>http://wiki.wooyun.org/android:system?rev=1437672424&amp;do=diff</link>
        <description>系统

permission绕过

	*  frgment注入
	*  短信伪造
	*  短信重发（CVE-2014-8610）
	*  CVE-2014-8597 Android &lt;5.0 SQL injection vulnerability in WAPPushManager
	*  绕过ADB认证
	*  电话拨打权限绕过漏洞
	*  BroadAnyWhere
	*</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/android:tools?rev=1439955571&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-08-19T11:39:31+08:00</dc:date>
        <title>android:tools</title>
        <link>http://wiki.wooyun.org/android:tools?rev=1439955571&amp;do=diff</link>
        <description>常用工具

反编译

	* Apktool
	* Smali
	* Dex2jar
	* JD-GUI
	* Jeb
	* Enjarify
	* Luyten

hook框架

	* Xposed
	* Cydia
	* ADBI
	* Frida

动态调试

	* Drozer
	* andbug
	* Introspy
	* Smalidea

辅助测试

	* pidcat</description>
    </item>
</rdf:RDF>

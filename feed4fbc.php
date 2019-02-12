<?xml version="1.0" encoding="utf-8"?>
<!-- generator="FeedCreator 1.7.2-ppt DokuWiki" -->
<?xml-stylesheet href="http://wiki.wooyun.org/lib/exe/css.php?s=feed" type="text/css"?>
<rdf:RDF
    xmlns="http://purl.org/rss/1.0/"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
    xmlns:dc="http://purl.org/dc/elements/1.1/">
    <channel rdf:about="http://wiki.wooyun.org/feed.php">
        <title>WooYun WiKi web</title>
        <description></description>
        <link>http://wiki.wooyun.org/</link>
        <image rdf:resource="http://wiki.wooyun.org/lib/tpl/bootstrap3/images/favicon.ico" />
       <dc:date>2015-12-04T10:53:29+08:00</dc:date>
        <items>
            <rdf:Seq>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:click-jacking?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:code-injection?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:csrf?rev=1440382034&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:discuz?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:execution?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:fck-editor?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:file-upload?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:ldap?rev=1438181127&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:lfi?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:oauth?rev=1444576742&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:online-payment?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:os-commanding?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:race-condtion?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:rfi?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:sql?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:ssrf?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:tomcat?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:url-redirection?rev=1441552969&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:user_system?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:xpath?rev=1438242458&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:xsch?rev=1438242418&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:xss?rev=1442821773&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:xxe-attack?rev=1437672424&amp;do=diff"/>
                <rdf:li rdf:resource="http://wiki.wooyun.org/web:zabbix?rev=1439805915&amp;do=diff"/>
            </rdf:Seq>
        </items>
    </channel>
    <image rdf:about="http://wiki.wooyun.org/lib/tpl/bootstrap3/images/favicon.ico">
        <title>WooYun WiKi</title>
        <link>http://wiki.wooyun.org/</link>
        <url>http://wiki.wooyun.org/lib/tpl/bootstrap3/images/favicon.ico</url>
    </image>
    <item rdf:about="http://wiki.wooyun.org/web:click-jacking?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>web:click-jacking</title>
        <link>http://wiki.wooyun.org/web:click-jacking?rev=1437672424&amp;do=diff</link>
        <description>Click Jacking/点击劫持

1、相关背景介绍

----------

Clickjacking（点击劫持）是由互联网安全专家罗伯特·汉森和耶利米·格劳斯曼在2008年首创的。

是一种视觉欺骗手段，在web端就是iframe嵌套一个透明不可见的页面，让用户在不知情的情况下，点击攻击者想要欺骗用户点击的位置。</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:code-injection?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>web:code-injection</title>
        <link>http://wiki.wooyun.org/web:code-injection?rev=1437672424&amp;do=diff</link>
        <description>代码注入（CODE Injection）

1、相关背景介绍

----------

当应用在调用一些能将字符串转化成代码的函数（如php中的eval）时，没有考虑用户是否能控制这个字符串，将造成代码注入漏洞。 
狭义的代码注入通常指将可执行代码注入到当前页面中，如php的eval函数，可以将字符串代表的代码作为php代码执行，当用户能够控制这段字符串时，将产生代码注入漏洞（也称命令执行）。 
广义上的代码注入，我觉得可以覆盖大半安全漏洞的分类。只要是用户可以控制的“数据”，被当做“代码”给注入到程序中，就是代码注入漏洞。如，SQL注入漏洞实际上是“数据”被当做SQL语句注入到正常SQL语句中了，XSS漏洞是数据被当做“javascript”被注入到HTML中了，文件包含漏洞是数据（某文件）被当做“脚本文件”被注入当正常脚本流程中了。 
这个wiki主要介绍狭义上的代码注入漏洞。 _____…</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:csrf?rev=1440382034&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-08-24T10:07:14+08:00</dc:date>
        <title>web:csrf</title>
        <link>http://wiki.wooyun.org/web:csrf?rev=1440382034&amp;do=diff</link>
        <description>Cross-site Request Forgery/CSRF

1、相关背景介绍

----------

跨站请求伪造（Cross-Site Request Forgery，CSRF）是一种使已登录用户在不知情的情况下执行某种动作的攻击。因为攻击者看不到伪造请求的响应结果，所以CSRF攻击主要用来执行动作，而非窃取用户数据。当受害者是一个普通用户时，CSRF可以实现在其不知情的情况下转移用户资金、发送邮件等操作；但是如果受害者是一个具有管理员权限的用户时CSRF则可能威胁到整个Web系统的安全。…</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:discuz?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>web:discuz</title>
        <link>http://wiki.wooyun.org/web:discuz?rev=1437672424&amp;do=diff</link>
        <description>Discuz!

1、Discuz简介!

----------

Discuz!是一个可免费下载的PHP网络论坛程序，简称DZ，由戴志康（Crossday）所创立。前身为Crossday Bulletin（CDB），最初改自XMB，而后改写成为现今的Discuz!社区论坛程序，由康盛创想所有（现已被腾讯收购）。现在Discuz!已成为中国大陆最多用户使用的论坛程序。</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:execution?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>web:execution</title>
        <link>http://wiki.wooyun.org/web:execution?rev=1437672424&amp;do=diff</link>
        <description>顺序执行

1、概述

----------

所谓的顺序执行 指的就是某一个逻辑流程中，按照第一步、第二步、第三步这种模式进行一步一步的验证，有顺序的执行逻辑的过程。
那么如果整个执行过程中的权限控制不够严格的话，就容易产生漏洞。下面说说常见的顺序执行漏洞。</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:fck-editor?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>web:fck-editor</title>
        <link>http://wiki.wooyun.org/web:fck-editor?rev=1437672424&amp;do=diff</link>
        <description>CKEditor

1、CKEditor简介

----------

CKEditor，旧称FCKeditor，是一个开放源代码的可见即可得网页编辑器。它志于轻量化，不需要太复杂的安装步骤即可使用。它可和PHP、JavaScript、ASP、ASP.NET、ColdFusion、Java、以及ABAP等不同的编程语言相结合。“FCKeditor”名称中的“FCK” 是这个编辑器的作者的名字Frederico Caldeira Knabben的缩写。</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:file-upload?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>web:file-upload</title>
        <link>http://wiki.wooyun.org/web:file-upload?rev=1437672424&amp;do=diff</link>
        <description>文件上传漏洞

1、背景介绍

----------

在网站的运营过程中，不可避免地要对网站的某些页面或者内容进行更新，这时便需要使用到网站的文件上传的功能。如果不对被上传的文件进行限制或者限制被绕过，该功能便有可能会被利用于上传可执行文件、脚本到服务器上，进而进一步导致服务器沦陷。</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:ldap?rev=1438181127&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-29T22:45:27+08:00</dc:date>
        <title>web:ldap</title>
        <link>http://wiki.wooyun.org/web:ldap?rev=1438181127&amp;do=diff</link>
        <description>LDAP是轻量目录访问协议，英文全称是Lightweight Directory Access Protocol，一般都简称为LDAP。它是基于X.500标准的，但是简单多了并且可以根据需要定制。与X.500不同，LDAP支持TCP/IP，这对访问Internet是必须的。</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:lfi?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>web:lfi</title>
        <link>http://wiki.wooyun.org/web:lfi?rev=1437672424&amp;do=diff</link>
        <description>本地文件包含（Local File Include）

1、漏洞简介

----------

如果允许客户端用户输入控制动态包含在服务器端的文件，会导致恶意代码的执行及敏感信息泄露，主要包括本地文件包含和远程文件包含两种形式。</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:oauth?rev=1444576742&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-10-11T23:19:02+08:00</dc:date>
        <title>web:oauth</title>
        <link>http://wiki.wooyun.org/web:oauth?rev=1444576742&amp;do=diff</link>
        <description>URL redirection/URL重定向

1、相关背景介绍

----------

OAuth（开放授权）是一个开放标准，允许用户让第三方应用访问该用户在某一网站上存储的私密的资源（如照片，视频，联系人列表），而无需将用户名和密码提供给第三方应用。_____________</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:online-payment?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>web:online-payment</title>
        <link>http://wiki.wooyun.org/web:online-payment?rev=1437672424&amp;do=diff</link>
        <description>在线支付

1、漏洞简介

----------

随着网民越来越习惯于网上购物，出现了越来越多的电商网站，在线交易平台等。
其中必然涉及在线支付的流程，而这里面存在很多的逻辑问题。
由于这里涉及到金钱，如果设计不当，很有可能产生诸如0元购买商品之类的严重漏洞。</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:os-commanding?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>web:os-commanding</title>
        <link>http://wiki.wooyun.org/web:os-commanding?rev=1437672424&amp;do=diff</link>
        <description>命令执行（OS Commanding）

1、相关背景介绍

----------

当应用需要调用一些外部程序去处理内容的情况下，就会用到一些执行系统命令的函数。如PHP中的system、exec、shell_exec等，当用户可以控制命令执行函数中的参数时，将可以注入恶意系统命令到正常命令中，造成命令执行攻击。
这里还是主要以PHP为主介绍命令执行漏洞，Java等应用的细节待补充。</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:race-condtion?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>web:race-condtion</title>
        <link>http://wiki.wooyun.org/web:race-condtion?rev=1437672424&amp;do=diff</link>
        <description>Race Conditions/条件竞争

1、相关背景介绍

----------

条件竞争漏洞是一种服务器端的漏洞，由于服务器端在处理不同用户的请求时是并发进行的，因此，如果并发处理不当或相关操作逻辑顺序设计的不合理时，将会导致此类问题的发生。</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:rfi?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>web:rfi</title>
        <link>http://wiki.wooyun.org/web:rfi?rev=1437672424&amp;do=diff</link>
        <description>远程文件包含（Remote File Include）

1、漏洞简介

----------

如果允许客户端用户输入控制动态包含在服务器端的文件，会导致恶意代码的执行及敏感信息泄露，主要包括本地文件包含和远程文件包含两种形式。</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:sql?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>web:sql</title>
        <link>http://wiki.wooyun.org/web:sql?rev=1437672424&amp;do=diff</link>
        <description>SQL注入（SQL Injection）

1、相关背景介绍

----------

结构化查询语言（Structured Query Language，缩写：SQL），是一种特殊的编程语言，用于数据库中的标准数据查询语言。1986年10月，美国国家标准学会对SQL进行规范后，以此作为关系式数据库管理系统的标准语言（ANSI X3. 135-1986），1987年得到国际标准组织的支持下成为国际标准。不过各种通行的数据库系统在其实践过程中都对SQL规范作了某些编改和扩充。所以，…</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:ssrf?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>web:ssrf</title>
        <link>http://wiki.wooyun.org/web:ssrf?rev=1437672424&amp;do=diff</link>
        <description>SSRF（Server Side Request Forgery）

1、背景

----------

SSRF(Server-Side Request Forgery:服务器端请求伪造) 是一种由攻击者构造形成由服务端发起请求的一个安全漏洞。一般情况下，SSRF攻击的目标是从外网无法访问的内部系统。</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:tomcat?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>web:tomcat</title>
        <link>http://wiki.wooyun.org/web:tomcat?rev=1437672424&amp;do=diff</link>
        <description>Apache Tomcat弱口令

1、Apache Tomcat简介

----------

Tomcat是由Apache软件基金会下属的Jakarta项目开发的一个Servlet容器，按照Sun Microsystems提供的技术规范，实现了对Servlet和JavaServer Page（JSP）的支持，并提供了作为Web服务器的一些特有功能，如Tomcat管理和控制平台、安全域管理和Tomcat阀等。由于Tomcat本身也内含了一个HTTP服务器，它也可以被视作一个单独的Web服务器。</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:url-redirection?rev=1441552969&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-09-06T23:22:49+08:00</dc:date>
        <title>web:url-redirection</title>
        <link>http://wiki.wooyun.org/web:url-redirection?rev=1441552969&amp;do=diff</link>
        <description>URL redirection/URL重定向

1、相关背景介绍

----------

由于应用越来越多的需要和其他的第三方应用交互，以及在自身应用内部根据不同的逻辑将用户引向到不同的页面，譬如一个典型的登录接口就经常需要在认证成功之后将用户引导到登录之前的页面，整个过程中如果实现不好就可能导致一些安全问题，特定条件下可能引起严重的安全漏洞。</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:user_system?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>web:user_system</title>
        <link>http://wiki.wooyun.org/web:user_system?rev=1437672424&amp;do=diff</link>
        <description>用户体系

现在的互联网公司几乎都有自己的用户体系，而这套用户体系当中可能存在很多问题。

在此用乌云主站上已经报过的相关漏洞总结一下，这个体系当中出现的林林总总的问题：

1、越权操作</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:xpath?rev=1438242458&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-30T15:47:38+08:00</dc:date>
        <title>web:xpath</title>
        <link>http://wiki.wooyun.org/web:xpath?rev=1438242458&amp;do=diff</link>
        <description>在很多WEB应用中常常会用XML格式来储存数据（国外占多数），而XPATH就是一个XML文档中解析和提取数据的查询语言（类似于SQL语言）。如果我们能控制一个XAPTH输入点，那么我们可以像注入SQL一样的去注入XPATH，当然你不能用SQL语句以及UNION联合查询。 
假设有一个XML文档为</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:xsch?rev=1438242418&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-30T15:46:58+08:00</dc:date>
        <title>web:xsch</title>
        <link>http://wiki.wooyun.org/web:xsch?rev=1438242418&amp;do=diff</link>
        <description>1.相关背景介绍

XSCH (Cross Site Content Hijacking）可翻译为跨站内容劫持，它和XSS有异曲同工之妙。它可以劫持获取用户敏感数据、劫持用户发起任意请求，是XSS和CSRF的一种变体，它和XSS比略显鸡肋，比CSRF更强大。不过，对于用户，我觉得这三者的危害是相同的，他们都可以危及到用户的数据或敏感信息。</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:xss?rev=1442821773&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-09-21T15:49:33+08:00</dc:date>
        <title>web:xss</title>
        <link>http://wiki.wooyun.org/web:xss?rev=1442821773&amp;do=diff</link>
        <description>XSS(cross site scripting)

1、相关背景介绍

----------

跨站脚本攻击(Cross Site Scripting)，为不和层叠样式表(Cascading Style Sheets, CSS)的缩写混淆，故将跨站脚本攻击缩写为XSS。恶意攻击者往Web页面里插入恶意html代码，当用户浏览该页之时，嵌入其中Web里面的html代码会被执行，从而达到恶意攻击用户的特殊目的。</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:xxe-attack?rev=1437672424&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-07-24T01:27:04+08:00</dc:date>
        <title>web:xxe-attack</title>
        <link>http://wiki.wooyun.org/web:xxe-attack?rev=1437672424&amp;do=diff</link>
        <description>XML External Entity attack/XXE攻击

1、相关背景介绍

可扩展标记语言（eXtensible Markup Language，XML）是一种标记语言，被设计用来传输和存储数据。XML应用极其广泛，如：
  
* 普通列表项目文档格式：OOXML，ODF，PDF，RSS……
* 图片格式：SVG，EXIF Headers……
* 网络协议：WebDAV，CalDAV，XMLRPC，SOAP，REST，XMPP，SAML，XACML……
* 配置文件：Spring配置文件，Struts2配置文件……_____</description>
    </item>
    <item rdf:about="http://wiki.wooyun.org/web:zabbix?rev=1439805915&amp;do=diff">
        <dc:format>text/html</dc:format>
        <dc:date>2015-08-17T18:05:15+08:00</dc:date>
        <title>web:zabbix</title>
        <link>http://wiki.wooyun.org/web:zabbix?rev=1439805915&amp;do=diff</link>
        <description>Zabbix

1、Zabbix简介

----------

zabbix是一个基于WEB界面的提供分布式系统监视以及网络监视功能的企业级的开源解决方案。 

zabbix能监视各种网络参数，保证服务器系统的安全运营；并提供灵活的通知机制以让系统管理员快速定位/解决存在的各种问题。</description>
    </item>
</rdf:RDF>

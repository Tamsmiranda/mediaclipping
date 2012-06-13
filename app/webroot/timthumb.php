



<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
 
 <meta name="ROBOTS" content="NOARCHIVE">
 
 <link rel="icon" type="image/vnd.microsoft.icon" href="http://www.gstatic.com/codesite/ph/images/phosting.ico">
 
 
 <script type="text/javascript">
 
 
 
 
 var codesite_token = null;
 
 
 var CS_env = {"profileUrl":null,"token":null,"assetHostPath":"http://www.gstatic.com/codesite/ph","domainName":null,"assetVersionPath":"http://www.gstatic.com/codesite/ph/11556196549636558490","projectHomeUrl":"/p/timthumb","relativeBaseUrl":"","projectName":"timthumb","loggedInUserEmail":null};
 var _gaq = _gaq || [];
 _gaq.push(
 ['siteTracker._setAccount', 'UA-18071-1'],
 ['siteTracker._trackPageview']);
 
 (function() {
 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
 (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
 })();
 
 </script>
 
 
 <title>timthumb.php - 
 timthumb -
 
 
 image crop zoom resize management - Google Project Hosting
 </title>
 <link type="text/css" rel="stylesheet" href="http://www.gstatic.com/codesite/ph/11556196549636558490/css/core.css">
 
 <link type="text/css" rel="stylesheet" href="http://www.gstatic.com/codesite/ph/11556196549636558490/css/ph_detail.css" >
 
 
 <link type="text/css" rel="stylesheet" href="http://www.gstatic.com/codesite/ph/11556196549636558490/css/d_sb.css" >
 
 
 
<!--[if IE]>
 <link type="text/css" rel="stylesheet" href="http://www.gstatic.com/codesite/ph/11556196549636558490/css/d_ie.css" >
<![endif]-->
 <style type="text/css">
 .menuIcon.off { background: no-repeat url(http://www.gstatic.com/codesite/ph/images/dropdown_sprite.gif) 0 -42px }
 .menuIcon.on { background: no-repeat url(http://www.gstatic.com/codesite/ph/images/dropdown_sprite.gif) 0 -28px }
 .menuIcon.down { background: no-repeat url(http://www.gstatic.com/codesite/ph/images/dropdown_sprite.gif) 0 0; }
 
 
 
  tr.inline_comment {
 background: #fff;
 vertical-align: top;
 }
 div.draft, div.published {
 padding: .3em;
 border: 1px solid #999; 
 margin-bottom: .1em;
 font-family: arial, sans-serif;
 max-width: 60em;
 }
 div.draft {
 background: #ffa;
 } 
 div.published {
 background: #e5ecf9;
 }
 div.published .body, div.draft .body {
 padding: .5em .1em .1em .1em;
 max-width: 60em;
 white-space: pre-wrap;
 white-space: -moz-pre-wrap;
 white-space: -pre-wrap;
 white-space: -o-pre-wrap;
 word-wrap: break-word;
 font-size: 1em;
 }
 div.draft .actions {
 margin-left: 1em;
 font-size: 90%;
 }
 div.draft form {
 padding: .5em .5em .5em 0;
 }
 div.draft textarea, div.published textarea {
 width: 95%;
 height: 10em;
 font-family: arial, sans-serif;
 margin-bottom: .5em;
 }

 
 .nocursor, .nocursor td, .cursor_hidden, .cursor_hidden td {
 background-color: white;
 height: 2px;
 }
 .cursor, .cursor td {
 background-color: darkblue;
 height: 2px;
 display: '';
 }
 
 
.list {
 border: 1px solid white;
 border-bottom: 0;
}

 
 </style>
</head>
<body class="t4">
<script type="text/javascript">
 window.___gcfg = {lang: 'en'};
 (function() 
 {var po = document.createElement("script");
 po.type = "text/javascript"; po.async = true;po.src = "https://apis.google.com/js/plusone.js";
 var s = document.getElementsByTagName("script")[0];
 s.parentNode.insertBefore(po, s);
 })();
</script>
<div class="headbg">

 <div id="gaia">
 

 <span>
 
 <a href="#" id="projects-dropdown" onclick="return false;"><u>My favorites</u> <small>&#9660;</small></a>
 | <a href="https://www.google.com/accounts/ServiceLogin?service=code&amp;ltmpl=phosting&amp;continue=http%3A%2F%2Fcode.google.com%2Fp%2Ftimthumb%2Fsource%2Fbrowse%2Ftrunk%2Ftimthumb.php&amp;followup=http%3A%2F%2Fcode.google.com%2Fp%2Ftimthumb%2Fsource%2Fbrowse%2Ftrunk%2Ftimthumb.php" onclick="_CS_click('/gb/ph/signin');"><u>Sign in</u></a>
 
 </span>

 </div>

 <div class="gbh" style="left: 0pt;"></div>
 <div class="gbh" style="right: 0pt;"></div>
 
 
 <div style="height: 1px"></div>
<!--[if lte IE 7]>
<div style="text-align:center;">
Your version of Internet Explorer is not supported. Try a browser that
contributes to open source, such as <a href="http://www.firefox.com">Firefox</a>,
<a href="http://www.google.com/chrome">Google Chrome</a>, or
<a href="http://code.google.com/chrome/chromeframe/">Google Chrome Frame</a>.
</div>
<![endif]-->



 <table style="padding:0px; margin: 0px 0px 10px 0px; width:100%" cellpadding="0" cellspacing="0"
 itemscope itemtype="http://schema.org/CreativeWork">
 <tr style="height: 58px;">
 
 <td id="plogo">
 <link itemprop="url" href="/p/timthumb">
 <a href="/p/timthumb/">
 
 <img src="http://www.gstatic.com/codesite/ph/images/defaultlogo.png" alt="Logo" itemprop="image">
 
 </a>
 </td>
 
 <td style="padding-left: 0.5em">
 
 <div id="pname">
 <a href="/p/timthumb/"><span itemprop="name">timthumb</span></a>
 </div>
 
 <div id="psum">
 <a id="project_summary_link"
 href="/p/timthumb/"><span itemprop="description">image crop zoom resize management</span></a>
 
 </div>
 
 
 </td>
 <td style="white-space:nowrap;text-align:right; vertical-align:bottom;">
 
 <form action="/hosting/search">
 <input size="30" name="q" value="" type="text">
 
 <input type="submit" name="projectsearch" value="Search projects" >
 </form>
 
 </tr>
 </table>

</div>

 
<div id="mt" class="gtb"> 
 <a href="/p/timthumb/" class="tab ">Project&nbsp;Home</a>
 
 
 
 
 
 
 <a href="/p/timthumb/w/list" class="tab ">Wiki</a>
 
 
 
 
 
 <a href="/p/timthumb/issues/list"
 class="tab ">Issues</a>
 
 
 
 
 
 <a href="/p/timthumb/source/checkout"
 class="tab active">Source</a>
 
 
 
 
 
 
 
 <div class=gtbc></div>
</div>
<table cellspacing="0" cellpadding="0" width="100%" align="center" border="0" class="st">
 <tr>
 
 
 
 
 
 
 
 <td class="subt">
 <div class="st2">
 <div class="isf">
 
 


 <span class="inst1"><a href="/p/timthumb/source/checkout">Checkout</a></span> &nbsp;
 <span class="inst2"><a href="/p/timthumb/source/browse/trunk">Browse</a></span> &nbsp;
 <span class="inst3"><a href="/p/timthumb/source/list">Changes</a></span> &nbsp;
 
 &nbsp;
 
 
 <form action="/p/timthumb/source/search" method="get" style="display:inline"
 onsubmit="document.getElementById('codesearchq').value = document.getElementById('origq').value">
 <input type="hidden" name="q" id="codesearchq" value="">
 <input type="text" maxlength="2048" size="38" id="origq" name="origq" value="" title="Google Code Search" style="font-size:92%">&nbsp;<input type="submit" value="Search Trunk" name="btnG" style="font-size:92%">
 
 
 
 
 
 
 </form>
 <script type="text/javascript">
 
 function codesearchQuery(form) {
 var query = document.getElementById('q').value;
 if (query) { form.action += '%20' + query; }
 }
 </script>
 </div>
</div>

 </td>
 
 
 
 <td align="right" valign="top" class="bevel-right"></td>
 </tr>
</table>


<script type="text/javascript">
 var cancelBubble = false;
 function _go(url) { document.location = url; }
</script>
<div id="maincol"
 
>

 
<!-- IE -->




<div class="expand">
<div id="colcontrol">
<style type="text/css">
 #file_flipper { white-space: nowrap; padding-right: 2em; }
 #file_flipper.hidden { display: none; }
 #file_flipper .pagelink { color: #0000CC; text-decoration: underline; }
 #file_flipper #visiblefiles { padding-left: 0.5em; padding-right: 0.5em; }
</style>
<table id="nav_and_rev" class="list"
 cellpadding="0" cellspacing="0" width="100%">
 <tr>
 
 <td nowrap="nowrap" class="src_crumbs src_nav" width="33%">
 <strong class="src_nav">Source path:&nbsp;</strong>
 <span id="crumb_root">
 
 <a href="/p/timthumb/source/browse/">svn</a>/&nbsp;</span>
 <span id="crumb_links" class="ifClosed"><a href="/p/timthumb/source/browse/trunk/">trunk</a><span class="sp">/&nbsp;</span>timthumb.php</span>
 
 

 </td>
 
 
 <td nowrap="nowrap" width="33%" align="right">
 <table cellpadding="0" cellspacing="0" style="font-size: 100%"><tr>
 
 
 <td class="flipper">
 <ul class="leftside">
 
 <li><a href="/p/timthumb/source/browse/trunk/timthumb.php?r=214" title="Previous">&lsaquo;r214</a></li>
 
 </ul>
 </td>
 
 <td class="flipper"><b>r215</b></td>
 
 </tr></table>
 </td> 
 </tr>
</table>

<div class="fc">
 
 
 
<style type="text/css">
.undermouse span {
 background-image: url(http://www.gstatic.com/codesite/ph/images/comments.gif); }
</style>
<table class="opened" id="review_comment_area"
><tr>
<td id="nums">
<pre><table width="100%"><tr class="nocursor"><td></td></tr></table></pre>
<pre><table width="100%" id="nums_table_0"><tr id="gr_svn215_1"

><td id="1"><a href="#1">1</a></td></tr
><tr id="gr_svn215_2"

><td id="2"><a href="#2">2</a></td></tr
><tr id="gr_svn215_3"

><td id="3"><a href="#3">3</a></td></tr
><tr id="gr_svn215_4"

><td id="4"><a href="#4">4</a></td></tr
><tr id="gr_svn215_5"

><td id="5"><a href="#5">5</a></td></tr
><tr id="gr_svn215_6"

><td id="6"><a href="#6">6</a></td></tr
><tr id="gr_svn215_7"

><td id="7"><a href="#7">7</a></td></tr
><tr id="gr_svn215_8"

><td id="8"><a href="#8">8</a></td></tr
><tr id="gr_svn215_9"

><td id="9"><a href="#9">9</a></td></tr
><tr id="gr_svn215_10"

><td id="10"><a href="#10">10</a></td></tr
><tr id="gr_svn215_11"

><td id="11"><a href="#11">11</a></td></tr
><tr id="gr_svn215_12"

><td id="12"><a href="#12">12</a></td></tr
><tr id="gr_svn215_13"

><td id="13"><a href="#13">13</a></td></tr
><tr id="gr_svn215_14"

><td id="14"><a href="#14">14</a></td></tr
><tr id="gr_svn215_15"

><td id="15"><a href="#15">15</a></td></tr
><tr id="gr_svn215_16"

><td id="16"><a href="#16">16</a></td></tr
><tr id="gr_svn215_17"

><td id="17"><a href="#17">17</a></td></tr
><tr id="gr_svn215_18"

><td id="18"><a href="#18">18</a></td></tr
><tr id="gr_svn215_19"

><td id="19"><a href="#19">19</a></td></tr
><tr id="gr_svn215_20"

><td id="20"><a href="#20">20</a></td></tr
><tr id="gr_svn215_21"

><td id="21"><a href="#21">21</a></td></tr
><tr id="gr_svn215_22"

><td id="22"><a href="#22">22</a></td></tr
><tr id="gr_svn215_23"

><td id="23"><a href="#23">23</a></td></tr
><tr id="gr_svn215_24"

><td id="24"><a href="#24">24</a></td></tr
><tr id="gr_svn215_25"

><td id="25"><a href="#25">25</a></td></tr
><tr id="gr_svn215_26"

><td id="26"><a href="#26">26</a></td></tr
><tr id="gr_svn215_27"

><td id="27"><a href="#27">27</a></td></tr
><tr id="gr_svn215_28"

><td id="28"><a href="#28">28</a></td></tr
><tr id="gr_svn215_29"

><td id="29"><a href="#29">29</a></td></tr
><tr id="gr_svn215_30"

><td id="30"><a href="#30">30</a></td></tr
><tr id="gr_svn215_31"

><td id="31"><a href="#31">31</a></td></tr
><tr id="gr_svn215_32"

><td id="32"><a href="#32">32</a></td></tr
><tr id="gr_svn215_33"

><td id="33"><a href="#33">33</a></td></tr
><tr id="gr_svn215_34"

><td id="34"><a href="#34">34</a></td></tr
><tr id="gr_svn215_35"

><td id="35"><a href="#35">35</a></td></tr
><tr id="gr_svn215_36"

><td id="36"><a href="#36">36</a></td></tr
><tr id="gr_svn215_37"

><td id="37"><a href="#37">37</a></td></tr
><tr id="gr_svn215_38"

><td id="38"><a href="#38">38</a></td></tr
><tr id="gr_svn215_39"

><td id="39"><a href="#39">39</a></td></tr
><tr id="gr_svn215_40"

><td id="40"><a href="#40">40</a></td></tr
><tr id="gr_svn215_41"

><td id="41"><a href="#41">41</a></td></tr
><tr id="gr_svn215_42"

><td id="42"><a href="#42">42</a></td></tr
><tr id="gr_svn215_43"

><td id="43"><a href="#43">43</a></td></tr
><tr id="gr_svn215_44"

><td id="44"><a href="#44">44</a></td></tr
><tr id="gr_svn215_45"

><td id="45"><a href="#45">45</a></td></tr
><tr id="gr_svn215_46"

><td id="46"><a href="#46">46</a></td></tr
><tr id="gr_svn215_47"

><td id="47"><a href="#47">47</a></td></tr
><tr id="gr_svn215_48"

><td id="48"><a href="#48">48</a></td></tr
><tr id="gr_svn215_49"

><td id="49"><a href="#49">49</a></td></tr
><tr id="gr_svn215_50"

><td id="50"><a href="#50">50</a></td></tr
><tr id="gr_svn215_51"

><td id="51"><a href="#51">51</a></td></tr
><tr id="gr_svn215_52"

><td id="52"><a href="#52">52</a></td></tr
><tr id="gr_svn215_53"

><td id="53"><a href="#53">53</a></td></tr
><tr id="gr_svn215_54"

><td id="54"><a href="#54">54</a></td></tr
><tr id="gr_svn215_55"

><td id="55"><a href="#55">55</a></td></tr
><tr id="gr_svn215_56"

><td id="56"><a href="#56">56</a></td></tr
><tr id="gr_svn215_57"

><td id="57"><a href="#57">57</a></td></tr
><tr id="gr_svn215_58"

><td id="58"><a href="#58">58</a></td></tr
><tr id="gr_svn215_59"

><td id="59"><a href="#59">59</a></td></tr
><tr id="gr_svn215_60"

><td id="60"><a href="#60">60</a></td></tr
><tr id="gr_svn215_61"

><td id="61"><a href="#61">61</a></td></tr
><tr id="gr_svn215_62"

><td id="62"><a href="#62">62</a></td></tr
><tr id="gr_svn215_63"

><td id="63"><a href="#63">63</a></td></tr
><tr id="gr_svn215_64"

><td id="64"><a href="#64">64</a></td></tr
><tr id="gr_svn215_65"

><td id="65"><a href="#65">65</a></td></tr
><tr id="gr_svn215_66"

><td id="66"><a href="#66">66</a></td></tr
><tr id="gr_svn215_67"

><td id="67"><a href="#67">67</a></td></tr
><tr id="gr_svn215_68"

><td id="68"><a href="#68">68</a></td></tr
><tr id="gr_svn215_69"

><td id="69"><a href="#69">69</a></td></tr
><tr id="gr_svn215_70"

><td id="70"><a href="#70">70</a></td></tr
><tr id="gr_svn215_71"

><td id="71"><a href="#71">71</a></td></tr
><tr id="gr_svn215_72"

><td id="72"><a href="#72">72</a></td></tr
><tr id="gr_svn215_73"

><td id="73"><a href="#73">73</a></td></tr
><tr id="gr_svn215_74"

><td id="74"><a href="#74">74</a></td></tr
><tr id="gr_svn215_75"

><td id="75"><a href="#75">75</a></td></tr
><tr id="gr_svn215_76"

><td id="76"><a href="#76">76</a></td></tr
><tr id="gr_svn215_77"

><td id="77"><a href="#77">77</a></td></tr
><tr id="gr_svn215_78"

><td id="78"><a href="#78">78</a></td></tr
><tr id="gr_svn215_79"

><td id="79"><a href="#79">79</a></td></tr
><tr id="gr_svn215_80"

><td id="80"><a href="#80">80</a></td></tr
><tr id="gr_svn215_81"

><td id="81"><a href="#81">81</a></td></tr
><tr id="gr_svn215_82"

><td id="82"><a href="#82">82</a></td></tr
><tr id="gr_svn215_83"

><td id="83"><a href="#83">83</a></td></tr
><tr id="gr_svn215_84"

><td id="84"><a href="#84">84</a></td></tr
><tr id="gr_svn215_85"

><td id="85"><a href="#85">85</a></td></tr
><tr id="gr_svn215_86"

><td id="86"><a href="#86">86</a></td></tr
><tr id="gr_svn215_87"

><td id="87"><a href="#87">87</a></td></tr
><tr id="gr_svn215_88"

><td id="88"><a href="#88">88</a></td></tr
><tr id="gr_svn215_89"

><td id="89"><a href="#89">89</a></td></tr
><tr id="gr_svn215_90"

><td id="90"><a href="#90">90</a></td></tr
><tr id="gr_svn215_91"

><td id="91"><a href="#91">91</a></td></tr
><tr id="gr_svn215_92"

><td id="92"><a href="#92">92</a></td></tr
><tr id="gr_svn215_93"

><td id="93"><a href="#93">93</a></td></tr
><tr id="gr_svn215_94"

><td id="94"><a href="#94">94</a></td></tr
><tr id="gr_svn215_95"

><td id="95"><a href="#95">95</a></td></tr
><tr id="gr_svn215_96"

><td id="96"><a href="#96">96</a></td></tr
><tr id="gr_svn215_97"

><td id="97"><a href="#97">97</a></td></tr
><tr id="gr_svn215_98"

><td id="98"><a href="#98">98</a></td></tr
><tr id="gr_svn215_99"

><td id="99"><a href="#99">99</a></td></tr
><tr id="gr_svn215_100"

><td id="100"><a href="#100">100</a></td></tr
><tr id="gr_svn215_101"

><td id="101"><a href="#101">101</a></td></tr
><tr id="gr_svn215_102"

><td id="102"><a href="#102">102</a></td></tr
><tr id="gr_svn215_103"

><td id="103"><a href="#103">103</a></td></tr
><tr id="gr_svn215_104"

><td id="104"><a href="#104">104</a></td></tr
><tr id="gr_svn215_105"

><td id="105"><a href="#105">105</a></td></tr
><tr id="gr_svn215_106"

><td id="106"><a href="#106">106</a></td></tr
><tr id="gr_svn215_107"

><td id="107"><a href="#107">107</a></td></tr
><tr id="gr_svn215_108"

><td id="108"><a href="#108">108</a></td></tr
><tr id="gr_svn215_109"

><td id="109"><a href="#109">109</a></td></tr
><tr id="gr_svn215_110"

><td id="110"><a href="#110">110</a></td></tr
><tr id="gr_svn215_111"

><td id="111"><a href="#111">111</a></td></tr
><tr id="gr_svn215_112"

><td id="112"><a href="#112">112</a></td></tr
><tr id="gr_svn215_113"

><td id="113"><a href="#113">113</a></td></tr
><tr id="gr_svn215_114"

><td id="114"><a href="#114">114</a></td></tr
><tr id="gr_svn215_115"

><td id="115"><a href="#115">115</a></td></tr
><tr id="gr_svn215_116"

><td id="116"><a href="#116">116</a></td></tr
><tr id="gr_svn215_117"

><td id="117"><a href="#117">117</a></td></tr
><tr id="gr_svn215_118"

><td id="118"><a href="#118">118</a></td></tr
><tr id="gr_svn215_119"

><td id="119"><a href="#119">119</a></td></tr
><tr id="gr_svn215_120"

><td id="120"><a href="#120">120</a></td></tr
><tr id="gr_svn215_121"

><td id="121"><a href="#121">121</a></td></tr
><tr id="gr_svn215_122"

><td id="122"><a href="#122">122</a></td></tr
><tr id="gr_svn215_123"

><td id="123"><a href="#123">123</a></td></tr
><tr id="gr_svn215_124"

><td id="124"><a href="#124">124</a></td></tr
><tr id="gr_svn215_125"

><td id="125"><a href="#125">125</a></td></tr
><tr id="gr_svn215_126"

><td id="126"><a href="#126">126</a></td></tr
><tr id="gr_svn215_127"

><td id="127"><a href="#127">127</a></td></tr
><tr id="gr_svn215_128"

><td id="128"><a href="#128">128</a></td></tr
><tr id="gr_svn215_129"

><td id="129"><a href="#129">129</a></td></tr
><tr id="gr_svn215_130"

><td id="130"><a href="#130">130</a></td></tr
><tr id="gr_svn215_131"

><td id="131"><a href="#131">131</a></td></tr
><tr id="gr_svn215_132"

><td id="132"><a href="#132">132</a></td></tr
><tr id="gr_svn215_133"

><td id="133"><a href="#133">133</a></td></tr
><tr id="gr_svn215_134"

><td id="134"><a href="#134">134</a></td></tr
><tr id="gr_svn215_135"

><td id="135"><a href="#135">135</a></td></tr
><tr id="gr_svn215_136"

><td id="136"><a href="#136">136</a></td></tr
><tr id="gr_svn215_137"

><td id="137"><a href="#137">137</a></td></tr
><tr id="gr_svn215_138"

><td id="138"><a href="#138">138</a></td></tr
><tr id="gr_svn215_139"

><td id="139"><a href="#139">139</a></td></tr
><tr id="gr_svn215_140"

><td id="140"><a href="#140">140</a></td></tr
><tr id="gr_svn215_141"

><td id="141"><a href="#141">141</a></td></tr
><tr id="gr_svn215_142"

><td id="142"><a href="#142">142</a></td></tr
><tr id="gr_svn215_143"

><td id="143"><a href="#143">143</a></td></tr
><tr id="gr_svn215_144"

><td id="144"><a href="#144">144</a></td></tr
><tr id="gr_svn215_145"

><td id="145"><a href="#145">145</a></td></tr
><tr id="gr_svn215_146"

><td id="146"><a href="#146">146</a></td></tr
><tr id="gr_svn215_147"

><td id="147"><a href="#147">147</a></td></tr
><tr id="gr_svn215_148"

><td id="148"><a href="#148">148</a></td></tr
><tr id="gr_svn215_149"

><td id="149"><a href="#149">149</a></td></tr
><tr id="gr_svn215_150"

><td id="150"><a href="#150">150</a></td></tr
><tr id="gr_svn215_151"

><td id="151"><a href="#151">151</a></td></tr
><tr id="gr_svn215_152"

><td id="152"><a href="#152">152</a></td></tr
><tr id="gr_svn215_153"

><td id="153"><a href="#153">153</a></td></tr
><tr id="gr_svn215_154"

><td id="154"><a href="#154">154</a></td></tr
><tr id="gr_svn215_155"

><td id="155"><a href="#155">155</a></td></tr
><tr id="gr_svn215_156"

><td id="156"><a href="#156">156</a></td></tr
><tr id="gr_svn215_157"

><td id="157"><a href="#157">157</a></td></tr
><tr id="gr_svn215_158"

><td id="158"><a href="#158">158</a></td></tr
><tr id="gr_svn215_159"

><td id="159"><a href="#159">159</a></td></tr
><tr id="gr_svn215_160"

><td id="160"><a href="#160">160</a></td></tr
><tr id="gr_svn215_161"

><td id="161"><a href="#161">161</a></td></tr
><tr id="gr_svn215_162"

><td id="162"><a href="#162">162</a></td></tr
><tr id="gr_svn215_163"

><td id="163"><a href="#163">163</a></td></tr
><tr id="gr_svn215_164"

><td id="164"><a href="#164">164</a></td></tr
><tr id="gr_svn215_165"

><td id="165"><a href="#165">165</a></td></tr
><tr id="gr_svn215_166"

><td id="166"><a href="#166">166</a></td></tr
><tr id="gr_svn215_167"

><td id="167"><a href="#167">167</a></td></tr
><tr id="gr_svn215_168"

><td id="168"><a href="#168">168</a></td></tr
><tr id="gr_svn215_169"

><td id="169"><a href="#169">169</a></td></tr
><tr id="gr_svn215_170"

><td id="170"><a href="#170">170</a></td></tr
><tr id="gr_svn215_171"

><td id="171"><a href="#171">171</a></td></tr
><tr id="gr_svn215_172"

><td id="172"><a href="#172">172</a></td></tr
><tr id="gr_svn215_173"

><td id="173"><a href="#173">173</a></td></tr
><tr id="gr_svn215_174"

><td id="174"><a href="#174">174</a></td></tr
><tr id="gr_svn215_175"

><td id="175"><a href="#175">175</a></td></tr
><tr id="gr_svn215_176"

><td id="176"><a href="#176">176</a></td></tr
><tr id="gr_svn215_177"

><td id="177"><a href="#177">177</a></td></tr
><tr id="gr_svn215_178"

><td id="178"><a href="#178">178</a></td></tr
><tr id="gr_svn215_179"

><td id="179"><a href="#179">179</a></td></tr
><tr id="gr_svn215_180"

><td id="180"><a href="#180">180</a></td></tr
><tr id="gr_svn215_181"

><td id="181"><a href="#181">181</a></td></tr
><tr id="gr_svn215_182"

><td id="182"><a href="#182">182</a></td></tr
><tr id="gr_svn215_183"

><td id="183"><a href="#183">183</a></td></tr
><tr id="gr_svn215_184"

><td id="184"><a href="#184">184</a></td></tr
><tr id="gr_svn215_185"

><td id="185"><a href="#185">185</a></td></tr
><tr id="gr_svn215_186"

><td id="186"><a href="#186">186</a></td></tr
><tr id="gr_svn215_187"

><td id="187"><a href="#187">187</a></td></tr
><tr id="gr_svn215_188"

><td id="188"><a href="#188">188</a></td></tr
><tr id="gr_svn215_189"

><td id="189"><a href="#189">189</a></td></tr
><tr id="gr_svn215_190"

><td id="190"><a href="#190">190</a></td></tr
><tr id="gr_svn215_191"

><td id="191"><a href="#191">191</a></td></tr
><tr id="gr_svn215_192"

><td id="192"><a href="#192">192</a></td></tr
><tr id="gr_svn215_193"

><td id="193"><a href="#193">193</a></td></tr
><tr id="gr_svn215_194"

><td id="194"><a href="#194">194</a></td></tr
><tr id="gr_svn215_195"

><td id="195"><a href="#195">195</a></td></tr
><tr id="gr_svn215_196"

><td id="196"><a href="#196">196</a></td></tr
><tr id="gr_svn215_197"

><td id="197"><a href="#197">197</a></td></tr
><tr id="gr_svn215_198"

><td id="198"><a href="#198">198</a></td></tr
><tr id="gr_svn215_199"

><td id="199"><a href="#199">199</a></td></tr
><tr id="gr_svn215_200"

><td id="200"><a href="#200">200</a></td></tr
><tr id="gr_svn215_201"

><td id="201"><a href="#201">201</a></td></tr
><tr id="gr_svn215_202"

><td id="202"><a href="#202">202</a></td></tr
><tr id="gr_svn215_203"

><td id="203"><a href="#203">203</a></td></tr
><tr id="gr_svn215_204"

><td id="204"><a href="#204">204</a></td></tr
><tr id="gr_svn215_205"

><td id="205"><a href="#205">205</a></td></tr
><tr id="gr_svn215_206"

><td id="206"><a href="#206">206</a></td></tr
><tr id="gr_svn215_207"

><td id="207"><a href="#207">207</a></td></tr
><tr id="gr_svn215_208"

><td id="208"><a href="#208">208</a></td></tr
><tr id="gr_svn215_209"

><td id="209"><a href="#209">209</a></td></tr
><tr id="gr_svn215_210"

><td id="210"><a href="#210">210</a></td></tr
><tr id="gr_svn215_211"

><td id="211"><a href="#211">211</a></td></tr
><tr id="gr_svn215_212"

><td id="212"><a href="#212">212</a></td></tr
><tr id="gr_svn215_213"

><td id="213"><a href="#213">213</a></td></tr
><tr id="gr_svn215_214"

><td id="214"><a href="#214">214</a></td></tr
><tr id="gr_svn215_215"

><td id="215"><a href="#215">215</a></td></tr
><tr id="gr_svn215_216"

><td id="216"><a href="#216">216</a></td></tr
><tr id="gr_svn215_217"

><td id="217"><a href="#217">217</a></td></tr
><tr id="gr_svn215_218"

><td id="218"><a href="#218">218</a></td></tr
><tr id="gr_svn215_219"

><td id="219"><a href="#219">219</a></td></tr
><tr id="gr_svn215_220"

><td id="220"><a href="#220">220</a></td></tr
><tr id="gr_svn215_221"

><td id="221"><a href="#221">221</a></td></tr
><tr id="gr_svn215_222"

><td id="222"><a href="#222">222</a></td></tr
><tr id="gr_svn215_223"

><td id="223"><a href="#223">223</a></td></tr
><tr id="gr_svn215_224"

><td id="224"><a href="#224">224</a></td></tr
><tr id="gr_svn215_225"

><td id="225"><a href="#225">225</a></td></tr
><tr id="gr_svn215_226"

><td id="226"><a href="#226">226</a></td></tr
><tr id="gr_svn215_227"

><td id="227"><a href="#227">227</a></td></tr
><tr id="gr_svn215_228"

><td id="228"><a href="#228">228</a></td></tr
><tr id="gr_svn215_229"

><td id="229"><a href="#229">229</a></td></tr
><tr id="gr_svn215_230"

><td id="230"><a href="#230">230</a></td></tr
><tr id="gr_svn215_231"

><td id="231"><a href="#231">231</a></td></tr
><tr id="gr_svn215_232"

><td id="232"><a href="#232">232</a></td></tr
><tr id="gr_svn215_233"

><td id="233"><a href="#233">233</a></td></tr
><tr id="gr_svn215_234"

><td id="234"><a href="#234">234</a></td></tr
><tr id="gr_svn215_235"

><td id="235"><a href="#235">235</a></td></tr
><tr id="gr_svn215_236"

><td id="236"><a href="#236">236</a></td></tr
><tr id="gr_svn215_237"

><td id="237"><a href="#237">237</a></td></tr
><tr id="gr_svn215_238"

><td id="238"><a href="#238">238</a></td></tr
><tr id="gr_svn215_239"

><td id="239"><a href="#239">239</a></td></tr
><tr id="gr_svn215_240"

><td id="240"><a href="#240">240</a></td></tr
><tr id="gr_svn215_241"

><td id="241"><a href="#241">241</a></td></tr
><tr id="gr_svn215_242"

><td id="242"><a href="#242">242</a></td></tr
><tr id="gr_svn215_243"

><td id="243"><a href="#243">243</a></td></tr
><tr id="gr_svn215_244"

><td id="244"><a href="#244">244</a></td></tr
><tr id="gr_svn215_245"

><td id="245"><a href="#245">245</a></td></tr
><tr id="gr_svn215_246"

><td id="246"><a href="#246">246</a></td></tr
><tr id="gr_svn215_247"

><td id="247"><a href="#247">247</a></td></tr
><tr id="gr_svn215_248"

><td id="248"><a href="#248">248</a></td></tr
><tr id="gr_svn215_249"

><td id="249"><a href="#249">249</a></td></tr
><tr id="gr_svn215_250"

><td id="250"><a href="#250">250</a></td></tr
><tr id="gr_svn215_251"

><td id="251"><a href="#251">251</a></td></tr
><tr id="gr_svn215_252"

><td id="252"><a href="#252">252</a></td></tr
><tr id="gr_svn215_253"

><td id="253"><a href="#253">253</a></td></tr
><tr id="gr_svn215_254"

><td id="254"><a href="#254">254</a></td></tr
><tr id="gr_svn215_255"

><td id="255"><a href="#255">255</a></td></tr
><tr id="gr_svn215_256"

><td id="256"><a href="#256">256</a></td></tr
><tr id="gr_svn215_257"

><td id="257"><a href="#257">257</a></td></tr
><tr id="gr_svn215_258"

><td id="258"><a href="#258">258</a></td></tr
><tr id="gr_svn215_259"

><td id="259"><a href="#259">259</a></td></tr
><tr id="gr_svn215_260"

><td id="260"><a href="#260">260</a></td></tr
><tr id="gr_svn215_261"

><td id="261"><a href="#261">261</a></td></tr
><tr id="gr_svn215_262"

><td id="262"><a href="#262">262</a></td></tr
><tr id="gr_svn215_263"

><td id="263"><a href="#263">263</a></td></tr
><tr id="gr_svn215_264"

><td id="264"><a href="#264">264</a></td></tr
><tr id="gr_svn215_265"

><td id="265"><a href="#265">265</a></td></tr
><tr id="gr_svn215_266"

><td id="266"><a href="#266">266</a></td></tr
><tr id="gr_svn215_267"

><td id="267"><a href="#267">267</a></td></tr
><tr id="gr_svn215_268"

><td id="268"><a href="#268">268</a></td></tr
><tr id="gr_svn215_269"

><td id="269"><a href="#269">269</a></td></tr
><tr id="gr_svn215_270"

><td id="270"><a href="#270">270</a></td></tr
><tr id="gr_svn215_271"

><td id="271"><a href="#271">271</a></td></tr
><tr id="gr_svn215_272"

><td id="272"><a href="#272">272</a></td></tr
><tr id="gr_svn215_273"

><td id="273"><a href="#273">273</a></td></tr
><tr id="gr_svn215_274"

><td id="274"><a href="#274">274</a></td></tr
><tr id="gr_svn215_275"

><td id="275"><a href="#275">275</a></td></tr
><tr id="gr_svn215_276"

><td id="276"><a href="#276">276</a></td></tr
><tr id="gr_svn215_277"

><td id="277"><a href="#277">277</a></td></tr
><tr id="gr_svn215_278"

><td id="278"><a href="#278">278</a></td></tr
><tr id="gr_svn215_279"

><td id="279"><a href="#279">279</a></td></tr
><tr id="gr_svn215_280"

><td id="280"><a href="#280">280</a></td></tr
><tr id="gr_svn215_281"

><td id="281"><a href="#281">281</a></td></tr
><tr id="gr_svn215_282"

><td id="282"><a href="#282">282</a></td></tr
><tr id="gr_svn215_283"

><td id="283"><a href="#283">283</a></td></tr
><tr id="gr_svn215_284"

><td id="284"><a href="#284">284</a></td></tr
><tr id="gr_svn215_285"

><td id="285"><a href="#285">285</a></td></tr
><tr id="gr_svn215_286"

><td id="286"><a href="#286">286</a></td></tr
><tr id="gr_svn215_287"

><td id="287"><a href="#287">287</a></td></tr
><tr id="gr_svn215_288"

><td id="288"><a href="#288">288</a></td></tr
><tr id="gr_svn215_289"

><td id="289"><a href="#289">289</a></td></tr
><tr id="gr_svn215_290"

><td id="290"><a href="#290">290</a></td></tr
><tr id="gr_svn215_291"

><td id="291"><a href="#291">291</a></td></tr
><tr id="gr_svn215_292"

><td id="292"><a href="#292">292</a></td></tr
><tr id="gr_svn215_293"

><td id="293"><a href="#293">293</a></td></tr
><tr id="gr_svn215_294"

><td id="294"><a href="#294">294</a></td></tr
><tr id="gr_svn215_295"

><td id="295"><a href="#295">295</a></td></tr
><tr id="gr_svn215_296"

><td id="296"><a href="#296">296</a></td></tr
><tr id="gr_svn215_297"

><td id="297"><a href="#297">297</a></td></tr
><tr id="gr_svn215_298"

><td id="298"><a href="#298">298</a></td></tr
><tr id="gr_svn215_299"

><td id="299"><a href="#299">299</a></td></tr
><tr id="gr_svn215_300"

><td id="300"><a href="#300">300</a></td></tr
><tr id="gr_svn215_301"

><td id="301"><a href="#301">301</a></td></tr
><tr id="gr_svn215_302"

><td id="302"><a href="#302">302</a></td></tr
><tr id="gr_svn215_303"

><td id="303"><a href="#303">303</a></td></tr
><tr id="gr_svn215_304"

><td id="304"><a href="#304">304</a></td></tr
><tr id="gr_svn215_305"

><td id="305"><a href="#305">305</a></td></tr
><tr id="gr_svn215_306"

><td id="306"><a href="#306">306</a></td></tr
><tr id="gr_svn215_307"

><td id="307"><a href="#307">307</a></td></tr
><tr id="gr_svn215_308"

><td id="308"><a href="#308">308</a></td></tr
><tr id="gr_svn215_309"

><td id="309"><a href="#309">309</a></td></tr
><tr id="gr_svn215_310"

><td id="310"><a href="#310">310</a></td></tr
><tr id="gr_svn215_311"

><td id="311"><a href="#311">311</a></td></tr
><tr id="gr_svn215_312"

><td id="312"><a href="#312">312</a></td></tr
><tr id="gr_svn215_313"

><td id="313"><a href="#313">313</a></td></tr
><tr id="gr_svn215_314"

><td id="314"><a href="#314">314</a></td></tr
><tr id="gr_svn215_315"

><td id="315"><a href="#315">315</a></td></tr
><tr id="gr_svn215_316"

><td id="316"><a href="#316">316</a></td></tr
><tr id="gr_svn215_317"

><td id="317"><a href="#317">317</a></td></tr
><tr id="gr_svn215_318"

><td id="318"><a href="#318">318</a></td></tr
><tr id="gr_svn215_319"

><td id="319"><a href="#319">319</a></td></tr
><tr id="gr_svn215_320"

><td id="320"><a href="#320">320</a></td></tr
><tr id="gr_svn215_321"

><td id="321"><a href="#321">321</a></td></tr
><tr id="gr_svn215_322"

><td id="322"><a href="#322">322</a></td></tr
><tr id="gr_svn215_323"

><td id="323"><a href="#323">323</a></td></tr
><tr id="gr_svn215_324"

><td id="324"><a href="#324">324</a></td></tr
><tr id="gr_svn215_325"

><td id="325"><a href="#325">325</a></td></tr
><tr id="gr_svn215_326"

><td id="326"><a href="#326">326</a></td></tr
><tr id="gr_svn215_327"

><td id="327"><a href="#327">327</a></td></tr
><tr id="gr_svn215_328"

><td id="328"><a href="#328">328</a></td></tr
><tr id="gr_svn215_329"

><td id="329"><a href="#329">329</a></td></tr
><tr id="gr_svn215_330"

><td id="330"><a href="#330">330</a></td></tr
><tr id="gr_svn215_331"

><td id="331"><a href="#331">331</a></td></tr
><tr id="gr_svn215_332"

><td id="332"><a href="#332">332</a></td></tr
><tr id="gr_svn215_333"

><td id="333"><a href="#333">333</a></td></tr
><tr id="gr_svn215_334"

><td id="334"><a href="#334">334</a></td></tr
><tr id="gr_svn215_335"

><td id="335"><a href="#335">335</a></td></tr
><tr id="gr_svn215_336"

><td id="336"><a href="#336">336</a></td></tr
><tr id="gr_svn215_337"

><td id="337"><a href="#337">337</a></td></tr
><tr id="gr_svn215_338"

><td id="338"><a href="#338">338</a></td></tr
><tr id="gr_svn215_339"

><td id="339"><a href="#339">339</a></td></tr
><tr id="gr_svn215_340"

><td id="340"><a href="#340">340</a></td></tr
><tr id="gr_svn215_341"

><td id="341"><a href="#341">341</a></td></tr
><tr id="gr_svn215_342"

><td id="342"><a href="#342">342</a></td></tr
><tr id="gr_svn215_343"

><td id="343"><a href="#343">343</a></td></tr
><tr id="gr_svn215_344"

><td id="344"><a href="#344">344</a></td></tr
><tr id="gr_svn215_345"

><td id="345"><a href="#345">345</a></td></tr
><tr id="gr_svn215_346"

><td id="346"><a href="#346">346</a></td></tr
><tr id="gr_svn215_347"

><td id="347"><a href="#347">347</a></td></tr
><tr id="gr_svn215_348"

><td id="348"><a href="#348">348</a></td></tr
><tr id="gr_svn215_349"

><td id="349"><a href="#349">349</a></td></tr
><tr id="gr_svn215_350"

><td id="350"><a href="#350">350</a></td></tr
><tr id="gr_svn215_351"

><td id="351"><a href="#351">351</a></td></tr
><tr id="gr_svn215_352"

><td id="352"><a href="#352">352</a></td></tr
><tr id="gr_svn215_353"

><td id="353"><a href="#353">353</a></td></tr
><tr id="gr_svn215_354"

><td id="354"><a href="#354">354</a></td></tr
><tr id="gr_svn215_355"

><td id="355"><a href="#355">355</a></td></tr
><tr id="gr_svn215_356"

><td id="356"><a href="#356">356</a></td></tr
><tr id="gr_svn215_357"

><td id="357"><a href="#357">357</a></td></tr
><tr id="gr_svn215_358"

><td id="358"><a href="#358">358</a></td></tr
><tr id="gr_svn215_359"

><td id="359"><a href="#359">359</a></td></tr
><tr id="gr_svn215_360"

><td id="360"><a href="#360">360</a></td></tr
><tr id="gr_svn215_361"

><td id="361"><a href="#361">361</a></td></tr
><tr id="gr_svn215_362"

><td id="362"><a href="#362">362</a></td></tr
><tr id="gr_svn215_363"

><td id="363"><a href="#363">363</a></td></tr
><tr id="gr_svn215_364"

><td id="364"><a href="#364">364</a></td></tr
><tr id="gr_svn215_365"

><td id="365"><a href="#365">365</a></td></tr
><tr id="gr_svn215_366"

><td id="366"><a href="#366">366</a></td></tr
><tr id="gr_svn215_367"

><td id="367"><a href="#367">367</a></td></tr
><tr id="gr_svn215_368"

><td id="368"><a href="#368">368</a></td></tr
><tr id="gr_svn215_369"

><td id="369"><a href="#369">369</a></td></tr
><tr id="gr_svn215_370"

><td id="370"><a href="#370">370</a></td></tr
><tr id="gr_svn215_371"

><td id="371"><a href="#371">371</a></td></tr
><tr id="gr_svn215_372"

><td id="372"><a href="#372">372</a></td></tr
><tr id="gr_svn215_373"

><td id="373"><a href="#373">373</a></td></tr
><tr id="gr_svn215_374"

><td id="374"><a href="#374">374</a></td></tr
><tr id="gr_svn215_375"

><td id="375"><a href="#375">375</a></td></tr
><tr id="gr_svn215_376"

><td id="376"><a href="#376">376</a></td></tr
><tr id="gr_svn215_377"

><td id="377"><a href="#377">377</a></td></tr
><tr id="gr_svn215_378"

><td id="378"><a href="#378">378</a></td></tr
><tr id="gr_svn215_379"

><td id="379"><a href="#379">379</a></td></tr
><tr id="gr_svn215_380"

><td id="380"><a href="#380">380</a></td></tr
><tr id="gr_svn215_381"

><td id="381"><a href="#381">381</a></td></tr
><tr id="gr_svn215_382"

><td id="382"><a href="#382">382</a></td></tr
><tr id="gr_svn215_383"

><td id="383"><a href="#383">383</a></td></tr
><tr id="gr_svn215_384"

><td id="384"><a href="#384">384</a></td></tr
><tr id="gr_svn215_385"

><td id="385"><a href="#385">385</a></td></tr
><tr id="gr_svn215_386"

><td id="386"><a href="#386">386</a></td></tr
><tr id="gr_svn215_387"

><td id="387"><a href="#387">387</a></td></tr
><tr id="gr_svn215_388"

><td id="388"><a href="#388">388</a></td></tr
><tr id="gr_svn215_389"

><td id="389"><a href="#389">389</a></td></tr
><tr id="gr_svn215_390"

><td id="390"><a href="#390">390</a></td></tr
><tr id="gr_svn215_391"

><td id="391"><a href="#391">391</a></td></tr
><tr id="gr_svn215_392"

><td id="392"><a href="#392">392</a></td></tr
><tr id="gr_svn215_393"

><td id="393"><a href="#393">393</a></td></tr
><tr id="gr_svn215_394"

><td id="394"><a href="#394">394</a></td></tr
><tr id="gr_svn215_395"

><td id="395"><a href="#395">395</a></td></tr
><tr id="gr_svn215_396"

><td id="396"><a href="#396">396</a></td></tr
><tr id="gr_svn215_397"

><td id="397"><a href="#397">397</a></td></tr
><tr id="gr_svn215_398"

><td id="398"><a href="#398">398</a></td></tr
><tr id="gr_svn215_399"

><td id="399"><a href="#399">399</a></td></tr
><tr id="gr_svn215_400"

><td id="400"><a href="#400">400</a></td></tr
><tr id="gr_svn215_401"

><td id="401"><a href="#401">401</a></td></tr
><tr id="gr_svn215_402"

><td id="402"><a href="#402">402</a></td></tr
><tr id="gr_svn215_403"

><td id="403"><a href="#403">403</a></td></tr
><tr id="gr_svn215_404"

><td id="404"><a href="#404">404</a></td></tr
><tr id="gr_svn215_405"

><td id="405"><a href="#405">405</a></td></tr
><tr id="gr_svn215_406"

><td id="406"><a href="#406">406</a></td></tr
><tr id="gr_svn215_407"

><td id="407"><a href="#407">407</a></td></tr
><tr id="gr_svn215_408"

><td id="408"><a href="#408">408</a></td></tr
><tr id="gr_svn215_409"

><td id="409"><a href="#409">409</a></td></tr
><tr id="gr_svn215_410"

><td id="410"><a href="#410">410</a></td></tr
><tr id="gr_svn215_411"

><td id="411"><a href="#411">411</a></td></tr
><tr id="gr_svn215_412"

><td id="412"><a href="#412">412</a></td></tr
><tr id="gr_svn215_413"

><td id="413"><a href="#413">413</a></td></tr
><tr id="gr_svn215_414"

><td id="414"><a href="#414">414</a></td></tr
><tr id="gr_svn215_415"

><td id="415"><a href="#415">415</a></td></tr
><tr id="gr_svn215_416"

><td id="416"><a href="#416">416</a></td></tr
><tr id="gr_svn215_417"

><td id="417"><a href="#417">417</a></td></tr
><tr id="gr_svn215_418"

><td id="418"><a href="#418">418</a></td></tr
><tr id="gr_svn215_419"

><td id="419"><a href="#419">419</a></td></tr
><tr id="gr_svn215_420"

><td id="420"><a href="#420">420</a></td></tr
><tr id="gr_svn215_421"

><td id="421"><a href="#421">421</a></td></tr
><tr id="gr_svn215_422"

><td id="422"><a href="#422">422</a></td></tr
><tr id="gr_svn215_423"

><td id="423"><a href="#423">423</a></td></tr
><tr id="gr_svn215_424"

><td id="424"><a href="#424">424</a></td></tr
><tr id="gr_svn215_425"

><td id="425"><a href="#425">425</a></td></tr
><tr id="gr_svn215_426"

><td id="426"><a href="#426">426</a></td></tr
><tr id="gr_svn215_427"

><td id="427"><a href="#427">427</a></td></tr
><tr id="gr_svn215_428"

><td id="428"><a href="#428">428</a></td></tr
><tr id="gr_svn215_429"

><td id="429"><a href="#429">429</a></td></tr
><tr id="gr_svn215_430"

><td id="430"><a href="#430">430</a></td></tr
><tr id="gr_svn215_431"

><td id="431"><a href="#431">431</a></td></tr
><tr id="gr_svn215_432"

><td id="432"><a href="#432">432</a></td></tr
><tr id="gr_svn215_433"

><td id="433"><a href="#433">433</a></td></tr
><tr id="gr_svn215_434"

><td id="434"><a href="#434">434</a></td></tr
><tr id="gr_svn215_435"

><td id="435"><a href="#435">435</a></td></tr
><tr id="gr_svn215_436"

><td id="436"><a href="#436">436</a></td></tr
><tr id="gr_svn215_437"

><td id="437"><a href="#437">437</a></td></tr
><tr id="gr_svn215_438"

><td id="438"><a href="#438">438</a></td></tr
><tr id="gr_svn215_439"

><td id="439"><a href="#439">439</a></td></tr
><tr id="gr_svn215_440"

><td id="440"><a href="#440">440</a></td></tr
><tr id="gr_svn215_441"

><td id="441"><a href="#441">441</a></td></tr
><tr id="gr_svn215_442"

><td id="442"><a href="#442">442</a></td></tr
><tr id="gr_svn215_443"

><td id="443"><a href="#443">443</a></td></tr
><tr id="gr_svn215_444"

><td id="444"><a href="#444">444</a></td></tr
><tr id="gr_svn215_445"

><td id="445"><a href="#445">445</a></td></tr
><tr id="gr_svn215_446"

><td id="446"><a href="#446">446</a></td></tr
><tr id="gr_svn215_447"

><td id="447"><a href="#447">447</a></td></tr
><tr id="gr_svn215_448"

><td id="448"><a href="#448">448</a></td></tr
><tr id="gr_svn215_449"

><td id="449"><a href="#449">449</a></td></tr
><tr id="gr_svn215_450"

><td id="450"><a href="#450">450</a></td></tr
><tr id="gr_svn215_451"

><td id="451"><a href="#451">451</a></td></tr
><tr id="gr_svn215_452"

><td id="452"><a href="#452">452</a></td></tr
><tr id="gr_svn215_453"

><td id="453"><a href="#453">453</a></td></tr
><tr id="gr_svn215_454"

><td id="454"><a href="#454">454</a></td></tr
><tr id="gr_svn215_455"

><td id="455"><a href="#455">455</a></td></tr
><tr id="gr_svn215_456"

><td id="456"><a href="#456">456</a></td></tr
><tr id="gr_svn215_457"

><td id="457"><a href="#457">457</a></td></tr
><tr id="gr_svn215_458"

><td id="458"><a href="#458">458</a></td></tr
><tr id="gr_svn215_459"

><td id="459"><a href="#459">459</a></td></tr
><tr id="gr_svn215_460"

><td id="460"><a href="#460">460</a></td></tr
><tr id="gr_svn215_461"

><td id="461"><a href="#461">461</a></td></tr
><tr id="gr_svn215_462"

><td id="462"><a href="#462">462</a></td></tr
><tr id="gr_svn215_463"

><td id="463"><a href="#463">463</a></td></tr
><tr id="gr_svn215_464"

><td id="464"><a href="#464">464</a></td></tr
><tr id="gr_svn215_465"

><td id="465"><a href="#465">465</a></td></tr
><tr id="gr_svn215_466"

><td id="466"><a href="#466">466</a></td></tr
><tr id="gr_svn215_467"

><td id="467"><a href="#467">467</a></td></tr
><tr id="gr_svn215_468"

><td id="468"><a href="#468">468</a></td></tr
><tr id="gr_svn215_469"

><td id="469"><a href="#469">469</a></td></tr
><tr id="gr_svn215_470"

><td id="470"><a href="#470">470</a></td></tr
><tr id="gr_svn215_471"

><td id="471"><a href="#471">471</a></td></tr
><tr id="gr_svn215_472"

><td id="472"><a href="#472">472</a></td></tr
><tr id="gr_svn215_473"

><td id="473"><a href="#473">473</a></td></tr
><tr id="gr_svn215_474"

><td id="474"><a href="#474">474</a></td></tr
><tr id="gr_svn215_475"

><td id="475"><a href="#475">475</a></td></tr
><tr id="gr_svn215_476"

><td id="476"><a href="#476">476</a></td></tr
><tr id="gr_svn215_477"

><td id="477"><a href="#477">477</a></td></tr
><tr id="gr_svn215_478"

><td id="478"><a href="#478">478</a></td></tr
><tr id="gr_svn215_479"

><td id="479"><a href="#479">479</a></td></tr
><tr id="gr_svn215_480"

><td id="480"><a href="#480">480</a></td></tr
><tr id="gr_svn215_481"

><td id="481"><a href="#481">481</a></td></tr
><tr id="gr_svn215_482"

><td id="482"><a href="#482">482</a></td></tr
><tr id="gr_svn215_483"

><td id="483"><a href="#483">483</a></td></tr
><tr id="gr_svn215_484"

><td id="484"><a href="#484">484</a></td></tr
><tr id="gr_svn215_485"

><td id="485"><a href="#485">485</a></td></tr
><tr id="gr_svn215_486"

><td id="486"><a href="#486">486</a></td></tr
><tr id="gr_svn215_487"

><td id="487"><a href="#487">487</a></td></tr
><tr id="gr_svn215_488"

><td id="488"><a href="#488">488</a></td></tr
><tr id="gr_svn215_489"

><td id="489"><a href="#489">489</a></td></tr
><tr id="gr_svn215_490"

><td id="490"><a href="#490">490</a></td></tr
><tr id="gr_svn215_491"

><td id="491"><a href="#491">491</a></td></tr
><tr id="gr_svn215_492"

><td id="492"><a href="#492">492</a></td></tr
><tr id="gr_svn215_493"

><td id="493"><a href="#493">493</a></td></tr
><tr id="gr_svn215_494"

><td id="494"><a href="#494">494</a></td></tr
><tr id="gr_svn215_495"

><td id="495"><a href="#495">495</a></td></tr
><tr id="gr_svn215_496"

><td id="496"><a href="#496">496</a></td></tr
><tr id="gr_svn215_497"

><td id="497"><a href="#497">497</a></td></tr
><tr id="gr_svn215_498"

><td id="498"><a href="#498">498</a></td></tr
><tr id="gr_svn215_499"

><td id="499"><a href="#499">499</a></td></tr
><tr id="gr_svn215_500"

><td id="500"><a href="#500">500</a></td></tr
><tr id="gr_svn215_501"

><td id="501"><a href="#501">501</a></td></tr
><tr id="gr_svn215_502"

><td id="502"><a href="#502">502</a></td></tr
><tr id="gr_svn215_503"

><td id="503"><a href="#503">503</a></td></tr
><tr id="gr_svn215_504"

><td id="504"><a href="#504">504</a></td></tr
><tr id="gr_svn215_505"

><td id="505"><a href="#505">505</a></td></tr
><tr id="gr_svn215_506"

><td id="506"><a href="#506">506</a></td></tr
><tr id="gr_svn215_507"

><td id="507"><a href="#507">507</a></td></tr
><tr id="gr_svn215_508"

><td id="508"><a href="#508">508</a></td></tr
><tr id="gr_svn215_509"

><td id="509"><a href="#509">509</a></td></tr
><tr id="gr_svn215_510"

><td id="510"><a href="#510">510</a></td></tr
><tr id="gr_svn215_511"

><td id="511"><a href="#511">511</a></td></tr
><tr id="gr_svn215_512"

><td id="512"><a href="#512">512</a></td></tr
><tr id="gr_svn215_513"

><td id="513"><a href="#513">513</a></td></tr
><tr id="gr_svn215_514"

><td id="514"><a href="#514">514</a></td></tr
><tr id="gr_svn215_515"

><td id="515"><a href="#515">515</a></td></tr
><tr id="gr_svn215_516"

><td id="516"><a href="#516">516</a></td></tr
><tr id="gr_svn215_517"

><td id="517"><a href="#517">517</a></td></tr
><tr id="gr_svn215_518"

><td id="518"><a href="#518">518</a></td></tr
><tr id="gr_svn215_519"

><td id="519"><a href="#519">519</a></td></tr
><tr id="gr_svn215_520"

><td id="520"><a href="#520">520</a></td></tr
><tr id="gr_svn215_521"

><td id="521"><a href="#521">521</a></td></tr
><tr id="gr_svn215_522"

><td id="522"><a href="#522">522</a></td></tr
><tr id="gr_svn215_523"

><td id="523"><a href="#523">523</a></td></tr
><tr id="gr_svn215_524"

><td id="524"><a href="#524">524</a></td></tr
><tr id="gr_svn215_525"

><td id="525"><a href="#525">525</a></td></tr
><tr id="gr_svn215_526"

><td id="526"><a href="#526">526</a></td></tr
><tr id="gr_svn215_527"

><td id="527"><a href="#527">527</a></td></tr
><tr id="gr_svn215_528"

><td id="528"><a href="#528">528</a></td></tr
><tr id="gr_svn215_529"

><td id="529"><a href="#529">529</a></td></tr
><tr id="gr_svn215_530"

><td id="530"><a href="#530">530</a></td></tr
><tr id="gr_svn215_531"

><td id="531"><a href="#531">531</a></td></tr
><tr id="gr_svn215_532"

><td id="532"><a href="#532">532</a></td></tr
><tr id="gr_svn215_533"

><td id="533"><a href="#533">533</a></td></tr
><tr id="gr_svn215_534"

><td id="534"><a href="#534">534</a></td></tr
><tr id="gr_svn215_535"

><td id="535"><a href="#535">535</a></td></tr
><tr id="gr_svn215_536"

><td id="536"><a href="#536">536</a></td></tr
><tr id="gr_svn215_537"

><td id="537"><a href="#537">537</a></td></tr
><tr id="gr_svn215_538"

><td id="538"><a href="#538">538</a></td></tr
><tr id="gr_svn215_539"

><td id="539"><a href="#539">539</a></td></tr
><tr id="gr_svn215_540"

><td id="540"><a href="#540">540</a></td></tr
><tr id="gr_svn215_541"

><td id="541"><a href="#541">541</a></td></tr
><tr id="gr_svn215_542"

><td id="542"><a href="#542">542</a></td></tr
><tr id="gr_svn215_543"

><td id="543"><a href="#543">543</a></td></tr
><tr id="gr_svn215_544"

><td id="544"><a href="#544">544</a></td></tr
><tr id="gr_svn215_545"

><td id="545"><a href="#545">545</a></td></tr
><tr id="gr_svn215_546"

><td id="546"><a href="#546">546</a></td></tr
><tr id="gr_svn215_547"

><td id="547"><a href="#547">547</a></td></tr
><tr id="gr_svn215_548"

><td id="548"><a href="#548">548</a></td></tr
><tr id="gr_svn215_549"

><td id="549"><a href="#549">549</a></td></tr
><tr id="gr_svn215_550"

><td id="550"><a href="#550">550</a></td></tr
><tr id="gr_svn215_551"

><td id="551"><a href="#551">551</a></td></tr
><tr id="gr_svn215_552"

><td id="552"><a href="#552">552</a></td></tr
><tr id="gr_svn215_553"

><td id="553"><a href="#553">553</a></td></tr
><tr id="gr_svn215_554"

><td id="554"><a href="#554">554</a></td></tr
><tr id="gr_svn215_555"

><td id="555"><a href="#555">555</a></td></tr
><tr id="gr_svn215_556"

><td id="556"><a href="#556">556</a></td></tr
><tr id="gr_svn215_557"

><td id="557"><a href="#557">557</a></td></tr
><tr id="gr_svn215_558"

><td id="558"><a href="#558">558</a></td></tr
><tr id="gr_svn215_559"

><td id="559"><a href="#559">559</a></td></tr
><tr id="gr_svn215_560"

><td id="560"><a href="#560">560</a></td></tr
><tr id="gr_svn215_561"

><td id="561"><a href="#561">561</a></td></tr
><tr id="gr_svn215_562"

><td id="562"><a href="#562">562</a></td></tr
><tr id="gr_svn215_563"

><td id="563"><a href="#563">563</a></td></tr
><tr id="gr_svn215_564"

><td id="564"><a href="#564">564</a></td></tr
><tr id="gr_svn215_565"

><td id="565"><a href="#565">565</a></td></tr
><tr id="gr_svn215_566"

><td id="566"><a href="#566">566</a></td></tr
><tr id="gr_svn215_567"

><td id="567"><a href="#567">567</a></td></tr
><tr id="gr_svn215_568"

><td id="568"><a href="#568">568</a></td></tr
><tr id="gr_svn215_569"

><td id="569"><a href="#569">569</a></td></tr
><tr id="gr_svn215_570"

><td id="570"><a href="#570">570</a></td></tr
><tr id="gr_svn215_571"

><td id="571"><a href="#571">571</a></td></tr
><tr id="gr_svn215_572"

><td id="572"><a href="#572">572</a></td></tr
><tr id="gr_svn215_573"

><td id="573"><a href="#573">573</a></td></tr
><tr id="gr_svn215_574"

><td id="574"><a href="#574">574</a></td></tr
><tr id="gr_svn215_575"

><td id="575"><a href="#575">575</a></td></tr
><tr id="gr_svn215_576"

><td id="576"><a href="#576">576</a></td></tr
><tr id="gr_svn215_577"

><td id="577"><a href="#577">577</a></td></tr
><tr id="gr_svn215_578"

><td id="578"><a href="#578">578</a></td></tr
><tr id="gr_svn215_579"

><td id="579"><a href="#579">579</a></td></tr
><tr id="gr_svn215_580"

><td id="580"><a href="#580">580</a></td></tr
><tr id="gr_svn215_581"

><td id="581"><a href="#581">581</a></td></tr
><tr id="gr_svn215_582"

><td id="582"><a href="#582">582</a></td></tr
><tr id="gr_svn215_583"

><td id="583"><a href="#583">583</a></td></tr
><tr id="gr_svn215_584"

><td id="584"><a href="#584">584</a></td></tr
><tr id="gr_svn215_585"

><td id="585"><a href="#585">585</a></td></tr
><tr id="gr_svn215_586"

><td id="586"><a href="#586">586</a></td></tr
><tr id="gr_svn215_587"

><td id="587"><a href="#587">587</a></td></tr
><tr id="gr_svn215_588"

><td id="588"><a href="#588">588</a></td></tr
><tr id="gr_svn215_589"

><td id="589"><a href="#589">589</a></td></tr
><tr id="gr_svn215_590"

><td id="590"><a href="#590">590</a></td></tr
><tr id="gr_svn215_591"

><td id="591"><a href="#591">591</a></td></tr
><tr id="gr_svn215_592"

><td id="592"><a href="#592">592</a></td></tr
><tr id="gr_svn215_593"

><td id="593"><a href="#593">593</a></td></tr
><tr id="gr_svn215_594"

><td id="594"><a href="#594">594</a></td></tr
><tr id="gr_svn215_595"

><td id="595"><a href="#595">595</a></td></tr
><tr id="gr_svn215_596"

><td id="596"><a href="#596">596</a></td></tr
><tr id="gr_svn215_597"

><td id="597"><a href="#597">597</a></td></tr
><tr id="gr_svn215_598"

><td id="598"><a href="#598">598</a></td></tr
><tr id="gr_svn215_599"

><td id="599"><a href="#599">599</a></td></tr
><tr id="gr_svn215_600"

><td id="600"><a href="#600">600</a></td></tr
><tr id="gr_svn215_601"

><td id="601"><a href="#601">601</a></td></tr
><tr id="gr_svn215_602"

><td id="602"><a href="#602">602</a></td></tr
><tr id="gr_svn215_603"

><td id="603"><a href="#603">603</a></td></tr
><tr id="gr_svn215_604"

><td id="604"><a href="#604">604</a></td></tr
><tr id="gr_svn215_605"

><td id="605"><a href="#605">605</a></td></tr
><tr id="gr_svn215_606"

><td id="606"><a href="#606">606</a></td></tr
><tr id="gr_svn215_607"

><td id="607"><a href="#607">607</a></td></tr
><tr id="gr_svn215_608"

><td id="608"><a href="#608">608</a></td></tr
><tr id="gr_svn215_609"

><td id="609"><a href="#609">609</a></td></tr
><tr id="gr_svn215_610"

><td id="610"><a href="#610">610</a></td></tr
><tr id="gr_svn215_611"

><td id="611"><a href="#611">611</a></td></tr
><tr id="gr_svn215_612"

><td id="612"><a href="#612">612</a></td></tr
><tr id="gr_svn215_613"

><td id="613"><a href="#613">613</a></td></tr
><tr id="gr_svn215_614"

><td id="614"><a href="#614">614</a></td></tr
><tr id="gr_svn215_615"

><td id="615"><a href="#615">615</a></td></tr
><tr id="gr_svn215_616"

><td id="616"><a href="#616">616</a></td></tr
><tr id="gr_svn215_617"

><td id="617"><a href="#617">617</a></td></tr
><tr id="gr_svn215_618"

><td id="618"><a href="#618">618</a></td></tr
><tr id="gr_svn215_619"

><td id="619"><a href="#619">619</a></td></tr
><tr id="gr_svn215_620"

><td id="620"><a href="#620">620</a></td></tr
><tr id="gr_svn215_621"

><td id="621"><a href="#621">621</a></td></tr
><tr id="gr_svn215_622"

><td id="622"><a href="#622">622</a></td></tr
><tr id="gr_svn215_623"

><td id="623"><a href="#623">623</a></td></tr
><tr id="gr_svn215_624"

><td id="624"><a href="#624">624</a></td></tr
><tr id="gr_svn215_625"

><td id="625"><a href="#625">625</a></td></tr
><tr id="gr_svn215_626"

><td id="626"><a href="#626">626</a></td></tr
><tr id="gr_svn215_627"

><td id="627"><a href="#627">627</a></td></tr
><tr id="gr_svn215_628"

><td id="628"><a href="#628">628</a></td></tr
><tr id="gr_svn215_629"

><td id="629"><a href="#629">629</a></td></tr
><tr id="gr_svn215_630"

><td id="630"><a href="#630">630</a></td></tr
><tr id="gr_svn215_631"

><td id="631"><a href="#631">631</a></td></tr
><tr id="gr_svn215_632"

><td id="632"><a href="#632">632</a></td></tr
><tr id="gr_svn215_633"

><td id="633"><a href="#633">633</a></td></tr
><tr id="gr_svn215_634"

><td id="634"><a href="#634">634</a></td></tr
><tr id="gr_svn215_635"

><td id="635"><a href="#635">635</a></td></tr
><tr id="gr_svn215_636"

><td id="636"><a href="#636">636</a></td></tr
><tr id="gr_svn215_637"

><td id="637"><a href="#637">637</a></td></tr
><tr id="gr_svn215_638"

><td id="638"><a href="#638">638</a></td></tr
><tr id="gr_svn215_639"

><td id="639"><a href="#639">639</a></td></tr
><tr id="gr_svn215_640"

><td id="640"><a href="#640">640</a></td></tr
><tr id="gr_svn215_641"

><td id="641"><a href="#641">641</a></td></tr
><tr id="gr_svn215_642"

><td id="642"><a href="#642">642</a></td></tr
><tr id="gr_svn215_643"

><td id="643"><a href="#643">643</a></td></tr
><tr id="gr_svn215_644"

><td id="644"><a href="#644">644</a></td></tr
><tr id="gr_svn215_645"

><td id="645"><a href="#645">645</a></td></tr
><tr id="gr_svn215_646"

><td id="646"><a href="#646">646</a></td></tr
><tr id="gr_svn215_647"

><td id="647"><a href="#647">647</a></td></tr
><tr id="gr_svn215_648"

><td id="648"><a href="#648">648</a></td></tr
><tr id="gr_svn215_649"

><td id="649"><a href="#649">649</a></td></tr
><tr id="gr_svn215_650"

><td id="650"><a href="#650">650</a></td></tr
><tr id="gr_svn215_651"

><td id="651"><a href="#651">651</a></td></tr
><tr id="gr_svn215_652"

><td id="652"><a href="#652">652</a></td></tr
><tr id="gr_svn215_653"

><td id="653"><a href="#653">653</a></td></tr
><tr id="gr_svn215_654"

><td id="654"><a href="#654">654</a></td></tr
><tr id="gr_svn215_655"

><td id="655"><a href="#655">655</a></td></tr
><tr id="gr_svn215_656"

><td id="656"><a href="#656">656</a></td></tr
><tr id="gr_svn215_657"

><td id="657"><a href="#657">657</a></td></tr
><tr id="gr_svn215_658"

><td id="658"><a href="#658">658</a></td></tr
><tr id="gr_svn215_659"

><td id="659"><a href="#659">659</a></td></tr
><tr id="gr_svn215_660"

><td id="660"><a href="#660">660</a></td></tr
><tr id="gr_svn215_661"

><td id="661"><a href="#661">661</a></td></tr
><tr id="gr_svn215_662"

><td id="662"><a href="#662">662</a></td></tr
><tr id="gr_svn215_663"

><td id="663"><a href="#663">663</a></td></tr
><tr id="gr_svn215_664"

><td id="664"><a href="#664">664</a></td></tr
><tr id="gr_svn215_665"

><td id="665"><a href="#665">665</a></td></tr
><tr id="gr_svn215_666"

><td id="666"><a href="#666">666</a></td></tr
><tr id="gr_svn215_667"

><td id="667"><a href="#667">667</a></td></tr
><tr id="gr_svn215_668"

><td id="668"><a href="#668">668</a></td></tr
><tr id="gr_svn215_669"

><td id="669"><a href="#669">669</a></td></tr
><tr id="gr_svn215_670"

><td id="670"><a href="#670">670</a></td></tr
><tr id="gr_svn215_671"

><td id="671"><a href="#671">671</a></td></tr
><tr id="gr_svn215_672"

><td id="672"><a href="#672">672</a></td></tr
><tr id="gr_svn215_673"

><td id="673"><a href="#673">673</a></td></tr
><tr id="gr_svn215_674"

><td id="674"><a href="#674">674</a></td></tr
><tr id="gr_svn215_675"

><td id="675"><a href="#675">675</a></td></tr
><tr id="gr_svn215_676"

><td id="676"><a href="#676">676</a></td></tr
><tr id="gr_svn215_677"

><td id="677"><a href="#677">677</a></td></tr
><tr id="gr_svn215_678"

><td id="678"><a href="#678">678</a></td></tr
><tr id="gr_svn215_679"

><td id="679"><a href="#679">679</a></td></tr
><tr id="gr_svn215_680"

><td id="680"><a href="#680">680</a></td></tr
><tr id="gr_svn215_681"

><td id="681"><a href="#681">681</a></td></tr
><tr id="gr_svn215_682"

><td id="682"><a href="#682">682</a></td></tr
><tr id="gr_svn215_683"

><td id="683"><a href="#683">683</a></td></tr
><tr id="gr_svn215_684"

><td id="684"><a href="#684">684</a></td></tr
><tr id="gr_svn215_685"

><td id="685"><a href="#685">685</a></td></tr
><tr id="gr_svn215_686"

><td id="686"><a href="#686">686</a></td></tr
><tr id="gr_svn215_687"

><td id="687"><a href="#687">687</a></td></tr
><tr id="gr_svn215_688"

><td id="688"><a href="#688">688</a></td></tr
><tr id="gr_svn215_689"

><td id="689"><a href="#689">689</a></td></tr
><tr id="gr_svn215_690"

><td id="690"><a href="#690">690</a></td></tr
><tr id="gr_svn215_691"

><td id="691"><a href="#691">691</a></td></tr
><tr id="gr_svn215_692"

><td id="692"><a href="#692">692</a></td></tr
><tr id="gr_svn215_693"

><td id="693"><a href="#693">693</a></td></tr
><tr id="gr_svn215_694"

><td id="694"><a href="#694">694</a></td></tr
><tr id="gr_svn215_695"

><td id="695"><a href="#695">695</a></td></tr
><tr id="gr_svn215_696"

><td id="696"><a href="#696">696</a></td></tr
><tr id="gr_svn215_697"

><td id="697"><a href="#697">697</a></td></tr
><tr id="gr_svn215_698"

><td id="698"><a href="#698">698</a></td></tr
><tr id="gr_svn215_699"

><td id="699"><a href="#699">699</a></td></tr
><tr id="gr_svn215_700"

><td id="700"><a href="#700">700</a></td></tr
><tr id="gr_svn215_701"

><td id="701"><a href="#701">701</a></td></tr
><tr id="gr_svn215_702"

><td id="702"><a href="#702">702</a></td></tr
><tr id="gr_svn215_703"

><td id="703"><a href="#703">703</a></td></tr
><tr id="gr_svn215_704"

><td id="704"><a href="#704">704</a></td></tr
><tr id="gr_svn215_705"

><td id="705"><a href="#705">705</a></td></tr
><tr id="gr_svn215_706"

><td id="706"><a href="#706">706</a></td></tr
><tr id="gr_svn215_707"

><td id="707"><a href="#707">707</a></td></tr
><tr id="gr_svn215_708"

><td id="708"><a href="#708">708</a></td></tr
><tr id="gr_svn215_709"

><td id="709"><a href="#709">709</a></td></tr
><tr id="gr_svn215_710"

><td id="710"><a href="#710">710</a></td></tr
><tr id="gr_svn215_711"

><td id="711"><a href="#711">711</a></td></tr
><tr id="gr_svn215_712"

><td id="712"><a href="#712">712</a></td></tr
><tr id="gr_svn215_713"

><td id="713"><a href="#713">713</a></td></tr
><tr id="gr_svn215_714"

><td id="714"><a href="#714">714</a></td></tr
><tr id="gr_svn215_715"

><td id="715"><a href="#715">715</a></td></tr
><tr id="gr_svn215_716"

><td id="716"><a href="#716">716</a></td></tr
><tr id="gr_svn215_717"

><td id="717"><a href="#717">717</a></td></tr
><tr id="gr_svn215_718"

><td id="718"><a href="#718">718</a></td></tr
><tr id="gr_svn215_719"

><td id="719"><a href="#719">719</a></td></tr
><tr id="gr_svn215_720"

><td id="720"><a href="#720">720</a></td></tr
><tr id="gr_svn215_721"

><td id="721"><a href="#721">721</a></td></tr
><tr id="gr_svn215_722"

><td id="722"><a href="#722">722</a></td></tr
><tr id="gr_svn215_723"

><td id="723"><a href="#723">723</a></td></tr
><tr id="gr_svn215_724"

><td id="724"><a href="#724">724</a></td></tr
><tr id="gr_svn215_725"

><td id="725"><a href="#725">725</a></td></tr
><tr id="gr_svn215_726"

><td id="726"><a href="#726">726</a></td></tr
><tr id="gr_svn215_727"

><td id="727"><a href="#727">727</a></td></tr
><tr id="gr_svn215_728"

><td id="728"><a href="#728">728</a></td></tr
><tr id="gr_svn215_729"

><td id="729"><a href="#729">729</a></td></tr
><tr id="gr_svn215_730"

><td id="730"><a href="#730">730</a></td></tr
><tr id="gr_svn215_731"

><td id="731"><a href="#731">731</a></td></tr
><tr id="gr_svn215_732"

><td id="732"><a href="#732">732</a></td></tr
><tr id="gr_svn215_733"

><td id="733"><a href="#733">733</a></td></tr
><tr id="gr_svn215_734"

><td id="734"><a href="#734">734</a></td></tr
><tr id="gr_svn215_735"

><td id="735"><a href="#735">735</a></td></tr
><tr id="gr_svn215_736"

><td id="736"><a href="#736">736</a></td></tr
><tr id="gr_svn215_737"

><td id="737"><a href="#737">737</a></td></tr
><tr id="gr_svn215_738"

><td id="738"><a href="#738">738</a></td></tr
><tr id="gr_svn215_739"

><td id="739"><a href="#739">739</a></td></tr
><tr id="gr_svn215_740"

><td id="740"><a href="#740">740</a></td></tr
><tr id="gr_svn215_741"

><td id="741"><a href="#741">741</a></td></tr
><tr id="gr_svn215_742"

><td id="742"><a href="#742">742</a></td></tr
><tr id="gr_svn215_743"

><td id="743"><a href="#743">743</a></td></tr
><tr id="gr_svn215_744"

><td id="744"><a href="#744">744</a></td></tr
><tr id="gr_svn215_745"

><td id="745"><a href="#745">745</a></td></tr
><tr id="gr_svn215_746"

><td id="746"><a href="#746">746</a></td></tr
><tr id="gr_svn215_747"

><td id="747"><a href="#747">747</a></td></tr
><tr id="gr_svn215_748"

><td id="748"><a href="#748">748</a></td></tr
><tr id="gr_svn215_749"

><td id="749"><a href="#749">749</a></td></tr
><tr id="gr_svn215_750"

><td id="750"><a href="#750">750</a></td></tr
><tr id="gr_svn215_751"

><td id="751"><a href="#751">751</a></td></tr
><tr id="gr_svn215_752"

><td id="752"><a href="#752">752</a></td></tr
><tr id="gr_svn215_753"

><td id="753"><a href="#753">753</a></td></tr
><tr id="gr_svn215_754"

><td id="754"><a href="#754">754</a></td></tr
><tr id="gr_svn215_755"

><td id="755"><a href="#755">755</a></td></tr
><tr id="gr_svn215_756"

><td id="756"><a href="#756">756</a></td></tr
><tr id="gr_svn215_757"

><td id="757"><a href="#757">757</a></td></tr
><tr id="gr_svn215_758"

><td id="758"><a href="#758">758</a></td></tr
><tr id="gr_svn215_759"

><td id="759"><a href="#759">759</a></td></tr
><tr id="gr_svn215_760"

><td id="760"><a href="#760">760</a></td></tr
><tr id="gr_svn215_761"

><td id="761"><a href="#761">761</a></td></tr
><tr id="gr_svn215_762"

><td id="762"><a href="#762">762</a></td></tr
><tr id="gr_svn215_763"

><td id="763"><a href="#763">763</a></td></tr
><tr id="gr_svn215_764"

><td id="764"><a href="#764">764</a></td></tr
><tr id="gr_svn215_765"

><td id="765"><a href="#765">765</a></td></tr
><tr id="gr_svn215_766"

><td id="766"><a href="#766">766</a></td></tr
><tr id="gr_svn215_767"

><td id="767"><a href="#767">767</a></td></tr
><tr id="gr_svn215_768"

><td id="768"><a href="#768">768</a></td></tr
><tr id="gr_svn215_769"

><td id="769"><a href="#769">769</a></td></tr
><tr id="gr_svn215_770"

><td id="770"><a href="#770">770</a></td></tr
><tr id="gr_svn215_771"

><td id="771"><a href="#771">771</a></td></tr
><tr id="gr_svn215_772"

><td id="772"><a href="#772">772</a></td></tr
><tr id="gr_svn215_773"

><td id="773"><a href="#773">773</a></td></tr
><tr id="gr_svn215_774"

><td id="774"><a href="#774">774</a></td></tr
><tr id="gr_svn215_775"

><td id="775"><a href="#775">775</a></td></tr
><tr id="gr_svn215_776"

><td id="776"><a href="#776">776</a></td></tr
><tr id="gr_svn215_777"

><td id="777"><a href="#777">777</a></td></tr
><tr id="gr_svn215_778"

><td id="778"><a href="#778">778</a></td></tr
><tr id="gr_svn215_779"

><td id="779"><a href="#779">779</a></td></tr
><tr id="gr_svn215_780"

><td id="780"><a href="#780">780</a></td></tr
><tr id="gr_svn215_781"

><td id="781"><a href="#781">781</a></td></tr
><tr id="gr_svn215_782"

><td id="782"><a href="#782">782</a></td></tr
><tr id="gr_svn215_783"

><td id="783"><a href="#783">783</a></td></tr
><tr id="gr_svn215_784"

><td id="784"><a href="#784">784</a></td></tr
><tr id="gr_svn215_785"

><td id="785"><a href="#785">785</a></td></tr
><tr id="gr_svn215_786"

><td id="786"><a href="#786">786</a></td></tr
><tr id="gr_svn215_787"

><td id="787"><a href="#787">787</a></td></tr
><tr id="gr_svn215_788"

><td id="788"><a href="#788">788</a></td></tr
><tr id="gr_svn215_789"

><td id="789"><a href="#789">789</a></td></tr
><tr id="gr_svn215_790"

><td id="790"><a href="#790">790</a></td></tr
><tr id="gr_svn215_791"

><td id="791"><a href="#791">791</a></td></tr
><tr id="gr_svn215_792"

><td id="792"><a href="#792">792</a></td></tr
><tr id="gr_svn215_793"

><td id="793"><a href="#793">793</a></td></tr
><tr id="gr_svn215_794"

><td id="794"><a href="#794">794</a></td></tr
><tr id="gr_svn215_795"

><td id="795"><a href="#795">795</a></td></tr
><tr id="gr_svn215_796"

><td id="796"><a href="#796">796</a></td></tr
><tr id="gr_svn215_797"

><td id="797"><a href="#797">797</a></td></tr
><tr id="gr_svn215_798"

><td id="798"><a href="#798">798</a></td></tr
><tr id="gr_svn215_799"

><td id="799"><a href="#799">799</a></td></tr
><tr id="gr_svn215_800"

><td id="800"><a href="#800">800</a></td></tr
><tr id="gr_svn215_801"

><td id="801"><a href="#801">801</a></td></tr
><tr id="gr_svn215_802"

><td id="802"><a href="#802">802</a></td></tr
><tr id="gr_svn215_803"

><td id="803"><a href="#803">803</a></td></tr
><tr id="gr_svn215_804"

><td id="804"><a href="#804">804</a></td></tr
><tr id="gr_svn215_805"

><td id="805"><a href="#805">805</a></td></tr
><tr id="gr_svn215_806"

><td id="806"><a href="#806">806</a></td></tr
><tr id="gr_svn215_807"

><td id="807"><a href="#807">807</a></td></tr
><tr id="gr_svn215_808"

><td id="808"><a href="#808">808</a></td></tr
><tr id="gr_svn215_809"

><td id="809"><a href="#809">809</a></td></tr
><tr id="gr_svn215_810"

><td id="810"><a href="#810">810</a></td></tr
><tr id="gr_svn215_811"

><td id="811"><a href="#811">811</a></td></tr
><tr id="gr_svn215_812"

><td id="812"><a href="#812">812</a></td></tr
><tr id="gr_svn215_813"

><td id="813"><a href="#813">813</a></td></tr
><tr id="gr_svn215_814"

><td id="814"><a href="#814">814</a></td></tr
><tr id="gr_svn215_815"

><td id="815"><a href="#815">815</a></td></tr
><tr id="gr_svn215_816"

><td id="816"><a href="#816">816</a></td></tr
><tr id="gr_svn215_817"

><td id="817"><a href="#817">817</a></td></tr
><tr id="gr_svn215_818"

><td id="818"><a href="#818">818</a></td></tr
><tr id="gr_svn215_819"

><td id="819"><a href="#819">819</a></td></tr
><tr id="gr_svn215_820"

><td id="820"><a href="#820">820</a></td></tr
><tr id="gr_svn215_821"

><td id="821"><a href="#821">821</a></td></tr
><tr id="gr_svn215_822"

><td id="822"><a href="#822">822</a></td></tr
><tr id="gr_svn215_823"

><td id="823"><a href="#823">823</a></td></tr
><tr id="gr_svn215_824"

><td id="824"><a href="#824">824</a></td></tr
><tr id="gr_svn215_825"

><td id="825"><a href="#825">825</a></td></tr
><tr id="gr_svn215_826"

><td id="826"><a href="#826">826</a></td></tr
><tr id="gr_svn215_827"

><td id="827"><a href="#827">827</a></td></tr
><tr id="gr_svn215_828"

><td id="828"><a href="#828">828</a></td></tr
><tr id="gr_svn215_829"

><td id="829"><a href="#829">829</a></td></tr
><tr id="gr_svn215_830"

><td id="830"><a href="#830">830</a></td></tr
><tr id="gr_svn215_831"

><td id="831"><a href="#831">831</a></td></tr
><tr id="gr_svn215_832"

><td id="832"><a href="#832">832</a></td></tr
><tr id="gr_svn215_833"

><td id="833"><a href="#833">833</a></td></tr
><tr id="gr_svn215_834"

><td id="834"><a href="#834">834</a></td></tr
><tr id="gr_svn215_835"

><td id="835"><a href="#835">835</a></td></tr
><tr id="gr_svn215_836"

><td id="836"><a href="#836">836</a></td></tr
><tr id="gr_svn215_837"

><td id="837"><a href="#837">837</a></td></tr
><tr id="gr_svn215_838"

><td id="838"><a href="#838">838</a></td></tr
><tr id="gr_svn215_839"

><td id="839"><a href="#839">839</a></td></tr
><tr id="gr_svn215_840"

><td id="840"><a href="#840">840</a></td></tr
><tr id="gr_svn215_841"

><td id="841"><a href="#841">841</a></td></tr
><tr id="gr_svn215_842"

><td id="842"><a href="#842">842</a></td></tr
><tr id="gr_svn215_843"

><td id="843"><a href="#843">843</a></td></tr
><tr id="gr_svn215_844"

><td id="844"><a href="#844">844</a></td></tr
><tr id="gr_svn215_845"

><td id="845"><a href="#845">845</a></td></tr
><tr id="gr_svn215_846"

><td id="846"><a href="#846">846</a></td></tr
><tr id="gr_svn215_847"

><td id="847"><a href="#847">847</a></td></tr
><tr id="gr_svn215_848"

><td id="848"><a href="#848">848</a></td></tr
><tr id="gr_svn215_849"

><td id="849"><a href="#849">849</a></td></tr
><tr id="gr_svn215_850"

><td id="850"><a href="#850">850</a></td></tr
><tr id="gr_svn215_851"

><td id="851"><a href="#851">851</a></td></tr
><tr id="gr_svn215_852"

><td id="852"><a href="#852">852</a></td></tr
><tr id="gr_svn215_853"

><td id="853"><a href="#853">853</a></td></tr
><tr id="gr_svn215_854"

><td id="854"><a href="#854">854</a></td></tr
><tr id="gr_svn215_855"

><td id="855"><a href="#855">855</a></td></tr
><tr id="gr_svn215_856"

><td id="856"><a href="#856">856</a></td></tr
><tr id="gr_svn215_857"

><td id="857"><a href="#857">857</a></td></tr
><tr id="gr_svn215_858"

><td id="858"><a href="#858">858</a></td></tr
><tr id="gr_svn215_859"

><td id="859"><a href="#859">859</a></td></tr
><tr id="gr_svn215_860"

><td id="860"><a href="#860">860</a></td></tr
><tr id="gr_svn215_861"

><td id="861"><a href="#861">861</a></td></tr
><tr id="gr_svn215_862"

><td id="862"><a href="#862">862</a></td></tr
><tr id="gr_svn215_863"

><td id="863"><a href="#863">863</a></td></tr
><tr id="gr_svn215_864"

><td id="864"><a href="#864">864</a></td></tr
><tr id="gr_svn215_865"

><td id="865"><a href="#865">865</a></td></tr
><tr id="gr_svn215_866"

><td id="866"><a href="#866">866</a></td></tr
><tr id="gr_svn215_867"

><td id="867"><a href="#867">867</a></td></tr
><tr id="gr_svn215_868"

><td id="868"><a href="#868">868</a></td></tr
><tr id="gr_svn215_869"

><td id="869"><a href="#869">869</a></td></tr
><tr id="gr_svn215_870"

><td id="870"><a href="#870">870</a></td></tr
><tr id="gr_svn215_871"

><td id="871"><a href="#871">871</a></td></tr
><tr id="gr_svn215_872"

><td id="872"><a href="#872">872</a></td></tr
><tr id="gr_svn215_873"

><td id="873"><a href="#873">873</a></td></tr
><tr id="gr_svn215_874"

><td id="874"><a href="#874">874</a></td></tr
><tr id="gr_svn215_875"

><td id="875"><a href="#875">875</a></td></tr
><tr id="gr_svn215_876"

><td id="876"><a href="#876">876</a></td></tr
><tr id="gr_svn215_877"

><td id="877"><a href="#877">877</a></td></tr
><tr id="gr_svn215_878"

><td id="878"><a href="#878">878</a></td></tr
><tr id="gr_svn215_879"

><td id="879"><a href="#879">879</a></td></tr
><tr id="gr_svn215_880"

><td id="880"><a href="#880">880</a></td></tr
><tr id="gr_svn215_881"

><td id="881"><a href="#881">881</a></td></tr
><tr id="gr_svn215_882"

><td id="882"><a href="#882">882</a></td></tr
><tr id="gr_svn215_883"

><td id="883"><a href="#883">883</a></td></tr
><tr id="gr_svn215_884"

><td id="884"><a href="#884">884</a></td></tr
><tr id="gr_svn215_885"

><td id="885"><a href="#885">885</a></td></tr
><tr id="gr_svn215_886"

><td id="886"><a href="#886">886</a></td></tr
><tr id="gr_svn215_887"

><td id="887"><a href="#887">887</a></td></tr
><tr id="gr_svn215_888"

><td id="888"><a href="#888">888</a></td></tr
><tr id="gr_svn215_889"

><td id="889"><a href="#889">889</a></td></tr
><tr id="gr_svn215_890"

><td id="890"><a href="#890">890</a></td></tr
><tr id="gr_svn215_891"

><td id="891"><a href="#891">891</a></td></tr
><tr id="gr_svn215_892"

><td id="892"><a href="#892">892</a></td></tr
><tr id="gr_svn215_893"

><td id="893"><a href="#893">893</a></td></tr
><tr id="gr_svn215_894"

><td id="894"><a href="#894">894</a></td></tr
><tr id="gr_svn215_895"

><td id="895"><a href="#895">895</a></td></tr
><tr id="gr_svn215_896"

><td id="896"><a href="#896">896</a></td></tr
><tr id="gr_svn215_897"

><td id="897"><a href="#897">897</a></td></tr
><tr id="gr_svn215_898"

><td id="898"><a href="#898">898</a></td></tr
><tr id="gr_svn215_899"

><td id="899"><a href="#899">899</a></td></tr
><tr id="gr_svn215_900"

><td id="900"><a href="#900">900</a></td></tr
><tr id="gr_svn215_901"

><td id="901"><a href="#901">901</a></td></tr
><tr id="gr_svn215_902"

><td id="902"><a href="#902">902</a></td></tr
><tr id="gr_svn215_903"

><td id="903"><a href="#903">903</a></td></tr
><tr id="gr_svn215_904"

><td id="904"><a href="#904">904</a></td></tr
><tr id="gr_svn215_905"

><td id="905"><a href="#905">905</a></td></tr
><tr id="gr_svn215_906"

><td id="906"><a href="#906">906</a></td></tr
><tr id="gr_svn215_907"

><td id="907"><a href="#907">907</a></td></tr
><tr id="gr_svn215_908"

><td id="908"><a href="#908">908</a></td></tr
><tr id="gr_svn215_909"

><td id="909"><a href="#909">909</a></td></tr
><tr id="gr_svn215_910"

><td id="910"><a href="#910">910</a></td></tr
><tr id="gr_svn215_911"

><td id="911"><a href="#911">911</a></td></tr
><tr id="gr_svn215_912"

><td id="912"><a href="#912">912</a></td></tr
><tr id="gr_svn215_913"

><td id="913"><a href="#913">913</a></td></tr
><tr id="gr_svn215_914"

><td id="914"><a href="#914">914</a></td></tr
><tr id="gr_svn215_915"

><td id="915"><a href="#915">915</a></td></tr
><tr id="gr_svn215_916"

><td id="916"><a href="#916">916</a></td></tr
><tr id="gr_svn215_917"

><td id="917"><a href="#917">917</a></td></tr
><tr id="gr_svn215_918"

><td id="918"><a href="#918">918</a></td></tr
><tr id="gr_svn215_919"

><td id="919"><a href="#919">919</a></td></tr
><tr id="gr_svn215_920"

><td id="920"><a href="#920">920</a></td></tr
><tr id="gr_svn215_921"

><td id="921"><a href="#921">921</a></td></tr
><tr id="gr_svn215_922"

><td id="922"><a href="#922">922</a></td></tr
><tr id="gr_svn215_923"

><td id="923"><a href="#923">923</a></td></tr
><tr id="gr_svn215_924"

><td id="924"><a href="#924">924</a></td></tr
><tr id="gr_svn215_925"

><td id="925"><a href="#925">925</a></td></tr
><tr id="gr_svn215_926"

><td id="926"><a href="#926">926</a></td></tr
><tr id="gr_svn215_927"

><td id="927"><a href="#927">927</a></td></tr
><tr id="gr_svn215_928"

><td id="928"><a href="#928">928</a></td></tr
><tr id="gr_svn215_929"

><td id="929"><a href="#929">929</a></td></tr
><tr id="gr_svn215_930"

><td id="930"><a href="#930">930</a></td></tr
><tr id="gr_svn215_931"

><td id="931"><a href="#931">931</a></td></tr
><tr id="gr_svn215_932"

><td id="932"><a href="#932">932</a></td></tr
><tr id="gr_svn215_933"

><td id="933"><a href="#933">933</a></td></tr
><tr id="gr_svn215_934"

><td id="934"><a href="#934">934</a></td></tr
><tr id="gr_svn215_935"

><td id="935"><a href="#935">935</a></td></tr
><tr id="gr_svn215_936"

><td id="936"><a href="#936">936</a></td></tr
><tr id="gr_svn215_937"

><td id="937"><a href="#937">937</a></td></tr
><tr id="gr_svn215_938"

><td id="938"><a href="#938">938</a></td></tr
><tr id="gr_svn215_939"

><td id="939"><a href="#939">939</a></td></tr
><tr id="gr_svn215_940"

><td id="940"><a href="#940">940</a></td></tr
><tr id="gr_svn215_941"

><td id="941"><a href="#941">941</a></td></tr
><tr id="gr_svn215_942"

><td id="942"><a href="#942">942</a></td></tr
><tr id="gr_svn215_943"

><td id="943"><a href="#943">943</a></td></tr
><tr id="gr_svn215_944"

><td id="944"><a href="#944">944</a></td></tr
><tr id="gr_svn215_945"

><td id="945"><a href="#945">945</a></td></tr
><tr id="gr_svn215_946"

><td id="946"><a href="#946">946</a></td></tr
><tr id="gr_svn215_947"

><td id="947"><a href="#947">947</a></td></tr
><tr id="gr_svn215_948"

><td id="948"><a href="#948">948</a></td></tr
><tr id="gr_svn215_949"

><td id="949"><a href="#949">949</a></td></tr
><tr id="gr_svn215_950"

><td id="950"><a href="#950">950</a></td></tr
><tr id="gr_svn215_951"

><td id="951"><a href="#951">951</a></td></tr
><tr id="gr_svn215_952"

><td id="952"><a href="#952">952</a></td></tr
><tr id="gr_svn215_953"

><td id="953"><a href="#953">953</a></td></tr
><tr id="gr_svn215_954"

><td id="954"><a href="#954">954</a></td></tr
><tr id="gr_svn215_955"

><td id="955"><a href="#955">955</a></td></tr
><tr id="gr_svn215_956"

><td id="956"><a href="#956">956</a></td></tr
><tr id="gr_svn215_957"

><td id="957"><a href="#957">957</a></td></tr
><tr id="gr_svn215_958"

><td id="958"><a href="#958">958</a></td></tr
><tr id="gr_svn215_959"

><td id="959"><a href="#959">959</a></td></tr
><tr id="gr_svn215_960"

><td id="960"><a href="#960">960</a></td></tr
><tr id="gr_svn215_961"

><td id="961"><a href="#961">961</a></td></tr
><tr id="gr_svn215_962"

><td id="962"><a href="#962">962</a></td></tr
><tr id="gr_svn215_963"

><td id="963"><a href="#963">963</a></td></tr
><tr id="gr_svn215_964"

><td id="964"><a href="#964">964</a></td></tr
><tr id="gr_svn215_965"

><td id="965"><a href="#965">965</a></td></tr
><tr id="gr_svn215_966"

><td id="966"><a href="#966">966</a></td></tr
><tr id="gr_svn215_967"

><td id="967"><a href="#967">967</a></td></tr
><tr id="gr_svn215_968"

><td id="968"><a href="#968">968</a></td></tr
><tr id="gr_svn215_969"

><td id="969"><a href="#969">969</a></td></tr
><tr id="gr_svn215_970"

><td id="970"><a href="#970">970</a></td></tr
><tr id="gr_svn215_971"

><td id="971"><a href="#971">971</a></td></tr
><tr id="gr_svn215_972"

><td id="972"><a href="#972">972</a></td></tr
><tr id="gr_svn215_973"

><td id="973"><a href="#973">973</a></td></tr
><tr id="gr_svn215_974"

><td id="974"><a href="#974">974</a></td></tr
><tr id="gr_svn215_975"

><td id="975"><a href="#975">975</a></td></tr
><tr id="gr_svn215_976"

><td id="976"><a href="#976">976</a></td></tr
><tr id="gr_svn215_977"

><td id="977"><a href="#977">977</a></td></tr
><tr id="gr_svn215_978"

><td id="978"><a href="#978">978</a></td></tr
><tr id="gr_svn215_979"

><td id="979"><a href="#979">979</a></td></tr
><tr id="gr_svn215_980"

><td id="980"><a href="#980">980</a></td></tr
><tr id="gr_svn215_981"

><td id="981"><a href="#981">981</a></td></tr
><tr id="gr_svn215_982"

><td id="982"><a href="#982">982</a></td></tr
><tr id="gr_svn215_983"

><td id="983"><a href="#983">983</a></td></tr
><tr id="gr_svn215_984"

><td id="984"><a href="#984">984</a></td></tr
><tr id="gr_svn215_985"

><td id="985"><a href="#985">985</a></td></tr
><tr id="gr_svn215_986"

><td id="986"><a href="#986">986</a></td></tr
><tr id="gr_svn215_987"

><td id="987"><a href="#987">987</a></td></tr
><tr id="gr_svn215_988"

><td id="988"><a href="#988">988</a></td></tr
><tr id="gr_svn215_989"

><td id="989"><a href="#989">989</a></td></tr
><tr id="gr_svn215_990"

><td id="990"><a href="#990">990</a></td></tr
><tr id="gr_svn215_991"

><td id="991"><a href="#991">991</a></td></tr
><tr id="gr_svn215_992"

><td id="992"><a href="#992">992</a></td></tr
><tr id="gr_svn215_993"

><td id="993"><a href="#993">993</a></td></tr
><tr id="gr_svn215_994"

><td id="994"><a href="#994">994</a></td></tr
><tr id="gr_svn215_995"

><td id="995"><a href="#995">995</a></td></tr
><tr id="gr_svn215_996"

><td id="996"><a href="#996">996</a></td></tr
><tr id="gr_svn215_997"

><td id="997"><a href="#997">997</a></td></tr
><tr id="gr_svn215_998"

><td id="998"><a href="#998">998</a></td></tr
><tr id="gr_svn215_999"

><td id="999"><a href="#999">999</a></td></tr
><tr id="gr_svn215_1000"

><td id="1000"><a href="#1000">1000</a></td></tr
><tr id="gr_svn215_1001"

><td id="1001"><a href="#1001">1001</a></td></tr
><tr id="gr_svn215_1002"

><td id="1002"><a href="#1002">1002</a></td></tr
><tr id="gr_svn215_1003"

><td id="1003"><a href="#1003">1003</a></td></tr
><tr id="gr_svn215_1004"

><td id="1004"><a href="#1004">1004</a></td></tr
><tr id="gr_svn215_1005"

><td id="1005"><a href="#1005">1005</a></td></tr
><tr id="gr_svn215_1006"

><td id="1006"><a href="#1006">1006</a></td></tr
><tr id="gr_svn215_1007"

><td id="1007"><a href="#1007">1007</a></td></tr
><tr id="gr_svn215_1008"

><td id="1008"><a href="#1008">1008</a></td></tr
><tr id="gr_svn215_1009"

><td id="1009"><a href="#1009">1009</a></td></tr
><tr id="gr_svn215_1010"

><td id="1010"><a href="#1010">1010</a></td></tr
><tr id="gr_svn215_1011"

><td id="1011"><a href="#1011">1011</a></td></tr
><tr id="gr_svn215_1012"

><td id="1012"><a href="#1012">1012</a></td></tr
><tr id="gr_svn215_1013"

><td id="1013"><a href="#1013">1013</a></td></tr
><tr id="gr_svn215_1014"

><td id="1014"><a href="#1014">1014</a></td></tr
><tr id="gr_svn215_1015"

><td id="1015"><a href="#1015">1015</a></td></tr
><tr id="gr_svn215_1016"

><td id="1016"><a href="#1016">1016</a></td></tr
><tr id="gr_svn215_1017"

><td id="1017"><a href="#1017">1017</a></td></tr
><tr id="gr_svn215_1018"

><td id="1018"><a href="#1018">1018</a></td></tr
><tr id="gr_svn215_1019"

><td id="1019"><a href="#1019">1019</a></td></tr
><tr id="gr_svn215_1020"

><td id="1020"><a href="#1020">1020</a></td></tr
><tr id="gr_svn215_1021"

><td id="1021"><a href="#1021">1021</a></td></tr
><tr id="gr_svn215_1022"

><td id="1022"><a href="#1022">1022</a></td></tr
><tr id="gr_svn215_1023"

><td id="1023"><a href="#1023">1023</a></td></tr
><tr id="gr_svn215_1024"

><td id="1024"><a href="#1024">1024</a></td></tr
><tr id="gr_svn215_1025"

><td id="1025"><a href="#1025">1025</a></td></tr
><tr id="gr_svn215_1026"

><td id="1026"><a href="#1026">1026</a></td></tr
><tr id="gr_svn215_1027"

><td id="1027"><a href="#1027">1027</a></td></tr
><tr id="gr_svn215_1028"

><td id="1028"><a href="#1028">1028</a></td></tr
><tr id="gr_svn215_1029"

><td id="1029"><a href="#1029">1029</a></td></tr
><tr id="gr_svn215_1030"

><td id="1030"><a href="#1030">1030</a></td></tr
><tr id="gr_svn215_1031"

><td id="1031"><a href="#1031">1031</a></td></tr
><tr id="gr_svn215_1032"

><td id="1032"><a href="#1032">1032</a></td></tr
><tr id="gr_svn215_1033"

><td id="1033"><a href="#1033">1033</a></td></tr
><tr id="gr_svn215_1034"

><td id="1034"><a href="#1034">1034</a></td></tr
><tr id="gr_svn215_1035"

><td id="1035"><a href="#1035">1035</a></td></tr
><tr id="gr_svn215_1036"

><td id="1036"><a href="#1036">1036</a></td></tr
><tr id="gr_svn215_1037"

><td id="1037"><a href="#1037">1037</a></td></tr
><tr id="gr_svn215_1038"

><td id="1038"><a href="#1038">1038</a></td></tr
><tr id="gr_svn215_1039"

><td id="1039"><a href="#1039">1039</a></td></tr
><tr id="gr_svn215_1040"

><td id="1040"><a href="#1040">1040</a></td></tr
><tr id="gr_svn215_1041"

><td id="1041"><a href="#1041">1041</a></td></tr
><tr id="gr_svn215_1042"

><td id="1042"><a href="#1042">1042</a></td></tr
><tr id="gr_svn215_1043"

><td id="1043"><a href="#1043">1043</a></td></tr
><tr id="gr_svn215_1044"

><td id="1044"><a href="#1044">1044</a></td></tr
><tr id="gr_svn215_1045"

><td id="1045"><a href="#1045">1045</a></td></tr
><tr id="gr_svn215_1046"

><td id="1046"><a href="#1046">1046</a></td></tr
><tr id="gr_svn215_1047"

><td id="1047"><a href="#1047">1047</a></td></tr
><tr id="gr_svn215_1048"

><td id="1048"><a href="#1048">1048</a></td></tr
><tr id="gr_svn215_1049"

><td id="1049"><a href="#1049">1049</a></td></tr
><tr id="gr_svn215_1050"

><td id="1050"><a href="#1050">1050</a></td></tr
><tr id="gr_svn215_1051"

><td id="1051"><a href="#1051">1051</a></td></tr
><tr id="gr_svn215_1052"

><td id="1052"><a href="#1052">1052</a></td></tr
><tr id="gr_svn215_1053"

><td id="1053"><a href="#1053">1053</a></td></tr
><tr id="gr_svn215_1054"

><td id="1054"><a href="#1054">1054</a></td></tr
><tr id="gr_svn215_1055"

><td id="1055"><a href="#1055">1055</a></td></tr
><tr id="gr_svn215_1056"

><td id="1056"><a href="#1056">1056</a></td></tr
><tr id="gr_svn215_1057"

><td id="1057"><a href="#1057">1057</a></td></tr
><tr id="gr_svn215_1058"

><td id="1058"><a href="#1058">1058</a></td></tr
><tr id="gr_svn215_1059"

><td id="1059"><a href="#1059">1059</a></td></tr
><tr id="gr_svn215_1060"

><td id="1060"><a href="#1060">1060</a></td></tr
><tr id="gr_svn215_1061"

><td id="1061"><a href="#1061">1061</a></td></tr
><tr id="gr_svn215_1062"

><td id="1062"><a href="#1062">1062</a></td></tr
><tr id="gr_svn215_1063"

><td id="1063"><a href="#1063">1063</a></td></tr
><tr id="gr_svn215_1064"

><td id="1064"><a href="#1064">1064</a></td></tr
><tr id="gr_svn215_1065"

><td id="1065"><a href="#1065">1065</a></td></tr
><tr id="gr_svn215_1066"

><td id="1066"><a href="#1066">1066</a></td></tr
><tr id="gr_svn215_1067"

><td id="1067"><a href="#1067">1067</a></td></tr
><tr id="gr_svn215_1068"

><td id="1068"><a href="#1068">1068</a></td></tr
><tr id="gr_svn215_1069"

><td id="1069"><a href="#1069">1069</a></td></tr
><tr id="gr_svn215_1070"

><td id="1070"><a href="#1070">1070</a></td></tr
><tr id="gr_svn215_1071"

><td id="1071"><a href="#1071">1071</a></td></tr
><tr id="gr_svn215_1072"

><td id="1072"><a href="#1072">1072</a></td></tr
><tr id="gr_svn215_1073"

><td id="1073"><a href="#1073">1073</a></td></tr
><tr id="gr_svn215_1074"

><td id="1074"><a href="#1074">1074</a></td></tr
><tr id="gr_svn215_1075"

><td id="1075"><a href="#1075">1075</a></td></tr
><tr id="gr_svn215_1076"

><td id="1076"><a href="#1076">1076</a></td></tr
><tr id="gr_svn215_1077"

><td id="1077"><a href="#1077">1077</a></td></tr
><tr id="gr_svn215_1078"

><td id="1078"><a href="#1078">1078</a></td></tr
><tr id="gr_svn215_1079"

><td id="1079"><a href="#1079">1079</a></td></tr
><tr id="gr_svn215_1080"

><td id="1080"><a href="#1080">1080</a></td></tr
><tr id="gr_svn215_1081"

><td id="1081"><a href="#1081">1081</a></td></tr
><tr id="gr_svn215_1082"

><td id="1082"><a href="#1082">1082</a></td></tr
><tr id="gr_svn215_1083"

><td id="1083"><a href="#1083">1083</a></td></tr
><tr id="gr_svn215_1084"

><td id="1084"><a href="#1084">1084</a></td></tr
><tr id="gr_svn215_1085"

><td id="1085"><a href="#1085">1085</a></td></tr
><tr id="gr_svn215_1086"

><td id="1086"><a href="#1086">1086</a></td></tr
><tr id="gr_svn215_1087"

><td id="1087"><a href="#1087">1087</a></td></tr
><tr id="gr_svn215_1088"

><td id="1088"><a href="#1088">1088</a></td></tr
><tr id="gr_svn215_1089"

><td id="1089"><a href="#1089">1089</a></td></tr
><tr id="gr_svn215_1090"

><td id="1090"><a href="#1090">1090</a></td></tr
><tr id="gr_svn215_1091"

><td id="1091"><a href="#1091">1091</a></td></tr
><tr id="gr_svn215_1092"

><td id="1092"><a href="#1092">1092</a></td></tr
><tr id="gr_svn215_1093"

><td id="1093"><a href="#1093">1093</a></td></tr
><tr id="gr_svn215_1094"

><td id="1094"><a href="#1094">1094</a></td></tr
><tr id="gr_svn215_1095"

><td id="1095"><a href="#1095">1095</a></td></tr
><tr id="gr_svn215_1096"

><td id="1096"><a href="#1096">1096</a></td></tr
><tr id="gr_svn215_1097"

><td id="1097"><a href="#1097">1097</a></td></tr
><tr id="gr_svn215_1098"

><td id="1098"><a href="#1098">1098</a></td></tr
><tr id="gr_svn215_1099"

><td id="1099"><a href="#1099">1099</a></td></tr
><tr id="gr_svn215_1100"

><td id="1100"><a href="#1100">1100</a></td></tr
><tr id="gr_svn215_1101"

><td id="1101"><a href="#1101">1101</a></td></tr
><tr id="gr_svn215_1102"

><td id="1102"><a href="#1102">1102</a></td></tr
><tr id="gr_svn215_1103"

><td id="1103"><a href="#1103">1103</a></td></tr
><tr id="gr_svn215_1104"

><td id="1104"><a href="#1104">1104</a></td></tr
><tr id="gr_svn215_1105"

><td id="1105"><a href="#1105">1105</a></td></tr
><tr id="gr_svn215_1106"

><td id="1106"><a href="#1106">1106</a></td></tr
><tr id="gr_svn215_1107"

><td id="1107"><a href="#1107">1107</a></td></tr
><tr id="gr_svn215_1108"

><td id="1108"><a href="#1108">1108</a></td></tr
><tr id="gr_svn215_1109"

><td id="1109"><a href="#1109">1109</a></td></tr
><tr id="gr_svn215_1110"

><td id="1110"><a href="#1110">1110</a></td></tr
><tr id="gr_svn215_1111"

><td id="1111"><a href="#1111">1111</a></td></tr
><tr id="gr_svn215_1112"

><td id="1112"><a href="#1112">1112</a></td></tr
><tr id="gr_svn215_1113"

><td id="1113"><a href="#1113">1113</a></td></tr
><tr id="gr_svn215_1114"

><td id="1114"><a href="#1114">1114</a></td></tr
><tr id="gr_svn215_1115"

><td id="1115"><a href="#1115">1115</a></td></tr
><tr id="gr_svn215_1116"

><td id="1116"><a href="#1116">1116</a></td></tr
><tr id="gr_svn215_1117"

><td id="1117"><a href="#1117">1117</a></td></tr
><tr id="gr_svn215_1118"

><td id="1118"><a href="#1118">1118</a></td></tr
><tr id="gr_svn215_1119"

><td id="1119"><a href="#1119">1119</a></td></tr
><tr id="gr_svn215_1120"

><td id="1120"><a href="#1120">1120</a></td></tr
><tr id="gr_svn215_1121"

><td id="1121"><a href="#1121">1121</a></td></tr
><tr id="gr_svn215_1122"

><td id="1122"><a href="#1122">1122</a></td></tr
><tr id="gr_svn215_1123"

><td id="1123"><a href="#1123">1123</a></td></tr
><tr id="gr_svn215_1124"

><td id="1124"><a href="#1124">1124</a></td></tr
><tr id="gr_svn215_1125"

><td id="1125"><a href="#1125">1125</a></td></tr
><tr id="gr_svn215_1126"

><td id="1126"><a href="#1126">1126</a></td></tr
><tr id="gr_svn215_1127"

><td id="1127"><a href="#1127">1127</a></td></tr
><tr id="gr_svn215_1128"

><td id="1128"><a href="#1128">1128</a></td></tr
><tr id="gr_svn215_1129"

><td id="1129"><a href="#1129">1129</a></td></tr
><tr id="gr_svn215_1130"

><td id="1130"><a href="#1130">1130</a></td></tr
><tr id="gr_svn215_1131"

><td id="1131"><a href="#1131">1131</a></td></tr
><tr id="gr_svn215_1132"

><td id="1132"><a href="#1132">1132</a></td></tr
><tr id="gr_svn215_1133"

><td id="1133"><a href="#1133">1133</a></td></tr
><tr id="gr_svn215_1134"

><td id="1134"><a href="#1134">1134</a></td></tr
><tr id="gr_svn215_1135"

><td id="1135"><a href="#1135">1135</a></td></tr
><tr id="gr_svn215_1136"

><td id="1136"><a href="#1136">1136</a></td></tr
><tr id="gr_svn215_1137"

><td id="1137"><a href="#1137">1137</a></td></tr
><tr id="gr_svn215_1138"

><td id="1138"><a href="#1138">1138</a></td></tr
><tr id="gr_svn215_1139"

><td id="1139"><a href="#1139">1139</a></td></tr
><tr id="gr_svn215_1140"

><td id="1140"><a href="#1140">1140</a></td></tr
><tr id="gr_svn215_1141"

><td id="1141"><a href="#1141">1141</a></td></tr
><tr id="gr_svn215_1142"

><td id="1142"><a href="#1142">1142</a></td></tr
><tr id="gr_svn215_1143"

><td id="1143"><a href="#1143">1143</a></td></tr
><tr id="gr_svn215_1144"

><td id="1144"><a href="#1144">1144</a></td></tr
><tr id="gr_svn215_1145"

><td id="1145"><a href="#1145">1145</a></td></tr
><tr id="gr_svn215_1146"

><td id="1146"><a href="#1146">1146</a></td></tr
><tr id="gr_svn215_1147"

><td id="1147"><a href="#1147">1147</a></td></tr
><tr id="gr_svn215_1148"

><td id="1148"><a href="#1148">1148</a></td></tr
><tr id="gr_svn215_1149"

><td id="1149"><a href="#1149">1149</a></td></tr
><tr id="gr_svn215_1150"

><td id="1150"><a href="#1150">1150</a></td></tr
><tr id="gr_svn215_1151"

><td id="1151"><a href="#1151">1151</a></td></tr
><tr id="gr_svn215_1152"

><td id="1152"><a href="#1152">1152</a></td></tr
><tr id="gr_svn215_1153"

><td id="1153"><a href="#1153">1153</a></td></tr
><tr id="gr_svn215_1154"

><td id="1154"><a href="#1154">1154</a></td></tr
><tr id="gr_svn215_1155"

><td id="1155"><a href="#1155">1155</a></td></tr
><tr id="gr_svn215_1156"

><td id="1156"><a href="#1156">1156</a></td></tr
><tr id="gr_svn215_1157"

><td id="1157"><a href="#1157">1157</a></td></tr
><tr id="gr_svn215_1158"

><td id="1158"><a href="#1158">1158</a></td></tr
><tr id="gr_svn215_1159"

><td id="1159"><a href="#1159">1159</a></td></tr
><tr id="gr_svn215_1160"

><td id="1160"><a href="#1160">1160</a></td></tr
><tr id="gr_svn215_1161"

><td id="1161"><a href="#1161">1161</a></td></tr
><tr id="gr_svn215_1162"

><td id="1162"><a href="#1162">1162</a></td></tr
><tr id="gr_svn215_1163"

><td id="1163"><a href="#1163">1163</a></td></tr
><tr id="gr_svn215_1164"

><td id="1164"><a href="#1164">1164</a></td></tr
><tr id="gr_svn215_1165"

><td id="1165"><a href="#1165">1165</a></td></tr
><tr id="gr_svn215_1166"

><td id="1166"><a href="#1166">1166</a></td></tr
><tr id="gr_svn215_1167"

><td id="1167"><a href="#1167">1167</a></td></tr
><tr id="gr_svn215_1168"

><td id="1168"><a href="#1168">1168</a></td></tr
><tr id="gr_svn215_1169"

><td id="1169"><a href="#1169">1169</a></td></tr
><tr id="gr_svn215_1170"

><td id="1170"><a href="#1170">1170</a></td></tr
><tr id="gr_svn215_1171"

><td id="1171"><a href="#1171">1171</a></td></tr
><tr id="gr_svn215_1172"

><td id="1172"><a href="#1172">1172</a></td></tr
><tr id="gr_svn215_1173"

><td id="1173"><a href="#1173">1173</a></td></tr
><tr id="gr_svn215_1174"

><td id="1174"><a href="#1174">1174</a></td></tr
><tr id="gr_svn215_1175"

><td id="1175"><a href="#1175">1175</a></td></tr
><tr id="gr_svn215_1176"

><td id="1176"><a href="#1176">1176</a></td></tr
><tr id="gr_svn215_1177"

><td id="1177"><a href="#1177">1177</a></td></tr
><tr id="gr_svn215_1178"

><td id="1178"><a href="#1178">1178</a></td></tr
><tr id="gr_svn215_1179"

><td id="1179"><a href="#1179">1179</a></td></tr
><tr id="gr_svn215_1180"

><td id="1180"><a href="#1180">1180</a></td></tr
><tr id="gr_svn215_1181"

><td id="1181"><a href="#1181">1181</a></td></tr
><tr id="gr_svn215_1182"

><td id="1182"><a href="#1182">1182</a></td></tr
><tr id="gr_svn215_1183"

><td id="1183"><a href="#1183">1183</a></td></tr
><tr id="gr_svn215_1184"

><td id="1184"><a href="#1184">1184</a></td></tr
><tr id="gr_svn215_1185"

><td id="1185"><a href="#1185">1185</a></td></tr
><tr id="gr_svn215_1186"

><td id="1186"><a href="#1186">1186</a></td></tr
><tr id="gr_svn215_1187"

><td id="1187"><a href="#1187">1187</a></td></tr
><tr id="gr_svn215_1188"

><td id="1188"><a href="#1188">1188</a></td></tr
><tr id="gr_svn215_1189"

><td id="1189"><a href="#1189">1189</a></td></tr
><tr id="gr_svn215_1190"

><td id="1190"><a href="#1190">1190</a></td></tr
><tr id="gr_svn215_1191"

><td id="1191"><a href="#1191">1191</a></td></tr
><tr id="gr_svn215_1192"

><td id="1192"><a href="#1192">1192</a></td></tr
><tr id="gr_svn215_1193"

><td id="1193"><a href="#1193">1193</a></td></tr
><tr id="gr_svn215_1194"

><td id="1194"><a href="#1194">1194</a></td></tr
><tr id="gr_svn215_1195"

><td id="1195"><a href="#1195">1195</a></td></tr
><tr id="gr_svn215_1196"

><td id="1196"><a href="#1196">1196</a></td></tr
><tr id="gr_svn215_1197"

><td id="1197"><a href="#1197">1197</a></td></tr
><tr id="gr_svn215_1198"

><td id="1198"><a href="#1198">1198</a></td></tr
><tr id="gr_svn215_1199"

><td id="1199"><a href="#1199">1199</a></td></tr
><tr id="gr_svn215_1200"

><td id="1200"><a href="#1200">1200</a></td></tr
><tr id="gr_svn215_1201"

><td id="1201"><a href="#1201">1201</a></td></tr
><tr id="gr_svn215_1202"

><td id="1202"><a href="#1202">1202</a></td></tr
><tr id="gr_svn215_1203"

><td id="1203"><a href="#1203">1203</a></td></tr
><tr id="gr_svn215_1204"

><td id="1204"><a href="#1204">1204</a></td></tr
><tr id="gr_svn215_1205"

><td id="1205"><a href="#1205">1205</a></td></tr
><tr id="gr_svn215_1206"

><td id="1206"><a href="#1206">1206</a></td></tr
><tr id="gr_svn215_1207"

><td id="1207"><a href="#1207">1207</a></td></tr
><tr id="gr_svn215_1208"

><td id="1208"><a href="#1208">1208</a></td></tr
><tr id="gr_svn215_1209"

><td id="1209"><a href="#1209">1209</a></td></tr
><tr id="gr_svn215_1210"

><td id="1210"><a href="#1210">1210</a></td></tr
><tr id="gr_svn215_1211"

><td id="1211"><a href="#1211">1211</a></td></tr
><tr id="gr_svn215_1212"

><td id="1212"><a href="#1212">1212</a></td></tr
><tr id="gr_svn215_1213"

><td id="1213"><a href="#1213">1213</a></td></tr
><tr id="gr_svn215_1214"

><td id="1214"><a href="#1214">1214</a></td></tr
><tr id="gr_svn215_1215"

><td id="1215"><a href="#1215">1215</a></td></tr
><tr id="gr_svn215_1216"

><td id="1216"><a href="#1216">1216</a></td></tr
><tr id="gr_svn215_1217"

><td id="1217"><a href="#1217">1217</a></td></tr
><tr id="gr_svn215_1218"

><td id="1218"><a href="#1218">1218</a></td></tr
><tr id="gr_svn215_1219"

><td id="1219"><a href="#1219">1219</a></td></tr
><tr id="gr_svn215_1220"

><td id="1220"><a href="#1220">1220</a></td></tr
><tr id="gr_svn215_1221"

><td id="1221"><a href="#1221">1221</a></td></tr
><tr id="gr_svn215_1222"

><td id="1222"><a href="#1222">1222</a></td></tr
><tr id="gr_svn215_1223"

><td id="1223"><a href="#1223">1223</a></td></tr
><tr id="gr_svn215_1224"

><td id="1224"><a href="#1224">1224</a></td></tr
><tr id="gr_svn215_1225"

><td id="1225"><a href="#1225">1225</a></td></tr
><tr id="gr_svn215_1226"

><td id="1226"><a href="#1226">1226</a></td></tr
><tr id="gr_svn215_1227"

><td id="1227"><a href="#1227">1227</a></td></tr
><tr id="gr_svn215_1228"

><td id="1228"><a href="#1228">1228</a></td></tr
><tr id="gr_svn215_1229"

><td id="1229"><a href="#1229">1229</a></td></tr
><tr id="gr_svn215_1230"

><td id="1230"><a href="#1230">1230</a></td></tr
><tr id="gr_svn215_1231"

><td id="1231"><a href="#1231">1231</a></td></tr
><tr id="gr_svn215_1232"

><td id="1232"><a href="#1232">1232</a></td></tr
><tr id="gr_svn215_1233"

><td id="1233"><a href="#1233">1233</a></td></tr
><tr id="gr_svn215_1234"

><td id="1234"><a href="#1234">1234</a></td></tr
><tr id="gr_svn215_1235"

><td id="1235"><a href="#1235">1235</a></td></tr
><tr id="gr_svn215_1236"

><td id="1236"><a href="#1236">1236</a></td></tr
><tr id="gr_svn215_1237"

><td id="1237"><a href="#1237">1237</a></td></tr
><tr id="gr_svn215_1238"

><td id="1238"><a href="#1238">1238</a></td></tr
><tr id="gr_svn215_1239"

><td id="1239"><a href="#1239">1239</a></td></tr
><tr id="gr_svn215_1240"

><td id="1240"><a href="#1240">1240</a></td></tr
><tr id="gr_svn215_1241"

><td id="1241"><a href="#1241">1241</a></td></tr
><tr id="gr_svn215_1242"

><td id="1242"><a href="#1242">1242</a></td></tr
><tr id="gr_svn215_1243"

><td id="1243"><a href="#1243">1243</a></td></tr
><tr id="gr_svn215_1244"

><td id="1244"><a href="#1244">1244</a></td></tr
></table></pre>
<pre><table width="100%"><tr class="nocursor"><td></td></tr></table></pre>
</td>
<td id="lines">
<pre><table width="100%"><tr class="cursor_stop cursor_hidden"><td></td></tr></table></pre>
<pre class="prettyprint "><table id="src_table_0"><tr
id=sl_svn215_1

><td class="source">&lt;?php<br></td></tr
><tr
id=sl_svn215_2

><td class="source">/**<br></td></tr
><tr
id=sl_svn215_3

><td class="source"> * TimThumb by Ben Gillbanks and Mark Maunder<br></td></tr
><tr
id=sl_svn215_4

><td class="source"> * Based on work done by Tim McDaniels and Darren Hoyt<br></td></tr
><tr
id=sl_svn215_5

><td class="source"> * http://code.google.com/p/timthumb/<br></td></tr
><tr
id=sl_svn215_6

><td class="source"> * <br></td></tr
><tr
id=sl_svn215_7

><td class="source"> * GNU General Public License, version 2<br></td></tr
><tr
id=sl_svn215_8

><td class="source"> * http://www.gnu.org/licenses/old-licenses/gpl-2.0.html<br></td></tr
><tr
id=sl_svn215_9

><td class="source"> *<br></td></tr
><tr
id=sl_svn215_10

><td class="source"> * Examples and documentation available on the project homepage<br></td></tr
><tr
id=sl_svn215_11

><td class="source"> * http://www.binarymoon.co.uk/projects/timthumb/<br></td></tr
><tr
id=sl_svn215_12

><td class="source"> * <br></td></tr
><tr
id=sl_svn215_13

><td class="source"> * $Rev$<br></td></tr
><tr
id=sl_svn215_14

><td class="source"> */<br></td></tr
><tr
id=sl_svn215_15

><td class="source"><br></td></tr
><tr
id=sl_svn215_16

><td class="source">/*<br></td></tr
><tr
id=sl_svn215_17

><td class="source"> * --- TimThumb CONFIGURATION ---<br></td></tr
><tr
id=sl_svn215_18

><td class="source"> * To edit the configs it is best to create a file called timthumb-config.php<br></td></tr
><tr
id=sl_svn215_19

><td class="source"> * and define variables you want to customize in there. It will automatically be<br></td></tr
><tr
id=sl_svn215_20

><td class="source"> * loaded by timthumb. This will save you having to re-edit these variables<br></td></tr
><tr
id=sl_svn215_21

><td class="source"> * everytime you download a new version<br></td></tr
><tr
id=sl_svn215_22

><td class="source">*/<br></td></tr
><tr
id=sl_svn215_23

><td class="source">define (&#39;VERSION&#39;, &#39;2.8.10&#39;);																		// Version of this script <br></td></tr
><tr
id=sl_svn215_24

><td class="source">//Load a config file if it exists. Otherwise, use the values below<br></td></tr
><tr
id=sl_svn215_25

><td class="source">if( file_exists(dirname(__FILE__) . &#39;/timthumb-config.php&#39;))	require_once(&#39;timthumb-config.php&#39;);<br></td></tr
><tr
id=sl_svn215_26

><td class="source">if(! defined(&#39;DEBUG_ON&#39;) )					define (&#39;DEBUG_ON&#39;, false);								// Enable debug logging to web server error log (STDERR)<br></td></tr
><tr
id=sl_svn215_27

><td class="source">if(! defined(&#39;DEBUG_LEVEL&#39;) )				define (&#39;DEBUG_LEVEL&#39;, 1);								// Debug level 1 is less noisy and 3 is the most noisy<br></td></tr
><tr
id=sl_svn215_28

><td class="source">if(! defined(&#39;MEMORY_LIMIT&#39;) )				define (&#39;MEMORY_LIMIT&#39;, &#39;30M&#39;);							// Set PHP memory limit<br></td></tr
><tr
id=sl_svn215_29

><td class="source">if(! defined(&#39;BLOCK_EXTERNAL_LEECHERS&#39;) ) 	define (&#39;BLOCK_EXTERNAL_LEECHERS&#39;, false);				// If the image or webshot is being loaded on an external site, display a red &quot;No Hotlinking&quot; gif.<br></td></tr
><tr
id=sl_svn215_30

><td class="source"><br></td></tr
><tr
id=sl_svn215_31

><td class="source">//Image fetching and caching<br></td></tr
><tr
id=sl_svn215_32

><td class="source">if(! defined(&#39;ALLOW_EXTERNAL&#39;) )			define (&#39;ALLOW_EXTERNAL&#39;, TRUE);						// Allow image fetching from external websites. Will check against ALLOWED_SITES if ALLOW_ALL_EXTERNAL_SITES is false<br></td></tr
><tr
id=sl_svn215_33

><td class="source">if(! defined(&#39;ALLOW_ALL_EXTERNAL_SITES&#39;) ) 	define (&#39;ALLOW_ALL_EXTERNAL_SITES&#39;, false);				// Less secure. <br></td></tr
><tr
id=sl_svn215_34

><td class="source">if(! defined(&#39;FILE_CACHE_ENABLED&#39;) ) 		define (&#39;FILE_CACHE_ENABLED&#39;, TRUE);					// Should we store resized/modified images on disk to speed things up?<br></td></tr
><tr
id=sl_svn215_35

><td class="source">if(! defined(&#39;FILE_CACHE_TIME_BETWEEN_CLEANS&#39;))	define (&#39;FILE_CACHE_TIME_BETWEEN_CLEANS&#39;, 86400);	// How often the cache is cleaned <br></td></tr
><tr
id=sl_svn215_36

><td class="source"><br></td></tr
><tr
id=sl_svn215_37

><td class="source">if(! defined(&#39;FILE_CACHE_MAX_FILE_AGE&#39;) ) 	define (&#39;FILE_CACHE_MAX_FILE_AGE&#39;, 86400);				// How old does a file have to be to be deleted from the cache<br></td></tr
><tr
id=sl_svn215_38

><td class="source">if(! defined(&#39;FILE_CACHE_SUFFIX&#39;) ) 		define (&#39;FILE_CACHE_SUFFIX&#39;, &#39;.timthumb.txt&#39;);			// What to put at the end of all files in the cache directory so we can identify them<br></td></tr
><tr
id=sl_svn215_39

><td class="source">if(! defined(&#39;FILE_CACHE_PREFIX&#39;) ) 		define (&#39;FILE_CACHE_PREFIX&#39;, &#39;timthumb&#39;);				// What to put at the beg of all files in the cache directory so we can identify them<br></td></tr
><tr
id=sl_svn215_40

><td class="source">if(! defined(&#39;FILE_CACHE_DIRECTORY&#39;) ) 		define (&#39;FILE_CACHE_DIRECTORY&#39;, &#39;./cache&#39;);				// Directory where images are cached. Left blank it will use the system temporary directory (which is better for security)<br></td></tr
><tr
id=sl_svn215_41

><td class="source">if(! defined(&#39;MAX_FILE_SIZE&#39;) )				define (&#39;MAX_FILE_SIZE&#39;, 10485760);						// 10 Megs is 10485760. This is the max internal or external file size that we&#39;ll process.  <br></td></tr
><tr
id=sl_svn215_42

><td class="source">if(! defined(&#39;CURL_TIMEOUT&#39;) )				define (&#39;CURL_TIMEOUT&#39;, 20);							// Timeout duration for Curl. This only applies if you have Curl installed and aren&#39;t using PHP&#39;s default URL fetching mechanism.<br></td></tr
><tr
id=sl_svn215_43

><td class="source">if(! defined(&#39;WAIT_BETWEEN_FETCH_ERRORS&#39;) )	define (&#39;WAIT_BETWEEN_FETCH_ERRORS&#39;, 3600);				//Time to wait between errors fetching remote file<br></td></tr
><tr
id=sl_svn215_44

><td class="source"><br></td></tr
><tr
id=sl_svn215_45

><td class="source">//Browser caching<br></td></tr
><tr
id=sl_svn215_46

><td class="source">if(! defined(&#39;BROWSER_CACHE_MAX_AGE&#39;) ) 	define (&#39;BROWSER_CACHE_MAX_AGE&#39;, 864000);				// Time to cache in the browser<br></td></tr
><tr
id=sl_svn215_47

><td class="source">if(! defined(&#39;BROWSER_CACHE_DISABLE&#39;) ) 	define (&#39;BROWSER_CACHE_DISABLE&#39;, false);				// Use for testing if you want to disable all browser caching<br></td></tr
><tr
id=sl_svn215_48

><td class="source"><br></td></tr
><tr
id=sl_svn215_49

><td class="source">//Image size and defaults<br></td></tr
><tr
id=sl_svn215_50

><td class="source">if(! defined(&#39;MAX_WIDTH&#39;) ) 			define (&#39;MAX_WIDTH&#39;, 1500);									// Maximum image width<br></td></tr
><tr
id=sl_svn215_51

><td class="source">if(! defined(&#39;MAX_HEIGHT&#39;) ) 			define (&#39;MAX_HEIGHT&#39;, 1500);								// Maximum image height<br></td></tr
><tr
id=sl_svn215_52

><td class="source">if(! defined(&#39;NOT_FOUND_IMAGE&#39;) )		define (&#39;NOT_FOUND_IMAGE&#39;, &#39;&#39;);								// Image to serve if any 404 occurs <br></td></tr
><tr
id=sl_svn215_53

><td class="source">if(! defined(&#39;ERROR_IMAGE&#39;) )			define (&#39;ERROR_IMAGE&#39;, &#39;&#39;);									// Image to serve if an error occurs instead of showing error message <br></td></tr
><tr
id=sl_svn215_54

><td class="source">if(! defined(&#39;PNG_IS_TRANSPARENT&#39;) ) 	define (&#39;PNG_IS_TRANSPARENT&#39;, FALSE);  //42 Define if a png image should have a transparent background color. Use False value if you want to display a custom coloured canvas_colour <br></td></tr
><tr
id=sl_svn215_55

><td class="source">if(! defined(&#39;DEFAULT_Q&#39;) )				define (&#39;DEFAULT_Q&#39;, 90);									// Default image quality. Allows overrid in timthumb-config.php<br></td></tr
><tr
id=sl_svn215_56

><td class="source">if(! defined(&#39;DEFAULT_ZC&#39;) )			define (&#39;DEFAULT_ZC&#39;, 1);									// Default zoom/crop setting. Allows overrid in timthumb-config.php<br></td></tr
><tr
id=sl_svn215_57

><td class="source">if(! defined(&#39;DEFAULT_F&#39;) )				define (&#39;DEFAULT_F&#39;, &#39;&#39;);									// Default image filters. Allows overrid in timthumb-config.php<br></td></tr
><tr
id=sl_svn215_58

><td class="source">if(! defined(&#39;DEFAULT_S&#39;) )				define (&#39;DEFAULT_S&#39;, 0);									// Default sharpen value. Allows overrid in timthumb-config.php<br></td></tr
><tr
id=sl_svn215_59

><td class="source">if(! defined(&#39;DEFAULT_CC&#39;) )			define (&#39;DEFAULT_CC&#39;, &#39;ffffff&#39;);							// Default canvas colour. Allows overrid in timthumb-config.php<br></td></tr
><tr
id=sl_svn215_60

><td class="source"><br></td></tr
><tr
id=sl_svn215_61

><td class="source"><br></td></tr
><tr
id=sl_svn215_62

><td class="source">//Image compression is enabled if either of these point to valid paths<br></td></tr
><tr
id=sl_svn215_63

><td class="source"><br></td></tr
><tr
id=sl_svn215_64

><td class="source">//These are now disabled by default because the file sizes of PNGs (and GIFs) are much smaller than we used to generate. <br></td></tr
><tr
id=sl_svn215_65

><td class="source">//They only work for PNGs. GIFs and JPEGs are not affected.<br></td></tr
><tr
id=sl_svn215_66

><td class="source">if(! defined(&#39;OPTIPNG_ENABLED&#39;) ) 		define (&#39;OPTIPNG_ENABLED&#39;, false);  <br></td></tr
><tr
id=sl_svn215_67

><td class="source">if(! defined(&#39;OPTIPNG_PATH&#39;) ) 			define (&#39;OPTIPNG_PATH&#39;, &#39;/usr/bin/optipng&#39;); //This will run first because it gives better compression than pngcrush. <br></td></tr
><tr
id=sl_svn215_68

><td class="source">if(! defined(&#39;PNGCRUSH_ENABLED&#39;) ) 		define (&#39;PNGCRUSH_ENABLED&#39;, false); <br></td></tr
><tr
id=sl_svn215_69

><td class="source">if(! defined(&#39;PNGCRUSH_PATH&#39;) ) 		define (&#39;PNGCRUSH_PATH&#39;, &#39;/usr/bin/pngcrush&#39;); //This will only run if OPTIPNG_PATH is not set or is not valid<br></td></tr
><tr
id=sl_svn215_70

><td class="source"><br></td></tr
><tr
id=sl_svn215_71

><td class="source">/*<br></td></tr
><tr
id=sl_svn215_72

><td class="source">	-------====Website Screenshots configuration - BETA====-------<br></td></tr
><tr
id=sl_svn215_73

><td class="source">	<br></td></tr
><tr
id=sl_svn215_74

><td class="source">	If you just want image thumbnails and don&#39;t want website screenshots, you can safely leave this as is.	<br></td></tr
><tr
id=sl_svn215_75

><td class="source">	<br></td></tr
><tr
id=sl_svn215_76

><td class="source">	If you would like to get website screenshots set up, you will need root access to your own server.<br></td></tr
><tr
id=sl_svn215_77

><td class="source"><br></td></tr
><tr
id=sl_svn215_78

><td class="source">	Enable ALLOW_ALL_EXTERNAL_SITES so you can fetch any external web page. This is more secure now that we&#39;re using a non-web folder for cache.<br></td></tr
><tr
id=sl_svn215_79

><td class="source">	Enable BLOCK_EXTERNAL_LEECHERS so that your site doesn&#39;t generate thumbnails for the whole Internet.<br></td></tr
><tr
id=sl_svn215_80

><td class="source"><br></td></tr
><tr
id=sl_svn215_81

><td class="source">	Instructions to get website screenshots enabled on Ubuntu Linux:<br></td></tr
><tr
id=sl_svn215_82

><td class="source"><br></td></tr
><tr
id=sl_svn215_83

><td class="source">	1. Install Xvfb with the following command: sudo apt-get install subversion libqt4-webkit libqt4-dev g++ xvfb<br></td></tr
><tr
id=sl_svn215_84

><td class="source">	2. Go to a directory where you can download some code<br></td></tr
><tr
id=sl_svn215_85

><td class="source">	3. Check-out the latest version of CutyCapt with the following command: svn co https://cutycapt.svn.sourceforge.net/svnroot/cutycapt<br></td></tr
><tr
id=sl_svn215_86

><td class="source">	4. Compile CutyCapt by doing: cd cutycapt/CutyCapt<br></td></tr
><tr
id=sl_svn215_87

><td class="source">	5. qmake<br></td></tr
><tr
id=sl_svn215_88

><td class="source">	6. make<br></td></tr
><tr
id=sl_svn215_89

><td class="source">	7. cp CutyCapt /usr/local/bin/<br></td></tr
><tr
id=sl_svn215_90

><td class="source">	8. Test it by running: xvfb-run --server-args=&quot;-screen 0, 1024x768x24&quot; CutyCapt --url=&quot;http://markmaunder.com/&quot; --out=test.png<br></td></tr
><tr
id=sl_svn215_91

><td class="source">	9. If you get a file called test.png with something in it, it probably worked. Now test the script by accessing it as follows:<br></td></tr
><tr
id=sl_svn215_92

><td class="source">	10. http://yoursite.com/path/to/timthumb.php?src=http://markmaunder.com/&amp;webshot=1<br></td></tr
><tr
id=sl_svn215_93

><td class="source"><br></td></tr
><tr
id=sl_svn215_94

><td class="source">	Notes on performance: <br></td></tr
><tr
id=sl_svn215_95

><td class="source">	The first time a webshot loads, it will take a few seconds.<br></td></tr
><tr
id=sl_svn215_96

><td class="source">	From then on it uses the regular timthumb caching mechanism with the configurable options above<br></td></tr
><tr
id=sl_svn215_97

><td class="source">	and loading will be very fast.<br></td></tr
><tr
id=sl_svn215_98

><td class="source"><br></td></tr
><tr
id=sl_svn215_99

><td class="source">	--ADVANCED USERS ONLY--<br></td></tr
><tr
id=sl_svn215_100

><td class="source">	If you&#39;d like a slight speedup (about 25%) and you know Linux, you can run the following command which will keep Xvfb running in the background.<br></td></tr
><tr
id=sl_svn215_101

><td class="source">	nohup Xvfb :100 -ac -nolisten tcp -screen 0, 1024x768x24 &gt; /dev/null 2&gt;&amp;1 &amp;<br></td></tr
><tr
id=sl_svn215_102

><td class="source">	Then set WEBSHOT_XVFB_RUNNING = true below. This will save your server having to fire off a new Xvfb server and shut it down every time a new shot is generated. <br></td></tr
><tr
id=sl_svn215_103

><td class="source">	You will need to take responsibility for keeping Xvfb running in case it crashes. (It seems pretty stable)<br></td></tr
><tr
id=sl_svn215_104

><td class="source">	You will also need to take responsibility for server security if you&#39;re running Xvfb as root. <br></td></tr
><tr
id=sl_svn215_105

><td class="source"><br></td></tr
><tr
id=sl_svn215_106

><td class="source"><br></td></tr
><tr
id=sl_svn215_107

><td class="source">*/<br></td></tr
><tr
id=sl_svn215_108

><td class="source">if(! defined(&#39;WEBSHOT_ENABLED&#39;) ) 	define (&#39;WEBSHOT_ENABLED&#39;, false);			//Beta feature. Adding webshot=1 to your query string will cause the script to return a browser screenshot rather than try to fetch an image.<br></td></tr
><tr
id=sl_svn215_109

><td class="source">if(! defined(&#39;WEBSHOT_CUTYCAPT&#39;) ) 	define (&#39;WEBSHOT_CUTYCAPT&#39;, &#39;/usr/local/bin/CutyCapt&#39;); //The path to CutyCapt. <br></td></tr
><tr
id=sl_svn215_110

><td class="source">if(! defined(&#39;WEBSHOT_XVFB&#39;) ) 		define (&#39;WEBSHOT_XVFB&#39;, &#39;/usr/bin/xvfb-run&#39;);		//The path to the Xvfb server<br></td></tr
><tr
id=sl_svn215_111

><td class="source">if(! defined(&#39;WEBSHOT_SCREEN_X&#39;) ) 	define (&#39;WEBSHOT_SCREEN_X&#39;, &#39;1024&#39;);			//1024 works ok<br></td></tr
><tr
id=sl_svn215_112

><td class="source">if(! defined(&#39;WEBSHOT_SCREEN_Y&#39;) ) 	define (&#39;WEBSHOT_SCREEN_Y&#39;, &#39;768&#39;);			//768 works ok<br></td></tr
><tr
id=sl_svn215_113

><td class="source">if(! defined(&#39;WEBSHOT_COLOR_DEPTH&#39;) ) 	define (&#39;WEBSHOT_COLOR_DEPTH&#39;, &#39;24&#39;);			//I haven&#39;t tested anything besides 24<br></td></tr
><tr
id=sl_svn215_114

><td class="source">if(! defined(&#39;WEBSHOT_IMAGE_FORMAT&#39;) ) 	define (&#39;WEBSHOT_IMAGE_FORMAT&#39;, &#39;png&#39;);			//png is about 2.5 times the size of jpg but is a LOT better quality<br></td></tr
><tr
id=sl_svn215_115

><td class="source">if(! defined(&#39;WEBSHOT_TIMEOUT&#39;) ) 	define (&#39;WEBSHOT_TIMEOUT&#39;, &#39;20&#39;);			//Seconds to wait for a webshot<br></td></tr
><tr
id=sl_svn215_116

><td class="source">if(! defined(&#39;WEBSHOT_USER_AGENT&#39;) ) 	define (&#39;WEBSHOT_USER_AGENT&#39;, &quot;Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.9.2.18) Gecko/20110614 Firefox/3.6.18&quot;); //I hate to do this, but a non-browser robot user agent might not show what humans see. So we pretend to be Firefox<br></td></tr
><tr
id=sl_svn215_117

><td class="source">if(! defined(&#39;WEBSHOT_JAVASCRIPT_ON&#39;) ) define (&#39;WEBSHOT_JAVASCRIPT_ON&#39;, true);			//Setting to false might give you a slight speedup and block ads. But it could cause other issues.<br></td></tr
><tr
id=sl_svn215_118

><td class="source">if(! defined(&#39;WEBSHOT_JAVA_ON&#39;) ) 	define (&#39;WEBSHOT_JAVA_ON&#39;, false);			//Have only tested this as fase<br></td></tr
><tr
id=sl_svn215_119

><td class="source">if(! defined(&#39;WEBSHOT_PLUGINS_ON&#39;) ) 	define (&#39;WEBSHOT_PLUGINS_ON&#39;, true);			//Enable flash and other plugins<br></td></tr
><tr
id=sl_svn215_120

><td class="source">if(! defined(&#39;WEBSHOT_PROXY&#39;) ) 	define (&#39;WEBSHOT_PROXY&#39;, &#39;&#39;);				//In case you&#39;re behind a proxy server. <br></td></tr
><tr
id=sl_svn215_121

><td class="source">if(! defined(&#39;WEBSHOT_XVFB_RUNNING&#39;) )	define (&#39;WEBSHOT_XVFB_RUNNING&#39;, false);			//ADVANCED: Enable this if you&#39;ve got Xvfb running in the background.<br></td></tr
><tr
id=sl_svn215_122

><td class="source"><br></td></tr
><tr
id=sl_svn215_123

><td class="source"><br></td></tr
><tr
id=sl_svn215_124

><td class="source">// If ALLOW_EXTERNAL is true and ALLOW_ALL_EXTERNAL_SITES is false, then external images will only be fetched from these domains and their subdomains. <br></td></tr
><tr
id=sl_svn215_125

><td class="source">if(! isset($ALLOWED_SITES)){<br></td></tr
><tr
id=sl_svn215_126

><td class="source">	$ALLOWED_SITES = array (<br></td></tr
><tr
id=sl_svn215_127

><td class="source">		&#39;flickr.com&#39;,<br></td></tr
><tr
id=sl_svn215_128

><td class="source">		&#39;staticflickr.com&#39;,<br></td></tr
><tr
id=sl_svn215_129

><td class="source">		&#39;picasa.com&#39;,<br></td></tr
><tr
id=sl_svn215_130

><td class="source">		&#39;img.youtube.com&#39;,<br></td></tr
><tr
id=sl_svn215_131

><td class="source">		&#39;upload.wikimedia.org&#39;,<br></td></tr
><tr
id=sl_svn215_132

><td class="source">		&#39;photobucket.com&#39;,<br></td></tr
><tr
id=sl_svn215_133

><td class="source">		&#39;imgur.com&#39;,<br></td></tr
><tr
id=sl_svn215_134

><td class="source">		&#39;imageshack.us&#39;,<br></td></tr
><tr
id=sl_svn215_135

><td class="source">		&#39;tinypic.com&#39;,<br></td></tr
><tr
id=sl_svn215_136

><td class="source">	);<br></td></tr
><tr
id=sl_svn215_137

><td class="source">}<br></td></tr
><tr
id=sl_svn215_138

><td class="source">// -------------------------------------------------------------<br></td></tr
><tr
id=sl_svn215_139

><td class="source">// -------------- STOP EDITING CONFIGURATION HERE --------------<br></td></tr
><tr
id=sl_svn215_140

><td class="source">// -------------------------------------------------------------<br></td></tr
><tr
id=sl_svn215_141

><td class="source"><br></td></tr
><tr
id=sl_svn215_142

><td class="source">timthumb::start();<br></td></tr
><tr
id=sl_svn215_143

><td class="source"><br></td></tr
><tr
id=sl_svn215_144

><td class="source">class timthumb {<br></td></tr
><tr
id=sl_svn215_145

><td class="source">	protected $src = &quot;&quot;;<br></td></tr
><tr
id=sl_svn215_146

><td class="source">	protected $is404 = false;<br></td></tr
><tr
id=sl_svn215_147

><td class="source">	protected $docRoot = &quot;&quot;;<br></td></tr
><tr
id=sl_svn215_148

><td class="source">	protected $lastURLError = false;<br></td></tr
><tr
id=sl_svn215_149

><td class="source">	protected $localImage = &quot;&quot;;<br></td></tr
><tr
id=sl_svn215_150

><td class="source">	protected $localImageMTime = 0;<br></td></tr
><tr
id=sl_svn215_151

><td class="source">	protected $url = false;<br></td></tr
><tr
id=sl_svn215_152

><td class="source">	protected $myHost = &quot;&quot;;<br></td></tr
><tr
id=sl_svn215_153

><td class="source">	protected $isURL = false;<br></td></tr
><tr
id=sl_svn215_154

><td class="source">	protected $cachefile = &#39;&#39;;<br></td></tr
><tr
id=sl_svn215_155

><td class="source">	protected $errors = array();<br></td></tr
><tr
id=sl_svn215_156

><td class="source">	protected $toDeletes = array();<br></td></tr
><tr
id=sl_svn215_157

><td class="source">	protected $cacheDirectory = &#39;&#39;;<br></td></tr
><tr
id=sl_svn215_158

><td class="source">	protected $startTime = 0;<br></td></tr
><tr
id=sl_svn215_159

><td class="source">	protected $lastBenchTime = 0;<br></td></tr
><tr
id=sl_svn215_160

><td class="source">	protected $cropTop = false;<br></td></tr
><tr
id=sl_svn215_161

><td class="source">	protected $salt = &quot;&quot;;<br></td></tr
><tr
id=sl_svn215_162

><td class="source">	protected $fileCacheVersion = 1; //Generally if timthumb.php is modifed (upgraded) then the salt changes and all cache files are recreated. This is a backup mechanism to force regen.<br></td></tr
><tr
id=sl_svn215_163

><td class="source">	protected $filePrependSecurityBlock = &quot;&lt;?php die(&#39;Execution denied!&#39;); //&quot;; //Designed to have three letter mime type, space, question mark and greater than symbol appended. 6 bytes total.<br></td></tr
><tr
id=sl_svn215_164

><td class="source">	protected static $curlDataWritten = 0;<br></td></tr
><tr
id=sl_svn215_165

><td class="source">	protected static $curlFH = false;<br></td></tr
><tr
id=sl_svn215_166

><td class="source">	public static function start(){<br></td></tr
><tr
id=sl_svn215_167

><td class="source">		$tim = new timthumb();<br></td></tr
><tr
id=sl_svn215_168

><td class="source">		$tim-&gt;handleErrors();<br></td></tr
><tr
id=sl_svn215_169

><td class="source">		$tim-&gt;securityChecks();<br></td></tr
><tr
id=sl_svn215_170

><td class="source">		if($tim-&gt;tryBrowserCache()){<br></td></tr
><tr
id=sl_svn215_171

><td class="source">			exit(0);<br></td></tr
><tr
id=sl_svn215_172

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_173

><td class="source">		$tim-&gt;handleErrors();<br></td></tr
><tr
id=sl_svn215_174

><td class="source">		if(FILE_CACHE_ENABLED &amp;&amp; $tim-&gt;tryServerCache()){<br></td></tr
><tr
id=sl_svn215_175

><td class="source">			exit(0);<br></td></tr
><tr
id=sl_svn215_176

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_177

><td class="source">		$tim-&gt;handleErrors();<br></td></tr
><tr
id=sl_svn215_178

><td class="source">		$tim-&gt;run();<br></td></tr
><tr
id=sl_svn215_179

><td class="source">		$tim-&gt;handleErrors();<br></td></tr
><tr
id=sl_svn215_180

><td class="source">		exit(0);<br></td></tr
><tr
id=sl_svn215_181

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_182

><td class="source">	public function __construct(){<br></td></tr
><tr
id=sl_svn215_183

><td class="source">		global $ALLOWED_SITES;<br></td></tr
><tr
id=sl_svn215_184

><td class="source">		$this-&gt;startTime = microtime(true);<br></td></tr
><tr
id=sl_svn215_185

><td class="source">		date_default_timezone_set(&#39;UTC&#39;);<br></td></tr
><tr
id=sl_svn215_186

><td class="source">		$this-&gt;debug(1, &quot;Starting new request from &quot; . $this-&gt;getIP() . &quot; to &quot; . $_SERVER[&#39;REQUEST_URI&#39;]);<br></td></tr
><tr
id=sl_svn215_187

><td class="source">		$this-&gt;calcDocRoot();<br></td></tr
><tr
id=sl_svn215_188

><td class="source">		//On windows systems I&#39;m assuming fileinode returns an empty string or a number that doesn&#39;t change. Check this.<br></td></tr
><tr
id=sl_svn215_189

><td class="source">		$this-&gt;salt = @filemtime(__FILE__) . &#39;-&#39; . @fileinode(__FILE__);<br></td></tr
><tr
id=sl_svn215_190

><td class="source">		$this-&gt;debug(3, &quot;Salt is: &quot; . $this-&gt;salt);<br></td></tr
><tr
id=sl_svn215_191

><td class="source">		if(FILE_CACHE_DIRECTORY){<br></td></tr
><tr
id=sl_svn215_192

><td class="source">			if(! is_dir(FILE_CACHE_DIRECTORY)){<br></td></tr
><tr
id=sl_svn215_193

><td class="source">				@mkdir(FILE_CACHE_DIRECTORY);<br></td></tr
><tr
id=sl_svn215_194

><td class="source">				if(! is_dir(FILE_CACHE_DIRECTORY)){<br></td></tr
><tr
id=sl_svn215_195

><td class="source">					$this-&gt;error(&quot;Could not create the file cache directory.&quot;);<br></td></tr
><tr
id=sl_svn215_196

><td class="source">					return false;<br></td></tr
><tr
id=sl_svn215_197

><td class="source">				}<br></td></tr
><tr
id=sl_svn215_198

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_199

><td class="source">			$this-&gt;cacheDirectory = FILE_CACHE_DIRECTORY;<br></td></tr
><tr
id=sl_svn215_200

><td class="source">			if (!touch($this-&gt;cacheDirectory . &#39;/index.html&#39;)) {<br></td></tr
><tr
id=sl_svn215_201

><td class="source">				$this-&gt;error(&quot;Could not create the index.html file - to fix this create an empty file named index.html file in the cache directory.&quot;);<br></td></tr
><tr
id=sl_svn215_202

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_203

><td class="source">		} else {<br></td></tr
><tr
id=sl_svn215_204

><td class="source">			$this-&gt;cacheDirectory = sys_get_temp_dir();<br></td></tr
><tr
id=sl_svn215_205

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_206

><td class="source">		//Clean the cache before we do anything because we don&#39;t want the first visitor after FILE_CACHE_TIME_BETWEEN_CLEANS expires to get a stale image. <br></td></tr
><tr
id=sl_svn215_207

><td class="source">		$this-&gt;cleanCache();<br></td></tr
><tr
id=sl_svn215_208

><td class="source">		<br></td></tr
><tr
id=sl_svn215_209

><td class="source">		$this-&gt;myHost = preg_replace(&#39;/^www\./i&#39;, &#39;&#39;, $_SERVER[&#39;HTTP_HOST&#39;]);<br></td></tr
><tr
id=sl_svn215_210

><td class="source">		$this-&gt;src = $this-&gt;param(&#39;src&#39;);<br></td></tr
><tr
id=sl_svn215_211

><td class="source">		$this-&gt;url = parse_url($this-&gt;src);<br></td></tr
><tr
id=sl_svn215_212

><td class="source">		$this-&gt;src = preg_replace(&#39;/https?:\/\/(?:www\.)?&#39; . $this-&gt;myHost . &#39;/i&#39;, &#39;&#39;, $this-&gt;src);<br></td></tr
><tr
id=sl_svn215_213

><td class="source">		<br></td></tr
><tr
id=sl_svn215_214

><td class="source">		if(strlen($this-&gt;src) &lt;= 3){<br></td></tr
><tr
id=sl_svn215_215

><td class="source">			$this-&gt;error(&quot;No image specified&quot;);<br></td></tr
><tr
id=sl_svn215_216

><td class="source">			return false;<br></td></tr
><tr
id=sl_svn215_217

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_218

><td class="source">		if(BLOCK_EXTERNAL_LEECHERS &amp;&amp; array_key_exists(&#39;HTTP_REFERER&#39;, $_SERVER) &amp;&amp; (! preg_match(&#39;/^https?:\/\/(?:www\.)?&#39; . $this-&gt;myHost . &#39;(?:$|\/)/i&#39;, $_SERVER[&#39;HTTP_REFERER&#39;]))){<br></td></tr
><tr
id=sl_svn215_219

><td class="source">			// base64 encoded red image that says &#39;no hotlinkers&#39;<br></td></tr
><tr
id=sl_svn215_220

><td class="source">			// nothing to worry about! :)<br></td></tr
><tr
id=sl_svn215_221

><td class="source">			$imgData = base64_decode(&quot;R0lGODlhUAAMAIAAAP8AAP///yH5BAAHAP8ALAAAAABQAAwAAAJpjI+py+0Po5y0OgAMjjv01YUZ\nOGplhWXfNa6JCLnWkXplrcBmW+spbwvaVr/cDyg7IoFC2KbYVC2NQ5MQ4ZNao9Ynzjl9ScNYpneb\nDULB3RP6JuPuaGfuuV4fumf8PuvqFyhYtjdoeFgAADs=&quot;);<br></td></tr
><tr
id=sl_svn215_222

><td class="source">			header(&#39;Content-Type: image/gif&#39;);<br></td></tr
><tr
id=sl_svn215_223

><td class="source">			header(&#39;Content-Length: &#39; . sizeof($imgData));<br></td></tr
><tr
id=sl_svn215_224

><td class="source">			header(&#39;Cache-Control: no-store, no-cache, must-revalidate, max-age=0&#39;);<br></td></tr
><tr
id=sl_svn215_225

><td class="source">			header(&quot;Pragma: no-cache&quot;);<br></td></tr
><tr
id=sl_svn215_226

><td class="source">			header(&#39;Expires: &#39; . gmdate (&#39;D, d M Y H:i:s&#39;, time()));<br></td></tr
><tr
id=sl_svn215_227

><td class="source">			echo $imgData;<br></td></tr
><tr
id=sl_svn215_228

><td class="source">			return false;<br></td></tr
><tr
id=sl_svn215_229

><td class="source">			exit(0);<br></td></tr
><tr
id=sl_svn215_230

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_231

><td class="source">		if(preg_match(&#39;/^https?:\/\/[^\/]+/i&#39;, $this-&gt;src)){<br></td></tr
><tr
id=sl_svn215_232

><td class="source">			$this-&gt;debug(2, &quot;Is a request for an external URL: &quot; . $this-&gt;src);<br></td></tr
><tr
id=sl_svn215_233

><td class="source">			$this-&gt;isURL = true;<br></td></tr
><tr
id=sl_svn215_234

><td class="source">		} else {<br></td></tr
><tr
id=sl_svn215_235

><td class="source">			$this-&gt;debug(2, &quot;Is a request for an internal file: &quot; . $this-&gt;src);<br></td></tr
><tr
id=sl_svn215_236

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_237

><td class="source">		if($this-&gt;isURL &amp;&amp; (! ALLOW_EXTERNAL)){<br></td></tr
><tr
id=sl_svn215_238

><td class="source">			$this-&gt;error(&quot;You are not allowed to fetch images from an external website.&quot;);<br></td></tr
><tr
id=sl_svn215_239

><td class="source">			return false;<br></td></tr
><tr
id=sl_svn215_240

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_241

><td class="source">		if($this-&gt;isURL){<br></td></tr
><tr
id=sl_svn215_242

><td class="source">			if(ALLOW_ALL_EXTERNAL_SITES){<br></td></tr
><tr
id=sl_svn215_243

><td class="source">				$this-&gt;debug(2, &quot;Fetching from all external sites is enabled.&quot;);<br></td></tr
><tr
id=sl_svn215_244

><td class="source">			} else {<br></td></tr
><tr
id=sl_svn215_245

><td class="source">				$this-&gt;debug(2, &quot;Fetching only from selected external sites is enabled.&quot;);<br></td></tr
><tr
id=sl_svn215_246

><td class="source">				$allowed = false;<br></td></tr
><tr
id=sl_svn215_247

><td class="source">				foreach($ALLOWED_SITES as $site){<br></td></tr
><tr
id=sl_svn215_248

><td class="source">					if ((strtolower(substr($this-&gt;url[&#39;host&#39;],-strlen($site)-1)) === strtolower(&quot;.$site&quot;)) || (strtolower($this-&gt;url[&#39;host&#39;])===strtolower($site))) {<br></td></tr
><tr
id=sl_svn215_249

><td class="source">						$this-&gt;debug(3, &quot;URL hostname {$this-&gt;url[&#39;host&#39;]} matches $site so allowing.&quot;);<br></td></tr
><tr
id=sl_svn215_250

><td class="source">						$allowed = true;<br></td></tr
><tr
id=sl_svn215_251

><td class="source">					}<br></td></tr
><tr
id=sl_svn215_252

><td class="source">				}<br></td></tr
><tr
id=sl_svn215_253

><td class="source">				if(! $allowed){<br></td></tr
><tr
id=sl_svn215_254

><td class="source">					return $this-&gt;error(&quot;You may not fetch images from that site. To enable this site in timthumb, you can either add it to \$ALLOWED_SITES and set ALLOW_EXTERNAL=true. Or you can set ALLOW_ALL_EXTERNAL_SITES=true, depending on your security needs.&quot;);<br></td></tr
><tr
id=sl_svn215_255

><td class="source">				}<br></td></tr
><tr
id=sl_svn215_256

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_257

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_258

><td class="source"><br></td></tr
><tr
id=sl_svn215_259

><td class="source">		$cachePrefix = ($this-&gt;isURL ? &#39;_ext_&#39; : &#39;_int_&#39;);<br></td></tr
><tr
id=sl_svn215_260

><td class="source">		if($this-&gt;isURL){<br></td></tr
><tr
id=sl_svn215_261

><td class="source">			$arr = explode(&#39;&amp;&#39;, $_SERVER [&#39;QUERY_STRING&#39;]);<br></td></tr
><tr
id=sl_svn215_262

><td class="source">			asort($arr);<br></td></tr
><tr
id=sl_svn215_263

><td class="source">			$this-&gt;cachefile = $this-&gt;cacheDirectory . &#39;/&#39; . FILE_CACHE_PREFIX . $cachePrefix . md5($this-&gt;salt . implode(&#39;&#39;, $arr) . $this-&gt;fileCacheVersion) . FILE_CACHE_SUFFIX;<br></td></tr
><tr
id=sl_svn215_264

><td class="source">		} else {<br></td></tr
><tr
id=sl_svn215_265

><td class="source">			$this-&gt;localImage = $this-&gt;getLocalImagePath($this-&gt;src);<br></td></tr
><tr
id=sl_svn215_266

><td class="source">			if(! $this-&gt;localImage){<br></td></tr
><tr
id=sl_svn215_267

><td class="source">				$this-&gt;debug(1, &quot;Could not find the local image: {$this-&gt;localImage}&quot;);<br></td></tr
><tr
id=sl_svn215_268

><td class="source">				$this-&gt;error(&quot;Could not find the internal image you specified.&quot;);<br></td></tr
><tr
id=sl_svn215_269

><td class="source">				$this-&gt;set404();<br></td></tr
><tr
id=sl_svn215_270

><td class="source">				return false;<br></td></tr
><tr
id=sl_svn215_271

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_272

><td class="source">			$this-&gt;debug(1, &quot;Local image path is {$this-&gt;localImage}&quot;);<br></td></tr
><tr
id=sl_svn215_273

><td class="source">			$this-&gt;localImageMTime = @filemtime($this-&gt;localImage);<br></td></tr
><tr
id=sl_svn215_274

><td class="source">			//We include the mtime of the local file in case in changes on disk.<br></td></tr
><tr
id=sl_svn215_275

><td class="source">			$this-&gt;cachefile = $this-&gt;cacheDirectory . &#39;/&#39; . FILE_CACHE_PREFIX . $cachePrefix . md5($this-&gt;salt . $this-&gt;localImageMTime . $_SERVER [&#39;QUERY_STRING&#39;] . $this-&gt;fileCacheVersion) . FILE_CACHE_SUFFIX;<br></td></tr
><tr
id=sl_svn215_276

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_277

><td class="source">		$this-&gt;debug(2, &quot;Cache file is: &quot; . $this-&gt;cachefile);<br></td></tr
><tr
id=sl_svn215_278

><td class="source"><br></td></tr
><tr
id=sl_svn215_279

><td class="source">		return true;<br></td></tr
><tr
id=sl_svn215_280

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_281

><td class="source">	public function __destruct(){<br></td></tr
><tr
id=sl_svn215_282

><td class="source">		foreach($this-&gt;toDeletes as $del){<br></td></tr
><tr
id=sl_svn215_283

><td class="source">			$this-&gt;debug(2, &quot;Deleting temp file $del&quot;);<br></td></tr
><tr
id=sl_svn215_284

><td class="source">			@unlink($del);<br></td></tr
><tr
id=sl_svn215_285

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_286

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_287

><td class="source">	public function run(){<br></td></tr
><tr
id=sl_svn215_288

><td class="source">		if($this-&gt;isURL){<br></td></tr
><tr
id=sl_svn215_289

><td class="source">			if(! ALLOW_EXTERNAL){<br></td></tr
><tr
id=sl_svn215_290

><td class="source">				$this-&gt;debug(1, &quot;Got a request for an external image but ALLOW_EXTERNAL is disabled so returning error msg.&quot;);<br></td></tr
><tr
id=sl_svn215_291

><td class="source">				$this-&gt;error(&quot;You are not allowed to fetch images from an external website.&quot;);<br></td></tr
><tr
id=sl_svn215_292

><td class="source">				return false;<br></td></tr
><tr
id=sl_svn215_293

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_294

><td class="source">			$this-&gt;debug(3, &quot;Got request for external image. Starting serveExternalImage.&quot;);<br></td></tr
><tr
id=sl_svn215_295

><td class="source">			if($this-&gt;param(&#39;webshot&#39;)){<br></td></tr
><tr
id=sl_svn215_296

><td class="source">				if(WEBSHOT_ENABLED){<br></td></tr
><tr
id=sl_svn215_297

><td class="source">					$this-&gt;debug(3, &quot;webshot param is set, so we&#39;re going to take a webshot.&quot;);<br></td></tr
><tr
id=sl_svn215_298

><td class="source">					$this-&gt;serveWebshot();<br></td></tr
><tr
id=sl_svn215_299

><td class="source">				} else {<br></td></tr
><tr
id=sl_svn215_300

><td class="source">					$this-&gt;error(&quot;You added the webshot parameter but webshots are disabled on this server. You need to set WEBSHOT_ENABLED == true to enable webshots.&quot;);<br></td></tr
><tr
id=sl_svn215_301

><td class="source">				}<br></td></tr
><tr
id=sl_svn215_302

><td class="source">			} else {<br></td></tr
><tr
id=sl_svn215_303

><td class="source">				$this-&gt;debug(3, &quot;webshot is NOT set so we&#39;re going to try to fetch a regular image.&quot;);<br></td></tr
><tr
id=sl_svn215_304

><td class="source">				$this-&gt;serveExternalImage();<br></td></tr
><tr
id=sl_svn215_305

><td class="source"><br></td></tr
><tr
id=sl_svn215_306

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_307

><td class="source">		} else {<br></td></tr
><tr
id=sl_svn215_308

><td class="source">			$this-&gt;debug(3, &quot;Got request for internal image. Starting serveInternalImage()&quot;);<br></td></tr
><tr
id=sl_svn215_309

><td class="source">			$this-&gt;serveInternalImage();<br></td></tr
><tr
id=sl_svn215_310

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_311

><td class="source">		return true;<br></td></tr
><tr
id=sl_svn215_312

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_313

><td class="source">	protected function handleErrors(){<br></td></tr
><tr
id=sl_svn215_314

><td class="source">		if($this-&gt;haveErrors()){ <br></td></tr
><tr
id=sl_svn215_315

><td class="source">			if(NOT_FOUND_IMAGE &amp;&amp; $this-&gt;is404()){<br></td></tr
><tr
id=sl_svn215_316

><td class="source">				if($this-&gt;serveImg(NOT_FOUND_IMAGE)){<br></td></tr
><tr
id=sl_svn215_317

><td class="source">					exit(0);<br></td></tr
><tr
id=sl_svn215_318

><td class="source">				} else {<br></td></tr
><tr
id=sl_svn215_319

><td class="source">					$this-&gt;error(&quot;Additionally, the 404 image that is configured could not be found or there was an error serving it.&quot;);<br></td></tr
><tr
id=sl_svn215_320

><td class="source">				}<br></td></tr
><tr
id=sl_svn215_321

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_322

><td class="source">			if(ERROR_IMAGE){<br></td></tr
><tr
id=sl_svn215_323

><td class="source">				if($this-&gt;serveImg(ERROR_IMAGE)){<br></td></tr
><tr
id=sl_svn215_324

><td class="source">					exit(0);<br></td></tr
><tr
id=sl_svn215_325

><td class="source">				} else {<br></td></tr
><tr
id=sl_svn215_326

><td class="source">					$this-&gt;error(&quot;Additionally, the error image that is configured could not be found or there was an error serving it.&quot;);<br></td></tr
><tr
id=sl_svn215_327

><td class="source">				}<br></td></tr
><tr
id=sl_svn215_328

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_329

><td class="source">			$this-&gt;serveErrors(); <br></td></tr
><tr
id=sl_svn215_330

><td class="source">			exit(0); <br></td></tr
><tr
id=sl_svn215_331

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_332

><td class="source">		return false;<br></td></tr
><tr
id=sl_svn215_333

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_334

><td class="source">	protected function tryBrowserCache(){<br></td></tr
><tr
id=sl_svn215_335

><td class="source">		if(BROWSER_CACHE_DISABLE){ $this-&gt;debug(3, &quot;Browser caching is disabled&quot;); return false; }<br></td></tr
><tr
id=sl_svn215_336

><td class="source">		if(!empty($_SERVER[&#39;HTTP_IF_MODIFIED_SINCE&#39;]) ){<br></td></tr
><tr
id=sl_svn215_337

><td class="source">			$this-&gt;debug(3, &quot;Got a conditional get&quot;);<br></td></tr
><tr
id=sl_svn215_338

><td class="source">			$mtime = false;<br></td></tr
><tr
id=sl_svn215_339

><td class="source">			//We&#39;ve already checked if the real file exists in the constructor<br></td></tr
><tr
id=sl_svn215_340

><td class="source">			if(! is_file($this-&gt;cachefile)){<br></td></tr
><tr
id=sl_svn215_341

><td class="source">				//If we don&#39;t have something cached, regenerate the cached image.<br></td></tr
><tr
id=sl_svn215_342

><td class="source">				return false;<br></td></tr
><tr
id=sl_svn215_343

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_344

><td class="source">			if($this-&gt;localImageMTime){<br></td></tr
><tr
id=sl_svn215_345

><td class="source">				$mtime = $this-&gt;localImageMTime;<br></td></tr
><tr
id=sl_svn215_346

><td class="source">				$this-&gt;debug(3, &quot;Local real file&#39;s modification time is $mtime&quot;);<br></td></tr
><tr
id=sl_svn215_347

><td class="source">			} else if(is_file($this-&gt;cachefile)){ //If it&#39;s not a local request then use the mtime of the cached file to determine the 304<br></td></tr
><tr
id=sl_svn215_348

><td class="source">				$mtime = @filemtime($this-&gt;cachefile);<br></td></tr
><tr
id=sl_svn215_349

><td class="source">				$this-&gt;debug(3, &quot;Cached file&#39;s modification time is $mtime&quot;);<br></td></tr
><tr
id=sl_svn215_350

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_351

><td class="source">			if(! $mtime){ return false; }<br></td></tr
><tr
id=sl_svn215_352

><td class="source"><br></td></tr
><tr
id=sl_svn215_353

><td class="source">			$iftime = strtotime($_SERVER[&#39;HTTP_IF_MODIFIED_SINCE&#39;]);<br></td></tr
><tr
id=sl_svn215_354

><td class="source">			$this-&gt;debug(3, &quot;The conditional get&#39;s if-modified-since unixtime is $iftime&quot;);<br></td></tr
><tr
id=sl_svn215_355

><td class="source">			if($iftime &lt; 1){<br></td></tr
><tr
id=sl_svn215_356

><td class="source">				$this-&gt;debug(3, &quot;Got an invalid conditional get modified since time. Returning false.&quot;);<br></td></tr
><tr
id=sl_svn215_357

><td class="source">				return false;<br></td></tr
><tr
id=sl_svn215_358

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_359

><td class="source">			if($iftime &lt; $mtime){ //Real file or cache file has been modified since last request, so force refetch.<br></td></tr
><tr
id=sl_svn215_360

><td class="source">				$this-&gt;debug(3, &quot;File has been modified since last fetch.&quot;);<br></td></tr
><tr
id=sl_svn215_361

><td class="source">				return false;<br></td></tr
><tr
id=sl_svn215_362

><td class="source">			} else { //Otherwise serve a 304<br></td></tr
><tr
id=sl_svn215_363

><td class="source">				$this-&gt;debug(3, &quot;File has not been modified since last get, so serving a 304.&quot;);<br></td></tr
><tr
id=sl_svn215_364

><td class="source">				header ($_SERVER[&#39;SERVER_PROTOCOL&#39;] . &#39; 304 Not Modified&#39;);<br></td></tr
><tr
id=sl_svn215_365

><td class="source">				$this-&gt;debug(1, &quot;Returning 304 not modified&quot;);<br></td></tr
><tr
id=sl_svn215_366

><td class="source">				return true;<br></td></tr
><tr
id=sl_svn215_367

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_368

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_369

><td class="source">		return false;<br></td></tr
><tr
id=sl_svn215_370

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_371

><td class="source">	protected function tryServerCache(){<br></td></tr
><tr
id=sl_svn215_372

><td class="source">		$this-&gt;debug(3, &quot;Trying server cache&quot;);<br></td></tr
><tr
id=sl_svn215_373

><td class="source">		if(file_exists($this-&gt;cachefile)){<br></td></tr
><tr
id=sl_svn215_374

><td class="source">			$this-&gt;debug(3, &quot;Cachefile {$this-&gt;cachefile} exists&quot;);<br></td></tr
><tr
id=sl_svn215_375

><td class="source">			if($this-&gt;isURL){<br></td></tr
><tr
id=sl_svn215_376

><td class="source">				$this-&gt;debug(3, &quot;This is an external request, so checking if the cachefile is empty which means the request failed previously.&quot;);<br></td></tr
><tr
id=sl_svn215_377

><td class="source">				if(filesize($this-&gt;cachefile) &lt; 1){<br></td></tr
><tr
id=sl_svn215_378

><td class="source">					$this-&gt;debug(3, &quot;Found an empty cachefile indicating a failed earlier request. Checking how old it is.&quot;);<br></td></tr
><tr
id=sl_svn215_379

><td class="source">					//Fetching error occured previously<br></td></tr
><tr
id=sl_svn215_380

><td class="source">					if(time() - @filemtime($this-&gt;cachefile) &gt; WAIT_BETWEEN_FETCH_ERRORS){<br></td></tr
><tr
id=sl_svn215_381

><td class="source">						$this-&gt;debug(3, &quot;File is older than &quot; . WAIT_BETWEEN_FETCH_ERRORS . &quot; seconds. Deleting and returning false so app can try and load file.&quot;);<br></td></tr
><tr
id=sl_svn215_382

><td class="source">						@unlink($this-&gt;cachefile);<br></td></tr
><tr
id=sl_svn215_383

><td class="source">						return false; //to indicate we didn&#39;t serve from cache and app should try and load<br></td></tr
><tr
id=sl_svn215_384

><td class="source">					} else {<br></td></tr
><tr
id=sl_svn215_385

><td class="source">						$this-&gt;debug(3, &quot;Empty cachefile is still fresh so returning message saying we had an error fetching this image from remote host.&quot;);<br></td></tr
><tr
id=sl_svn215_386

><td class="source">						$this-&gt;set404();<br></td></tr
><tr
id=sl_svn215_387

><td class="source">						$this-&gt;error(&quot;An error occured fetching image.&quot;);<br></td></tr
><tr
id=sl_svn215_388

><td class="source">						return false; <br></td></tr
><tr
id=sl_svn215_389

><td class="source">					}<br></td></tr
><tr
id=sl_svn215_390

><td class="source">				}<br></td></tr
><tr
id=sl_svn215_391

><td class="source">			} else {<br></td></tr
><tr
id=sl_svn215_392

><td class="source">				$this-&gt;debug(3, &quot;Trying to serve cachefile {$this-&gt;cachefile}&quot;);<br></td></tr
><tr
id=sl_svn215_393

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_394

><td class="source">			if($this-&gt;serveCacheFile()){<br></td></tr
><tr
id=sl_svn215_395

><td class="source">				$this-&gt;debug(3, &quot;Succesfully served cachefile {$this-&gt;cachefile}&quot;);<br></td></tr
><tr
id=sl_svn215_396

><td class="source">				return true;<br></td></tr
><tr
id=sl_svn215_397

><td class="source">			} else {<br></td></tr
><tr
id=sl_svn215_398

><td class="source">				$this-&gt;debug(3, &quot;Failed to serve cachefile {$this-&gt;cachefile} - Deleting it from cache.&quot;);<br></td></tr
><tr
id=sl_svn215_399

><td class="source">				//Image serving failed. We can&#39;t retry at this point, but lets remove it from cache so the next request recreates it<br></td></tr
><tr
id=sl_svn215_400

><td class="source">				@unlink($this-&gt;cachefile);<br></td></tr
><tr
id=sl_svn215_401

><td class="source">				return true;<br></td></tr
><tr
id=sl_svn215_402

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_403

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_404

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_405

><td class="source">	protected function error($err){<br></td></tr
><tr
id=sl_svn215_406

><td class="source">		$this-&gt;debug(3, &quot;Adding error message: $err&quot;);<br></td></tr
><tr
id=sl_svn215_407

><td class="source">		$this-&gt;errors[] = $err;<br></td></tr
><tr
id=sl_svn215_408

><td class="source">		return false;<br></td></tr
><tr
id=sl_svn215_409

><td class="source"><br></td></tr
><tr
id=sl_svn215_410

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_411

><td class="source">	protected function haveErrors(){<br></td></tr
><tr
id=sl_svn215_412

><td class="source">		if(sizeof($this-&gt;errors) &gt; 0){<br></td></tr
><tr
id=sl_svn215_413

><td class="source">			return true;<br></td></tr
><tr
id=sl_svn215_414

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_415

><td class="source">		return false;<br></td></tr
><tr
id=sl_svn215_416

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_417

><td class="source">	protected function serveErrors(){<br></td></tr
><tr
id=sl_svn215_418

><td class="source">		header ($_SERVER[&#39;SERVER_PROTOCOL&#39;] . &#39; 400 Bad Request&#39;);<br></td></tr
><tr
id=sl_svn215_419

><td class="source">		$html = &#39;&lt;ul&gt;&#39;;<br></td></tr
><tr
id=sl_svn215_420

><td class="source">		foreach($this-&gt;errors as $err){<br></td></tr
><tr
id=sl_svn215_421

><td class="source">			$html .= &#39;&lt;li&gt;&#39; . htmlentities($err) . &#39;&lt;/li&gt;&#39;;<br></td></tr
><tr
id=sl_svn215_422

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_423

><td class="source">		$html .= &#39;&lt;/ul&gt;&#39;;<br></td></tr
><tr
id=sl_svn215_424

><td class="source">		echo &#39;&lt;h1&gt;A TimThumb error has occured&lt;/h1&gt;The following error(s) occured:&lt;br /&gt;&#39; . $html . &#39;&lt;br /&gt;&#39;;<br></td></tr
><tr
id=sl_svn215_425

><td class="source">		echo &#39;&lt;br /&gt;Query String : &#39; . htmlentities ($_SERVER[&#39;QUERY_STRING&#39;]);<br></td></tr
><tr
id=sl_svn215_426

><td class="source">		echo &#39;&lt;br /&gt;TimThumb version : &#39; . VERSION . &#39;&lt;/pre&gt;&#39;;<br></td></tr
><tr
id=sl_svn215_427

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_428

><td class="source">	protected function serveInternalImage(){<br></td></tr
><tr
id=sl_svn215_429

><td class="source">		$this-&gt;debug(3, &quot;Local image path is $this-&gt;localImage&quot;);<br></td></tr
><tr
id=sl_svn215_430

><td class="source">		if(! $this-&gt;localImage){<br></td></tr
><tr
id=sl_svn215_431

><td class="source">			$this-&gt;sanityFail(&quot;localImage not set after verifying it earlier in the code.&quot;);<br></td></tr
><tr
id=sl_svn215_432

><td class="source">			return false;<br></td></tr
><tr
id=sl_svn215_433

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_434

><td class="source">		$fileSize = filesize($this-&gt;localImage);<br></td></tr
><tr
id=sl_svn215_435

><td class="source">		if($fileSize &gt; MAX_FILE_SIZE){<br></td></tr
><tr
id=sl_svn215_436

><td class="source">			$this-&gt;error(&quot;The file you specified is greater than the maximum allowed file size.&quot;);<br></td></tr
><tr
id=sl_svn215_437

><td class="source">			return false;<br></td></tr
><tr
id=sl_svn215_438

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_439

><td class="source">		if($fileSize &lt;= 0){<br></td></tr
><tr
id=sl_svn215_440

><td class="source">			$this-&gt;error(&quot;The file you specified is &lt;= 0 bytes.&quot;);<br></td></tr
><tr
id=sl_svn215_441

><td class="source">			return false;<br></td></tr
><tr
id=sl_svn215_442

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_443

><td class="source">		$this-&gt;debug(3, &quot;Calling processImageAndWriteToCache() for local image.&quot;);<br></td></tr
><tr
id=sl_svn215_444

><td class="source">		if($this-&gt;processImageAndWriteToCache($this-&gt;localImage)){<br></td></tr
><tr
id=sl_svn215_445

><td class="source">			$this-&gt;serveCacheFile();<br></td></tr
><tr
id=sl_svn215_446

><td class="source">			return true;<br></td></tr
><tr
id=sl_svn215_447

><td class="source">		} else { <br></td></tr
><tr
id=sl_svn215_448

><td class="source">			return false;<br></td></tr
><tr
id=sl_svn215_449

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_450

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_451

><td class="source">	protected function cleanCache(){<br></td></tr
><tr
id=sl_svn215_452

><td class="source">		if (FILE_CACHE_TIME_BETWEEN_CLEANS &lt; 0) {<br></td></tr
><tr
id=sl_svn215_453

><td class="source">			return;<br></td></tr
><tr
id=sl_svn215_454

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_455

><td class="source">		$this-&gt;debug(3, &quot;cleanCache() called&quot;);<br></td></tr
><tr
id=sl_svn215_456

><td class="source">		$lastCleanFile = $this-&gt;cacheDirectory . &#39;/timthumb_cacheLastCleanTime.touch&#39;;<br></td></tr
><tr
id=sl_svn215_457

><td class="source">		<br></td></tr
><tr
id=sl_svn215_458

><td class="source">		//If this is a new timthumb installation we need to create the file<br></td></tr
><tr
id=sl_svn215_459

><td class="source">		if(! is_file($lastCleanFile)){<br></td></tr
><tr
id=sl_svn215_460

><td class="source">			$this-&gt;debug(1, &quot;File tracking last clean doesn&#39;t exist. Creating $lastCleanFile&quot;);<br></td></tr
><tr
id=sl_svn215_461

><td class="source">			if (!touch($lastCleanFile)) {<br></td></tr
><tr
id=sl_svn215_462

><td class="source">				$this-&gt;error(&quot;Could not create cache clean timestamp file.&quot;);<br></td></tr
><tr
id=sl_svn215_463

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_464

><td class="source">			return;<br></td></tr
><tr
id=sl_svn215_465

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_466

><td class="source">		if(@filemtime($lastCleanFile) &lt; (time() - FILE_CACHE_TIME_BETWEEN_CLEANS) ){ //Cache was last cleaned more than 1 day ago<br></td></tr
><tr
id=sl_svn215_467

><td class="source">			$this-&gt;debug(1, &quot;Cache was last cleaned more than &quot; . FILE_CACHE_TIME_BETWEEN_CLEANS . &quot; seconds ago. Cleaning now.&quot;);<br></td></tr
><tr
id=sl_svn215_468

><td class="source">			// Very slight race condition here, but worst case we&#39;ll have 2 or 3 servers cleaning the cache simultaneously once a day.<br></td></tr
><tr
id=sl_svn215_469

><td class="source">			if (!touch($lastCleanFile)) {<br></td></tr
><tr
id=sl_svn215_470

><td class="source">				$this-&gt;error(&quot;Could not create cache clean timestamp file.&quot;);<br></td></tr
><tr
id=sl_svn215_471

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_472

><td class="source">			$files = glob($this-&gt;cacheDirectory . &#39;/*&#39; . FILE_CACHE_SUFFIX);<br></td></tr
><tr
id=sl_svn215_473

><td class="source">			if ($files) {<br></td></tr
><tr
id=sl_svn215_474

><td class="source">				$timeAgo = time() - FILE_CACHE_MAX_FILE_AGE;<br></td></tr
><tr
id=sl_svn215_475

><td class="source">				foreach($files as $file){<br></td></tr
><tr
id=sl_svn215_476

><td class="source">					if(@filemtime($file) &lt; $timeAgo){<br></td></tr
><tr
id=sl_svn215_477

><td class="source">						$this-&gt;debug(3, &quot;Deleting cache file $file older than max age: &quot; . FILE_CACHE_MAX_FILE_AGE . &quot; seconds&quot;);<br></td></tr
><tr
id=sl_svn215_478

><td class="source">						@unlink($file);<br></td></tr
><tr
id=sl_svn215_479

><td class="source">					}<br></td></tr
><tr
id=sl_svn215_480

><td class="source">				}<br></td></tr
><tr
id=sl_svn215_481

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_482

><td class="source">			return true;<br></td></tr
><tr
id=sl_svn215_483

><td class="source">		} else {<br></td></tr
><tr
id=sl_svn215_484

><td class="source">			$this-&gt;debug(3, &quot;Cache was cleaned less than &quot; . FILE_CACHE_TIME_BETWEEN_CLEANS . &quot; seconds ago so no cleaning needed.&quot;);<br></td></tr
><tr
id=sl_svn215_485

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_486

><td class="source">		return false;<br></td></tr
><tr
id=sl_svn215_487

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_488

><td class="source">	protected function processImageAndWriteToCache($localImage){<br></td></tr
><tr
id=sl_svn215_489

><td class="source">		$sData = getimagesize($localImage);<br></td></tr
><tr
id=sl_svn215_490

><td class="source">		$origType = $sData[2];<br></td></tr
><tr
id=sl_svn215_491

><td class="source">		$mimeType = $sData[&#39;mime&#39;];<br></td></tr
><tr
id=sl_svn215_492

><td class="source"><br></td></tr
><tr
id=sl_svn215_493

><td class="source">		$this-&gt;debug(3, &quot;Mime type of image is $mimeType&quot;);<br></td></tr
><tr
id=sl_svn215_494

><td class="source">		if(! preg_match(&#39;/^image\/(?:gif|jpg|jpeg|png)$/i&#39;, $mimeType)){<br></td></tr
><tr
id=sl_svn215_495

><td class="source">			return $this-&gt;error(&quot;The image being resized is not a valid gif, jpg or png.&quot;);<br></td></tr
><tr
id=sl_svn215_496

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_497

><td class="source"><br></td></tr
><tr
id=sl_svn215_498

><td class="source">		if (!function_exists (&#39;imagecreatetruecolor&#39;)) {<br></td></tr
><tr
id=sl_svn215_499

><td class="source">		    return $this-&gt;error(&#39;GD Library Error: imagecreatetruecolor does not exist - please contact your webhost and ask them to install the GD library&#39;);<br></td></tr
><tr
id=sl_svn215_500

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_501

><td class="source"><br></td></tr
><tr
id=sl_svn215_502

><td class="source">		if (function_exists (&#39;imagefilter&#39;) &amp;&amp; defined (&#39;IMG_FILTER_NEGATE&#39;)) {<br></td></tr
><tr
id=sl_svn215_503

><td class="source">			$imageFilters = array (<br></td></tr
><tr
id=sl_svn215_504

><td class="source">				1 =&gt; array (IMG_FILTER_NEGATE, 0),<br></td></tr
><tr
id=sl_svn215_505

><td class="source">				2 =&gt; array (IMG_FILTER_GRAYSCALE, 0),<br></td></tr
><tr
id=sl_svn215_506

><td class="source">				3 =&gt; array (IMG_FILTER_BRIGHTNESS, 1),<br></td></tr
><tr
id=sl_svn215_507

><td class="source">				4 =&gt; array (IMG_FILTER_CONTRAST, 1),<br></td></tr
><tr
id=sl_svn215_508

><td class="source">				5 =&gt; array (IMG_FILTER_COLORIZE, 4),<br></td></tr
><tr
id=sl_svn215_509

><td class="source">				6 =&gt; array (IMG_FILTER_EDGEDETECT, 0),<br></td></tr
><tr
id=sl_svn215_510

><td class="source">				7 =&gt; array (IMG_FILTER_EMBOSS, 0),<br></td></tr
><tr
id=sl_svn215_511

><td class="source">				8 =&gt; array (IMG_FILTER_GAUSSIAN_BLUR, 0),<br></td></tr
><tr
id=sl_svn215_512

><td class="source">				9 =&gt; array (IMG_FILTER_SELECTIVE_BLUR, 0),<br></td></tr
><tr
id=sl_svn215_513

><td class="source">				10 =&gt; array (IMG_FILTER_MEAN_REMOVAL, 0),<br></td></tr
><tr
id=sl_svn215_514

><td class="source">				11 =&gt; array (IMG_FILTER_SMOOTH, 0),<br></td></tr
><tr
id=sl_svn215_515

><td class="source">			);<br></td></tr
><tr
id=sl_svn215_516

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_517

><td class="source"><br></td></tr
><tr
id=sl_svn215_518

><td class="source">		// get standard input properties		<br></td></tr
><tr
id=sl_svn215_519

><td class="source">		$new_width =  (int) abs ($this-&gt;param(&#39;w&#39;, 0));<br></td></tr
><tr
id=sl_svn215_520

><td class="source">		$new_height = (int) abs ($this-&gt;param(&#39;h&#39;, 0));<br></td></tr
><tr
id=sl_svn215_521

><td class="source">		$zoom_crop = (int) $this-&gt;param(&#39;zc&#39;, DEFAULT_ZC);<br></td></tr
><tr
id=sl_svn215_522

><td class="source">		$quality = (int) abs ($this-&gt;param(&#39;q&#39;, DEFAULT_Q));<br></td></tr
><tr
id=sl_svn215_523

><td class="source">		$align = $this-&gt;cropTop ? &#39;t&#39; : $this-&gt;param(&#39;a&#39;, &#39;c&#39;);<br></td></tr
><tr
id=sl_svn215_524

><td class="source">		$filters = $this-&gt;param(&#39;f&#39;, DEFAULT_F);<br></td></tr
><tr
id=sl_svn215_525

><td class="source">		$sharpen = (bool) $this-&gt;param(&#39;s&#39;, DEFAULT_S);<br></td></tr
><tr
id=sl_svn215_526

><td class="source">		$canvas_color = $this-&gt;param(&#39;cc&#39;, DEFAULT_CC);<br></td></tr
><tr
id=sl_svn215_527

><td class="source">		$canvas_trans = (bool) $this-&gt;param(&#39;ct&#39;, &#39;1&#39;);<br></td></tr
><tr
id=sl_svn215_528

><td class="source"><br></td></tr
><tr
id=sl_svn215_529

><td class="source">		// set default width and height if neither are set already<br></td></tr
><tr
id=sl_svn215_530

><td class="source">		if ($new_width == 0 &amp;&amp; $new_height == 0) {<br></td></tr
><tr
id=sl_svn215_531

><td class="source">		    $new_width = 100;<br></td></tr
><tr
id=sl_svn215_532

><td class="source">		    $new_height = 100;<br></td></tr
><tr
id=sl_svn215_533

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_534

><td class="source"><br></td></tr
><tr
id=sl_svn215_535

><td class="source">		// ensure size limits can not be abused<br></td></tr
><tr
id=sl_svn215_536

><td class="source">		$new_width = min ($new_width, MAX_WIDTH);<br></td></tr
><tr
id=sl_svn215_537

><td class="source">		$new_height = min ($new_height, MAX_HEIGHT);<br></td></tr
><tr
id=sl_svn215_538

><td class="source"><br></td></tr
><tr
id=sl_svn215_539

><td class="source">		// set memory limit to be able to have enough space to resize larger images<br></td></tr
><tr
id=sl_svn215_540

><td class="source">		$this-&gt;setMemoryLimit();<br></td></tr
><tr
id=sl_svn215_541

><td class="source"><br></td></tr
><tr
id=sl_svn215_542

><td class="source">		// open the existing image<br></td></tr
><tr
id=sl_svn215_543

><td class="source">		$image = $this-&gt;openImage ($mimeType, $localImage);<br></td></tr
><tr
id=sl_svn215_544

><td class="source">		if ($image === false) {<br></td></tr
><tr
id=sl_svn215_545

><td class="source">			return $this-&gt;error(&#39;Unable to open image.&#39;);<br></td></tr
><tr
id=sl_svn215_546

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_547

><td class="source"><br></td></tr
><tr
id=sl_svn215_548

><td class="source">		// Get original width and height<br></td></tr
><tr
id=sl_svn215_549

><td class="source">		$width = imagesx ($image);<br></td></tr
><tr
id=sl_svn215_550

><td class="source">		$height = imagesy ($image);<br></td></tr
><tr
id=sl_svn215_551

><td class="source">		$origin_x = 0;<br></td></tr
><tr
id=sl_svn215_552

><td class="source">		$origin_y = 0;<br></td></tr
><tr
id=sl_svn215_553

><td class="source"><br></td></tr
><tr
id=sl_svn215_554

><td class="source">		// generate new w/h if not provided<br></td></tr
><tr
id=sl_svn215_555

><td class="source">		if ($new_width &amp;&amp; !$new_height) {<br></td></tr
><tr
id=sl_svn215_556

><td class="source">			$new_height = floor ($height * ($new_width / $width));<br></td></tr
><tr
id=sl_svn215_557

><td class="source">		} else if ($new_height &amp;&amp; !$new_width) {<br></td></tr
><tr
id=sl_svn215_558

><td class="source">			$new_width = floor ($width * ($new_height / $height));<br></td></tr
><tr
id=sl_svn215_559

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_560

><td class="source"><br></td></tr
><tr
id=sl_svn215_561

><td class="source">		// scale down and add borders<br></td></tr
><tr
id=sl_svn215_562

><td class="source">		if ($zoom_crop == 3) {<br></td></tr
><tr
id=sl_svn215_563

><td class="source"><br></td></tr
><tr
id=sl_svn215_564

><td class="source">			$final_height = $height * ($new_width / $width);<br></td></tr
><tr
id=sl_svn215_565

><td class="source"><br></td></tr
><tr
id=sl_svn215_566

><td class="source">			if ($final_height &gt; $new_height) {<br></td></tr
><tr
id=sl_svn215_567

><td class="source">				$new_width = $width * ($new_height / $height);<br></td></tr
><tr
id=sl_svn215_568

><td class="source">			} else {<br></td></tr
><tr
id=sl_svn215_569

><td class="source">				$new_height = $final_height;<br></td></tr
><tr
id=sl_svn215_570

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_571

><td class="source"><br></td></tr
><tr
id=sl_svn215_572

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_573

><td class="source"><br></td></tr
><tr
id=sl_svn215_574

><td class="source">		// create a new true color image<br></td></tr
><tr
id=sl_svn215_575

><td class="source">		$canvas = imagecreatetruecolor ($new_width, $new_height);<br></td></tr
><tr
id=sl_svn215_576

><td class="source">		imagealphablending ($canvas, false);<br></td></tr
><tr
id=sl_svn215_577

><td class="source"><br></td></tr
><tr
id=sl_svn215_578

><td class="source">		if (strlen($canvas_color) == 3) { //if is 3-char notation, edit string into 6-char notation<br></td></tr
><tr
id=sl_svn215_579

><td class="source">			$canvas_color =  str_repeat(substr($canvas_color, 0, 1), 2) . str_repeat(substr($canvas_color, 1, 1), 2) . str_repeat(substr($canvas_color, 2, 1), 2); <br></td></tr
><tr
id=sl_svn215_580

><td class="source">		} else if (strlen($canvas_color) != 6) {<br></td></tr
><tr
id=sl_svn215_581

><td class="source">			$canvas_color = DEFAULT_CC; // on error return default canvas color<br></td></tr
><tr
id=sl_svn215_582

><td class="source"> 		}<br></td></tr
><tr
id=sl_svn215_583

><td class="source"><br></td></tr
><tr
id=sl_svn215_584

><td class="source">		$canvas_color_R = hexdec (substr ($canvas_color, 0, 2));<br></td></tr
><tr
id=sl_svn215_585

><td class="source">		$canvas_color_G = hexdec (substr ($canvas_color, 2, 2));<br></td></tr
><tr
id=sl_svn215_586

><td class="source">		$canvas_color_B = hexdec (substr ($canvas_color, 4, 2));<br></td></tr
><tr
id=sl_svn215_587

><td class="source"><br></td></tr
><tr
id=sl_svn215_588

><td class="source">		// Create a new transparent color for image<br></td></tr
><tr
id=sl_svn215_589

><td class="source">	    // If is a png and PNG_IS_TRANSPARENT is false then remove the alpha transparency <br></td></tr
><tr
id=sl_svn215_590

><td class="source">		// (and if is set a canvas color show it in the background)<br></td></tr
><tr
id=sl_svn215_591

><td class="source">		if(preg_match(&#39;/^image\/png$/i&#39;, $mimeType) &amp;&amp; !PNG_IS_TRANSPARENT &amp;&amp; $canvas_trans){ <br></td></tr
><tr
id=sl_svn215_592

><td class="source">			$color = imagecolorallocatealpha ($canvas, $canvas_color_R, $canvas_color_G, $canvas_color_B, 127);		<br></td></tr
><tr
id=sl_svn215_593

><td class="source">		}else{<br></td></tr
><tr
id=sl_svn215_594

><td class="source">			$color = imagecolorallocatealpha ($canvas, $canvas_color_R, $canvas_color_G, $canvas_color_B, 0);<br></td></tr
><tr
id=sl_svn215_595

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_596

><td class="source"><br></td></tr
><tr
id=sl_svn215_597

><td class="source"><br></td></tr
><tr
id=sl_svn215_598

><td class="source">		// Completely fill the background of the new image with allocated color.<br></td></tr
><tr
id=sl_svn215_599

><td class="source">		imagefill ($canvas, 0, 0, $color);<br></td></tr
><tr
id=sl_svn215_600

><td class="source"><br></td></tr
><tr
id=sl_svn215_601

><td class="source">		// scale down and add borders<br></td></tr
><tr
id=sl_svn215_602

><td class="source">		if ($zoom_crop == 2) {<br></td></tr
><tr
id=sl_svn215_603

><td class="source"><br></td></tr
><tr
id=sl_svn215_604

><td class="source">			$final_height = $height * ($new_width / $width);<br></td></tr
><tr
id=sl_svn215_605

><td class="source"><br></td></tr
><tr
id=sl_svn215_606

><td class="source">			if ($final_height &gt; $new_height) {<br></td></tr
><tr
id=sl_svn215_607

><td class="source"><br></td></tr
><tr
id=sl_svn215_608

><td class="source">				$origin_x = $new_width / 2;<br></td></tr
><tr
id=sl_svn215_609

><td class="source">				$new_width = $width * ($new_height / $height);<br></td></tr
><tr
id=sl_svn215_610

><td class="source">				$origin_x = round ($origin_x - ($new_width / 2));<br></td></tr
><tr
id=sl_svn215_611

><td class="source"><br></td></tr
><tr
id=sl_svn215_612

><td class="source">			} else {<br></td></tr
><tr
id=sl_svn215_613

><td class="source"><br></td></tr
><tr
id=sl_svn215_614

><td class="source">				$origin_y = $new_height / 2;<br></td></tr
><tr
id=sl_svn215_615

><td class="source">				$new_height = $final_height;<br></td></tr
><tr
id=sl_svn215_616

><td class="source">				$origin_y = round ($origin_y - ($new_height / 2));<br></td></tr
><tr
id=sl_svn215_617

><td class="source"><br></td></tr
><tr
id=sl_svn215_618

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_619

><td class="source"><br></td></tr
><tr
id=sl_svn215_620

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_621

><td class="source"><br></td></tr
><tr
id=sl_svn215_622

><td class="source">		// Restore transparency blending<br></td></tr
><tr
id=sl_svn215_623

><td class="source">		imagesavealpha ($canvas, true);<br></td></tr
><tr
id=sl_svn215_624

><td class="source"><br></td></tr
><tr
id=sl_svn215_625

><td class="source">		if ($zoom_crop &gt; 0) {<br></td></tr
><tr
id=sl_svn215_626

><td class="source"><br></td></tr
><tr
id=sl_svn215_627

><td class="source">			$src_x = $src_y = 0;<br></td></tr
><tr
id=sl_svn215_628

><td class="source">			$src_w = $width;<br></td></tr
><tr
id=sl_svn215_629

><td class="source">			$src_h = $height;<br></td></tr
><tr
id=sl_svn215_630

><td class="source"><br></td></tr
><tr
id=sl_svn215_631

><td class="source">			$cmp_x = $width / $new_width;<br></td></tr
><tr
id=sl_svn215_632

><td class="source">			$cmp_y = $height / $new_height;<br></td></tr
><tr
id=sl_svn215_633

><td class="source"><br></td></tr
><tr
id=sl_svn215_634

><td class="source">			// calculate x or y coordinate and width or height of source<br></td></tr
><tr
id=sl_svn215_635

><td class="source">			if ($cmp_x &gt; $cmp_y) {<br></td></tr
><tr
id=sl_svn215_636

><td class="source"><br></td></tr
><tr
id=sl_svn215_637

><td class="source">				$src_w = round ($width / $cmp_x * $cmp_y);<br></td></tr
><tr
id=sl_svn215_638

><td class="source">				$src_x = round (($width - ($width / $cmp_x * $cmp_y)) / 2);<br></td></tr
><tr
id=sl_svn215_639

><td class="source"><br></td></tr
><tr
id=sl_svn215_640

><td class="source">			} else if ($cmp_y &gt; $cmp_x) {<br></td></tr
><tr
id=sl_svn215_641

><td class="source"><br></td></tr
><tr
id=sl_svn215_642

><td class="source">				$src_h = round ($height / $cmp_y * $cmp_x);<br></td></tr
><tr
id=sl_svn215_643

><td class="source">				$src_y = round (($height - ($height / $cmp_y * $cmp_x)) / 2);<br></td></tr
><tr
id=sl_svn215_644

><td class="source"><br></td></tr
><tr
id=sl_svn215_645

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_646

><td class="source"><br></td></tr
><tr
id=sl_svn215_647

><td class="source">			// positional cropping!<br></td></tr
><tr
id=sl_svn215_648

><td class="source">			if ($align) {<br></td></tr
><tr
id=sl_svn215_649

><td class="source">				if (strpos ($align, &#39;t&#39;) !== false) {<br></td></tr
><tr
id=sl_svn215_650

><td class="source">					$src_y = 0;<br></td></tr
><tr
id=sl_svn215_651

><td class="source">				}<br></td></tr
><tr
id=sl_svn215_652

><td class="source">				if (strpos ($align, &#39;b&#39;) !== false) {<br></td></tr
><tr
id=sl_svn215_653

><td class="source">					$src_y = $height - $src_h;<br></td></tr
><tr
id=sl_svn215_654

><td class="source">				}<br></td></tr
><tr
id=sl_svn215_655

><td class="source">				if (strpos ($align, &#39;l&#39;) !== false) {<br></td></tr
><tr
id=sl_svn215_656

><td class="source">					$src_x = 0;<br></td></tr
><tr
id=sl_svn215_657

><td class="source">				}<br></td></tr
><tr
id=sl_svn215_658

><td class="source">				if (strpos ($align, &#39;r&#39;) !== false) {<br></td></tr
><tr
id=sl_svn215_659

><td class="source">					$src_x = $width - $src_w;<br></td></tr
><tr
id=sl_svn215_660

><td class="source">				}<br></td></tr
><tr
id=sl_svn215_661

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_662

><td class="source"><br></td></tr
><tr
id=sl_svn215_663

><td class="source">			imagecopyresampled ($canvas, $image, $origin_x, $origin_y, $src_x, $src_y, $new_width, $new_height, $src_w, $src_h);<br></td></tr
><tr
id=sl_svn215_664

><td class="source"><br></td></tr
><tr
id=sl_svn215_665

><td class="source">		} else {<br></td></tr
><tr
id=sl_svn215_666

><td class="source"><br></td></tr
><tr
id=sl_svn215_667

><td class="source">			// copy and resize part of an image with resampling<br></td></tr
><tr
id=sl_svn215_668

><td class="source">			imagecopyresampled ($canvas, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);<br></td></tr
><tr
id=sl_svn215_669

><td class="source"><br></td></tr
><tr
id=sl_svn215_670

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_671

><td class="source"><br></td></tr
><tr
id=sl_svn215_672

><td class="source">		if ($filters != &#39;&#39; &amp;&amp; function_exists (&#39;imagefilter&#39;) &amp;&amp; defined (&#39;IMG_FILTER_NEGATE&#39;)) {<br></td></tr
><tr
id=sl_svn215_673

><td class="source">			// apply filters to image<br></td></tr
><tr
id=sl_svn215_674

><td class="source">			$filterList = explode (&#39;|&#39;, $filters);<br></td></tr
><tr
id=sl_svn215_675

><td class="source">			foreach ($filterList as $fl) {<br></td></tr
><tr
id=sl_svn215_676

><td class="source"><br></td></tr
><tr
id=sl_svn215_677

><td class="source">				$filterSettings = explode (&#39;,&#39;, $fl);<br></td></tr
><tr
id=sl_svn215_678

><td class="source">				if (isset ($imageFilters[$filterSettings[0]])) {<br></td></tr
><tr
id=sl_svn215_679

><td class="source"><br></td></tr
><tr
id=sl_svn215_680

><td class="source">					for ($i = 0; $i &lt; 4; $i ++) {<br></td></tr
><tr
id=sl_svn215_681

><td class="source">						if (!isset ($filterSettings[$i])) {<br></td></tr
><tr
id=sl_svn215_682

><td class="source">							$filterSettings[$i] = null;<br></td></tr
><tr
id=sl_svn215_683

><td class="source">						} else {<br></td></tr
><tr
id=sl_svn215_684

><td class="source">							$filterSettings[$i] = (int) $filterSettings[$i];<br></td></tr
><tr
id=sl_svn215_685

><td class="source">						}<br></td></tr
><tr
id=sl_svn215_686

><td class="source">					}<br></td></tr
><tr
id=sl_svn215_687

><td class="source"><br></td></tr
><tr
id=sl_svn215_688

><td class="source">					switch ($imageFilters[$filterSettings[0]][1]) {<br></td></tr
><tr
id=sl_svn215_689

><td class="source"><br></td></tr
><tr
id=sl_svn215_690

><td class="source">						case 1:<br></td></tr
><tr
id=sl_svn215_691

><td class="source"><br></td></tr
><tr
id=sl_svn215_692

><td class="source">							imagefilter ($canvas, $imageFilters[$filterSettings[0]][0], $filterSettings[1]);<br></td></tr
><tr
id=sl_svn215_693

><td class="source">							break;<br></td></tr
><tr
id=sl_svn215_694

><td class="source"><br></td></tr
><tr
id=sl_svn215_695

><td class="source">						case 2:<br></td></tr
><tr
id=sl_svn215_696

><td class="source"><br></td></tr
><tr
id=sl_svn215_697

><td class="source">							imagefilter ($canvas, $imageFilters[$filterSettings[0]][0], $filterSettings[1], $filterSettings[2]);<br></td></tr
><tr
id=sl_svn215_698

><td class="source">							break;<br></td></tr
><tr
id=sl_svn215_699

><td class="source"><br></td></tr
><tr
id=sl_svn215_700

><td class="source">						case 3:<br></td></tr
><tr
id=sl_svn215_701

><td class="source"><br></td></tr
><tr
id=sl_svn215_702

><td class="source">							imagefilter ($canvas, $imageFilters[$filterSettings[0]][0], $filterSettings[1], $filterSettings[2], $filterSettings[3]);<br></td></tr
><tr
id=sl_svn215_703

><td class="source">							break;<br></td></tr
><tr
id=sl_svn215_704

><td class="source"><br></td></tr
><tr
id=sl_svn215_705

><td class="source">						case 4:<br></td></tr
><tr
id=sl_svn215_706

><td class="source"><br></td></tr
><tr
id=sl_svn215_707

><td class="source">							imagefilter ($canvas, $imageFilters[$filterSettings[0]][0], $filterSettings[1], $filterSettings[2], $filterSettings[3], $filterSettings[4]);<br></td></tr
><tr
id=sl_svn215_708

><td class="source">							break;<br></td></tr
><tr
id=sl_svn215_709

><td class="source"><br></td></tr
><tr
id=sl_svn215_710

><td class="source">						default:<br></td></tr
><tr
id=sl_svn215_711

><td class="source"><br></td></tr
><tr
id=sl_svn215_712

><td class="source">							imagefilter ($canvas, $imageFilters[$filterSettings[0]][0]);<br></td></tr
><tr
id=sl_svn215_713

><td class="source">							break;<br></td></tr
><tr
id=sl_svn215_714

><td class="source"><br></td></tr
><tr
id=sl_svn215_715

><td class="source">					}<br></td></tr
><tr
id=sl_svn215_716

><td class="source">				}<br></td></tr
><tr
id=sl_svn215_717

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_718

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_719

><td class="source"><br></td></tr
><tr
id=sl_svn215_720

><td class="source">		// sharpen image<br></td></tr
><tr
id=sl_svn215_721

><td class="source">		if ($sharpen &amp;&amp; function_exists (&#39;imageconvolution&#39;)) {<br></td></tr
><tr
id=sl_svn215_722

><td class="source"><br></td></tr
><tr
id=sl_svn215_723

><td class="source">			$sharpenMatrix = array (<br></td></tr
><tr
id=sl_svn215_724

><td class="source">					array (-1,-1,-1),<br></td></tr
><tr
id=sl_svn215_725

><td class="source">					array (-1,16,-1),<br></td></tr
><tr
id=sl_svn215_726

><td class="source">					array (-1,-1,-1),<br></td></tr
><tr
id=sl_svn215_727

><td class="source">					);<br></td></tr
><tr
id=sl_svn215_728

><td class="source"><br></td></tr
><tr
id=sl_svn215_729

><td class="source">			$divisor = 8;<br></td></tr
><tr
id=sl_svn215_730

><td class="source">			$offset = 0;<br></td></tr
><tr
id=sl_svn215_731

><td class="source"><br></td></tr
><tr
id=sl_svn215_732

><td class="source">			imageconvolution ($canvas, $sharpenMatrix, $divisor, $offset);<br></td></tr
><tr
id=sl_svn215_733

><td class="source"><br></td></tr
><tr
id=sl_svn215_734

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_735

><td class="source">		//Straight from Wordpress core code. Reduces filesize by up to 70% for PNG&#39;s<br></td></tr
><tr
id=sl_svn215_736

><td class="source">		if ( (IMAGETYPE_PNG == $origType || IMAGETYPE_GIF == $origType) &amp;&amp; function_exists(&#39;imageistruecolor&#39;) &amp;&amp; !imageistruecolor( $image ) &amp;&amp; imagecolortransparent( $image ) &gt; 0 ){<br></td></tr
><tr
id=sl_svn215_737

><td class="source">			imagetruecolortopalette( $canvas, false, imagecolorstotal( $image ) );<br></td></tr
><tr
id=sl_svn215_738

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_739

><td class="source"><br></td></tr
><tr
id=sl_svn215_740

><td class="source">		$imgType = &quot;&quot;;<br></td></tr
><tr
id=sl_svn215_741

><td class="source">		$tempfile = tempnam($this-&gt;cacheDirectory, &#39;timthumb_tmpimg_&#39;);<br></td></tr
><tr
id=sl_svn215_742

><td class="source">		if(preg_match(&#39;/^image\/(?:jpg|jpeg)$/i&#39;, $mimeType)){ <br></td></tr
><tr
id=sl_svn215_743

><td class="source">			$imgType = &#39;jpg&#39;;<br></td></tr
><tr
id=sl_svn215_744

><td class="source">			imagejpeg($canvas, $tempfile, $quality); <br></td></tr
><tr
id=sl_svn215_745

><td class="source">		} else if(preg_match(&#39;/^image\/png$/i&#39;, $mimeType)){ <br></td></tr
><tr
id=sl_svn215_746

><td class="source">			$imgType = &#39;png&#39;;<br></td></tr
><tr
id=sl_svn215_747

><td class="source">			imagepng($canvas, $tempfile, floor($quality * 0.09));<br></td></tr
><tr
id=sl_svn215_748

><td class="source">		} else if(preg_match(&#39;/^image\/gif$/i&#39;, $mimeType)){<br></td></tr
><tr
id=sl_svn215_749

><td class="source">			$imgType = &#39;gif&#39;;<br></td></tr
><tr
id=sl_svn215_750

><td class="source">			imagegif($canvas, $tempfile);<br></td></tr
><tr
id=sl_svn215_751

><td class="source">		} else {<br></td></tr
><tr
id=sl_svn215_752

><td class="source">			return $this-&gt;sanityFail(&quot;Could not match mime type after verifying it previously.&quot;);<br></td></tr
><tr
id=sl_svn215_753

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_754

><td class="source"><br></td></tr
><tr
id=sl_svn215_755

><td class="source">		if($imgType == &#39;png&#39; &amp;&amp; OPTIPNG_ENABLED &amp;&amp; OPTIPNG_PATH &amp;&amp; @is_file(OPTIPNG_PATH)){<br></td></tr
><tr
id=sl_svn215_756

><td class="source">			$exec = OPTIPNG_PATH;<br></td></tr
><tr
id=sl_svn215_757

><td class="source">			$this-&gt;debug(3, &quot;optipng&#39;ing $tempfile&quot;);<br></td></tr
><tr
id=sl_svn215_758

><td class="source">			$presize = filesize($tempfile);<br></td></tr
><tr
id=sl_svn215_759

><td class="source">			$out = `$exec -o1 $tempfile`; //you can use up to -o7 but it really slows things down<br></td></tr
><tr
id=sl_svn215_760

><td class="source">			clearstatcache();<br></td></tr
><tr
id=sl_svn215_761

><td class="source">			$aftersize = filesize($tempfile);<br></td></tr
><tr
id=sl_svn215_762

><td class="source">			$sizeDrop = $presize - $aftersize;<br></td></tr
><tr
id=sl_svn215_763

><td class="source">			if($sizeDrop &gt; 0){<br></td></tr
><tr
id=sl_svn215_764

><td class="source">				$this-&gt;debug(1, &quot;optipng reduced size by $sizeDrop&quot;);<br></td></tr
><tr
id=sl_svn215_765

><td class="source">			} else if($sizeDrop &lt; 0){<br></td></tr
><tr
id=sl_svn215_766

><td class="source">				$this-&gt;debug(1, &quot;optipng increased size! Difference was: $sizeDrop&quot;);<br></td></tr
><tr
id=sl_svn215_767

><td class="source">			} else {<br></td></tr
><tr
id=sl_svn215_768

><td class="source">				$this-&gt;debug(1, &quot;optipng did not change image size.&quot;);<br></td></tr
><tr
id=sl_svn215_769

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_770

><td class="source">		} else if($imgType == &#39;png&#39; &amp;&amp; PNGCRUSH_ENABLED &amp;&amp; PNGCRUSH_PATH &amp;&amp; @is_file(PNGCRUSH_PATH)){<br></td></tr
><tr
id=sl_svn215_771

><td class="source">			$exec = PNGCRUSH_PATH;<br></td></tr
><tr
id=sl_svn215_772

><td class="source">			$tempfile2 = tempnam($this-&gt;cacheDirectory, &#39;timthumb_tmpimg_&#39;);<br></td></tr
><tr
id=sl_svn215_773

><td class="source">			$this-&gt;debug(3, &quot;pngcrush&#39;ing $tempfile to $tempfile2&quot;);<br></td></tr
><tr
id=sl_svn215_774

><td class="source">			$out = `$exec $tempfile $tempfile2`;<br></td></tr
><tr
id=sl_svn215_775

><td class="source">			$todel = &quot;&quot;;<br></td></tr
><tr
id=sl_svn215_776

><td class="source">			if(is_file($tempfile2)){<br></td></tr
><tr
id=sl_svn215_777

><td class="source">				$sizeDrop = filesize($tempfile) - filesize($tempfile2);<br></td></tr
><tr
id=sl_svn215_778

><td class="source">				if($sizeDrop &gt; 0){<br></td></tr
><tr
id=sl_svn215_779

><td class="source">					$this-&gt;debug(1, &quot;pngcrush was succesful and gave a $sizeDrop byte size reduction&quot;);<br></td></tr
><tr
id=sl_svn215_780

><td class="source">					$todel = $tempfile;<br></td></tr
><tr
id=sl_svn215_781

><td class="source">					$tempfile = $tempfile2;<br></td></tr
><tr
id=sl_svn215_782

><td class="source">				} else {<br></td></tr
><tr
id=sl_svn215_783

><td class="source">					$this-&gt;debug(1, &quot;pngcrush did not reduce file size. Difference was $sizeDrop bytes.&quot;);<br></td></tr
><tr
id=sl_svn215_784

><td class="source">					$todel = $tempfile2;<br></td></tr
><tr
id=sl_svn215_785

><td class="source">				}<br></td></tr
><tr
id=sl_svn215_786

><td class="source">			} else {<br></td></tr
><tr
id=sl_svn215_787

><td class="source">				$this-&gt;debug(3, &quot;pngcrush failed with output: $out&quot;);<br></td></tr
><tr
id=sl_svn215_788

><td class="source">				$todel = $tempfile2;<br></td></tr
><tr
id=sl_svn215_789

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_790

><td class="source">			@unlink($todel);<br></td></tr
><tr
id=sl_svn215_791

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_792

><td class="source"><br></td></tr
><tr
id=sl_svn215_793

><td class="source">		$this-&gt;debug(3, &quot;Rewriting image with security header.&quot;);<br></td></tr
><tr
id=sl_svn215_794

><td class="source">		$tempfile4 = tempnam($this-&gt;cacheDirectory, &#39;timthumb_tmpimg_&#39;);<br></td></tr
><tr
id=sl_svn215_795

><td class="source">		$context = stream_context_create ();<br></td></tr
><tr
id=sl_svn215_796

><td class="source">		$fp = fopen($tempfile,&#39;r&#39;,0,$context);<br></td></tr
><tr
id=sl_svn215_797

><td class="source">		file_put_contents($tempfile4, $this-&gt;filePrependSecurityBlock . $imgType . &#39; ?&#39; . &#39;&gt;&#39;); //6 extra bytes, first 3 being image type <br></td></tr
><tr
id=sl_svn215_798

><td class="source">		file_put_contents($tempfile4, $fp, FILE_APPEND);<br></td></tr
><tr
id=sl_svn215_799

><td class="source">		fclose($fp);<br></td></tr
><tr
id=sl_svn215_800

><td class="source">		@unlink($tempfile);<br></td></tr
><tr
id=sl_svn215_801

><td class="source">		$this-&gt;debug(3, &quot;Locking and replacing cache file.&quot;);<br></td></tr
><tr
id=sl_svn215_802

><td class="source">		$lockFile = $this-&gt;cachefile . &#39;.lock&#39;;<br></td></tr
><tr
id=sl_svn215_803

><td class="source">		$fh = fopen($lockFile, &#39;w&#39;);<br></td></tr
><tr
id=sl_svn215_804

><td class="source">		if(! $fh){<br></td></tr
><tr
id=sl_svn215_805

><td class="source">			return $this-&gt;error(&quot;Could not open the lockfile for writing an image.&quot;);<br></td></tr
><tr
id=sl_svn215_806

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_807

><td class="source">		if(flock($fh, LOCK_EX)){<br></td></tr
><tr
id=sl_svn215_808

><td class="source">			@unlink($this-&gt;cachefile); //rename generally overwrites, but doing this in case of platform specific quirks. File might not exist yet.<br></td></tr
><tr
id=sl_svn215_809

><td class="source">			rename($tempfile4, $this-&gt;cachefile);<br></td></tr
><tr
id=sl_svn215_810

><td class="source">			flock($fh, LOCK_UN);<br></td></tr
><tr
id=sl_svn215_811

><td class="source">			fclose($fh);<br></td></tr
><tr
id=sl_svn215_812

><td class="source">			@unlink($lockFile);<br></td></tr
><tr
id=sl_svn215_813

><td class="source">		} else {<br></td></tr
><tr
id=sl_svn215_814

><td class="source">			fclose($fh);<br></td></tr
><tr
id=sl_svn215_815

><td class="source">			@unlink($lockFile);<br></td></tr
><tr
id=sl_svn215_816

><td class="source">			@unlink($tempfile4);<br></td></tr
><tr
id=sl_svn215_817

><td class="source">			return $this-&gt;error(&quot;Could not get a lock for writing.&quot;);<br></td></tr
><tr
id=sl_svn215_818

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_819

><td class="source">		$this-&gt;debug(3, &quot;Done image replace with security header. Cleaning up and running cleanCache()&quot;);<br></td></tr
><tr
id=sl_svn215_820

><td class="source">		imagedestroy($canvas);<br></td></tr
><tr
id=sl_svn215_821

><td class="source">		imagedestroy($image);<br></td></tr
><tr
id=sl_svn215_822

><td class="source">		return true;<br></td></tr
><tr
id=sl_svn215_823

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_824

><td class="source">	protected function calcDocRoot(){<br></td></tr
><tr
id=sl_svn215_825

><td class="source">		$docRoot = @$_SERVER[&#39;DOCUMENT_ROOT&#39;];<br></td></tr
><tr
id=sl_svn215_826

><td class="source">		if (defined(&#39;LOCAL_FILE_BASE_DIRECTORY&#39;)) {<br></td></tr
><tr
id=sl_svn215_827

><td class="source">			$docRoot = LOCAL_FILE_BASE_DIRECTORY;   <br></td></tr
><tr
id=sl_svn215_828

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_829

><td class="source">		if(!isset($docRoot)){ <br></td></tr
><tr
id=sl_svn215_830

><td class="source">			$this-&gt;debug(3, &quot;DOCUMENT_ROOT is not set. This is probably windows. Starting search 1.&quot;);<br></td></tr
><tr
id=sl_svn215_831

><td class="source">			if(isset($_SERVER[&#39;SCRIPT_FILENAME&#39;])){<br></td></tr
><tr
id=sl_svn215_832

><td class="source">				$docRoot = str_replace( &#39;\\&#39;, &#39;/&#39;, substr($_SERVER[&#39;SCRIPT_FILENAME&#39;], 0, 0-strlen($_SERVER[&#39;PHP_SELF&#39;])));<br></td></tr
><tr
id=sl_svn215_833

><td class="source">				$this-&gt;debug(3, &quot;Generated docRoot using SCRIPT_FILENAME and PHP_SELF as: $docRoot&quot;);<br></td></tr
><tr
id=sl_svn215_834

><td class="source">			} <br></td></tr
><tr
id=sl_svn215_835

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_836

><td class="source">		if(!isset($docRoot)){ <br></td></tr
><tr
id=sl_svn215_837

><td class="source">			$this-&gt;debug(3, &quot;DOCUMENT_ROOT still is not set. Starting search 2.&quot;);<br></td></tr
><tr
id=sl_svn215_838

><td class="source">			if(isset($_SERVER[&#39;PATH_TRANSLATED&#39;])){<br></td></tr
><tr
id=sl_svn215_839

><td class="source">				$docRoot = str_replace( &#39;\\&#39;, &#39;/&#39;, substr(str_replace(&#39;\\\\&#39;, &#39;\\&#39;, $_SERVER[&#39;PATH_TRANSLATED&#39;]), 0, 0-strlen($_SERVER[&#39;PHP_SELF&#39;])));<br></td></tr
><tr
id=sl_svn215_840

><td class="source">				$this-&gt;debug(3, &quot;Generated docRoot using PATH_TRANSLATED and PHP_SELF as: $docRoot&quot;);<br></td></tr
><tr
id=sl_svn215_841

><td class="source">			} <br></td></tr
><tr
id=sl_svn215_842

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_843

><td class="source">		if($docRoot &amp;&amp; $_SERVER[&#39;DOCUMENT_ROOT&#39;] != &#39;/&#39;){ $docRoot = preg_replace(&#39;/\/$/&#39;, &#39;&#39;, $docRoot); }<br></td></tr
><tr
id=sl_svn215_844

><td class="source">		$this-&gt;debug(3, &quot;Doc root is: &quot; . $docRoot);<br></td></tr
><tr
id=sl_svn215_845

><td class="source">		$this-&gt;docRoot = $docRoot;<br></td></tr
><tr
id=sl_svn215_846

><td class="source"><br></td></tr
><tr
id=sl_svn215_847

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_848

><td class="source">	protected function getLocalImagePath($src){<br></td></tr
><tr
id=sl_svn215_849

><td class="source">		$src = ltrim($src, &#39;/&#39;); //strip off the leading &#39;/&#39;<br></td></tr
><tr
id=sl_svn215_850

><td class="source">		if(! $this-&gt;docRoot){<br></td></tr
><tr
id=sl_svn215_851

><td class="source">			$this-&gt;debug(3, &quot;We have no document root set, so as a last resort, lets check if the image is in the current dir and serve that.&quot;);<br></td></tr
><tr
id=sl_svn215_852

><td class="source">			//We don&#39;t support serving images outside the current dir if we don&#39;t have a doc root for security reasons.<br></td></tr
><tr
id=sl_svn215_853

><td class="source">			$file = preg_replace(&#39;/^.*?([^\/\\\\]+)$/&#39;, &#39;$1&#39;, $src); //strip off any path info and just leave the filename.<br></td></tr
><tr
id=sl_svn215_854

><td class="source">			if(is_file($file)){<br></td></tr
><tr
id=sl_svn215_855

><td class="source">				return $this-&gt;realpath($file);<br></td></tr
><tr
id=sl_svn215_856

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_857

><td class="source">			return $this-&gt;error(&quot;Could not find your website document root and the file specified doesn&#39;t exist in timthumbs directory. We don&#39;t support serving files outside timthumb&#39;s directory without a document root for security reasons.&quot;);<br></td></tr
><tr
id=sl_svn215_858

><td class="source">		} //Do not go past this point without docRoot set<br></td></tr
><tr
id=sl_svn215_859

><td class="source"><br></td></tr
><tr
id=sl_svn215_860

><td class="source">		//Try src under docRoot<br></td></tr
><tr
id=sl_svn215_861

><td class="source">		if(file_exists ($this-&gt;docRoot . &#39;/&#39; . $src)) {<br></td></tr
><tr
id=sl_svn215_862

><td class="source">			$this-&gt;debug(3, &quot;Found file as &quot; . $this-&gt;docRoot . &#39;/&#39; . $src);<br></td></tr
><tr
id=sl_svn215_863

><td class="source">			$real = $this-&gt;realpath($this-&gt;docRoot . &#39;/&#39; . $src);<br></td></tr
><tr
id=sl_svn215_864

><td class="source">			if(stripos($real, $this-&gt;docRoot) === 0){<br></td></tr
><tr
id=sl_svn215_865

><td class="source">				return $real;<br></td></tr
><tr
id=sl_svn215_866

><td class="source">			} else {<br></td></tr
><tr
id=sl_svn215_867

><td class="source">				$this-&gt;debug(1, &quot;Security block: The file specified occurs outside the document root.&quot;);<br></td></tr
><tr
id=sl_svn215_868

><td class="source">				//allow search to continue<br></td></tr
><tr
id=sl_svn215_869

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_870

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_871

><td class="source">		//Check absolute paths and then verify the real path is under doc root<br></td></tr
><tr
id=sl_svn215_872

><td class="source">		$absolute = $this-&gt;realpath(&#39;/&#39; . $src);<br></td></tr
><tr
id=sl_svn215_873

><td class="source">		if($absolute &amp;&amp; file_exists($absolute)){ //realpath does file_exists check, so can probably skip the exists check here<br></td></tr
><tr
id=sl_svn215_874

><td class="source">			$this-&gt;debug(3, &quot;Found absolute path: $absolute&quot;);<br></td></tr
><tr
id=sl_svn215_875

><td class="source">			if(! $this-&gt;docRoot){ $this-&gt;sanityFail(&quot;docRoot not set when checking absolute path.&quot;); }<br></td></tr
><tr
id=sl_svn215_876

><td class="source">			if(stripos($absolute, $this-&gt;docRoot) === 0){<br></td></tr
><tr
id=sl_svn215_877

><td class="source">				return $absolute;<br></td></tr
><tr
id=sl_svn215_878

><td class="source">			} else {<br></td></tr
><tr
id=sl_svn215_879

><td class="source">				$this-&gt;debug(1, &quot;Security block: The file specified occurs outside the document root.&quot;);<br></td></tr
><tr
id=sl_svn215_880

><td class="source">				//and continue search<br></td></tr
><tr
id=sl_svn215_881

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_882

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_883

><td class="source">		<br></td></tr
><tr
id=sl_svn215_884

><td class="source">		$base = $this-&gt;docRoot;<br></td></tr
><tr
id=sl_svn215_885

><td class="source">		<br></td></tr
><tr
id=sl_svn215_886

><td class="source">		// account for Windows directory structure<br></td></tr
><tr
id=sl_svn215_887

><td class="source">		if (strstr($_SERVER[&#39;SCRIPT_FILENAME&#39;],&#39;:&#39;)) {<br></td></tr
><tr
id=sl_svn215_888

><td class="source">			$sub_directories = explode(&#39;\\&#39;, str_replace($this-&gt;docRoot, &#39;&#39;, $_SERVER[&#39;SCRIPT_FILENAME&#39;]));<br></td></tr
><tr
id=sl_svn215_889

><td class="source">		} else {<br></td></tr
><tr
id=sl_svn215_890

><td class="source">			$sub_directories = explode(&#39;/&#39;, str_replace($this-&gt;docRoot, &#39;&#39;, $_SERVER[&#39;SCRIPT_FILENAME&#39;]));<br></td></tr
><tr
id=sl_svn215_891

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_892

><td class="source"><br></td></tr
><tr
id=sl_svn215_893

><td class="source">		foreach ($sub_directories as $sub){<br></td></tr
><tr
id=sl_svn215_894

><td class="source">			$base .= $sub . &#39;/&#39;;<br></td></tr
><tr
id=sl_svn215_895

><td class="source">			$this-&gt;debug(3, &quot;Trying file as: &quot; . $base . $src);<br></td></tr
><tr
id=sl_svn215_896

><td class="source">			if(file_exists($base . $src)){<br></td></tr
><tr
id=sl_svn215_897

><td class="source">				$this-&gt;debug(3, &quot;Found file as: &quot; . $base . $src);<br></td></tr
><tr
id=sl_svn215_898

><td class="source">				$real = $this-&gt;realpath($base . $src);<br></td></tr
><tr
id=sl_svn215_899

><td class="source">				if(stripos($real, $this-&gt;realpath($this-&gt;docRoot)) === 0){<br></td></tr
><tr
id=sl_svn215_900

><td class="source">					return $real;<br></td></tr
><tr
id=sl_svn215_901

><td class="source">				} else {<br></td></tr
><tr
id=sl_svn215_902

><td class="source">					$this-&gt;debug(1, &quot;Security block: The file specified occurs outside the document root.&quot;);<br></td></tr
><tr
id=sl_svn215_903

><td class="source">					//And continue search<br></td></tr
><tr
id=sl_svn215_904

><td class="source">				}<br></td></tr
><tr
id=sl_svn215_905

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_906

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_907

><td class="source">		return false;<br></td></tr
><tr
id=sl_svn215_908

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_909

><td class="source">	protected function realpath($path){<br></td></tr
><tr
id=sl_svn215_910

><td class="source">		//try to remove any relative paths<br></td></tr
><tr
id=sl_svn215_911

><td class="source">		$remove_relatives = &#39;/\w+\/\.\.\//&#39;;<br></td></tr
><tr
id=sl_svn215_912

><td class="source">		while(preg_match($remove_relatives,$path)){<br></td></tr
><tr
id=sl_svn215_913

><td class="source">		    $path = preg_replace($remove_relatives, &#39;&#39;, $path);<br></td></tr
><tr
id=sl_svn215_914

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_915

><td class="source">		//if any remain use PHP realpath to strip them out, otherwise return $path<br></td></tr
><tr
id=sl_svn215_916

><td class="source">		//if using realpath, any symlinks will also be resolved<br></td></tr
><tr
id=sl_svn215_917

><td class="source">		return preg_match(&#39;#^\.\./|/\.\./#&#39;, $path) ? realpath($path) : $path;<br></td></tr
><tr
id=sl_svn215_918

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_919

><td class="source">	protected function toDelete($name){<br></td></tr
><tr
id=sl_svn215_920

><td class="source">		$this-&gt;debug(3, &quot;Scheduling file $name to delete on destruct.&quot;);<br></td></tr
><tr
id=sl_svn215_921

><td class="source">		$this-&gt;toDeletes[] = $name;<br></td></tr
><tr
id=sl_svn215_922

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_923

><td class="source">	protected function serveWebshot(){<br></td></tr
><tr
id=sl_svn215_924

><td class="source">		$this-&gt;debug(3, &quot;Starting serveWebshot&quot;);<br></td></tr
><tr
id=sl_svn215_925

><td class="source">		$instr = &quot;Please follow the instructions at http://code.google.com/p/timthumb/ to set your server up for taking website screenshots.&quot;;<br></td></tr
><tr
id=sl_svn215_926

><td class="source">		if(! is_file(WEBSHOT_CUTYCAPT)){<br></td></tr
><tr
id=sl_svn215_927

><td class="source">			return $this-&gt;error(&quot;CutyCapt is not installed. $instr&quot;);<br></td></tr
><tr
id=sl_svn215_928

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_929

><td class="source">		if(! is_file(WEBSHOT_XVFB)){<br></td></tr
><tr
id=sl_svn215_930

><td class="source">			return $this-&gt;Error(&quot;Xvfb is not installed. $instr&quot;);<br></td></tr
><tr
id=sl_svn215_931

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_932

><td class="source">		$cuty = WEBSHOT_CUTYCAPT;<br></td></tr
><tr
id=sl_svn215_933

><td class="source">		$xv = WEBSHOT_XVFB;<br></td></tr
><tr
id=sl_svn215_934

><td class="source">		$screenX = WEBSHOT_SCREEN_X;<br></td></tr
><tr
id=sl_svn215_935

><td class="source">		$screenY = WEBSHOT_SCREEN_Y;<br></td></tr
><tr
id=sl_svn215_936

><td class="source">		$colDepth = WEBSHOT_COLOR_DEPTH;<br></td></tr
><tr
id=sl_svn215_937

><td class="source">		$format = WEBSHOT_IMAGE_FORMAT;<br></td></tr
><tr
id=sl_svn215_938

><td class="source">		$timeout = WEBSHOT_TIMEOUT * 1000;<br></td></tr
><tr
id=sl_svn215_939

><td class="source">		$ua = WEBSHOT_USER_AGENT;<br></td></tr
><tr
id=sl_svn215_940

><td class="source">		$jsOn = WEBSHOT_JAVASCRIPT_ON ? &#39;on&#39; : &#39;off&#39;;<br></td></tr
><tr
id=sl_svn215_941

><td class="source">		$javaOn = WEBSHOT_JAVA_ON ? &#39;on&#39; : &#39;off&#39;;<br></td></tr
><tr
id=sl_svn215_942

><td class="source">		$pluginsOn = WEBSHOT_PLUGINS_ON ? &#39;on&#39; : &#39;off&#39;;<br></td></tr
><tr
id=sl_svn215_943

><td class="source">		$proxy = WEBSHOT_PROXY ? &#39; --http-proxy=&#39; . WEBSHOT_PROXY : &#39;&#39;;<br></td></tr
><tr
id=sl_svn215_944

><td class="source">		$tempfile = tempnam($this-&gt;cacheDirectory, &#39;timthumb_webshot&#39;);<br></td></tr
><tr
id=sl_svn215_945

><td class="source">		$url = $this-&gt;src;<br></td></tr
><tr
id=sl_svn215_946

><td class="source">		if(! preg_match(&#39;/^https?:\/\/[a-zA-Z0-9\.\-]+/i&#39;, $url)){<br></td></tr
><tr
id=sl_svn215_947

><td class="source">			return $this-&gt;error(&quot;Invalid URL supplied.&quot;);<br></td></tr
><tr
id=sl_svn215_948

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_949

><td class="source">		$url = preg_replace(&#39;/[^A-Za-z0-9\-\.\_\~:\/\?\#\[\]\@\!\$\&amp;\&#39;\(\)\*\+\,\;\=]+/&#39;, &#39;&#39;, $url); //RFC 3986<br></td></tr
><tr
id=sl_svn215_950

><td class="source">		//Very important we don&#39;t allow injection of shell commands here. URL is between quotes and we are only allowing through chars allowed by a the RFC <br></td></tr
><tr
id=sl_svn215_951

><td class="source">		// which AFAIKT can&#39;t be used for shell injection. <br></td></tr
><tr
id=sl_svn215_952

><td class="source">		if(WEBSHOT_XVFB_RUNNING){<br></td></tr
><tr
id=sl_svn215_953

><td class="source">			putenv(&#39;DISPLAY=:100.0&#39;);<br></td></tr
><tr
id=sl_svn215_954

><td class="source">			$command = &quot;$cuty $proxy --max-wait=$timeout --user-agent=\&quot;$ua\&quot; --javascript=$jsOn --java=$javaOn --plugins=$pluginsOn --js-can-open-windows=off --url=\&quot;$url\&quot; --out-format=$format --out=$tempfile&quot;;<br></td></tr
><tr
id=sl_svn215_955

><td class="source">		} else {<br></td></tr
><tr
id=sl_svn215_956

><td class="source">			$command = &quot;$xv --server-args=\&quot;-screen 0, {$screenX}x{$screenY}x{$colDepth}\&quot; $cuty $proxy --max-wait=$timeout --user-agent=\&quot;$ua\&quot; --javascript=$jsOn --java=$javaOn --plugins=$pluginsOn --js-can-open-windows=off --url=\&quot;$url\&quot; --out-format=$format --out=$tempfile&quot;;<br></td></tr
><tr
id=sl_svn215_957

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_958

><td class="source">		$this-&gt;debug(3, &quot;Executing command: $command&quot;);<br></td></tr
><tr
id=sl_svn215_959

><td class="source">		$out = `$command`;<br></td></tr
><tr
id=sl_svn215_960

><td class="source">		$this-&gt;debug(3, &quot;Received output: $out&quot;);<br></td></tr
><tr
id=sl_svn215_961

><td class="source">		if(! is_file($tempfile)){<br></td></tr
><tr
id=sl_svn215_962

><td class="source">			$this-&gt;set404();<br></td></tr
><tr
id=sl_svn215_963

><td class="source">			return $this-&gt;error(&quot;The command to create a thumbnail failed.&quot;);<br></td></tr
><tr
id=sl_svn215_964

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_965

><td class="source">		$this-&gt;cropTop = true;<br></td></tr
><tr
id=sl_svn215_966

><td class="source">		if($this-&gt;processImageAndWriteToCache($tempfile)){<br></td></tr
><tr
id=sl_svn215_967

><td class="source">			$this-&gt;debug(3, &quot;Image processed succesfully. Serving from cache&quot;);<br></td></tr
><tr
id=sl_svn215_968

><td class="source">			return $this-&gt;serveCacheFile();<br></td></tr
><tr
id=sl_svn215_969

><td class="source">		} else {<br></td></tr
><tr
id=sl_svn215_970

><td class="source">			return false;<br></td></tr
><tr
id=sl_svn215_971

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_972

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_973

><td class="source">	protected function serveExternalImage(){<br></td></tr
><tr
id=sl_svn215_974

><td class="source">		if(! preg_match(&#39;/^https?:\/\/[a-zA-Z0-9\-\.]+/i&#39;, $this-&gt;src)){<br></td></tr
><tr
id=sl_svn215_975

><td class="source">			$this-&gt;error(&quot;Invalid URL supplied.&quot;);<br></td></tr
><tr
id=sl_svn215_976

><td class="source">			return false;<br></td></tr
><tr
id=sl_svn215_977

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_978

><td class="source">		$tempfile = tempnam($this-&gt;cacheDirectory, &#39;timthumb&#39;);<br></td></tr
><tr
id=sl_svn215_979

><td class="source">		$this-&gt;debug(3, &quot;Fetching external image into temporary file $tempfile&quot;);<br></td></tr
><tr
id=sl_svn215_980

><td class="source">		$this-&gt;toDelete($tempfile);<br></td></tr
><tr
id=sl_svn215_981

><td class="source">		#fetch file here<br></td></tr
><tr
id=sl_svn215_982

><td class="source">		if(! $this-&gt;getURL($this-&gt;src, $tempfile)){<br></td></tr
><tr
id=sl_svn215_983

><td class="source">			@unlink($this-&gt;cachefile);<br></td></tr
><tr
id=sl_svn215_984

><td class="source">			touch($this-&gt;cachefile);<br></td></tr
><tr
id=sl_svn215_985

><td class="source">			$this-&gt;debug(3, &quot;Error fetching URL: &quot; . $this-&gt;lastURLError);<br></td></tr
><tr
id=sl_svn215_986

><td class="source">			$this-&gt;error(&quot;Error reading the URL you specified from remote host.&quot; . $this-&gt;lastURLError);<br></td></tr
><tr
id=sl_svn215_987

><td class="source">			return false;<br></td></tr
><tr
id=sl_svn215_988

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_989

><td class="source"><br></td></tr
><tr
id=sl_svn215_990

><td class="source">		$mimeType = $this-&gt;getMimeType($tempfile);<br></td></tr
><tr
id=sl_svn215_991

><td class="source">		if(! preg_match(&quot;/^image\/(?:jpg|jpeg|gif|png)$/i&quot;, $mimeType)){<br></td></tr
><tr
id=sl_svn215_992

><td class="source">			$this-&gt;debug(3, &quot;Remote file has invalid mime type: $mimeType&quot;);<br></td></tr
><tr
id=sl_svn215_993

><td class="source">			@unlink($this-&gt;cachefile);<br></td></tr
><tr
id=sl_svn215_994

><td class="source">			touch($this-&gt;cachefile);<br></td></tr
><tr
id=sl_svn215_995

><td class="source">			$this-&gt;error(&quot;The remote file is not a valid image.&quot;);<br></td></tr
><tr
id=sl_svn215_996

><td class="source">			return false;<br></td></tr
><tr
id=sl_svn215_997

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_998

><td class="source">		if($this-&gt;processImageAndWriteToCache($tempfile)){<br></td></tr
><tr
id=sl_svn215_999

><td class="source">			$this-&gt;debug(3, &quot;Image processed succesfully. Serving from cache&quot;);<br></td></tr
><tr
id=sl_svn215_1000

><td class="source">			return $this-&gt;serveCacheFile();<br></td></tr
><tr
id=sl_svn215_1001

><td class="source">		} else {<br></td></tr
><tr
id=sl_svn215_1002

><td class="source">			return false;<br></td></tr
><tr
id=sl_svn215_1003

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_1004

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_1005

><td class="source">	public static function curlWrite($h, $d){<br></td></tr
><tr
id=sl_svn215_1006

><td class="source">		fwrite(self::$curlFH, $d);<br></td></tr
><tr
id=sl_svn215_1007

><td class="source">		self::$curlDataWritten += strlen($d);<br></td></tr
><tr
id=sl_svn215_1008

><td class="source">		if(self::$curlDataWritten &gt; MAX_FILE_SIZE){<br></td></tr
><tr
id=sl_svn215_1009

><td class="source">			return 0;<br></td></tr
><tr
id=sl_svn215_1010

><td class="source">		} else {<br></td></tr
><tr
id=sl_svn215_1011

><td class="source">			return strlen($d);<br></td></tr
><tr
id=sl_svn215_1012

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_1013

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_1014

><td class="source">	protected function serveCacheFile(){<br></td></tr
><tr
id=sl_svn215_1015

><td class="source">		$this-&gt;debug(3, &quot;Serving {$this-&gt;cachefile}&quot;);<br></td></tr
><tr
id=sl_svn215_1016

><td class="source">		if(! is_file($this-&gt;cachefile)){<br></td></tr
><tr
id=sl_svn215_1017

><td class="source">			$this-&gt;error(&quot;serveCacheFile called in timthumb but we couldn&#39;t find the cached file.&quot;);<br></td></tr
><tr
id=sl_svn215_1018

><td class="source">			return false;<br></td></tr
><tr
id=sl_svn215_1019

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_1020

><td class="source">		$fp = fopen($this-&gt;cachefile, &#39;rb&#39;);<br></td></tr
><tr
id=sl_svn215_1021

><td class="source">		if(! $fp){ return $this-&gt;error(&quot;Could not open cachefile.&quot;); }<br></td></tr
><tr
id=sl_svn215_1022

><td class="source">		fseek($fp, strlen($this-&gt;filePrependSecurityBlock), SEEK_SET);<br></td></tr
><tr
id=sl_svn215_1023

><td class="source">		$imgType = fread($fp, 3);<br></td></tr
><tr
id=sl_svn215_1024

><td class="source">		fseek($fp, 3, SEEK_CUR);<br></td></tr
><tr
id=sl_svn215_1025

><td class="source">		if(ftell($fp) != strlen($this-&gt;filePrependSecurityBlock) + 6){<br></td></tr
><tr
id=sl_svn215_1026

><td class="source">			@unlink($this-&gt;cachefile);<br></td></tr
><tr
id=sl_svn215_1027

><td class="source">			return $this-&gt;error(&quot;The cached image file seems to be corrupt.&quot;);<br></td></tr
><tr
id=sl_svn215_1028

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_1029

><td class="source">		$imageDataSize = filesize($this-&gt;cachefile) - (strlen($this-&gt;filePrependSecurityBlock) + 6);<br></td></tr
><tr
id=sl_svn215_1030

><td class="source">		$this-&gt;sendImageHeaders($imgType, $imageDataSize);<br></td></tr
><tr
id=sl_svn215_1031

><td class="source">		$bytesSent = @fpassthru($fp);<br></td></tr
><tr
id=sl_svn215_1032

><td class="source">		fclose($fp);<br></td></tr
><tr
id=sl_svn215_1033

><td class="source">		if($bytesSent &gt; 0){<br></td></tr
><tr
id=sl_svn215_1034

><td class="source">			return true;<br></td></tr
><tr
id=sl_svn215_1035

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_1036

><td class="source">		$content = file_get_contents ($this-&gt;cachefile);<br></td></tr
><tr
id=sl_svn215_1037

><td class="source">		if ($content != FALSE) {<br></td></tr
><tr
id=sl_svn215_1038

><td class="source">			$content = substr($content, strlen($this-&gt;filePrependSecurityBlock) + 6);<br></td></tr
><tr
id=sl_svn215_1039

><td class="source">			echo $content;<br></td></tr
><tr
id=sl_svn215_1040

><td class="source">			$this-&gt;debug(3, &quot;Served using file_get_contents and echo&quot;);<br></td></tr
><tr
id=sl_svn215_1041

><td class="source">			return true;<br></td></tr
><tr
id=sl_svn215_1042

><td class="source">		} else {<br></td></tr
><tr
id=sl_svn215_1043

><td class="source">			$this-&gt;error(&quot;Cache file could not be loaded.&quot;);<br></td></tr
><tr
id=sl_svn215_1044

><td class="source">			return false;<br></td></tr
><tr
id=sl_svn215_1045

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_1046

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_1047

><td class="source">	protected function sendImageHeaders($mimeType, $dataSize){<br></td></tr
><tr
id=sl_svn215_1048

><td class="source">		if(! preg_match(&#39;/^image\//i&#39;, $mimeType)){<br></td></tr
><tr
id=sl_svn215_1049

><td class="source">			$mimeType = &#39;image/&#39; . $mimeType;<br></td></tr
><tr
id=sl_svn215_1050

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_1051

><td class="source">		if(strtolower($mimeType) == &#39;image/jpg&#39;){<br></td></tr
><tr
id=sl_svn215_1052

><td class="source">			$mimeType = &#39;image/jpeg&#39;;<br></td></tr
><tr
id=sl_svn215_1053

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_1054

><td class="source">		$gmdate_expires = gmdate (&#39;D, d M Y H:i:s&#39;, strtotime (&#39;now +10 days&#39;)) . &#39; GMT&#39;;<br></td></tr
><tr
id=sl_svn215_1055

><td class="source">		$gmdate_modified = gmdate (&#39;D, d M Y H:i:s&#39;) . &#39; GMT&#39;;<br></td></tr
><tr
id=sl_svn215_1056

><td class="source">		// send content headers then display image<br></td></tr
><tr
id=sl_svn215_1057

><td class="source">		header (&#39;Content-Type: &#39; . $mimeType);<br></td></tr
><tr
id=sl_svn215_1058

><td class="source">		header (&#39;Accept-Ranges: none&#39;); //Changed this because we don&#39;t accept range requests<br></td></tr
><tr
id=sl_svn215_1059

><td class="source">		header (&#39;Last-Modified: &#39; . $gmdate_modified);<br></td></tr
><tr
id=sl_svn215_1060

><td class="source">		header (&#39;Content-Length: &#39; . $dataSize);<br></td></tr
><tr
id=sl_svn215_1061

><td class="source">		if(BROWSER_CACHE_DISABLE){<br></td></tr
><tr
id=sl_svn215_1062

><td class="source">			$this-&gt;debug(3, &quot;Browser cache is disabled so setting non-caching headers.&quot;);<br></td></tr
><tr
id=sl_svn215_1063

><td class="source">			header(&#39;Cache-Control: no-store, no-cache, must-revalidate, max-age=0&#39;);<br></td></tr
><tr
id=sl_svn215_1064

><td class="source">			header(&quot;Pragma: no-cache&quot;);<br></td></tr
><tr
id=sl_svn215_1065

><td class="source">			header(&#39;Expires: &#39; . gmdate (&#39;D, d M Y H:i:s&#39;, time()));<br></td></tr
><tr
id=sl_svn215_1066

><td class="source">		} else {<br></td></tr
><tr
id=sl_svn215_1067

><td class="source">			$this-&gt;debug(3, &quot;Browser caching is enabled&quot;);<br></td></tr
><tr
id=sl_svn215_1068

><td class="source">			header(&#39;Cache-Control: max-age=&#39; . BROWSER_CACHE_MAX_AGE . &#39;, must-revalidate&#39;);<br></td></tr
><tr
id=sl_svn215_1069

><td class="source">			header(&#39;Expires: &#39; . $gmdate_expires);<br></td></tr
><tr
id=sl_svn215_1070

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_1071

><td class="source">		return true;<br></td></tr
><tr
id=sl_svn215_1072

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_1073

><td class="source">	protected function securityChecks(){<br></td></tr
><tr
id=sl_svn215_1074

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_1075

><td class="source">	protected function param($property, $default = &#39;&#39;){<br></td></tr
><tr
id=sl_svn215_1076

><td class="source">		if (isset ($_GET[$property])) {<br></td></tr
><tr
id=sl_svn215_1077

><td class="source">			return $_GET[$property];<br></td></tr
><tr
id=sl_svn215_1078

><td class="source">		} else {<br></td></tr
><tr
id=sl_svn215_1079

><td class="source">			return $default;<br></td></tr
><tr
id=sl_svn215_1080

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_1081

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_1082

><td class="source">	protected function openImage($mimeType, $src){<br></td></tr
><tr
id=sl_svn215_1083

><td class="source">		switch ($mimeType) {<br></td></tr
><tr
id=sl_svn215_1084

><td class="source">			case &#39;image/jpeg&#39;:<br></td></tr
><tr
id=sl_svn215_1085

><td class="source">				$image = imagecreatefromjpeg ($src);<br></td></tr
><tr
id=sl_svn215_1086

><td class="source">				break;<br></td></tr
><tr
id=sl_svn215_1087

><td class="source"><br></td></tr
><tr
id=sl_svn215_1088

><td class="source">			case &#39;image/png&#39;:<br></td></tr
><tr
id=sl_svn215_1089

><td class="source">				$image = imagecreatefrompng ($src);<br></td></tr
><tr
id=sl_svn215_1090

><td class="source">				break;<br></td></tr
><tr
id=sl_svn215_1091

><td class="source"><br></td></tr
><tr
id=sl_svn215_1092

><td class="source">			case &#39;image/gif&#39;:<br></td></tr
><tr
id=sl_svn215_1093

><td class="source">				$image = imagecreatefromgif ($src);<br></td></tr
><tr
id=sl_svn215_1094

><td class="source">				break;<br></td></tr
><tr
id=sl_svn215_1095

><td class="source">			<br></td></tr
><tr
id=sl_svn215_1096

><td class="source">			default:<br></td></tr
><tr
id=sl_svn215_1097

><td class="source">				$this-&gt;error(&quot;Unrecognised mimeType&quot;);<br></td></tr
><tr
id=sl_svn215_1098

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_1099

><td class="source"><br></td></tr
><tr
id=sl_svn215_1100

><td class="source">		return $image;<br></td></tr
><tr
id=sl_svn215_1101

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_1102

><td class="source">	protected function getIP(){<br></td></tr
><tr
id=sl_svn215_1103

><td class="source">		$rem = @$_SERVER[&quot;REMOTE_ADDR&quot;];<br></td></tr
><tr
id=sl_svn215_1104

><td class="source">		$ff = @$_SERVER[&quot;HTTP_X_FORWARDED_FOR&quot;];<br></td></tr
><tr
id=sl_svn215_1105

><td class="source">		$ci = @$_SERVER[&quot;HTTP_CLIENT_IP&quot;];<br></td></tr
><tr
id=sl_svn215_1106

><td class="source">		if(preg_match(&#39;/^(?:192\.168|172\.16|10\.|127\.)/&#39;, $rem)){ <br></td></tr
><tr
id=sl_svn215_1107

><td class="source">			if($ff){ return $ff; }<br></td></tr
><tr
id=sl_svn215_1108

><td class="source">			if($ci){ return $ci; }<br></td></tr
><tr
id=sl_svn215_1109

><td class="source">			return $rem;<br></td></tr
><tr
id=sl_svn215_1110

><td class="source">		} else {<br></td></tr
><tr
id=sl_svn215_1111

><td class="source">			if($rem){ return $rem; }<br></td></tr
><tr
id=sl_svn215_1112

><td class="source">			if($ff){ return $ff; }<br></td></tr
><tr
id=sl_svn215_1113

><td class="source">			if($ci){ return $ci; }<br></td></tr
><tr
id=sl_svn215_1114

><td class="source">			return &quot;UNKNOWN&quot;;<br></td></tr
><tr
id=sl_svn215_1115

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_1116

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_1117

><td class="source">	protected function debug($level, $msg){<br></td></tr
><tr
id=sl_svn215_1118

><td class="source">		if(DEBUG_ON &amp;&amp; $level &lt;= DEBUG_LEVEL){<br></td></tr
><tr
id=sl_svn215_1119

><td class="source">			$execTime = sprintf(&#39;%.6f&#39;, microtime(true) - $this-&gt;startTime);<br></td></tr
><tr
id=sl_svn215_1120

><td class="source">			$tick = sprintf(&#39;%.6f&#39;, 0);<br></td></tr
><tr
id=sl_svn215_1121

><td class="source">			if($this-&gt;lastBenchTime &gt; 0){<br></td></tr
><tr
id=sl_svn215_1122

><td class="source">				$tick = sprintf(&#39;%.6f&#39;, microtime(true) - $this-&gt;lastBenchTime);<br></td></tr
><tr
id=sl_svn215_1123

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_1124

><td class="source">			$this-&gt;lastBenchTime = microtime(true);<br></td></tr
><tr
id=sl_svn215_1125

><td class="source">			error_log(&quot;TimThumb Debug line &quot; . __LINE__ . &quot; [$execTime : $tick]: $msg&quot;);<br></td></tr
><tr
id=sl_svn215_1126

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_1127

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_1128

><td class="source">	protected function sanityFail($msg){<br></td></tr
><tr
id=sl_svn215_1129

><td class="source">		return $this-&gt;error(&quot;There is a problem in the timthumb code. Message: Please report this error at &lt;a href=&#39;http://code.google.com/p/timthumb/issues/list&#39;&gt;timthumb&#39;s bug tracking page&lt;/a&gt;: $msg&quot;);<br></td></tr
><tr
id=sl_svn215_1130

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_1131

><td class="source">	protected function getMimeType($file){<br></td></tr
><tr
id=sl_svn215_1132

><td class="source">		$info = getimagesize($file);<br></td></tr
><tr
id=sl_svn215_1133

><td class="source">		if(is_array($info) &amp;&amp; $info[&#39;mime&#39;]){<br></td></tr
><tr
id=sl_svn215_1134

><td class="source">			return $info[&#39;mime&#39;];<br></td></tr
><tr
id=sl_svn215_1135

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_1136

><td class="source">		return &#39;&#39;;<br></td></tr
><tr
id=sl_svn215_1137

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_1138

><td class="source">	protected function setMemoryLimit(){<br></td></tr
><tr
id=sl_svn215_1139

><td class="source">		$inimem = ini_get(&#39;memory_limit&#39;);<br></td></tr
><tr
id=sl_svn215_1140

><td class="source">		$inibytes = timthumb::returnBytes($inimem);<br></td></tr
><tr
id=sl_svn215_1141

><td class="source">		$ourbytes = timthumb::returnBytes(MEMORY_LIMIT);<br></td></tr
><tr
id=sl_svn215_1142

><td class="source">		if($inibytes &lt; $ourbytes){<br></td></tr
><tr
id=sl_svn215_1143

><td class="source">			ini_set (&#39;memory_limit&#39;, MEMORY_LIMIT);<br></td></tr
><tr
id=sl_svn215_1144

><td class="source">			$this-&gt;debug(3, &quot;Increased memory from $inimem to &quot; . MEMORY_LIMIT);<br></td></tr
><tr
id=sl_svn215_1145

><td class="source">		} else {<br></td></tr
><tr
id=sl_svn215_1146

><td class="source">			$this-&gt;debug(3, &quot;Not adjusting memory size because the current setting is &quot; . $inimem . &quot; and our size of &quot; . MEMORY_LIMIT . &quot; is smaller.&quot;);<br></td></tr
><tr
id=sl_svn215_1147

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_1148

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_1149

><td class="source">	protected static function returnBytes($size_str){<br></td></tr
><tr
id=sl_svn215_1150

><td class="source">		switch (substr ($size_str, -1))<br></td></tr
><tr
id=sl_svn215_1151

><td class="source">		{<br></td></tr
><tr
id=sl_svn215_1152

><td class="source">			case &#39;M&#39;: case &#39;m&#39;: return (int)$size_str * 1048576;<br></td></tr
><tr
id=sl_svn215_1153

><td class="source">			case &#39;K&#39;: case &#39;k&#39;: return (int)$size_str * 1024;<br></td></tr
><tr
id=sl_svn215_1154

><td class="source">			case &#39;G&#39;: case &#39;g&#39;: return (int)$size_str * 1073741824;<br></td></tr
><tr
id=sl_svn215_1155

><td class="source">			default: return $size_str;<br></td></tr
><tr
id=sl_svn215_1156

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_1157

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_1158

><td class="source">	protected function getURL($url, $tempfile){<br></td></tr
><tr
id=sl_svn215_1159

><td class="source">		$this-&gt;lastURLError = false;<br></td></tr
><tr
id=sl_svn215_1160

><td class="source">		$url = preg_replace(&#39;/ /&#39;, &#39;%20&#39;, $url);<br></td></tr
><tr
id=sl_svn215_1161

><td class="source">		if(function_exists(&#39;curl_init&#39;)){<br></td></tr
><tr
id=sl_svn215_1162

><td class="source">			$this-&gt;debug(3, &quot;Curl is installed so using it to fetch URL.&quot;);<br></td></tr
><tr
id=sl_svn215_1163

><td class="source">			self::$curlFH = fopen($tempfile, &#39;w&#39;);<br></td></tr
><tr
id=sl_svn215_1164

><td class="source">			if(! self::$curlFH){<br></td></tr
><tr
id=sl_svn215_1165

><td class="source">				$this-&gt;error(&quot;Could not open $tempfile for writing.&quot;);<br></td></tr
><tr
id=sl_svn215_1166

><td class="source">				return false;<br></td></tr
><tr
id=sl_svn215_1167

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_1168

><td class="source">			self::$curlDataWritten = 0;<br></td></tr
><tr
id=sl_svn215_1169

><td class="source">			$this-&gt;debug(3, &quot;Fetching url with curl: $url&quot;);<br></td></tr
><tr
id=sl_svn215_1170

><td class="source">			$curl = curl_init($url);<br></td></tr
><tr
id=sl_svn215_1171

><td class="source">			curl_setopt ($curl, CURLOPT_TIMEOUT, CURL_TIMEOUT);<br></td></tr
><tr
id=sl_svn215_1172

><td class="source">			curl_setopt ($curl, CURLOPT_USERAGENT, &quot;Mozilla/5.0 (Windows NT 6.1) AppleWebKit/534.30 (KHTML, like Gecko) Chrome/12.0.742.122 Safari/534.30&quot;);<br></td></tr
><tr
id=sl_svn215_1173

><td class="source">			curl_setopt ($curl, CURLOPT_RETURNTRANSFER, TRUE);<br></td></tr
><tr
id=sl_svn215_1174

><td class="source">			curl_setopt ($curl, CURLOPT_HEADER, 0);<br></td></tr
><tr
id=sl_svn215_1175

><td class="source">			curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, FALSE);<br></td></tr
><tr
id=sl_svn215_1176

><td class="source">			curl_setopt ($curl, CURLOPT_WRITEFUNCTION, &#39;timthumb::curlWrite&#39;);<br></td></tr
><tr
id=sl_svn215_1177

><td class="source">			@curl_setopt ($curl, CURLOPT_FOLLOWLOCATION, true);<br></td></tr
><tr
id=sl_svn215_1178

><td class="source">			@curl_setopt ($curl, CURLOPT_MAXREDIRS, 10);<br></td></tr
><tr
id=sl_svn215_1179

><td class="source">			<br></td></tr
><tr
id=sl_svn215_1180

><td class="source">			$curlResult = curl_exec($curl);<br></td></tr
><tr
id=sl_svn215_1181

><td class="source">			fclose(self::$curlFH);<br></td></tr
><tr
id=sl_svn215_1182

><td class="source">			$httpStatus = curl_getinfo($curl, CURLINFO_HTTP_CODE);<br></td></tr
><tr
id=sl_svn215_1183

><td class="source">			if($httpStatus == 404){<br></td></tr
><tr
id=sl_svn215_1184

><td class="source">				$this-&gt;set404();<br></td></tr
><tr
id=sl_svn215_1185

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_1186

><td class="source">			if($curlResult){<br></td></tr
><tr
id=sl_svn215_1187

><td class="source">				curl_close($curl);<br></td></tr
><tr
id=sl_svn215_1188

><td class="source">				return true;<br></td></tr
><tr
id=sl_svn215_1189

><td class="source">			} else {<br></td></tr
><tr
id=sl_svn215_1190

><td class="source">				$this-&gt;lastURLError = curl_error($curl);<br></td></tr
><tr
id=sl_svn215_1191

><td class="source">				curl_close($curl);<br></td></tr
><tr
id=sl_svn215_1192

><td class="source">				return false;<br></td></tr
><tr
id=sl_svn215_1193

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_1194

><td class="source">		} else {<br></td></tr
><tr
id=sl_svn215_1195

><td class="source">			$img = @file_get_contents ($url);<br></td></tr
><tr
id=sl_svn215_1196

><td class="source">			if($img === false){<br></td></tr
><tr
id=sl_svn215_1197

><td class="source">				$err = error_get_last();<br></td></tr
><tr
id=sl_svn215_1198

><td class="source">				if(is_array($err) &amp;&amp; $err[&#39;message&#39;]){<br></td></tr
><tr
id=sl_svn215_1199

><td class="source">					$this-&gt;lastURLError = $err[&#39;message&#39;];<br></td></tr
><tr
id=sl_svn215_1200

><td class="source">				} else {<br></td></tr
><tr
id=sl_svn215_1201

><td class="source">					$this-&gt;lastURLError = $err;<br></td></tr
><tr
id=sl_svn215_1202

><td class="source">				}<br></td></tr
><tr
id=sl_svn215_1203

><td class="source">				if(preg_match(&#39;/404/&#39;, $this-&gt;lastURLError)){<br></td></tr
><tr
id=sl_svn215_1204

><td class="source">					$this-&gt;set404();<br></td></tr
><tr
id=sl_svn215_1205

><td class="source">				}<br></td></tr
><tr
id=sl_svn215_1206

><td class="source"><br></td></tr
><tr
id=sl_svn215_1207

><td class="source">				return false;<br></td></tr
><tr
id=sl_svn215_1208

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_1209

><td class="source">			if(! file_put_contents($tempfile, $img)){<br></td></tr
><tr
id=sl_svn215_1210

><td class="source">				$this-&gt;error(&quot;Could not write to $tempfile.&quot;);<br></td></tr
><tr
id=sl_svn215_1211

><td class="source">				return false;<br></td></tr
><tr
id=sl_svn215_1212

><td class="source">			}<br></td></tr
><tr
id=sl_svn215_1213

><td class="source">			return true;<br></td></tr
><tr
id=sl_svn215_1214

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_1215

><td class="source"><br></td></tr
><tr
id=sl_svn215_1216

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_1217

><td class="source">	protected function serveImg($file){<br></td></tr
><tr
id=sl_svn215_1218

><td class="source">		$s = getimagesize($file);<br></td></tr
><tr
id=sl_svn215_1219

><td class="source">		if(! ($s &amp;&amp; $s[&#39;mime&#39;])){<br></td></tr
><tr
id=sl_svn215_1220

><td class="source">			return false;<br></td></tr
><tr
id=sl_svn215_1221

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_1222

><td class="source">		header (&#39;Content-Type: &#39; . $s[&#39;mime&#39;]);<br></td></tr
><tr
id=sl_svn215_1223

><td class="source">		header (&#39;Content-Length: &#39; . filesize($file) );<br></td></tr
><tr
id=sl_svn215_1224

><td class="source">		header (&#39;Cache-Control: no-store, no-cache, must-revalidate, max-age=0&#39;);<br></td></tr
><tr
id=sl_svn215_1225

><td class="source">		header (&quot;Pragma: no-cache&quot;);<br></td></tr
><tr
id=sl_svn215_1226

><td class="source">		$bytes = @readfile($file);<br></td></tr
><tr
id=sl_svn215_1227

><td class="source">		if($bytes &gt; 0){<br></td></tr
><tr
id=sl_svn215_1228

><td class="source">			return true;<br></td></tr
><tr
id=sl_svn215_1229

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_1230

><td class="source">		$content = @file_get_contents ($file);<br></td></tr
><tr
id=sl_svn215_1231

><td class="source">		if ($content != FALSE){<br></td></tr
><tr
id=sl_svn215_1232

><td class="source">			echo $content;<br></td></tr
><tr
id=sl_svn215_1233

><td class="source">			return true;<br></td></tr
><tr
id=sl_svn215_1234

><td class="source">		}<br></td></tr
><tr
id=sl_svn215_1235

><td class="source">		return false;<br></td></tr
><tr
id=sl_svn215_1236

><td class="source"><br></td></tr
><tr
id=sl_svn215_1237

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_1238

><td class="source">	protected function set404(){<br></td></tr
><tr
id=sl_svn215_1239

><td class="source">		$this-&gt;is404 = true;<br></td></tr
><tr
id=sl_svn215_1240

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_1241

><td class="source">	protected function is404(){<br></td></tr
><tr
id=sl_svn215_1242

><td class="source">		return $this-&gt;is404;<br></td></tr
><tr
id=sl_svn215_1243

><td class="source">	}<br></td></tr
><tr
id=sl_svn215_1244

><td class="source">}<br></td></tr
></table></pre>
<pre><table width="100%"><tr class="cursor_stop cursor_hidden"><td></td></tr></table></pre>
</td>
</tr></table>

 
<script type="text/javascript">
 var lineNumUnderMouse = -1;
 
 function gutterOver(num) {
 gutterOut();
 var newTR = document.getElementById('gr_svn215_' + num);
 if (newTR) {
 newTR.className = 'undermouse';
 }
 lineNumUnderMouse = num;
 }
 function gutterOut() {
 if (lineNumUnderMouse != -1) {
 var oldTR = document.getElementById(
 'gr_svn215_' + lineNumUnderMouse);
 if (oldTR) {
 oldTR.className = '';
 }
 lineNumUnderMouse = -1;
 }
 }
 var numsGenState = {table_base_id: 'nums_table_'};
 var srcGenState = {table_base_id: 'src_table_'};
 var alignerRunning = false;
 var startOver = false;
 function setLineNumberHeights() {
 if (alignerRunning) {
 startOver = true;
 return;
 }
 numsGenState.chunk_id = 0;
 numsGenState.table = document.getElementById('nums_table_0');
 numsGenState.row_num = 0;
 if (!numsGenState.table) {
 return; // Silently exit if no file is present.
 }
 srcGenState.chunk_id = 0;
 srcGenState.table = document.getElementById('src_table_0');
 srcGenState.row_num = 0;
 alignerRunning = true;
 continueToSetLineNumberHeights();
 }
 function rowGenerator(genState) {
 if (genState.row_num < genState.table.rows.length) {
 var currentRow = genState.table.rows[genState.row_num];
 genState.row_num++;
 return currentRow;
 }
 var newTable = document.getElementById(
 genState.table_base_id + (genState.chunk_id + 1));
 if (newTable) {
 genState.chunk_id++;
 genState.row_num = 0;
 genState.table = newTable;
 return genState.table.rows[0];
 }
 return null;
 }
 var MAX_ROWS_PER_PASS = 1000;
 function continueToSetLineNumberHeights() {
 var rowsInThisPass = 0;
 var numRow = 1;
 var srcRow = 1;
 while (numRow && srcRow && rowsInThisPass < MAX_ROWS_PER_PASS) {
 numRow = rowGenerator(numsGenState);
 srcRow = rowGenerator(srcGenState);
 rowsInThisPass++;
 if (numRow && srcRow) {
 if (numRow.offsetHeight != srcRow.offsetHeight) {
 numRow.firstChild.style.height = srcRow.offsetHeight + 'px';
 }
 }
 }
 if (rowsInThisPass >= MAX_ROWS_PER_PASS) {
 setTimeout(continueToSetLineNumberHeights, 10);
 } else {
 alignerRunning = false;
 if (startOver) {
 startOver = false;
 setTimeout(setLineNumberHeights, 500);
 }
 }
 }
 function initLineNumberHeights() {
 // Do 2 complete passes, because there can be races
 // between this code and prettify.
 startOver = true;
 setTimeout(setLineNumberHeights, 250);
 window.onresize = setLineNumberHeights;
 }
 initLineNumberHeights();
</script>

 
 
 <div id="log">
 <div style="text-align:right">
 <a class="ifCollapse" href="#" onclick="_toggleMeta(this); return false">Show details</a>
 <a class="ifExpand" href="#" onclick="_toggleMeta(this); return false">Hide details</a>
 </div>
 <div class="ifExpand">
 
 
 <div class="pmeta_bubble_bg" style="border:1px solid white">
 <div class="round4"></div>
 <div class="round2"></div>
 <div class="round1"></div>
 <div class="box-inner">
 <div id="changelog">
 <p>Change log</p>
 <div>
 <a href="/p/timthumb/source/detail?spec=svn215&amp;r=215">r215</a>
 by binarymoon
 on Mar 9, 2012
 &nbsp; <a href="/p/timthumb/source/diff?spec=svn215&r=215&amp;format=side&amp;path=/trunk/timthumb.php&amp;old_path=/trunk/timthumb.php&amp;old=214">Diff</a>
 </div>
 <pre>it seems part of the code deleted before
was actually needed. Doh! :S</pre>
 </div>
 
 
 
 
 
 
 <script type="text/javascript">
 var detail_url = '/p/timthumb/source/detail?r=215&spec=svn215';
 var publish_url = '/p/timthumb/source/detail?r=215&spec=svn215#publish';
 // describe the paths of this revision in javascript.
 var changed_paths = [];
 var changed_urls = [];
 
 changed_paths.push('/trunk/timthumb.php');
 changed_urls.push('/p/timthumb/source/browse/trunk/timthumb.php?r\x3d215\x26spec\x3dsvn215');
 
 var selected_path = '/trunk/timthumb.php';
 
 
 function getCurrentPageIndex() {
 for (var i = 0; i < changed_paths.length; i++) {
 if (selected_path == changed_paths[i]) {
 return i;
 }
 }
 }
 function getNextPage() {
 var i = getCurrentPageIndex();
 if (i < changed_paths.length - 1) {
 return changed_urls[i + 1];
 }
 return null;
 }
 function getPreviousPage() {
 var i = getCurrentPageIndex();
 if (i > 0) {
 return changed_urls[i - 1];
 }
 return null;
 }
 function gotoNextPage() {
 var page = getNextPage();
 if (!page) {
 page = detail_url;
 }
 window.location = page;
 }
 function gotoPreviousPage() {
 var page = getPreviousPage();
 if (!page) {
 page = detail_url;
 }
 window.location = page;
 }
 function gotoDetailPage() {
 window.location = detail_url;
 }
 function gotoPublishPage() {
 window.location = publish_url;
 }
</script>

 
 <style type="text/css">
 #review_nav {
 border-top: 3px solid white;
 padding-top: 6px;
 margin-top: 1em;
 }
 #review_nav td {
 vertical-align: middle;
 }
 #review_nav select {
 margin: .5em 0;
 }
 </style>
 <div id="review_nav">
 <table><tr><td>Go to:&nbsp;</td><td>
 <select name="files_in_rev" onchange="window.location=this.value">
 
 <option value="/p/timthumb/source/browse/trunk/timthumb.php?r=215&amp;spec=svn215"
 selected="selected"
 >/trunk/timthumb.php</option>
 
 </select>
 </td></tr></table>
 
 
 



 <div style="white-space:nowrap">
 
 <a href="https://www.google.com/accounts/ServiceLogin?service=code&amp;ltmpl=phosting&amp;continue=http%3A%2F%2Fcode.google.com%2Fp%2Ftimthumb%2Fsource%2Fbrowse%2Ftrunk%2Ftimthumb.php&amp;followup=http%3A%2F%2Fcode.google.com%2Fp%2Ftimthumb%2Fsource%2Fbrowse%2Ftrunk%2Ftimthumb.php"
 >Sign in</a> to write a code review</div>


 
 </div>
 
 
 </div>
 <div class="round1"></div>
 <div class="round2"></div>
 <div class="round4"></div>
 </div>
 <div class="pmeta_bubble_bg" style="border:1px solid white">
 <div class="round4"></div>
 <div class="round2"></div>
 <div class="round1"></div>
 <div class="box-inner">
 <div id="older_bubble">
 <p>Older revisions</p>
 
 
 <div class="closed" style="margin-bottom:3px;" >
 <img class="ifClosed" onclick="_toggleHidden(this)" src="http://www.gstatic.com/codesite/ph/images/plus.gif" >
 <img class="ifOpened" onclick="_toggleHidden(this)" src="http://www.gstatic.com/codesite/ph/images/minus.gif" >
 <a href="/p/timthumb/source/detail?spec=svn215&r=214">r214</a>
 by binarymoon
 on Mar 4, 2012
 &nbsp; <a href="/p/timthumb/source/diff?spec=svn215&r=214&amp;format=side&amp;path=/trunk/timthumb.php&amp;old_path=/trunk/timthumb.php&amp;old=213">Diff</a>
 <br>
 <pre class="ifOpened">remove unnecessary functionality</pre>
 </div>
 
 <div class="closed" style="margin-bottom:3px;" >
 <img class="ifClosed" onclick="_toggleHidden(this)" src="http://www.gstatic.com/codesite/ph/images/plus.gif" >
 <img class="ifOpened" onclick="_toggleHidden(this)" src="http://www.gstatic.com/codesite/ph/images/minus.gif" >
 <a href="/p/timthumb/source/detail?spec=svn215&r=213">r213</a>
 by binarymoon
 on Feb 23, 2012
 &nbsp; <a href="/p/timthumb/source/diff?spec=svn215&r=213&amp;format=side&amp;path=/trunk/timthumb.php&amp;old_path=/trunk/timthumb.php&amp;old=212">Diff</a>
 <br>
 <pre class="ifOpened">remove unnecessary code for stripping
directory separator (which seems not
to have worked anyway :( )</pre>
 </div>
 
 <div class="closed" style="margin-bottom:3px;" >
 <img class="ifClosed" onclick="_toggleHidden(this)" src="http://www.gstatic.com/codesite/ph/images/plus.gif" >
 <img class="ifOpened" onclick="_toggleHidden(this)" src="http://www.gstatic.com/codesite/ph/images/minus.gif" >
 <a href="/p/timthumb/source/detail?spec=svn215&r=212">r212</a>
 by binarymoon
 on Feb 20, 2012
 &nbsp; <a href="/p/timthumb/source/diff?spec=svn215&r=212&amp;format=side&amp;path=/trunk/timthumb.php&amp;old_path=/trunk/timthumb.php&amp;old=211">Diff</a>
 <br>
 <pre class="ifOpened">fix for realpath issues with symlinks</pre>
 </div>
 
 
 <a href="/p/timthumb/source/list?path=/trunk/timthumb.php&start=215">All revisions of this file</a>
 </div>
 </div>
 <div class="round1"></div>
 <div class="round2"></div>
 <div class="round4"></div>
 </div>
 
 <div class="pmeta_bubble_bg" style="border:1px solid white">
 <div class="round4"></div>
 <div class="round2"></div>
 <div class="round1"></div>
 <div class="box-inner">
 <div id="fileinfo_bubble">
 <p>File info</p>
 
 <div>Size: 50510 bytes,
 1244 lines</div>
 
 <div><a href="//timthumb.googlecode.com/svn/trunk/timthumb.php">View raw file</a></div>
 </div>
 
 <div id="props">
 <p>File properties</p>
 <dl>
 
 <dt>svn:keywords</dt>
 <dd>Revision</dd>
 
 </dl>
 </div>
 
 </div>
 <div class="round1"></div>
 <div class="round2"></div>
 <div class="round4"></div>
 </div>
 </div>
 </div>


</div>

</div>
</div>

<script src="http://www.gstatic.com/codesite/ph/11556196549636558490/js/prettify/prettify.js"></script>
<script type="text/javascript">prettyPrint();</script>


<script src="http://www.gstatic.com/codesite/ph/11556196549636558490/js/source_file_scripts.js"></script>

 <script type="text/javascript" src="https://kibbles.googlecode.com/files/kibbles-1.3.3.comp.js"></script>
 <script type="text/javascript">
 var lastStop = null;
 var initialized = false;
 
 function updateCursor(next, prev) {
 if (prev && prev.element) {
 prev.element.className = 'cursor_stop cursor_hidden';
 }
 if (next && next.element) {
 next.element.className = 'cursor_stop cursor';
 lastStop = next.index;
 }
 }
 
 function pubRevealed(data) {
 updateCursorForCell(data.cellId, 'cursor_stop cursor_hidden');
 if (initialized) {
 reloadCursors();
 }
 }
 
 function draftRevealed(data) {
 updateCursorForCell(data.cellId, 'cursor_stop cursor_hidden');
 if (initialized) {
 reloadCursors();
 }
 }
 
 function draftDestroyed(data) {
 updateCursorForCell(data.cellId, 'nocursor');
 if (initialized) {
 reloadCursors();
 }
 }
 function reloadCursors() {
 kibbles.skipper.reset();
 loadCursors();
 if (lastStop != null) {
 kibbles.skipper.setCurrentStop(lastStop);
 }
 }
 // possibly the simplest way to insert any newly added comments
 // is to update the class of the corresponding cursor row,
 // then refresh the entire list of rows.
 function updateCursorForCell(cellId, className) {
 var cell = document.getElementById(cellId);
 // we have to go two rows back to find the cursor location
 var row = getPreviousElement(cell.parentNode);
 row.className = className;
 }
 // returns the previous element, ignores text nodes.
 function getPreviousElement(e) {
 var element = e.previousSibling;
 if (element.nodeType == 3) {
 element = element.previousSibling;
 }
 if (element && element.tagName) {
 return element;
 }
 }
 function loadCursors() {
 // register our elements with skipper
 var elements = CR_getElements('*', 'cursor_stop');
 var len = elements.length;
 for (var i = 0; i < len; i++) {
 var element = elements[i]; 
 element.className = 'cursor_stop cursor_hidden';
 kibbles.skipper.append(element);
 }
 }
 function toggleComments() {
 CR_toggleCommentDisplay();
 reloadCursors();
 }
 function keysOnLoadHandler() {
 // setup skipper
 kibbles.skipper.addStopListener(
 kibbles.skipper.LISTENER_TYPE.PRE, updateCursor);
 // Set the 'offset' option to return the middle of the client area
 // an option can be a static value, or a callback
 kibbles.skipper.setOption('padding_top', 50);
 // Set the 'offset' option to return the middle of the client area
 // an option can be a static value, or a callback
 kibbles.skipper.setOption('padding_bottom', 100);
 // Register our keys
 kibbles.skipper.addFwdKey("n");
 kibbles.skipper.addRevKey("p");
 kibbles.keys.addKeyPressListener(
 'u', function() { window.location = detail_url; });
 kibbles.keys.addKeyPressListener(
 'r', function() { window.location = detail_url + '#publish'; });
 
 kibbles.keys.addKeyPressListener('j', gotoNextPage);
 kibbles.keys.addKeyPressListener('k', gotoPreviousPage);
 
 
 }
 </script>
<script src="http://www.gstatic.com/codesite/ph/11556196549636558490/js/code_review_scripts.js"></script>
<script type="text/javascript">
 function showPublishInstructions() {
 var element = document.getElementById('review_instr');
 if (element) {
 element.className = 'opened';
 }
 }
 var codereviews;
 function revsOnLoadHandler() {
 // register our source container with the commenting code
 var paths = {'svn215': '/trunk/timthumb.php'}
 codereviews = CR_controller.setup(
 {"profileUrl":null,"token":null,"assetHostPath":"http://www.gstatic.com/codesite/ph","domainName":null,"assetVersionPath":"http://www.gstatic.com/codesite/ph/11556196549636558490","projectHomeUrl":"/p/timthumb","relativeBaseUrl":"","projectName":"timthumb","loggedInUserEmail":null}, '', 'svn215', paths,
 CR_BrowseIntegrationFactory);
 
 codereviews.registerActivityListener(CR_ActivityType.REVEAL_DRAFT_PLATE, showPublishInstructions);
 
 codereviews.registerActivityListener(CR_ActivityType.REVEAL_PUB_PLATE, pubRevealed);
 codereviews.registerActivityListener(CR_ActivityType.REVEAL_DRAFT_PLATE, draftRevealed);
 codereviews.registerActivityListener(CR_ActivityType.DISCARD_DRAFT_COMMENT, draftDestroyed);
 
 
 
 
 
 
 
 var initialized = true;
 reloadCursors();
 }
 window.onload = function() {keysOnLoadHandler(); revsOnLoadHandler();};

</script>
<script type="text/javascript" src="http://www.gstatic.com/codesite/ph/11556196549636558490/js/dit_scripts.js"></script>

 
 
 
 <script type="text/javascript" src="http://www.gstatic.com/codesite/ph/11556196549636558490/js/ph_core.js"></script>
 
 
 
 
 <script type="text/javascript" src="/js/codesite_product_dictionary_ph.pack.04102009.js"></script>
</div> 

<div id="footer" dir="ltr">
 <div class="text">
 <a href="/projecthosting/terms.html">Terms</a> -
 <a href="http://www.google.com/privacy.html">Privacy</a> -
 <a href="/p/support/">Project Hosting Help</a>
 </div>
</div>
 <div class="hostedBy" style="margin-top: -20px;">
 <span style="vertical-align: top;">Powered by <a href="http://code.google.com/projecthosting/">Google Project Hosting</a></span>
 </div>

 
 


 
 </body>
</html>


/*
Theme Name: Tempera
Theme URI: http://www.cryoutcreations.eu/tempera
Description:We had to follow a very strict recipe to get Tempera just right. We started with a very solid framework of over 200 settings, added a very light user interface, threw in a couple of mobiles and tablets to give it that responsive elasticity, added over 50 fonts, weren't satisfied so we poured all the Google fonts into the mix, then scattered 12 widget areas for consistency, dissolved a slider and unlimited columns into a customizable Presentation Page then mixed it in as well. We then sprinkled all post formats, 8 layouts including magazine and blog, powdered 40+ social icons and even blended in a customizable top bar for extra density. We also made it translation ready and gave it RTL language support for some cultural diversity. The secret ingredient was love and we might've spilled too much of that. But now Tempera has just the right feel and the right texture and is exactly what your empty WordPress canvas needs. NEW! Tempera now comes in 16 different flavors with preset color schemes!
Author: Cryout Creations
Author URI: http://www.cryoutcreations.eu
Version: 1.3.0
License: GNU General Public License v3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Tags: white, black, blue, orange, red, gray, silver, light, dark, one-column, two-columns, three-columns, right-sidebar, left-sidebar, fixed-layout, responsive-layout, custom-background, custom-colors, custom-header, custom-menu, featured-image-header, featured-images, front-page-post-form, full-width-template,  microformats, post-formats, rtl-language-support,  sticky-post, theme-options, threaded-comments, translation-ready
*/

/*
 * Copyright (c) 2013-15 Cryout Creations
 * http://www.cryoutcreations.eu
*/

/* 
IMPORTANT!

Any changes made to this or any other of the theme's files will be lost at the next update.

To safely make customizations to the theme, for CSS-only consider using the theme's dedicated 
"Custom CSS" field found under the Miscellaneous section of the theme settings page; 
for advanced CSS and other customizations, consider using a child theme.
*/

/* Reset default browser CSS */
/* http://meyerweb.com/eric/tools/css/reset/ v2.0 | 20110126 License: none (public domain)*/
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}

h1, h2, h3, h4, h5, h6 {
	clear: both;
	font-weight: normal;
}
#content h1,#content h2,#content h3,#content h4,#content h5,#content h6 {
	clear: none;
}
#content .entry-content h1 { font-size: 32px; }
#content .entry-content h2 { font-size: 28px; }
#content .entry-content h3 { font-size: 24px; }
#content .entry-content h4 { font-size: 20px; }
#content .entry-content h5 { font-size: 16px; }
#content .entry-content h6 { font-size: 12px; }
ol, ul {
	list-style: none;
}

.entry-content blockquote {
	padding:15px ;
	padding-left:90px;
	display:block;
	font-style: italic;
	clear:both;
	float:none;
	position:relative;
	border-top:1px solid transparent;
	border-bottom:1px solid transparent;
 }
.entry-content blockquote:before {
left:30px;
content:'\e80f';
font-family:'elusive';
font-size:30px;
position:absolute;
right:10px;
top:35%;
}

#content blockquote p{
 margin-bottom:0;
 }

del {
	text-decoration: line-through;
}
/* tables still need 'cellspacing="0"' in the markup */
table {
	border-collapse: collapse;
	border-spacing: 0;
}
a img {
	border: none;
}


/* =Layout
-------------------------------------------------------------- */

#container {
	float: none;
	margin:0;
	width: 100%;
}
#content {
	margin-bottom: 0px;
}
.sidey {
	display:block;
	float: left;
}

#footer {
	clear: both;
	width: 100%;
}

/* =Fonts
-------------------------------------------------------------- */
body,
input,
textarea,
.page-title span,
.pingback a.url ,
h3#comments-title,
h3#reply-title,
#access .menu,
#access div.menu ul,
#cancel-comment-reply-link,
.form-allowed-tags,
#site-info,
#site-title,
#wp-calendar,
.comment-meta,
.comment-body tr th,
.comment-body thead th,
.entry-content label,
.entry-content tr th,
.entry-content thead th,
.entry-meta,
.entry-title,
.entry-utility,
#respond label,
.navigation,
.page-title,
.pingback p,
.reply,
.widget-title,
.wp-caption-text,
input[type=submit] {
	/*font-family:Open Sans, Arial, sans-serif;*/
}
pre {
	font-family: "Courier 10 Pitch", Courier, monospace;
}
code {
	font-family: Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace !important;
}
.entry-content pre {
border-bottom:1px solid transparent;
}
.entry-content code {
    border: 1px solid transparent;
	border-bottom:3px solid transparent; 
    clear: both;
    display: block;
    float: none;
    margin: 0 auto;
    overflow: auto;
    padding: 10px !important;
    text-indent: 0;
    white-space: nowrap;
}

/* =Structure
-------------------------------------------------------------- */

/* The main theme structure */
div.menu,
#colophon,
#branding,
#main,
#header {
	margin: 0 auto;
}

#branding {
display:block;
float:left;
clear:both;
height:75px;
padding:0;
position:relative;
overflow:hidden;
width:100%;
}

a#logo {
display:inline;
height:100%;
}

#linky {
background-image: url('data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==');
display:block;
width:100%;
height:100%;
}

/* Structure the footer area */
#footer-widget-area {
	overflow: hidden;
}

.footerfour .widget-area {
	float: left;
	margin-right:2%;
	width: 23.5%;
}
.footerthree .widget-area {
	float: left;
	margin-right:2%;
	width: 32%;
}

.footertwo .widget-area {
	float: left;
	margin-right: 2%;
	width: 49%;
}

.footerone .widget-area {
	float: left;
	width: 100%;
}

.footertwo #second, .footerthree #third, .footerfour #forth {
	margin-right: 0%;
}

#footer-widget-area #fourth {
	margin-right: 0;
}

#site-generator {
	float: right;
	width: 220px;
}


/* =Global Elements
-------------------------------------------------------------- */

/* Main global 'theme' and typographic styles */
body {
}

body,
input,
textarea {
	font-size: 12px;
	line-height: 18px;

}
hr {
	border: 0;
	clear: both;
	height: 1px;
}

/* Text elements */

.entry-content ul {
	margin-left:1.5em;
}

.entry-content ul li,
.entry-content ol li {
	padding:2px 0;
}

.entry-content ul > li {
list-style:circle;
}

.entry-content ol > li {
	text-indent:0px;
}

.entry-content  li li {
margin-left:15px;
}

ol {
	list-style: decimal;
	margin-left: 2.5em;

}
ol ol {
	list-style: upper-alpha;
}
ol ol ol {
	list-style: lower-roman;
}
ol ol ol ol {
	list-style: lower-alpha;
}
ul ul,
ol ol,
ul ol,
ol ul {
	margin-bottom: 0;
}
dl {
	margin: 0 0 24px 0;
}
dt {
	font-weight: bold;
}

strong {
	font-weight: bold;
}
cite,
em,
i {
	font-style: italic;
}
big {
	font-size: 131.25%;
}
ins {
	text-decoration: none;
}
pre {
	line-height: 18px;
	padding: 1.5em;
}
abbr,
acronym {
	border-bottom: 1px dotted transparent;
	cursor: help;
}
sup,
sub {
	height: 0;
	line-height: 1;
	position: relative;
}
input[type="text"], input[type="password"], input[type="email"], input[type="file"], textarea, select,
input[type="color"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="month"], input[type="number"], input[type="range"],
input[type="search"], input[type="tel"], input[type="time"], input[type="url"], input[type="week"]{
	border: 1px solid transparent;
	padding:5px 5px;
	-moz-transition:background-color .2s;
	-o-transition:background-color .2s;
	-webkit-transition:background-color .2s;
	transition:background-color .2s;
	font-family:inherit;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
}
input[type="file"] { border-color: transparent !important; }

input::-moz-focus-inner /*Remove button padding in FF*/
{ 
    border: 0;
    padding: 0;
}

a:link,a:visited  {
    text-decoration:none;
}


/* Text meant only for screen readers */
.screen-reader-text {
	position: absolute;
	left: -9000px;
}


/* =Header
-------------------------------------------------------------- */

#header {
	background:none;
}
#site-title {
	float: left;
	font-size: 32px;
	line-height: 32px;
}
#site-title a {
	font-weight: bold;
	text-decoration: none;
    letter-spacing: -0.03em;
	display:block;
}
#site-description {
	display:inline;
	float: left;
	font-size: 15px;
	margin-top:5px;
	padding:3px 6px 3px 0;
	clear:both;
}

#header-container {
display:block;
float:none;
position:relative;
top:0px;
width:100%;
height:100%;
}
#branding #bg_image + #header-container { 
	position: absolute; 
}

#header-container > div {
margin-top:20px;
}

#header:after {
content:"";
display:table;
clear:both;
}

/* Header widget area
-------------------------------------------------------------- */

#header-widget-area {
    display: block;
    right: 0;
	top:5px;
    height: 100%;
    overflow: hidden;
    position: absolute;
    width: 50%;
    z-index: 251;
}


/* =Menu -PRIMARY
-------------------------------------------------------------- */

#nav-toggle { display: none; }

#access {
	display: block;
	float: left;
	margin: 10px auto 0;
	width:100%;
}

#access ul {
}

 #access  ul  li.current_page_item,  #access ul li.current-menu-item  {

}

#access a {
	display:block;
	text-decoration: none;
	font-size:16px;
	-moz-transition:all .3s ease-in-out;
	-o-transition:all .3s ease-in-out;
	-webkit-transition:all .3s ease-in-out;
	transition:all .3s ease-in-out;
}

#access a span {
	display:block;
	padding:10px 71px;
}

#access a:hover {
}

#access > .menu > ul > li > a > span {
border-right:1px solid transparent;
}

#access > .menu > ul > li > a:not(:only-child) span:after {
	font-family:"Elusive";
    content: '\e80a';
    position: absolute; 
    right: 5px;
    top: 10px;
    z-index: 251;
	-moz-transition:all .2s ease-in-out;
	-o-transition:all .2s ease-in-out;
	-webkit-transition:all .2s ease-in-out;
	transition:all .2s ease-in-out;
}

#access > .menu > ul > li:hover > a:not(:only-child) span:after {
    top:20px;
	opacity:0;
}

#access > .menu > ul > li > a:not(:only-child) span {
padding-right:18px;
}

#access ul li {
position:relative;
display:block;
float:left;
white-space: nowrap;
}

#access ul ul {
	display: none;
	position: absolute;
	clear:both;
	z-index: 260;
	margin-left:0px;
}

#access > .menu > ul > li > ul:before {
 border-bottom: 6px solid transparent;/* * */
 border-left: 6px solid transparent;
 border-right: 6px solid transparent;
 content: "";
 display: inline-block;
 left: 10px;
 position: absolute;
 top: -6px;

}

#access ul ul ul:before {
 border-top: 6px solid transparent;
 border-right: 6px solid transparent;/* * */
 border-bottom: 6px solid transparent;
 content: "";
 display: inline-block;
 left: -6px;
 position: absolute;
 top: 12px;

}


#access ul ul li { /* level 2 */
	margin:0;
    width: 100%; /* submenu width fix */
	position:relative;
	display:table;
	float:left;
	clear:both;
	border-top:1px solid transparent;
	border-bottom:1px solid transparent;
}

#access ul ul li a {

}

#access ul ul ul {
	position:absolute;
	left: 100%;
	top: 0px;
	margin:0;
}

#access ul ul ul li { /* level 3 */
     width: 100%;
	 display: block;
     float: none;
 }
 
 #access ul ul ul ul li { /* level 4 */
	top:-1px;
	}

#access ul ul a, #access ul ul ul a {
	display:table;
	float:none;
	min-width:150px;
	width:100%;
	}

#access ul ul li:hover, #access ul ul ul li:hover {
}

#access li:hover > a {
}

#access ul ul :hover > a {
}

#access ul li:hover > ul {
	display: block;
}
#access ul li.current_page_item > a,
#access ul li.current-menu-item > a{
}

#access ul ul li.current_page_item ,
#access ul ul li.current-menu-ancestor,
#access ul ul li.current-menu-item ,
#access ul ul li.current-menu-parent {
}

#access ul li.current_page_item a,
#access ul li.current-menu-ancestor a,
#access ul li.current-menu-item a,
#access ul li.current-menu-parent a,
#access ul li a:hover {
}

/* =Menu -SECONDARY
-------------------------------------------------------------- */

.topmenu {
display:inline;
float:right;
width:auto;
	}

.topmenu ul{

}

.topmenu ul li{
	display:block;
	float:left;
	margin:0 3px;
}

.topmenu ul li a {
	display:block;
	padding:0px 4px;
	maring:0 2px;
	line-height:30px;
	border-bottom:1px solid transparent;
	-moz-transition:all .2s ease-in;
	-o-transition:all .2s ease-in;
	-webkit-transition:all .2s ease-in;
	transition:all .2s ease-in;
}

.footermenu {
padding:5px 0;
display:block;
float:left;
}

.footermenu > ul {
	float:left;
	margin-left:20px;
}

.footermenu ul li{
	display:block;
	float:left;
	margin:0px 5px;
	text-align:center;
	white-space:nowrap;
}

.footermenu ul li:after {
margin-left:10px;
content:"/";
}

.footermenu ul li:last-child:after {
content:"";
}

/* ==Top Bar==
------------------ */

#topbar {
display:block;
height:30px;
width:100%;
border-bottom:1px solid transparent;
}

#topbar-inner {
display:block;
margin:0 auto;
}
#topbar .socials a {background-color:transparent;margin:0;} 
#topbar .socials a img {width:22px;height:22px;padding:0;top:2px; left:2px;}

/* =Content
-------------------------------------------------------------- */

#main {
	clear: both;
	padding: 0px ;
	margin-top:20px;
}

#content,
#content input,
#content textarea {
	font-size: 14px;
	line-height: initial;
}

#content ul ul,
#content ol ol,
#content ul ol,
#content ol ul {
	margin-bottom: 0;
}
#content pre,
#content kbd,
#content tt,
#content var {
	font-size: 15px;
	line-height: 21px;
	overflow:auto;
	font-family: "Courier New",Courier,monospace !important;
}
#content code {
	font-size: 13px;
}
#content dt,
#content th {
}
.entry-content h1,
.entry-content h2,
.entry-content h3,
.entry-content h4,
.entry-content h5,
.entry-content h6 {
	line-height: 1.5em;
	margin:20px 0 0;
}

#content table {
	border: 0;
	margin: 0 0px 24px 0;
	text-align: left;
	width: 100%;
	vertical-align: top;
}
#content tr {
	vertical-align: top;
}
#content .alternate {
}


#content tr th,
#content thead th {
	font-size: 14px;
	padding: 9px 24px;
}
#content tr td {
	border-top: 1px solid transparent;
	padding: 6px 24px;
}

#content tr td, #content tr th, #content thead th {
border-right:1px solid transparent;
}

#content tr td:last-child, #content tr th:last-child {
border-right:none;
}

#content tr.odd td {
}

.page-header {
	display:block;
	float:none;
	padding:10px 0px;
}

.page-header .category-archive-meta {padding-top:5px;}

.page-title {
	font-size: 14px;
	font-weight: bold;
	display:block;
	padding:0px 6px;
	border-left:3px solid transparent;
}
.page-title span {
	font-size: 16px;
	font-style: italic;
	font-weight: normal;
}
.page-title a:link,
.page-title a:visited {
	text-decoration: none;
}
.page-title a:active,
.page-title a:hover {
}
#content .entry-title {
	font-size: 32px;
	font-weight: normal;
	line-height: 1.3em;
	padding:0px;
	margin: 0px;
	word-wrap:break-word;
}
.entry-title a {
/*display: inline-block;*/
 }

.entry-title a:link,
.entry-title a:visited {
	color:inherit;
	text-decoration: none;
}
.entry-title a:active,
.entry-title a:hover {
}

#content > h1.entry-title {
	margin-bottom: 10px;
}

.entry-meta {
    display: block;
    font-size: 12px;
	clear:both;
	overflow:hidden;
}

footer.entry-meta {
/*border-top:1px dashed #CCC;*/
background:url(images/dashed-border.png) 0 0 repeat-x;
padding-top:3px;
}

.entry-meta span, .entry-utility span {
display:block;
float:left;
line-height:22px;
margin-right:10px;
}

.entry-meta span  a{
font-size:13px;
}

.entry-meta span.bl_categ { max-width: 97%; }

.entry-utility {
	clear: both;
	font-size: 13px;
}

.footer-tags {display:block;float:left;}

.entry-utility span.bl_bookmark {
float:none;display:inline;padding:0;
}

.entry-meta span.bl_sep {
display:none;
}

 .comments-link {
float:right;
}

.comments-link * {
font-size:13px;
}

.comments-link b {font-weight:normal;}

#content h3.entry-format {
display:inline;
float:left;
font-size:14px;
padding:0 3px;
margin-right:5px;
-moz-border-radius:100px;
-webit-border-radius:100px;
border-radius:100px;
}

h3.entry-format > i:before {cursor:default;}

.entry-meta abbr,
.entry-utility abbr {
	border: none;
}
.entry-meta abbr:hover,
.entry-utility abbr:hover {
	border-bottom: 1px dotted transparent;
}
.entry-content,
.entry-summary {
	clear: both;
	padding-top:8px;
	word-wrap:break-word;
}
#content .entry-summary p:last-child {
	margin-bottom: 12px;
}
.entry-content fieldset {
	border: 1px solid transparent;
	margin: 0 0 24px 0;
	padding: 24px;
}
.entry-content fieldset legend {
	font-weight: bold;
	padding: 0 24px;
}
.entry-content input {

}
.entry-content input.file,
.entry-content input.button {

}
.entry-content label {

}
.entry-content select {

}
.entry-content sup,
.entry-content sub {
	font-size: 10px;
}

.entry-content blockquote.left {
	float: left;
	margin-left: 0;
	margin-right: 24px;
	text-align: right;
	width: 33%;
}
.entry-content blockquote.right {
	float: right;
	margin-left: 24px;
	margin-right: 0;
	text-align: left;
	width: 33%;
}

.tag-links {
	margin-left:30px;
}

.page-link {
	margin: 10px 0;
	clear:both;
}

 .page-link a, .page-link > span > em {
	font-weight: normal;
	text-decoration: none;
	padding:0 4px;
	border-right:1px solid transparent;
}

.page-link em {font-style:normal;}

.page-link  a:last-child, .page-link > span > em:last-child {
border-right:none;
}

 .page-link a:hover {
}

span.edit-link {
	float:right;
	display: block;
	margin:0 0 0 10px;
	padding:0;
	font-size:12px;
}

#author-info {
	clear: both;
	font-size: 14px;
	line-height: 20px;
	margin: -10px 0 24px 0;
	overflow: hidden;
	border-left:3px solid transparent;
	padding:15px 0;
}

#author-info #author-avatar {
	float: left;
	height: 60px;
	margin: 0 -80px 0 20px;

}
#author-info #author-description {
	float: left;
	margin: 0 0 0 104px;
}

#entry-author-info {
	clear: both;
	font-size: 14px;
	line-height: 20px;
	margin: 24px 0;
	overflow: hidden;
	padding: 18px 0px;
	border-left:3px solid transparent;
}
#entry-author-info #author-avatar {
	float: left;
	height: 60px;
	margin: 0 -80px 0 20px;
}

#author-avatar .avatar {
-webkit-border-radius:100px;
-moz-border-radius:100px;
border-radius:100px;
}
#entry-author-info #author-description {
	float: left;
	margin: 0 0 0 104px;
}
#entry-author-info h2 {
	font-size: 100%;
	font-weight: bold;
	margin-bottom: 0;
}

#content .video-player {
	padding: 0;
}

/* POST FORMATS */

/* =Asides
-------------------------------------------------------------- */

.home #content .format-aside p,
.home #content .category-asides p {
	line-height: 20px;
	margin-bottom: 10px;
	margin-top: 0;
}

.home #content .format-aside .entry-content,
.home #content .category-asides .entry-content {
	padding-top: 0;
}

#content .format-aside .entry-title {
	display:none;
}

#content .format-aside .author ,
#content .format-aside  .bl_categ,
#content .format-aside .bl_sep {
	display:none;
}


/**
 * 5.4 Galleries
 * ----------------------------------------------------------------------------
 */

.gallery {
	margin-bottom: 20px;
	margin-left: -4px;
}

.gallery-item {
	float: left;
	margin: 0 4px 4px 0;
	overflow: hidden;
	position: relative;
}

.gallery-columns-1.gallery-size-medium,
.gallery-columns-1.gallery-size-thumbnail,
.gallery-columns-2.gallery-size-thumbnail,
.gallery-columns-3.gallery-size-thumbnail {
	display: table;
	margin: 0 auto 20px;
}

.gallery-columns-1 .gallery-item,
.gallery-columns-2 .gallery-item,
.gallery-columns-3 .gallery-item {
	text-align: center;
}

.gallery-columns-4 .gallery-item {
	max-width: 23%;
	max-width: -webkit-calc(25% - 4px);
	max-width:         calc(25% - 4px);
}

.gallery-columns-5 .gallery-item {
	max-width: 19%;
	max-width: -webkit-calc(20% - 4px);
	max-width:         calc(20% - 4px);
}

.gallery-columns-6 .gallery-item {
	max-width: 15%;
	max-width: -webkit-calc(16.7% - 4px);
	max-width:         calc(16.7% - 4px);
}

.gallery-columns-7 .gallery-item {
	max-width: 13%;
	max-width: -webkit-calc(14.28% - 4px);
	max-width:         calc(14.28% - 4px);
}

.gallery-columns-8 .gallery-item {
	max-width: 11%;
	max-width: -webkit-calc(12.5% - 4px);
	max-width:         calc(12.5% - 4px);
}

.gallery-columns-9 .gallery-item {
	max-width: 9%;
	max-width: -webkit-calc(11.1% - 4px);
	max-width:         calc(11.1% - 4px);
}

.gallery-columns-1 .gallery-item:nth-of-type(1n),
.gallery-columns-2 .gallery-item:nth-of-type(2n),
.gallery-columns-3 .gallery-item:nth-of-type(3n),
.gallery-columns-4 .gallery-item:nth-of-type(4n),
.gallery-columns-5 .gallery-item:nth-of-type(5n),
.gallery-columns-6 .gallery-item:nth-of-type(6n),
.gallery-columns-7 .gallery-item:nth-of-type(7n),
.gallery-columns-8 .gallery-item:nth-of-type(8n),
.gallery-columns-9 .gallery-item:nth-of-type(9n) {
	margin-right: 0;
}

.gallery-icon {
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
	line-height:0;
}

.gallery-caption {
	background-color: rgba(0, 0, 0, 0.7);
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
	color: #fff;
	font-size: 14px;
	line-height: 1.3;
	margin: 0;
	max-height: 50%;
	opacity: 0;
	padding: 2px 8px;
	position: absolute;
	bottom: 0;
	left: 0;
	text-align: left;
	-moz-transition: opacity 400ms ease;
	-o-transition: opacity 400ms ease;
	-webkit-transition: opacity 400ms ease;
	transition:         opacity 400ms ease;
	width: 100%;
	cursor: default;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}

.gallery-item:hover .gallery-caption {
	opacity: 1;
}

.gallery-columns-7 .gallery-caption,
.gallery-columns-8 .gallery-caption,
.gallery-columns-9 .gallery-caption {
	display: none;
}



/* =Chat
-------------------------------------------------------------- */
.format-chat p {
	font-family:Monaco, "Courier New", monospace !important;
}

/* =Quote
-------------------------------------------------------------- */
.format-quote blockquote,
.format-quote blockquote p{
	font-family: Georgia,"Bitstream Charter",serif !important;
	font-size:1.1em !important;
}


/* =Status
-------------------------------------------------------------- */

.format-status .entry-title {
	display:none;
}

.status_content {
}

.format-status .avatar {
	display:block;
	width:auto;
	float:left;
	margin:0 10px 10px 0;
}

/* =Attachment pages
-------------------------------------------------------------- */

.attachment .entry-content .entry-caption {
	font-size: 140%;
	margin-top: 24px;
}


/* =Images
-------------------------------------------------------------- */

#content img {
	margin: 0;
	height: auto;
	max-width:100%;
	-moz-box-sizing:border-box;
	-webkit-box-sizing:border-box;
	box-sizing:border-box;
}
#content table img {
	max-width: inherit; }

#content img:hover {
}

#content .alignleft,
#content img.alignleft {
	display: inline;
	float: left;
	margin-right: 24px;
	margin-top: 4px;
}
#content .alignright,
#content img.alignright {
	display: inline;
	float: right;
	margin-left: 24px;
	margin-top: 4px;
}
#content .aligncenter,
#content img.aligncenter {
	clear: both;
	display: block;
	margin-left: auto;
	margin-right: auto;
}
#content img.alignleft,
#content img.alignright,
#content img.aligncenter {
	margin-bottom: 12px;
}

#content img.alignleft,
#content img.alignright,
#content img.aligncenter,
#content img.alignnone,
#content .wp-caption img {
	-moz-transition:all .3s ease-in-out;
	-o-transition:all .3s ease-in-out;
	-webkit-transition:all .3s ease-in-out;
	transition:all .3s ease-in-out;
	opacity:0.99;
	filter:alpha(opacity=99);
}

#content img.alignleft:hover,
#content img.alignright:hover,
#content img.aligncenter:hover,
#content img.alignnone:hover,
#content .wp-caption img:hover {
	opacity:0.8;
	filter:alpha(opacity=80);
}
#content .wp-caption {
	margin-bottom: 20px;
	text-align: center;
	max-width:100%;
	position:relative;
}
#content .wp-caption img {
	border:none !important;
	padding:0px;
	-moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
	width: 100%;
}

#content .wp-caption > a {
line-height:0;
display:block;
}

#content .wp-caption .wp-caption-text {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
	box-sizing: border-box;
    bottom: 0;
	margin-bottom:0;
    padding: 10px 5px;
    position: absolute;
    text-align: center;
    text-indent: 0;
    width: 100%;
}
#content .wp-smiley {
	margin: 0;
	width:auto !important;
    -moz-box-shadow: none !important;
	-webkit-box-shadow: none !important ;
	box-shadow: none !important;
    background: none !important;
    border: 0 !important;
    vertical-align: middle;
}

#content .attachment img { /* single attachment images should be centered */
	display: block;
	margin: 0 auto;
	max-width:96%;
}


/* =Navigation
-------------------------------------------------------------- */

.navigation {
	font-size: 14px;
	overflow: hidden;

}
.navigation a:link,
.navigation a:visited {
	text-decoration: none;
}
.navigation a:active,
.navigation a:hover {

}
.nav-previous a{
	float: left;
	width: 47%;
	padding:5px 1%;

}
.nav-next a{
	float: right;
	text-align: right;
	width: 47%;
	padding:5px 1%;
}

 .nav-next a:hover {
}

.nav-previous:hover .meta-nav-prev:before{
margin-right:10px;
margin-left:-5px;
}
.nav-next:hover .meta-nav-next:before{
margin-left:10px;
margin-right:-5px;
}
.meta-nav-prev:before { 
font-family:"elusive";
content: '\e827';
font-style:normal;
margin-right:5px;
font-size:9px;
-moz-transition:.2s margin ease-in-out;
-o-transition:.2s margin ease-in-out;
-webkit-transition:.2s margin ease-in-out;
transition:.2s margin ease-in-out;
} /* '?' */
.meta-nav-next:before { 
font-family:"elusive";
content: '\e828';
font-style:normal;
margin-left:5px;
font-size:9px;
-moz-transition:.2s margin ease-in-out;
-o-transition:.2s margin ease-in-out;
-webkit-transition:.2s margin ease-in-out;
transition:.2s margin ease-in-out; } /* '?' */

.single #nav-above {
	display: block;
}
#nav-below {
	margin-bottom: 5px;
	margin-top:5px;
	display:block;
	float:none;
	clear:both;
}


/* =Comments
-------------------------------------------------------------- */
#comments {
	padding:10px 0px;
	clear: both;
}
#comments .navigation {
	padding: 0 0 18px 0;
}
h3#comments-title,
h3#reply-title {
	font-size: 22px;
}
h3#comments-title {
	margin-bottom:30px;
	line-height:26px;
}
.commentlist {
	list-style: none;
	margin: 0;
}
.commentlist li.comment {
	margin: 0;
	list-style:none;
	line-height:10px;
}

.commentlist li.comment:hover {
}

.commentlist .comment-body {
padding:10px;
overflow:hidden;
clear:both;
line-height:22px;
margin-bottom:20px;
}

.commentlist li:last-child {
}
#comments .comment-body ul,
#comments .comment-body ol {
}
#comments .comment-body p:last-child {
	margin-bottom: 6px;
}
#comments .comment-body blockquote p:last-child {
	margin-bottom: 24px;
}
.commentlist ol {
	list-style: decimal;
}

.avatar-container {
float:left;
}

.avatar-container:before {
content:"";
width:60px;height:60px;
position:absolute;
moz-border-radius:30px 30px 0 30px;
-webkit-border-radius:30px 30px 0 30px;
border-radius:30px 30px 0 30px;
/*box-shadow:0 1px 3px rgba(0,0,0,0.5) inset;*/
}

.avatar-container:hover:before {
display:none;
}

.commentlist .avatar {
	-moz-border-radius:30px 30px 0 30px;
	-webkit-border-radius:30px 30px 0 30px;
	border-radius:30px 30px 0 30px;
	-moz-transition:all .3s ease-in-out;
	-o-transition:all .3s ease-in-out;
	-webkit-transition:all .3s ease-in-out;
	transition:all .3s ease-in-out;
}

.commentlist .avatar:hover {
	-moz-border-radius:0px 30px 30px 30px;
	-webkit-border-radius:30px 30px 0 30px;
	border-radius:0px 30px 30px 30px;
}
.comment-author {
	display:inline-block;
	line-height:24px;
	-moz-transition:background .3s ease;
	-o-transition:background .3s ease;
	-webkit-transition:background .3s ease;
	transition:background .3s ease;
}

.comment-details {
	float:left;
	padding:7px 10px;
	position:relative;
}

.comment-author cite {
	font-style: normal;
	font-weight: normal;
	font-size:18px;
}
.comment-meta {
	font-size: 12px;
}
.comment-meta a:link,
.comment-meta a:visited {
	text-decoration: none;
}
.comment-meta a:active,
.comment-meta a:hover {
}
.commentlist .even {
}
.commentlist .bypostauthor {
}

.comment-await {
margin-left:25px;
}
.reply a{
	font-size: 12px;
	padding:2px 10px;
	display:block;
	width:auto;
	text-align:right;
	-moz-transition:all .2s ease;
	-o-transition:all .2s ease;
	-webkit-transition:all .2s ease;
	transition:all .2s ease;
}

.reply a:hover .icon-reply:before {
margin-right:10px;
}

.reply a,
a.comment-edit-link {
}

.reply a:hover,
a.comment-edit-link:hover {

}
.commentlist .children {
	background-image:none;
	list-style: none;
	margin: 0;
	margin-left:20px;
}
.commentlist .children li {
	border: none;
	background-image:none !important;
	margin: 0;
	text-indent:0px !important;
}


#content .nocomments, #content .nocomments2 {
margin-bottom:0;
}

.hideme {display:none;}

#comments .pingback {
	border-bottom: 1px solid transparent;
	margin-bottom: 18px;
	padding-bottom: 18px;
}
.commentlist li.comment+li.pingback {
	margin-top: -6px;
}
#comments .pingback p {
	display: block;
	font-size: 12px;
	line-height: 18px;
	margin: 0;
}
#comments .pingback .url {
	font-size: 13px;
	font-style: italic;
}

/* Comments form */
input[type=submit], input[type=reset] {
	border:1px solid transparent;
	padding:7px 15px;
	cursor:pointer;
	-moz-border-radius:100px;
	-webkit-border-radius:100px;
	border-radius:100px;
}
#respond {
	margin: 0;
	overflow: hidden;
	position: relative;
}
#respond p {
	margin: 0;
}
#respond .comment-notes {
	margin-bottom: 0.2em;
	font-size:0.8em;
}
.form-allowed-tags {
	line-height: 1em;
}
.children #respond {
	margin: 0 48px 0 0;
	min-width:400px;
}
h3#reply-title {
	margin: 0;
	padding:5px 0;
}
#comments-list #respond {
	margin: 0 0 18px 0;
}
#comments-list ul #respond {
	margin: 0;
}
#cancel-comment-reply-link {
	font-size: 12px;
	font-weight: normal;
	line-height: 18px;
}
#respond .required {
}

#commentform  {
	max-width:550px;
	display:block;
}

#respond label {
display:none;
}

#respond input {
	width:100%;
	padding:10px;
	-moz-box-sizing:border-box;
	-webkit-box-sizing:border-box;
	box-sizing:border-box;
}

.comment-form-comment textarea {
	display:block;
	float:none;
	height:150px;
	width:100%;
	padding:10px;
	-moz-box-sizing:border-box;
	-webkit-box-sizing:border-box;
	box-sizing:border-box;
}

.comment-form-author label, .comment-form-email label, .comment-form-email label, .comment-form-url label, .comment-form-comment label {
display:block;
float:none;
}

.comment-form-author input, .comment-form-email input, .comment-form-email input, .comment-form-url input, .comment-form-comment input {
display:block;
float:none;
}

#respond input:hover, #respond textarea:hover {

}

#respond .form-allowed-tags {
	font-size: 12px;
	line-height: 18px;
	width: 100%;
	clear:both;
	display:block;
	float:none;
}
#respond .form-allowed-tags code {
	font-size: 11px;
}
#respond .form-submit {
	margin: 12px 0;
	text-align:right;
	clear:both;
}
#respond .form-submit input {
	font-size: 14px;
	width: auto;
}

#respond .form-submit input#submit {
	border:1px solid transparent;
	-moz-transition:background-color .2s ease;
	-o-transition:background-color .2s ease;
	-webkit-transition:background-color .2s ease;
	transition:background-color .2s ease;
}

#respond .form-submit input#submit:hover {
	cursor:pointer;
}

.file, .button {
	border:1px solid transparent;
	padding:4px 7px;
	-moz-transition:background-color .2s ease;
	-o-transition:background-color .2s ease;
	-webkit-transition:background-color .2s ease;
	transition:background-color .2s ease;
}


.file, .button, #respond .form-submit input#submit {
-webkit-border-radius:100px;
-moz-border-radius:100px;
border-radius:100px;
}

.file:hover, .button:hover {
	cursor:pointer;
}

/* =Widget Areas
-------------------------------------------------------------- */

.widget-area ul, .widget-area ul ul {
	list-style: none !important;
	list-style-image:none;
}

.widget-container {
	padding:5px;
	margin: 0 0 20px 0;
}

.widget-container > * {max-width:100%;}

.widget-container ul li {
	display:block;
	float:none;
	margin-bottom:10px;
}

.widget-title {
	font-size:16px;
	padding:5px 0;
	padding-left:10px;
	text-align:left;
	margin-bottom:10px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
	border-bottom:1px solid transparent;
}

#footer-widget-area a:hover {
	text-decoration:underline;
}

.widget-area a:link,
.widget-area a:visited {
	text-decoration: none;
	word-wrap:break-word;
}
.widget-area a:active,
.widget-area a:hover {
}

.widget-area .entry-meta {
	font-size: 11px;
}

/* Search buttons */
#searchform {
display:block;
height:auto;
position:relative;
overflow:hidden;
}

.contentsearch {
display:block;float:none;
overflow:hidden;
margin-bottom:20px;padding:10px;
}
.no-results .contentsearch {padding:0;}

#searchform input[type="text"]  {/* This keeps the search inputs in line This is the Sidebar Search*/
	display:block;float:left;
	font-size:15px;
	padding:0px 30px 0 10px;
	height:42px;width:100%;
	-moz-box-sizing:border-box;
	-webkit-box-sizing:border-box;
	box-sizing:border-box;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
}

.contentsearch #searchform input[type="text"] {
	width:100%;
	margin-left:0;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}
.widget_search label {display: none;}

#searchsubmit {
font-family:"elusive";
display:block;
border:none;
box-shadow: none; -moz-box-shadow: none; -webkit-box-shadow: none;
right:0px;
height:42px;
vertical-align:middle;
-moz-transition: all .2s ease-in-out;
-o-transition: all .2s ease-in-out;
-webkit-transition: all .2s ease-in-out;
transition: all .2s ease-in-out;
position:absolute;
background:none;
font-size:17px;
}

#searchform:hover #searchsubmit {
right:-30px;
}

/* Callendar */
#wp-calendar {width:100%;}
#wp-calendar caption {
	font-size: 14px;font-weight: bold;
	padding-bottom: 4px;margin-left:10px;}
#wp-calendar thead {font-size: 11px;}
#wp-calendar tbody td {
	padding: 3px 0 2px;text-align: center;
	border:1px solid transparent;}
#wp-calendar tbody td:hover {opacity:0.8;}
#wp-calendar tbody td a{
	border:none;background:none;
	padding:0;margin:0;}
#wp- tbody .pad {background: none;}
#wp-calendar tfoot #next {text-align: right;}

.widget_rss a.rsswidget {}
.widget_rss a.rsswidget:hover {}
.widget_rss .widget-title img {width: 11px;height: 11px;}

/* Main sidebars */
#main .widget-area ul {
	margin-left: 0;
	padding: 0;
}
#main .widget-area ul ul {
	border: none;
	margin-left: 10px;
	padding: 0;
}
/* Before and after content widgets */

.yoyo .widget-title {
background:none;
padding:0;
margin:0;
}

/* Footer widget areas */
#footer-widget-area {
margin:20px 0 10px 0;
}

#footer-widget-area a{
}


/* =Footer
-------------------------------------------------------------- */

#footer {
	margin-top:20px;
	margin-bottom: 0px;
}

#footer a{
-moz-transition:color .2s;
-o-transition:color .2s;
-webkit-transition:color .2s;
transition:color .2s;
}

#footer2 {
display:block;
padding:10px 0 3px;
overflow:visible;
margin-bottom:20px;
}

#footer2:after {
content:"";
display:table;
clear:both;
}

#colophon {
	margin: 0 30px;
	overflow: hidden;
}

#site-copyright {
	display:block;
	float:none;
	padding-top:5px;
	font-style: italic;
	clear:both;
	margin:0 auto;
	text-align:center;
}

#footer2 a{
text-decoration:none;
}

#footer2 a:hover{
text-decoration:underline;
}

img#wpstats {
	display: block;
	margin: 0 auto 10px;
}

/*  Extras   */

#forbottom {
	clear:both;
	margin:0px 30px;
	padding:20px 0;
	/*min-height:400px;*/
	
}

/* =Mobile Safari ( iPad, iPhone and iPod Touch )
-------------------------------------------------------------- */

pre {
	-webkit-text-size-adjust: 140%;
}
code {
	-webkit-text-size-adjust: 160%;
}
#access,
.entry-meta,
.entry-utility,
.navigation,
.widget-area {
	-webkit-text-size-adjust: 120%;
}
#site-description {
	-webkit-text-size-adjust: none;
}


/* SOCIALS */

.socials {
	float:right;
	position:relative;
	margin-right:10px;
	height:30px;
	overflow: hidden;
}
.socials a {
	display:block;
	float:left;
	margin-right:5px;
	position:relative;
	height:26px;
	width:26px;
	padding:2px;
	overflow:hidden;
	-moz-border-radius:50px;
	-webkit-border-radius:50px;
	border-radius:50px;
}
.socials img {
	width:26px;
	height:26px;
	position:relative;
	z-index:99;
}

/* The animated square */
.socials-hover {
	width:0;
	height:0;
	display:block;
	position:absolute;
	left:50%;top:50%;
	-moz-border-radius:50px;
	-webkit-border-radius:50px;
	border-radius:50px;
}

#header-container >div#sheader {
	position:absolute;
	margin:0;
	top:10px;
	right:5px;
}
#smenul, #smenur {
	float:none;
	margin:0px auto;
	position:inherit;
	display:table;
}

#smenul a , #smenur a {
margin:3px;
}

#sfooter {
float:none;
clear:both;
display:table;
margin:5px auto 0;
text-align:center;
}

#sfooter a {
margin-left:5px;
}

#srights, #slefts {
right:0;
padding:5px;
position:fixed;
top:40%;
height:auto;
display:block;
width:30px;
margin:0 1px;
opacity:0.5;
-moz-transition:opacity .5s ease-in-out;
-o-transition:opacity .5s ease-in-out;
-webkit-transition:opacity .5s ease-in-out;
transition:opacity .5s ease-in-out;
z-index:99;
}

#slefts {left:0;}

#srights:hover, #slefts:hover {
opacity:1;
}

#srights a, #slefts a {
display:block;
float:none;
clear:both;
margin: 0 0 5px 0;
}

.socials a:last-child {margin-bottom:0 !important;}

/* ARTICLES */

article.post, article.page {
	display:block;
	overflow:hidden;
	margin:0;
	padding:0;
	margin-bottom:36px;
}

div.post, div.page, .yoyo > li {
	display:block;
	overflow:hidden;
	padding:0;
	margin-bottom:36px;
}

article.sticky {
}

.sticky .entry-header {
border-bottom:2px solid transparent;
}

#toTop {
width:auto;height:auto;
bottom:40px;
opacity:0;
z-index:251;
position:fixed;
cursor:pointer;
display:block;
padding:8px 10px;
-moz-border-radius:0 4px 4px 0;
-webkit-border-radius:0 4px 4px 0;
border-radius:0 4px 4px 0;
-moz-transition:all .3s ease-in-out;
-o-transition:all .3s ease-in-out;
-webkit-transition:all .3s ease-in-out;
transition:all .3s ease-in-out;
font-size:12px;
}

.icon-back2top:before { 
content: '\e812';
-moz-transition:all .2s ease-in-out;
-o-transition:all .2s ease-in-out;
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
} /* '?' */

#toTop:hover .icon-back2top:before {
}

/* CUSTOM IMAGE BORDER */

.tempera-image-none .entry-content img[class*='align'],
.tempera-image-none .entry-summary img[class*='align'] {}

.tempera-image-one .entry-content img[class*='align'],
.tempera-image-one .entry-summary img[class*='align'] {
	border-bottom:3px solid transparent;
}
.tempera-image-two .entry-content img[class*='align'],
.tempera-image-two .entry-summary img[class*='align'] {
	border-top:1px solid transparent;
	border-bottom:1px solid transparent;
	padding:2px 0;
}
.tempera-image-three .entry-content img[class*='align'],
.tempera-image-three .entry-summary img[class*='align'] {
	border:1px solid #222;
	padding:0;
	-moz-box-shadow:0 0 15px #ccc;
	-webkit-box-shadow:0 0 15px #ccc;
	box-shadow:0 0 15px #ccc;
}
.tempera-image-four .entry-content img[class*='align'],
.tempera-image-four .entry-summary img[class*='align'] {
	border:1px solid #DDD;
	-moz-box-shadow:0 0 2px #CCC;
	-webkit-box-shadow:0 0 2px #CCC;
	box-shadow:0 0 2px #CCC;
	padding:10px;
}
.tempera-image-five .entry-content img[class*='align'],
.tempera-image-five .entry-summary img[class*='align'] {
padding:6px;
background:url(images/border.png) repeat;
}

.tempera-image-one .entry-content img[class*='align']:hover,
.tempera-image-one .entry-summary img[class*='align']:hover {background-color:#eee;}
.tempera-image-two .entry-content img[class*='align']:hover,
.tempera-image-two .entry-summary img[class*='align']:hover {-moz-box-shadow:none;-webkit-box-shadow:none;box-shadow:none;}
.tempera-image-three .entry-content img[class*='align']:hover,
.tempera-image-three .entry-summary img[class*='align']:hover {-moz-box-shadow:none;-webkit-box-shadow:none;box-shadow:none;}

/* CUSTOM CAPTION LOOK */

.caption-simple #content  .wp-caption .wp-caption-text {
    position: inherit;
	padding:7px 5px;
	font-style:italic;
}

.caption-dark #content  .wp-caption .wp-caption-text {
padding:20px 5px 10px !important;
background: none repeat scroll 0 0 rgba(0, 0, 0, 0.6);
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(0,0,0,0)), to(rgba(0,0,0,1))); 
background: -webkit-linear-gradient(top, rgba(0,0,0,0),  rgba(0,0,0,1));
background: -ms-linear-gradient(top, rgba(0,0,0,0),  rgba(0,0,0,1)); 
background: -o-linear-gradient(top, rgba(0,0,0,0),  rgba(0,0,0,1));
background: -moz-linear-gradient(top, rgba(0,0,0,0),  rgba(0,0,0,1)); 
background: linear-gradient(top, rgba(0,0,0,0),rgba(0,0,0,.6) 50%,  rgba(0,0,0,0.8));
color:#EEE;
text-shadow:0 0 7px #000;
}


.caption-light #content  .wp-caption .wp-caption-text {
background: none repeat scroll 0 0 rgba(255, 255, 255, 0.7);
background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(255,255,255,0.4)), to(rgba(255,255,255,0.8))); 
background: -webkit-linear-gradient(top, rgba(255,255,255,0.4),  rgba(255,255,255,0.8));
background: -moz-linear-gradient(top, rgba(255,255,255,0.4),  rgba(255,255,255,0.8)); 
background: -ms-linear-gradient(top, rgba(255,255,255,0.4),  rgba(255,255,255,0.8)); 
background: -o-linear-gradient(top, rgba(255,255,255,0.4),  rgba(255,255,255,0.8));
color:#333;
}

/* CUSTOM META AREA LOOK */


/* BREADCRUMBS */

.breadcrumbs {
	font-size:0.85em;
	display:block;
	margin-bottom:20px;
	position:relative;
}

.icon-homebread:before { content: '\e81f'; font-size:1em;cursor:pointer;} /* '?' */

 .breadcrumbs a {
}
 .breadcrumbs a:hover {
}

/* PAGINATION */

.pagination {
	display:table;
	float:none;
	margin:20px auto;
	text-align:center;
	clear:both;
	border:1px solid transparent;
}
.pagination span, .pagination a {
	display:block;
	float:left;
	margin-right:0px;
	padding:10px 0;
	text-decoration:none;
	width:40px;
	text-align:center;
	position:relative;
	font-size:13px;
	line-height:20px;
	border-right:1px solid transparent;
	border-left:1px solid transparent;
	-moz-transition:background .3s;
	-o-transition:background .3s;
	-webkit-transition:background .3s;
	transition:background .3s;
}

.pagination span:first-child, .pagination a:first-child {border-left:0;}

.pagination a:hover{
}

.pagination .current{
}


/* CUSTOM FRONT PAGE */


/*
 * jQuery Nivo Slider v3.2
 * http://nivo.dev7studios.com
 *
 * Copyright 2011, Gilbert Pellegrom
 * Free to use and abuse under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 *
 * March 2010
 */


/* The Nivo Slider styles */
.nivoSlider {
	position:relative;
	width:100%;
	height:auto;
	overflow: hidden;
}
.nivoSlider img {
	position:absolute;
	top:0px;
	left:0px;
	max-width: none;
}
.nivo-main-image {
	display: block !important;
	position: relative !important;
	width: 100% !important;
}

/* If an image is wrapped in a link */
.nivoSlider a.nivo-imageLink {
	position:absolute;
	top:0px;
	left:0px;
	width:100%;
	height:100%;
	border:0;
	padding:0;
	margin:0;
	z-index:6;
	display:none;
	filter:alpha(opacity=0);
	opacity:0;
}
/* The slices and boxes in the Slider */
.nivo-slice {
	display:block;
	position:absolute;
	z-index:5;
	height:100%;
	top:0;
}
.nivo-box {
	display:block;
	position:absolute;
	z-index:5;
	overflow:hidden;
}
.nivo-box img { display:block; }

/* Caption styles */
.nivo-caption {
	position:absolute;
	right:60px;
	bottom:60px;
	width:43%;
	z-index:8;
	padding: 10px;
	filter:alpha(opacity=8);
	opacity: 0.8;
	overflow: hidden;
	display: none;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	-webkit-border-radius:0;
	-moz-border-radius:0;
	border-radius:0;
}
.nivo-caption h2 {
	margin-bottom:10px;
	font-size:24px;
	line-height:30px;
	padding:5px 10px 15px 5px;
	border-bottom:1px solid #444;
	font-weight:normal;
	text-align:right;
}

.slide-text {
	padding-left:20px;
	text-align:right;
	padding-right:10px;
	font-size:14px;
	line-height:1.5em;
}

.nivo-caption a {
	display:inline !important;
	text-decoration: underline; 
}
.nivo-html-caption {
    display:none;
}
/* Direction nav styles (e.g. Next & Prev) */
.nivo-directionNav a {
	position:absolute;
	top:40%;
	z-index:9;
	cursor:pointer;
}
.nivo-prevNav {
	left:0px;
}
.nivo-nextNav {
	right:0px;
}
/* Control nav styles (e.g. 1,2,3...) */
.nivo-controlNav a {
	cursor:pointer;
}
.nivo-controlNav a.active {
	font-weight:bold;
}

/*
Skin Name: Nivo Slider Default Theme
Skin URI: http://nivo.dev7studios.com
Skin Type: flexible
Description: The default skin for the Nivo Slider.
Version: 1.3
Author: Gilbert Pellegrom
Author URI: http://dev7studios.com
*/
.theme-default .nivoSlider {
	position:relative;
	background: url(images/nivoslider/loading.gif) no-repeat 50% 50%;
    margin-bottom:50px;
}

.theme-default .nivoSlider img {
	position:absolute;
	top:0px;
	left:0px;
	display:none;
}
.theme-default .nivoSlider a {
	border:0;
	display:block;
}

.theme-default .nivo-controlNav {
	text-align: center;
	display:table;
	margin:0 auto;
	width:auto;
	padding:3px 20px 0;
	position:relative;
	top:-33px;
	height:30px ;
	z-index:250;
	-moz-border-radius:100% 100% 0 0;
	-webkit-border-radius:100% 100% 0 0;
	border-radius:100% 100% 0 0;
	-moz-box-shadow:0px -3px 2px rgba(0,0,0,0.4);	
	-webkit-box-shadow:0px -3px 2px rgba(0,0,0,0.4);	
	box-shadow:0px -3px 2px rgba(0,0,0,0.4);	
	-moz-transition:.2s all ease-in-out;
	-o-transition:.2s all ease-in-out;
	-webkit-transition:.2s all ease-in-out;
	transition:.2s all ease-in-out;
}
.theme-default .nivo-controlNav:hover {
	padding:3px 26px 0;
}

.slider-bullets .nivo-controlNav a {
	display:inline-block;
	width:9px;height:9px;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
	text-indent:-9999px;
	margin: 10px 5px 0;
	-moz-box-shadow:0 0 3px #666;
	-webkit-box-shadow:0 0 3px #666;
	box-shadow:0 0 3px #666;
	-moz-transition:background-color .3s;
	-o-transition:background-color .3s;
	-webkit-transition:background-color .3s;
	transition:background-color .3s;
}

.slider-bullets .nivo-controlNav a:hover {}
.slider-bullets .nivo-controlNav a.active {}

.slider-numbers .nivo-controlNav a {
	display:inline-block;
	padding:0px 6px;
	margin:6px 3px 0;
	font-size:12px;
	font-family:"Open Sans";
	-moz-transition:all .3s;
	-o-transition:all .3s;
	-weblit-transition:all .3s;
	transition:all .3s;
	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
}

.slider-numbers .nivo-controlNav a:hover {}
.slider-numbers .nivo-controlNav a.active {}

.slider-none .nivo-controlNav {display:none;}

.theme-default .nivo-directionNav a {
	display:block;
	width:30px;
	height:40px;
	padding:10px;
	background:url(images/nivoslider/arrows.png) 8px 10px #fff  no-repeat;
	text-indent:-9999px;
	border:0;
}

.theme-default a.nivo-nextNav {
	background-position:-83px 10px;
	-moz-border-radius:100% 0 0 100%;
	-webkit-border-radius:100% 0 0 100%;
	border-radius:100% 0 0 100%;
	-webkit-box-shadow:-3px 0 2px rgba(0, 0, 0, 0.4);
	-moz-box-shadow:-3px 0 2px rgba(0, 0, 0, 0.4);
	box-shadow:-3px 0 2px rgba(0, 0, 0, 0.4);
}
.theme-default a.nivo-prevNav {
	-moz-border-radius:0 100% 100% 0;
	-webkit-border-radius:0 100% 100% 0;
	border-radius:0 100% 100% 0;
	-webkit-box-shadow:3px 0 2px rgba(0, 0, 0, 0.4);
	-moz-box-shadow:3px 0 2px rgba(0, 0, 0, 0.4);
	box-shadow:3px 0 2px rgba(0, 0, 0, 0.4);
}

.theme-default .nivo-directionNav a.nivo-prevNav:hover {background-position:4px 10px;}
.theme-default .nivo-directionNav a.nivo-prevNav:active {background-position:-50px 10px;}
.theme-default .nivo-directionNav a.nivo-nextNav:hover {background-position:-79px 10px;}
.theme-default .nivo-directionNav a.nivo-nextNav:active {background-position:-23px 10px;}


.theme-default .nivo-caption a {
    border-bottom:1px dotted transparent;
}

.theme-default .nivo-controlNav.nivo-thumbs-enabled {
	width: 100%;
}
.theme-default .nivo-controlNav.nivo-thumbs-enabled a {
	width: auto;
	height: auto;
	background: none;
	margin-bottom: 5px;
}
.theme-default .nivo-controlNav.nivo-thumbs-enabled img {
	display: block;
	width: 120px;
	height: auto;
}

/* IE link fix */
a.nivo-imageLink  {
	background-color: #fff;
	filter:alpha(opacity=0);
	opacity: 0;
}

/* Continue Reading Links */

a.continue-reading-link {
	display:inline-block;
	position:relative;
	width:auto;
	float:none;
	padding:7px 8px 5px 15px;
	border-bottom:2px solid transparent;
	margin-top: 3px;
	line-height:1.6em;
	font-size:13px;
	text-transform:uppercase;
	font-style:normal;
	clear:both;
}

a.continue-reading-link:after {
	content:"";
	position:absolute;
	display:block;
	height:2px;width:0%;
	position:absolute;
	left:0;bottom:-2px;
	-moz-transition:width .3s ease-in;
	-o-transition:width .3s ease-in;
	-webkit-transition:width .3s ease-in;
	transition:width .3s ease-in;
}

a.continue-reading-link i.icon-right-dir {
	font-size:13px;
	-moz-transition:color .3s ease-in;
	-o-transition:color .3s ease-in;
	-webkit-transition:color .3s ease-in;
	transition:color .3s ease-in;
}

a.continue-reading-link:hover:after { width:100%;}

/* Front page columns */

#front-columns {
	display:block;
	width:auto;
	float:none;
	overflow:hidden;
}
#front-columns > li {
	float: left;
    list-style: none;
    margin-right: 5%;
    padding: 0;
}
.column-image {
	width:100%;
	display:block;
	overflow:hidden;
	line-height:0px;
}

.column-image:hover .column-image-inside, .column-image:hover .column-text {
left:0;
}

.column-image:hover .columnmore {
bottom:20px;
}

.column-image-inside {
	width:100%;
	height:100%;
	position:absolute;
	background:rgba(0,0,0,0.7);
	z-index:250;
	left:-100%;
	-moz-transition:all .3s ease-in-out;
	-o-transition:all .3s ease-in-out;
	-webkit-transition:all .3s ease-in-out;
	transition:all .3s ease-in-out;
}
.column-text {
	text-align:justify;
	padding:10px 20px;
	width:100%;
	-moz-box-sizing:border-box;
	-webkit-box-sizing:border-box;
	box-sizing:border-box;
	overflow:hidden;
	line-height:1.5em;
	font-size:13px;
	position:absolute;
	top:50%;
	-moz-transform:translate(0,-55%);
	-o-transform:translate(0,-55%);
	-webkit-transform:translate(0,-55%);
	-ms-transform:translate(0,-55%);
	transform:translate(0,-55%);
	z-index:251;
	left:100%;
	color:#DDD;
	-moz-transition:all .3s ease-in-out;
	-o-transition:all .3s ease-in-out;
	-webkit-transition:all .3s ease-in-out;
	transition:all .3s ease-in-out;
}

.column-image img {
	width:100%;
}

.columnmore  {
	font-size:12px;
	display:block;
	text-align:center;
	margin:0 auto;
	clear:both;
	line-height:20px;
	position:absolute;
	bottom:-50px;
	-moz-transition:all .3s ease-in-out;
	-o-transition:all .3s ease-in-out;
	-webkit-transition:all .3s ease-in-out;
	transition:all .3s ease-in-out;
	z-index:251;
	width:100%;
	background:none !important;
}

.columnmore a {
background:#F00;
-moz-border-radius:10px;
-webkit-border-radius:10px;
border-radius:10px;
padding:5px 20px;
background:#fff;
-moz-transition:background .2s ease-out;
-o-transition:background .2s ease-out;
-webkit-transition:background .2s ease-out;
transition:background .2s ease-out;
}


.coldisplay1 .column-text,
.coldisplay1 .column-image-inside {left: 0;}
.coldisplay1 .columnmore {bottom: 20px;}
.coldisplay1 .column-image:hover .column-image-inside {background:rgba(0,0,0,0.9);}


.coldisplay2 .column-image {overflow:visible;}
.coldisplay2 .column-image-inside {display:none;}
.coldisplay2 .column-text {position:relative;top:0;left:0;padding:10px 5px;-webkit-transform:none;-moz-transform:none;transform:none;color:inherit;}
.coldisplay2 .columnmore, .coldisplay2 .column-image:hover .columnmore {bottom: 0px; position: relative;}


.column-arrow:before {
/*
font-family:"elusive";
content: '\e80b';font-size:9px;
padding-left:3px;
font-style:normal;
*/} 

/* Style HTML5 tags for IE8 and lower */
header
,nav
,section
,article
,aside
,footer
,hgroup
{
display: block;
}

.tinynav {
display:block;
float:none;
margin:8px auto;
display:none;
min-width:200px;
width:100%;
padding:10px;
}

.tinynav  option {
}

/* Magazine layout */
.magazine-layout #content article.post,
.magazine-layout.search #content article{
float:left; width:48%;
padding: 0px 0px 10px;
-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;
}
.magazine-layout #content article.sticky {}
.magazine-layout #content article:nth-of-type(2n+1) { clear: both; margin-right:4%; }
.magazine-layout .comments-link { float:left; }

.magazine-layout .entry-header .entry-meta { margin-top: 5px; }
.magazine-layout span.edit-link {float:left;margin-left:0;margin-right:10px; }
.magazine-layout .entry-header { clear: both; }

/* Ajax load more posts button */

#cryout_ajax_more_trigger{
display:table;
float:none;
clear:both;
min-width:200px;
background:url(images/loading.gif) no-repeat -100px center ;
padding:7px 20px;
border-radius:10px;
margin:0 auto;
text-align:center;
cursor:pointer;
-moz-transition:opacity .3s ease-in-out;
-o-transition:opacity .3s ease-in-out;
-webkit-transition:opacity .3s ease-in-out;
transition:opacity .3s ease-in-out;
}

#cryout_ajax_more_trigger:hover {
opacity:0.8;
}

.cryout_click_loading {
background:url(images/loading.gif) transparent no-repeat center center !important;
text-indent:-9999px;
}


/* shareaddy fix */ .sharedaddy ul > li { background: none !important; text-indent: 0 !important; }

/*woocommerce  fix*/ .woocommerce .product .entry-summary {clear:none;}

/* video fix */
#content embed, #content iframe {max-width:100%;}

/* WooCommerce compatibility styling */

body.woocommerce #forbottom { padding-top: 20px; }
body.woocommerce .page-title { display: inherit; margin-bottom: 20px; padding: 10px; }
body.woocommerce-page .entry-content .checkout ul > li { list-style: none outside none; }
body.woocommerce-cart .entry-content fieldset, body.woocommerce-cart #content tr td, 
body.woocommerce-cart #content tr th, body.woocommerce-cart #content thead th { border: 0; }

/* FIN! */

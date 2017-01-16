
/*
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
*/

body {
	margin: 0;
	padding: 0;
	background: #FFFFFF;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #837669;
}

h1, h2, h3 {
	margin: 0;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: normal;
	color: #649632;
}

h1 { font-size: 44px; }

h2 { font-size: 26px; }

h3 { }

p, ul, ol {
	margin-top: 0;
	line-height: 240%;
	text-align: justify;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 11px;
}

ul, ol { }

blockquote { }

a { color: #649632; }

a:hover { text-decoration: none; }

a img {
	border: none;
}

img.left {
	float: left;
	margin: 7px 30px 0 0;
}

img.right {
	float: right;
	margin: 7px 0 0 30px;
}

hr { display: none; }

.list1 {
}

.list1 li {
	float: left;
	line-height: normal;
}

.list1 li img {
	margin: 0 30px 30px 0;
}

.list1 li.alt img {
	margin-right: 0;
}

/* Header */

#header-wrapper {
}

#header {
	width: 1000px;
	height: 40px;
	margin: 0 auto;
	background: #608F30;
	border-bottom: 1px solid #2D4516;
}

/* Menu */

#menu {
	float: left;
	width: 680px;
	height: 40px;
}

#menu ul {
	margin: 0;
	padding: 13px 0 0 20px;
	list-style: none;
	line-height: normal;
}

#menu li {
	display: block;
	float: left;
}

#menu a {
	display: block;
	float: left;
	margin-right: 17px;
	padding: 5px 12px;
	text-decoration: none;
	font: 14px Georgia, "Times New Roman", Times, serif;
	color: #FFFFFF;
}

#menu a:hover { text-decoration: underline; }

#menu .current_page_item a {
	background: #39561D;
	color: #FFFFFF;
}

/* Search */

#search {
	float: right;
	width: 305px;
	height: 40px;
}

#search form {
	float: right;
	margin: 0;
	padding: 12px 20px 0 0;
}

#search fieldset {
	margin: 0;
	padding: 0;
	border: none;
}

#search input {
	float: left;
	font: 12px Georgia, "Times New Roman", Times, serif;
	border: none;
}

#search-text {
	width: 135px;
	height: 18px;
	padding: 3px 0 0 5px;
	background: #ECF9E4;
	color: #658453;
}

#search-submit {
	height: 21px;
	margin-left: 12px;
	color: #39561D;
}

/* Page */

#page {
	width: 960px;
	margin: 0 auto;
	padding: 0 20px;
	background: url(images/img01.jpg) repeat-x left top;
}

/** LOGO */

#logo {
	height: 148px;
}

#logo h1, #logo p {
	float: left;
	margin: 0;
	padding: 0;
	line-height: normal;
}

#logo h1 { padding-top: 45px; }

#logo h1 a {
	text-decoration: none;
	color: #39561D;
}

#logo h1 a:hover { text-decoration: underline; }

#logo p {
	padding: 65px 0 0 15px;
	font: italic 13px Georgia, "Times New Roman", Times, serif;
	color: #B6ACA2;
}

#logo p a {
	text-decoration: none;
	color: #B6ACA2;
}

#logo p a:hover { text-decoration: underline; }

/* Content */

#content {
	float: left;
	width: 660px;
}

/* Post */

.post {
	margin-bottom: 25px;
}

.post .title {
	margin-bottom: 3px;
	padding: 2px 0px;
	border-bottom: 1px dashed #B4F59D;
}

.post .meta {
	margin: 0 0 3px 0;
	padding: 2px 30px 2px 0px;
	font: italic 13px Georgia, "Times New Roman", Times, serif;
	color: #B6ACA2;
}

.post .meta a { color: #B6ACA2; }

.post .entry {
	padding: 25px 0px;
}

.post .links {
	margin: 0 250px 0 0;
	padding: 0 0 0 0px;
}

.post .links .comments {
}

.post .links .permalink {
	padding-left: 17px;
}

/* Sidebar */

#sidebar {
	float: right;
	width: 240px;
	margin-top: -100px;
}

#sidebar ul {
	margin: 0;
	padding: 0;
	list-style: none;
	line-height: normal;
}

#sidebar li {
	margin-bottom: 30px;
	padding: 0 0 20px 0px;
}

#sidebar li ul {
	line-height: 200%;
}

#sidebar li li {
	margin: 0;
	padding: 0;
}

#sidebar h2 {
	margin: 0 0 20px 0px;
	padding: 2px 0 2px 0px;
	border-bottom: 1px dashed #B4F59D;
	font-size: 18px;
}


#sidebar p {
	line-height: 200%;
}

/* Calendar */

#calendar {
}

#calendar caption {
	padding-bottom: 5px;
	font-weight: bold;
}

#calendar table {
	width: 100%;
	border-collapse: collapse;
	border-right: 1px solid #F5F2EF;
}

#calendar thead th {
	padding: 5px 0;
	text-align: center;
	border-top: 1px solid #F5F2EF;
	border-left: 1px solid #F5F2EF;
	background: #F5F2EF;
}

#calendar tbody td {
	padding: 5px 0;
	text-align: center;
	border-top: 1px solid #F5F2EF;
	border-left: 1px solid #F5F2EF;
}

#calendar tfoot td {
	padding: 5px;
}

#calendar tfoot #next {
	text-align: right;
}

#calendar #today {
	background: #E7F1E1;
}

/* Footer */

#footer {
	width: 1000px;
	margin: 0 auto;
	padding: 0;
	background: #333333;
}

#footer p {
	margin: 0;
	padding: 20px 0;
	text-align: center;
	line-height: normal;
	color: #B5ADA5;
}

#footer a {
	color: #B5ADA5;
}
<body>
<ul>
<li><a href="header.php"><HOME></a></li>
<li><a href="login1.php"><LOGIN></a></li>
<li><a href="register1.php"><REGISTER></a></li>
<li><a href="instruction1.php"><INSTRUCTION></a></li>
<li><a href="contact.php"><CONTACT US></a></li>
</ul>
</body>
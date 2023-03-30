
.portfolio_nav { display:none; }
.top_bar.fixed
{
	position: fixed;
	animation-name: slideDown;
	-webkit-animation-name: slideDown;	
	animation-duration: 0.5s;	
	-webkit-animation-duration: 0.5s;
	z-index: 999;
	visibility: visible !important;
	top: 0px;
}

.top_bar.fixed #menu_wrapper div .nav
{
	margin-top: 16px;
}

.top_bar.fixed #searchform
{
	margin-top: 8px;
}

.top_bar.fixed .header_cart_wrapper
{
	margin-top: 21px;
}

.top_bar.fixed #menu_wrapper div .nav > li > a
{
	padding-bottom: 24px;
}

.top_bar.fixed .logo_wrapper img
{
	max-height: 40px;
	width: auto;
}

#mobile_nav_icon
{
    display: none !important;
}


@media only screen and (max-width: 768px) {
	html[data-menu=leftmenu] .mobile_menu_wrapper
	{
		right: 0;
		left: initial;
		
		-webkit-transform: translate(360px, 0px);
		-ms-transform: translate(360px, 0px);
		transform: translate(360px, 0px);
		-o-transform: translate(360px, 0px);
	}
}


.two_cols.gallery .element:hover img, .three_cols.gallery .element:hover img, .four_cols.gallery .element:hover img, .five_cols.gallery .element:hover img, .one_half.gallery2.classic a:hover img, .one_third.gallery3.classic a:hover img, .one_fourth.gallery4.classic a:hover img
{
	-ms-transform: scale(1);
    -moz-transform: scale(1);
    -o-transform: scale(1);
    -webkit-transform: scale(1);
    transform: scale(1);
}



#page_content_wrapper .sidebar .content .sidebar_widget li h2.widgettitle, h2.widgettitle
{
	padding: 0;
	border: 0;
}

#page_caption.hasbg .page_title_wrapper
{
	background: rgba(0,0,0,0);
}

html[data-style=fullscreen] .top_bar.hasbg, .top_bar.hasbg
{
	border: 0;
}

html[data-style=fullscreen] .top_bar.hasbg, .top_bar.hasbg
{
	background: rgba(0,0,0,0);
}


hr.title_break {
    display: block;
}

.bg_gradient::after
{
	content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: -1px;
    left: 0;
    background: transparent;
    background-image: -webkit-gradient(linear,left top,left bottom,from(transparent),color-stop(60%,transparent),color-stop(66%,rgba(255,255,255,0.1)),color-stop(93%,rgba(255,255,255,0.95)),to(rgba(255,255,255,1)));
    background-image: -webkit-linear-gradient(transparent 0%,transparent 60%,rgba(255,255,255,0.1) 66%,rgba(255,255,255,0.95) 93%,rgba(255,255,255,1) 100%);
    background-image: linear-gradient(transparent 0%,transparent 60%,rgba(255,255,255,0.1) 66%,rgba(255,255,255,0.95) 93%,rgba(255,255,255,1) 100%)
}


@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:0.99; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:0.99; } }
@-ms-keyframes fadeIn { from { opacity:0; } to { opacity:0.99; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:0.99; } }
 
.fade-in {
    animation-name: fadeIn;
	-webkit-animation-name: fadeIn;
	-ms-animation-name: fadeIn;	

	animation-duration: 0.7s;	
	-webkit-animation-duration: 0.7s;
	-ms-animation-duration: 0.7s;	

	-webkit-animation-fill-mode:forwards; 
    -moz-animation-fill-mode:forwards;
    -ms-animation-fill-mode:forwards;
    animation-fill-mode:forwards;
    
    visibility: visible !important;
}







<? 
$adminemail="info@kavananich.com";
$from="info@kavananich.com"; 
$date=date("d.m.y"); 
$time=date("H:i");

$headers = "Content-type: text/html; charset=utf-8\r\n";
 
$backurl="http://kavananich.com";  
 
 
$name=$_POST['name'];  
$email=$_POST['email'];
$tel=$_POST['telephone'];
$wedd=$_POST['wedding-music'];
$resta=$_POST['restaurant-music'];
$msg=$_POST['text-area-consumer'];

 
if (!preg_match("|^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is", 
strtolower($email))) 
 {
    echo "<center>Поверніться <a 
href='javascript:history.back(1)'><B>назад</B></a>. Ви  
вказали неправильні дані"; 
} 
 
 else 
 
{
$msg='
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no">
<meta name="robots" content="none">
<style>
@media all and (max-width:500px) {
.email {
	width:	100% !important;
	padding-left:	5px !important;
	padding-right:	5px !important;
}
</style>
</head>

<body class="" style="margin-top: 0; margin-right: 0; margin-bottom: 0; margin-left: 0; padding-top: 0; padding-right: 0; padding-bottom: 0; padding-left: 0;">
    <div class="email-fillWidth email-backgroundWhite" style="min-width: 100%; width: 100%; background-color: #ffffff;">
        <table class="email email-paddingBottom0" style="width: 600px; margin-left: auto; margin-right: auto; padding-left: 20px; padding-right: 20px; padding-bottom: 0px; color: #333332; line-height: 1.4;">
            <tr>
                <td>
                    <img class="email-logo" src="https://kavananich.com/Images/Icons/kavananich-logo.svg" alt="kavananich logo" style="display: block; margin-left: auto; margin-right: auto; height: 45px; opacity: .85;">
                </td>
                <td>
                </td>
            </tr>
        </table>
    </div>
    
    <table class="email" style="width: 600px; margin-left: auto; margin-right: auto; padding-left: 20px; padding-right: 20px; padding-bottom: 20px; color: #333332; line-height: 1.4; font-family: -apple-system , BlinkMacSystemFont , &amp;apos;Segoe UI&amp;apos; , &amp;apos;Roboto&amp;apos; , &amp;apos;Ubuntu&amp;apos; , &amp;apos;Open Sans&amp;apos; , &amp;apos;Helvetica Neue&amp;apos; , sans-serif;">
        <tr>
            <td>
                <img src="https://medium.com/_/stat?event=email.opened&amp;source=email-a79212e9311a-1501426749832-welcomeDigest" width="1" height="1"><div>
                <div class="email-headline" style="font-size: 18px; font-weight: 300; line-height: 1.4; text-align: center; margin-top: 5px;">Тобі надійшов новий лист із kavananich.<br>Раджу якомога <a class="email-underline" href="#" style="color: #333332; text-decoration: underline;">швидше</a> на нього відповісти ;)
                </div>
                <hr class="email-hr" style="width: 50px; border: 0; border-bottom: 1px solid #e5e5e5; margin-top: 35px; margin-bottom: 35px;">
                
                <div class="email-sectionPreview email-sectionPreview--borderless" style="margin-top: 15px; margin-bottom: 30px; padding-top: 0; border-top: 1px solid #e5e5e5; border: 0;">
                    <div class="email-backgroundWhite email-minHeight150 email-xs-minHeight0 email-marginBottom15 email-overflowAuto email-boxShadow" style="overflow: auto; min-height: 150px; margin-bottom: 15px; box-shadow: 0 1px 3px rgba(0 , 0 , 0 , 0.1); background-color: #ffffff;">
                        <a href="mailto:'. $email. '" style="color: #333332; text-decoration: none;">
                            <div class="email-paddingTop15 email-paddingLeft15 email-paddingRight15" style="padding-top: 15px; padding-left: 15px; padding-right: 15px;">
                                <div class="email-bold email-lineHeightTight email-fontSize18" style="font-size: 18px; line-height: 1.2; font-weight: 700;">'. $name. '</div>
                                <div class="email-marginTop5 email-fontSize14 email-textGray email-xs-hide" style="font-size: 14px; color: #8e8e8e; margin-top: 5px;">'. $msg. '</div>
                            </div>
                        </a>
                        
                        <div class="email-marginTop15 email-paddingLeft15 email-paddingRight15 email-paddingBottom15" style="margin-top: 15px; padding-bottom: 15px; padding-left: 15px; padding-right: 15px;">
                            <div class="email-marginTop10 email-textGray" style="color: #8e8e8e; margin-top: 10px;">
                                <div class="email-avatarText email-avatarText--micro" style="margin-left: 60px;"><a class="email-link email-textGreen" href="mailto:'. $email. '" style="color: #b41a38;; text-decoration: none;">Написати листа</a> або <a class="email-link email-textGreen" href="tel:'. $tel. '" style="color: #b41a38; text-decoration: none;">зателефонувати</a>
                                    <div>'. $time. ' '.  $date. '</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>';
     
mail($adminemail, "Нам написав(-ла) $name", $msg, $headers);
     
          
     

$msg='<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="Generator" content="Made with Mail Designer from equinux">
	<meta name="Viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css" id="Mail Designer General Style Sheet">
		a { word-break: break-word; }
		a img { border:none; }
		img { outline:none; text-decoration:none; -ms-interpolation-mode: bicubic; }
		body { width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
		.ExternalClass { width: 100%; }
		.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
		#page-wrap { margin: 0; padding: 0; width: 100% !important; line-height: 100% !important; }
		#outlook a { padding: 0; }
		.preheader { display:none !important; }
		a[x-apple-data-detectors] { color: inherit !important; text-decoration: none !important; font-size: inherit !important; font-family: inherit !important; font-weight: inherit !important; line-height: inherit !important; }
		.a5q { display: none !important; }
		.Apple-web-attachment { vertical-align: initial !important; }
		.Apple-edge-to-edge-visual-media { margin: initial !important; max-width: initial !important; width: 100%; }
	</style>
	<style type="text/css" id="Mail Designer Mobile Style Sheet">
		@media only screen and (max-width: 580px) {
			table.email-body-wrap {
				width: 320px !important;
			}
			td.page-bg-show-thru {
				display: none !important;
			}
			table.layout-block-wrapping-table {
				width: 320px !important;
			}
			table.mso-fixed-width-wrapping-table {
				width: 320px !important;
			}
			.layout-block-full-width {
				width: 320px !important;
			}
			table.layout-block-column, table.layout-block-padded-column {
				width: 100% !important;
			}
			table.layout-block-box-padding {
				width: 100% !important;
				padding: 5px !important;
			}
			table.layout-block-horizontal-spacer {
				display: none !important;
			}
			tr.layout-block-vertical-spacer {
			   display: block !important;
			   height: 8px !important;
			}
			td.container-padding {
				display: none !important;
			}
			
			table {
				min-width: initial !important;
			}
			td {
				min-width: initial !important;
			}
			
			.desktop-only { display: none !important; }
			.mobile-only { display: block !important; }
			
			.hide {
				max-height: none !important;
				display: block !important;
				overflow: visible !important;
			}
			
			.EQ-00 { width: 15px !important; }
			.EQ-01 { width: 15px !important; }
			.EQ-02 { width: 290px !important; }
			
			.EQ-03 { width: 15px !important; }
			.EQ-04 { width: 15px !important; }
			.EQ-05 { width: 290px !important; }
		}
	</style>
	<!--[if gte mso 9]>
	<style type="text/css" id="Mail Designer Outlook Style Sheet">
		table.layout-block-horizontal-spacer {
		    display: none !important;
		}
		table {
		    border-collapse:collapse;
		    mso-table-lspace:0pt;
		    mso-table-rspace:0pt;
		    mso-table-bspace:0pt;
		    mso-table-tspace:0pt;
		    mso-padding-alt:0;
		    mso-table-top:0;
		    mso-table-wrap:around;
		}
		td {
		    border-collapse:collapse;
		    mso-cellspacing:0;
		}
	</style>
	<xml>
		<o:OfficeDocumentSettings>
			<o:AllowPNG/>
			<o:PixelsPerInch>96</o:PixelsPerInch>
		</o:OfficeDocumentSettings>
	</xml>
	<![endif]-->
<link href="https://fonts.googleapis.com/css?family=Droid+Serif:regular" rel="stylesheet" type="text/css" class="EQWebFont"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; " background="page-bg.jpg"><!--[if gte mso 9]>
<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
<v:fill type="tile" src="https://kavananich.com/email/res/page-bg.jpg" />
</v:background>
<![endif]--> 

<table width="100%" cellspacing="0" cellpadding="0" id="page-wrap" align="center" background="page-bg.jpg">
<tbody><tr>
	<td>

<table class="email-body-wrap" width="760" cellspacing="0" cellpadding="0" id="email-body" align="center">
<tbody><tr>
	<td width="30" class="page-bg-show-thru">&nbsp;<!--Left page bg show-thru --></td>
	<td width="700" id="page-body" background="background.jpg" bgcolor="#ffffff">
		
		<!--Begin of layout container -->
		<div id="eqLayoutContainer">
			
			<div class="desktop-only" width="100%">
				<!--[if !mso 15]><!--><table width="700" cellspacing="0" cellpadding="0" class="layout-block-wrapping-table" style="mso-hide:all; min-width: 700px; ">
					<tbody><tr>
						<td valign="top" class="layout-block-full-width" width="700" style="min-width: 700px; ">
							<table cellspacing="0" cellpadding="0" class="layout-block-full-width" width="700" style="min-width: 700px; ">
								<tbody><tr>
									<td width="700" style="min-width: 700px; ">
										<div class="layout-block-image">
											<img width="700" height="121" alt="" src="https://kavananich.com/email/res/image-1.png" border="0" style="line-height: 1px; display: block; width: 700px; height: 121px; ">
										</div>
									</td>
								</tr>
							</tbody></table>
						</td>
					</tr>
				</tbody></table>
			<!--<![endif]--><!--[if gte mso 9]><table width="700" cellspacing="0" cellpadding="0" class="mso-fixed-width-wrapping-table">
<tr><td valign="top" class="layout-block-full-width"><div class="layout-block-image"><img height="121" alt="" src="https://kavananich.com/email/res/image-1.png" border="0" style="line-height: 1px; display: block;" class="img-EQMST-A3DFEC46-51FA-451A-ACDD-D6ABFF7CCE7F" width="700"></img><div style="width:0px;height:0px;max-height:0;max-width:0;overflow:hidden;display:none;visibility:hidden;mso-hide:all;"></div></div></td>
</tr></table><![endif]--></div>
			
			<!--[if !mso ]><!-->
			
			<div style="display: none; max-height: 0px; overflow: hidden; " class="mobile-only hide" width="100%">
				<table width="320" cellspacing="0" cellpadding="0" class="layout-block-wrapping-table hide" style="display: none; max-height: 0px; overflow: hidden; min-width: 320px; ">
					<tbody><tr>
						<td valign="top" class="layout-block-full-width" width="320" style="min-width: 320px; ">
							<table cellspacing="0" cellpadding="0" class="layout-block-full-width hide" width="320" style="display: none; max-height: 0px; overflow: hidden; min-width: 320px; ">
								<tbody><tr>
									<td width="320" style="min-width: 320px; ">
										<div class="layout-block-image hide" style="display: none; max-height: 0px; overflow: hidden; ">
											<img width="320" height="90" alt="" src="https://kavananich.com/email/res/image-2.png" border="0" style="line-height: 1px; display: none; max-height: 0px; overflow: hidden; width: 320px; height: 90px; " class="hide">
										</div>
									</td>
								</tr>
							</tbody></table>
						</td>
					</tr>
				</tbody></table>
			</div><!--<![endif]-->
			
			<div width="100%">
				<!--[if !mso 15]><!--><table width="700" cellspacing="0" cellpadding="0" class="layout-block-wrapping-table" style="mso-hide:all; min-width: 700px; ">
					<tbody><tr>
						<td width="32" class="EQ-00" style="min-width: 32px; ">&nbsp;</td>
						<td class="EQ-02" width="636" style="min-width: 636px; ">
							<table cellspacing="0" cellpadding="0" align="left" class="layout-block-column" width="636" style="min-width: 636px; ">
								<tbody><tr>
									<td width="616" valign="top" align="left" background="box-bg-5.jpg" style="padding-left: 10px; padding-right: 10px; min-width: 616px; " bgcolor="#ffffff">
										<table cellspacing="0" cellpadding="0" class="layout-block-box-padding" width="616" style="min-width: 616px; ">
											<tbody><tr>
												<td align="left" class="layout-block-column" width="616" style="min-width: 616px; ">
													<div class="text" style="font-size: 16px; "><br><div><div style="text-align: center; line-height: 1.2; "><span style="font-size: 15px; "><b><font face="Helvetica"><br></font></b></span></div><div style="text-align: center; line-height: 1.2; "><font face="Helvetica"><span style="font-size: 15px; text-transform: uppercase; "><b>дякуємо, '. $name. '!</b></span></font></div><div style="font-size: 16px; text-align: center; line-height: 1.2; "><font face="Times" style="font-size: 14px; "><br></font></div><div style="color: rgb(0, 0, 0); font-family: Times; font-size: 15px; font-style: normal; font-weight: normal; line-height: 21px; text-align: center; text-decoration: none; "><p>&nbsp;kavananich вдячні, за те, що ви обрали саме нас!</p><p></p><p></p><p>Ми відповімо вам якомога швидше.</p><p>А тим часом ви можете відвідати наші сторінки:</p><p></p><div style="font-size: 16px; text-align: center; line-height: 1.5; "><font face="Times"><span style="font-size: 14px; "><br></span></font></div><p><img src="https://kavananich.com/email/res/facebook-logo-button.png" width="35" height="35" style="margin-right: 20px"><img src="https://kavananich.com/email/res/instagram-logo.png" width="35" height="35" style="margin-right: 20px"><img src="https://kavananich.com/email/res/youtube-symbol.png" width="35" height="35"></p></div><div style="font-size: 16px; text-align: center; line-height: 1.2; "><br></div><div style="text-align: center; "><div style="line-height: 12px; "><u><b style="font-size: 15px; "><font color="#a4a5ae" face="Helvetica"><br></font></b></u></div><div style="line-height: 12px; "><u><b style="font-size: 15px; "><font color="#a4a5ae" face="Helvetica"><br></font></b></u></div><div></div><div></div></div></div></div>
												</td>
											</tr>
										</tbody></table>
									</td>
								</tr>
							</tbody></table>
						</td>
						<td width="32" class="EQ-01" style="min-width: 32px; ">&nbsp;</td>
					</tr>
				</tbody></table>
			<!--<![endif]--><!--[if gte mso 9]><table cellspacing="0" cellpadding="0" class="layout-block-wrapping-table" width="700">
<tr><td width="32" class="layout-block-padding-left">&nbsp; </td><td width="636" class="layout-block-content-cell" valign="top" align="left"><v:rect style="width:636px;" stroke="f"><v:fill type="tile" src="https://kavananich.com/email/res/box-bg-5.jpg" color="#ffffff"></v:fill><v:textbox style="mso-fit-shape-to-text:true" inset="0,0,0,0"><div><div style="font-size:0"><table cellspacing="0" cellpadding="0" class="layout-block-box-padding">
<tr><td style="font-size:1px;" width="10">&nbsp; </td><td align="left" class="layout-block-column" width="616"><div class="text" style="font-size: 16px; font-family: sans-serif;"><br><div><div style="text-align: center; line-height: 120%;"><span style="font-size: 15px;"><b><font face="sans-serif"><br></font></b></span></div><div style="text-align: center; line-height: 120%;"><font face="sans-serif"><span style="font-size: 15px; text-transform: uppercase; "><b>ДЯКУЄМО, '. $name. '!</b></span></font></div><div style="font-size: 16px; text-align: center; line-height: 120%;"><font face="sans-serif" style="font-size: 14px;"><br></font></div><div style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 15px; font-style: normal; font-weight: normal; line-height: 21px; text-align: center; text-decoration: none;"><p> kavananich вдячні, за те, що ви обрали саме нас!</p><p></p><p></p><p>Ми відповімо вам якомога швидше.</p><p>А тим часом ви можете відвідати наші сторінки:</p><p></p></div><div style="font-size: 16px; text-align: center; line-height: 150%;"><font face="sans-serif"><span style="font-size: 14px;"><br></span></font></div><div style="font-size: 16px; text-align: center; line-height: 120%;"><br></div><div style="text-align: center;"><div style="line-height: 12px;"><u><b style="font-size: 15px;"><font color="#a4a5ae" face="sans-serif"><br></font></b></u></div><div style="line-height: 12px;"><u><b style="font-size: 15px;"><font color="#a4a5ae" face="sans-serif"><br></font></b></u></div><div></div><div></div></div></div></div></td><td style="font-size:1px;" width="10">&nbsp; </td>
</tr></table></div></div></v:textbox></v:rect></td><td width="32" class="layout-block-padding-right">&nbsp; </td>
</tr></table><![endif]--></div>
			
			<div style="background-image:url(box-bg-7.jpg); background-position: left top; " width="100%">
				<!--[if !mso 15]><!--><table width="700" cellspacing="0" cellpadding="0" class="layout-block-wrapping-table" background="box-bg-7.jpg" bgcolor="#1a1a1a" style="mso-hide:all; min-width: 700px; ">
					<tbody><tr>
						<td width="32" class="EQ-03" style="min-width: 32px; ">&nbsp;</td>
						<td class="EQ-05" width="636" style="min-width: 636px; ">
							<table cellspacing="0" cellpadding="0" align="left" class="layout-block-column" width="636" style="min-width: 636px; ">
								<tbody><tr>
									<td width="616" valign="top" align="left" background="box-bg-7.jpg" style="padding-left: 10px; padding-right: 10px; min-width: 616px; " bgcolor="#1a1a1a">
										<table cellspacing="0" cellpadding="0" class="layout-block-box-padding" width="616" style="min-width: 616px; ">
											<tbody><tr>
												<td align="left" class="layout-block-column" width="616" style="min-width: 616px; ">
													<div class="text" style="font-size: 16px; "><div style="text-align: center; line-height: 20px; "><span style="font-size: 12px; "><font face="Times, Times New Roman, Droid Serif, serif" color="#ffffff"><br></font></span></div><div style="text-align: center; line-height: 20px; "><br></div><div style="text-align: center; line-height: 20px; "><font face="Times, Times New Roman, Droid Serif, serif" color="#ffffff"><span style="font-size: 12px; ">телефон: +380 68 324 17 94&nbsp;</span></font></div><div style="text-align: center; line-height: 20px; "><font face="Times, Times New Roman, Droid Serif, serif" color="#ffffff"><span style="font-size: 12px; ">e-mail: info@kavananich.com</span></font></div><div style="text-align: center; line-height: 20px; "><span style="font-size: 12px; "><font face="Times, Times New Roman, Droid Serif, serif" color="#ffffff">© 2017 kavananich.com</font></span></div><div style="text-align: center; line-height: 20px; "><span style="font-size: 12px; "><font face="Times, Times New Roman, Droid Serif, serif" color="#ffffff"><br></font></span></div><div style="text-align: center; line-height: 20px; "><span style="font-size: 12px; "><font face="Times, Times New Roman, Droid Serif, serif" color="#ffffff"><br></font></span></div><div style="text-align: center; line-height: 20px; "><span style="font-size: 12px; "><font face="Times, Times New Roman, Droid Serif, serif" color="#ffffff"><br></font></span></div></div>
												</td>
											</tr>
										</tbody></table>
									</td>
								</tr>
							</tbody></table>
						</td>
						<td width="32" class="EQ-04" style="min-width: 32px; ">&nbsp;</td>
					</tr>
				</tbody></table>
			<!--<![endif]--><!--[if gte mso 9]><table cellspacing="0" cellpadding="0" class="layout-block-wrapping-table" width="700">
<tr><td width="32" class="layout-block-padding-left" bgcolor="#222222">&nbsp; </td><td width="636" class="layout-block-content-cell" valign="top" align="left"><v:rect style="width:636px;" stroke="f"><v:fill type="tile" src="https://kavananich.com/email/res/box-bg-7.jpg" color="#222222"></v:fill><v:textbox style="mso-fit-shape-to-text:true" inset="0,0,0,0"><div><div style="font-size:0"><table cellspacing="0" cellpadding="0" class="layout-block-box-padding">
<tr><td style="font-size:1px;" width="10">&nbsp; </td><td align="left" class="layout-block-column" width="616"><div class="text" style="font-size: 16px; font-family: sans-serif;"><div style="text-align: center; line-height: 20px;"><span style="font-size: 12px;"><font face="Times New Roman, serif" color="#ffffff"><br></font></span></div><div style="text-align: center; line-height: 20px;"><br></div><div style="text-align: center; line-height: 20px;"><font face="Times New Roman, serif" color="#ffffff"><span style="font-size: 12px;">телефон: +380 68 324 17 94 </span></font></div><div style="text-align: center; line-height: 20px;"><font face="Times New Roman, serif" color="#ffffff"><span style="font-size: 12px;">e-mail: info@kavananich.com</span></font></div><div style="text-align: center; line-height: 20px;"><span style="font-size: 12px;"><font face="Times New Roman, serif" color="#ffffff">© 2017 kavananich.com</font></span></div><div style="text-align: center; line-height: 20px;"><span style="font-size: 12px;"><font face="Times New Roman, serif" color="#ffffff"><br></font></span></div><div style="text-align: center; line-height: 20px;"><span style="font-size: 12px;"><font face="Times New Roman, serif" color="#ffffff"><br></font></span></div><div style="text-align: center; line-height: 20px;"><span style="font-size: 12px;"><font face="Times New Roman, serif" color="#ffffff"><br></font></span></div></div></td><td style="font-size:1px;" width="10">&nbsp; </td>
</tr></table></div></div></v:textbox></v:rect></td><td width="32" class="layout-block-padding-right" bgcolor="#222222">&nbsp; </td>
</tr></table><![endif]--></div>
			
		</div>
		<!--End of layout container -->
		
	</td>
	<td width="30" class="page-bg-show-thru">&nbsp;<!--Right page bg show-thru --></td>
</tr>
</tbody></table><!--email-body -->

	</td>
</tr>
</tbody></table><!--page-wrap -->

</body></html>';
    
     
mail($email, "Надіслано заявку", $msg, $headers);

 
// Зберігаємо в базу даних
 
$f = fopen("message.txt", "a+"); 
fwrite($f," \n $date $time Від $name"); 
fwrite($f,"\n $msg "); 
fwrite($f,"\n ---------------");
fclose($f); 

// Повідомлення для користувача
 
echo '<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>KAVANANICH | дякуємо!</title>
    <meta name="description" content="Дякуємо за відпрвлену заявку!">
    <meta name="keywords" content="музиканти київ, музиканти на весілля, музиканти весілля київ, кавер-група, кавер група, кавер бенд, кавер група київ, кавер група на весілля, струнний ансамбль на весілля, струнний квартет київ, музиканты на свадьбу, музиканты киев, музиканты свадьба киев, кавер группа киев, кавер-группа свадьба, kavananich, кавананіч, кава на ніч, кава наніч">
    
    <style>
        @import url("https://fonts.googleapis.com/css?family=Italianno");
        @import url("https://fonts.googleapis.com/css?family=Forum&subset=cyrillic-ext");
        @import url("https://fonts.googleapis.com/css?family=Lora:400,700&subset=cyrillic");
    </style>
    <link href="stylesheet.css" type="text/css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="Favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="Favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="Favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="Favicons/manifest.json">
    <link rel="mask-icon" href="Favicons/safari-pinned-tab.svg" color="#ffffff">
    <meta name="theme-color" content="#ffffff">
    
    <meta property="og:title" content="Кавер-група KAVANANICH в Києві"/>
    <meta property="og:description" content="Індивідуальні, неповторні обробки відомих треків сучасності створять неповторну атмосферу, вдихнуть життя у вечір та подарують Вам натхнення. Виступи в закладах, на весіллях та фестивалях"/>
    <meta property="og:image" content="https://kavananich.com/Images/Icons/kavananich-logo (2).png">
    <meta property="og:type" content="music"/>
    <meta property="og:url" content= "https://kavananich.com"/>
</head>
    
<body>
    <div class="preLoad">
        <div class="wrapper">
            <span style="letter-spacing: 5px; font-family: sans-serif;
	opacity: .7;">kavananich</span>
            <div class="cssload-loader"></div>
        </div>
    </div>
    
    <div class="content">
    <div class="section" id="thanks">
        <div class="flex">
        <div class="flex-child">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 510 510" id="checkmark" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                <g>
                    <g id="check-circle-outline">
                        <path d="M150.45,206.55l-35.7,35.7L229.5,357l255-255l-35.7-35.7L229.5,285.6L150.45,206.55z M459,255c0,112.2-91.8,204-204,204    S51,367.2,51,255S142.8,51,255,51c20.4,0,38.25,2.55,56.1,7.65l40.801-40.8C321.3,7.65,288.15,0,255,0C114.75,0,0,114.75,0,255    s114.75,255,255,255s255-114.75,255-255H459z" fill="#01ab44" opacity=".75"/>
                    </g>
                </g>
            </svg>


            <h2>Дякуємо, ', $name, '!</h2>
            <p>Щиро вдячні за ваше повідомлення! Ми зв\'яжемось із вами найближчим часом.</p>
        </div>
        </div>
        <div class="flex">
        <div class="flex-child">
            <a href="https://kavananich.com" title="Вернутись на kavananich.com"><h4 class="to-form-button">ПОВЕРНУТИСЯ НАЗАД ДО САЙТУ</h4></a>
        </div>
        </div>
        <ul class="soc">
                <li>
                    <a href="https://www.facebook.com/kavananich/" title="kavananich у facebook">
                    <svg version="1.1" id="facebook_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve"><path d="M4.1,5.9h2.5V3.3C6.7,2.6,7.1,0,10.5,0l2,0.1v2.6h-1.8c-1.3,0-1.3,0.8-1.3,1.4v1.8h2.9l-0.4,2.8H9.4V16h-3V8.7H4.1V5.9z"/></svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/kavananich/" title="kavananich в instagram">
                    <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8 0C5.827 0 5.555.01 4.702.048 3.85.088 3.27.222 2.76.42c-.526.204-.973.478-1.417.923-.445.444-.72.89-.923 1.417-.198.51-.333 1.09-.372 1.942C.008 5.555 0 5.827 0 8s.01 2.445.048 3.298c.04.852.174 1.433.372 1.942.204.526.478.973.923 1.417.444.445.89.72 1.417.923.51.198 1.09.333 1.942.372.853.04 1.125.048 3.298.048s2.445-.01 3.298-.048c.852-.04 1.433-.174 1.942-.372.526-.204.973-.478 1.417-.923.445-.444.72-.89.923-1.417.198-.51.333-1.09.372-1.942.04-.853.048-1.125.048-3.298s-.01-2.445-.048-3.298c-.04-.852-.174-1.433-.372-1.942-.204-.526-.478-.973-.923-1.417-.444-.445-.89-.72-1.417-.923-.51-.198-1.09-.333-1.942-.372C10.445.008 10.173 0 8 0zm0 1.44c2.136 0 2.39.01 3.233.048.78.036 1.203.166 1.485.276.374.145.64.318.92.598.28.28.453.546.598.92.11.282.24.705.276 1.485.038.844.047 1.097.047 3.233s-.01 2.39-.05 3.233c-.04.78-.17 1.203-.28 1.485-.15.374-.32.64-.6.92-.28.28-.55.453-.92.598-.28.11-.71.24-1.49.276-.85.038-1.1.047-3.24.047s-2.39-.01-3.24-.05c-.78-.04-1.21-.17-1.49-.28-.38-.15-.64-.32-.92-.6-.28-.28-.46-.55-.6-.92-.11-.28-.24-.71-.28-1.49-.03-.84-.04-1.1-.04-3.23s.01-2.39.04-3.24c.04-.78.17-1.21.28-1.49.14-.38.32-.64.6-.92.28-.28.54-.46.92-.6.28-.11.7-.24 1.48-.28.85-.03 1.1-.04 3.24-.04zm0 2.452c-2.27 0-4.108 1.84-4.108 4.108 0 2.27 1.84 4.108 4.108 4.108 2.27 0 4.108-1.84 4.108-4.108 0-2.27-1.84-4.108-4.108-4.108zm0 6.775c-1.473 0-2.667-1.194-2.667-2.667 0-1.473 1.194-2.667 2.667-2.667 1.473 0 2.667 1.194 2.667 2.667 0 1.473-1.194 2.667-2.667 2.667zm5.23-6.937c0 .53-.43.96-.96.96s-.96-.43-.96-.96.43-.96.96-.96.96.43.96.96z"/></svg>
                    </a>
                </li>
                <li>
                    <a class="soc-icon-last" href="https://www.youtube.com/channel/UCdTmpvazF_5PH2GI1Fk9BEw" title="kavananich на youtube">
                    <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M0 7.345c0-1.294.16-2.59.16-2.59s.156-1.1.636-1.587c.608-.637 1.408-.617 1.764-.684C3.84 2.36 8 2.324 8 2.324s3.362.004 5.6.166c.314.038.996.04 1.604.678.48.486.636 1.588.636 1.588S16 6.05 16 7.346v1.258c0 1.296-.16 2.59-.16 2.59s-.156 1.102-.636 1.588c-.608.638-1.29.64-1.604.678-2.238.162-5.6.166-5.6.166s-4.16-.037-5.44-.16c-.356-.067-1.156-.047-1.764-.684-.48-.487-.636-1.587-.636-1.587S0 9.9 0 8.605v-1.26zm6.348 2.73V5.58l4.323 2.255-4.32 2.24z"/></svg>
                    </a>
                </li>
            </ul>
    </div>
    </div>
</body>
    <script>
        document.querySelector(".preLoad").style.display = \'block\';
        document.body.style.overflow = \'hidden\';
    </script>
    
    <script src="jquery.min.js"></script>
    <script src="ytembed.js"></script>
    <script src="main.js"></script>
</html>';
     
exit; 
 } 
?>
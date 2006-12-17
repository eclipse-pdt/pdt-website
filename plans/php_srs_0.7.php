<?php  																														
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	

$App 	= new App();	
$Nav	= new Nav();	
$Menu 	= new Menu();		
include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "PHP IDE";
$pageKeywords	= "PHP IDE";
$pageAuthor		= "Yossi Leon, Zend Technologies";
	
# Paste your HTML content between the EOHTML markers!	
$html = <<<EOHTML
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0136)mhtml:file://C:\Documents and Settings\yossi.ZENDNET\Local Settings\Temporary Internet Files\Content.MSO\WordWebPagePreview\33905827.mht -->
<HTML xmlns="http://www.w3.org/TR/REC-html40" xmlns:v = 
"urn:schemas-microsoft-com:vml" xmlns:o = 
"urn:schemas-microsoft-com:office:office" xmlns:w = 
"urn:schemas-microsoft-com:office:word" xmlns:dt = 
"uuid:C2F41010-65B3-11d1-A29F-00AA00C14882"><HEAD><TITLE>Software Requirements Document</TITLE>
<META http-equiv=Content-Type content="text/html; charset=windows-1252">
<META content=Word.Document name=ProgId>
<META content="MSHTML 6.00.5730.11" name=GENERATOR>
<META content="Microsoft Word 11" name=Originator><LINK 
href="33905827_files/filelist.xml" rel=File-List><!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Subject>PHP Development Tool (PDT)</o:Subject>
  <o:Author>Guy Harpaz</o:Author>
  <o:Template>Rational Template.dot</o:Template>
  <o:LastAuthor>Users</o:LastAuthor>
  <o:Revision>11</o:Revision>
  <o:TotalTime>69</o:TotalTime>
  <o:LastPrinted>2005-07-05T16:34:00Z</o:LastPrinted>
  <o:Created>2006-11-21T16:40:00Z</o:Created>
  <o:LastSaved>2006-12-15T18:43:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>3840</o:Words>
  <o:Characters>21888</o:Characters>
  <o:Company>Zend Technologies Inc.</o:Company>
  <o:Bytes>16896</o:Bytes>
  <o:Lines>182</o:Lines>
  <o:Paragraphs>51</o:Paragraphs>
  <o:CharactersWithSpaces>25677</o:CharactersWithSpaces>
  <o:Version>11.6360</o:Version>
 </o:DocumentProperties>
 <o:CustomDocumentProperties>
  <o:Company_x0020_Name dt:dt="string" link="_Toc430444386">Objectives</o:Company_x0020_Name>
 </o:CustomDocumentProperties>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:View>Print</w:View>
  <w:Zoom>BestFit</w:Zoom>
  <w:DisplayHorizontalDrawingGridEvery>0</w:DisplayHorizontalDrawingGridEvery>
  <w:DisplayVerticalDrawingGridEvery>0</w:DisplayVerticalDrawingGridEvery>
  <w:UseMarginsForDrawingGridOrigin/>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:Compatibility>
   <w:WW6BorderRules/>
   <w:FootnoteLayoutLikeWW8/>
   <w:ShapeLayoutLikeWW8/>
   <w:AlignTablesRowByRow/>
   <w:ForgetLastTabAlignment/>
   <w:DoNotUseHTMLParagraphAutoSpacing/>
   <w:LayoutRawTableWidth/>
   <w:LayoutTableRowsApart/>
   <w:UseWord97LineBreakingRules/>
   <w:SelectEntireFieldWithStartOrEnd/>
   <w:UseWord2002TableStyleRules/>
  </w:Compatibility>
  <w:DocumentVariables>
   <w:LLX_CT_Tags_MaxCount>0</w:LLX_CT_Tags_MaxCount>
  </w:DocumentVariables>
  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
 </w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" LatentStyleCount="156">
 </w:LatentStyles>
</xml><![endif]-->
<STYLE>@font-face {
	font-family: Helvetica;
}
@font-face {
	font-family: Wingdings;
}
@font-face {
	font-family: Arial Unicode MS;
}
@font-face {
	font-family: Tahoma;
}
@font-face {
	font-family: Trebuchet MS;
}
@font-face {
	font-family: Fixed Miriam Transparent;
}
@font-face {
	font-family: Times;
}
@font-face {
	font-family: Book Antiqua;
}
@font-face {
	font-family: @Arial Unicode MS;
}
@page  {mso-footnote-separator: url("33905827_files/header.htm") fs; mso-footnote-continuation-separator: url("33905827_files/header.htm") fcs; mso-endnote-separator: url("33905827_files/header.htm") es; mso-endnote-continuation-separator: url("33905827_files/header.htm") ecs; }
@page Section1 {size: 612.0pt 792.0pt; margin: 72.0pt 72.0pt 72.0pt 72.0pt; mso-header-margin: 36.0pt; mso-footer-margin: 36.0pt; mso-header: url("33905827_files/header.htm") h1; mso-footer: url("33905827_files/header.htm") f1; mso-paper-source: 0; }
P.MsoNormal {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-style-parent: ""; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA
}
LI.MsoNormal {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-style-parent: ""; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA
}
DIV.MsoNormal {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-style-parent: ""; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA
}
H1 {
	FONT-WEIGHT: bold; FONT-SIZE: 12pt; MARGIN: 6pt 21.3pt 3pt 0cm; TEXT-INDENT: 0cm; LINE-HEIGHT: 12pt; FONT-FAMILY: Arial; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-outline-level: 1; mso-list: l0 level1 lfo1; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-font-kerning: 0pt; mso-bidi-font-weight: normal
}
H2 {
	FONT-WEIGHT: bold; FONT-SIZE: 10pt; MARGIN: 6pt 21.3pt 3pt 0cm; TEXT-INDENT: 0cm; LINE-HEIGHT: 12pt; FONT-FAMILY: Arial; mso-style-parent: "Heading 1"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-outline-level: 2; mso-list: l0 level2 lfo1; mso-bidi-font-family: "Times New Roman"; mso-bidi-font-weight: normal
}
H3 {
	FONT-WEIGHT: normal; FONT-SIZE: 10pt; MARGIN: 6pt 21.3pt 3pt 0cm; TEXT-INDENT: 0cm; LINE-HEIGHT: 12pt; FONT-STYLE: italic; FONT-FAMILY: Arial; mso-style-parent: "Heading 1"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-outline-level: 3; mso-list: l0 level3 lfo1; mso-bidi-font-family: "Times New Roman"; mso-bidi-font-style: normal
}
H4 {
	FONT-WEIGHT: normal; FONT-SIZE: 10pt; MARGIN: 6pt 21.3pt 3pt 0cm; TEXT-INDENT: 0cm; LINE-HEIGHT: 12pt; FONT-FAMILY: Arial; mso-style-parent: "Heading 1"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-outline-level: 4; mso-list: l0 level4 lfo1; mso-bidi-font-family: "Times New Roman"
}
H5 {
	FONT-WEIGHT: normal; FONT-SIZE: 11pt; MARGIN: 12pt 21.3pt 3pt 0cm; TEXT-INDENT: 0cm; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-outline-level: 5; mso-list: l0 level5 lfo1; mso-bidi-font-size: 10.0pt
}
H6 {
	FONT-WEIGHT: normal; FONT-SIZE: 11pt; MARGIN: 12pt 21.3pt 3pt 0cm; TEXT-INDENT: 0cm; LINE-HEIGHT: 12pt; FONT-STYLE: italic; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-outline-level: 6; mso-list: l0 level6 lfo1; mso-bidi-font-size: 10.0pt; mso-bidi-font-style: normal
}
P.MsoHeading7 {
	FONT-SIZE: 10pt; MARGIN: 12pt 21.3pt 3pt 0cm; TEXT-INDENT: 0cm; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-outline-level: 7; mso-list: l0 level7 lfo1
}
LI.MsoHeading7 {
	FONT-SIZE: 10pt; MARGIN: 12pt 21.3pt 3pt 0cm; TEXT-INDENT: 0cm; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-outline-level: 7; mso-list: l0 level7 lfo1
}
DIV.MsoHeading7 {
	FONT-SIZE: 10pt; MARGIN: 12pt 21.3pt 3pt 0cm; TEXT-INDENT: 0cm; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-outline-level: 7; mso-list: l0 level7 lfo1
}
P.MsoHeading8 {
	FONT-SIZE: 10pt; MARGIN: 12pt 21.3pt 3pt 0cm; TEXT-INDENT: 0cm; LINE-HEIGHT: 12pt; FONT-STYLE: italic; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-outline-level: 8; mso-list: l0 level8 lfo1; mso-bidi-font-style: normal
}
LI.MsoHeading8 {
	FONT-SIZE: 10pt; MARGIN: 12pt 21.3pt 3pt 0cm; TEXT-INDENT: 0cm; LINE-HEIGHT: 12pt; FONT-STYLE: italic; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-outline-level: 8; mso-list: l0 level8 lfo1; mso-bidi-font-style: normal
}
DIV.MsoHeading8 {
	FONT-SIZE: 10pt; MARGIN: 12pt 21.3pt 3pt 0cm; TEXT-INDENT: 0cm; LINE-HEIGHT: 12pt; FONT-STYLE: italic; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-outline-level: 8; mso-list: l0 level8 lfo1; mso-bidi-font-style: normal
}
P.MsoHeading9 {
	FONT-WEIGHT: bold; FONT-SIZE: 9pt; MARGIN: 12pt 21.3pt 3pt 0cm; TEXT-INDENT: 0cm; LINE-HEIGHT: 12pt; FONT-STYLE: italic; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-outline-level: 9; mso-list: l0 level9 lfo1; mso-bidi-font-size: 10.0pt; mso-bidi-font-weight: normal; mso-bidi-font-style: normal
}
LI.MsoHeading9 {
	FONT-WEIGHT: bold; FONT-SIZE: 9pt; MARGIN: 12pt 21.3pt 3pt 0cm; TEXT-INDENT: 0cm; LINE-HEIGHT: 12pt; FONT-STYLE: italic; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-outline-level: 9; mso-list: l0 level9 lfo1; mso-bidi-font-size: 10.0pt; mso-bidi-font-weight: normal; mso-bidi-font-style: normal
}
DIV.MsoHeading9 {
	FONT-WEIGHT: bold; FONT-SIZE: 9pt; MARGIN: 12pt 21.3pt 3pt 0cm; TEXT-INDENT: 0cm; LINE-HEIGHT: 12pt; FONT-STYLE: italic; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-outline-level: 9; mso-list: l0 level9 lfo1; mso-bidi-font-size: 10.0pt; mso-bidi-font-weight: normal; mso-bidi-font-style: normal
}
P.MsoToc1 {
	FONT-SIZE: 10pt; MARGIN: 12pt 36pt 3pt 21.3pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; tab-stops: right 468.0pt
}
LI.MsoToc1 {
	FONT-SIZE: 10pt; MARGIN: 12pt 36pt 3pt 21.3pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; tab-stops: right 468.0pt
}
DIV.MsoToc1 {
	FONT-SIZE: 10pt; MARGIN: 12pt 36pt 3pt 21.3pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; tab-stops: right 468.0pt
}
P.MsoToc2 {
	FONT-SIZE: 10pt; MARGIN: 0cm 36pt 0pt 21.6pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; tab-stops: right 468.0pt
}
LI.MsoToc2 {
	FONT-SIZE: 10pt; MARGIN: 0cm 36pt 0pt 21.6pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; tab-stops: right 468.0pt
}
DIV.MsoToc2 {
	FONT-SIZE: 10pt; MARGIN: 0cm 36pt 0pt 21.6pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; tab-stops: right 468.0pt
}
P.MsoToc3 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 43.2pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; tab-stops: 72.0pt right 468.0pt
}
LI.MsoToc3 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 43.2pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; tab-stops: 72.0pt right 468.0pt
}
DIV.MsoToc3 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 43.2pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; tab-stops: 72.0pt right 468.0pt
}
P.MsoToc4 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 30pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; mso-style-update: auto
}
LI.MsoToc4 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 30pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; mso-style-update: auto
}
DIV.MsoToc4 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 30pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; mso-style-update: auto
}
P.MsoToc5 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 40pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; mso-style-update: auto
}
LI.MsoToc5 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 40pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; mso-style-update: auto
}
DIV.MsoToc5 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 40pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; mso-style-update: auto
}
P.MsoToc6 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 50pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; mso-style-update: auto
}
LI.MsoToc6 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 50pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; mso-style-update: auto
}
DIV.MsoToc6 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 50pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; mso-style-update: auto
}
P.MsoToc7 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 60pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; mso-style-update: auto
}
LI.MsoToc7 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 60pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; mso-style-update: auto
}
DIV.MsoToc7 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 60pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; mso-style-update: auto
}
P.MsoToc8 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 70pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; mso-style-update: auto
}
LI.MsoToc8 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 70pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; mso-style-update: auto
}
DIV.MsoToc8 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 70pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; mso-style-update: auto
}
P.MsoToc9 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 80pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; mso-style-update: auto
}
LI.MsoToc9 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 80pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; mso-style-update: auto
}
DIV.MsoToc9 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 80pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-style-noshow: yes; mso-style-update: auto
}
P.MsoNormalIndent {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 45pt; TEXT-INDENT: -45pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA
}
LI.MsoNormalIndent {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 45pt; TEXT-INDENT: -45pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA
}
DIV.MsoNormalIndent {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 45pt; TEXT-INDENT: -45pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA
}
P.MsoFootnoteText {
	BORDER-RIGHT: medium none; PADDING-RIGHT: 0cm; BORDER-TOP: medium none; PADDING-LEFT: 0cm; FONT-SIZE: 8pt; PADDING-BOTTOM: 0cm; MARGIN: 2pt 21.3pt 2pt 18pt; BORDER-LEFT: medium none; TEXT-INDENT: -18pt; LINE-HEIGHT: 12pt; PADDING-TOP: 0cm; BORDER-BOTTOM: medium none; FONT-FAMILY: Helvetica; mso-pagination: lines-together; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-style-noshow: yes; mso-border-bottom-alt: solid black .75pt; mso-padding-alt: 0cm 0cm 0cm 0cm
}
LI.MsoFootnoteText {
	BORDER-RIGHT: medium none; PADDING-RIGHT: 0cm; BORDER-TOP: medium none; PADDING-LEFT: 0cm; FONT-SIZE: 8pt; PADDING-BOTTOM: 0cm; MARGIN: 2pt 21.3pt 2pt 18pt; BORDER-LEFT: medium none; TEXT-INDENT: -18pt; LINE-HEIGHT: 12pt; PADDING-TOP: 0cm; BORDER-BOTTOM: medium none; FONT-FAMILY: Helvetica; mso-pagination: lines-together; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-style-noshow: yes; mso-border-bottom-alt: solid black .75pt; mso-padding-alt: 0cm 0cm 0cm 0cm
}
DIV.MsoFootnoteText {
	BORDER-RIGHT: medium none; PADDING-RIGHT: 0cm; BORDER-TOP: medium none; PADDING-LEFT: 0cm; FONT-SIZE: 8pt; PADDING-BOTTOM: 0cm; MARGIN: 2pt 21.3pt 2pt 18pt; BORDER-LEFT: medium none; TEXT-INDENT: -18pt; LINE-HEIGHT: 12pt; PADDING-TOP: 0cm; BORDER-BOTTOM: medium none; FONT-FAMILY: Helvetica; mso-pagination: lines-together; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-style-noshow: yes; mso-border-bottom-alt: solid black .75pt; mso-padding-alt: 0cm 0cm 0cm 0cm
}
P.MsoHeader {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; tab-stops: center 216.0pt right 432.0pt
}
LI.MsoHeader {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; tab-stops: center 216.0pt right 432.0pt
}
DIV.MsoHeader {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; tab-stops: center 216.0pt right 432.0pt
}
P.MsoFooter {
	FONT-SIZE: 9pt; MARGIN: 0cm 21.3pt 0pt; LINE-HEIGHT: 12pt; FONT-FAMILY: Times; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; tab-stops: center 216.0pt right 432.0pt
}
LI.MsoFooter {
	FONT-SIZE: 9pt; MARGIN: 0cm 21.3pt 0pt; LINE-HEIGHT: 12pt; FONT-FAMILY: Times; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; tab-stops: center 216.0pt right 432.0pt
}
DIV.MsoFooter {
	FONT-SIZE: 9pt; MARGIN: 0cm 21.3pt 0pt; LINE-HEIGHT: 12pt; FONT-FAMILY: Times; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; tab-stops: center 216.0pt right 432.0pt
}
SPAN.MsoFootnoteReference {
	VERTICAL-ALIGN: super; mso-style-noshow: yes; mso-ansi-font-size: 10.0pt
}
P.MsoList {
	FONT-SIZE: 10pt; MARGIN: 0cm 18pt 0pt; TEXT-INDENT: -18pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-list: l4 level1 lfo2; tab-stops: list 18.0pt
}
LI.MsoList {
	FONT-SIZE: 10pt; MARGIN: 0cm 18pt 0pt; TEXT-INDENT: -18pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-list: l4 level1 lfo2; tab-stops: list 18.0pt
}
DIV.MsoList {
	FONT-SIZE: 10pt; MARGIN: 0cm 18pt 0pt; TEXT-INDENT: -18pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-list: l4 level1 lfo2; tab-stops: list 18.0pt
}
P.MsoTitle {
	FONT-WEIGHT: bold; FONT-SIZE: 18pt; MARGIN: 0cm 21.3pt 0pt; FONT-FAMILY: Arial; TEXT-ALIGN: center; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-bidi-font-weight: normal
}
LI.MsoTitle {
	FONT-WEIGHT: bold; FONT-SIZE: 18pt; MARGIN: 0cm 21.3pt 0pt; FONT-FAMILY: Arial; TEXT-ALIGN: center; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-bidi-font-weight: normal
}
DIV.MsoTitle {
	FONT-WEIGHT: bold; FONT-SIZE: 18pt; MARGIN: 0cm 21.3pt 0pt; FONT-FAMILY: Arial; TEXT-ALIGN: center; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-bidi-font-weight: normal
}
P.MsoBodyText {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 6pt 36pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: lines-together; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA
}
LI.MsoBodyText {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 6pt 36pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: lines-together; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA
}
DIV.MsoBodyText {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 6pt 36pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: lines-together; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA
}
P.MsoBodyTextIndent {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 36pt; COLOR: blue; LINE-HEIGHT: 12pt; FONT-STYLE: italic; FONT-FAMILY: "Times New Roman"; TEXT-DECORATION: underline; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-style: normal; text-underline: single
}
LI.MsoBodyTextIndent {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 36pt; COLOR: blue; LINE-HEIGHT: 12pt; FONT-STYLE: italic; FONT-FAMILY: "Times New Roman"; TEXT-DECORATION: underline; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-style: normal; text-underline: single
}
DIV.MsoBodyTextIndent {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 36pt; COLOR: blue; LINE-HEIGHT: 12pt; FONT-STYLE: italic; FONT-FAMILY: "Times New Roman"; TEXT-DECORATION: underline; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-style: normal; text-underline: single
}
P.MsoSubtitle {
	FONT-SIZE: 18pt; MARGIN: 0cm 21.3pt 3pt; FONT-STYLE: italic; FONT-FAMILY: Arial; TEXT-ALIGN: center; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-bidi-font-style: normal; mso-line-height-alt: 12.0pt; mso-ansi-language: EN-AU
}
LI.MsoSubtitle {
	FONT-SIZE: 18pt; MARGIN: 0cm 21.3pt 3pt; FONT-STYLE: italic; FONT-FAMILY: Arial; TEXT-ALIGN: center; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-bidi-font-style: normal; mso-line-height-alt: 12.0pt; mso-ansi-language: EN-AU
}
DIV.MsoSubtitle {
	FONT-SIZE: 18pt; MARGIN: 0cm 21.3pt 3pt; FONT-STYLE: italic; FONT-FAMILY: Arial; TEXT-ALIGN: center; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-bidi-font-style: normal; mso-line-height-alt: 12.0pt; mso-ansi-language: EN-AU
}
P.MsoBodyText2 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt; COLOR: blue; LINE-HEIGHT: 12pt; FONT-STYLE: italic; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-style: normal
}
LI.MsoBodyText2 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt; COLOR: blue; LINE-HEIGHT: 12pt; FONT-STYLE: italic; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-style: normal
}
DIV.MsoBodyText2 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt; COLOR: blue; LINE-HEIGHT: 12pt; FONT-STYLE: italic; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-style: normal
}
P.MsoBodyTextIndent2 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 36pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA
}
LI.MsoBodyTextIndent2 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 36pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA
}
DIV.MsoBodyTextIndent2 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 36pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA
}
P.MsoBodyTextIndent3 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 60pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA
}
LI.MsoBodyTextIndent3 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 60pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA
}
DIV.MsoBodyTextIndent3 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 60pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA
}
P.MsoBlockText {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 54pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA
}
LI.MsoBlockText {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 54pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA
}
DIV.MsoBlockText {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 54pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA
}
A:link {
	COLOR: blue; TEXT-DECORATION: underline; text-underline: single
}
SPAN.MsoHyperlink {
	COLOR: blue; TEXT-DECORATION: underline; text-underline: single
}
A:visited {
	COLOR: purple; TEXT-DECORATION: underline; text-underline: single
}
SPAN.MsoHyperlinkFollowed {
	COLOR: purple; TEXT-DECORATION: underline; text-underline: single
}
STRONG {
	mso-bidi-font-weight: normal
}
P.MsoDocumentMap {
	FONT-SIZE: 10pt; BACKGROUND: navy; MARGIN: 0cm 21.3pt 0pt; LINE-HEIGHT: 12pt; FONT-FAMILY: Tahoma; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-family: "Times New Roman"; mso-style-noshow: yes
}
LI.MsoDocumentMap {
	FONT-SIZE: 10pt; BACKGROUND: navy; MARGIN: 0cm 21.3pt 0pt; LINE-HEIGHT: 12pt; FONT-FAMILY: Tahoma; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-family: "Times New Roman"; mso-style-noshow: yes
}
DIV.MsoDocumentMap {
	FONT-SIZE: 10pt; BACKGROUND: navy; MARGIN: 0cm 21.3pt 0pt; LINE-HEIGHT: 12pt; FONT-FAMILY: Tahoma; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-family: "Times New Roman"; mso-style-noshow: yes
}
P {
	FONT-SIZE: 12pt; MARGIN-LEFT: 21.3pt; MARGIN-RIGHT: 21.3pt; FONT-FAMILY: "Arial Unicode MS"; mso-pagination: widow-orphan; mso-fareast-language: HE; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto
}
P.MsoAcetate {
	FONT-SIZE: 8pt; MARGIN: 0cm 21.3pt 0pt; LINE-HEIGHT: 12pt; FONT-FAMILY: Tahoma; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-noshow: yes
}
LI.MsoAcetate {
	FONT-SIZE: 8pt; MARGIN: 0cm 21.3pt 0pt; LINE-HEIGHT: 12pt; FONT-FAMILY: Tahoma; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-noshow: yes
}
DIV.MsoAcetate {
	FONT-SIZE: 8pt; MARGIN: 0cm 21.3pt 0pt; LINE-HEIGHT: 12pt; FONT-FAMILY: Tahoma; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-noshow: yes
}
P.Paragraph2 {
	FONT-SIZE: 10pt; MARGIN: 4pt 21.3pt 0pt 36pt; COLOR: black; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; TEXT-ALIGN: justify; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-ansi-language: EN-AU; mso-style-name: Paragraph2
}
LI.Paragraph2 {
	FONT-SIZE: 10pt; MARGIN: 4pt 21.3pt 0pt 36pt; COLOR: black; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; TEXT-ALIGN: justify; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-ansi-language: EN-AU; mso-style-name: Paragraph2
}
DIV.Paragraph2 {
	FONT-SIZE: 10pt; MARGIN: 4pt 21.3pt 0pt 36pt; COLOR: black; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; TEXT-ALIGN: justify; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-ansi-language: EN-AU; mso-style-name: Paragraph2
}
P.Bullet1 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 36pt; TEXT-INDENT: -21.6pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-name: Bullet1
}
LI.Bullet1 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 36pt; TEXT-INDENT: -21.6pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-name: Bullet1
}
DIV.Bullet1 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 36pt; TEXT-INDENT: -21.6pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-name: Bullet1
}
P.Bullet2 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 72pt; COLOR: navy; TEXT-INDENT: -18pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-name: Bullet2
}
LI.Bullet2 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 72pt; COLOR: navy; TEXT-INDENT: -18pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-name: Bullet2
}
DIV.Bullet2 {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 0pt 72pt; COLOR: navy; TEXT-INDENT: -18pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-name: Bullet2
}
P.Tabletext {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 6pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: lines-together; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-name: Tabletext
}
LI.Tabletext {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 6pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: lines-together; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-name: Tabletext
}
DIV.Tabletext {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 6pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: lines-together; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-name: Tabletext
}
P.MainTitle {
	FONT-WEIGHT: bold; FONT-SIZE: 16pt; MARGIN: 24pt 21.3pt 3pt; FONT-FAMILY: Arial; TEXT-ALIGN: center; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-font-kerning: 14.0pt; mso-bidi-font-weight: normal; mso-style-name: "Main Title"
}
LI.MainTitle {
	FONT-WEIGHT: bold; FONT-SIZE: 16pt; MARGIN: 24pt 21.3pt 3pt; FONT-FAMILY: Arial; TEXT-ALIGN: center; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-font-kerning: 14.0pt; mso-bidi-font-weight: normal; mso-style-name: "Main Title"
}
DIV.MainTitle {
	FONT-WEIGHT: bold; FONT-SIZE: 16pt; MARGIN: 24pt 21.3pt 3pt; FONT-FAMILY: Arial; TEXT-ALIGN: center; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-font-kerning: 14.0pt; mso-bidi-font-weight: normal; mso-style-name: "Main Title"
}
P.Paragraph1 {
	FONT-SIZE: 10pt; MARGIN: 4pt 21.3pt 0pt; FONT-FAMILY: "Times New Roman"; TEXT-ALIGN: justify; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-name: Paragraph1
}
LI.Paragraph1 {
	FONT-SIZE: 10pt; MARGIN: 4pt 21.3pt 0pt; FONT-FAMILY: "Times New Roman"; TEXT-ALIGN: justify; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-name: Paragraph1
}
DIV.Paragraph1 {
	FONT-SIZE: 10pt; MARGIN: 4pt 21.3pt 0pt; FONT-FAMILY: "Times New Roman"; TEXT-ALIGN: justify; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-name: Paragraph1
}
P.Paragraph3 {
	FONT-SIZE: 10pt; MARGIN: 4pt 21.3pt 0pt 76.5pt; FONT-FAMILY: "Times New Roman"; TEXT-ALIGN: justify; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-name: Paragraph3
}
LI.Paragraph3 {
	FONT-SIZE: 10pt; MARGIN: 4pt 21.3pt 0pt 76.5pt; FONT-FAMILY: "Times New Roman"; TEXT-ALIGN: justify; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-name: Paragraph3
}
DIV.Paragraph3 {
	FONT-SIZE: 10pt; MARGIN: 4pt 21.3pt 0pt 76.5pt; FONT-FAMILY: "Times New Roman"; TEXT-ALIGN: justify; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-name: Paragraph3
}
P.Paragraph4 {
	FONT-SIZE: 10pt; MARGIN: 4pt 21.3pt 0pt 112.5pt; FONT-FAMILY: "Times New Roman"; TEXT-ALIGN: justify; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-name: Paragraph4
}
LI.Paragraph4 {
	FONT-SIZE: 10pt; MARGIN: 4pt 21.3pt 0pt 112.5pt; FONT-FAMILY: "Times New Roman"; TEXT-ALIGN: justify; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-name: Paragraph4
}
DIV.Paragraph4 {
	FONT-SIZE: 10pt; MARGIN: 4pt 21.3pt 0pt 112.5pt; FONT-FAMILY: "Times New Roman"; TEXT-ALIGN: justify; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-name: Paragraph4
}
P.Body {
	FONT-SIZE: 10pt; MARGIN: 6pt 21.3pt 0pt; FONT-FAMILY: "Book Antiqua"; TEXT-ALIGN: justify; mso-pagination: widow-orphan; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-family: "Times New Roman"; mso-style-name: Body
}
LI.Body {
	FONT-SIZE: 10pt; MARGIN: 6pt 21.3pt 0pt; FONT-FAMILY: "Book Antiqua"; TEXT-ALIGN: justify; mso-pagination: widow-orphan; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-family: "Times New Roman"; mso-style-name: Body
}
DIV.Body {
	FONT-SIZE: 10pt; MARGIN: 6pt 21.3pt 0pt; FONT-FAMILY: "Book Antiqua"; TEXT-ALIGN: justify; mso-pagination: widow-orphan; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-family: "Times New Roman"; mso-style-name: Body
}
P.Bullet {
	FONT-SIZE: 10pt; MARGIN: 6pt 18pt 0pt 36pt; TEXT-INDENT: -18pt; FONT-FAMILY: "Book Antiqua"; TEXT-ALIGN: justify; mso-pagination: widow-orphan; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-list: l21 level1 lfo7; mso-bidi-font-family: "Times New Roman"; tab-stops: 36.0pt list 90.0pt; mso-style-name: Bullet
}
LI.Bullet {
	FONT-SIZE: 10pt; MARGIN: 6pt 18pt 0pt 36pt; TEXT-INDENT: -18pt; FONT-FAMILY: "Book Antiqua"; TEXT-ALIGN: justify; mso-pagination: widow-orphan; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-list: l21 level1 lfo7; mso-bidi-font-family: "Times New Roman"; tab-stops: 36.0pt list 90.0pt; mso-style-name: Bullet
}
DIV.Bullet {
	FONT-SIZE: 10pt; MARGIN: 6pt 18pt 0pt 36pt; TEXT-INDENT: -18pt; FONT-FAMILY: "Book Antiqua"; TEXT-ALIGN: justify; mso-pagination: widow-orphan; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-list: l21 level1 lfo7; mso-bidi-font-family: "Times New Roman"; tab-stops: 36.0pt list 90.0pt; mso-style-name: Bullet
}
P.InfoBlue {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 6pt 36pt; COLOR: blue; LINE-HEIGHT: 12pt; FONT-STYLE: italic; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: "Body Text"; mso-bidi-font-style: normal; mso-style-update: auto; mso-style-name: InfoBlue
}
LI.InfoBlue {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 6pt 36pt; COLOR: blue; LINE-HEIGHT: 12pt; FONT-STYLE: italic; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: "Body Text"; mso-bidi-font-style: normal; mso-style-update: auto; mso-style-name: InfoBlue
}
DIV.InfoBlue {
	FONT-SIZE: 10pt; MARGIN: 0cm 21.3pt 6pt 36pt; COLOR: blue; LINE-HEIGHT: 12pt; FONT-STYLE: italic; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: "Body Text"; mso-bidi-font-style: normal; mso-style-update: auto; mso-style-name: InfoBlue
}
P.BlockQuotationFirst {
	BORDER-RIGHT: medium none; PADDING-RIGHT: 0cm; BORDER-TOP: medium none; PADDING-LEFT: 0cm; FONT-WEIGHT: bold; FONT-SIZE: 10pt; BACKGROUND: #9bbee6; PADDING-BOTTOM: 0cm; MARGIN: 12pt 24.1pt 0pt 21.3pt; BORDER-LEFT: medium none; COLOR: white; PADDING-TOP: 0cm; BORDER-BOTTOM: medium none; FONT-FAMILY: "Trebuchet MS"; TEXT-ALIGN: justify; mso-pagination: widow-orphan lines-together; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-bidi-font-family: "Times New Roman"; mso-bidi-font-weight: normal; mso-padding-alt: 6.0pt 6.0pt 0cm 6.0pt; mso-style-name: "Block Quotation First"; mso-border-top-alt: solid white .75pt; mso-border-left-alt: solid white .75pt; mso-border-right-alt: solid white .75pt
}
LI.BlockQuotationFirst {
	BORDER-RIGHT: medium none; PADDING-RIGHT: 0cm; BORDER-TOP: medium none; PADDING-LEFT: 0cm; FONT-WEIGHT: bold; FONT-SIZE: 10pt; BACKGROUND: #9bbee6; PADDING-BOTTOM: 0cm; MARGIN: 12pt 24.1pt 0pt 21.3pt; BORDER-LEFT: medium none; COLOR: white; PADDING-TOP: 0cm; BORDER-BOTTOM: medium none; FONT-FAMILY: "Trebuchet MS"; TEXT-ALIGN: justify; mso-pagination: widow-orphan lines-together; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-bidi-font-family: "Times New Roman"; mso-bidi-font-weight: normal; mso-padding-alt: 6.0pt 6.0pt 0cm 6.0pt; mso-style-name: "Block Quotation First"; mso-border-top-alt: solid white .75pt; mso-border-left-alt: solid white .75pt; mso-border-right-alt: solid white .75pt
}
DIV.BlockQuotationFirst {
	BORDER-RIGHT: medium none; PADDING-RIGHT: 0cm; BORDER-TOP: medium none; PADDING-LEFT: 0cm; FONT-WEIGHT: bold; FONT-SIZE: 10pt; BACKGROUND: #9bbee6; PADDING-BOTTOM: 0cm; MARGIN: 12pt 24.1pt 0pt 21.3pt; BORDER-LEFT: medium none; COLOR: white; PADDING-TOP: 0cm; BORDER-BOTTOM: medium none; FONT-FAMILY: "Trebuchet MS"; TEXT-ALIGN: justify; mso-pagination: widow-orphan lines-together; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-style-next: Normal; mso-bidi-font-family: "Times New Roman"; mso-bidi-font-weight: normal; mso-padding-alt: 6.0pt 6.0pt 0cm 6.0pt; mso-style-name: "Block Quotation First"; mso-border-top-alt: solid white .75pt; mso-border-left-alt: solid white .75pt; mso-border-right-alt: solid white .75pt
}
P.Author {
	FONT-WEIGHT: bold; FONT-SIZE: 14pt; MARGIN: 12pt 21.3pt 12pt 0cm; COLOR: #606176; FONT-FAMILY: "Trebuchet MS"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-bidi-font-weight: normal; mso-style-name: Author
}
LI.Author {
	FONT-WEIGHT: bold; FONT-SIZE: 14pt; MARGIN: 12pt 21.3pt 12pt 0cm; COLOR: #606176; FONT-FAMILY: "Trebuchet MS"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-bidi-font-weight: normal; mso-style-name: Author
}
DIV.Author {
	FONT-WEIGHT: bold; FONT-SIZE: 14pt; MARGIN: 12pt 21.3pt 12pt 0cm; COLOR: #606176; FONT-FAMILY: "Trebuchet MS"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-bidi-font-weight: normal; mso-style-name: Author
}
P.List1 {
	FONT-SIZE: 10pt; MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-list: l18 level2 lfo3; tab-stops: list 54.0pt; mso-style-name: "List 1"
}
LI.List1 {
	FONT-SIZE: 10pt; MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-list: l18 level2 lfo3; tab-stops: list 54.0pt; mso-style-name: "List 1"
}
DIV.List1 {
	FONT-SIZE: 10pt; MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; LINE-HEIGHT: 12pt; FONT-FAMILY: "Times New Roman"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-list: l18 level2 lfo3; tab-stops: list 54.0pt; mso-style-name: "List 1"
}
P.List2 {
	FONT-SIZE: 10pt; MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; LINE-HEIGHT: 12pt; FONT-FAMILY: Times; mso-style-parent: "List 1"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-list: l14 level2 lfo40; mso-bidi-font-family: "Times New Roman"; tab-stops: list 54.0pt; mso-style-name: List2
}
LI.List2 {
	FONT-SIZE: 10pt; MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; LINE-HEIGHT: 12pt; FONT-FAMILY: Times; mso-style-parent: "List 1"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-list: l14 level2 lfo40; mso-bidi-font-family: "Times New Roman"; tab-stops: list 54.0pt; mso-style-name: List2
}
DIV.List2 {
	FONT-SIZE: 10pt; MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; LINE-HEIGHT: 12pt; FONT-FAMILY: Times; mso-style-parent: "List 1"; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-list: l14 level2 lfo40; mso-bidi-font-family: "Times New Roman"; tab-stops: list 54.0pt; mso-style-name: List2
}
P.list3 {
	FONT-SIZE: 10pt; MARGIN: 0cm 54pt 0pt 74.55pt; TEXT-INDENT: -17.85pt; LINE-HEIGHT: 12pt; FONT-FAMILY: Times; mso-style-parent: List2; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-list: l14 level2 lfo40; mso-bidi-font-family: "Times New Roman"; tab-stops: list 54.0pt; mso-style-name: "list 3"
}
LI.list3 {
	FONT-SIZE: 10pt; MARGIN: 0cm 54pt 0pt 74.55pt; TEXT-INDENT: -17.85pt; LINE-HEIGHT: 12pt; FONT-FAMILY: Times; mso-style-parent: List2; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-list: l14 level2 lfo40; mso-bidi-font-family: "Times New Roman"; tab-stops: list 54.0pt; mso-style-name: "list 3"
}
DIV.list3 {
	FONT-SIZE: 10pt; MARGIN: 0cm 54pt 0pt 74.55pt; TEXT-INDENT: -17.85pt; LINE-HEIGHT: 12pt; FONT-FAMILY: Times; mso-style-parent: List2; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-list: l14 level2 lfo40; mso-bidi-font-family: "Times New Roman"; tab-stops: list 54.0pt; mso-style-name: "list 3"
}
P.Title1 {
	FONT-WEIGHT: bold; FONT-SIZE: 24pt; MARGIN: 24pt 21.3pt 12pt 0cm; COLOR: #606173; FONT-FAMILY: "Trebuchet MS"; mso-style-parent: Title; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-bidi-font-weight: normal; mso-style-name: "Title 1"
}
LI.Title1 {
	FONT-WEIGHT: bold; FONT-SIZE: 24pt; MARGIN: 24pt 21.3pt 12pt 0cm; COLOR: #606173; FONT-FAMILY: "Trebuchet MS"; mso-style-parent: Title; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-bidi-font-weight: normal; mso-style-name: "Title 1"
}
DIV.Title1 {
	FONT-WEIGHT: bold; FONT-SIZE: 24pt; MARGIN: 24pt 21.3pt 12pt 0cm; COLOR: #606173; FONT-FAMILY: "Trebuchet MS"; mso-style-parent: Title; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-bidi-font-weight: normal; mso-style-name: "Title 1"
}
P.Title2 {
	FONT-WEIGHT: bold; FONT-SIZE: 26pt; MARGIN: 30pt 21.3pt 12pt 0cm; COLOR: white; FONT-FAMILY: "Trebuchet MS"; mso-style-parent: Title; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-bidi-font-weight: normal; mso-style-name: "Title 2"
}
LI.Title2 {
	FONT-WEIGHT: bold; FONT-SIZE: 26pt; MARGIN: 30pt 21.3pt 12pt 0cm; COLOR: white; FONT-FAMILY: "Trebuchet MS"; mso-style-parent: Title; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-bidi-font-weight: normal; mso-style-name: "Title 2"
}
DIV.Title2 {
	FONT-WEIGHT: bold; FONT-SIZE: 26pt; MARGIN: 30pt 21.3pt 12pt 0cm; COLOR: white; FONT-FAMILY: "Trebuchet MS"; mso-style-parent: Title; mso-pagination: none; mso-fareast-font-family: "Times New Roman"; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: "Times New Roman"; mso-bidi-font-weight: normal; mso-style-name: "Title 2"
}
SPAN.spelle {
	mso-style-name: spelle
}
SPAN.grame {
	mso-style-name: grame
}
DIV.Section1 {
	page: Section1
}
OL {
	MARGIN-BOTTOM: 0cm
}
UL {
	MARGIN-BOTTOM: 0cm
}
</STYLE>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-parent:"";
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Times New Roman";
	mso-ansi-language:#0400;
	mso-fareast-language:#0400;
	mso-bidi-language:#0400;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="3074"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]--></HEAD>
<BODY lang=EN-US style="tab-interval: 36.0pt" vLink=purple link=blue>
<DIV class=Section1>
<P class=Title1 style="MARGIN: 42pt 21.3pt 12pt -14.2pt"><o:p>&nbsp;</o:p></P>
<P class=Title1 
style="MARGIN: 42pt 21.3pt 12pt -14.2pt; TEXT-INDENT: 50.2pt"><SPAN 
style="mso-field-code: ' SUBJECT  \* MERGEFORMAT '"><SPAN 
style="mso-bidi-font-size: 24.0pt; mso-bidi-font-family: 'Trebuchet MS'; mso-bidi-font-weight: bold">PHP 
Development Tool (PHP IDE)</SPAN></SPAN></P>
<P class=Title1 
style="MARGIN: 42pt 21.3pt 12pt -14.2pt; TEXT-INDENT: 50.2pt"><SPAN 
style="mso-field-code: ' TITLE  \* MERGEFORMAT '">Software Requirements 
Document</SPAN><SPAN 
style="mso-bidi-font-size: 24.0pt; mso-bidi-font-family: 'Trebuchet MS'; mso-bidi-font-weight: bold"><o:p></o:p></SPAN></P><B><SPAN 
style="FONT-SIZE: 18pt; FONT-FAMILY: Arial; mso-fareast-font-family: 'Times New Roman'; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-family: 'Times New Roman'; mso-ansi-language: EN-US"><BR 
style="PAGE-BREAK-BEFORE: always" clear=all></SPAN></B>
<P class=MsoTitle style="MARGIN-LEFT: 0cm; TEXT-ALIGN: left" align=left><SPAN 
style="mso-field-code: ' TITLE  \* MERGEFORMAT '"><SPAN 
style="mso-bidi-font-size: 18.0pt; mso-bidi-font-weight: bold">Software 
Architecture Document</SPAN></SPAN><SPAN 
style="mso-bidi-font-size: 18.0pt; mso-bidi-font-weight: bold"> 
<o:p></o:p></SPAN></P>
<H1 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646302><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">1.<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Introduction</SPAN></A></H1>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646303><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">1.1<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Purpose</SPAN></A></H2>
<P class=Tabletext style="MARGIN-BOTTOM: 0pt; mso-pagination: none">This 
document is designed to specify the requirements needed for developing the PHP 
IDE – PHP Development Tool, an Eclipse.org project. </P>
<H1 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646304><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">2.<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>General Description</SPAN></A></H1>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646305><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">2.1<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Product Functions</SPAN></A></H2>
<P class=MsoBodyTextIndent2 style="MARGIN-LEFT: 21.3pt">PHP IDE is a PHP 
Integrated Development Environment, which is designed <A name=_Toc112646306>to 
answer PHP developing needs and to provide a framework for development tools of 
PHP.</A></P><SPAN style="mso-bookmark: _Toc112646306"></SPAN>
<P class=MsoNormal>PHP IDE is a collection of an Eclipse plugins and Eclipse 
features, designed for use in collaboration with existing Eclipse products or as 
a stand-alone product. PHP IDE will be based on WTP project.</P>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646307><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">2.2<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>User Objectives</SPAN></A></H2>
<P class=MsoNormal>PHP IDE’s main user objective is to answer all PHP developer 
needs. </P><B style="mso-bidi-font-weight: normal"><SPAN 
style="FONT-SIZE: 12pt; FONT-FAMILY: Arial; mso-fareast-font-family: 'Times New Roman'; mso-fareast-language: EN-US; mso-bidi-language: AR-SA; mso-bidi-font-size: 10.0pt; mso-bidi-font-family: 'Times New Roman'; mso-ansi-language: EN-US"><BR 
style="PAGE-BREAK-BEFORE: always" clear=all></SPAN></B>
<H1 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646308><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">3.<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Functional 
Requirements</SPAN></A></H1>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646309><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">3.1<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP Project (PHP 
Setting)</SPAN></A> </H2>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>General 
Info<o:p></o:p></B></SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt">A PHP project contains source code 
and related files for maintaining a PHP Application. A PHP project can be 
organized in two different ways </P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l23 level1 lfo8; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Using the project as the source 
container. </SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l23 level1 lfo8; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Using source folders inside the 
project as the source container. <B><o:p></o:p></B></SPAN></P>
<P class=List1 
style="MARGIN: 0cm 57.7pt 0pt 0cm; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><B><o:p>&nbsp;</o:p></B></P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt">A wizard is available for creating 
a PHP project. The wizard can be access by the Project Wizard in eclipse 
(File&gt;&gt;New&gt;&gt;Project). In the Project Wizard there will be a project 
type named “PHP Project” that will launch the create PHP project wizard. </P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt">When in the PHP perspective a 
Create PHP project wizard icon will be on the tool bar and a 
File&gt;&gt;New&gt;&gt;PHP Project will exist on the menu. </P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt"><B 
style="mso-bidi-font-weight: normal">Note:<o:p></o:p></B></P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt">Generally eclipse doesn’t have 
Create Project wizards under the Project menu. This is because there are so many 
different projects that can be created. </P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l29 level1 lfo9; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B 
style="mso-bidi-font-weight: normal">PHP Project 
Properties<o:p></o:p></B></SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 18pt"><B 
style="mso-bidi-font-weight: normal"><o:p>&nbsp;</o:p></B></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>PHP Version </B>– The user 
should be able to choose between PHP4 and PHP5 and by that change all related 
components: code assist, syntax coloring and PHP functions.</SPAN></P>
<P class=MsoHeader 
style="MARGIN-LEFT: 0cm; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>ASP tags support</B> - support 
ASP tags as PHP tags for all PHP actions and parsing. The following tags will be 
supported. </SPAN></P>
<P class=List1 
style="MARGIN: 0cm 57.7pt 0pt 90pt; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><SPAN 
style="mso-bidi-font-family: 'Fixed Miriam Transparent'">&lt;%@ ... 
%&gt;<o:p></o:p></SPAN></P>
<P class=List1 
style="MARGIN: 0cm 57.7pt 0pt 90pt; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><SPAN 
style="mso-bidi-font-family: 'Fixed Miriam Transparent'">&lt;% ... 
%&gt;<o:p></o:p></SPAN></P>
<P class=List1 
style="MARGIN: 0cm 57.7pt 0pt 90pt; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><SPAN 
style="mso-bidi-font-family: 'Fixed Miriam Transparent'">&lt;%= ... 
%&gt;<o:p></o:p></SPAN></P>
<P class=List1 
style="MARGIN: 0cm 57.7pt 0pt 90pt; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<P class=List1 
style="MARGIN: 0cm 57.7pt 0pt 90pt; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><B 
style="mso-bidi-font-weight: normal">Note: <o:p></o:p></B></P>
<P class=List1 
style="MARGIN: 0cm 57.7pt 0pt 90pt; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt">ASP 
tags support should be on the project level and also on the PHP preferences 
level.</P>
<P class=List1 
style="MARGIN: 0cm 57.7pt 0pt 90pt; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l7 level1 lfo10; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B 
style="mso-bidi-font-weight: normal">Default File Encoding – </B>The project 
will support a default encoding that will be used for all files created in the 
project. <B style="mso-bidi-font-weight: normal"><o:p></o:p></B></SPAN></P>
<P class=List1 
style="MARGIN-RIGHT: 57.7pt; mso-list: none; tab-stops: 36.0pt"><B 
style="mso-bidi-font-weight: normal"><o:p>&nbsp;</o:p></B></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l7 level1 lfo10; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B 
style="mso-bidi-font-weight: normal">Location – </B>The location of the project. 
The default location when a project is created is the eclipse workspace. When a 
location is specified, any directory/file at that location will be part of the 
project.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Only the developer’s data 
files will reside at the location. Eclipse internal project files will reside in 
a eclipse internal directory. </SPAN></P>
<P class=List1 
style="MARGIN: 0cm 57.7pt 0pt 72pt; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><B 
style="mso-bidi-font-weight: normal"><o:p>&nbsp;</o:p></B></P>
<P class=List1 
style="MARGIN: 0cm 57.7pt 0pt 0cm; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><B 
style="mso-bidi-font-weight: normal"><o:p>&nbsp;</o:p></B></P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt">The PHP project will support a 
properties menu item to display the properties of a project.</P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l36 level1 lfo15; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B 
style="mso-bidi-font-weight: normal">Adding files to a 
project<o:p></o:p></B></SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt">Files can be added to a project by 
the following methods. </P>
<P class=MsoNormal style="MARGIN-LEFT: 72pt">Import from File System</P>
<P class=MsoNormal style="MARGIN-LEFT: 72pt">Drag and Drop (according to Eclipse 
behavior)</P>
<P class=MsoNormal style="MARGIN-LEFT: 72pt">Copy/Paste</P>
<P class=MsoNormal style="MARGIN-LEFT: 72pt">Using the Project Create Wizard</P>
<P class=MsoNormal style="MARGIN-LEFT: 72pt">New PHP file Wizard</P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt">Any file that is not added to a 
project using the “New PHP file Wizard” will be given the default file encoding 
of the project. </P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l6 level1 lfo38; tab-stops: list 49.5pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-spacerun: yes">&nbsp;</SPAN><B 
style="mso-bidi-font-weight: normal">Team Support<o:p></o:p></B></SPAN></P>
<P class=MsoBlockText>A project can be saved, retrieved, and synchronized with a 
CVS repository. All the properties of the project and files in the project 
(encoding, version, etc) will be saved, retrieved, and synchronized with the 
repository. </P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l2 level1 lfo11; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B 
style="mso-bidi-font-weight: normal">Project Menu 
Items<o:p></o:p></B></SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l40 level2 lfo12; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B 
style="mso-bidi-font-weight: normal">Project Menu 
Items<o:p></o:p></B></SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">These are the menu items that 
affect a PHP project. There may be other items on the Project Menu because 
eclipse supports other types of projects. The Project Menu items vary based on 
the project selected. </P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Open Project</P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Close Project</P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Properties</P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Build All</P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Build Project</P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Build Working Set</P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Build Automatically</P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">During typing the PHP inspector is 
run and highlighting of errors (a squiggly line under the code) occurs for the 
file. Errors detected during typing are not displayed in the problems view. The 
build options in the project menu determine when the eclipse builder is run. The 
eclipse builder is potentially a long running operation. Depending on the 
changes made, every file in the workspace could be rebuilt. Eclipse attempts to 
determine the files that have changed based on the project dependencies. The 
eclipse builder is run as a background task so that the developer can continue 
to work. Problems detected during the build phase will show up in the problems 
view and will be highlighted using a squiggly line under the code. </P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">When a project is closed, it can no 
longer be changed and its resources no longer appear in the Package Explorer, 
Project Outline View, etc. To re-open the project, select the project in the PHP 
Explorer View and click on Open Project. Eclipse doesn’t have a concept of .prj 
files.<SPAN style="mso-spacerun: yes">&nbsp;&nbsp; </SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 72pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l40 level2 lfo12; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Right Click Menu 
Items<o:p></o:p></B></SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Following are the right click menu 
items for a project. Some of the menu items may be handled by the low level 
eclipse infrastructure and not require implementation by the PHP project. Other 
are open issues to be resolved, but are listed here since they will show up in 
the Menu unless some specific action is taken to turn them off. </P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Copy</P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Paste</P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Move </P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Rename </P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Import – Project</P>
<P class=MsoNormal style="MARGIN-LEFT: 108pt">Eclipse PHP Project </P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Export - Project </P>
<P class=MsoNormal style="MARGIN-LEFT: 108pt">Eclipse PHP Project</P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Refresh</P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Close project</P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Run As </P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Debug As </P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Source – Format document</P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Team</P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Restore from local history</P>
<P class=MsoNormal style="MARGIN-LEFT: 90pt">Properties</P>
<P class=List1 
style="MARGIN: 0cm 57.7pt 0pt 0cm; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B 
style="mso-bidi-font-weight: normal">New Project Wizard</B> – contains all the 
information and initial preferences for building a project.</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 57.7pt 0pt 0cm; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Project name</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Project location or Workspace 
(default)</SPAN></P>
<P class=List2 
style="MARGIN: 0cm 57.7pt 0pt 72pt; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt">When 
a location is specified, any directory/file at that location will be part of the 
project.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Only the developer’s data 
files will reside at the location. Eclipse internal project files will reside in 
a eclipse internal directory. </P>
<P class=List2 
style="MARGIN-LEFT: 72pt; mso-list: l27 level1 lfo14; tab-stops: 36.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP version</SPAN></P>
<P class=List2 
style="MARGIN-LEFT: 72pt; mso-list: l27 level1 lfo14; tab-stops: 36.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Include path values</SPAN></P>
<P class=List2 
style="MARGIN: 0cm 57.7pt 0pt 72pt; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646310><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">3.2<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP file</SPAN></A></H2>
<P class=MsoNormal>The ability to create a PHP file with the following 
properties will be supported. </P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<P class=List2 style="MARGIN-RIGHT: 36pt; mso-list: l26 level1 lfo13"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B 
style="mso-bidi-font-weight: normal">New PHP File Wizard</B> – Creates a PHP 
file in the project. </SPAN></P>
<P class=List2 
style="MARGIN-LEFT: 72pt; mso-list: l5 level1 lfo16; tab-stops: 36.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>File Name</SPAN></P>
<P class=List2 
style="MARGIN-LEFT: 72pt; mso-list: l5 level1 lfo16; tab-stops: 36.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Location – relative to the 
project</SPAN></P>
<P class=List2 
style="MARGIN-LEFT: 72pt; mso-list: l5 level1 lfo16; tab-stops: 36.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>File Template – Template to 
use.</SPAN></P>
<P class=List2 
style="MARGIN-LEFT: 72pt; mso-list: l5 level1 lfo16; tab-stops: 36.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Advanced Options</SPAN></P>
<P class=List2 
style="MARGIN: 0cm 57.7pt 0pt 90pt; mso-list: l32 level2 lfo17; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Link to file in the file system 
(All the file create wizards in eclipse seem to have this option.)</SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt">When in the PHP perspective, a New 
PHP File<B style="mso-bidi-font-weight: normal"> </B>wizard icon will be on the 
tool bar and a File&gt;&gt;New&gt;&gt;PHP File will exist on the menu. </P>
<P class=List2 
style="TEXT-INDENT: 0cm; MARGIN-RIGHT: 57.7pt; mso-list: none; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<P class=List2 style="MARGIN-RIGHT: 36pt; mso-list: l26 level1 lfo13"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B 
style="mso-bidi-font-weight: normal">Options and Menu items on a PHP 
file<o:p></o:p></B></SPAN></P>
<P class=List2 
style="MARGIN: 0cm 68.7pt 0pt 72pt; mso-list: l37 level1 lfo39; tab-stops: list 57.3pt 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Open </SPAN></P>
<P class=List2 
style="MARGIN: 0cm 68.7pt 0pt 72pt; mso-list: l37 level1 lfo39; tab-stops: list 57.3pt 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Open With – default the PHP 
editor</SPAN></P>
<P class=List2 
style="MARGIN: 0cm 68.7pt 0pt 72pt; mso-list: l37 level1 lfo39; tab-stops: list 57.3pt 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Copy</SPAN></P>
<P class=List2 
style="MARGIN: 0cm 68.7pt 0pt 72pt; mso-list: l37 level1 lfo39; tab-stops: list 57.3pt 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Paste</SPAN></P>
<P class=List2 
style="MARGIN: 0cm 68.7pt 0pt 72pt; mso-list: l37 level1 lfo39; tab-stops: list 57.3pt 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Delete</SPAN></P>
<P class=List2 
style="MARGIN: 0cm 68.7pt 0pt 72pt; mso-list: l37 level1 lfo39; tab-stops: list 57.3pt 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Source – Format File </SPAN></P>
<P class=List2 
style="MARGIN: 0cm 68.7pt 0pt 72pt; mso-list: l37 level1 lfo39; tab-stops: list 57.3pt 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Refactor - Rename/Move (Will only 
rename or move the file.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Will not 
do any fix up of dependencies). </SPAN></P>
<P class=List2 
style="MARGIN: 0cm 68.7pt 0pt 72pt; mso-list: l37 level1 lfo39; tab-stops: list 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Refresh</SPAN></P>
<P class=List2 
style="MARGIN: 0cm 68.7pt 0pt 72pt; mso-list: l37 level1 lfo39; tab-stops: list 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Team Options</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 68.7pt 0pt; TEXT-INDENT: -14.7pt; mso-list: l37 level1 lfo39; tab-stops: list 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Comparing resources with local 
history or CVS</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 68.7pt 0pt; TEXT-INDENT: -14.7pt; mso-list: l37 level1 lfo39; tab-stops: list 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Replacing a resource with local 
history or CVS</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 68.7pt 0pt; TEXT-INDENT: -14.7pt; mso-list: l37 level1 lfo39; tab-stops: list 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Restoring deleted resources from 
local history or CVS</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 68.7pt 0pt; TEXT-INDENT: -14.7pt; mso-list: l37 level1 lfo39; tab-stops: list 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Supporting local history 
preferences (Preference wizard is supported by the eclipse Workbench not the 
editor).</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 68.7pt 0pt; TEXT-INDENT: -14.7pt; mso-list: l37 level1 lfo39; tab-stops: list 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Properties – Properties of the 
file</SPAN></P>
<P class=List2 
style="MARGIN: 0cm 57.7pt 0pt 36pt; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<P class=List1 
style="TEXT-INDENT: 0cm; MARGIN-RIGHT: 57.7pt; mso-list: none; tab-stops: 36.0pt">A 
Local history of a file is maintained when you create or modify a file. Each 
time you edit and save a file,&nbsp;a copy of it is saved. This allows you to 
compare your current file state to a previous state, or replace the file with a 
previous state.&nbsp;Each state in the local history is identified by the date 
and time the file was saved.&nbsp;&nbsp;</P>
<P class=List1 
style="TEXT-INDENT: 0cm; MARGIN-RIGHT: 57.7pt; mso-list: none; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<P class=List1 
style="TEXT-INDENT: 0cm; MARGIN-RIGHT: 57.7pt; mso-list: none; tab-stops: 36.0pt">If 
the project is being maintained in CVS, the option to compare, replace, restore, 
etc the file from CVS will be supported. Anytime a PHP file is synchronized with 
a CVS repository, the properties of a file are transferred (encoding). </P>
<P class=List2 
style="MARGIN: 0cm 57.7pt 0pt 36pt; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646311><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">3.3<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP Inspector / Code 
Builder</SPAN></A> </H2>
<P class=MsoNormal>The PHP Inspector is responsible for analyzing all PHP code 
files in an Eclipse Platform. </P>
<P class=MsoNormal>The PHP inspector should inspect the following:</P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>PHP 
Elements:<o:p></o:p></B></SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP classes – including the 
following data:</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>File name</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Positions:</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt; mso-list: l15 level4 lfo31; tab-stops: list 126.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Class start position (offset + line 
number) </SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt; mso-list: l15 level4 lfo31; tab-stops: list 126.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Class end position (offset + line 
number) </SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt; mso-list: l15 level4 lfo31; tab-stops: list 126.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Class name position (offset + line 
number) </SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Modifier: Class / Interface / 
Abstract</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Abstract / interface classes data 
that the current class implements / extends from</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Internal variables data</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Internal functions data</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP functions – including the 
following data:</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>File name</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Positions:</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt; mso-list: l15 level4 lfo31; tab-stops: list 126.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Function start position (offset + 
line number) </SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt; mso-list: l15 level4 lfo31; tab-stops: list 126.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Function end position (offset + 
line number) </SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt; mso-list: l15 level4 lfo31; tab-stops: list 126.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Function name position (offset + 
line number) </SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Function parameters names and 
types</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Function return value (from the 
PHPDoc inspection)</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP constants - including the 
following data:</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>File name</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Positions:</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt; mso-list: l15 level4 lfo31; tab-stops: list 126.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Constant start position (offset + 
line number) </SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt; mso-list: l15 level4 lfo31; tab-stops: list 126.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Constant end position (offset + 
line number) </SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Constant value</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP include statements - including 
the following data:</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>File name</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Positions:</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt; mso-list: l15 level4 lfo31; tab-stops: list 126.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Include statement start position 
(offset + line number) </SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt; mso-list: l15 level4 lfo31; tab-stops: list 126.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Include statement end position 
(offset + line number) </SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Included file name value</SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 0cm"><o:p>&nbsp;</o:p></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>PHPDoc<o:p></o:p></B></SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>The Inspector should also inspect 
PHPDoc comments for Variables, parameter types and function return values (See 
PHPDoc support for more details). </SPAN></P>
<P class=List1 
style="MARGIN: 0cm 57.7pt 0pt 36pt; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><B><o:p>&nbsp;</o:p></B></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>PHP warnings / 
errors<o:p></o:p></B></SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Syntax Errors – The parser should 
create a list of all syntax error in the code. The errors shouldn’t influence or 
interrupt the process of the parser for further syntax error occurrences. Syntax 
errors examples:</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>“Syntax error: expecting 
;”</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>“Syntax error: Unexpected end of 
line”</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>“Syntax error: unexpected $a, 
expecting ;”</SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 0cm"><o:p>&nbsp;</o:p></P>
<P class=Tabletext 
style="MARGIN-BOTTOM: 0pt; mso-pagination: none"><B>Note:<o:p></o:p></B></P>
<P class=MsoNormal>The Inspector should support both PHP 4 and PHP 5 (see PHP 
Project – PHP Version).</P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<P class=MsoNormal><B>Note:<o:p></o:p></B></P>
<P class=MsoNormal>The Inspector implementation should support frequent changes 
in the PHP Engine parser and scanner.</P>
<P class=MsoNormal style="MARGIN-LEFT: 0cm"><o:p>&nbsp;</o:p></P>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646312><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">3.4<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP Functions – PHP Language 
Data</SPAN></A> </H2>
<P class=MsoNormal>This is the source of all PHP language classes, functions and 
constants. This data should come in the format of PHP files that can be 
editable.</P>
<P class=MsoNormal>The file should be located as part of the plugin/installation 
directory in a lib directory. </P>
<P class=MsoNormal>Two files should be included:</P>
<P class=MsoNormal 
style="MARGIN: 0cm 75.3pt 0pt; TEXT-INDENT: -18pt; mso-list: l11 level1 lfo32; tab-stops: list 75.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>phpFunctions4.php – includes all 
PHP4 language data</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 75.3pt 0pt; TEXT-INDENT: -18pt; mso-list: l11 level1 lfo32; tab-stops: list 75.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>phpFunctions5.php – includes all 
PHP5 language data</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l16 level1 lfo33; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Any change in these files will 
effect the following in all projects:</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 75.3pt 0pt; TEXT-INDENT: -18pt; mso-list: l28 level1 lfo34; tab-stops: list 75.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Code assist</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 75.3pt 0pt; TEXT-INDENT: -18pt; mso-list: l28 level1 lfo34; tab-stops: list 75.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP functions view</SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 0cm"><o:p>&nbsp;</o:p></P>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646313><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">3.5<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP Editor</SPAN></A> </H2>
<P class=MsoNormal>PHP Editor should extend the Web Tools text editor and should 
inherit all its capabilities and actions.</P>
<P class=MsoNormal>The PHP Editor should allow working on more then one 
programming language at the same time (PHP &amp; HTML).</P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Syntax Coloring</B> – PHP Editor 
should color several languages at the same time. The Syntax Coloring should be 
customizable through the Editor preferences.</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Should support both PHP 4 and PHP 5 
(see PHP Project – PHP Version)</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Should color: default text, 
keywords, variables, numbers, strings, herdocs, Single-line comments, Multi-line 
comments, PHP tags, function names.</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHPDoc: tags, variables…</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>HTML, XML, JavaScript, CSS – 
inherits from Web Tools editor?</SPAN></P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Code Assist </B>– the Code 
assist should be customizable through the Editor 
preferences.<B><o:p></o:p></B></SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP &amp; PHPDoc</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Insertion options:</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt 140.3pt; mso-list: l25 level4 lfo5; tab-stops: list 140.3pt"><![if !supportLists]><SPAN 
style="mso-list: Ignore">-<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN><![endif]><SPAN dir=ltr>Completion insertion / override</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt 140.3pt; mso-list: l25 level4 lfo5; tab-stops: list 140.3pt"><![if !supportLists]><SPAN 
style="mso-list: Ignore">-<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN><![endif]><SPAN dir=ltr>Insert single proposals 
automatically</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Supports both PHP 4 and PHP 5 (see 
PHP Project – PHP Version)</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Support Auto Activate if possible 
and suitable for Eclipse (with size limit and time delay)</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Suggests and completes classes, 
functions, variables, constants and keywords, PHPDoc tags, PHPDoc 
variables</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Shows function signature while 
calling the function</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Additional PHP options:</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt 140.3pt; mso-list: l1 level4 lfo6; tab-stops: list 140.3pt"><![if !supportLists]><SPAN 
style="mso-list: Ignore">-<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN><![endif]><SPAN dir=ltr>Show variables from other 
files.</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt 140.3pt; mso-list: l1 level4 lfo6; tab-stops: list 140.3pt"><![if !supportLists]><SPAN 
style="mso-list: Ignore">-<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN><![endif]><SPAN dir=ltr>Determine object type from other 
files</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt 140.3pt; mso-list: l1 level4 lfo6; tab-stops: list 140.3pt"><![if !supportLists]><SPAN 
style="mso-list: Ignore">-<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN><![endif]><SPAN dir=ltr>Filters:</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 162pt 0pt 176.3pt; mso-list: l12 level5 lfo4; tab-stops: list 176.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Show / hide constants 
assist</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 162pt 0pt 176.3pt; mso-list: l12 level5 lfo4; tab-stops: list 176.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Case sensitive for 
constants</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 162pt 0pt 176.3pt; mso-list: l12 level5 lfo4; tab-stops: list 176.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Show / hide class names in Global 
Completion list</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>HTML</SPAN><SPAN 
style="FONT-FAMILY: Arial"><o:p></o:p></SPAN></P>
<P class=List2 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: 0cm; mso-list: l22 level1 lfo41; tab-stops: list 103.5pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Code Assist for HTML in a PHP file 
will be supported. </SPAN></P>
<P class=List2 
style="MARGIN: 0cm 57.7pt 0pt 90pt; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Parameter 
Hints<o:p></o:p></B></SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Support Auto Activate after ‘(‘, 
‘,’ and after relevant code completion</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Option to show function signature 
while calling the function</SPAN></P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Templates 
<o:p></o:p></B></SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Inherits capabilities from default 
Editor</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Supported contexts: PHP, PHPDoc, 
HTML, JavaScript and CSS.</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Support import and export 
</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Support the following Templates 
variables:</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>YEAR – current year</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>WORD_SELECTION – selected 
word</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>USER – user name</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>TIME – current time</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>FILE – current file</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>ENCLOSING_PROJECT – current 
project</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>ENCLOSING_CLASS – current 
class</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>ENCLOSING_METHOD_ARGUMENTS – list 
of method arguments names</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>ENCLOSING_METHOD – current 
method</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>DATE – current date</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>CURSOR – cursor position</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>COLLECTION – collection’s name 
</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>ARRAY_LYPE – array’s type 
name</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>ARRAY_ELEMENT – current array’s 
element</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>ARRAY – array’s name</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>And more…</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Appear as part of the code assist 
with its name in the list. The available templates should be according to the 
context of the completion</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>The optional templates context are: 
PHP, PHPDoc, New PHP.</SPAN></P>
<P class=MsoHeader 
style="MARGIN-LEFT: 54pt; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<P class=MsoHeader style="MARGIN-LEFT: 54pt; tab-stops: 36.0pt"><SPAN 
style="COLOR: blue"><o:p>&nbsp;</o:p></SPAN></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>File 
Templates<o:p></o:p></B></SPAN></P>
<P class=List1 style="MARGIN-LEFT: 70.9pt; tab-stops: list 70.9pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>File templates which were defined 
in the templates table as “New PHP” will appear in the “New PHP File 
Wizard”.</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 57.7pt 0pt 52.9pt; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Code 
Folding<o:p></o:p></B></SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Set initialize folding options in 
Preferences should include</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Fold all non PHP Code</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Fold PHP code</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt 140.3pt; mso-list: l1 level4 lfo6; tab-stops: list 140.3pt"><![if !supportLists]><SPAN 
style="mso-list: Ignore">-<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN><![endif]><SPAN dir=ltr>Fold PHPDoc comments</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt 140.3pt; mso-list: l1 level4 lfo6; tab-stops: list 140.3pt"><![if !supportLists]><SPAN 
style="mso-list: Ignore">-<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN><![endif]><SPAN dir=ltr>Fold Classes</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt 140.3pt; mso-list: l1 level4 lfo6; tab-stops: list 140.3pt"><![if !supportLists]><SPAN 
style="mso-list: Ignore">-<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN><![endif]><SPAN dir=ltr>Fold methods</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Support the following actions from 
menus or key bindings:</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Fold all</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Expand all</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 57.7pt 0pt 86.3pt; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Code Hovers</B> – as in Eclipse 
JDT, supports combined hover, variables value, PHPDoc and source. Hover will 
support</SPAN></P>
<P class=List1 style="MARGIN: 0cm 90pt 0pt; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Simple text hover</SPAN></P>
<P class=List1 style="MARGIN: 0cm 90pt 0pt; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Debug variable hover</SPAN></P>
<P class=List1 style="MARGIN: 0cm 90pt 0pt; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Syntax error hover</SPAN></P>
<P class=List1 style="MARGIN: 0cm 90pt 0pt; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Got to source hover and 
link</SPAN></P>
<P class=List1 style="MARGIN: 0cm 90pt 0pt; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Extension point for additional 
hovers</SPAN></P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Typing<o:p></o:p></B></SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Automatically close text</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP: </SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt 140.3pt; mso-list: l1 level4 lfo6; tab-stops: list 140.3pt"><![if !supportLists]><SPAN 
style="mso-list: Ignore">-<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN><![endif]><SPAN dir=ltr>Strings ‘ and “</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt 140.3pt; mso-list: l1 level4 lfo6; tab-stops: list 140.3pt"><![if !supportLists]><SPAN 
style="mso-list: Ignore">-<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN><![endif]><SPAN dir=ltr>Parentheses, squares, and brackets (, 
&lt;, [</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt 140.3pt; mso-list: l1 level4 lfo6; tab-stops: list 140.3pt"><![if !supportLists]><SPAN 
style="mso-list: Ignore">-<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN><![endif]><SPAN dir=ltr>Brackets {</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt 140.3pt; mso-list: l1 level4 lfo6; tab-stops: list 140.3pt"><![if !supportLists]><SPAN 
style="mso-list: Ignore">-<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN><![endif]><SPAN dir=ltr>Block Comments</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 126pt 0pt 140.3pt; mso-list: l1 level4 lfo6; tab-stops: list 140.3pt"><![if !supportLists]><SPAN 
style="mso-list: Ignore">-<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN><![endif]><SPAN dir=ltr>PHPDocs (add PHPDoc tags)</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>HTML, CSS and JavaScript: inherits 
capabilities from Web Tools Editor</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Indentation</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>When pasting - Adjust 
indentation</SPAN></P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Matching Brackets</B> – The 
matching brackets should be customizable through the Editor preferences, should 
support:</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>HTML HTML, XML, JavaScript, CSS – 
inherits from Web Tools editor?</SPAN></P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Comment / Uncomment Code</B> – 
context add or remove comments, should support:</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Single-line comments</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 36pt 0pt 104.3pt; mso-list: l12 level3 lfo4; tab-stops: list 104.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Multi-line comments</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>HTML and JavaScript</SPAN></P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt"><B>Note: <o:p></o:p></B></P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt">The operation should fail if the 
beginning and the end are in different contexts (start: PHP, end: HTML)</P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Report problems as you type 
</B>- link to inspection -&gt; errors / warnings<B><o:p></o:p></B></SPAN></P>
<P class=List1 
style="MARGIN-RIGHT: 57.7pt; mso-list: none; tab-stops: 36.0pt"><B><o:p>&nbsp;</o:p></B></P>
<P class=List1 style="mso-list: l34 level1 lfo22"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Opening Files in the 
Editor<o:p></o:p></B></SPAN></P>
<P class=List1 
style="TEXT-INDENT: 0cm; MARGIN-RIGHT: 57.7pt; mso-list: none; tab-stops: 36.0pt"><SPAN 
style="mso-bidi-font-weight: bold">A file can be opened in an editor by the 
following methods.<o:p></o:p></SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l31 level1 lfo26; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="mso-bidi-font-weight: bold"><SPAN style="mso-list: Ignore">1.<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Clicking the file in a view (project, search, 
etc.)<o:p></o:p></SPAN></SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l31 level1 lfo26; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="mso-bidi-font-weight: bold"><SPAN style="mso-list: Ignore">2.<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Right-clicking the file in the Navigator view 
and then selecting Open from the pop-up menu <o:p></o:p></SPAN></SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l31 level1 lfo26; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="mso-bidi-font-weight: bold"><SPAN style="mso-list: Ignore">3.<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Dragging and dropping the file from a view to 
the editor area<o:p></o:p></SPAN></SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l31 level1 lfo26; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="mso-bidi-font-weight: bold"><SPAN style="mso-list: Ignore">4.<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Doubling-clicking a bookmark that is 
associated with that file. <o:p></o:p></SPAN></SPAN></P>
<P class=List1 
style="MARGIN-RIGHT: 57.7pt; mso-list: none; tab-stops: 36.0pt"><B><o:p>&nbsp;</o:p></B></P>
<P class=List1 style="mso-list: l34 level1 lfo22"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Search 
Options<o:p></o:p></B></SPAN></P>
<P class=List1 
style="TEXT-INDENT: 0cm; MARGIN-RIGHT: 57.7pt; mso-list: none; tab-stops: 36.0pt"><SPAN 
style="mso-bidi-font-weight: bold">The PHP editor will have a wizard that will 
support the following search options<o:p></o:p></SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Classes</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Functions</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Constants</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Variables</SPAN></P>
<P class=List1 
style="TEXT-INDENT: 0cm; MARGIN-RIGHT: 57.7pt; mso-list: none; tab-stops: 36.0pt">The 
scope of files searched can be limited to Workspace, Selected Resources, 
Enclosing Projects, and Working Set. </P>
<P class=List1 
style="MARGIN: 0cm 57.7pt 0pt 0cm; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><SPAN 
style="mso-bidi-font-weight: bold"><o:p>&nbsp;</o:p></SPAN></P>
<P class=List1 
style="TEXT-INDENT: 0cm; MARGIN-RIGHT: 57.7pt; mso-list: none; tab-stops: 36.0pt"><SPAN 
style="mso-bidi-font-weight: bold">When the search is completed the PHP will 
open a search view with the results. Files when opened in the editor will be 
annotated with the search result. <o:p></o:p></SPAN></P>
<P class=List1 
style="MARGIN: 0cm 57.7pt 0pt 0cm; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<P class=List1 style="mso-list: l34 level1 lfo22"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN 
dir=ltr><B>Annotation<o:p></o:p></B></SPAN></P>
<P class=List1 
style="TEXT-INDENT: 0cm; MARGIN-RIGHT: 57.7pt; mso-list: none; tab-stops: 36.0pt">Annotation 
is a piece of information attached to a certain region of a text document. 
Annotations are shown in a vertical ruler on the left side of the text, an 
overview ruler on the right side of the text,&nbsp;as a highlighted word or as 
colored squigglies underneath text. Annotations are largely dependent on the 
kind of document being edited. The following annotations will be supported:</P>
<P class=List1 
style="TEXT-INDENT: 0cm; MARGIN-RIGHT: 57.7pt; mso-list: none; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<P class=List1 
style="MARGIN: 0cm 72pt 0pt; mso-list: l9 level1 lfo23; tab-stops: list 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Errors<o:p></o:p></SPAN></SPAN></P>
<P class=List1 
style="MARGIN: 0cm 72pt 0pt; mso-list: l9 level1 lfo23; tab-stops: list 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Warnings<o:p></o:p></SPAN></SPAN></P>
<P class=List1 
style="MARGIN: 0cm 72pt 0pt; mso-list: l9 level1 lfo23; tab-stops: list 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Info<o:p></o:p></SPAN></SPAN></P>
<P class=List1 
style="MARGIN: 0cm 72pt 0pt; mso-list: l9 level1 lfo23; tab-stops: list 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Search Results<o:p></o:p></SPAN></SPAN></P>
<P class=List1 
style="MARGIN: 0cm 72pt 0pt; mso-list: l9 level1 lfo23; tab-stops: list 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Tasks<o:p></o:p></SPAN></SPAN></P>
<P class=List1 
style="MARGIN: 0cm 72pt 0pt; mso-list: l9 level1 lfo23; tab-stops: list 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Bookmarks<o:p></o:p></SPAN></SPAN></P>
<P class=List1 
style="MARGIN: 0cm 72pt 0pt; mso-list: l9 level1 lfo23; tab-stops: list 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Diff 
changes/additions<o:p></o:p></SPAN></SPAN></P>
<P class=List1 
style="MARGIN: 0cm 72pt 0pt; mso-list: l9 level1 lfo23; tab-stops: list 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Breakpoints<o:p></o:p></SPAN></SPAN></P>
<P class=List1 
style="MARGIN: 0cm 57.7pt 0pt 36pt; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><SPAN 
style="mso-bidi-font-weight: bold"><o:p>&nbsp;</o:p></SPAN></P>
<P class=MsoHeader style="MARGIN-LEFT: 54pt; tab-stops: 36.0pt">The editor will 
support moving to the next/previous annotations by icons on the Tool Bar and 
menu items. The editor will support the preferences set in annotation preference 
wizard supported by the Workbench.</P>
<P class=List1 
style="TEXT-INDENT: 0cm; MARGIN-RIGHT: 57.7pt; mso-list: none; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<P class=List1 style="mso-list: l41 level1 lfo24"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Quick 
Diff<o:p></o:p></B></SPAN></P>
<P class=List1 
style="TEXT-INDENT: 0cm; MARGIN-RIGHT: 57.7pt; mso-list: none; tab-stops: 36.0pt"><SPAN 
style="mso-bidi-font-weight: bold">Quick Diff provides color-coded change 
indication while you are typing. </SPAN>When the mouse cursor is placed over a 
change in the vertical ruler, a hover displays the original content, which can 
be restored using the ruler's context menu. Quick Diff will support both local 
history and CVS.</P>
<P class=List1 
style="TEXT-INDENT: 0cm; MARGIN-RIGHT: 57.7pt; mso-list: none; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<P class=List1 
style="TEXT-INDENT: 0cm; MARGIN-RIGHT: 57.7pt; mso-list: none; tab-stops: 36.0pt"><B 
style="mso-bidi-font-weight: normal">Note:<SPAN 
style="mso-bidi-font-weight: bold"><o:p></o:p></SPAN></B></P>
<P class=MsoHeader style="MARGIN-LEFT: 54pt; tab-stops: 36.0pt">All the editors 
in eclipse seem to support Quick Diff. </P>
<P class=MsoHeader 
style="MARGIN-LEFT: 54pt; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<P class=MsoHeader 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l41 level1 lfo24; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B 
style="mso-bidi-font-weight: normal">Key Bindings<o:p></o:p></B></SPAN></P>
<P class=MsoHeader style="MARGIN-LEFT: 54pt; tab-stops: 36.0pt">The PHP Editor 
will support the standard eclipse Key Bindings. Some examples are below. Look at 
the preference page in eclipse to see the complete list.</P>
<P class=MsoHeader 
style="MARGIN-LEFT: 54pt; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<P class=MsoHeader 
style="MARGIN: 0cm 72pt 0pt; TEXT-INDENT: -18pt; mso-list: l35 level1 lfo25; tab-stops: list 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Ctrl+J - Edit &gt;&gt; Incremental 
Find Next</SPAN></P>
<P class=MsoHeader 
style="MARGIN: 0cm 72pt 0pt; TEXT-INDENT: -18pt; mso-list: l35 level1 lfo25; tab-stops: list 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Ctrl+Shift+J - Edit &gt;&gt; 
Incremental Find Previous</SPAN></P>
<P class=MsoHeader 
style="MARGIN: 0cm 72pt 0pt; TEXT-INDENT: -18pt; mso-list: l35 level1 lfo25; tab-stops: list 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Ctrl+Q - Navigate &gt;&gt; Go to 
Last Edit Location</SPAN></P>
<P class=MsoHeader 
style="MARGIN: 0cm 72pt 0pt; TEXT-INDENT: -18pt; mso-list: l35 level1 lfo25; tab-stops: list 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Alt+Arrow Up - move lines 
up</SPAN></P>
<P class=MsoHeader 
style="MARGIN: 0cm 72pt 0pt; TEXT-INDENT: -18pt; mso-list: l35 level1 lfo25; tab-stops: list 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Alt+Arrow Down - move lines 
down</SPAN></P>
<P class=MsoHeader 
style="MARGIN: 0cm 72pt 0pt; TEXT-INDENT: -18pt; mso-list: l35 level1 lfo25; tab-stops: list 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Ctrl+Alt+Arrow Up – copy selected 
lines to above the current line</SPAN></P>
<P class=MsoHeader 
style="MARGIN: 0cm 72pt 0pt; TEXT-INDENT: -18pt; mso-list: l35 level1 lfo25; tab-stops: list 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Ctrl+Alt+Arrow Down – copy selected 
lines to below the current line</SPAN></P>
<P class=MsoHeader 
style="MARGIN: 0cm 72pt 0pt; TEXT-INDENT: -18pt; mso-list: l35 level1 lfo25; tab-stops: list 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Ctrl+Shift+Enter - insert a new 
line above</SPAN></P>
<P class=MsoHeader 
style="MARGIN: 0cm 72pt 0pt; TEXT-INDENT: -18pt; mso-list: l35 level1 lfo25; tab-stops: list 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Shift+Enter -<SPAN 
style="mso-spacerun: yes">&nbsp; </SPAN>insert a new line below</SPAN></P>
<P class=MsoHeader 
style="MARGIN: 0cm 72pt 0pt; TEXT-INDENT: -18pt; mso-list: l35 level1 lfo25; tab-stops: list 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Ctrl+Shift+Y - convert to 
lowercase</SPAN></P>
<P class=MsoHeader 
style="MARGIN: 0cm 72pt 0pt; TEXT-INDENT: -18pt; mso-list: l35 level1 lfo25; tab-stops: list 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Ctrl+Shift+X - convert to 
uppercase</SPAN></P>
<P class=MsoHeader style="tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646314><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">3.6<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-family: Arial">Outline View</SPAN></SPAN></A><SPAN 
style="mso-bidi-font-family: Arial"> </SPAN></H2>
<P class=MsoNormal>The Outline view displays a Tree representation of the 
contents of the editor that is currently visible in the editor area of the 
workbench. For PHP files, the Outline should display elements like classes, 
functions, variables, included files, and constants. It should optionally also 
display the content outside the PHP areas (ex. HTML, XML, CSS, JavaScript).</P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<P class=MsoNormal>NOTE: The Outline view for JSP and HTML editors do not render 
embedded CSS and JavaScript. This support will have to be implemented. </P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<P class=MsoNormal>NOTE: There is also the issue of PHP elements that span 
multiple PHP scriptlets. How can these be rendered as Tree nodes where there is 
the possibility of interleave foreign content (i.e. HTML).</P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l29 level1 lfo9; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B 
style="mso-bidi-font-weight: normal">Global Menus:</B> Collapse all, Expand all, 
Show PHP/HTML</SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 36pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l29 level1 lfo9; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B 
style="mso-bidi-font-weight: normal">Context Menus:</B></SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l39 level1 lfo27; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP nodes: Add/Delete/Rename class, 
function, variable, included file, constant (in the long future)</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l39 level1 lfo27; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Other content: Provide default 
behavior that is available on the other editors. For example, HTML content nodes 
should have the same context menu when in an HTML file.</SPAN></P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l33 level1 lfo28; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B 
style="mso-bidi-font-weight: normal">Selection:</B> Selecting the Tree node in 
the Outline view highlights the represented element on the editor. This should 
also work in the other direction, meaning that the Outline view should highlight 
the node represented by the area under the editor’s caret.<B 
style="mso-bidi-font-weight: normal"><o:p></o:p></B></SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 0cm"><B 
style="mso-bidi-font-weight: normal"><o:p>&nbsp;</o:p></B></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l33 level1 lfo28; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Sorting</B>:<B 
style="mso-bidi-font-weight: normal"><o:p></o:p></B></SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l33 level3 lfo28; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Alphabetically 
order<o:p></o:p></SPAN></SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l33 level3 lfo28; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Original order of the data in the 
file<o:p></o:p></SPAN></SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l33 level2 lfo28; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B 
style="mso-bidi-font-weight: normal">Grouping </B><SPAN 
style="mso-bidi-font-weight: bold">(option to group by)</SPAN><B 
style="mso-bidi-font-weight: normal"><o:p></o:p></B></SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l33 level3 lfo28; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Classes<o:p></o:p></SPAN></SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l33 level3 lfo28; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Functions<o:p></o:p></SPAN></SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l33 level3 lfo28; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Constants<o:p></o:p></SPAN></SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l33 level3 lfo28; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Include files<o:p></o:p></SPAN></SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l33 level2 lfo28; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B 
style="mso-bidi-font-weight: normal">Filtering – </B><SPAN 
style="mso-bidi-font-weight: bold">buttons to filter the content (should be 
added in the future)</SPAN><B 
style="mso-bidi-font-weight: normal"><o:p></o:p></B></SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l33 level3 lfo28; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Classes<o:p></o:p></SPAN></SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l33 level3 lfo28; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Functions<o:p></o:p></SPAN></SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l33 level3 lfo28; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Constants<o:p></o:p></SPAN></SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l33 level3 lfo28; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Include files<o:p></o:p></SPAN></SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l33 level3 lfo28; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-weight: bold">Variables</SPAN><B 
style="mso-bidi-font-weight: normal"><o:p></o:p></B></SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 0cm"><B 
style="mso-bidi-font-weight: normal"><o:p>&nbsp;</o:p></B></P>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646315><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">3.7<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-family: Arial">Project Outline View</SPAN></SPAN></A><SPAN 
style="mso-bidi-font-family: Arial"> </SPAN></H2>
<P class=MsoNormal>The Project Outline View is a new View to the Eclipse 
Platform. This View is very similar to the Outline View except that it should 
display the elements of the project correspondent to the opened file.</P>
<P class=MsoNormal>All other functionality should be identical to the Outline 
View.</P>
<P class=MsoNormal>This view is basically gathering of all Outline Views data of 
the entire project files.</P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN-LEFT: 0cm"><SPAN 
style="COLOR: blue"><o:p>&nbsp;</o:p></SPAN></P>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646316><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">3.8<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-family: Arial">PHP Explorer View</SPAN></SPAN></A><SPAN 
style="mso-bidi-font-family: Arial"> </SPAN></H2>
<P class=MsoNormal>Similar to the Package Explorer from the JDT, the PHP 
Explorer shows the PHP element hierarchy of the PHP projects in the workbench. 
It provides a PHP-specific view of the resources shown in the Navigator. The 
element hierarchy is derived from the project's build paths.</P>
<P class=MsoNormal>The PHP Explorer View will support using Working Set to 
determine the projects that are shown. </P>
<P class=MsoNormal>The actions (right click menus) of the Explorer view are 
derived form the Project actions (appears in section 3.1 under Right Click Menu 
Items).</P>
<P class=MsoNormal>Additional View actions:</P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l24 level1 lfo35; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Collapse all</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l24 level1 lfo35; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Link with Editor</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l24 level1 lfo35; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Layout view</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l24 level1 lfo35; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Filters</SPAN></P>
<P class=MsoHeader style="tab-stops: 36.0pt"><SPAN 
style="mso-spacerun: yes"></SPAN>&nbsp;</P>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646317><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">3.9<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-family: Arial">Problems View</SPAN></SPAN></A><SPAN 
style="mso-bidi-font-family: Arial"> </SPAN></H2>
<P class=MsoNormal>The Problems view should display all PHP errors and 
warnings.</P>
<P class=MsoNormal>Should include “include files” problem (in the future).</P>
<P class=MsoNormal>All errors and warnings will have a description, resource, 
folder, and location associated with them.</P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l8 level1 lfo30; tab-stops: list 90.0pt; mso-hyphenate: none"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Resource refers to the php file 
containing the problem.</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l8 level1 lfo30; tab-stops: list 90.0pt; mso-hyphenate: none"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Folder refers to the directory 
containing the php file.</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l8 level1 lfo30; tab-stops: list 90.0pt; mso-hyphenate: none"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Location will refer to the line 
number containing the problem.</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l38 level1 lfo29; tab-stops: list 54.0pt; mso-hyphenate: none"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>When a user clicks on a problem in 
the problems view, the php file containing the error or warning will be 
displayed in the editor.</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l38 level1 lfo29; tab-stops: list 54.0pt; mso-hyphenate: none"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>When a user clicks on a missing 
include file, a file wizard will appear to add the file to the 
project.</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l38 level1 lfo29; tab-stops: list 54.0pt; mso-hyphenate: none"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Problems view will also display the 
total number of errors and warnings</SPAN></P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646318><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">3.10<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-family: Arial">PHPDoc support</SPAN></SPAN></A><SPAN 
style="mso-bidi-font-family: Arial"> </SPAN></H2>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Syntax Coloring – </B>customized 
syntax highlighting for PHPDoc tags and their values (see Editor – Syntax 
Coloring). <B><o:p></o:p></B></SPAN></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Inspection – </B>The value of 
the following tags should be inspected: abstract, access, author, copyright, 
deprecated, example, exception, final, global, ignore, internal, link, magic, 
name, return, package, param, see, since, static, staticvar, subpackage, throws, 
todo, var and version.</SPAN></P>
<P class=List1 
style="TEXT-INDENT: 0cm; MARGIN-RIGHT: 57.7pt; mso-list: none; tab-stops: 36.0pt">Note: 
These tags are affecting the Outline View, Code Assist and Project Outline 
View.</P>
<P class=List1 style="mso-list: l19 level2 lfo37"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Code Assist – </B>for the list 
of tags appears above there should be code assist as well.</SPAN></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Adding 
description</B></SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Outline view – right click action 
to add description to the selected data</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Project Outline View - right click 
action to add description to the selected data</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Code Assist – Button and shortcut 
to add description to the selected data in the list (if possible, will be added 
in future versions)</SPAN></P>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646319><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">3.11<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-family: Arial">Code Formatter</SPAN></SPAN></A><SPAN 
style="mso-bidi-font-family: Arial"> </SPAN></H2>
<P class=MsoNormal>In a document with PHP as well as other content (i.e. HTML), 
each content should have a Formatting strategy. The strategy for foreign content 
(i.e. HTML) should be the same as those provided by standalone editors. This 
section emphasized on the Formatting options for the PHP content and Doc 
areas.</P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B 
style="mso-bidi-font-weight: normal">Invocation</B>: Formatting is initiated by 
either “ctrl-shift F” key combination of through menu. There should be both a 
global menu item and a context menu item.</SPAN></P>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646320><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">3.12<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-family: Arial">Encoding</SPAN></SPAN></A><SPAN 
style="mso-bidi-font-family: Arial"> </SPAN></H2>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Default encoding for each project – 
will open file from the Explorer view with this encoding</SPAN></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>File chooser will include a list of 
all available encoding options with the default encoding 
selected.<B><o:p></o:p></B></SPAN></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Saving file with a specific 
encoding or the default one<B><o:p></o:p></B></SPAN></P>
<P class=MsoHeader style="MARGIN-LEFT: 36pt; tab-stops: 36.0pt"><SPAN 
style="COLOR: red; FONT-FAMILY: Arial; mso-bidi-font-weight: bold"><o:p>&nbsp;</o:p></SPAN></P>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646322><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">3.13<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Open PHP Resources</SPAN></A> </H2>
<P class=MsoNormal style="MARGIN-LEFT: 36pt">This is a Toolbar and Menu option 
similar to the JDT’s Open Type. The JDT’s version of Open Type is a dialog that 
allows the user to search for Classes and Interfaces and subsequently open the 
file that defines it. For PHP, this behavior will be extended for Classes, 
Functions, and Constants.</P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'; mso-bidi-font-weight: bold"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN 
dir=ltr><B>Features:<o:p></o:p></B></SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Display and narrow search results 
as the user types</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Allow for wildcards – (‘?’ = any 
character, ‘*’ = any string)</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Search the entire workspace (all 
PHP projects that are open)</SPAN></P>
<P class=List2 style="MARGIN-LEFT: 72pt; tab-stops: list 54.0pt 72.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Multiple name matches need to be 
further qualified with:</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Workspace location, includes 
project, folder, and file name</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 90pt 0pt; mso-list: l15 level3 lfo31; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Type of element, such as Class, 
Function, Constants</SPAN></P>
<P class=List1 
style="MARGIN: 0cm 57.7pt 0pt 0cm; TEXT-INDENT: 0cm; mso-list: none; tab-stops: 36.0pt"><o:p>&nbsp;</o:p></P>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646323><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">3.14<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-family: Arial">PHP Functions View – PHP Language 
Data</SPAN></SPAN></A><SPAN style="mso-bidi-font-family: Arial"> </SPAN></H2>
<P class=MsoNormal style="MARGIN-LEFT: 1cm">View with all the PHP functions 
available in the language according to the PHP version defined in the edited 
file’s project (see PHP Functions – PHP Language Data).</P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Open manual</B> - with an 
explanation about the selected PHP function from the list.</SPAN></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Short description</B><SPAN 
style="mso-spacerun: yes">&nbsp; </SPAN>- in a tool tip about the function and 
its arguments</SPAN></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B>Adding</B> - the function to the 
edited file.</SPAN></P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646324><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">3.15<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><SPAN 
style="mso-bidi-font-family: Arial">PHP Manual View</SPAN></SPAN></A><SPAN 
style="mso-bidi-font-family: Arial"> <o:p></o:p></SPAN></H2>
<P class=MsoNormal style="MARGIN-LEFT: 1cm">This view is an offline view of the 
PHP Manual (<A href="http://www.php.net/download-docs.php"><SPAN 
style="FONT-FAMILY: Arial">http://www.php.net/download-docs.php</SPAN></A>). The 
PHP IDE should be customizable to work with any downloaded version of the PHP 
Manual (should support different languages). The manual control will be 
supported by extension point to add new manuals from different sites.</P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<P class=MsoNormal>The view should support:</P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Quick link from the editor depends 
on the caret location and the relevant function. </SPAN></P>
<P class=List1><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Link from the PHP functions 
list.</SPAN></P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646325><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">3.16<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP Perspective</SPAN></A> </H2>
<P class=MsoNormal style="MARGIN-LEFT: 36pt">In eclipse, Perspectives define the 
initial set and layout of views in the Workbench window.<SPAN 
style="mso-spacerun: yes">&nbsp; </SPAN>A Perspective provides a set of 
functionality aimed at accomplishing a specific type of task or working with 
specific types of resources</P>
<P class=MsoNormal style="MARGIN-LEFT: 36pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN-LEFT: 36pt">The PHP perspective will include 
the following views</P>
<P class=List1 
style="MARGIN-LEFT: 68.7pt; mso-list: l20 level1 lfo18; tab-stops: list 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP Explorer View</SPAN></P>
<P class=List1 
style="MARGIN-LEFT: 68.7pt; mso-list: l20 level1 lfo18; tab-stops: list 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Outline View</SPAN></P>
<P class=List1 
style="MARGIN-LEFT: 68.7pt; mso-list: l20 level1 lfo18; tab-stops: list 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Editor View</SPAN></P>
<P class=List1 
style="MARGIN-LEFT: 68.7pt; mso-list: l20 level1 lfo18; tab-stops: list 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Project Outline View</SPAN></P>
<P class=List1 
style="MARGIN-LEFT: 68.7pt; mso-list: l20 level1 lfo18; tab-stops: list 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Problems View</SPAN></P>
<P class=List1 
style="MARGIN-LEFT: 68.7pt; mso-list: l20 level1 lfo18; tab-stops: list 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP Manual View (if possible with 
embedded browser problem)</SPAN></P>
<P class=List1 
style="MARGIN-LEFT: 68.7pt; mso-list: l20 level1 lfo18; tab-stops: list 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP Functions View</SPAN></P>
<P class=List1 
style="MARGIN-LEFT: 68.7pt; mso-list: l20 level1 lfo18; tab-stops: list 68.7pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Search View (after the first 
search)</SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 0cm"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN-LEFT: 36pt">The PHP perspective will save state 
(views, files opened, etc) when closed. And reopen to the same state. </P>
<P class=MsoNormal style="MARGIN-LEFT: 36pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN-LEFT: 36pt">The PHP perspective will support 
customization through the Customize Perspective wizard. The customized 
perspective can be saved under a user specified named. It is possible for a 
developer to have multiple PHP perspectives with different customizations each 
with its own name. The PHP perspective will also support resetting the 
perspective back to the default settings.</P>
<P class=MsoNormal><o:p>&nbsp;</o:p></P>
<UL style="MARGIN-TOP: 0cm" type=circle>
  <LI class=MsoNormal 
  style="MARGIN-LEFT: 36pt; MARGIN-RIGHT: 36pt; mso-list: l26 level1 lfo13; tab-stops: list 36.0pt"><B 
  style="mso-bidi-font-weight: normal">New Menus<o:p></o:p></B> </LI></UL>
<P class=MsoNormal style="MARGIN-LEFT: 54pt">The PHP perspective will add the 
following new menu and menu items to the menu bar. </P>
<P class=MsoNormal style="MARGIN-LEFT: 72pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l42 level1 lfo19; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B 
style="mso-bidi-font-weight: normal">Existing Menus<o:p></o:p></B></SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt">File&gt;&gt;New </P>
<P class=MsoNormal style="MARGIN-LEFT: 72pt">New PHP Project</P>
<P class=MsoNormal style="MARGIN-LEFT: 72pt">New PHP File</P>
<P class=MsoNormal style="MARGIN-LEFT: 36pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt"><B 
style="mso-bidi-font-weight: normal">Note:<o:p></o:p></B></P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt">Need to review all the menus for 
complete content. </P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l13 level1 lfo20; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr><B 
style="mso-bidi-font-weight: normal">Tool Bar <o:p></o:p></B></SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt">The following items will be on the 
Tool Bar</P>
<P class=MsoNormal style="MARGIN-LEFT: 54pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l30 level1 lfo21; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>New PHP Project/File</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l30 level1 lfo21; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Debug </SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l30 level1 lfo21; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Run </SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 90pt 0pt; TEXT-INDENT: -18pt; mso-list: l30 level1 lfo21; tab-stops: list 90.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Search</SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 72pt"><o:p>&nbsp;</o:p></P>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646326><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">3.17<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP </SPAN></A>Debug/Run 
Configuration</H2>
<P class=MsoNormal>As in JDT, the user can define the debug/run configuration 
from the Run/Debug configuration dialogs. This dialog will contain 2 nodes:</P>
<P class=MsoNormal 
style="MARGIN-LEFT: 57.3pt; TEXT-INDENT: -18pt; mso-list: l17 level1 lfo43; tab-stops: list 57.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP Executable – will include the 
php used for this configuration. There is a default option and an alternate 
option. New executable locations can be defined from the PHP preferences. 
</SPAN></P>
<P class=MsoNormal 
style="MARGIN-LEFT: 57.3pt; TEXT-INDENT: -18pt; mso-list: l17 level1 lfo43; tab-stops: list 57.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHP Web Server </SPAN></P>
<P class=MsoNormal 
style="MARGIN-LEFT: 93.3pt; TEXT-INDENT: -18pt; mso-list: l17 level2 lfo43; tab-stops: list 93.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Default web server as defined in 
the project/workspace. This web server doesn’t include any 
publishing.</SPAN></P>
<P class=MsoNormal 
style="MARGIN-LEFT: 93.3pt; TEXT-INDENT: -18pt; mso-list: l17 level2 lfo43; tab-stops: list 93.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: 'Courier New'; mso-fareast-font-family: 'Courier New'"><SPAN 
style="mso-list: Ignore">o<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Customized web server which 
includes addition of new web server with ability to provide the publishing 
directory and its url.</SPAN></P>
<P class=MsoNormal 
style="MARGIN-LEFT: 57.3pt; TEXT-INDENT: -18pt; mso-list: l17 level1 lfo43; tab-stops: list 57.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Symbol; mso-fareast-font-family: Symbol; mso-bidi-font-family: Symbol"><SPAN 
style="mso-list: Ignore">·<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Each of the configuration provides 
the ability to define the project and the debugged file with a context root (if 
necessary)</SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 0cm"><o:p>&nbsp;</o:p></P>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646331><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">3.18<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Debug Perspective</SPAN></A></H2>
<P class=MsoNormal>The Debug Perspective will present the user with common 
debugging tasks.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>There will be 
toolbar buttons to stop, pause, and start execution.<SPAN 
style="mso-spacerun: yes">&nbsp; </SPAN>The perspective will contain the 
following views;</P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l32 level1 lfo17; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>The Outline View of the current 
file in the debugger</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l32 level1 lfo17; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Console View</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l32 level1 lfo17; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Task View</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l32 level1 lfo17; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Debug Output View</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l32 level1 lfo17; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Browser Output View</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l32 level1 lfo17; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Editor containing file with the 
current breakpoint.</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l32 level1 lfo17; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Variable View showing runtime 
values of selected variables.</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l32 level1 lfo17; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Breakpoints View</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l32 level1 lfo17; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Debug View.<SPAN 
style="mso-spacerun: yes">&nbsp; </SPAN>The Debug View will show the runtime 
call stack up to the current breakpoint.<SPAN style="mso-spacerun: yes">&nbsp; 
</SPAN>The user will be able to click on the function name in the stack and the 
editor will display the file at the appropriate line.</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l32 level1 lfo17; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Server View (should consider 
whether it’s suitable)</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 54pt 0pt; TEXT-INDENT: -18pt; mso-list: l32 level1 lfo17; tab-stops: list 54.0pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Watches View</SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 18pt"><SPAN 
style="mso-spacerun: yes">&nbsp; </SPAN></P>
<P class=MsoNormal style="MARGIN-LEFT: 18pt"><o:p>&nbsp;</o:p></P>
<H2 style="MARGIN-LEFT: 0cm; TEXT-INDENT: 0cm"><A name=_Toc112646332><![if !supportLists]><SPAN 
style="mso-fareast-font-family: Arial; mso-bidi-font-family: Arial"><SPAN 
style="mso-list: Ignore">3.19<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>TODO / TASKS</SPAN></A></H2>
<P class=MsoNormal>Gather all TODO tasks from the entire PHP project files to a 
complete list (as it is today). The List should appear next to the Problems 
View. TODO task should start with “TODO”.</P>
<P class=MsoNormal>The TODO information should be collected from:</P>
<P class=MsoNormal 
style="MARGIN: 0cm 57.3pt 0pt; TEXT-INDENT: -18pt; mso-list: l10 level1 lfo36; tab-stops: list 57.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Regular comments (// or /* 
*/)</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 57.3pt 0pt; TEXT-INDENT: -18pt; mso-list: l10 level1 lfo36; tab-stops: list 57.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>PHPDoc blocks (as @todo)</SPAN></P>
<P class=MsoNormal>The list should include the following information:</P>
<P class=MsoNormal 
style="MARGIN: 0cm 57.3pt 0pt; TEXT-INDENT: -18pt; mso-list: l10 level1 lfo36; tab-stops: list 57.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>File name</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 57.3pt 0pt; TEXT-INDENT: -18pt; mso-list: l10 level1 lfo36; tab-stops: list 57.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Folder name</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 57.3pt 0pt; TEXT-INDENT: -18pt; mso-list: l10 level1 lfo36; tab-stops: list 57.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Line number</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 57.3pt 0pt; TEXT-INDENT: -18pt; mso-list: l10 level1 lfo36; tab-stops: list 57.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Description of the TODO 
task</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 57.3pt 0pt; TEXT-INDENT: -18pt; mso-list: l10 level1 lfo36; tab-stops: list 57.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Tool tip with a complete TODO task 
information</SPAN></P>
<P class=MsoNormal 
style="MARGIN: 0cm 57.3pt 0pt; TEXT-INDENT: -18pt; mso-list: l10 level1 lfo36; tab-stops: list 57.3pt"><![if !supportLists]><SPAN 
style="FONT-FAMILY: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings"><SPAN 
style="mso-list: Ignore">§<SPAN 
style="FONT: 7pt 'Times New Roman'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
</SPAN></SPAN></SPAN><![endif]><SPAN dir=ltr>Double click should get you the 
TODO location in the document</SPAN></P>
<P class=MsoNormal style="MARGIN-RIGHT: 57.3pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal><SPAN 
style="mso-spacerun: yes"></SPAN>&nbsp;</P></DIV></BODY></HTML>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
<?php /* Smarty version Smarty-3.1.16, created on 2014-07-22 12:02:01
         compiled from "/dom7162/wp-content/themes/influence-full-design/templates/influencerdaily.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110360861853c9a725efcbf9-32246727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27070c66ca4ebe65b1c410b6dd42862475204460' => 
    array (
      0 => '/dom7162/wp-content/themes/influence-full-design/templates/influencerdaily.tpl',
      1 => 1405963716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110360861853c9a725efcbf9-32246727',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53c9a726079a58_06743973',
  'variables' => 
  array (
    'influencers' => 0,
    'influencer' => 0,
    'inc' => 0,
    'baseDomain' => 0,
    'post' => 0,
    'productImage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c9a726079a58_06743973')) {function content_53c9a726079a58_06743973($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>The Influence</title>

<!--[if gte mso 6]>
<style>
    table.mcnFollowContent {width:100% !important;}
    table.mcnShareContent {width:100% !important;}
</style>
<![endif]-->
<style type="text/css">
body,#bodyTable,#bodyCell{
    height:100% !important;
    margin:0;
    padding:0;
    width:100% !important;
}
table{
    border-collapse:collapse;
}
img,a img{
    border:0;
    outline:none;
    text-decoration:none;
}
h1,h2,h3,h4,h5,h6{
    margin:0;
    padding:0;
}
p{
    margin:1em 0;
    padding:0;
}
a{
    word-wrap:break-word;
}
.ReadMsgBody{
    width:100%;
}
.ExternalClass{
    width:100%;
}
.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{
    line-height:100%;
}
table,td{
    mso-table-lspace:0pt;
    mso-table-rspace:0pt;
}
#outlook a{
    padding:0;
}
img{
    -ms-interpolation-mode:bicubic;
}
body,table,td,p,a,li,blockquote{
    -ms-text-size-adjust:100%;
    -webkit-text-size-adjust:100%;
}
#bodyCell{
    padding:0;
}
.mcnImage{
    vertical-align:bottom;
}
.mcnTextContent img{
    height:auto !important;
}
/*
@tab Page
@section background style
@tip Set the background color and top border for your email. You may want to choose colors that match your company's branding.
*/
body,#bodyTable{
    /*@editable*/background-color:#ffffff;
}
/*
@tab Page
@section background style
@tip Set the background color and top border for your email. You may want to choose colors that match your company's branding.
*/
#bodyCell{
    /*@editable*/border-top:0;
}
/*
@tab Page
@section heading 1
@tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
@style heading 1
*/
h1{
    /*@editable*/color:#000 !important;
    display:block;
    /*@editable*/font-family:Helvetica;
    /*@editable*/font-size:40px;
    /*@editable*/font-style:normal;
    /*@editable*/font-weight:bold;
    /*@editable*/line-height:125%;
    /*@editable*/letter-spacing:-1px;
    margin:0;
    /*@editable*/text-align:left;
}
/*
@tab Page
@section heading 2
@tip Set the styling for all second-level headings in your emails.
@style heading 2
*/
h2{
    /*@editable*/color:#404040 !important;
    display:block;
    /*@editable*/font-family:Helvetica;
    /*@editable*/font-size:26px;
    /*@editable*/font-style:normal;
    /*@editable*/font-weight:bold;
    /*@editable*/line-height:125%;
    /*@editable*/letter-spacing:-.75px;
    margin:0;
    /*@editable*/text-align:left;
}
/*
@tab Page
@section heading 3
@tip Set the styling for all third-level headings in your emails.
@style heading 3
*/
h3{
    /*@editable*/color:#000 !important;
    display:block;
    /*@editable*/font-family:Helvetica;
    /*@editable*/font-size:18px;
    /*@editable*/font-style:normal;
    /*@editable*/font-weight:bold;
    /*@editable*/line-height:125%;
    /*@editable*/letter-spacing:-.5px;
    margin:0;
    /*@editable*/text-align:left;
}
/*
@tab Page
@section heading 4
@tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
@style heading 4
*/
h4{
    /*@editable*/color:#808080 !important;
    display:block;
    /*@editable*/font-family:Helvetica;
    /*@editable*/font-size:16px;
    /*@editable*/font-style:normal;
    /*@editable*/font-weight:bold;
    /*@editable*/line-height:125%;
    /*@editable*/letter-spacing:normal;
    margin:0;
    /*@editable*/text-align:left;
}
/*
@tab Preheader
@section preheader style
@tip Set the background color and borders for your email's preheader area.
*/
#templatePreheader{
    /*@editable*/background-color:#000000;
    /*@editable*/border-top:0;
    /*@editable*/border-bottom:0;
}
/*
@tab Preheader
@section preheader text
@tip Set the styling for your email's preheader text. Choose a size and color that is easy to read.
*/
.preheaderContainer .mcnTextContent,.preheaderContainer .mcnTextContent p{
    /*@editable*/color:#ffffff;
    /*@editable*/font-family:Helvetica;
    /*@editable*/font-size:11px;
    /*@editable*/line-height:125%;
    /*@editable*/text-align:left;
}
/*
@tab Preheader
@section preheader link
@tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
*/
.preheaderContainer .mcnTextContent a{
    /*@editable*/color:#ffffff;
    /*@editable*/font-weight:normal;
    /*@editable*/text-decoration:underline;
}
/*
@tab Header
@section header style
@tip Set the background color and borders for your email's header area.
*/
#templateHeader{
    /*@editable*/background-color:#FFFFFF;
    /*@editable*/border-top:0;
    /*@editable*/border-bottom:0;
}
/*
@tab Header
@section header text
@tip Set the styling for your email's header text. Choose a size and color that is easy to read.
*/
.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
    /*@editable*/color:#000;
    /*@editable*/font-family:Helvetica;
    /*@editable*/font-size:15px;
    /*@editable*/line-height:100%;
    /*@editable*/text-align:left;
}
/*
@tab Header
@section header link
@tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
*/
.headerContainer .mcnTextContent a{
    /*@editable*/color:#6DC6DD;
    /*@editable*/font-weight:normal;
    /*@editable*/text-decoration:underline;
}
/*
@tab Body
@section body style
@tip Set the background color and borders for your email's body area.
*/
#templateBody{
    /*@editable*/background-color:#FFFFFF;
    /*@editable*/border-top:0;
    /*@editable*/border-bottom:0;
}
/*
@tab Body
@section body text
@tip Set the styling for your email's body text. Choose a size and color that is easy to read.
*/
.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
    /*@editable*/color:#000;
    /*@editable*/font-family:Helvetica;
    /*@editable*/font-size:15px;
    /*@editable*/line-height:150%;
    /*@editable*/text-align:left;
}
/*
@tab Body
@section body link
@tip Set the styling for your email's body links. Choose a color that helps them stand out from your text.
*/
.bodyContainer .mcnTextContent a{
    /*@editable*/color:#6DC6DD;
    /*@editable*/font-weight:normal;
    /*@editable*/text-decoration:underline;
}
/*
@tab Columns
@section column style
@tip Set the background color and borders for your email's columns area.
*/
#templateColumns{
    /*@editable*/background-color:#FFFFFF;
    /*@editable*/border-top:0;
    /*@editable*/border-bottom:0;
}
/*
@tab Columns
@section left column text
@tip Set the styling for your email's left column text. Choose a size and color that is easy to read.
*/
.leftColumnContainer .mcnTextContent,.leftColumnContainer .mcnTextContent p{
    /*@editable*/color:#000;
    /*@editable*/font-family:Helvetica;
    /*@editable*/font-size:15px;
    /*@editable*/line-height:150%;
    /*@editable*/text-align:left;
}
.leftColumnContainer .mcnTextContent img {
    line-height: 0;
}

.leftColumnContainer .mcnTextContent .product-image img { max-width: 56px; }
/*
@tab Columns
@section left column link
@tip Set the styling for your email's left column links. Choose a color that helps them stand out from your text.
*/
.leftColumnContainer .mcnTextContent a{
    /*@editable*/color:#6DC6DD;
    /*@editable*/font-weight:normal;
    /*@editable*/text-decoration:none;
}
/*
@tab Columns
@section center column text
@tip Set the styling for your email's center column text. Choose a size and color that is easy to read.
*/
.centerColumnContainer .mcnTextContent,.centerColumnContainer .mcnTextContent p{
    /*@editable*/color:#000;
    /*@editable*/font-family:Helvetica;
    /*@editable*/font-size:15px;
    /*@editable*/line-height:150%;
    /*@editable*/text-align:left;
}
/*
@tab Columns
@section center column link
@tip Set the styling for your email's center column links. Choose a color that helps them stand out from your text.
*/
.centerColumnContainer .mcnTextContent a{
    /*@editable*/color:#6DC6DD;
    /*@editable*/font-weight:normal;
    /*@editable*/text-decoration:underline;
}
/*
@tab Columns
@section right column text
@tip Set the styling for your email's right column text. Choose a size and color that is easy to read.
*/
.rightColumnContainer .mcnTextContent,.rightColumnContainer .mcnTextContent p{
    /*@editable*/color:#000;
    /*@editable*/font-family:Helvetica;
    /*@editable*/font-size:15px;
    /*@editable*/line-height:150%;
    /*@editable*/text-align:left;
}
/*
@tab Columns
@section right column link
@tip Set the styling for your email's right column links. Choose a color that helps them stand out from your text.
*/
.rightColumnContainer .mcnTextContent a{
    /*@editable*/color:#6DC6DD;
    /*@editable*/font-weight:normal;
    /*@editable*/text-decoration:underline;
}
/*
@tab Footer
@section footer style
@tip Set the background color and borders for your email's footer area.
*/
#templateFooter{
    /*@editable*/background-color:#FFFFFF;
    /*@editable*/border-top:0;
    /*@editable*/border-bottom:0;
}
/*
@tab Footer
@section footer text
@tip Set the styling for your email's footer text. Choose a size and color that is easy to read.
*/
.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
    /*@editable*/color:#000;
    /*@editable*/font-family:Helvetica;
    /*@editable*/font-size:11px;
    /*@editable*/line-height:125%;
    /*@editable*/text-align:left;
}
/*
@tab Footer
@section footer link
@tip Set the styling for your email's footer links. Choose a color that helps them stand out from your text.
*/
.footerContainer .mcnTextContent a{
    /*@editable*/color:#000;
    /*@editable*/font-weight:normal;
    /*@editable*/text-decoration:underline;
}


}

</style></head>

<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">


<div style="background-color:#f6f6f6;">

<table height="100%" width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td valign="top" align="left">


<center>
<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="background-color:#ffffff;">
<tr>
<td align="center" valign="top" id="bodyCell">
<!-- BEGIN TEMPLATE // -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
    <td align="center" valign="top">
        <!-- BEGIN PREHEADER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templatePreheader" style="background-color: #000000;">
            <tr>
                <td align="center" valign="top">
                    <table border="0" cellpadding="0" cellspacing="0" width="700" class="templateContainer">
                        <tr>
                            <td valign="top" class="preheaderContainer" style="padding-top:4px;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock">
                                    <tbody class="mcnTextBlockOuter">
                                    <tr>
                                        <td valign="top" class="mcnTextBlockInner">

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" width="700" class="mcnTextContentContainer">
                                                <tbody><tr>

                                                    <td valign="top" class="mcnTextContent" width="130">
                                                        <a href="#"><img align="none" height="29" src="http://www.theinfluence.com//wp-content/themes/influence-full-design/images/email/topnav-1.gif" style="width: 85px; height: 29px;" width="85"></a>
                                                    </td>
                                                    <td valign="top" class="mcnTextContent" width="140">
                                                        <a href="#"><img align="none" height="29" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/topnav-2.gif" style="width: 85px; height: 29px;" width="85"></a>
                                                    </td>
                                                    <td valign="top" class="mcnTextContent" width="96">
                                                        <a href="#"><img align="none" height="29" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/topnav-3.gif" style="width: 85px; height: 29px;" width="85"></a>
                                                    </td>
                                                    <td valign="top" class="mcnTextContent" width="133">
                                                        <a href="#"><img align="none" height="29" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/topnav-4.gif" style="width: 85px; height: 29px;" width="85"></a>
                                                    </td>
                                                    <td valign="top" class="mcnTextContent" width="118">
                                                        <a href="#"><img align="none" height="29" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/topnav-5.gif" style="width: 85px; height: 29px;" width="85"></a>
                                                    </td>
                                                    <td valign="top" class="mcnTextContent">
                                                        <a href="#"><img align="none" height="29" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/topnav-6.gif" style="width: 85px; height: 29px;" width="85"></a>
                                                    </td>

                                                </tr>
                                                </tbody></table>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!-- // END PREHEADER -->
    </td>
</tr>
<tr>
    <td align="center" valign="top">
        <!-- BEGIN HEADER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateHeader" style="background-color:#ffffff;">
            <tr>
                <td align="center" valign="top">
                    <table border="0" cellpadding="0" cellspacing="0" width="700" class="templateContainer">
                        <tr>
                            <td valign="top" class="headerContainer" style="padding-top:10px;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock">
                                    <tbody class="mcnImageBlockOuter">
                                    <tr>
                                        <td valign="top" style="padding-top:19px" class="mcnImageBlockInner">
                                            <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer">
                                                <tbody>
                                                <tr>

                                                    <td valign="top" width="195">

                                                        <a href="http://www.theinfluence.com/"><img align="none" height="77" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/header-in.gif" style="width: 77px; height: 77px;" width="77"></a>
                                                    </td>
                                                    <td valign="top" width="400">
                                                        <table>
                                                            <tr>
                                                                <td colspan="6" style="padding-top: 20px;">
                                                                    <a href="http://www.theinfluence.com/"><img align="none" height="39" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/header-influence.gif" style="width: 301px; height: 39px;" width="301"></a>
                                                                </td>
                                                            </tr>
                                                            <!---
                                                            <tr>
                                                                <td width="46">
                                                                    <a href="http://instagram.com/theinfluence"><img align="none" height="25" width="25" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/social-instagram.gif" style="width: 25px; height: 25px;"></a>
                                                                </td>
                                                                <td width="46">
                                                                    <a href="http://tumblr.com/"><img align="none" height="25" width="25" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/social-tumblr.gif" style="width: 25px; height: 25px;"></a>
                                                                </td>
                                                                <td width="46">
                                                                    <a href="https://twitter.com/theinfluence"><img align="none" height="25" width="25" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/social-twitter.gif" style="width: 25px; height: 25px;"></a>
                                                                </td>
                                                                <td width="46">
                                                                    <a href="http://www.pinterest.com/theinfluencepin/"><img align="none" height="25" width="25" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/social-pinterest.gif" style="width: 25px; height: 25px;"></a>
                                                                </td>
                                                                <td width="46">
                                                                    <a href="http://youtu.be/"><img align="none" height="25" width="25" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/social-youtube.gif" style="width: 25px; height: 25px;"></a>
                                                                </td>
                                                                <td>
                                                                    <a href="http://fb.me/"><img align="none" height="25" width="25" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/social-facebook.gif" style="width: 25px; height: 25px;"></a>
                                                                </td>
                                                            </tr>
                                                            -->
                                                        </table>
                                                    </td>
                                                    <td valign="top">

                                                        <a href="http://www.theinfluence.com/"><img align="none" height="77" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/header-pref.gif" style="width: 105px; height: 77px;" width="105"></a>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td valign="top" colspan="3" align="center">
                                                        <img align="none" height="122" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/thisjustin.gif" style="width: 670px; height: 122px;" width="670">
                                                    </td>
                                                </tr>
                                                </tbody></table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!-- // END HEADER -->
    </td>
</tr>
<tr>
    <td align="center" valign="top">
        <!-- BEGIN COLUMNS // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateColumns">
            <tr>
                <td align="center" valign="top" style="padding-top: 12px;">


                    <?php $_smarty_tpl->tpl_vars['inc'] = new Smarty_variable(0, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['influencer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['influencer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['influencers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['influencer']->key => $_smarty_tpl->tpl_vars['influencer']->value) {
$_smarty_tpl->tpl_vars['influencer']->_loop = true;
?>

                    <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['influencer']->value['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars['inc'] = new Smarty_variable($_smarty_tpl->tpl_vars['inc']->value+1, null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['inc']->value%3==1) {?>
                    <table border="0" cellpadding="0" cellspacing="0" width="700" class="templateContainer">
                        <tr>
                            <?php }?>
                            <td align="center" valign="top" class="columnsContainer" width="33%">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="templateColumn">
                                    <tr>
                                        <td valign="top" class="leftColumnContainer"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnCaptionBlock">
                                                <tbody class="mcnCaptionBlockOuter">
                                                <tr>
                                                    <td class="mcnCaptionBlockInner" valign="top">


                                                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="mcnCaptionBottomContent" width="false">
                                                            <tbody>
                                                            <tr>
                                                                <td class="mcnTextContent" valign="top" style="padding:5px 0;;" width="224">
                                                                    <h3 style="text-transform: uppercase; text-align: center; color: #555 !important; background-color: #d4fff7; letter-spacing: 1px; font-weight: normal; font-size: 12px; line-height: 12px; margin: 0 0 5px; padding: 5px 5%;" align="center"><?php echo $_smarty_tpl->tpl_vars['influencer']->value['influencer']->post_title;?>
</h3>
                                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseDomain']->value;?>
/dev/<?php echo $_smarty_tpl->tpl_vars['post']->value->post_name;?>
" style="outline: 0; color: #000; text-decoration: none; cursor: pointer; margin: 0; padding: 0; display: block; width: 224px; height: 357px;">
                                                                        <?php echo get_the_post_thumbnail($_smarty_tpl->tpl_vars['post']->value->ID,array(224,423));?>

                                                                    </a>
                                                                    <?php if ($_smarty_tpl->tpl_vars['post']->value->productImages) {?>
                                                                        <table>
                                                                            <tr>
                                                                                <td valign="top" style="padding:5px 0;  border-bottom: 1px solid #b5f4e8; text-align: center;" width="224">
                                                                                    <?php  $_smarty_tpl->tpl_vars['productImage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productImage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value->productImages; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['productImage']->key => $_smarty_tpl->tpl_vars['productImage']->value) {
$_smarty_tpl->tpl_vars['productImage']->_loop = true;
?>
                                                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseDomain']->value;?>
/dev/<?php echo $_smarty_tpl->tpl_vars['post']->value->post_name;?>
" style="width: 53px; display: inline-block;" class="product-image"><?php echo $_smarty_tpl->tpl_vars['productImage']->value;?>
</a>
                                                                                    <?php } ?>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    <?php }?>
                                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseDomain']->value;?>
/dev/<?php echo $_smarty_tpl->tpl_vars['post']->value->post_name;?>
" style="text-decoration: none; display: block; text-align: center;"><p style="font-family: Georgia, serif; font-size: 12px;margin-top: 6px; padding-left: 10px; padding-right: 10px; text-align: center; color: #4d4d4d;"><?php echo $_smarty_tpl->tpl_vars['post']->value->post_title;?>
</p><img src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/shop.gif" align="center" /></a>
                                                                    </a>
                                                                </td>
                                                            </tr>

                                                            </tbody></table>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table></td>
                                    </tr>
                                </table>
                            </td>
                            <?php } ?>
                            <?php } ?>
                            <?php if ($_smarty_tpl->tpl_vars['inc']->value%3==1) {?>
                        </tr>
                    </table>
                    <?php }?>

                </td>
            </tr>
        </table>
        <!-- // END COLUMNS -->
    </td>
</tr>
<tr>
    <td align="center" valign="top" style=""padding>
        <a href="#" style="display: block; margin: 40px 0 25px; padding: 8px 0 6px; border-top: 1px solid #c1c1c1; border-bottom: 1px solid #c1c1c1; width: 700px;"><img align="none" height="90" width="700" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/footer-ad.jpg" style="width: 700px; height: 90px;"></a>
    </td>
</tr>
<tr>
    <td align="center" valign="top">
        <!-- BEGIN FOOTER // -->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateFooter">
            <tr>
                <td align="center" valign="top">
                    <table border="0" cellpadding="0" cellspacing="0" width="700" class="templateContainer">
                        <tr>
                            <td valign="top" class="footerContainer" style="padding-top:10px; padding-bottom:10px;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock">
                                    <tbody class="mcnTextBlockOuter">
                                    <tr>
                                        <td valign="top" class="mcnTextBlockInner">

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" width="700" class="mcnTextContentContainer">
                                                <tbody>
                                                <tr>
                                                    <td valign="top" class="mcnTextContent" width="256" style="padding-top:9px; padding-bottom: 9px;">
                                                        <a href="#"><img align="none" height="64" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/footer-left.gif" style="width: 140px; height: 64px;" width="140"></a>
                                                    </td>
                                                    <td valign="top" class="mcnTextContent" width="311" style="padding-top:22px; padding-bottom: 9px;">
                                                        <table>
                                                            <tr>
                                                                <td colspan="6" align="center">
                                                                    <a href="#"><img align="none" height="15" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/footer-center.gif" style="width: 186px; height: 15px;" width="186"></a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="30">
                                                                    <a href="http://instagram.com/theinfluence"><img align="none" height="20" width="20" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/social-instagram.gif" style="width: 20px; height: 20px;"></a>
                                                                </td>
                                                                <td width="30">
                                                                    <a href="http://tumblr.com/"><img align="none" height="20" width="20" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/social-tumblr.gif" style="width: 20px; height: 20px;"></a>
                                                                </td>
                                                                <td width="30">
                                                                    <a href="https://twitter.com/theinfluence"><img align="none" height="20" width="20" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/social-twitter.gif" style="width: 20px; height: 20px;"></a>
                                                                </td>
                                                                <td width="30">
                                                                    <a href="http://www.pinterest.com/theinfluencepin/"><img align="none" height="20" width="20" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/social-pinterest.gif" style="width: 20px; height: 20px;"></a>
                                                                </td>
                                                                <td width="30">
                                                                    <a href="http://youtube.com/TheInfluenceStyle"><img align="none" height="20" width="20" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/social-youtube.gif" style="width: 20px; height: 20px;"></a>
                                                                </td>
                                                                <td>
                                                                    <a href="http://fb.me/"><img align="none" height="20" width="20" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/social-facebook.gif" style="width: 20px; height: 20px;"></a>
                                                                </td>
                                                            </tr>
                                                        </table>

                                                    </td>
                                                    <td valign="top" class="mcnTextContent" style="padding-top:9px; padding-bottom: 9px; text-align: right;">
                                                        <a href="#"><img align="none" height="67" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/header-pref.gif" style="width: 92px; height: 67px;" width="92"></a>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td  colspan="3" valign="top" class="mcnTextContent" align="center" style="padding-top:0px; padding-bottom: 0px; text-transform: uppercase; color: #b3b3b3; text-align: center;">
                                                        <img align="none" height="3" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/footer-line.gif" style="width: 700px; height: 3px;" width="700">
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td  colspan="3" valign="top" class="mcnTextContent" align="center" style="padding-top:5px; padding-bottom: 9px; text-align: center;">
                                                        <img align="none" height="18" src="http://www.theinfluence.com/wp-content/themes/influence-full-design/images/email/footer-copy.gif" style="width: 237px; height: 18px;" width="237">
                                                    </td>
                                                </tr>
                                                </tbody></table>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!-- // END FOOTER -->
    </td>
</tr>
</table>
<!-- // END TEMPLATE -->
</td>
</tr>
</table>
</center>

</td>
</tr>
</table>
</div>


</body>
</html><?php }} ?>

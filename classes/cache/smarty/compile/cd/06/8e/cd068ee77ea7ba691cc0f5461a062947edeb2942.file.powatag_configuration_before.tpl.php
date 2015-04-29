<?php /* Smarty version Smarty-3.1.14, created on 2015-03-21 21:10:55
         compiled from "C:\re\wamp\www\prestashop\modules\powatag\views\templates\hook\powatag_configuration_before.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28432550dd04f594086-63753243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd068ee77ea7ba691cc0f5461a062947edeb2942' => 
    array (
      0 => 'C:\\re\\wamp\\www\\prestashop\\modules\\powatag\\views\\templates\\hook\\powatag_configuration_before.tpl',
      1 => 1426968651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28432550dd04f594086-63753243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'marketing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_550dd04f824511_34795376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550dd04f824511_34795376')) {function content_550dd04f824511_34795376($_smarty_tpl) {?>

<div id="powatag_marketing">
<div id="logo">
    <h1><?php echo smartyTranslate(array('s'=>'PowaTag','mod'=>'powatag'),$_smarty_tpl);?>
</h1>
</div>
<?php if ($_smarty_tpl->tpl_vars['marketing']->value){?>
<div id="powatag_container">
    

    <div id="powatag_content">

        <div id="sidebar">
            <h2><?php echo smartyTranslate(array('s'=>'PowaTag Features','mod'=>'powatag'),$_smarty_tpl);?>
</h2>

            <ul id="features">
                <li><?php echo smartyTranslate(array('s'=>'Increase mobile & online conversion rates','mod'=>'powatag'),$_smarty_tpl);?>
</li>
                <li><?php echo smartyTranslate(array('s'=>'Sell anywhere, anytime','mod'=>'powatag'),$_smarty_tpl);?>
</li>
                <li><?php echo smartyTranslate(array('s'=>'Enable one touch purchasing','mod'=>'powatag'),$_smarty_tpl);?>
</li>
                <li><?php echo smartyTranslate(array('s'=>'Omni-channel solution that opens up new sales channels','mod'=>'powatag'),$_smarty_tpl);?>
</li>
                <li><?php echo smartyTranslate(array('s'=>'Engage, incentivise and reward customer loyalty','mod'=>'powatag'),$_smarty_tpl);?>
</li>
            </ul>

            <iframe width="413" height="210"
                    src="<?php echo smartyTranslate(array('s'=>'http://www.youtube.com/embed/or0L7UnaP6g?controls=0&amp;showinfo=0&amp;rel=0','mod'=>'powatag'),$_smarty_tpl);?>
"
                    frameborder="0" allowfullscreen></iframe>

            <p class="user-manual">
                <?php echo smartyTranslate(array('s'=>'For further support','mod'=>'powatag'),$_smarty_tpl);?>
,
                <a href="<?php echo smartyTranslate(array('s'=>'http://fe-dev.powaweb.io/pdf/usermanual.pdf','mod'=>'powatag'),$_smarty_tpl);?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'click here to download the PowaTag User Manual','mod'=>'powatag'),$_smarty_tpl);?>
​
                </a>
            </p>
        </div>

        <div id="powatag_main">
            <h2>
            <span class="header-main">
                <?php echo smartyTranslate(array('s'=>'PowaTag','mod'=>'powatag'),$_smarty_tpl);?>

            </span>
            <span class="header-note">
                <?php echo smartyTranslate(array('s'=>'business freedom is knowing your customer','mod'=>'powatag'),$_smarty_tpl);?>

            </span>
            </h2>

            <p>
                <?php echo smartyTranslate(array('s'=>'PowaTag is an exciting new mobile business solution that seamlessly integrates the physical and online experience to transform the future of shopping and your business.','mod'=>'powatag'),$_smarty_tpl);?>

            </p>

            <p>
                <?php echo smartyTranslate(array('s'=>'As retail\'s missing link, PowaTag combines the instant gratification of real world shopping with the speed, convenience and informative nature of internet retailing.','mod'=>'powatag'),$_smarty_tpl);?>

            </p>

            <p>
                <?php echo smartyTranslate(array('s'=>'PowaTag acts as a mobile payment enabler, integrating directly with PrestaShop\'s platform and existing payment infrastructures. ​','mod'=>'powatag'),$_smarty_tpl);?>

            </p>

            <h4><?php echo smartyTranslate(array('s'=>'The advantages of PowaTag','mod'=>'powatag'),$_smarty_tpl);?>
:</h4>

            <ul id="adventages">
                <li>
                    <?php echo smartyTranslate(array('s'=>'Offer a seamless consumer experience across all purchase channels','mod'=>'powatag'),$_smarty_tpl);?>

                </li>
                <li>
                    <?php echo smartyTranslate(array('s'=>'Allow customers to purchase straight from your product pages','mod'=>'powatag'),$_smarty_tpl);?>

                </li>
                <li>
                    <?php echo smartyTranslate(array('s'=>'Enable customers to download your catalogue and purchase at their leisure from their mobile','mod'=>'powatag'),$_smarty_tpl);?>

                </li>
                <li>
                    <?php echo smartyTranslate(array('s'=>'Experience an omni-channel solution that truly opens up new sales channels, generating new revenue for you','mod'=>'powatag'),$_smarty_tpl);?>

                </li>
                <li>
                    <?php echo smartyTranslate(array('s'=>'Sell directly and instantly from online advertising, broadcast and print','mod'=>'powatag'),$_smarty_tpl);?>

                </li>
                <li>
                    <?php echo smartyTranslate(array('s'=>'Interact with customers – engaging, incentivising, rewarding loyalty and generating action','mod'=>'powatag'),$_smarty_tpl);?>

                </li>
                <li>
                    <?php echo smartyTranslate(array('s'=>'Drive and support impulse purchases, by simplifying the buying experience within existing e-commerce workflows','mod'=>'powatag'),$_smarty_tpl);?>

                </li>
            </ul>

            <div id="register-wrapper">
                <div class="register">
                    <a class="button_powa" href="<?php echo smartyTranslate(array('s'=>'http://www.powatag.com/page/prestashop','mod'=>'powatag'),$_smarty_tpl);?>
">
                        <?php echo smartyTranslate(array('s'=>'Register now','mod'=>'powatag'),$_smarty_tpl);?>

                    </a>
                </div>

                <div class="questions">
                    <?php echo smartyTranslate(array('s'=>'Got questions?','mod'=>'powatag'),$_smarty_tpl);?>
 <br/>
                    <?php echo smartyTranslate(array('s'=>'Visit our website','mod'=>'powatag'),$_smarty_tpl);?>

                    <a href="<?php echo smartyTranslate(array('s'=>'http://powatag.com','mod'=>'powatag'),$_smarty_tpl);?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'powatag.com','mod'=>'powatag'),$_smarty_tpl);?>
</a>
                    or email
                    <a href="mailto:<?php echo smartyTranslate(array('s'=>'powatagmerchantsupport@powa.com','mod'=>'powatag'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'PrestaShop Enquiry','mod'=>'powatag'),$_smarty_tpl);?>
</a>
                </div>
            </div>

            <div class="clearfix clear"></div>
        </div>
    </div>
</div>
<div class="register-question">
    <img src="../modules/powatag/img/logo_transparent.png" alt="">
    <?php echo smartyTranslate(array('s'=>'Have you registered and accepted our T&Cs ?','mod'=>'powatag'),$_smarty_tpl);?>

    <input type="radio" name="powa_registered" class="powa_register_rb" id="powa_register_rb1" value="no" checked > No &nbsp;&nbsp;
    <input type="radio" name="powa_registered" class="powa_register_rb" value="yes"> Yes
</div>

<script>
	$(document).ready(function(){
		$('#powatag_form').hide();
		$('#powatag_form_please_use').hide();
		$('.powa_register_rb').change(function () {
        if ($("#powa_register_rb1").attr("checked")) {
            $('#powatag_form').hide();
			$('#powatag_form_please_use').hide();
            $('#powatag_container').show();
        }
        else {
            $('#powatag_form').show();
			$('#powatag_form_please_use').show();
            $('#powatag_container').hide();
        }
    });
		
		
	})
</script>

<?php }else{ ?>

<!--
<fieldset> 
<img src="../modules/powatag/img/logo_transparent.png" alt="">
	<?php echo smartyTranslate(array('s'=>'To start transacting with your customers, switch to a live PowaTag account by','mod'=>'powatag'),$_smarty_tpl);?>
<a href="<?php echo smartyTranslate(array('s'=>'http://www.powatag.com/page/prestashop','mod'=>'powatag'),$_smarty_tpl);?>
" target="_blank"> <?php echo smartyTranslate(array('s'=>'contacting us','mod'=>'powatag'),$_smarty_tpl);?>
</a>
</fieldset>

<br/>
-->
<?php }?>
<fieldset id="powatag_form_please_use">
        <?php echo smartyTranslate(array('s'=>'Please use the information provided during the PowaTag registration process to complete the fields below','mod'=>'powatag'),$_smarty_tpl);?>
<br>
        <?php echo smartyTranslate(array('s'=>'To start transacting with your customers, switch to a live PowaTag account by','mod'=>'powatag'),$_smarty_tpl);?>
<a href="<?php echo smartyTranslate(array('s'=>'http://www.powatag.com/page/prestashop','mod'=>'powatag'),$_smarty_tpl);?>
" target="_blank"> <?php echo smartyTranslate(array('s'=>'contacting us','mod'=>'powatag'),$_smarty_tpl);?>
</a>
</fieldset>
</div>
<script>
	$(document).ready(function(){
		$('#powatag_marketing').insertBefore('#powatag_form');
	})
</script>
<div id="powatag_form">
<?php }} ?>
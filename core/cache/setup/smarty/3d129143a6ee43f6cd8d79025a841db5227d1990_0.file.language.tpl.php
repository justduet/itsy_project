<?php
/* Smarty version 4.5.2, created on 2024-05-24 20:58:40
  from '/Applications/MAMP/htdocs/modx_project/setup/templates/language.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6650ff80042380_40615819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d129143a6ee43f6cd8d79025a841db5227d1990' => 
    array (
      0 => '/Applications/MAMP/htdocs/modx_project/setup/templates/language.tpl',
      1 => 1712733460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6650ff80042380_40615819 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="install" action="?" method="post">
    <input type="hidden" name="proceed" value="next">

    <div class="content-wrap">

        <div class="welcome_text">
            <h2><?php echo $_smarty_tpl->tpl_vars['_lang']->value['welcome'];?>
</h2>
            <div><?php echo $_smarty_tpl->tpl_vars['_lang']->value['welcome_message'];?>
</div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['restarted']->value) {?>
            <br class="clear" />
            <br class="clear" />
            <p class="note"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['restarted_msg'];?>
</p>
        <?php }?>

        <div class="select_lang">

            <p class="title"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['choose_language'];?>
:</p>

            <div class="languages-wrapper">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['popular']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                    <label
                        class="languages-item languages-item--popular <?php if ($_smarty_tpl->tpl_vars['language']->value['code'] == $_smarty_tpl->tpl_vars['current']->value) {?>languages-item--active<?php }?>"
                        for="language_<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
"
                    >
                        <input
                            type="radio"
                            class="languages-item__radio"
                            tabindex="0"
                            name="language"
                            id="language_<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
"
                            value="<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
"
                            <?php if ($_smarty_tpl->tpl_vars['language']->value['code'] == $_smarty_tpl->tpl_vars['current']->value) {?>checked="checked"<?php }?>
                        >
                        <div class="languages-item__inner">
                            <div class="languages-item__inner__native">
                                <?php if (!$_smarty_tpl->tpl_vars['language']->value['native']) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>

                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['language']->value['native'];?>

                                <?php }?>
                            </div>
                            <div class="language__name">
                                <?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
 <span class="languages-item__inner__code" aria-hidden="true"><?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
</span>
                            </div>
                        </div>
                    </label>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['others']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                    <label
                        class="languages-item languages-item--other"
                        for="language_<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
"
                    >
                        <input
                            type="radio"
                            class="languages-item__radio"
                            tabindex="0"
                            name="language"
                            id="language_<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
"
                            value="<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
"
                            <?php if ($_smarty_tpl->tpl_vars['language']->value['code'] == $_smarty_tpl->tpl_vars['current']->value) {?>checked="checked"<?php }?>
                        >
                        <div class="languages-item__inner">
                            <div class="languages-item__inner__native">
                                <?php if (!$_smarty_tpl->tpl_vars['language']->value['native']) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>

                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['language']->value['native'];?>

                                <?php }?>
                            </div>
                            <div class="language__name">
                                <?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
 <span class="languages-item__inner__code" aria-hidden="true"><?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
</span>
                            </div>
                        </div>
                    </label>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <div class="languages-item languages__toggler-wrapper">
                    <button class="languages__toggler languages__toggler--all" id="toggle--all" type="button">
                        <span><?php echo $_smarty_tpl->tpl_vars['_lang']->value['all_languages'];?>
</span>
                    </button>
                    <button class="languages__toggler languages__toggler--popular" id="toggle--popular" type="button" style="display: none;">
                        <span><?php echo $_smarty_tpl->tpl_vars['_lang']->value['only_popular'];?>
</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
>
        // Helpers
        var showElement = function(e) {
            e.style.display = 'block';
        }
        var hideElement = function(e) {
            e.style.display = 'none';
        }

        // State
        var languageSelected = '<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
'; // value passed from php-script
        var languagesMode = 'popular'; // 'popular' | 'all'
        var isSwitchingLanguageGroups = false;

        // Interactive elements
        var showAllLanguagesButton = document.getElementById('toggle--all');
        var showPopularLanguagesButton = document.getElementById('toggle--popular');

        // Updating DOM dependings on State
        function renderLanguagesForm() {
            var languageItems = document.querySelectorAll('.languages-item');
            for (var i = 0; i < languageItems.length; i++) {
                languageItems[i].classList.remove('languages-item--active');
                var radio = languageItems[i].querySelector('input');
                if (radio && radio.value === languageSelected) {
                    languageItems[i].classList.add('languages-item--active');
                }
            }

            switch (languagesMode) {
                case 'all': {
                    showElement(showPopularLanguagesButton);
                    hideElement(showAllLanguagesButton);
                    if (isSwitchingLanguageGroups) {
                        showPopularLanguagesButton.focus();
                        isSwitchingLanguageGroups = false;
                    }

                    var languageItemsOther = document.querySelectorAll('.languages-item--other');
                    for (var i = 0; i < languageItemsOther.length; i++) {
                        showElement(languageItemsOther[i]);
                    }
                    break;
                }
                case 'popular': {
                    showElement(showAllLanguagesButton);
                    hideElement(showPopularLanguagesButton);
                    if (isSwitchingLanguageGroups) {
                        showAllLanguagesButton.focus();
                        isSwitchingLanguageGroups = false;
                    }
                    var languageItemsOther = document.querySelectorAll('.languages-item--other');
                    for (var i = 0; i < languageItemsOther.length; i++) {
                        hideElement(languageItemsOther[i]);
                    }
                    break;
                }
            }
        }

        // Event handlers
        var languageItemsRadio = document.querySelectorAll('.languages-item__radio');
        for (var i = 0; i < languageItemsRadio.length; i++) {
            languageItemsRadio[i].addEventListener('change', function(e) {
                languageSelected = e.target.value;
                renderLanguagesForm();
            })
        }
        showAllLanguagesButton.addEventListener('click', function(event) {
            languagesMode = 'all';
            isSwitchingLanguageGroups = true;
            renderLanguagesForm();
        })
        showPopularLanguagesButton.addEventListener('click', function(event) {
            languagesMode = 'popular';
            isSwitchingLanguageGroups = true;
            renderLanguagesForm();
        })
    <?php echo '</script'; ?>
>

    <div class="setup_navbar">
        <button type="submit" id="modx-next" class="button" autofocus="autofocus">
            <?php echo $_smarty_tpl->tpl_vars['_lang']->value['next'];?>
 <i class="fas fa-chevron-right"></i>
        </button>
    </div>

</form>
<?php }
}

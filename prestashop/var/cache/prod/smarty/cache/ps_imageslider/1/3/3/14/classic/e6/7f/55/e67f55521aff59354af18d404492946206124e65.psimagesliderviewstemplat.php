<?php
/* Smarty version 3.1.43, created on 2022-12-11 21:31:53
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63963e395b7634_03606813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1670679452,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_63963e395b7634_03606813 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Pokaz slajdów">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://localhost:8080/index.php?id_category=23&amp;controller=category&amp;id_lang=2">
            <figure>
              <img src="https://localhost/modules/ps_imageslider/images/1a8267cc18d81d3095fe8402ce25f70c16143900_8b0b84c697990f28292dfc1789a009d7.jpg" alt="sample-1" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Akcesoria dla lalek</h2>
                  <div class="caption-description"><h3><span style="color:#ffffff;">Dodatki dla Twojej lalki</span></h3>
<p style="font-size:11px;font-weight:400;"></p>
<p class="MsoNormal"><span style="font-size:8.5pt;line-height:107%;font-family:Verdana, sans-serif;color:#ffffff;">W naszej ofercie mamy przeróżne akcesoria dla lalek. Znajdziesz tu ubranka, domki oraz wiele innych! Kliknij i sprawdź sam :)</span></p>
<p></p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost:8080/index.php?id_category=24&amp;controller=category&amp;id_lang=2">
            <figure>
              <img src="https://localhost/modules/ps_imageslider/images/3d9c604b23230b9e70ad8ea79081adbb62677a15_barbieittakestwosdp_background_na_01_en-1280.jpg" alt="sample-2" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Księżniczki i wróżki</h2>
                  <div class="caption-description"><p class="MsoNormal" style="line-height:normal;"><span style="color:#ffffff;"><b><span style="font-size:13.5pt;font-family:Verdana, sans-serif;">Lubisz księżniczki i wróżki?</span></b></span></p>
<p><span style="color:#ffffff;"><b></b></span></p>
<p><span style="color:#ffffff;"><b></b></span></p>
<p class="MsoNormal" style="line-height:normal;"><span style="font-size:8.5pt;font-family:Verdana, sans-serif;color:#ffffff;">Świetnie się składa! W naszej ofercie jest każda księżniczka jaka przyjdzie Ci na myśl. Sprawdź sam :)</span></p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost:8080/index.php?id_category=17&amp;controller=category&amp;id_lang=2">
            <figure>
              <img src="https://localhost/modules/ps_imageslider/images/742183a3ac40aeab63e6cdce0b0ad5e789e1cf70_maxresdefault (1).jpg" alt="sample-3" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Zwierzaki i minilalki</h2>
                  <div class="caption-description"><h3><span style="font-family:Verdana, sans-serif;color:#ffffff;">Marzysz o zwierzaku dla swojej lalki?</span></h3>
<p></p>
<p style="word-spacing:0px;"><span style="font-size:8.5pt;font-family:Verdana, sans-serif;color:#ffffff;">W tej sekcji znajdziesz kompana dla swojej lalki i nie tylko! :)</span></p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Przyciski karuzeli">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Poprzedni">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Następny">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}

<?
include("includes/global.inc.php");
session_start();
$l = $_SESSION['lang'];

?>
<!DOCTYPE html>
<!-- saved from url=(0038)https://tilda.cc/tpls/page/?q=alliance -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="/images/message.png" type="image/x-icon">
    <style type="text/css">
        .gm-style .gm-style-mtc label, .gm-style .gm-style-mtc div {
            font-weight: 400
        }
    </style>
    <link type="text/css" rel="stylesheet" href="css/css">
    <style type="text/css">
        .gm-style .gm-style-cc span, .gm-style .gm-style-cc a, .gm-style .gm-style-mtc div {
            font-size: 10px
        }

        @media print {
            .gm-style .gmnoprint, .gmnoprint {
                display: none
            }
        }

        @media screen {
            .gm-style .gmnoscreen, .gmnoscreen {
                display: none
            }
        }

        .gm-style-pbc {
            transition: opacity ease-in-out;
            background-color: rgba(0, 0, 0, 0.45);
            text-align: center
        }

        .gm-style-pbt {
            font-size: 22px;
            color: white;
            font-family: Roboto, Arial, sans-serif;
            position: relative;
            margin: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        .gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }

        .gm-style img {
            max-width: none;
        }

        .modal p {
            text-align: justify;
            text-justify: auto;
            line-height: 1.5;
            font-family: 'Open Sans', sans-serif;
            color: #000;
        }

    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= lang('Международная конференция') ?></title>
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-dns-prefetch-control" content="on">

    <!-- Assets -->

    <link rel="stylesheet" href="/css/tilda-grid-3.0.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="/css/tilda-blocks-2.12.css?1" type="text/css" media="all">
    <link rel="stylesheet" href="/css/tilda-animation-1.0.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="/css/tilda-slds-1.4.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="/css/tilda-zoom-2.0.min.css" type="text/css" media="all">

    <script src="/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" id="tildastatscript" async=""
            src="/js/tildastat.min.js"></script>
    <script src="/js/tilda-scripts-2.8.min.js"></script>
    <script src="/js/tilda-blocks-2.7.js"></script>
    <script src="/js/tilda-animation-1.0.min.js"></script>
    <script src="/js/tilda-slds-1.4.min.js"></script>
    <script src="/js/hammer.min.js"></script>
    <script src="/js/tilda-zoom-2.0.min.js"></script>
    <script src="/js/tilda-map-1.0.min.js"></script>
    <script src="/js/lazyload-1.3.min.js"></script>

    <!--<script type="text/javascript" charset="UTF-8" src="/js/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="/js/map.js"></script>
    <script type="text/javascript" charset="UTF-8" src="/js/util.js"></script>
    <script type="text/javascript" charset="UTF-8" src="/js/marker.js"></script>
    <script type="text/javascript" charset="UTF-8"
            src="/js/infowindow.js"></script>
    
    <script type="text/javascript" charset="UTF-8" src="/js/onion.js"></script>
    <script type="text/javascript" charset="UTF-8" src="/js/controls.js"></script>
    <script type="text/javascript" charset="UTF-8" src="/js/stats.js"></script>-->

    <!-- jQuery Modal -->
    <script type="text/javascript" src="/js/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="/css/jquery.modal.min.css" type="text/css" media="all">
</head>
<body class="t-body" style="margin: 0px;" cz-shortcut-listen="true"><!--allrecords-->
<div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="678"
     data-tilda-page-id="389725" data-tilda-page-alias="alliance"
     data-tilda-formskey="b16a0f3730280f0a3d48174022fce3a2">
    <div id="rec10731557" class="r t-rec" data-animationappear="off" data-record-type="257"><!-- T228 -->
        <div id="nav10731557marker"></div>
        <div class="t228__mobile">
            <div class="t228__mobile_container">
                <div class="t228__mobile_text t-name t-name_md" field="text">&nbsp;</div>
                <div class="t228__burger"><span></span> <span></span> <span></span> <span></span></div>
            </div>
        </div>
        <div id="nav10731557" class="t228 t228__hidden t228__positionabsolute "
             style="background-color: rgba(0,0,0,0.0); height:130px; " data-bgcolor-hex="#000000"
             data-bgcolor-rgba="rgba(0,0,0,0.0)" data-navmarker="nav10731557marker" data-appearoffset=""
             data-bgopacity-two="" data-menushadow="" data-bgopacity="0.0" data-menu-items-align="right"
             data-menu="yes">
            <div class="t228__maincontainer t228__c12collumns" style="height:130px;">
                <div class="t228__padding40px"></div>
                <div class="t228__leftside">
                    <div class="t228__leftcontainer">
                        <a href="/"
                           style="color:#ffffff; font-weight: 600; letter-spacing: 0.5px; font-size: 34px;font-family: 'Open Sans', sans-serif;">
                            <?= lang('Диалог') ?>
                        </a>
                    </div>
                </div>
                <div class="t228__centerside t228__menualign_right">
                    <div class="t228__centercontainer">
                        <ul class="t228__list ">
                            <li class="t228__list_item"><a class="t-menu__link-item"
                                                           href="#presentations"
                                                           style="color:#ffffff;font-weight:600;letter-spacing:0.5px;"
                                                           data-menu-item-number="1"><?= lang('Презентации спикеров') ?></a>
                            </li>
                            <li class="t228__list_item"><a class="t-menu__link-item"
                                                           href="#speakers"
                                                           style="color:#ffffff;font-weight:600;letter-spacing:0.5px;"
                                                           data-menu-item-number="1"><?= lang('Спикеры') ?></a></li>
                            <li class="t228__list_item"><a class="t-menu__link-item"
                                                           href="#timetable"
                                                           style="color:#ffffff;font-weight:600;letter-spacing:0.5px;"
                                                           data-menu-item-number="2"><?= lang('Программа') ?></a></li>
                            <li class="t228__list_item"><a class="t-menu__link-item"
                                                           href="#contacts"
                                                           style="color:#ffffff;font-weight:600;letter-spacing:0.5px;"
                                                           data-menu-item-number="3"><?= lang('Контакты') ?></a></li>
                            <li class="t228__list_item"><a class="t-menu__link-item"
                                                           href="/blocks/lang.php?lang=ru"
                                                           style="color:#ffffff;font-weight:600;letter-spacing:0.5px;"
                                                           data-menu-item-number="3"><?= lang('RU') ?></a></li>
                            <li class="t228__list_item"><a class="t-menu__link-item"
                                                           href="/blocks/lang.php?lang=uz"
                                                           style="color:#ffffff;font-weight:600;letter-spacing:0.5px;"
                                                           data-menu-item-number="3"><?= lang('UZ') ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="t228__padding40px"></div>
            </div>
        </div>
        <style>
            @media screen and (max-width: 980px) {
                #rec10731557 .t228__leftcontainer {
                    padding: 20px;
                }
            }

            @media screen and (max-width: 980px) {
                #rec10731557 .t228__imglogo {
                    padding: 20px 0;
                }
            }</style>
        <script type="text/javascript">
            $(document).ready(function () {
                t228_highlight();
            });
            $(window).resize(function () {
                t228_setBg('10731557');
            });
            $(document).ready(function () {
                t228_setBg('10731557');
            }); </script>
        <script type="text/javascript"> $(document).ready(function () {
                t228_createMobileMenu('10731557');
            }); </script>
        <!--[if IE 8]>
        <style>#rec10731557 .t228 {
            filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#D9000000', endColorstr='#D9000000');
        }</style>
        <![endif]--></div>
    <div id="rec10355592" class="r t-rec" data-animationappear="off" data-record-type="204"><!-- cover -->
        <div class="t-cover" id="recorddiv10355592" bgimgfield="img"
             style="height:100vh; background-image:url(&#39;https://static.tildacdn.com/tild3865-3364-4234-b063-646466666364/-/resize/20x/9323706488_fcd7e2687e_o.jpg&#39;);">
            <div class="t-cover__carrier loaded" id="coverCarry10355592" data-content-cover-id="10355592"
                 data-content-cover-bg="https://static.tildacdn.com/tild3865-3364-4234-b063-646466666364/9323706488_fcd7e2687e_o.jpg"
                 data-content-cover-height="100vh" data-content-cover-parallax=""
                 style="background-image: url(&quot;https://static.tildacdn.com/tild3865-3364-4234-b063-646466666364/9323706488_fcd7e2687e_o.jpg&quot;); height: 100vh; background-attachment: scroll;"
                 src=""></div>
            <div class="t-cover__filter"
                 style="height:100vh;background-image: -moz-linear-gradient(top, rgba(19,8,242,0.70), rgba(120,0,163,0.80));background-image: -webkit-linear-gradient(top, rgba(19,8,242,0.70), rgba(120,0,163,0.80));background-image: -o-linear-gradient(top, rgba(19,8,242,0.70), rgba(120,0,163,0.80));background-image: -ms-linear-gradient(top, rgba(19,8,242,0.70), rgba(120,0,163,0.80));background-image: linear-gradient(top, rgba(19,8,242,0.70), rgba(120,0,163,0.80));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr=&#39;#4c1308f2&#39;, endColorstr=&#39;#337800a3&#39;);"></div>
            <div class="t-container">
                <div class="t-col t-col_8">
                    <div class="t-cover__wrapper t-valign_middle" style="height:100vh; position: relative;z-index: 1;">
                        <div class="t181">
                            <div data-hook-content="covercontent">
                                <div class="t181__wrapper"><h1
                                            class="t181__title t-title t-title_md t-animate t-animate_started"
                                            data-animate-style="fadeinright" data-animate-group="yes"
                                            style="transition-delay: 0s;" field="title">
                                        <span style="font-weight: 300;"><?= lang('Январь, 18 / 2018') ?><br></span>
                                        <br><?= lang('Международная конференция') ?>
                                    </h1>
                                    <div class="t181__descr t-descr t-descr_lg t-opacity_70 t-animate t-animate_started"
                                         data-animate-style="fadeinright" data-animate-group="yes"
                                         style="transition-delay: 0.3s;" field="descr">
                                        <div style="font-size:20px;"
                                             data-customstyle="yes">
                                            <?=lang('АКТУАЛЬНЫЕ ЗАДАЧИ ОБЕСПЕЧЕНИЯ УЧАСТИЯ ГРАЖДАН В ОБЩЕСТВЕННОМ И ГОСУДАРСТВЕННОМ УПРАВЛЕНИИ: ПЕРЕДОВЫЕ ИДЕИ, ИННОВАЦИИ И ТЕХНОЛОГИИ, Ташкент')?>
                                        </div>
                                    </div>
                                    <div class="t181__descr t-descr t-descr_lg t-opacity_70 t-animate t-animate_started"
                                         data-animate-style="fadeinright" data-animate-group="yes"
                                         style="transition-delay: 0.3s;" field="descr">
                                        <div style="font-size:20px;" data-customstyle="yes">
                                            <img src="/images/logolist-<?= $l ?>.png" width="80%">
                                            <!--<img src="/images/csr_<? /*=$l*/ ?>.png" height="35px" style="float: left; padding-right: 20px">
                                            <img src="/images/xq_<? /*=$l*/ ?>.png" height="35px" style="float: left; padding-right: 20px">
                                            <img src="/images/world_bank-logo.png" height="35px" >-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- arrow -->
            <div class="t-cover__arrow">
                <div class="t-cover__arrow-wrapper t-cover__arrow-wrapper_animated">
                    <div class="t-cover__arrow_mobile">
                        <svg class="t-cover__arrow-svg" style="fill:#ffffff;" x="0px" y="0px" width="38.417px"
                             height="18.592px" viewBox="0 0 38.417 18.592">
                            <g>
                                <path d="M19.208,18.592c-0.241,0-0.483-0.087-0.673-0.261L0.327,1.74c-0.408-0.372-0.438-1.004-0.066-1.413c0.372-0.409,1.004-0.439,1.413-0.066L19.208,16.24L36.743,0.261c0.411-0.372,1.042-0.342,1.413,0.066c0.372,0.408,0.343,1.041-0.065,1.413L19.881,18.332C19.691,18.505,19.449,18.592,19.208,18.592z"></path>
                            </g>
                        </svg>
                    </div>
                </div>
            </div> <!-- arrow --> </div>
    </div>
    <div id="rec10355594" class="r t-rec t-rec_pt_180 t-rec_pb_180"
         style="padding-top:180px;padding-bottom:180px;background-color:#ffffe5; " data-record-type="472"
         data-bg-color="#ffffe5" data-animationappear="off"><!-- T472 -->
        <div class="t472">
            <div class="t-container t-align_center">
                <div class="t-col t-col_10 t-prefix_1">
                    <div class="t472__title t-section__title t-title t-title_md t-margin_auto" field="title"
                         style="text-transform:uppercase;"><?= lang('О конференции') ?></div>
                    <div class="t472__descr t-section__descr t-descr t-descr_xxl t-margin_auto" field="descr">
                        <?= lang('Конференция послужит площадкой для разработки предварительного варианта Плана Действий по выявлению и внедрению инновационных методов участия граждан в принятии решений и улучшении качества государственных услуг') ?>
                        <br>
                    </div>
                </div>
                <div class="t-row t-clear">
                    <div class="t-col t-col_4">
                        <div class="t472__blockimg t-bgimg loaded" bgimgfield="img"
                             data-original="/images/1.jpg"
                             style="background: url('/images/1.jpg') center center / cover no-repeat;"></div>
                    </div>
                    <div class="t-col t-col_4">
                        <div class="t472__blockimg t-bgimg loaded" bgimgfield="img2"
                             data-original="/images/2.jpg"
                             style="background: url('/images/2.jpg') center center / cover no-repeat;"></div>
                    </div>
                    <div class="t-col t-col_4">
                        <div class="t472__blockimg t-bgimg loaded" bgimgfield="img3"
                             data-original="/images/3.jpg"
                             style="background: url('/images/3.jpg') center center / cover no-repeat;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rec17806541" class="r t-rec" data-animationappear="off" data-record-type="506"><!-- T506 -->
        <!-- cover -->
        <div class="t-cover" id="recorddiv17806541" bgimgfield="img"
             style="height:75vh; background-image:url(&#39;https://static.tildacdn.com/tild3436-3936-4035-a465-326139333964/-/resize/20x/5130967863_a78f453347_o.jpg&#39;);">
            <div class="t-cover__carrier loaded" id="coverCarry17806541" data-content-cover-id="17806541"
                 data-content-cover-bg="https://static.tildacdn.com/tild3436-3936-4035-a465-326139333964/5130967863_a78f453347_o.jpg"
                 data-content-cover-height="75vh" data-content-cover-parallax=""
                 style="background-image: url(&quot;https://static.tildacdn.com/tild3436-3936-4035-a465-326139333964/5130967863_a78f453347_o.jpg&quot;); height: 75vh; background-attachment: scroll;"></div>
            <div class="t-cover__filter"
                 style="height:75vh;background-image: -moz-linear-gradient(top, rgba(19,8,242,0.70), rgba(19,8,242,1));background-image: -webkit-linear-gradient(top, rgba(19,8,242,0.70), rgba(19,8,242,1));background-image: -o-linear-gradient(top, rgba(19,8,242,0.70), rgba(19,8,242,1));background-image: -ms-linear-gradient(top, rgba(19,8,242,0.70), rgba(19,8,242,1));background-image: linear-gradient(top, rgba(19,8,242,0.70), rgba(19,8,242,1));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr=&#39;#4c1308f2&#39;, endColorstr=&#39;#001308f2&#39;);"></div>
            <div class="t506">
                <div class="t-container">
                    <div class="t-cover__wrapper t-valign_middle" style="height:75vh;">
                        <div class="t506__wrapper" data-hook-content="covercontent">
                            <div class="t506__blockswrapper">
                                <div class="t506__col t-col t-col_4 t-item">
                                    <div class="t506__title t-title t-title_xl"
                                         field="title"><?= lang('18 спикеров') ?></div>
                                    <div class="t506__text t-descr t-descr_sm"
                                         field="descr"><?= lang('Вы встретите выдающихся профессионалов для обсуждения актуальных вопросов') ?></div>
                                </div>
                                <div class="t506__col t-col t-col_4 t-item">
                                    <div class="t506__title t-title t-title_xl" field="title2">9
                                        <br><?= lang('часов') ?>
                                    </div>
                                    <div class="t506__text t-descr t-descr_sm"
                                         field="descr2"><?= lang('У вас будет возможность принять участие в разработке стратегических планов') ?></div>
                                </div>
                                <div class="t506__col t-col t-col_4 t-item">
                                    <div class="t506__title t-title t-title_xl"
                                         field="title3"><?= lang('100 участников') ?></div>
                                    <div class="t506__text t-descr t-descr_sm"
                                         field="descr3"><?= lang('Мы пригласили профессионалов, приверженных развитию Узбекистана') ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.t506').bind('displayChanged', function () {
                    var t506_el = $("#rec17806541");
                    t506_el.find("div[data-hook-content]").css('height', 'auto');
                    var t506_hcover = t506_el.find(".t-cover").height();
                    var t506_hcontent = t506_el.find("div[data-hook-content]").outerHeight();
                    if (t506_hcontent > 300 && t506_hcover < t506_hcontent) {
                        var t506_hcontent = t506_hcontent + 120;
                        if (t506_hcontent > 1000) {
                            t506_hcontent += 100;
                        }
                        t506_el.find(".t-cover").height(t506_hcontent);
                        t506_el.find(".t-cover__filter").height(t506_hcontent);
                        t506_el.find(".t-cover__carrier").height(t506_hcontent);
                        t506_el.find(".t-cover__wrapper").height(t506_hcontent);
                        if ($isMobile == false) {
                            setTimeout(function () {
                                var t506_divvideo = t506_el.find(".t-cover__carrier");
                                if (t506_divvideo.find('iframe').length > 0) {
                                    setWidthHeightYoutubeVideo(t506_divvideo, t506_hcontent + 'px');
                                }
                            }, 2000);
                        }
                    }
                });
            });
        </script>
    </div>
    <div id="rec10792530" class="r t-rec r_anim r_showed" data-record-type="215">
        <a name="speakers" style="font-size:0;"></a>
    </div>
    <div id="rec12294107" class="r t-rec t-rec_pt_150 t-rec_pb_120"
         style="padding-top:150px;padding-bottom:120px;background-color:#ffffe5; " data-record-type="524"
         data-bg-color="#ffffe5" data-animationappear="off"><!-- t524 -->
        <div class="t524">
            <div class="t-section__container t-container">
                <div class="t-col t-col_12">
                    <div class="t-section__topwrapper t-align_center">
                        <div class="t-section__title t-title t-title_xs"
                             field="btitle"><?= lang('Знакомьтесь со спикерами') ?></div>
                        <div class="t-section__descr t-descr t-descr_xl t-margin_auto"
                             field="bdescr"><?= lang('У вас есть возможность встретить видных государственных деятелей, выдающихся профессионалов, приверженных идее развития Узбекистана!') ?></div>
                    </div>
                </div>
            </div>
            <div class="t524__container t-container">
                <div class="t524__col t-col t-col_4 t-align_center t524__col-mobstyle">
                    <div class="t524__itemwrapper t524__itemwrapper_3">
                        <div class="t524__imgwrapper t-margin_auto" style="width:250px;">
                            <a href="#speaker10" rel="modal:open">
                                <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg loaded"
                                     bgimgfield="li_img__1477996247186"
                                     data-original="/images/speakers/10.jpg"
                                     style="background-image: url('/images/speakers/10.jpg');"></div>
                            </a>
                        </div>
                        <div class="t524__wrappercenter">
                            <div class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                                 field="li_persname__1477996247186">
                                <?=lang('Содик Сафоев')?>
                            </div>
                            <div class="t524__persdescr t-descr t-descr_xxs" field="li_persdescr__1477996247186">
                                <?=lang('Первый заместитель председателя <a href="http://senat.uz/ru/structure/index.html" target="_blank">Сената Олий Мажлиса</a>')?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="t524__col t-col t-col_4 t-align_center t524__col-mobstyle">
                    <div class="t524__itemwrapper t524__itemwrapper_3">
                        <div class="t524__imgwrapper t-margin_auto" style="width:250px;">
                            <a href="#speaker8" rel="modal:open">
                                <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg loaded"
                                     bgimgfield="li_img__1477996247186"
                                     data-original="/images/speakers/8.jpg"
                                     style="background-image: url('/images/speakers/8.jpg');"></div>
                            </a>
                        </div>
                        <div class="t524__wrappercenter">
                            <div class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                                 field="li_persname__1477996247186">
                                <?=lang('Сирил Миллер')?>
                            </div>
                            <div class="t524__persdescr t-descr t-descr_xxs" field="li_persdescr__1477996247186">
                                <?= lang('Вице-президент, Европа и Центральная Азия') ?>,
                                <? if ($l == 'ru'): ?>
                                <a href="http://www.vsemirnyjbank.org/ru/about/people/c/cyril-muller" target="_blank">
                                    <? elseif ($l == 'en'): ?>
                                    <a href="http://www.worldbank.org/en/about/people/c/cyril-muller" target="_blank">
                                        <? endif; ?>
                                        WorldBank
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t524__col t-col t-col_4 t-align_center t524__col-mobstyle">
                    <div class="t524__itemwrapper t524__itemwrapper_3">
                        <div class="t524__imgwrapper t-margin_auto" style="width:250px;">
                            <a href="#speaker4" rel="modal:open">
                                <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg loaded"
                                     bgimgfield="li_img__1481897574118"
                                     data-original="/images/speakers/4.jpg"
                                     style="background-image: url('/images/speakers/4.jpg');"
                                     src=""></div>
                            </a>
                        </div>
                        <div class="t524__wrappercenter">
                            <div class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                                 field="li_persname__1481897574118"><?= lang('Владимир Норов') ?></div>
                            <div class="t524__persdescr t-descr t-descr_xxs"
                                 field="li_persdescr__1481897574118"><?= lang('Директор <a href="https://www.facebook.com/isrs.uz/" target="_blank">ИСМИ</a>') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t-clear t524__separator"></div>
                <div class="t524__col t-col t-col_4 t-align_center t524__col-mobstyle">
                    <div class="t524__itemwrapper t524__itemwrapper_3">
                        <div class="t524__imgwrapper t-margin_auto" style="width:250px;">
                            <a href="#speaker5" rel="modal:open">
                                <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg loaded"
                                     bgimgfield="li_img__1481897575898"
                                     data-original="/images/speakers/5.jpg"
                                     style="background-image: url('/images/speakers/5.jpg');"
                                     src=""></div>
                            </a>
                        </div>
                        <div class="t524__wrappercenter">
                            <div class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                                 field="li_persname__1481897575898"><?= lang('Танзила Нарбаева') ?></div>
                            <div class="t524__persdescr t-descr t-descr_xxs" field="li_persdescr__1481897575898">
                                <?=lang('Заместитель <a href="http://wcu.uz/rabariyat.html" target="_blank">Премьер-министра РУз</a>')?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t524__col t-col t-col_4 t-align_center t524__col-mobstyle">
                    <div class="t524__itemwrapper t524__itemwrapper_3">
                        <div class="t524__imgwrapper t-margin_auto" style="width:250px;">
                            <a href="#speaker2" rel="modal:open">
                                <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg loaded"
                                     bgimgfield="li_img__1477996238469"
                                     data-original="/images/speakers/2.jpg"
                                     style="background-image: url('/images/speakers/2.jpg');"></div>
                            </a>
                        </div>
                        <div class="t524__wrappercenter">
                            <div class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                                 field="li_persname__1477996238469"><?= lang('Руслан Давлетов') ?></div>
                            <div class="t524__persdescr t-descr t-descr_xxs" field="li_persdescr__1477996238469">
                                <?=lang('Министр <a href="http://www.minjust.uz/ru/about/biography/">юстиции РУз</a>')?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t524__col t-col t-col_4 t-align_center t524__col-mobstyle">
                    <div class="t524__itemwrapper t524__itemwrapper_3">
                        <div class="t524__imgwrapper t-margin_auto" style="width:250px;">
                            <a href="#speaker3" rel="modal:open">
                                <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg loaded"
                                     bgimgfield="li_img__1477996247186"
                                     data-original="/images/speakers/3.jpg"
                                     style="background-image: url('/images/speakers/3.jpg');"></div>
                            </a>
                        </div>
                        <div class="t524__wrappercenter">
                            <div class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                                 field="li_persname__1477996247186">
                                <?=lang('Хидеки Мори')?>
                            </div>
                            <div class="t524__persdescr t-descr t-descr_xxs" field="li_persdescr__1477996247186">
                                <? if ($l == 'en'): ?>
                                    <a href="http://www.vsemirnyjbank.org/ru/about/people/h/hideki-mori">WorldBank</a>
                                <? endif; ?>
                                <?= lang('Глава представительства') ?>
                                <? if ($l == 'ru'): ?>
                                    <a href="http://www.vsemirnyjbank.org/ru/about/people/h/hideki-mori">WorldBank</a>
                                <? endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t-clear t524__separator"></div>
                <div class="t524__col t-col t-col_4 t-align_center t524__col-mobstyle">
                    <div class="t524__itemwrapper t524__itemwrapper_3">
                        <div class="t524__imgwrapper t-margin_auto" style="width:250px;">
                            <a href="#speaker7" rel="modal:open">
                                <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg loaded"
                                     bgimgfield="li_img__1477995899606"
                                     data-original="/images/speakers/7.jpg"
                                     style="background-image: url('/images/speakers/1.jpg');"></div>
                            </a>
                        </div>
                        <div class="t524__wrappercenter">
                            <div class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                                 field="li_persname__1477995899606"><?= lang('Данияр Курбанов') ?></div>
                            <div class="t524__persdescr t-descr t-descr_xxs" field="li_persdescr__1477995899606">
                                <?=lang('Заместитель директора ИАЦМО')?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="t524__col t-col t-col_4 t-align_center t524__col-mobstyle">
                    <div class="t524__itemwrapper t524__itemwrapper_3">
                        <div class="t524__imgwrapper t-margin_auto" style="width:250px;">
                            <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg loaded"
                                 bgimgfield="li_img__1477995899606"
                                 data-original="/images/speakers/11.jpg"
                                 style="background-image: url('/images/speakers/11.jpg');"></div>
                        </div>
                        <div class="t524__wrappercenter">
                            <div class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                                 field="li_persname__1477995899606"><? /*=lang('Махмуд Истамов')*/ ?></div>
                            <div class="t524__persdescr t-descr t-descr_xxs" field="li_persdescr__1477995899606">
                                <? /*=lang('Заместитель мнистра')*/ ?>
                                <a href="http://www.minjust.uz/ru/about/biography/"><? /*=lang('юстиции РУз')*/ ?></a>
                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="t524__col t-col t-col_4 t-align_center t524__col-mobstyle">
                    <div class="t524__itemwrapper t524__itemwrapper_3">
                        <div class="t524__imgwrapper t-margin_auto" style="width:250px;">
                            <a href="#speaker1" rel="modal:open">
                                <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg loaded"
                                     bgimgfield="li_img__1477995899606"
                                     data-original="/images/speakers/1.jpg"
                                     style="background-image: url('/images/speakers/1.jpg');"></div>
                            </a>
                        </div>
                        <div class="t524__wrappercenter">
                            <div class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                                 field="li_persname__1477995899606"><?= lang('Акмал Бурханов') ?></div>
                            <div class="t524__persdescr t-descr t-descr_xxs" field="li_persdescr__1477995899606">
                                <?=lang('Исполнительный директор <a href="http://strategy.uz/markaz-jamoasi" target="_blank">ЦСР</a>')?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t524__col t-col t-col_4 t-align_center t524__col-mobstyle">
                    <div class="t524__itemwrapper t524__itemwrapper_3">
                        <div class="t524__imgwrapper t-margin_auto" style="width:250px;">
                            <a href="#speaker6" rel="modal:open">
                                <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg loaded"
                                     bgimgfield="li_img__1481897577591"
                                     data-original="/images/speakers/6.jpg"
                                     style="background-image: url('/images/speakers/6.jpg');"></div>
                            </a>
                        </div>
                        <div class="t524__wrappercenter">
                            <div class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                                 field="li_persname__1481897577591"><?= lang('Жамила Асанова') ?></div>
                            <div class="t524__persdescr t-descr t-descr_xxs "
                                 field="li_persdescr__1481897577591"><?= lang('Директор <a href="http://argonet.org/komanda/" target="_blank">АРГО</a>') ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="t-clear t524__separator"></div>
                <div class="toggleDivs">
                    <div class="t524__col t-col t-col_4 t-align_center t524__col-mobstyle">
                        <div class="t524__itemwrapper t524__itemwrapper_3">
                            <div class="t524__imgwrapper t-margin_auto" style="width:250px;">
                                <a href="#speaker9" rel="modal:open">
                                    <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg loaded"
                                         bgimgfield="li_img__1481897577591"
                                         data-original="/images/speakers/9.jpg"
                                         style="background-image: url('/images/speakers/9.jpg');"></div>
                                </a>
                            </div>
                            <div class="t524__wrappercenter">
                                <div class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                                     field="li_persname__1481897577591"><?= lang('Халилилло Турахужаев') ?></div>
                                <div class="t524__persdescr t-descr t-descr_xxs " field="li_persdescr__1481897577591">
                                    <?=lang('Директор')?> <?=lang('Агентства государственных услуг')?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t524__col t-col t-col_4 t-align_center t524__col-mobstyle">
                        <div class="t524__itemwrapper t524__itemwrapper_3">
                            <div class="t524__imgwrapper t-margin_auto" style="width:250px;">
                                <a href="#speaker13" rel="modal:open">
                                    <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg loaded"
                                         bgimgfield="li_img__1481897577591"
                                         data-original="/images/speakers/13.jpg"
                                         style="background-image: url('/images/speakers/13.jpg');"></div>
                                </a>
                            </div>
                            <div class="t524__wrappercenter">
                                <div class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                                     field="li_persname__1481897577591"><?= lang('Нина Колыбашкина') ?></div>
                                <div class="t524__persdescr t-descr t-descr_xxs " field="li_persdescr__1481897577591">
                                    <?=lang('Старший специалист по социальному развитию WorldBank')?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t524__col t-col t-col_4 t-align_center t524__col-mobstyle">
                        <div class="t524__itemwrapper t524__itemwrapper_3">
                            <div class="t524__imgwrapper t-margin_auto" style="width:250px;">
                                <a href="#speaker14" rel="modal:open">
                                    <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg loaded"
                                         bgimgfield="li_img__1481897577591"
                                         data-original="/images/speakers/14.jpg"
                                         style="background-image: url('/images/speakers/14.jpg');"></div>
                                </a>
                            </div>
                            <div class="t524__wrappercenter">
                                <div class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                                     field="li_persname__1481897577591"><?= lang('Хосе-Мануэль Бассат') ?></div>
                                <div class="t524__persdescr t-descr t-descr_xxs " field="li_persdescr__1481897577591">
                                    <?=lang('Советник по коммуникациям, ЕСЕАС')?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t-clear t524__separator"></div>
                    <div class="t524__col t-col t-col_4 t-align_center t524__col-mobstyle">
                        <div class="t524__itemwrapper t524__itemwrapper_3">
                            <div class="t524__imgwrapper t-margin_auto" style="width:250px;">
                                <a href="#speaker17" rel="modal:open">
                                    <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg loaded"
                                         bgimgfield="li_img__1481897577591"
                                         data-original="/images/speakers/17.jpg"
                                         style="background-image: url('/images/speakers/17.jpg');"></div>
                                </a>
                            </div>
                            <div class="t524__wrappercenter">
                                <div class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                                     field="li_persname__1481897577591"><?= lang('Мурат Абенов') ?></div>
                                <div class="t524__persdescr t-descr t-descr_xxs " field="li_persdescr__1481897577591">
                                    <?=lang('Государственный и общественный деятель Республики Казахстан')?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t524__col t-col t-col_4 t-align_center t524__col-mobstyle">
                        <div class="t524__itemwrapper t524__itemwrapper_3">
                            <div class="t524__imgwrapper t-margin_auto" style="width:250px;">
                                <a href="#speaker18" rel="modal:open">
                                    <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg loaded"
                                         bgimgfield="li_img__1481897577591"
                                         data-original="/images/speakers/18.jpg"
                                         style="background-image: url('/images/speakers/18.jpg');"></div>
                                </a>
                            </div>
                            <div class="t524__wrappercenter">
                                <div class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                                     field="li_persname__1481897577591"><?= lang('Акбар Ташкулов') ?></div>
                                <div class="t524__persdescr t-descr t-descr_xxs " field="li_persdescr__1481897577591">
                                    <?=lang('Заместитель <a href="http://new.minjust.uz/ru/about/biography/" target="_blank">министра юстиции РУз</a>')?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t524__col t-col t-col_4 t-align_center t524__col-mobstyle">
                        <div class="t524__itemwrapper t524__itemwrapper_3">
                            <div class="t524__imgwrapper t-margin_auto" style="width:250px;">
                                <a href="#speaker19" rel="modal:open">
                                    <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg loaded"
                                         bgimgfield="li_img__1481897577591"
                                         data-original="/images/speakers/19.jpg"
                                         style="background-image: url('/images/speakers/19.jpg');"></div>
                                </a>
                            </div>
                            <div class="t524__wrappercenter">
                                <div class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                                     field="li_persname__1481897577591"><?= lang('Мавлюдахон Ширинова') ?></div>
                                <div class="t524__persdescr t-descr t-descr_xxs " field="li_persdescr__1481897577591">
                                    <?=lang('Центр социально-экономического развития «Сабр»')?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t-clear t524__separator"></div>
                    <div class="t524__col t-col t-col_4 t-align_center t524__col-mobstyle">
                        <div class="t524__itemwrapper t524__itemwrapper_3">
                            <div class="t524__imgwrapper t-margin_auto" style="width:250px;">
                                <a href="#speaker20" rel="modal:open">
                                    <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg loaded"
                                         bgimgfield="li_img__1481897577591"
                                         data-original="/images/speakers/20.jpg"
                                         style="background-image: url('/images/speakers/20.jpg');"></div>
                                </a>
                            </div>
                            <div class="t524__wrappercenter">
                                <div class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                                     field="li_persname__1481897577591"><?= lang('Ойбек Исаков') ?></div>
                                <div class="t524__persdescr t-descr t-descr_xxs " field="li_persdescr__1481897577591">
                                    <?=lang('Узбекское общество инвалидов')?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t524__col t-col t-col_4 t-align_center t524__col-mobstyle">
                        <div class="t524__itemwrapper t524__itemwrapper_3">
                            <div class="t524__imgwrapper t-margin_auto" style="width:250px;">
                                <a href="#speaker21" rel="modal:open">
                                    <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg loaded"
                                         bgimgfield="li_img__1481897577591"
                                         data-original="/images/speakers/21.jpg"
                                         style="background-image: url('/images/speakers/21.jpg');"></div>
                                </a>
                            </div>
                            <div class="t524__wrappercenter">
                                <div class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                                     field="li_persname__1481897577591"><?= lang('Элина Цельмина') ?></div>
                                <div class="t524__persdescr t-descr t-descr_xxs " field="li_persdescr__1481897577591">
                                    <?=lang('Директор департамента по социально-инклюзивной политики, Министерство Благосостояния Республики Латвия')?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t524__col t-col t-col_4 t-align_center t524__col-mobstyle">
                        <div class="t524__itemwrapper t524__itemwrapper_3">
                            <div class="t524__imgwrapper t-margin_auto" style="width:250px;">
                                <a href="#speaker23" rel="modal:open">
                                    <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg loaded"
                                         bgimgfield="li_img__1481897577591"
                                         data-original="/images/speakers/23.jpg"
                                         style="background-image: url('/images/speakers/23.jpg');"></div>
                                </a>
                            </div>
                            <div class="t524__wrappercenter">
                                <div class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                                     field="li_persname__1481897577591"><?= lang('Нина Бхатт') ?></div>
                                <div class="t524__persdescr t-descr t-descr_xxs " field="li_persdescr__1481897577591">
                                    <?=lang('Руководитель направления по практическому социальному развитию, Всемирный Банк')?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="t-section__container t-container">
                <div class="t-col t-col_12">
                    <div class="t-section__bottomwrapper t-clear t-align_center "><a
                                href="#" target="" class="t-btn toggleButton"
                                style="color:#000000;border:2px solid #000000;border-radius:30px; -moz-border-radius:30px; -webkit-border-radius:30px;">
                            <table style="width:100%; height:100%;">
                                <tbody>
                                <tr>
                                    <td><?= lang('Показать больше спикеров') ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
    <div id="rec10792546" class="r t-rec r_anim r_showed" data-record-type="215">
        <a name="timetable" style="font-size:0;"></a>
    </div>
    <div id="rec10355614" class="r t-rec t-rec_pt_150 t-rec_pb_150 r_anim r_showed"
         style="padding-top:150px;padding-bottom:150px; " data-record-type="513"><!-- T513 -->
        <div class="t513">
            <div class="t-section__container t-container">
                <div class="t-col t-col_12">
                    <div class="t-section__topwrapper t-align_center">
                        <div class="t-section__title t-title t-title_xs"
                             field="btitle"><?= lang('Программа конференции') ?></div>
                        <div class="t-section__descr t-descr t-descr_xl t-margin_auto"
                             field="bdescr"><?= lang('Январь, 18 / Четверг') ?></div>
                    </div>
                </div>
            </div>
            <div class="t-container" style="background-color: #ffffe5;">
                <div class="t513__row t-row t-clear">
                    <div class="t513__leftcol t-col t-col_2 t-prefix_1">
                        <div class="t513__time t-name t-name_md"
                             field="li_time__1477062473964">08:50 – 09:00</div>
                    </div>
                    <div class="t513__rightcol t-col t-col_7 t-prefix_1">
                        <div class="t513__title t-heading t-heading_xs t513__bottommargin"
                             field="li_title__1477062473964">
                            <?=lang('Вступительное слово, цель Конференции')?>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/1.jpg"
                                     style="background-image: url('/images/speakers/1.jpg');"
                                     src=""></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Акмал Бурханов') ?>
                                        ,</strong> <?= lang('Исполнительный директор <a href="http://strategy.uz/markaz-jamoasi">ЦСР</a>') ?>
                                </div>
                            </div>
                        </div>
                        <!--<div class="t513__text t-text t-text_sm"
                             field="li_text__1477062473964">Lettering workshop with guru of pens, brushes, colapens, bamboo dip pens and other instrunents. Sarah will introduce you different styles in writing and show you how to create your own handmade lettering tools.</div>-->
                    </div>
                </div>
                <div class="t513__linewrapper t-col t-col_10 t-prefix_1">
                    <div class="t513__line"></div>
                </div>
                <div class="t513__row t-row t-clear">
                    <div class="t513__leftcol t-col t-col_2 t-prefix_1">
                        <div class="t513__time t-name t-name_md"
                             field="li_time__1477062473964">9:00 – 09:30</div>
                    </div>
                    <div class="t513__rightcol t-col t-col_7 t-prefix_1">
                        <div class="t513__title t-heading t-heading_xs t513__bottommargin"
                             field="li_title__1477062473964">
                            <?=lang('Ключевые выступления на тему «Диалог между государством и гражданами в контексте текущих реформ, инновационные формы оказания государственных услуг»')?>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/12.jpg"
                                     style="background-image: url('/images/speakers/12.jpg');"></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Улугбек Мухаммадиев') ?>
                                        ,</strong> <?= lang('Заместитель государственного советника Президента Республики Узбекистан по защите прав граждан, контролю и координации работы с обращениями физических и юридических лиц') ?>
                                </div>
                            </div>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/8.jpg"
                                     style="background-image: url('/images/speakers/8.jpg');"></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Сирил Миллер') ?>
                                        ,</strong> <?= lang('Вице-президент, Европа и Центральная Азия') ?>
                                    <a href="http://www.vsemirnyjbank.org/ru/about/people/c/cyril-muller"><?= lang('WorldBank') ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/10.jpg"
                                     style="background-image: url('/images/speakers/10.jpg');"
                                     src=""></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Содик Сафоев') ?>
                                        ,</strong> <?= lang('Первый заместитель председателя <a href="http://senat.uz/ru/structure/index.html">Сената Олий Мажлиса</a>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/5.jpg"
                                     style="background-image: url('/images/speakers/5.jpg');"
                                     src=""></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Танзила Нарбаева') ?>
                                        ,</strong> <?= lang('Заместитель <a href="http://wcu.uz/rabariyat.html">Премьер-министра РУз</a>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/4.jpg"
                                     style="background-image: url('/images/speakers/4.jpg');"></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Владимир Норов') ?>
                                        ,</strong> <?= lang('Директор <a href="https://www.facebook.com/isrs.uz/">ИСМИ</a>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/2.jpg"
                                     style="background-image: url('/images/speakers/2.jpg');"></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Руслан Давлетов') ?>
                                        ,</strong> <?= lang('Министр <a href="http://www.minjust.uz/ru/about/biography/">юстиции РУз</a>') ?>
                                </div>
                            </div>
                        </div>
                        <small>
                            <i><?= lang('Модератор: Акмал Бурханов – Исполнительный директор Центра «Стратегия развития»') ?></i>
                        </small>
                    </div>
                </div>
                <div class="t513__linewrapper t-col t-col_10 t-prefix_1">
                    <div class="t513__line"></div>
                </div>
                <div class="t513__row t-row t-clear">
                    <div class="t513__leftcol t-col t-col_2 t-prefix_1">
                        <div class="t513__time t-name t-name_md" field="li_time__1477062473964">
                            09:30 – 10:00
                        </div>
                    </div>
                    <div class="t513__rightcol t-col t-col_7 t-prefix_1">
                        <div class="t513__title t-heading t-heading_xs t513__bottommargin"
                             field="li_title__1477062473964">
                            <?=lang('Краткое видео / Презентация работы, проделанной в 2017 году в контексте реализации Стратегии действий по пяти приоритетным направлениям развития Республики Узбекистан в 2017 - 2021 годах')?>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/1.jpg"
                                     style="background-image: url('/images/speakers/1.jpg');"
                                     src=""></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Акмал Бурханов') ?>
                                        ,</strong> <?= lang('Исполнительный директор <a href="http://strategy.uz/markaz-jamoasi">ЦСР</a>') ?>
                                </div>
                            </div>
                        </div>
                        <!--<div class="t513__text t-text t-text_sm"
                             field="li_text__1477062473964">Lettering workshop with guru of pens, brushes, colapens, bamboo dip pens and other instrunents. Sarah will introduce you different styles in writing and show you how to create your own handmade lettering tools.</div>-->
                    </div>
                </div>
                <div class="t513__linewrapper t-col t-col_10 t-prefix_1">
                    <div class="t513__line"></div>
                </div>
                <div class="t513__row t-row t-clear">
                    <div class="t513__leftcol t-col t-col_2 t-prefix_1">
                        <div class="t513__time t-name t-name_md"
                             field="li_time__1477062531761">10:00 – 10:20</div>
                    </div>
                    <div class="t513__rightcol t-col t-col_7 t-prefix_1">
                        <div class="t513__title t-heading t-heading_xs t513__bottommargin"
                             field="li_title__1477062531761">
                            <?=lang('Церемония награждения «Народное признание»')?>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/12.jpg"
                                     style="background-image: url('/images/speakers/12.jpg');"></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Улугбек Мухаммадиев') ?>
                                        ,</strong> <?= lang('Заместитель государственного советника Президента Республики Узбекистан по защите прав граждан, контролю и координации работы с обращениями физических и юридических лиц') ?>
                                </div>
                            </div>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/1.jpg"
                                     style="background-image: url('/images/speakers/1.jpg');"
                                     src=""></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Акмал Бурханов') ?>
                                        ,</strong> <?= lang('Исполнительный директор <a href="http://strategy.uz/markaz-jamoasi">ЦСР</a>') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t513__linewrapper t-col t-col_10 t-prefix_1">
                    <div class="t513__line"></div>
                </div>
                <div class="t513__row t-row t-clear">
                    <div class="t513__leftcol t-col t-col_2 t-prefix_1">
                        <div class="t513__time t-name t-name_md"
                             field="li_time__1477993929463">10:20 – 10:40</div>
                    </div>
                    <div class="t513__rightcol t-col t-col_7 t-prefix_1">
                        <div class="t513__title t-heading t-heading_xs t513__bottommargin"
                             field="li_title__1477993929463">
                            <?=lang('Перерыв на кофе')?>
                        </div>
                        <!--<div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477993929463"
                                     data-original="https://static.tildacdn.com/tild3030-6631-4431-a530-336236633266/22.jpg"
                                     style="background-image: url(&quot;https://static.tildacdn.com/tild3030-6631-4431-a530-336236633266/22.jpg&quot;);"
                                     src=""></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm"
                                     field="li_persname__1477993929463"><strong>Tiffany Verson,</strong> <span
                                            style="font-weight: 300;">project manager in</span> <strong><span
                                                style="font-weight: 300;" data-redactor-tag="span"><a
                                                    href="https://tilda.cc/" target="_blank">Pixels</a></span></strong>
                                </div>
                            </div>
                        </div>
                        <div class="t513__text t-text t-text_sm"
                             field="li_text__1477993929463">Tasks may be assigned to individuals or a group and may be categorized as convergent or divergent.</div>-->
                    </div>
                </div>
                <div class="t513__linewrapper t-col t-col_10 t-prefix_1">
                    <div class="t513__line"></div>
                </div>

                <div class="t513__row t-row t-clear">
                    <div class="t513__leftcol t-col t-col_2 t-prefix_1">
                        <div class="t513__time t-name t-name_md"
                             field="li_time__1477062473964">10:40 – 11:40</div>
                    </div>
                    <div class="t513__rightcol t-col t-col_7 t-prefix_1">
                        <div class="t513__title t-heading t-heading_xs t513__bottommargin"
                             field="li_title__1477062473964">
                            <strong><?= lang('Презентация. Концепции вовлечения граждан и международная практика') ?></strong><br>
                            <?= lang('Презентации на тему «Передовой опыт и извлеченные уроки в привлечении граждан, консультировании и учет мнений в процессе принятия решений»') ?>
                            <br>
                            <small>
                                <i><?= lang('(фокус: вовлечение граждан в процесс разработки и принятия решений, внедрение предложений, последующий мониторинг и оценка)') ?></i>
                            </small>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/13.jpg"
                                     style="background-image: url('/images/speakers/13.jpg');"></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Нина Колыбашкина') ?>
                                        ,</strong> <?= lang('Старший специалист по социальному развитию WorldBank') ?>
                                </div>
                            </div>
                        </div>

                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/14.jpg"
                                     style="background-image: url('/images/speakers/14.jpg');"></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Хосе-Мануэль Бассат') ?>
                                        ,</strong> <?= lang('Советник по коммуникациям, ЕСЕАС') ?>
                                </div>
                            </div>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/6.jpg"
                                     style="background-image: url('/images/speakers/6.jpg');"></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Жамила Асанова') ?>,</strong> <?= lang('Директор') ?>
                                    <a href="http://argonet.org/komanda/"><?= lang('АРГО') ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/9.jpg"
                                     style="background-image: url('/images/speakers/9.jpg');"></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Халилилло Турахужаев') ?>
                                        ,</strong> <?= lang('Директор') ?> <?= lang('Агентства государственных услуг') ?>
                                </div>
                            </div>
                        </div>
                        <small>
                            <i><?= lang('Модератор: Улугбек Сайдиев – Руководитель проекта Центра «Стратегия развития»') ?></i>
                        </small>
                    </div>
                </div>
                <div class="t513__linewrapper t-col t-col_10 t-prefix_1">
                    <div class="t513__line"></div>
                </div>

                <div class="t513__row t-row t-clear">
                    <div class="t513__leftcol t-col t-col_2 t-prefix_1">
                        <div class="t513__time t-name t-name_md"
                             field="li_time__1477062473964">11:40 – 13:20</div>
                    </div>
                    <div class="t513__rightcol t-col t-col_7 t-prefix_1">
                        <div class="t513__title t-heading t-heading_xs t513__bottommargin"
                             field="li_title__1477062473964">
                            <strong><?= lang('Панельная сессия 1') ?></strong><br>
                            <?= lang('Обратная связь и механизмы надзора со стороны граждан для повышения качества государственных услуг') ?>
                            <br>
                            <small>
                                <i><?= lang('Открытая дискуссия на тему: «Укрепление подотчетности посредством вовлечения граждан в процессе оказания государственных услуг» (фокус: доступность информации и сложность предоставляемых услуг. отзывы граждан о качестве предоставляемых услуг; административная реформа, институциональный потенциал, мандат и мотивация; внедрение общественных советов, роль Агентства по государственным услугам и Центров Одного Окна)'); ?></i>
                            </small>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/15.jpg"
                                     style="background-image: url('/images/speakers/15.jpg');"></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Робияхон Махмудова') ?>
                                        ,</strong> <?= lang('Представитель Народных приемных Президента Республики Узбекистан') ?>
                                </div>
                            </div>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/16.jpg"
                                     style="background-image: url('/images/speakers/16.jpg');"></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Шерзод Кудбиев') ?>
                                        ,</strong> <?= lang('Хоким Мирзо-Улугбекского района города Ташкента') ?>
                                </div>
                            </div>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/17.jpg"
                                     style="background-image: url('/images/speakers/17.jpg');"></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Мурат Абенов') ?>
                                        ,</strong> <?= lang('Государственный и общественный деятель Республики Казахстан') ?>
                                </div>
                            </div>
                        </div>
                        <small><i><?= lang('Модератор: Азиза Умарова, Директор SmartGov Consulting') ?></i></small>
                    </div>
                </div>
                <div class="t513__linewrapper t-col t-col_10 t-prefix_1">
                    <div class="t513__line"></div>
                </div>
                <div class="t513__row t-row t-clear">
                    <div class="t513__leftcol t-col t-col_2 t-prefix_1">
                        <div class="t513__time t-name t-name_md"
                             field="li_time__1477994162291">13:20-14:20
                        </div>
                    </div>
                    <div class="t513__rightcol t-col t-col_7 t-prefix_1">
                        <div class="t513__title t-heading t-heading_xs" field="li_title__1477994162291">
                            <?=lang('Обед')?>
                        </div>
                    </div>
                </div>
                <div class="t513__linewrapper t-col t-col_10 t-prefix_1">
                    <div class="t513__line"></div>
                </div>

                <div class="t513__row t-row t-clear">
                    <div class="t513__leftcol t-col t-col_2 t-prefix_1">
                        <div class="t513__time t-name t-name_md"
                             field="li_time__1477062473964">14:20 – 16:00</div>
                    </div>
                    <div class="t513__rightcol t-col t-col_7 t-prefix_1">
                        <div class="t513__title t-heading t-heading_xs t513__bottommargin"
                             field="li_title__1477062473964">
                            <strong><?= lang('Панельная сессия 2') ?></strong><br>
                            <?= lang('Социальная интеграция: партнерство между государством и обществом в предоставлении социальных услуг') ?>
                            <br>
                            <small><i><?= lang('Очиқ мунозара: «Ижтимоий сектор: давлат ва жамият ўртасидаги мулоқотни ривожлантириш бўйича ҳамкорлик» (фокус: давлат хизматларини ҳамкорликда ишлаб чиқиш ва кўрсатиш, ижтимоий буюртма, ННТларда аутсорсинг имконияти мавжуд тармоқларини аниқлаш, ижтимоий интеграция)') ?></i></small>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/18.jpg"
                                     style="background-image: url('/images/speakers/18.jpg');"></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Акбар Ташкулов') ?>,</strong> <?= lang('заместитель') ?>
                                    <a href="http://new.minjust.uz/ru/about/biography/"><?= lang('министра юстиции РУз') ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/22.jpg"
                                     style="background-image: url('/images/speakers/22.jpg');"></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Гулнора Рахимова') ?>,</strong>
                                    <?= lang('Заведующая кафедрой Казначейского исполнения госбюджета') ?>
                                </div>
                            </div>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/19.jpg"
                                     style="background-image: url('/images/speakers/19.jpg');"></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Мавлюдахон Ширинова') ?>
                                        ,</strong> <?= lang('Центр социально-экономического развития «Сабр»') ?>
                                </div>
                            </div>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/20.jpg"
                                     style="background-image: url('/images/speakers/20.jpg');"></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Ойбек Исаков') ?>
                                        ,</strong> <?= lang('Узбекское общество инвалидов') ?>
                                </div>
                            </div>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/21.jpg"
                                     style="background-image: url('/images/speakers/21.jpg');"></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Элина Цельмина') ?>
                                        ,</strong> <?= lang('Директор департамента по социально-инклюзивной политики, Министерство Благосостояния Республики Латвия') ?>
                                </div>
                            </div>
                        </div>
                        <small><i><?= lang('Модератор: Жанна Фаттахова, Всемирный Банк') ?></i></small>
                    </div>
                </div>
                <div class="t513__linewrapper t-col t-col_10 t-prefix_1">
                    <div class="t513__line"></div>
                </div>
                <div class="t513__row t-row t-clear">
                    <div class="t513__leftcol t-col t-col_2 t-prefix_1">
                        <div class="t513__time t-name t-name_md"
                             field="li_time__1477062473964">16:00 – 16:25</div>
                    </div>
                    <div class="t513__rightcol t-col t-col_7 t-prefix_1">
                        <div class="t513__title t-heading t-heading_xs t513__bottommargin"
                             field="li_title__1477062473964">
                            <?=lang('Презентация проекта Концепции по внедрению инновационных методов вовлечения граждан в процессе принятия решений и улучшения качества государственных услуг')?>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/1.jpg"
                                     style="background-image: url('/images/speakers/1.jpg');"
                                     src=""></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Акмал Бурханов') ?>
                                        ,</strong> <?= lang('Исполнительный директор <a href="http://strategy.uz/markaz-jamoasi">ЦСР</a>') ?>
                                </div>
                            </div>
                        </div>
                        <!--<div class="t513__text t-text t-text_sm"
                             field="li_text__1477062473964">Lettering workshop with guru of pens, brushes, colapens, bamboo dip pens and other instrunents. Sarah will introduce you different styles in writing and show you how to create your own handmade lettering tools.</div>-->
                    </div>
                </div>
                <div class="t513__linewrapper t-col t-col_10 t-prefix_1">
                    <div class="t513__line"></div>
                </div>
                <div class="t513__row t-row t-clear">
                    <div class="t513__leftcol t-col t-col_2 t-prefix_1">
                        <div class="t513__time t-name t-name_md"
                             field="li_time__1477994162291">16:25 – 16:40</div>
                    </div>
                    <div class="t513__rightcol t-col t-col_7 t-prefix_1">
                        <div class="t513__title t-heading t-heading_xs" field="li_title__1477994162291">
                            <?=lang('Налаживание связей (перерыв на кофе)')?>
                        </div>
                    </div>
                </div>
                <div class="t513__linewrapper t-col t-col_10 t-prefix_1">
                    <div class="t513__line"></div>
                </div>

                <div class="t513__row t-row t-clear">
                    <div class="t513__leftcol t-col t-col_2 t-prefix_1">
                        <div class="t513__time t-name t-name_md"
                             field="li_time__1477062473964">16:40 – 17:50</div>
                    </div>
                    <div class="t513__rightcol t-col t-col_7 t-prefix_1">
                        <div class="t513__title t-heading t-heading_xs t513__bottommargin"
                             field="li_title__1477062473964">
                            <strong><?= lang('Вопросы и ответы') ?></strong><br>
                            <?= lang('Сцена открыта для обсуждения и мнений участников. Комментарии и презентации партнеров из числа международных организаций о мероприятиях, запланированных в поддержку Концепции по внедрению инновационных методов вовлечения граждан в процессы принятия решений и улучшения качества государственных услуг') ?>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/7.jpg"
                                     style="background-image: url('/images/speakers/7.jpg');"
                                     src=""></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Данияр Курбанов') ?>
                                        ,</strong> <?= lang('Заместитель директора Информационно-аналитического центра международных отношений при МИД Республики Узбекистан') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t513__linewrapper t-col t-col_10 t-prefix_1">
                    <div class="t513__line"></div>
                </div>

                <div class="t513__row t-row t-clear">
                    <div class="t513__leftcol t-col t-col_2 t-prefix_1">
                        <div class="t513__time t-name t-name_md"
                             field="li_time__1477062473964">17:50 – 18:00</div>
                    </div>
                    <div class="t513__rightcol t-col t-col_7 t-prefix_1">
                        <div class="t513__title t-heading t-heading_xs t513__bottommargin"
                             field="li_title__1477062473964">
                            <?=lang('Подведение итогов')?>
                        </div>
                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/1.jpg"
                                     style="background-image: url('/images/speakers/1.jpg');"
                                     src=""></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Акмал Бурханов') ?>
                                        ,</strong> <?= lang('Исполнительный директор <a href="http://strategy.uz/markaz-jamoasi">ЦСР</a>') ?>
                                </div>
                            </div>
                        </div>

                        <div class="t513__personwrapper t513__bottommargin">
                            <div class="t513__personimgwrapper">
                                <div class="t513__img t-bgimg loaded" bgimgfield="li_img__1477062473964"
                                     data-original="/images/speakers/231.jpg"
                                     style="background-image: url('/images/speakers/23.jpg');"
                                     src=""></div>
                            </div>
                            <div class="t513__persontextwrapper">
                                <div class="t513__persname t-descr t-descr_sm" field="li_persname__1477062473964">
                                    <strong><?= lang('Нина Бхатт') ?>
                                        ,</strong> <?= lang('Руководитель направления по практическому социальному развитию, Всемирный Банк') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t513__linewrapper t-col t-col_10 t-prefix_1">
                    <div class="t513__line"></div>
                </div>
            </div>
            <!--<div class="t-section__container t-container">
                <div class="t-col t-col_12">
                    <div class="t-section__bottomwrapper t-clear t-align_center ">
							<a
                                href="/" target="" class="t-btn"
                                style="color:#000000;border:2px solid #000000;border-radius:100px; -moz-border-radius:100px; -webkit-border-radius:100px;">
                            <table style="width:100%; height:100%;">
                                <tbody>
                                <tr>
                                    <td>Download schedule</td>
                                </tr>
                                </tbody>
                            </table>
                        </a></div>
                </div>
            </div>-->
        </div>
    </div>

    <!--<div id="rec10355616" class="r t-rec" data-animationappear="off" data-record-type="205">&lt;!&ndash; cover &ndash;&gt;
        <div class="t-cover" id="recorddiv10355616" bgimgfield="img"
             style="height:90vh; background-image:url(&#39;https://static.tildacdn.com/tild3761-3566-4535-a230-306237313835/-/resize/20x/8122335521_5f7ee2ac09_k.jpg&#39;);">
            <div class="t-cover__carrier" id="coverCarry10355616" data-content-cover-id="10355616"
                 data-content-cover-bg="https://static.tildacdn.com/tild3761-3566-4535-a230-306237313835/8122335521_5f7ee2ac09_k.jpg"
                 data-content-cover-height="90vh" data-content-cover-parallax="fixed"
                 style="background-image:url(&#39;&#39;);height:90vh; " src=""></div>
            <div class="t-cover__filter"
                 style="height:90vh;background-image: -moz-linear-gradient(top, rgba(0,9,255,0.80), rgba(0,9,255,0.90));background-image: -webkit-linear-gradient(top, rgba(0,9,255,0.80), rgba(0,9,255,0.90));background-image: -o-linear-gradient(top, rgba(0,9,255,0.80), rgba(0,9,255,0.90));background-image: -ms-linear-gradient(top, rgba(0,9,255,0.80), rgba(0,9,255,0.90));background-image: linear-gradient(top, rgba(0,9,255,0.80), rgba(0,9,255,0.90));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr=&#39;#330009ff&#39;, endColorstr=&#39;#190009ff&#39;);"></div>
            <div class="t-container">
                <div class="t-width t-width_10" style="margin:0 auto;">
                    <div class="t-cover__wrapper t-valign_middle" style="height:90vh; position: relative;z-index:1;">
                        <div class="t182">
                            <div data-hook-content="covercontent">
                                <div class="t182__wrapper">
                                    <h1 class="t182__title t-title t-title_xl" field="title">
                                        <div style="line-height:90px;" data-customstyle="yes"><span style="font-weight: 300;">
                                            <strong>
                                                <span style="font-size: 30px;" data-redactor-tag="span">Презентации спикеров</span>
                                                <br>
                                            </strong>


                                        </span>

                                            <div class="presentations">
                                                <div class="presentation-item">
                                                    <div class="t524__persname t-name t-name_lg t524__bottommargin_sm">
                                                        Презентация 1
                                                    </div>
                                                    <div class="t524__persdescr t-descr t-descr_xxs ">
                                                        tes
                                                    </div>
                                                </div>
                                                <div class="presentation-item">
                                                    Презентация 2
                                                </div>
                                                <div class="presentation-item">
                                                    Презентация 3
                                                </div>
                                                <div class="presentation-item">
                                                    Презентация 4
                                                </div>
                                                <div class="presentation-item">
                                                    Презентация 5
                                                </div>
                                                <div class="presentation-item">
                                                    Презентация 6
                                                </div>
                                            </div>

                                        </div>
                                    </h1>

                                            <table style="width:100%; height:100%;">
                                                <tbody>
                                                <tr>
                                                    <td>Buy ticket</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
</div>
<!--<div id="rec10355620" class="r t-rec t-rec_pt_150 t-rec_pb_75"
     style="padding-top:150px;padding-bottom:75px;background-color:#ffffe5; " data-record-type="33"
     data-bg-color="#ffffe5" data-animationappear="off">&lt;!&ndash; T017 &ndash;&gt;
    <div class="t017">
        <div class="t-container t-align_center">
            <div class="t-col t-col_10 t-prefix_1">
                <div class="t017__title t-title t-title_xxs" field="title">Last year conference</div>
                <div class="t017__descr t-descr t-descr_xs" field="descr"
                    >`See how it was in 2015! Last year conference was fertile and interesting.</div>
            </div>
        </div>
    </div>
</div>-->

<!--<div id="rec34263662" class="r t-rec t-rec_pt_0 t-rec_pb_120"
     style="padding-top:0px;padding-bottom:120px;background-color:#ffffe5; " data-animationappear="off"
     data-record-type="670" data-bg-color="#ffffe5">
    <div class="t670">
        <div class="t-slds">
            <div class="t-container t-slds__main">
                <div class="t-slds__container t-width t-width_10 t-margin_auto">
                    <div class="t-slds__items-wrapper t-slds_animated-none t-slds__witharrows"
                         data-slider-transition="300" data-slider-with-cycle="true"
                         data-slider-correct-height="true" data-auto-correct-mobile-width="false"
                         data-slider-initialized="true" data-slider-totalslides="4" data-slider-pos="1"
                         data-slider-cycle="" data-slider-animated=""
                         style="width: 5760px; height: 550px; transform: translate3d(-960px, 0px, 0px); touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <div class="t-slds__item t-slds__item-loaded" data-slide-index="0" style="width: 960px;">
                            <div class="t-width t-width_10 t-margin_auto" itemscope=""
                                 itemtype="http://schema.org/ImageObject">
                                <div class="t-slds__wrapper t-align_center">
                                    <meta itemprop="image"
                                          content="https://static.tildacdn.com/tild3538-3431-4437-b836-326139316233/8369677439_43067a60fe_k.jpg">
                                    <div class="t670__imgwrapper" bgimgfield="gi_img__3">
                                        <div class="t-slds__bgimg t-bgimg"
                                             data-original="https://static.tildacdn.com/tild3538-3431-4437-b836-326139316233/8369677439_43067a60fe_k.jpg"
                                             style="background-image: url(&#39;https://static.tildacdn.com/tild3538-3431-4437-b836-326139316233/-/resize/20x/8369677439_43067a60fe_k.jpg&#39;);"
                                             src=""></div>
                                        <div class="t670__separator" data-slider-image-width="960"
                                             data-slider-image-height="550" style="padding-bottom: 57.2917%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="t-slds__item t-slds__item-loaded t-slds__item_active" data-slide-index="1"
                             style="width: 960px;">
                            <div class="t-width t-width_10 t-margin_auto" itemscope=""
                                 itemtype="http://schema.org/ImageObject">
                                <div class="t-slds__wrapper t-align_center">
                                    <meta itemprop="image"
                                          content="https://static.tildacdn.com/tild6234-3166-4263-b266-326137613037/14198841286_1b4ec3b211_k.jpg">
                                    <div class="t670__imgwrapper" bgimgfield="gi_img__0">
                                        <div class="t-slds__bgimg t-bgimg"
                                             data-original="https://static.tildacdn.com/tild6234-3166-4263-b266-326137613037/14198841286_1b4ec3b211_k.jpg"
                                             style="background-image: url(&#39;https://static.tildacdn.com/tild6234-3166-4263-b266-326137613037/-/resize/20x/14198841286_1b4ec3b211_k.jpg&#39;);"
                                             src=""></div>
                                        <div class="t670__separator" data-slider-image-width="960"
                                             data-slider-image-height="550" style="padding-bottom: 57.2917%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="t-slds__item t-slds__item-loaded" data-slide-index="2" style="width: 960px;">
                            <div class="t-width t-width_10 t-margin_auto" itemscope=""
                                 itemtype="http://schema.org/ImageObject">
                                <div class="t-slds__wrapper t-align_center">
                                    <meta itemprop="image"
                                          content="https://static.tildacdn.com/tild3662-6538-4765-b165-333766643039/6218335194_997ba8265c_o.jpg">
                                    <div class="t670__imgwrapper" bgimgfield="gi_img__1">
                                        <div class="t-slds__bgimg t-bgimg"
                                             data-original="https://static.tildacdn.com/tild3662-6538-4765-b165-333766643039/6218335194_997ba8265c_o.jpg"
                                             style="background-image: url(&#39;https://static.tildacdn.com/tild3662-6538-4765-b165-333766643039/-/resize/20x/6218335194_997ba8265c_o.jpg&#39;);"
                                             src=""></div>
                                        <div class="t670__separator" data-slider-image-width="960"
                                             data-slider-image-height="550" style="padding-bottom: 57.2917%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="t-slds__item" data-slide-index="3" style="width: 960px;">
                            <div class="t-width t-width_10 t-margin_auto" itemscope=""
                                 itemtype="http://schema.org/ImageObject">
                                <div class="t-slds__wrapper t-align_center">
                                    <meta itemprop="image"
                                          content="https://static.tildacdn.com/tild3930-3931-4535-b661-383863613762/3663073095_a023602e06_o.jpg">
                                    <div class="t670__imgwrapper" bgimgfield="gi_img__2">
                                        <div class="t-slds__bgimg t-bgimg"
                                             data-original="https://static.tildacdn.com/tild3930-3931-4535-b661-383863613762/3663073095_a023602e06_o.jpg"
                                             style="background-image: url(&#39;https://static.tildacdn.com/tild3930-3931-4535-b661-383863613762/-/resize/20x/3663073095_a023602e06_o.jpg&#39;);"></div>
                                        <div class="t670__separator" data-slider-image-width="960"
                                             data-slider-image-height="550" style="padding-bottom: 57.2917%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="t-slds__item  t-slds__item-loaded" data-slide-index="4" style="width: 960px;">
                            <div class="t-width t-width_10 t-margin_auto" itemscope=""
                                 itemtype="http://schema.org/ImageObject">
                                <div class="t-slds__wrapper t-align_center">
                                    <meta itemprop="image"
                                          content="https://static.tildacdn.com/tild3538-3431-4437-b836-326139316233/8369677439_43067a60fe_k.jpg">
                                    <div class="t670__imgwrapper" bgimgfield="gi_img__3">
                                        <div class="t-slds__bgimg t-bgimg"
                                             data-original="https://static.tildacdn.com/tild3538-3431-4437-b836-326139316233/8369677439_43067a60fe_k.jpg"
                                             style="background-image: url(&#39;https://static.tildacdn.com/tild3538-3431-4437-b836-326139316233/-/resize/20x/8369677439_43067a60fe_k.jpg&#39;);"
                                             src=""></div>
                                        <div class="t670__separator" data-slider-image-width="960"
                                             data-slider-image-height="550" style="padding-bottom: 57.2917%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="t-slds__item" data-slide-index="5" style="width: 960px;">
                            <div class="t-width t-width_10 t-margin_auto" itemscope=""
                                 itemtype="http://schema.org/ImageObject">
                                <div class="t-slds__wrapper t-align_center">
                                    <meta itemprop="image"
                                          content="https://static.tildacdn.com/tild6234-3166-4263-b266-326137613037/14198841286_1b4ec3b211_k.jpg">
                                    <div class="t670__imgwrapper" bgimgfield="gi_img__0">
                                        <div class="t-slds__bgimg t-bgimg"
                                             data-original="https://static.tildacdn.com/tild6234-3166-4263-b266-326137613037/14198841286_1b4ec3b211_k.jpg"
                                             style="background-image: url(&#39;https://static.tildacdn.com/tild6234-3166-4263-b266-326137613037/-/resize/20x/14198841286_1b4ec3b211_k.jpg&#39;);"></div>
                                        <div class="t670__separator" data-slider-image-width="960"
                                             data-slider-image-height="550" style="padding-bottom: 57.2917%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t-slds__arrow_container ">
                    <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-left" data-slide-direction="left"
                         style="height: 550px;">
                        <div class="t-slds__arrow t-slds__arrow-left ">
                            <div class="t-slds__arrow_body t-slds__arrow_body-left" style="width: 21px;">
                                <svg style="display: block" viewBox="0 0 21.3 41" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>Left</desc>
                                    <polyline fill="none" stroke="#000000" stroke-linejoin="butt"
                                              stroke-linecap="butt" stroke-width="1"
                                              points="0.5,0.5 20.5,20.5 0.5,40.5"></polyline>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-right" data-slide-direction="right"
                         style="height: 550px;">
                        <div class="t-slds__arrow t-slds__arrow-right ">
                            <div class="t-slds__arrow_body t-slds__arrow_body-right" style="width: 21px;">
                                <svg style="display: block" viewBox="0 0 21.3 41" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>Right</desc>
                                    <polyline fill="none" stroke="#000000" stroke-linejoin="butt"
                                              stroke-linecap="butt" stroke-width="1"
                                              points="0.5,0.5 20.5,20.5 0.5,40.5"></polyline>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t-slds__bullet_wrapper">
                    <div class="t-slds__bullet t-slds__bullet_active" data-slide-bullet-for="1">
                        <div class="t-slds__bullet_body" style="background-color: #c7c7c7;"></div>
                    </div>
                    <div class="t-slds__bullet" data-slide-bullet-for="2">
                        <div class="t-slds__bullet_body" style="background-color: #c7c7c7;"></div>
                    </div>
                    <div class="t-slds__bullet" data-slide-bullet-for="3">
                        <div class="t-slds__bullet_body" style="background-color: #c7c7c7;"></div>
                    </div>
                    <div class="t-slds__bullet" data-slide-bullet-for="4">
                        <div class="t-slds__bullet_body" style="background-color: #c7c7c7;"></div>
                    </div>
                </div>
                <div class="t-slds__caption__container"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript"> $(document).ready(function () {
            t670_init('34263662');
            t_sldsInit('34263662');
        });
        $('.t670').bind('displayChanged', function () {
            t_slds_updateSlider('34263662');
            t_slds_positionArrows('34263662');
        }); </script>
    <style type="text/css"> #rec34263662 .t-slds__bullet_active .t-slds__bullet_body {
            background-color: #222 !important;
        }

        #rec34263662 .t-slds__bullet:hover .t-slds__bullet_body {
            background-color: #222 !important;
        }</style>
</div>-->
<div id="rec10792546" class="r t-rec r_anim r_showed" data-record-type="215"><a name="contacts"
                                                                                style="font-size:0;"></a>
</div>
<div id="rec10355641" class="r t-rec t-rec_pt_150 t-rec_pb_120"
     style="padding-top:150px;padding-bottom:120px;background-color:#333333; " data-record-type="43"
     data-bg-color="#333333" data-animationappear="off"><!-- T030 -->
    <div class="t030">
        <div class="t-container t-align_center">
            <div class="t-col t-col_10 t-prefix_1">
                <div class="t030__title t-title t-title_xxs" field="title">
                    <div style="color:#ffffff;" data-customstyle="yes"><?= lang('Январь, 18 / 2018') ?><br></div>
                </div>
                <div class="t030__descr t-descr t-descr_md" field="descr">
                    <div style="color:#ffffff;" data-customstyle="yes"><strong>Hyatt
                            Regency, </strong><?= lang('А.Навоий 1A, Ташкент') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="rec10355642" class="r t-rec t-rec_pt_0 t-rec_pb_0"
     style="padding-top:0px;padding-bottom:0px;background-color:#333333; " data-record-type="125"
     data-bg-color="#333333" data-animationappear="off"><!-- T117 -->
    <div class="t117">
        <div class="t-width t-width_10 t-margin_auto">
            <div class="t117_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28509.685997659813!2d69.26083115059747!3d41.315137324746495!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x324fb78013c57369!2sHyatt+Regency+Tashkent!5e0!3m2!1sru!2s!4v1515085084682"
                        width="100%" height="385" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>

</div>


<div id="rec12295098" class="r t-rec t-rec_pt_150 t-rec_pb_150"
     style="padding-top:150px;padding-bottom:150px;background-color:#333333; " data-record-type="551"
     data-bg-color="#333333" data-animationappear="off"><!-- t551-->
    <div class="t551">
        <div class="t-container">
            <div class="t-col t-col_6 t-prefix_3 t-align_center">
                <div class="t551__title t-name t-name_xs" style="color:#ffffff;" field="title"
                     data-animate-order="1"><?= lang('СВЯЖИТЕСЬ С НАМИ:') ?><br></div>
                <div class="t551__contacts t-title t-title_xxs" style="color:#ffffff;" field="text"
                     data-animate-order="2" data-animate-delay="0.3">+99 871 239 01 91<br>citizen@strategy.uz
                </div>
                <div class="t-sociallinks">
                    <div class="t-sociallinks__wrapper">
                        <div class="t-sociallinks__item"><a href="/" target="_blank">
                                <svg class="t-sociallinks__svg" version="1.1" id="Layer_1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     x="0px" y="0px" width="30px" height="30px" viewBox="0 0 48 48"
                                     enable-background="new 0 0 48 48" xml:space="preserve"><desc>Facebook</desc>
                                    <path style="fill:#ffffff;"
                                          d="M47.761,24c0,13.121-10.638,23.76-23.758,23.76C10.877,47.76,0.239,37.121,0.239,24c0-13.124,10.638-23.76,23.764-23.76C37.123,0.24,47.761,10.876,47.761,24 M20.033,38.85H26.2V24.01h4.163l0.539-5.242H26.2v-3.083c0-1.156,0.769-1.427,1.308-1.427h3.318V9.168L26.258,9.15c-5.072,0-6.225,3.796-6.225,6.224v3.394H17.1v5.242h2.933V38.85z"></path></svg>
                            </a></div>
                        <div class="t-sociallinks__item"><a href="/" target="_blank">
                                <svg class="t-sociallinks__svg" version="1.1" id="Layer_1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     x="0px" y="0px" width="30px" height="30px" viewBox="0 0 48 48"
                                     enable-background="new 0 0 48 48" xml:space="preserve"><desc>Twitter</desc>
                                    <path style="fill:#ffffff;"
                                          d="M47.762,24c0,13.121-10.639,23.76-23.761,23.76S0.24,37.121,0.24,24c0-13.124,10.639-23.76,23.761-23.76 S47.762,10.876,47.762,24 M38.031,12.375c-1.177,0.7-2.481,1.208-3.87,1.481c-1.11-1.186-2.694-1.926-4.455-1.926 c-3.364,0-6.093,2.729-6.093,6.095c0,0.478,0.054,0.941,0.156,1.388c-5.063-0.255-9.554-2.68-12.559-6.367 c-0.524,0.898-0.825,1.947-0.825,3.064c0,2.113,1.076,3.978,2.711,5.07c-0.998-0.031-1.939-0.306-2.761-0.762v0.077 c0,2.951,2.1,5.414,4.889,5.975c-0.512,0.14-1.05,0.215-1.606,0.215c-0.393,0-0.775-0.039-1.146-0.109 c0.777,2.42,3.026,4.182,5.692,4.232c-2.086,1.634-4.712,2.607-7.567,2.607c-0.492,0-0.977-0.027-1.453-0.084 c2.696,1.729,5.899,2.736,9.34,2.736c11.209,0,17.337-9.283,17.337-17.337c0-0.263-0.004-0.527-0.017-0.789 c1.19-0.858,2.224-1.932,3.039-3.152c-1.091,0.485-2.266,0.811-3.498,0.958C36.609,14.994,37.576,13.8,38.031,12.375"></path></svg>
                            </a></div>
                        <div class="t-sociallinks__item"><a href="/" target="_blank">
                                <svg class="t-sociallinks__svg" version="1.1" id="Layer_1"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="30px" height="30px" viewBox="0 0 30 30" xml:space="preserve"><desc>
                                        Instagram
                                    </desc>
                                    <path style="fill:#ffffff;"
                                          d="M15,11.014 C12.801,11.014 11.015,12.797 11.015,15 C11.015,17.202 12.802,18.987 15,18.987 C17.199,18.987 18.987,17.202 18.987,15 C18.987,12.797 17.199,11.014 15,11.014 L15,11.014 Z M15,17.606 C13.556,17.606 12.393,16.439 12.393,15 C12.393,13.561 13.556,12.394 15,12.394 C16.429,12.394 17.607,13.561 17.607,15 C17.607,16.439 16.444,17.606 15,17.606 L15,17.606 Z"></path>
                                    <path style="fill:#ffffff;"
                                          d="M19.385,9.556 C18.872,9.556 18.465,9.964 18.465,10.477 C18.465,10.989 18.872,11.396 19.385,11.396 C19.898,11.396 20.306,10.989 20.306,10.477 C20.306,9.964 19.897,9.556 19.385,9.556 L19.385,9.556 Z"></path>
                                    <path style="fill:#ffffff;"
                                          d="M15.002,0.15 C6.798,0.15 0.149,6.797 0.149,15 C0.149,23.201 6.798,29.85 15.002,29.85 C23.201,29.85 29.852,23.202 29.852,15 C29.852,6.797 23.201,0.15 15.002,0.15 L15.002,0.15 Z M22.666,18.265 C22.666,20.688 20.687,22.666 18.25,22.666 L11.75,22.666 C9.312,22.666 7.333,20.687 7.333,18.28 L7.333,11.734 C7.333,9.312 9.311,7.334 11.75,7.334 L18.25,7.334 C20.688,7.334 22.666,9.312 22.666,11.734 L22.666,18.265 L22.666,18.265 Z"></path></svg>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div><!--/allrecords-->

<div id="speaker10" class="modal">
    <p>Содик Сафоев</p>
</div>
<div id="speaker8" class="modal">
    <p>Сирил Миллер работает в структуре Всемирного Банка с 1991 года. За этот период, он занимал различные руководящие
        должности, такие как Специальный представитель Всемирного Банка в Европе, Директор по банковскому делу и
        управление долгами в Казначействе Всемирного Банка и Вице-президент по Международным и Корпоративным отношениям.
        Имеет экономические степени от Университета Невшателя, Швейцария и Нью-Йоркского Университета, США.</p>
</div>
<div id="speaker4" class="modal">
    <p>Владимир Норов</p>
</div>
<div id="speaker5" class="modal">
    <p>Танзила Нарбаева</p>
</div>
<div id="speaker2" class="modal">
    <p>Руслан Далетов имеет большой опыт работы в государственных органах. Ранее был заведующим сектора по координации
        деятельности со структурами Сената и Законодательной палаты Олий Мажлиса Республики Узбекистан Службы аппарата
        Президента Республики Узбекистан по сотрудничеству с Олий Мажлисом, политическими и общественными организациями,
        в 2016-2017 годах занимал должность первого заместителя министра юстиции, с 4 января 2017 года – первого
        заместителя Государственного советника Президента Республики Узбекистан по контролю и координации работы с
        обращениями физических и юридических лиц
        Имеет высшее юридическое и экономическое образование от Университета Ворвик, Великобритания и ведущих
        университетов Узбекистана.
    </p>
</div>
<div id="speaker3" class="modal">
    <p>Хидеки Мори</p>
</div>
<div id="speaker7" class="modal">
    <p>Данияр Курбанов</p>
</div>
<div id="speaker1" class="modal">
    <p>Акмал Бурханов</p>
</div>
<div id="speaker6" class="modal">
    <p>Джамила Асанова имеет более 20 лет опыта работы в сфере ННО, принимает активное участие в деятельности Фонда
        поддержки образования в области окружающей среды, Представительства Каунтерпарт Консорциума Казахстана. Джамила
        Асанова является членом Общественного совета при Министерстве иностранных дел Республики Казахстан, членом
        Консультативного и консультативного органа «Платформа диалога по человеческому измерению» при МИД Республики
        Казахстан; Координационного совета при Министерстве по делам религий и гражданского общества Республики
        Казахстан; Координационного совета Евразийской национальной сети оценщиков, член экспертных советов Программы
        малых грантов Глобального экологического фонда / ПРООН, ЕБРР; Совета попечителей Азиатского кредитного фонда,
        член рабочих групп по пересмотру законодательства для организаций гражданского общества в Республике Казахстан;
        глобальной инициативы «Инновации для перемен». Также, она была отмечена благодарственным письмом Президента
        Республики Казахстан и медалью к 25-летию Независимости Республики Казахстан. Имеет степень кандидата
        биологических наук от Казахстанского государственного национального университета. </p>
</div>
<div id="speaker9" class="modal">
    <p>Халилилло Турахужаев</p>
</div>
<div id="speaker12" class="modal">
    <p>Улугбек Мухаммадиев</p>
</div>
<div id="speaker13" class="modal">
    <p>Нина Колыбашкина</p>
</div>
<div id="speaker14" class="modal">
    <p>Хосе-Мануэль Бассат</p>
</div>
<div id="speaker15" class="modal">
    <p>Робияхон Махмудова</p>
</div>
<div id="speaker16" class="modal">
    <p>Шерзод Кудбиев</p>
</div>
<div id="speaker17" class="modal">
    <p>Мурат Абенов</p>
</div>
<div id="speaker18" class="modal">
    <p>Акбар Ташкулов</p>
</div>
<div id="speaker19" class="modal">
    <p>Мавлюдахон Ширинова</p>
</div>
<div id="speaker20" class="modal">
    <p>Ойбек Исаков</p>
</div>
<div id="speaker21" class="modal">
    <p>Элина Цельмина</p>
</div>
<div id="speaker22" class="modal">
    <p>Гулнора Рахимова</p>
</div>
<div id="speaker23" class="modal">
    <p>Нина Бхатт</p>
</div>

<script type="text/javascript" src="/js/js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.toggleDivs').hide();
        $('.toggleButton').click(function () {
            $('.toggleDivs').slideToggle(200);
            $('.toggleButton').hide();
            return false;
        });
    });
</script>
</body>
</html>

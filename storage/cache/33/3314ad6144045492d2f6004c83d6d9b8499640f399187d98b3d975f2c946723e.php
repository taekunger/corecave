<?php

/* site/index-ar.html */
class __TwigTemplate_5df10bd21cdc456faeac5c462c7134b2dbf4cb72bb4fc2feea396be6c6c5d6cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Zakaa.net</title>
        <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/images/logo.png")), "html", null, true);
        echo "\" type=\"image/png\"/>
        <link rel='stylesheet' href=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/css/bootstrap.min.css")), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/css/bootstrap-rtl.css")), "html", null, true);
        echo "\" />
        <link rel='stylesheet' href=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/css/style.css")), "html", null, true);
        echo "\"/>
        <link rel='stylesheet' href=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/css/style-Ar.css")), "html", null, true);
        echo "\"/>
        <link rel='stylesheet' href=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/css/font-awesome.min.css")), "html", null, true);
        echo "\"/>
        <link rel='stylesheet' href=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/css/media.css")), "html", null, true);
        echo "\"/>
        <link rel='stylesheet' href=\"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/css/sweetalert.css")), "html", null, true);
        echo "\"/>
        <link href=\"https://fonts.googleapis.com/css?family=Questrial\" rel=\"stylesheet\">
    </head>

    <body>
        <section id=\"home\" class=\"header\">
            <div class=\"overlay\">
                <nav class=\"navbar navbar-default \">
                    <div class=\"container\">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_route')->getCallable(), array("site.arabic")), "html", null, true);
        echo "\"><h1>ذكاء</h1></a><span class=\"brand-span\">للبرمجيات</span><img class=\"navbar-brand img-circle\" src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/images/logo.png")), "html", null, true);
        echo "\" alt=\"logo\">
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                            <ul class=\"nav navbar-nav navbar-left\">
                                <li class=\"active\"><a  data-value =\"home\">الرئيسية <span class=\"sr-only\">(current)</span></a></li>
                                <li><a  data-value =\"ser\" >الخدمات</a></li>
                                <li><a  data-value =\"features\">المميزات</a></li>
                                <li><a  data-value =\"offers\">العروض</a></li>
                                <li><a  data-value =\"about\">عن الشركة</a></li>
                                <li><a  data-value =\"contact\">تواصل معنا</a></li>
                                <li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_route')->getCallable(), array("site.english")), "html", null, true);
        echo "\" class=\"text-capitalize\">English</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"under-nav\">
                                <p>نحن نقدم أعلى جودة</p>
                                <h1>خدمة <span>برمجية</span></h1>
                                <P class=\"last\" >من خلال فريق العمل المتميز واستخدام أحدث طرق التكنولوجيا </P>
                                <button class=\"btn btn-lg go-about\">اقرأ المزيد</button>
                            </div>
                        </div>
                    </div>
                </div>
                <span class=\"arrow\">
                    <i class=\"fa fa-chevron-down\"></i>
                </span>
            </div>
        </section>
        <!-- Start Section Our Services-->
        <section class=\"our-services\" id=\"ser\">
            <div class=\"container\">
                <h2 class=\"fav-heading-2\">الخدمات التى نقدمها</h2>

                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"serv\">
                            <i class=\"fa fa-code fa-4x fa-fw\"></i>
                            <div class=\"info\">
                                <h3>تطبيقات الويب</h3>
                                <p>نظام تطبيق ويب تمكن مدير أو مدير المشروع للشركات المختلفة ومتابعة الأعمال التي يتم تشغيلها دون نقلها من أي مكان وفي أي وقت من خلال أنظمة متعددة يختار له النظام العميل الذي يناسبه.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"serv\">
                            <i class=\"fa fa-laptop fa-4x fa-fw\"></i>
                            <div class=\"info\">
                                <h3>تصميم برامج الكمبيوتر</h3>
                                <p>شركة ذكاء للبرمجيات هى تعمل فى مجال تصميم برامج الكمبيوتر المختلفه كبرامج المحاسبه وادارة الاعمال وتطوير جميع انواع البرمجيات التى تتناسب مع كافة الشركات .</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"serv\">
                            <i class=\"fa fa-lightbulb-o fa-4x fa-fw\"></i>
                            <div class=\"info\">
                                <h3>التخطيط الاستراتيجى</h3>
                                <p>تقوم الشركة بوضع الخطط الاستراتيجية للمشاريع والشركات تهدف الى التنمية الشاملة للمنظمة من خلال مجموعة محاور منها الاستفادة القصوى من مواردها وتوفير النفقات وزيادة أرباحها واﻻعتماد على التكنولوجيا الحديثة.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"serv\">
                            <i class=\"fa fa-html5 fa-4x fa-fw\"></i>
                            <div class=\"info\">
                                <h3>تصميم مواقع الانترنت</h3>
                                <p>تقوم الشركة بتصميم الموقع للعميل التى تخدم مجال عمله حسب الطلب مع مراعاة المتصفحات المختلفه والاجهزه المختلفه والشركة تضمن له جودة المنتج المقدم من الشركة.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"serv\">
                            <i class=\"fa fa-android fa-4x fa-fw\"></i>
                            <div class=\"info\">
                                <h3>برمجة تطبيقات الهاتف</h3>
                                <p>تقدم لك شركة ذكاء للبرمجيات خدمة تصميم وبرمجة تطبيقات الهواتف الذكية بكل أصنافها وأحجامها، وهي على ثقة تامة من نيل رضاك من خلال الجودة العالية والتصميم المميز الذي سيكون عليها تطبيقك.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"serv\">
                            <i class=\"fa fa-shopping-cart fa-4x fa-fw\"></i>
                            <div class=\"info\">
                                <h3>التجارة الإليكترونية</h3>
                                <p>إثراء السوق المتنامية للتجارة الإلكترونية، من خلال دمج التكنولوجيات الجديدة مثل خدمات الهاتف النقال والحلول الذكية للدفع الإلكتروني.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END Section Our Services-->

        <!-- Start Section Our Features-->
        <section class=\"features text-center\" id=\"features\">
            <div class=\"container\">
                <h2 class=\"fav-heading\">مميزات البرامج والمنتجات</h2>
                <p class=\"p-about\">شركة ذكاء للبرمجيات تقدم خدمة ذات جودة عالية في جميع منتجاتها مع الدقة في النتائج وسهولة الاستخدام.</p>
                <div class=\"row\">
                    <div class=\"controle\">
                        <i class=\"fa fa-chevron-right\"></i>
                        <i class=\"fa fa-chevron-left\"></i>
                    </div>
                    <div class=\"boxes col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"i-cont center-block\">
                            <i class=\"fa fa-briefcase\"></i>
                        </div>
                        <h3>اختصارات رائعة</h3>
                        <p class=\"p-detail\"> نستخدم اختصارات رائعة توفر طريقة سهلة لإضافة محتوى إلى موقع الويب الخاص بك إذا كنت ترغب في إضافتها إلى الصفحة أو أزرار لوظيفة، الهاتفية القصيرة تسمح لك بسرعة إدراج العناصر التي تستخدمها بانتظام.</p>
                    </div>
                    <div class=\"boxes col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"i-cont center-block\">
                            <i class=\"fa fa-home\"></i>
                        </div>
                        <h3>التصميم الابداعى</h3>
                        <p class=\"p-detail\">إنشاء محتوى كبير على أساس منتظم. وبعبارة أخرى، يشير التركيز على خلق المحتوى الذي من شأنه أن يحل الألم أكبر من جمهورك المستهدف مع الحفاظ على جدول ترحيل متسقة.</p>
                    </div>
                    <div class=\"boxes col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"i-cont center-block\">
                            <i class=\"fa fa-rocket\"></i>
                        </div>
                        <h3>سهل فى اعادة الاستخدام</h3>
                        <p class=\"p-detail\">تمتاز جميع التصميمات والمنتجات بسهولة اعادة الاستخدام لتتناسب مع نظام العمل الخاص بكل عميل </p>
                    </div>
                    <div class=\"boxes col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                        <div class=\"i-cont center-block\">
                            <i class=\"fa fa-wrench\"></i>
                        </div>
                        <h3>الدعم الفنى السريع</h3>
                        <p class=\"p-detail\">تقدم الشركة خدمة الدعم الفنى المجانى لجميع عملائها وللمنتجات الخاصة بها كما تمتاز الخدمة بالسرعة فى اتخاذ القرارت التى تخدم العميل</p>
                    </div>
                </div>

            </div>
        </section>
        <section class=\"our-price \" id=\"offers\">
            <h2 class=\"fav-heading text-center\">العروض والأسعار الرائعة</h2>
            <p class=\"p-about text-center\">تقدم الشركة خطط اسعار تناسب جميع الأحتياجات والشركات</p>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"price-table\">
                            <div class=\"head\">
                                <h3 class=\"\">عرض الصفحة الواحدة</h3>
                                <span>مناسب للمواقع الصغيرة</span>
                                <p>1200 جنيه</p>
                            </div>
                            <div class=\"body\">
                                <ul class=\"list-unstyled\">
                                    <li>مساحة تخزين <span>500 MB</span></li>
                                    <li>سعة تحميل <span>غير محدود</span></li>
                                    <li>عدد الصفحات<span>1</span></li>
                                    <li>البريد الإليكترونى <span>1</span></li>
                                    <li>دومين مجانى<span>1</span></li>
                                    <li>الدعم <span>24 ساعة</span></li>
                                </ul>
                                <button class=\"btn btn-lg btn-ld-mor hvr-sweep-to-right center-block\" data-toggle=\"modal\" data-target=\"#orderModal\">اطلب الآن</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"price-table\">
                            <div class=\"head\">
                                <h3 class=\"\">العرض الإقتصادى</h3>
                                <span>مناسب للشركات الناشئة</span>
                                <p>2200 جنيه </p>
                            </div>
                            <div class=\"body\">
                                <ul class=\"list-unstyled\">
                                    <li>مساحة تخزين <span>1 GB</span></li>
                                    <li>سعة تحميل <span>غير محدود</span></li>
                                    <li>عدد الصفحات<span>5</span></li>
                                    <li>البريد الإليكترونى <span>5</span></li>
                                    <li>دومين مجانى<span>1</span></li>
                                    <li>الدعم <span>24 ساعة</span></li>
                                </ul>
                                <button class=\"btn btn-lg btn-ld-mor hvr-sweep-to-right center-block\" data-toggle=\"modal\" data-target=\"#orderModal\">اطلب الآن</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"price-table\">
                            <div class=\"head\">
                                <h3 class=\"\">عرض المواقع المتقدمة</h3>
                                <span>مناسب للمواقع المتقدمة</span>
                                <p>3500 جنيه</p>
                            </div>
                            <div class=\"body\">
                                <ul class=\"list-unstyled\">
                                    <li>مساحة تخزين<span>3 GB</span></li>
                                    <li>سعة تحميل <span>غير محدود</span></li>
                                    <li>عدد الصفحات<span>5 الى 20</span></li>
                                    <li>البريد الإليكترونى <span>5</span></li>
                                    <li>دومين مجانى<span>1</span></li>
                                    <li>الدعم <span>24 ساعة</span></li>
                                </ul>
                                <button class=\"btn btn-lg btn-ld-mor hvr-sweep-to-right center-block\" data-toggle=\"modal\" data-target=\"#orderModal\">اطلب الآن</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"price-table\">
                            <div class=\"head\">
                                <h3 class=\"\">العرض الغير محدود</h3>
                                <span>مناسب للأعمال التجارية</span>
                                <p>حسب الخدمة</p>
                            </div>
                            <div class=\"body\">
                                <ul class=\"list-unstyled\">
                                    <li>مساحة تخزين<span>حسب الطلب</span></li>
                                    <li>سعة تحميل  <span>غير محدود</span></li>
                                    <li>عدد الصفحات <span>حسب الطلب</span></li>
                                    <li>البريد الإليكترونى <span>حسب الطلب</span></li>
                                    <li>دومين مجانى<span>1</span></li>
                                    <li>الدعم <span>24 ساعة</span></li>
                                </ul>
                                <button class=\"btn btn-lg btn-ld-mor hvr-sweep-to-right center-block\" data-toggle=\"modal\" data-target=\"#orderModal\">التفاصيل</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"about\" id=\"about\">
            <div class=\"container\">
                <h2 class=\"fav-heading text-center\">كل ماتحتاجه لتتعرف علينا</h2>
                <p class=\"p-about text-center\">نحن شركة برمجيات ذات<b> أفكار إبداعية</b> و <b>فريق عمل ذو</b> مهارات عالية</p>
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">ما هي شركة ذكاء ؟<span><i class=\"fa fa-edit\"></i></span></h3>
                            </div>
                            <div class=\"panel-body\"><p>شركة ذكاء هي شركة مصرية متخصصة تضم مجموعة كبيرة متناسقة من افضل الخبرات الفنية في المجالات الخاصة 
                                    فى تصميم وبرمجة مواقع الانترنت , برمجة تطبيقات الهواتف الذكية, نظم الكترونيه, ادارة الكترونيه ,تخطيط استراتيجى 
                                    انشاء شبكات ,تطبيقات الهواتف الذكيه ويقوم بانشاء وتطوير البرامج فريق عمل متميز ومحترف في تصميم البرامج 
                                    للشركات والمؤسسات المختلفة بلغات برمجه مختلفه والتي تتميز بالدقة في النتائج والسهولة في الاستخدام.</p>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">لماذا أختار ذكاء ؟<span><i class=\"fa fa-heart-o\"></i></span></h3>
                            </div>
                            <div class=\"panel-body\"><p>تتميز الشركة بحرصها على تعميم الإستفادة لكل من عميل شركة ذكاء بشكل مباشر وعملاء عميل الشركة بشكل غير مباشر
                                    فمثلا عندما يطلب منا صاحب محل وليكن محل سوبر ماركت برنامج ﻹدارة محله التجارى لا يقتصر إهتمامنا على إستفادة صاحب المحل وحده من البرنامج
                                    ولكننا نهتم أيضا بتيسير عملية الشراء على المستهلك لما سيجده من التنظيم الواضح لإدارة المحل الناتج عن جودة البرامج التي تصممها الشركة.</p>
                            </div>
                        </div>

                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <h3 class=\"skills-progress-heading\">مهارات فريق العمل</h3>
                        <div class=\"skills-progress\">
                            <div class=\"za-progress-item-wrap\">
                                <div class=\"za-progress-main\">
                                    <div class=\"za-progress-title\">
                                        التصميم </div>
                                    <div class=\"za-progress-value-text\">
                                        70\t<span>%</span>
                                    </div>
                                    <div class=\"progress\" style=\"background-color:#e6e6e6;
                                         width:100%;
                                         height:11px;
                                         border-radius:5px;
                                         -webkit-border-radius: 5px;
                                         \">
                                        <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" data-valuetransitiongoal=\"70\" style=\"line-height: 11px; border-radius: 5px; width: 70%;\" data-valuenow=\"65\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"za-progress-item-wrap\">
                                <div class=\"za-progress-main  \">
                                    <div class=\"za-progress-title\">
                                        العلامة التجارية </div>
                                    <div class=\"za-progress-value-text\">
                                        50\t<span>%</span>
                                    </div>
                                    <div class=\"progress\" style=\"background-color:#e6e6e6;
                                         width:100%;
                                         height:11px;
                                         border-radius:5px;
                                         -webkit-border-radius: 5px;
                                         \">
                                        <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" data-valuetransitiongoal=\"50\" style=\"line-height: 11px; border-radius: 5px; width: 50%;\" data-valuenow=\"45\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"za-progress-item-wrap\">
                                <div class=\"za-progress-main  \">
                                    <div class=\"za-progress-title\">
                                        البرمجة </div>
                                    <div class=\"za-progress-value-text\">
                                        85\t<span>%</span>
                                    </div>
                                    <div class=\"progress\" style=\"background-color:#e6e6e6;
                                         width:100%;
                                         height:11px;
                                         border-radius:5px;
                                         -webkit-border-radius: 5px;
                                         \">
                                        <div  class=\"progress-bar progress-bar-danger\" role=\"progressbar\" data-valuetransitiongoal=\"85\" style=\"line-height: 11px; border-radius: 5px; width: 85%;\" data-valuenow=\"80\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"za-progress-item-wrap\">
                                <div class=\"za-progress-main  \">
                                    <div class=\"za-progress-title\">
                                        التسويق </div>
                                    <div class=\"za-progress-value-text\">
                                        100\t<span>%</span>
                                    </div>
                                    <div class=\"progress\" style=\"background-color:#e6e6e6;
                                         width:100%;
                                         height:11px;
                                         border-radius:5px;
                                         -webkit-border-radius: 5px;
                                         \">
                                        <div  class=\"progress-bar progress-bar-danger\" role=\"progressbar\" data-valuetransitiongoal=\"100\" style=\"line-height: 11px; border-radius: 5px; width: 100%;\" data-valuenow=\"95\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"za-progress-item-wrap\">
                                <div class=\"za-progress-main  \">
                                    <div class=\"za-progress-title\">
                                        برامج الموبايل </div>
                                    <div class=\"za-progress-value-text\">
                                        90\t<span>%</span>
                                    </div>
                                    <div class=\"progress\" style=\"background-color:#e6e6e6;
                                         width:100%;
                                         height:11px;
                                         border-radius:5px;
                                         -webkit-border-radius: 5px;
                                         \">
                                        <div  class=\"progress-bar progress-bar-danger\" role=\"progressbar\" data-valuetransitiongoal=\"90\" style=\"line-height: 11px; border-radius: 5px; width: 90%;\" data-valuenow=\"85\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"za-progress-item-wrap\">
                                <div class=\"za-progress-main  \">
                                    <div class=\"za-progress-title\">
                                        تطبيقات الويب </div>
                                    <div class=\"za-progress-value-text\">
                                        95\t<span>%</span>
                                    </div>
                                    <div class=\"progress\" style=\"background-color:#e6e6e6;
                                         width:100%;
                                         height:11px;
                                         border-radius:5px;
                                         -webkit-border-radius: 5px;
                                         \">
                                        <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" data-valuetransitiongoal=\"95\" style=\"line-height: 11px; border-radius: 5px; width: 95%;\" data-valuenow=\"90\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start Section Contact -->
        <section class=\"contact\" id=\"contact\">
            <div class=\"overlay\">
                <h2 class=\"fav-heading text-center\">تواصل معنا</h2>
                <p class=\"p-about text-center\">يسعدنا تلقى رسائلك فى أى وقت</p>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-8 col-md-7 col-xs-12\">
                            <form role=\"form\" action=\"";
        // line 416
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_route')->getCallable(), array("contact")), "html", null, true);
        echo "\" method=\"post\">
                                <div class=\"col-md-12\">
                                    <div class=\"form-group col-md-6 col-xs-6 reset-col\">
                                        <input type=\"text\" class=\"form-control input-lg\" value=\"";
        // line 419
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "contact-name"), "method")) : (""));
        echo "\"name=\"contact-name\" placeholder=\"الأسم\">
                                    </div>
                                    <div class=\"form-group col-md-6 col-xs-6 \">
                                        <input type=\"email\" class=\"form-control input-lg\" value=\"";
        // line 422
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "contact-email"), "method")) : (""));
        echo "\" name=\"contact-email\" required placeholder=\"الأيميل\" style=\"margin-right: 15px\">
                                    </div>

                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <textarea type=\"text\" class=\"form-control input-lg\" name=\"contact-msg\" required placeholder=\"أترك رسالتك هنا\">";
        // line 428
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "contact-msg"), "method")) : (""));
        echo "</textarea>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <button type=\"submit\" class=\"btn btn-lg btn-block btn-contact\">تواصل معنا</button>
                                </div>
                                ";
        // line 434
        echo call_user_func_array($this->env->getFunction('token_input')->getCallable(), array());
        echo "
                            </form>
                        </div>
                        <div class=\"col-lg-4 col-md-5 col-xs-12 info\">
                            <div class=\"col-lg-12\">
                                <h4>معلومات الأتصال</h3>
                                    <div class=\"\">
                                        <span><i class=\"fa fa-envelope-o\"></i></span>
                                        <p class=\"p-info\">20 شارع المعتصم,  طنطا , الغربية, مصر.  تواصل على أرقام الشركة </p>
                                    </div>
                                    <div class=\"colored\">
                                        <p class=\" \">-Zakaa@Zakaa.com</p>
                                        <p class=\" \">-002 01158222100 <br> -002 01064328899</p>
                                    </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <h4 class=\"\">ساعات العمل</h3>
                                    <div class=\"col-lg-12 reset-col\">
                                        <span><i class=\"fa fa-clock-o\"></i></span>
                                        <p>الأحد – الخميس : صباحا to 17 مساء<br>
                                            الجمعة , السبت :  أجازة</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- END Section Contact -->
        <!--Start section subscribe-->
        <section class=\"subscribe text-center\">
            <div class=\"container\">
                <h2>ابق على تواصل معنا </h2>
                <p class=\"lead\">اشترك فى قائمتنا البريدية ليصلك آخر الأخبار</p>
                <form class=\"form-inline \">
                    <input class=\"form-control input-lg\" type=\"email\" placeholder=\"Write Your Email\">
                    <button class=\"btn btn-lg but-color\"><i class=\"fa fa-edit fa-lg\"></i>اشتراك</button>
                </form>             
            </div>
        </section>
        <!--End section subscribe-->
        <section class=\"footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                        <h3 class=\"fav-heading-2\">عن ذكاء</h2>
                            <p>شركة زكاء شركة كبيرة مصرية تتسق خبرة أفضل في مناطق معينة في مجال تصميم وبرمجة المواقع، برمجة التطبيقات المتنقلة.</p>
                            <div class=\"icon\">
                                <ul class=\"list-unstyled\">
                                    <li><a class=\"facebook\" href=\"https://www.facebook.com/zakaa.01/?ref=page_internal\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a class=\"twitter\" href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a class=\"google-plus\" href=\"#\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a></li>
                                    <li><a class=\"linked-in\" href=\"#\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a></li>
                                </ul>
                            </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                        <h3 class=\"fav-heading-2\">أبق على تواصل</h2>
                            <div class=\"get-in-touch\">
                                <ul class=\"list-unstyled\">
                                    <li><i class=\"fa fa-map-marker\"></i>
                                        <div class=\"\">
                                            20 شارع المعتصم,  طنطا , الغربية, مصر.  تواصل على أرقام الشركة <a href=\"#\" target=\"_blank\">www.zakaa.com</a>
                                        </div>
                                    </li>
                                    <li><i class=\"fa fa-phone\"></i><div>تليفون ذكاء مبيعات رقم : 002 01158222100-- 01064328899</div></li>
                                    <li><i class=\"fa fa-envelope\"></i><div>البريد الإليكترونى لمبيعات ذكاء : 
                                            <a href=\"#\">sales@zakaa.com</a></div></li>
                                </ul>
                            </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                        <h3 class=\"fav-heading-2\">أخر الأخبار</h2>
                            <ul class=\"list-unstyled\">
                                <li>
                                    <div class=\"posts\">
                                        <div class=\"media\">
                                            <a class=\"pull-right\" href=\"#\">
                                                <img class=\"media-object\" src=\"";
        // line 513
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/images/works/p1.jpg")), "html", null, true);
        echo "\" width=\"70px\" height=\"70px\" alt=\"articl 1\">
                                            </a>
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">عروض الشركة</h4>
                                            </div>
                                            <div class=\"za-post-date\"><span>التاريخ: يناير 8, 2016</span></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"posts\">
                                        <div class=\"media\">
                                            <a class=\"pull-right\" href=\"#\">
                                                <img class=\"media-object\" src=\"";
        // line 526
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/images/works/p11.jpg")), "html", null, true);
        echo "\" width=\"70px\" height=\"70px\" alt=\"articl 1\">
                                            </a>
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">خدمات الشركة</h4>
                                            </div>
                                            <div class=\"za-post-date\"><span>التاريخ: يناير 10, 2016</span></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                        <h3 class=\"fav-heading-2\">أخر المنشورات</h2>
                            <div class=\"tweets\">
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <div class=\"latest-tweets\">
                                            <p>خدمات البرمجة</p>
                                            <a href=\"#\" target=\"_blank\">منذ 10 ايام مضت</a> 
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"latest-tweets\">
                                            <p>مميزات التجارة الإليكترونية</p>
                                            <a href=\"#\" target=\"_blank\">شهر مضى</a> 
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
            <div class=\"copyright text-center\">
                جميع الحقوق محفوظة لشركة ذكاء &copy; 2016  <span> <a href =\"";
        // line 559
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_route')->getCallable(), array("site.arabic")), "html", null, true);
        echo "\" target=\"_blank\"> Zakaa<span>.inc</span></a></span>
            </div>
        </section>

        <div id=\"scroll-top\">
            <i class=\"fa fa-chevron-up fa-2x\"></i>
        </div>
        <!-- LOADING PAGE-->
        <section class=\"load-page\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 loadBox\">
                        <div id = \"cupcake\" class = \"box\">
                            <span class = \"letter letterL\">L</span>

                            <div class = \"cupcakeCircle box\">
                                <div class = \"cupcakeInner box\">
                                    <div class = \"cupcakeCore box\"></div>

                                </div>
                            </div>

                            <span class = \"letter box\">A</span>
                            <span class = \"letter box\">D</span>
                            <span class = \"letter box\">I</span>
                            <span class = \"letter box\">N</span>
                            <span class = \"letter box\">G</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--EDIT Order  Modal -->
        <div class=\"modal fade \" id=\"orderModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mm\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content modal-contentAr\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"gridSystemModalLabel\">أطلب الآن</h4>
                    </div>
                    <form action=\"";
        // line 599
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_action')->getCallable(), array("Site\\SiteController@order")), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"modal-body\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"tap modal-body-header\">
                                        <ul class=\"nav nav-pills\" role=\"tablist\">
                                            <li role=\"presentation\" class=\"active\"><a href=\"#sectionBasicData\" aria-controls=\"sectionBasicData\" role=\"tab\" data-toggle=\"tab\"><span class=\"badge\">1</span> المعلومات الأساسية</a>
                                            </li>
                                            <li role=\"presentation\"><a href=\"#sectionContacts\" aria-controls=\"sectionContacts\" role=\"tab\" data-toggle=\"tab\"><span class=\"badge\">2</span>معلومات الأتصال</a></li>
                                            <li role=\"presentation\"><a href=\"#sectionOthers\" aria-controls=\"sectionOthers\" role=\"tab\" data-toggle=\"tab\"><span class=\"badge\">3</span> أخرى </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-content\">
                                <section role=\"tabpanel\" class=\"basic-data tab-pane active\" id=\"sectionBasicData\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-sm-6\">
                                            <label>الأسم الأول</label>
                                            <input id=\"\" type=\"text\" class=\"form-control\" value=\"";
        // line 618
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-firstname"), "method")) : (""));
        echo "\"name=\"order-firstname\" placeholder=\"الأسم الأول\" required>
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            <label>الأسم الأخير</label>
                                            <input id=\"\" type=\"text\" class=\"form-control\" value=\"";
        // line 622
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-lastname"), "method")) : (""));
        echo "\" name=\"order-lastname\" placeholder=\"الأسم الأخير\" required>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-sm-6\">
                                            <label>الرقم القومى</label>
                                            <input id=\"\" type=\"text\" class=\"form-control\" value=\"";
        // line 628
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-social"), "method")) : (""));
        echo "\" name=\"order-social\" placeholder=\"EX:255 080 116 21458\" required>
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            <label>اختار العرض</label>
                                            <select id=\"\" name=\"order-plan\" class=\"form-control\" required>
                                                <option value=\"Basic Plan\">عرض الصفحة الواحدة</option>
                                                <option value=\"Economic Plan\">العرض الأقتصادى</option>
                                                <option value=\"Pro Plan\">عرض المواقع المتقدمة</option>
                                                <option value=\"Enterprise Plan\">العرض الغير محدود</option>
                                            </select>
                                        </div>
                                    </div>
                                </section>
                                <section role=\"tabpanel\" class=\"contacts tab-pane\" id=\"sectionContacts\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-sm-6\">
                                            <label>المحمول</label>
                                            <input id=\"\" type=\"text\" class=\"form-control\" value=\"";
        // line 645
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-mobile"), "method")) : (""));
        echo "\"name=\"order-mobile\" placeholder=\"0123456789\" required>
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            <label>الهاتف</label>
                                            <input id=\"\" type=\"text\" class=\"form-control\" value=\"";
        // line 649
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-tel"), "method")) : (""));
        echo "\" name=\"order-tel\" placeholder=\"0123456789\" required>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-sm-6\">
                                            <label>العنوان 1</label>
                                            <input id=\"\" type=\"text\" class=\"form-control\" value=\"";
        // line 655
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-address_1"), "method")) : (""));
        echo "\" name=\"order-address_1\" placeholder=\"العنوان الرئيسى\" required>
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            <label>العنوان 2</label>
                                            <input id=\"\" type=\"text\" class=\"form-control\" value=\"";
        // line 659
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-address_2"), "method")) : (""));
        echo "\" name=\"order-address_2\" placeholder=\"العنوان الفرعى\">
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-sm-4\">
                                            <label>اختار البلد</label>
                                            <select class=\"crs-country form-control\" name=\"order-country\" style=\"direction: ltr;\" data-region-id=\"one\" required></select>


                                        </div>
                                        <div class=\"form-group col-sm-4\">
                                            <label>المحافظة</label>
                                            <select id=\"one\" class=\"form-control\" name=\"order-state\" style=\"direction: ltr;\" required></select>
                                        </div>
                                        <div class=\"form-group col-sm-4\">
                                            <label>المدينة</label>
                                            <input id=\"\" type=\"text\" value=\"";
        // line 675
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-city"), "method")) : (""));
        echo "\" name=\"order-city\" class=\"form-control\" placeholder=\"أدخل المدينة\" required>
                                        </div>
                                    </div>
                                    <div class=\"row\">    
                                        <div class=\"form-group col-sm-6\">
                                            <label>البريد الإليكترونى</label>
                                            <input id=\"\" type=\"email\" class=\"form-control\" value=\"";
        // line 681
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-email"), "method")) : (""));
        echo "\" name=\"order-email\" placeholder=\"البريد الإليكترونى\" required>
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            <label>الموقع الإليكترونى</label>
                                            <input id=\"\" type=\"text\" value=\"";
        // line 685
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-site"), "method")) : (""));
        echo "\" name=\"order-site\" class=\"form-control\" placeholder=\"EX.WWW.zakaa.COM\" >
                                        </div>
                                    </div>
                                </section>
                                <section role=\"tabpanel\" class=\"sectionOthers tab-pane\" id=\"sectionOthers\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-sm-6\">
                                            <label>أسم المشروع</label>
                                            <input id=\"\" type=\"text\" class=\"form-control\" value=\"";
        // line 693
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-project"), "method")) : (""));
        echo "\" name=\"order-project\" placeholder=\"اسم المشروع\" >
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            <label>أرفاق ملف</label>
                                            <input id=\"\" type=\"file\" name=\"order-attachment\" title=\"قم باختيار ملف مضغوط يحتوي علي ما يساعدنا لفهم عرضك المقدم\">
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-sm-12\">
                                            <label>الوصف</label>
                                            <textarea id=\"\" maxlength=\"250\" class=\"form-control col-sm-12\" name=\"order-description\" placeholder=\"أكتب بعض التفاصيل هنا\">";
        // line 703
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-description"), "method")) : (""));
        echo "</textarea>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"submit\" id=\"\" class=\"btn btn-main-color\">
                                <span class=\"fa fa-send-o\"> </span> &nbsp;إرسال
                            </button>
                            <button type=\"button\" class=\"btn btn-defult\" data-dismiss=\"modal\">غلق</button>
                        </div>
                        ";
        // line 715
        echo call_user_func_array($this->env->getFunction('token_input')->getCallable(), array());
        echo "
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        <script src=\"";
        // line 721
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/js/jquery-1.12.1.min.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 722
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 723
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/js/plugins.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 724
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/js/jquery.nicescroll.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 725
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/js/jquery.mixitup.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 726
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/js/jquery.crs.min.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 727
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/js/sweetalert.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
";
        // line 729
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) {
            // line 730
            echo "swal({title: \"Error!\", text: '";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getErrors')->getCallable(), array()), "html", null, true);
            echo "', type: \"error\", confirmButtonText: \"close\"});
";
        }
        // line 732
        if (call_user_func_array($this->env->getFunction('session_has')->getCallable(), array("success"))) {
            // line 733
            echo "swal(\"Good job!\", \"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('session_pull')->getCallable(), array("success")), "html", null, true);
            echo "\", \"success\")
";
        }
        // line 735
        if (call_user_func_array($this->env->getFunction('session_has')->getCallable(), array("error"))) {
            // line 736
            echo "swal(\"Error!\", \"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('session_pull')->getCallable(), array("error")), "html", null, true);
            echo "\", \"error\")
";
        }
        // line 738
        if (call_user_func_array($this->env->getFunction('session_has')->getCallable(), array("warning"))) {
            // line 739
            echo "swal(\"Sorry!\", \"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('session_pull')->getCallable(), array("warning")), "html", null, true);
            echo "\", \"warning\")
";
        }
        // line 741
        echo "        </script>

    </body>
</html>


";
    }

    public function getTemplateName()
    {
        return "site/index-ar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  900 => 741,  894 => 739,  892 => 738,  886 => 736,  884 => 735,  878 => 733,  876 => 732,  870 => 730,  868 => 729,  863 => 727,  859 => 726,  855 => 725,  851 => 724,  847 => 723,  843 => 722,  839 => 721,  830 => 715,  815 => 703,  802 => 693,  791 => 685,  784 => 681,  775 => 675,  756 => 659,  749 => 655,  740 => 649,  733 => 645,  713 => 628,  704 => 622,  697 => 618,  675 => 599,  632 => 559,  596 => 526,  580 => 513,  498 => 434,  489 => 428,  480 => 422,  474 => 419,  468 => 416,  93 => 44,  76 => 32,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="UTF-8"/>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>Zakaa.net</title>*/
/*         <link rel="icon" href="{{ url_pub('site/images/logo.png') }}" type="image/png"/>*/
/*         <link rel='stylesheet' href="{{ url_pub('site/css/bootstrap.min.css') }}" />*/
/*         <link rel="stylesheet" href="{{ url_pub('site/css/bootstrap-rtl.css') }}" />*/
/*         <link rel='stylesheet' href="{{ url_pub('site/css/style.css') }}"/>*/
/*         <link rel='stylesheet' href="{{ url_pub('site/css/style-Ar.css') }}"/>*/
/*         <link rel='stylesheet' href="{{ url_pub('site/css/font-awesome.min.css') }}"/>*/
/*         <link rel='stylesheet' href="{{ url_pub('site/css/media.css') }}"/>*/
/*         <link rel='stylesheet' href="{{ url_pub('site/css/sweetalert.css') }}"/>*/
/*         <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">*/
/*     </head>*/
/* */
/*     <body>*/
/*         <section id="home" class="header">*/
/*             <div class="overlay">*/
/*                 <nav class="navbar navbar-default ">*/
/*                     <div class="container">*/
/*                         <!-- Brand and toggle get grouped for better mobile display -->*/
/*                         <div class="navbar-header">*/
/*                             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                                 <span class="sr-only">Toggle navigation</span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                                 <span class="icon-bar"></span>*/
/*                             </button>*/
/*                             <a href="{{ url_route('site.arabic') }}"><h1>ذكاء</h1></a><span class="brand-span">للبرمجيات</span><img class="navbar-brand img-circle" src="{{ url_pub('site/images/logo.png') }}" alt="logo">*/
/*                         </div>*/
/* */
/*                         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                             <ul class="nav navbar-nav navbar-left">*/
/*                                 <li class="active"><a  data-value ="home">الرئيسية <span class="sr-only">(current)</span></a></li>*/
/*                                 <li><a  data-value ="ser" >الخدمات</a></li>*/
/*                                 <li><a  data-value ="features">المميزات</a></li>*/
/*                                 <li><a  data-value ="offers">العروض</a></li>*/
/*                                 <li><a  data-value ="about">عن الشركة</a></li>*/
/*                                 <li><a  data-value ="contact">تواصل معنا</a></li>*/
/*                                 <li><a href="{{ url_route('site.english') }}" class="text-capitalize">English</a></li>*/
/*                             </ul>*/
/*                         </div><!-- /.navbar-collapse -->*/
/*                     </div><!-- /.container-fluid -->*/
/*                 </nav>*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-lg-12">*/
/*                             <div class="under-nav">*/
/*                                 <p>نحن نقدم أعلى جودة</p>*/
/*                                 <h1>خدمة <span>برمجية</span></h1>*/
/*                                 <P class="last" >من خلال فريق العمل المتميز واستخدام أحدث طرق التكنولوجيا </P>*/
/*                                 <button class="btn btn-lg go-about">اقرأ المزيد</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <span class="arrow">*/
/*                     <i class="fa fa-chevron-down"></i>*/
/*                 </span>*/
/*             </div>*/
/*         </section>*/
/*         <!-- Start Section Our Services-->*/
/*         <section class="our-services" id="ser">*/
/*             <div class="container">*/
/*                 <h2 class="fav-heading-2">الخدمات التى نقدمها</h2>*/
/* */
/*                 <div class="row">*/
/*                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">*/
/*                         <div class="serv">*/
/*                             <i class="fa fa-code fa-4x fa-fw"></i>*/
/*                             <div class="info">*/
/*                                 <h3>تطبيقات الويب</h3>*/
/*                                 <p>نظام تطبيق ويب تمكن مدير أو مدير المشروع للشركات المختلفة ومتابعة الأعمال التي يتم تشغيلها دون نقلها من أي مكان وفي أي وقت من خلال أنظمة متعددة يختار له النظام العميل الذي يناسبه.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">*/
/*                         <div class="serv">*/
/*                             <i class="fa fa-laptop fa-4x fa-fw"></i>*/
/*                             <div class="info">*/
/*                                 <h3>تصميم برامج الكمبيوتر</h3>*/
/*                                 <p>شركة ذكاء للبرمجيات هى تعمل فى مجال تصميم برامج الكمبيوتر المختلفه كبرامج المحاسبه وادارة الاعمال وتطوير جميع انواع البرمجيات التى تتناسب مع كافة الشركات .</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">*/
/*                         <div class="serv">*/
/*                             <i class="fa fa-lightbulb-o fa-4x fa-fw"></i>*/
/*                             <div class="info">*/
/*                                 <h3>التخطيط الاستراتيجى</h3>*/
/*                                 <p>تقوم الشركة بوضع الخطط الاستراتيجية للمشاريع والشركات تهدف الى التنمية الشاملة للمنظمة من خلال مجموعة محاور منها الاستفادة القصوى من مواردها وتوفير النفقات وزيادة أرباحها واﻻعتماد على التكنولوجيا الحديثة.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">*/
/*                         <div class="serv">*/
/*                             <i class="fa fa-html5 fa-4x fa-fw"></i>*/
/*                             <div class="info">*/
/*                                 <h3>تصميم مواقع الانترنت</h3>*/
/*                                 <p>تقوم الشركة بتصميم الموقع للعميل التى تخدم مجال عمله حسب الطلب مع مراعاة المتصفحات المختلفه والاجهزه المختلفه والشركة تضمن له جودة المنتج المقدم من الشركة.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">*/
/*                         <div class="serv">*/
/*                             <i class="fa fa-android fa-4x fa-fw"></i>*/
/*                             <div class="info">*/
/*                                 <h3>برمجة تطبيقات الهاتف</h3>*/
/*                                 <p>تقدم لك شركة ذكاء للبرمجيات خدمة تصميم وبرمجة تطبيقات الهواتف الذكية بكل أصنافها وأحجامها، وهي على ثقة تامة من نيل رضاك من خلال الجودة العالية والتصميم المميز الذي سيكون عليها تطبيقك.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">*/
/*                         <div class="serv">*/
/*                             <i class="fa fa-shopping-cart fa-4x fa-fw"></i>*/
/*                             <div class="info">*/
/*                                 <h3>التجارة الإليكترونية</h3>*/
/*                                 <p>إثراء السوق المتنامية للتجارة الإلكترونية، من خلال دمج التكنولوجيات الجديدة مثل خدمات الهاتف النقال والحلول الذكية للدفع الإلكتروني.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </section>*/
/*         <!-- END Section Our Services-->*/
/* */
/*         <!-- Start Section Our Features-->*/
/*         <section class="features text-center" id="features">*/
/*             <div class="container">*/
/*                 <h2 class="fav-heading">مميزات البرامج والمنتجات</h2>*/
/*                 <p class="p-about">شركة ذكاء للبرمجيات تقدم خدمة ذات جودة عالية في جميع منتجاتها مع الدقة في النتائج وسهولة الاستخدام.</p>*/
/*                 <div class="row">*/
/*                     <div class="controle">*/
/*                         <i class="fa fa-chevron-right"></i>*/
/*                         <i class="fa fa-chevron-left"></i>*/
/*                     </div>*/
/*                     <div class="boxes col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*                         <div class="i-cont center-block">*/
/*                             <i class="fa fa-briefcase"></i>*/
/*                         </div>*/
/*                         <h3>اختصارات رائعة</h3>*/
/*                         <p class="p-detail"> نستخدم اختصارات رائعة توفر طريقة سهلة لإضافة محتوى إلى موقع الويب الخاص بك إذا كنت ترغب في إضافتها إلى الصفحة أو أزرار لوظيفة، الهاتفية القصيرة تسمح لك بسرعة إدراج العناصر التي تستخدمها بانتظام.</p>*/
/*                     </div>*/
/*                     <div class="boxes col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*                         <div class="i-cont center-block">*/
/*                             <i class="fa fa-home"></i>*/
/*                         </div>*/
/*                         <h3>التصميم الابداعى</h3>*/
/*                         <p class="p-detail">إنشاء محتوى كبير على أساس منتظم. وبعبارة أخرى، يشير التركيز على خلق المحتوى الذي من شأنه أن يحل الألم أكبر من جمهورك المستهدف مع الحفاظ على جدول ترحيل متسقة.</p>*/
/*                     </div>*/
/*                     <div class="boxes col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*                         <div class="i-cont center-block">*/
/*                             <i class="fa fa-rocket"></i>*/
/*                         </div>*/
/*                         <h3>سهل فى اعادة الاستخدام</h3>*/
/*                         <p class="p-detail">تمتاز جميع التصميمات والمنتجات بسهولة اعادة الاستخدام لتتناسب مع نظام العمل الخاص بكل عميل </p>*/
/*                     </div>*/
/*                     <div class="boxes col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*                         <div class="i-cont center-block">*/
/*                             <i class="fa fa-wrench"></i>*/
/*                         </div>*/
/*                         <h3>الدعم الفنى السريع</h3>*/
/*                         <p class="p-detail">تقدم الشركة خدمة الدعم الفنى المجانى لجميع عملائها وللمنتجات الخاصة بها كما تمتاز الخدمة بالسرعة فى اتخاذ القرارت التى تخدم العميل</p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </section>*/
/*         <section class="our-price " id="offers">*/
/*             <h2 class="fav-heading text-center">العروض والأسعار الرائعة</h2>*/
/*             <p class="p-about text-center">تقدم الشركة خطط اسعار تناسب جميع الأحتياجات والشركات</p>*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">*/
/*                         <div class="price-table">*/
/*                             <div class="head">*/
/*                                 <h3 class="">عرض الصفحة الواحدة</h3>*/
/*                                 <span>مناسب للمواقع الصغيرة</span>*/
/*                                 <p>1200 جنيه</p>*/
/*                             </div>*/
/*                             <div class="body">*/
/*                                 <ul class="list-unstyled">*/
/*                                     <li>مساحة تخزين <span>500 MB</span></li>*/
/*                                     <li>سعة تحميل <span>غير محدود</span></li>*/
/*                                     <li>عدد الصفحات<span>1</span></li>*/
/*                                     <li>البريد الإليكترونى <span>1</span></li>*/
/*                                     <li>دومين مجانى<span>1</span></li>*/
/*                                     <li>الدعم <span>24 ساعة</span></li>*/
/*                                 </ul>*/
/*                                 <button class="btn btn-lg btn-ld-mor hvr-sweep-to-right center-block" data-toggle="modal" data-target="#orderModal">اطلب الآن</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">*/
/*                         <div class="price-table">*/
/*                             <div class="head">*/
/*                                 <h3 class="">العرض الإقتصادى</h3>*/
/*                                 <span>مناسب للشركات الناشئة</span>*/
/*                                 <p>2200 جنيه </p>*/
/*                             </div>*/
/*                             <div class="body">*/
/*                                 <ul class="list-unstyled">*/
/*                                     <li>مساحة تخزين <span>1 GB</span></li>*/
/*                                     <li>سعة تحميل <span>غير محدود</span></li>*/
/*                                     <li>عدد الصفحات<span>5</span></li>*/
/*                                     <li>البريد الإليكترونى <span>5</span></li>*/
/*                                     <li>دومين مجانى<span>1</span></li>*/
/*                                     <li>الدعم <span>24 ساعة</span></li>*/
/*                                 </ul>*/
/*                                 <button class="btn btn-lg btn-ld-mor hvr-sweep-to-right center-block" data-toggle="modal" data-target="#orderModal">اطلب الآن</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">*/
/*                         <div class="price-table">*/
/*                             <div class="head">*/
/*                                 <h3 class="">عرض المواقع المتقدمة</h3>*/
/*                                 <span>مناسب للمواقع المتقدمة</span>*/
/*                                 <p>3500 جنيه</p>*/
/*                             </div>*/
/*                             <div class="body">*/
/*                                 <ul class="list-unstyled">*/
/*                                     <li>مساحة تخزين<span>3 GB</span></li>*/
/*                                     <li>سعة تحميل <span>غير محدود</span></li>*/
/*                                     <li>عدد الصفحات<span>5 الى 20</span></li>*/
/*                                     <li>البريد الإليكترونى <span>5</span></li>*/
/*                                     <li>دومين مجانى<span>1</span></li>*/
/*                                     <li>الدعم <span>24 ساعة</span></li>*/
/*                                 </ul>*/
/*                                 <button class="btn btn-lg btn-ld-mor hvr-sweep-to-right center-block" data-toggle="modal" data-target="#orderModal">اطلب الآن</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">*/
/*                         <div class="price-table">*/
/*                             <div class="head">*/
/*                                 <h3 class="">العرض الغير محدود</h3>*/
/*                                 <span>مناسب للأعمال التجارية</span>*/
/*                                 <p>حسب الخدمة</p>*/
/*                             </div>*/
/*                             <div class="body">*/
/*                                 <ul class="list-unstyled">*/
/*                                     <li>مساحة تخزين<span>حسب الطلب</span></li>*/
/*                                     <li>سعة تحميل  <span>غير محدود</span></li>*/
/*                                     <li>عدد الصفحات <span>حسب الطلب</span></li>*/
/*                                     <li>البريد الإليكترونى <span>حسب الطلب</span></li>*/
/*                                     <li>دومين مجانى<span>1</span></li>*/
/*                                     <li>الدعم <span>24 ساعة</span></li>*/
/*                                 </ul>*/
/*                                 <button class="btn btn-lg btn-ld-mor hvr-sweep-to-right center-block" data-toggle="modal" data-target="#orderModal">التفاصيل</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/* */
/*         <section class="about" id="about">*/
/*             <div class="container">*/
/*                 <h2 class="fav-heading text-center">كل ماتحتاجه لتتعرف علينا</h2>*/
/*                 <p class="p-about text-center">نحن شركة برمجيات ذات<b> أفكار إبداعية</b> و <b>فريق عمل ذو</b> مهارات عالية</p>*/
/*                 <div class="row">*/
/*                     <div class="col-lg-6 col-md-6">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title">ما هي شركة ذكاء ؟<span><i class="fa fa-edit"></i></span></h3>*/
/*                             </div>*/
/*                             <div class="panel-body"><p>شركة ذكاء هي شركة مصرية متخصصة تضم مجموعة كبيرة متناسقة من افضل الخبرات الفنية في المجالات الخاصة */
/*                                     فى تصميم وبرمجة مواقع الانترنت , برمجة تطبيقات الهواتف الذكية, نظم الكترونيه, ادارة الكترونيه ,تخطيط استراتيجى */
/*                                     انشاء شبكات ,تطبيقات الهواتف الذكيه ويقوم بانشاء وتطوير البرامج فريق عمل متميز ومحترف في تصميم البرامج */
/*                                     للشركات والمؤسسات المختلفة بلغات برمجه مختلفه والتي تتميز بالدقة في النتائج والسهولة في الاستخدام.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title">لماذا أختار ذكاء ؟<span><i class="fa fa-heart-o"></i></span></h3>*/
/*                             </div>*/
/*                             <div class="panel-body"><p>تتميز الشركة بحرصها على تعميم الإستفادة لكل من عميل شركة ذكاء بشكل مباشر وعملاء عميل الشركة بشكل غير مباشر*/
/*                                     فمثلا عندما يطلب منا صاحب محل وليكن محل سوبر ماركت برنامج ﻹدارة محله التجارى لا يقتصر إهتمامنا على إستفادة صاحب المحل وحده من البرنامج*/
/*                                     ولكننا نهتم أيضا بتيسير عملية الشراء على المستهلك لما سيجده من التنظيم الواضح لإدارة المحل الناتج عن جودة البرامج التي تصممها الشركة.</p>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                     <div class="col-lg-6 col-md-6">*/
/*                         <h3 class="skills-progress-heading">مهارات فريق العمل</h3>*/
/*                         <div class="skills-progress">*/
/*                             <div class="za-progress-item-wrap">*/
/*                                 <div class="za-progress-main">*/
/*                                     <div class="za-progress-title">*/
/*                                         التصميم </div>*/
/*                                     <div class="za-progress-value-text">*/
/*                                         70	<span>%</span>*/
/*                                     </div>*/
/*                                     <div class="progress" style="background-color:#e6e6e6;*/
/*                                          width:100%;*/
/*                                          height:11px;*/
/*                                          border-radius:5px;*/
/*                                          -webkit-border-radius: 5px;*/
/*                                          ">*/
/*                                         <div class="progress-bar progress-bar-danger" role="progressbar" data-valuetransitiongoal="70" style="line-height: 11px; border-radius: 5px; width: 70%;" data-valuenow="65">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="za-progress-item-wrap">*/
/*                                 <div class="za-progress-main  ">*/
/*                                     <div class="za-progress-title">*/
/*                                         العلامة التجارية </div>*/
/*                                     <div class="za-progress-value-text">*/
/*                                         50	<span>%</span>*/
/*                                     </div>*/
/*                                     <div class="progress" style="background-color:#e6e6e6;*/
/*                                          width:100%;*/
/*                                          height:11px;*/
/*                                          border-radius:5px;*/
/*                                          -webkit-border-radius: 5px;*/
/*                                          ">*/
/*                                         <div class="progress-bar progress-bar-danger" role="progressbar" data-valuetransitiongoal="50" style="line-height: 11px; border-radius: 5px; width: 50%;" data-valuenow="45">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="za-progress-item-wrap">*/
/*                                 <div class="za-progress-main  ">*/
/*                                     <div class="za-progress-title">*/
/*                                         البرمجة </div>*/
/*                                     <div class="za-progress-value-text">*/
/*                                         85	<span>%</span>*/
/*                                     </div>*/
/*                                     <div class="progress" style="background-color:#e6e6e6;*/
/*                                          width:100%;*/
/*                                          height:11px;*/
/*                                          border-radius:5px;*/
/*                                          -webkit-border-radius: 5px;*/
/*                                          ">*/
/*                                         <div  class="progress-bar progress-bar-danger" role="progressbar" data-valuetransitiongoal="85" style="line-height: 11px; border-radius: 5px; width: 85%;" data-valuenow="80">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="za-progress-item-wrap">*/
/*                                 <div class="za-progress-main  ">*/
/*                                     <div class="za-progress-title">*/
/*                                         التسويق </div>*/
/*                                     <div class="za-progress-value-text">*/
/*                                         100	<span>%</span>*/
/*                                     </div>*/
/*                                     <div class="progress" style="background-color:#e6e6e6;*/
/*                                          width:100%;*/
/*                                          height:11px;*/
/*                                          border-radius:5px;*/
/*                                          -webkit-border-radius: 5px;*/
/*                                          ">*/
/*                                         <div  class="progress-bar progress-bar-danger" role="progressbar" data-valuetransitiongoal="100" style="line-height: 11px; border-radius: 5px; width: 100%;" data-valuenow="95">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="za-progress-item-wrap">*/
/*                                 <div class="za-progress-main  ">*/
/*                                     <div class="za-progress-title">*/
/*                                         برامج الموبايل </div>*/
/*                                     <div class="za-progress-value-text">*/
/*                                         90	<span>%</span>*/
/*                                     </div>*/
/*                                     <div class="progress" style="background-color:#e6e6e6;*/
/*                                          width:100%;*/
/*                                          height:11px;*/
/*                                          border-radius:5px;*/
/*                                          -webkit-border-radius: 5px;*/
/*                                          ">*/
/*                                         <div  class="progress-bar progress-bar-danger" role="progressbar" data-valuetransitiongoal="90" style="line-height: 11px; border-radius: 5px; width: 90%;" data-valuenow="85">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="za-progress-item-wrap">*/
/*                                 <div class="za-progress-main  ">*/
/*                                     <div class="za-progress-title">*/
/*                                         تطبيقات الويب </div>*/
/*                                     <div class="za-progress-value-text">*/
/*                                         95	<span>%</span>*/
/*                                     </div>*/
/*                                     <div class="progress" style="background-color:#e6e6e6;*/
/*                                          width:100%;*/
/*                                          height:11px;*/
/*                                          border-radius:5px;*/
/*                                          -webkit-border-radius: 5px;*/
/*                                          ">*/
/*                                         <div class="progress-bar progress-bar-danger" role="progressbar" data-valuetransitiongoal="95" style="line-height: 11px; border-radius: 5px; width: 95%;" data-valuenow="90">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         <!-- Start Section Contact -->*/
/*         <section class="contact" id="contact">*/
/*             <div class="overlay">*/
/*                 <h2 class="fav-heading text-center">تواصل معنا</h2>*/
/*                 <p class="p-about text-center">يسعدنا تلقى رسائلك فى أى وقت</p>*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-lg-8 col-md-7 col-xs-12">*/
/*                             <form role="form" action="{{ url_route('contact') }}" method="post">*/
/*                                 <div class="col-md-12">*/
/*                                     <div class="form-group col-md-6 col-xs-6 reset-col">*/
/*                                         <input type="text" class="form-control input-lg" value="{{ (errors.hasError()? errors.pullParam('contact-name') : '') |raw }}"name="contact-name" placeholder="الأسم">*/
/*                                     </div>*/
/*                                     <div class="form-group col-md-6 col-xs-6 ">*/
/*                                         <input type="email" class="form-control input-lg" value="{{ (errors.hasError() ? errors.pullParam('contact-email') : '') |raw }}" name="contact-email" required placeholder="الأيميل" style="margin-right: 15px">*/
/*                                     </div>*/
/* */
/*                                 </div>*/
/*                                 <div class="col-md-12">*/
/*                                     <div class="form-group">*/
/*                                         <textarea type="text" class="form-control input-lg" name="contact-msg" required placeholder="أترك رسالتك هنا">{{ (errors.hasError()? errors.pullParam('contact-msg') : '') |raw}}</textarea>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-lg-12">*/
/*                                     <button type="submit" class="btn btn-lg btn-block btn-contact">تواصل معنا</button>*/
/*                                 </div>*/
/*                                 {{ token_input()|raw }}*/
/*                             </form>*/
/*                         </div>*/
/*                         <div class="col-lg-4 col-md-5 col-xs-12 info">*/
/*                             <div class="col-lg-12">*/
/*                                 <h4>معلومات الأتصال</h3>*/
/*                                     <div class="">*/
/*                                         <span><i class="fa fa-envelope-o"></i></span>*/
/*                                         <p class="p-info">20 شارع المعتصم,  طنطا , الغربية, مصر.  تواصل على أرقام الشركة </p>*/
/*                                     </div>*/
/*                                     <div class="colored">*/
/*                                         <p class=" ">-Zakaa@Zakaa.com</p>*/
/*                                         <p class=" ">-002 01158222100 <br> -002 01064328899</p>*/
/*                                     </div>*/
/*                             </div>*/
/*                             <div class="col-lg-12">*/
/*                                 <h4 class="">ساعات العمل</h3>*/
/*                                     <div class="col-lg-12 reset-col">*/
/*                                         <span><i class="fa fa-clock-o"></i></span>*/
/*                                         <p>الأحد – الخميس : صباحا to 17 مساء<br>*/
/*                                             الجمعة , السبت :  أجازة</p>*/
/*                                     </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/* */
/*         <!-- END Section Contact -->*/
/*         <!--Start section subscribe-->*/
/*         <section class="subscribe text-center">*/
/*             <div class="container">*/
/*                 <h2>ابق على تواصل معنا </h2>*/
/*                 <p class="lead">اشترك فى قائمتنا البريدية ليصلك آخر الأخبار</p>*/
/*                 <form class="form-inline ">*/
/*                     <input class="form-control input-lg" type="email" placeholder="Write Your Email">*/
/*                     <button class="btn btn-lg but-color"><i class="fa fa-edit fa-lg"></i>اشتراك</button>*/
/*                 </form>             */
/*             </div>*/
/*         </section>*/
/*         <!--End section subscribe-->*/
/*         <section class="footer">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">*/
/*                         <h3 class="fav-heading-2">عن ذكاء</h2>*/
/*                             <p>شركة زكاء شركة كبيرة مصرية تتسق خبرة أفضل في مناطق معينة في مجال تصميم وبرمجة المواقع، برمجة التطبيقات المتنقلة.</p>*/
/*                             <div class="icon">*/
/*                                 <ul class="list-unstyled">*/
/*                                     <li><a class="facebook" href="https://www.facebook.com/zakaa.01/?ref=page_internal" target="_blank"><i class="fa fa-facebook"></i></a></li>*/
/*                                     <li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>*/
/*                                     <li><a class="google-plus" href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>*/
/*                                     <li><a class="linked-in" href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                     </div>*/
/*                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">*/
/*                         <h3 class="fav-heading-2">أبق على تواصل</h2>*/
/*                             <div class="get-in-touch">*/
/*                                 <ul class="list-unstyled">*/
/*                                     <li><i class="fa fa-map-marker"></i>*/
/*                                         <div class="">*/
/*                                             20 شارع المعتصم,  طنطا , الغربية, مصر.  تواصل على أرقام الشركة <a href="#" target="_blank">www.zakaa.com</a>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li><i class="fa fa-phone"></i><div>تليفون ذكاء مبيعات رقم : 002 01158222100-- 01064328899</div></li>*/
/*                                     <li><i class="fa fa-envelope"></i><div>البريد الإليكترونى لمبيعات ذكاء : */
/*                                             <a href="#">sales@zakaa.com</a></div></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                     </div>*/
/*                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">*/
/*                         <h3 class="fav-heading-2">أخر الأخبار</h2>*/
/*                             <ul class="list-unstyled">*/
/*                                 <li>*/
/*                                     <div class="posts">*/
/*                                         <div class="media">*/
/*                                             <a class="pull-right" href="#">*/
/*                                                 <img class="media-object" src="{{ url_pub('site/images/works/p1.jpg') }}" width="70px" height="70px" alt="articl 1">*/
/*                                             </a>*/
/*                                             <div class="media-body">*/
/*                                                 <h4 class="media-heading">عروض الشركة</h4>*/
/*                                             </div>*/
/*                                             <div class="za-post-date"><span>التاريخ: يناير 8, 2016</span></div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <div class="posts">*/
/*                                         <div class="media">*/
/*                                             <a class="pull-right" href="#">*/
/*                                                 <img class="media-object" src="{{ url_pub('site/images/works/p11.jpg') }}" width="70px" height="70px" alt="articl 1">*/
/*                                             </a>*/
/*                                             <div class="media-body">*/
/*                                                 <h4 class="media-heading">خدمات الشركة</h4>*/
/*                                             </div>*/
/*                                             <div class="za-post-date"><span>التاريخ: يناير 10, 2016</span></div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             </ul>*/
/*                     </div>*/
/*                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">*/
/*                         <h3 class="fav-heading-2">أخر المنشورات</h2>*/
/*                             <div class="tweets">*/
/*                                 <ul class="list-unstyled">*/
/*                                     <li>*/
/*                                         <div class="latest-tweets">*/
/*                                             <p>خدمات البرمجة</p>*/
/*                                             <a href="#" target="_blank">منذ 10 ايام مضت</a> */
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="latest-tweets">*/
/*                                             <p>مميزات التجارة الإليكترونية</p>*/
/*                                             <a href="#" target="_blank">شهر مضى</a> */
/*                                         </div>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="copyright text-center">*/
/*                 جميع الحقوق محفوظة لشركة ذكاء &copy; 2016  <span> <a href ="{{ url_route('site.arabic') }}" target="_blank"> Zakaa<span>.inc</span></a></span>*/
/*             </div>*/
/*         </section>*/
/* */
/*         <div id="scroll-top">*/
/*             <i class="fa fa-chevron-up fa-2x"></i>*/
/*         </div>*/
/*         <!-- LOADING PAGE-->*/
/*         <section class="load-page">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12 loadBox">*/
/*                         <div id = "cupcake" class = "box">*/
/*                             <span class = "letter letterL">L</span>*/
/* */
/*                             <div class = "cupcakeCircle box">*/
/*                                 <div class = "cupcakeInner box">*/
/*                                     <div class = "cupcakeCore box"></div>*/
/* */
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <span class = "letter box">A</span>*/
/*                             <span class = "letter box">D</span>*/
/*                             <span class = "letter box">I</span>*/
/*                             <span class = "letter box">N</span>*/
/*                             <span class = "letter box">G</span>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         <!--EDIT Order  Modal -->*/
/*         <div class="modal fade " id="orderModal" tabindex="-1" role="dialog" aria-labelledby="mm">*/
/*             <div class="modal-dialog modal-lg" role="document">*/
/*                 <div class="modal-content modal-contentAr">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                         <h4 class="modal-title" id="gridSystemModalLabel">أطلب الآن</h4>*/
/*                     </div>*/
/*                     <form action="{{ url_action('Site\\SiteController@order') }}" method="post" enctype="multipart/form-data">*/
/*                         <div class="modal-body">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-12">*/
/*                                     <div class="tap modal-body-header">*/
/*                                         <ul class="nav nav-pills" role="tablist">*/
/*                                             <li role="presentation" class="active"><a href="#sectionBasicData" aria-controls="sectionBasicData" role="tab" data-toggle="tab"><span class="badge">1</span> المعلومات الأساسية</a>*/
/*                                             </li>*/
/*                                             <li role="presentation"><a href="#sectionContacts" aria-controls="sectionContacts" role="tab" data-toggle="tab"><span class="badge">2</span>معلومات الأتصال</a></li>*/
/*                                             <li role="presentation"><a href="#sectionOthers" aria-controls="sectionOthers" role="tab" data-toggle="tab"><span class="badge">3</span> أخرى </a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="tab-content">*/
/*                                 <section role="tabpanel" class="basic-data tab-pane active" id="sectionBasicData">*/
/*                                     <div class="row">*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>الأسم الأول</label>*/
/*                                             <input id="" type="text" class="form-control" value="{{ (errors.hasError()? errors.pullParam('order-firstname') : '') |raw }}"name="order-firstname" placeholder="الأسم الأول" required>*/
/*                                         </div>*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>الأسم الأخير</label>*/
/*                                             <input id="" type="text" class="form-control" value="{{ (errors.hasError()? errors.pullParam('order-lastname') : '') |raw }}" name="order-lastname" placeholder="الأسم الأخير" required>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="row">*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>الرقم القومى</label>*/
/*                                             <input id="" type="text" class="form-control" value="{{ (errors.hasError()? errors.pullParam('order-social') : '') |raw }}" name="order-social" placeholder="EX:255 080 116 21458" required>*/
/*                                         </div>*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>اختار العرض</label>*/
/*                                             <select id="" name="order-plan" class="form-control" required>*/
/*                                                 <option value="Basic Plan">عرض الصفحة الواحدة</option>*/
/*                                                 <option value="Economic Plan">العرض الأقتصادى</option>*/
/*                                                 <option value="Pro Plan">عرض المواقع المتقدمة</option>*/
/*                                                 <option value="Enterprise Plan">العرض الغير محدود</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </section>*/
/*                                 <section role="tabpanel" class="contacts tab-pane" id="sectionContacts">*/
/*                                     <div class="row">*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>المحمول</label>*/
/*                                             <input id="" type="text" class="form-control" value="{{ (errors.hasError()? errors.pullParam('order-mobile') : '') |raw }}"name="order-mobile" placeholder="0123456789" required>*/
/*                                         </div>*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>الهاتف</label>*/
/*                                             <input id="" type="text" class="form-control" value="{{ (errors.hasError()? errors.pullParam('order-tel') : '') |raw }}" name="order-tel" placeholder="0123456789" required>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="row">*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>العنوان 1</label>*/
/*                                             <input id="" type="text" class="form-control" value="{{ (errors.hasError()? errors.pullParam('order-address_1') : '') |raw }}" name="order-address_1" placeholder="العنوان الرئيسى" required>*/
/*                                         </div>*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>العنوان 2</label>*/
/*                                             <input id="" type="text" class="form-control" value="{{ (errors.hasError()? errors.pullParam('order-address_2') : '') |raw }}" name="order-address_2" placeholder="العنوان الفرعى">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="row">*/
/*                                         <div class="form-group col-sm-4">*/
/*                                             <label>اختار البلد</label>*/
/*                                             <select class="crs-country form-control" name="order-country" style="direction: ltr;" data-region-id="one" required></select>*/
/* */
/* */
/*                                         </div>*/
/*                                         <div class="form-group col-sm-4">*/
/*                                             <label>المحافظة</label>*/
/*                                             <select id="one" class="form-control" name="order-state" style="direction: ltr;" required></select>*/
/*                                         </div>*/
/*                                         <div class="form-group col-sm-4">*/
/*                                             <label>المدينة</label>*/
/*                                             <input id="" type="text" value="{{ (errors.hasError()? errors.pullParam('order-city') : '') |raw }}" name="order-city" class="form-control" placeholder="أدخل المدينة" required>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="row">    */
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>البريد الإليكترونى</label>*/
/*                                             <input id="" type="email" class="form-control" value="{{ (errors.hasError()? errors.pullParam('order-email') : '') |raw }}" name="order-email" placeholder="البريد الإليكترونى" required>*/
/*                                         </div>*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>الموقع الإليكترونى</label>*/
/*                                             <input id="" type="text" value="{{ (errors.hasError()? errors.pullParam('order-site') : '') |raw }}" name="order-site" class="form-control" placeholder="EX.WWW.zakaa.COM" >*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </section>*/
/*                                 <section role="tabpanel" class="sectionOthers tab-pane" id="sectionOthers">*/
/*                                     <div class="row">*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>أسم المشروع</label>*/
/*                                             <input id="" type="text" class="form-control" value="{{ (errors.hasError()? errors.pullParam('order-project') : '') |raw }}" name="order-project" placeholder="اسم المشروع" >*/
/*                                         </div>*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>أرفاق ملف</label>*/
/*                                             <input id="" type="file" name="order-attachment" title="قم باختيار ملف مضغوط يحتوي علي ما يساعدنا لفهم عرضك المقدم">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="row">*/
/*                                         <div class="form-group col-sm-12">*/
/*                                             <label>الوصف</label>*/
/*                                             <textarea id="" maxlength="250" class="form-control col-sm-12" name="order-description" placeholder="أكتب بعض التفاصيل هنا">{{ (errors.hasError()? errors.pullParam('order-description') : '') |raw }}</textarea>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </section>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="modal-footer">*/
/*                             <button type="submit" id="" class="btn btn-main-color">*/
/*                                 <span class="fa fa-send-o"> </span> &nbsp;إرسال*/
/*                             </button>*/
/*                             <button type="button" class="btn btn-defult" data-dismiss="modal">غلق</button>*/
/*                         </div>*/
/*                         {{ token_input() |raw}}*/
/*                     </form>*/
/*                 </div><!-- /.modal-content -->*/
/*             </div><!-- /.modal-dialog -->*/
/*         </div><!-- /.modal -->*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*         <script src="{{ url_pub('site/js/jquery-1.12.1.min.js') }}"></script>*/
/*         <script src="{{ url_pub('site/js/bootstrap.min.js') }}"></script>*/
/*         <script src="{{ url_pub('site/js/plugins.js') }}"></script>*/
/*         <script src="{{ url_pub('site/js/jquery.nicescroll.js') }}"></script>*/
/*         <script src="{{ url_pub('site/js/jquery.mixitup.js') }}"></script>*/
/*         <script src="{{ url_pub('site/js/jquery.crs.min.js') }}"></script>*/
/*         <script src="{{ url_pub('site/js/sweetalert.min.js') }}"></script>*/
/*         <script type="text/javascript">*/
/* {% if errors.hasError() %}*/
/* swal({title: "Error!", text: '{{ getErrors() }}', type: "error", confirmButtonText: "close"});*/
/* {% endif %}*/
/* {% if session_has('success') %}*/
/* swal("Good job!", "{{ session_pull('success') }}", "success")*/
/* {% endif %}*/
/* {% if session_has('error') %}*/
/* swal("Error!", "{{ session_pull('error') }}", "error")*/
/* {% endif %}*/
/* {% if session_has('warning') %}*/
/* swal("Sorry!", "{{ session_pull('warning') }}", "warning")*/
/* {% endif %}*/
/*         </script>*/
/* */
/*     </body>*/
/* </html>*/
/* */
/* */
/* */

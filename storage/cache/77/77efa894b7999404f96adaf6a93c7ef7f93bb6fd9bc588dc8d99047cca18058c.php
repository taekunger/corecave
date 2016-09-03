<?php

/* site/index-en.html */
class __TwigTemplate_79623bb6b23371e058d5a227947183b907177a6373de26aae782ad17a8b86c60 extends Twig_Template
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
        <link rel='stylesheet' href=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/css/style.css")), "html", null, true);
        echo "\"/>
        <link rel='stylesheet' href=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/css/font-awesome.min.css")), "html", null, true);
        echo "\"/>
        <link rel='stylesheet' href=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/css/media.css")), "html", null, true);
        echo "\"/>
        <link rel='stylesheet' href=\"";
        // line 13
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
                            <img class=\"navbar-brand img-circle\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/images/logo.png")), "html", null, true);
        echo "\" alt=\"logo\"><a href=\"#\"><h1>Zakaa</h1></a><span class=\"brand-span\">.inc</span>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li class=\"active\"><a  href=\"";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_route')->getCallable(), array("site.english")), "html", null, true);
        echo "\" data-value =\"home\">Home <span class=\"sr-only\">(current)</span></a></li>
                                <li><a  data-value =\"ser\" >Services</a></li>
                                <li><a  data-value =\"features\">Features</a></li>
                                <li><a  data-value =\"offers\">Offers</a></li>
                                <li><a  data-value =\"about\">About</a></li>
                                <li><a  data-value =\"contact\">Contact</a></li>
                                <li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_route')->getCallable(), array("site.arabic")), "html", null, true);
        echo "\">عربي</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"under-nav\">
                                <p class=\"bouncer\">We Provide Highest Quality</p>
                                <h1><span>PROGRAMING</span> SERVICES</h1>
                                <P class=\"last \" >By maintaining &amp; monitoring our professionalism work</P>
                                <button class=\"btn btn-lg go-about\">Read More</button>
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
                <h2 class=\"fav-heading-2\">Services We Provide</h2>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"serv\">
                            <i class=\"fa fa-code fa-4x fa-fw\"></i>
                            <div class=\"info\">
                                <h3>Web Application</h3>
                                <p>Wep application system enables the Manager or project manager of various companies and pursue business that runs without moving them from any place and at any time through multiple systems chooses his client system that suits him.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"serv\">
                            <i class=\"fa fa-laptop fa-4x fa-fw\"></i>
                            <div class=\"info\">
                                <h3>Desktop Application</h3>
                                <p>Zakaa software company is engaged in the design of various computer programs such as accounting software and business management and development of all types of software to suit all businesses.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"serv\">
                            <i class=\"fa fa-lightbulb-o fa-4x fa-fw\"></i>
                            <div class=\"info\">
                                <h3>Fresh&amp; Right Ideas</h3>
                                <p>The company is developing various strategic plans for projects, companies and institutions and aimed at the overall development of the organization by making the most of their resources and save costs and increase their profits rely on modern technology.</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"serv\">
                            <i class=\"fa fa-html5 fa-4x fa-fw\"></i>
                            <div class=\"info\">
                                <h3>Web Sites</h3>
                                <p>The company designs website for customer serving his field on demand taking into account different browsers and different devices and the company guaranteed quality product from the company</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                        <div class=\"serv\">
                            <i class=\"fa fa-android fa-4x fa-fw\"></i>
                            <div class=\"info\">
                                <h3>Mobile Apps &amp; Andriod</h3>
                                <p>Zakaa software company offers you a service of design and programming applications for smart phones with all types and sizes, and are confident that has satisfaction through high quality and distinctive design that will have your app</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
                        <div class=\"serv\">
                            <i class=\"fa fa-shopping-cart fa-4x fa-fw\"></i>
                            <div class=\"info\">
                                <h3>E-Comerce</h3>
                                <p>Enriching the growing market of e-commerce, by integrating new technologies like mobile services and smart e-payment solutions.</p>
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
                <h2 class=\"fav-heading\">Awesome & Great Features</h2>
                <p class=\"p-about\">Zakaa software company offers high quality service in all of their products with precision in results and ease of use.</p>
                <div class=\"controle\">
                    <i class=\"fa fa-chevron-left\"></i>
                    <i class=\"fa fa-chevron-right\"></i>
                </div>
                <div class=\"row\">

                    <div class=\"boxes col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"i-cont center-block\">
                            <i class=\"fa fa-briefcase\"></i>
                        </div>
                        <h3>Awesome Shortcodes</h3>
                        <p class=\"p-detail\">We use global library fonts and shortcodes that provide an easy way to add custom content to your site Whether you want to add tabs to a post, shortcodes let you quickly insert elements you regularly use.</p>
                    </div>
                    <div class=\"boxes col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"i-cont center-block\">
                            <i class=\"fa fa-home\"></i>
                        </div>
                        <h3>Creative Design</h3>
                        <p class=\"p-detail\">Create great content on a regular basis. In other words, focus on creating content that would solve your target audience’s biggest pain points while maintaining a consistent posting schedule.</p>
                    </div>
                    <div class=\"boxes col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"i-cont center-block\">
                            <i class=\"fa fa-rocket\"></i>
                        </div>
                        <h3>Easy To Customize</h3>
                        <p class=\"p-detail\">Greater control over UX and increased revenue are both powerful motivators, but the biggest reason to consider joining the program is better with Instant Articles.</p>
                    </div>
                    <div class=\"boxes col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"i-cont center-block\">
                            <i class=\"fa fa-wrench\"></i>
                        </div>
                        <h3>Quick Support</h3>
                        <p class=\"p-detail\">A mobile content revolution is afoot. Content distribution giants like Facebook, Google, and Apple are delivering content to mobile users in new and innovative ways, leaving content publishers scrambling to keep up.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class=\"our-price \" id=\"offers\">
            <h2 class=\"fav-heading text-center\">Our Ammazing Offers</h2>
            <p class=\"p-about text-center\">Lets Talk About Work</p>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"price-table\">
                            <div class=\"head\">
                                <h3 class=\"\">Basic Plan</h3>
                                <span>ideal for starter web</span>
                                <p>1200 EG</p>
                            </div>
                            <div class=\"body\">
                                <ul class=\"list-unstyled\">
                                    <li>Disk space <span>500 MB</span></li>
                                    <li>Band Width <span>Unlimited</span></li>
                                    <li>Pages<span>1</span></li>
                                    <li>Email Acounts <span>1</span></li>
                                    <li>Free Domains <span>1</span></li>
                                    <li>Support <span>24 Hours</span></li>
                                </ul>
                                <button type=\"button\" class=\"btn btn-lg btn-ld-mor hvr-sweep-to-right center-block\" data-toggle=\"modal\" data-target=\"#orderModal\">Order It Now</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"price-table\">
                            <div class=\"head\">
                                <h3 class=\"\">Economic Plan</h3>
                                <span>ideal for advanced web</span>
                                <p>2200 EG </p>
                            </div>
                            <div class=\"body\">
                                <ul class=\"list-unstyled\">
                                    <li>Disk space    <span>1 GB</span></li>
                                    <li>Band Width  <span>Unlimited</span></li>
                                    <li>Pages   <span>5</span></li>
                                    <li>Email Acounts   <span>5</span></li>
                                    <li>Free Domains  <span>1</span></li>
                                    <li>Support       <span>24 Hours</span></li>
                                </ul>
                                <button type=\"button\" class=\"btn btn-lg btn-ld-mor hvr-sweep-to-right center-block\" data-toggle=\"modal\" data-target=\"#orderModal\">Order It Now</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"price-table\">
                            <div class=\"head\">
                                <h3 class=\"\">Pro Plan</h3>
                                <span>ideal for pro websites</span>
                                <p>3500 EG</p>
                            </div>
                            <div class=\"body\">
                                <ul class=\"list-unstyled\">
                                    <li>Disk space <span>3 GB</span></li>
                                    <li>Band Width <span>Unlimited</span></li>
                                    <li>Pages <span>5 to 20</span></li>
                                    <li>Email Acounts <span>5</span></li>
                                    <li>Free Domains <span>1</span></li>
                                    <li>Support <span>24 Hours</span></li>
                                </ul>
                                <button type=\"button\" class=\"btn btn-lg btn-ld-mor hvr-sweep-to-right center-block\" data-toggle=\"modal\" data-target=\"#orderModal\">Order It Now</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"price-table\">
                            <div class=\"head\">
                                <h3 class=\"\">Enterprise Plan</h3>
                                <span>ideal for business websites</span>
                                <p>Custom</p>
                            </div>
                            <div class=\"body\">
                                <ul class=\"list-unstyled\">
                                    <li>Disk space <span>as oredred</span></li>
                                    <li>Band Width <span>Unlimited</span></li>
                                    <li>Pages <span>as ordered</span></li>
                                    <li>Email Acounts <span>as oredred</span></li>
                                    <li>Free Domains <span>1</span></li>
                                    <li>Support <span>24 Hours</span></li>
                                </ul>
                                <button type=\"button\" class=\"btn btn-lg btn-ld-mor hvr-sweep-to-right center-block\" data-toggle=\"modal\" data-target=\"#orderModal\">Order It Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class=\"about\" id=\"about\">
            <div class=\"container\">
                <h2 class=\"fav-heading text-center\">All What You Need To Know About Us</h2>
                <p class=\"p-about text-center\">We are a software company with <b>creative ideas</b> with <b>extra ordinary</b> skills</p>
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">What is Zakaa ? <span><i class=\"fa fa-edit\"></i></span></h3>
                            </div>
                            <div class=\"panel-body\">
                                Zakaa company is a company with a large Egyptian consistent best expertise in particular areas in designing and programming websites, mobile applications programming, electronic systems, electronic management, strategic planning, smart phone applications and creates a software a professional development team that design software for various companies and organizations by brain programming languages</p>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h3 class=\"panel-title\">Why Should I schoose Zakaa? <span><i class=\"fa fa-heart-o\"></i></span></h3>
                            </div>
                            <div class=\"panel-body\">
                                The company is characterized by its insistence on universal access for each client company directly and clients Zakaa agent company indirectly also facilitate your purchase to the consumer of what he finds clear regulation for managing work resulting from software quality designed by company we believe that our client when he sees the result used to program software Zakaa company and the impact on clients and how they benefit</p>
                            </div>
                        </div>

                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <h3 class=\"skills-progress-heading\">Our Team Skills</h3>
                        <div class=\"skills-progress\">
                            <div class=\"za-progress-item-wrap\">
                                <div class=\"za-progress-main\">
                                    <div class=\"za-progress-title\">
                                        Design </div>
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
                                        Branding </div>
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
                                        Development </div>
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
                                        Marketing </div>
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
                                        Mobile App </div>
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
                                        Web Applications </div>
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
                <h2 class=\"fav-heading text-center\">CONTACT US</h2>
                <p class=\"p-about text-center\">We Wanna Hear From You</p>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-8 col-md-7 col-xs-12\">
                            <form role=\"form\" action=\"";
        // line 409
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_route')->getCallable(), array("contact")), "html", null, true);
        echo "\" method=\"post\" >
                                <div class=\"col-md-12\">
                                    <div class=\"form-group col-md-6 col-xs-6 reset-col\">
                                        <input type=\"text\" value=\"";
        // line 412
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "contact-name"), "method")) : (""));
        echo "\" name=\"contact-name\" class=\"form-control input-lg\" placeholder=\"User Name\">
                                    </div>
                                    <div class=\"form-group col-md-6 col-xs-6 \">
                                        <input type=\"email\" value=\"";
        // line 415
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "contact-email"), "method")) : (""));
        echo "\"name=\"contact-email\" class=\"form-control input-lg\" required placeholder=\"Email\" style=\"margin-left: 15px\">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <textarea type=\"text\" name=\"contact-msg\" class=\"form-control input-lg\" required placeholder=\"Your Message Here.\">";
        // line 420
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "contact-msg"), "method")) : (""));
        echo "</textarea>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <button type=\"submit\" class=\"btn btn-lg btn-block btn-contact\">Send Your Message </button>
                                </div>
                                ";
        // line 426
        echo call_user_func_array($this->env->getFunction('token_input')->getCallable(), array());
        echo "
                            </form>
                        </div>
                        <div class=\"col-lg-4 col-md-5 col-xs-12 info\">
                            <div class=\"col-lg-12\">
                                <h4>Contact Information</h3>
                                    <div class=\"\">
                                        <span><i class=\"fa fa-envelope-o\"></i></span>
                                        <p class=\"p-info\">20 Al moatasem St,  Tanta , AlGharbia, Egypt. Contact the company numbers </p>
                                    </div>
                                    <div class=\"colored\">
                                        <p class=\" \">-Zakaa@Zakaa.com</p>
                                        <p class=\" \">-002 01158222100 <br> -002 01064328899</p>
                                    </div>
                            </div>
                            <div class=\"col-lg-12\">
                                <h4 class=\"\">Business Hours</h3>
                                    <div class=\"col-lg-12 reset-col\">
                                        <span><i class=\"fa fa-clock-o\"></i></span>
                                        <p>sunday – thursday : 9am to 17 pm<br>
                                            friday , satarday : 2days off</p>
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
                <h2>Keep In Touch </h2>
                <p class=\"lead\">Sign Up For Newsletter, new WowTemplates content, updates, surveys &amp; offers.</p>
                <form class=\"form-inline \">
                    <input class=\"form-control input-lg\" type=\"email\" placeholder=\"Write Your Email\">
                    <button class=\"btn btn-lg but-color\"><i class=\"fa fa-edit fa-lg\"></i>Subscribe</button>
                </form>             
            </div>
        </section>
        <!--End section subscribe-->
        <section class=\"footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                        <h3 class=\"fav-heading-2\">About Zakaa</h2>
                            <p>Zakaa company is a company with a large Egyptian consistent best expertise in particular areas in designing and programming websites, mobile applications programming.</p>
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
                        <h3 class=\"fav-heading-2\">Get In Touch</h2>
                            <div class=\"get-in-touch\">
                                <ul class=\"list-unstyled\">
                                    <li><i class=\"fa fa-map-marker\"></i>
                                        <div class=\"\">
                                            <a href=\"#\" target=\"_blank\">www.zakaa.com</a> 20 Almo3tasem st Tanta , AlGharbia, Egypt.
                                        </div>
                                    </li>
                                    <li><i class=\"fa fa-phone\"></i><div>Zakaa Sales Telephone No : 002 01158222100-- 01064328899</div></li>
                                    <li><i class=\"fa fa-envelope\"></i><div>Zakaa Sales Email Account : 
                                            <a href=\"#\">support.Zakaa.com</a></div></li>
                                </ul>
                            </div>
                    </div>
                    <div class=\"clearfix hidden-lg\"></div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                        <h3 class=\"fav-heading-2\">Latest Posts</h2>
                            <ul class=\"list-unstyled\">
                                <li>
                                    <div class=\"posts\">
                                        <div class=\"media\">
                                            <a class=\"pull-left\" href=\"#\">
                                                <img class=\"media-object\" src=\"";
        // line 506
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/images/works/p1.jpg")), "html", null, true);
        echo "\" width=\"70px\" height=\"70px\" alt=\"articl 1\">
                                            </a>
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">Responsive</h4>
                                            </div>
                                            <div class=\"za-post-date\"><span>Date: June 8, 2016</span></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"posts\">
                                        <div class=\"media\">
                                            <a class=\"pull-left\" href=\"#\">
                                                <img class=\"media-object\" src=\"";
        // line 519
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/images/works/p11.jpg")), "html", null, true);
        echo "\" width=\"70px\" height=\"70px\" alt=\"articl 1\">
                                            </a>
                                            <div class=\"media-body\">
                                                <h4 class=\"media-heading\">HTML5</h4>
                                            </div>
                                            <div class=\"za-post-date\"><span>Date: June 10, 2016</span></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6 col-xs-12\">
                        <h3 class=\"fav-heading-2\">Latest Tweets</h2>
                            <div class=\"tweets\">
                                <ul class=\"list-unstyled\">
                                    <li>
                                        <div class=\"latest-tweets\">
                                            <p>Programming Services</p>
                                            <a href=\"#\" target=\"_blank\">about 10 dayes agoo</a> 
                                        </div>
                                    </li>
                                    <li>
                                        <div class=\"latest-tweets\">
                                            <p>E-Commerce Features</p>
                                            <a href=\"#\" target=\"_blank\">one monthe ago</a> 
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
            <div class=\"copyright text-center\">
                All Rights Reserved Copyright &copy; 2016  <span> <a href =\"";
        // line 552
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_route')->getCallable(), array("site.english")), "html", null, true);
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
                <div class=\"modal-content modal-contentEn\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"gridSystemModalLabel\">Order Plan</h4>
                    </div>
                    <form action=\"";
        // line 593
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_action')->getCallable(), array("Site\\SiteController@order")), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                        <div class=\"modal-body\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"tap modal-body-header\">
                                        <ul class=\"nav nav-pills\" role=\"tablist\">
                                            <li role=\"presentation\" class=\"active\"><a href=\"#sectionBasicData\" aria-controls=\"sectionBasicData\" role=\"tab\" data-toggle=\"tab\"><span class=\"badge\">1</span> Basic Data</a>
                                            </li>
                                            <li role=\"presentation\"><a href=\"#sectionContacts\" aria-controls=\"sectionContacts\" role=\"tab\" data-toggle=\"tab\"><span class=\"badge\">2</span>Contacts</a></li>
                                            <li role=\"presentation\"><a href=\"#sectionOthers\" aria-controls=\"sectionOthers\" role=\"tab\" data-toggle=\"tab\"><span class=\"badge\">3</span> Others </a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class=\"tab-content\">
                                <section role=\"tabpanel\" class=\"basic-data tab-pane active\" id=\"sectionBasicData\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-sm-6\">
                                            <label>First Name</label>
                                            <input id=\"\" type=\"text\" value=\"";
        // line 614
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-firstname"), "method")) : (""));
        echo "\"name=\"order-firstname\" class=\"form-control\" placeholder=\"First Name\" required>
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            <label>Last Name</label>
                                            <input id=\"\" type=\"text\" value=\"";
        // line 618
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-lastname"), "method")) : (""));
        echo "\" name=\"order-lastname\" class=\"form-control\" placeholder=\"Last Name\" required>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-sm-6\">
                                            <label>Social Number</label>
                                            <input id=\"\" type=\"text\" value=\"";
        // line 624
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-social"), "method")) : (""));
        echo "\" name=\"order-social\" class=\"form-control\" placeholder=\"EX:255 080 116 21458\" required>
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            <label>Choose a Plan</label>
                                            <select id=\"\" name=\"order-plan\" class=\"form-control\" required>
                                                <option value=\"Basic Plan\">Basic Plan</option>
                                                <option value=\"Economic Plan\">Economic Plan</option>
                                                <option value=\"Pro Plan\">Pro Plan</option>
                                                <option value=\"Enterprise Plan\">Enterprise Plan</option>
                                            </select>
                                        </div>
                                    </div>
                                </section>
                                <section role=\"tabpanel\" class=\"contacts tab-pane\" id=\"sectionContacts\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-sm-6\">
                                            <label>Mobile</label>
                                            <input id=\"\" type=\"text\" value=\"";
        // line 641
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-mobile"), "method")) : (""));
        echo "\"name=\"order-mobile\" class=\"form-control\" placeholder=\"01023456789\" required>
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            <label>Telephone</label>
                                            <input id=\"\" type=\"text\" value=\"";
        // line 645
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-tel"), "method")) : (""));
        echo "\" name=\"order-tel\" class=\"form-control\" placeholder=\"0483611126\" >
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-sm-6\">
                                            <label>Address1</label>
                                            <input id=\"\" type=\"text\" value=\"";
        // line 651
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-address_1"), "method")) : (""));
        echo "\" name=\"order-address_1\" class=\"form-control\" placeholder=\"Egypt Alex, Stanly ST\" required>
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            <label>Address2</label>
                                            <input id=\"\" type=\"text\" value=\"";
        // line 655
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-address_2"), "method")) : (""));
        echo "\" name=\"order-address_2\" class=\"form-control\" placeholder=\"Second Address\">
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-sm-4\">
                                            <label>Choose a Country</label>
                                            <select class=\"crs-country form-control\" name=\"order-country\" data-region-id=\"one\" required></select>


                                        </div>
                                        <div class=\"form-group col-sm-4\">
                                            <label>State</label>
                                            <select id=\"one\" class=\"form-control\" name=\"order-state\" required></select>
                                        </div>
                                        <div class=\"form-group col-sm-4\">
                                            <label>city</label>
                                            <input id=\"\" type=\"text\" value=\"";
        // line 671
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-city"), "method")) : (""));
        echo "\" name=\"order-city\" class=\"form-control\" placeholder=\"Your city\" required>
                                        </div>
                                    </div>
                                    <div class=\"row\">    
                                        <div class=\"form-group col-sm-6\">
                                            <label>Email</label>
                                            <input id=\"\" type=\"email\" value=\"";
        // line 677
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-email"), "method")) : (""));
        echo "\" name=\"order-email\" class=\"form-control\" placeholder=\"Email\" required>
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            <label>Website</label>
                                            <input id=\"\" type=\"text\" value=\"";
        // line 681
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-site"), "method")) : (""));
        echo "\" name=\"order-site\" class=\"form-control\" placeholder=\"www.example.com\" >
                                        </div>
                                    </div>
                                </section>
                                <section role=\"tabpanel\" class=\"sectionOthers tab-pane\" id=\"sectionOthers\">
                                    <div class=\"row\">
                                        <div class=\"form-group col-sm-6\">
                                            <label>Project Name</label>
                                            <input id=\"\" type=\"text\" value=\"";
        // line 689
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-project"), "method")) : (""));
        echo "\" name=\"order-project\" class=\"form-control\" placeholder=\"Project Name\" >
                                        </div>
                                        <div class=\"form-group col-sm-6\">
                                            <label>Upload Attachment</label>
                                            <input id=\"\" type=\"file\"  title=\"choose archive file contains your samples or examples that help us for more explaination\" name=\"order-attachment\">
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"form-group col-sm-12\">
                                            <label>Description</label>
                                            <textarea id=\"\" maxlength=\"250\" name=\"order-description\" class=\"form-control col-sm-12\" placeholder=\"Details about your project here\">";
        // line 699
        echo (($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) ? ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "pullParam", array(0 => "order-description"), "method")) : (""));
        echo "</textarea>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"submit\" id=\"\" class=\"btn btn-main-color\">
                                <span class=\"fa fa-send-o\"> </span> &nbsp;Submit
                            </button>
                            <button type=\"button\" class=\"btn btn-defult\" data-dismiss=\"modal\">Close</button>
                        </div>
                        ";
        // line 711
        echo call_user_func_array($this->env->getFunction('token_input')->getCallable(), array());
        echo "
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        <script src=\"";
        // line 717
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/js/jquery-1.12.1.min.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 718
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 719
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/js/plugins.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 720
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/js/jquery.nicescroll.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 721
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/js/jquery.mixitup.js")), "html", null, true);
        echo "\"></script>
        <!--     <script src=\"https://code.jquery.com/jquery-1.11.3.js\"></script>-->
        <script src=\"";
        // line 723
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/js/jquery.crs.min.js")), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 724
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url_pub')->getCallable(), array("site/js/sweetalert.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
";
        // line 726
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "hasError", array(), "method")) {
            // line 727
            echo "swal({title: \"Error!\", text: '";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getErrors')->getCallable(), array()), "html", null, true);
            echo "', type: \"error\", confirmButtonText: \"close\"});
";
        }
        // line 729
        if (call_user_func_array($this->env->getFunction('session_has')->getCallable(), array("success"))) {
            // line 730
            echo "swal(\"Good job!\", \"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('session_pull')->getCallable(), array("success")), "html", null, true);
            echo "\", \"success\")
";
        }
        // line 732
        if (call_user_func_array($this->env->getFunction('session_has')->getCallable(), array("error"))) {
            // line 733
            echo "swal(\"Error!\", \"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('session_pull')->getCallable(), array("error")), "html", null, true);
            echo "\", \"error\")
";
        }
        // line 735
        if (call_user_func_array($this->env->getFunction('session_has')->getCallable(), array("warning"))) {
            // line 736
            echo "swal(\"Sorry!\", \"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('session_pull')->getCallable(), array("warning")), "html", null, true);
            echo "\", \"warning\")
";
        }
        // line 738
        echo "        </script>
    </body>
</html>


";
    }

    public function getTemplateName()
    {
        return "site/index-en.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  892 => 738,  886 => 736,  884 => 735,  878 => 733,  876 => 732,  870 => 730,  868 => 729,  862 => 727,  860 => 726,  855 => 724,  851 => 723,  846 => 721,  842 => 720,  838 => 719,  834 => 718,  830 => 717,  821 => 711,  806 => 699,  793 => 689,  782 => 681,  775 => 677,  766 => 671,  747 => 655,  740 => 651,  731 => 645,  724 => 641,  704 => 624,  695 => 618,  688 => 614,  664 => 593,  620 => 552,  584 => 519,  568 => 506,  485 => 426,  476 => 420,  468 => 415,  462 => 412,  456 => 409,  86 => 42,  77 => 36,  68 => 30,  48 => 13,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
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
/*         <link rel='stylesheet' href="{{ url_pub('site/css/style.css') }}"/>*/
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
/*                             <img class="navbar-brand img-circle" src="{{ url_pub('site/images/logo.png') }}" alt="logo"><a href="#"><h1>Zakaa</h1></a><span class="brand-span">.inc</span>*/
/*                         </div>*/
/* */
/*                         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                             <ul class="nav navbar-nav navbar-right">*/
/*                                 <li class="active"><a  href="{{ url_route('site.english') }}" data-value ="home">Home <span class="sr-only">(current)</span></a></li>*/
/*                                 <li><a  data-value ="ser" >Services</a></li>*/
/*                                 <li><a  data-value ="features">Features</a></li>*/
/*                                 <li><a  data-value ="offers">Offers</a></li>*/
/*                                 <li><a  data-value ="about">About</a></li>*/
/*                                 <li><a  data-value ="contact">Contact</a></li>*/
/*                                 <li><a href="{{ url_route('site.arabic') }}">عربي</a></li>*/
/*                             </ul>*/
/*                         </div><!-- /.navbar-collapse -->*/
/*                     </div><!-- /.container-fluid -->*/
/*                 </nav>*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-lg-12">*/
/*                             <div class="under-nav">*/
/*                                 <p class="bouncer">We Provide Highest Quality</p>*/
/*                                 <h1><span>PROGRAMING</span> SERVICES</h1>*/
/*                                 <P class="last " >By maintaining &amp; monitoring our professionalism work</P>*/
/*                                 <button class="btn btn-lg go-about">Read More</button>*/
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
/*                 <h2 class="fav-heading-2">Services We Provide</h2>*/
/*                 <div class="row">*/
/*                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">*/
/*                         <div class="serv">*/
/*                             <i class="fa fa-code fa-4x fa-fw"></i>*/
/*                             <div class="info">*/
/*                                 <h3>Web Application</h3>*/
/*                                 <p>Wep application system enables the Manager or project manager of various companies and pursue business that runs without moving them from any place and at any time through multiple systems chooses his client system that suits him.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">*/
/*                         <div class="serv">*/
/*                             <i class="fa fa-laptop fa-4x fa-fw"></i>*/
/*                             <div class="info">*/
/*                                 <h3>Desktop Application</h3>*/
/*                                 <p>Zakaa software company is engaged in the design of various computer programs such as accounting software and business management and development of all types of software to suit all businesses.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">*/
/*                         <div class="serv">*/
/*                             <i class="fa fa-lightbulb-o fa-4x fa-fw"></i>*/
/*                             <div class="info">*/
/*                                 <h3>Fresh&amp; Right Ideas</h3>*/
/*                                 <p>The company is developing various strategic plans for projects, companies and institutions and aimed at the overall development of the organization by making the most of their resources and save costs and increase their profits rely on modern technology.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">*/
/*                         <div class="serv">*/
/*                             <i class="fa fa-html5 fa-4x fa-fw"></i>*/
/*                             <div class="info">*/
/*                                 <h3>Web Sites</h3>*/
/*                                 <p>The company designs website for customer serving his field on demand taking into account different browsers and different devices and the company guaranteed quality product from the company</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">*/
/*                         <div class="serv">*/
/*                             <i class="fa fa-android fa-4x fa-fw"></i>*/
/*                             <div class="info">*/
/*                                 <h3>Mobile Apps &amp; Andriod</h3>*/
/*                                 <p>Zakaa software company offers you a service of design and programming applications for smart phones with all types and sizes, and are confident that has satisfaction through high quality and distinctive design that will have your app</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">*/
/*                         <div class="serv">*/
/*                             <i class="fa fa-shopping-cart fa-4x fa-fw"></i>*/
/*                             <div class="info">*/
/*                                 <h3>E-Comerce</h3>*/
/*                                 <p>Enriching the growing market of e-commerce, by integrating new technologies like mobile services and smart e-payment solutions.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         <!-- END Section Our Services-->*/
/* */
/*         <!-- Start Section Our Features-->*/
/*         <section class="features text-center" id="features">*/
/*             <div class="container">*/
/*                 <h2 class="fav-heading">Awesome & Great Features</h2>*/
/*                 <p class="p-about">Zakaa software company offers high quality service in all of their products with precision in results and ease of use.</p>*/
/*                 <div class="controle">*/
/*                     <i class="fa fa-chevron-left"></i>*/
/*                     <i class="fa fa-chevron-right"></i>*/
/*                 </div>*/
/*                 <div class="row">*/
/* */
/*                     <div class="boxes col-lg-3 col-md-6 col-sm-6 col-xs-12">*/
/*                         <div class="i-cont center-block">*/
/*                             <i class="fa fa-briefcase"></i>*/
/*                         </div>*/
/*                         <h3>Awesome Shortcodes</h3>*/
/*                         <p class="p-detail">We use global library fonts and shortcodes that provide an easy way to add custom content to your site Whether you want to add tabs to a post, shortcodes let you quickly insert elements you regularly use.</p>*/
/*                     </div>*/
/*                     <div class="boxes col-lg-3 col-md-6 col-sm-6 col-xs-12">*/
/*                         <div class="i-cont center-block">*/
/*                             <i class="fa fa-home"></i>*/
/*                         </div>*/
/*                         <h3>Creative Design</h3>*/
/*                         <p class="p-detail">Create great content on a regular basis. In other words, focus on creating content that would solve your target audience’s biggest pain points while maintaining a consistent posting schedule.</p>*/
/*                     </div>*/
/*                     <div class="boxes col-lg-3 col-md-6 col-sm-6 col-xs-12">*/
/*                         <div class="i-cont center-block">*/
/*                             <i class="fa fa-rocket"></i>*/
/*                         </div>*/
/*                         <h3>Easy To Customize</h3>*/
/*                         <p class="p-detail">Greater control over UX and increased revenue are both powerful motivators, but the biggest reason to consider joining the program is better with Instant Articles.</p>*/
/*                     </div>*/
/*                     <div class="boxes col-lg-3 col-md-6 col-sm-6 col-xs-12">*/
/*                         <div class="i-cont center-block">*/
/*                             <i class="fa fa-wrench"></i>*/
/*                         </div>*/
/*                         <h3>Quick Support</h3>*/
/*                         <p class="p-detail">A mobile content revolution is afoot. Content distribution giants like Facebook, Google, and Apple are delivering content to mobile users in new and innovative ways, leaving content publishers scrambling to keep up.</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/*         <section class="our-price " id="offers">*/
/*             <h2 class="fav-heading text-center">Our Ammazing Offers</h2>*/
/*             <p class="p-about text-center">Lets Talk About Work</p>*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">*/
/*                         <div class="price-table">*/
/*                             <div class="head">*/
/*                                 <h3 class="">Basic Plan</h3>*/
/*                                 <span>ideal for starter web</span>*/
/*                                 <p>1200 EG</p>*/
/*                             </div>*/
/*                             <div class="body">*/
/*                                 <ul class="list-unstyled">*/
/*                                     <li>Disk space <span>500 MB</span></li>*/
/*                                     <li>Band Width <span>Unlimited</span></li>*/
/*                                     <li>Pages<span>1</span></li>*/
/*                                     <li>Email Acounts <span>1</span></li>*/
/*                                     <li>Free Domains <span>1</span></li>*/
/*                                     <li>Support <span>24 Hours</span></li>*/
/*                                 </ul>*/
/*                                 <button type="button" class="btn btn-lg btn-ld-mor hvr-sweep-to-right center-block" data-toggle="modal" data-target="#orderModal">Order It Now</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">*/
/*                         <div class="price-table">*/
/*                             <div class="head">*/
/*                                 <h3 class="">Economic Plan</h3>*/
/*                                 <span>ideal for advanced web</span>*/
/*                                 <p>2200 EG </p>*/
/*                             </div>*/
/*                             <div class="body">*/
/*                                 <ul class="list-unstyled">*/
/*                                     <li>Disk space    <span>1 GB</span></li>*/
/*                                     <li>Band Width  <span>Unlimited</span></li>*/
/*                                     <li>Pages   <span>5</span></li>*/
/*                                     <li>Email Acounts   <span>5</span></li>*/
/*                                     <li>Free Domains  <span>1</span></li>*/
/*                                     <li>Support       <span>24 Hours</span></li>*/
/*                                 </ul>*/
/*                                 <button type="button" class="btn btn-lg btn-ld-mor hvr-sweep-to-right center-block" data-toggle="modal" data-target="#orderModal">Order It Now</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">*/
/*                         <div class="price-table">*/
/*                             <div class="head">*/
/*                                 <h3 class="">Pro Plan</h3>*/
/*                                 <span>ideal for pro websites</span>*/
/*                                 <p>3500 EG</p>*/
/*                             </div>*/
/*                             <div class="body">*/
/*                                 <ul class="list-unstyled">*/
/*                                     <li>Disk space <span>3 GB</span></li>*/
/*                                     <li>Band Width <span>Unlimited</span></li>*/
/*                                     <li>Pages <span>5 to 20</span></li>*/
/*                                     <li>Email Acounts <span>5</span></li>*/
/*                                     <li>Free Domains <span>1</span></li>*/
/*                                     <li>Support <span>24 Hours</span></li>*/
/*                                 </ul>*/
/*                                 <button type="button" class="btn btn-lg btn-ld-mor hvr-sweep-to-right center-block" data-toggle="modal" data-target="#orderModal">Order It Now</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">*/
/*                         <div class="price-table">*/
/*                             <div class="head">*/
/*                                 <h3 class="">Enterprise Plan</h3>*/
/*                                 <span>ideal for business websites</span>*/
/*                                 <p>Custom</p>*/
/*                             </div>*/
/*                             <div class="body">*/
/*                                 <ul class="list-unstyled">*/
/*                                     <li>Disk space <span>as oredred</span></li>*/
/*                                     <li>Band Width <span>Unlimited</span></li>*/
/*                                     <li>Pages <span>as ordered</span></li>*/
/*                                     <li>Email Acounts <span>as oredred</span></li>*/
/*                                     <li>Free Domains <span>1</span></li>*/
/*                                     <li>Support <span>24 Hours</span></li>*/
/*                                 </ul>*/
/*                                 <button type="button" class="btn btn-lg btn-ld-mor hvr-sweep-to-right center-block" data-toggle="modal" data-target="#orderModal">Order It Now</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/* */
/*         <section class="about" id="about">*/
/*             <div class="container">*/
/*                 <h2 class="fav-heading text-center">All What You Need To Know About Us</h2>*/
/*                 <p class="p-about text-center">We are a software company with <b>creative ideas</b> with <b>extra ordinary</b> skills</p>*/
/*                 <div class="row">*/
/*                     <div class="col-lg-6 col-md-6">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title">What is Zakaa ? <span><i class="fa fa-edit"></i></span></h3>*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/*                                 Zakaa company is a company with a large Egyptian consistent best expertise in particular areas in designing and programming websites, mobile applications programming, electronic systems, electronic management, strategic planning, smart phone applications and creates a software a professional development team that design software for various companies and organizations by brain programming languages</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 <h3 class="panel-title">Why Should I schoose Zakaa? <span><i class="fa fa-heart-o"></i></span></h3>*/
/*                             </div>*/
/*                             <div class="panel-body">*/
/*                                 The company is characterized by its insistence on universal access for each client company directly and clients Zakaa agent company indirectly also facilitate your purchase to the consumer of what he finds clear regulation for managing work resulting from software quality designed by company we believe that our client when he sees the result used to program software Zakaa company and the impact on clients and how they benefit</p>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                     <div class="col-lg-6 col-md-6">*/
/*                         <h3 class="skills-progress-heading">Our Team Skills</h3>*/
/*                         <div class="skills-progress">*/
/*                             <div class="za-progress-item-wrap">*/
/*                                 <div class="za-progress-main">*/
/*                                     <div class="za-progress-title">*/
/*                                         Design </div>*/
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
/*                                         Branding </div>*/
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
/*                                         Development </div>*/
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
/*                                         Marketing </div>*/
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
/*                                         Mobile App </div>*/
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
/*                                         Web Applications </div>*/
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
/*                 <h2 class="fav-heading text-center">CONTACT US</h2>*/
/*                 <p class="p-about text-center">We Wanna Hear From You</p>*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-lg-8 col-md-7 col-xs-12">*/
/*                             <form role="form" action="{{ url_route('contact') }}" method="post" >*/
/*                                 <div class="col-md-12">*/
/*                                     <div class="form-group col-md-6 col-xs-6 reset-col">*/
/*                                         <input type="text" value="{{ (errors.hasError() ? errors.pullParam('contact-name') : '') |raw }}" name="contact-name" class="form-control input-lg" placeholder="User Name">*/
/*                                     </div>*/
/*                                     <div class="form-group col-md-6 col-xs-6 ">*/
/*                                         <input type="email" value="{{ (errors.hasError() ? errors.pullParam('contact-email') : '') |raw }}"name="contact-email" class="form-control input-lg" required placeholder="Email" style="margin-left: 15px">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-md-12">*/
/*                                     <div class="form-group">*/
/*                                         <textarea type="text" name="contact-msg" class="form-control input-lg" required placeholder="Your Message Here.">{{ (errors.hasError() ? errors.pullParam('contact-msg') : '') |raw }}</textarea>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-lg-12">*/
/*                                     <button type="submit" class="btn btn-lg btn-block btn-contact">Send Your Message </button>*/
/*                                 </div>*/
/*                                 {{ token_input()|raw }}*/
/*                             </form>*/
/*                         </div>*/
/*                         <div class="col-lg-4 col-md-5 col-xs-12 info">*/
/*                             <div class="col-lg-12">*/
/*                                 <h4>Contact Information</h3>*/
/*                                     <div class="">*/
/*                                         <span><i class="fa fa-envelope-o"></i></span>*/
/*                                         <p class="p-info">20 Al moatasem St,  Tanta , AlGharbia, Egypt. Contact the company numbers </p>*/
/*                                     </div>*/
/*                                     <div class="colored">*/
/*                                         <p class=" ">-Zakaa@Zakaa.com</p>*/
/*                                         <p class=" ">-002 01158222100 <br> -002 01064328899</p>*/
/*                                     </div>*/
/*                             </div>*/
/*                             <div class="col-lg-12">*/
/*                                 <h4 class="">Business Hours</h3>*/
/*                                     <div class="col-lg-12 reset-col">*/
/*                                         <span><i class="fa fa-clock-o"></i></span>*/
/*                                         <p>sunday – thursday : 9am to 17 pm<br>*/
/*                                             friday , satarday : 2days off</p>*/
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
/*                 <h2>Keep In Touch </h2>*/
/*                 <p class="lead">Sign Up For Newsletter, new WowTemplates content, updates, surveys &amp; offers.</p>*/
/*                 <form class="form-inline ">*/
/*                     <input class="form-control input-lg" type="email" placeholder="Write Your Email">*/
/*                     <button class="btn btn-lg but-color"><i class="fa fa-edit fa-lg"></i>Subscribe</button>*/
/*                 </form>             */
/*             </div>*/
/*         </section>*/
/*         <!--End section subscribe-->*/
/*         <section class="footer">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">*/
/*                         <h3 class="fav-heading-2">About Zakaa</h2>*/
/*                             <p>Zakaa company is a company with a large Egyptian consistent best expertise in particular areas in designing and programming websites, mobile applications programming.</p>*/
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
/*                         <h3 class="fav-heading-2">Get In Touch</h2>*/
/*                             <div class="get-in-touch">*/
/*                                 <ul class="list-unstyled">*/
/*                                     <li><i class="fa fa-map-marker"></i>*/
/*                                         <div class="">*/
/*                                             <a href="#" target="_blank">www.zakaa.com</a> 20 Almo3tasem st Tanta , AlGharbia, Egypt.*/
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li><i class="fa fa-phone"></i><div>Zakaa Sales Telephone No : 002 01158222100-- 01064328899</div></li>*/
/*                                     <li><i class="fa fa-envelope"></i><div>Zakaa Sales Email Account : */
/*                                             <a href="#">support.Zakaa.com</a></div></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                     </div>*/
/*                     <div class="clearfix hidden-lg"></div>*/
/*                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">*/
/*                         <h3 class="fav-heading-2">Latest Posts</h2>*/
/*                             <ul class="list-unstyled">*/
/*                                 <li>*/
/*                                     <div class="posts">*/
/*                                         <div class="media">*/
/*                                             <a class="pull-left" href="#">*/
/*                                                 <img class="media-object" src="{{ url_pub('site/images/works/p1.jpg') }}" width="70px" height="70px" alt="articl 1">*/
/*                                             </a>*/
/*                                             <div class="media-body">*/
/*                                                 <h4 class="media-heading">Responsive</h4>*/
/*                                             </div>*/
/*                                             <div class="za-post-date"><span>Date: June 8, 2016</span></div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <div class="posts">*/
/*                                         <div class="media">*/
/*                                             <a class="pull-left" href="#">*/
/*                                                 <img class="media-object" src="{{ url_pub('site/images/works/p11.jpg') }}" width="70px" height="70px" alt="articl 1">*/
/*                                             </a>*/
/*                                             <div class="media-body">*/
/*                                                 <h4 class="media-heading">HTML5</h4>*/
/*                                             </div>*/
/*                                             <div class="za-post-date"><span>Date: June 10, 2016</span></div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             </ul>*/
/*                     </div>*/
/*                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">*/
/*                         <h3 class="fav-heading-2">Latest Tweets</h2>*/
/*                             <div class="tweets">*/
/*                                 <ul class="list-unstyled">*/
/*                                     <li>*/
/*                                         <div class="latest-tweets">*/
/*                                             <p>Programming Services</p>*/
/*                                             <a href="#" target="_blank">about 10 dayes agoo</a> */
/*                                         </div>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <div class="latest-tweets">*/
/*                                             <p>E-Commerce Features</p>*/
/*                                             <a href="#" target="_blank">one monthe ago</a> */
/*                                         </div>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="copyright text-center">*/
/*                 All Rights Reserved Copyright &copy; 2016  <span> <a href ="{{ url_route('site.english') }}" target="_blank"> Zakaa<span>.inc</span></a></span>*/
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
/* */
/*         <!--EDIT Order  Modal -->*/
/*         <div class="modal fade " id="orderModal" tabindex="-1" role="dialog" aria-labelledby="mm">*/
/*             <div class="modal-dialog modal-lg" role="document">*/
/*                 <div class="modal-content modal-contentEn">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                         <h4 class="modal-title" id="gridSystemModalLabel">Order Plan</h4>*/
/*                     </div>*/
/*                     <form action="{{ url_action('Site\\SiteController@order') }}" method="post" enctype="multipart/form-data">*/
/*                         <div class="modal-body">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-12">*/
/*                                     <div class="tap modal-body-header">*/
/*                                         <ul class="nav nav-pills" role="tablist">*/
/*                                             <li role="presentation" class="active"><a href="#sectionBasicData" aria-controls="sectionBasicData" role="tab" data-toggle="tab"><span class="badge">1</span> Basic Data</a>*/
/*                                             </li>*/
/*                                             <li role="presentation"><a href="#sectionContacts" aria-controls="sectionContacts" role="tab" data-toggle="tab"><span class="badge">2</span>Contacts</a></li>*/
/*                                             <li role="presentation"><a href="#sectionOthers" aria-controls="sectionOthers" role="tab" data-toggle="tab"><span class="badge">3</span> Others </a></li>*/
/* */
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/* */
/*                             <div class="tab-content">*/
/*                                 <section role="tabpanel" class="basic-data tab-pane active" id="sectionBasicData">*/
/*                                     <div class="row">*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>First Name</label>*/
/*                                             <input id="" type="text" value="{{ (errors.hasError()? errors.pullParam('order-firstname') : '') |raw }}"name="order-firstname" class="form-control" placeholder="First Name" required>*/
/*                                         </div>*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>Last Name</label>*/
/*                                             <input id="" type="text" value="{{ (errors.hasError()? errors.pullParam('order-lastname') : '') |raw }}" name="order-lastname" class="form-control" placeholder="Last Name" required>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="row">*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>Social Number</label>*/
/*                                             <input id="" type="text" value="{{ (errors.hasError()? errors.pullParam('order-social') : '') |raw }}" name="order-social" class="form-control" placeholder="EX:255 080 116 21458" required>*/
/*                                         </div>*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>Choose a Plan</label>*/
/*                                             <select id="" name="order-plan" class="form-control" required>*/
/*                                                 <option value="Basic Plan">Basic Plan</option>*/
/*                                                 <option value="Economic Plan">Economic Plan</option>*/
/*                                                 <option value="Pro Plan">Pro Plan</option>*/
/*                                                 <option value="Enterprise Plan">Enterprise Plan</option>*/
/*                                             </select>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </section>*/
/*                                 <section role="tabpanel" class="contacts tab-pane" id="sectionContacts">*/
/*                                     <div class="row">*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>Mobile</label>*/
/*                                             <input id="" type="text" value="{{ (errors.hasError()? errors.pullParam('order-mobile') : '') |raw }}"name="order-mobile" class="form-control" placeholder="01023456789" required>*/
/*                                         </div>*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>Telephone</label>*/
/*                                             <input id="" type="text" value="{{ (errors.hasError()? errors.pullParam('order-tel') : '') |raw }}" name="order-tel" class="form-control" placeholder="0483611126" >*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="row">*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>Address1</label>*/
/*                                             <input id="" type="text" value="{{ (errors.hasError()? errors.pullParam('order-address_1') : '') |raw }}" name="order-address_1" class="form-control" placeholder="Egypt Alex, Stanly ST" required>*/
/*                                         </div>*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>Address2</label>*/
/*                                             <input id="" type="text" value="{{ (errors.hasError()? errors.pullParam('order-address_2') : '') |raw }}" name="order-address_2" class="form-control" placeholder="Second Address">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="row">*/
/*                                         <div class="form-group col-sm-4">*/
/*                                             <label>Choose a Country</label>*/
/*                                             <select class="crs-country form-control" name="order-country" data-region-id="one" required></select>*/
/* */
/* */
/*                                         </div>*/
/*                                         <div class="form-group col-sm-4">*/
/*                                             <label>State</label>*/
/*                                             <select id="one" class="form-control" name="order-state" required></select>*/
/*                                         </div>*/
/*                                         <div class="form-group col-sm-4">*/
/*                                             <label>city</label>*/
/*                                             <input id="" type="text" value="{{ (errors.hasError()? errors.pullParam('order-city') : '') |raw }}" name="order-city" class="form-control" placeholder="Your city" required>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="row">    */
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>Email</label>*/
/*                                             <input id="" type="email" value="{{ (errors.hasError()? errors.pullParam('order-email') : '') |raw }}" name="order-email" class="form-control" placeholder="Email" required>*/
/*                                         </div>*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>Website</label>*/
/*                                             <input id="" type="text" value="{{ (errors.hasError()? errors.pullParam('order-site') : '') |raw }}" name="order-site" class="form-control" placeholder="www.example.com" >*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </section>*/
/*                                 <section role="tabpanel" class="sectionOthers tab-pane" id="sectionOthers">*/
/*                                     <div class="row">*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>Project Name</label>*/
/*                                             <input id="" type="text" value="{{ (errors.hasError()? errors.pullParam('order-project') : '') |raw }}" name="order-project" class="form-control" placeholder="Project Name" >*/
/*                                         </div>*/
/*                                         <div class="form-group col-sm-6">*/
/*                                             <label>Upload Attachment</label>*/
/*                                             <input id="" type="file"  title="choose archive file contains your samples or examples that help us for more explaination" name="order-attachment">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="row">*/
/*                                         <div class="form-group col-sm-12">*/
/*                                             <label>Description</label>*/
/*                                             <textarea id="" maxlength="250" name="order-description" class="form-control col-sm-12" placeholder="Details about your project here">{{ (errors.hasError()? errors.pullParam('order-description') : '') |raw }}</textarea>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </section>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="modal-footer">*/
/*                             <button type="submit" id="" class="btn btn-main-color">*/
/*                                 <span class="fa fa-send-o"> </span> &nbsp;Submit*/
/*                             </button>*/
/*                             <button type="button" class="btn btn-defult" data-dismiss="modal">Close</button>*/
/*                         </div>*/
/*                         {{ token_input()|raw }}*/
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
/*         <!--     <script src="https://code.jquery.com/jquery-1.11.3.js"></script>-->*/
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
/*     </body>*/
/* </html>*/
/* */
/* */
/* */

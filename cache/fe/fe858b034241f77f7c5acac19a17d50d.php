<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* test.twig */
class __TwigTemplate_66b6d87c4e0384b6da75153d3b7e0d5d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Medicio landing page template for Health niche</title>
\t
    <!-- css -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/cubeportfolio/css/cubeportfolio.min.css\">
\t<link href=\"css/nivo-lightbox.css\" rel=\"stylesheet\" />
\t<link href=\"css/nivo-lightbox-theme/default/default.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"css/owl.carousel.css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"css/owl.theme.css\" rel=\"stylesheet\" media=\"screen\" />
\t<link href=\"css/animate.css\" rel=\"stylesheet\" />
    <link href=\"css/style.css\" rel=\"stylesheet\">

\t<!-- boxed bg -->
\t<link id=\"bodybg\" href=\"bodybg/bg1.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<!-- template skin -->
\t<link id=\"t-colors\" href=\"color/default.css\" rel=\"stylesheet\">


</head>

<body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-custom\">

<div id=\"wrapper\">
\t
    <nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
\t\t<div class=\"top-area\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t\t<p class=\"bold text-left\">Monday - Saturday, 8am to 10pm </p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t\t<p class=\"bold text-right\">Call us now +62 008 65 001</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        <div class=\"container navigation\">
\t\t
            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">
                    <img src=\"img/logo.png\" alt=\"\" width=\"150\" height=\"40\" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse navbar-right navbar-main-collapse\">
\t\t\t  <ul class=\"nav navbar-nav\">
\t\t\t\t<li class=\"active\"><a href=\"#intro\">Home</a></li>
\t\t\t\t<li><a href=\"#service\">Service</a></li>
\t\t\t\t<li><a href=\"#doctor\">Doctors</a></li>
\t\t\t\t<li><a href=\"#facilities\">Facilities</a></li>
\t\t\t\t<li><a href=\"#pricing\">Pricing</a></li>
\t\t\t\t<li class=\"dropdown\">
\t\t\t\t  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"badge custom-badge red pull-right\">Extra</span>More <b class=\"caret\"></b></a>
\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t<li><a href=\"index.html\">Home form</a></li>
\t\t\t\t\t<li><a href=\"index-video.html\">Home video</a></li>
\t\t\t\t\t<li><a href=\"index-cta.html\">Home CTA</a></li>
\t\t\t\t\t<li><a href=\"https://bootstrapmade.com\">Download</a></li>
\t\t\t\t  </ul>
\t\t\t\t</li>
\t\t\t  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
\t

\t<!-- Section: intro -->
    <section id=\"intro\" class=\"intro\">
\t\t<div class=\"intro-content\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-offset=\"0\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<h2 class=\"h-ultra\">Medicio medical group</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-offset=\"0\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<h4 class=\"h-light\">Provide <span class=\"color\">best quality healthcare</span> for you</h4>
\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"well well-trans\">
\t\t\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.1s\">

\t\t\t\t\t\t<ul class=\"lead-list\">
\t\t\t\t\t\t\t<li><span class=\"fa fa-check fa-2x icon-success\"></span> <span class=\"list\"><strong>Affordable monthly premium packages</strong><br />Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
\t\t\t\t\t\t\t<li><span class=\"fa fa-check fa-2x icon-success\"></span> <span class=\"list\"><strong>Choose your favourite doctor</strong><br />Sit zril sanctus scaevola ei, ea usu movet graeco</span></li>
\t\t\t\t\t\t\t<li><span class=\"fa fa-check fa-2x icon-success\"></span> <span class=\"list\"><strong>Only use friendly environment</strong><br />Wisi lobortis eos ex, per at movet delectus, qui no vocent deleniti</span></li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t<div class=\"wow fadeInRight\" data-wow-duration=\"2s\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"panel panel-skin\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\"><span class=\"fa fa-pencil-square-o\"></span> Make an appoinment <small>(It's free!)</small></h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<form role=\"form\" class=\"lead\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>First Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"first_name\" id=\"first_name\" class=\"form-control input-md\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Last Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"last_name\" id=\"last_name\" class=\"form-control input-md\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"email\" class=\"form-control input-md\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Phone number</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"phone\" id=\"phone\" class=\"form-control input-md\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Submit\" class=\"btn btn-skin btn-block btn-lg\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<p class=\"lead-footer\">* We'll contact you by phone & email later</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t</div>\t\t
    </section>
\t
\t<!-- /Section: intro -->

\t<!-- Section: boxes -->
    <section id=\"boxes\" class=\"home-section paddingtop-80\">
\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t<div class=\"box text-center\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<i class=\"fa fa-check fa-3x circled bg-skin\"></i>
\t\t\t\t\t\t\t<h4 class=\"h-bold\">Make an appoinment</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t<div class=\"box text-center\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<i class=\"fa fa-list-alt fa-3x circled bg-skin\"></i>
\t\t\t\t\t\t\t<h4 class=\"h-bold\">Choose your package</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t<div class=\"box text-center\">
\t\t\t\t\t\t\t<i class=\"fa fa-user-md fa-3x circled bg-skin\"></i>
\t\t\t\t\t\t\t<h4 class=\"h-bold\">Help by specialist</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t<div class=\"box text-center\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<i class=\"fa fa-hospital-o fa-3x circled bg-skin\"></i>
\t\t\t\t\t\t\t<h4 class=\"h-bold\">Get diagnostic report</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</section>
\t<!-- /Section: boxes -->
\t
\t
\t<section id=\"callaction\" class=\"home-section paddingtop-40\">\t
           <div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"callaction bg-gray\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t\t\t\t<div class=\"cta-text\">
\t\t\t\t\t\t\t\t\t<h3>In an emergency? Need help now?</h3>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipiscing elit uisque interdum ante eget faucibus. </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"wow lightSpeedIn\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cta-btn\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-skin btn-lg\">Book an appoinment</a>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
\t</section>\t
\t

\t<!-- Section: services -->
    <section id=\"service\" class=\"home-section nopadding paddingtop-60\">

\t\t<div class=\"container\">

        <div class=\"row\">
\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t<img src=\"img/dummy/img-1.jpg\" class=\"img-responsive\" alt=\"\" />
\t\t\t\t</div>
            </div>
\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.1s\">
                <div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-stethoscope fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Medical checkup</h5>
\t\t\t\t\t\t<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.2s\">
\t\t\t\t<div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-wheelchair fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Nursing Services</h5>
\t\t\t\t\t\t<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.3s\">
\t\t\t\t<div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-plus-square fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Pharmacy</h5>
\t\t\t\t\t\t<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>


            </div>
\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.1s\">
                <div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-h-square fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Gyn Care</h5>
\t\t\t\t\t\t<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.2s\">
\t\t\t\t<div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-filter fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Neurology</h5>
\t\t\t\t\t\t<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.3s\">
\t\t\t\t<div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-user-md fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Sleep Center</h5>
\t\t\t\t\t\t<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>

            </div>
\t\t\t
        </div>\t\t
\t\t</div>
\t</section>
\t<!-- /Section: services -->
\t

\t<!-- Section: team -->
    <section id=\"doctor\" class=\"home-section bg-gray paddingbot-60\">
\t\t<div class=\"container marginbot-50\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 col-lg-offset-2\">
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"section-heading text-center\">
\t\t\t\t\t<h2 class=\"h-bold\">Doctors</h2>
\t\t\t\t\t<p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"divider-short\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t
            <div id=\"filters-container\" class=\"cbp-l-filters-alignLeft\">
                <div data-filter=\"*\" class=\"cbp-filter-item-active cbp-filter-item\">All (<div class=\"cbp-filter-counter\"></div>)</div>
                <div data-filter=\".cardiologist\" class=\"cbp-filter-item\">Cardiologist (<div class=\"cbp-filter-counter\"></div>)</div>
                <div data-filter=\".psychiatrist\" class=\"cbp-filter-item\">Psychiatrist (<div class=\"cbp-filter-counter\"></div>)</div>
                <div data-filter=\".neurologist\" class=\"cbp-filter-item\">Neurologist (<div class=\"cbp-filter-counter\"></div>)</div>
            </div>
\t\t
            <div id=\"grid-container\" class=\"cbp-l-grid-team\">
                <ul>
                    <li class=\"cbp-item psychiatrist\">
                        <a href=\"doctors/member1.html\" class=\"cbp-caption cbp-singlePage\">
                            <div class=\"cbp-caption-defaultWrap\">
                                <img src=\"img/team/1.jpg\" alt=\"\" width=\"100%\">
                            </div>
                            <div class=\"cbp-caption-activeWrap\">
                                <div class=\"cbp-l-caption-alignCenter\">
                                    <div class=\"cbp-l-caption-body\">
                                        <div class=\"cbp-l-caption-text\">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href=\"doctors/member1.html\" class=\"cbp-singlePage cbp-l-grid-team-name\">Alice Grue</a>
                        <div class=\"cbp-l-grid-team-position\">Psychiatrist</div>
                    </li>
                    <li class=\"cbp-item cardiologist\">
                        <a href=\"doctors/member2.html\" class=\"cbp-caption cbp-singlePage\">
                            <div class=\"cbp-caption-defaultWrap\">
                                <img src=\"img/team/2.jpg\" alt=\"\" width=\"100%\">
                            </div>
                            <div class=\"cbp-caption-activeWrap\">
                                <div class=\"cbp-l-caption-alignCenter\">
                                    <div class=\"cbp-l-caption-body\">
                                        <div class=\"cbp-l-caption-text\">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href=\"doctors/member2.html\" class=\"cbp-singlePage cbp-l-grid-team-name\">Joseph Murphy</a>
                        <div class=\"cbp-l-grid-team-position\">Cardiologist</div>
                    </li>
                    <li class=\"cbp-item cardiologist\">
                        <a href=\"doctors/member3.html\" class=\"cbp-caption cbp-singlePage\">
                            <div class=\"cbp-caption-defaultWrap\">
                                <img src=\"img/team/3.jpg\" alt=\"\" width=\"100%\">
                            </div>
                            <div class=\"cbp-caption-activeWrap\">
                                <div class=\"cbp-l-caption-alignCenter\">
                                    <div class=\"cbp-l-caption-body\">
                                        <div class=\"cbp-l-caption-text\">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href=\"doctors/member3.html\" class=\"cbp-singlePage cbp-l-grid-team-name\">Alison Davis</a>
                        <div class=\"cbp-l-grid-team-position\">Cardiologist</div>
                    </li>
                    <li class=\"cbp-item neurologist\">
                        <a href=\"doctors/member4.html\" class=\"cbp-caption cbp-singlePage\">
                            <div class=\"cbp-caption-defaultWrap\">
                                <img src=\"img/team/4.jpg\" alt=\"\" width=\"100%\">
                            </div>
                            <div class=\"cbp-caption-activeWrap\">
                                <div class=\"cbp-l-caption-alignCenter\">
                                    <div class=\"cbp-l-caption-body\">
                                        <div class=\"cbp-l-caption-text\">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href=\"doctors/member4.html\" class=\"cbp-singlePage cbp-l-grid-team-name\">Adam Taylor</a>
                        <div class=\"cbp-l-grid-team-position\">Neurologist</div>
                    </li>

                </ul>
            </div>
\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</section>
\t<!-- /Section: team -->

\t
\t\t
\t<!-- Section: works -->
    <section id=\"facilities\" class=\"home-section paddingbot-60\">
\t\t<div class=\"container marginbot-50\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 col-lg-offset-2\">
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"section-heading text-center\">
\t\t\t\t\t<h2 class=\"h-bold\">Our facilities</h2>
\t\t\t\t\t<p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"divider-short\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

<div class=\"container\">
\t\t\t<div class=\"row\">
                <div class=\"col-sm-12 col-md-12 col-lg-12\" >
\t\t\t\t\t<div class=\"wow bounceInUp\" data-wow-delay=\"0.2s\">
                    <div id=\"owl-works\" class=\"owl-carousel\">
                        <div class=\"item\"><a href=\"img/photo/1.jpg\" title=\"This is an image title\" data-lightbox-gallery=\"gallery1\" data-lightbox-hidpi=\"img/works/1@2x.jpg\"><img src=\"img/photo/1.jpg\" class=\"img-responsive\" alt=\"img\"></a></div>
                        <div class=\"item\"><a href=\"img/photo/2.jpg\" title=\"This is an image title\" data-lightbox-gallery=\"gallery1\" data-lightbox-hidpi=\"img/works/2@2x.jpg\"><img src=\"img/photo/2.jpg\" class=\"img-responsive \" alt=\"img\"></a></div>
                        <div class=\"item\"><a href=\"img/photo/3.jpg\" title=\"This is an image title\" data-lightbox-gallery=\"gallery1\" data-lightbox-hidpi=\"img/works/3@2x.jpg\"><img src=\"img/photo/3.jpg\" class=\"img-responsive \" alt=\"img\"></a></div>
                        <div class=\"item\"><a href=\"img/photo/4.jpg\" title=\"This is an image title\" data-lightbox-gallery=\"gallery1\" data-lightbox-hidpi=\"img/works/4@2x.jpg\"><img src=\"img/photo/4.jpg\" class=\"img-responsive \" alt=\"img\"></a></div>
                        <div class=\"item\"><a href=\"img/photo/5.jpg\" title=\"This is an image title\" data-lightbox-gallery=\"gallery1\" data-lightbox-hidpi=\"img/works/5@2x.jpg\"><img src=\"img/photo/5.jpg\" class=\"img-responsive \" alt=\"img\"></a></div>
                        <div class=\"item\"><a href=\"img/photo/6.jpg\" title=\"This is an image title\" data-lightbox-gallery=\"gallery1\" data-lightbox-hidpi=\"img/works/6@2x.jpg\"><img src=\"img/photo/6.jpg\" class=\"img-responsive \" alt=\"img\"></a></div>
                    </div>
\t\t\t\t\t</div>
                </div>
            </div>
\t\t</div>
\t</section>
\t<!-- /Section: works -->
\t
\t
\t<!-- Section: testimonial -->
    <section id=\"testimonial\" class=\"home-section paddingbot-60 parallax\" data-stellar-background-ratio=\"0.5\">

<div class=\"carousel-reviews broun-block\">
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"carousel-reviews\" class=\"carousel slide\" data-ride=\"carousel\">
            
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                \t    <div class=\"col-md-4 col-sm-6\">
        \t\t\t\t    <div class=\"block-text rel zmin\">
\t\t\t\t\t\t        <a title=\"\" href=\"#\">Emergency Contraception</a>
\t\t\t\t\t\t\t    <div class=\"mark\">My rating: <span class=\"rating-input\"><span data-value=\"0\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"1\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"2\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"3\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"4\" class=\"glyphicon glyphicon-star-empty\"></span><span data-value=\"5\" class=\"glyphicon glyphicon-star-empty\"></span>  </span></div>
\t\t\t\t\t\t        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
\t\t\t\t\t\t\t    <ins class=\"ab zmin sprite sprite-i-triangle block\"></ins>
\t\t\t\t\t        </div>
\t\t\t\t\t\t\t<div class=\"person-text rel text-light\">\t\t\t\t\t
\t\t\t\t\t\t\t\t<img src=\"img/testimonials/1.jpg\" alt=\"\" class=\"person img-circle\" />
\t\t\t\t\t\t\t\t<a title=\"\" href=\"#\">Anna</a>
\t\t\t\t\t\t\t\t<span>Chicago, Illinois</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
            \t\t\t<div class=\"col-md-4 col-sm-6 hidden-xs\">
\t\t\t\t\t\t    <div class=\"block-text rel zmin\">
\t\t\t\t\t\t        <a title=\"\" href=\"#\">Orthopedic Surgery</a>
\t\t\t\t\t\t\t    <div class=\"mark\">My rating: <span class=\"rating-input\"><span data-value=\"0\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"1\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"2\" class=\"glyphicon glyphicon-star-empty\"></span><span data-value=\"3\" class=\"glyphicon glyphicon-star-empty\"></span><span data-value=\"4\" class=\"glyphicon glyphicon-star-empty\"></span><span data-value=\"5\" class=\"glyphicon glyphicon-star-empty\"></span>  </span></div>
\t\t\t\t\t\t        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
\t\t\t\t\t\t\t    <ins class=\"ab zmin sprite sprite-i-triangle block\"></ins>
\t\t\t\t            </div>
\t\t\t\t\t\t\t<div class=\"person-text rel text-light\">
\t\t\t\t                <img src=\"img/testimonials/2.jpg\" alt=\"\" class=\"person img-circle\" />
\t\t\t\t\t\t\t\t<a title=\"\" href=\"#\">Matthew G</a>
\t\t\t\t\t\t\t\t<span>San Antonio, Texas</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6 hidden-sm hidden-xs\">
\t\t\t\t\t\t\t<div class=\"block-text rel zmin\">
\t\t\t\t\t\t\t\t<a title=\"\" href=\"#\">Medical consultation</a>
\t\t\t\t\t\t\t\t<div class=\"mark\">My rating: <span class=\"rating-input\"><span data-value=\"0\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"1\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"2\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"3\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"4\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"5\" class=\"glyphicon glyphicon-star\"></span>  </span></div>
\t\t\t\t\t\t        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
\t\t\t\t\t\t\t    <ins class=\"ab zmin sprite sprite-i-triangle block\"></ins>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"person-text rel text-light\">
\t\t\t\t\t\t\t\t<img src=\"img/testimonials/3.jpg\" alt=\"\" class=\"person img-circle\" />
\t\t\t\t\t\t\t\t<a title=\"\" href=\"#\">Scarlet Smith</a>
\t\t\t\t\t\t\t\t<span>Dallas, Texas</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                    </div>
                    <div class=\"item\">
                        <div class=\"col-md-4 col-sm-6\">
        \t\t\t\t    <div class=\"block-text rel zmin\">
\t\t\t\t\t\t        <a title=\"\" href=\"#\">Birth control pills</a>
\t\t\t\t\t\t\t    <div class=\"mark\">My rating: <span class=\"rating-input\"><span data-value=\"0\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"1\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"2\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"3\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"4\" class=\"glyphicon glyphicon-star-empty\"></span><span data-value=\"5\" class=\"glyphicon glyphicon-star-empty\"></span>  </span></div>
\t\t\t\t\t\t        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
\t\t\t\t\t\t\t    <ins class=\"ab zmin sprite sprite-i-triangle block\"></ins>
\t\t\t\t\t        </div>
\t\t\t\t\t\t\t<div class=\"person-text rel text-light\">
\t\t\t\t\t\t\t\t<img src=\"img/testimonials/4.jpg\" alt=\"\" class=\"person img-circle\" />
\t\t\t\t\t\t\t\t<a title=\"\" href=\"#\">Lucas Thompson</a>
\t\t\t\t\t\t\t\t<span>Austin, Texas</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
            \t\t\t<div class=\"col-md-4 col-sm-6 hidden-xs\">
\t\t\t\t\t\t    <div class=\"block-text rel zmin\">
\t\t\t\t\t\t        <a title=\"\" href=\"#\">Radiology</a>
\t\t\t\t\t\t\t    <div class=\"mark\">My rating: <span class=\"rating-input\"><span data-value=\"0\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"1\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"2\" class=\"glyphicon glyphicon-star-empty\"></span><span data-value=\"3\" class=\"glyphicon glyphicon-star-empty\"></span><span data-value=\"4\" class=\"glyphicon glyphicon-star-empty\"></span><span data-value=\"5\" class=\"glyphicon glyphicon-star-empty\"></span>  </span></div>
\t\t\t\t\t\t        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
\t\t\t\t\t\t\t    <ins class=\"ab zmin sprite sprite-i-triangle block\"></ins>
\t\t\t\t            </div>
\t\t\t\t\t\t\t<div class=\"person-text rel text-light\">
\t\t\t\t\t\t\t\t<img src=\"img/testimonials/5.jpg\" alt=\"\" class=\"person img-circle\" />
\t\t\t\t\t\t        <a title=\"\" href=\"#\">Ella Mentree</a>
\t\t\t\t\t\t\t\t<span>Fort Worth, Texas</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6 hidden-sm hidden-xs\">
\t\t\t\t\t\t\t<div class=\"block-text rel zmin\">
\t\t\t\t\t\t\t\t<a title=\"\" href=\"#\">Cervical Lesions</a>
\t\t\t\t\t\t\t\t<div class=\"mark\">My rating: <span class=\"rating-input\"><span data-value=\"0\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"1\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"2\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"3\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"4\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"5\" class=\"glyphicon glyphicon-star\"></span>  </span></div>
\t\t\t\t\t\t        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
\t\t\t\t\t\t\t    <ins class=\"ab zmin sprite sprite-i-triangle block\"></ins>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"person-text rel text-light\">
\t\t\t\t\t\t\t\t<img src=\"img/testimonials/6.jpg\" alt=\"\" class=\"person img-circle\" />
\t\t\t\t\t\t\t\t<a title=\"\" href=\"#\">Suzanne Adam</a>
\t\t\t\t\t\t\t\t<span>Detroit, Michigan</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                    </div>
                    
                   
                </div>
\t\t\t\t
                <a class=\"left carousel-control\" href=\"#carousel-reviews\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>
                </a>
                <a class=\"right carousel-control\" href=\"#carousel-reviews\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
                </a>
            </div>
        </div>
    </div>
</div>
\t</section>
\t<!-- /Section: testimonial -->
\t

\t<!-- Section: pricing -->\t
\t<section id=\"pricing\" class=\"home-section bg-gray paddingbot-60\">\t
\t\t<div class=\"container marginbot-50\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 col-lg-offset-2\">
\t\t\t\t\t<div class=\"wow lightSpeedIn\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"section-heading text-center\">
\t\t\t\t\t<h2 class=\"h-bold\">Health packages</h2>
\t\t\t\t\t<p>Take charge of your health today with our specially designed health packages</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"divider-short\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
           
\t\t   <div class=\"container\">
\t\t\t
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-sm-4 pricing-box\">
\t\t\t\t\t<div class=\"wow bounceInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"pricing-content general\">
\t\t\t\t\t\t<h2>Basic Fit 1 Package</h2>
\t\t\t\t\t\t<h3>\$33<sup>.99</sup> <span>/ one time</span></h3>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Anthropometry (BMI, WH Ratio) <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t\t<li>Post Examination Review <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t\t<li>General Screening – Basic <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t\t<li><del>Health Screening Report</del> <i class=\"fa fa-times icon-danger\"></i></li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<div class=\"price-bottom\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-skin btn-lg\">Purchase</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4 pricing-box featured-price\">
\t\t\t\t\t<div class=\"wow bounceInUp\" data-wow-delay=\"0.3s\">
\t\t\t\t\t<div class=\"pricing-content featured\">
\t\t\t\t\t\t<h2>Golden Glow Package</h2>
\t\t\t\t\t\t<h3>\$65<sup>.99</sup> <span>/ one time</span></h3>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Anthropometry (BMI, WH Ratio) <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t\t<li>Post Examination Review <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t\t<li>General Screening – Basic <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t\t<li>Body Composition Analysis <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t\t<li>GR Assessment & Scoring <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<div class=\"price-bottom\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-skin btn-lg\">Purchase</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4 pricing-box\">
\t\t\t\t\t<div class=\"wow bounceInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t\t<div class=\"pricing-content general last\">
\t\t\t\t\t\t<h2>Basic Fit 2 Package</h2>
\t\t\t\t\t\t<h3>\$47<sup>.99</sup> <span>/ one time</span></h3>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Anthropometry (BMI, WH Ratio) <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t\t<li>Post Examination Review <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t\t<li>General Screening – Regular <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t\t<li><del>Health Screening Report</del> <i class=\"fa fa-times icon-danger\"></i></li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<div class=\"price-bottom\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-skin btn-lg\">Purchase</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>\t\t\t\t
\t\t\t\t
            </div>
\t</section>\t 
\t<!-- /Section: pricing -->
\t
\t<section id=\"partner\" class=\"home-section paddingbot-60\">\t
\t\t<div class=\"container marginbot-50\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 col-lg-offset-2\">
\t\t\t\t\t<div class=\"wow lightSpeedIn\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"section-heading text-center\">
\t\t\t\t\t<h2 class=\"h-bold\">Our partner</h2>
\t\t\t\t\t<p>Take charge of your health today with our specially designed health packages</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"divider-short\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
           <div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<div class=\"partner\">
\t\t\t\t\t\t<a href=\"#\"><img src=\"img/dummy/partner-1.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<div class=\"partner\">
\t\t\t\t\t\t<a href=\"#\"><img src=\"img/dummy/partner-2.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<div class=\"partner\">
\t\t\t\t\t\t<a href=\"#\"><img src=\"img/dummy/partner-3.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<div class=\"partner\">
\t\t\t\t\t\t<a href=\"#\"><img src=\"img/dummy/partner-4.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
\t</section>\t

\t<footer>
\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h5>About Medicio</h5>
\t\t\t\t\t\t<p>
\t\t\t\t\t\tLorem ipsum dolor sit amet, ne nam purto nihil impetus, an facilisi accommodare sea
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h5>Information</h5>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Laboratory</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Medical treatment</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Terms & conditions</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h5>Medicio center</h5>
\t\t\t\t\t\t<p>
\t\t\t\t\t\tNam leo lorem, tincidunt id risus ut, ornare tincidunt naqunc sit amet.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"fa-stack fa-lg\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar-o fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t</span> Monday - Saturday, 8am to 10pm
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"fa-stack fa-lg\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t</span> +62 0888 904 711
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"fa-stack fa-lg\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t</span> hello@medicio.com
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h5>Our location</h5>
\t\t\t\t\t\t<p>The Suithouse V303, Kuningan City, Jakarta Indonesia 12940</p>\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h5>Follow us</h5>
\t\t\t\t\t\t<ul class=\"company-social\">
\t\t\t\t\t\t\t\t<li class=\"social-facebook\"><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-twitter\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-google\"><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-vimeo\"><a href=\"#\"><i class=\"fa fa-vimeo-square\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-dribble\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>
\t\t<div class=\"sub-footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t\t<div class=\"wow fadeInLeft\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"text-left\">
\t\t\t\t\t<p>&copy;Copyright 2015 - Medicio. All rights reserved.</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t<p><a href=\"http://bootstraptaste.com/\">Bootstrap Themes</a> by BootstrapTaste</p>
\t\t\t\t\t</div>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Medicio
                    -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>
\t\t</div>
\t</footer>

</div>
<a href=\"#\" class=\"scrollup\"><i class=\"fa fa-angle-up active\"></i></a>

\t<!-- Core JavaScript Files -->
    <script src=\"js/jquery.min.js\"></script>\t 
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/jquery.easing.min.js\"></script>
\t<script src=\"js/wow.min.js\"></script>
\t<script src=\"js/jquery.scrollTo.js\"></script>
\t<script src=\"js/jquery.appear.js\"></script>
\t<script src=\"js/stellar.js\"></script>
\t<script src=\"plugins/cubeportfolio/js/jquery.cubeportfolio.min.js\"></script>
\t<script src=\"js/owl.carousel.min.js\"></script>
\t<script src=\"js/nivo-lightbox.min.js\"></script>
    <script src=\"js/custom.js\"></script>

<!-- Default Statcounter code for PHP Bootstrap https://php-bootstrap.com/ -->
<script type=\"text/javascript\">
var sc_project=11872472; 
var sc_invisible=1; 
var sc_security=\"7f6660f5\"; 
</script>
<script type=\"text/javascript\"
src=\"https://www.statcounter.com/counter/counter.js\"
async></script>
<noscript><div class=\"statcounter\"><a title=\"Web Analytics\"
href=\"https://statcounter.com/\" target=\"_blank\"><img
class=\"statcounter\"
src=\"https://c.statcounter.com/11872472/0/7f6660f5/1/\"
alt=\"Web Analytics\"
referrerPolicy=\"no-referrer-when-downgrade\"></a></div></noscript>
<!-- End of Statcounter Code -->

</body>

</html>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "test.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Medicio landing page template for Health niche</title>
\t
    <!-- css -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/cubeportfolio/css/cubeportfolio.min.css\">
\t<link href=\"css/nivo-lightbox.css\" rel=\"stylesheet\" />
\t<link href=\"css/nivo-lightbox-theme/default/default.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"css/owl.carousel.css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"css/owl.theme.css\" rel=\"stylesheet\" media=\"screen\" />
\t<link href=\"css/animate.css\" rel=\"stylesheet\" />
    <link href=\"css/style.css\" rel=\"stylesheet\">

\t<!-- boxed bg -->
\t<link id=\"bodybg\" href=\"bodybg/bg1.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<!-- template skin -->
\t<link id=\"t-colors\" href=\"color/default.css\" rel=\"stylesheet\">


</head>

<body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-custom\">

<div id=\"wrapper\">
\t
    <nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
\t\t<div class=\"top-area\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t\t<p class=\"bold text-left\">Monday - Saturday, 8am to 10pm </p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t\t<p class=\"bold text-right\">Call us now +62 008 65 001</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
        <div class=\"container navigation\">
\t\t
            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                    <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">
                    <img src=\"img/logo.png\" alt=\"\" width=\"150\" height=\"40\" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse navbar-right navbar-main-collapse\">
\t\t\t  <ul class=\"nav navbar-nav\">
\t\t\t\t<li class=\"active\"><a href=\"#intro\">Home</a></li>
\t\t\t\t<li><a href=\"#service\">Service</a></li>
\t\t\t\t<li><a href=\"#doctor\">Doctors</a></li>
\t\t\t\t<li><a href=\"#facilities\">Facilities</a></li>
\t\t\t\t<li><a href=\"#pricing\">Pricing</a></li>
\t\t\t\t<li class=\"dropdown\">
\t\t\t\t  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"badge custom-badge red pull-right\">Extra</span>More <b class=\"caret\"></b></a>
\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t<li><a href=\"index.html\">Home form</a></li>
\t\t\t\t\t<li><a href=\"index-video.html\">Home video</a></li>
\t\t\t\t\t<li><a href=\"index-cta.html\">Home CTA</a></li>
\t\t\t\t\t<li><a href=\"https://bootstrapmade.com\">Download</a></li>
\t\t\t\t  </ul>
\t\t\t\t</li>
\t\t\t  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
\t

\t<!-- Section: intro -->
    <section id=\"intro\" class=\"intro\">
\t\t<div class=\"intro-content\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-offset=\"0\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<h2 class=\"h-ultra\">Medicio medical group</h2>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-offset=\"0\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<h4 class=\"h-light\">Provide <span class=\"color\">best quality healthcare</span> for you</h4>
\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"well well-trans\">
\t\t\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.1s\">

\t\t\t\t\t\t<ul class=\"lead-list\">
\t\t\t\t\t\t\t<li><span class=\"fa fa-check fa-2x icon-success\"></span> <span class=\"list\"><strong>Affordable monthly premium packages</strong><br />Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
\t\t\t\t\t\t\t<li><span class=\"fa fa-check fa-2x icon-success\"></span> <span class=\"list\"><strong>Choose your favourite doctor</strong><br />Sit zril sanctus scaevola ei, ea usu movet graeco</span></li>
\t\t\t\t\t\t\t<li><span class=\"fa fa-check fa-2x icon-success\"></span> <span class=\"list\"><strong>Only use friendly environment</strong><br />Wisi lobortis eos ex, per at movet delectus, qui no vocent deleniti</span></li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t<div class=\"wow fadeInRight\" data-wow-duration=\"2s\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"panel panel-skin\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\"><span class=\"fa fa-pencil-square-o\"></span> Make an appoinment <small>(It's free!)</small></h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<form role=\"form\" class=\"lead\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>First Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"first_name\" id=\"first_name\" class=\"form-control input-md\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Last Name</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"last_name\" id=\"last_name\" class=\"form-control input-md\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Email</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"email\" class=\"form-control input-md\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Phone number</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"phone\" id=\"phone\" class=\"form-control input-md\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Submit\" class=\"btn btn-skin btn-block btn-lg\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<p class=\"lead-footer\">* We'll contact you by phone & email later</p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t</div>\t\t
    </section>
\t
\t<!-- /Section: intro -->

\t<!-- Section: boxes -->
    <section id=\"boxes\" class=\"home-section paddingtop-80\">
\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t<div class=\"box text-center\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<i class=\"fa fa-check fa-3x circled bg-skin\"></i>
\t\t\t\t\t\t\t<h4 class=\"h-bold\">Make an appoinment</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t<div class=\"box text-center\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<i class=\"fa fa-list-alt fa-3x circled bg-skin\"></i>
\t\t\t\t\t\t\t<h4 class=\"h-bold\">Choose your package</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t<div class=\"box text-center\">
\t\t\t\t\t\t\t<i class=\"fa fa-user-md fa-3x circled bg-skin\"></i>
\t\t\t\t\t\t\t<h4 class=\"h-bold\">Help by specialist</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t<div class=\"box text-center\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<i class=\"fa fa-hospital-o fa-3x circled bg-skin\"></i>
\t\t\t\t\t\t\t<h4 class=\"h-bold\">Get diagnostic report</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tLorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</section>
\t<!-- /Section: boxes -->
\t
\t
\t<section id=\"callaction\" class=\"home-section paddingtop-40\">\t
           <div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"callaction bg-gray\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t\t\t\t<div class=\"cta-text\">
\t\t\t\t\t\t\t\t\t<h3>In an emergency? Need help now?</h3>
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipiscing elit uisque interdum ante eget faucibus. </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"wow lightSpeedIn\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t\t\t\t\t<div class=\"cta-btn\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-skin btn-lg\">Book an appoinment</a>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
\t</section>\t
\t

\t<!-- Section: services -->
    <section id=\"service\" class=\"home-section nopadding paddingtop-60\">

\t\t<div class=\"container\">

        <div class=\"row\">
\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t<div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t<img src=\"img/dummy/img-1.jpg\" class=\"img-responsive\" alt=\"\" />
\t\t\t\t</div>
            </div>
\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.1s\">
                <div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-stethoscope fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Medical checkup</h5>
\t\t\t\t\t\t<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.2s\">
\t\t\t\t<div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-wheelchair fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Nursing Services</h5>
\t\t\t\t\t\t<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.3s\">
\t\t\t\t<div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-plus-square fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Pharmacy</h5>
\t\t\t\t\t\t<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>


            </div>
\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.1s\">
                <div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-h-square fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Gyn Care</h5>
\t\t\t\t\t\t<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.2s\">
\t\t\t\t<div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-filter fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Neurology</h5>
\t\t\t\t\t\t<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.3s\">
\t\t\t\t<div class=\"service-box\">
\t\t\t\t\t<div class=\"service-icon\">
\t\t\t\t\t\t<span class=\"fa fa-user-md fa-3x\"></span> 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"service-desc\">
\t\t\t\t\t\t<h5 class=\"h-light\">Sleep Center</h5>
\t\t\t\t\t\t<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
\t\t\t\t\t</div>
                </div>
\t\t\t\t</div>

            </div>
\t\t\t
        </div>\t\t
\t\t</div>
\t</section>
\t<!-- /Section: services -->
\t

\t<!-- Section: team -->
    <section id=\"doctor\" class=\"home-section bg-gray paddingbot-60\">
\t\t<div class=\"container marginbot-50\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 col-lg-offset-2\">
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"section-heading text-center\">
\t\t\t\t\t<h2 class=\"h-bold\">Doctors</h2>
\t\t\t\t\t<p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"divider-short\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t
            <div id=\"filters-container\" class=\"cbp-l-filters-alignLeft\">
                <div data-filter=\"*\" class=\"cbp-filter-item-active cbp-filter-item\">All (<div class=\"cbp-filter-counter\"></div>)</div>
                <div data-filter=\".cardiologist\" class=\"cbp-filter-item\">Cardiologist (<div class=\"cbp-filter-counter\"></div>)</div>
                <div data-filter=\".psychiatrist\" class=\"cbp-filter-item\">Psychiatrist (<div class=\"cbp-filter-counter\"></div>)</div>
                <div data-filter=\".neurologist\" class=\"cbp-filter-item\">Neurologist (<div class=\"cbp-filter-counter\"></div>)</div>
            </div>
\t\t
            <div id=\"grid-container\" class=\"cbp-l-grid-team\">
                <ul>
                    <li class=\"cbp-item psychiatrist\">
                        <a href=\"doctors/member1.html\" class=\"cbp-caption cbp-singlePage\">
                            <div class=\"cbp-caption-defaultWrap\">
                                <img src=\"img/team/1.jpg\" alt=\"\" width=\"100%\">
                            </div>
                            <div class=\"cbp-caption-activeWrap\">
                                <div class=\"cbp-l-caption-alignCenter\">
                                    <div class=\"cbp-l-caption-body\">
                                        <div class=\"cbp-l-caption-text\">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href=\"doctors/member1.html\" class=\"cbp-singlePage cbp-l-grid-team-name\">Alice Grue</a>
                        <div class=\"cbp-l-grid-team-position\">Psychiatrist</div>
                    </li>
                    <li class=\"cbp-item cardiologist\">
                        <a href=\"doctors/member2.html\" class=\"cbp-caption cbp-singlePage\">
                            <div class=\"cbp-caption-defaultWrap\">
                                <img src=\"img/team/2.jpg\" alt=\"\" width=\"100%\">
                            </div>
                            <div class=\"cbp-caption-activeWrap\">
                                <div class=\"cbp-l-caption-alignCenter\">
                                    <div class=\"cbp-l-caption-body\">
                                        <div class=\"cbp-l-caption-text\">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href=\"doctors/member2.html\" class=\"cbp-singlePage cbp-l-grid-team-name\">Joseph Murphy</a>
                        <div class=\"cbp-l-grid-team-position\">Cardiologist</div>
                    </li>
                    <li class=\"cbp-item cardiologist\">
                        <a href=\"doctors/member3.html\" class=\"cbp-caption cbp-singlePage\">
                            <div class=\"cbp-caption-defaultWrap\">
                                <img src=\"img/team/3.jpg\" alt=\"\" width=\"100%\">
                            </div>
                            <div class=\"cbp-caption-activeWrap\">
                                <div class=\"cbp-l-caption-alignCenter\">
                                    <div class=\"cbp-l-caption-body\">
                                        <div class=\"cbp-l-caption-text\">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href=\"doctors/member3.html\" class=\"cbp-singlePage cbp-l-grid-team-name\">Alison Davis</a>
                        <div class=\"cbp-l-grid-team-position\">Cardiologist</div>
                    </li>
                    <li class=\"cbp-item neurologist\">
                        <a href=\"doctors/member4.html\" class=\"cbp-caption cbp-singlePage\">
                            <div class=\"cbp-caption-defaultWrap\">
                                <img src=\"img/team/4.jpg\" alt=\"\" width=\"100%\">
                            </div>
                            <div class=\"cbp-caption-activeWrap\">
                                <div class=\"cbp-l-caption-alignCenter\">
                                    <div class=\"cbp-l-caption-body\">
                                        <div class=\"cbp-l-caption-text\">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href=\"doctors/member4.html\" class=\"cbp-singlePage cbp-l-grid-team-name\">Adam Taylor</a>
                        <div class=\"cbp-l-grid-team-position\">Neurologist</div>
                    </li>

                </ul>
            </div>
\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</section>
\t<!-- /Section: team -->

\t
\t\t
\t<!-- Section: works -->
    <section id=\"facilities\" class=\"home-section paddingbot-60\">
\t\t<div class=\"container marginbot-50\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 col-lg-offset-2\">
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"section-heading text-center\">
\t\t\t\t\t<h2 class=\"h-bold\">Our facilities</h2>
\t\t\t\t\t<p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"divider-short\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

<div class=\"container\">
\t\t\t<div class=\"row\">
                <div class=\"col-sm-12 col-md-12 col-lg-12\" >
\t\t\t\t\t<div class=\"wow bounceInUp\" data-wow-delay=\"0.2s\">
                    <div id=\"owl-works\" class=\"owl-carousel\">
                        <div class=\"item\"><a href=\"img/photo/1.jpg\" title=\"This is an image title\" data-lightbox-gallery=\"gallery1\" data-lightbox-hidpi=\"img/works/1@2x.jpg\"><img src=\"img/photo/1.jpg\" class=\"img-responsive\" alt=\"img\"></a></div>
                        <div class=\"item\"><a href=\"img/photo/2.jpg\" title=\"This is an image title\" data-lightbox-gallery=\"gallery1\" data-lightbox-hidpi=\"img/works/2@2x.jpg\"><img src=\"img/photo/2.jpg\" class=\"img-responsive \" alt=\"img\"></a></div>
                        <div class=\"item\"><a href=\"img/photo/3.jpg\" title=\"This is an image title\" data-lightbox-gallery=\"gallery1\" data-lightbox-hidpi=\"img/works/3@2x.jpg\"><img src=\"img/photo/3.jpg\" class=\"img-responsive \" alt=\"img\"></a></div>
                        <div class=\"item\"><a href=\"img/photo/4.jpg\" title=\"This is an image title\" data-lightbox-gallery=\"gallery1\" data-lightbox-hidpi=\"img/works/4@2x.jpg\"><img src=\"img/photo/4.jpg\" class=\"img-responsive \" alt=\"img\"></a></div>
                        <div class=\"item\"><a href=\"img/photo/5.jpg\" title=\"This is an image title\" data-lightbox-gallery=\"gallery1\" data-lightbox-hidpi=\"img/works/5@2x.jpg\"><img src=\"img/photo/5.jpg\" class=\"img-responsive \" alt=\"img\"></a></div>
                        <div class=\"item\"><a href=\"img/photo/6.jpg\" title=\"This is an image title\" data-lightbox-gallery=\"gallery1\" data-lightbox-hidpi=\"img/works/6@2x.jpg\"><img src=\"img/photo/6.jpg\" class=\"img-responsive \" alt=\"img\"></a></div>
                    </div>
\t\t\t\t\t</div>
                </div>
            </div>
\t\t</div>
\t</section>
\t<!-- /Section: works -->
\t
\t
\t<!-- Section: testimonial -->
    <section id=\"testimonial\" class=\"home-section paddingbot-60 parallax\" data-stellar-background-ratio=\"0.5\">

<div class=\"carousel-reviews broun-block\">
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"carousel-reviews\" class=\"carousel slide\" data-ride=\"carousel\">
            
                <div class=\"carousel-inner\">
                    <div class=\"item active\">
                \t    <div class=\"col-md-4 col-sm-6\">
        \t\t\t\t    <div class=\"block-text rel zmin\">
\t\t\t\t\t\t        <a title=\"\" href=\"#\">Emergency Contraception</a>
\t\t\t\t\t\t\t    <div class=\"mark\">My rating: <span class=\"rating-input\"><span data-value=\"0\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"1\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"2\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"3\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"4\" class=\"glyphicon glyphicon-star-empty\"></span><span data-value=\"5\" class=\"glyphicon glyphicon-star-empty\"></span>  </span></div>
\t\t\t\t\t\t        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
\t\t\t\t\t\t\t    <ins class=\"ab zmin sprite sprite-i-triangle block\"></ins>
\t\t\t\t\t        </div>
\t\t\t\t\t\t\t<div class=\"person-text rel text-light\">\t\t\t\t\t
\t\t\t\t\t\t\t\t<img src=\"img/testimonials/1.jpg\" alt=\"\" class=\"person img-circle\" />
\t\t\t\t\t\t\t\t<a title=\"\" href=\"#\">Anna</a>
\t\t\t\t\t\t\t\t<span>Chicago, Illinois</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
            \t\t\t<div class=\"col-md-4 col-sm-6 hidden-xs\">
\t\t\t\t\t\t    <div class=\"block-text rel zmin\">
\t\t\t\t\t\t        <a title=\"\" href=\"#\">Orthopedic Surgery</a>
\t\t\t\t\t\t\t    <div class=\"mark\">My rating: <span class=\"rating-input\"><span data-value=\"0\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"1\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"2\" class=\"glyphicon glyphicon-star-empty\"></span><span data-value=\"3\" class=\"glyphicon glyphicon-star-empty\"></span><span data-value=\"4\" class=\"glyphicon glyphicon-star-empty\"></span><span data-value=\"5\" class=\"glyphicon glyphicon-star-empty\"></span>  </span></div>
\t\t\t\t\t\t        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
\t\t\t\t\t\t\t    <ins class=\"ab zmin sprite sprite-i-triangle block\"></ins>
\t\t\t\t            </div>
\t\t\t\t\t\t\t<div class=\"person-text rel text-light\">
\t\t\t\t                <img src=\"img/testimonials/2.jpg\" alt=\"\" class=\"person img-circle\" />
\t\t\t\t\t\t\t\t<a title=\"\" href=\"#\">Matthew G</a>
\t\t\t\t\t\t\t\t<span>San Antonio, Texas</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6 hidden-sm hidden-xs\">
\t\t\t\t\t\t\t<div class=\"block-text rel zmin\">
\t\t\t\t\t\t\t\t<a title=\"\" href=\"#\">Medical consultation</a>
\t\t\t\t\t\t\t\t<div class=\"mark\">My rating: <span class=\"rating-input\"><span data-value=\"0\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"1\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"2\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"3\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"4\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"5\" class=\"glyphicon glyphicon-star\"></span>  </span></div>
\t\t\t\t\t\t        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
\t\t\t\t\t\t\t    <ins class=\"ab zmin sprite sprite-i-triangle block\"></ins>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"person-text rel text-light\">
\t\t\t\t\t\t\t\t<img src=\"img/testimonials/3.jpg\" alt=\"\" class=\"person img-circle\" />
\t\t\t\t\t\t\t\t<a title=\"\" href=\"#\">Scarlet Smith</a>
\t\t\t\t\t\t\t\t<span>Dallas, Texas</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                    </div>
                    <div class=\"item\">
                        <div class=\"col-md-4 col-sm-6\">
        \t\t\t\t    <div class=\"block-text rel zmin\">
\t\t\t\t\t\t        <a title=\"\" href=\"#\">Birth control pills</a>
\t\t\t\t\t\t\t    <div class=\"mark\">My rating: <span class=\"rating-input\"><span data-value=\"0\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"1\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"2\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"3\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"4\" class=\"glyphicon glyphicon-star-empty\"></span><span data-value=\"5\" class=\"glyphicon glyphicon-star-empty\"></span>  </span></div>
\t\t\t\t\t\t        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
\t\t\t\t\t\t\t    <ins class=\"ab zmin sprite sprite-i-triangle block\"></ins>
\t\t\t\t\t        </div>
\t\t\t\t\t\t\t<div class=\"person-text rel text-light\">
\t\t\t\t\t\t\t\t<img src=\"img/testimonials/4.jpg\" alt=\"\" class=\"person img-circle\" />
\t\t\t\t\t\t\t\t<a title=\"\" href=\"#\">Lucas Thompson</a>
\t\t\t\t\t\t\t\t<span>Austin, Texas</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
            \t\t\t<div class=\"col-md-4 col-sm-6 hidden-xs\">
\t\t\t\t\t\t    <div class=\"block-text rel zmin\">
\t\t\t\t\t\t        <a title=\"\" href=\"#\">Radiology</a>
\t\t\t\t\t\t\t    <div class=\"mark\">My rating: <span class=\"rating-input\"><span data-value=\"0\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"1\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"2\" class=\"glyphicon glyphicon-star-empty\"></span><span data-value=\"3\" class=\"glyphicon glyphicon-star-empty\"></span><span data-value=\"4\" class=\"glyphicon glyphicon-star-empty\"></span><span data-value=\"5\" class=\"glyphicon glyphicon-star-empty\"></span>  </span></div>
\t\t\t\t\t\t        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
\t\t\t\t\t\t\t    <ins class=\"ab zmin sprite sprite-i-triangle block\"></ins>
\t\t\t\t            </div>
\t\t\t\t\t\t\t<div class=\"person-text rel text-light\">
\t\t\t\t\t\t\t\t<img src=\"img/testimonials/5.jpg\" alt=\"\" class=\"person img-circle\" />
\t\t\t\t\t\t        <a title=\"\" href=\"#\">Ella Mentree</a>
\t\t\t\t\t\t\t\t<span>Fort Worth, Texas</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6 hidden-sm hidden-xs\">
\t\t\t\t\t\t\t<div class=\"block-text rel zmin\">
\t\t\t\t\t\t\t\t<a title=\"\" href=\"#\">Cervical Lesions</a>
\t\t\t\t\t\t\t\t<div class=\"mark\">My rating: <span class=\"rating-input\"><span data-value=\"0\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"1\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"2\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"3\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"4\" class=\"glyphicon glyphicon-star\"></span><span data-value=\"5\" class=\"glyphicon glyphicon-star\"></span>  </span></div>
\t\t\t\t\t\t        <p>Ne eam errem semper. Laudem detracto phaedrum cu vim, pri cu errem fierent fabellas. Quis magna in ius, pro vidit nonumy te, nostrud ...</p>
\t\t\t\t\t\t\t    <ins class=\"ab zmin sprite sprite-i-triangle block\"></ins>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"person-text rel text-light\">
\t\t\t\t\t\t\t\t<img src=\"img/testimonials/6.jpg\" alt=\"\" class=\"person img-circle\" />
\t\t\t\t\t\t\t\t<a title=\"\" href=\"#\">Suzanne Adam</a>
\t\t\t\t\t\t\t\t<span>Detroit, Michigan</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                    </div>
                    
                   
                </div>
\t\t\t\t
                <a class=\"left carousel-control\" href=\"#carousel-reviews\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>
                </a>
                <a class=\"right carousel-control\" href=\"#carousel-reviews\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
                </a>
            </div>
        </div>
    </div>
</div>
\t</section>
\t<!-- /Section: testimonial -->
\t

\t<!-- Section: pricing -->\t
\t<section id=\"pricing\" class=\"home-section bg-gray paddingbot-60\">\t
\t\t<div class=\"container marginbot-50\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 col-lg-offset-2\">
\t\t\t\t\t<div class=\"wow lightSpeedIn\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"section-heading text-center\">
\t\t\t\t\t<h2 class=\"h-bold\">Health packages</h2>
\t\t\t\t\t<p>Take charge of your health today with our specially designed health packages</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"divider-short\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
           
\t\t   <div class=\"container\">
\t\t\t
\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-sm-4 pricing-box\">
\t\t\t\t\t<div class=\"wow bounceInUp\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"pricing-content general\">
\t\t\t\t\t\t<h2>Basic Fit 1 Package</h2>
\t\t\t\t\t\t<h3>\$33<sup>.99</sup> <span>/ one time</span></h3>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Anthropometry (BMI, WH Ratio) <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t\t<li>Post Examination Review <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t\t<li>General Screening – Basic <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t\t<li><del>Health Screening Report</del> <i class=\"fa fa-times icon-danger\"></i></li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<div class=\"price-bottom\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-skin btn-lg\">Purchase</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4 pricing-box featured-price\">
\t\t\t\t\t<div class=\"wow bounceInUp\" data-wow-delay=\"0.3s\">
\t\t\t\t\t<div class=\"pricing-content featured\">
\t\t\t\t\t\t<h2>Golden Glow Package</h2>
\t\t\t\t\t\t<h3>\$65<sup>.99</sup> <span>/ one time</span></h3>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Anthropometry (BMI, WH Ratio) <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t\t<li>Post Examination Review <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t\t<li>General Screening – Basic <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t\t<li>Body Composition Analysis <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t\t<li>GR Assessment & Scoring <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<div class=\"price-bottom\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-skin btn-lg\">Purchase</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-4 pricing-box\">
\t\t\t\t\t<div class=\"wow bounceInUp\" data-wow-delay=\"0.2s\">
\t\t\t\t\t<div class=\"pricing-content general last\">
\t\t\t\t\t\t<h2>Basic Fit 2 Package</h2>
\t\t\t\t\t\t<h3>\$47<sup>.99</sup> <span>/ one time</span></h3>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Anthropometry (BMI, WH Ratio) <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t\t<li>Post Examination Review <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t\t<li>General Screening – Regular <i class=\"fa fa-check icon-success\"></i></li>
\t\t\t\t\t\t\t<li><del>Health Screening Report</del> <i class=\"fa fa-times icon-danger\"></i></li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<div class=\"price-bottom\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-skin btn-lg\">Purchase</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>\t\t\t\t
\t\t\t\t
            </div>
\t</section>\t 
\t<!-- /Section: pricing -->
\t
\t<section id=\"partner\" class=\"home-section paddingbot-60\">\t
\t\t<div class=\"container marginbot-50\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 col-lg-offset-2\">
\t\t\t\t\t<div class=\"wow lightSpeedIn\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"section-heading text-center\">
\t\t\t\t\t<h2 class=\"h-bold\">Our partner</h2>
\t\t\t\t\t<p>Take charge of your health today with our specially designed health packages</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"divider-short\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
           <div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<div class=\"partner\">
\t\t\t\t\t\t<a href=\"#\"><img src=\"img/dummy/partner-1.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<div class=\"partner\">
\t\t\t\t\t\t<a href=\"#\"><img src=\"img/dummy/partner-2.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<div class=\"partner\">
\t\t\t\t\t\t<a href=\"#\"><img src=\"img/dummy/partner-3.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-3\">
\t\t\t\t\t\t<div class=\"partner\">
\t\t\t\t\t\t<a href=\"#\"><img src=\"img/dummy/partner-4.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
\t</section>\t

\t<footer>
\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h5>About Medicio</h5>
\t\t\t\t\t\t<p>
\t\t\t\t\t\tLorem ipsum dolor sit amet, ne nam purto nihil impetus, an facilisi accommodare sea
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h5>Information</h5>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Laboratory</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Medical treatment</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Terms & conditions</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h5>Medicio center</h5>
\t\t\t\t\t\t<p>
\t\t\t\t\t\tNam leo lorem, tincidunt id risus ut, ornare tincidunt naqunc sit amet.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"fa-stack fa-lg\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar-o fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t</span> Monday - Saturday, 8am to 10pm
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"fa-stack fa-lg\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-phone fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t</span> +62 0888 904 711
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"fa-stack fa-lg\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t\t</span> hello@medicio.com
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h5>Our location</h5>
\t\t\t\t\t\t<p>The Suithouse V303, Kuningan City, Jakarta Indonesia 12940</p>\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"wow fadeInDown\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t<h5>Follow us</h5>
\t\t\t\t\t\t<ul class=\"company-social\">
\t\t\t\t\t\t\t\t<li class=\"social-facebook\"><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-twitter\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-google\"><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-vimeo\"><a href=\"#\"><i class=\"fa fa-vimeo-square\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social-dribble\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>
\t\t<div class=\"sub-footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t\t<div class=\"wow fadeInLeft\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"text-left\">
\t\t\t\t\t<p>&copy;Copyright 2015 - Medicio. All rights reserved.</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t\t<div class=\"wow fadeInRight\" data-wow-delay=\"0.1s\">
\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t<p><a href=\"http://bootstraptaste.com/\">Bootstrap Themes</a> by BootstrapTaste</p>
\t\t\t\t\t</div>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Medicio
                    -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>
\t\t</div>
\t</footer>

</div>
<a href=\"#\" class=\"scrollup\"><i class=\"fa fa-angle-up active\"></i></a>

\t<!-- Core JavaScript Files -->
    <script src=\"js/jquery.min.js\"></script>\t 
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/jquery.easing.min.js\"></script>
\t<script src=\"js/wow.min.js\"></script>
\t<script src=\"js/jquery.scrollTo.js\"></script>
\t<script src=\"js/jquery.appear.js\"></script>
\t<script src=\"js/stellar.js\"></script>
\t<script src=\"plugins/cubeportfolio/js/jquery.cubeportfolio.min.js\"></script>
\t<script src=\"js/owl.carousel.min.js\"></script>
\t<script src=\"js/nivo-lightbox.min.js\"></script>
    <script src=\"js/custom.js\"></script>

<!-- Default Statcounter code for PHP Bootstrap https://php-bootstrap.com/ -->
<script type=\"text/javascript\">
var sc_project=11872472; 
var sc_invisible=1; 
var sc_security=\"7f6660f5\"; 
</script>
<script type=\"text/javascript\"
src=\"https://www.statcounter.com/counter/counter.js\"
async></script>
<noscript><div class=\"statcounter\"><a title=\"Web Analytics\"
href=\"https://statcounter.com/\" target=\"_blank\"><img
class=\"statcounter\"
src=\"https://c.statcounter.com/11872472/0/7f6660f5/1/\"
alt=\"Web Analytics\"
referrerPolicy=\"no-referrer-when-downgrade\"></a></div></noscript>
<!-- End of Statcounter Code -->

</body>

</html>", "test.twig", "D:\\xampp\\htdocs\\Cabinet\\views\\test.twig");
    }
}

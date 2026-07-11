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
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* /Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/layouts/layout.htm */
class __TwigTemplate_974a1f7c6f2058399a50aeb75154374b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Life Voyage - Modèle HTML d\x27Agence de Voyage et de Réservation de Circuits - Accueil Agence</title>
    <meta name=\"author\" content=\"Life Voyage\">
    <meta name=\"description\" content=\"Life Voyage - Modèle HTML d\x27Agence de Voyage et de Réservation de Circuits \">
    <meta name=\"keywords\" content=\"Life Voyage - Modèle HTML d\x27Agence de Voyage et de Réservation de Circuits \">
    <meta name=\"robots\" content=\"INDEX,FOLLOW\">

    <!-- Mobile Specific Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 17
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicons/apple-icon-57x57.png"), 17, $this->source);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 18
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicons/apple-icon-60x60.png"), 18, $this->source);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 19
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicons/apple-icon-72x72.png"), 19, $this->source);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 20
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicons/apple-icon-76x76.png"), 20, $this->source);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 21
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicons/apple-icon-114x114.png"), 21, $this->source);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 22
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicons/apple-icon-120x120.png"), 22, $this->source);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 23
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicons/apple-icon-144x144.png"), 23, $this->source);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 24
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicons/apple-icon-152x152.png"), 24, $this->source);
        yield "\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 25
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicons/apple-icon-180x180.png"), 25, $this->source);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"";
        // line 26
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicons/android-icon-192x192.png"), 26, $this->source);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 27
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicons/favicon-32x32.png"), 27, $this->source);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 28
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicons/favicon-96x96.png"), 28, $this->source);
        yield "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 29
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicons/favicon-16x16.png"), 29, $this->source);
        yield "\">
    <link rel=\"manifest\" href=\"";
        // line 30
        yield "assets/img/favicons/manifest.json";
        yield " | theme \">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 32
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicons/ms-icon-144x144.png"), 32, $this->source);
        yield "\">
    <meta name=\"theme-color\" content=\"#ffffff\">

    <!--==============================
\t  Google Fonts
\t============================== -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Manrope:wght@200..800&family=Montez&display=swap\" rel=\"stylesheet\">

    <!--==============================
\t    All CSS File
\t============================== -->
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"";
        // line 48
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css"), 48, $this->source);
        yield "\">
    <!-- Fontawesome Icon -->
    <link rel=\"stylesheet\" href=\"";
        // line 50
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/fontawesome.min.css"), 50, $this->source);
        yield "\">
    <!-- Magnific Popup -->
    <link rel=\"stylesheet\" href=\"";
        // line 52
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/magnific-popup.min.css"), 52, $this->source);
        yield "\">

    <!-- Swiper css -->
    <link rel=\"stylesheet\" href=\"";
        // line 55
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/swiper-bundle.min.css"), 55, $this->source);
        yield "\">
    <!-- Theme Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 57
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css"), 57, $this->source);
        yield "\">

</head>

<body>

<!--[if lte IE 9]>
<p class=\"browserupgrade\">Vous utilisez un navigateur <strong>obsolète</strong>. Veuillez <a href=\"https://browsehappy.com/\">mettre à jour votre navigateur</a> pour améliorer votre expérience et votre sécurité.</p>
<![endif]-->


<div class=\"magic-cursor relative z-10\">
    <div class=\"cursor\"></div>
    <div class=\"cursor-follower\"></div>
</div>

<div id=\"preloader\" class=\"preloader \">
    <div class=\"preloader-inner\">
        <img style=\"height:56px;width:auto;\" src=\"";
        // line 75
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/life-voyage/loog.png"), 75, $this->source);
        yield "\" alt=\"Life Voyage\">
    </div>

    <div id=\"loader\" class=\"th-preloader\">
        <div class=\"animation-preloader\">
            <div class=\"txt-loading\">
                <span preloader-text=\"L\" class=\"characters\">L </span>

                <span preloader-text=\"I\" class=\"characters\">I </span>

                <span preloader-text=\"F\" class=\"characters\">F </span>

                <span preloader-text=\"E\" class=\"characters\">E </span>

                <span preloader-text=\"\" class=\"characters\"> </span>

                <span preloader-text=\"V\" class=\"characters\">V </span>

                <span preloader-text=\"O\" class=\"characters\">O </span>

                <span preloader-text=\"Y\" class=\"characters\">Y </span>

                <span preloader-text=\"A\" class=\"characters\">A </span>

                <span preloader-text=\"G\" class=\"characters\">G </span>

                <span preloader-text=\"E\" class=\"characters\">E </span>
            </div>
        </div>
    </div>

</div>


<div class=\"page-wrapper\">
    ";
        // line 110
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 111
        yield "
    ";
        // line 112
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 113
        yield "
    ";
        // line 114
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 115
        yield "</div>


<!-- Scroll To Top -->
<div class=\"scroll-top\">
    <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
        <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\">
        </path>
    </svg>
</div>

<script src=\"";
        // line 126
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/jquery-3.6.0.min.js"), 126, $this->source);
        yield "\"></script>
<!-- Swiper Js -->
<script src=\"";
        // line 128
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/swiper-bundle.min.js"), 128, $this->source);
        yield "\"></script>
<!-- Bootstrap -->
<script src=\"";
        // line 130
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js"), 130, $this->source);
        yield "\"></script>
<!-- Magnific Popup -->
<script src=\"";
        // line 132
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.magnific-popup.min.js"), 132, $this->source);
        yield "\"></script>
<!-- Counter Up -->
<script src=\"";
        // line 134
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.counterup.min.js"), 134, $this->source);
        yield "\"></script>
<!-- Range Slider -->
<script src=\"";
        // line 136
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-ui.min.js"), 136, $this->source);
        yield "\"></script>
<!-- imagesloaded -->
<script src=\"";
        // line 138
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/imagesloaded.pkgd.min.js"), 138, $this->source);
        yield "\"></script>
<!-- isotope -->
<script src=\"";
        // line 140
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/isotope.pkgd.min.js"), 140, $this->source);
        yield "\"></script>
<!-- gsap -->
<script src=\"";
        // line 142
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/gsap.min.js"), 142, $this->source);
        yield "\"></script>

<!-- circle-progress -->
<script src=\"";
        // line 145
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/circle-progress.js"), 145, $this->source);
        yield "\"></script>

<script src=\"";
        // line 147
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/matter.min.js"), 147, $this->source);
        yield "\"></script>
<script src=\"";
        // line 148
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/matterjs-custom.js"), 148, $this->source);
        yield "\"></script>


<!-- nice select -->
<script src=\"";
        // line 152
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/nice-select.min.js"), 152, $this->source);
        yield "\"></script>


<!-- Main Js File -->
<script src=\"";
        // line 156
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js"), 156, $this->source);
        yield "\"></script>
</body>

</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/layouts/layout.htm";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  316 => 156,  309 => 152,  302 => 148,  298 => 147,  293 => 145,  287 => 142,  282 => 140,  277 => 138,  272 => 136,  267 => 134,  262 => 132,  257 => 130,  252 => 128,  247 => 126,  234 => 115,  230 => 114,  227 => 113,  225 => 112,  222 => 111,  218 => 110,  180 => 75,  159 => 57,  154 => 55,  148 => 52,  143 => 50,  138 => 48,  119 => 32,  114 => 30,  110 => 29,  106 => 28,  102 => 27,  98 => 26,  94 => 25,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Life Voyage - Modèle HTML d\x27Agence de Voyage et de Réservation de Circuits - Accueil Agence</title>
    <meta name=\"author\" content=\"Life Voyage\">
    <meta name=\"description\" content=\"Life Voyage - Modèle HTML d\x27Agence de Voyage et de Réservation de Circuits \">
    <meta name=\"keywords\" content=\"Life Voyage - Modèle HTML d\x27Agence de Voyage et de Réservation de Circuits \">
    <meta name=\"robots\" content=\"INDEX,FOLLOW\">

    <!-- Mobile Specific Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{{ \x27assets/img/favicons/apple-icon-57x57.png\x27  | theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"{{ \x27assets/img/favicons/apple-icon-60x60.png\x27  | theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ \x27assets/img/favicons/apple-icon-72x72.png\x27  | theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ \x27assets/img/favicons/apple-icon-76x76.png\x27  | theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ \x27assets/img/favicons/apple-icon-114x114.png\x27  | theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{ \x27assets/img/favicons/apple-icon-120x120.png\x27  | theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{{ \x27assets/img/favicons/apple-icon-144x144.png\x27  | theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ \x27assets/img/favicons/apple-icon-152x152.png\x27  | theme }}\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ \x27assets/img/favicons/apple-icon-180x180.png\x27  | theme }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"{{ \x27assets/img/favicons/android-icon-192x192.png\x27  | theme }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ \x27assets/img/favicons/favicon-32x32.png\x27  | theme }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"{{ \x27assets/img/favicons/favicon-96x96.png\x27  | theme }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ \x27assets/img/favicons/favicon-16x16.png\x27  | theme }}\">
    <link rel=\"manifest\" href=\"{{ \x27assets/img/favicons/manifest.json\x27}} | theme \">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"{{ \x27assets/img/favicons/ms-icon-144x144.png\x27  | theme }}\">
    <meta name=\"theme-color\" content=\"#ffffff\">

    <!--==============================
\t  Google Fonts
\t============================== -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Manrope:wght@200..800&family=Montez&display=swap\" rel=\"stylesheet\">

    <!--==============================
\t    All CSS File
\t============================== -->
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"{{\x27assets/css/bootstrap.min.css\x27 | theme }}\">
    <!-- Fontawesome Icon -->
    <link rel=\"stylesheet\" href=\"{{\x27assets/css/fontawesome.min.css\x27 | theme }}\">
    <!-- Magnific Popup -->
    <link rel=\"stylesheet\" href=\"{{ \x27assets/css/magnific-popup.min.css\x27 | theme }}\">

    <!-- Swiper css -->
    <link rel=\"stylesheet\" href=\"{{ \x27assets/css/swiper-bundle.min.css\x27 | theme }}\">
    <!-- Theme Custom CSS -->
    <link rel=\"stylesheet\" href=\"{{ \x27assets/css/style.css\x27 | theme}}\">

</head>

<body>

<!--[if lte IE 9]>
<p class=\"browserupgrade\">Vous utilisez un navigateur <strong>obsolète</strong>. Veuillez <a href=\"https://browsehappy.com/\">mettre à jour votre navigateur</a> pour améliorer votre expérience et votre sécurité.</p>
<![endif]-->


<div class=\"magic-cursor relative z-10\">
    <div class=\"cursor\"></div>
    <div class=\"cursor-follower\"></div>
</div>

<div id=\"preloader\" class=\"preloader \">
    <div class=\"preloader-inner\">
        <img style=\"height:56px;width:auto;\" src=\"{{ \x27assets/img/life-voyage/loog.png\x27 | theme }}\" alt=\"Life Voyage\">
    </div>

    <div id=\"loader\" class=\"th-preloader\">
        <div class=\"animation-preloader\">
            <div class=\"txt-loading\">
                <span preloader-text=\"L\" class=\"characters\">L </span>

                <span preloader-text=\"I\" class=\"characters\">I </span>

                <span preloader-text=\"F\" class=\"characters\">F </span>

                <span preloader-text=\"E\" class=\"characters\">E </span>

                <span preloader-text=\"\" class=\"characters\"> </span>

                <span preloader-text=\"V\" class=\"characters\">V </span>

                <span preloader-text=\"O\" class=\"characters\">O </span>

                <span preloader-text=\"Y\" class=\"characters\">Y </span>

                <span preloader-text=\"A\" class=\"characters\">A </span>

                <span preloader-text=\"G\" class=\"characters\">G </span>

                <span preloader-text=\"E\" class=\"characters\">E </span>
            </div>
        </div>
    </div>

</div>


<div class=\"page-wrapper\">
    {% partial \x27header\x27 %}

    {% page %}

    {% partial \x27footer\x27 %}
</div>


<!-- Scroll To Top -->
<div class=\"scroll-top\">
    <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
        <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\">
        </path>
    </svg>
</div>

<script src=\"{{ \x27assets/js/vendor/jquery-3.6.0.min.js\x27 | theme }}\"></script>
<!-- Swiper Js -->
<script src=\"{{ \x27assets/js/swiper-bundle.min.js\x27 | theme }}\"></script>
<!-- Bootstrap -->
<script src=\"{{ \x27assets/js/bootstrap.min.js\x27 | theme }}\"></script>
<!-- Magnific Popup -->
<script src=\"{{ \x27assets/js/jquery.magnific-popup.min.js\x27 | theme }}\"></script>
<!-- Counter Up -->
<script src=\"{{ \x27assets/js/jquery.counterup.min.js\x27 | theme }}\"></script>
<!-- Range Slider -->
<script src=\"{{ \x27assets/js/jquery-ui.min.js\x27 | theme }}\"></script>
<!-- imagesloaded -->
<script src=\"{{ \x27assets/js/imagesloaded.pkgd.min.js\x27 | theme }}\"></script>
<!-- isotope -->
<script src=\"{{ \x27assets/js/isotope.pkgd.min.js\x27 | theme }}\"></script>
<!-- gsap -->
<script src=\"{{ \x27assets/js/gsap.min.js\x27 | theme }}\"></script>

<!-- circle-progress -->
<script src=\"{{ \x27assets/js/circle-progress.js\x27 | theme }}\"></script>

<script src=\"{{ \x27assets/js/matter.min.js\x27 | theme }}\"></script>
<script src=\"{{ \x27assets/js/matterjs-custom.js\x27 | theme }}\"></script>


<!-- nice select -->
<script src=\"{{ \x27assets/js/nice-select.min.js\x27 | theme }}\"></script>


<!-- Main Js File -->
<script src=\"{{ \x27assets/js/main.js\x27 | theme }}\"></script>
</body>

</html>", "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/layouts/layout.htm", "");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["partial" => 110, "page" => 112];
        static $filters = ["theme" => 17];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "partial", 1 => "page"],
                [0 => "theme"],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}

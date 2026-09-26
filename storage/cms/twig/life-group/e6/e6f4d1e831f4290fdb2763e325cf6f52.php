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

/* /Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/partials/sidemenu.htm */
class __TwigTemplate_1d76821b74dd5509fce6a0a1e74bfa33 extends Template
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
        // line 2
        yield "<div class=\"sidemenu-wrapper sidemenu-info \">
    <div class=\"sidemenu-content\">
        <button class=\"closeButton sideMenuCls\"><i class=\"far fa-times\"></i></button>
        <div class=\"widget  \">
            <div class=\"th-widget-about\">
                <div class=\"about-logo\">
                    <a href=\"#\"><img style=\"height:56px;width:auto;\" src=\"";
        // line 8
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/life-voyage/loog.png"), 8, $this->source);
        yield "\" alt=\"Life Voyage\"></a>
                </div>
                <p class=\"about-text\">Votre partenaire de confiance pour tous vos voyages à travers le monde. Visa, billets d\x27avion, séjours, hôtels, véhicules et assurance : à Grand-Bassam, nous nous occupons de tout.</p>
                <div class=\"th-social\">
                    <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a href=\"https://www.twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                    <a href=\"https://www.linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                    <a href=\"https://www.whatsapp.com/\"><i class=\"fab fa-whatsapp\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"widget  \">
            <h3 class=\"widget_title\">Articles récents</h3>
            <div class=\"recent-post-wrap\">
                <div class=\"recent-post\">
                    <div class=\"media-img\">
                        <a href=\"blog-details.html\"><img src=\"";
        // line 24
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/recent-post-1-1.jpg"), 24, $this->source);
        yield "\" alt=\"Blog Image\"></a>
                    </div>
                    <div class=\"media-body\">
                        <div class=\"recent-post-meta\">
                            <a href=\"blog.html\"><i class=\"far fa-calendar\"></i>10 Septembre 2026</a>
                        </div>
                        <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"#\">Visa Schengen : les documents à préparer</a></h4>
                    </div>
                </div>
                <div class=\"recent-post\">
                    <div class=\"media-img\">
                        <a href=\"#\"><img src=\"";
        // line 35
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/recent-post-1-2.jpg"), 35, $this->source);
        yield "\" alt=\"Blog Image\"></a>
                    </div>
                    <div class=\"media-body\">
                        <div class=\"recent-post-meta\">
                            <a href=\"#\"><i class=\"far fa-calendar\"></i>02 Septembre 2026</a>
                        </div>
                        <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"#\">Étudier au Canada : les étapes du visa étudiant</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"widget  \">
            <h3 class=\"widget_title\">Contactez-nous</h3>
            <div class=\"th-widget-contact\">
                <div class=\"info-box_text\">
                    <div class=\"icon\">
                        <img src=\"";
        // line 51
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/phone.svg"), 51, $this->source);
        yield "\" alt=\"img\">
                    </div>
                    <div class=\"details\">
                        <p><a href=\"tel:+2250757397423\" class=\"info-box_link\">+225 07 57 39 74 23</a></p>
                        <p><a href=\"tel:+2250789152812\" class=\"info-box_link\">+225 07 89 15 28 12</a></p>
                    </div>
                </div>
                <div class=\"info-box_text\">
                    <div class=\"icon\">
                        <img src=\"";
        // line 60
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/envelope.svg"), 60, $this->source);
        yield "\" alt=\"img\">
                    </div>
                    <div class=\"details\">
                        <p><a href=\"mailto:info@lifevoyagestourisme.com\" class=\"info-box_link\">info@lifevoyagestourisme.com</a></p>
                        <p><a href=\"mailto:life.voyages.tourisme@gmail.com\" class=\"info-box_link\">life.voyages.tourisme@gmail.com</a></p>
                    </div>
                </div>
                <div class=\"info-box_text\">
                    <div class=\"icon\"><img src=\"";
        // line 68
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/location-dot.svg"), 68, $this->source);
        yield "\" alt=\"img\"></div>
                    <div class=\"details\">
                        <p>Grand-Bassam, Mockeyville, Carrefour Femme Peulh 2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"popup-search-box\">
    <button class=\"searchClose\"><i class=\"fal fa-times\"></i></button>
    <form action=\"#\">
        <input type=\"text\" placeholder=\"Visa, billet d\x27avion, circuit…\">
        <button type=\"submit\"><i class=\"fal fa-search\"></i></button>
    </form>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/partials/sidemenu.htm";
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
        return array (  127 => 68,  116 => 60,  104 => 51,  85 => 35,  71 => 24,  52 => 8,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Menu latéral (copie à l\x27identique de celui de l\x27accueil) pour les pages internes #}
<div class=\"sidemenu-wrapper sidemenu-info \">
    <div class=\"sidemenu-content\">
        <button class=\"closeButton sideMenuCls\"><i class=\"far fa-times\"></i></button>
        <div class=\"widget  \">
            <div class=\"th-widget-about\">
                <div class=\"about-logo\">
                    <a href=\"#\"><img style=\"height:56px;width:auto;\" src=\"{{\x27assets/img/life-voyage/loog.png\x27|theme }}\" alt=\"Life Voyage\"></a>
                </div>
                <p class=\"about-text\">Votre partenaire de confiance pour tous vos voyages à travers le monde. Visa, billets d\x27avion, séjours, hôtels, véhicules et assurance : à Grand-Bassam, nous nous occupons de tout.</p>
                <div class=\"th-social\">
                    <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a href=\"https://www.twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                    <a href=\"https://www.linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                    <a href=\"https://www.whatsapp.com/\"><i class=\"fab fa-whatsapp\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"widget  \">
            <h3 class=\"widget_title\">Articles récents</h3>
            <div class=\"recent-post-wrap\">
                <div class=\"recent-post\">
                    <div class=\"media-img\">
                        <a href=\"blog-details.html\"><img src=\"{{\x27assets/img/blog/recent-post-1-1.jpg\x27|theme }}\" alt=\"Blog Image\"></a>
                    </div>
                    <div class=\"media-body\">
                        <div class=\"recent-post-meta\">
                            <a href=\"blog.html\"><i class=\"far fa-calendar\"></i>10 Septembre 2026</a>
                        </div>
                        <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"#\">Visa Schengen : les documents à préparer</a></h4>
                    </div>
                </div>
                <div class=\"recent-post\">
                    <div class=\"media-img\">
                        <a href=\"#\"><img src=\"{{\x27assets/img/blog/recent-post-1-2.jpg\x27|theme }}\" alt=\"Blog Image\"></a>
                    </div>
                    <div class=\"media-body\">
                        <div class=\"recent-post-meta\">
                            <a href=\"#\"><i class=\"far fa-calendar\"></i>02 Septembre 2026</a>
                        </div>
                        <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"#\">Étudier au Canada : les étapes du visa étudiant</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"widget  \">
            <h3 class=\"widget_title\">Contactez-nous</h3>
            <div class=\"th-widget-contact\">
                <div class=\"info-box_text\">
                    <div class=\"icon\">
                        <img src=\"{{\x27assets/img/icon/phone.svg\x27 |theme }}\" alt=\"img\">
                    </div>
                    <div class=\"details\">
                        <p><a href=\"tel:+2250757397423\" class=\"info-box_link\">+225 07 57 39 74 23</a></p>
                        <p><a href=\"tel:+2250789152812\" class=\"info-box_link\">+225 07 89 15 28 12</a></p>
                    </div>
                </div>
                <div class=\"info-box_text\">
                    <div class=\"icon\">
                        <img src=\"{{\x27assets/img/icon/envelope.svg\x27|theme }}\" alt=\"img\">
                    </div>
                    <div class=\"details\">
                        <p><a href=\"mailto:info@lifevoyagestourisme.com\" class=\"info-box_link\">info@lifevoyagestourisme.com</a></p>
                        <p><a href=\"mailto:life.voyages.tourisme@gmail.com\" class=\"info-box_link\">life.voyages.tourisme@gmail.com</a></p>
                    </div>
                </div>
                <div class=\"info-box_text\">
                    <div class=\"icon\"><img src=\"{{\x27assets/img/icon/location-dot.svg\x27|theme }}\" alt=\"img\"></div>
                    <div class=\"details\">
                        <p>Grand-Bassam, Mockeyville, Carrefour Femme Peulh 2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"popup-search-box\">
    <button class=\"searchClose\"><i class=\"fal fa-times\"></i></button>
    <form action=\"#\">
        <input type=\"text\" placeholder=\"Visa, billet d\x27avion, circuit…\">
        <button type=\"submit\"><i class=\"fal fa-search\"></i></button>
    </form>
</div>", "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/partials/sidemenu.htm", "");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["theme" => 8];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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

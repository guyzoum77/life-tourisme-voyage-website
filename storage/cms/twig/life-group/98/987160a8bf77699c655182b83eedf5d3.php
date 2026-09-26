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

/* /Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/partials/footer.htm */
class __TwigTemplate_77902d2ec821280e67035afc8212200f extends Template
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
        yield "<footer class=\"footer-wrapper bg-title footer-layout2\">
    <div class=\"widget-area\">
        <div class=\"container\">
            <div class=\"newsletter-area\">
                <div class=\"newsletter-top\">
                    <div class=\"row gy-4 align-items-center\">
                        <div class=\"col-lg-5\">
                            <h2 class=\"newsletter-title text-white text-capitalize mb-0\">Recevez nos offres et alertes visa</h2>
                        </div>
                        <div class=\"col-lg-7\">
                            <form class=\"newsletter-form style2\">
                                <input class=\"form-control \" type=\"email\" placeholder=\"Votre email\" required=\"\">
                                <button type=\"submit\" class=\"th-btn style1\">S\x27abonner <img src=\"";
        // line 13
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/plane2.svg"), 13, $this->source);
        yield "\" alt=\"\"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-between\">
                <div class=\"col-md-6 col-xl-3\">
                    <div class=\"widget footer-widget\">
                        <div class=\"th-widget-about\">
                            <div class=\"about-logo\">
                                <a href=\"home-travel.html\"><img style=\"height:56px;width:auto;\" src=\"";
        // line 24
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/life-voyage/loog.png"), 24, $this->source);
        yield "\" alt=\"Life Voyage\"></a>
                            </div>
                            <p class=\"about-text\">Votre partenaire de confiance pour tous vos voyages à travers le monde. Voyagez sans stress, nous nous occupons de tout !</p>
                            <div class=\"th-social\">
                                <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"https://www.twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"https://www.linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"https://www.whatsapp.com/\"><i class=\"fab fa-whatsapp\"></i></a>
                                <a href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-auto\">
                    <div class=\"widget widget_nav_menu footer-widget\">
                        <h3 class=\"widget_title\">Liens rapides</h3>
                        <div class=\"menu-all-pages-container\">
                            <ul class=\"menu\">

                                <li><a href=\"";
        // line 43
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("accueil"), 43, $this->source);
        yield "\">Accueil</a></li>
                                <li><a href=\"";
        // line 44
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("a-propos"), 44, $this->source);
        yield "\">À propos de nous</a></li>
                                <li><a href=\"";
        // line 45
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("accompagnement-visa"), 45, $this->source);
        yield "\">Nos services</a></li>
                                <li><a href=\"";
        // line 46
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("contact"), 46, $this->source);
        yield "\">Contactez-nous</a></li>
                                <li><a href=\"";
        // line 47
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("contact"), 47, $this->source);
        yield "\">Demander un devis</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-auto\">
                    <div class=\"widget footer-widget\">
                        <h3 class=\"widget_title\">Contactez-nous</h3>
                        <div class=\"th-widget-contact\">
                            <div class=\"info-box_text\">
                                <div class=\"icon\">
                                    <img src=\"";
        // line 58
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/phone.svg"), 58, $this->source);
        yield "\" alt=\"img\">
                                </div>
                                <div class=\"details\">
                                    <p><a href=\"tel:+2250757397423\" class=\"info-box_link\">+225 07 57 39 74 23</a></p>
                                    <p><a href=\"tel:+2250789152812\" class=\"info-box_link\">+225 07 89 15 28 12</a></p>
                                    <p><a href=\"tel:+2252721734109\" class=\"info-box_link\">+225 27 21 73 41 09</a></p>
                                </div>
                            </div>
                            <div class=\"info-box_text\">
                                <div class=\"icon\">
                                    <img src=\"";
        // line 68
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/envelope.svg"), 68, $this->source);
        yield "\" alt=\"img\">
                                </div>
                                <div class=\"details\">
                                    <p><a href=\"mailto:info@lifevoyagestourisme.com\" class=\"info-box_link\">info@lifevoyagestourisme.com</a></p>
                                    <p><a href=\"https://www.lifevoyagestourisme.com\" class=\"info-box_link\">www.lifevoyagestourisme.com</a></p>
                                </div>
                            </div>
                            <div class=\"info-box_text\">
                                <div class=\"icon\"><img src=\"";
        // line 76
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/location-dot.svg"), 76, $this->source);
        yield "\" alt=\"img\"></div>
                                <div class=\"details\">
                                    <p>Grand-Bassam, Mockeyville, Carrefour Femme Peulh 2</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-auto\">
                    <div class=\"widget footer-widget\">
                        <h3 class=\"widget_title\">Suivez-nous sur Facebook</h3>
                        <div class=\"sidebar-gallery\">
                            <div class=\"gallery-thumb\">
                                <img src=\"";
        // line 89
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/widget/gallery_1_1.jpg"), 89, $this->source);
        yield "\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                            <div class=\"gallery-thumb\">
                                <img src=\"";
        // line 93
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/widget/gallery_1_2.jpg"), 93, $this->source);
        yield "\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                            <div class=\"gallery-thumb\">
                                <img src=\"";
        // line 97
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/widget/gallery_1_3.jpg"), 97, $this->source);
        yield "\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                            <div class=\"gallery-thumb\">
                                <img src=\"";
        // line 101
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/widget/gallery_1_4.jpg"), 101, $this->source);
        yield "\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                            <div class=\"gallery-thumb\">
                                <img src=\"";
        // line 105
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/widget/gallery_1_5.jpg"), 105, $this->source);
        yield "\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                            <div class=\"gallery-thumb\">
                                <img src=\"";
        // line 109
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/widget/gallery_1_6.jpg"), 109, $this->source);
        yield "\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"copyright-wrap\">
        <div class=\"container\">
            <div class=\"row justify-content-between align-items-center\">
                <div class=\"col-md-6\">
                    <p class=\"copyright-text\">Copyright 2026 <a href=\"#\">Life Voyages &amp; Tourisme</a>. Tous droits réservés.</p>
                </div>
                <div class=\"col-md-6 text-end d-none d-md-block\">
                    <div class=\"footer-card\">
                        <span class=\"title\">Nous acceptons</span>
                        <img src=\"";
        // line 127
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/cards.png"), 127, $this->source);
        yield "\" alt=\"\">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class=\"shape-mockup movingX d-none d-xxl-block\" data-top=\"24%\" data-left=\"5%\">
        <img src=\"";
        // line 135
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_8.png"), 135, $this->source);
        yield "\" alt=\"shape\">
    </div>
</footer>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/partials/footer.htm";
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
        return array (  231 => 135,  220 => 127,  199 => 109,  192 => 105,  185 => 101,  178 => 97,  171 => 93,  164 => 89,  148 => 76,  137 => 68,  124 => 58,  110 => 47,  106 => 46,  102 => 45,  98 => 44,  94 => 43,  72 => 24,  58 => 13,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer class=\"footer-wrapper bg-title footer-layout2\">
    <div class=\"widget-area\">
        <div class=\"container\">
            <div class=\"newsletter-area\">
                <div class=\"newsletter-top\">
                    <div class=\"row gy-4 align-items-center\">
                        <div class=\"col-lg-5\">
                            <h2 class=\"newsletter-title text-white text-capitalize mb-0\">Recevez nos offres et alertes visa</h2>
                        </div>
                        <div class=\"col-lg-7\">
                            <form class=\"newsletter-form style2\">
                                <input class=\"form-control \" type=\"email\" placeholder=\"Votre email\" required=\"\">
                                <button type=\"submit\" class=\"th-btn style1\">S\x27abonner <img src=\"{{ \x27assets/img/icon/plane2.svg\x27 | theme }}\" alt=\"\"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-between\">
                <div class=\"col-md-6 col-xl-3\">
                    <div class=\"widget footer-widget\">
                        <div class=\"th-widget-about\">
                            <div class=\"about-logo\">
                                <a href=\"home-travel.html\"><img style=\"height:56px;width:auto;\" src=\"{{\x27assets/img/life-voyage/loog.png\x27|theme }}\" alt=\"Life Voyage\"></a>
                            </div>
                            <p class=\"about-text\">Votre partenaire de confiance pour tous vos voyages à travers le monde. Voyagez sans stress, nous nous occupons de tout !</p>
                            <div class=\"th-social\">
                                <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"https://www.twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                <a href=\"https://www.linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                <a href=\"https://www.whatsapp.com/\"><i class=\"fab fa-whatsapp\"></i></a>
                                <a href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-auto\">
                    <div class=\"widget widget_nav_menu footer-widget\">
                        <h3 class=\"widget_title\">Liens rapides</h3>
                        <div class=\"menu-all-pages-container\">
                            <ul class=\"menu\">

                                <li><a href=\"{{ \x27accueil\x27|page }}\">Accueil</a></li>
                                <li><a href=\"{{ \x27a-propos\x27|page }}\">À propos de nous</a></li>
                                <li><a href=\"{{ \x27accompagnement-visa\x27|page }}\">Nos services</a></li>
                                <li><a href=\"{{ \x27contact\x27|page }}\">Contactez-nous</a></li>
                                <li><a href=\"{{ \x27contact\x27|page }}\">Demander un devis</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-auto\">
                    <div class=\"widget footer-widget\">
                        <h3 class=\"widget_title\">Contactez-nous</h3>
                        <div class=\"th-widget-contact\">
                            <div class=\"info-box_text\">
                                <div class=\"icon\">
                                    <img src=\"{{\x27assets/img/icon/phone.svg\x27 | theme }}\" alt=\"img\">
                                </div>
                                <div class=\"details\">
                                    <p><a href=\"tel:+2250757397423\" class=\"info-box_link\">+225 07 57 39 74 23</a></p>
                                    <p><a href=\"tel:+2250789152812\" class=\"info-box_link\">+225 07 89 15 28 12</a></p>
                                    <p><a href=\"tel:+2252721734109\" class=\"info-box_link\">+225 27 21 73 41 09</a></p>
                                </div>
                            </div>
                            <div class=\"info-box_text\">
                                <div class=\"icon\">
                                    <img src=\"{{\x27assets/img/icon/envelope.svg\x27 |theme }}\" alt=\"img\">
                                </div>
                                <div class=\"details\">
                                    <p><a href=\"mailto:info@lifevoyagestourisme.com\" class=\"info-box_link\">info@lifevoyagestourisme.com</a></p>
                                    <p><a href=\"https://www.lifevoyagestourisme.com\" class=\"info-box_link\">www.lifevoyagestourisme.com</a></p>
                                </div>
                            </div>
                            <div class=\"info-box_text\">
                                <div class=\"icon\"><img src=\"{{ \x27assets/img/icon/location-dot.svg\x27|theme }}\" alt=\"img\"></div>
                                <div class=\"details\">
                                    <p>Grand-Bassam, Mockeyville, Carrefour Femme Peulh 2</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-auto\">
                    <div class=\"widget footer-widget\">
                        <h3 class=\"widget_title\">Suivez-nous sur Facebook</h3>
                        <div class=\"sidebar-gallery\">
                            <div class=\"gallery-thumb\">
                                <img src=\"{{\x27assets/img/widget/gallery_1_1.jpg\x27|theme }}\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                            <div class=\"gallery-thumb\">
                                <img src=\"{{\x27assets/img/widget/gallery_1_2.jpg\x27|theme }}\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                            <div class=\"gallery-thumb\">
                                <img src=\"{{\x27assets/img/widget/gallery_1_3.jpg\x27|theme }}\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                            <div class=\"gallery-thumb\">
                                <img src=\"{{\x27assets/img/widget/gallery_1_4.jpg\x27|theme }}\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                            <div class=\"gallery-thumb\">
                                <img src=\"{{\x27assets/img/widget/gallery_1_5.jpg\x27|theme }}\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                            <div class=\"gallery-thumb\">
                                <img src=\"{{\x27assets/img/widget/gallery_1_6.jpg\x27|theme }}\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"copyright-wrap\">
        <div class=\"container\">
            <div class=\"row justify-content-between align-items-center\">
                <div class=\"col-md-6\">
                    <p class=\"copyright-text\">Copyright 2026 <a href=\"#\">Life Voyages &amp; Tourisme</a>. Tous droits réservés.</p>
                </div>
                <div class=\"col-md-6 text-end d-none d-md-block\">
                    <div class=\"footer-card\">
                        <span class=\"title\">Nous acceptons</span>
                        <img src=\"{{\x27assets/img/shape/cards.png\x27|theme }}\" alt=\"\">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class=\"shape-mockup movingX d-none d-xxl-block\" data-top=\"24%\" data-left=\"5%\">
        <img src=\"{{\x27assets/img/shape/shape_8.png\x27|theme }}\" alt=\"shape\">
    </div>
</footer>", "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/partials/footer.htm", "");
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
        static $filters = ["theme" => 13, "page" => 43];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [0 => "theme", 1 => "page"],
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

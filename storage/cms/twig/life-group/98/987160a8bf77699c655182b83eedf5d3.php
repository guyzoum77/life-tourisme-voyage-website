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
                            <h2 class=\"newsletter-title text-white text-capitalize mb-0\">recevez notre dernière
                                newsletter</h2>
                        </div>
                        <div class=\"col-lg-7\">
                            <form class=\"newsletter-form style2\">
                                <input class=\"form-control \" type=\"email\" placeholder=\"Entrez votre email\" required=\"\">
                                <button type=\"submit\" class=\"th-btn style1\">S\x27abonner <img src=\"";
        // line 14
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/plane2.svg"), 14, $this->source);
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
        // line 25
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/life-voyage/loog.png"), 25, $this->source);
        yield "\" alt=\"Life Voyage\"></a>
                            </div>
                            <p class=\"about-text\">Optimisons rapidement un modèle de capital intellectuel multiplateforme. Créons de manière appropriée des infrastructures interactives</p>
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

                                <li><a href=\"#\">Accueil</a></li>
                                <li><a href=\"#\">À propos de nous</a></li>
                                <li><a href=\"#\">Nos Services</a></li>
                                <li><a href=\"#\">Conditions d\x27utilisation</a></li>
                                <li><a href=\"#\">Réserver un circuit</a></li>
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
        // line 59
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/phone.svg"), 59, $this->source);
        yield "\" alt=\"img\">
                                </div>
                                <div class=\"details\">
                                    <p><a href=\"tel:+01234567890\" class=\"info-box_link\">+01 234 567 890</a></p>
                                    <p><a href=\"tel:+09876543210\" class=\"info-box_link\">+09 876 543 210</a></p>
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
                                    <p><a href=\"mailto:mailinfo00@life-voyage.com\" class=\"info-box_link\">mailinfo00@life-voyage.com</a></p>
                                    <p><a href=\"mailto:support24@life-voyage.com\" class=\"info-box_link\">support24@life-voyage.com</a></p>
                                </div>
                            </div>
                            <div class=\"info-box_text\">
                                <div class=\"icon\"><img src=\"";
        // line 76
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/location-dot.svg"), 76, $this->source);
        yield "\" alt=\"img\"></div>
                                <div class=\"details\">
                                    <p>789 Inner Lane, Holy park, California, USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-auto\">
                    <div class=\"widget footer-widget\">
                        <h3 class=\"widget_title\">Publications Instagram</h3>
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
                    <p class=\"copyright-text\">Copyright 2024 <a href=\"#\">Life Voyage</a>. Tous droits réservés.</p>
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
        return array (  216 => 135,  205 => 127,  184 => 109,  177 => 105,  170 => 101,  163 => 97,  156 => 93,  149 => 89,  133 => 76,  122 => 68,  110 => 59,  73 => 25,  59 => 14,  44 => 1,);
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
                            <h2 class=\"newsletter-title text-white text-capitalize mb-0\">recevez notre dernière
                                newsletter</h2>
                        </div>
                        <div class=\"col-lg-7\">
                            <form class=\"newsletter-form style2\">
                                <input class=\"form-control \" type=\"email\" placeholder=\"Entrez votre email\" required=\"\">
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
                            <p class=\"about-text\">Optimisons rapidement un modèle de capital intellectuel multiplateforme. Créons de manière appropriée des infrastructures interactives</p>
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

                                <li><a href=\"#\">Accueil</a></li>
                                <li><a href=\"#\">À propos de nous</a></li>
                                <li><a href=\"#\">Nos Services</a></li>
                                <li><a href=\"#\">Conditions d\x27utilisation</a></li>
                                <li><a href=\"#\">Réserver un circuit</a></li>
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
                                    <p><a href=\"tel:+01234567890\" class=\"info-box_link\">+01 234 567 890</a></p>
                                    <p><a href=\"tel:+09876543210\" class=\"info-box_link\">+09 876 543 210</a></p>
                                </div>
                            </div>
                            <div class=\"info-box_text\">
                                <div class=\"icon\">
                                    <img src=\"{{\x27assets/img/icon/envelope.svg\x27 |theme }}\" alt=\"img\">
                                </div>
                                <div class=\"details\">
                                    <p><a href=\"mailto:mailinfo00@life-voyage.com\" class=\"info-box_link\">mailinfo00@life-voyage.com</a></p>
                                    <p><a href=\"mailto:support24@life-voyage.com\" class=\"info-box_link\">support24@life-voyage.com</a></p>
                                </div>
                            </div>
                            <div class=\"info-box_text\">
                                <div class=\"icon\"><img src=\"{{ \x27assets/img/icon/location-dot.svg\x27|theme }}\" alt=\"img\"></div>
                                <div class=\"details\">
                                    <p>789 Inner Lane, Holy park, California, USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-xl-auto\">
                    <div class=\"widget footer-widget\">
                        <h3 class=\"widget_title\">Publications Instagram</h3>
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
                    <p class=\"copyright-text\">Copyright 2024 <a href=\"#\">Life Voyage</a>. Tous droits réservés.</p>
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
        static $filters = ["theme" => 14];
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

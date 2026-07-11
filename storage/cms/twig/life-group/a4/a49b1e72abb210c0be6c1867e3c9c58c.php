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

/* /Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/partials/header.htm */
class __TwigTemplate_ac630a798a018009c6e61e2f41473c90 extends Template
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
        yield "<header class=\"th-header header-layout3 header-absolute\">
    <div class=\"sticky-wrapper\">
        <div class=\"menu-area\">
            <div class=\"container\">
                <div class=\"row align-items-center justify-content-between\">
                    <div class=\"col-auto\">
                        <div class=\"header-logo\">
                            <a href=\"#\">
                                <img style=\"height:100px;width:auto;\" src=\"";
        // line 9
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/life-voyage/loog.png"), 9, $this->source);
        yield "\" alt=\"Life Voyage\">
                            </a>
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <nav class=\"main-menu d-none d-xl-block\">
                            <ul>
                                <li>
                                    <a class=\"active\" href=\"/\">Acceuil</a>
                                </li>
                                <li><a href=\"#\">A propos de nous</a></li>
<!--                                <li class=\"menu-item-has-children\">-->
<!--                                    <a href=\"#\">Destination</a>-->
<!--                                    <ul class=\"sub-menu\">-->
<!--                                        <li><a href=\"#\">Destination</a></li>-->
<!--                                        <li><a href=\"#\">Détails de la destination</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
                                <li class=\"menu-item-has-children\">
                                    <a href=\"#\">Nos Services</a>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"#\">En attente</a></li>
                                        <li><a href=\"#\">En attente</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"#\">Contactez-nous</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
<!--                    <div class=\"col-auto\">-->
<!--                        <nav class=\"main-menu d-none d-xl-block\">-->
<!--                            <ul>-->
<!--                                <li class=\"menu-item-has-children\">-->
<!--                                    <a href=\"#\">Activités</a>-->
<!--                                    <ul class=\"sub-menu\">-->
<!--                                        <li><a href=\"#\">activités</a></li>-->
<!--                                        <li><a href=\"#\">Détails des activités</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li class=\"menu-item-has-children\">-->
<!--                                    <a href=\"#\">Pages</a>-->
<!--                                    <ul class=\"sub-menu\">-->
<!--                                        <li class=\"menu-item-has-children\">-->
<!--                                            <a href=\"#\">Boutique</a>-->
<!--                                            <ul class=\"sub-menu\">-->
<!--                                                <li><a href=\"shop.html\">Boutique</a></li>-->
<!--                                                <li><a href=\"shop-details.html\">Détails de la boutique</a></li>-->
<!--                                                <li><a href=\"cart.html\">Panier</a></li>-->
<!--                                                <li><a href=\"checkout.html\">Paiement</a></li>-->
<!--                                                <li><a href=\"wishlist.html\">Liste de souhaits</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->

<!--                                        <li><a href=\"gallery.html\">Galerie</a></li>-->
<!--                                        <li><a href=\"tour.html\">Nos circuits</a></li>-->
<!--                                        <li><a href=\"tour-details.html\">Détails du circuit</a></li>-->
<!--                                        <li><a href=\"tour-guide.html\">Guide touristique</a></li>-->
<!--                                        <li><a href=\"tour-guider-details.html\">Détails du guide</a></li>-->
<!--                                        <li><a href=\"faq.html\">FAQ</a></li>-->
<!--                                        <li><a href=\"price.html\">Forfaits tarifaires</a></li>-->
<!--                                        <li><a href=\"error.html\">Page d\x27erreur</a></li>-->
<!--                                    </ul>-->

<!--                                </li>-->
<!--                                <li class=\"menu-item-has-children\">-->
<!--                                    <a href=\"#\">Blog</a>-->
<!--                                    <ul class=\"sub-menu\">-->
<!--                                        <li><a href=\"blog.html\">Blog</a></li>-->
<!--                                        <li><a href=\"blog-details.html\">Détails de l\x27article</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href=\"#\">Contactez-nous</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </nav>-->
<!--                        <button type=\"button\" class=\"th-menu-toggle d-block d-xl-none\"><i class=\"far fa-bars\"></i></button>-->
<!--                    </div>-->
                </div>
            </div>
            <div class=\"header-right-button\">
                <a href=\"#\" class=\"simple-btn sideMenuToggler\"><img src=\"";
        // line 92
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/menu.svg"), 92, $this->source);
        yield "\" alt=\"\"></a>
            </div>
        </div>
    </div>
</header>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/partials/header.htm";
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
        return array (  140 => 92,  54 => 9,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<header class=\"th-header header-layout3 header-absolute\">
    <div class=\"sticky-wrapper\">
        <div class=\"menu-area\">
            <div class=\"container\">
                <div class=\"row align-items-center justify-content-between\">
                    <div class=\"col-auto\">
                        <div class=\"header-logo\">
                            <a href=\"#\">
                                <img style=\"height:100px;width:auto;\" src=\"{{\x27assets/img/life-voyage/loog.png\x27|theme }}\" alt=\"Life Voyage\">
                            </a>
                        </div>
                    </div>
                    <div class=\"col-auto\">
                        <nav class=\"main-menu d-none d-xl-block\">
                            <ul>
                                <li>
                                    <a class=\"active\" href=\"/\">Acceuil</a>
                                </li>
                                <li><a href=\"#\">A propos de nous</a></li>
<!--                                <li class=\"menu-item-has-children\">-->
<!--                                    <a href=\"#\">Destination</a>-->
<!--                                    <ul class=\"sub-menu\">-->
<!--                                        <li><a href=\"#\">Destination</a></li>-->
<!--                                        <li><a href=\"#\">Détails de la destination</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
                                <li class=\"menu-item-has-children\">
                                    <a href=\"#\">Nos Services</a>
                                    <ul class=\"sub-menu\">
                                        <li><a href=\"#\">En attente</a></li>
                                        <li><a href=\"#\">En attente</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"#\">Contactez-nous</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
<!--                    <div class=\"col-auto\">-->
<!--                        <nav class=\"main-menu d-none d-xl-block\">-->
<!--                            <ul>-->
<!--                                <li class=\"menu-item-has-children\">-->
<!--                                    <a href=\"#\">Activités</a>-->
<!--                                    <ul class=\"sub-menu\">-->
<!--                                        <li><a href=\"#\">activités</a></li>-->
<!--                                        <li><a href=\"#\">Détails des activités</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li class=\"menu-item-has-children\">-->
<!--                                    <a href=\"#\">Pages</a>-->
<!--                                    <ul class=\"sub-menu\">-->
<!--                                        <li class=\"menu-item-has-children\">-->
<!--                                            <a href=\"#\">Boutique</a>-->
<!--                                            <ul class=\"sub-menu\">-->
<!--                                                <li><a href=\"shop.html\">Boutique</a></li>-->
<!--                                                <li><a href=\"shop-details.html\">Détails de la boutique</a></li>-->
<!--                                                <li><a href=\"cart.html\">Panier</a></li>-->
<!--                                                <li><a href=\"checkout.html\">Paiement</a></li>-->
<!--                                                <li><a href=\"wishlist.html\">Liste de souhaits</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->

<!--                                        <li><a href=\"gallery.html\">Galerie</a></li>-->
<!--                                        <li><a href=\"tour.html\">Nos circuits</a></li>-->
<!--                                        <li><a href=\"tour-details.html\">Détails du circuit</a></li>-->
<!--                                        <li><a href=\"tour-guide.html\">Guide touristique</a></li>-->
<!--                                        <li><a href=\"tour-guider-details.html\">Détails du guide</a></li>-->
<!--                                        <li><a href=\"faq.html\">FAQ</a></li>-->
<!--                                        <li><a href=\"price.html\">Forfaits tarifaires</a></li>-->
<!--                                        <li><a href=\"error.html\">Page d\x27erreur</a></li>-->
<!--                                    </ul>-->

<!--                                </li>-->
<!--                                <li class=\"menu-item-has-children\">-->
<!--                                    <a href=\"#\">Blog</a>-->
<!--                                    <ul class=\"sub-menu\">-->
<!--                                        <li><a href=\"blog.html\">Blog</a></li>-->
<!--                                        <li><a href=\"blog-details.html\">Détails de l\x27article</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href=\"#\">Contactez-nous</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </nav>-->
<!--                        <button type=\"button\" class=\"th-menu-toggle d-block d-xl-none\"><i class=\"far fa-bars\"></i></button>-->
<!--                    </div>-->
                </div>
            </div>
            <div class=\"header-right-button\">
                <a href=\"#\" class=\"simple-btn sideMenuToggler\"><img src=\"{{\x27assets/img/icon/menu.svg\x27|theme }}\" alt=\"\"></a>
            </div>
        </div>
    </div>
</header>", "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/partials/header.htm", "");
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
        static $filters = ["theme" => 9];
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

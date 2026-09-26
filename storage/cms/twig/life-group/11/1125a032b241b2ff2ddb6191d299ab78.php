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

/* /Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/hotels-residences.htm */
class __TwigTemplate_98262654d90c5f93d472ce234111bb0d extends Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidemenu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        yield "<!--==============================
    Breadcumb
============================== -->
<div class=\"breadcumb-wrapper\" data-bg-src=\"";
        // line 5
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg/breadcumb-bg.jpg"), 5, $this->source);
        yield "\">
    <div class=\"container\">
        <div class=\"breadcumb-content\">
            <h1 class=\"breadcumb-title\">Hôtels & résidences meublées</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"";
        // line 10
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("accueil"), 10, $this->source);
        yield "\">Accueil</a></li>
                <li>Nos services</li>
                <li>Hôtels & résidences meublées</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
    Détail du service
==============================-->
<section class=\"space\">
    <div class=\"container\">
        <div class=\"row gy-5\">
            <div class=\"col-xxl-8 col-lg-7\">
                <div class=\"page-single\">
                    ";
        // line 27
        yield "                    <div class=\"service-img global-img mb-40\">
                        <img class=\"service-hero-img\" src=\"";
        // line 28
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_inner_2.jpg"), 28, $this->source);
        yield "\" alt=\"Hôtels & résidences meublées\">
                    </div>
                    <div class=\"page-content\">
                        <span class=\"sub-title\">Nos services</span>
                        <h2 class=\"box-title mt-2\">Hôtels & résidences meublées</h2>
                        <p class=\"sec-text mb-20 mt-3\"><strong>Un hébergement adapté à votre séjour</strong>, pour une nuit comme pour plusieurs mois.</p>
                        <p class=\"sec-text mb-20\">Hôtel en bord de mer à Assinie ou Grand-Bassam, résidence meublée à Abidjan pour un séjour professionnel, hôtel près de l\x27aéroport pour une escale : nous trouvons l\x27hébergement qui correspond à vos besoins.</p>
                        <p class=\"sec-text mb-20\">Nous réservons aussi vos hôtels à l\x27étranger, à Dubaï, en Europe, au Maroc ou ailleurs, et nous fournissons les attestations d\x27hébergement nécessaires à votre dossier visa.</p>
                        <h3 class=\"box-title mt-40 mb-20\">Nos offres d\x27hébergement</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Hôtels en Côte d\x27Ivoire, de l\x27économique au haut de gamme</li>
                            <li>Résidences meublées pour les courts et longs séjours</li>
                            <li>Hôtels à l\x27étranger pour vos voyages</li>
                            <li>Réservation d\x27hôtel pour dossier visa</li>
                            <li>Hébergement de groupe et séminaires</li>
                            <li>Séjours balnéaires et week-ends</li>
                            </ul>
                        </div>
                        <h3 class=\"box-title mt-40 mb-20\">Ce que nous vérifions pour vous</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>L\x27emplacement par rapport à vos déplacements</li>
                            <li>Les équipements : climatisation, wifi, parking, cuisine</li>
                            <li>Les conditions d\x27annulation et de paiement</li>
                            <li>Les avis et la qualité de l\x27établissement</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xxl-4 col-lg-5\">
                ";
        // line 60
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['visuel'] = "assets/img/life-voyage/IMG_6884.jpeg"        ;
        $context['__cms_partial_params']['visuel_titre'] = "Nos services en un coup d\x27œil"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("service-sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 61
        yield "            </div>
        </div>
        <div class=\"service-steps-area\">
            <h3 class=\"box-title mb-30\">Comment réserver votre hébergement</h3>
            <div class=\"service-steps\">
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 68
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_1.svg"), 68, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">01</span>
                    </div>
                    <h5 class=\"service-step_title\">Votre demande</h5>
                    <p class=\"service-step_text\">Ville, dates, nombre de personnes et budget : dites-nous ce que vous recherchez.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 76
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_2.svg"), 76, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">02</span>
                    </div>
                    <h5 class=\"service-step_title\">Notre sélection</h5>
                    <p class=\"service-step_text\">Nous vous envoyons plusieurs options avec photos, prix et conditions.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 84
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_3.svg"), 84, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">03</span>
                    </div>
                    <h5 class=\"service-step_title\">La réservation</h5>
                    <p class=\"service-step_text\">Vous choisissez, nous confirmons la réservation et vous envoyons le justificatif.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 92
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_1.svg"), 92, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">04</span>
                    </div>
                    <h5 class=\"service-step_title\">Votre séjour</h5>
                    <p class=\"service-step_text\">Nous restons disponibles en cas de changement ou de question pendant votre séjour.</p>
                </div>
            </div>
        </div>
        <div class=\"service-faq-area\">
            <h3 class=\"box-title mb-30\">Questions fréquentes</h3>
            <div class=\"accordion\" id=\"faqHotel\">
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqHotel-h1\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqHotel-c1\" aria-expanded=\"false\" aria-controls=\"faqHotel-c1\">Proposez-vous des résidences meublées pour plusieurs mois ?</button>
                </div>
                <div id=\"faqHotel-c1\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqHotel-h1\" data-bs-parent=\"#faqHotel\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui. Pour une mission, une mutation ou une installation, nous recherchons des résidences meublées adaptées aux longs séjours.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqHotel-h2\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqHotel-c2\" aria-expanded=\"false\" aria-controls=\"faqHotel-c2\">Pouvez-vous réserver un hôtel pour mon dossier visa ?</button>
                </div>
                <div id=\"faqHotel-c2\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqHotel-h2\" data-bs-parent=\"#faqHotel\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui. Nous fournissons une réservation d\x27hôtel conforme aux exigences du consulat, puis la confirmons une fois le visa obtenu.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqHotel-h3\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqHotel-c3\" aria-expanded=\"false\" aria-controls=\"faqHotel-c3\">Réservez-vous des hôtels à l\x27étranger ?</button>
                </div>
                <div id=\"faqHotel-c3\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqHotel-h3\" data-bs-parent=\"#faqHotel\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui, partout dans le monde. Nous pouvons combiner l\x27hôtel avec votre billet d\x27avion et votre assurance voyage.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqHotel-h4\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqHotel-c4\" aria-expanded=\"false\" aria-controls=\"faqHotel-c4\">Puis-je annuler ma réservation ?</button>
                </div>
                <div id=\"faqHotel-c4\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqHotel-h4\" data-bs-parent=\"#faqHotel\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Cela dépend des conditions de l\x27établissement. Nous vous les précisons clairement avant toute réservation.</p>
                    </div>
                </div>
            </div>
            </div>
            <div class=\"d-flex flex-wrap justify-content-center gap-3 mt-50\">
                <a href=\"";
        // line 145
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("contact"), 145, $this->source);
        yield "\" class=\"th-btn th-icon\">Demander un devis</a>
                <a href=\"https://wa.me/2250757397423\" target=\"_blank\" class=\"th-btn style3 th-icon\">Nous écrire sur WhatsApp</a>
            </div>
        </div>
    </div>
</section>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/hotels-residences.htm";
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
        return array (  222 => 145,  166 => 92,  155 => 84,  144 => 76,  133 => 68,  124 => 61,  118 => 60,  83 => 28,  80 => 27,  61 => 10,  53 => 5,  48 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% partial \x27sidemenu\x27 %}
<!--==============================
    Breadcumb
============================== -->
<div class=\"breadcumb-wrapper\" data-bg-src=\"{{ \x27assets/img/bg/breadcumb-bg.jpg\x27|theme }}\">
    <div class=\"container\">
        <div class=\"breadcumb-content\">
            <h1 class=\"breadcumb-title\">Hôtels & résidences meublées</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"{{ \x27accueil\x27|page }}\">Accueil</a></li>
                <li>Nos services</li>
                <li>Hôtels & résidences meublées</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
    Détail du service
==============================-->
<section class=\"space\">
    <div class=\"container\">
        <div class=\"row gy-5\">
            <div class=\"col-xxl-8 col-lg-7\">
                <div class=\"page-single\">
                    {# Image à remplacer par une photo de l\x27agence #}
                    <div class=\"service-img global-img mb-40\">
                        <img class=\"service-hero-img\" src=\"{{ \x27assets/img/tour/tour_inner_2.jpg\x27|theme }}\" alt=\"Hôtels & résidences meublées\">
                    </div>
                    <div class=\"page-content\">
                        <span class=\"sub-title\">Nos services</span>
                        <h2 class=\"box-title mt-2\">Hôtels & résidences meublées</h2>
                        <p class=\"sec-text mb-20 mt-3\"><strong>Un hébergement adapté à votre séjour</strong>, pour une nuit comme pour plusieurs mois.</p>
                        <p class=\"sec-text mb-20\">Hôtel en bord de mer à Assinie ou Grand-Bassam, résidence meublée à Abidjan pour un séjour professionnel, hôtel près de l\x27aéroport pour une escale : nous trouvons l\x27hébergement qui correspond à vos besoins.</p>
                        <p class=\"sec-text mb-20\">Nous réservons aussi vos hôtels à l\x27étranger, à Dubaï, en Europe, au Maroc ou ailleurs, et nous fournissons les attestations d\x27hébergement nécessaires à votre dossier visa.</p>
                        <h3 class=\"box-title mt-40 mb-20\">Nos offres d\x27hébergement</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Hôtels en Côte d\x27Ivoire, de l\x27économique au haut de gamme</li>
                            <li>Résidences meublées pour les courts et longs séjours</li>
                            <li>Hôtels à l\x27étranger pour vos voyages</li>
                            <li>Réservation d\x27hôtel pour dossier visa</li>
                            <li>Hébergement de groupe et séminaires</li>
                            <li>Séjours balnéaires et week-ends</li>
                            </ul>
                        </div>
                        <h3 class=\"box-title mt-40 mb-20\">Ce que nous vérifions pour vous</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>L\x27emplacement par rapport à vos déplacements</li>
                            <li>Les équipements : climatisation, wifi, parking, cuisine</li>
                            <li>Les conditions d\x27annulation et de paiement</li>
                            <li>Les avis et la qualité de l\x27établissement</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xxl-4 col-lg-5\">
                {% partial \x27service-sidebar\x27 visuel=\"assets/img/life-voyage/IMG_6884.jpeg\" visuel_titre=\"Nos services en un coup d\x27œil\" %}
            </div>
        </div>
        <div class=\"service-steps-area\">
            <h3 class=\"box-title mb-30\">Comment réserver votre hébergement</h3>
            <div class=\"service-steps\">
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_1.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">01</span>
                    </div>
                    <h5 class=\"service-step_title\">Votre demande</h5>
                    <p class=\"service-step_text\">Ville, dates, nombre de personnes et budget : dites-nous ce que vous recherchez.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_2.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">02</span>
                    </div>
                    <h5 class=\"service-step_title\">Notre sélection</h5>
                    <p class=\"service-step_text\">Nous vous envoyons plusieurs options avec photos, prix et conditions.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_3.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">03</span>
                    </div>
                    <h5 class=\"service-step_title\">La réservation</h5>
                    <p class=\"service-step_text\">Vous choisissez, nous confirmons la réservation et vous envoyons le justificatif.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_1.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">04</span>
                    </div>
                    <h5 class=\"service-step_title\">Votre séjour</h5>
                    <p class=\"service-step_text\">Nous restons disponibles en cas de changement ou de question pendant votre séjour.</p>
                </div>
            </div>
        </div>
        <div class=\"service-faq-area\">
            <h3 class=\"box-title mb-30\">Questions fréquentes</h3>
            <div class=\"accordion\" id=\"faqHotel\">
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqHotel-h1\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqHotel-c1\" aria-expanded=\"false\" aria-controls=\"faqHotel-c1\">Proposez-vous des résidences meublées pour plusieurs mois ?</button>
                </div>
                <div id=\"faqHotel-c1\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqHotel-h1\" data-bs-parent=\"#faqHotel\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui. Pour une mission, une mutation ou une installation, nous recherchons des résidences meublées adaptées aux longs séjours.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqHotel-h2\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqHotel-c2\" aria-expanded=\"false\" aria-controls=\"faqHotel-c2\">Pouvez-vous réserver un hôtel pour mon dossier visa ?</button>
                </div>
                <div id=\"faqHotel-c2\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqHotel-h2\" data-bs-parent=\"#faqHotel\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui. Nous fournissons une réservation d\x27hôtel conforme aux exigences du consulat, puis la confirmons une fois le visa obtenu.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqHotel-h3\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqHotel-c3\" aria-expanded=\"false\" aria-controls=\"faqHotel-c3\">Réservez-vous des hôtels à l\x27étranger ?</button>
                </div>
                <div id=\"faqHotel-c3\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqHotel-h3\" data-bs-parent=\"#faqHotel\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui, partout dans le monde. Nous pouvons combiner l\x27hôtel avec votre billet d\x27avion et votre assurance voyage.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqHotel-h4\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqHotel-c4\" aria-expanded=\"false\" aria-controls=\"faqHotel-c4\">Puis-je annuler ma réservation ?</button>
                </div>
                <div id=\"faqHotel-c4\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqHotel-h4\" data-bs-parent=\"#faqHotel\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Cela dépend des conditions de l\x27établissement. Nous vous les précisons clairement avant toute réservation.</p>
                    </div>
                </div>
            </div>
            </div>
            <div class=\"d-flex flex-wrap justify-content-center gap-3 mt-50\">
                <a href=\"{{ \x27contact\x27|page }}\" class=\"th-btn th-icon\">Demander un devis</a>
                <a href=\"https://wa.me/2250757397423\" target=\"_blank\" class=\"th-btn style3 th-icon\">Nous écrire sur WhatsApp</a>
            </div>
        </div>
    </div>
</section>", "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/hotels-residences.htm", "");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["partial" => 1];
        static $filters = ["theme" => 5, "page" => 10];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "partial"],
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

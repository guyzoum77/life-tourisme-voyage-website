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

/* /Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/tourisme.htm */
class __TwigTemplate_5230b2c120d431308499e9d414a0fb75 extends Template
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
            <h1 class=\"breadcumb-title\">Tourisme national & international</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"";
        // line 10
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("accueil"), 10, $this->source);
        yield "\">Accueil</a></li>
                <li>Nos services</li>
                <li>Tourisme national & international</li>
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
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero_bg_1_1.jpg"), 28, $this->source);
        yield "\" alt=\"Tourisme national & international\">
                    </div>
                    <div class=\"page-content\">
                        <span class=\"sub-title\">Nos services</span>
                        <h2 class=\"box-title mt-2\">Tourisme national & international</h2>
                        <p class=\"sec-text mb-20 mt-3\"><strong>Des séjours et circuits sur mesure</strong>, en Côte d\x27Ivoire comme à l\x27étranger.</p>
                        <p class=\"sec-text mb-20\">Envie de découvrir Assinie, Grand-Bassam, Yamoussoukro ou l\x27Ouest montagneux ? Ou de partir plus loin, à Dubaï, au Maroc, en Europe ou en Asie ? Nous construisons avec vous un séjour qui correspond à vos envies, à vos dates et à votre budget.</p>
                        <p class=\"sec-text mb-20\">Transport, hébergement, excursions, guide, visa et assurance : nous organisons chaque détail pour que vous n\x27ayez plus qu\x27à profiter de votre voyage, seul, en couple, en famille ou en groupe.</p>
                        <h3 class=\"box-title mt-40 mb-20\">Ce que nous organisons</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Séjours détente et week-ends en Côte d\x27Ivoire</li>
                            <li>Circuits découverte à l\x27étranger</li>
                            <li>Voyages de noces et séjours romantiques</li>
                            <li>Voyages en famille, entre amis ou en groupe</li>
                            <li>Excursions et visites guidées</li>
                            <li>Séjours d\x27affaires et séminaires</li>
                            </ul>
                        </div>
                        <h3 class=\"box-title mt-40 mb-20\">Ce qui est inclus dans nos formules</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Un programme détaillé jour par jour</li>
                            <li>Les réservations de transport et d\x27hébergement</li>
                            <li>Les excursions et activités choisies</li>
                            <li>Une assistance joignable pendant tout le séjour</li>
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
            <h3 class=\"box-title mb-30\">Comment se déroule votre projet</h3>
            <div class=\"service-steps\">
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 68
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_1.svg"), 68, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">01</span>
                    </div>
                    <h5 class=\"service-step_title\">Vos envies</h5>
                    <p class=\"service-step_text\">Destination, dates, nombre de voyageurs, budget : nous faisons le point ensemble, en agence ou sur WhatsApp.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 76
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_2.svg"), 76, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">02</span>
                    </div>
                    <h5 class=\"service-step_title\">Notre proposition</h5>
                    <p class=\"service-step_text\">Nous vous envoyons un programme détaillé avec un devis clair, que nous ajustons avec vous.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 84
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_3.svg"), 84, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">03</span>
                    </div>
                    <h5 class=\"service-step_title\">Les réservations</h5>
                    <p class=\"service-step_text\">Vous validez : nous réservons transport, hébergement et activités, et vous remettons tous vos documents.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 92
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_1.svg"), 92, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">04</span>
                    </div>
                    <h5 class=\"service-step_title\">Bon voyage !</h5>
                    <p class=\"service-step_text\">Nous restons disponibles pendant votre séjour en cas de besoin, jusqu\x27à votre retour.</p>
                </div>
            </div>
        </div>
        <div class=\"service-faq-area\">
            <h3 class=\"box-title mb-30\">Questions fréquentes</h3>
            <div class=\"accordion\" id=\"faqTour\">
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqTour-h1\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqTour-c1\" aria-expanded=\"false\" aria-controls=\"faqTour-c1\">Organisez-vous des séjours en Côte d\x27Ivoire ?</button>
                </div>
                <div id=\"faqTour-c1\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqTour-h1\" data-bs-parent=\"#faqTour\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui. Assinie, Grand-Bassam, Yamoussoukro, San-Pédro, Man et bien d\x27autres : nous organisons des séjours et excursions partout dans le pays.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqTour-h2\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqTour-c2\" aria-expanded=\"false\" aria-controls=\"faqTour-c2\">Pouvez-vous organiser un voyage de groupe ?</button>
                </div>
                <div id=\"faqTour-c2\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqTour-h2\" data-bs-parent=\"#faqTour\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui. Familles, associations, entreprises ou groupes d\x27amis : nous adaptons le programme et négocions les conditions selon le nombre de voyageurs.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqTour-h3\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqTour-c3\" aria-expanded=\"false\" aria-controls=\"faqTour-c3\">Le visa est-il compris dans le séjour à l\x27étranger ?</button>
                </div>
                <div id=\"faqTour-c3\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqTour-h3\" data-bs-parent=\"#faqTour\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Nous pouvons prendre en charge votre dossier visa en même temps que le séjour. Les frais consulaires restent à part et sont indiqués clairement dans le devis.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqTour-h4\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqTour-c4\" aria-expanded=\"false\" aria-controls=\"faqTour-c4\">Puis-je personnaliser un circuit ?</button>
                </div>
                <div id=\"faqTour-c4\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqTour-h4\" data-bs-parent=\"#faqTour\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Bien sûr. Chaque programme est construit sur mesure : vous choisissez le rythme, les étapes, le type d\x27hébergement et les activités.</p>
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
        return "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/tourisme.htm";
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
            <h1 class=\"breadcumb-title\">Tourisme national & international</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"{{ \x27accueil\x27|page }}\">Accueil</a></li>
                <li>Nos services</li>
                <li>Tourisme national & international</li>
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
                        <img class=\"service-hero-img\" src=\"{{ \x27assets/img/hero/hero_bg_1_1.jpg\x27|theme }}\" alt=\"Tourisme national & international\">
                    </div>
                    <div class=\"page-content\">
                        <span class=\"sub-title\">Nos services</span>
                        <h2 class=\"box-title mt-2\">Tourisme national & international</h2>
                        <p class=\"sec-text mb-20 mt-3\"><strong>Des séjours et circuits sur mesure</strong>, en Côte d\x27Ivoire comme à l\x27étranger.</p>
                        <p class=\"sec-text mb-20\">Envie de découvrir Assinie, Grand-Bassam, Yamoussoukro ou l\x27Ouest montagneux ? Ou de partir plus loin, à Dubaï, au Maroc, en Europe ou en Asie ? Nous construisons avec vous un séjour qui correspond à vos envies, à vos dates et à votre budget.</p>
                        <p class=\"sec-text mb-20\">Transport, hébergement, excursions, guide, visa et assurance : nous organisons chaque détail pour que vous n\x27ayez plus qu\x27à profiter de votre voyage, seul, en couple, en famille ou en groupe.</p>
                        <h3 class=\"box-title mt-40 mb-20\">Ce que nous organisons</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Séjours détente et week-ends en Côte d\x27Ivoire</li>
                            <li>Circuits découverte à l\x27étranger</li>
                            <li>Voyages de noces et séjours romantiques</li>
                            <li>Voyages en famille, entre amis ou en groupe</li>
                            <li>Excursions et visites guidées</li>
                            <li>Séjours d\x27affaires et séminaires</li>
                            </ul>
                        </div>
                        <h3 class=\"box-title mt-40 mb-20\">Ce qui est inclus dans nos formules</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Un programme détaillé jour par jour</li>
                            <li>Les réservations de transport et d\x27hébergement</li>
                            <li>Les excursions et activités choisies</li>
                            <li>Une assistance joignable pendant tout le séjour</li>
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
            <h3 class=\"box-title mb-30\">Comment se déroule votre projet</h3>
            <div class=\"service-steps\">
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_1.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">01</span>
                    </div>
                    <h5 class=\"service-step_title\">Vos envies</h5>
                    <p class=\"service-step_text\">Destination, dates, nombre de voyageurs, budget : nous faisons le point ensemble, en agence ou sur WhatsApp.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_2.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">02</span>
                    </div>
                    <h5 class=\"service-step_title\">Notre proposition</h5>
                    <p class=\"service-step_text\">Nous vous envoyons un programme détaillé avec un devis clair, que nous ajustons avec vous.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_3.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">03</span>
                    </div>
                    <h5 class=\"service-step_title\">Les réservations</h5>
                    <p class=\"service-step_text\">Vous validez : nous réservons transport, hébergement et activités, et vous remettons tous vos documents.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_1.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">04</span>
                    </div>
                    <h5 class=\"service-step_title\">Bon voyage !</h5>
                    <p class=\"service-step_text\">Nous restons disponibles pendant votre séjour en cas de besoin, jusqu\x27à votre retour.</p>
                </div>
            </div>
        </div>
        <div class=\"service-faq-area\">
            <h3 class=\"box-title mb-30\">Questions fréquentes</h3>
            <div class=\"accordion\" id=\"faqTour\">
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqTour-h1\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqTour-c1\" aria-expanded=\"false\" aria-controls=\"faqTour-c1\">Organisez-vous des séjours en Côte d\x27Ivoire ?</button>
                </div>
                <div id=\"faqTour-c1\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqTour-h1\" data-bs-parent=\"#faqTour\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui. Assinie, Grand-Bassam, Yamoussoukro, San-Pédro, Man et bien d\x27autres : nous organisons des séjours et excursions partout dans le pays.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqTour-h2\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqTour-c2\" aria-expanded=\"false\" aria-controls=\"faqTour-c2\">Pouvez-vous organiser un voyage de groupe ?</button>
                </div>
                <div id=\"faqTour-c2\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqTour-h2\" data-bs-parent=\"#faqTour\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui. Familles, associations, entreprises ou groupes d\x27amis : nous adaptons le programme et négocions les conditions selon le nombre de voyageurs.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqTour-h3\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqTour-c3\" aria-expanded=\"false\" aria-controls=\"faqTour-c3\">Le visa est-il compris dans le séjour à l\x27étranger ?</button>
                </div>
                <div id=\"faqTour-c3\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqTour-h3\" data-bs-parent=\"#faqTour\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Nous pouvons prendre en charge votre dossier visa en même temps que le séjour. Les frais consulaires restent à part et sont indiqués clairement dans le devis.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqTour-h4\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqTour-c4\" aria-expanded=\"false\" aria-controls=\"faqTour-c4\">Puis-je personnaliser un circuit ?</button>
                </div>
                <div id=\"faqTour-c4\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqTour-h4\" data-bs-parent=\"#faqTour\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Bien sûr. Chaque programme est construit sur mesure : vous choisissez le rythme, les étapes, le type d\x27hébergement et les activités.</p>
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
</section>", "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/tourisme.htm", "");
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

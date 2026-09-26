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

/* /Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/assurance-voyage.htm */
class __TwigTemplate_c9379ad9528c6310397b89cfe4432793 extends Template
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
            <h1 class=\"breadcumb-title\">Assurance voyage</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"";
        // line 10
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("accueil"), 10, $this->source);
        yield "\">Accueil</a></li>
                <li>Nos services</li>
                <li>Assurance voyage</li>
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
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero_bg_3_3.jpg"), 28, $this->source);
        yield "\" alt=\"Assurance voyage\">
                    </div>
                    <div class=\"page-content\">
                        <span class=\"sub-title\">Nos services</span>
                        <h2 class=\"box-title mt-2\">Assurance voyage</h2>
                        <p class=\"sec-text mb-20 mt-3\"><strong>Voyagez l\x27esprit tranquille</strong>, avec une protection adaptée à votre séjour.</p>
                        <p class=\"sec-text mb-20\">Un problème de santé, un vol annulé ou un bagage perdu peuvent vite coûter très cher à l\x27étranger. L\x27assurance voyage vous protège contre ces imprévus et vous permet de voyager sereinement.</p>
                        <p class=\"sec-text mb-20\">Pour de nombreuses destinations, comme l\x27espace Schengen, l\x27assurance voyage est aussi obligatoire pour obtenir votre visa. Nous vous proposons une attestation conforme aux exigences du consulat, délivrée rapidement.</p>
                        <h3 class=\"box-title mt-40 mb-20\">Nos garanties</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Assurance médicale : frais médicaux et hospitalisation à l\x27étranger</li>
                            <li>Assurance annulation : remboursement en cas d\x27empêchement</li>
                            <li>Assurance bagages : perte, vol ou retard de vos bagages</li>
                            <li>Assurance rapatriement : retour organisé en cas de besoin</li>
                            <li>Attestation conforme pour votre dossier visa</li>
                            <li>Formules individuelles, famille, étudiant et groupe</li>
                            </ul>
                        </div>
                        <h3 class=\"box-title mt-40 mb-20\">Informations à nous communiquer</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Votre destination et les dates de votre voyage</li>
                            <li>Une copie de votre passeport</li>
                            <li>L\x27âge de chaque voyageur</li>
                            <li>Le motif du voyage : tourisme, études, affaires</li>
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
            <h3 class=\"box-title mb-30\">Comment souscrire votre assurance</h3>
            <div class=\"service-steps\">
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 68
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_1.svg"), 68, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">01</span>
                    </div>
                    <h5 class=\"service-step_title\">Votre voyage</h5>
                    <p class=\"service-step_text\">Destination, dates, voyageurs : nous faisons le point sur votre séjour et vos besoins.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 76
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_2.svg"), 76, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">02</span>
                    </div>
                    <h5 class=\"service-step_title\">La formule adaptée</h5>
                    <p class=\"service-step_text\">Nous vous proposons la couverture qui correspond à votre voyage et aux exigences du visa.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 84
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_3.svg"), 84, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">03</span>
                    </div>
                    <h5 class=\"service-step_title\">La souscription</h5>
                    <p class=\"service-step_text\">Vous validez, nous établissons le contrat et vous envoyons votre attestation.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 92
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_1.svg"), 92, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">04</span>
                    </div>
                    <h5 class=\"service-step_title\">L\x27assistance</h5>
                    <p class=\"service-step_text\">En cas de besoin pendant le voyage, nous vous indiquons les démarches à suivre.</p>
                </div>
            </div>
        </div>
        <div class=\"service-faq-area\">
            <h3 class=\"box-title mb-30\">Questions fréquentes</h3>
            <div class=\"accordion\" id=\"faqAssur\">
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqAssur-h1\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqAssur-c1\" aria-expanded=\"false\" aria-controls=\"faqAssur-c1\">L\x27assurance voyage est-elle obligatoire ?</button>
                </div>
                <div id=\"faqAssur-c1\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqAssur-h1\" data-bs-parent=\"#faqAssur\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Elle est obligatoire pour certains visas, notamment pour l\x27espace Schengen. Même lorsqu\x27elle ne l\x27est pas, elle est vivement recommandée.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqAssur-h2\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqAssur-c2\" aria-expanded=\"false\" aria-controls=\"faqAssur-c2\">Combien de temps faut-il pour obtenir l\x27attestation ?</button>
                </div>
                <div id=\"faqAssur-c2\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqAssur-h2\" data-bs-parent=\"#faqAssur\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">En général très rapidement, une fois les informations et les documents reçus. Nous vous donnons un délai précis au moment de la demande.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqAssur-h3\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqAssur-c3\" aria-expanded=\"false\" aria-controls=\"faqAssur-c3\">L\x27assurance couvre-t-elle toute la durée du séjour ?</button>
                </div>
                <div id=\"faqAssur-c3\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqAssur-h3\" data-bs-parent=\"#faqAssur\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui : la couverture est calculée sur les dates exactes de votre voyage. Pensez à nous prévenir si vos dates changent.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqAssur-h4\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqAssur-c4\" aria-expanded=\"false\" aria-controls=\"faqAssur-c4\">Proposez-vous des formules pour les étudiants ?</button>
                </div>
                <div id=\"faqAssur-c4\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqAssur-h4\" data-bs-parent=\"#faqAssur\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui. Nous proposons des formules adaptées aux séjours d\x27études, conformes aux exigences des consulats et des établissements.</p>
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
        return "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/assurance-voyage.htm";
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
            <h1 class=\"breadcumb-title\">Assurance voyage</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"{{ \x27accueil\x27|page }}\">Accueil</a></li>
                <li>Nos services</li>
                <li>Assurance voyage</li>
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
                        <img class=\"service-hero-img\" src=\"{{ \x27assets/img/hero/hero_bg_3_3.jpg\x27|theme }}\" alt=\"Assurance voyage\">
                    </div>
                    <div class=\"page-content\">
                        <span class=\"sub-title\">Nos services</span>
                        <h2 class=\"box-title mt-2\">Assurance voyage</h2>
                        <p class=\"sec-text mb-20 mt-3\"><strong>Voyagez l\x27esprit tranquille</strong>, avec une protection adaptée à votre séjour.</p>
                        <p class=\"sec-text mb-20\">Un problème de santé, un vol annulé ou un bagage perdu peuvent vite coûter très cher à l\x27étranger. L\x27assurance voyage vous protège contre ces imprévus et vous permet de voyager sereinement.</p>
                        <p class=\"sec-text mb-20\">Pour de nombreuses destinations, comme l\x27espace Schengen, l\x27assurance voyage est aussi obligatoire pour obtenir votre visa. Nous vous proposons une attestation conforme aux exigences du consulat, délivrée rapidement.</p>
                        <h3 class=\"box-title mt-40 mb-20\">Nos garanties</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Assurance médicale : frais médicaux et hospitalisation à l\x27étranger</li>
                            <li>Assurance annulation : remboursement en cas d\x27empêchement</li>
                            <li>Assurance bagages : perte, vol ou retard de vos bagages</li>
                            <li>Assurance rapatriement : retour organisé en cas de besoin</li>
                            <li>Attestation conforme pour votre dossier visa</li>
                            <li>Formules individuelles, famille, étudiant et groupe</li>
                            </ul>
                        </div>
                        <h3 class=\"box-title mt-40 mb-20\">Informations à nous communiquer</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Votre destination et les dates de votre voyage</li>
                            <li>Une copie de votre passeport</li>
                            <li>L\x27âge de chaque voyageur</li>
                            <li>Le motif du voyage : tourisme, études, affaires</li>
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
            <h3 class=\"box-title mb-30\">Comment souscrire votre assurance</h3>
            <div class=\"service-steps\">
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_1.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">01</span>
                    </div>
                    <h5 class=\"service-step_title\">Votre voyage</h5>
                    <p class=\"service-step_text\">Destination, dates, voyageurs : nous faisons le point sur votre séjour et vos besoins.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_2.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">02</span>
                    </div>
                    <h5 class=\"service-step_title\">La formule adaptée</h5>
                    <p class=\"service-step_text\">Nous vous proposons la couverture qui correspond à votre voyage et aux exigences du visa.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_3.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">03</span>
                    </div>
                    <h5 class=\"service-step_title\">La souscription</h5>
                    <p class=\"service-step_text\">Vous validez, nous établissons le contrat et vous envoyons votre attestation.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_1.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">04</span>
                    </div>
                    <h5 class=\"service-step_title\">L\x27assistance</h5>
                    <p class=\"service-step_text\">En cas de besoin pendant le voyage, nous vous indiquons les démarches à suivre.</p>
                </div>
            </div>
        </div>
        <div class=\"service-faq-area\">
            <h3 class=\"box-title mb-30\">Questions fréquentes</h3>
            <div class=\"accordion\" id=\"faqAssur\">
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqAssur-h1\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqAssur-c1\" aria-expanded=\"false\" aria-controls=\"faqAssur-c1\">L\x27assurance voyage est-elle obligatoire ?</button>
                </div>
                <div id=\"faqAssur-c1\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqAssur-h1\" data-bs-parent=\"#faqAssur\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Elle est obligatoire pour certains visas, notamment pour l\x27espace Schengen. Même lorsqu\x27elle ne l\x27est pas, elle est vivement recommandée.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqAssur-h2\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqAssur-c2\" aria-expanded=\"false\" aria-controls=\"faqAssur-c2\">Combien de temps faut-il pour obtenir l\x27attestation ?</button>
                </div>
                <div id=\"faqAssur-c2\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqAssur-h2\" data-bs-parent=\"#faqAssur\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">En général très rapidement, une fois les informations et les documents reçus. Nous vous donnons un délai précis au moment de la demande.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqAssur-h3\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqAssur-c3\" aria-expanded=\"false\" aria-controls=\"faqAssur-c3\">L\x27assurance couvre-t-elle toute la durée du séjour ?</button>
                </div>
                <div id=\"faqAssur-c3\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqAssur-h3\" data-bs-parent=\"#faqAssur\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui : la couverture est calculée sur les dates exactes de votre voyage. Pensez à nous prévenir si vos dates changent.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqAssur-h4\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqAssur-c4\" aria-expanded=\"false\" aria-controls=\"faqAssur-c4\">Proposez-vous des formules pour les étudiants ?</button>
                </div>
                <div id=\"faqAssur-c4\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqAssur-h4\" data-bs-parent=\"#faqAssur\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui. Nous proposons des formules adaptées aux séjours d\x27études, conformes aux exigences des consulats et des établissements.</p>
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
</section>", "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/assurance-voyage.htm", "");
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

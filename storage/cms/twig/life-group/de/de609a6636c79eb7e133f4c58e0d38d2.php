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

/* /Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/billetterie-vols.htm */
class __TwigTemplate_9bcdc5f2fa5a4df5fee5887553e9ee94 extends Template
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
            <h1 class=\"breadcumb-title\">Billetterie & vols</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"";
        // line 10
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("accueil"), 10, $this->source);
        yield "\">Accueil</a></li>
                <li>Nos services</li>
                <li>Billetterie & vols</li>
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
                    <div class=\"service-img global-img mb-40\">
                        <img class=\"w-100\" style=\"border-radius:16px\" src=\"";
        // line 27
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_inner_1.jpg"), 27, $this->source);
        yield "\" alt=\"Billetterie & vols\">
                    </div>
                    <div class=\"page-content\">
                        <span class=\"sub-title\">Nos services</span>
                        <h2 class=\"box-title mt-2\">Billetterie & vols</h2>
                        <p class=\"sec-text mb-20 mt-3\"><strong>Vos billets d\x27avion aux meilleurs tarifs</strong>, pour toutes les destinations.</p>
                        <p class=\"sec-text mb-20\">Au départ d\x27Abidjan ou de toute autre ville, nous comparons les compagnies aériennes et les itinéraires pour vous proposer le vol qui correspond à votre budget, à vos dates et à vos contraintes de bagages. Vous n\x27avez plus à passer des heures sur internet : un conseiller s\x27en charge pour vous.</p>
                        <p class=\"sec-text mb-20\">Voyage d\x27affaires, vacances en famille, départ pour les études ou déplacement de groupe : nous trouvons la meilleure option et vous accompagnons jusqu\x27à l\x27embarquement.</p>
                        <h3 class=\"box-title mt-40 mb-20\">Nos offres de billetterie</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Vols économiques : les meilleurs tarifs pour voyager malin</li>
                            <li>Classe affaires : confort et flexibilité pour vos déplacements professionnels</li>
                            <li>Voyages de groupe : familles, associations, pèlerinages, entreprises</li>
                            <li>Offres de dernière minute : des solutions même pour un départ urgent</li>
                            <li>Réservation de vol pour dossier visa</li>
                            <li>Modification et annulation selon les conditions du billet</li>
                            </ul>
                        </div>
                        <h3 class=\"box-title mt-40 mb-20\">Nos conseils avant de voyager</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Réservez tôt pour bénéficier des meilleurs tarifs, surtout en période de fêtes et de vacances</li>
                            <li>Vérifiez la validité de votre passeport et les exigences de visa de votre destination</li>
                            <li>Consultez la franchise bagages de votre billet avant de faire votre valise</li>
                            <li>Pensez à l\x27assurance voyage : nous pouvons l\x27ajouter à votre réservation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xxl-4 col-lg-5\">
                ";
        // line 59
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['visuel'] = "assets/img/life-voyage/IMG_6885.jpeg"        ;
        $context['__cms_partial_params']['visuel_titre'] = "Life Voyages & Tourisme"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("service-sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 60
        yield "            </div>
        </div>
        <div class=\"service-steps-area\">
            <h3 class=\"box-title mb-30\">Comment réserver votre billet</h3>
            <div class=\"service-steps\">
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 67
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_1.svg"), 67, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">01</span>
                    </div>
                    <h5 class=\"service-step_title\">Votre demande</h5>
                    <p class=\"service-step_text\">Indiquez-nous la destination, les dates et le nombre de voyageurs, en agence ou sur WhatsApp.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 75
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_2.svg"), 75, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">02</span>
                    </div>
                    <h5 class=\"service-step_title\">Nos propositions</h5>
                    <p class=\"service-step_text\">Nous vous envoyons plusieurs options avec les prix, les horaires et les conditions de bagages.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 83
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_3.svg"), 83, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">03</span>
                    </div>
                    <h5 class=\"service-step_title\">Émission du billet</h5>
                    <p class=\"service-step_text\">Vous validez, nous émettons votre billet et vous l\x27envoyons par email ou WhatsApp.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 91
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_1.svg"), 91, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">04</span>
                    </div>
                    <h5 class=\"service-step_title\">Suivi jusqu\x27au départ</h5>
                    <p class=\"service-step_text\">Nous restons disponibles en cas de changement de programme ou de question avant le vol.</p>
                </div>
            </div>
        </div>
        <div class=\"service-faq-area\">
            <h3 class=\"box-title mb-30\">Questions fréquentes</h3>
            <div class=\"accordion\" id=\"faqVols\">
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqVols-h1\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqVols-c1\" aria-expanded=\"false\" aria-controls=\"faqVols-c1\">Puis-je réserver un billet sans avoir encore mon visa ?</button>
                </div>
                <div id=\"faqVols-c1\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqVols-h1\" data-bs-parent=\"#faqVols\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui. Pour votre dossier visa, nous pouvons fournir une réservation de vol, puis émettre le billet définitif une fois le visa obtenu.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqVols-h2\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqVols-c2\" aria-expanded=\"false\" aria-controls=\"faqVols-c2\">Proposez-vous des tarifs pour les groupes ?</button>
                </div>
                <div id=\"faqVols-c2\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqVols-h2\" data-bs-parent=\"#faqVols\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui. Pour les familles, associations, entreprises ou pèlerinages, nous négocions des conditions adaptées au nombre de voyageurs.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqVols-h3\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqVols-c3\" aria-expanded=\"false\" aria-controls=\"faqVols-c3\">Comment puis-je payer mon billet ?</button>
                </div>
                <div id=\"faqVols-c3\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqVols-h3\" data-bs-parent=\"#faqVols\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">En agence ou à distance, selon les moyens de paiement acceptés par l\x27agence. Nous vous les précisons avec votre devis.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqVols-h4\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqVols-c4\" aria-expanded=\"false\" aria-controls=\"faqVols-c4\">Que se passe-t-il si je dois changer mes dates ?</button>
                </div>
                <div id=\"faqVols-c4\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqVols-h4\" data-bs-parent=\"#faqVols\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Cela dépend des conditions de votre billet. Contactez-nous au plus vite : nous nous occupons de la modification auprès de la compagnie.</p>
                    </div>
                </div>
            </div>
            </div>
            <div class=\"d-flex flex-wrap justify-content-center gap-3 mt-50\">
                <a href=\"";
        // line 144
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("contact"), 144, $this->source);
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
        return "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/billetterie-vols.htm";
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
        return array (  220 => 144,  164 => 91,  153 => 83,  142 => 75,  131 => 67,  122 => 60,  116 => 59,  81 => 27,  61 => 10,  53 => 5,  48 => 2,  44 => 1,);
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
            <h1 class=\"breadcumb-title\">Billetterie & vols</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"{{ \x27accueil\x27|page }}\">Accueil</a></li>
                <li>Nos services</li>
                <li>Billetterie & vols</li>
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
                    <div class=\"service-img global-img mb-40\">
                        <img class=\"w-100\" style=\"border-radius:16px\" src=\"{{ \x27assets/img/tour/tour_inner_1.jpg\x27|theme }}\" alt=\"Billetterie & vols\">
                    </div>
                    <div class=\"page-content\">
                        <span class=\"sub-title\">Nos services</span>
                        <h2 class=\"box-title mt-2\">Billetterie & vols</h2>
                        <p class=\"sec-text mb-20 mt-3\"><strong>Vos billets d\x27avion aux meilleurs tarifs</strong>, pour toutes les destinations.</p>
                        <p class=\"sec-text mb-20\">Au départ d\x27Abidjan ou de toute autre ville, nous comparons les compagnies aériennes et les itinéraires pour vous proposer le vol qui correspond à votre budget, à vos dates et à vos contraintes de bagages. Vous n\x27avez plus à passer des heures sur internet : un conseiller s\x27en charge pour vous.</p>
                        <p class=\"sec-text mb-20\">Voyage d\x27affaires, vacances en famille, départ pour les études ou déplacement de groupe : nous trouvons la meilleure option et vous accompagnons jusqu\x27à l\x27embarquement.</p>
                        <h3 class=\"box-title mt-40 mb-20\">Nos offres de billetterie</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Vols économiques : les meilleurs tarifs pour voyager malin</li>
                            <li>Classe affaires : confort et flexibilité pour vos déplacements professionnels</li>
                            <li>Voyages de groupe : familles, associations, pèlerinages, entreprises</li>
                            <li>Offres de dernière minute : des solutions même pour un départ urgent</li>
                            <li>Réservation de vol pour dossier visa</li>
                            <li>Modification et annulation selon les conditions du billet</li>
                            </ul>
                        </div>
                        <h3 class=\"box-title mt-40 mb-20\">Nos conseils avant de voyager</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Réservez tôt pour bénéficier des meilleurs tarifs, surtout en période de fêtes et de vacances</li>
                            <li>Vérifiez la validité de votre passeport et les exigences de visa de votre destination</li>
                            <li>Consultez la franchise bagages de votre billet avant de faire votre valise</li>
                            <li>Pensez à l\x27assurance voyage : nous pouvons l\x27ajouter à votre réservation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xxl-4 col-lg-5\">
                {% partial \x27service-sidebar\x27 visuel=\"assets/img/life-voyage/IMG_6885.jpeg\" visuel_titre=\"Life Voyages & Tourisme\" %}
            </div>
        </div>
        <div class=\"service-steps-area\">
            <h3 class=\"box-title mb-30\">Comment réserver votre billet</h3>
            <div class=\"service-steps\">
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_1.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">01</span>
                    </div>
                    <h5 class=\"service-step_title\">Votre demande</h5>
                    <p class=\"service-step_text\">Indiquez-nous la destination, les dates et le nombre de voyageurs, en agence ou sur WhatsApp.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_2.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">02</span>
                    </div>
                    <h5 class=\"service-step_title\">Nos propositions</h5>
                    <p class=\"service-step_text\">Nous vous envoyons plusieurs options avec les prix, les horaires et les conditions de bagages.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_3.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">03</span>
                    </div>
                    <h5 class=\"service-step_title\">Émission du billet</h5>
                    <p class=\"service-step_text\">Vous validez, nous émettons votre billet et vous l\x27envoyons par email ou WhatsApp.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_1.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">04</span>
                    </div>
                    <h5 class=\"service-step_title\">Suivi jusqu\x27au départ</h5>
                    <p class=\"service-step_text\">Nous restons disponibles en cas de changement de programme ou de question avant le vol.</p>
                </div>
            </div>
        </div>
        <div class=\"service-faq-area\">
            <h3 class=\"box-title mb-30\">Questions fréquentes</h3>
            <div class=\"accordion\" id=\"faqVols\">
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqVols-h1\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqVols-c1\" aria-expanded=\"false\" aria-controls=\"faqVols-c1\">Puis-je réserver un billet sans avoir encore mon visa ?</button>
                </div>
                <div id=\"faqVols-c1\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqVols-h1\" data-bs-parent=\"#faqVols\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui. Pour votre dossier visa, nous pouvons fournir une réservation de vol, puis émettre le billet définitif une fois le visa obtenu.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqVols-h2\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqVols-c2\" aria-expanded=\"false\" aria-controls=\"faqVols-c2\">Proposez-vous des tarifs pour les groupes ?</button>
                </div>
                <div id=\"faqVols-c2\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqVols-h2\" data-bs-parent=\"#faqVols\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui. Pour les familles, associations, entreprises ou pèlerinages, nous négocions des conditions adaptées au nombre de voyageurs.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqVols-h3\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqVols-c3\" aria-expanded=\"false\" aria-controls=\"faqVols-c3\">Comment puis-je payer mon billet ?</button>
                </div>
                <div id=\"faqVols-c3\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqVols-h3\" data-bs-parent=\"#faqVols\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">En agence ou à distance, selon les moyens de paiement acceptés par l\x27agence. Nous vous les précisons avec votre devis.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqVols-h4\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqVols-c4\" aria-expanded=\"false\" aria-controls=\"faqVols-c4\">Que se passe-t-il si je dois changer mes dates ?</button>
                </div>
                <div id=\"faqVols-c4\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqVols-h4\" data-bs-parent=\"#faqVols\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Cela dépend des conditions de votre billet. Contactez-nous au plus vite : nous nous occupons de la modification auprès de la compagnie.</p>
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
</section>", "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/billetterie-vols.htm", "");
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

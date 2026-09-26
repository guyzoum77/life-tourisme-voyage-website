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

/* /Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/vehicules.htm */
class __TwigTemplate_889e4882dec71a986c2a5a42d42d28f9 extends Template
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
            <h1 class=\"breadcumb-title\">Vente & location de véhicules</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"";
        // line 10
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("accueil"), 10, $this->source);
        yield "\">Accueil</a></li>
                <li>Nos services</li>
                <li>Vente & location de véhicules</li>
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
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/blog_1_1.jpg"), 28, $this->source);
        yield "\" alt=\"Vente & location de véhicules\">
                    </div>
                    <div class=\"page-content\">
                        <span class=\"sub-title\">Nos services</span>
                        <h2 class=\"box-title mt-2\">Vente & location de véhicules</h2>
                        <p class=\"sec-text mb-20 mt-3\"><strong>Le bon véhicule pour chaque déplacement</strong>, à l\x27achat comme à la location.</p>
                        <p class=\"sec-text mb-20\">Besoin d\x27une voiture pour un week-end, d\x27un 4x4 pour un voyage à l\x27intérieur du pays ou d\x27un minibus pour un groupe ? Nous vous proposons des véhicules adaptés à votre trajet et à votre budget.</p>
                        <p class=\"sec-text mb-20\">Vous souhaitez acheter un véhicule ? Nous vous accompagnons dans la recherche, la vérification et les démarches, pour un achat en toute confiance.</p>
                        <h3 class=\"box-title mt-40 mb-20\">Nos solutions</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Location de voitures pour vos déplacements en ville</li>
                            <li>Location de 4x4 pour les trajets à l\x27intérieur du pays</li>
                            <li>Location de minibus pour les groupes et événements</li>
                            <li>Location courte ou longue durée</li>
                            <li>Accompagnement à l\x27achat de véhicule</li>
                            <li>Transferts aéroport</li>
                            </ul>
                        </div>
                        <h3 class=\"box-title mt-40 mb-20\">Documents à prévoir pour une location</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Pièce d\x27identité ou passeport en cours de validité</li>
                            <li>Permis de conduire valide</li>
                            <li>Justificatif de domicile</li>
                            <li>Caution, selon le véhicule et la durée</li>
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
            <h3 class=\"box-title mb-30\">Comment louer votre véhicule</h3>
            <div class=\"service-steps\">
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 68
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_1.svg"), 68, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">01</span>
                    </div>
                    <h5 class=\"service-step_title\">Votre besoin</h5>
                    <p class=\"service-step_text\">Dates, trajet, nombre de passagers : dites-nous ce qu\x27il vous faut, en agence ou sur WhatsApp.</p>
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
                    <p class=\"service-step_text\">Nous vous proposons les véhicules disponibles avec le tarif et les conditions de location.</p>
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
                    <p class=\"service-step_text\">Vous validez, nous préparons le contrat et fixons avec vous le lieu et l\x27heure de remise du véhicule.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 92
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_1.svg"), 92, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">04</span>
                    </div>
                    <h5 class=\"service-step_title\">La remise des clés</h5>
                    <p class=\"service-step_text\">Le véhicule vous est remis propre et vérifié, et nous restons joignables pendant toute la location.</p>
                </div>
            </div>
        </div>
        <div class=\"service-faq-area\">
            <h3 class=\"box-title mb-30\">Questions fréquentes</h3>
            <div class=\"accordion\" id=\"faqAuto\">
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqAuto-h1\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqAuto-c1\" aria-expanded=\"false\" aria-controls=\"faqAuto-c1\">Quelle est la durée minimale de location ?</button>
                </div>
                <div id=\"faqAuto-c1\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqAuto-h1\" data-bs-parent=\"#faqAuto\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Nous proposons des locations à partir d\x27une journée, ainsi que des formules à la semaine ou au mois. Contactez-nous pour connaître les disponibilités.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqAuto-h2\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqAuto-c2\" aria-expanded=\"false\" aria-controls=\"faqAuto-c2\">Le véhicule peut-il être livré ?</button>
                </div>
                <div id=\"faqAuto-c2\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqAuto-h2\" data-bs-parent=\"#faqAuto\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Selon le véhicule et le lieu, la remise peut se faire en agence, à votre domicile ou à l\x27aéroport. Nous vous l\x27indiquons avec le devis.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqAuto-h3\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqAuto-c3\" aria-expanded=\"false\" aria-controls=\"faqAuto-c3\">Puis-je partir à l\x27intérieur du pays ?</button>
                </div>
                <div id=\"faqAuto-c3\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqAuto-h3\" data-bs-parent=\"#faqAuto\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui, à condition de le préciser à la réservation : nous vous orientons vers un véhicule adapté à la route, comme un 4x4.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqAuto-h4\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqAuto-c4\" aria-expanded=\"false\" aria-controls=\"faqAuto-c4\">Comment se passe l\x27achat d\x27un véhicule ?</button>
                </div>
                <div id=\"faqAuto-c4\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqAuto-h4\" data-bs-parent=\"#faqAuto\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Nous recherchons avec vous le véhicule qui correspond à votre budget, vérifions son état et ses papiers, et vous accompagnons dans les démarches.</p>
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
        return "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/vehicules.htm";
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
            <h1 class=\"breadcumb-title\">Vente & location de véhicules</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"{{ \x27accueil\x27|page }}\">Accueil</a></li>
                <li>Nos services</li>
                <li>Vente & location de véhicules</li>
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
                        <img class=\"service-hero-img\" src=\"{{ \x27assets/img/blog/blog_1_1.jpg\x27|theme }}\" alt=\"Vente & location de véhicules\">
                    </div>
                    <div class=\"page-content\">
                        <span class=\"sub-title\">Nos services</span>
                        <h2 class=\"box-title mt-2\">Vente & location de véhicules</h2>
                        <p class=\"sec-text mb-20 mt-3\"><strong>Le bon véhicule pour chaque déplacement</strong>, à l\x27achat comme à la location.</p>
                        <p class=\"sec-text mb-20\">Besoin d\x27une voiture pour un week-end, d\x27un 4x4 pour un voyage à l\x27intérieur du pays ou d\x27un minibus pour un groupe ? Nous vous proposons des véhicules adaptés à votre trajet et à votre budget.</p>
                        <p class=\"sec-text mb-20\">Vous souhaitez acheter un véhicule ? Nous vous accompagnons dans la recherche, la vérification et les démarches, pour un achat en toute confiance.</p>
                        <h3 class=\"box-title mt-40 mb-20\">Nos solutions</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Location de voitures pour vos déplacements en ville</li>
                            <li>Location de 4x4 pour les trajets à l\x27intérieur du pays</li>
                            <li>Location de minibus pour les groupes et événements</li>
                            <li>Location courte ou longue durée</li>
                            <li>Accompagnement à l\x27achat de véhicule</li>
                            <li>Transferts aéroport</li>
                            </ul>
                        </div>
                        <h3 class=\"box-title mt-40 mb-20\">Documents à prévoir pour une location</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Pièce d\x27identité ou passeport en cours de validité</li>
                            <li>Permis de conduire valide</li>
                            <li>Justificatif de domicile</li>
                            <li>Caution, selon le véhicule et la durée</li>
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
            <h3 class=\"box-title mb-30\">Comment louer votre véhicule</h3>
            <div class=\"service-steps\">
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_1.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">01</span>
                    </div>
                    <h5 class=\"service-step_title\">Votre besoin</h5>
                    <p class=\"service-step_text\">Dates, trajet, nombre de passagers : dites-nous ce qu\x27il vous faut, en agence ou sur WhatsApp.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_2.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">02</span>
                    </div>
                    <h5 class=\"service-step_title\">Notre proposition</h5>
                    <p class=\"service-step_text\">Nous vous proposons les véhicules disponibles avec le tarif et les conditions de location.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_3.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">03</span>
                    </div>
                    <h5 class=\"service-step_title\">La réservation</h5>
                    <p class=\"service-step_text\">Vous validez, nous préparons le contrat et fixons avec vous le lieu et l\x27heure de remise du véhicule.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_1.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">04</span>
                    </div>
                    <h5 class=\"service-step_title\">La remise des clés</h5>
                    <p class=\"service-step_text\">Le véhicule vous est remis propre et vérifié, et nous restons joignables pendant toute la location.</p>
                </div>
            </div>
        </div>
        <div class=\"service-faq-area\">
            <h3 class=\"box-title mb-30\">Questions fréquentes</h3>
            <div class=\"accordion\" id=\"faqAuto\">
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqAuto-h1\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqAuto-c1\" aria-expanded=\"false\" aria-controls=\"faqAuto-c1\">Quelle est la durée minimale de location ?</button>
                </div>
                <div id=\"faqAuto-c1\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqAuto-h1\" data-bs-parent=\"#faqAuto\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Nous proposons des locations à partir d\x27une journée, ainsi que des formules à la semaine ou au mois. Contactez-nous pour connaître les disponibilités.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqAuto-h2\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqAuto-c2\" aria-expanded=\"false\" aria-controls=\"faqAuto-c2\">Le véhicule peut-il être livré ?</button>
                </div>
                <div id=\"faqAuto-c2\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqAuto-h2\" data-bs-parent=\"#faqAuto\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Selon le véhicule et le lieu, la remise peut se faire en agence, à votre domicile ou à l\x27aéroport. Nous vous l\x27indiquons avec le devis.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqAuto-h3\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqAuto-c3\" aria-expanded=\"false\" aria-controls=\"faqAuto-c3\">Puis-je partir à l\x27intérieur du pays ?</button>
                </div>
                <div id=\"faqAuto-c3\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqAuto-h3\" data-bs-parent=\"#faqAuto\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui, à condition de le préciser à la réservation : nous vous orientons vers un véhicule adapté à la route, comme un 4x4.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqAuto-h4\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqAuto-c4\" aria-expanded=\"false\" aria-controls=\"faqAuto-c4\">Comment se passe l\x27achat d\x27un véhicule ?</button>
                </div>
                <div id=\"faqAuto-c4\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqAuto-h4\" data-bs-parent=\"#faqAuto\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Nous recherchons avec vous le véhicule qui correspond à votre budget, vérifions son état et ses papiers, et vous accompagnons dans les démarches.</p>
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
</section>", "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/vehicules.htm", "");
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

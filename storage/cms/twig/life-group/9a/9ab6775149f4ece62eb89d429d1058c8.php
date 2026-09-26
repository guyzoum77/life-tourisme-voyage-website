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

/* /Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/accompagnement-visa.htm */
class __TwigTemplate_3d7ea4b7d8cf2194144a06369e0d7ea2 extends Template
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
            <h1 class=\"breadcumb-title\">Accompagnement visa</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"";
        // line 10
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("accueil"), 10, $this->source);
        yield "\">Accueil</a></li>
                <li>Nos services</li>
                <li>Accompagnement visa</li>
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
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/destination/destination-details.jpg"), 27, $this->source);
        yield "\" alt=\"Accompagnement visa\">
                    </div>
                    <div class=\"page-content\">
                        <span class=\"sub-title\">Nos services</span>
                        <h2 class=\"box-title mt-2\">Accompagnement visa</h2>
                        <p class=\"sec-text mb-20 mt-3\"><strong>Traitement rapide de vos dossiers visa</strong>, pour tous pays.</p>
                        <p class=\"sec-text mb-20\">Un visa refusé à cause d\x27une pièce manquante ou mal présentée, c\x27est du temps et de l\x27argent perdus. Chez Life Voyages & Tourisme, nous vous aidons à constituer un dossier complet, cohérent et conforme aux exigences du consulat, que vous partiez pour du tourisme, une visite familiale, des études ou des affaires.</p>
                        <p class=\"sec-text mb-20\">Nous accompagnons les demandes pour la France et l\x27espace Schengen, le Royaume-Uni, le Canada, les États-Unis, Dubaï, ainsi que de nombreux pays d\x27Afrique et d\x27Asie. La décision finale appartient toujours à l\x27ambassade : notre rôle est de mettre toutes les chances de votre côté.</p>
                        <h3 class=\"box-title visa-dest-heading mb-20\">Les destinations que nous traitons</h3>
                        <div class=\"visa-dest-grid mb-30\">
                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["img" => "IMG_6890.jpeg", "titre" => "France", "texte" => "Visa touriste, visite familiale, affaires"], ["img" => "IMG_6888.jpeg", "titre" => "Études en France", "texte" => "Procédure Campus France et visa étudiant"], ["img" => "IMG_6887.jpeg", "titre" => "Royaume-Uni", "texte" => "Visa visiteur"], ["img" => "IMG_6886.jpeg", "titre" => "Canada", "texte" => "Visa visiteur et permis d\x27études"], ["img" => "IMG_6889.jpeg", "titre" => "États-Unis", "texte" => "Visa touristique et visa étudiant"], ["img" => "215ecbfd-d79d-4877-a55c-b48a4c9f285f.jpeg", "titre" => "Maroc & autres", "texte" => "Dubaï, Afrique, Chine, Turquie…"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 45
            yield "                            <a href=\"";
            yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("contact"), 45, $this->source);
            yield "\" class=\"visa-dest\">
                                <img class=\"visa-dest_img\" src=\"";
            // line 46
            yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter(("assets/img/life-voyage/" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["d"], "img", [], "any", false, false, true, 46), 46, $this->source))), 46, $this->source);
            yield "\" alt=\"";
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["d"], "titre", [], "any", false, false, true, 46), 46, $this->source), "html", null, true), 46, $this->source);
            yield "\">
                                <span class=\"visa-dest_arrow\"><i class=\"fa-solid fa-arrow-up-right\"></i></span>
                                <span class=\"visa-dest_body\">
                                    <span class=\"visa-dest_title\">";
            // line 49
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["d"], "titre", [], "any", false, false, true, 49), 49, $this->source), "html", null, true), 49, $this->source);
            yield "</span>
                                    <span class=\"visa-dest_text\">";
            // line 50
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["d"], "texte", [], "any", false, false, true, 50), 50, $this->source), "html", null, true), 50, $this->source);
            yield "</span>
                                    <span class=\"visa-dest_cta\">Constituer mon dossier</span>
                                </span>
                            </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['d'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 55
        yield "                        </div>
                        <h3 class=\"box-title mt-40 mb-20\">Ce que comprend notre accompagnement</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Étude de votre profil et du motif de votre voyage</li>
                            <li>Liste personnalisée des documents à fournir</li>
                            <li>Vérification de chaque pièce du dossier</li>
                            <li>Remplissage des formulaires en ligne</li>
                            <li>Prise de rendez-vous au consulat ou au centre de visa</li>
                            <li>Réservation de vol et d\x27hôtel pour le dossier</li>
                            <li>Assurance voyage conforme aux exigences</li>
                            <li>Préparation à l\x27entretien et suivi jusqu\x27à la réponse</li>
                            </ul>
                        </div>
                        <h3 class=\"box-title mt-40 mb-20\">Documents généralement demandés</h3>
                        <p class=\"sec-text mb-20\">À titre indicatif, pour un visa court séjour (tourisme ou visite familiale). La liste exacte dépend du pays, du type de visa et de votre situation : nous la vérifions avec vous avant tout dépôt.</p>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Passeport en cours de validité, avec des pages vierges</li>
                            <li>Formulaire de demande et photos d\x27identité récentes</li>
                            <li>Réservation de vol aller-retour et justificatif d\x27hébergement</li>
                            <li>Assurance voyage (obligatoire pour l\x27espace Schengen)</li>
                            <li>Relevés bancaires récents et justificatifs de revenus</li>
                            <li>Attestation de travail et de congé, ou justificatifs d\x27activité</li>
                            <li>Pour les études : attestation d\x27admission ou d\x27inscription</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xxl-4 col-lg-5\">
                ";
        // line 86
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['visuel'] = "assets/img/life-voyage/IMG_6884.jpeg"        ;
        $context['__cms_partial_params']['visuel_titre'] = "Nos services en un coup d\x27œil"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("service-sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 87
        yield "            </div>
        </div>
        <div class=\"service-steps-area\">
            <h3 class=\"box-title mb-30\">Comment se déroule votre demande</h3>
            <div class=\"service-steps\">
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 94
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_1.svg"), 94, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">01</span>
                    </div>
                    <h5 class=\"service-step_title\">Premier échange</h5>
                    <p class=\"service-step_text\">En agence à Grand-Bassam ou sur WhatsApp, nous étudions votre projet : destination, motif, dates et situation.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 102
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_2.svg"), 102, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">02</span>
                    </div>
                    <h5 class=\"service-step_title\">Liste des pièces</h5>
                    <p class=\"service-step_text\">Vous recevez la liste exacte des documents à réunir pour votre cas, avec nos conseils pour chacun.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 110
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_3.svg"), 110, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">03</span>
                    </div>
                    <h5 class=\"service-step_title\">Montage du dossier</h5>
                    <p class=\"service-step_text\">Nous vérifions vos pièces, remplissons les formulaires et prenons votre rendez-vous.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"";
        // line 118
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_1.svg"), 118, $this->source);
        yield "\" alt=\"\"></span>
                        <span class=\"service-step_num\">04</span>
                    </div>
                    <h5 class=\"service-step_title\">Dépôt et suivi</h5>
                    <p class=\"service-step_text\">Nous vous préparons au rendez-vous et suivons votre demande jusqu\x27à la réponse du consulat.</p>
                </div>
            </div>
        </div>
        <div class=\"service-faq-area\">
            <h3 class=\"box-title mb-30\">Questions fréquentes</h3>
            <div class=\"accordion\" id=\"faqVisa\">
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqVisa-h1\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqVisa-c1\" aria-expanded=\"false\" aria-controls=\"faqVisa-c1\">Pouvez-vous garantir l\x27obtention de mon visa ?</button>
                </div>
                <div id=\"faqVisa-c1\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqVisa-h1\" data-bs-parent=\"#faqVisa\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Non. La décision appartient uniquement au consulat ou à l\x27ambassade. Notre rôle est de vous aider à déposer un dossier complet et bien présenté, ce qui évite les refus liés à des pièces manquantes ou mal préparées.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqVisa-h2\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqVisa-c2\" aria-expanded=\"false\" aria-controls=\"faqVisa-c2\">Combien de temps à l\x27avance dois-je commencer ?</button>
                </div>
                <div id=\"faqVisa-c2\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqVisa-h2\" data-bs-parent=\"#faqVisa\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Cela dépend du pays et de la période. Pour un visa Schengen, prévoyez idéalement 1 à 2 mois avant le départ. Nous vous donnons un délai précis dès le premier échange.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqVisa-h3\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqVisa-c3\" aria-expanded=\"false\" aria-controls=\"faqVisa-c3\">Les frais consulaires sont-ils compris dans vos tarifs ?</button>
                </div>
                <div id=\"faqVisa-c3\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqVisa-h3\" data-bs-parent=\"#faqVisa\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Les frais de visa sont fixés par chaque pays et payés à part. Notre devis distingue clairement nos honoraires et les frais officiels.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqVisa-h4\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqVisa-c4\" aria-expanded=\"false\" aria-controls=\"faqVisa-c4\">Puis-je faire toute la démarche à distance ?</button>
                </div>
                <div id=\"faqVisa-c4\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqVisa-h4\" data-bs-parent=\"#faqVisa\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui, en grande partie : les échanges et l\x27envoi des documents peuvent se faire par WhatsApp ou par email. Certaines étapes, comme la prise d\x27empreintes, se font en personne au centre de visa.</p>
                    </div>
                </div>
            </div>
            </div>
            <div class=\"d-flex flex-wrap justify-content-center gap-3 mt-50\">
                <a href=\"";
        // line 171
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("contact"), 171, $this->source);
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
        return "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/accompagnement-visa.htm";
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
        return array (  264 => 171,  208 => 118,  197 => 110,  186 => 102,  175 => 94,  166 => 87,  160 => 86,  127 => 55,  115 => 50,  111 => 49,  103 => 46,  98 => 45,  94 => 37,  81 => 27,  61 => 10,  53 => 5,  48 => 2,  44 => 1,);
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
            <h1 class=\"breadcumb-title\">Accompagnement visa</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"{{ \x27accueil\x27|page }}\">Accueil</a></li>
                <li>Nos services</li>
                <li>Accompagnement visa</li>
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
                        <img class=\"w-100\" style=\"border-radius:16px\" src=\"{{ \x27assets/img/destination/destination-details.jpg\x27|theme }}\" alt=\"Accompagnement visa\">
                    </div>
                    <div class=\"page-content\">
                        <span class=\"sub-title\">Nos services</span>
                        <h2 class=\"box-title mt-2\">Accompagnement visa</h2>
                        <p class=\"sec-text mb-20 mt-3\"><strong>Traitement rapide de vos dossiers visa</strong>, pour tous pays.</p>
                        <p class=\"sec-text mb-20\">Un visa refusé à cause d\x27une pièce manquante ou mal présentée, c\x27est du temps et de l\x27argent perdus. Chez Life Voyages & Tourisme, nous vous aidons à constituer un dossier complet, cohérent et conforme aux exigences du consulat, que vous partiez pour du tourisme, une visite familiale, des études ou des affaires.</p>
                        <p class=\"sec-text mb-20\">Nous accompagnons les demandes pour la France et l\x27espace Schengen, le Royaume-Uni, le Canada, les États-Unis, Dubaï, ainsi que de nombreux pays d\x27Afrique et d\x27Asie. La décision finale appartient toujours à l\x27ambassade : notre rôle est de mettre toutes les chances de votre côté.</p>
                        <h3 class=\"box-title visa-dest-heading mb-20\">Les destinations que nous traitons</h3>
                        <div class=\"visa-dest-grid mb-30\">
                            {% for d in [
                                {\x27img\x27: \x27IMG_6890.jpeg\x27, \x27titre\x27: \x27France\x27, \x27texte\x27: \x27Visa touriste, visite familiale, affaires\x27},
                                {\x27img\x27: \x27IMG_6888.jpeg\x27, \x27titre\x27: \x27Études en France\x27, \x27texte\x27: \x27Procédure Campus France et visa étudiant\x27},
                                {\x27img\x27: \x27IMG_6887.jpeg\x27, \x27titre\x27: \x27Royaume-Uni\x27, \x27texte\x27: \x27Visa visiteur\x27},
                                {\x27img\x27: \x27IMG_6886.jpeg\x27, \x27titre\x27: \x27Canada\x27, \x27texte\x27: \"Visa visiteur et permis d\x27études\"},
                                {\x27img\x27: \x27IMG_6889.jpeg\x27, \x27titre\x27: \x27États-Unis\x27, \x27texte\x27: \x27Visa touristique et visa étudiant\x27},
                                {\x27img\x27: \x27215ecbfd-d79d-4877-a55c-b48a4c9f285f.jpeg\x27, \x27titre\x27: \x27Maroc & autres\x27, \x27texte\x27: \x27Dubaï, Afrique, Chine, Turquie…\x27}
                            ] %}
                            <a href=\"{{ \x27contact\x27|page }}\" class=\"visa-dest\">
                                <img class=\"visa-dest_img\" src=\"{{ (\x27assets/img/life-voyage/\x27 ~ d.img)|theme }}\" alt=\"{{ d.titre }}\">
                                <span class=\"visa-dest_arrow\"><i class=\"fa-solid fa-arrow-up-right\"></i></span>
                                <span class=\"visa-dest_body\">
                                    <span class=\"visa-dest_title\">{{ d.titre }}</span>
                                    <span class=\"visa-dest_text\">{{ d.texte }}</span>
                                    <span class=\"visa-dest_cta\">Constituer mon dossier</span>
                                </span>
                            </a>
                            {% endfor %}
                        </div>
                        <h3 class=\"box-title mt-40 mb-20\">Ce que comprend notre accompagnement</h3>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Étude de votre profil et du motif de votre voyage</li>
                            <li>Liste personnalisée des documents à fournir</li>
                            <li>Vérification de chaque pièce du dossier</li>
                            <li>Remplissage des formulaires en ligne</li>
                            <li>Prise de rendez-vous au consulat ou au centre de visa</li>
                            <li>Réservation de vol et d\x27hôtel pour le dossier</li>
                            <li>Assurance voyage conforme aux exigences</li>
                            <li>Préparation à l\x27entretien et suivi jusqu\x27à la réponse</li>
                            </ul>
                        </div>
                        <h3 class=\"box-title mt-40 mb-20\">Documents généralement demandés</h3>
                        <p class=\"sec-text mb-20\">À titre indicatif, pour un visa court séjour (tourisme ou visite familiale). La liste exacte dépend du pays, du type de visa et de votre situation : nous la vérifions avec vous avant tout dépôt.</p>
                        <div class=\"checklist mb-30\">
                            <ul>
                            <li>Passeport en cours de validité, avec des pages vierges</li>
                            <li>Formulaire de demande et photos d\x27identité récentes</li>
                            <li>Réservation de vol aller-retour et justificatif d\x27hébergement</li>
                            <li>Assurance voyage (obligatoire pour l\x27espace Schengen)</li>
                            <li>Relevés bancaires récents et justificatifs de revenus</li>
                            <li>Attestation de travail et de congé, ou justificatifs d\x27activité</li>
                            <li>Pour les études : attestation d\x27admission ou d\x27inscription</li>
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
            <h3 class=\"box-title mb-30\">Comment se déroule votre demande</h3>
            <div class=\"service-steps\">
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_1.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">01</span>
                    </div>
                    <h5 class=\"service-step_title\">Premier échange</h5>
                    <p class=\"service-step_text\">En agence à Grand-Bassam ou sur WhatsApp, nous étudions votre projet : destination, motif, dates et situation.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_2.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">02</span>
                    </div>
                    <h5 class=\"service-step_title\">Liste des pièces</h5>
                    <p class=\"service-step_text\">Vous recevez la liste exacte des documents à réunir pour votre cas, avec nos conseils pour chacun.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_3.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">03</span>
                    </div>
                    <h5 class=\"service-step_title\">Montage du dossier</h5>
                    <p class=\"service-step_text\">Nous vérifions vos pièces, remplissons les formulaires et prenons votre rendez-vous.</p>
                </div>
                <div class=\"service-step\">
                    <div class=\"service-step_top\">
                        <span class=\"service-step_icon\"><img src=\"{{ \x27assets/img/icon/about_1_1.svg\x27|theme }}\" alt=\"\"></span>
                        <span class=\"service-step_num\">04</span>
                    </div>
                    <h5 class=\"service-step_title\">Dépôt et suivi</h5>
                    <p class=\"service-step_text\">Nous vous préparons au rendez-vous et suivons votre demande jusqu\x27à la réponse du consulat.</p>
                </div>
            </div>
        </div>
        <div class=\"service-faq-area\">
            <h3 class=\"box-title mb-30\">Questions fréquentes</h3>
            <div class=\"accordion\" id=\"faqVisa\">
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqVisa-h1\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqVisa-c1\" aria-expanded=\"false\" aria-controls=\"faqVisa-c1\">Pouvez-vous garantir l\x27obtention de mon visa ?</button>
                </div>
                <div id=\"faqVisa-c1\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqVisa-h1\" data-bs-parent=\"#faqVisa\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Non. La décision appartient uniquement au consulat ou à l\x27ambassade. Notre rôle est de vous aider à déposer un dossier complet et bien présenté, ce qui évite les refus liés à des pièces manquantes ou mal préparées.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqVisa-h2\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqVisa-c2\" aria-expanded=\"false\" aria-controls=\"faqVisa-c2\">Combien de temps à l\x27avance dois-je commencer ?</button>
                </div>
                <div id=\"faqVisa-c2\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqVisa-h2\" data-bs-parent=\"#faqVisa\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Cela dépend du pays et de la période. Pour un visa Schengen, prévoyez idéalement 1 à 2 mois avant le départ. Nous vous donnons un délai précis dès le premier échange.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqVisa-h3\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqVisa-c3\" aria-expanded=\"false\" aria-controls=\"faqVisa-c3\">Les frais consulaires sont-ils compris dans vos tarifs ?</button>
                </div>
                <div id=\"faqVisa-c3\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqVisa-h3\" data-bs-parent=\"#faqVisa\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Les frais de visa sont fixés par chaque pays et payés à part. Notre devis distingue clairement nos honoraires et les frais officiels.</p>
                    </div>
                </div>
            </div>
            <div class=\"accordion-card\">
                <div class=\"accordion-header\" id=\"faqVisa-h4\">
                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#faqVisa-c4\" aria-expanded=\"false\" aria-controls=\"faqVisa-c4\">Puis-je faire toute la démarche à distance ?</button>
                </div>
                <div id=\"faqVisa-c4\" class=\"accordion-collapse collapse\" aria-labelledby=\"faqVisa-h4\" data-bs-parent=\"#faqVisa\">
                    <div class=\"accordion-body\">
                        <p class=\"faq-text\">Oui, en grande partie : les échanges et l\x27envoi des documents peuvent se faire par WhatsApp ou par email. Certaines étapes, comme la prise d\x27empreintes, se font en personne au centre de visa.</p>
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
</section>", "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/accompagnement-visa.htm", "");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["partial" => 1, "for" => 37];
        static $filters = ["theme" => 5, "page" => 10, "escape" => 46];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "partial", 1 => "for"],
                [0 => "theme", 1 => "page", 2 => "escape"],
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

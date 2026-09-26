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

/* /Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/a-propos.htm */
class __TwigTemplate_b4690a52688b00a581aedddf1f81db95 extends Template
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
            <h1 class=\"breadcumb-title\">À propos de nous</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"";
        // line 10
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("accueil"), 10, $this->source);
        yield "\">Accueil</a></li>
                <li>À propos de nous</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
    Qui sommes-nous
==============================-->
<div class=\"about-area position-relative overflow-hidden space\" id=\"about-sec\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-7\">
                <div class=\"img-box3\">
                    <div class=\"img1\">
                        <img src=\"";
        // line 26
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/normal/about_3_1.jpg"), 26, $this->source);
        yield "\" alt=\"Life Voyages & Tourisme\">
                    </div>
                    <div class=\"img2\">
                        <img src=\"";
        // line 29
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/normal/about_3_2.jpg"), 29, $this->source);
        yield "\" alt=\"Voyage\">
                    </div>
                    <div class=\"img3 movingX\">
                        <img src=\"";
        // line 32
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/normal/about_3_3.jpg"), 32, $this->source);
        yield "\" alt=\"Voyage\">
                    </div>
                </div>
            </div>
            <div class=\"col-xl-5\">
                <div class=\"ps-xl-4\">
                    <div class=\"title-area mb-20\">
                        <span class=\"sub-title style1 \">Qui sommes-nous</span>
                        <h2 class=\"sec-title mb-20 heading\">Votre partenaire de confiance pour tous vos voyages</h2>
                    </div>
                    <p class=\"sec-text mb-20\">Life Voyages & Tourisme est une agence de voyage installée à Grand-Bassam, à Mockeyville, au Carrefour Femme Peulh 2. Nous accompagnons les particuliers, les familles, les étudiants et les entreprises dans tous leurs projets de voyage, en Côte d\x27Ivoire comme à l\x27étranger.</p>
                    <p class=\"sec-text mb-30\">Visa, billet d\x27avion, séjour, hôtel, véhicule ou assurance voyage : vous avez un seul interlocuteur pour tout organiser. Notre promesse est simple : voyagez sans stress, nous nous occupons de tout !</p>
                    <div class=\"checklist mb-35\">
                        <ul>
                            <li>Service rapide et professionnel</li>
                            <li>Sécurité et confidentialité</li>
                            <li>Accompagnement personnalisé</li>
                            <li>Réseau partenaire international</li>
                        </ul>
                    </div>
                    <div class=\"mt-35\"><a href=\"";
        // line 52
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("contact"), 52, $this->source);
        yield "\" class=\"th-btn style3 th-icon\">Nous contacter</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"shape-mockup movingX d-none d-xxl-block\" data-top=\"4%\" data-left=\"2%\">
        <img src=\"";
        // line 58
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_2_1.png"), 58, $this->source);
        yield "\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup jump d-none d-xxl-block\" data-top=\"28%\" data-right=\"5%\">
        <img src=\"";
        // line 61
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_2_2.png"), 61, $this->source);
        yield "\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup spin d-none d-xxl-block\" data-bottom=\"18%\" data-left=\"2%\">
        <img src=\"";
        // line 64
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_2_3.png"), 64, $this->source);
        yield "\" alt=\"shape\">
    </div>
</div>

<!--==============================
    Mission, vision, valeurs
==============================-->
<section class=\"bg-smoke space\" data-bg-src=\"";
        // line 71
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg/line-pattern3.png"), 71, $this->source);
        yield "\">
    <div class=\"container\">
        <div class=\"title-area text-center\">
            <span class=\"sub-title\">Ce qui nous guide</span>
            <h2 class=\"sec-title\">Notre mission, notre vision, nos valeurs</h2>
        </div>
        <div class=\"row gy-4\">
            <div class=\"col-md-6 col-xl-4\">
                <div class=\"why-item h-100\">
                    <div class=\"why-item_icon\"><img src=\"";
        // line 80
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_1.svg"), 80, $this->source);
        yield "\" alt=\"\"></div>
                    <h3 class=\"box-title\">Notre mission</h3>
                    <p class=\"why-item_text\">Rendre le voyage simple et accessible, en prenant en charge les démarches qui prennent du temps : dossier visa, réservations, assurance et organisation du séjour.</p>
                </div>
            </div>
            <div class=\"col-md-6 col-xl-4\">
                <div class=\"why-item h-100\">
                    <div class=\"why-item_icon\"><img src=\"";
        // line 87
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_2.svg"), 87, $this->source);
        yield "\" alt=\"\"></div>
                    <h3 class=\"box-title\">Notre vision</h3>
                    <p class=\"why-item_text\">Devenir l\x27agence de référence de Grand-Bassam et du Sud-Comoé pour les voyageurs ivoiriens et ouest-africains, reconnue pour son sérieux et la clarté de ses conseils.</p>
                </div>
            </div>
            <div class=\"col-md-6 col-xl-4\">
                <div class=\"why-item h-100\">
                    <div class=\"why-item_icon\"><img src=\"";
        // line 94
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_3.svg"), 94, $this->source);
        yield "\" alt=\"\"></div>
                    <h3 class=\"box-title\">Nos valeurs</h3>
                    <p class=\"why-item_text\">Honnêteté dans nos conseils, rigueur dans chaque dossier, écoute de chaque client et transparence sur les prix. Nous ne promettons jamais un visa : nous mettons toutes les chances de votre côté.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
    Nos engagements + chiffres clés
==============================-->
<section class=\"position-relative overflow-hidden space\">
    <div class=\"container\">
        <div class=\"row gy-5 align-items-center\">
            <div class=\"col-xl-5\">
                <div class=\"title-area mb-30\">
                    <span class=\"sub-title\">Nos engagements</span>
                    <h2 class=\"sec-title\">Pourquoi nos clients nous font confiance</h2>
                </div>
                <p class=\"sec-text mb-30\">Chaque voyage est un projet important : des études, des retrouvailles familiales, un rendez-vous d\x27affaires ou des vacances attendues. Nous le traitons avec le même sérieux, du premier échange jusqu\x27à votre retour.</p>
                ";
        // line 116
        yield "                <div class=\"about-stats\">
                    <div class=\"about-stat\">
                        <span class=\"about-stat_number\"><span class=\"counter-number\">500</span>+</span>
                        <span class=\"about-stat_label\">Voyageurs accompagnés</span>
                    </div>
                    <div class=\"about-stat\">
                        <span class=\"about-stat_number\"><span class=\"counter-number\">30</span>+</span>
                        <span class=\"about-stat_label\">Pays desservis</span>
                    </div>
                    <div class=\"about-stat\">
                        <span class=\"about-stat_number\"><span class=\"counter-number\">6</span></span>
                        <span class=\"about-stat_label\">Services</span>
                    </div>
                    <div class=\"about-stat\">
                        <span class=\"about-stat_number\"><span class=\"counter-number\">24</span>h</span>
                        <span class=\"about-stat_label\">Délai de réponse</span>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-7\">
                <div class=\"row gy-4\">
                    <div class=\"col-md-6\">
                        <div class=\"choose-feature about-feature\">
                            <div class=\"box-icon\"><img src=\"";
        // line 139
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/plane.svg"), 139, $this->source);
        yield "\" alt=\"\"></div>
                            <div class=\"media-body\">
                                <h3 class=\"box-title\">Service rapide et professionnel</h3>
                                <p class=\"choose-feature_text\">Réponse rapide sur WhatsApp, rendez-vous planifiés et traitement rapide des dossiers visa, sans rien sacrifier à la rigueur.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"choose-feature about-feature\">
                            <div class=\"box-icon\"><img src=\"";
        // line 148
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/user.svg"), 148, $this->source);
        yield "\" alt=\"\"></div>
                            <div class=\"media-body\">
                                <h3 class=\"box-title\">Sécurité et confidentialité</h3>
                                <p class=\"choose-feature_text\">Passeport, relevés bancaires, documents personnels : vos pièces sont manipulées avec soin et ne servent qu\x27à votre dossier.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"choose-feature about-feature\">
                            <div class=\"box-icon\"><img src=\"";
        // line 157
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/chat.svg"), 157, $this->source);
        yield "\" alt=\"\"></div>
                            <div class=\"media-body\">
                                <h3 class=\"box-title\">Accompagnement personnalisé</h3>
                                <p class=\"choose-feature_text\">Un conseiller suit votre projet, vous explique chaque étape simplement et reste joignable jusqu\x27à votre retour.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"choose-feature about-feature\">
                            <div class=\"box-icon\"><img src=\"";
        // line 166
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/map.svg"), 166, $this->source);
        yield "\" alt=\"\"></div>
                            <div class=\"media-body\">
                                <h3 class=\"box-title\">Réseau partenaire international</h3>
                                <p class=\"choose-feature_text\">Compagnies aériennes, hôtels, assureurs et loueurs de véhicules : des partenaires fiables pour des solutions adaptées à votre budget.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
    Équipe
==============================-->
<section class=\"team-area3 position-relative bg-top-center space\" data-bg-src=\"";
        // line 182
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg/team_bg_2.jpg"), 182, $this->source);
        yield "\">
    <div class=\"container z-index-common\">
        <div class=\"title-area text-center\">
            <span class=\"sub-title\">Notre équipe</span>
            <h2 class=\"sec-title\">Vos conseillers voyage</h2>
        </div>
        <div class=\"slider-area\">
            <div class=\"swiper th-slider teamSlider3 has-shadow\" id=\"teamSlider3\" data-slider-options=\x27{\"breakpoints\":{\"0\":{\"slidesPerView\":1},\"576\":{\"slidesPerView\":\"1\"},\"768\":{\"slidesPerView\":\"2\"},\"992\":{\"slidesPerView\":\"3\"},\"1200\":{\"slidesPerView\":\"3\"}}}\x27>
                <div class=\"swiper-wrapper\">
                    ";
        // line 192
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["img" => "team_img_1.jpg", "img2" => "team_1_1.jpg", "role" => "Directeur(trice)"], ["img" => "team_img_2.jpg", "img2" => "team_1_2.jpg", "role" => "Conseiller(ère) visa"], ["img" => "team_img_3.jpg", "img2" => "team_1_3.jpg", "role" => "Billetterie & vols"], ["img" => "team_img_1.jpg", "img2" => "team_1_4.jpg", "role" => "Tourisme & circuits"], ["img" => "team_img_2.jpg", "img2" => "team_1_5.jpg", "role" => "Service client"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 199
            yield "                    <div class=\"swiper-slide\">
                        <div class=\"th-team team-grid\">
                            <div class=\"team-img\">
                                <img src=\"";
            // line 202
            yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter(("assets/img/team/" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "img", [], "any", false, false, true, 202), 202, $this->source))), 202, $this->source);
            yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"";
            // line 205
            yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter(("assets/img/team/" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "img2", [], "any", false, false, true, 205), 205, $this->source))), 205, $this->source);
            yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"#\">[Nom Prénom]</a></h3>
                                    <span class=\"team-desig\">";
            // line 210
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["m"], "role", [], "any", false, false, true, 210), 210, $this->source), "html", null, true), 210, $this->source);
            yield "</span>
                                    <div class=\"th-social\">
                                        <a target=\"_blank\" href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a target=\"_blank\" href=\"https://wa.me/2250757397423\"><i class=\"fab fa-whatsapp\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['m'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 220
        yield "                </div>
                <div class=\"slider-pagination\"></div>
            </div>
            <button data-slider-prev=\"#teamSlider3\" class=\"slider-arrow slider-prev\"><img src=\"";
        // line 223
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/right-arrow2.svg"), 223, $this->source);
        yield "\" alt=\"\"></button>
            <button data-slider-next=\"#teamSlider3\" class=\"slider-arrow slider-next\"><img src=\"";
        // line 224
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/left-arrow2.svg"), 224, $this->source);
        yield "\" alt=\"\"></button>
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
        return "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/a-propos.htm";
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
        return array (  344 => 224,  340 => 223,  335 => 220,  318 => 210,  310 => 205,  304 => 202,  299 => 199,  294 => 192,  282 => 182,  263 => 166,  251 => 157,  239 => 148,  227 => 139,  202 => 116,  178 => 94,  168 => 87,  158 => 80,  146 => 71,  136 => 64,  130 => 61,  124 => 58,  115 => 52,  92 => 32,  86 => 29,  80 => 26,  61 => 10,  53 => 5,  48 => 2,  44 => 1,);
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
            <h1 class=\"breadcumb-title\">À propos de nous</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"{{ \x27accueil\x27|page }}\">Accueil</a></li>
                <li>À propos de nous</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
    Qui sommes-nous
==============================-->
<div class=\"about-area position-relative overflow-hidden space\" id=\"about-sec\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-7\">
                <div class=\"img-box3\">
                    <div class=\"img1\">
                        <img src=\"{{ \x27assets/img/normal/about_3_1.jpg\x27|theme }}\" alt=\"Life Voyages & Tourisme\">
                    </div>
                    <div class=\"img2\">
                        <img src=\"{{ \x27assets/img/normal/about_3_2.jpg\x27|theme }}\" alt=\"Voyage\">
                    </div>
                    <div class=\"img3 movingX\">
                        <img src=\"{{ \x27assets/img/normal/about_3_3.jpg\x27|theme }}\" alt=\"Voyage\">
                    </div>
                </div>
            </div>
            <div class=\"col-xl-5\">
                <div class=\"ps-xl-4\">
                    <div class=\"title-area mb-20\">
                        <span class=\"sub-title style1 \">Qui sommes-nous</span>
                        <h2 class=\"sec-title mb-20 heading\">Votre partenaire de confiance pour tous vos voyages</h2>
                    </div>
                    <p class=\"sec-text mb-20\">Life Voyages & Tourisme est une agence de voyage installée à Grand-Bassam, à Mockeyville, au Carrefour Femme Peulh 2. Nous accompagnons les particuliers, les familles, les étudiants et les entreprises dans tous leurs projets de voyage, en Côte d\x27Ivoire comme à l\x27étranger.</p>
                    <p class=\"sec-text mb-30\">Visa, billet d\x27avion, séjour, hôtel, véhicule ou assurance voyage : vous avez un seul interlocuteur pour tout organiser. Notre promesse est simple : voyagez sans stress, nous nous occupons de tout !</p>
                    <div class=\"checklist mb-35\">
                        <ul>
                            <li>Service rapide et professionnel</li>
                            <li>Sécurité et confidentialité</li>
                            <li>Accompagnement personnalisé</li>
                            <li>Réseau partenaire international</li>
                        </ul>
                    </div>
                    <div class=\"mt-35\"><a href=\"{{ \x27contact\x27|page }}\" class=\"th-btn style3 th-icon\">Nous contacter</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"shape-mockup movingX d-none d-xxl-block\" data-top=\"4%\" data-left=\"2%\">
        <img src=\"{{ \x27assets/img/shape/shape_2_1.png\x27|theme }}\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup jump d-none d-xxl-block\" data-top=\"28%\" data-right=\"5%\">
        <img src=\"{{ \x27assets/img/shape/shape_2_2.png\x27|theme }}\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup spin d-none d-xxl-block\" data-bottom=\"18%\" data-left=\"2%\">
        <img src=\"{{ \x27assets/img/shape/shape_2_3.png\x27|theme }}\" alt=\"shape\">
    </div>
</div>

<!--==============================
    Mission, vision, valeurs
==============================-->
<section class=\"bg-smoke space\" data-bg-src=\"{{ \x27assets/img/bg/line-pattern3.png\x27|theme }}\">
    <div class=\"container\">
        <div class=\"title-area text-center\">
            <span class=\"sub-title\">Ce qui nous guide</span>
            <h2 class=\"sec-title\">Notre mission, notre vision, nos valeurs</h2>
        </div>
        <div class=\"row gy-4\">
            <div class=\"col-md-6 col-xl-4\">
                <div class=\"why-item h-100\">
                    <div class=\"why-item_icon\"><img src=\"{{ \x27assets/img/icon/about_1_1.svg\x27|theme }}\" alt=\"\"></div>
                    <h3 class=\"box-title\">Notre mission</h3>
                    <p class=\"why-item_text\">Rendre le voyage simple et accessible, en prenant en charge les démarches qui prennent du temps : dossier visa, réservations, assurance et organisation du séjour.</p>
                </div>
            </div>
            <div class=\"col-md-6 col-xl-4\">
                <div class=\"why-item h-100\">
                    <div class=\"why-item_icon\"><img src=\"{{ \x27assets/img/icon/about_1_2.svg\x27|theme }}\" alt=\"\"></div>
                    <h3 class=\"box-title\">Notre vision</h3>
                    <p class=\"why-item_text\">Devenir l\x27agence de référence de Grand-Bassam et du Sud-Comoé pour les voyageurs ivoiriens et ouest-africains, reconnue pour son sérieux et la clarté de ses conseils.</p>
                </div>
            </div>
            <div class=\"col-md-6 col-xl-4\">
                <div class=\"why-item h-100\">
                    <div class=\"why-item_icon\"><img src=\"{{ \x27assets/img/icon/about_1_3.svg\x27|theme }}\" alt=\"\"></div>
                    <h3 class=\"box-title\">Nos valeurs</h3>
                    <p class=\"why-item_text\">Honnêteté dans nos conseils, rigueur dans chaque dossier, écoute de chaque client et transparence sur les prix. Nous ne promettons jamais un visa : nous mettons toutes les chances de votre côté.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
    Nos engagements + chiffres clés
==============================-->
<section class=\"position-relative overflow-hidden space\">
    <div class=\"container\">
        <div class=\"row gy-5 align-items-center\">
            <div class=\"col-xl-5\">
                <div class=\"title-area mb-30\">
                    <span class=\"sub-title\">Nos engagements</span>
                    <h2 class=\"sec-title\">Pourquoi nos clients nous font confiance</h2>
                </div>
                <p class=\"sec-text mb-30\">Chaque voyage est un projet important : des études, des retrouvailles familiales, un rendez-vous d\x27affaires ou des vacances attendues. Nous le traitons avec le même sérieux, du premier échange jusqu\x27à votre retour.</p>
                {# Chiffres à valider par l\x27agence #}
                <div class=\"about-stats\">
                    <div class=\"about-stat\">
                        <span class=\"about-stat_number\"><span class=\"counter-number\">500</span>+</span>
                        <span class=\"about-stat_label\">Voyageurs accompagnés</span>
                    </div>
                    <div class=\"about-stat\">
                        <span class=\"about-stat_number\"><span class=\"counter-number\">30</span>+</span>
                        <span class=\"about-stat_label\">Pays desservis</span>
                    </div>
                    <div class=\"about-stat\">
                        <span class=\"about-stat_number\"><span class=\"counter-number\">6</span></span>
                        <span class=\"about-stat_label\">Services</span>
                    </div>
                    <div class=\"about-stat\">
                        <span class=\"about-stat_number\"><span class=\"counter-number\">24</span>h</span>
                        <span class=\"about-stat_label\">Délai de réponse</span>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-7\">
                <div class=\"row gy-4\">
                    <div class=\"col-md-6\">
                        <div class=\"choose-feature about-feature\">
                            <div class=\"box-icon\"><img src=\"{{ \x27assets/img/icon/plane.svg\x27|theme }}\" alt=\"\"></div>
                            <div class=\"media-body\">
                                <h3 class=\"box-title\">Service rapide et professionnel</h3>
                                <p class=\"choose-feature_text\">Réponse rapide sur WhatsApp, rendez-vous planifiés et traitement rapide des dossiers visa, sans rien sacrifier à la rigueur.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"choose-feature about-feature\">
                            <div class=\"box-icon\"><img src=\"{{ \x27assets/img/icon/user.svg\x27|theme }}\" alt=\"\"></div>
                            <div class=\"media-body\">
                                <h3 class=\"box-title\">Sécurité et confidentialité</h3>
                                <p class=\"choose-feature_text\">Passeport, relevés bancaires, documents personnels : vos pièces sont manipulées avec soin et ne servent qu\x27à votre dossier.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"choose-feature about-feature\">
                            <div class=\"box-icon\"><img src=\"{{ \x27assets/img/icon/chat.svg\x27|theme }}\" alt=\"\"></div>
                            <div class=\"media-body\">
                                <h3 class=\"box-title\">Accompagnement personnalisé</h3>
                                <p class=\"choose-feature_text\">Un conseiller suit votre projet, vous explique chaque étape simplement et reste joignable jusqu\x27à votre retour.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"choose-feature about-feature\">
                            <div class=\"box-icon\"><img src=\"{{ \x27assets/img/icon/map.svg\x27|theme }}\" alt=\"\"></div>
                            <div class=\"media-body\">
                                <h3 class=\"box-title\">Réseau partenaire international</h3>
                                <p class=\"choose-feature_text\">Compagnies aériennes, hôtels, assureurs et loueurs de véhicules : des partenaires fiables pour des solutions adaptées à votre budget.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
    Équipe
==============================-->
<section class=\"team-area3 position-relative bg-top-center space\" data-bg-src=\"{{ \x27assets/img/bg/team_bg_2.jpg\x27|theme }}\">
    <div class=\"container z-index-common\">
        <div class=\"title-area text-center\">
            <span class=\"sub-title\">Notre équipe</span>
            <h2 class=\"sec-title\">Vos conseillers voyage</h2>
        </div>
        <div class=\"slider-area\">
            <div class=\"swiper th-slider teamSlider3 has-shadow\" id=\"teamSlider3\" data-slider-options=\x27{\"breakpoints\":{\"0\":{\"slidesPerView\":1},\"576\":{\"slidesPerView\":\"1\"},\"768\":{\"slidesPerView\":\"2\"},\"992\":{\"slidesPerView\":\"3\"},\"1200\":{\"slidesPerView\":\"3\"}}}\x27>
                <div class=\"swiper-wrapper\">
                    {# Noms, fonctions et photos à remplacer par ceux de l\x27équipe #}
                    {% for m in [
                        {\x27img\x27: \x27team_img_1.jpg\x27, \x27img2\x27: \x27team_1_1.jpg\x27, \x27role\x27: \x27Directeur(trice)\x27},
                        {\x27img\x27: \x27team_img_2.jpg\x27, \x27img2\x27: \x27team_1_2.jpg\x27, \x27role\x27: \x27Conseiller(ère) visa\x27},
                        {\x27img\x27: \x27team_img_3.jpg\x27, \x27img2\x27: \x27team_1_3.jpg\x27, \x27role\x27: \x27Billetterie & vols\x27},
                        {\x27img\x27: \x27team_img_1.jpg\x27, \x27img2\x27: \x27team_1_4.jpg\x27, \x27role\x27: \x27Tourisme & circuits\x27},
                        {\x27img\x27: \x27team_img_2.jpg\x27, \x27img2\x27: \x27team_1_5.jpg\x27, \x27role\x27: \x27Service client\x27}
                    ] %}
                    <div class=\"swiper-slide\">
                        <div class=\"th-team team-grid\">
                            <div class=\"team-img\">
                                <img src=\"{{ (\x27assets/img/team/\x27 ~ m.img)|theme }}\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"{{ (\x27assets/img/team/\x27 ~ m.img2)|theme }}\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"#\">[Nom Prénom]</a></h3>
                                    <span class=\"team-desig\">{{ m.role }}</span>
                                    <div class=\"th-social\">
                                        <a target=\"_blank\" href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a target=\"_blank\" href=\"https://wa.me/2250757397423\"><i class=\"fab fa-whatsapp\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
                <div class=\"slider-pagination\"></div>
            </div>
            <button data-slider-prev=\"#teamSlider3\" class=\"slider-arrow slider-prev\"><img src=\"{{ \x27assets/img/icon/right-arrow2.svg\x27|theme }}\" alt=\"\"></button>
            <button data-slider-next=\"#teamSlider3\" class=\"slider-arrow slider-next\"><img src=\"{{ \x27assets/img/icon/left-arrow2.svg\x27|theme }}\" alt=\"\"></button>
        </div>
    </div>
</section>", "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/a-propos.htm", "");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["partial" => 1, "for" => 192];
        static $filters = ["theme" => 5, "page" => 10, "escape" => 210];
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

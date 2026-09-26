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

/* /Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/accueil.htm */
class __TwigTemplate_ebb8bdc741c7d50e34161453dd586406 extends Template
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
        yield "<!--********************************
       Code Start From Here
******************************** -->

<div class=\"magic-cursor relative z-10\">
    <div class=\"cursor\"></div>
    <div class=\"cursor-follower\"></div>
</div>


<!--==============================
 Preloader
==============================-->
<div id=\"preloader\" class=\"preloader \">
    <div class=\"preloader-inner\">
        <img style=\"height:100px;width:auto;\" src=\"";
        // line 16
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/life-voyage/loog.png"), 16, $this->source);
        yield "\" alt=\"Life Voyage\">
    </div>

    <div id=\"loader\" class=\"th-preloader mt-4\">
        <div class=\"animation-preloader\">
            <div class=\"txt-loading\">
                <span preloader-text=\"L\" class=\"characters\">L </span>
                <span preloader-text=\"I\" class=\"characters\">I </span>
                <span preloader-text=\"F\" class=\"characters\">F </span>
                <span preloader-text=\"E\" class=\"characters\">E </span>

                <span preloader-text=\"\" class=\"characters\"> </span>

                <span preloader-text=\"T\" class=\"characters\">T </span>
                <span preloader-text=\"O\" class=\"characters\">O </span>
                <span preloader-text=\"U\" class=\"characters\">U </span>
                <span preloader-text=\"R\" class=\"characters\">R </span>
                <span preloader-text=\"I\" class=\"characters\">I </span>
                <span preloader-text=\"S\" class=\"characters\">S </span>
                <span preloader-text=\"M\" class=\"characters\">M </span>
                <span preloader-text=\"E\" class=\"characters\">E </span>

                <span preloader-text=\"V\" class=\"characters\">V </span>
                <span preloader-text=\"O\" class=\"characters\">O </span>
                <span preloader-text=\"Y\" class=\"characters\">Y </span>
                <span preloader-text=\"A\" class=\"characters\">A </span>
                <span preloader-text=\"G\" class=\"characters\">G </span>
                <span preloader-text=\"E\" class=\"characters\">E </span>
            </div>
        </div>
    </div>

</div> <!--==============================
    Sidemenu
============================== -->
<div class=\"sidemenu-wrapper sidemenu-info \">
    <div class=\"sidemenu-content\">
        <button class=\"closeButton sideMenuCls\"><i class=\"far fa-times\"></i></button>
        <div class=\"widget  \">
            <div class=\"th-widget-about\">
                <div class=\"about-logo\">
                    <a href=\"#\"><img style=\"height:56px;width:auto;\" src=\"";
        // line 57
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/life-voyage/loog.png"), 57, $this->source);
        yield "\" alt=\"Life Voyage\"></a>
                </div>
                <p class=\"about-text\">Votre partenaire de confiance pour tous vos voyages à travers le monde. Visa, billets d\x27avion, séjours, hôtels, véhicules et assurance : à Grand-Bassam, nous nous occupons de tout.</p>
                <div class=\"th-social\">
                    <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a href=\"https://www.twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                    <a href=\"https://www.linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                    <a href=\"https://www.whatsapp.com/\"><i class=\"fab fa-whatsapp\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"widget  \">
            <h3 class=\"widget_title\">Articles récents</h3>
            <div class=\"recent-post-wrap\">
                <div class=\"recent-post\">
                    <div class=\"media-img\">
                        <a href=\"blog-details.html\"><img src=\"";
        // line 73
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/recent-post-1-1.jpg"), 73, $this->source);
        yield "\" alt=\"Blog Image\"></a>
                    </div>
                    <div class=\"media-body\">
                        <div class=\"recent-post-meta\">
                            <a href=\"blog.html\"><i class=\"far fa-calendar\"></i>10 Septembre 2026</a>
                        </div>
                        <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"#\">Visa Schengen : les documents à préparer</a></h4>
                    </div>
                </div>
                <div class=\"recent-post\">
                    <div class=\"media-img\">
                        <a href=\"#\"><img src=\"";
        // line 84
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/recent-post-1-2.jpg"), 84, $this->source);
        yield "\" alt=\"Blog Image\"></a>
                    </div>
                    <div class=\"media-body\">
                        <div class=\"recent-post-meta\">
                            <a href=\"#\"><i class=\"far fa-calendar\"></i>02 Septembre 2026</a>
                        </div>
                        <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"#\">Étudier au Canada : les étapes du visa étudiant</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"widget  \">
            <h3 class=\"widget_title\">Contactez-nous</h3>
            <div class=\"th-widget-contact\">
                <div class=\"info-box_text\">
                    <div class=\"icon\">
                        <img src=\"";
        // line 100
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/phone.svg"), 100, $this->source);
        yield "\" alt=\"img\">
                    </div>
                    <div class=\"details\">
                        <p><a href=\"tel:+2250757397423\" class=\"info-box_link\">+225 07 57 39 74 23</a></p>
                        <p><a href=\"tel:+2250789152812\" class=\"info-box_link\">+225 07 89 15 28 12</a></p>
                    </div>
                </div>
                <div class=\"info-box_text\">
                    <div class=\"icon\">
                        <img src=\"";
        // line 109
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/envelope.svg"), 109, $this->source);
        yield "\" alt=\"img\">
                    </div>
                    <div class=\"details\">
                        <p><a href=\"mailto:info@lifevoyagestourisme.com\" class=\"info-box_link\">info@lifevoyagestourisme.com</a></p>
                        <p><a href=\"mailto:life.voyages.tourisme@gmail.com\" class=\"info-box_link\">life.voyages.tourisme@gmail.com</a></p>
                    </div>
                </div>
                <div class=\"info-box_text\">
                    <div class=\"icon\"><img src=\"";
        // line 117
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/location-dot.svg"), 117, $this->source);
        yield "\" alt=\"img\"></div>
                    <div class=\"details\">
                        <p>Grand-Bassam, Mockeyville, Carrefour Femme Peulh 2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"popup-search-box\">
    <button class=\"searchClose\"><i class=\"fal fa-times\"></i></button>
    <form action=\"#\">
        <input type=\"text\" placeholder=\"Visa, billet d\x27avion, circuit…\">
        <button type=\"submit\"><i class=\"fal fa-search\"></i></button>
    </form>
</div><!--==============================
    Mobile Menu
  ============================== -->
<div class=\"th-menu-wrapper onepage-nav\">
    <div class=\"th-menu-area text-center\">
        <button class=\"th-menu-toggle\"><i class=\"fal fa-times\"></i></button>
        <div class=\"mobile-logo\">
            <a href=\"home-travel.html\"><img style=\"height:56px;width:auto;\" src=\"";
        // line 139
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/life-voyage/loog.png"), 139, $this->source);
        yield "\" alt=\"Life Voyage\"></a>
        </div>
        <div class=\"th-mobile-menu\">
            <ul>
                <li class=\"menu-item-has-children\">
                    <a class=\"active\" href=\"home-travel.html\">Accueil</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"home-travel.html\">Accueil Voyage</a></li>
                        <li><a href=\"home-tour.html\">Accueil Circuit</a></li>
                        <li><a href=\"home-agency.html\">Accueil Agence</a></li>

                    </ul>
                </li>
                <li><a href=\"about.html\">À propos de nous</a></li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">Destination</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"#\">Destination</a></li>
                        <li><a href=\"destination-details.html\">Détails de la destination</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">Nos services</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"";
        // line 163
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("accompagnement-visa"), 163, $this->source);
        yield "\">Accompagnement visa</a></li>
                        <li><a href=\"";
        // line 164
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("billetterie-vols"), 164, $this->source);
        yield "\">Billetterie &amp; vols</a></li>
                        <li><a href=\"";
        // line 165
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("tourisme"), 165, $this->source);
        yield "\">Tourisme national &amp; international</a></li>
                        <li><a href=\"";
        // line 166
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("vehicules"), 166, $this->source);
        yield "\">Vente &amp; location de véhicules</a></li>
                        <li><a href=\"";
        // line 167
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("hotels-residences"), 167, $this->source);
        yield "\">Hôtels &amp; résidences meublées</a></li>
                        <li><a href=\"";
        // line 168
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("assurance-voyage"), 168, $this->source);
        yield "\">Assurance voyage</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">Activités</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"activités.html\">activités</a></li>
                        <li><a href=\"activités-details.html\">Détails des activités</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">Pages</a>
                    <ul class=\"sub-menu\">
                        <li class=\"menu-item-has-children\">
                            <a href=\"#\">Boutique</a>
                            <ul class=\"sub-menu\">
                                <li><a href=\"shop.html\">Boutique</a></li>
                                <li><a href=\"shop-details.html\">Détails de la boutique</a></li>
                                <li><a href=\"cart.html\">Panier</a></li>
                                <li><a href=\"checkout.html\">Paiement</a></li>
                                <li><a href=\"wishlist.html\">Liste de souhaits</a></li>
                            </ul>
                        </li>

                        <li><a href=\"gallery.html\">Galerie</a></li>
                        <li><a href=\"tour.html\">Nos circuits</a></li>
                        <li><a href=\"tour-details.html\">Détails du circuit</a></li>
                        <li><a href=\"tour-guide.html\">Guide touristique</a></li>
                        <li><a href=\"tour-guider-details.html\">Détails du guide</a></li>
                        <li><a href=\"faq.html\">FAQ</a></li>
                        <li><a href=\"price.html\">Forfaits tarifaires</a></li>
                        <li><a href=\"error.html\">Page d\x27erreur</a></li>
                    </ul>

                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">Blog</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"blog.html\">Blog</a></li>
                        <li><a href=\"blog-details.html\">Détails de l\x27article</a></li>
                    </ul>
                </li>
                <li>
                    <a href=\"contact.html\">Contactez-nous</a>
                </li>
            </ul>
        </div>
    </div>
</div><!--==============================
\tHeader Area
==============================-->
";
        // line 219
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 220
        yield "<!--==============================
Hero Area
==============================-->
<!--==============================
Hero Area
==============================-->
<div class=\"hero-3\" id=\"hero\">
    <div class=\"swiper hero-slider-3\" id=\"heroSlide3\">
        <div class=\"swiper-wrapper\">
            <div class=\"swiper-slide\">
                <div class=\"hero-inner\">
                    <div class=\"th-hero-bg\" data-bg-src=\"";
        // line 231
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero_bg_3_1.jpg"), 231, $this->source);
        yield "\">
                    </div>
                    <div class=\"container\">
                        <div class=\"hero-style3\">
                            <h1 class=\"hero-title\" data-ani=\"slideinleft\" data-ani-delay=\"0.2s\">
                                Votre partenaire de confiance pour tous vos voyages
                            </h1>
                            <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Voyagez sans stress, nous nous occupons de tout ! Visa, billet d\x27avion, assurance voyage : un seul interlocuteur pour préparer votre départ.</p>
                            <div class=\"btn-group\" data-ani=\"slideinup\" data-ani-delay=\"0.6s\">
                                <a href=\"#\" class=\"th-btn style2 th-icon\">Demander un visa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"hero-inner\">
                    <div class=\"th-hero-bg\" data-bg-src=\"";
        // line 248
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero_bg_3_2.jpg"), 248, $this->source);
        yield "\">
                    </div>
                    <div class=\"container\">
                        <div class=\"hero-style3\">
                            <h1 class=\"hero-title\" data-ani=\"slideinleft\" data-ani-delay=\"0.2s\">
                                Traitement rapide de vos dossiers visa
                            </h1>
                            <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Voyagez sans stress, nous nous occupons de tout ! Visa, billet d\x27avion, assurance voyage : un seul interlocuteur pour préparer votre départ.</p>
                            <div class=\"btn-group\" data-ani=\"slideinup\" data-ani-delay=\"0.6s\">
                                <a href=\"#\" class=\"th-btn style2 th-icon\">Demander un visa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"hero-inner\">
                    <div class=\"th-hero-bg\" data-bg-src=\"";
        // line 265
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero_bg_3_3.jpg"), 265, $this->source);
        yield "\">
                    </div>
                    <div class=\"container\">
                        <div class=\"hero-style3\">
                            <h1 class=\"hero-title\" data-ani=\"slideinleft\" data-ani-delay=\"0.2s\">
                                Vos billets d\x27avion aux meilleurs tarifs
                            </h1>
                            <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Voyagez sans stress, nous nous occupons de tout ! Visa, billet d\x27avion, assurance voyage : un seul interlocuteur pour préparer votre départ.</p>
                            <div class=\"btn-group\" data-ani=\"slideinup\" data-ani-delay=\"0.6s\">
                                <a href=\"#\" class=\"th-btn style2 th-icon\">Réserver un vol</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"hero-inner\">
                    <div class=\"th-hero-bg\" data-bg-src=\"";
        // line 282
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero_bg_3_4.jpg"), 282, $this->source);
        yield "\">
                    </div>
                    <div class=\"container\">
                        <div class=\"hero-style3\">
                            <h1 class=\"hero-title\" data-ani=\"slideinleft\" data-ani-delay=\"0.2s\">
                                Découvrez la Côte d\x27Ivoire et le monde
                            </h1>
                            <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Voyagez sans stress, nous nous occupons de tout ! Visa, billet d\x27avion, assurance voyage : un seul interlocuteur pour préparer votre départ.</p>
                            <div class=\"btn-group\" data-ani=\"slideinup\" data-ani-delay=\"0.6s\">
                                <a href=\"#\" class=\"th-btn style2 th-icon\">Voir nos circuits</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"hero-inner\">
                    <video autoplay loop muted>
                        <source src=\"";
        // line 300
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero-video3.mp4"), 300, $this->source);
        yield "\" type=\"video/mp4\">
                    </video>
                    <div class=\"container\">
                        <div class=\"hero-style3\">
                            <h1 class=\"hero-title\" data-ani=\"slideinleft\" data-ani-delay=\"0.2s\">
                                Voyagez l\x27esprit tranquille avec Life Voyages
                            </h1>
                            <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Voyagez sans stress, nous nous occupons de tout ! Visa, billet d\x27avion, assurance voyage : un seul interlocuteur pour préparer votre départ.</p>
                            <div class=\"btn-group\" data-ani=\"slideinup\" data-ani-delay=\"0.6s\">
                                <a href=\"#\" class=\"th-btn style2 th-icon\">Nous contacter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class=\"hero3-wrapper\">
        <div class=\"container\">
            <div class=\"row justify-content-center align-items-end flex-row-reverse\">
                <div class=\"col-lg-4\">
                    <div class=\"hero3-swiper-custom\">
                        <button data-slider-prev=\"#heroSlide3\" class=\"swiper-button-next\">
                            <img src=\"";
        // line 324
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/hero-arrow-right.svg"), 324, $this->source);
        yield "\" alt=\"\"></button>
                        <div class=\"swiper-pagination\"></div>
                        <button data-slider-next=\"#heroSlide3\" class=\"swiper-button-prev\">
                            <img src=\"";
        // line 327
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/hero-arrow-left.svg"), 327, $this->source);
        yield "\" alt=\"\"></button>

                    </div>
                    <div class=\"swiper hero3Thumbs\">
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\">
                                <div class=\"hero-inner\">
                                    <div class=\"hero3-card\">
                                        <div class=\"hero-img\">
                                            <img src=\"";
        // line 336
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero_bg_3_1.jpg"), 336, $this->source);
        yield "\" alt=\"\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"swiper-slide\">
                                <div class=\"hero-inner\">
                                    <div class=\"hero3-card\">
                                        <div class=\"hero-img\">
                                            <img src=\"";
        // line 345
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero_bg_3_2.jpg"), 345, $this->source);
        yield "\" alt=\"\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"swiper-slide\">
                                <div class=\"hero-inner\">
                                    <div class=\"hero3-card\">
                                        <div class=\"hero-img\">
                                            <img src=\"";
        // line 354
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero_bg_3_3.jpg"), 354, $this->source);
        yield "\" alt=\"\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"swiper-slide\">
                                <div class=\"hero-inner\">
                                    <div class=\"hero3-card\">
                                        <div class=\"hero-img\">
                                            <img src=\"";
        // line 363
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero_bg_3_4.jpg"), 363, $this->source);
        yield "\" alt=\"\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"swiper-slide\">
                                <div class=\"hero-inner\">
                                    <div class=\"hero3-card\">
                                        <div class=\"hero-img\">
                                            <img src=\"";
        // line 372
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero_bg_3_5.jpg"), 372, $this->source);
        yield "\" alt=\"\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"hero-booking\">
                        <form action=\"\" method=\"POST\" class=\"booking-form style2 ajax-contact\">
                            <div class=\"input-wrap\">
                                <div class=\"row align-items-center justify-content-between\">
                                    <div class=\"form-group col-md-6 col-xl-auto\">
                                        <div class=\"icon\">
                                            <i class=\"fa-light fa-route\"></i>
                                        </div>
                                        <div class=\"search-input\">
                                            <label>Destination</label>
                                            <select class=\" nice-select\" name=\"Destination\" id=\"Destination\">
                                                <option value=\"Sélectionner une destination\" selected disabled>Sélectionner une destination</option>
                                                <option value=\"France / Espace Schengen\">France / Espace Schengen</option>
                                                <option value=\"Royaume-Uni\">Royaume-Uni</option>
                                                <option value=\"Canada\">Canada</option>
                                                <option value=\"États-Unis\">États-Unis</option>
                                                <option value=\"Dubaï\">Dubaï</option>
                                                <option value=\"Maroc\">Maroc</option>
                                                <option value=\"Afrique\">Afrique</option>
                                                <option value=\"Asie\">Asie</option>
                                                <option value=\"Côte d\x27Ivoire\">Côte d\x27Ivoire</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group col-md-6 col-xl-auto\">
                                        <div class=\"icon\">
                                            <i class=\"fa-regular fa-person-hiking\"></i>
                                        </div>
                                        <div class=\"search-input\">
                                            <label>Service</label>
                                            <select class=\" nice-select\" name=\"type\" id=\"type\">
                                                <option value=\"Service\" selected disabled>Choisir un service</option>
                                                <option value=\"Visa\">Visa</option>
                                                <option value=\"Billet d\x27avion\">Billet d\x27avion</option>
                                                <option value=\"Circuit touristique\">Circuit touristique</option>
                                                <option value=\"Hôtel / résidence\">Hôtel / résidence</option>
                                                <option value=\"Location de véhicule\">Location de véhicule</option>
                                                <option value=\"Assurance voyage\">Assurance voyage</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group col-md-6 col-xl-auto\">
                                        <div class=\"icon\">
                                            <i class=\"fa-light fa-clock\"></i>
                                        </div>
                                        <div class=\"search-input\">
                                            <label>Départ prévu</label>
                                            <select class=\"form-select nice-select\" name=\"Durée\" id=\"Durée\">
                                                <option value=\"Normal\" selected disabled>Quand partez-vous ?</option>
                                                <option value=\"1\">Dans moins d\x27un mois</option>
                                                <option value=\"2\">Dans 1 à 3 mois</option>
                                                <option value=\"3\">Dans 3 à 6 mois</option>
                                                <option value=\"4\">Date non fixée</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-btn col-md-6 col-xl-auto\">
                                        <button class=\"th-btn\"><img src=\"";
        // line 438
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/search.svg"), 438, $this->source);
        yield "\" alt=\"\">Demander un devis</button>
                                    </div>
                                </div>
                                <p class=\"form-messages mb-0 mt-3\"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"scroll-down\">
        <a href=\"#destination-sec\" class=\"scroll-wrap\"><span><img src=\"";
        // line 450
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/down-arrow.svg"), 450, $this->source);
        yield "\" alt=\"\"></span> Défiler
            vers le bas</a>
    </div>
</div>
<!--======== / Hero Section ========--><!--==============================
Destination Area
==============================-->

<section class=\"position-relative overflow-hidden space\" id=\"destination-sec\" data-bg-src=\"";
        // line 458
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg/line-pattern3.png"), 458, $this->source);
        yield "\">
    <div class=\"container\">
        <div class=\"row justify-content-between\">
            <div class=\"col-lg-6\">
                <div class=\"title-area\">
                    <span class=\"sub-title\">Nos destinations visa</span>
                    <h2 class=\"sec-title\">Où souhaitez-vous partir ?</h2>
                </div>
            </div>
            <div class=\"col-lg-5\">
                <h2 class=\"destination-title\"><span class=\"counter-number\">6</span>+ destinations visa</h2>
                <p class=\"sec-text mb-30\">Life Voyages &amp; Tourisme vous accompagne dans la constitution de votre dossier visa pour les destinations les plus demandées, avec un traitement rapide et un suivi personnalisé.</p>

            </div>
        </div>
        <div class=\"slider-area\">
            <div class=\"swiper th-slider has-shadow\" data-slider-options=\x27{\"breakpoints\":{\"0\":{\"slidesPerView\":1},\"576\":{\"slidesPerView\":\"1\"},\"768\":{\"slidesPerView\":\"2\"},\"992\":{\"slidesPerView\":\"2\"},\"1200\":{\"slidesPerView\":\"3\"},\"1300\":{\"slidesPerView\":\"4\"}}}\x27>
                <div class=\"swiper-wrapper\">
                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"";
        // line 479
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/destination/destination_3_1.jpg"), 479, $this->source);
        yield "\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">France / Espace Schengen</a></h3>
                                <p class=\"destination-text\">Tourisme, études, affaires</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Constituer mon dossier</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"";
        // line 492
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/destination/destination_3_2.jpg"), 492, $this->source);
        yield "\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">Canada</a></h3>
                                <p class=\"destination-text\">Visa visiteur et études</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Constituer mon dossier</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"";
        // line 505
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/destination/destination_3_3.jpg"), 505, $this->source);
        yield "\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">Royaume-Uni</a></h3>
                                <p class=\"destination-text\">Visa visiteur</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Constituer mon dossier</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"";
        // line 518
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/destination/destination_3_4.jpg"), 518, $this->source);
        yield "\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">États-Unis</a></h3>
                                <p class=\"destination-text\">Visa touristique et études</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Constituer mon dossier</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"";
        // line 531
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/destination/destination_3_1.jpg"), 531, $this->source);
        yield "\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">Dubaï, ÉAU</a></h3>
                                <p class=\"destination-text\">Visa touristique rapide</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Constituer mon dossier</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"";
        // line 544
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/destination/destination_3_2.jpg"), 544, $this->source);
        yield "\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">Afrique &amp; Asie</a></h3>
                                <p class=\"destination-text\">Maroc, Chine, Turquie…</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Constituer mon dossier</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"destination-btn text-center mt-60\">
            <a href=\"#\" class=\"th-btn style3 th-icon\">Voir tous nos services</a>
        </div>
    </div>
</section><!--==============================
Category Area
==============================-->
<section class=\"category-area3 bg-smoke space\" data-bg-src=\"";
        // line 564
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg/line-pattern3.png"), 564, $this->source);
        yield "\">
    <div class=\"container th-container\">
        <div class=\"title-area text-center\">
            <span class=\"sub-title\">Nos prestations</span>
            <h2 class=\"sec-title\">Tout pour votre voyage, au même endroit</h2>
        </div>
        <div class=\"slider-area\">
            <div class=\"swiper th-slider has-shadow category-slider3\" id=\"categorySlider3\" data-slider-options=\x27{\"breakpoints\":{\"0\":{\"slidesPerView\":1},\"576\":{\"slidesPerView\":\"1\"},\"768\":{\"slidesPerView\":\"2\"},\"992\":{\"slidesPerView\":\"3\"},\"1200\":{\"slidesPerView\":\"3\"},\"1400\":{\"slidesPerView\":\"5\"}}}\x27>
                <div class=\"swiper-wrapper\">
                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"";
        // line 576
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/category/category_1_1.jpg"), 576, $this->source);
        yield "\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"";
        // line 578
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("accompagnement-visa"), 578, $this->source);
        yield "\">Accompagnement visa</a></h3>
                            <a class=\"line-btn\" href=\"";
        // line 579
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("accompagnement-visa"), 579, $this->source);
        yield "\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"";
        // line 586
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/category/category_1_2.jpg"), 586, $this->source);
        yield "\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"";
        // line 588
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("billetterie-vols"), 588, $this->source);
        yield "\">Billetterie &amp; vols</a></h3>
                            <a class=\"line-btn\" href=\"";
        // line 589
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("billetterie-vols"), 589, $this->source);
        yield "\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"";
        // line 596
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/category/category_1_3.jpg"), 596, $this->source);
        yield "\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"";
        // line 598
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("tourisme"), 598, $this->source);
        yield "\">Tourisme national &amp; international</a></h3>
                            <a class=\"line-btn\" href=\"";
        // line 599
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("tourisme"), 599, $this->source);
        yield "\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"";
        // line 606
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/category/category_1_4.jpg"), 606, $this->source);
        yield "\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"";
        // line 608
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("vehicules"), 608, $this->source);
        yield "\">Vente &amp; location de véhicules</a></h3>
                            <a class=\"line-btn\" href=\"";
        // line 609
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("vehicules"), 609, $this->source);
        yield "\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"";
        // line 616
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/category/category_1_5.jpg"), 616, $this->source);
        yield "\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"";
        // line 618
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("hotels-residences"), 618, $this->source);
        yield "\">Hôtels &amp; résidences meublées</a></h3>
                            <a class=\"line-btn\" href=\"";
        // line 619
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("hotels-residences"), 619, $this->source);
        yield "\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"";
        // line 626
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/category/category_1_1.jpg"), 626, $this->source);
        yield "\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"";
        // line 628
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("assurance-voyage"), 628, $this->source);
        yield "\">Assurance voyage</a></h3>
                            <a class=\"line-btn\" href=\"";
        // line 629
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("assurance-voyage"), 629, $this->source);
        yield "\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"";
        // line 636
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/category/category_1_2.jpg"), 636, $this->source);
        yield "\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"";
        // line 638
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("accompagnement-visa"), 638, $this->source);
        yield "\">Accompagnement visa</a></h3>
                            <a class=\"line-btn\" href=\"";
        // line 639
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("accompagnement-visa"), 639, $this->source);
        yield "\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"";
        // line 646
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/category/category_1_3.jpg"), 646, $this->source);
        yield "\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"";
        // line 648
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("billetterie-vols"), 648, $this->source);
        yield "\">Billetterie &amp; vols</a></h3>
                            <a class=\"line-btn\" href=\"";
        // line 649
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("billetterie-vols"), 649, $this->source);
        yield "\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"";
        // line 656
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/category/category_1_4.jpg"), 656, $this->source);
        yield "\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"";
        // line 658
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("tourisme"), 658, $this->source);
        yield "\">Tourisme national &amp; international</a></h3>
                            <a class=\"line-btn\" href=\"";
        // line 659
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("tourisme"), 659, $this->source);
        yield "\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"";
        // line 666
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/category/category_1_5.jpg"), 666, $this->source);
        yield "\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"";
        // line 668
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("vehicules"), 668, $this->source);
        yield "\">Vente &amp; location de véhicules</a></h3>
                            <a class=\"line-btn\" href=\"";
        // line 669
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("vehicules"), 669, $this->source);
        yield "\">Voir plus</a>
                        </div>
                    </div>



                </div>

                <div class=\"slider-pagination\"></div>
            </div>
        </div>
    </div>
</section> <!--==============================
About Area
==============================-->
<div class=\"about-area position-relative overflow-hidden space\" id=\"about-sec\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-7\">
                <div class=\"img-box3\">
                    <div class=\"img1\">
                        <img src=\"";
        // line 690
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/normal/about_3_1.jpg"), 690, $this->source);
        yield "\" alt=\"About\">
                    </div>
                    <div class=\"img2\">
                        <img src=\"";
        // line 693
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/normal/about_3_2.jpg"), 693, $this->source);
        yield "\" alt=\"About\">
                    </div>
                    <div class=\"img3 movingX\">
                        <img src=\"";
        // line 696
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/normal/about_3_3.jpg"), 696, $this->source);
        yield "\" alt=\"About\">
                    </div>
                </div>
            </div>
            <div class=\"col-xl-5\">
                <div class=\"ps-xl-4\">
                    <div class=\"title-area mb-20 pe-xxl-5 me-xxl-5\">
                        <span class=\"sub-title style1 \">Pourquoi nous choisir</span>
                        <h2 class=\"sec-title mb-20 pe-xl-5 me-xl-5 heading\">Voyagez sans stress, on s\x27occupe de tout</h2>
                    </div>
                    <p class=\"sec-text mb-30\">Basée à Grand-Bassam, Life Voyages &amp; Tourisme accompagne particuliers, familles et entreprises dans tous leurs projets de voyage. Grâce à notre réseau partenaire international, nous vous proposons des solutions fiables, adaptées à votre budget.</p>
                    <div class=\"about-item-wrap\">
                        <div class=\"about-item style2\">
                            <div class=\"about-item_img\"><img src=\"";
        // line 709
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_1.svg"), 709, $this->source);
        yield "\" alt=\"\"></div>
                            <div class=\"about-item_centent\">
                                <h5 class=\"box-title\">Service rapide et professionnel</h5>
                                <p class=\"about-item_text\">Traitement rapide des dossiers visa et réponse le jour même sur WhatsApp.</p>
                            </div>
                        </div>
                        <div class=\"about-item style2\">
                            <div class=\"about-item_img\"><img src=\"";
        // line 716
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_2.svg"), 716, $this->source);
        yield "\" alt=\"\"></div>
                            <div class=\"about-item_centent\">
                                <h5 class=\"box-title\">Sécurité et confidentialité</h5>
                                <p class=\"about-item_text\">Vos documents personnels sont traités avec soin et restent strictement confidentiels.</p>
                            </div>
                        </div>
                        <div class=\"about-item style2\">
                            <div class=\"about-item_img\"><img src=\"";
        // line 723
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_3.svg"), 723, $this->source);
        yield "\" alt=\"\"></div>
                            <div class=\"about-item_centent\">
                                <h5 class=\"box-title\">Accompagnement personnalisé</h5>
                                <p class=\"about-item_text\">Un conseiller suit votre dossier et vous explique chaque étape, jusqu\x27à votre départ.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-35\"><a href=\"about.html\" class=\"th-btn style3 th-icon\">En savoir plus</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"shape-mockup movingX d-none d-xxl-block\" data-top=\"4%\" data-left=\"2%\">
        <img src=\"";
        // line 736
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_2_1.png"), 736, $this->source);
        yield "\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup jump d-none d-xxl-block\" data-top=\"28%\" data-right=\"5%\">
        <img src=\"";
        // line 739
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_2_2.png"), 739, $this->source);
        yield "\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup spin d-none d-xxl-block\" data-bottom=\"18%\" data-left=\"2%\">
        <img src=\"";
        // line 742
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_2_3.png"), 742, $this->source);
        yield "\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup movixgX d-none d-xxl-block\" data-bottom=\"18%\" data-right=\"2%\">
        <img src=\"";
        // line 745
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_2_4.png"), 745, $this->source);
        yield "\" alt=\"shape\">
    </div>

    <div class=\"shape-mockup movingCar d-none d-xxl-block\" data-bottom=\"0%\" data-right=\"2%\">
        <img src=\"";
        // line 749
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/car_1.png"), 749, $this->source);
        yield "\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup d-none d-xxl-block\" data-bottom=\"0%\" data-right=\"0%\">
        <img src=\"";
        // line 752
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/tree_1.png"), 752, $this->source);
        yield "\" alt=\"shape\">
    </div>

</div><!--==============================
Service Area
==============================-->

<section class=\"position-relative bg-top-center overflow-hidden space\" id=\"service-sec\" data-bg-src=\"assets/img/bg/tour_bg_1.jpg\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"title-area text-center\">
                    <span class=\"sub-title\">Nos offres</span>
                    <h2 class=\"sec-title\">Circuits, hôtels et véhicules</h2>
                </div>
            </div>
        </div>
        <div class=\"nav nav-tabs tour-tabs\" id=\"nav-tab\" role=\"tablist\">
            <button class=\"nav-link th-btn active\" id=\"nav-step1-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-step1\" type=\"button\"><img src=\"";
        // line 770
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/tour_icon_1.svg"), 770, $this->source);
        yield "\" alt=\"\">Circuits</button>
            <button class=\"nav-link th-btn\" id=\"nav-step2-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-step2\" type=\"button\"><img src=\"";
        // line 771
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/tour_icon_2.svg"), 771, $this->source);
        yield "\" alt=\"\">Hôtels</button>
            <button class=\"nav-link th-btn\" id=\"nav-step3-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-step3\" type=\"button\"><img src=\"";
        // line 772
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/tour_icon_3.svg"), 772, $this->source);
        yield "\" alt=\"\">Véhicules</button>
        </div>

        <div class=\"tab-content\" id=\"nav-tabContent\">
            <div class=\"tab-pane fade active show\" id=\"nav-step1\" role=\"tabpanel\">
                <div class=\"slider-area tour-slider \">
                    <div class=\"swiper th-slider has-shadow\" data-slider-options=\x27{\"breakpoints\":{\"0\":{\"slidesPerView\":1},\"576\":{\"slidesPerView\":\"1\"},\"768\":{\"slidesPerView\":\"2\"},\"992\":{\"slidesPerView\":\"3\"},\"1200\":{\"slidesPerView\":\"3\"},\"1400\":{\"slidesPerView\":\"4\"}}}\x27>
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 783
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_1.jpg"), 783, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Grand-Bassam historique</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>1 Jour</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 806
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_2.jpg"), 806, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Week-end à Assinie</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>2 Jours</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 829
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_3.jpg"), 829, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Yamoussoukro, la capitale</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>2 Jours</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 852
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_4.jpg"), 852, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Man et ses cascades</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>3 Jours</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 875
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_1.jpg"), 875, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Grand-Bassam historique</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>1 Jour</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 898
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_2.jpg"), 898, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Week-end à Assinie</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>2 Jours</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 921
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_3.jpg"), 921, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Yamoussoukro, la capitale</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>2 Jours</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 944
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_4.jpg"), 944, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Man et ses cascades</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>3 Jours</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class=\"slider-pagination\"></div>
                    </div>

                </div>
            </div>
            <div class=\"tab-pane fade\" id=\"nav-step2\" role=\"tabpanel\">
                <div class=\"slider-area tour-slider \">
                    <div class=\"swiper th-slider has-shadow\" data-slider-options=\x27{\"breakpoints\":{\"0\":{\"slidesPerView\":1},\"576\":{\"slidesPerView\":\"1\"},\"768\":{\"slidesPerView\":\"2\"},\"992\":{\"slidesPerView\":\"3\"},\"1200\":{\"slidesPerView\":\"3\"},\"1400\":{\"slidesPerView\":\"4\"}}}\x27>
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 979
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_5.jpg"), 979, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Hôtel à Grand-Bassam</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Nuit</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Par nuit</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1002
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_6.jpg"), 1002, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Résidence meublée à Abidjan</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Nuit</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Par nuit</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1025
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_7.jpg"), 1025, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Hôtel à Dubaï</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Nuit</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Par nuit</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1048
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_8.jpg"), 1048, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Hôtel à Paris</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Nuit</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Par nuit</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1071
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_9.jpg"), 1071, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Hôtel à Assinie</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Nuit</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Par nuit</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1094
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_10.jpg"), 1094, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Résidence meublée à Grand-Bassam</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Nuit</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Par nuit</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1117
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_11.jpg"), 1117, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Hôtel à Casablanca</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Nuit</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Par nuit</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1140
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_12.jpg"), 1140, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Hôtel à Yamoussoukro</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Nuit</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Par nuit</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class=\"slider-pagination\"></div>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane fade\" id=\"nav-step3\" role=\"tabpanel\">
                <div class=\"slider-area tour-slider \">
                    <div class=\"swiper th-slider has-shadow\" data-slider-options=\x27{\"breakpoints\":{\"0\":{\"slidesPerView\":1},\"576\":{\"slidesPerView\":\"1\"},\"768\":{\"slidesPerView\":\"2\"},\"992\":{\"slidesPerView\":\"3\"},\"1200\":{\"slidesPerView\":\"3\"},\"1400\":{\"slidesPerView\":\"4\"}}}\x27>
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1174
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_13.jpg"), 1174, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Citadine</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Jour</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Courte ou longue durée</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1197
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_14.jpg"), 1197, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">SUV &amp; 4x4</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Jour</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Courte ou longue durée</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1220
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_15.jpg"), 1220, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Véhicule premium</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Jour</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Courte ou longue durée</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1243
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_16.jpg"), 1243, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Achat de véhicule</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">Sur devis</span></h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Vente sur devis</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1266
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_17.jpg"), 1266, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Location longue durée</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Mois</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Longue durée</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1289
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_18.jpg"), 1289, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Achat de véhicule</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">Sur devis</span></h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Vente sur devis</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1312
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_19.jpg"), 1312, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">SUV &amp; 4x4</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Jour</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Courte ou longue durée</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1335
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_20.jpg"), 1335, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Véhicule premium</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Jour</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Courte ou longue durée</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class=\"slider-pagination\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--==============================
Galerie Area
==============================-->
<div class=\"overflow-hidden space-bottom\">
    <div class=\"container\">
        <div class=\"title-area text-center\">
            <span class=\"sub-title\">Ils ont voyagé avec nous</span>
            <h2 class=\"sec-title\">Nos voyageurs en images</h2>
        </div>
        <div class=\"row gy-24 gx-24 justify-content-center\">
            <div class=\"col-lg-3\">
                <div class=\"gallery-box style2\">
                    <div class=\"gallery-img global-img\">
                        <a href=\"assets/img/gallery/gallery_3_1.jpg\" class=\"popup-image\">
                            <div class=\"icon-btn\"><i class=\"fal fa-magnifying-glass-plus\"></i></div>
                            <img src=\"";
        // line 1379
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_1.jpg"), 1379, $this->source);
        yield "\" alt=\"gallery image\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"gallery-box style2\">
                    <div class=\"gallery-img global-img\">
                        <a href=\"assets/img/gallery/gallery_3_2.jpg\" class=\"popup-image\">
                            <div class=\"icon-btn\"><i class=\"fal fa-magnifying-glass-plus\"></i></div>
                            <img src=\"";
        // line 1389
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_2.jpg"), 1389, $this->source);
        yield "\" alt=\"gallery image\">
                        </a>
                    </div>
                </div>
                <div class=\"gallery-box style2\">
                    <div class=\"gallery-img global-img\">
                        <a href=\"assets/img/gallery/gallery_3_4.jpg\" class=\"popup-image\">
                            <div class=\"icon-btn\"><i class=\"fal fa-magnifying-glass-plus\"></i></div>
                            <img src=\"";
        // line 1397
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_4.jpg"), 1397, $this->source);
        yield "\" alt=\"gallery image\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 \">
                <div class=\"gallery-box style2\">
                    <div class=\"gallery-img global-img\">
                        <a href=\"assets/img/gallery/gallery_3_3.jpg\" class=\"popup-image\">
                            <div class=\"icon-btn\"><i class=\"fal fa-magnifying-glass-plus\"></i></div>
                            <img src=\"";
        // line 1407
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_3.jpg"), 1407, $this->source);
        yield "\" alt=\"gallery image\">
                        </a>
                    </div>
                </div>
                <div class=\"gallery-box-wrapp\">
                    <div class=\"gallery-box style2\">
                        <div class=\"gallery-img global-img\">
                            <a href=\"assets/img/gallery/gallery_3_5.jpg\" class=\"popup-image\">
                                <div class=\"icon-btn\"><i class=\"fal fa-magnifying-glass-plus\"></i></div>
                                <img src=\"";
        // line 1416
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_5.jpg"), 1416, $this->source);
        yield "\" alt=\"gallery image\">
                            </a>
                        </div>
                    </div>
                    <div class=\"gallery-box style2\">
                        <div class=\"gallery-img global-img\">
                            <a href=\"assets/img/gallery/gallery_3_6.jpg\" class=\"popup-image\">
                                <div class=\"icon-btn\"><i class=\"fal fa-magnifying-glass-plus\"></i></div>
                                <img src=\"";
        // line 1424
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_6.jpg"), 1424, $this->source);
        yield "\" alt=\"gallery image\">
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- <div class=\"row gy-4 gallery-row filter-active\">
        <div class=\"col-md-6 col-xl-4 filter-item\">
<div class=\"gallery-box style2\">
    <div class=\"gallery-img global-img\">
        <img src=\"";
        // line 1437
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_1.jpg"), 1437, $this->source);
        yield "\" alt=\"gallery image\">
        <a href=\"assets/img/gallery/gallery_3_1.jpg\" class=\"icon-btn popup-image\"><i
                class=\"fal fa-magnifying-glass-plus\"></i></a>
    </div>
</div>
</div>
<div class=\"col-md-6 col-xl-4 filter-item\">
<div class=\"gallery-box style2\">
    <div class=\"gallery-img global-img\">
        <img src=\"";
        // line 1446
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_2.jpg"), 1446, $this->source);
        yield "\" alt=\"gallery image\">
        <a href=\"assets/img/gallery/gallery_3_2.jpg\" class=\"icon-btn popup-image\"><i
                class=\"fal fa-magnifying-glass-plus\"></i></a>
    </div>
</div>
</div>
<div class=\"col-md-6 col-xl-4 filter-item\">
<div class=\"gallery-box style2\">
    <div class=\"gallery-img global-img\">
        <img src=\"";
        // line 1455
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_3.jpg"), 1455, $this->source);
        yield "\" alt=\"gallery image\">
        <a href=\"assets/img/gallery/gallery_3_3.jpg\" class=\"icon-btn popup-image\"><i
                class=\"fal fa-magnifying-glass-plus\"></i></a>
    </div>
</div>
</div>
<div class=\"col-md-6 col-xl-4 filter-item\">
<div class=\"gallery-box style2\">
    <div class=\"gallery-img global-img\">
        <img src=\"";
        // line 1464
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_4.jpg"), 1464, $this->source);
        yield "\" alt=\"gallery image\">
        <a href=\"assets/img/gallery/gallery_3_4.jpg\" class=\"icon-btn popup-image\"><i
                class=\"fal fa-magnifying-glass-plus\"></i></a>
    </div>
</div>
</div>
<div class=\"col-md-6 col-xl-4 filter-item\">
<div class=\"gallery-box style2\">
    <div class=\"gallery-img global-img\">
        <img src=\"";
        // line 1473
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_5.jpg"), 1473, $this->source);
        yield "\" alt=\"gallery image\">
        <a href=\"assets/img/gallery/gallery_3_5.jpg\" class=\"icon-btn popup-image\"><i
                class=\"fal fa-magnifying-glass-plus\"></i></a>
    </div>
</div>
</div>
<div class=\"col-md-6 col-xl-4 filter-item\">
<div class=\"gallery-box style2\">
    <div class=\"gallery-img global-img\">
        <img src=\"";
        // line 1482
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_6.jpg"), 1482, $this->source);
        yield "\" alt=\"gallery image\">
        <a href=\"assets/img/gallery/gallery_3_6.jpg\" class=\"icon-btn popup-image\"><i
                class=\"fal fa-magnifying-glass-plus\"></i></a>
    </div>
</div>
</div>
    </div> -->
    </div>
</div><!--==============================
Team Area
==============================-->
<section class=\"team-area3 position-relative bg-top-center space\" data-bg-src=\"assets/img/bg/team_bg_2.jpg\">
    <div class=\"container z-index-common\">
        <div class=\"title-area text-center\">
            <span class=\"sub-title\">Notre équipe</span>
            <h2 class=\"sec-title\">Vos conseillers voyage</h2>
        </div>
        <div class=\"slider-area\">
            <div class=\"swiper th-slider teamSlider3 has-shadow\" id=\"teamSlider3\" data-slider-options=\x27{\"breakpoints\":{\"0\":{\"slidesPerView\":1},\"576\":{\"slidesPerView\":\"1\"},\"768\":{\"slidesPerView\":\"2\"},\"992\":{\"slidesPerView\":\"3\"},\"1200\":{\"slidesPerView\":\"3\"}}}\x27>
                <div class=\"swiper-wrapper\">
                    <!-- Single Item -->
                    <div class=\"swiper-slide\">
                        <div class=\"th-team team-grid\">
                            <div class=\"team-img\">
                                <img src=\"";
        // line 1506
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_img_1.jpg"), 1506, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"";
        // line 1509
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_1_1.jpg"), 1509, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">[Nom Prénom]</a></h3>
                                    <span class=\"team-desig\">Directeur(trice)</span>


                                    <div class=\"th-social\">
                                        <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                        <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        <a target=\"_blank\" href=\"https://youtube.com/\"><i class=\"fab fa-youtube\"></i></a>
                                        <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class=\"swiper-slide\">
                        <div class=\"th-team team-grid\">
                            <div class=\"team-img\">
                                <img src=\"";
        // line 1533
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_img_2.jpg"), 1533, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"";
        // line 1536
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_1_2.jpg"), 1536, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">[Nom Prénom]</a></h3>
                                    <span class=\"team-desig\">Conseiller(ère) visa</span>


                                    <div class=\"th-social\">
                                        <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                        <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        <a target=\"_blank\" href=\"https://youtube.com/\"><i class=\"fab fa-youtube\"></i></a>
                                        <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class=\"swiper-slide\">
                        <div class=\"th-team team-grid\">
                            <div class=\"team-img\">
                                <img src=\"";
        // line 1560
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_img_3.jpg"), 1560, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"";
        // line 1563
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_1_3.jpg"), 1563, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">[Nom Prénom]</a></h3>
                                    <span class=\"team-desig\">Billetterie</span>


                                    <div class=\"th-social\">
                                        <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                        <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        <a target=\"_blank\" href=\"https://youtube.com/\"><i class=\"fab fa-youtube\"></i></a>
                                        <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class=\"swiper-slide\">
                        <div class=\"th-team team-grid\">
                            <div class=\"team-img\">
                                <img src=\"";
        // line 1587
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_img_1.jpg"), 1587, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"";
        // line 1590
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_1_4.jpg"), 1590, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">[Nom Prénom]</a></h3>
                                    <span class=\"team-desig\">Tourisme &amp; circuits</span>


                                    <div class=\"th-social\">
                                        <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                        <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        <a target=\"_blank\" href=\"https://youtube.com/\"><i class=\"fab fa-youtube\"></i></a>
                                        <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class=\"swiper-slide\">
                        <div class=\"th-team team-grid\">
                            <div class=\"team-img\">
                                <img src=\"";
        // line 1614
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_img_2.jpg"), 1614, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"";
        // line 1617
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_1_5.jpg"), 1617, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">[Nom Prénom]</a></h3>
                                    <span class=\"team-desig\">Location de véhicules</span>


                                    <div class=\"th-social\">
                                        <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                        <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        <a target=\"_blank\" href=\"https://youtube.com/\"><i class=\"fab fa-youtube\"></i></a>
                                        <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class=\"swiper-slide\">
                        <div class=\"th-team team-grid\">
                            <div class=\"team-img\">
                                <img src=\"";
        // line 1641
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_img_3.jpg"), 1641, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"";
        // line 1644
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_1_6.jpg"), 1644, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">[Nom Prénom]</a></h3>
                                    <span class=\"team-desig\">Service client</span>


                                    <div class=\"th-social\">
                                        <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                        <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        <a target=\"_blank\" href=\"https://youtube.com/\"><i class=\"fab fa-youtube\"></i></a>
                                        <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class=\"swiper-slide\">
                        <div class=\"th-team team-grid\">
                            <div class=\"team-img\">
                                <img src=\"";
        // line 1668
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_img_1.jpg"), 1668, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"";
        // line 1671
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_1_3.jpg"), 1671, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">[Nom Prénom]</a></h3>
                                    <span class=\"team-desig\">Conseiller(ère) visa</span>


                                    <div class=\"th-social\">
                                        <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                        <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        <a target=\"_blank\" href=\"https://youtube.com/\"><i class=\"fab fa-youtube\"></i></a>
                                        <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class=\"swiper-slide\">
                        <div class=\"th-team team-grid\">
                            <div class=\"team-img\">
                                <img src=\"";
        // line 1695
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_img_2.jpg"), 1695, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"";
        // line 1698
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_1_4.jpg"), 1698, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">[Nom Prénom]</a></h3>
                                    <span class=\"team-desig\">Billetterie</span>


                                    <div class=\"th-social\">
                                        <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                        <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        <a target=\"_blank\" href=\"https://youtube.com/\"><i class=\"fab fa-youtube\"></i></a>
                                        <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class=\"slider-pagination\"></div>

            </div>
            <button data-slider-prev=\"#teamSlider3\" class=\"slider-arrow slider-prev\"><img src=\"";
        // line 1723
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/right-arrow2.svg"), 1723, $this->source);
        yield "\" alt=\"\"></button>
            <button data-slider-next=\"#teamSlider3\" class=\"slider-arrow slider-next\"><img src=\"";
        // line 1724
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/left-arrow2.svg"), 1724, $this->source);
        yield "\" alt=\"\"></button>
        </div>
    </div>
</section><!--==============================
elements Area
==============================-->
<div class=\"elements-sec bg-white overflow-hidden\">
    <div class=\"container-fluid\">
        <div class=\"tags-container relative\"></div>
    </div>
</div><!--==============================
Contact Area
==============================-->
<div class=\"bg-top-center  overflow-hidden\" data-bg-src=\"assets/img/bg/contact_bg_1.jpg\">
    <div class=\"container\">
        <div class=\"row gy-4 justify-content-between align-items-center\">
            <div class=\"col-lg-5\">
                <div class=\"pt-80 p-lg-0\">
                    <div class=\"title-area pe-xl-5\">
                        <span class=\"sub-title text-white\">Contactez-nous</span>
                        <h2 class=\"sec-title text-white\">Demandez votre devis</h2>
                        <p class=\"contact-text text-white\">Demandez votre visa, billet d\x27avion ou assurance voyage dès aujourd\x27hui ! Notre équipe vous répond rapidement.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"contact-form-area\">
                    <form action=\"mail.php\" method=\"POST\" class=\"contact-form2 ajax-contact\">
                        <div class=\"row\">
                            <div class=\"form-group col-12\">
                                <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name3\" placeholder=\"Nom et prénom\">
                                <img src=\"";
        // line 1755
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/user.svg"), 1755, $this->source);
        yield "\" alt=\"\">
                            </div>
                            <div class=\"form-group col-12\">
                                <input type=\"email\" class=\"form-control\" name=\"email3\" id=\"email3\" placeholder=\"Votre email\">
                                <img src=\"";
        // line 1759
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/mail.svg"), 1759, $this->source);
        yield "\" alt=\"\">
                            </div>
                            <div class=\"form-group col-12\">
                                <select name=\"subject\" id=\"subject\" class=\"form-select nice-select\">
                                    <option value=\"Service concerné\" selected disabled>Service concerné</option>
                                    <option value=\"Accompagnement visa\">Accompagnement visa</option>
                                    <option value=\"Billetterie / vols\">Billetterie / vols</option>
                                    <option value=\"Tourisme\">Tourisme</option>
                                    <option value=\"Véhicules\">Véhicules</option>
                                    <option value=\"Hôtels &amp; résidences\">Hôtels &amp; résidences</option>
                                    <option value=\"Assurance voyage\">Assurance voyage</option>
                                </select>
                            </div>
                            <div class=\"form-group col-12\">
                                <textarea name=\"message\" id=\"message\" cols=\"30\" rows=\"3\" class=\"form-control\" placeholder=\"Votre message\"></textarea>
                                <img src=\"";
        // line 1774
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/chat.svg"), 1774, $this->source);
        yield "\" alt=\"\">
                            </div>
                        </div>
                        <p class=\"form-messages mb-0 mt-3\"></p>
                    </form>
                    <div class=\"form-btn-wrapp\">
                        <div class=\"form-btn\">
                            <button class=\"th-btn white-btn\">Envoyer ma demande <img src=\"";
        // line 1781
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/plane3.svg"), 1781, $this->source);
        yield "\" alt=\"\"></button>
                        </div>
                        <div class=\"contact-info\">
                            <p class=\"contact-info_link\"><a href=\"tel:+2250757397423\">+225 07 57 39 74 23</a></p>
                            <div class=\"contact-info_icon\">
                                <a href=\"tel:+2250757397423\"><img src=\"";
        // line 1786
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/call.svg"), 1786, $this->source);
        yield "\" alt=\"\"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--==============================
Testimonial Area
==============================-->
<section class=\"testi-area3 bg-bottom-center overflow-hidden space\" id=\"testi-sec\" data-bg-src=\"assets/img/bg/map.png\">
    <div class=\"container\">
        <div class=\"title-area text-center\">
            <span class=\"sub-title\">Témoignages</span>
            <h2 class=\"sec-title\">Ce que disent nos clients</h2>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-12\">
                <div class=\"swiper th-slider testiSlide3\" id=\"testiSlide3\" data-slider-options=\x27{\"effect\":\"slide\",\"loop\":false,\"thumbs\":{\"swiper\":\".testi-grid-thumb\"}}\x27>
                    <div class=\"swiper-wrapper\">
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"";
        // line 1810
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_1.png"), 1810, $this->source);
        yield "\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">“Dossier Schengen préparé avec beaucoup de rigueur. On m\x27a expliqué chaque document, je me suis sentie accompagnée du début à la fin.”</p>
                                    <h6 class=\"testi-grid_name box-title\">[Prénom N.]</h6>
                                    <span class=\"testi-grid_desig\">Visa France</span>

                                </div>

                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"";
        // line 1824
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_2.png"), 1824, $this->source);
        yield "\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">“Billet Abidjan – Dubaï trouvé à un très bon prix, et réponse rapide sur WhatsApp. Je recommande.”</p>
                                    <h6 class=\"testi-grid_name box-title\">[Prénom N.]</h6>
                                    <span class=\"testi-grid_desig\">Billet d\x27avion</span>

                                </div>

                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"";
        // line 1838
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_3.png"), 1838, $this->source);
        yield "\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">“Pour mon visa étudiant, l\x27équipe m\x27a guidé étape par étape. Un vrai soutien pour ma famille et moi.”</p>
                                    <h6 class=\"testi-grid_name box-title\">[Prénom N.]</h6>
                                    <span class=\"testi-grid_desig\">Visa étudiant Canada</span>

                                </div>

                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"";
        // line 1852
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_4.png"), 1852, $this->source);
        yield "\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">“Location d\x27un 4x4 pour un voyage à Man : véhicule propre, livré à l\x27heure, prix respecté.”</p>
                                    <h6 class=\"testi-grid_name box-title\">[Prénom N.]</h6>
                                    <span class=\"testi-grid_desig\">Location véhicule</span>

                                </div>

                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"";
        // line 1866
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_5.png"), 1866, $this->source);
        yield "\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">“Week-end à Assinie parfaitement organisé pour notre famille. Nous n\x27avions rien à gérer.”</p>
                                    <h6 class=\"testi-grid_name box-title\">[Prénom N.]</h6>
                                    <span class=\"testi-grid_desig\">Circuit Assinie</span>

                                </div>

                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"";
        // line 1880
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_6.png"), 1880, $this->source);
        yield "\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">“Assurance voyage souscrite en quelques minutes, avec l\x27attestation demandée pour mon visa. Service sérieux.”</p>
                                    <h6 class=\"testi-grid_name box-title\">[Prénom N.]</h6>
                                    <span class=\"testi-grid_desig\">Assurance voyage</span>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"slider-pagination\"></div>
                </div>

            </div>
        </div>
    </div>
    <div class=\"swiper th-slider testi-grid-thumb\" data-slider-options=\x27{\"effect\":\"slide\",\"slidesPerView\":\"6\",\"spaceBetween\":7,\"loop\":false}\x27>
        <div class=\"swiper-wrapper\">
            <div class=\"swiper-slide\">
                <div class=\"box-img\">
                    <img src=\"";
        // line 1902
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_1.png"), 1902, $this->source);
        yield "\" alt=\"Image\">
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"box-img\">
                    <img src=\"";
        // line 1907
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_2.png"), 1907, $this->source);
        yield "\" alt=\"Image\">
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"box-img\">
                    <img src=\"";
        // line 1912
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_3.png"), 1912, $this->source);
        yield "\" alt=\"Image\">
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"box-img\">
                    <img src=\"";
        // line 1917
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_4.png"), 1917, $this->source);
        yield "\" alt=\"Image\">
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"box-img\">
                    <img src=\"";
        // line 1922
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_5.png"), 1922, $this->source);
        yield "\" alt=\"Image\">
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"box-img\">
                    <img src=\"";
        // line 1927
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_6.png"), 1927, $this->source);
        yield "\" alt=\"Image\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"shape-mockup movingX d-none d-xl-block\" data-top=\"20%\" data-left=\"5%\">
        <img class=\"gmovingX\" src=\"";
        // line 1933
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_7.png"), 1933, $this->source);
        yield "\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup spin d-none d-xl-block\" data-bottom=\"12%\" data-right=\"5%\">
        <img src=\"";
        // line 1936
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_2_5.png"), 1936, $this->source);
        yield "\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup jump d-none d-xl-block\" data-bottom=\"15%\" data-left=\"5%\">
        <img src=\"";
        // line 1939
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_2_2.png"), 1939, $this->source);
        yield "\" alt=\"shape\">
    </div>
</section><!--==============================
Brand Area
==============================-->
<div class=\"brand-area overflow-hidden space\">
    <div class=\"container th-container\">
        <div class=\"swiper th-slider brandSlider1\" id=\"brandSlider1\" data-slider-options=\x27{\"breakpoints\":{\"0\":{\"slidesPerView\":1},\"576\":{\"slidesPerView\":\"2\"},\"768\":{\"slidesPerView\":\"3\"},\"992\":{\"slidesPerView\":\"3\"},\"1200\":{\"slidesPerView\":\"6\"},\"1400\":{\"slidesPerView\":\"8\"}}}\x27>
            <div class=\"swiper-wrapper\">

                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 1952
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_1.svg"), 1952, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 1953
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_1.svg"), 1953, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 1960
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_2.svg"), 1960, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 1961
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_2.svg"), 1961, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 1968
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_3.svg"), 1968, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 1969
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_3.svg"), 1969, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 1976
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_4.svg"), 1976, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 1977
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_4.svg"), 1977, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 1984
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_5.svg"), 1984, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 1985
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_5.svg"), 1985, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 1992
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_6.svg"), 1992, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 1993
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_6.svg"), 1993, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 2000
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_7.svg"), 2000, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 2001
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_7.svg"), 2001, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 2008
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_8.svg"), 2008, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 2009
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_8.svg"), 2009, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 2016
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_4.svg"), 2016, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 2017
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_4.svg"), 2017, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 2024
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_3.svg"), 2024, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 2025
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_3.svg"), 2025, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 2032
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_2.svg"), 2032, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 2033
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_2.svg"), 2033, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 2040
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_1.svg"), 2040, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 2041
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_1.svg"), 2041, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div><!--==============================
Blog Area
==============================-->
<section class=\"bg-smoke overflow-hidden space\">
    <div class=\"container\">
        <div class=\"row justify-content-lg-between justify-content-center align-items-end\">
            <div class=\"col-lg\">
                <div class=\"title-area text-center text-lg-start\">
                    <span class=\"sub-title\">Conseils voyage</span>
                    <h2 class=\"sec-title\">Nos conseils pour bien voyager</h2>

                </div>
            </div>
            <div class=\"col-lg-auto d-none d-lg-block\">
                <div class=\"sec-btn\">
                    <a href=\"blog.html\" class=\"th-btn style4 th-icon\">Voir tous les conseils</a>
                </div>
            </div>
        </div>
        <div class=\"row gx-24 gy-30\">
            <div class=\"col-xl-5\">
                <div class=\"blog-grid th-ani\">
                    <div class=\"blog-img global-img\">
                        <img src=\"";
        // line 2073
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/blog_3_1.jpg"), 2073, $this->source);
        yield "\" alt=\"blog image\">
                    </div>
                    <div class=\"blog-grid_content\">
                        <div class=\"blog-meta\">
                            <a class=\"author\" href=\"blog.html\">10 Septembre 2026</a>
                            <a href=\"blog.html\">6 min de lecture</a>
                        </div>
                        <h3 class=\"box-title\"><a href=\"blog-details.html\">Visa Schengen depuis la Côte d\x27Ivoire : les documents à préparer</a></h3>
                        <a href=\"blog-details.html\" class=\"th-btn style4 th-icon\">Lire la suite</a>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-7\">
                <div class=\"blog-grid style2 th-ani\">
                    <div class=\"blog-img global-img\">
                        <img src=\"";
        // line 2088
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/blog_3_2.jpg"), 2088, $this->source);
        yield "\" alt=\"blog image\">
                    </div>
                    <div class=\"blog-grid_content\">
                        <div class=\"blog-meta\">
                            <a class=\"author\" href=\"blog.html\">02 Septembre 2026</a>
                            <a href=\"blog.html\">7 min de lecture</a>
                        </div>
                        <h3 class=\"box-title\"><a href=\"blog-details.html\">Étudier au Canada : les étapes du visa étudiant</a></h3>
                        <a href=\"blog-details.html\" class=\"th-btn style4 th-icon\">Lire la suite</a>
                    </div>
                </div>
                <div class=\"blog-grid th-ani style2 mt-24\">
                    <div class=\"blog-img global-img\">
                        <img src=\"";
        // line 2101
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/blog_3_3.jpg"), 2101, $this->source);
        yield "\" alt=\"blog image\">
                    </div>
                    <div class=\"blog-grid_content\">
                        <div class=\"blog-meta\">
                            <a class=\"author\" href=\"blog.html\">25 Août 2026</a>
                            <a href=\"blog.html\">8 min de lecture</a>
                        </div>
                        <h3 class=\"box-title\"><a href=\"blog-details.html\">Assurance voyage : pourquoi est-elle indispensable ?</a></h3>
                        <a href=\"blog-details.html\" class=\"th-btn style4 th-icon\">Lire la suite</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"shape-mockup shape1 d-none d-xxl-block\" data-top=\"14%\" data-right=\"9%\">
        <img src=\"";
        // line 2116
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_1.png"), 2116, $this->source);
        yield "\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup shape2 d-none d-xl-block\" data-top=\"25%\" data-right=\"6%\">
        <img src=\"";
        // line 2119
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_2.png"), 2119, $this->source);
        yield "\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup shape3 d-none d-xxl-block\" data-top=\"15%\" data-right=\"4%\">
        <img src=\"";
        // line 2122
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_3.png"), 2122, $this->source);
        yield "\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup movingX d-none d-xxl-block\" data-bottom=\"0%\" data-right=\"10%\">
        <img src=\"";
        // line 2125
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_9.png"), 2125, $this->source);
        yield "\" alt=\"shape\">
    </div>
</section><!--==============================
\tFooter Area

        Code End  Here
******************************** -->

<!-- Scroll To Top -->
<div class=\"scroll-top\">
    <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
        <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\">
        </path>
    </svg>
</div>
<!--==============================
modal Area
==============================-->
<div id=\"login-form\" class=\"popup-login-register mfp-hide\">
    <ul class=\"nav\" id=\"pills-tab\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-menu\" id=\"pills-home-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-home\" type=\"button\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"false\">Connexion</button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-menu active\" id=\"pills-profile-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-profile\" type=\"button\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"true\">Inscription</button>
        </li>
    </ul>
    <div class=\"tab-content\" id=\"pills-tabContent\">
        <div class=\"tab-pane fade\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
            <h3 class=\"box-title mb-30\">Connectez-vous à votre compte</h3>
            <div class=\"th-login-form\">
                <form action=\"mail.php\" method=\"POST\" class=\"login-form ajax-contact\">
                    <div class=\"row\">
                        <div class=\"form-group col-12\">
                            <label>Nom d\x27utilisateur ou email</label>
                            <input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\" required=\"required\">
                        </div>
                        <div class=\"form-group col-12\">
                            <label>Mot de passe</label>
                            <input type=\"password\" class=\"form-control\" name=\"pasword\" id=\"pasword\" required=\"required\">
                        </div>

                        <div class=\"form-btn mb-20 col-12\">
                            <button class=\"th-btn btn-fw th-radius2 \">Envoyer le message</button>
                        </div>
                    </div>
                    <div id=\"forgot_url\">
                        <a href=\"my-account.html\">Mot de passe oublié ?</a>
                    </div>
                    <p class=\"form-messages mb-0 mt-3\"></p>
                </form>
            </div>
        </div>
        <div class=\"tab-pane fade active show\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\">
            <h3 class=\"th-form-title mb-30\">Connectez-vous à votre compte</h3>
            <form action=\"mail.php\" method=\"POST\" class=\"login-form ajax-contact\">
                <div class=\"row\">
                    <div class=\"form-group col-12\">
                        <label>Nom d\x27utilisateur*</label>
                        <input type=\"text\" class=\"form-control\" name=\"usename\" id=\"usename\" required=\"required\">
                    </div>
                    <div class=\"form-group col-12\">
                        <label>Prénom*</label>
                        <input type=\"text\" class=\"form-control\" name=\"firstname\" id=\"firstname\" required=\"required\">
                    </div>
                    <div class=\"form-group col-12\">
                        <label>Nom*</label>
                        <input type=\"text\" class=\"form-control\" name=\"lastname\" id=\"lastname\" required=\"required\">
                    </div>
                    <div class=\"form-group col-12\">
                        <label for=\"new_email\">Votre email*</label>
                        <input type=\"text\" class=\"form-control\" name=\"new_email\" id=\"new_email\" required=\"required\">
                    </div>
                    <div class=\"form-group col-12\">
                        <label for=\"new_email_confirm\">Confirmer l\x27email*</label>
                        <input type=\"text\" class=\"form-control\" name=\"new_email_confirm\" id=\"new_email_confirm\" required=\"required\">
                    </div>
                    <div class=\"statement\">
                        <span class=\"register-notes\">Un mot de passe vous sera envoyé par email.</span>
                    </div>

                    <div class=\"form-btn mt-20 col-12\">
                        <button class=\"th-btn btn-fw th-radius2 \">S\x27inscrire</button>
                    </div>
                </div>
                <p class=\"form-messages mb-0 mt-3\"></p>
            </form>
        </div>
    </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/accueil.htm";
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
        return array (  2730 => 2125,  2724 => 2122,  2718 => 2119,  2712 => 2116,  2694 => 2101,  2678 => 2088,  2660 => 2073,  2625 => 2041,  2621 => 2040,  2611 => 2033,  2607 => 2032,  2597 => 2025,  2593 => 2024,  2583 => 2017,  2579 => 2016,  2569 => 2009,  2565 => 2008,  2555 => 2001,  2551 => 2000,  2541 => 1993,  2537 => 1992,  2527 => 1985,  2523 => 1984,  2513 => 1977,  2509 => 1976,  2499 => 1969,  2495 => 1968,  2485 => 1961,  2481 => 1960,  2471 => 1953,  2467 => 1952,  2451 => 1939,  2445 => 1936,  2439 => 1933,  2430 => 1927,  2422 => 1922,  2414 => 1917,  2406 => 1912,  2398 => 1907,  2390 => 1902,  2365 => 1880,  2348 => 1866,  2331 => 1852,  2314 => 1838,  2297 => 1824,  2280 => 1810,  2253 => 1786,  2245 => 1781,  2235 => 1774,  2217 => 1759,  2210 => 1755,  2176 => 1724,  2172 => 1723,  2144 => 1698,  2138 => 1695,  2111 => 1671,  2105 => 1668,  2078 => 1644,  2072 => 1641,  2045 => 1617,  2039 => 1614,  2012 => 1590,  2006 => 1587,  1979 => 1563,  1973 => 1560,  1946 => 1536,  1940 => 1533,  1913 => 1509,  1907 => 1506,  1880 => 1482,  1868 => 1473,  1856 => 1464,  1844 => 1455,  1832 => 1446,  1820 => 1437,  1804 => 1424,  1793 => 1416,  1781 => 1407,  1768 => 1397,  1757 => 1389,  1744 => 1379,  1697 => 1335,  1671 => 1312,  1645 => 1289,  1619 => 1266,  1593 => 1243,  1567 => 1220,  1541 => 1197,  1515 => 1174,  1478 => 1140,  1452 => 1117,  1426 => 1094,  1400 => 1071,  1374 => 1048,  1348 => 1025,  1322 => 1002,  1296 => 979,  1258 => 944,  1232 => 921,  1206 => 898,  1180 => 875,  1154 => 852,  1128 => 829,  1102 => 806,  1076 => 783,  1062 => 772,  1058 => 771,  1054 => 770,  1033 => 752,  1027 => 749,  1020 => 745,  1014 => 742,  1008 => 739,  1002 => 736,  986 => 723,  976 => 716,  966 => 709,  950 => 696,  944 => 693,  938 => 690,  914 => 669,  910 => 668,  905 => 666,  895 => 659,  891 => 658,  886 => 656,  876 => 649,  872 => 648,  867 => 646,  857 => 639,  853 => 638,  848 => 636,  838 => 629,  834 => 628,  829 => 626,  819 => 619,  815 => 618,  810 => 616,  800 => 609,  796 => 608,  791 => 606,  781 => 599,  777 => 598,  772 => 596,  762 => 589,  758 => 588,  753 => 586,  743 => 579,  739 => 578,  734 => 576,  719 => 564,  696 => 544,  680 => 531,  664 => 518,  648 => 505,  632 => 492,  616 => 479,  592 => 458,  581 => 450,  566 => 438,  497 => 372,  485 => 363,  473 => 354,  461 => 345,  449 => 336,  437 => 327,  431 => 324,  404 => 300,  383 => 282,  363 => 265,  343 => 248,  323 => 231,  310 => 220,  306 => 219,  252 => 168,  248 => 167,  244 => 166,  240 => 165,  236 => 164,  232 => 163,  205 => 139,  180 => 117,  169 => 109,  157 => 100,  138 => 84,  124 => 73,  105 => 57,  61 => 16,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!--********************************
       Code Start From Here
******************************** -->

<div class=\"magic-cursor relative z-10\">
    <div class=\"cursor\"></div>
    <div class=\"cursor-follower\"></div>
</div>


<!--==============================
 Preloader
==============================-->
<div id=\"preloader\" class=\"preloader \">
    <div class=\"preloader-inner\">
        <img style=\"height:100px;width:auto;\" src=\"{{\x27assets/img/life-voyage/loog.png\x27|theme }}\" alt=\"Life Voyage\">
    </div>

    <div id=\"loader\" class=\"th-preloader mt-4\">
        <div class=\"animation-preloader\">
            <div class=\"txt-loading\">
                <span preloader-text=\"L\" class=\"characters\">L </span>
                <span preloader-text=\"I\" class=\"characters\">I </span>
                <span preloader-text=\"F\" class=\"characters\">F </span>
                <span preloader-text=\"E\" class=\"characters\">E </span>

                <span preloader-text=\"\" class=\"characters\"> </span>

                <span preloader-text=\"T\" class=\"characters\">T </span>
                <span preloader-text=\"O\" class=\"characters\">O </span>
                <span preloader-text=\"U\" class=\"characters\">U </span>
                <span preloader-text=\"R\" class=\"characters\">R </span>
                <span preloader-text=\"I\" class=\"characters\">I </span>
                <span preloader-text=\"S\" class=\"characters\">S </span>
                <span preloader-text=\"M\" class=\"characters\">M </span>
                <span preloader-text=\"E\" class=\"characters\">E </span>

                <span preloader-text=\"V\" class=\"characters\">V </span>
                <span preloader-text=\"O\" class=\"characters\">O </span>
                <span preloader-text=\"Y\" class=\"characters\">Y </span>
                <span preloader-text=\"A\" class=\"characters\">A </span>
                <span preloader-text=\"G\" class=\"characters\">G </span>
                <span preloader-text=\"E\" class=\"characters\">E </span>
            </div>
        </div>
    </div>

</div> <!--==============================
    Sidemenu
============================== -->
<div class=\"sidemenu-wrapper sidemenu-info \">
    <div class=\"sidemenu-content\">
        <button class=\"closeButton sideMenuCls\"><i class=\"far fa-times\"></i></button>
        <div class=\"widget  \">
            <div class=\"th-widget-about\">
                <div class=\"about-logo\">
                    <a href=\"#\"><img style=\"height:56px;width:auto;\" src=\"{{\x27assets/img/life-voyage/loog.png\x27|theme }}\" alt=\"Life Voyage\"></a>
                </div>
                <p class=\"about-text\">Votre partenaire de confiance pour tous vos voyages à travers le monde. Visa, billets d\x27avion, séjours, hôtels, véhicules et assurance : à Grand-Bassam, nous nous occupons de tout.</p>
                <div class=\"th-social\">
                    <a href=\"https://www.facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a href=\"https://www.twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                    <a href=\"https://www.linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                    <a href=\"https://www.whatsapp.com/\"><i class=\"fab fa-whatsapp\"></i></a>
                </div>
            </div>
        </div>
        <div class=\"widget  \">
            <h3 class=\"widget_title\">Articles récents</h3>
            <div class=\"recent-post-wrap\">
                <div class=\"recent-post\">
                    <div class=\"media-img\">
                        <a href=\"blog-details.html\"><img src=\"{{\x27assets/img/blog/recent-post-1-1.jpg\x27|theme }}\" alt=\"Blog Image\"></a>
                    </div>
                    <div class=\"media-body\">
                        <div class=\"recent-post-meta\">
                            <a href=\"blog.html\"><i class=\"far fa-calendar\"></i>10 Septembre 2026</a>
                        </div>
                        <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"#\">Visa Schengen : les documents à préparer</a></h4>
                    </div>
                </div>
                <div class=\"recent-post\">
                    <div class=\"media-img\">
                        <a href=\"#\"><img src=\"{{\x27assets/img/blog/recent-post-1-2.jpg\x27|theme }}\" alt=\"Blog Image\"></a>
                    </div>
                    <div class=\"media-body\">
                        <div class=\"recent-post-meta\">
                            <a href=\"#\"><i class=\"far fa-calendar\"></i>02 Septembre 2026</a>
                        </div>
                        <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"#\">Étudier au Canada : les étapes du visa étudiant</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"widget  \">
            <h3 class=\"widget_title\">Contactez-nous</h3>
            <div class=\"th-widget-contact\">
                <div class=\"info-box_text\">
                    <div class=\"icon\">
                        <img src=\"{{\x27assets/img/icon/phone.svg\x27 |theme }}\" alt=\"img\">
                    </div>
                    <div class=\"details\">
                        <p><a href=\"tel:+2250757397423\" class=\"info-box_link\">+225 07 57 39 74 23</a></p>
                        <p><a href=\"tel:+2250789152812\" class=\"info-box_link\">+225 07 89 15 28 12</a></p>
                    </div>
                </div>
                <div class=\"info-box_text\">
                    <div class=\"icon\">
                        <img src=\"{{\x27assets/img/icon/envelope.svg\x27|theme }}\" alt=\"img\">
                    </div>
                    <div class=\"details\">
                        <p><a href=\"mailto:info@lifevoyagestourisme.com\" class=\"info-box_link\">info@lifevoyagestourisme.com</a></p>
                        <p><a href=\"mailto:life.voyages.tourisme@gmail.com\" class=\"info-box_link\">life.voyages.tourisme@gmail.com</a></p>
                    </div>
                </div>
                <div class=\"info-box_text\">
                    <div class=\"icon\"><img src=\"{{\x27assets/img/icon/location-dot.svg\x27|theme }}\" alt=\"img\"></div>
                    <div class=\"details\">
                        <p>Grand-Bassam, Mockeyville, Carrefour Femme Peulh 2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"popup-search-box\">
    <button class=\"searchClose\"><i class=\"fal fa-times\"></i></button>
    <form action=\"#\">
        <input type=\"text\" placeholder=\"Visa, billet d\x27avion, circuit…\">
        <button type=\"submit\"><i class=\"fal fa-search\"></i></button>
    </form>
</div><!--==============================
    Mobile Menu
  ============================== -->
<div class=\"th-menu-wrapper onepage-nav\">
    <div class=\"th-menu-area text-center\">
        <button class=\"th-menu-toggle\"><i class=\"fal fa-times\"></i></button>
        <div class=\"mobile-logo\">
            <a href=\"home-travel.html\"><img style=\"height:56px;width:auto;\" src=\"{{\x27assets/img/life-voyage/loog.png\x27|theme }}\" alt=\"Life Voyage\"></a>
        </div>
        <div class=\"th-mobile-menu\">
            <ul>
                <li class=\"menu-item-has-children\">
                    <a class=\"active\" href=\"home-travel.html\">Accueil</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"home-travel.html\">Accueil Voyage</a></li>
                        <li><a href=\"home-tour.html\">Accueil Circuit</a></li>
                        <li><a href=\"home-agency.html\">Accueil Agence</a></li>

                    </ul>
                </li>
                <li><a href=\"about.html\">À propos de nous</a></li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">Destination</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"#\">Destination</a></li>
                        <li><a href=\"destination-details.html\">Détails de la destination</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">Nos services</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"{{ \x27accompagnement-visa\x27|page }}\">Accompagnement visa</a></li>
                        <li><a href=\"{{ \x27billetterie-vols\x27|page }}\">Billetterie &amp; vols</a></li>
                        <li><a href=\"{{ \x27tourisme\x27|page }}\">Tourisme national &amp; international</a></li>
                        <li><a href=\"{{ \x27vehicules\x27|page }}\">Vente &amp; location de véhicules</a></li>
                        <li><a href=\"{{ \x27hotels-residences\x27|page }}\">Hôtels &amp; résidences meublées</a></li>
                        <li><a href=\"{{ \x27assurance-voyage\x27|page }}\">Assurance voyage</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">Activités</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"activités.html\">activités</a></li>
                        <li><a href=\"activités-details.html\">Détails des activités</a></li>
                    </ul>
                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">Pages</a>
                    <ul class=\"sub-menu\">
                        <li class=\"menu-item-has-children\">
                            <a href=\"#\">Boutique</a>
                            <ul class=\"sub-menu\">
                                <li><a href=\"shop.html\">Boutique</a></li>
                                <li><a href=\"shop-details.html\">Détails de la boutique</a></li>
                                <li><a href=\"cart.html\">Panier</a></li>
                                <li><a href=\"checkout.html\">Paiement</a></li>
                                <li><a href=\"wishlist.html\">Liste de souhaits</a></li>
                            </ul>
                        </li>

                        <li><a href=\"gallery.html\">Galerie</a></li>
                        <li><a href=\"tour.html\">Nos circuits</a></li>
                        <li><a href=\"tour-details.html\">Détails du circuit</a></li>
                        <li><a href=\"tour-guide.html\">Guide touristique</a></li>
                        <li><a href=\"tour-guider-details.html\">Détails du guide</a></li>
                        <li><a href=\"faq.html\">FAQ</a></li>
                        <li><a href=\"price.html\">Forfaits tarifaires</a></li>
                        <li><a href=\"error.html\">Page d\x27erreur</a></li>
                    </ul>

                </li>
                <li class=\"menu-item-has-children\">
                    <a href=\"#\">Blog</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"blog.html\">Blog</a></li>
                        <li><a href=\"blog-details.html\">Détails de l\x27article</a></li>
                    </ul>
                </li>
                <li>
                    <a href=\"contact.html\">Contactez-nous</a>
                </li>
            </ul>
        </div>
    </div>
</div><!--==============================
\tHeader Area
==============================-->
{% partial \x27header\x27 %}
<!--==============================
Hero Area
==============================-->
<!--==============================
Hero Area
==============================-->
<div class=\"hero-3\" id=\"hero\">
    <div class=\"swiper hero-slider-3\" id=\"heroSlide3\">
        <div class=\"swiper-wrapper\">
            <div class=\"swiper-slide\">
                <div class=\"hero-inner\">
                    <div class=\"th-hero-bg\" data-bg-src=\"{{\x27assets/img/hero/hero_bg_3_1.jpg\x27|theme }}\">
                    </div>
                    <div class=\"container\">
                        <div class=\"hero-style3\">
                            <h1 class=\"hero-title\" data-ani=\"slideinleft\" data-ani-delay=\"0.2s\">
                                Votre partenaire de confiance pour tous vos voyages
                            </h1>
                            <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Voyagez sans stress, nous nous occupons de tout ! Visa, billet d\x27avion, assurance voyage : un seul interlocuteur pour préparer votre départ.</p>
                            <div class=\"btn-group\" data-ani=\"slideinup\" data-ani-delay=\"0.6s\">
                                <a href=\"#\" class=\"th-btn style2 th-icon\">Demander un visa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"hero-inner\">
                    <div class=\"th-hero-bg\" data-bg-src=\"{{\x27assets/img/hero/hero_bg_3_2.jpg\x27|theme }}\">
                    </div>
                    <div class=\"container\">
                        <div class=\"hero-style3\">
                            <h1 class=\"hero-title\" data-ani=\"slideinleft\" data-ani-delay=\"0.2s\">
                                Traitement rapide de vos dossiers visa
                            </h1>
                            <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Voyagez sans stress, nous nous occupons de tout ! Visa, billet d\x27avion, assurance voyage : un seul interlocuteur pour préparer votre départ.</p>
                            <div class=\"btn-group\" data-ani=\"slideinup\" data-ani-delay=\"0.6s\">
                                <a href=\"#\" class=\"th-btn style2 th-icon\">Demander un visa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"hero-inner\">
                    <div class=\"th-hero-bg\" data-bg-src=\"{{\x27assets/img/hero/hero_bg_3_3.jpg\x27|theme }}\">
                    </div>
                    <div class=\"container\">
                        <div class=\"hero-style3\">
                            <h1 class=\"hero-title\" data-ani=\"slideinleft\" data-ani-delay=\"0.2s\">
                                Vos billets d\x27avion aux meilleurs tarifs
                            </h1>
                            <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Voyagez sans stress, nous nous occupons de tout ! Visa, billet d\x27avion, assurance voyage : un seul interlocuteur pour préparer votre départ.</p>
                            <div class=\"btn-group\" data-ani=\"slideinup\" data-ani-delay=\"0.6s\">
                                <a href=\"#\" class=\"th-btn style2 th-icon\">Réserver un vol</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"hero-inner\">
                    <div class=\"th-hero-bg\" data-bg-src=\"{{\x27assets/img/hero/hero_bg_3_4.jpg\x27|theme }}\">
                    </div>
                    <div class=\"container\">
                        <div class=\"hero-style3\">
                            <h1 class=\"hero-title\" data-ani=\"slideinleft\" data-ani-delay=\"0.2s\">
                                Découvrez la Côte d\x27Ivoire et le monde
                            </h1>
                            <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Voyagez sans stress, nous nous occupons de tout ! Visa, billet d\x27avion, assurance voyage : un seul interlocuteur pour préparer votre départ.</p>
                            <div class=\"btn-group\" data-ani=\"slideinup\" data-ani-delay=\"0.6s\">
                                <a href=\"#\" class=\"th-btn style2 th-icon\">Voir nos circuits</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"hero-inner\">
                    <video autoplay loop muted>
                        <source src=\"{{\x27assets/img/hero/hero-video3.mp4\x27 | theme }}\" type=\"video/mp4\">
                    </video>
                    <div class=\"container\">
                        <div class=\"hero-style3\">
                            <h1 class=\"hero-title\" data-ani=\"slideinleft\" data-ani-delay=\"0.2s\">
                                Voyagez l\x27esprit tranquille avec Life Voyages
                            </h1>
                            <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Voyagez sans stress, nous nous occupons de tout ! Visa, billet d\x27avion, assurance voyage : un seul interlocuteur pour préparer votre départ.</p>
                            <div class=\"btn-group\" data-ani=\"slideinup\" data-ani-delay=\"0.6s\">
                                <a href=\"#\" class=\"th-btn style2 th-icon\">Nous contacter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class=\"hero3-wrapper\">
        <div class=\"container\">
            <div class=\"row justify-content-center align-items-end flex-row-reverse\">
                <div class=\"col-lg-4\">
                    <div class=\"hero3-swiper-custom\">
                        <button data-slider-prev=\"#heroSlide3\" class=\"swiper-button-next\">
                            <img src=\"{{\x27assets/img/icon/hero-arrow-right.svg\x27 |theme }}\" alt=\"\"></button>
                        <div class=\"swiper-pagination\"></div>
                        <button data-slider-next=\"#heroSlide3\" class=\"swiper-button-prev\">
                            <img src=\"{{\x27assets/img/icon/hero-arrow-left.svg\x27 |theme }}\" alt=\"\"></button>

                    </div>
                    <div class=\"swiper hero3Thumbs\">
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\">
                                <div class=\"hero-inner\">
                                    <div class=\"hero3-card\">
                                        <div class=\"hero-img\">
                                            <img src=\"{{\x27assets/img/hero/hero_bg_3_1.jpg\x27|theme }}\" alt=\"\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"swiper-slide\">
                                <div class=\"hero-inner\">
                                    <div class=\"hero3-card\">
                                        <div class=\"hero-img\">
                                            <img src=\"{{\x27assets/img/hero/hero_bg_3_2.jpg\x27|theme }}\" alt=\"\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"swiper-slide\">
                                <div class=\"hero-inner\">
                                    <div class=\"hero3-card\">
                                        <div class=\"hero-img\">
                                            <img src=\"{{\x27assets/img/hero/hero_bg_3_3.jpg\x27|theme }}\" alt=\"\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"swiper-slide\">
                                <div class=\"hero-inner\">
                                    <div class=\"hero3-card\">
                                        <div class=\"hero-img\">
                                            <img src=\"{{ \x27assets/img/hero/hero_bg_3_4.jpg\x27| theme }}\" alt=\"\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"swiper-slide\">
                                <div class=\"hero-inner\">
                                    <div class=\"hero3-card\">
                                        <div class=\"hero-img\">
                                            <img src=\"{{ \x27assets/img/hero/hero_bg_3_5.jpg\x27|theme }}\" alt=\"\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"hero-booking\">
                        <form action=\"\" method=\"POST\" class=\"booking-form style2 ajax-contact\">
                            <div class=\"input-wrap\">
                                <div class=\"row align-items-center justify-content-between\">
                                    <div class=\"form-group col-md-6 col-xl-auto\">
                                        <div class=\"icon\">
                                            <i class=\"fa-light fa-route\"></i>
                                        </div>
                                        <div class=\"search-input\">
                                            <label>Destination</label>
                                            <select class=\" nice-select\" name=\"Destination\" id=\"Destination\">
                                                <option value=\"Sélectionner une destination\" selected disabled>Sélectionner une destination</option>
                                                <option value=\"France / Espace Schengen\">France / Espace Schengen</option>
                                                <option value=\"Royaume-Uni\">Royaume-Uni</option>
                                                <option value=\"Canada\">Canada</option>
                                                <option value=\"États-Unis\">États-Unis</option>
                                                <option value=\"Dubaï\">Dubaï</option>
                                                <option value=\"Maroc\">Maroc</option>
                                                <option value=\"Afrique\">Afrique</option>
                                                <option value=\"Asie\">Asie</option>
                                                <option value=\"Côte d\x27Ivoire\">Côte d\x27Ivoire</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group col-md-6 col-xl-auto\">
                                        <div class=\"icon\">
                                            <i class=\"fa-regular fa-person-hiking\"></i>
                                        </div>
                                        <div class=\"search-input\">
                                            <label>Service</label>
                                            <select class=\" nice-select\" name=\"type\" id=\"type\">
                                                <option value=\"Service\" selected disabled>Choisir un service</option>
                                                <option value=\"Visa\">Visa</option>
                                                <option value=\"Billet d\x27avion\">Billet d\x27avion</option>
                                                <option value=\"Circuit touristique\">Circuit touristique</option>
                                                <option value=\"Hôtel / résidence\">Hôtel / résidence</option>
                                                <option value=\"Location de véhicule\">Location de véhicule</option>
                                                <option value=\"Assurance voyage\">Assurance voyage</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group col-md-6 col-xl-auto\">
                                        <div class=\"icon\">
                                            <i class=\"fa-light fa-clock\"></i>
                                        </div>
                                        <div class=\"search-input\">
                                            <label>Départ prévu</label>
                                            <select class=\"form-select nice-select\" name=\"Durée\" id=\"Durée\">
                                                <option value=\"Normal\" selected disabled>Quand partez-vous ?</option>
                                                <option value=\"1\">Dans moins d\x27un mois</option>
                                                <option value=\"2\">Dans 1 à 3 mois</option>
                                                <option value=\"3\">Dans 3 à 6 mois</option>
                                                <option value=\"4\">Date non fixée</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-btn col-md-6 col-xl-auto\">
                                        <button class=\"th-btn\"><img src=\"{{\x27assets/img/icon/search.svg\x27|theme}}\" alt=\"\">Demander un devis</button>
                                    </div>
                                </div>
                                <p class=\"form-messages mb-0 mt-3\"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"scroll-down\">
        <a href=\"#destination-sec\" class=\"scroll-wrap\"><span><img src=\"{{\x27assets/img/icon/down-arrow.svg\x27|theme }}\" alt=\"\"></span> Défiler
            vers le bas</a>
    </div>
</div>
<!--======== / Hero Section ========--><!--==============================
Destination Area
==============================-->

<section class=\"position-relative overflow-hidden space\" id=\"destination-sec\" data-bg-src=\"{{\x27assets/img/bg/line-pattern3.png\x27|theme }}\">
    <div class=\"container\">
        <div class=\"row justify-content-between\">
            <div class=\"col-lg-6\">
                <div class=\"title-area\">
                    <span class=\"sub-title\">Nos destinations visa</span>
                    <h2 class=\"sec-title\">Où souhaitez-vous partir ?</h2>
                </div>
            </div>
            <div class=\"col-lg-5\">
                <h2 class=\"destination-title\"><span class=\"counter-number\">6</span>+ destinations visa</h2>
                <p class=\"sec-text mb-30\">Life Voyages &amp; Tourisme vous accompagne dans la constitution de votre dossier visa pour les destinations les plus demandées, avec un traitement rapide et un suivi personnalisé.</p>

            </div>
        </div>
        <div class=\"slider-area\">
            <div class=\"swiper th-slider has-shadow\" data-slider-options=\x27{\"breakpoints\":{\"0\":{\"slidesPerView\":1},\"576\":{\"slidesPerView\":\"1\"},\"768\":{\"slidesPerView\":\"2\"},\"992\":{\"slidesPerView\":\"2\"},\"1200\":{\"slidesPerView\":\"3\"},\"1300\":{\"slidesPerView\":\"4\"}}}\x27>
                <div class=\"swiper-wrapper\">
                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"{{\x27assets/img/destination/destination_3_1.jpg\x27 | theme}}\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">France / Espace Schengen</a></h3>
                                <p class=\"destination-text\">Tourisme, études, affaires</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Constituer mon dossier</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"{{\x27assets/img/destination/destination_3_2.jpg\x27 | theme}}\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">Canada</a></h3>
                                <p class=\"destination-text\">Visa visiteur et études</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Constituer mon dossier</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"{{\x27assets/img/destination/destination_3_3.jpg\x27 | theme}}\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">Royaume-Uni</a></h3>
                                <p class=\"destination-text\">Visa visiteur</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Constituer mon dossier</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"{{\x27assets/img/destination/destination_3_4.jpg\x27| theme }}\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">États-Unis</a></h3>
                                <p class=\"destination-text\">Visa touristique et études</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Constituer mon dossier</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"{{\x27assets/img/destination/destination_3_1.jpg\x27|theme }}\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">Dubaï, ÉAU</a></h3>
                                <p class=\"destination-text\">Visa touristique rapide</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Constituer mon dossier</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"{{\x27assets/img/destination/destination_3_2.jpg\x27|theme }}\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">Afrique &amp; Asie</a></h3>
                                <p class=\"destination-text\">Maroc, Chine, Turquie…</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Constituer mon dossier</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"destination-btn text-center mt-60\">
            <a href=\"#\" class=\"th-btn style3 th-icon\">Voir tous nos services</a>
        </div>
    </div>
</section><!--==============================
Category Area
==============================-->
<section class=\"category-area3 bg-smoke space\" data-bg-src=\"{{\x27assets/img/bg/line-pattern3.png\x27|theme }}\">
    <div class=\"container th-container\">
        <div class=\"title-area text-center\">
            <span class=\"sub-title\">Nos prestations</span>
            <h2 class=\"sec-title\">Tout pour votre voyage, au même endroit</h2>
        </div>
        <div class=\"slider-area\">
            <div class=\"swiper th-slider has-shadow category-slider3\" id=\"categorySlider3\" data-slider-options=\x27{\"breakpoints\":{\"0\":{\"slidesPerView\":1},\"576\":{\"slidesPerView\":\"1\"},\"768\":{\"slidesPerView\":\"2\"},\"992\":{\"slidesPerView\":\"3\"},\"1200\":{\"slidesPerView\":\"3\"},\"1400\":{\"slidesPerView\":\"5\"}}}\x27>
                <div class=\"swiper-wrapper\">
                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"{{\x27assets/img/category/category_1_1.jpg\x27|theme }}\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"{{ \x27accompagnement-visa\x27|page }}\">Accompagnement visa</a></h3>
                            <a class=\"line-btn\" href=\"{{ \x27accompagnement-visa\x27|page }}\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"{{\x27assets/img/category/category_1_2.jpg\x27|theme }}\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"{{ \x27billetterie-vols\x27|page }}\">Billetterie &amp; vols</a></h3>
                            <a class=\"line-btn\" href=\"{{ \x27billetterie-vols\x27|page }}\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"{{\x27assets/img/category/category_1_3.jpg\x27|theme }}\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"{{ \x27tourisme\x27|page }}\">Tourisme national &amp; international</a></h3>
                            <a class=\"line-btn\" href=\"{{ \x27tourisme\x27|page }}\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"{{\x27assets/img/category/category_1_4.jpg\x27|theme }}\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"{{ \x27vehicules\x27|page }}\">Vente &amp; location de véhicules</a></h3>
                            <a class=\"line-btn\" href=\"{{ \x27vehicules\x27|page }}\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"{{\x27assets/img/category/category_1_5.jpg\x27|theme }}\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"{{ \x27hotels-residences\x27|page }}\">Hôtels &amp; résidences meublées</a></h3>
                            <a class=\"line-btn\" href=\"{{ \x27hotels-residences\x27|page }}\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"{{\x27assets/img/category/category_1_1.jpg\x27|theme }}\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"{{ \x27assurance-voyage\x27|page }}\">Assurance voyage</a></h3>
                            <a class=\"line-btn\" href=\"{{ \x27assurance-voyage\x27|page }}\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"{{\x27assets/img/category/category_1_2.jpg\x27|theme }}\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"{{ \x27accompagnement-visa\x27|page }}\">Accompagnement visa</a></h3>
                            <a class=\"line-btn\" href=\"{{ \x27accompagnement-visa\x27|page }}\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"{{\x27assets/img/category/category_1_3.jpg\x27|theme }}\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"{{ \x27billetterie-vols\x27|page }}\">Billetterie &amp; vols</a></h3>
                            <a class=\"line-btn\" href=\"{{ \x27billetterie-vols\x27|page }}\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"{{\x27assets/img/category/category_1_4.jpg\x27 | theme}}\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"{{ \x27tourisme\x27|page }}\">Tourisme national &amp; international</a></h3>
                            <a class=\"line-btn\" href=\"{{ \x27tourisme\x27|page }}\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"{{\x27assets/img/category/category_1_5.jpg\x27 | theme}}\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"{{ \x27vehicules\x27|page }}\">Vente &amp; location de véhicules</a></h3>
                            <a class=\"line-btn\" href=\"{{ \x27vehicules\x27|page }}\">Voir plus</a>
                        </div>
                    </div>



                </div>

                <div class=\"slider-pagination\"></div>
            </div>
        </div>
    </div>
</section> <!--==============================
About Area
==============================-->
<div class=\"about-area position-relative overflow-hidden space\" id=\"about-sec\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-7\">
                <div class=\"img-box3\">
                    <div class=\"img1\">
                        <img src=\"{{\x27assets/img/normal/about_3_1.jpg\x27 | theme}}\" alt=\"About\">
                    </div>
                    <div class=\"img2\">
                        <img src=\"{{\x27assets/img/normal/about_3_2.jpg\x27 | theme}}\" alt=\"About\">
                    </div>
                    <div class=\"img3 movingX\">
                        <img src=\"{{\x27assets/img/normal/about_3_3.jpg\x27 | theme}}\" alt=\"About\">
                    </div>
                </div>
            </div>
            <div class=\"col-xl-5\">
                <div class=\"ps-xl-4\">
                    <div class=\"title-area mb-20 pe-xxl-5 me-xxl-5\">
                        <span class=\"sub-title style1 \">Pourquoi nous choisir</span>
                        <h2 class=\"sec-title mb-20 pe-xl-5 me-xl-5 heading\">Voyagez sans stress, on s\x27occupe de tout</h2>
                    </div>
                    <p class=\"sec-text mb-30\">Basée à Grand-Bassam, Life Voyages &amp; Tourisme accompagne particuliers, familles et entreprises dans tous leurs projets de voyage. Grâce à notre réseau partenaire international, nous vous proposons des solutions fiables, adaptées à votre budget.</p>
                    <div class=\"about-item-wrap\">
                        <div class=\"about-item style2\">
                            <div class=\"about-item_img\"><img src=\"{{\x27assets/img/icon/about_1_1.svg\x27 | theme}}\" alt=\"\"></div>
                            <div class=\"about-item_centent\">
                                <h5 class=\"box-title\">Service rapide et professionnel</h5>
                                <p class=\"about-item_text\">Traitement rapide des dossiers visa et réponse le jour même sur WhatsApp.</p>
                            </div>
                        </div>
                        <div class=\"about-item style2\">
                            <div class=\"about-item_img\"><img src=\"{{\x27assets/img/icon/about_1_2.svg\x27 | theme}}\" alt=\"\"></div>
                            <div class=\"about-item_centent\">
                                <h5 class=\"box-title\">Sécurité et confidentialité</h5>
                                <p class=\"about-item_text\">Vos documents personnels sont traités avec soin et restent strictement confidentiels.</p>
                            </div>
                        </div>
                        <div class=\"about-item style2\">
                            <div class=\"about-item_img\"><img src=\"{{\x27assets/img/icon/about_1_3.svg\x27 | theme}}\" alt=\"\"></div>
                            <div class=\"about-item_centent\">
                                <h5 class=\"box-title\">Accompagnement personnalisé</h5>
                                <p class=\"about-item_text\">Un conseiller suit votre dossier et vous explique chaque étape, jusqu\x27à votre départ.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"mt-35\"><a href=\"about.html\" class=\"th-btn style3 th-icon\">En savoir plus</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"shape-mockup movingX d-none d-xxl-block\" data-top=\"4%\" data-left=\"2%\">
        <img src=\"{{\x27assets/img/shape/shape_2_1.png\x27 | theme}}\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup jump d-none d-xxl-block\" data-top=\"28%\" data-right=\"5%\">
        <img src=\"{{\x27assets/img/shape/shape_2_2.png\x27 | theme}}\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup spin d-none d-xxl-block\" data-bottom=\"18%\" data-left=\"2%\">
        <img src=\"{{\x27assets/img/shape/shape_2_3.png\x27 | theme}}\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup movixgX d-none d-xxl-block\" data-bottom=\"18%\" data-right=\"2%\">
        <img src=\"{{\x27assets/img/shape/shape_2_4.png\x27 | theme}}\" alt=\"shape\">
    </div>

    <div class=\"shape-mockup movingCar d-none d-xxl-block\" data-bottom=\"0%\" data-right=\"2%\">
        <img src=\"{{\x27assets/img/shape/car_1.png\x27 | theme}}\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup d-none d-xxl-block\" data-bottom=\"0%\" data-right=\"0%\">
        <img src=\"{{\x27assets/img/shape/tree_1.png\x27 | theme}}\" alt=\"shape\">
    </div>

</div><!--==============================
Service Area
==============================-->

<section class=\"position-relative bg-top-center overflow-hidden space\" id=\"service-sec\" data-bg-src=\"assets/img/bg/tour_bg_1.jpg\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"title-area text-center\">
                    <span class=\"sub-title\">Nos offres</span>
                    <h2 class=\"sec-title\">Circuits, hôtels et véhicules</h2>
                </div>
            </div>
        </div>
        <div class=\"nav nav-tabs tour-tabs\" id=\"nav-tab\" role=\"tablist\">
            <button class=\"nav-link th-btn active\" id=\"nav-step1-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-step1\" type=\"button\"><img src=\"{{\x27assets/img/icon/tour_icon_1.svg\x27 | theme}}\" alt=\"\">Circuits</button>
            <button class=\"nav-link th-btn\" id=\"nav-step2-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-step2\" type=\"button\"><img src=\"{{\x27assets/img/icon/tour_icon_2.svg\x27 | theme}}\" alt=\"\">Hôtels</button>
            <button class=\"nav-link th-btn\" id=\"nav-step3-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-step3\" type=\"button\"><img src=\"{{\x27assets/img/icon/tour_icon_3.svg\x27 | theme}}\" alt=\"\">Véhicules</button>
        </div>

        <div class=\"tab-content\" id=\"nav-tabContent\">
            <div class=\"tab-pane fade active show\" id=\"nav-step1\" role=\"tabpanel\">
                <div class=\"slider-area tour-slider \">
                    <div class=\"swiper th-slider has-shadow\" data-slider-options=\x27{\"breakpoints\":{\"0\":{\"slidesPerView\":1},\"576\":{\"slidesPerView\":\"1\"},\"768\":{\"slidesPerView\":\"2\"},\"992\":{\"slidesPerView\":\"3\"},\"1200\":{\"slidesPerView\":\"3\"},\"1400\":{\"slidesPerView\":\"4\"}}}\x27>
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_1.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Grand-Bassam historique</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>1 Jour</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_2.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Week-end à Assinie</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>2 Jours</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_3.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Yamoussoukro, la capitale</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>2 Jours</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_4.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Man et ses cascades</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>3 Jours</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_1.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Grand-Bassam historique</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>1 Jour</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_2.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Week-end à Assinie</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>2 Jours</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_3.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Yamoussoukro, la capitale</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>2 Jours</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_4.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Man et ses cascades</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>3 Jours</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class=\"slider-pagination\"></div>
                    </div>

                </div>
            </div>
            <div class=\"tab-pane fade\" id=\"nav-step2\" role=\"tabpanel\">
                <div class=\"slider-area tour-slider \">
                    <div class=\"swiper th-slider has-shadow\" data-slider-options=\x27{\"breakpoints\":{\"0\":{\"slidesPerView\":1},\"576\":{\"slidesPerView\":\"1\"},\"768\":{\"slidesPerView\":\"2\"},\"992\":{\"slidesPerView\":\"3\"},\"1200\":{\"slidesPerView\":\"3\"},\"1400\":{\"slidesPerView\":\"4\"}}}\x27>
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_5.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Hôtel à Grand-Bassam</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Nuit</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Par nuit</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_6.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Résidence meublée à Abidjan</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Nuit</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Par nuit</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_7.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Hôtel à Dubaï</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Nuit</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Par nuit</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_8.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Hôtel à Paris</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Nuit</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Par nuit</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_9.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Hôtel à Assinie</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Nuit</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Par nuit</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_10.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Résidence meublée à Grand-Bassam</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Nuit</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Par nuit</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_11.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Hôtel à Casablanca</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Nuit</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Par nuit</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_12.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Hôtel à Yamoussoukro</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Nuit</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Par nuit</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class=\"slider-pagination\"></div>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane fade\" id=\"nav-step3\" role=\"tabpanel\">
                <div class=\"slider-area tour-slider \">
                    <div class=\"swiper th-slider has-shadow\" data-slider-options=\x27{\"breakpoints\":{\"0\":{\"slidesPerView\":1},\"576\":{\"slidesPerView\":\"1\"},\"768\":{\"slidesPerView\":\"2\"},\"992\":{\"slidesPerView\":\"3\"},\"1200\":{\"slidesPerView\":\"3\"},\"1400\":{\"slidesPerView\":\"4\"}}}\x27>
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_13.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Citadine</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Jour</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Courte ou longue durée</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_14.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">SUV &amp; 4x4</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Jour</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Courte ou longue durée</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_15.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Véhicule premium</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Jour</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Courte ou longue durée</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_16.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Achat de véhicule</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">Sur devis</span></h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Vente sur devis</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_17.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Location longue durée</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Mois</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Longue durée</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_18.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Achat de véhicule</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">Sur devis</span></h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Vente sur devis</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_19.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">SUV &amp; 4x4</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Jour</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Courte ou longue durée</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"{{\x27assets/img/tour/tour_box_20.jpg\x27 | theme}}\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Véhicule premium</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">XX XXX FCFA</span>/Jour</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>Courte ou longue durée</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class=\"slider-pagination\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--==============================
Galerie Area
==============================-->
<div class=\"overflow-hidden space-bottom\">
    <div class=\"container\">
        <div class=\"title-area text-center\">
            <span class=\"sub-title\">Ils ont voyagé avec nous</span>
            <h2 class=\"sec-title\">Nos voyageurs en images</h2>
        </div>
        <div class=\"row gy-24 gx-24 justify-content-center\">
            <div class=\"col-lg-3\">
                <div class=\"gallery-box style2\">
                    <div class=\"gallery-img global-img\">
                        <a href=\"assets/img/gallery/gallery_3_1.jpg\" class=\"popup-image\">
                            <div class=\"icon-btn\"><i class=\"fal fa-magnifying-glass-plus\"></i></div>
                            <img src=\"{{\x27assets/img/gallery/gallery_3_1.jpg\x27 | theme}}\" alt=\"gallery image\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"gallery-box style2\">
                    <div class=\"gallery-img global-img\">
                        <a href=\"assets/img/gallery/gallery_3_2.jpg\" class=\"popup-image\">
                            <div class=\"icon-btn\"><i class=\"fal fa-magnifying-glass-plus\"></i></div>
                            <img src=\"{{\x27assets/img/gallery/gallery_3_2.jpg\x27 | theme}}\" alt=\"gallery image\">
                        </a>
                    </div>
                </div>
                <div class=\"gallery-box style2\">
                    <div class=\"gallery-img global-img\">
                        <a href=\"assets/img/gallery/gallery_3_4.jpg\" class=\"popup-image\">
                            <div class=\"icon-btn\"><i class=\"fal fa-magnifying-glass-plus\"></i></div>
                            <img src=\"{{\x27assets/img/gallery/gallery_3_4.jpg\x27 | theme}}\" alt=\"gallery image\">
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 \">
                <div class=\"gallery-box style2\">
                    <div class=\"gallery-img global-img\">
                        <a href=\"assets/img/gallery/gallery_3_3.jpg\" class=\"popup-image\">
                            <div class=\"icon-btn\"><i class=\"fal fa-magnifying-glass-plus\"></i></div>
                            <img src=\"{{\x27assets/img/gallery/gallery_3_3.jpg\x27 | theme}}\" alt=\"gallery image\">
                        </a>
                    </div>
                </div>
                <div class=\"gallery-box-wrapp\">
                    <div class=\"gallery-box style2\">
                        <div class=\"gallery-img global-img\">
                            <a href=\"assets/img/gallery/gallery_3_5.jpg\" class=\"popup-image\">
                                <div class=\"icon-btn\"><i class=\"fal fa-magnifying-glass-plus\"></i></div>
                                <img src=\"{{\x27assets/img/gallery/gallery_3_5.jpg\x27 | theme}}\" alt=\"gallery image\">
                            </a>
                        </div>
                    </div>
                    <div class=\"gallery-box style2\">
                        <div class=\"gallery-img global-img\">
                            <a href=\"assets/img/gallery/gallery_3_6.jpg\" class=\"popup-image\">
                                <div class=\"icon-btn\"><i class=\"fal fa-magnifying-glass-plus\"></i></div>
                                <img src=\"{{\x27assets/img/gallery/gallery_3_6.jpg\x27 | theme}}\" alt=\"gallery image\">
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- <div class=\"row gy-4 gallery-row filter-active\">
        <div class=\"col-md-6 col-xl-4 filter-item\">
<div class=\"gallery-box style2\">
    <div class=\"gallery-img global-img\">
        <img src=\"{{\x27assets/img/gallery/gallery_3_1.jpg\x27 | theme}}\" alt=\"gallery image\">
        <a href=\"assets/img/gallery/gallery_3_1.jpg\" class=\"icon-btn popup-image\"><i
                class=\"fal fa-magnifying-glass-plus\"></i></a>
    </div>
</div>
</div>
<div class=\"col-md-6 col-xl-4 filter-item\">
<div class=\"gallery-box style2\">
    <div class=\"gallery-img global-img\">
        <img src=\"{{\x27assets/img/gallery/gallery_3_2.jpg\x27 | theme}}\" alt=\"gallery image\">
        <a href=\"assets/img/gallery/gallery_3_2.jpg\" class=\"icon-btn popup-image\"><i
                class=\"fal fa-magnifying-glass-plus\"></i></a>
    </div>
</div>
</div>
<div class=\"col-md-6 col-xl-4 filter-item\">
<div class=\"gallery-box style2\">
    <div class=\"gallery-img global-img\">
        <img src=\"{{\x27assets/img/gallery/gallery_3_3.jpg\x27 | theme}}\" alt=\"gallery image\">
        <a href=\"assets/img/gallery/gallery_3_3.jpg\" class=\"icon-btn popup-image\"><i
                class=\"fal fa-magnifying-glass-plus\"></i></a>
    </div>
</div>
</div>
<div class=\"col-md-6 col-xl-4 filter-item\">
<div class=\"gallery-box style2\">
    <div class=\"gallery-img global-img\">
        <img src=\"{{\x27assets/img/gallery/gallery_3_4.jpg\x27 | theme}}\" alt=\"gallery image\">
        <a href=\"assets/img/gallery/gallery_3_4.jpg\" class=\"icon-btn popup-image\"><i
                class=\"fal fa-magnifying-glass-plus\"></i></a>
    </div>
</div>
</div>
<div class=\"col-md-6 col-xl-4 filter-item\">
<div class=\"gallery-box style2\">
    <div class=\"gallery-img global-img\">
        <img src=\"{{\x27assets/img/gallery/gallery_3_5.jpg\x27 | theme}}\" alt=\"gallery image\">
        <a href=\"assets/img/gallery/gallery_3_5.jpg\" class=\"icon-btn popup-image\"><i
                class=\"fal fa-magnifying-glass-plus\"></i></a>
    </div>
</div>
</div>
<div class=\"col-md-6 col-xl-4 filter-item\">
<div class=\"gallery-box style2\">
    <div class=\"gallery-img global-img\">
        <img src=\"{{\x27assets/img/gallery/gallery_3_6.jpg\x27 | theme}}\" alt=\"gallery image\">
        <a href=\"assets/img/gallery/gallery_3_6.jpg\" class=\"icon-btn popup-image\"><i
                class=\"fal fa-magnifying-glass-plus\"></i></a>
    </div>
</div>
</div>
    </div> -->
    </div>
</div><!--==============================
Team Area
==============================-->
<section class=\"team-area3 position-relative bg-top-center space\" data-bg-src=\"assets/img/bg/team_bg_2.jpg\">
    <div class=\"container z-index-common\">
        <div class=\"title-area text-center\">
            <span class=\"sub-title\">Notre équipe</span>
            <h2 class=\"sec-title\">Vos conseillers voyage</h2>
        </div>
        <div class=\"slider-area\">
            <div class=\"swiper th-slider teamSlider3 has-shadow\" id=\"teamSlider3\" data-slider-options=\x27{\"breakpoints\":{\"0\":{\"slidesPerView\":1},\"576\":{\"slidesPerView\":\"1\"},\"768\":{\"slidesPerView\":\"2\"},\"992\":{\"slidesPerView\":\"3\"},\"1200\":{\"slidesPerView\":\"3\"}}}\x27>
                <div class=\"swiper-wrapper\">
                    <!-- Single Item -->
                    <div class=\"swiper-slide\">
                        <div class=\"th-team team-grid\">
                            <div class=\"team-img\">
                                <img src=\"{{\x27assets/img/team/team_img_1.jpg\x27 | theme}}\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"{{\x27assets/img/team/team_1_1.jpg\x27 | theme}}\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">[Nom Prénom]</a></h3>
                                    <span class=\"team-desig\">Directeur(trice)</span>


                                    <div class=\"th-social\">
                                        <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                        <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        <a target=\"_blank\" href=\"https://youtube.com/\"><i class=\"fab fa-youtube\"></i></a>
                                        <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class=\"swiper-slide\">
                        <div class=\"th-team team-grid\">
                            <div class=\"team-img\">
                                <img src=\"{{\x27assets/img/team/team_img_2.jpg\x27 | theme}}\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"{{\x27assets/img/team/team_1_2.jpg\x27 | theme}}\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">[Nom Prénom]</a></h3>
                                    <span class=\"team-desig\">Conseiller(ère) visa</span>


                                    <div class=\"th-social\">
                                        <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                        <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        <a target=\"_blank\" href=\"https://youtube.com/\"><i class=\"fab fa-youtube\"></i></a>
                                        <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class=\"swiper-slide\">
                        <div class=\"th-team team-grid\">
                            <div class=\"team-img\">
                                <img src=\"{{\x27assets/img/team/team_img_3.jpg\x27 | theme}}\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"{{\x27assets/img/team/team_1_3.jpg\x27 | theme}}\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">[Nom Prénom]</a></h3>
                                    <span class=\"team-desig\">Billetterie</span>


                                    <div class=\"th-social\">
                                        <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                        <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        <a target=\"_blank\" href=\"https://youtube.com/\"><i class=\"fab fa-youtube\"></i></a>
                                        <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class=\"swiper-slide\">
                        <div class=\"th-team team-grid\">
                            <div class=\"team-img\">
                                <img src=\"{{\x27assets/img/team/team_img_1.jpg\x27 | theme}}\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"{{\x27assets/img/team/team_1_4.jpg\x27 | theme}}\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">[Nom Prénom]</a></h3>
                                    <span class=\"team-desig\">Tourisme &amp; circuits</span>


                                    <div class=\"th-social\">
                                        <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                        <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        <a target=\"_blank\" href=\"https://youtube.com/\"><i class=\"fab fa-youtube\"></i></a>
                                        <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class=\"swiper-slide\">
                        <div class=\"th-team team-grid\">
                            <div class=\"team-img\">
                                <img src=\"{{\x27assets/img/team/team_img_2.jpg\x27 | theme}}\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"{{\x27assets/img/team/team_1_5.jpg\x27 | theme}}\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">[Nom Prénom]</a></h3>
                                    <span class=\"team-desig\">Location de véhicules</span>


                                    <div class=\"th-social\">
                                        <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                        <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        <a target=\"_blank\" href=\"https://youtube.com/\"><i class=\"fab fa-youtube\"></i></a>
                                        <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class=\"swiper-slide\">
                        <div class=\"th-team team-grid\">
                            <div class=\"team-img\">
                                <img src=\"{{\x27assets/img/team/team_img_3.jpg\x27 | theme}}\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"{{\x27assets/img/team/team_1_6.jpg\x27 | theme}}\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">[Nom Prénom]</a></h3>
                                    <span class=\"team-desig\">Service client</span>


                                    <div class=\"th-social\">
                                        <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                        <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        <a target=\"_blank\" href=\"https://youtube.com/\"><i class=\"fab fa-youtube\"></i></a>
                                        <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class=\"swiper-slide\">
                        <div class=\"th-team team-grid\">
                            <div class=\"team-img\">
                                <img src=\"{{\x27assets/img/team/team_img_1.jpg\x27 | theme}}\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"{{\x27assets/img/team/team_1_3.jpg\x27 | theme}}\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">[Nom Prénom]</a></h3>
                                    <span class=\"team-desig\">Conseiller(ère) visa</span>


                                    <div class=\"th-social\">
                                        <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                        <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        <a target=\"_blank\" href=\"https://youtube.com/\"><i class=\"fab fa-youtube\"></i></a>
                                        <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class=\"swiper-slide\">
                        <div class=\"th-team team-grid\">
                            <div class=\"team-img\">
                                <img src=\"{{\x27assets/img/team/team_img_2.jpg\x27 | theme}}\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"{{\x27assets/img/team/team_1_4.jpg\x27 | theme}}\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">[Nom Prénom]</a></h3>
                                    <span class=\"team-desig\">Billetterie</span>


                                    <div class=\"th-social\">
                                        <a target=\"_blank\" href=\"https://facebook.com/\"><i class=\"fab fa-facebook-f\"></i></a>
                                        <a target=\"_blank\" href=\"https://twitter.com/\"><i class=\"fab fa-twitter\"></i></a>
                                        <a target=\"_blank\" href=\"https://linkedin.com/\"><i class=\"fab fa-linkedin-in\"></i></a>
                                        <a target=\"_blank\" href=\"https://youtube.com/\"><i class=\"fab fa-youtube\"></i></a>
                                        <a target=\"_blank\" href=\"https://instagram.com/\"><i class=\"fab fa-instagram\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class=\"slider-pagination\"></div>

            </div>
            <button data-slider-prev=\"#teamSlider3\" class=\"slider-arrow slider-prev\"><img src=\"{{\x27assets/img/icon/right-arrow2.svg\x27 | theme}}\" alt=\"\"></button>
            <button data-slider-next=\"#teamSlider3\" class=\"slider-arrow slider-next\"><img src=\"{{\x27assets/img/icon/left-arrow2.svg\x27 | theme}}\" alt=\"\"></button>
        </div>
    </div>
</section><!--==============================
elements Area
==============================-->
<div class=\"elements-sec bg-white overflow-hidden\">
    <div class=\"container-fluid\">
        <div class=\"tags-container relative\"></div>
    </div>
</div><!--==============================
Contact Area
==============================-->
<div class=\"bg-top-center  overflow-hidden\" data-bg-src=\"assets/img/bg/contact_bg_1.jpg\">
    <div class=\"container\">
        <div class=\"row gy-4 justify-content-between align-items-center\">
            <div class=\"col-lg-5\">
                <div class=\"pt-80 p-lg-0\">
                    <div class=\"title-area pe-xl-5\">
                        <span class=\"sub-title text-white\">Contactez-nous</span>
                        <h2 class=\"sec-title text-white\">Demandez votre devis</h2>
                        <p class=\"contact-text text-white\">Demandez votre visa, billet d\x27avion ou assurance voyage dès aujourd\x27hui ! Notre équipe vous répond rapidement.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"contact-form-area\">
                    <form action=\"mail.php\" method=\"POST\" class=\"contact-form2 ajax-contact\">
                        <div class=\"row\">
                            <div class=\"form-group col-12\">
                                <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name3\" placeholder=\"Nom et prénom\">
                                <img src=\"{{\x27assets/img/icon/user.svg\x27 | theme}}\" alt=\"\">
                            </div>
                            <div class=\"form-group col-12\">
                                <input type=\"email\" class=\"form-control\" name=\"email3\" id=\"email3\" placeholder=\"Votre email\">
                                <img src=\"{{\x27assets/img/icon/mail.svg\x27 | theme}}\" alt=\"\">
                            </div>
                            <div class=\"form-group col-12\">
                                <select name=\"subject\" id=\"subject\" class=\"form-select nice-select\">
                                    <option value=\"Service concerné\" selected disabled>Service concerné</option>
                                    <option value=\"Accompagnement visa\">Accompagnement visa</option>
                                    <option value=\"Billetterie / vols\">Billetterie / vols</option>
                                    <option value=\"Tourisme\">Tourisme</option>
                                    <option value=\"Véhicules\">Véhicules</option>
                                    <option value=\"Hôtels &amp; résidences\">Hôtels &amp; résidences</option>
                                    <option value=\"Assurance voyage\">Assurance voyage</option>
                                </select>
                            </div>
                            <div class=\"form-group col-12\">
                                <textarea name=\"message\" id=\"message\" cols=\"30\" rows=\"3\" class=\"form-control\" placeholder=\"Votre message\"></textarea>
                                <img src=\"{{\x27assets/img/icon/chat.svg\x27 | theme}}\" alt=\"\">
                            </div>
                        </div>
                        <p class=\"form-messages mb-0 mt-3\"></p>
                    </form>
                    <div class=\"form-btn-wrapp\">
                        <div class=\"form-btn\">
                            <button class=\"th-btn white-btn\">Envoyer ma demande <img src=\"{{\x27assets/img/icon/plane3.svg\x27 | theme}}\" alt=\"\"></button>
                        </div>
                        <div class=\"contact-info\">
                            <p class=\"contact-info_link\"><a href=\"tel:+2250757397423\">+225 07 57 39 74 23</a></p>
                            <div class=\"contact-info_icon\">
                                <a href=\"tel:+2250757397423\"><img src=\"{{\x27assets/img/icon/call.svg\x27 | theme}}\" alt=\"\"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--==============================
Testimonial Area
==============================-->
<section class=\"testi-area3 bg-bottom-center overflow-hidden space\" id=\"testi-sec\" data-bg-src=\"assets/img/bg/map.png\">
    <div class=\"container\">
        <div class=\"title-area text-center\">
            <span class=\"sub-title\">Témoignages</span>
            <h2 class=\"sec-title\">Ce que disent nos clients</h2>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-12\">
                <div class=\"swiper th-slider testiSlide3\" id=\"testiSlide3\" data-slider-options=\x27{\"effect\":\"slide\",\"loop\":false,\"thumbs\":{\"swiper\":\".testi-grid-thumb\"}}\x27>
                    <div class=\"swiper-wrapper\">
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"{{\x27assets/img/testimonial/testi_3_1.png\x27 | theme}}\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">“Dossier Schengen préparé avec beaucoup de rigueur. On m\x27a expliqué chaque document, je me suis sentie accompagnée du début à la fin.”</p>
                                    <h6 class=\"testi-grid_name box-title\">[Prénom N.]</h6>
                                    <span class=\"testi-grid_desig\">Visa France</span>

                                </div>

                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"{{\x27assets/img/testimonial/testi_3_2.png\x27 | theme}}\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">“Billet Abidjan – Dubaï trouvé à un très bon prix, et réponse rapide sur WhatsApp. Je recommande.”</p>
                                    <h6 class=\"testi-grid_name box-title\">[Prénom N.]</h6>
                                    <span class=\"testi-grid_desig\">Billet d\x27avion</span>

                                </div>

                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"{{\x27assets/img/testimonial/testi_3_3.png\x27 | theme}}\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">“Pour mon visa étudiant, l\x27équipe m\x27a guidé étape par étape. Un vrai soutien pour ma famille et moi.”</p>
                                    <h6 class=\"testi-grid_name box-title\">[Prénom N.]</h6>
                                    <span class=\"testi-grid_desig\">Visa étudiant Canada</span>

                                </div>

                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"{{\x27assets/img/testimonial/testi_3_4.png\x27 | theme}}\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">“Location d\x27un 4x4 pour un voyage à Man : véhicule propre, livré à l\x27heure, prix respecté.”</p>
                                    <h6 class=\"testi-grid_name box-title\">[Prénom N.]</h6>
                                    <span class=\"testi-grid_desig\">Location véhicule</span>

                                </div>

                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"{{\x27assets/img/testimonial/testi_3_5.png\x27 | theme}}\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">“Week-end à Assinie parfaitement organisé pour notre famille. Nous n\x27avions rien à gérer.”</p>
                                    <h6 class=\"testi-grid_name box-title\">[Prénom N.]</h6>
                                    <span class=\"testi-grid_desig\">Circuit Assinie</span>

                                </div>

                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"{{\x27assets/img/testimonial/testi_3_6.png\x27 | theme}}\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">“Assurance voyage souscrite en quelques minutes, avec l\x27attestation demandée pour mon visa. Service sérieux.”</p>
                                    <h6 class=\"testi-grid_name box-title\">[Prénom N.]</h6>
                                    <span class=\"testi-grid_desig\">Assurance voyage</span>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=\"slider-pagination\"></div>
                </div>

            </div>
        </div>
    </div>
    <div class=\"swiper th-slider testi-grid-thumb\" data-slider-options=\x27{\"effect\":\"slide\",\"slidesPerView\":\"6\",\"spaceBetween\":7,\"loop\":false}\x27>
        <div class=\"swiper-wrapper\">
            <div class=\"swiper-slide\">
                <div class=\"box-img\">
                    <img src=\"{{\x27assets/img/testimonial/testi_3_1.png\x27 | theme}}\" alt=\"Image\">
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"box-img\">
                    <img src=\"{{\x27assets/img/testimonial/testi_3_2.png\x27 | theme}}\" alt=\"Image\">
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"box-img\">
                    <img src=\"{{\x27assets/img/testimonial/testi_3_3.png\x27 | theme}}\" alt=\"Image\">
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"box-img\">
                    <img src=\"{{\x27assets/img/testimonial/testi_3_4.png\x27 | theme}}\" alt=\"Image\">
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"box-img\">
                    <img src=\"{{\x27assets/img/testimonial/testi_3_5.png\x27 | theme}}\" alt=\"Image\">
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"box-img\">
                    <img src=\"{{\x27assets/img/testimonial/testi_3_6.png\x27 | theme}}\" alt=\"Image\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"shape-mockup movingX d-none d-xl-block\" data-top=\"20%\" data-left=\"5%\">
        <img class=\"gmovingX\" src=\"{{\x27assets/img/shape/shape_7.png\x27 | theme}}\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup spin d-none d-xl-block\" data-bottom=\"12%\" data-right=\"5%\">
        <img src=\"{{\x27assets/img/shape/shape_2_5.png\x27 | theme}}\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup jump d-none d-xl-block\" data-bottom=\"15%\" data-left=\"5%\">
        <img src=\"{{\x27assets/img/shape/shape_2_2.png\x27 | theme}}\" alt=\"shape\">
    </div>
</section><!--==============================
Brand Area
==============================-->
<div class=\"brand-area overflow-hidden space\">
    <div class=\"container th-container\">
        <div class=\"swiper th-slider brandSlider1\" id=\"brandSlider1\" data-slider-options=\x27{\"breakpoints\":{\"0\":{\"slidesPerView\":1},\"576\":{\"slidesPerView\":\"2\"},\"768\":{\"slidesPerView\":\"3\"},\"992\":{\"slidesPerView\":\"3\"},\"1200\":{\"slidesPerView\":\"6\"},\"1400\":{\"slidesPerView\":\"8\"}}}\x27>
            <div class=\"swiper-wrapper\">

                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"{{\x27assets/img/brand/brand_1_1.svg\x27 | theme}}\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"{{\x27assets/img/brand/brand_1_1.svg\x27 | theme}}\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"{{\x27assets/img/brand/brand_1_2.svg\x27 | theme}}\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"{{\x27assets/img/brand/brand_1_2.svg\x27 | theme}}\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"{{\x27assets/img/brand/brand_1_3.svg\x27 | theme}}\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"{{\x27assets/img/brand/brand_1_3.svg\x27 | theme}}\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"{{\x27assets/img/brand/brand_1_4.svg\x27 | theme}}\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"{{\x27assets/img/brand/brand_1_4.svg\x27 | theme}}\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"{{\x27assets/img/brand/brand_1_5.svg\x27 | theme}}\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"{{\x27assets/img/brand/brand_1_5.svg\x27 | theme}}\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"{{\x27assets/img/brand/brand_1_6.svg\x27 | theme}}\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"{{\x27assets/img/brand/brand_1_6.svg\x27 | theme}}\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"{{\x27assets/img/brand/brand_1_7.svg\x27 | theme}}\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"{{\x27assets/img/brand/brand_1_7.svg\x27 | theme}}\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"{{\x27assets/img/brand/brand_1_8.svg\x27 | theme}}\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"{{\x27assets/img/brand/brand_1_8.svg\x27 | theme}}\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"{{\x27assets/img/brand/brand_1_4.svg\x27 | theme}}\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"{{\x27assets/img/brand/brand_1_4.svg\x27 | theme}}\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"{{\x27assets/img/brand/brand_1_3.svg\x27 | theme}}\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"{{\x27assets/img/brand/brand_1_3.svg\x27 | theme}}\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"{{\x27assets/img/brand/brand_1_2.svg\x27 | theme}}\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"{{\x27assets/img/brand/brand_1_2.svg\x27 | theme}}\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"{{\x27assets/img/brand/brand_1_1.svg\x27 | theme}}\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"{{\x27assets/img/brand/brand_1_1.svg\x27 | theme}}\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div><!--==============================
Blog Area
==============================-->
<section class=\"bg-smoke overflow-hidden space\">
    <div class=\"container\">
        <div class=\"row justify-content-lg-between justify-content-center align-items-end\">
            <div class=\"col-lg\">
                <div class=\"title-area text-center text-lg-start\">
                    <span class=\"sub-title\">Conseils voyage</span>
                    <h2 class=\"sec-title\">Nos conseils pour bien voyager</h2>

                </div>
            </div>
            <div class=\"col-lg-auto d-none d-lg-block\">
                <div class=\"sec-btn\">
                    <a href=\"blog.html\" class=\"th-btn style4 th-icon\">Voir tous les conseils</a>
                </div>
            </div>
        </div>
        <div class=\"row gx-24 gy-30\">
            <div class=\"col-xl-5\">
                <div class=\"blog-grid th-ani\">
                    <div class=\"blog-img global-img\">
                        <img src=\"{{\x27assets/img/blog/blog_3_1.jpg\x27 | theme}}\" alt=\"blog image\">
                    </div>
                    <div class=\"blog-grid_content\">
                        <div class=\"blog-meta\">
                            <a class=\"author\" href=\"blog.html\">10 Septembre 2026</a>
                            <a href=\"blog.html\">6 min de lecture</a>
                        </div>
                        <h3 class=\"box-title\"><a href=\"blog-details.html\">Visa Schengen depuis la Côte d\x27Ivoire : les documents à préparer</a></h3>
                        <a href=\"blog-details.html\" class=\"th-btn style4 th-icon\">Lire la suite</a>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-7\">
                <div class=\"blog-grid style2 th-ani\">
                    <div class=\"blog-img global-img\">
                        <img src=\"{{\x27assets/img/blog/blog_3_2.jpg\x27 | theme}}\" alt=\"blog image\">
                    </div>
                    <div class=\"blog-grid_content\">
                        <div class=\"blog-meta\">
                            <a class=\"author\" href=\"blog.html\">02 Septembre 2026</a>
                            <a href=\"blog.html\">7 min de lecture</a>
                        </div>
                        <h3 class=\"box-title\"><a href=\"blog-details.html\">Étudier au Canada : les étapes du visa étudiant</a></h3>
                        <a href=\"blog-details.html\" class=\"th-btn style4 th-icon\">Lire la suite</a>
                    </div>
                </div>
                <div class=\"blog-grid th-ani style2 mt-24\">
                    <div class=\"blog-img global-img\">
                        <img src=\"{{\x27assets/img/blog/blog_3_3.jpg\x27 | theme}}\" alt=\"blog image\">
                    </div>
                    <div class=\"blog-grid_content\">
                        <div class=\"blog-meta\">
                            <a class=\"author\" href=\"blog.html\">25 Août 2026</a>
                            <a href=\"blog.html\">8 min de lecture</a>
                        </div>
                        <h3 class=\"box-title\"><a href=\"blog-details.html\">Assurance voyage : pourquoi est-elle indispensable ?</a></h3>
                        <a href=\"blog-details.html\" class=\"th-btn style4 th-icon\">Lire la suite</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"shape-mockup shape1 d-none d-xxl-block\" data-top=\"14%\" data-right=\"9%\">
        <img src=\"{{\x27assets/img/shape/shape_1.png\x27 | theme}}\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup shape2 d-none d-xl-block\" data-top=\"25%\" data-right=\"6%\">
        <img src=\"{{\x27assets/img/shape/shape_2.png\x27 | theme}}\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup shape3 d-none d-xxl-block\" data-top=\"15%\" data-right=\"4%\">
        <img src=\"{{\x27assets/img/shape/shape_3.png\x27 | theme}}\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup movingX d-none d-xxl-block\" data-bottom=\"0%\" data-right=\"10%\">
        <img src=\"{{\x27assets/img/shape/shape_9.png\x27 | theme}}\" alt=\"shape\">
    </div>
</section><!--==============================
\tFooter Area

        Code End  Here
******************************** -->

<!-- Scroll To Top -->
<div class=\"scroll-top\">
    <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
        <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" style=\"transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;\">
        </path>
    </svg>
</div>
<!--==============================
modal Area
==============================-->
<div id=\"login-form\" class=\"popup-login-register mfp-hide\">
    <ul class=\"nav\" id=\"pills-tab\" role=\"tablist\">
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-menu\" id=\"pills-home-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-home\" type=\"button\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"false\">Connexion</button>
        </li>
        <li class=\"nav-item\" role=\"presentation\">
            <button class=\"nav-menu active\" id=\"pills-profile-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-profile\" type=\"button\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"true\">Inscription</button>
        </li>
    </ul>
    <div class=\"tab-content\" id=\"pills-tabContent\">
        <div class=\"tab-pane fade\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
            <h3 class=\"box-title mb-30\">Connectez-vous à votre compte</h3>
            <div class=\"th-login-form\">
                <form action=\"mail.php\" method=\"POST\" class=\"login-form ajax-contact\">
                    <div class=\"row\">
                        <div class=\"form-group col-12\">
                            <label>Nom d\x27utilisateur ou email</label>
                            <input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\" required=\"required\">
                        </div>
                        <div class=\"form-group col-12\">
                            <label>Mot de passe</label>
                            <input type=\"password\" class=\"form-control\" name=\"pasword\" id=\"pasword\" required=\"required\">
                        </div>

                        <div class=\"form-btn mb-20 col-12\">
                            <button class=\"th-btn btn-fw th-radius2 \">Envoyer le message</button>
                        </div>
                    </div>
                    <div id=\"forgot_url\">
                        <a href=\"my-account.html\">Mot de passe oublié ?</a>
                    </div>
                    <p class=\"form-messages mb-0 mt-3\"></p>
                </form>
            </div>
        </div>
        <div class=\"tab-pane fade active show\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\">
            <h3 class=\"th-form-title mb-30\">Connectez-vous à votre compte</h3>
            <form action=\"mail.php\" method=\"POST\" class=\"login-form ajax-contact\">
                <div class=\"row\">
                    <div class=\"form-group col-12\">
                        <label>Nom d\x27utilisateur*</label>
                        <input type=\"text\" class=\"form-control\" name=\"usename\" id=\"usename\" required=\"required\">
                    </div>
                    <div class=\"form-group col-12\">
                        <label>Prénom*</label>
                        <input type=\"text\" class=\"form-control\" name=\"firstname\" id=\"firstname\" required=\"required\">
                    </div>
                    <div class=\"form-group col-12\">
                        <label>Nom*</label>
                        <input type=\"text\" class=\"form-control\" name=\"lastname\" id=\"lastname\" required=\"required\">
                    </div>
                    <div class=\"form-group col-12\">
                        <label for=\"new_email\">Votre email*</label>
                        <input type=\"text\" class=\"form-control\" name=\"new_email\" id=\"new_email\" required=\"required\">
                    </div>
                    <div class=\"form-group col-12\">
                        <label for=\"new_email_confirm\">Confirmer l\x27email*</label>
                        <input type=\"text\" class=\"form-control\" name=\"new_email_confirm\" id=\"new_email_confirm\" required=\"required\">
                    </div>
                    <div class=\"statement\">
                        <span class=\"register-notes\">Un mot de passe vous sera envoyé par email.</span>
                    </div>

                    <div class=\"form-btn mt-20 col-12\">
                        <button class=\"th-btn btn-fw th-radius2 \">S\x27inscrire</button>
                    </div>
                </div>
                <p class=\"form-messages mb-0 mt-3\"></p>
            </form>
        </div>
    </div>
</div>", "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/accueil.htm", "");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["partial" => 219];
        static $filters = ["theme" => 16, "page" => 163];
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

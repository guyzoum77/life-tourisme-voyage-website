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
                <p class=\"about-text\">Optimisons rapidement un modèle de capital intellectuel multiplateforme. Créons de manière appropriée des infrastructures interactives</p>
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
                            <a href=\"blog.html\"><i class=\"far fa-calendar\"></i>24 Juin 2024</a>
                        </div>
                        <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"#\">Quand la vision rencontre
                            la réalité</a></h4>
                    </div>
                </div>
                <div class=\"recent-post\">
                    <div class=\"media-img\">
                        <a href=\"#\"><img src=\"";
        // line 85
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/recent-post-1-2.jpg"), 85, $this->source);
        yield "\" alt=\"Blog Image\"></a>
                    </div>
                    <div class=\"media-body\">
                        <div class=\"recent-post-meta\">
                            <a href=\"#\"><i class=\"far fa-calendar\"></i>22 Juin 2024</a>
                        </div>
                        <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"#\">Placer la barre plus haut dans la construction.</a></h4>
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
        // line 101
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/phone.svg"), 101, $this->source);
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
        // line 110
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/envelope.svg"), 110, $this->source);
        yield "\" alt=\"img\">
                    </div>
                    <div class=\"details\">
                        <p><a href=\"mailto:mailinfo00@life-voyage.com\" class=\"info-box_link\">mailinfo00@life-voyage.com</a></p>
                        <p><a href=\"mailto:support24@life-voyage.com\" class=\"info-box_link\">support24@life-voyage.com</a></p>
                    </div>
                </div>
                <div class=\"info-box_text\">
                    <div class=\"icon\"><img src=\"";
        // line 118
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/location-dot.svg"), 118, $this->source);
        yield "\" alt=\"img\"></div>
                    <div class=\"details\">
                        <p>789 Inner Lane, Holy park, California, USA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"popup-search-box\">
    <button class=\"searchClose\"><i class=\"fal fa-times\"></i></button>
    <form action=\"#\">
        <input type=\"text\" placeholder=\"Que recherchez-vous ?\">
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
        // line 140
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/life-voyage/loog.png"), 140, $this->source);
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
                    <a href=\"#\">Service</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"service.html\">Services</a></li>
                        <li><a href=\"service-details.html\">Détails du service</a></li>
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
        // line 216
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 217
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
        // line 228
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero_bg_3_1.jpg"), 228, $this->source);
        yield "\">
                    </div>
                    <div class=\"container\">
                        <div class=\"hero-style3\">
                            <h1 class=\"hero-title\" data-ani=\"slideinleft\" data-ani-delay=\"0.2s\">
                                Découvrez le monde avec notre guide
                            </h1>
                            <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Life Voyage, une compagnie internationale de gestion de voyages avec 25 ans
                                d\x27expérience, spécialisée dans les voyages d\x27affaires et maritimes.</p>
                            <div class=\"btn-group\" data-ani=\"slideinup\" data-ani-delay=\"0.6s\">
                                <a href=\"#\" class=\"th-btn style2 th-icon\">Explorer les circuits</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"hero-inner\">
                    <div class=\"th-hero-bg\" data-bg-src=\"";
        // line 246
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero_bg_3_2.jpg"), 246, $this->source);
        yield "\">
                    </div>
                    <div class=\"container\">
                        <div class=\"hero-style3\">
                            <h1 class=\"hero-title\" data-ani=\"slideinleft\" data-ani-delay=\"0.2s\">
                                Découvrez les meilleures destinations du monde
                            </h1>
                            <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Life Voyage, une compagnie internationale de gestion de voyages avec 25 ans
                                d\x27expérience, spécialisée dans les voyages d\x27affaires et maritimes.</p>
                            <div class=\"btn-group\" data-ani=\"slideinup\" data-ani-delay=\"0.6s\">
                                <a href=\"#\" class=\"th-btn style2 th-icon\">Explorer les circuits</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"hero-inner\">
                    <div class=\"th-hero-bg\" data-bg-src=\"";
        // line 264
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero_bg_3_3.jpg"), 264, $this->source);
        yield "\">
                    </div>
                    <div class=\"container\">
                        <div class=\"hero-style3\">
                            <h1 class=\"hero-title\" data-ani=\"slideinleft\" data-ani-delay=\"0.2s\">
                                Capturez les merveilles du monde
                            </h1>
                            <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Life Voyage, une compagnie internationale de gestion de voyages avec 25 ans
                                d\x27expérience, spécialisée dans les voyages d\x27affaires et maritimes.</p>
                            <div class=\"btn-group\" data-ani=\"slideinup\" data-ani-delay=\"0.6s\">
                                <a href=\"#\" class=\"th-btn style2 th-icon\">Explorer les circuits</a>
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
                                Explorez le monde avec Life Voyage
                            </h1>
                            <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Life Voyage, une compagnie internationale de gestion de voyages avec 25 ans
                                d\x27expérience, spécialisée dans les voyages d\x27affaires et maritimes.</p>
                            <div class=\"btn-group\" data-ani=\"slideinup\" data-ani-delay=\"0.6s\">
                                <a href=\"#\" class=\"th-btn style2 th-icon\">Explorer les circuits</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"hero-inner\">
                    <video autoplay loop muted>
                        <source src=\"";
        // line 301
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero-video3.mp4"), 301, $this->source);
        yield "\" type=\"video/mp4\">
                    </video>
                    <div class=\"container\">
                        <div class=\"hero-style3\">
                            <h1 class=\"hero-title\" data-ani=\"slideinleft\" data-ani-delay=\"0.2s\">
                                Vivez l\x27expérience du voyage avec Life Voyage
                            </h1>
                            <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Life Voyage, une compagnie internationale de gestion de voyages avec 25 ans
                                d\x27expérience, spécialisée dans les voyages d\x27affaires et maritimes.</p>
                            <div class=\"btn-group\" data-ani=\"slideinup\" data-ani-delay=\"0.6s\">
                                <a href=\"#\" class=\"th-btn style2 th-icon\">Explorer les circuits</a>
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
        // line 326
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/hero-arrow-right.svg"), 326, $this->source);
        yield "\" alt=\"\"></button>
                        <div class=\"swiper-pagination\"></div>
                        <button data-slider-next=\"#heroSlide3\" class=\"swiper-button-prev\">
                            <img src=\"";
        // line 329
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/hero-arrow-left.svg"), 329, $this->source);
        yield "\" alt=\"\"></button>

                    </div>
                    <div class=\"swiper hero3Thumbs\">
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\">
                                <div class=\"hero-inner\">
                                    <div class=\"hero3-card\">
                                        <div class=\"hero-img\">
                                            <img src=\"";
        // line 338
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero_bg_3_1.jpg"), 338, $this->source);
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
        // line 347
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero_bg_3_2.jpg"), 347, $this->source);
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
        // line 356
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero_bg_3_3.jpg"), 356, $this->source);
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
        // line 365
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero_bg_3_4.jpg"), 365, $this->source);
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
        // line 374
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/hero/hero_bg_3_5.jpg"), 374, $this->source);
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
                                                <option value=\"Sélectionner une destination\" selected disabled>Sélectionner une destination
                                                </option>
                                                <option value=\"Australie\">Australie</option>
                                                <option value=\"Dubaï\">Dubaï</option>
                                                <option value=\"Angleterre\">Angleterre</option>
                                                <option value=\"Suède\">Suède</option>
                                                <option value=\"Thaïlande\">Thaïlande</option>
                                                <option value=\"Égypte\">Égypte</option>
                                                <option value=\"Arabie Saoudite\">Arabie Saoudite</option>
                                                <option value=\"Suisse\">Suisse</option>
                                                <option value=\"Scandinavie\">Scandinavie</option>
                                                <option value=\"Europe de l\x27Ouest\">Europe de l\x27Ouest</option>
                                                <option value=\"Indonésie\">Indonésie</option>
                                                <option class=\"Italie\">Italie</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group col-md-6 col-xl-auto\">
                                        <div class=\"icon\">
                                            <i class=\"fa-regular fa-person-hiking\"></i>
                                        </div>
                                        <div class=\"search-input\">
                                            <label>Type</label>
                                            <select class=\" nice-select\" name=\"type\" id=\"type\">
                                                <option value=\"Aventure\" selected disabled>Aventure</option>
                                                <option value=\"Plage\">Plage</option>
                                                <option value=\"Circuit de groupe\">Circuit de groupe</option>
                                                <option value=\"Circuit en couple\">Circuit en couple</option>
                                                <option value=\"Circuit en famille\">Circuit en famille</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group col-md-6 col-xl-auto\">
                                        <div class=\"icon\">
                                            <i class=\"fa-light fa-clock\"></i>
                                        </div>
                                        <div class=\"search-input\">
                                            <label>Durée</label>
                                            <select class=\"form-select nice-select\" name=\"Durée\" id=\"Durée\">
                                                <option value=\"Normal\" selected disabled>Durée</option>
                                                <option value=\"1\">1 jour</option>
                                                <option value=\"2\">2 jours</option>
                                                <option value=\"3\">3 jours</option>
                                                <option value=\"4\">4 jours</option>
                                                <option value=\"5\">5 jours</option>
                                                <option value=\"6\">6 jours</option>
                                                <option value=\"7\">7 jours</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-btn col-md-6 col-xl-auto\">
                                        <button class=\"th-btn\"><img src=\"";
        // line 445
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/search.svg"), 445, $this->source);
        yield "\" alt=\"\">Rechercher</button>
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
        // line 457
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/down-arrow.svg"), 457, $this->source);
        yield "\" alt=\"\"></span> Défiler
            vers le bas</a>
    </div>
</div>
<!--======== / Hero Section ========--><!--==============================
Destination Area
==============================-->

<section class=\"position-relative overflow-hidden space\" id=\"destination-sec\" data-bg-src=\"";
        // line 465
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg/line-pattern3.png"), 465, $this->source);
        yield "\">
    <div class=\"container\">
        <div class=\"row justify-content-between\">
            <div class=\"col-lg-6\">
                <div class=\"title-area\">
                    <span class=\"sub-title\">Destination Populaire</span>
                    <h2 class=\"sec-title\">Destinations Populaires</h2>
                </div>
            </div>
            <div class=\"col-lg-5\">
                <h2 class=\"destination-title\"><span class=\"counter-number\">850</span>+ Destinations</h2>
                <p class=\"sec-text mb-30\">Life Voyage est l\x27une des compagnies de voyage les plus appréciées par ceux qui souhaitent
                    vivre l\x27aventure et découvrir le monde.</p>

            </div>
        </div>
        <div class=\"slider-area\">
            <div class=\"swiper th-slider has-shadow\" data-slider-options=\x27{\"breakpoints\":{\"0\":{\"slidesPerView\":1},\"576\":{\"slidesPerView\":\"1\"},\"768\":{\"slidesPerView\":\"2\"},\"992\":{\"slidesPerView\":\"2\"},\"1200\":{\"slidesPerView\":\"3\"},\"1300\":{\"slidesPerView\":\"4\"}}}\x27>
                <div class=\"swiper-wrapper\">
                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"";
        // line 487
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/destination/destination_3_1.jpg"), 487, $this->source);
        yield "\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">Dubaï, ÉAU</a></h3>
                                <p class=\"destination-text\">25 offres</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"";
        // line 500
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/destination/destination_3_2.jpg"), 500, $this->source);
        yield "\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">Japon</a></h3>
                                <p class=\"destination-text\">25 offres</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"";
        // line 513
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/destination/destination_3_3.jpg"), 513, $this->source);
        yield "\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">Suisse</a></h3>
                                <p class=\"destination-text\">25 offres</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"";
        // line 526
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/destination/destination_3_4.jpg"), 526, $this->source);
        yield "\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">Brésil</a></h3>
                                <p class=\"destination-text\">25 offres</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"";
        // line 539
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/destination/destination_3_1.jpg"), 539, $this->source);
        yield "\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">Dubaï, ÉAU</a></h3>
                                <p class=\"destination-text\">25 offres</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"";
        // line 552
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/destination/destination_3_2.jpg"), 552, $this->source);
        yield "\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">Japon</a></h3>
                                <p class=\"destination-text\">25 offres</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"destination-btn text-center mt-60\">
            <a href=\"#\" class=\"th-btn style3 th-icon\">Voir tout</a>
        </div>
    </div>
</section><!--==============================
Category Area
==============================-->
<section class=\"category-area3 bg-smoke space\" data-bg-src=\"";
        // line 572
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg/line-pattern3.png"), 572, $this->source);
        yield "\">
    <div class=\"container th-container\">
        <div class=\"title-area text-center\">
            <span class=\"sub-title\">Un endroit merveilleux pour vous</span>
            <h2 class=\"sec-title\">Catégories de circuits</h2>
        </div>
        <div class=\"slider-area\">
            <div class=\"swiper th-slider has-shadow category-slider3\" id=\"categorySlider3\" data-slider-options=\x27{\"breakpoints\":{\"0\":{\"slidesPerView\":1},\"576\":{\"slidesPerView\":\"1\"},\"768\":{\"slidesPerView\":\"2\"},\"992\":{\"slidesPerView\":\"3\"},\"1200\":{\"slidesPerView\":\"3\"},\"1400\":{\"slidesPerView\":\"5\"}}}\x27>
                <div class=\"swiper-wrapper\">
                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"";
        // line 584
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/category/category_1_1.jpg"), 584, $this->source);
        yield "\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"#\">Croisières</a></h3>
                            <a class=\"line-btn\" href=\"#\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"";
        // line 594
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/category/category_1_2.jpg"), 594, $this->source);
        yield "\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"#\">Randonnée</a></h3>
                            <a class=\"line-btn\" href=\"#\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"";
        // line 604
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/category/category_1_3.jpg"), 604, $this->source);
        yield "\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"#\">Airbirds</a></h3>
                            <a class=\"line-btn\" href=\"#\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"";
        // line 614
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/category/category_1_4.jpg"), 614, $this->source);
        yield "\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"#\">Faune sauvage</a></h3>
                            <a class=\"line-btn\" href=\"#\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"";
        // line 624
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/category/category_1_5.jpg"), 624, $this->source);
        yield "\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"#\">Marche</a></h3>
                            <a class=\"line-btn\" href=\"#\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"";
        // line 634
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/category/category_1_1.jpg"), 634, $this->source);
        yield "\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"#\">Croisières</a></h3>
                            <a class=\"line-btn\" href=\"#\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"";
        // line 644
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/category/category_1_2.jpg"), 644, $this->source);
        yield "\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"#\">Randonnée</a></h3>
                            <a class=\"line-btn\" href=\"#\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"";
        // line 654
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/category/category_1_3.jpg"), 654, $this->source);
        yield "\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"#\">Airbirds</a></h3>
                            <a class=\"line-btn\" href=\"#\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"";
        // line 664
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/category/category_1_4.jpg"), 664, $this->source);
        yield "\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"#\">Faune sauvage</a></h3>
                            <a class=\"line-btn\" href=\"#\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"";
        // line 674
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/category/category_1_5.jpg"), 674, $this->source);
        yield "\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"#\">Marche</a></h3>
                            <a class=\"line-btn\" href=\"#\">Voir plus</a>
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
        // line 698
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/normal/about_3_1.jpg"), 698, $this->source);
        yield "\" alt=\"About\">
                    </div>
                    <div class=\"img2\">
                        <img src=\"";
        // line 701
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/normal/about_3_2.jpg"), 701, $this->source);
        yield "\" alt=\"About\">
                    </div>
                    <div class=\"img3 movingX\">
                        <img src=\"";
        // line 704
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/normal/about_3_3.jpg"), 704, $this->source);
        yield "\" alt=\"About\">
                    </div>
                </div>
            </div>
            <div class=\"col-xl-5\">
                <div class=\"ps-xl-4\">
                    <div class=\"title-area mb-20 pe-xxl-5 me-xxl-5\">
                        <span class=\"sub-title style1 \">Partons Ensemble</span>
                        <h2 class=\"sec-title mb-20 pe-xl-5 me-xl-5 heading\">Planifiez votre voyage avec nous</h2>
                    </div>
                    <p class=\"sec-text mb-30\">Il existe de nombreuses variantes de passages disponibles, mais la majorité a subi une altération sous une forme ou une autre, par l\x27injection de mots générés aléatoirement.</p>
                    <div class=\"about-item-wrap\">
                        <div class=\"about-item style2\">
                            <div class=\"about-item_img\"><img src=\"";
        // line 717
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_1.svg"), 717, $this->source);
        yield "\" alt=\"\"></div>
                            <div class=\"about-item_centent\">
                                <h5 class=\"box-title\">Voyage Exclusif</h5>
                                <p class=\"about-item_text\">Il existe de nombreuses variantes de passages disponibles, mais la
                                    majorité.</p>
                            </div>
                        </div>
                        <div class=\"about-item style2\">
                            <div class=\"about-item_img\"><img src=\"";
        // line 725
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_2.svg"), 725, $this->source);
        yield "\" alt=\"\"></div>
                            <div class=\"about-item_centent\">
                                <h5 class=\"box-title\">La Sécurité Avant Tout</h5>
                                <p class=\"about-item_text\">Il existe de nombreuses variantes de passages disponibles, mais la majorité.</p>
                            </div>
                        </div>
                        <div class=\"about-item style2\">
                            <div class=\"about-item_img\"><img src=\"";
        // line 732
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/about_1_3.svg"), 732, $this->source);
        yield "\" alt=\"\"></div>
                            <div class=\"about-item_centent\">
                                <h5 class=\"box-title\">Guide Professionnel</h5>
                                <p class=\"about-item_text\">Il existe de nombreuses variantes de passages disponibles, mais la
                                    majorité.</p>
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
        // line 746
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_2_1.png"), 746, $this->source);
        yield "\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup jump d-none d-xxl-block\" data-top=\"28%\" data-right=\"5%\">
        <img src=\"";
        // line 749
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_2_2.png"), 749, $this->source);
        yield "\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup spin d-none d-xxl-block\" data-bottom=\"18%\" data-left=\"2%\">
        <img src=\"";
        // line 752
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_2_3.png"), 752, $this->source);
        yield "\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup movixgX d-none d-xxl-block\" data-bottom=\"18%\" data-right=\"2%\">
        <img src=\"";
        // line 755
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_2_4.png"), 755, $this->source);
        yield "\" alt=\"shape\">
    </div>

    <div class=\"shape-mockup movingCar d-none d-xxl-block\" data-bottom=\"0%\" data-right=\"2%\">
        <img src=\"";
        // line 759
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/car_1.png"), 759, $this->source);
        yield "\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup d-none d-xxl-block\" data-bottom=\"0%\" data-right=\"0%\">
        <img src=\"";
        // line 762
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/tree_1.png"), 762, $this->source);
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
                    <span class=\"sub-title\">Meilleure Expérience</span>
                    <h2 class=\"sec-title\">Une Expérience de Voyage Incroyable</h2>
                </div>
            </div>
        </div>
        <div class=\"nav nav-tabs tour-tabs\" id=\"nav-tab\" role=\"tablist\">
            <button class=\"nav-link th-btn active\" id=\"nav-step1-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-step1\" type=\"button\"><img src=\"";
        // line 780
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/tour_icon_1.svg"), 780, $this->source);
        yield "\" alt=\"\">Forfait Circuit</button>
            <button class=\"nav-link th-btn\" id=\"nav-step2-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-step2\" type=\"button\"><img src=\"";
        // line 781
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/tour_icon_2.svg"), 781, $this->source);
        yield "\" alt=\"\">Hotel</button>
            <button class=\"nav-link th-btn\" id=\"nav-step3-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-step3\" type=\"button\"><img src=\"";
        // line 782
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/tour_icon_3.svg"), 782, $this->source);
        yield "\" alt=\"\">Transport</button>
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
        // line 793
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_1.jpg"), 793, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Greece Forfait Circuit</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 816
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_2.jpg"), 816, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Italie Tour package</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 839
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_3.jpg"), 839, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Dubaï Forfait Circuit</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 862
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_4.jpg"), 862, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Suisse</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 885
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_1.jpg"), 885, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Greece Forfait Circuit</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 908
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_2.jpg"), 908, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Italie Tour package</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 931
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_3.jpg"), 931, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Dubaï Forfait Circuit</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 954
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_4.jpg"), 954, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Suisse</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
        // line 989
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_5.jpg"), 989, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">The Plaza, New York</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1012
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_6.jpg"), 1012, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Hotel Ritz Paris</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$970.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1035
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_7.jpg"), 1035, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Claridge’s, London</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$960.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1058
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_8.jpg"), 1058, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Taj Mahal Palace, India</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$940.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1081
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_9.jpg"), 1081, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Peninsula Hong Kong</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$970.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1104
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_10.jpg"), 1104, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">The Ritz Hotel London</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$940.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1127
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_11.jpg"), 1127, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">The Shelbourne Hotel, Dublin</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$990.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1150
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_12.jpg"), 1150, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Beverly Hills Hotel</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$950.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
        // line 1184
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_13.jpg"), 1184, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Forfait Voyage en Caravane</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1207
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_14.jpg"), 1207, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Forfait Bus Couchette </a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1230
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_15.jpg"), 1230, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Forfait Voyage en Train</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1253
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_16.jpg"), 1253, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Forfait Voyage en Avion</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1276
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_17.jpg"), 1276, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Forfait Transport en Croisière</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1299
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_18.jpg"), 1299, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Forfait Voyage en Avion</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1322
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_19.jpg"), 1322, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Forfait Bus Couchette </a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
                                            <a href=\"tour-guider-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"swiper-slide\">
                                <div class=\"tour-box th-ani gsap-cursor\">
                                    <div class=\"tour-box_img global-img\">
                                        <img src=\"";
        // line 1345
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/tour/tour_box_20.jpg"), 1345, $this->source);
        yield "\" alt=\"image\">
                                    </div>
                                    <div class=\"tour-content\">
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Forfait Voyage en Train</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
            <span class=\"sub-title\">Rendez votre circuit plus agréable</span>
            <h2 class=\"sec-title\">Recent Galerie</h2>
        </div>
        <div class=\"row gy-24 gx-24 justify-content-center\">
            <div class=\"col-lg-3\">
                <div class=\"gallery-box style2\">
                    <div class=\"gallery-img global-img\">
                        <a href=\"assets/img/gallery/gallery_3_1.jpg\" class=\"popup-image\">
                            <div class=\"icon-btn\"><i class=\"fal fa-magnifying-glass-plus\"></i></div>
                            <img src=\"";
        // line 1389
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_1.jpg"), 1389, $this->source);
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
        // line 1399
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_2.jpg"), 1399, $this->source);
        yield "\" alt=\"gallery image\">
                        </a>
                    </div>
                </div>
                <div class=\"gallery-box style2\">
                    <div class=\"gallery-img global-img\">
                        <a href=\"assets/img/gallery/gallery_3_4.jpg\" class=\"popup-image\">
                            <div class=\"icon-btn\"><i class=\"fal fa-magnifying-glass-plus\"></i></div>
                            <img src=\"";
        // line 1407
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_4.jpg"), 1407, $this->source);
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
        // line 1417
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_3.jpg"), 1417, $this->source);
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
        // line 1426
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_5.jpg"), 1426, $this->source);
        yield "\" alt=\"gallery image\">
                            </a>
                        </div>
                    </div>
                    <div class=\"gallery-box style2\">
                        <div class=\"gallery-img global-img\">
                            <a href=\"assets/img/gallery/gallery_3_6.jpg\" class=\"popup-image\">
                                <div class=\"icon-btn\"><i class=\"fal fa-magnifying-glass-plus\"></i></div>
                                <img src=\"";
        // line 1434
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_6.jpg"), 1434, $this->source);
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
        // line 1447
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_1.jpg"), 1447, $this->source);
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
        // line 1456
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_2.jpg"), 1456, $this->source);
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
        // line 1465
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_3.jpg"), 1465, $this->source);
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
        // line 1474
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_4.jpg"), 1474, $this->source);
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
        // line 1483
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_5.jpg"), 1483, $this->source);
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
        // line 1492
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/gallery/gallery_3_6.jpg"), 1492, $this->source);
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
            <span class=\"sub-title\">Rencontrez nos guides</span>
            <h2 class=\"sec-title\">Rencontrez le guide touristique</h2>
        </div>
        <div class=\"slider-area\">
            <div class=\"swiper th-slider teamSlider3 has-shadow\" id=\"teamSlider3\" data-slider-options=\x27{\"breakpoints\":{\"0\":{\"slidesPerView\":1},\"576\":{\"slidesPerView\":\"1\"},\"768\":{\"slidesPerView\":\"2\"},\"992\":{\"slidesPerView\":\"3\"},\"1200\":{\"slidesPerView\":\"3\"}}}\x27>
                <div class=\"swiper-wrapper\">
                    <!-- Single Item -->
                    <div class=\"swiper-slide\">
                        <div class=\"th-team team-grid\">
                            <div class=\"team-img\">
                                <img src=\"";
        // line 1516
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_img_1.jpg"), 1516, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"";
        // line 1519
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_1_1.jpg"), 1519, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">Michel Smith</a></h3>
                                    <span class=\"team-desig\">Guide touristique</span>


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
        // line 1543
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_img_2.jpg"), 1543, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"";
        // line 1546
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_1_2.jpg"), 1546, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">Janny Willson</a></h3>
                                    <span class=\"team-desig\">Guide touristique</span>


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
        // line 1570
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_img_3.jpg"), 1570, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"";
        // line 1573
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_1_3.jpg"), 1573, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">Jacob Jones</a></h3>
                                    <span class=\"team-desig\">Guide touristique</span>


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
        // line 1597
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_img_1.jpg"), 1597, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"";
        // line 1600
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_1_4.jpg"), 1600, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">Maria Prova</a></h3>
                                    <span class=\"team-desig\">Guide touristique</span>


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
        // line 1624
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_img_2.jpg"), 1624, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"";
        // line 1627
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_1_5.jpg"), 1627, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">Rebeka Maliha</a></h3>
                                    <span class=\"team-desig\">Guide touristique</span>


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
        // line 1651
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_img_3.jpg"), 1651, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"";
        // line 1654
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_1_6.jpg"), 1654, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">Alif Mahmud</a></h3>
                                    <span class=\"team-desig\">Guide touristique</span>


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
        // line 1678
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_img_1.jpg"), 1678, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"";
        // line 1681
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_1_3.jpg"), 1681, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">Guy Hawkins</a></h3>
                                    <span class=\"team-desig\">Guide touristique</span>


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
        // line 1705
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_img_2.jpg"), 1705, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-img2\">
                                <img src=\"";
        // line 1708
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/team/team_1_4.jpg"), 1708, $this->source);
        yield "\" alt=\"Team\">
                            </div>
                            <div class=\"team-content\">
                                <div class=\"media-body\">
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">Jenny Wilson</a></h3>
                                    <span class=\"team-desig\">Guide touristique</span>


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
        // line 1733
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/right-arrow2.svg"), 1733, $this->source);
        yield "\" alt=\"\"></button>
            <button data-slider-next=\"#teamSlider3\" class=\"slider-arrow slider-next\"><img src=\"";
        // line 1734
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/left-arrow2.svg"), 1734, $this->source);
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
                        <h2 class=\"sec-title text-white\">Dites-nous bonjour</h2>
                        <p class=\"contact-text text-white\">Nous serions ravis d\x27avoir de vos nouvelles. Notre équipe sympathique est toujours là pour discuter</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"contact-form-area\">
                    <form action=\"mail.php\" method=\"POST\" class=\"contact-form2 ajax-contact\">
                        <div class=\"row\">
                            <div class=\"form-group col-12\">
                                <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name3\" placeholder=\"Prénom\">
                                <img src=\"";
        // line 1765
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/user.svg"), 1765, $this->source);
        yield "\" alt=\"\">
                            </div>
                            <div class=\"form-group col-12\">
                                <input type=\"email\" class=\"form-control\" name=\"email3\" id=\"email3\" placeholder=\"Votre email\">
                                <img src=\"";
        // line 1769
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/mail.svg"), 1769, $this->source);
        yield "\" alt=\"\">
                            </div>
                            <div class=\"form-group col-12\">
                                <select name=\"subject\" id=\"subject\" class=\"form-select nice-select\">
                                    <option value=\"Sélectionnez un type de circuit\" selected disabled>Sélectionnez un type de circuit</option>
                                    <option value=\"Aventure en Afrique\">Aventure en Afrique</option>
                                    <option value=\"Afrique Sauvage\">Afrique Sauvage</option>
                                    <option value=\"Asie\">Asie</option>
                                    <option value=\"Scandinavie\">Scandinavie</option>
                                    <option value=\"Europe de l\x27Ouest\">Europe de l\x27Ouest</option>
                                </select>
                            </div>
                            <div class=\"form-group col-12\">
                                <textarea name=\"message\" id=\"message\" cols=\"30\" rows=\"3\" class=\"form-control\" placeholder=\"Votre message\"></textarea>
                                <img src=\"";
        // line 1783
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/chat.svg"), 1783, $this->source);
        yield "\" alt=\"\">
                            </div>
                        </div>
                        <p class=\"form-messages mb-0 mt-3\"></p>
                    </form>
                    <div class=\"form-btn-wrapp\">
                        <div class=\"form-btn\">
                            <button class=\"th-btn white-btn\">Envoyer le message <img src=\"";
        // line 1790
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/plane3.svg"), 1790, $this->source);
        yield "\" alt=\"\"></button>
                        </div>
                        <div class=\"contact-info\">
                            <p class=\"contact-info_link\"><a href=\"tel:+0123456789\">+012 345 6789</a></p>
                            <div class=\"contact-info_icon\">
                                <a href=\"tel:+0123456789\"><img src=\"";
        // line 1795
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/call.svg"), 1795, $this->source);
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
            <h2 class=\"sec-title\">Avis de nos clients</h2>
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-12\">
                <div class=\"swiper th-slider testiSlide3\" id=\"testiSlide3\" data-slider-options=\x27{\"effect\":\"slide\",\"loop\":false,\"thumbs\":{\"swiper\":\".testi-grid-thumb\"}}\x27>
                    <div class=\"swiper-wrapper\">
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"";
        // line 1819
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_1.png"), 1819, $this->source);
        yield "\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">“Un foyer qui allie parfaitement durabilité et luxe, jusqu\x27à ce que je découvre Ecoland Residence. Dès que j\x27ai posé le pied dans cette communauté, j\x27ai su que c\x27était là où je voulais vivre.”</p>
                                    <h6 class=\"testi-grid_name box-title\">Andrew Simon</h6>
                                    <span class=\"testi-grid_desig\">Voyageur</span>

                                </div>

                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"";
        // line 1833
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_2.png"), 1833, $this->source);
        yield "\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">“Cette maison affiche une architecture élégante et contemporaine, avec des lignes épurées et de larges fenêtres laissant la lumière naturelle inonder l\x27intérieur. Elle intègre des principes de conception passive”</p>
                                    <h6 class=\"testi-grid_name box-title\">Maria Doe</h6>
                                    <span class=\"testi-grid_desig\">Voyageur</span>

                                </div>

                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"";
        // line 1847
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_3.png"), 1847, $this->source);
        yield "\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">“Des panneaux solaires ornent le toit, exploitant l\x27énergie renouvelable pour alimenter la maison et même réinjecter l\x27électricité excédentaire dans le réseau. Une isolation haute performance et du triple vitrage”</p>
                                    <h6 class=\"testi-grid_name box-title\">Angelina Rose</h6>
                                    <span class=\"testi-grid_desig\">Voyageur</span>

                                </div>

                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"";
        // line 1861
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_4.png"), 1861, $this->source);
        yield "\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">Un système sophistiqué de récupération des eaux de pluie collecte et filtre l\x27eau pour l\x27irrigation et les usages non potables, réduisant la dépendance aux sources d\x27eau municipales. Les systèmes d\x27eaux grises</p>
                                    <h6 class=\"testi-grid_name box-title\">Michel Carlos</h6>
                                    <span class=\"testi-grid_desig\">Voyageur</span>

                                </div>

                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"";
        // line 1875
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_5.png"), 1875, $this->source);
        yield "\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">Dans tout l\x27intérieur, des matériaux écologiques comme le bois récupéré, les sols en bambou et les plans de travail en verre recyclé créent une ambiance luxueuse et durable.</p>
                                    <h6 class=\"testi-grid_name box-title\">Michel Smith</h6>
                                    <span class=\"testi-grid_desig\">Voyageur</span>

                                </div>

                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"";
        // line 1889
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_6.png"), 1889, $this->source);
        yield "\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">“Un foyer qui allie parfaitement durabilité et luxe, jusqu\x27à ce que je découvre Ecoland Residence. Dès que j\x27ai posé le pied dans cette communauté, j\x27ai su que c\x27était là où je voulais vivre.”</p>
                                    <h6 class=\"testi-grid_name box-title\">Jesmen</h6>
                                    <span class=\"testi-grid_desig\">Voyageur</span>

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
        // line 1911
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_1.png"), 1911, $this->source);
        yield "\" alt=\"Image\">
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"box-img\">
                    <img src=\"";
        // line 1916
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_2.png"), 1916, $this->source);
        yield "\" alt=\"Image\">
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"box-img\">
                    <img src=\"";
        // line 1921
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_3.png"), 1921, $this->source);
        yield "\" alt=\"Image\">
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"box-img\">
                    <img src=\"";
        // line 1926
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_4.png"), 1926, $this->source);
        yield "\" alt=\"Image\">
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"box-img\">
                    <img src=\"";
        // line 1931
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_5.png"), 1931, $this->source);
        yield "\" alt=\"Image\">
                </div>
            </div>
            <div class=\"swiper-slide\">
                <div class=\"box-img\">
                    <img src=\"";
        // line 1936
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/testimonial/testi_3_6.png"), 1936, $this->source);
        yield "\" alt=\"Image\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"shape-mockup movingX d-none d-xl-block\" data-top=\"20%\" data-left=\"5%\">
        <img class=\"gmovingX\" src=\"";
        // line 1942
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_7.png"), 1942, $this->source);
        yield "\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup spin d-none d-xl-block\" data-bottom=\"12%\" data-right=\"5%\">
        <img src=\"";
        // line 1945
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_2_5.png"), 1945, $this->source);
        yield "\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup jump d-none d-xl-block\" data-bottom=\"15%\" data-left=\"5%\">
        <img src=\"";
        // line 1948
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_2_2.png"), 1948, $this->source);
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
        // line 1961
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_1.svg"), 1961, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 1962
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_1.svg"), 1962, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 1969
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_2.svg"), 1969, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 1970
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_2.svg"), 1970, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 1977
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_3.svg"), 1977, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 1978
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_3.svg"), 1978, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 1985
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_4.svg"), 1985, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 1986
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_4.svg"), 1986, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 1993
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_5.svg"), 1993, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 1994
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_5.svg"), 1994, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 2001
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_6.svg"), 2001, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 2002
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_6.svg"), 2002, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 2009
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_7.svg"), 2009, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 2010
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_7.svg"), 2010, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 2017
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_8.svg"), 2017, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 2018
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_8.svg"), 2018, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 2025
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_4.svg"), 2025, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 2026
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_4.svg"), 2026, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 2033
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_3.svg"), 2033, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 2034
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_3.svg"), 2034, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 2041
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_2.svg"), 2041, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 2042
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_2.svg"), 2042, $this->source);
        yield "\" alt=\"Brand Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"swiper-slide\">
                    <div class=\"brand-box\">
                        <a href=\"\">
                            <img class=\"original\" src=\"";
        // line 2049
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_1.svg"), 2049, $this->source);
        yield "\" alt=\"Brand Logo\">
                            <img class=\"gray\" src=\"";
        // line 2050
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brand/brand_1_1.svg"), 2050, $this->source);
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
                    <span class=\"sub-title\">Blog et Articles</span>
                    <h2 class=\"sec-title\">Blog et Articles de Life Voyage</h2>

                </div>
            </div>
            <div class=\"col-lg-auto d-none d-lg-block\">
                <div class=\"sec-btn\">
                    <a href=\"blog.html\" class=\"th-btn style4 th-icon\">Voir plus d\x27articles</a>
                </div>
            </div>
        </div>
        <div class=\"row gx-24 gy-30\">
            <div class=\"col-xl-5\">
                <div class=\"blog-grid th-ani\">
                    <div class=\"blog-img global-img\">
                        <img src=\"";
        // line 2082
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/blog_3_1.jpg"), 2082, $this->source);
        yield "\" alt=\"blog image\">
                    </div>
                    <div class=\"blog-grid_content\">
                        <div class=\"blog-meta\">
                            <a class=\"author\" href=\"blog.html\">05 Juillet 2024</a>
                            <a href=\"blog.html\">6 min de lecture</a>
                        </div>
                        <h3 class=\"box-title\"><a href=\"blog-details.html\">Une agence de voyage pour ceux qui veulent explorer
                            le monde et vivre l\x27aventure</a></h3>
                        <a href=\"blog-details.html\" class=\"th-btn style4 th-icon\">Lire la suite</a>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-7\">
                <div class=\"blog-grid style2 th-ani\">
                    <div class=\"blog-img global-img\">
                        <img src=\"";
        // line 2098
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/blog_3_2.jpg"), 2098, $this->source);
        yield "\" alt=\"blog image\">
                    </div>
                    <div class=\"blog-grid_content\">
                        <div class=\"blog-meta\">
                            <a class=\"author\" href=\"blog.html\">07 Juillet 2024</a>
                            <a href=\"blog.html\">7 min de lecture</a>
                        </div>
                        <h3 class=\"box-title\"><a href=\"blog-details.html\">Le meilleur moment pour visiter le Japon et profiter
                            des
                            cerisiers en fleurs</a></h3>
                        <a href=\"blog-details.html\" class=\"th-btn style4 th-icon\">Lire la suite</a>
                    </div>
                </div>
                <div class=\"blog-grid th-ani style2 mt-24\">
                    <div class=\"blog-img global-img\">
                        <img src=\"";
        // line 2113
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/blog/blog_3_3.jpg"), 2113, $this->source);
        yield "\" alt=\"blog image\">
                    </div>
                    <div class=\"blog-grid_content\">
                        <div class=\"blog-meta\">
                            <a class=\"author\" href=\"blog.html\">10 Juillet 2024</a>
                            <a href=\"blog.html\">8 min de lecture</a>
                        </div>
                        <h3 class=\"box-title\"><a href=\"blog-details.html\">L\x27histoire cachée du Japon et l\x27envie de
                            vivre l\x27aventure</a></h3>
                        <a href=\"blog-details.html\" class=\"th-btn style4 th-icon\">Lire la suite</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"shape-mockup shape1 d-none d-xxl-block\" data-top=\"14%\" data-right=\"9%\">
        <img src=\"";
        // line 2129
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_1.png"), 2129, $this->source);
        yield "\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup shape2 d-none d-xl-block\" data-top=\"25%\" data-right=\"6%\">
        <img src=\"";
        // line 2132
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_2.png"), 2132, $this->source);
        yield "\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup shape3 d-none d-xxl-block\" data-top=\"15%\" data-right=\"4%\">
        <img src=\"";
        // line 2135
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_3.png"), 2135, $this->source);
        yield "\" alt=\"shape\">
    </div>
    <div class=\"shape-mockup movingX d-none d-xxl-block\" data-bottom=\"0%\" data-right=\"10%\">
        <img src=\"";
        // line 2138
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_9.png"), 2138, $this->source);
        yield "\" alt=\"shape\">
    </div>
</section><!--==============================
\tFooter Area
==============================-->
<footer class=\"footer-wrapper bg-title footer-layout2\">
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
        // line 2156
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/plane2.svg"), 2156, $this->source);
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
        // line 2167
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/life-voyage/loog.png"), 2167, $this->source);
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

                                <li><a href=\"index.html\">Accueil</a></li>
                                <li><a href=\"about.html\">À propos de nous</a></li>
                                <li><a href=\"service.html\">Nos Services</a></li>
                                <li><a href=\"contact.html\">Conditions d\x27utilisation</a></li>
                                <li><a href=\"contact.html\">Réserver un circuit</a></li>
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
        // line 2201
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/phone.svg"), 2201, $this->source);
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
        // line 2210
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/envelope.svg"), 2210, $this->source);
        yield "\" alt=\"img\">
                                </div>
                                <div class=\"details\">
                                    <p><a href=\"mailto:mailinfo00@life-voyage.com\" class=\"info-box_link\">mailinfo00@life-voyage.com</a></p>
                                    <p><a href=\"mailto:support24@life-voyage.com\" class=\"info-box_link\">support24@life-voyage.com</a></p>
                                </div>
                            </div>
                            <div class=\"info-box_text\">
                                <div class=\"icon\"><img src=\"";
        // line 2218
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/location-dot.svg"), 2218, $this->source);
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
        // line 2231
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/widget/gallery_1_1.jpg"), 2231, $this->source);
        yield "\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                            <div class=\"gallery-thumb\">
                                <img src=\"";
        // line 2235
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/widget/gallery_1_2.jpg"), 2235, $this->source);
        yield "\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                            <div class=\"gallery-thumb\">
                                <img src=\"";
        // line 2239
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/widget/gallery_1_3.jpg"), 2239, $this->source);
        yield "\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                            <div class=\"gallery-thumb\">
                                <img src=\"";
        // line 2243
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/widget/gallery_1_4.jpg"), 2243, $this->source);
        yield "\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                            <div class=\"gallery-thumb\">
                                <img src=\"";
        // line 2247
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/widget/gallery_1_5.jpg"), 2247, $this->source);
        yield "\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                            <div class=\"gallery-thumb\">
                                <img src=\"";
        // line 2251
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/widget/gallery_1_6.jpg"), 2251, $this->source);
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
                    <p class=\"copyright-text\">Copyright 2024 <a href=\"home-travel.html\">Life Voyage</a>. Tous droits réservés.</p>
                </div>
                <div class=\"col-md-6 text-end d-none d-md-block\">
                    <div class=\"footer-card\">
                        <span class=\"title\">Nous acceptons</span>
                        <img src=\"";
        // line 2269
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/cards.png"), 2269, $this->source);
        yield "\" alt=\"\">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class=\"shape-mockup movingX d-none d-xxl-block\" data-top=\"24%\" data-left=\"5%\">
        <img src=\"";
        // line 2277
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/shape/shape_8.png"), 2277, $this->source);
        yield "\" alt=\"shape\">
    </div>
</footer>

<!--********************************
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
        return array (  2843 => 2277,  2832 => 2269,  2811 => 2251,  2804 => 2247,  2797 => 2243,  2790 => 2239,  2783 => 2235,  2776 => 2231,  2760 => 2218,  2749 => 2210,  2737 => 2201,  2700 => 2167,  2686 => 2156,  2665 => 2138,  2659 => 2135,  2653 => 2132,  2647 => 2129,  2628 => 2113,  2610 => 2098,  2591 => 2082,  2556 => 2050,  2552 => 2049,  2542 => 2042,  2538 => 2041,  2528 => 2034,  2524 => 2033,  2514 => 2026,  2510 => 2025,  2500 => 2018,  2496 => 2017,  2486 => 2010,  2482 => 2009,  2472 => 2002,  2468 => 2001,  2458 => 1994,  2454 => 1993,  2444 => 1986,  2440 => 1985,  2430 => 1978,  2426 => 1977,  2416 => 1970,  2412 => 1969,  2402 => 1962,  2398 => 1961,  2382 => 1948,  2376 => 1945,  2370 => 1942,  2361 => 1936,  2353 => 1931,  2345 => 1926,  2337 => 1921,  2329 => 1916,  2321 => 1911,  2296 => 1889,  2279 => 1875,  2262 => 1861,  2245 => 1847,  2228 => 1833,  2211 => 1819,  2184 => 1795,  2176 => 1790,  2166 => 1783,  2149 => 1769,  2142 => 1765,  2108 => 1734,  2104 => 1733,  2076 => 1708,  2070 => 1705,  2043 => 1681,  2037 => 1678,  2010 => 1654,  2004 => 1651,  1977 => 1627,  1971 => 1624,  1944 => 1600,  1938 => 1597,  1911 => 1573,  1905 => 1570,  1878 => 1546,  1872 => 1543,  1845 => 1519,  1839 => 1516,  1812 => 1492,  1800 => 1483,  1788 => 1474,  1776 => 1465,  1764 => 1456,  1752 => 1447,  1736 => 1434,  1725 => 1426,  1713 => 1417,  1700 => 1407,  1689 => 1399,  1676 => 1389,  1629 => 1345,  1603 => 1322,  1577 => 1299,  1551 => 1276,  1525 => 1253,  1499 => 1230,  1473 => 1207,  1447 => 1184,  1410 => 1150,  1384 => 1127,  1358 => 1104,  1332 => 1081,  1306 => 1058,  1280 => 1035,  1254 => 1012,  1228 => 989,  1190 => 954,  1164 => 931,  1138 => 908,  1112 => 885,  1086 => 862,  1060 => 839,  1034 => 816,  1008 => 793,  994 => 782,  990 => 781,  986 => 780,  965 => 762,  959 => 759,  952 => 755,  946 => 752,  940 => 749,  934 => 746,  917 => 732,  907 => 725,  896 => 717,  880 => 704,  874 => 701,  868 => 698,  841 => 674,  828 => 664,  815 => 654,  802 => 644,  789 => 634,  776 => 624,  763 => 614,  750 => 604,  737 => 594,  724 => 584,  709 => 572,  686 => 552,  670 => 539,  654 => 526,  638 => 513,  622 => 500,  606 => 487,  581 => 465,  570 => 457,  555 => 445,  481 => 374,  469 => 365,  457 => 356,  445 => 347,  433 => 338,  421 => 329,  415 => 326,  387 => 301,  365 => 282,  344 => 264,  323 => 246,  302 => 228,  289 => 217,  285 => 216,  206 => 140,  181 => 118,  170 => 110,  158 => 101,  139 => 85,  124 => 73,  105 => 57,  61 => 16,  44 => 1,);
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
                <p class=\"about-text\">Optimisons rapidement un modèle de capital intellectuel multiplateforme. Créons de manière appropriée des infrastructures interactives</p>
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
                            <a href=\"blog.html\"><i class=\"far fa-calendar\"></i>24 Juin 2024</a>
                        </div>
                        <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"#\">Quand la vision rencontre
                            la réalité</a></h4>
                    </div>
                </div>
                <div class=\"recent-post\">
                    <div class=\"media-img\">
                        <a href=\"#\"><img src=\"{{\x27assets/img/blog/recent-post-1-2.jpg\x27|theme }}\" alt=\"Blog Image\"></a>
                    </div>
                    <div class=\"media-body\">
                        <div class=\"recent-post-meta\">
                            <a href=\"#\"><i class=\"far fa-calendar\"></i>22 Juin 2024</a>
                        </div>
                        <h4 class=\"post-title\"><a class=\"text-inherit\" href=\"#\">Placer la barre plus haut dans la construction.</a></h4>
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
                        <p><a href=\"tel:+01234567890\" class=\"info-box_link\">+01 234 567 890</a></p>
                        <p><a href=\"tel:+09876543210\" class=\"info-box_link\">+09 876 543 210</a></p>
                    </div>
                </div>
                <div class=\"info-box_text\">
                    <div class=\"icon\">
                        <img src=\"{{\x27assets/img/icon/envelope.svg\x27|theme }}\" alt=\"img\">
                    </div>
                    <div class=\"details\">
                        <p><a href=\"mailto:mailinfo00@life-voyage.com\" class=\"info-box_link\">mailinfo00@life-voyage.com</a></p>
                        <p><a href=\"mailto:support24@life-voyage.com\" class=\"info-box_link\">support24@life-voyage.com</a></p>
                    </div>
                </div>
                <div class=\"info-box_text\">
                    <div class=\"icon\"><img src=\"{{\x27assets/img/icon/location-dot.svg\x27|theme }}\" alt=\"img\"></div>
                    <div class=\"details\">
                        <p>789 Inner Lane, Holy park, California, USA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"popup-search-box\">
    <button class=\"searchClose\"><i class=\"fal fa-times\"></i></button>
    <form action=\"#\">
        <input type=\"text\" placeholder=\"Que recherchez-vous ?\">
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
                    <a href=\"#\">Service</a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"service.html\">Services</a></li>
                        <li><a href=\"service-details.html\">Détails du service</a></li>
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
                                Découvrez le monde avec notre guide
                            </h1>
                            <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Life Voyage, une compagnie internationale de gestion de voyages avec 25 ans
                                d\x27expérience, spécialisée dans les voyages d\x27affaires et maritimes.</p>
                            <div class=\"btn-group\" data-ani=\"slideinup\" data-ani-delay=\"0.6s\">
                                <a href=\"#\" class=\"th-btn style2 th-icon\">Explorer les circuits</a>
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
                                Découvrez les meilleures destinations du monde
                            </h1>
                            <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Life Voyage, une compagnie internationale de gestion de voyages avec 25 ans
                                d\x27expérience, spécialisée dans les voyages d\x27affaires et maritimes.</p>
                            <div class=\"btn-group\" data-ani=\"slideinup\" data-ani-delay=\"0.6s\">
                                <a href=\"#\" class=\"th-btn style2 th-icon\">Explorer les circuits</a>
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
                                Capturez les merveilles du monde
                            </h1>
                            <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Life Voyage, une compagnie internationale de gestion de voyages avec 25 ans
                                d\x27expérience, spécialisée dans les voyages d\x27affaires et maritimes.</p>
                            <div class=\"btn-group\" data-ani=\"slideinup\" data-ani-delay=\"0.6s\">
                                <a href=\"#\" class=\"th-btn style2 th-icon\">Explorer les circuits</a>
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
                                Explorez le monde avec Life Voyage
                            </h1>
                            <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Life Voyage, une compagnie internationale de gestion de voyages avec 25 ans
                                d\x27expérience, spécialisée dans les voyages d\x27affaires et maritimes.</p>
                            <div class=\"btn-group\" data-ani=\"slideinup\" data-ani-delay=\"0.6s\">
                                <a href=\"#\" class=\"th-btn style2 th-icon\">Explorer les circuits</a>
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
                                Vivez l\x27expérience du voyage avec Life Voyage
                            </h1>
                            <p class=\"hero-text\" data-ani=\"slideinleft\" data-ani-delay=\"0.4s\">Life Voyage, une compagnie internationale de gestion de voyages avec 25 ans
                                d\x27expérience, spécialisée dans les voyages d\x27affaires et maritimes.</p>
                            <div class=\"btn-group\" data-ani=\"slideinup\" data-ani-delay=\"0.6s\">
                                <a href=\"#\" class=\"th-btn style2 th-icon\">Explorer les circuits</a>
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
                                                <option value=\"Sélectionner une destination\" selected disabled>Sélectionner une destination
                                                </option>
                                                <option value=\"Australie\">Australie</option>
                                                <option value=\"Dubaï\">Dubaï</option>
                                                <option value=\"Angleterre\">Angleterre</option>
                                                <option value=\"Suède\">Suède</option>
                                                <option value=\"Thaïlande\">Thaïlande</option>
                                                <option value=\"Égypte\">Égypte</option>
                                                <option value=\"Arabie Saoudite\">Arabie Saoudite</option>
                                                <option value=\"Suisse\">Suisse</option>
                                                <option value=\"Scandinavie\">Scandinavie</option>
                                                <option value=\"Europe de l\x27Ouest\">Europe de l\x27Ouest</option>
                                                <option value=\"Indonésie\">Indonésie</option>
                                                <option class=\"Italie\">Italie</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group col-md-6 col-xl-auto\">
                                        <div class=\"icon\">
                                            <i class=\"fa-regular fa-person-hiking\"></i>
                                        </div>
                                        <div class=\"search-input\">
                                            <label>Type</label>
                                            <select class=\" nice-select\" name=\"type\" id=\"type\">
                                                <option value=\"Aventure\" selected disabled>Aventure</option>
                                                <option value=\"Plage\">Plage</option>
                                                <option value=\"Circuit de groupe\">Circuit de groupe</option>
                                                <option value=\"Circuit en couple\">Circuit en couple</option>
                                                <option value=\"Circuit en famille\">Circuit en famille</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-group col-md-6 col-xl-auto\">
                                        <div class=\"icon\">
                                            <i class=\"fa-light fa-clock\"></i>
                                        </div>
                                        <div class=\"search-input\">
                                            <label>Durée</label>
                                            <select class=\"form-select nice-select\" name=\"Durée\" id=\"Durée\">
                                                <option value=\"Normal\" selected disabled>Durée</option>
                                                <option value=\"1\">1 jour</option>
                                                <option value=\"2\">2 jours</option>
                                                <option value=\"3\">3 jours</option>
                                                <option value=\"4\">4 jours</option>
                                                <option value=\"5\">5 jours</option>
                                                <option value=\"6\">6 jours</option>
                                                <option value=\"7\">7 jours</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"form-btn col-md-6 col-xl-auto\">
                                        <button class=\"th-btn\"><img src=\"{{\x27assets/img/icon/search.svg\x27|theme}}\" alt=\"\">Rechercher</button>
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
                    <span class=\"sub-title\">Destination Populaire</span>
                    <h2 class=\"sec-title\">Destinations Populaires</h2>
                </div>
            </div>
            <div class=\"col-lg-5\">
                <h2 class=\"destination-title\"><span class=\"counter-number\">850</span>+ Destinations</h2>
                <p class=\"sec-text mb-30\">Life Voyage est l\x27une des compagnies de voyage les plus appréciées par ceux qui souhaitent
                    vivre l\x27aventure et découvrir le monde.</p>

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
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">Dubaï, ÉAU</a></h3>
                                <p class=\"destination-text\">25 offres</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"{{\x27assets/img/destination/destination_3_2.jpg\x27 | theme}}\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">Japon</a></h3>
                                <p class=\"destination-text\">25 offres</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"{{\x27assets/img/destination/destination_3_3.jpg\x27 | theme}}\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">Suisse</a></h3>
                                <p class=\"destination-text\">25 offres</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"{{\x27assets/img/destination/destination_3_4.jpg\x27| theme }}\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">Brésil</a></h3>
                                <p class=\"destination-text\">25 offres</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
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
                                <p class=\"destination-text\">25 offres</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"destination-item th-ani\">
                            <div class=\"destination-item_img global-img\">
                                <img src=\"{{\x27assets/img/destination/destination_3_2.jpg\x27|theme }}\" alt=\"image\">
                            </div>
                            <div class=\"destination-content\">
                                <h3 class=\"box-title\"><a href=\"destination-details.html\">Japon</a></h3>
                                <p class=\"destination-text\">25 offres</p>
                                <a href=\"destination-details.html\" class=\"th-btn style4 th-icon\">Réserver</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"destination-btn text-center mt-60\">
            <a href=\"#\" class=\"th-btn style3 th-icon\">Voir tout</a>
        </div>
    </div>
</section><!--==============================
Category Area
==============================-->
<section class=\"category-area3 bg-smoke space\" data-bg-src=\"{{\x27assets/img/bg/line-pattern3.png\x27|theme }}\">
    <div class=\"container th-container\">
        <div class=\"title-area text-center\">
            <span class=\"sub-title\">Un endroit merveilleux pour vous</span>
            <h2 class=\"sec-title\">Catégories de circuits</h2>
        </div>
        <div class=\"slider-area\">
            <div class=\"swiper th-slider has-shadow category-slider3\" id=\"categorySlider3\" data-slider-options=\x27{\"breakpoints\":{\"0\":{\"slidesPerView\":1},\"576\":{\"slidesPerView\":\"1\"},\"768\":{\"slidesPerView\":\"2\"},\"992\":{\"slidesPerView\":\"3\"},\"1200\":{\"slidesPerView\":\"3\"},\"1400\":{\"slidesPerView\":\"5\"}}}\x27>
                <div class=\"swiper-wrapper\">
                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"{{\x27assets/img/category/category_1_1.jpg\x27|theme }}\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"#\">Croisières</a></h3>
                            <a class=\"line-btn\" href=\"#\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"{{\x27assets/img/category/category_1_2.jpg\x27|theme }}\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"#\">Randonnée</a></h3>
                            <a class=\"line-btn\" href=\"#\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"{{\x27assets/img/category/category_1_3.jpg\x27|theme }}\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"#\">Airbirds</a></h3>
                            <a class=\"line-btn\" href=\"#\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"{{\x27assets/img/category/category_1_4.jpg\x27|theme }}\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"#\">Faune sauvage</a></h3>
                            <a class=\"line-btn\" href=\"#\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"{{\x27assets/img/category/category_1_5.jpg\x27|theme }}\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"#\">Marche</a></h3>
                            <a class=\"line-btn\" href=\"#\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"{{\x27assets/img/category/category_1_1.jpg\x27|theme }}\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"#\">Croisières</a></h3>
                            <a class=\"line-btn\" href=\"#\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"{{\x27assets/img/category/category_1_2.jpg\x27|theme }}\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"#\">Randonnée</a></h3>
                            <a class=\"line-btn\" href=\"#\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"{{\x27assets/img/category/category_1_3.jpg\x27|theme }}\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"#\">Airbirds</a></h3>
                            <a class=\"line-btn\" href=\"#\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"{{\x27assets/img/category/category_1_4.jpg\x27 | theme}}\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"#\">Faune sauvage</a></h3>
                            <a class=\"line-btn\" href=\"#\">Voir plus</a>
                        </div>
                    </div>

                    <div class=\"swiper-slide\">
                        <div class=\"category-card single2\">
                            <div class=\"box-img global-img\">
                                <img src=\"{{\x27assets/img/category/category_1_5.jpg\x27 | theme}}\" alt=\"Image\">
                            </div>
                            <h3 class=\"box-title\"><a href=\"#\">Marche</a></h3>
                            <a class=\"line-btn\" href=\"#\">Voir plus</a>
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
                        <span class=\"sub-title style1 \">Partons Ensemble</span>
                        <h2 class=\"sec-title mb-20 pe-xl-5 me-xl-5 heading\">Planifiez votre voyage avec nous</h2>
                    </div>
                    <p class=\"sec-text mb-30\">Il existe de nombreuses variantes de passages disponibles, mais la majorité a subi une altération sous une forme ou une autre, par l\x27injection de mots générés aléatoirement.</p>
                    <div class=\"about-item-wrap\">
                        <div class=\"about-item style2\">
                            <div class=\"about-item_img\"><img src=\"{{\x27assets/img/icon/about_1_1.svg\x27 | theme}}\" alt=\"\"></div>
                            <div class=\"about-item_centent\">
                                <h5 class=\"box-title\">Voyage Exclusif</h5>
                                <p class=\"about-item_text\">Il existe de nombreuses variantes de passages disponibles, mais la
                                    majorité.</p>
                            </div>
                        </div>
                        <div class=\"about-item style2\">
                            <div class=\"about-item_img\"><img src=\"{{\x27assets/img/icon/about_1_2.svg\x27 | theme}}\" alt=\"\"></div>
                            <div class=\"about-item_centent\">
                                <h5 class=\"box-title\">La Sécurité Avant Tout</h5>
                                <p class=\"about-item_text\">Il existe de nombreuses variantes de passages disponibles, mais la majorité.</p>
                            </div>
                        </div>
                        <div class=\"about-item style2\">
                            <div class=\"about-item_img\"><img src=\"{{\x27assets/img/icon/about_1_3.svg\x27 | theme}}\" alt=\"\"></div>
                            <div class=\"about-item_centent\">
                                <h5 class=\"box-title\">Guide Professionnel</h5>
                                <p class=\"about-item_text\">Il existe de nombreuses variantes de passages disponibles, mais la
                                    majorité.</p>
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
                    <span class=\"sub-title\">Meilleure Expérience</span>
                    <h2 class=\"sec-title\">Une Expérience de Voyage Incroyable</h2>
                </div>
            </div>
        </div>
        <div class=\"nav nav-tabs tour-tabs\" id=\"nav-tab\" role=\"tablist\">
            <button class=\"nav-link th-btn active\" id=\"nav-step1-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-step1\" type=\"button\"><img src=\"{{\x27assets/img/icon/tour_icon_1.svg\x27 | theme}}\" alt=\"\">Forfait Circuit</button>
            <button class=\"nav-link th-btn\" id=\"nav-step2-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-step2\" type=\"button\"><img src=\"{{\x27assets/img/icon/tour_icon_2.svg\x27 | theme}}\" alt=\"\">Hotel</button>
            <button class=\"nav-link th-btn\" id=\"nav-step3-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-step3\" type=\"button\"><img src=\"{{\x27assets/img/icon/tour_icon_3.svg\x27 | theme}}\" alt=\"\">Transport</button>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Greece Forfait Circuit</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Italie Tour package</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Dubaï Forfait Circuit</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Suisse</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Greece Forfait Circuit</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Italie Tour package</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Dubaï Forfait Circuit</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Suisse</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">The Plaza, New York</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Hotel Ritz Paris</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$970.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Claridge’s, London</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$960.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Taj Mahal Palace, India</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$940.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Peninsula Hong Kong</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$970.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">The Ritz Hotel London</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$940.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">The Shelbourne Hotel, Dublin</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$990.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Beverly Hills Hotel</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$950.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Forfait Voyage en Caravane</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Forfait Bus Couchette </a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Forfait Voyage en Train</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Forfait Voyage en Avion</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Forfait Transport en Croisière</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Forfait Voyage en Avion</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Forfait Bus Couchette </a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
                                        <h3 class=\"box-title\"><a href=\"tour-details.html\">Forfait Voyage en Train</a></h3>
                                        <div class=\"tour-rating\">
                                            <div class=\"star-rating\" role=\"img\" aria-label=\"Noté 5,00 sur 5\"><span style=\"width:100%\">Noté
                                                        <strong class=\"rating\">5.00</strong> sur 5 basé sur <span class=\"rating\">4.8</span>(4.8
                                                        avis)</span></div>
                                            <a href=\"tour-details.html\" class=\"woocommerce-review-link\">(<span class=\"count\">4.8</span>
                                                avis)</a>
                                        </div>
                                        <h4 class=\"tour-box_price\"><span class=\"currency\">\$980.00</span>/Personne</h4>
                                        <div class=\"tour-action\">
                                            <span><i class=\"fa-light fa-clock\"></i>7 Jours</span>
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
            <span class=\"sub-title\">Rendez votre circuit plus agréable</span>
            <h2 class=\"sec-title\">Recent Galerie</h2>
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
            <span class=\"sub-title\">Rencontrez nos guides</span>
            <h2 class=\"sec-title\">Rencontrez le guide touristique</h2>
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
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">Michel Smith</a></h3>
                                    <span class=\"team-desig\">Guide touristique</span>


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
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">Janny Willson</a></h3>
                                    <span class=\"team-desig\">Guide touristique</span>


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
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">Jacob Jones</a></h3>
                                    <span class=\"team-desig\">Guide touristique</span>


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
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">Maria Prova</a></h3>
                                    <span class=\"team-desig\">Guide touristique</span>


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
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">Rebeka Maliha</a></h3>
                                    <span class=\"team-desig\">Guide touristique</span>


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
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">Alif Mahmud</a></h3>
                                    <span class=\"team-desig\">Guide touristique</span>


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
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">Guy Hawkins</a></h3>
                                    <span class=\"team-desig\">Guide touristique</span>


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
                                    <h3 class=\"box-title\"><a href=\"tour-guider-details.html\">Jenny Wilson</a></h3>
                                    <span class=\"team-desig\">Guide touristique</span>


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
                        <h2 class=\"sec-title text-white\">Dites-nous bonjour</h2>
                        <p class=\"contact-text text-white\">Nous serions ravis d\x27avoir de vos nouvelles. Notre équipe sympathique est toujours là pour discuter</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"contact-form-area\">
                    <form action=\"mail.php\" method=\"POST\" class=\"contact-form2 ajax-contact\">
                        <div class=\"row\">
                            <div class=\"form-group col-12\">
                                <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name3\" placeholder=\"Prénom\">
                                <img src=\"{{\x27assets/img/icon/user.svg\x27 | theme}}\" alt=\"\">
                            </div>
                            <div class=\"form-group col-12\">
                                <input type=\"email\" class=\"form-control\" name=\"email3\" id=\"email3\" placeholder=\"Votre email\">
                                <img src=\"{{\x27assets/img/icon/mail.svg\x27 | theme}}\" alt=\"\">
                            </div>
                            <div class=\"form-group col-12\">
                                <select name=\"subject\" id=\"subject\" class=\"form-select nice-select\">
                                    <option value=\"Sélectionnez un type de circuit\" selected disabled>Sélectionnez un type de circuit</option>
                                    <option value=\"Aventure en Afrique\">Aventure en Afrique</option>
                                    <option value=\"Afrique Sauvage\">Afrique Sauvage</option>
                                    <option value=\"Asie\">Asie</option>
                                    <option value=\"Scandinavie\">Scandinavie</option>
                                    <option value=\"Europe de l\x27Ouest\">Europe de l\x27Ouest</option>
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
                            <button class=\"th-btn white-btn\">Envoyer le message <img src=\"{{\x27assets/img/icon/plane3.svg\x27 | theme}}\" alt=\"\"></button>
                        </div>
                        <div class=\"contact-info\">
                            <p class=\"contact-info_link\"><a href=\"tel:+0123456789\">+012 345 6789</a></p>
                            <div class=\"contact-info_icon\">
                                <a href=\"tel:+0123456789\"><img src=\"{{\x27assets/img/icon/call.svg\x27 | theme}}\" alt=\"\"></a>
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
            <h2 class=\"sec-title\">Avis de nos clients</h2>
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
                                    <p class=\"testi-grid_text\">“Un foyer qui allie parfaitement durabilité et luxe, jusqu\x27à ce que je découvre Ecoland Residence. Dès que j\x27ai posé le pied dans cette communauté, j\x27ai su que c\x27était là où je voulais vivre.”</p>
                                    <h6 class=\"testi-grid_name box-title\">Andrew Simon</h6>
                                    <span class=\"testi-grid_desig\">Voyageur</span>

                                </div>

                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"{{\x27assets/img/testimonial/testi_3_2.png\x27 | theme}}\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">“Cette maison affiche une architecture élégante et contemporaine, avec des lignes épurées et de larges fenêtres laissant la lumière naturelle inonder l\x27intérieur. Elle intègre des principes de conception passive”</p>
                                    <h6 class=\"testi-grid_name box-title\">Maria Doe</h6>
                                    <span class=\"testi-grid_desig\">Voyageur</span>

                                </div>

                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"{{\x27assets/img/testimonial/testi_3_3.png\x27 | theme}}\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">“Des panneaux solaires ornent le toit, exploitant l\x27énergie renouvelable pour alimenter la maison et même réinjecter l\x27électricité excédentaire dans le réseau. Une isolation haute performance et du triple vitrage”</p>
                                    <h6 class=\"testi-grid_name box-title\">Angelina Rose</h6>
                                    <span class=\"testi-grid_desig\">Voyageur</span>

                                </div>

                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"{{\x27assets/img/testimonial/testi_3_4.png\x27 | theme}}\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">Un système sophistiqué de récupération des eaux de pluie collecte et filtre l\x27eau pour l\x27irrigation et les usages non potables, réduisant la dépendance aux sources d\x27eau municipales. Les systèmes d\x27eaux grises</p>
                                    <h6 class=\"testi-grid_name box-title\">Michel Carlos</h6>
                                    <span class=\"testi-grid_desig\">Voyageur</span>

                                </div>

                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"{{\x27assets/img/testimonial/testi_3_5.png\x27 | theme}}\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">Dans tout l\x27intérieur, des matériaux écologiques comme le bois récupéré, les sols en bambou et les plans de travail en verre recyclé créent une ambiance luxueuse et durable.</p>
                                    <h6 class=\"testi-grid_name box-title\">Michel Smith</h6>
                                    <span class=\"testi-grid_desig\">Voyageur</span>

                                </div>

                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"testi-grid\">
                                <div class=\"testi-grid_author\">
                                    <img src=\"{{\x27assets/img/testimonial/testi_3_6.png\x27 | theme}}\" alt=\"Avater\">
                                </div>
                                <div class=\"testi-grid_content\">
                                    <p class=\"testi-grid_text\">“Un foyer qui allie parfaitement durabilité et luxe, jusqu\x27à ce que je découvre Ecoland Residence. Dès que j\x27ai posé le pied dans cette communauté, j\x27ai su que c\x27était là où je voulais vivre.”</p>
                                    <h6 class=\"testi-grid_name box-title\">Jesmen</h6>
                                    <span class=\"testi-grid_desig\">Voyageur</span>

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
                    <span class=\"sub-title\">Blog et Articles</span>
                    <h2 class=\"sec-title\">Blog et Articles de Life Voyage</h2>

                </div>
            </div>
            <div class=\"col-lg-auto d-none d-lg-block\">
                <div class=\"sec-btn\">
                    <a href=\"blog.html\" class=\"th-btn style4 th-icon\">Voir plus d\x27articles</a>
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
                            <a class=\"author\" href=\"blog.html\">05 Juillet 2024</a>
                            <a href=\"blog.html\">6 min de lecture</a>
                        </div>
                        <h3 class=\"box-title\"><a href=\"blog-details.html\">Une agence de voyage pour ceux qui veulent explorer
                            le monde et vivre l\x27aventure</a></h3>
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
                            <a class=\"author\" href=\"blog.html\">07 Juillet 2024</a>
                            <a href=\"blog.html\">7 min de lecture</a>
                        </div>
                        <h3 class=\"box-title\"><a href=\"blog-details.html\">Le meilleur moment pour visiter le Japon et profiter
                            des
                            cerisiers en fleurs</a></h3>
                        <a href=\"blog-details.html\" class=\"th-btn style4 th-icon\">Lire la suite</a>
                    </div>
                </div>
                <div class=\"blog-grid th-ani style2 mt-24\">
                    <div class=\"blog-img global-img\">
                        <img src=\"{{\x27assets/img/blog/blog_3_3.jpg\x27 | theme}}\" alt=\"blog image\">
                    </div>
                    <div class=\"blog-grid_content\">
                        <div class=\"blog-meta\">
                            <a class=\"author\" href=\"blog.html\">10 Juillet 2024</a>
                            <a href=\"blog.html\">8 min de lecture</a>
                        </div>
                        <h3 class=\"box-title\"><a href=\"blog-details.html\">L\x27histoire cachée du Japon et l\x27envie de
                            vivre l\x27aventure</a></h3>
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
==============================-->
<footer class=\"footer-wrapper bg-title footer-layout2\">
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
                                <button type=\"submit\" class=\"th-btn style1\">S\x27abonner <img src=\"{{\x27assets/img/icon/plane2.svg\x27 | theme}}\" alt=\"\"></button>
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
                                <a href=\"home-travel.html\"><img style=\"height:56px;width:auto;\" src=\"{{\x27assets/img/life-voyage/loog.png\x27 | theme}}\" alt=\"Life Voyage\"></a>
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

                                <li><a href=\"index.html\">Accueil</a></li>
                                <li><a href=\"about.html\">À propos de nous</a></li>
                                <li><a href=\"service.html\">Nos Services</a></li>
                                <li><a href=\"contact.html\">Conditions d\x27utilisation</a></li>
                                <li><a href=\"contact.html\">Réserver un circuit</a></li>
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
                                    <img src=\"{{\x27assets/img/icon/phone.svg\x27 | theme}}\" alt=\"img\">
                                </div>
                                <div class=\"details\">
                                    <p><a href=\"tel:+01234567890\" class=\"info-box_link\">+01 234 567 890</a></p>
                                    <p><a href=\"tel:+09876543210\" class=\"info-box_link\">+09 876 543 210</a></p>
                                </div>
                            </div>
                            <div class=\"info-box_text\">
                                <div class=\"icon\">
                                    <img src=\"{{\x27assets/img/icon/envelope.svg\x27 | theme}}\" alt=\"img\">
                                </div>
                                <div class=\"details\">
                                    <p><a href=\"mailto:mailinfo00@life-voyage.com\" class=\"info-box_link\">mailinfo00@life-voyage.com</a></p>
                                    <p><a href=\"mailto:support24@life-voyage.com\" class=\"info-box_link\">support24@life-voyage.com</a></p>
                                </div>
                            </div>
                            <div class=\"info-box_text\">
                                <div class=\"icon\"><img src=\"{{\x27assets/img/icon/location-dot.svg\x27 | theme}}\" alt=\"img\"></div>
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
                                <img src=\"{{\x27assets/img/widget/gallery_1_1.jpg\x27 | theme}}\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                            <div class=\"gallery-thumb\">
                                <img src=\"{{\x27assets/img/widget/gallery_1_2.jpg\x27 | theme}}\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                            <div class=\"gallery-thumb\">
                                <img src=\"{{\x27assets/img/widget/gallery_1_3.jpg\x27 | theme}}\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                            <div class=\"gallery-thumb\">
                                <img src=\"{{\x27assets/img/widget/gallery_1_4.jpg\x27 | theme}}\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                            <div class=\"gallery-thumb\">
                                <img src=\"{{\x27assets/img/widget/gallery_1_5.jpg\x27 | theme}}\" alt=\"Galerie Image\">
                                <a target=\"_blank\" href=\"https://www.instagram.com/\" class=\"gallery-btn\"><i class=\"fab fa-instagram\"></i></a>
                            </div>
                            <div class=\"gallery-thumb\">
                                <img src=\"{{\x27assets/img/widget/gallery_1_6.jpg\x27 | theme}}\" alt=\"Galerie Image\">
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
                    <p class=\"copyright-text\">Copyright 2024 <a href=\"home-travel.html\">Life Voyage</a>. Tous droits réservés.</p>
                </div>
                <div class=\"col-md-6 text-end d-none d-md-block\">
                    <div class=\"footer-card\">
                        <span class=\"title\">Nous acceptons</span>
                        <img src=\"{{\x27assets/img/shape/cards.png\x27 | theme}}\" alt=\"\">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class=\"shape-mockup movingX d-none d-xxl-block\" data-top=\"24%\" data-left=\"5%\">
        <img src=\"{{\x27assets/img/shape/shape_8.png\x27 | theme}}\" alt=\"shape\">
    </div>
</footer>

<!--********************************
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
        static $tags = ["partial" => 216];
        static $filters = ["theme" => 16];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "partial"],
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

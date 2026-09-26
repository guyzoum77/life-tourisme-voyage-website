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

/* /Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/contact.htm */
class __TwigTemplate_82ab503b5cdf9407ce064cc5249aa660 extends Template
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
            <h1 class=\"breadcumb-title\">Contactez-nous</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"";
        // line 10
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter("accueil"), 10, $this->source);
        yield "\">Accueil</a></li>
                <li>Contactez-nous</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
    Coordonnées
==============================-->
<div class=\"space\">
    <div class=\"container\">
        <div class=\"title-area text-center\">
            <span class=\"sub-title\">Nos coordonnées</span>
            <h2 class=\"sec-title\">Passez nous voir ou écrivez-nous</h2>
        </div>
        <div class=\"contact-panel\">
            <div class=\"contact-agency\">
                <span class=\"contact-agency_label\">Notre agence</span>
                <h3 class=\"contact-agency_title\">Grand-Bassam, Mockeyville</h3>
                <p class=\"contact-agency_address\"><i class=\"fa-solid fa-location-dot\"></i>Carrefour Femme Peulh 2, Côte d\x27Ivoire</p>
                ";
        // line 32
        yield "                <div class=\"contact-agency_hours\">
                    <span class=\"contact-agency_sub\"><i class=\"fa-solid fa-clock\"></i>Horaires d\x27ouverture</span>
                    <ul>
                        <li><span>Lundi – vendredi</span><strong>8 h – 18 h</strong></li>
                        <li><span>Samedi</span><strong>9 h – 14 h</strong></li>
                    </ul>
                </div>
                <div class=\"contact-agency_actions\">
                    <a href=\"https://www.google.com/maps/search/?api=1&query=Carrefour+Femme+Peulh+2+Mockeyville+Grand-Bassam\" target=\"_blank\" class=\"th-btn th-icon\">Voir l\x27itinéraire</a>
                    <a href=\"https://www.facebook.com/\" target=\"_blank\" class=\"contact-agency_social\" aria-label=\"Facebook\"><i class=\"fab fa-facebook-f\"></i></a>
                </div>
            </div>
            <div class=\"contact-side\">
                <div class=\"contact-tiles\">
                    <div class=\"contact-tile is-whatsapp\">
                        <i class=\"fab fa-whatsapp contact-tile_bg\" aria-hidden=\"true\"></i>
                        <div class=\"contact-tile_head\">
                            <span class=\"contact-tile_icon\"><i class=\"fab fa-whatsapp\"></i></span>
                            <span class=\"contact-tile_badge\"><i class=\"fa-solid fa-bolt\"></i>Réponse rapide</span>
                        </div>
                        <span class=\"contact-tile_label\">WhatsApp principal</span>
                        <div class=\"contact-tile_value-row\">
                            <span class=\"contact-tile_value\">+225 07 57 39 74 23</span>
                            <button type=\"button\" class=\"contact-tile_copy\" data-copy=\"+225 07 57 39 74 23\" title=\"Copier\" aria-label=\"Copier whatsapp principal\"><i class=\"fa-regular fa-copy\"></i></button>
                        </div>
                        <p class=\"contact-tile_desc\">Le moyen le plus rapide pour échanger avec un conseiller et envoyer vos documents.</p>
                        <a href=\"https://wa.me/2250757397423\" target=\"_blank\" class=\"contact-tile_cta\">Écrire sur WhatsApp<i class=\"fa-solid fa-arrow-right\"></i></a>
                    </div>
                    <div class=\"contact-tile is-whatsapp\">
                        <i class=\"fab fa-whatsapp contact-tile_bg\" aria-hidden=\"true\"></i>
                        <div class=\"contact-tile_head\">
                            <span class=\"contact-tile_icon\"><i class=\"fab fa-whatsapp\"></i></span>
                            <span class=\"contact-tile_badge\"><i class=\"fa-solid fa-reply\"></i>Suivi de dossier</span>
                        </div>
                        <span class=\"contact-tile_label\">WhatsApp secondaire</span>
                        <div class=\"contact-tile_value-row\">
                            <span class=\"contact-tile_value\">+225 07 89 15 28 12</span>
                            <button type=\"button\" class=\"contact-tile_copy\" data-copy=\"+225 07 89 15 28 12\" title=\"Copier\" aria-label=\"Copier whatsapp secondaire\"><i class=\"fa-regular fa-copy\"></i></button>
                        </div>
                        <p class=\"contact-tile_desc\">Une seconde ligne pour vos questions et le suivi de votre demande en cours.</p>
                        <a href=\"https://wa.me/2250789152812\" target=\"_blank\" class=\"contact-tile_cta\">Écrire sur WhatsApp<i class=\"fa-solid fa-arrow-right\"></i></a>
                    </div>
                    <div class=\"contact-tile\">
                        <i class=\"fa-solid fa-phone contact-tile_bg\" aria-hidden=\"true\"></i>
                        <div class=\"contact-tile_head\">
                            <span class=\"contact-tile_icon\"><i class=\"fa-solid fa-phone\"></i></span>
                            <span class=\"contact-tile_badge\"><i class=\"fa-solid fa-clock\"></i>Aux heures d\x27ouverture</span>
                        </div>
                        <span class=\"contact-tile_label\">Téléphone fixe</span>
                        <div class=\"contact-tile_value-row\">
                            <span class=\"contact-tile_value\">+225 27 21 73 41 09</span>
                            <button type=\"button\" class=\"contact-tile_copy\" data-copy=\"+225 27 21 73 41 09\" title=\"Copier\" aria-label=\"Copier téléphone fixe\"><i class=\"fa-regular fa-copy\"></i></button>
                        </div>
                        <p class=\"contact-tile_desc\">Appelez directement l\x27agence pour un renseignement ou un rendez-vous.</p>
                        <a href=\"tel:+2252721734109\" class=\"contact-tile_cta\">Appeler l\x27agence<i class=\"fa-solid fa-arrow-right\"></i></a>
                    </div>
                    <div class=\"contact-tile\">
                        <i class=\"fa-solid fa-envelope contact-tile_bg\" aria-hidden=\"true\"></i>
                        <div class=\"contact-tile_head\">
                            <span class=\"contact-tile_icon\"><i class=\"fa-solid fa-envelope\"></i></span>
                            <span class=\"contact-tile_badge\"><i class=\"fa-solid fa-clock\"></i>Réponse sous 24 h</span>
                        </div>
                        <span class=\"contact-tile_label\">Email</span>
                        <div class=\"contact-tile_value-row\">
                            <span class=\"contact-tile_value\">info@lifevoyagestourisme.com</span>
                            <button type=\"button\" class=\"contact-tile_copy\" data-copy=\"info@lifevoyagestourisme.com\" title=\"Copier\" aria-label=\"Copier email\"><i class=\"fa-regular fa-copy\"></i></button>
                        </div>
                        <p class=\"contact-tile_desc\">Pour vos demandes détaillées, vos devis et l\x27envoi de pièces jointes.</p>
                        <a href=\"mailto:info@lifevoyagestourisme.com\" class=\"contact-tile_cta\">Envoyer un email<i class=\"fa-solid fa-arrow-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
    Formulaire (même bloc que l\x27accueil)
==============================-->
<div class=\"bg-top-center overflow-hidden\" data-bg-src=\"";
        // line 111
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/bg/contact_bg_1.jpg"), 111, $this->source);
        yield "\">
    <div class=\"container\">
        <div class=\"row gy-4 justify-content-between align-items-center\">
            <div class=\"col-lg-5\">
                <div class=\"pt-80 p-lg-0\">
                    <div class=\"title-area pe-xl-5\">
                        <span class=\"sub-title text-white\">Demande de devis</span>
                        <h2 class=\"sec-title text-white\">Parlez-nous de votre projet</h2>
                        <p class=\"contact-text text-white\">Demandez votre visa, billet d\x27avion ou assurance voyage dès aujourd\x27hui ! Remplissez le formulaire : votre demande s\x27ouvre directement dans WhatsApp, prête à être envoyée.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"contact-form-area\">
                    <form action=\"#\" method=\"POST\" class=\"contact-form2\" id=\"lv-contact-form\">
                        <div class=\"row\">
                            <div class=\"form-group col-12\">
                                <input type=\"text\" class=\"form-control\" name=\"nom\" id=\"lv-nom\" placeholder=\"Nom et prénom\" required>
                                <img src=\"";
        // line 129
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/user.svg"), 129, $this->source);
        yield "\" alt=\"\">
                            </div>
                            <div class=\"form-group col-12\">
                                <input type=\"tel\" class=\"form-control\" name=\"telephone\" id=\"lv-tel\" placeholder=\"Téléphone / WhatsApp\" required>
                                <img src=\"";
        // line 133
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/call.svg"), 133, $this->source);
        yield "\" alt=\"\">
                            </div>
                            <div class=\"form-group col-12\">
                                <input type=\"email\" class=\"form-control\" name=\"email\" id=\"lv-email\" placeholder=\"Votre email\">
                                <img src=\"";
        // line 137
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/mail.svg"), 137, $this->source);
        yield "\" alt=\"\">
                            </div>
                            <div class=\"form-group col-12\">
                                <select name=\"service\" id=\"lv-service\" class=\"form-select nice-select\">
                                    <option value=\"\" selected disabled>Service concerné</option>
                                    <option value=\"Accompagnement visa\">Accompagnement visa</option>
                                    <option value=\"Billetterie / vols\">Billetterie / vols</option>
                                    <option value=\"Tourisme\">Tourisme national et international</option>
                                    <option value=\"Véhicules\">Vente et location de véhicules</option>
                                    <option value=\"Hôtels & résidences\">Hôtels et résidences meublées</option>
                                    <option value=\"Assurance voyage\">Assurance voyage</option>
                                </select>
                            </div>
                            <div class=\"form-group col-12\">
                                <textarea name=\"message\" id=\"lv-message\" cols=\"30\" rows=\"3\" class=\"form-control\" placeholder=\"Votre message : destination, dates, nombre de voyageurs\"></textarea>
                                <img src=\"";
        // line 152
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/chat.svg"), 152, $this->source);
        yield "\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"form-btn-wrapp\">
                            <div class=\"form-btn\">
                                <button type=\"submit\" class=\"th-btn white-btn\">Envoyer ma demande <img src=\"";
        // line 157
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/plane3.svg"), 157, $this->source);
        yield "\" alt=\"\"></button>
                            </div>
                            <div class=\"contact-info\">
                                <p class=\"contact-info_link\"><a href=\"tel:+2250757397423\">+225 07 57 39 74 23</a></p>
                                <div class=\"contact-info_icon\">
                                    <a href=\"tel:+2250757397423\"><img src=\"";
        // line 162
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/icon/call.svg"), 162, $this->source);
        yield "\" alt=\"\"></a>
                                </div>
                            </div>
                        </div>
                        <p class=\"form-messages mb-0 mt-3 text-white\"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
    Carte
==============================-->
<div class=\"space\">
    <div class=\"container\">
        <div class=\"title-area text-center\">
            <span class=\"sub-title\">Plan d\x27accès</span>
            <h2 class=\"sec-title\">Mockeyville, Grand-Bassam</h2>
        </div>
        <div class=\"contact-map\">
            <iframe src=\"https://www.google.com/maps?q=Mockeyville%2C%20Grand-Bassam%2C%20C%C3%B4te%20d%27Ivoire&output=embed\" style=\"width:100%;height:450px;border:0;border-radius:30px\" allowfullscreen=\"\" loading=\"lazy\" title=\"Life Voyages & Tourisme, Grand-Bassam\"></iframe>
        </div>
    </div>
</div>

";
        // line 190
        yield "<script>
document.querySelectorAll(\x27.contact-tile_copy\x27).forEach(function (btn) {
    btn.addEventListener(\x27click\x27, function () {
        var done = function () {
            btn.classList.add(\x27is-copied\x27);
            btn.innerHTML = \x27<i class=\"fa-solid fa-check\"></i>\x27;
            setTimeout(function () {
                btn.classList.remove(\x27is-copied\x27);
                btn.innerHTML = \x27<i class=\"fa-regular fa-copy\"></i>\x27;
            }, 1600);
        };
        if (navigator.clipboard) {
            navigator.clipboard.writeText(btn.dataset.copy).then(done);
        }
    });
});
document.getElementById(\x27lv-contact-form\x27).addEventListener(\x27submit\x27, function (e) {
    e.preventDefault();
    var v = function (id) { var el = document.getElementById(id); return el && el.value ? el.value.trim() : \x27\x27; };
    var lignes = [\x27Bonjour Life Voyages & Tourisme, voici ma demande :\x27,
        \x27Nom : \x27 + v(\x27lv-nom\x27), \x27Téléphone : \x27 + v(\x27lv-tel\x27)];
    if (v(\x27lv-email\x27)) lignes.push(\x27Email : \x27 + v(\x27lv-email\x27));
    if (v(\x27lv-service\x27)) lignes.push(\x27Service : \x27 + v(\x27lv-service\x27));
    if (v(\x27lv-message\x27)) lignes.push(\x27Message : \x27 + v(\x27lv-message\x27));
    window.open(\x27https://wa.me/2250757397423?text=\x27 + encodeURIComponent(lignes.join(\x27\\n\x27)), \x27_blank\x27);
    this.querySelector(\x27.form-messages\x27).textContent = \x27WhatsApp s\\\x27ouvre avec votre demande : il ne reste qu\\\x27à appuyer sur Envoyer.\x27;
});
</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/contact.htm";
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
        return array (  265 => 190,  235 => 162,  227 => 157,  219 => 152,  201 => 137,  194 => 133,  187 => 129,  166 => 111,  85 => 32,  61 => 10,  53 => 5,  48 => 2,  44 => 1,);
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
            <h1 class=\"breadcumb-title\">Contactez-nous</h1>
            <ul class=\"breadcumb-menu\">
                <li><a href=\"{{ \x27accueil\x27|page }}\">Accueil</a></li>
                <li>Contactez-nous</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
    Coordonnées
==============================-->
<div class=\"space\">
    <div class=\"container\">
        <div class=\"title-area text-center\">
            <span class=\"sub-title\">Nos coordonnées</span>
            <h2 class=\"sec-title\">Passez nous voir ou écrivez-nous</h2>
        </div>
        <div class=\"contact-panel\">
            <div class=\"contact-agency\">
                <span class=\"contact-agency_label\">Notre agence</span>
                <h3 class=\"contact-agency_title\">Grand-Bassam, Mockeyville</h3>
                <p class=\"contact-agency_address\"><i class=\"fa-solid fa-location-dot\"></i>Carrefour Femme Peulh 2, Côte d\x27Ivoire</p>
                {# Horaires à valider par l\x27agence #}
                <div class=\"contact-agency_hours\">
                    <span class=\"contact-agency_sub\"><i class=\"fa-solid fa-clock\"></i>Horaires d\x27ouverture</span>
                    <ul>
                        <li><span>Lundi – vendredi</span><strong>8 h – 18 h</strong></li>
                        <li><span>Samedi</span><strong>9 h – 14 h</strong></li>
                    </ul>
                </div>
                <div class=\"contact-agency_actions\">
                    <a href=\"https://www.google.com/maps/search/?api=1&query=Carrefour+Femme+Peulh+2+Mockeyville+Grand-Bassam\" target=\"_blank\" class=\"th-btn th-icon\">Voir l\x27itinéraire</a>
                    <a href=\"https://www.facebook.com/\" target=\"_blank\" class=\"contact-agency_social\" aria-label=\"Facebook\"><i class=\"fab fa-facebook-f\"></i></a>
                </div>
            </div>
            <div class=\"contact-side\">
                <div class=\"contact-tiles\">
                    <div class=\"contact-tile is-whatsapp\">
                        <i class=\"fab fa-whatsapp contact-tile_bg\" aria-hidden=\"true\"></i>
                        <div class=\"contact-tile_head\">
                            <span class=\"contact-tile_icon\"><i class=\"fab fa-whatsapp\"></i></span>
                            <span class=\"contact-tile_badge\"><i class=\"fa-solid fa-bolt\"></i>Réponse rapide</span>
                        </div>
                        <span class=\"contact-tile_label\">WhatsApp principal</span>
                        <div class=\"contact-tile_value-row\">
                            <span class=\"contact-tile_value\">+225 07 57 39 74 23</span>
                            <button type=\"button\" class=\"contact-tile_copy\" data-copy=\"+225 07 57 39 74 23\" title=\"Copier\" aria-label=\"Copier whatsapp principal\"><i class=\"fa-regular fa-copy\"></i></button>
                        </div>
                        <p class=\"contact-tile_desc\">Le moyen le plus rapide pour échanger avec un conseiller et envoyer vos documents.</p>
                        <a href=\"https://wa.me/2250757397423\" target=\"_blank\" class=\"contact-tile_cta\">Écrire sur WhatsApp<i class=\"fa-solid fa-arrow-right\"></i></a>
                    </div>
                    <div class=\"contact-tile is-whatsapp\">
                        <i class=\"fab fa-whatsapp contact-tile_bg\" aria-hidden=\"true\"></i>
                        <div class=\"contact-tile_head\">
                            <span class=\"contact-tile_icon\"><i class=\"fab fa-whatsapp\"></i></span>
                            <span class=\"contact-tile_badge\"><i class=\"fa-solid fa-reply\"></i>Suivi de dossier</span>
                        </div>
                        <span class=\"contact-tile_label\">WhatsApp secondaire</span>
                        <div class=\"contact-tile_value-row\">
                            <span class=\"contact-tile_value\">+225 07 89 15 28 12</span>
                            <button type=\"button\" class=\"contact-tile_copy\" data-copy=\"+225 07 89 15 28 12\" title=\"Copier\" aria-label=\"Copier whatsapp secondaire\"><i class=\"fa-regular fa-copy\"></i></button>
                        </div>
                        <p class=\"contact-tile_desc\">Une seconde ligne pour vos questions et le suivi de votre demande en cours.</p>
                        <a href=\"https://wa.me/2250789152812\" target=\"_blank\" class=\"contact-tile_cta\">Écrire sur WhatsApp<i class=\"fa-solid fa-arrow-right\"></i></a>
                    </div>
                    <div class=\"contact-tile\">
                        <i class=\"fa-solid fa-phone contact-tile_bg\" aria-hidden=\"true\"></i>
                        <div class=\"contact-tile_head\">
                            <span class=\"contact-tile_icon\"><i class=\"fa-solid fa-phone\"></i></span>
                            <span class=\"contact-tile_badge\"><i class=\"fa-solid fa-clock\"></i>Aux heures d\x27ouverture</span>
                        </div>
                        <span class=\"contact-tile_label\">Téléphone fixe</span>
                        <div class=\"contact-tile_value-row\">
                            <span class=\"contact-tile_value\">+225 27 21 73 41 09</span>
                            <button type=\"button\" class=\"contact-tile_copy\" data-copy=\"+225 27 21 73 41 09\" title=\"Copier\" aria-label=\"Copier téléphone fixe\"><i class=\"fa-regular fa-copy\"></i></button>
                        </div>
                        <p class=\"contact-tile_desc\">Appelez directement l\x27agence pour un renseignement ou un rendez-vous.</p>
                        <a href=\"tel:+2252721734109\" class=\"contact-tile_cta\">Appeler l\x27agence<i class=\"fa-solid fa-arrow-right\"></i></a>
                    </div>
                    <div class=\"contact-tile\">
                        <i class=\"fa-solid fa-envelope contact-tile_bg\" aria-hidden=\"true\"></i>
                        <div class=\"contact-tile_head\">
                            <span class=\"contact-tile_icon\"><i class=\"fa-solid fa-envelope\"></i></span>
                            <span class=\"contact-tile_badge\"><i class=\"fa-solid fa-clock\"></i>Réponse sous 24 h</span>
                        </div>
                        <span class=\"contact-tile_label\">Email</span>
                        <div class=\"contact-tile_value-row\">
                            <span class=\"contact-tile_value\">info@lifevoyagestourisme.com</span>
                            <button type=\"button\" class=\"contact-tile_copy\" data-copy=\"info@lifevoyagestourisme.com\" title=\"Copier\" aria-label=\"Copier email\"><i class=\"fa-regular fa-copy\"></i></button>
                        </div>
                        <p class=\"contact-tile_desc\">Pour vos demandes détaillées, vos devis et l\x27envoi de pièces jointes.</p>
                        <a href=\"mailto:info@lifevoyagestourisme.com\" class=\"contact-tile_cta\">Envoyer un email<i class=\"fa-solid fa-arrow-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
    Formulaire (même bloc que l\x27accueil)
==============================-->
<div class=\"bg-top-center overflow-hidden\" data-bg-src=\"{{ \x27assets/img/bg/contact_bg_1.jpg\x27|theme }}\">
    <div class=\"container\">
        <div class=\"row gy-4 justify-content-between align-items-center\">
            <div class=\"col-lg-5\">
                <div class=\"pt-80 p-lg-0\">
                    <div class=\"title-area pe-xl-5\">
                        <span class=\"sub-title text-white\">Demande de devis</span>
                        <h2 class=\"sec-title text-white\">Parlez-nous de votre projet</h2>
                        <p class=\"contact-text text-white\">Demandez votre visa, billet d\x27avion ou assurance voyage dès aujourd\x27hui ! Remplissez le formulaire : votre demande s\x27ouvre directement dans WhatsApp, prête à être envoyée.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"contact-form-area\">
                    <form action=\"#\" method=\"POST\" class=\"contact-form2\" id=\"lv-contact-form\">
                        <div class=\"row\">
                            <div class=\"form-group col-12\">
                                <input type=\"text\" class=\"form-control\" name=\"nom\" id=\"lv-nom\" placeholder=\"Nom et prénom\" required>
                                <img src=\"{{ \x27assets/img/icon/user.svg\x27|theme }}\" alt=\"\">
                            </div>
                            <div class=\"form-group col-12\">
                                <input type=\"tel\" class=\"form-control\" name=\"telephone\" id=\"lv-tel\" placeholder=\"Téléphone / WhatsApp\" required>
                                <img src=\"{{ \x27assets/img/icon/call.svg\x27|theme }}\" alt=\"\">
                            </div>
                            <div class=\"form-group col-12\">
                                <input type=\"email\" class=\"form-control\" name=\"email\" id=\"lv-email\" placeholder=\"Votre email\">
                                <img src=\"{{ \x27assets/img/icon/mail.svg\x27|theme }}\" alt=\"\">
                            </div>
                            <div class=\"form-group col-12\">
                                <select name=\"service\" id=\"lv-service\" class=\"form-select nice-select\">
                                    <option value=\"\" selected disabled>Service concerné</option>
                                    <option value=\"Accompagnement visa\">Accompagnement visa</option>
                                    <option value=\"Billetterie / vols\">Billetterie / vols</option>
                                    <option value=\"Tourisme\">Tourisme national et international</option>
                                    <option value=\"Véhicules\">Vente et location de véhicules</option>
                                    <option value=\"Hôtels & résidences\">Hôtels et résidences meublées</option>
                                    <option value=\"Assurance voyage\">Assurance voyage</option>
                                </select>
                            </div>
                            <div class=\"form-group col-12\">
                                <textarea name=\"message\" id=\"lv-message\" cols=\"30\" rows=\"3\" class=\"form-control\" placeholder=\"Votre message : destination, dates, nombre de voyageurs\"></textarea>
                                <img src=\"{{ \x27assets/img/icon/chat.svg\x27|theme }}\" alt=\"\">
                            </div>
                        </div>
                        <div class=\"form-btn-wrapp\">
                            <div class=\"form-btn\">
                                <button type=\"submit\" class=\"th-btn white-btn\">Envoyer ma demande <img src=\"{{ \x27assets/img/icon/plane3.svg\x27|theme }}\" alt=\"\"></button>
                            </div>
                            <div class=\"contact-info\">
                                <p class=\"contact-info_link\"><a href=\"tel:+2250757397423\">+225 07 57 39 74 23</a></p>
                                <div class=\"contact-info_icon\">
                                    <a href=\"tel:+2250757397423\"><img src=\"{{ \x27assets/img/icon/call.svg\x27|theme }}\" alt=\"\"></a>
                                </div>
                            </div>
                        </div>
                        <p class=\"form-messages mb-0 mt-3 text-white\"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
    Carte
==============================-->
<div class=\"space\">
    <div class=\"container\">
        <div class=\"title-area text-center\">
            <span class=\"sub-title\">Plan d\x27accès</span>
            <h2 class=\"sec-title\">Mockeyville, Grand-Bassam</h2>
        </div>
        <div class=\"contact-map\">
            <iframe src=\"https://www.google.com/maps?q=Mockeyville%2C%20Grand-Bassam%2C%20C%C3%B4te%20d%27Ivoire&output=embed\" style=\"width:100%;height:450px;border:0;border-radius:30px\" allowfullscreen=\"\" loading=\"lazy\" title=\"Life Voyages & Tourisme, Grand-Bassam\"></iframe>
        </div>
    </div>
</div>

{# Envoi du formulaire vers WhatsApp (aucun serveur mail nécessaire) #}
<script>
document.querySelectorAll(\x27.contact-tile_copy\x27).forEach(function (btn) {
    btn.addEventListener(\x27click\x27, function () {
        var done = function () {
            btn.classList.add(\x27is-copied\x27);
            btn.innerHTML = \x27<i class=\"fa-solid fa-check\"></i>\x27;
            setTimeout(function () {
                btn.classList.remove(\x27is-copied\x27);
                btn.innerHTML = \x27<i class=\"fa-regular fa-copy\"></i>\x27;
            }, 1600);
        };
        if (navigator.clipboard) {
            navigator.clipboard.writeText(btn.dataset.copy).then(done);
        }
    });
});
document.getElementById(\x27lv-contact-form\x27).addEventListener(\x27submit\x27, function (e) {
    e.preventDefault();
    var v = function (id) { var el = document.getElementById(id); return el && el.value ? el.value.trim() : \x27\x27; };
    var lignes = [\x27Bonjour Life Voyages & Tourisme, voici ma demande :\x27,
        \x27Nom : \x27 + v(\x27lv-nom\x27), \x27Téléphone : \x27 + v(\x27lv-tel\x27)];
    if (v(\x27lv-email\x27)) lignes.push(\x27Email : \x27 + v(\x27lv-email\x27));
    if (v(\x27lv-service\x27)) lignes.push(\x27Service : \x27 + v(\x27lv-service\x27));
    if (v(\x27lv-message\x27)) lignes.push(\x27Message : \x27 + v(\x27lv-message\x27));
    window.open(\x27https://wa.me/2250757397423?text=\x27 + encodeURIComponent(lignes.join(\x27\\n\x27)), \x27_blank\x27);
    this.querySelector(\x27.form-messages\x27).textContent = \x27WhatsApp s\\\x27ouvre avec votre demande : il ne reste qu\\\x27à appuyer sur Envoyer.\x27;
});
</script>", "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/pages/contact.htm", "");
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

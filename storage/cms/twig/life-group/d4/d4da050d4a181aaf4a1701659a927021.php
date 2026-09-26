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

/* /Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/partials/service-sidebar.htm */
class __TwigTemplate_1b767ef71d7a577f10e314fbf029a48c extends Template
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
        // line 2
        yield "<aside class=\"sidebar-area\">
    <div class=\"services-nav mb-30\">
        <h3 class=\"services-nav_title\">Nos services</h3>
        <ul class=\"services-nav_list\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["icon" => "fa-passport", "nom" => "Accompagnement visa", "page" => "accompagnement-visa"], ["icon" => "fa-plane-departure", "nom" => "Billetterie & vols", "page" => "billetterie-vols"], ["icon" => "fa-earth-africa", "nom" => "Tourisme national & international", "page" => "tourisme"], ["icon" => "fa-car-side", "nom" => "Vente & location de véhicules", "page" => "vehicules"], ["icon" => "fa-hotel", "nom" => "Hôtels & résidences meublées", "page" => "hotels-residences"], ["icon" => "fa-shield-check", "nom" => "Assurance voyage", "page" => "assurance-voyage"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 14
            yield "            ";
            $context["actif"] = ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 14), "baseFileName", [], "any", false, false, true, 14), 14, $this->source) == $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "page", [], "any", false, false, true, 14), 14, $this->source));
            // line 15
            yield "            <li>
                <a href=\"";
            // line 16
            yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "page", [], "any", false, false, true, 16), 16, $this->source)), 16, $this->source);
            yield "\" class=\"services-nav_link";
            yield (string) (((($tmp = ($context["actif"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-active") : (""));
            yield "\"";
            if ((($tmp = ($context["actif"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " aria-current=\"page\"";
            }
            yield ">
                    <span class=\"services-nav_icon\"><i class=\"fa-solid ";
            // line 17
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "icon", [], "any", false, false, true, 17), 17, $this->source), "html", null, true), 17, $this->source);
            yield "\"></i></span>
                    <span class=\"services-nav_name\">";
            // line 18
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "nom", [], "any", false, false, true, 18), 18, $this->source), "html", null, true), 18, $this->source);
            yield "</span>
                    <i class=\"fa-solid fa-angle-right services-nav_arrow\"></i>
                </a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 23
        yield "        </ul>
    </div>
    <div class=\"help-card mb-30\">
        <div class=\"help-card_head\">
            <span class=\"help-card_badge\"><i class=\"fa-solid fa-headset\"></i></span>
            <h4 class=\"help-card_title\">Besoin d\x27un conseil ?</h4>
            <p class=\"help-card_text\">Écrivez-nous sur WhatsApp ou appelez-nous, nous vous répondons rapidement.</p>
        </div>
        <a href=\"https://wa.me/2250757397423\" target=\"_blank\" class=\"help-card_whatsapp\">
            <i class=\"fab fa-whatsapp\"></i>
            <span>
                <span class=\"help-card_label\">Écrire sur WhatsApp</span>
                <span class=\"help-card_number\">+225 07 57 39 74 23</span>
            </span>
        </a>
        <div class=\"help-card_lines\">
            <a href=\"tel:+2250789152812\" class=\"help-card_line\">
                <span class=\"help-card_icon\"><i class=\"fa-solid fa-phone\"></i></span>
                <span>
                    <span class=\"help-card_label\">Téléphone</span>
                    <span class=\"help-card_number\">+225 07 89 15 28 12</span>
                </span>
            </a>
            <a href=\"tel:+2252721734109\" class=\"help-card_line\">
                <span class=\"help-card_icon\"><i class=\"fa-solid fa-phone-office\"></i></span>
                <span>
                    <span class=\"help-card_label\">Fixe</span>
                    <span class=\"help-card_number\">+225 27 21 73 41 09</span>
                </span>
            </a>
        </div>
    </div>
    <div class=\"services-card mb-30\">
        <div class=\"services-card_head\">
            <h3 class=\"box-title services-card_title\">";
        // line 57
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["visuel_titre"] ?? null), 57, $this->source), "html", null, true), 57, $this->source);
        yield "</h3>
            <p class=\"services-card_subtitle\">Un seul interlocuteur pour tout votre voyage</p>
        </div>
        <ul class=\"services-card_list\">
            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable([["icon" => "fa-passport", "nom" => "Services visa", "detail" => "France/Schengen, UK, Canada, USA, Dubaï, Asie, Maroc, Afrique", "page" => "accompagnement-visa"], ["icon" => "fa-plane-departure", "nom" => "Réservation de vols", "detail" => "Économique, business, groupe, dernière minute", "page" => "billetterie-vols"], ["icon" => "fa-shield-check", "nom" => "Assurance voyage", "detail" => "Médicale, annulation, bagages, rapatriement", "page" => "assurance-voyage"], ["icon" => "fa-car-side", "nom" => "Location de véhicules", "detail" => "Vente et location, avec ou sans chauffeur", "page" => "vehicules"]]);
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 67
            yield "            <li>
                <a href=\"";
            // line 68
            yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "page", [], "any", false, false, true, 68), 68, $this->source)), 68, $this->source);
            yield "\" class=\"services-card_item\">
                    <span class=\"services-card_icon\"><i class=\"fa-solid ";
            // line 69
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "icon", [], "any", false, false, true, 69), 69, $this->source), "html", null, true), 69, $this->source);
            yield "\"></i></span>
                    <span>
                        <span class=\"services-card_name\">";
            // line 71
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "nom", [], "any", false, false, true, 71), 71, $this->source), "html", null, true), 71, $this->source);
            yield "</span>
                        <span class=\"services-card_detail\">";
            // line 72
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "detail", [], "any", false, false, true, 72), 72, $this->source), "html", null, true), 72, $this->source);
            yield "</span>
                    </span>
                </a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 77
        yield "        </ul>
        <div class=\"services-card_foot\">
            <a href=\"";
        // line 79
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter($this->sandbox->ensureToStringAllowed(($context["visuel"] ?? null), 79, $this->source)), 79, $this->source);
        yield "\" class=\"services-card_brochure popup-image\">
                <img src=\"";
        // line 80
        yield (string) $this->sandbox->ensureToStringAllowed($this->extensions['Cms\Twig\Extension']->themeFilter($this->sandbox->ensureToStringAllowed(($context["visuel"] ?? null), 80, $this->source)), 80, $this->source);
        yield "\" alt=\"";
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["visuel_titre"] ?? null), 80, $this->source), "html", null, true), 80, $this->source);
        yield "\">
                <span>Voir la brochure</span>
                <i class=\"fa-solid fa-magnifying-glass-plus\"></i>
            </a>
        </div>
    </div>
</aside>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/partials/service-sidebar.htm";
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
        return array (  169 => 80,  165 => 79,  161 => 77,  149 => 72,  145 => 71,  140 => 69,  136 => 68,  133 => 67,  129 => 61,  122 => 57,  86 => 23,  74 => 18,  70 => 17,  60 => 16,  57 => 15,  54 => 14,  50 => 6,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Barre latérale des pages services #}
<aside class=\"sidebar-area\">
    <div class=\"services-nav mb-30\">
        <h3 class=\"services-nav_title\">Nos services</h3>
        <ul class=\"services-nav_list\">
            {% for s in [
                {\x27icon\x27: \x27fa-passport\x27, \x27nom\x27: \x27Accompagnement visa\x27, \x27page\x27: \x27accompagnement-visa\x27},
                {\x27icon\x27: \x27fa-plane-departure\x27, \x27nom\x27: \x27Billetterie & vols\x27, \x27page\x27: \x27billetterie-vols\x27},
                {\x27icon\x27: \x27fa-earth-africa\x27, \x27nom\x27: \x27Tourisme national & international\x27, \x27page\x27: \x27tourisme\x27},
                {\x27icon\x27: \x27fa-car-side\x27, \x27nom\x27: \x27Vente & location de véhicules\x27, \x27page\x27: \x27vehicules\x27},
                {\x27icon\x27: \x27fa-hotel\x27, \x27nom\x27: \x27Hôtels & résidences meublées\x27, \x27page\x27: \x27hotels-residences\x27},
                {\x27icon\x27: \x27fa-shield-check\x27, \x27nom\x27: \x27Assurance voyage\x27, \x27page\x27: \x27assurance-voyage\x27}
            ] %}
            {% set actif = this.page.baseFileName == s.page %}
            <li>
                <a href=\"{{ s.page|page }}\" class=\"services-nav_link{{ actif ? \x27 is-active\x27 }}\"{% if actif %} aria-current=\"page\"{% endif %}>
                    <span class=\"services-nav_icon\"><i class=\"fa-solid {{ s.icon }}\"></i></span>
                    <span class=\"services-nav_name\">{{ s.nom }}</span>
                    <i class=\"fa-solid fa-angle-right services-nav_arrow\"></i>
                </a>
            </li>
            {% endfor %}
        </ul>
    </div>
    <div class=\"help-card mb-30\">
        <div class=\"help-card_head\">
            <span class=\"help-card_badge\"><i class=\"fa-solid fa-headset\"></i></span>
            <h4 class=\"help-card_title\">Besoin d\x27un conseil ?</h4>
            <p class=\"help-card_text\">Écrivez-nous sur WhatsApp ou appelez-nous, nous vous répondons rapidement.</p>
        </div>
        <a href=\"https://wa.me/2250757397423\" target=\"_blank\" class=\"help-card_whatsapp\">
            <i class=\"fab fa-whatsapp\"></i>
            <span>
                <span class=\"help-card_label\">Écrire sur WhatsApp</span>
                <span class=\"help-card_number\">+225 07 57 39 74 23</span>
            </span>
        </a>
        <div class=\"help-card_lines\">
            <a href=\"tel:+2250789152812\" class=\"help-card_line\">
                <span class=\"help-card_icon\"><i class=\"fa-solid fa-phone\"></i></span>
                <span>
                    <span class=\"help-card_label\">Téléphone</span>
                    <span class=\"help-card_number\">+225 07 89 15 28 12</span>
                </span>
            </a>
            <a href=\"tel:+2252721734109\" class=\"help-card_line\">
                <span class=\"help-card_icon\"><i class=\"fa-solid fa-phone-office\"></i></span>
                <span>
                    <span class=\"help-card_label\">Fixe</span>
                    <span class=\"help-card_number\">+225 27 21 73 41 09</span>
                </span>
            </a>
        </div>
    </div>
    <div class=\"services-card mb-30\">
        <div class=\"services-card_head\">
            <h3 class=\"box-title services-card_title\">{{ visuel_titre }}</h3>
            <p class=\"services-card_subtitle\">Un seul interlocuteur pour tout votre voyage</p>
        </div>
        <ul class=\"services-card_list\">
            {% for s in [
                {\x27icon\x27: \x27fa-passport\x27, \x27nom\x27: \x27Services visa\x27, \x27detail\x27: \x27France/Schengen, UK, Canada, USA, Dubaï, Asie, Maroc, Afrique\x27, \x27page\x27: \x27accompagnement-visa\x27},
                {\x27icon\x27: \x27fa-plane-departure\x27, \x27nom\x27: \x27Réservation de vols\x27, \x27detail\x27: \x27Économique, business, groupe, dernière minute\x27, \x27page\x27: \x27billetterie-vols\x27},
                {\x27icon\x27: \x27fa-shield-check\x27, \x27nom\x27: \x27Assurance voyage\x27, \x27detail\x27: \x27Médicale, annulation, bagages, rapatriement\x27, \x27page\x27: \x27assurance-voyage\x27},
                {\x27icon\x27: \x27fa-car-side\x27, \x27nom\x27: \x27Location de véhicules\x27, \x27detail\x27: \x27Vente et location, avec ou sans chauffeur\x27, \x27page\x27: \x27vehicules\x27}
            ] %}
            <li>
                <a href=\"{{ s.page|page }}\" class=\"services-card_item\">
                    <span class=\"services-card_icon\"><i class=\"fa-solid {{ s.icon }}\"></i></span>
                    <span>
                        <span class=\"services-card_name\">{{ s.nom }}</span>
                        <span class=\"services-card_detail\">{{ s.detail }}</span>
                    </span>
                </a>
            </li>
            {% endfor %}
        </ul>
        <div class=\"services-card_foot\">
            <a href=\"{{ visuel|theme }}\" class=\"services-card_brochure popup-image\">
                <img src=\"{{ visuel|theme }}\" alt=\"{{ visuel_titre }}\">
                <span>Voir la brochure</span>
                <i class=\"fa-solid fa-magnifying-glass-plus\"></i>
            </a>
        </div>
    </div>
</aside>", "/Users/guyserge.kouacou/Documents/own-projects/backend-php/life-voyage/themes/life-group/partials/service-sidebar.htm", "");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 6, "set" => 14, "if" => 16];
        static $filters = ["page" => 16, "escape" => 17, "theme" => 79];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "for", 1 => "set", 2 => "if"],
                [0 => "page", 1 => "escape", 2 => "theme"],
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

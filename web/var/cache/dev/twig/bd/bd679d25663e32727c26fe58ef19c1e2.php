<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Homepage/contact.html.twig */
class __TwigTemplate_290d3488bf732c1b5c7838919668ba73 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Homepage/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Homepage/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Homepage/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"center\">
    <h1>Vítám Vás na mých stránkách! </h1>
</div>

<div class=\"onas\">
    <div class=\"kontakt-text\">
        <h5>Jmenuji se Rufir Naur a jsem jedním z organizátorů setkání členů furry komunity.</h5>

        <p>
         Furry komunita je skupinou lidí, kteří si vytvářejí své vlastní \"zvířecí\" alter ega, tzv. fursony. Někteří z nás je představují pomocí kreativních kostýmů,
          tzv. fursuitů, které jsou často úžasně detailní a věrné našemu digitálnímu alter egu.
        </p>

        <p>
            Můžete se s námi setkat na našich akcích a poznat tyto fascinující a neobvyklé postavy.
        Ale naše činnost není pouze o této komunitě! V rámci svých aktivit se snažíme také podpořit charitativní projekty nebo pobavit veřejnost.
         Naše setkání jsou příležitostí pro fanoušky furry kultury,
         aby se setkali a užili si skvělý zážitek s ostatními lidmi, kteří sdílejí jejich zájem. 
        </p>

        <p>
    
        Doufám, že jsem vás zaujal a budu se těšit na setkání s vámi na některé z mých akcí! 
        Pokud máte jakékoliv dotazy nebo byste se chtěli stát součástí naší komunity, neváhejte mě kontaktovat.

        Kontaktní údaje:

        rufir@palcat.cz
        facebook.com/rufirovy.eventy
        </p>
    </div>
    ";
        // line 36
        echo "        <button onclick=\"window.location.href='";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage_default");
        echo "'\" class=\"btn btn-outline-success\">Hlávní stránka</button>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Homepage/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 36,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<div class=\"center\">
    <h1>Vítám Vás na mých stránkách! </h1>
</div>

<div class=\"onas\">
    <div class=\"kontakt-text\">
        <h5>Jmenuji se Rufir Naur a jsem jedním z organizátorů setkání členů furry komunity.</h5>

        <p>
         Furry komunita je skupinou lidí, kteří si vytvářejí své vlastní \"zvířecí\" alter ega, tzv. fursony. Někteří z nás je představují pomocí kreativních kostýmů,
          tzv. fursuitů, které jsou často úžasně detailní a věrné našemu digitálnímu alter egu.
        </p>

        <p>
            Můžete se s námi setkat na našich akcích a poznat tyto fascinující a neobvyklé postavy.
        Ale naše činnost není pouze o této komunitě! V rámci svých aktivit se snažíme také podpořit charitativní projekty nebo pobavit veřejnost.
         Naše setkání jsou příležitostí pro fanoušky furry kultury,
         aby se setkali a užili si skvělý zážitek s ostatními lidmi, kteří sdílejí jejich zájem. 
        </p>

        <p>
    
        Doufám, že jsem vás zaujal a budu se těšit na setkání s vámi na některé z mých akcí! 
        Pokud máte jakékoliv dotazy nebo byste se chtěli stát součástí naší komunity, neváhejte mě kontaktovat.

        Kontaktní údaje:

        rufir@palcat.cz
        facebook.com/rufirovy.eventy
        </p>
    </div>
    {# <div class=\"aa\"> #}
        <button onclick=\"window.location.href='{{ path('homepage_default') }}'\" class=\"btn btn-outline-success\">Hlávní stránka</button>
    {# </div> #}
{% endblock %}", "Homepage/contact.html.twig", "/var/www/html/templates/Homepage/contact.html.twig");
    }
}

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

/* event/events/show.html.twig */
class __TwigTemplate_c53640fde166d7160e2aecfcc1b5e6e0bea8ee3fcc24e8ab21baacdb3178c325 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/events/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/events/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/events/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h1 class=\"center\">Uživatelé přihlášeni k účasti na
\t\t";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

\t<div class=\"search_center\">
\t\t<input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Vyhledat konkrétního uživatele..\">
\t</div>

\t<script src=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/custom/js/search.js\"></script>

\t<div class=\"tabulka\">
\t\t<table class=\"content-table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Přezdívka</th>
\t\t\t\t\t<th>Email</th>
\t\t\t\t\t<th>Jméno</th>

\t\t\t\t\t<th>Tel. číslo</th>
\t\t\t\t\t<th>Sociální sítě</th>
\t\t\t\t\t<th>Akce</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 29
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nickName", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"active-row\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "secondName", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>

\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "telNumber", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "social", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">Podrobnosti</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "            <tr>
                <td colspan=\"9\">Žádný uživatel není přihlášen na akci s názvem ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), "html", null, true);
            echo ".</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/events/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 46,  146 => 43,  143 => 42,  134 => 38,  129 => 36,  125 => 35,  120 => 33,  116 => 32,  112 => 31,  108 => 30,  105 => 29,  100 => 28,  81 => 12,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

\t<h1 class=\"center\">Uživatelé přihlášeni k účasti na
\t\t{{ event.name }}</h1>

\t<div class=\"search_center\">
\t\t<input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Vyhledat konkrétního uživatele..\">
\t</div>

\t<script src=\"{{ url(\"homepage_default\") }}layouts/custom/js/search.js\"></script>

\t<div class=\"tabulka\">
\t\t<table class=\"content-table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Přezdívka</th>
\t\t\t\t\t<th>Email</th>
\t\t\t\t\t<th>Jméno</th>

\t\t\t\t\t<th>Tel. číslo</th>
\t\t\t\t\t<th>Sociální sítě</th>
\t\t\t\t\t<th>Akce</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for user in users %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ user.nickName }}</td>
\t\t\t\t\t\t<td class=\"active-row\">{{ user.email }}</td>
\t\t\t\t\t\t<td>{{ user.name }}
\t\t\t\t\t\t\t{{ user.secondName }}</td>

\t\t\t\t\t\t<td>{{ user.telNumber }}</td>
\t\t\t\t\t\t<td>{{ user.social }}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('app_user_show', {'id': user.id}) }}\">Podrobnosti</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t        {% else %}
            <tr>
                <td colspan=\"9\">Žádný uživatel není přihlášen na akci s názvem {{ event.name }}.</td>
            </tr>
        {% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</div>
{% endblock %}
", "event/events/show.html.twig", "/var/www/html/templates/event/events/show.html.twig");
    }
}

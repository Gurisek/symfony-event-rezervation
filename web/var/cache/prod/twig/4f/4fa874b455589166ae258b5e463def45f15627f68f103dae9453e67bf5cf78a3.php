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

/* event/user/user_index.html.twig */
class __TwigTemplate_d55999d171393f284f4efb61f8c2a9fce650439eca17b51c6fc0ed9b434c0527 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "event/user/user_index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Přehled";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1 class=\"center\">Vítej ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6), "nickName", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
   <div class=\"tabulka\"> 
    <table class=\"content-table\">
        <thead>
            <tr>
                <th>Název</th>
                <th>Místo</th>
                <th>Datum</th>
                <th>Popisek</th>
                <th>Možnosti</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 20
            echo "            <tr>
                <td class=\"active-row\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "place", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td class=\"active-row\">";
            // line 23
            ((twig_get_attribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 23)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 23), "H:i d.m. Y"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_event_show", ["id" => twig_get_attribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">ukázat</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "            <tr>
                <td colspan=\"6\">Není nic vytvořeno</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>
</div>
";
    }

    // line 39
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 40
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "event/user/user_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 40,  127 => 39,  120 => 34,  111 => 30,  102 => 26,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  82 => 20,  77 => 19,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "event/user/user_index.html.twig", "/var/www/html/templates/event/user/user_index.html.twig");
    }
}

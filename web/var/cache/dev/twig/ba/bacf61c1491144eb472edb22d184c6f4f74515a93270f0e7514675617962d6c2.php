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

/* header.html.twig */
class __TwigTemplate_bf1788f77598c1968d897aa344ee465527202413a9d65992b459a7e8115e5938 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "
";
        // line 2
        $macros["Security"] = $this->macros["Security"] = $this->loadTemplate("Security/login.html.twig", "header.html.twig", 2)->unwrap();
        // line 3
        echo "
<nav>
\t<div class=\"logo\">
\t\t<h4>Logo</h4>
\t</div>
\t<ul class=\"nav-links\">
\t\t<li>
\t\t\t<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage_default");
        echo "\">Domu</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#\">Contact</a>
\t\t</li>
\t\t";
        // line 15
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 16
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
            echo "\">Eventy</a>
\t\t\t\t<a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            echo "\">Uživatelé</a>
\t\t\t</li>
\t\t";
        } else {
            // line 21
            echo "\t\t\t<li>
\t\t\t\t<a href=\"#\">About</a>
\t\t\t</li>
\t\t";
        }
        // line 25
        echo "\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 26
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Odhlásit</a>
\t\t\t</li>
\t\t";
        } else {
            // line 30
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Přihlásit</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Registrovat</a>
\t\t\t</li>
\t\t";
        }
        // line 37
        echo "\t</ul>
\t<div class=\"burger\">
\t\t<div class=\"line1\"></div>
\t\t<div class=\"line2\"></div>
\t\t<div class=\"line3\"></div>
\t</div>
</nav>
<script src=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/custom/js/nav.js\"></script>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 44,  113 => 37,  107 => 34,  101 => 31,  98 => 30,  92 => 27,  89 => 26,  86 => 25,  80 => 21,  74 => 18,  70 => 17,  67 => 16,  65 => 15,  57 => 10,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% import 'Security/login.html.twig' as Security %}

<nav>
\t<div class=\"logo\">
\t\t<h4>Logo</h4>
\t</div>
\t<ul class=\"nav-links\">
\t\t<li>
\t\t\t<a href=\"{{ path('homepage_default') }}\">Domu</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"#\">Contact</a>
\t\t</li>
\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('app_event_index') }}\">Eventy</a>
\t\t\t\t<a href=\"{{ path('app_user_index') }}\">Uživatelé</a>
\t\t\t</li>
\t\t{% else %}
\t\t\t<li>
\t\t\t\t<a href=\"#\">About</a>
\t\t\t</li>
\t\t{% endif %}
\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('app_logout') }}\">Odhlásit</a>
\t\t\t</li>
\t\t{% else %}
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('app_login') }}\">Přihlásit</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('app_register') }}\">Registrovat</a>
\t\t\t</li>
\t\t{% endif %}
\t</ul>
\t<div class=\"burger\">
\t\t<div class=\"line1\"></div>
\t\t<div class=\"line2\"></div>
\t\t<div class=\"line3\"></div>
\t</div>
</nav>
<script src=\"{{ url(\"homepage_default\") }}layouts/custom/js/nav.js\"></script>

", "header.html.twig", "/var/www/html/templates/header.html.twig");
    }
}

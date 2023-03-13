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
class __TwigTemplate_64831e5875fd0cda1d0b9d09d18fc96c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

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
        echo "\"><span class=\"material-symbols-outlined\">
home
</span></a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About</a>
\t\t</li>
\t\t";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
            echo "\">Eventy</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
            echo "\">Uživatelé</a>
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
            echo "\"><span class=\"material-symbols-outlined\">
logout
</span></a>
\t\t\t</li>
\t\t";
        } else {
            // line 32
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Přihlásit</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Registrovat</a>
\t\t\t</li>
\t\t";
        }
        // line 39
        echo "\t</ul>
\t<div class=\"burger\">
\t\t<div class=\"line1\"></div>
\t\t<div class=\"line2\"></div>
\t\t<div class=\"line3\"></div>
\t</div>
</nav>
<script src=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/custom/js/nav.js\"></script>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  125 => 46,  116 => 39,  110 => 36,  104 => 33,  101 => 32,  93 => 27,  90 => 26,  87 => 25,  81 => 22,  75 => 19,  72 => 18,  70 => 17,  65 => 15,  57 => 10,  48 => 3,  46 => 2,  43 => 1,);
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
\t\t\t<a href=\"{{ path('homepage_default') }}\"><span class=\"material-symbols-outlined\">
home
</span></a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"{{ path('about') }}\">About</a>
\t\t</li>
\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('app_event_index') }}\">Eventy</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('app_user_index') }}\">Uživatelé</a>
\t\t\t</li>
\t\t{% endif %}
\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('app_logout') }}\"><span class=\"material-symbols-outlined\">
logout
</span></a>
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

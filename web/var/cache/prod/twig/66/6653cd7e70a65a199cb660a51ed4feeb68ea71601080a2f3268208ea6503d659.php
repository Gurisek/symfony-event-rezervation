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
class __TwigTemplate_e286bbecc3cebbe2b3f57bbafb8f1f07a4ca530d6034ccc7ead074898bd0d257 extends Template
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
        return array (  116 => 44,  107 => 37,  101 => 34,  95 => 31,  92 => 30,  86 => 27,  83 => 26,  80 => 25,  74 => 21,  68 => 18,  64 => 17,  61 => 16,  59 => 15,  51 => 10,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "header.html.twig", "/var/www/html/templates/header.html.twig");
    }
}

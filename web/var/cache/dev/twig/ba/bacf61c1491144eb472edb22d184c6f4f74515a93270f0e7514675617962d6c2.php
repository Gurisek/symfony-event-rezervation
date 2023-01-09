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
    <div class=\"logo\">
        <h4>Logo</h4>
    </div>
    <ul class=\"nav-links\">
        <li><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage_default");
        echo "\">Home</a></li>
        <li><a href=\"#\">Contact</a></li>
        <li><a href=\"#\">About</a></li>
        ";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 13
            echo "          <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a></li>
        ";
        } else {
            // line 15
            echo "          <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a></li>
          <li><a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Register</a></li>
        ";
        }
        // line 18
        echo "    </ul>
    <div class=\"burger\">
        <div class=\"line1\"></div>
        <div class=\"line2\"></div>
        <div class=\"line3\"></div>
    </div>
</nav>
<script src=\"";
        // line 25
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
        return array (  89 => 25,  80 => 18,  75 => 16,  70 => 15,  64 => 13,  62 => 12,  56 => 9,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% import 'Security/login.html.twig' as Security %}

<nav>
    <div class=\"logo\">
        <h4>Logo</h4>
    </div>
    <ul class=\"nav-links\">
        <li><a href=\"{{ path('homepage_default') }}\">Home</a></li>
        <li><a href=\"#\">Contact</a></li>
        <li><a href=\"#\">About</a></li>
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
          <li><a href=\"{{ path('app_logout') }}\">Logout</a></li>
        {% else %}
          <li><a href=\"{{ path('app_login') }}\">Login</a></li>
          <li><a href=\"{{ path('app_register') }}\">Register</a></li>
        {% endif %}
    </ul>
    <div class=\"burger\">
        <div class=\"line1\"></div>
        <div class=\"line2\"></div>
        <div class=\"line3\"></div>
    </div>
</nav>
<script src=\"{{ url(\"homepage_default\") }}layouts/custom/js/nav.js\"></script>
", "header.html.twig", "/var/www/html/templates/header.html.twig");
    }
}

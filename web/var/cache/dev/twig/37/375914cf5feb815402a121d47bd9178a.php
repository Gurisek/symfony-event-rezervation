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

/* footer.html.twig */
class __TwigTemplate_073191ccc06989765f3da187d45a935b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 37
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 37,);
    }

    public function getSourceContext()
    {
        return new Source("{# <footer class=\"footer\">
\t<div class=\"footer-container\">
\t\t<div class=\"footer-row\">
\t\t\t<div class=\"footer-col\">
\t\t\t\t<h4>Web</h4>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">O nás</a></li>
            \t\t\t<li><a href=\"{{ path('app_register') }}\">Registrace</a></li>
            \t\t\t<li><a href=\"{{ path('no_user_index') }}\">Seznam akcí</a></li>
\t\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"footer-col\">
\t\t\t\t<h4>Podpora</h4>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"{{ path('contact') }}\">Kontaktuj nás</a></li>
            \t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"footer-col\">
\t\t\t\t<h4>Rychlé odkazy</h4>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"{{ path('no_user_index') }}\">Index</a></li>
            \t\t\t<li><a href=\"{{ path('app_register') }}\">Registrace</a></li>
            \t\t\t<li><a href=\"{{ path('app_login') }}\">Přihlášení</a></li>
\t\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"footer-col\">
\t\t\t\t<h4>Sleduj nás</h4>
\t\t\t\t<div class=\"social-links\">
\t\t\t\t\t<a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
\t\t\t\t\t<a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
\t\t\t\t\t<a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
\t\t\t\t\t<a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t</div>
</footer> #}

{# <div class=\"footerin\">&copy;<span id=\"year\"> </span><span> Your Company Name. All rights reserved.</span></div> #}", "footer.html.twig", "/var/www/html/templates/footer.html.twig");
    }
}

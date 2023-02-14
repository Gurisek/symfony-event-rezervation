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
class __TwigTemplate_63d545de3cbc08c209c141c1f857aa0848c2ff56ce88ce71089d77527ee33910 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<footer class=\"footer\">
\t<div class=\"footer-container\">
\t\t<div class=\"footer-row\">
\t\t\t<div class=\"footer-col\">
\t\t\t\t<h4>Web</h4>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">O nás</a></li>
            \t\t\t<li><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Registrace</a></li>
            \t\t\t<li><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("no_user_index");
        echo "\">Seznam akcí</a></li>
\t\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"footer-col\">
\t\t\t\t<h4>Podpora</h4>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Kontaktuj nás</a></li>
            \t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"footer-col\">
\t\t\t\t<h4>Rychlé odkazy</h4>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("no_user_index");
        echo "\">Index</a></li>
            \t\t\t<li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Registrace</a></li>
            \t\t\t<li><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Přihlášení</a></li>
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
</footer>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  78 => 22,  74 => 21,  65 => 15,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
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
</footer>
", "footer.html.twig", "/var/www/html/templates/footer.html.twig");
    }
}

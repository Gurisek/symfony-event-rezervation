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
            <li><a href=\"#\">Registrace</a></li>
            <li><a href=\"#\">Seznam akcí</a></li>
\t\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"footer-col\">
\t\t\t\t<h4>Podpora</h4>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Kontaktuj nás</a></li>
            \t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"footer-col\">
\t\t\t\t<h4>Rychlé odkazy</h4>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Index</a></li>
            \t\t\t<li><a href=\"#\">Registrace</a></li>
            \t\t\t<li><a href=\"#\">Přihlášení</a></li>
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

    public function getDebugInfo()
    {
        return array (  43 => 1,);
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
            <li><a href=\"#\">Registrace</a></li>
            <li><a href=\"#\">Seznam akcí</a></li>
\t\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"footer-col\">
\t\t\t\t<h4>Podpora</h4>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Kontaktuj nás</a></li>
            \t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"footer-col\">
\t\t\t\t<h4>Rychlé odkazy</h4>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Index</a></li>
            \t\t\t<li><a href=\"#\">Registrace</a></li>
            \t\t\t<li><a href=\"#\">Přihlášení</a></li>
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

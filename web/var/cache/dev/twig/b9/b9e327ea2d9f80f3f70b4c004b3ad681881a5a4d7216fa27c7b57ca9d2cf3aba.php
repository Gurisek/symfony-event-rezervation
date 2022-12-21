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

/* hefo/header.html.twig */
class __TwigTemplate_6b8f16a24bd6aed787a87d6855f52557a072de5da8e77f534cf31c700c29c55e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hefo/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hefo/header.html.twig"));

        // line 1
        echo "<head>
\t<meta charset=\"utf-8\">
\t<title>xdusek events</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"stylesheet\" href=\"../layouts/custom/css/header.css\">


";
        // line 15
        echo "</head>

<body>
\t";
        // line 25
        echo "  <div>
    <h1>
    ajdnaidhadhhdhdhddhhdhdhddhdad asdln asdlnals
    </h1>
  </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hefo/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 25,  52 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
\t<meta charset=\"utf-8\">
\t<title>xdusek events</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"stylesheet\" href=\"../layouts/custom/css/header.css\">


{# <div class=\"no-underline hover:underline bs-docs-section clearfix\">
      {{app.user ? app.user.email : 'neprihlasen' }}

        <a href=\"/{{ app.user ? 'logout' : 'login' }}\">
            {{ app.user ? 'Logout' : 'Login' }}
        </a>
    </div> #}
</head>

<body>
\t{# <div class=\"banner\">
\t\t<ul>
      <li>
      <a href=\"dd\">Home</a>
      </li>
    </ul>
  </div> #}
  <div>
    <h1>
    ajdnaidhadhhdhdhddhhdhdhddhdad asdln asdlnals
    </h1>
  </div>
", "hefo/header.html.twig", "/var/www/html/templates/hefo/header.html.twig");
    }
}

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

/* base.html.twig */
class __TwigTemplate_8d5a0b42284db0b90271ce9ba2adb298a45b52c6577fa890bd3c0362737be26e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <title> ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/custom/css/base.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage_default");
        echo "layouts/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css\">
</head>

<body>
  ";
        // line 13
        $this->loadTemplate("header.html.twig", "base.html.twig", 13)->display($context);
        // line 14
        echo "  ";
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "  ";
        $this->loadTemplate("footer.html.twig", "base.html.twig", 15)->display($context);
        // line 16
        echo "</body>

";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "xdusek events";
    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 19,  98 => 18,  92 => 14,  85 => 6,  80 => 20,  78 => 19,  76 => 18,  72 => 16,  69 => 15,  66 => 14,  64 => 13,  57 => 9,  53 => 8,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/html/templates/base.html.twig");
    }
}

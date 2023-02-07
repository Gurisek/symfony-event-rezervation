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

/* security/login.html.twig */
class __TwigTemplate_b2ceef0177e4d576b5f86d3f897ba754e5436bffb5db3955ce2556ebf1043f8c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Přihlášení";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container\">
        <form method=\"post\">
            ";
        // line 8
        if (($context["error"] ?? null)) {
            // line 9
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 9), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 11
        echo "
            ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12)) {
            // line 13
            echo "                <div class=\"logged\">
                    <h1>Už jsi přihlášen/a jako ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14), "email", [], "any", false, false, false, 14), "html", null, true);
            echo "
                     <a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Odhlásit se</a>
                </div>
            ";
        } else {
            // line 18
            echo "                 

            <h1>Přihlášení</h1>
            <label for=\"inputEmail\">E-mail</label>
            <input type=\"text\" placeholder=\"E-mail\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
            echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
            <label for=\"inputPassword\">Heslo</label>
            <input type=\"password\" placeholder=\"Heslo\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

            <input type=\"hidden\" name=\"_csrf_token\"
                value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">

            <div class=\"checkbox mb-3\">
                <label>
                        <input type=\"checkbox\" name=\"_remember_me\"> Zapamatovat přihlášení
                    </label>
                </div>

            <button class=\"btn btn-lg btn-primary\" type=\"submit\">
               <strong> Přihlásit se </strong>
            </button>
        </form>
    </div>
                 ";
        }
        // line 40
        echo "   
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  102 => 27,  94 => 22,  88 => 18,  82 => 15,  78 => 14,  75 => 13,  73 => 12,  70 => 11,  64 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/var/www/html/templates/security/login.html.twig");
    }
}

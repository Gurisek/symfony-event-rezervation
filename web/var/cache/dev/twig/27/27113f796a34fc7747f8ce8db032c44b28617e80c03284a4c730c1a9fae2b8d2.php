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
class __TwigTemplate_60d60682181caaec1fff0d92644487e7f3738db0127ff1d988389d19b8065c9e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <title>Bootswatch: Spacelab</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"../layouts/spacelab/css/bootstrap.css\">
  <link rel=\"stylesheet\" href=\"../layouts/spacelab/css/font-awesome.min.css\">
  <link rel=\"stylesheet\" href=\"../layouts/spacelab/css/prism-okaidia.css\">
  <link rel=\"stylesheet\" href=\"../layouts/spacelab/css/custom.min.css\">
  <!-- Global Site Tag (gtag.js) - Google Analytics -->
  <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-23019901-1\"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23019901-1');
  </script>
</head>
";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 1598
        echo "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "<body>
<div class=\"navbar navbar-expand-lg fixed-top navbar-light bg-light\">
  <div class=\"container\">
    <a href=\"../\" class=\"navbar-brand\">Bootswatch</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" id=\"themes\">Themes <span class=\"caret\"></span></a>
          <div class=\"dropdown-menu\" aria-labelledby=\"themes\">
            <a class=\"dropdown-item\" href=\"../default/\">Default</a>
            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"../cerulean/\">Cerulean</a>
            <a class=\"dropdown-item\" href=\"../cosmo/\">Cosmo</a>
            <a class=\"dropdown-item\" href=\"../cyborg/\">Cyborg</a>
            <a class=\"dropdown-item\" href=\"../darkly/\">Darkly</a>
            <a class=\"dropdown-item\" href=\"../flatly/\">Flatly</a>
            <a class=\"dropdown-item\" href=\"../journal/\">Journal</a>
            <a class=\"dropdown-item\" href=\"../litera/\">Litera</a>
            <a class=\"dropdown-item\" href=\"../lumen/\">Lumen</a>
            <a class=\"dropdown-item\" href=\"../lux/\">Lux</a>
            <a class=\"dropdown-item\" href=\"../materia/\">Materia</a>
            <a class=\"dropdown-item\" href=\"../minty/\">Minty</a>
            <a class=\"dropdown-item\" href=\"../morph/\">Morph</a>
            <a class=\"dropdown-item\" href=\"../pulse/\">Pulse</a>
            <a class=\"dropdown-item\" href=\"../quartz/\">Quartz</a>
            <a class=\"dropdown-item\" href=\"../sandstone/\">Sandstone</a>
            <a class=\"dropdown-item\" href=\"../simplex/\">Simplex</a>
            <a class=\"dropdown-item\" href=\"../sketchy/\">Sketchy</a>
            <a class=\"dropdown-item\" href=\"../slate/\">Slate</a>
            <a class=\"dropdown-item\" href=\"../solar/\">Solar</a>
            <a class=\"dropdown-item\" href=\"../spacelab/\">Spacelab</a>
            <a class=\"dropdown-item\" href=\"../superhero/\">Superhero</a>
            <a class=\"dropdown-item\" href=\"../united/\">United</a>
            <a class=\"dropdown-item\" href=\"../vapor/\">Vapor</a>
            <a class=\"dropdown-item\" href=\"../yeti/\">Yeti</a>
            <a class=\"dropdown-item\" href=\"../zephyr/\">Zephyr</a>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"../help/\">Help</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"https://blog.bootswatch.com/\">Blog</a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" id=\"download\">Spacelab <span class=\"caret\"></span></a>
          <div class=\"dropdown-menu\" aria-labelledby=\"download\">
            <a class=\"dropdown-item\" rel=\"noopener\" target=\"_blank\" href=\"https://jsfiddle.net/bootswatch/mbf28j4t/\">Open in JSFiddle</a>
            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"../5/spacelab/bootstrap.min.css\" download>bootstrap.min.css</a>
            <a class=\"dropdown-item\" href=\"../5/spacelab/bootstrap.css\" download>bootstrap.css</a>
            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"../5/spacelab/_variables.scss\" download>_variables.scss</a>
            <a class=\"dropdown-item\" href=\"../5/spacelab/_bootswatch.scss\" download>_bootswatch.scss</a>
          </div>
        </li>
      </ul>
      <ul class=\"navbar-nav ms-md-auto\">
        <li class=\"nav-item\">
          <a target=\"_blank\" rel=\"noopener\" class=\"nav-link\" href=\"https://github.com/thomaspark/bootswatch/\"><i class=\"fa fa-github\"></i> GitHub</a>
        </li>
        <li class=\"nav-item\">
          <a target=\"_blank\" rel=\"noopener\" class=\"nav-link\" href=\"https://twitter.com/bootswatch\"><i class=\"fa fa-twitter\"></i> Twitter</a>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class=\"container\">
  <div class=\"page-header\" id=\"banner\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-md-7 col-sm-6\">
        <h1>Spacelab</h1>
        <p class=\"lead\">Silvery and sleek</p>
      </div>
      <div class=\"col-lg-4 col-md-5 col-sm-6\">
        <div class=\"sponsor\">
          <script async src=\"https://cdn.carbonads.com/carbon.js?serve=CKYIE23N&placement=bootswatchcom\" id=\"_carbonads_js\"></script>
        </div>
      </div>
    </div>
  </div>

  <!-- Navbar
  ================================================== -->
  <div class=\"bs-docs-section clearfix\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-header\">
          <h1 id=\"navbars\">Navbars</h1>
        </div>

        <div class=\"bs-component\">
          <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
            <div class=\"container-fluid\">
              <a class=\"navbar-brand\" href=\"#\">Navbar</a>
              <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
              </button>

              <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav me-auto\">
                  <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"#\">Home
                      <span class=\"visually-hidden\">(current)</span>
                    </a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Features</a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Pricing</a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">About</a>
                  </li>
                  <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
                    <div class=\"dropdown-menu\">
                      <a class=\"dropdown-item\" href=\"#\">Action</a>
                      <a class=\"dropdown-item\" href=\"#\">Another action</a>
                      <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                    </div>
                  </li>
                </ul>
                <form class=\"d-flex\">
                  <input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
                  <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
                </form>
              </div>
            </div>
          </nav>
        </div>

        <div class=\"bs-component\">
          <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
            <div class=\"container-fluid\">
              <a class=\"navbar-brand\" href=\"#\">Navbar</a>
              <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
              </button>

              <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
                <ul class=\"navbar-nav me-auto\">
                  <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"#\">Home
                      <span class=\"visually-hidden\">(current)</span>
                    </a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Features</a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Pricing</a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">About</a>
                  </li>
                  <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
                    <div class=\"dropdown-menu\">
                      <a class=\"dropdown-item\" href=\"#\">Action</a>
                      <a class=\"dropdown-item\" href=\"#\">Another action</a>
                      <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                    </div>
                  </li>
                </ul>
                <form class=\"d-flex\">
                  <input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
                  <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
                </form>
              </div>
            </div>
          </nav>
        </div>

        <div class=\"bs-component\">
          <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <div class=\"container-fluid\">
              <a class=\"navbar-brand\" href=\"#\">Navbar</a>
              <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
              </button>

              <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
                <ul class=\"navbar-nav me-auto\">
                  <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"#\">Home
                      <span class=\"visually-hidden\">(current)</span>
                    </a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Features</a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Pricing</a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">About</a>
                  </li>
                  <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
                    <div class=\"dropdown-menu\">
                      <a class=\"dropdown-item\" href=\"#\">Action</a>
                      <a class=\"dropdown-item\" href=\"#\">Another action</a>
                      <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                    </div>
                  </li>
                </ul>
                <form class=\"d-flex\">
                  <input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
                  <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
                </form>
              </div>
            </div>
          </nav>
        </div>

      </div>
    </div>
  </div>

  <!-- Buttons
  ================================================== -->
  <div class=\"bs-docs-section\">
    <div class=\"page-header\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h1 id=\"buttons\">Buttons</h1>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-7\">
        <p class=\"bs-component\">
          <button type=\"button\" class=\"btn btn-primary\">Primary</button>
          <button type=\"button\" class=\"btn btn-secondary\">Secondary</button>
          <button type=\"button\" class=\"btn btn-success\">Success</button>
          <button type=\"button\" class=\"btn btn-info\">Info</button>
          <button type=\"button\" class=\"btn btn-warning\">Warning</button>
          <button type=\"button\" class=\"btn btn-danger\">Danger</button>
          <button type=\"button\" class=\"btn btn-light\">Light</button>
          <button type=\"button\" class=\"btn btn-dark\">Dark</button>
          <button type=\"button\" class=\"btn btn-link\">Link</button>
        </p>

        <p class=\"bs-component\">
          <button type=\"button\" class=\"btn btn-primary disabled\">Primary</button>
          <button type=\"button\" class=\"btn btn-secondary disabled\">Secondary</button>
          <button type=\"button\" class=\"btn btn-success disabled\">Success</button>
          <button type=\"button\" class=\"btn btn-info disabled\">Info</button>
          <button type=\"button\" class=\"btn btn-warning disabled\">Warning</button>
          <button type=\"button\" class=\"btn btn-danger disabled\">Danger</button>
          <button type=\"button\" class=\"btn btn-light disabled\">Light</button>
          <button type=\"button\" class=\"btn btn-dark disabled\">Dark</button>
          <button type=\"button\" class=\"btn btn-link disabled\">Link</button>
        </p>

        <p class=\"bs-component\">
          <button type=\"button\" class=\"btn btn-outline-primary\">Primary</button>
          <button type=\"button\" class=\"btn btn-outline-secondary\">Secondary</button>
          <button type=\"button\" class=\"btn btn-outline-success\">Success</button>
          <button type=\"button\" class=\"btn btn-outline-info\">Info</button>
          <button type=\"button\" class=\"btn btn-outline-warning\">Warning</button>
          <button type=\"button\" class=\"btn btn-outline-danger\">Danger</button>
          <button type=\"button\" class=\"btn btn-outline-light\">Light</button>
          <button type=\"button\" class=\"btn btn-outline-dark\">Dark</button>
        </p>

        <div class=\"bs-component\">
          <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
            <button type=\"button\" class=\"btn btn-primary\">Primary</button>
            <div class=\"btn-group\" role=\"group\">
              <button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
              <div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
                <a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
                <a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
              </div>
            </div>
          </div>

          <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
            <button type=\"button\" class=\"btn btn-success\">Success</button>
            <div class=\"btn-group\" role=\"group\">
              <button id=\"btnGroupDrop2\" type=\"button\" class=\"btn btn-success dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
              <div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop2\">
                <a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
                <a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
              </div>
            </div>
          </div>

          <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
            <button type=\"button\" class=\"btn btn-info\">Info</button>
            <div class=\"btn-group\" role=\"group\">
              <button id=\"btnGroupDrop3\" type=\"button\" class=\"btn btn-info dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
              <div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop3\">
                <a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
                <a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
              </div>
            </div>
          </div>

          <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
            <button type=\"button\" class=\"btn btn-danger\">Danger</button>
            <div class=\"btn-group\" role=\"group\">
              <button id=\"btnGroupDrop4\" type=\"button\" class=\"btn btn-danger dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
              <div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop4\">
                <a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
                <a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
              </div>
            </div>
          </div>
        </div>

        <div class=\"bs-component\">
          <button type=\"button\" class=\"btn btn-primary btn-lg\">Large button</button>
          <button type=\"button\" class=\"btn btn-primary\">Default button</button>
          <button type=\"button\" class=\"btn btn-primary btn-sm\">Small button</button>
        </div>
      </div>
      <div class=\"col-lg-5\">
        <div class=\"bs-component\">
          <div class=\"d-grid gap-2\">
            <button class=\"btn btn-lg btn-primary\" type=\"button\">Block button</button>
            <button class=\"btn btn-lg btn-primary\" type=\"button\">Block button</button>
          </div>
        </div>

        <div class=\"bs-component mb-3\">
          <div class=\"btn-group\" role=\"group\" aria-label=\"Basic checkbox toggle button group\">
            <input type=\"checkbox\" class=\"btn-check\" id=\"btncheck1\" checked autocomplete=\"off\">
            <label class=\"btn btn-primary\" for=\"btncheck1\">Checkbox 1</label>
            <input type=\"checkbox\" class=\"btn-check\" id=\"btncheck2\" autocomplete=\"off\">
            <label class=\"btn btn-primary\" for=\"btncheck2\">Checkbox 2</label>
            <input type=\"checkbox\" class=\"btn-check\" id=\"btncheck3\" autocomplete=\"off\">
            <label class=\"btn btn-primary\" for=\"btncheck3\">Checkbox 3</label>
          </div>
        </div>

        <div class=\"bs-component mb-3\">
          <div class=\"btn-group\" role=\"group\" aria-label=\"Basic radio toggle button group\">
            <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio1\" autocomplete=\"off\" checked>
            <label class=\"btn btn-outline-primary\" for=\"btnradio1\">Radio 1</label>
            <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio2\" autocomplete=\"off\" checked>
            <label class=\"btn btn-outline-primary\" for=\"btnradio2\">Radio 2</label>
            <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio3\" autocomplete=\"off\" checked>
            <label class=\"btn btn-outline-primary\" for=\"btnradio3\">Radio 3</label>
          </div>
        </div>

        <div class=\"bs-component\">
          <div class=\"btn-group-vertical\">
            <button type=\"button\" class=\"btn btn-primary\">Button</button>
            <button type=\"button\" class=\"btn btn-primary\">Button</button>
            <button type=\"button\" class=\"btn btn-primary\">Button</button>
            <button type=\"button\" class=\"btn btn-primary\">Button</button>
            <button type=\"button\" class=\"btn btn-primary\">Button</button>
            <button type=\"button\" class=\"btn btn-primary\">Button</button>
          </div>
        </div>

        <div class=\"bs-component mb-3\">
          <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
            <button type=\"button\" class=\"btn btn-secondary\">Left</button>
            <button type=\"button\" class=\"btn btn-secondary\">Middle</button>
            <button type=\"button\" class=\"btn btn-secondary\">Right</button>
          </div>
        </div>

        <div class=\"bs-component mb-3\">
          <div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
            <div class=\"btn-group me-2\" role=\"group\" aria-label=\"First group\">
              <button type=\"button\" class=\"btn btn-secondary\">1</button>
              <button type=\"button\" class=\"btn btn-secondary\">2</button>
              <button type=\"button\" class=\"btn btn-secondary\">3</button>
              <button type=\"button\" class=\"btn btn-secondary\">4</button>
            </div>
            <div class=\"btn-group me-2\" role=\"group\" aria-label=\"Second group\">
              <button type=\"button\" class=\"btn btn-secondary\">5</button>
              <button type=\"button\" class=\"btn btn-secondary\">6</button>
              <button type=\"button\" class=\"btn btn-secondary\">7</button>
            </div>
            <div class=\"btn-group\" role=\"group\" aria-label=\"Third group\">
              <button type=\"button\" class=\"btn btn-secondary\">8</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Typography
  ================================================== -->
  <div class=\"bs-docs-section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-header\">
          <h1 id=\"typography\">Typography</h1>
        </div>
      </div>
    </div>

    <!-- Headings -->

    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <h1>Heading 1</h1>
          <h2>Heading 2</h2>
          <h3>Heading 3</h3>
          <h4>Heading 4</h4>
          <h5>Heading 5</h5>
          <h6>Heading 6</h6>
          <h3>
            Heading
            <small class=\"text-muted\">with muted text</small>
          </h3>
          <p class=\"lead\">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <h2>Example body text</h2>
          <p>Nullam quis risus eget <a href=\"#\">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
          <p><small>This line of text is meant to be treated as fine print.</small></p>
          <p>The following is <strong>rendered as bold text</strong>.</p>
          <p>The following is <em>rendered as italicized text</em>.</p>
          <p>An abbreviation of the word attribute is <abbr title=\"attribute\">attr</abbr>.</p>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <h2>Emphasis classes</h2>
          <p class=\"text-muted\">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
          <p class=\"text-primary\">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p class=\"text-secondary\">Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
          <p class=\"text-warning\">Etiam porta sem malesuada magna mollis euismod.</p>
          <p class=\"text-danger\">Donec ullamcorper nulla non metus auctor fringilla.</p>
          <p class=\"text-success\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
          <p class=\"text-info\">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>
    </div>

    <!-- Blockquotes -->

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h2 id=\"type-blockquotes\">Blockquotes</h2>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <figure>
            <blockquote class=\"blockquote\">
              <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

            </blockquote>
            <figcaption class=\"blockquote-footer\">
              Someone famous in <cite title=\"Source Title\">Source Title</cite>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <figure class=\"text-center\">
            <blockquote class=\"blockquote\">
              <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

            </blockquote>
            <figcaption class=\"blockquote-footer\">
              Someone famous in <cite title=\"Source Title\">Source Title</cite>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <figure class=\"text-end\">
            <blockquote class=\"blockquote\">
              <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

            </blockquote>
            <figcaption class=\"blockquote-footer\">
              Someone famous in <cite title=\"Source Title\">Source Title</cite>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
  </div>

  <!-- Tables
  ================================================== -->
  <div class=\"bs-docs-section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-header\">
          <h1 id=\"tables\">Tables</h1>
        </div>

        <div class=\"bs-component\">
          <table class=\"table table-hover\">
            <thead>
            <tr>
              <th scope=\"col\">Type</th>
              <th scope=\"col\">Column heading</th>
              <th scope=\"col\">Column heading</th>
              <th scope=\"col\">Column heading</th>
            </tr>
            </thead>
            <tbody>
            <tr class=\"table-active\">
              <th scope=\"row\">Active</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr>
              <th scope=\"row\">Default</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class=\"table-primary\">
              <th scope=\"row\">Primary</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class=\"table-secondary\">
              <th scope=\"row\">Secondary</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class=\"table-success\">
              <th scope=\"row\">Success</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class=\"table-danger\">
              <th scope=\"row\">Danger</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class=\"table-warning\">
              <th scope=\"row\">Warning</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class=\"table-info\">
              <th scope=\"row\">Info</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class=\"table-light\">
              <th scope=\"row\">Light</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class=\"table-dark\">
              <th scope=\"row\">Dark</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            </tbody>
          </table>
        </div><!-- /example -->
      </div>
    </div>
  </div>

  <!-- Forms
  ================================================== -->
  <div class=\"bs-docs-section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-header\">
          <h1 id=\"forms\">Forms</h1>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-6\">
        <div class=\"bs-component\">
          <form>
            <fieldset>
              <legend>Legend</legend>
              <div class=\"form-group row\">
                <label for=\"staticEmail\" class=\"col-sm-2 col-form-label\">Email</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" readonly class=\"form-control-plaintext\" id=\"staticEmail\" value=\"email@example.com\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"exampleInputEmail1\" class=\"form-label mt-4\">Email address</label>
                <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
              </div>
              <div class=\"form-group\">
                <label for=\"exampleInputPassword1\" class=\"form-label mt-4\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
              </div>
              <div class=\"form-group\">
                <label for=\"exampleSelect1\" class=\"form-label mt-4\">Example select</label>
                <select class=\"form-select\" id=\"exampleSelect1\">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class=\"form-group\">
                <label for=\"exampleSelect2\" class=\"form-label mt-4\">Example multiple select</label>
                <select multiple class=\"form-select\" id=\"exampleSelect2\">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class=\"form-group\">
                <label for=\"exampleTextarea\" class=\"form-label mt-4\">Example textarea</label>
                <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"3\"></textarea>
              </div>
              <div class=\"form-group\">
                <label for=\"formFile\" class=\"form-label mt-4\">Default file input example</label>
                <input class=\"form-control\" type=\"file\" id=\"formFile\">
              </div>
              <fieldset class=\"form-group\">
                <legend class=\"mt-4\">Radio buttons</legend>
                <div class=\"form-check\">
                  <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>
                    Option one is this and that&mdash;be sure to include why it's great
                  </label>
                </div>
                <div class=\"form-check\">
                  <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
                    Option two can be something else and selecting it will deselect option one
                  </label>
                </div>
                <div class=\"form-check disabled\">
                  <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"option3\" disabled>
                    Option three is disabled
                  </label>
                </div>
              </fieldset>
              <fieldset class=\"form-group\">
                <legend class=\"mt-4\">Checkboxes</legend>
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\">
                  <label class=\"form-check-label\" for=\"flexCheckDefault\">
                    Default checkbox
                  </label>
                </div>
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckChecked\" checked>
                  <label class=\"form-check-label\" for=\"flexCheckChecked\">
                    Checked checkbox
                  </label>
                </div>
              </fieldset>
              <fieldset>
                <legend class=\"mt-4\">Switches</legend>
                <div class=\"form-check form-switch\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckDefault\">
                  <label class=\"form-check-label\" for=\"flexSwitchCheckDefault\">Default switch checkbox input</label>
                </div>
                <div class=\"form-check form-switch\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckChecked\" checked>
                  <label class=\"form-check-label\" for=\"flexSwitchCheckChecked\">Checked switch checkbox input</label>
                </div>
              </fieldset>
              <fieldset class=\"form-group\">
                <legend class=\"mt-4\">Ranges</legend>
                <label for=\"customRange1\" class=\"form-label\">Example range</label>
                <input type=\"range\" class=\"form-range\" id=\"customRange1\">
                <label for=\"disabledRange\" class=\"form-label\">Disabled range</label>
                <input type=\"range\" class=\"form-range\" id=\"disabledRange\" disabled>
                <label for=\"customRange3\" class=\"form-label\">Example range</label>
                <input type=\"range\" class=\"form-range\" min=\"0\" max=\"5\" step=\"0.5\" id=\"customRange3\">
              </fieldset>
              <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
            </fieldset>
          </form>
        </div>
      </div>
      <div class=\"col-lg-4 offset-lg-1\">
        <form class=\"bs-component\">
          <div class=\"form-group\">
            <fieldset disabled>
              <label class=\"form-label\" for=\"disabledInput\">Disabled input</label>
              <input class=\"form-control\" id=\"disabledInput\" type=\"text\" placeholder=\"Disabled input here...\" disabled>
            </fieldset>
          </div>

          <div class=\"form-group\">
            <fieldset>
              <label class=\"form-label mt-4\" for=\"readOnlyInput\">Readonly input</label>
              <input class=\"form-control\" id=\"readOnlyInput\" type=\"text\" placeholder=\"Readonly input here...\" readonly>
            </fieldset>
          </div>

          <div class=\"form-group has-success\">
            <label class=\"form-label mt-4\" for=\"inputValid\">Valid input</label>
            <input type=\"text\" value=\"correct value\" class=\"form-control is-valid\" id=\"inputValid\">
            <div class=\"valid-feedback\">Success! You've done it.</div>
          </div>

          <div class=\"form-group has-danger\">
            <label class=\"form-label mt-4\" for=\"inputInvalid\">Invalid input</label>
            <input type=\"text\" value=\"wrong value\" class=\"form-control is-invalid\" id=\"inputInvalid\">
            <div class=\"invalid-feedback\">Sorry, that username's taken. Try another?</div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-form-label col-form-label-lg mt-4\" for=\"inputLarge\">Large input</label>
            <input class=\"form-control form-control-lg\" type=\"text\" placeholder=\".form-control-lg\" id=\"inputLarge\">
          </div>

          <div class=\"form-group\">
            <label class=\"col-form-label mt-4\" for=\"inputDefault\">Default input</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"Default input\" id=\"inputDefault\">
          </div>

          <div class=\"form-group\">
            <label class=\"col-form-label col-form-label-sm mt-4\" for=\"inputSmall\">Small input</label>
            <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\".form-control-sm\" id=\"inputSmall\">
          </div>

          <div class=\"form-group\">
            <label class=\"form-label mt-4\">Input addons</label>
            <div class=\"form-group\">
              <div class=\"input-group mb-3\">
                <span class=\"input-group-text\">\$</span>
                <input type=\"text\" class=\"form-control\" aria-label=\"Amount (to the nearest dollar)\">
                <span class=\"input-group-text\">.00</span>
              </div>
              <div class=\"input-group mb-3\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Recipient's username\" aria-label=\"Recipient's username\" aria-describedby=\"button-addon2\">
                <button class=\"btn btn-primary\" type=\"button\" id=\"button-addon2\">Button</button>
              </div>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"form-label mt-4\">Floating labels</label>
            <div class=\"form-floating mb-3\">
              <input type=\"email\" class=\"form-control\" id=\"floatingInput\" placeholder=\"name@example.com\">
              <label for=\"floatingInput\">Email address</label>
            </div>
            <div class=\"form-floating\">
              <input type=\"password\" class=\"form-control\" id=\"floatingPassword\" placeholder=\"Password\">
              <label for=\"floatingPassword\">Password</label>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>

  <!-- Navs
  ================================================== -->
  <div class=\"bs-docs-section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-header\">
          <h1 id=\"navs\">Navs</h1>
        </div>
      </div>
    </div>

    <div class=\"row mb-5\">
      <div class=\"col-lg-6\">
        <h2 id=\"nav-tabs\">Tabs</h2>
        <div class=\"bs-component\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#home\">Home</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#profile\">Profile</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
              <div class=\"dropdown-menu\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Separated link</a>
              </div>
            </li>
          </ul>
          <div id=\"myTabContent\" class=\"tab-content\">
            <div class=\"tab-pane fade show active\" id=\"home\">
              <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
            </div>
            <div class=\"tab-pane fade\" id=\"profile\">
              <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
            </div>
            <div class=\"tab-pane fade\" id=\"dropdown1\">
              <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
            </div>
            <div class=\"tab-pane fade\" id=\"dropdown2\">
              <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
            </div>
          </div>
        </div>
      </div>

      <div class=\"col-lg-6\">
        <h2 id=\"nav-pills\">Pills</h2>
        <div class=\"bs-component\">
          <ul class=\"nav nav-pills\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Active</a>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
              <div class=\"dropdown-menu\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Separated link</a>
              </div>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
          </ul>
        </div>
        <br>
        <div class=\"bs-component\">
          <ul class=\"nav nav-pills flex-column\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Active</a>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
              <div class=\"dropdown-menu\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Separated link</a>
              </div>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-6\">
        <h2 id=\"nav-breadcrumbs\">Breadcrumbs</h2>
        <div class=\"bs-component\">
          <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item active\">Home</li>
          </ol>
          <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item active\">Library</li>
          </ol>
          <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
            <li class=\"breadcrumb-item active\">Data</li>
          </ol>
        </div>
      </div>

      <div class=\"col-lg-6\">
        <h2 id=\"pagination\">Pagination</h2>
        <div class=\"bs-component\">
          <div>
            <ul class=\"pagination\">
              <li class=\"page-item disabled\">
                <a class=\"page-link\" href=\"#\">&laquo;</a>
              </li>
              <li class=\"page-item active\">
                <a class=\"page-link\" href=\"#\">1</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">2</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">3</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">4</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">5</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">&raquo;</a>
              </li>
            </ul>
          </div>

          <div>
            <ul class=\"pagination pagination-lg\">
              <li class=\"page-item disabled\">
                <a class=\"page-link\" href=\"#\">&laquo;</a>
              </li>
              <li class=\"page-item active\">
                <a class=\"page-link\" href=\"#\">1</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">2</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">3</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">4</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">5</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">&raquo;</a>
              </li>
            </ul>
          </div>

          <div>
            <ul class=\"pagination pagination-sm\">
              <li class=\"page-item disabled\">
                <a class=\"page-link\" href=\"#\">&laquo;</a>
              </li>
              <li class=\"page-item active\">
                <a class=\"page-link\" href=\"#\">1</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">2</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">3</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">4</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">5</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">&raquo;</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Indicators
  ================================================== -->
  <div class=\"bs-docs-section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-header\">
          <h1 id=\"indicators\">Indicators</h1>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h2>Alerts</h2>
        <div class=\"bs-component\">
          <div class=\"alert alert-dismissible alert-warning\">
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            <h4 class=\"alert-heading\">Warning!</h4>
            <p class=\"mb-0\">Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href=\"#\" class=\"alert-link\">vel scelerisque nisl consectetur et</a>.</p>
          </div>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"alert alert-dismissible alert-danger\">
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            <strong>Oh snap!</strong> <a href=\"#\" class=\"alert-link\">Change a few things up</a> and try submitting again.
          </div>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"alert alert-dismissible alert-success\">
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            <strong>Well done!</strong> You successfully read <a href=\"#\" class=\"alert-link\">this important alert message</a>.
          </div>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"alert alert-dismissible alert-info\">
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            <strong>Heads up!</strong> This <a href=\"#\" class=\"alert-link\">alert needs your attention</a>, but it's not super important.
          </div>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"alert alert-dismissible alert-primary\">
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            <strong>Oh snap!</strong> <a href=\"#\" class=\"alert-link\">Change a few things up</a> and try submitting again.
          </div>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"alert alert-dismissible alert-secondary\">
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            <strong>Well done!</strong> You successfully read <a href=\"#\" class=\"alert-link\">this important alert message</a>.
          </div>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"alert alert-dismissible alert-light\">
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            <strong>Heads up!</strong> This <a href=\"#\" class=\"alert-link\">alert needs your attention</a>, but it's not super important.
          </div>
        </div>
      </div>
    </div>
    <div>
      <h2>Badges</h2>
      <div class=\"bs-component mb-4\">
        <span class=\"badge bg-primary\">Primary</span>
        <span class=\"badge bg-secondary\">Secondary</span>
        <span class=\"badge bg-success\">Success</span>
        <span class=\"badge bg-danger\">Danger</span>
        <span class=\"badge bg-warning\">Warning</span>
        <span class=\"badge bg-info\">Info</span>
        <span class=\"badge bg-light\">Light</span>
        <span class=\"badge bg-dark\">Dark</span>
      </div>
      <div class=\"bs-component\">
        <span class=\"badge rounded-pill bg-primary\">Primary</span>
        <span class=\"badge rounded-pill bg-secondary\">Secondary</span>
        <span class=\"badge rounded-pill bg-success\">Success</span>
        <span class=\"badge rounded-pill bg-danger\">Danger</span>
        <span class=\"badge rounded-pill bg-warning\">Warning</span>
        <span class=\"badge rounded-pill bg-info\">Info</span>
        <span class=\"badge rounded-pill bg-light\">Light</span>
        <span class=\"badge rounded-pill bg-dark\">Dark</span>
      </div>
    </div>
  </div>

  <!-- Progress
  ================================================== -->
  <div class=\"bs-docs-section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-header\">
          <h1 id=\"progress\">Progress</h1>
        </div>

        <h3 id=\"progress-basic\">Basic</h3>
        <div class=\"bs-component\">
          <div class=\"progress\">
            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 25%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
        </div>

        <h3 id=\"progress-alternatives\">Contextual alternatives</h3>
        <div class=\"bs-component\">
          <div class=\"progress\">
            <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 25%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress\">
            <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 50%;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress\">
            <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 75%;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress\">
            <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 100%;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
        </div>

        <h3 id=\"progress-multiple\">Multiple bars</h3>
        <div class=\"bs-component\">
          <div class=\"progress\">
            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 15%;\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 30%;\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 20%;\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
        </div>

        <h3 id=\"progress-striped\">Striped</h3>
        <div class=\"bs-component\">
          <div class=\"progress\">
            <div class=\"progress-bar progress-bar-striped\" role=\"progressbar\" style=\"width: 10%;\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress\">
            <div class=\"progress-bar progress-bar-striped bg-success\" role=\"progressbar\" style=\"width: 25%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress\">
            <div class=\"progress-bar progress-bar-striped bg-info\" role=\"progressbar\" style=\"width: 50%;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress\">
            <div class=\"progress-bar progress-bar-striped bg-warning\" role=\"progressbar\" style=\"width: 75%;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress\">
            <div class=\"progress-bar progress-bar-striped bg-danger\" role=\"progressbar\" style=\"width: 100%;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
        </div>

        <h3 id=\"progress-animated\">Animated</h3>
        <div class=\"bs-component\">
          <div class=\"progress\">
            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 75%;\"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Containers
  ================================================== -->
  <div class=\"bs-docs-section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-header\">
          <h1 id=\"containers\">Containers</h1>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h2>List groups</h2>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <ul class=\"list-group\">
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
              Cras justo odio
              <span class=\"badge bg-primary rounded-pill\">14</span>
            </li>
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
              Dapibus ac facilisis in
              <span class=\"badge bg-primary rounded-pill\">2</span>
            </li>
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
              Morbi leo risus
              <span class=\"badge bg-primary rounded-pill\">1</span>
            </li>
          </ul>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"list-group\">
            <a href=\"#\" class=\"list-group-item list-group-item-action active\">Cras justo odio</a>
            <a href=\"#\" class=\"list-group-item list-group-item-action\">Dapibus ac facilisis in</a>
            <a href=\"#\" class=\"list-group-item list-group-item-action disabled\">Morbi leo risus</a>
          </div>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"list-group\">
            <a href=\"#\" class=\"list-group-item list-group-item-action flex-column align-items-start active\">
              <div class=\"d-flex w-100 justify-content-between\">
                <h5 class=\"mb-1\">List group item heading</h5>
                <small>3 days ago</small>
              </div>
              <p class=\"mb-1\">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
              <small>Donec id elit non mi porta.</small>
            </a>
            <a href=\"#\" class=\"list-group-item list-group-item-action flex-column align-items-start\">
              <div class=\"d-flex w-100 justify-content-between\">
                <h5 class=\"mb-1\">List group item heading</h5>
                <small class=\"text-muted\">3 days ago</small>
              </div>
              <p class=\"mb-1\">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
              <small class=\"text-muted\">Donec id elit non mi porta.</small>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h2>Cards</h2>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Primary card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card text-white bg-secondary mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Secondary card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card text-white bg-success mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Success card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card text-white bg-danger mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Danger card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card text-white bg-warning mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Warning card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card text-white bg-info mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Info card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card bg-light mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Light card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card text-white bg-dark mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Dark card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"card border-primary mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Primary card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card border-secondary mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Secondary card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card border-success mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Success card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card border-danger mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Danger card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card border-warning mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Warning card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card border-info mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Info card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card border-light mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Light card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card border-dark mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Dark card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>

      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"card mb-3\">
            <h3 class=\"card-header\">Card header</h3>
            <div class=\"card-body\">
              <h5 class=\"card-title\">Special title treatment</h5>
              <h6 class=\"card-subtitle text-muted\">Support card subtitle</h6>
            </div>
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"d-block user-select-none\" width=\"100%\" height=\"200\" aria-label=\"Placeholder: Image cap\" focusable=\"false\" role=\"img\" preserveAspectRatio=\"xMidYMid slice\" viewBox=\"0 0 318 180\" style=\"font-size:1.125rem;text-anchor:middle\">
              <rect width=\"100%\" height=\"100%\" fill=\"#868e96\"></rect>
              <text x=\"50%\" y=\"50%\" fill=\"#dee2e6\" dy=\".3em\">Image cap</text>
            </svg>
            <div class=\"card-body\">
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class=\"list-group list-group-flush\">
              <li class=\"list-group-item\">Cras justo odio</li>
              <li class=\"list-group-item\">Dapibus ac facilisis in</li>
              <li class=\"list-group-item\">Vestibulum at eros</li>
            </ul>
            <div class=\"card-body\">
              <a href=\"#\" class=\"card-link\">Card link</a>
              <a href=\"#\" class=\"card-link\">Another link</a>
            </div>
            <div class=\"card-footer text-muted\">
              2 days ago
            </div>
          </div>
          <div class=\"card\">
            <div class=\"card-body\">
              <h4 class=\"card-title\">Card title</h4>
              <h6 class=\"card-subtitle mb-2 text-muted\">Card subtitle</h6>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href=\"#\" class=\"card-link\">Card link</a>
              <a href=\"#\" class=\"card-link\">Another link</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"row mt-5\">
      <div class=\"col-lg-12\">
        <h2>Accordions</h2>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"accordion\" id=\"accordionExample\">
            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\" id=\"headingOne\">
                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                  Accordion Item #1
                </button>
              </h2>
              <div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
                <div class=\"accordion-body\">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\" id=\"headingTwo\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                  Accordion Item #2
                </button>
              </h2>
              <div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionExample\">
                <div class=\"accordion-body\">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\" id=\"headingThree\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                  Accordion Item #3
                </button>
              </h2>
              <div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionExample\">
                <div class=\"accordion-body\">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Dialogs
  ================================================== -->
  <div class=\"bs-docs-section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-header\">
          <h1 id=\"dialogs\">Dialogs</h1>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-lg-6\">
        <h2>Modals</h2>
        <div class=\"bs-component\">
          <div class=\"modal\">
            <div class=\"modal-dialog\" role=\"document\">
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <h5 class=\"modal-title\">Modal title</h5>
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\"></span>
                  </button>
                </div>
                <div class=\"modal-body\">
                  <p>Modal body text goes here.</p>
                </div>
                <div class=\"modal-footer\">
                  <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                  <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-6\">
        <h2>Popovers</h2>
        <div class=\"bs-component mb-5\">
          <button type=\"button\" class=\"btn btn-secondary\" title=\"Popover Title\" data-bs-container=\"body\" data-bs-toggle=\"popover\" data-bs-placement=\"left\" data-bs-content=\"Vivamus sagittis lacus vel augue laoreet rutrum faucibus.\">Left</button>

          <button type=\"button\" class=\"btn btn-secondary\" title=\"Popover Title\" data-bs-container=\"body\" data-bs-toggle=\"popover\" data-bs-placement=\"top\" data-bs-content=\"Vivamus sagittis lacus vel augue laoreet rutrum faucibus.\">Top</button>

          <button type=\"button\" class=\"btn btn-secondary\" title=\"Popover Title\" data-bs-container=\"body\" data-bs-toggle=\"popover\" data-bs-placement=\"bottom\" data-bs-content=\"Vivamus sagittis lacus vel augue laoreet rutrum faucibus.\">Bottom</button>

          <button type=\"button\" class=\"btn btn-secondary\" title=\"Popover Title\" data-bs-container=\"body\" data-bs-toggle=\"popover\" data-bs-placement=\"right\" data-bs-content=\"Vivamus sagittis lacus vel augue laoreet rutrum faucibus.\">Right</button>
        </div>
        <h2>Tooltips</h2>
        <div class=\"bs-component mb-5\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"Tooltip on left\">Left</button>

          <button type=\"button\" class=\"btn btn-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Tooltip on top\">Top</button>

          <button type=\"button\" class=\"btn btn-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Tooltip on bottom\">Bottom</button>

          <button type=\"button\" class=\"btn btn-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"Tooltip on right\">Right</button>
        </div>
        <h2>Toasts</h2>
        <div class=\"bs-component\">
          <div class=\"toast show\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
            <div class=\"toast-header\">
              <strong class=\"me-auto\">Bootstrap</strong>
              <small>11 mins ago</small>
              <button type=\"button\" class=\"btn-close ms-2 mb-1\" data-bs-dismiss=\"toast\" aria-label=\"Close\">
                <span aria-hidden=\"true\"></span>
              </button>
            </div>
            <div class=\"toast-body\">
              Hello, world! This is a toast message.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id=\"source-modal\" class=\"modal fade\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-lg\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h4 class=\"modal-title\">Source Code</h4>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-hidden=\"true\"></button>
        </div>
        <div class=\"modal-body\">
          <pre class=\"language-html\"><code></code></pre>
        </div>
      </div>
    </div>
  </div>

  <footer id=\"footer\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <ul class=\"list-unstyled\">
          <li class=\"float-end\"><a href=\"#top\">Back to top</a></li>
          <li><a href=\"https://blog.bootswatch.com/\">Blog</a></li>
          <li><a href=\"https://blog.bootswatch.com/rss/\">RSS</a></li>
          <li><a href=\"https://twitter.com/bootswatch\">Twitter</a></li>
          <li><a href=\"https://github.com/thomaspark/bootswatch\">GitHub</a></li>
          <li><a href=\"../help/#api\">API</a></li>
          <li><a href=\"../help/#donate\">Donate</a></li>
        </ul>
        <p>Made by <a href=\"https://thomaspark.co/\">Thomas Park</a>.</p>
        <p>Code released under the <a href=\"https://github.com/thomaspark/bootswatch/blob/master/LICENSE\">MIT License</a>.</p>
        <p>Based on <a href=\"https://getbootstrap.com/\" rel=\"nofollow\">Bootstrap</a>. Icons from <a href=\"https://fontawesome.com/\" rel=\"nofollow\">Font Awesome</a>. Web fonts from <a href=\"https://fonts.google.com/\" rel=\"nofollow\">Google</a>.</p>

      </div>
    </div>
  </footer>
</div>

<script src=\"../_vendor/jquery/dist/jquery.min.js\"></script>
<script src=\"../_vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"../_vendor/prismjs/prism.js\" data-manual></script>
<script src=\"../_assets/js/custom.js\"></script>
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  80 => 22,  69 => 1598,  67 => 22,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <title>Bootswatch: Spacelab</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"../layouts/spacelab/css/bootstrap.css\">
  <link rel=\"stylesheet\" href=\"../layouts/spacelab/css/font-awesome.min.css\">
  <link rel=\"stylesheet\" href=\"../layouts/spacelab/css/prism-okaidia.css\">
  <link rel=\"stylesheet\" href=\"../layouts/spacelab/css/custom.min.css\">
  <!-- Global Site Tag (gtag.js) - Google Analytics -->
  <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-23019901-1\"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23019901-1');
  </script>
</head>
{% block body %}
<body>
<div class=\"navbar navbar-expand-lg fixed-top navbar-light bg-light\">
  <div class=\"container\">
    <a href=\"../\" class=\"navbar-brand\">Bootswatch</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" id=\"themes\">Themes <span class=\"caret\"></span></a>
          <div class=\"dropdown-menu\" aria-labelledby=\"themes\">
            <a class=\"dropdown-item\" href=\"../default/\">Default</a>
            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"../cerulean/\">Cerulean</a>
            <a class=\"dropdown-item\" href=\"../cosmo/\">Cosmo</a>
            <a class=\"dropdown-item\" href=\"../cyborg/\">Cyborg</a>
            <a class=\"dropdown-item\" href=\"../darkly/\">Darkly</a>
            <a class=\"dropdown-item\" href=\"../flatly/\">Flatly</a>
            <a class=\"dropdown-item\" href=\"../journal/\">Journal</a>
            <a class=\"dropdown-item\" href=\"../litera/\">Litera</a>
            <a class=\"dropdown-item\" href=\"../lumen/\">Lumen</a>
            <a class=\"dropdown-item\" href=\"../lux/\">Lux</a>
            <a class=\"dropdown-item\" href=\"../materia/\">Materia</a>
            <a class=\"dropdown-item\" href=\"../minty/\">Minty</a>
            <a class=\"dropdown-item\" href=\"../morph/\">Morph</a>
            <a class=\"dropdown-item\" href=\"../pulse/\">Pulse</a>
            <a class=\"dropdown-item\" href=\"../quartz/\">Quartz</a>
            <a class=\"dropdown-item\" href=\"../sandstone/\">Sandstone</a>
            <a class=\"dropdown-item\" href=\"../simplex/\">Simplex</a>
            <a class=\"dropdown-item\" href=\"../sketchy/\">Sketchy</a>
            <a class=\"dropdown-item\" href=\"../slate/\">Slate</a>
            <a class=\"dropdown-item\" href=\"../solar/\">Solar</a>
            <a class=\"dropdown-item\" href=\"../spacelab/\">Spacelab</a>
            <a class=\"dropdown-item\" href=\"../superhero/\">Superhero</a>
            <a class=\"dropdown-item\" href=\"../united/\">United</a>
            <a class=\"dropdown-item\" href=\"../vapor/\">Vapor</a>
            <a class=\"dropdown-item\" href=\"../yeti/\">Yeti</a>
            <a class=\"dropdown-item\" href=\"../zephyr/\">Zephyr</a>
          </div>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"../help/\">Help</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"https://blog.bootswatch.com/\">Blog</a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" id=\"download\">Spacelab <span class=\"caret\"></span></a>
          <div class=\"dropdown-menu\" aria-labelledby=\"download\">
            <a class=\"dropdown-item\" rel=\"noopener\" target=\"_blank\" href=\"https://jsfiddle.net/bootswatch/mbf28j4t/\">Open in JSFiddle</a>
            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"../5/spacelab/bootstrap.min.css\" download>bootstrap.min.css</a>
            <a class=\"dropdown-item\" href=\"../5/spacelab/bootstrap.css\" download>bootstrap.css</a>
            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"../5/spacelab/_variables.scss\" download>_variables.scss</a>
            <a class=\"dropdown-item\" href=\"../5/spacelab/_bootswatch.scss\" download>_bootswatch.scss</a>
          </div>
        </li>
      </ul>
      <ul class=\"navbar-nav ms-md-auto\">
        <li class=\"nav-item\">
          <a target=\"_blank\" rel=\"noopener\" class=\"nav-link\" href=\"https://github.com/thomaspark/bootswatch/\"><i class=\"fa fa-github\"></i> GitHub</a>
        </li>
        <li class=\"nav-item\">
          <a target=\"_blank\" rel=\"noopener\" class=\"nav-link\" href=\"https://twitter.com/bootswatch\"><i class=\"fa fa-twitter\"></i> Twitter</a>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class=\"container\">
  <div class=\"page-header\" id=\"banner\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-md-7 col-sm-6\">
        <h1>Spacelab</h1>
        <p class=\"lead\">Silvery and sleek</p>
      </div>
      <div class=\"col-lg-4 col-md-5 col-sm-6\">
        <div class=\"sponsor\">
          <script async src=\"https://cdn.carbonads.com/carbon.js?serve=CKYIE23N&placement=bootswatchcom\" id=\"_carbonads_js\"></script>
        </div>
      </div>
    </div>
  </div>

  <!-- Navbar
  ================================================== -->
  <div class=\"bs-docs-section clearfix\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-header\">
          <h1 id=\"navbars\">Navbars</h1>
        </div>

        <div class=\"bs-component\">
          <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
            <div class=\"container-fluid\">
              <a class=\"navbar-brand\" href=\"#\">Navbar</a>
              <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
              </button>

              <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav me-auto\">
                  <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"#\">Home
                      <span class=\"visually-hidden\">(current)</span>
                    </a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Features</a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Pricing</a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">About</a>
                  </li>
                  <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
                    <div class=\"dropdown-menu\">
                      <a class=\"dropdown-item\" href=\"#\">Action</a>
                      <a class=\"dropdown-item\" href=\"#\">Another action</a>
                      <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                    </div>
                  </li>
                </ul>
                <form class=\"d-flex\">
                  <input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
                  <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
                </form>
              </div>
            </div>
          </nav>
        </div>

        <div class=\"bs-component\">
          <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
            <div class=\"container-fluid\">
              <a class=\"navbar-brand\" href=\"#\">Navbar</a>
              <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
              </button>

              <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
                <ul class=\"navbar-nav me-auto\">
                  <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"#\">Home
                      <span class=\"visually-hidden\">(current)</span>
                    </a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Features</a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Pricing</a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">About</a>
                  </li>
                  <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
                    <div class=\"dropdown-menu\">
                      <a class=\"dropdown-item\" href=\"#\">Action</a>
                      <a class=\"dropdown-item\" href=\"#\">Another action</a>
                      <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                    </div>
                  </li>
                </ul>
                <form class=\"d-flex\">
                  <input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
                  <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
                </form>
              </div>
            </div>
          </nav>
        </div>

        <div class=\"bs-component\">
          <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <div class=\"container-fluid\">
              <a class=\"navbar-brand\" href=\"#\">Navbar</a>
              <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
              </button>

              <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
                <ul class=\"navbar-nav me-auto\">
                  <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"#\">Home
                      <span class=\"visually-hidden\">(current)</span>
                    </a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Features</a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Pricing</a>
                  </li>
                  <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">About</a>
                  </li>
                  <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
                    <div class=\"dropdown-menu\">
                      <a class=\"dropdown-item\" href=\"#\">Action</a>
                      <a class=\"dropdown-item\" href=\"#\">Another action</a>
                      <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                    </div>
                  </li>
                </ul>
                <form class=\"d-flex\">
                  <input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
                  <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
                </form>
              </div>
            </div>
          </nav>
        </div>

      </div>
    </div>
  </div>

  <!-- Buttons
  ================================================== -->
  <div class=\"bs-docs-section\">
    <div class=\"page-header\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h1 id=\"buttons\">Buttons</h1>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-7\">
        <p class=\"bs-component\">
          <button type=\"button\" class=\"btn btn-primary\">Primary</button>
          <button type=\"button\" class=\"btn btn-secondary\">Secondary</button>
          <button type=\"button\" class=\"btn btn-success\">Success</button>
          <button type=\"button\" class=\"btn btn-info\">Info</button>
          <button type=\"button\" class=\"btn btn-warning\">Warning</button>
          <button type=\"button\" class=\"btn btn-danger\">Danger</button>
          <button type=\"button\" class=\"btn btn-light\">Light</button>
          <button type=\"button\" class=\"btn btn-dark\">Dark</button>
          <button type=\"button\" class=\"btn btn-link\">Link</button>
        </p>

        <p class=\"bs-component\">
          <button type=\"button\" class=\"btn btn-primary disabled\">Primary</button>
          <button type=\"button\" class=\"btn btn-secondary disabled\">Secondary</button>
          <button type=\"button\" class=\"btn btn-success disabled\">Success</button>
          <button type=\"button\" class=\"btn btn-info disabled\">Info</button>
          <button type=\"button\" class=\"btn btn-warning disabled\">Warning</button>
          <button type=\"button\" class=\"btn btn-danger disabled\">Danger</button>
          <button type=\"button\" class=\"btn btn-light disabled\">Light</button>
          <button type=\"button\" class=\"btn btn-dark disabled\">Dark</button>
          <button type=\"button\" class=\"btn btn-link disabled\">Link</button>
        </p>

        <p class=\"bs-component\">
          <button type=\"button\" class=\"btn btn-outline-primary\">Primary</button>
          <button type=\"button\" class=\"btn btn-outline-secondary\">Secondary</button>
          <button type=\"button\" class=\"btn btn-outline-success\">Success</button>
          <button type=\"button\" class=\"btn btn-outline-info\">Info</button>
          <button type=\"button\" class=\"btn btn-outline-warning\">Warning</button>
          <button type=\"button\" class=\"btn btn-outline-danger\">Danger</button>
          <button type=\"button\" class=\"btn btn-outline-light\">Light</button>
          <button type=\"button\" class=\"btn btn-outline-dark\">Dark</button>
        </p>

        <div class=\"bs-component\">
          <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
            <button type=\"button\" class=\"btn btn-primary\">Primary</button>
            <div class=\"btn-group\" role=\"group\">
              <button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
              <div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
                <a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
                <a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
              </div>
            </div>
          </div>

          <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
            <button type=\"button\" class=\"btn btn-success\">Success</button>
            <div class=\"btn-group\" role=\"group\">
              <button id=\"btnGroupDrop2\" type=\"button\" class=\"btn btn-success dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
              <div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop2\">
                <a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
                <a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
              </div>
            </div>
          </div>

          <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
            <button type=\"button\" class=\"btn btn-info\">Info</button>
            <div class=\"btn-group\" role=\"group\">
              <button id=\"btnGroupDrop3\" type=\"button\" class=\"btn btn-info dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
              <div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop3\">
                <a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
                <a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
              </div>
            </div>
          </div>

          <div class=\"btn-group\" role=\"group\" aria-label=\"Button group with nested dropdown\">
            <button type=\"button\" class=\"btn btn-danger\">Danger</button>
            <div class=\"btn-group\" role=\"group\">
              <button id=\"btnGroupDrop4\" type=\"button\" class=\"btn btn-danger dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"></button>
              <div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop4\">
                <a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
                <a class=\"dropdown-item\" href=\"#\">Dropdown link</a>
              </div>
            </div>
          </div>
        </div>

        <div class=\"bs-component\">
          <button type=\"button\" class=\"btn btn-primary btn-lg\">Large button</button>
          <button type=\"button\" class=\"btn btn-primary\">Default button</button>
          <button type=\"button\" class=\"btn btn-primary btn-sm\">Small button</button>
        </div>
      </div>
      <div class=\"col-lg-5\">
        <div class=\"bs-component\">
          <div class=\"d-grid gap-2\">
            <button class=\"btn btn-lg btn-primary\" type=\"button\">Block button</button>
            <button class=\"btn btn-lg btn-primary\" type=\"button\">Block button</button>
          </div>
        </div>

        <div class=\"bs-component mb-3\">
          <div class=\"btn-group\" role=\"group\" aria-label=\"Basic checkbox toggle button group\">
            <input type=\"checkbox\" class=\"btn-check\" id=\"btncheck1\" checked autocomplete=\"off\">
            <label class=\"btn btn-primary\" for=\"btncheck1\">Checkbox 1</label>
            <input type=\"checkbox\" class=\"btn-check\" id=\"btncheck2\" autocomplete=\"off\">
            <label class=\"btn btn-primary\" for=\"btncheck2\">Checkbox 2</label>
            <input type=\"checkbox\" class=\"btn-check\" id=\"btncheck3\" autocomplete=\"off\">
            <label class=\"btn btn-primary\" for=\"btncheck3\">Checkbox 3</label>
          </div>
        </div>

        <div class=\"bs-component mb-3\">
          <div class=\"btn-group\" role=\"group\" aria-label=\"Basic radio toggle button group\">
            <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio1\" autocomplete=\"off\" checked>
            <label class=\"btn btn-outline-primary\" for=\"btnradio1\">Radio 1</label>
            <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio2\" autocomplete=\"off\" checked>
            <label class=\"btn btn-outline-primary\" for=\"btnradio2\">Radio 2</label>
            <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio3\" autocomplete=\"off\" checked>
            <label class=\"btn btn-outline-primary\" for=\"btnradio3\">Radio 3</label>
          </div>
        </div>

        <div class=\"bs-component\">
          <div class=\"btn-group-vertical\">
            <button type=\"button\" class=\"btn btn-primary\">Button</button>
            <button type=\"button\" class=\"btn btn-primary\">Button</button>
            <button type=\"button\" class=\"btn btn-primary\">Button</button>
            <button type=\"button\" class=\"btn btn-primary\">Button</button>
            <button type=\"button\" class=\"btn btn-primary\">Button</button>
            <button type=\"button\" class=\"btn btn-primary\">Button</button>
          </div>
        </div>

        <div class=\"bs-component mb-3\">
          <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
            <button type=\"button\" class=\"btn btn-secondary\">Left</button>
            <button type=\"button\" class=\"btn btn-secondary\">Middle</button>
            <button type=\"button\" class=\"btn btn-secondary\">Right</button>
          </div>
        </div>

        <div class=\"bs-component mb-3\">
          <div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
            <div class=\"btn-group me-2\" role=\"group\" aria-label=\"First group\">
              <button type=\"button\" class=\"btn btn-secondary\">1</button>
              <button type=\"button\" class=\"btn btn-secondary\">2</button>
              <button type=\"button\" class=\"btn btn-secondary\">3</button>
              <button type=\"button\" class=\"btn btn-secondary\">4</button>
            </div>
            <div class=\"btn-group me-2\" role=\"group\" aria-label=\"Second group\">
              <button type=\"button\" class=\"btn btn-secondary\">5</button>
              <button type=\"button\" class=\"btn btn-secondary\">6</button>
              <button type=\"button\" class=\"btn btn-secondary\">7</button>
            </div>
            <div class=\"btn-group\" role=\"group\" aria-label=\"Third group\">
              <button type=\"button\" class=\"btn btn-secondary\">8</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Typography
  ================================================== -->
  <div class=\"bs-docs-section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-header\">
          <h1 id=\"typography\">Typography</h1>
        </div>
      </div>
    </div>

    <!-- Headings -->

    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <h1>Heading 1</h1>
          <h2>Heading 2</h2>
          <h3>Heading 3</h3>
          <h4>Heading 4</h4>
          <h5>Heading 5</h5>
          <h6>Heading 6</h6>
          <h3>
            Heading
            <small class=\"text-muted\">with muted text</small>
          </h3>
          <p class=\"lead\">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <h2>Example body text</h2>
          <p>Nullam quis risus eget <a href=\"#\">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
          <p><small>This line of text is meant to be treated as fine print.</small></p>
          <p>The following is <strong>rendered as bold text</strong>.</p>
          <p>The following is <em>rendered as italicized text</em>.</p>
          <p>An abbreviation of the word attribute is <abbr title=\"attribute\">attr</abbr>.</p>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <h2>Emphasis classes</h2>
          <p class=\"text-muted\">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
          <p class=\"text-primary\">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p class=\"text-secondary\">Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
          <p class=\"text-warning\">Etiam porta sem malesuada magna mollis euismod.</p>
          <p class=\"text-danger\">Donec ullamcorper nulla non metus auctor fringilla.</p>
          <p class=\"text-success\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
          <p class=\"text-info\">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
      </div>
    </div>

    <!-- Blockquotes -->

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h2 id=\"type-blockquotes\">Blockquotes</h2>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <figure>
            <blockquote class=\"blockquote\">
              <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

            </blockquote>
            <figcaption class=\"blockquote-footer\">
              Someone famous in <cite title=\"Source Title\">Source Title</cite>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <figure class=\"text-center\">
            <blockquote class=\"blockquote\">
              <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

            </blockquote>
            <figcaption class=\"blockquote-footer\">
              Someone famous in <cite title=\"Source Title\">Source Title</cite>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <figure class=\"text-end\">
            <blockquote class=\"blockquote\">
              <p class=\"mb-0\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

            </blockquote>
            <figcaption class=\"blockquote-footer\">
              Someone famous in <cite title=\"Source Title\">Source Title</cite>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
  </div>

  <!-- Tables
  ================================================== -->
  <div class=\"bs-docs-section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-header\">
          <h1 id=\"tables\">Tables</h1>
        </div>

        <div class=\"bs-component\">
          <table class=\"table table-hover\">
            <thead>
            <tr>
              <th scope=\"col\">Type</th>
              <th scope=\"col\">Column heading</th>
              <th scope=\"col\">Column heading</th>
              <th scope=\"col\">Column heading</th>
            </tr>
            </thead>
            <tbody>
            <tr class=\"table-active\">
              <th scope=\"row\">Active</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr>
              <th scope=\"row\">Default</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class=\"table-primary\">
              <th scope=\"row\">Primary</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class=\"table-secondary\">
              <th scope=\"row\">Secondary</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class=\"table-success\">
              <th scope=\"row\">Success</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class=\"table-danger\">
              <th scope=\"row\">Danger</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class=\"table-warning\">
              <th scope=\"row\">Warning</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class=\"table-info\">
              <th scope=\"row\">Info</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class=\"table-light\">
              <th scope=\"row\">Light</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class=\"table-dark\">
              <th scope=\"row\">Dark</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            </tbody>
          </table>
        </div><!-- /example -->
      </div>
    </div>
  </div>

  <!-- Forms
  ================================================== -->
  <div class=\"bs-docs-section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-header\">
          <h1 id=\"forms\">Forms</h1>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-6\">
        <div class=\"bs-component\">
          <form>
            <fieldset>
              <legend>Legend</legend>
              <div class=\"form-group row\">
                <label for=\"staticEmail\" class=\"col-sm-2 col-form-label\">Email</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" readonly class=\"form-control-plaintext\" id=\"staticEmail\" value=\"email@example.com\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"exampleInputEmail1\" class=\"form-label mt-4\">Email address</label>
                <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
              </div>
              <div class=\"form-group\">
                <label for=\"exampleInputPassword1\" class=\"form-label mt-4\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
              </div>
              <div class=\"form-group\">
                <label for=\"exampleSelect1\" class=\"form-label mt-4\">Example select</label>
                <select class=\"form-select\" id=\"exampleSelect1\">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class=\"form-group\">
                <label for=\"exampleSelect2\" class=\"form-label mt-4\">Example multiple select</label>
                <select multiple class=\"form-select\" id=\"exampleSelect2\">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class=\"form-group\">
                <label for=\"exampleTextarea\" class=\"form-label mt-4\">Example textarea</label>
                <textarea class=\"form-control\" id=\"exampleTextarea\" rows=\"3\"></textarea>
              </div>
              <div class=\"form-group\">
                <label for=\"formFile\" class=\"form-label mt-4\">Default file input example</label>
                <input class=\"form-control\" type=\"file\" id=\"formFile\">
              </div>
              <fieldset class=\"form-group\">
                <legend class=\"mt-4\">Radio buttons</legend>
                <div class=\"form-check\">
                  <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>
                    Option one is this and that&mdash;be sure to include why it's great
                  </label>
                </div>
                <div class=\"form-check\">
                  <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
                    Option two can be something else and selecting it will deselect option one
                  </label>
                </div>
                <div class=\"form-check disabled\">
                  <label class=\"form-check-label\">
                    <input type=\"radio\" class=\"form-check-input\" name=\"optionsRadios\" id=\"optionsRadios3\" value=\"option3\" disabled>
                    Option three is disabled
                  </label>
                </div>
              </fieldset>
              <fieldset class=\"form-group\">
                <legend class=\"mt-4\">Checkboxes</legend>
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\">
                  <label class=\"form-check-label\" for=\"flexCheckDefault\">
                    Default checkbox
                  </label>
                </div>
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckChecked\" checked>
                  <label class=\"form-check-label\" for=\"flexCheckChecked\">
                    Checked checkbox
                  </label>
                </div>
              </fieldset>
              <fieldset>
                <legend class=\"mt-4\">Switches</legend>
                <div class=\"form-check form-switch\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckDefault\">
                  <label class=\"form-check-label\" for=\"flexSwitchCheckDefault\">Default switch checkbox input</label>
                </div>
                <div class=\"form-check form-switch\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"flexSwitchCheckChecked\" checked>
                  <label class=\"form-check-label\" for=\"flexSwitchCheckChecked\">Checked switch checkbox input</label>
                </div>
              </fieldset>
              <fieldset class=\"form-group\">
                <legend class=\"mt-4\">Ranges</legend>
                <label for=\"customRange1\" class=\"form-label\">Example range</label>
                <input type=\"range\" class=\"form-range\" id=\"customRange1\">
                <label for=\"disabledRange\" class=\"form-label\">Disabled range</label>
                <input type=\"range\" class=\"form-range\" id=\"disabledRange\" disabled>
                <label for=\"customRange3\" class=\"form-label\">Example range</label>
                <input type=\"range\" class=\"form-range\" min=\"0\" max=\"5\" step=\"0.5\" id=\"customRange3\">
              </fieldset>
              <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
            </fieldset>
          </form>
        </div>
      </div>
      <div class=\"col-lg-4 offset-lg-1\">
        <form class=\"bs-component\">
          <div class=\"form-group\">
            <fieldset disabled>
              <label class=\"form-label\" for=\"disabledInput\">Disabled input</label>
              <input class=\"form-control\" id=\"disabledInput\" type=\"text\" placeholder=\"Disabled input here...\" disabled>
            </fieldset>
          </div>

          <div class=\"form-group\">
            <fieldset>
              <label class=\"form-label mt-4\" for=\"readOnlyInput\">Readonly input</label>
              <input class=\"form-control\" id=\"readOnlyInput\" type=\"text\" placeholder=\"Readonly input here...\" readonly>
            </fieldset>
          </div>

          <div class=\"form-group has-success\">
            <label class=\"form-label mt-4\" for=\"inputValid\">Valid input</label>
            <input type=\"text\" value=\"correct value\" class=\"form-control is-valid\" id=\"inputValid\">
            <div class=\"valid-feedback\">Success! You've done it.</div>
          </div>

          <div class=\"form-group has-danger\">
            <label class=\"form-label mt-4\" for=\"inputInvalid\">Invalid input</label>
            <input type=\"text\" value=\"wrong value\" class=\"form-control is-invalid\" id=\"inputInvalid\">
            <div class=\"invalid-feedback\">Sorry, that username's taken. Try another?</div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-form-label col-form-label-lg mt-4\" for=\"inputLarge\">Large input</label>
            <input class=\"form-control form-control-lg\" type=\"text\" placeholder=\".form-control-lg\" id=\"inputLarge\">
          </div>

          <div class=\"form-group\">
            <label class=\"col-form-label mt-4\" for=\"inputDefault\">Default input</label>
            <input type=\"text\" class=\"form-control\" placeholder=\"Default input\" id=\"inputDefault\">
          </div>

          <div class=\"form-group\">
            <label class=\"col-form-label col-form-label-sm mt-4\" for=\"inputSmall\">Small input</label>
            <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\".form-control-sm\" id=\"inputSmall\">
          </div>

          <div class=\"form-group\">
            <label class=\"form-label mt-4\">Input addons</label>
            <div class=\"form-group\">
              <div class=\"input-group mb-3\">
                <span class=\"input-group-text\">\$</span>
                <input type=\"text\" class=\"form-control\" aria-label=\"Amount (to the nearest dollar)\">
                <span class=\"input-group-text\">.00</span>
              </div>
              <div class=\"input-group mb-3\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Recipient's username\" aria-label=\"Recipient's username\" aria-describedby=\"button-addon2\">
                <button class=\"btn btn-primary\" type=\"button\" id=\"button-addon2\">Button</button>
              </div>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"form-label mt-4\">Floating labels</label>
            <div class=\"form-floating mb-3\">
              <input type=\"email\" class=\"form-control\" id=\"floatingInput\" placeholder=\"name@example.com\">
              <label for=\"floatingInput\">Email address</label>
            </div>
            <div class=\"form-floating\">
              <input type=\"password\" class=\"form-control\" id=\"floatingPassword\" placeholder=\"Password\">
              <label for=\"floatingPassword\">Password</label>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>

  <!-- Navs
  ================================================== -->
  <div class=\"bs-docs-section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-header\">
          <h1 id=\"navs\">Navs</h1>
        </div>
      </div>
    </div>

    <div class=\"row mb-5\">
      <div class=\"col-lg-6\">
        <h2 id=\"nav-tabs\">Tabs</h2>
        <div class=\"bs-component\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#home\">Home</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#profile\">Profile</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
              <div class=\"dropdown-menu\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Separated link</a>
              </div>
            </li>
          </ul>
          <div id=\"myTabContent\" class=\"tab-content\">
            <div class=\"tab-pane fade show active\" id=\"home\">
              <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
            </div>
            <div class=\"tab-pane fade\" id=\"profile\">
              <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
            </div>
            <div class=\"tab-pane fade\" id=\"dropdown1\">
              <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
            </div>
            <div class=\"tab-pane fade\" id=\"dropdown2\">
              <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
            </div>
          </div>
        </div>
      </div>

      <div class=\"col-lg-6\">
        <h2 id=\"nav-pills\">Pills</h2>
        <div class=\"bs-component\">
          <ul class=\"nav nav-pills\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Active</a>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
              <div class=\"dropdown-menu\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Separated link</a>
              </div>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
          </ul>
        </div>
        <br>
        <div class=\"bs-component\">
          <ul class=\"nav nav-pills flex-column\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Active</a>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
              <div class=\"dropdown-menu\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Separated link</a>
              </div>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Link</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-6\">
        <h2 id=\"nav-breadcrumbs\">Breadcrumbs</h2>
        <div class=\"bs-component\">
          <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item active\">Home</li>
          </ol>
          <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item active\">Library</li>
          </ol>
          <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Library</a></li>
            <li class=\"breadcrumb-item active\">Data</li>
          </ol>
        </div>
      </div>

      <div class=\"col-lg-6\">
        <h2 id=\"pagination\">Pagination</h2>
        <div class=\"bs-component\">
          <div>
            <ul class=\"pagination\">
              <li class=\"page-item disabled\">
                <a class=\"page-link\" href=\"#\">&laquo;</a>
              </li>
              <li class=\"page-item active\">
                <a class=\"page-link\" href=\"#\">1</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">2</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">3</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">4</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">5</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">&raquo;</a>
              </li>
            </ul>
          </div>

          <div>
            <ul class=\"pagination pagination-lg\">
              <li class=\"page-item disabled\">
                <a class=\"page-link\" href=\"#\">&laquo;</a>
              </li>
              <li class=\"page-item active\">
                <a class=\"page-link\" href=\"#\">1</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">2</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">3</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">4</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">5</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">&raquo;</a>
              </li>
            </ul>
          </div>

          <div>
            <ul class=\"pagination pagination-sm\">
              <li class=\"page-item disabled\">
                <a class=\"page-link\" href=\"#\">&laquo;</a>
              </li>
              <li class=\"page-item active\">
                <a class=\"page-link\" href=\"#\">1</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">2</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">3</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">4</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">5</a>
              </li>
              <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">&raquo;</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Indicators
  ================================================== -->
  <div class=\"bs-docs-section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-header\">
          <h1 id=\"indicators\">Indicators</h1>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h2>Alerts</h2>
        <div class=\"bs-component\">
          <div class=\"alert alert-dismissible alert-warning\">
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            <h4 class=\"alert-heading\">Warning!</h4>
            <p class=\"mb-0\">Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href=\"#\" class=\"alert-link\">vel scelerisque nisl consectetur et</a>.</p>
          </div>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"alert alert-dismissible alert-danger\">
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            <strong>Oh snap!</strong> <a href=\"#\" class=\"alert-link\">Change a few things up</a> and try submitting again.
          </div>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"alert alert-dismissible alert-success\">
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            <strong>Well done!</strong> You successfully read <a href=\"#\" class=\"alert-link\">this important alert message</a>.
          </div>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"alert alert-dismissible alert-info\">
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            <strong>Heads up!</strong> This <a href=\"#\" class=\"alert-link\">alert needs your attention</a>, but it's not super important.
          </div>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"alert alert-dismissible alert-primary\">
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            <strong>Oh snap!</strong> <a href=\"#\" class=\"alert-link\">Change a few things up</a> and try submitting again.
          </div>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"alert alert-dismissible alert-secondary\">
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            <strong>Well done!</strong> You successfully read <a href=\"#\" class=\"alert-link\">this important alert message</a>.
          </div>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"alert alert-dismissible alert-light\">
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            <strong>Heads up!</strong> This <a href=\"#\" class=\"alert-link\">alert needs your attention</a>, but it's not super important.
          </div>
        </div>
      </div>
    </div>
    <div>
      <h2>Badges</h2>
      <div class=\"bs-component mb-4\">
        <span class=\"badge bg-primary\">Primary</span>
        <span class=\"badge bg-secondary\">Secondary</span>
        <span class=\"badge bg-success\">Success</span>
        <span class=\"badge bg-danger\">Danger</span>
        <span class=\"badge bg-warning\">Warning</span>
        <span class=\"badge bg-info\">Info</span>
        <span class=\"badge bg-light\">Light</span>
        <span class=\"badge bg-dark\">Dark</span>
      </div>
      <div class=\"bs-component\">
        <span class=\"badge rounded-pill bg-primary\">Primary</span>
        <span class=\"badge rounded-pill bg-secondary\">Secondary</span>
        <span class=\"badge rounded-pill bg-success\">Success</span>
        <span class=\"badge rounded-pill bg-danger\">Danger</span>
        <span class=\"badge rounded-pill bg-warning\">Warning</span>
        <span class=\"badge rounded-pill bg-info\">Info</span>
        <span class=\"badge rounded-pill bg-light\">Light</span>
        <span class=\"badge rounded-pill bg-dark\">Dark</span>
      </div>
    </div>
  </div>

  <!-- Progress
  ================================================== -->
  <div class=\"bs-docs-section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-header\">
          <h1 id=\"progress\">Progress</h1>
        </div>

        <h3 id=\"progress-basic\">Basic</h3>
        <div class=\"bs-component\">
          <div class=\"progress\">
            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 25%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
        </div>

        <h3 id=\"progress-alternatives\">Contextual alternatives</h3>
        <div class=\"bs-component\">
          <div class=\"progress\">
            <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 25%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress\">
            <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 50%;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress\">
            <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 75%;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress\">
            <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 100%;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
        </div>

        <h3 id=\"progress-multiple\">Multiple bars</h3>
        <div class=\"bs-component\">
          <div class=\"progress\">
            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 15%;\" aria-valuenow=\"15\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 30%;\" aria-valuenow=\"30\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
            <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 20%;\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
        </div>

        <h3 id=\"progress-striped\">Striped</h3>
        <div class=\"bs-component\">
          <div class=\"progress\">
            <div class=\"progress-bar progress-bar-striped\" role=\"progressbar\" style=\"width: 10%;\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress\">
            <div class=\"progress-bar progress-bar-striped bg-success\" role=\"progressbar\" style=\"width: 25%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress\">
            <div class=\"progress-bar progress-bar-striped bg-info\" role=\"progressbar\" style=\"width: 50%;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress\">
            <div class=\"progress-bar progress-bar-striped bg-warning\" role=\"progressbar\" style=\"width: 75%;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
          <div class=\"progress\">
            <div class=\"progress-bar progress-bar-striped bg-danger\" role=\"progressbar\" style=\"width: 100%;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
          </div>
        </div>

        <h3 id=\"progress-animated\">Animated</h3>
        <div class=\"bs-component\">
          <div class=\"progress\">
            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 75%;\"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Containers
  ================================================== -->
  <div class=\"bs-docs-section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-header\">
          <h1 id=\"containers\">Containers</h1>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h2>List groups</h2>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <ul class=\"list-group\">
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
              Cras justo odio
              <span class=\"badge bg-primary rounded-pill\">14</span>
            </li>
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
              Dapibus ac facilisis in
              <span class=\"badge bg-primary rounded-pill\">2</span>
            </li>
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
              Morbi leo risus
              <span class=\"badge bg-primary rounded-pill\">1</span>
            </li>
          </ul>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"list-group\">
            <a href=\"#\" class=\"list-group-item list-group-item-action active\">Cras justo odio</a>
            <a href=\"#\" class=\"list-group-item list-group-item-action\">Dapibus ac facilisis in</a>
            <a href=\"#\" class=\"list-group-item list-group-item-action disabled\">Morbi leo risus</a>
          </div>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"list-group\">
            <a href=\"#\" class=\"list-group-item list-group-item-action flex-column align-items-start active\">
              <div class=\"d-flex w-100 justify-content-between\">
                <h5 class=\"mb-1\">List group item heading</h5>
                <small>3 days ago</small>
              </div>
              <p class=\"mb-1\">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
              <small>Donec id elit non mi porta.</small>
            </a>
            <a href=\"#\" class=\"list-group-item list-group-item-action flex-column align-items-start\">
              <div class=\"d-flex w-100 justify-content-between\">
                <h5 class=\"mb-1\">List group item heading</h5>
                <small class=\"text-muted\">3 days ago</small>
              </div>
              <p class=\"mb-1\">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
              <small class=\"text-muted\">Donec id elit non mi porta.</small>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h2>Cards</h2>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Primary card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card text-white bg-secondary mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Secondary card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card text-white bg-success mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Success card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card text-white bg-danger mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Danger card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card text-white bg-warning mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Warning card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card text-white bg-info mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Info card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card bg-light mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Light card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card text-white bg-dark mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Dark card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"card border-primary mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Primary card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card border-secondary mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Secondary card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card border-success mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Success card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card border-danger mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Danger card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card border-warning mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Warning card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card border-info mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Info card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card border-light mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Light card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class=\"card border-dark mb-3\" style=\"max-width: 20rem;\">
            <div class=\"card-header\">Header</div>
            <div class=\"card-body\">
              <h4 class=\"card-title\">Dark card title</h4>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>

      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"card mb-3\">
            <h3 class=\"card-header\">Card header</h3>
            <div class=\"card-body\">
              <h5 class=\"card-title\">Special title treatment</h5>
              <h6 class=\"card-subtitle text-muted\">Support card subtitle</h6>
            </div>
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"d-block user-select-none\" width=\"100%\" height=\"200\" aria-label=\"Placeholder: Image cap\" focusable=\"false\" role=\"img\" preserveAspectRatio=\"xMidYMid slice\" viewBox=\"0 0 318 180\" style=\"font-size:1.125rem;text-anchor:middle\">
              <rect width=\"100%\" height=\"100%\" fill=\"#868e96\"></rect>
              <text x=\"50%\" y=\"50%\" fill=\"#dee2e6\" dy=\".3em\">Image cap</text>
            </svg>
            <div class=\"card-body\">
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class=\"list-group list-group-flush\">
              <li class=\"list-group-item\">Cras justo odio</li>
              <li class=\"list-group-item\">Dapibus ac facilisis in</li>
              <li class=\"list-group-item\">Vestibulum at eros</li>
            </ul>
            <div class=\"card-body\">
              <a href=\"#\" class=\"card-link\">Card link</a>
              <a href=\"#\" class=\"card-link\">Another link</a>
            </div>
            <div class=\"card-footer text-muted\">
              2 days ago
            </div>
          </div>
          <div class=\"card\">
            <div class=\"card-body\">
              <h4 class=\"card-title\">Card title</h4>
              <h6 class=\"card-subtitle mb-2 text-muted\">Card subtitle</h6>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href=\"#\" class=\"card-link\">Card link</a>
              <a href=\"#\" class=\"card-link\">Another link</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"row mt-5\">
      <div class=\"col-lg-12\">
        <h2>Accordions</h2>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-lg-4\">
        <div class=\"bs-component\">
          <div class=\"accordion\" id=\"accordionExample\">
            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\" id=\"headingOne\">
                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                  Accordion Item #1
                </button>
              </h2>
              <div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordionExample\">
                <div class=\"accordion-body\">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\" id=\"headingTwo\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                  Accordion Item #2
                </button>
              </h2>
              <div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#accordionExample\">
                <div class=\"accordion-body\">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class=\"accordion-item\">
              <h2 class=\"accordion-header\" id=\"headingThree\">
                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                  Accordion Item #3
                </button>
              </h2>
              <div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#accordionExample\">
                <div class=\"accordion-body\">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Dialogs
  ================================================== -->
  <div class=\"bs-docs-section\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-header\">
          <h1 id=\"dialogs\">Dialogs</h1>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-lg-6\">
        <h2>Modals</h2>
        <div class=\"bs-component\">
          <div class=\"modal\">
            <div class=\"modal-dialog\" role=\"document\">
              <div class=\"modal-content\">
                <div class=\"modal-header\">
                  <h5 class=\"modal-title\">Modal title</h5>
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\"></span>
                  </button>
                </div>
                <div class=\"modal-body\">
                  <p>Modal body text goes here.</p>
                </div>
                <div class=\"modal-footer\">
                  <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                  <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-lg-6\">
        <h2>Popovers</h2>
        <div class=\"bs-component mb-5\">
          <button type=\"button\" class=\"btn btn-secondary\" title=\"Popover Title\" data-bs-container=\"body\" data-bs-toggle=\"popover\" data-bs-placement=\"left\" data-bs-content=\"Vivamus sagittis lacus vel augue laoreet rutrum faucibus.\">Left</button>

          <button type=\"button\" class=\"btn btn-secondary\" title=\"Popover Title\" data-bs-container=\"body\" data-bs-toggle=\"popover\" data-bs-placement=\"top\" data-bs-content=\"Vivamus sagittis lacus vel augue laoreet rutrum faucibus.\">Top</button>

          <button type=\"button\" class=\"btn btn-secondary\" title=\"Popover Title\" data-bs-container=\"body\" data-bs-toggle=\"popover\" data-bs-placement=\"bottom\" data-bs-content=\"Vivamus sagittis lacus vel augue laoreet rutrum faucibus.\">Bottom</button>

          <button type=\"button\" class=\"btn btn-secondary\" title=\"Popover Title\" data-bs-container=\"body\" data-bs-toggle=\"popover\" data-bs-placement=\"right\" data-bs-content=\"Vivamus sagittis lacus vel augue laoreet rutrum faucibus.\">Right</button>
        </div>
        <h2>Tooltips</h2>
        <div class=\"bs-component mb-5\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"Tooltip on left\">Left</button>

          <button type=\"button\" class=\"btn btn-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Tooltip on top\">Top</button>

          <button type=\"button\" class=\"btn btn-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Tooltip on bottom\">Bottom</button>

          <button type=\"button\" class=\"btn btn-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" title=\"Tooltip on right\">Right</button>
        </div>
        <h2>Toasts</h2>
        <div class=\"bs-component\">
          <div class=\"toast show\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
            <div class=\"toast-header\">
              <strong class=\"me-auto\">Bootstrap</strong>
              <small>11 mins ago</small>
              <button type=\"button\" class=\"btn-close ms-2 mb-1\" data-bs-dismiss=\"toast\" aria-label=\"Close\">
                <span aria-hidden=\"true\"></span>
              </button>
            </div>
            <div class=\"toast-body\">
              Hello, world! This is a toast message.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id=\"source-modal\" class=\"modal fade\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-lg\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h4 class=\"modal-title\">Source Code</h4>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-hidden=\"true\"></button>
        </div>
        <div class=\"modal-body\">
          <pre class=\"language-html\"><code></code></pre>
        </div>
      </div>
    </div>
  </div>

  <footer id=\"footer\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <ul class=\"list-unstyled\">
          <li class=\"float-end\"><a href=\"#top\">Back to top</a></li>
          <li><a href=\"https://blog.bootswatch.com/\">Blog</a></li>
          <li><a href=\"https://blog.bootswatch.com/rss/\">RSS</a></li>
          <li><a href=\"https://twitter.com/bootswatch\">Twitter</a></li>
          <li><a href=\"https://github.com/thomaspark/bootswatch\">GitHub</a></li>
          <li><a href=\"../help/#api\">API</a></li>
          <li><a href=\"../help/#donate\">Donate</a></li>
        </ul>
        <p>Made by <a href=\"https://thomaspark.co/\">Thomas Park</a>.</p>
        <p>Code released under the <a href=\"https://github.com/thomaspark/bootswatch/blob/master/LICENSE\">MIT License</a>.</p>
        <p>Based on <a href=\"https://getbootstrap.com/\" rel=\"nofollow\">Bootstrap</a>. Icons from <a href=\"https://fontawesome.com/\" rel=\"nofollow\">Font Awesome</a>. Web fonts from <a href=\"https://fonts.google.com/\" rel=\"nofollow\">Google</a>.</p>

      </div>
    </div>
  </footer>
</div>

<script src=\"../_vendor/jquery/dist/jquery.min.js\"></script>
<script src=\"../_vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"../_vendor/prismjs/prism.js\" data-manual></script>
<script src=\"../_assets/js/custom.js\"></script>
</body>
{% endblock %}
</html>
", "base.html.twig", "/var/www/html/templates/base.html.twig");
    }
}

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
class __TwigTemplate_fe38410478b35e5517b3a13a9356d6690879b7aa461ec2ed2c6177d47fbef6a0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        echo "<!DOCTYPE html>
<html>
  <head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo "  </head>

  <body class=\"h-100 bg-light\">
    <header class=\"container-fluid bg-light\">
      <div class=\"text-center d-none d-md-block\">
        <img
          src=\"/assets/banniere.jpg\"
          class=\"img-fluid w-50  \"
          alt=\"Banniere du site A-KA\"
        />
      </div>

      <div class=\"text-center d-md-none d-lg-none d-xl-none\">
      <img
        src=\"/assets/banniere.jpg\"
        class=\"img-fluid   \"
        alt=\"Banniere du site A-KA\"
      />
    </div>
      <div class=\"text-center border-top border-secondary row\">
        <div class=\"border-end border-secondary col-3\">
          <a class=\"badge text-dark\" href=\"/\">A-KA</a>
        </div>
        <div class=\"border-end border-secondary col-3\">
          <a class=\"badge text-dark\" href=\"/galerie\">Galerie</a>
        </div>
        <div class=\"border-end border-secondary col-3\">
          <a class=\"badge text-dark\" href=\"/about\">A propos</a>
        </div>
        <div class=\"border-end border-secondary col-3\">
          <a class=\"badge text-dark\" href=\"/contact\">Contact</a>
        </div>
      </div>
      <!-- <nav
        class=\"
          navbar navbar-expand-lg navbar-light
          bg-light
          border-top border-secondary
        \"
      >
        <div class=\"container-fluid\">
          <div class=\"collapse navbar-collapse\"></div>
          <a class=\"navbar-brand\" href=\"/\">A-KA</a>
          <button
            class=\"navbar-toggler\"
            type=\"button\"
            data-bs-toggle=\"collapse\"
            data-bs-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\"
            aria-expanded=\"false\"
            aria-label=\"Toggle navigation\"
          >
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
              <li class=\"nav-item\">
                <a class=\"nav-link border-secondary\" href=\"/galerie\">Galerie</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/about\">A Propos</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/contact\">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> -->
    </header>
    ";
        // line 99
        $this->displayBlock('body', $context, $blocks);
        // line 104
        echo "
    <div class=\"row text-center m-4\">
      <div class=\"col\">
        <a href=\"https://www.twitch.tv/aartka\"
          ><img
            style=\"width: 50px; height: 50px\"
            src=\"/assets/insta.png\"
            alt=\"\"
        /></a>
      </div>
      <div class=\"col\">
        <a href=\"https://www.twitch.tv/aartka\"
          ><img
            style=\"width: 50px; height: 50px\"
            src=\"/assets/twitch.png\"
            alt=\"\"
        /></a>
      </div>
    </div>
    <footer class=\"container.fluid bg-dark text-light fixed-bottom\">
      <div class=\"container text-center\">
        <p class=\"fs-6 fw-light text-muted m-0\">
          Website produced by Jonathan Cohen at
          <a href=\"https://phanios.fr/\">Phanios</a>
        </p>
      </div>
    </footer>
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    <meta charset=\"UTF-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"
    />
    <meta name=\"description\" content=\"A-KA Site d'illustrations, cours de dessin, commande et plus encore\">
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 13
        echo " ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "A-KA Illustrations ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "    <link rel=\"stylesheet\" href=\"/assets/style.css\" />
    <link
      href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css\"
      rel=\"stylesheet\"
      integrity=\"sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We\"
      crossorigin=\"anonymous\"
    />
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "    <script
      src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js\"
      integrity=\"sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj\"
      crossorigin=\"anonymous\"
    ></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 100
        echo "
    <!-- Bootstrap bundle -->

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
        return array (  287 => 100,  277 => 99,  262 => 23,  252 => 22,  235 => 15,  225 => 13,  206 => 11,  196 => 28,  193 => 22,  190 => 13,  186 => 11,  178 => 5,  168 => 4,  129 => 104,  127 => 99,  55 => 29,  53 => 4,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    {% block head %}
    <meta charset=\"UTF-8\" />
    <meta
      name=\"viewport\"
      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"
    />
    <meta name=\"description\" content=\"A-KA Site d'illustrations, cours de dessin, commande et plus encore\">
    <title>{% block title %}A-KA Illustrations {% endblock %}</title>
    {# Run `composer require symfony/webpack-encore-bundle` and uncomment the
    following Encore helpers to start using Symfony UX #} {% block stylesheets
    %}
    <link rel=\"stylesheet\" href=\"/assets/style.css\" />
    <link
      href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css\"
      rel=\"stylesheet\"
      integrity=\"sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We\"
      crossorigin=\"anonymous\"
    />
    {% endblock %} {% block javascripts %}
    <script
      src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js\"
      integrity=\"sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj\"
      crossorigin=\"anonymous\"
    ></script>
    {% endblock %} {% endblock %}
  </head>

  <body class=\"h-100 bg-light\">
    <header class=\"container-fluid bg-light\">
      <div class=\"text-center d-none d-md-block\">
        <img
          src=\"/assets/banniere.jpg\"
          class=\"img-fluid w-50  \"
          alt=\"Banniere du site A-KA\"
        />
      </div>

      <div class=\"text-center d-md-none d-lg-none d-xl-none\">
      <img
        src=\"/assets/banniere.jpg\"
        class=\"img-fluid   \"
        alt=\"Banniere du site A-KA\"
      />
    </div>
      <div class=\"text-center border-top border-secondary row\">
        <div class=\"border-end border-secondary col-3\">
          <a class=\"badge text-dark\" href=\"/\">A-KA</a>
        </div>
        <div class=\"border-end border-secondary col-3\">
          <a class=\"badge text-dark\" href=\"/galerie\">Galerie</a>
        </div>
        <div class=\"border-end border-secondary col-3\">
          <a class=\"badge text-dark\" href=\"/about\">A propos</a>
        </div>
        <div class=\"border-end border-secondary col-3\">
          <a class=\"badge text-dark\" href=\"/contact\">Contact</a>
        </div>
      </div>
      <!-- <nav
        class=\"
          navbar navbar-expand-lg navbar-light
          bg-light
          border-top border-secondary
        \"
      >
        <div class=\"container-fluid\">
          <div class=\"collapse navbar-collapse\"></div>
          <a class=\"navbar-brand\" href=\"/\">A-KA</a>
          <button
            class=\"navbar-toggler\"
            type=\"button\"
            data-bs-toggle=\"collapse\"
            data-bs-target=\"#navbarSupportedContent\"
            aria-controls=\"navbarSupportedContent\"
            aria-expanded=\"false\"
            aria-label=\"Toggle navigation\"
          >
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
              <li class=\"nav-item\">
                <a class=\"nav-link border-secondary\" href=\"/galerie\">Galerie</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/about\">A Propos</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/contact\">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> -->
    </header>
    {% block body %}

    <!-- Bootstrap bundle -->

    {% endblock %}

    <div class=\"row text-center m-4\">
      <div class=\"col\">
        <a href=\"https://www.twitch.tv/aartka\"
          ><img
            style=\"width: 50px; height: 50px\"
            src=\"/assets/insta.png\"
            alt=\"\"
        /></a>
      </div>
      <div class=\"col\">
        <a href=\"https://www.twitch.tv/aartka\"
          ><img
            style=\"width: 50px; height: 50px\"
            src=\"/assets/twitch.png\"
            alt=\"\"
        /></a>
      </div>
    </div>
    <footer class=\"container.fluid bg-dark text-light fixed-bottom\">
      <div class=\"container text-center\">
        <p class=\"fs-6 fw-light text-muted m-0\">
          Website produced by Jonathan Cohen at
          <a href=\"https://phanios.fr/\">Phanios</a>
        </p>
      </div>
    </footer>
  </body>
</html>
", "base.html.twig", "C:\\MAMP\\aka\\aka\\templates\\base.html.twig");
    }
}

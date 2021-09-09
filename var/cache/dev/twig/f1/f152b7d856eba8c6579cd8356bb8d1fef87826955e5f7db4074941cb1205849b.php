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

/* home/index.html.twig */
class __TwigTemplate_a39ef177e1667d404b442d61711ddf2b6f06e06584dc2177e4f47cd10b7b2912 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<style>
\t@media only screen and (max-width: 600px) {
    .img-caroussel {
      max-width: 90%;
      height: auto;
    }
  }

  @media only screen and (min-width: 600px) {
    .img-caroussel {
      max-width: 90%;
      height: auto;
    }
  }

  @media only screen and (min-width: 992px) {
    .img-caroussel {
      max-width: 90%;
      height: auto;
    }
  }

  @media only screen and (min-width: 1200px) {
  }
  .img-caroussel {
    max-width: 60%;
    height: auto;
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    height: 41px;
    width: 41px;
    outline: black;
    background-size: 100%, 100%;
    background-color: white;
    border-radius: 50%;
    border: 1px solid black;
    background-image: none;
  }

  .carousel-control-next-icon:after {
    content: \">\";
    font-size: 22px;
    font-weight: bold;
    color: black;
  }

  .carousel-control-prev-icon:after {
    content: \"<\";
    font-size: 22px;
    font-weight: bold;
    color: black;
  }
</style>
\t<div class=\"container-fluid bg-light pt-5\">
\t\t<div class=\"container\">
\t\t\t<div id=\"carouselExampleInterval\" class=\"carousel slide mb-5\" data-bs-ride=\"carousel\">
\t\t\t\t<div class=\"carousel-inner text-center\">
\t\t\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["i"] => $context["image"]) {
            // line 65
            echo "\t\t\t\t\t\t<div class='carousel-item ";
            echo (((0 === twig_compare($context["i"], 0))) ? ("active") : (""));
            echo "'>
\t\t\t\t\t\t\t<img src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["image"], "url", [], "any", false, false, false, 66)), "html", null, true);
            echo "\" class=\"img-fluid img-caroussel\" alt=\"Images\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
\t\t\t\t</div>
\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleInterval\" data-bs-slide=\"prev\">
\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t</button>
\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleInterval\" data-bs-slide=\"next\">
\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 69,  138 => 66,  133 => 65,  129 => 64,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
\t<style>
\t@media only screen and (max-width: 600px) {
    .img-caroussel {
      max-width: 90%;
      height: auto;
    }
  }

  @media only screen and (min-width: 600px) {
    .img-caroussel {
      max-width: 90%;
      height: auto;
    }
  }

  @media only screen and (min-width: 992px) {
    .img-caroussel {
      max-width: 90%;
      height: auto;
    }
  }

  @media only screen and (min-width: 1200px) {
  }
  .img-caroussel {
    max-width: 60%;
    height: auto;
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    height: 41px;
    width: 41px;
    outline: black;
    background-size: 100%, 100%;
    background-color: white;
    border-radius: 50%;
    border: 1px solid black;
    background-image: none;
  }

  .carousel-control-next-icon:after {
    content: \">\";
    font-size: 22px;
    font-weight: bold;
    color: black;
  }

  .carousel-control-prev-icon:after {
    content: \"<\";
    font-size: 22px;
    font-weight: bold;
    color: black;
  }
</style>
\t<div class=\"container-fluid bg-light pt-5\">
\t\t<div class=\"container\">
\t\t\t<div id=\"carouselExampleInterval\" class=\"carousel slide mb-5\" data-bs-ride=\"carousel\">
\t\t\t\t<div class=\"carousel-inner text-center\">
\t\t\t\t\t{% for i,image in images %}
\t\t\t\t\t\t<div class='carousel-item {{ i == 0 ? \"active\" }}'>
\t\t\t\t\t\t\t<img src=\"{{ asset(image.url) }}\" class=\"img-fluid img-caroussel\" alt=\"Images\">
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}

\t\t\t\t</div>
\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleInterval\" data-bs-slide=\"prev\">
\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t</button>
\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleInterval\" data-bs-slide=\"next\">
\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "home/index.html.twig", "C:\\MAMP\\aka\\aka\\templates\\home\\index.html.twig");
    }
}

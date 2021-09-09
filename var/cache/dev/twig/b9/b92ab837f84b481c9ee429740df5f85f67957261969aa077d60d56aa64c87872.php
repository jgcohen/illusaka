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

/* girls/index.html.twig */
class __TwigTemplate_6e95871c9644bbe2c4a43e95b5af162923a1ce7380bce3a83f10c1aa0c1202ac extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "girls/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "girls/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "girls/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello GirlsController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<style>
\t\t @media only screen and (max-width: 600px) {
  .img-galerie {
    width: 100px;
    height: 100px;
    object-fit: cover;
  }
}
  @media only screen and (min-width: 600px) {
  .img-galerie {
    width: 200px;
    height: 200px;
    object-fit: cover;
  }
}
  @media only screen and (min-width:  992px) {
  .img-galerie {
    width: 200px;
    height: 200px;
    object-fit: cover;
  }
}

  @media only screen and (min-width:  1200px) {
  .img-galerie {
    width: 350px;
    height: 350px;
    object-fit: cover;
  }

 
}
\t</style>

<div class=\"container-fluid bg-light\">
  <div class=\"container\">
\t<div class=\"row m-2\">

   <div class=\"col-2\"></div>
    <div class=\"col-2\">
\t\t<a class=\"badge text-dark\" href=\"/girls\">Girls</a>
    \t</div>
      <div class=\"col-2\">
\t\t<a class=\"badge text-dark\" href=\"/tutos\">Tutos</a>
    \t</div>
      <div class=\"col-2\">
\t\t<a class=\"badge text-dark\" href=\"/strips\">Strips</a>
    \t</div>
    <div class=\"col-2\">
\t\t<a class=\"badge text-dark\" href=\"/midgard\">Midgard</a>
    \t</div>
      <div class=\"col-2\"></div>


\t</div>
\t<div class=\"row\">
\t\t";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["i"] => $context["image"]) {
            // line 64
            echo "\t\t\t<div class=\"col-4\">
\t\t\t\t<a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("illustration", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">  <img
          src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["image"], "url", [], "any", false, false, false, 66)), "html", null, true);
            echo "\"
          class=\" img-galerie mb-3\"
          alt=\"Images\"
        /></a> 
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 72, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig");
        echo "
\t</div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "girls/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 72,  157 => 66,  153 => 65,  150 => 64,  146 => 63,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello GirlsController!{% endblock %}


{% block body %}
\t<style>
\t\t @media only screen and (max-width: 600px) {
  .img-galerie {
    width: 100px;
    height: 100px;
    object-fit: cover;
  }
}
  @media only screen and (min-width: 600px) {
  .img-galerie {
    width: 200px;
    height: 200px;
    object-fit: cover;
  }
}
  @media only screen and (min-width:  992px) {
  .img-galerie {
    width: 200px;
    height: 200px;
    object-fit: cover;
  }
}

  @media only screen and (min-width:  1200px) {
  .img-galerie {
    width: 350px;
    height: 350px;
    object-fit: cover;
  }

 
}
\t</style>

<div class=\"container-fluid bg-light\">
  <div class=\"container\">
\t<div class=\"row m-2\">

   <div class=\"col-2\"></div>
    <div class=\"col-2\">
\t\t<a class=\"badge text-dark\" href=\"/girls\">Girls</a>
    \t</div>
      <div class=\"col-2\">
\t\t<a class=\"badge text-dark\" href=\"/tutos\">Tutos</a>
    \t</div>
      <div class=\"col-2\">
\t\t<a class=\"badge text-dark\" href=\"/strips\">Strips</a>
    \t</div>
    <div class=\"col-2\">
\t\t<a class=\"badge text-dark\" href=\"/midgard\">Midgard</a>
    \t</div>
      <div class=\"col-2\"></div>


\t</div>
\t<div class=\"row\">
\t\t{% for i,image in images %}
\t\t\t<div class=\"col-4\">
\t\t\t\t<a href=\"{{path('illustration',{id:image.id})}}\">  <img
          src=\"{{ asset(image.url) }}\"
          class=\" img-galerie mb-3\"
          alt=\"Images\"
        /></a> 
\t\t\t</div>
\t\t{% endfor %}
    {{knp_pagination_render(images, '@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig')}}
\t</div>
  </div>
</div>
{% endblock %}
", "girls/index.html.twig", "C:\\MAMP\\aka\\aka\\templates\\girls\\index.html.twig");
    }
}

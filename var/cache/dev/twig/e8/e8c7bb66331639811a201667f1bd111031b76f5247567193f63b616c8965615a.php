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

/* galerie/index.html.twig */
class __TwigTemplate_a320e8652390adda3a05ac23d3a2d832bc42bc471e4a1d4a15330a634b008545 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "galerie/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "galerie/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "galerie/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie - A-KA";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<style>
  @media only screen and (max-width: 600px) {
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

</style>


    <div class=\"container-fluid bg-light\">
      <div class=\"container\">
      <div class=\"row m-2\">
    
       <div class=\"col-2\"></div>
        <div class=\"col-2\">
        <a class=\"badge text-dark\" href=\"/girls\">Girls</a>
          </div>
          <div class=\"col-2\">
        <a class=\"badge text-dark\" href=\"/tutos\">Tutos</a>
          </div>
          <div class=\"col-2\">
        <a class=\"badge text-dark\" href=\"/strips\">Strips</a>
          </div>
        <div class=\"col-2\">
        <a class=\"badge text-dark\" href=\"/midgard\">Midgard</a>
          </div>
          <div class=\"col-2\"></div>
    </div>
    <div class=\"row\">
      ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["i"] => $context["image"]) {
            // line 60
            echo "      <div class=\"col-4\">
     <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("illustration", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">  <img
          src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["image"], "url", [], "any", false, false, false, 62)), "html", null, true);
            echo "\"
          class=\" img-galerie mb-3\"
          alt=\"Images\"
        /></a> 
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "      ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 68, $this->source); })()), "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig");
        echo "
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "galerie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 68,  156 => 62,  152 => 61,  149 => 60,  145 => 59,  87 => 3,  77 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %}Galerie - A-KA{%
endblock %} {% block body %}
<style>
  @media only screen and (max-width: 600px) {
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

</style>


    <div class=\"container-fluid bg-light\">
      <div class=\"container\">
      <div class=\"row m-2\">
    
       <div class=\"col-2\"></div>
        <div class=\"col-2\">
        <a class=\"badge text-dark\" href=\"/girls\">Girls</a>
          </div>
          <div class=\"col-2\">
        <a class=\"badge text-dark\" href=\"/tutos\">Tutos</a>
          </div>
          <div class=\"col-2\">
        <a class=\"badge text-dark\" href=\"/strips\">Strips</a>
          </div>
        <div class=\"col-2\">
        <a class=\"badge text-dark\" href=\"/midgard\">Midgard</a>
          </div>
          <div class=\"col-2\"></div>
    </div>
    <div class=\"row\">
      {% for i,image in images %}
      <div class=\"col-4\">
     <a href=\"{{path('illustration',{id:image.id})}}\">  <img
          src=\"{{ asset(image.url) }}\"
          class=\" img-galerie mb-3\"
          alt=\"Images\"
        /></a> 
      </div>
      {% endfor %}
      {{knp_pagination_render(images, '@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig')}}
    </div>
  </div>
</div>
{% endblock %}
", "galerie/index.html.twig", "C:\\MAMP\\aka\\aka\\templates\\galerie\\index.html.twig");
    }
}

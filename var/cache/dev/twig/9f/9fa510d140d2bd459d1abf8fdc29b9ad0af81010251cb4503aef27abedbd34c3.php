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

/* galerie/image.html.twig */
class __TwigTemplate_29a9fd1f67dce3fdb5b74c4999ddb63cb55b8aa014e24f498af98650cb498022 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "galerie/image.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "galerie/image.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "galerie/image.html.twig", 1);
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

        echo "Hello GalerieController!";
        
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
    
     
        <img
          src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 62, $this->source); })()), "url", [], "any", false, false, false, 62)), "html", null, true);
        echo "\"
          class=\" img-galerie mb-3\"
          alt=\"Images\"
        />
     
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "galerie/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 62,  87 => 3,  77 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %}Hello GalerieController!{%
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
    
     
        <img
          src=\"{{ asset(image.url) }}\"
          class=\" img-galerie mb-3\"
          alt=\"Images\"
        />
     
    </div>
  </div>
</div>
{% endblock %}
", "galerie/image.html.twig", "C:\\MAMP\\aka\\aka\\templates\\galerie\\image.html.twig");
    }
}

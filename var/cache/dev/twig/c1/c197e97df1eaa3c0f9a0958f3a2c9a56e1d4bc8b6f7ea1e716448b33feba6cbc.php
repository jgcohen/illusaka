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

/* single/image.html.twig */
class __TwigTemplate_354e030b2849d8298e37c91cfc9b5d566bdf70b810ffe1fcdf80df13581849d3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "single/image.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "single/image.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "single/image.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello GalerieController!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<style>
\t\t@media only screen and(max-width: 600px) {
\t\t\t.img-galerie {
\t\t\t\twidth: 100px;
\t\t\t\theight: 100px;
\t\t\t\tobject-fit: cover;
\t\t\t}
\t\t}
\t\t@media only screen and(min-width: 600px) {
\t\t\t.img-galerie {
\t\t\t\twidth: 200px;
\t\t\t\theight: 200px;
\t\t\t\tobject-fit: cover;
\t\t\t}
\t\t}
\t\t@media only screen and(min-width: 992px) {
\t\t\t.img-galerie {
\t\t\t\twidth: 200px;
\t\t\t\theight: 200px;
\t\t\t\tobject-fit: cover;
\t\t\t}
\t\t}

\t\t@media only screen and(min-width: 1200px) {
\t\t\t.img-galerie {
\t\t\t\twidth: 350px;
\t\t\t\theight: 350px;
\t\t\t\tobject-fit: cover;
\t\t\t}


\t\t}
\t</style>


\t<div class=\"container-fluid bg-light\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row m-2\">

\t\t\t\t<div class=\"col-2\"></div>
\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t<a class=\"badge text-dark\" href=\"/girls\">Girls</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t<a class=\"badge text-dark\" href=\"/tutos\">Tutos</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t<a class=\"badge text-dark\" href=\"/strips\">Strips</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t<a class=\"badge text-dark\" href=\"/midgard\">Midgard</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-2\"></div>
\t\t\t</div>
\t\t\t<div class=\"row \">
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 62, $this->source); })()), "url", [], "any", false, false, false, 62)), "html", null, true);
        echo "\" class=\" img-fluid\" alt=\"Images\"/>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "single/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 62,  89 => 6,  79 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Hello GalerieController!
{%
endblock %}
{% block body %}
\t<style>
\t\t@media only screen and(max-width: 600px) {
\t\t\t.img-galerie {
\t\t\t\twidth: 100px;
\t\t\t\theight: 100px;
\t\t\t\tobject-fit: cover;
\t\t\t}
\t\t}
\t\t@media only screen and(min-width: 600px) {
\t\t\t.img-galerie {
\t\t\t\twidth: 200px;
\t\t\t\theight: 200px;
\t\t\t\tobject-fit: cover;
\t\t\t}
\t\t}
\t\t@media only screen and(min-width: 992px) {
\t\t\t.img-galerie {
\t\t\t\twidth: 200px;
\t\t\t\theight: 200px;
\t\t\t\tobject-fit: cover;
\t\t\t}
\t\t}

\t\t@media only screen and(min-width: 1200px) {
\t\t\t.img-galerie {
\t\t\t\twidth: 350px;
\t\t\t\theight: 350px;
\t\t\t\tobject-fit: cover;
\t\t\t}


\t\t}
\t</style>


\t<div class=\"container-fluid bg-light\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row m-2\">

\t\t\t\t<div class=\"col-2\"></div>
\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t<a class=\"badge text-dark\" href=\"/girls\">Girls</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t<a class=\"badge text-dark\" href=\"/tutos\">Tutos</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t<a class=\"badge text-dark\" href=\"/strips\">Strips</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t<a class=\"badge text-dark\" href=\"/midgard\">Midgard</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-2\"></div>
\t\t\t</div>
\t\t\t<div class=\"row \">
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<img src=\"{{ asset(image.url) }}\" class=\" img-fluid\" alt=\"Images\"/>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "single/image.html.twig", "C:\\MAMP\\aka\\aka\\templates\\single\\image.html.twig");
    }
}

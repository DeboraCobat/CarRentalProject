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

/* findmyreservation.html.twig */
class __TwigTemplate_e40cb8cb2acf53896cb16fe7c997d66e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("master.html.twig", "findmyreservation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "find my reservation";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container\">
  <div class=\"row justify-content-center mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-6\">
    
      <h1>Find my reservation</h1>
      <form action=\"/findmyreservation/";
        // line 11
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["reservationId"] ?? null), "html", null, true);
        echo "\" method=\"post\">
        <div class=\"form-group\">
          <label for=\"email\">Email</label>
          <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\" required>
        </div>
        <div class=\"form-group\">
          <label for=\"reservation-id\">Reservation ID</label>
          <input type=\"number\" class=\"form-control\" id=\"reservation-id\" name=\"reservationId\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["reservationId"] ?? null), "html", null, true);
        echo "\" required>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Find Reservation</button>
      </form>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "findmyreservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  73 => 14,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}find my reservation{% endblock %}

{% block content %}
<div class=\"container\">
  <div class=\"row justify-content-center mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-6\">
    
      <h1>Find my reservation</h1>
      <form action=\"/findmyreservation/{{ email }}/{{ reservationId }}\" method=\"post\">
        <div class=\"form-group\">
          <label for=\"email\">Email</label>
          <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" value=\"{{ email }}\" required>
        </div>
        <div class=\"form-group\">
          <label for=\"reservation-id\">Reservation ID</label>
          <input type=\"number\" class=\"form-control\" id=\"reservation-id\" name=\"reservationId\" value=\"{{ reservationId }}\" required>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Find Reservation</button>
      </form>
    </div>
  </div>
</div>
{% endblock %}
", "findmyreservation.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\findmyreservation.html.twig");
    }
}

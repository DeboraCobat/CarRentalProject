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

/* customerprofile.html.twig */
class __TwigTemplate_bb8f4bf7eaed962c3198f33cde7b1258 extends Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "customerprofile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Customer Dashboard";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<style>
ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
</style>
<div class=\"container mt-4\">
  <div class=\"row justify-content-left\">
    <div class=\"col-md-10 col-lg-12\">
      <h1>Your Profile</h1>
      <hr class=\"my-4\">
      <ul class=\"no-bullets\">
        <li><strong>Name:</strong> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "first_name", [], "any", false, false, false, 19), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "last_name", [], "any", false, false, false, 19), "html", null, true);
        echo "</li>
        <li><strong>Email:</strong> ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "</li>
        <li><strong>Phone:</strong> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "phone", [], "any", false, false, false, 21), "html", null, true);
        echo "</li>
        <li><strong>Address:</strong> ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "address", [], "any", false, false, false, 22), "html", null, true);
        echo "</li>
        <li><strong>Date of Birth:</strong> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "dob", [], "any", false, false, false, 23), "html", null, true);
        echo "</li>
        <!--
        <li><strong>Driver's License:</strong> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "license", [], "any", false, false, false, 25), "html", null, true);
        echo "</li>
        <li><strong>License Expiration:</strong> ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "license_expiration", [], "any", false, false, false, 26), "html", null, true);
        echo "</li>
        -->
      </ul>
  
      <div class=\"mt-3\">
        <a href=\"/customerprofileedit\" class=\"btn btn-primary btn-sm\">Edit Profile</a>
        <a href=\"/myreservation\" class=\"btn btn-secondary btn-sm\">My Reservations</a>
      </div>
    </div>
  </div>
</div>
";
        // line 37
        if (array_key_exists("successMessage", $context)) {
            // line 38
            echo "    <div class=\"success-message\">";
            echo twig_escape_filter($this->env, ($context["successMessage"] ?? null), "html", null, true);
            echo "</div>
";
        }
        // line 40
        echo "
";
        // line 41
        if (array_key_exists("errorMessage", $context)) {
            // line 42
            echo "    <div class=\"error-message\">";
            echo twig_escape_filter($this->env, ($context["errorMessage"] ?? null), "html", null, true);
            echo "</div>
";
        }
        // line 44
        echo "
";
    }

    public function getTemplateName()
    {
        return "customerprofile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 44,  127 => 42,  125 => 41,  122 => 40,  116 => 38,  114 => 37,  100 => 26,  96 => 25,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  73 => 19,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Customer Dashboard{% endblock %}

{% block content %}
<style>
ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
</style>
<div class=\"container mt-4\">
  <div class=\"row justify-content-left\">
    <div class=\"col-md-10 col-lg-12\">
      <h1>Your Profile</h1>
      <hr class=\"my-4\">
      <ul class=\"no-bullets\">
        <li><strong>Name:</strong> {{ userSession.first_name }} {{ userSession.last_name }}</li>
        <li><strong>Email:</strong> {{ userSession.email }}</li>
        <li><strong>Phone:</strong> {{ userSession.phone }}</li>
        <li><strong>Address:</strong> {{ userSession.address }}</li>
        <li><strong>Date of Birth:</strong> {{ userSession.dob }}</li>
        <!--
        <li><strong>Driver's License:</strong> {{ userSession.license }}</li>
        <li><strong>License Expiration:</strong> {{ userSession.license_expiration }}</li>
        -->
      </ul>
  
      <div class=\"mt-3\">
        <a href=\"/customerprofileedit\" class=\"btn btn-primary btn-sm\">Edit Profile</a>
        <a href=\"/myreservation\" class=\"btn btn-secondary btn-sm\">My Reservations</a>
      </div>
    </div>
  </div>
</div>
{% if successMessage is defined %}
    <div class=\"success-message\">{{ successMessage }}</div>
{% endif %}

{% if errorMessage is defined %}
    <div class=\"error-message\">{{ errorMessage }}</div>
{% endif %}

{% endblock %}", "customerprofile.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/customerprofile.html.twig");
    }
}

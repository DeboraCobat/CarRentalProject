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
        echo "
  <h1>Your Profile</h1>

  <div class=\"container\">
    <div class=\"row justify-content-center mt-5 mb-5\">
      <div class=\"col-md-8 col-lg-6\">

        <div class=\"table-responsive\">
          <ul>
            <li><strong>Name</strong></li>
            <li><strong>Email</strong></li>
            <li><strong>Phone</strong></li>
            <li><strong>Address</strong></li>
            <li><strong>Date of Birth</strong></li>
            <li><strong>Driver's License</strong></li>
            <li><strong>License Expiration</strong></li>
            <li>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "first_name", [], "any", false, false, false, 22), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "last_name", [], "any", false, false, false, 22), "html", null, true);
        echo "</li>
            <li>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "email", [], "any", false, false, false, 23), "html", null, true);
        echo "</li>
            <li>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "phone", [], "any", false, false, false, 24), "html", null, true);
        echo "</li>
            <li>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "address", [], "any", false, false, false, 25), "html", null, true);
        echo "</li>
            <li>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "dob", [], "any", false, false, false, 26), "html", null, true);
        echo "</li>
            <li>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "license", [], "any", false, false, false, 27), "html", null, true);
        echo "</li>
            <li>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "license_expiration", [], "any", false, false, false, 28), "html", null, true);
        echo "</li>
            ";
        // line 38
        echo "          </ul>
        </div>

      </div>
    </div>
  </div>
  
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
        return array (  106 => 38,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  76 => 22,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Customer Dashboard{% endblock %}

{% block content %}

  <h1>Your Profile</h1>

  <div class=\"container\">
    <div class=\"row justify-content-center mt-5 mb-5\">
      <div class=\"col-md-8 col-lg-6\">

        <div class=\"table-responsive\">
          <ul>
            <li><strong>Name</strong></li>
            <li><strong>Email</strong></li>
            <li><strong>Phone</strong></li>
            <li><strong>Address</strong></li>
            <li><strong>Date of Birth</strong></li>
            <li><strong>Driver's License</strong></li>
            <li><strong>License Expiration</strong></li>
            <li>{{ userSession.first_name }} {{ userSession.last_name }}</li>
            <li>{{ userSession.email }}</li>
            <li>{{ userSession.phone }}</li>
            <li>{{ userSession.address }}</li>
            <li>{{ userSession.dob }}</li>
            <li>{{ userSession.license }}</li>
            <li>{{ userSession.license_expiration }}</li>
            {# {% for user in users %}
              <li>{{ user.first_name }} {{ user.last_name }}</li>
              <li>{{ user.email }}</li>
              <li>{{ user.phone }}</li>
              <li>{{ user.address }}</li>
              <li>{{ user.dob }}</li>
              <li>{{ user.license }}</li>
              <li>{{ user.license_expiration }}</li>
            {% endfor %} #}
          </ul>
        </div>

      </div>
    </div>
  </div>
  
{% endblock %}
", "customerprofile.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/customerprofile.html.twig");
    }
}

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

  <h1>All Users</h1>

  <div class=\"table-responsive\">
    <ul>
      <li><strong>Name</strong></li>
      <li><strong>Email</strong></li>
      <li><strong>Phone</strong></li>
      <li><strong>Address</strong></li>
      <li><strong>Date of Birth</strong></li>
      <li><strong>Driver's License</strong></li>
      <li><strong>License Expiration</strong></li>
      ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 25
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "first_name", [], "any", false, false, false, 25), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "last_name", [], "any", false, false, false, 25), "html", null, true);
            echo "</li>
        <li>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 26), "html", null, true);
            echo "</li>
        <li>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 27), "html", null, true);
            echo "</li>
        <li>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "address", [], "any", false, false, false, 28), "html", null, true);
            echo "</li>
        <li>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "dob", [], "any", false, false, false, 29), "html", null, true);
            echo "</li>
        <li>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "license", [], "any", false, false, false, 30), "html", null, true);
            echo "</li>
        <li>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "license_expiration", [], "any", false, false, false, 31), "html", null, true);
            echo "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "      </ul>
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
        return array (  117 => 33,  109 => 31,  105 => 30,  101 => 29,  97 => 28,  93 => 27,  89 => 26,  82 => 25,  78 => 24,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
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

  <h1>All Users</h1>

  <div class=\"table-responsive\">
    <ul>
      <li><strong>Name</strong></li>
      <li><strong>Email</strong></li>
      <li><strong>Phone</strong></li>
      <li><strong>Address</strong></li>
      <li><strong>Date of Birth</strong></li>
      <li><strong>Driver's License</strong></li>
      <li><strong>License Expiration</strong></li>
      {% for user in users %}
        <li>{{ user.first_name }} {{ user.last_name }}</li>
        <li>{{ user.email }}</li>
        <li>{{ user.phone }}</li>
        <li>{{ user.address }}</li>
        <li>{{ user.dob }}</li>
        <li>{{ user.license }}</li>
        <li>{{ user.license_expiration }}</li>
      {% endfor %}
      </ul>
  </div>
  
{% endblock %}
", "customerprofile.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/customerprofile.html.twig");
    }
}

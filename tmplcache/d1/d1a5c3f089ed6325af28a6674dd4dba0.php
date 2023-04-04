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

/* admin/userslist.html.twig */
class __TwigTemplate_0a991f11bff5d4a325d627a5c7e8c6c6 extends Template
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
        return "admin/adminmaster.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/adminmaster.html.twig", "admin/userslist.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "All Users";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container\">
  <div class=\"row justify-content-left mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-6\">
    
  <h1>All Users</h1>
<div class=\"table-responsive\">
  <table class=\"table table-bordered table-striped\">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Date of Birth</th>
        <th>Driver's License</th>
        <th>License Expiration</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "        <tr>
          <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "first_name", [], "any", false, false, false, 27), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "last_name", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
          <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
          <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
          <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "address", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
          <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "dob", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
          <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "license", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
          <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "license_expiration", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </tbody>
  </table>
</div>
<div class=\"mt-4\">
  <button class=\"btn btn-primary btn-sm\" onclick=\"location.href='adduser'\">Add User</button>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/userslist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 36,  112 => 33,  108 => 32,  104 => 31,  100 => 30,  96 => 29,  92 => 28,  86 => 27,  83 => 26,  79 => 25,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/adminmaster.html.twig\" %}

{% block title %}All Users{% endblock %}

{% block content %}
<div class=\"container\">
  <div class=\"row justify-content-left mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-6\">
    
  <h1>All Users</h1>
<div class=\"table-responsive\">
  <table class=\"table table-bordered table-striped\">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Date of Birth</th>
        <th>Driver's License</th>
        <th>License Expiration</th>
      </tr>
    </thead>
    <tbody>
      {% for user in users %}
        <tr>
          <td>{{ user.first_name }} {{ user.last_name }}</td>
          <td>{{ user.email }}</td>
          <td>{{ user.phone }}</td>
          <td>{{ user.address }}</td>
          <td>{{ user.dob }}</td>
          <td>{{ user.license }}</td>
          <td>{{ user.license_expiration }}</td>
        </tr>
      {% endfor %}
    </tbody>
  </table>
</div>
<div class=\"mt-4\">
  <button class=\"btn btn-primary btn-sm\" onclick=\"location.href='adduser'\">Add User</button>
</div>
{% endblock %}
", "admin/userslist.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\admin\\userslist.html.twig");
    }
}

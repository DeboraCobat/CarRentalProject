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
class __TwigTemplate_778d4faf7a7199e0ff9776df5c10231a extends Template
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
    <div class=\"col-md-8 col-lg-12\">
    
  <h1>All Users</h1>
<div class=\"table-responsive\">
  <table class=\"table table-bordered table-striped\">
      <button class=\"btn btn-primary btn-sm\" onclick=\"location.href='adduser'\">Add a new user</button></br>

    <thead></br>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Date of Birth</th>
        ";
        // line 24
        echo "      </tr>
    </thead>
    <tbody>
      ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 28
            echo "        <tr>
          <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "first_name", [], "any", false, false, false, 29), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "last_name", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
          <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
          <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
          <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "address", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
          <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "dob", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
          ";
            // line 36
            echo "          <td><a href=\"/admin/edituser/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\" class=\"btn btn-secondary btn-sm\">Edit</a></td>
          <td><a href=\"/admin/deleteuser/";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm\">Delete</a></td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </tbody>
  </table>
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
        return array (  124 => 40,  115 => 37,  110 => 36,  106 => 33,  102 => 32,  98 => 31,  94 => 30,  88 => 29,  85 => 28,  81 => 27,  76 => 24,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/adminmaster.html.twig\" %}

{% block title %}All Users{% endblock %}

{% block content %}
<div class=\"container\">
  <div class=\"row justify-content-left mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-12\">
    
  <h1>All Users</h1>
<div class=\"table-responsive\">
  <table class=\"table table-bordered table-striped\">
      <button class=\"btn btn-primary btn-sm\" onclick=\"location.href='adduser'\">Add a new user</button></br>

    <thead></br>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Date of Birth</th>
        {# <th>Driver's License</th>
        <th>License Expiration</th> #}
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
          {# <td>{{ user.license }}</td>
          <td>{{ user.license_expiration }}</td> #}
          <td><a href=\"/admin/edituser/{{ user.id }}\" class=\"btn btn-secondary btn-sm\">Edit</a></td>
          <td><a href=\"/admin/deleteuser/{{ user.id }}\" class=\"btn btn-danger btn-sm\">Delete</a></td>
        </tr>
      {% endfor %}
    </tbody>
  </table>
</div>
{% endblock %}
", "admin/userslist.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/admin/userslist.html.twig");
    }
}

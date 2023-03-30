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
        // line 2
        return "admin/master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/master.html.twig", "admin/userslist.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "All Users";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "  <h1>All Users</h1>
  <table class=\"listTable\">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Driver's License</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "        <tr>
          <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
          <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
          <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
          <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "address", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
          <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "drivers_license", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </tbody>
  </table> </br>
  <button class=\"btn\" onclick=\"location.href='adduser'\">Add User</button></br>
  </div></br>

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
        return array (  105 => 29,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  80 => 22,  77 => 21,  73 => 20,  58 => 7,  54 => 6,  47 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"admin/master.html.twig\" %}

{% block title %}All Users{% endblock %}

{% block content %}
  <h1>All Users</h1>
  <table class=\"listTable\">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Driver's License</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      {% for user in users %}
        <tr>
          <td>{{ user.name }}</td>
          <td>{{ user.email }}</td>
          <td>{{ user.phone }}</td>
          <td>{{ user.address }}</td>
          <td>{{ user.drivers_license }}</td>
        </tr>
      {% endfor %}
    </tbody>
  </table> </br>
  <button class=\"btn\" onclick=\"location.href='adduser'\">Add User</button></br>
  </div></br>

{% endblock %}", "admin/userslist.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\admin\\userslist.html.twig");
    }
}

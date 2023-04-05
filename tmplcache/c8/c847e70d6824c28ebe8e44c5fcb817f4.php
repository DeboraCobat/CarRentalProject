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

/* admin/edituser.html.twig */
class __TwigTemplate_3c21da038cb70601e3ae44be676206ba extends Template
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
        $this->parent = $this->loadTemplate("admin/adminmaster.html.twig", "admin/edituser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Udpdating Users";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"container\">
  <div class=\"row justify-content-left mt-5 mb-5\">
    <div class=\"col-md-12 col-lg-12\">
    
  <h1>Edit a User</h1></br>
  <form method=\"POST\" action=\"/admin/edituser/";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
    <label for=\"name\">First Name:</label>
    <input type=\"text\" name=\"name\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "first_name", [], "any", false, false, false, 14), "html", null, true);
        echo "\" required><br><br>
    <label for=\"name\">Last Name:</label>
    <input type=\"text\" name=\"name\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "last_name", [], "any", false, false, false, 16), "html", null, true);
        echo "\" required><br><br>
    <label for=\"email\">Email:</label>
    <input type=\"email\" name=\"email\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 18), "html", null, true);
        echo "\" required><br><br>
    <label for=\"phone\">Phone:</label>
    <input type=\"tel\" name=\"phone\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 20), "html", null, true);
        echo "\" required><br><br>
    <label for=\"address\">Address:</label>
    <input type=\"text\" name=\"address\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "address", [], "any", false, false, false, 22), "html", null, true);
        echo "\" required><br><br>
    <label for=\"dob\">Date of Birth:</label>
    <input type=\"date\" name=\"dob\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "dob", [], "any", false, false, false, 24), "html", null, true);
        echo "\" required><br><br>
    ";
        // line 29
        echo "    <input type=\"submit\" value=\"Update\">
  </form>
  </br>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/edituser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  96 => 24,  91 => 22,  86 => 20,  81 => 18,  76 => 16,  71 => 14,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/adminmaster.html.twig\" %}

{% block title %}Udpdating Users{% endblock %}

{% block content %}

<div class=\"container\">
  <div class=\"row justify-content-left mt-5 mb-5\">
    <div class=\"col-md-12 col-lg-12\">
    
  <h1>Edit a User</h1></br>
  <form method=\"POST\" action=\"/admin/edituser/{{ user.id }}\">
    <label for=\"name\">First Name:</label>
    <input type=\"text\" name=\"name\" value=\"{{ user.first_name }}\" required><br><br>
    <label for=\"name\">Last Name:</label>
    <input type=\"text\" name=\"name\" value=\"{{ user.last_name }}\" required><br><br>
    <label for=\"email\">Email:</label>
    <input type=\"email\" name=\"email\" value=\"{{ user.email }}\" required><br><br>
    <label for=\"phone\">Phone:</label>
    <input type=\"tel\" name=\"phone\" value=\"{{ user.phone }}\" required><br><br>
    <label for=\"address\">Address:</label>
    <input type=\"text\" name=\"address\" value=\"{{ user.address }}\" required><br><br>
    <label for=\"dob\">Date of Birth:</label>
    <input type=\"date\" name=\"dob\" value=\"{{ user.dob }}\" required><br><br>
    {# <label for=\"drivers_license\">Driver's License:</label>
    <input type=\"text\" name=\"drivers_license\" value=\"{{ user.drivers_license }}\" required><br><br>
    <label for=\"license_expiration\">License Expiration:</label>
    <input type=\"date\" name=\"license_expiration\" value=\"{{ user.license_expiration }}\" required><br><br> #}
    <input type=\"submit\" value=\"Update\">
  </form>
  </br>
</div>
{% endblock %}

", "admin/edituser.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\admin\\edituser.html.twig");
    }
}

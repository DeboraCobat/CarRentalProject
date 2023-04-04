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

/* admin/deleteuser.html.twig */
class __TwigTemplate_2c33d308d807b0352df91cec02e71b9d extends Template
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
        $this->parent = $this->loadTemplate("admin/adminmaster.html.twig", "admin/deleteuser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Delete User";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"container\">
  <div class=\"row justify-content-left mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-6\">
    <p>Are you sure you want to delete the following user?</p>
    <p><strong>ID:</strong> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
    <p><strong>Full Name:</strong> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "first_name", [], "any", false, false, false, 12), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "last_name", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
    </p>
    <form method=\"post\" action=\"/admin/deleteuser/";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
      <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
    </form>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/deleteuser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  69 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/adminmaster.html.twig\" %}

{% block title %}Delete User{% endblock %}

{% block content %}

<div class=\"container\">
  <div class=\"row justify-content-left mt-5 mb-5\">
    <div class=\"col-md-8 col-lg-6\">
    <p>Are you sure you want to delete the following user?</p>
    <p><strong>ID:</strong> {{ user.id }}</p>
    <p><strong>Full Name:</strong> {{ user.first_name }} {{ user.last_name }}</p>
    </p>
    <form method=\"post\" action=\"/admin/deleteuser/{{ user.id }}\">
      <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
    </form>
  </div>
</div>
{% endblock %}", "admin/deleteuser.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\admin\\deleteuser.html.twig");
    }
}

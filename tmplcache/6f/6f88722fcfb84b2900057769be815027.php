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

/* logout.html.twig */
class __TwigTemplate_224a093aac6abe30072de894623f0b13 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("master.html.twig", "logout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"container mt-4\">
\t\t\t<div class=\"row justify-content-left\">
\t\t\t\t<div class=\"col-md-10 col-lg-12\">
\t<h1>Logout</h1></br>
\t<p>You have successfully logged out.</p></br></br></br>
\t<a href=\"";
        // line 9
        echo "/";
        echo "\" class=\"btn btn-primary btn-sm\">Back to Main Page</a>
";
    }

    public function getTemplateName()
    {
        return "logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block content %}
<div class=\"container mt-4\">
\t\t\t<div class=\"row justify-content-left\">
\t\t\t\t<div class=\"col-md-10 col-lg-12\">
\t<h1>Logout</h1></br>
\t<p>You have successfully logged out.</p></br></br></br>
\t<a href=\"{{ '/' }}\" class=\"btn btn-primary btn-sm\">Back to Main Page</a>
{% endblock %}
", "logout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/logout.html.twig");
    }
}

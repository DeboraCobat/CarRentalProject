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

/* forgotpassword.html.twig */
class __TwigTemplate_758f80a4993c1adc8ac6828bc7504940 extends Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "forgotpassword.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Forgot Password Page";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container\">
        <div class=\"row justify-content-center mt-5 mb-5\">
            <div class=\"col-md-8 col-lg-6\">
                <div class=\"form-group\">
                    <form method=\"post\" action=\"/forgotpassword\">
                        <label for=\"email\">Email address:</label>
                        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\"> </br>
                        <button type=\"submit\" class=\"btn btn-primary\">Send reset link</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forgotpassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Forgot Password Page{% endblock %}

{% block content %}
    <div class=\"container\">
        <div class=\"row justify-content-center mt-5 mb-5\">
            <div class=\"col-md-8 col-lg-6\">
                <div class=\"form-group\">
                    <form method=\"post\" action=\"/forgotpassword\">
                        <label for=\"email\">Email address:</label>
                        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\"> </br>
                        <button type=\"submit\" class=\"btn btn-primary\">Send reset link</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

", "forgotpassword.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/carrentalproject/templates/forgotpassword.html.twig");
    }
}

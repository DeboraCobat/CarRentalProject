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

/* addperson.html.twig */
class __TwigTemplate_0d949e4a52be6a1608fbc47db1c4cd36 extends Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "addperson.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
";
        // line 5
        if (($context["errorList"] ?? null)) {
            // line 6
            echo "    <ul>
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 8
                echo "        <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </ul>
";
        }
        // line 12
        echo "
<form method=\"post\">
    Name: <input type=\"text\" name=\"name\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "\"><br>
    Age: <input type=\"number\" name=\"age\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "age", [], "any", false, false, false, 15), "html", null, true);
        echo "\"><br>
    <input type=\"submit\" value=\"Add person\">
</form>

";
    }

    public function getTemplateName()
    {
        return "addperson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 15,  79 => 14,  75 => 12,  71 => 10,  62 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block content %}

{% if errorList %}
    <ul>
    {% for error in errorList %}
        <li>{{ error }}</li>
    {% endfor %}
    </ul>
{% endif %}

<form method=\"post\">
    Name: <input type=\"text\" name=\"name\" value=\"{{ v.name }}\"><br>
    Age: <input type=\"number\" name=\"age\" value=\"{{ v.age }}\"><br>
    <input type=\"submit\" value=\"Add person\">
</form>

{% endblock content %}", "addperson.html.twig", "C:\\xampp\\htdocs\\CarRentalProject\\templates\\addperson.html.twig");
    }
}

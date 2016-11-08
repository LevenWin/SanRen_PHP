<?php

/* index.html */
class __TwigTemplate_1284d512a838fdbcb0e80102625f611378f9d3521d2e06a73261ee539139855f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "index.html", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 style=\"text-align: center;display: block;padding: 10px;border: dashed 1px #aaaaaa;background-color: #aaaaaa;color: white;\">这是视图文件</h1>
    <h3 style=\"background-color: #4288CE;text-align: center ;color: white;display: block;padding: 10px;\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "</h3>


";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"layout.html\" %}
{% block content %}
    <h1 style=\"text-align: center;display: block;padding: 10px;border: dashed 1px #aaaaaa;background-color: #aaaaaa;color: white;\">这是视图文件</h1>
    <h3 style=\"background-color: #4288CE;text-align: center ;color: white;display: block;padding: 10px;\">{{data}}</h3>


{% endblock %}";
    }
}

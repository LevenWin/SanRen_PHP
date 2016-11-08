<?php

/* index.html */
class __TwigTemplate_1284d512a838fdbcb0e80102625f611378f9d3521d2e06a73261ee539139855f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1 style=\"text-align: center;display: block;padding: 10px;border: dashed 1px #aaaaaa;background-color: #aaaaaa;color: white;\">这是视图文件</h1>
<h3 style=\"background-color: #4288CE;text-align: center ;color: white;display: block;padding: 10px\">";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "</h3>";
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
        return array (  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<h1 style=\"text-align: center;display: block;padding: 10px;border: dashed 1px #aaaaaa;background-color: #aaaaaa;color: white;\">这是视图文件</h1>
<h3 style=\"background-color: #4288CE;text-align: center ;color: white;display: block;padding: 10px\">{{data}}</h3>";
    }
}

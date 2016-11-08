<?php

/* index.html */
class __TwigTemplate_b40712852935cad16bae37b19081a48d0e907be09632158e6be5a3d28fbcbfac extends Twig_Template
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
<h3><?php echo \$data;?></h3>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}

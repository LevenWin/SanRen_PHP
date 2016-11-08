<?php

/* layout.html */
class __TwigTemplate_9b0ae589e59520f11ea0b2e967c7df6ba2beb841cbf79e4d07886e8747160c21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
    <link href=\"./css/test.css\" rel=\"stylesheet\" type=\"text/css\">
    <style>
        #header-div,#footer-div{
            padding: 10px;
            text-align: center;
            color: white;
            background-color: dimgray;
            font-size: 20px;
            position: relative;

        }

    </style>
</head>

    <body>

        <div id=\"header-div\" style=\"\">我的动态</div>
        <content>

            ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "
        </content>
        <div id=\"footer-div\">@liuwen</div>

    </body>


</html>";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  60 => 24,  57 => 23,  46 => 26,  44 => 23,  20 => 1,);
    }

    public function getSource()
    {
        return "<html>
<head>
    <link href=\"./css/test.css\" rel=\"stylesheet\" type=\"text/css\">
    <style>
        #header-div,#footer-div{
            padding: 10px;
            text-align: center;
            color: white;
            background-color: dimgray;
            font-size: 20px;
            position: relative;

        }

    </style>
</head>

    <body>

        <div id=\"header-div\" style=\"\">我的动态</div>
        <content>

            {% block content %}

            {% endblock%}

        </content>
        <div id=\"footer-div\">@liuwen</div>

    </body>


</html>";
    }
}

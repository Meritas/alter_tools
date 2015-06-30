<?php

/* base.html.twig */
class __TwigTemplate_25a3ec61fe529054125f740a7334d0dc60962a55279a82e64d08fba745cd09a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html ng-app=\"app\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
    ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"css/angular-bootstrap/bootstrap.css\" />
            <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"css/style.css\" />
        ";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "        <h2>Village</h2>
    ";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        // line 16
        echo "        <script src=\"js/angular/angular.js\"></script>
        <script src=\"js/angular/angular-messages.js\"></script>
        <script src=\"js/angular/angular-ui-router.js\"></script>
        <script src=\"js/angular/angular-ui-bootstrap.js\"></script>
        <script src=\"js/game/api/application.js\"></script>
        <script src=\"js/game/api/controllers.js\"></script>
        <script src=\"js/game/api/directives.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  73 => 15,  68 => 13,  65 => 12,  59 => 7,  56 => 6,  50 => 5,  44 => 24,  41 => 15,  39 => 12,  35 => 10,  33 => 6,  29 => 5,  23 => 1,);
    }
}

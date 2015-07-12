<?php

/* PalmeAnnaleBundle::acceuil.html.twig */
class __TwigTemplate_df076eb2a00d67bcc6a1f921fa0ca62c78784d4d39558db5dc8bfd74f57e2e7a extends Twig_Template
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>


        <div class=\"row\">


            <div class=\"container bg-primary\">SALUT LES AMIS </div>
        </div>

        <div class=\"row\">

            <div class=\"container col-md-2\">
                Premier


                <form>
                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail1\">Email address</label>
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputFile\">File input</label>
                        <input type=\"file\" id=\"exampleInputFile\">
                        <p class=\"help-block\">Example block-level help text here.</p>
                    </div>
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\"> Check me out
                        </label>
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                </form>
            </div>



                <div class=\"container col-md-2 col-md-offset-1\">
                    Deuxieme


                <form>
                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail1\">Email address</label>
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputFile\">File input</label>
                        <input type=\"file\" id=\"exampleInputFile\">
                        <p class=\"help-block\">Example block-level help text here.</p>
                    </div>
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\"> Check me out
                        </label>
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                </form>
                </div>
        </div>
        ";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 80
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
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PalmeAnnaleBundle::acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 79,  133 => 78,  128 => 7,  125 => 6,  119 => 5,  113 => 80,  110 => 79,  108 => 78,  35 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }
}

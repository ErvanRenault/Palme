<?php

/* PalmeAnnaleBundle::acceuil.html.twig */
class __TwigTemplate_df076eb2a00d67bcc6a1f921fa0ca62c78784d4d39558db5dc8bfd74f57e2e7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_include($this->env, $context, "PalmeAnnaleBundle::header.html.twig");
        echo "
<h3><ul class=\"nav nav-tabs\">
        <li role=\"presentation\" class=\"active\" ><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("palme_annale_homepage");
        echo "\">Acceuil</a></li>
    <li role=\"presentation\"><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("palme_annale_enseignant");
        echo "\">Enseignant</a></li>
    <li role=\"presentation\"><a href=\"#\">Etudiant</a></li>
  </ul>
</h3>







  ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
    }

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
        return array (  43 => 15,  29 => 4,  25 => 3,  20 => 1,);
    }
}

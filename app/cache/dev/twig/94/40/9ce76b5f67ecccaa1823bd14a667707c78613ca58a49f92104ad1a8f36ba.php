<?php

/* ::nav.html.twig */
class __TwigTemplate_94409ce76b5f67ecccaa1823bd14a667707c78613ca58a49f92104ad1a8f36ba extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default\" role=\"navigation\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Ged Franprix</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("acme_ged_homepage");
        echo "\"><i class=\"fa fa-home\"></i>  Accueil</a></li>
                <li class=\"active\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("acme_ged_homepage");
        echo "\"><i class=\"fa fa-briefcase\"></i>  Portefeuille</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Actions <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action 1</a></li>
                        <li><a href=\"#\">Action 2</a></li>
                        <li><a href=\"#\">Action 3</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Action 4</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Action 5</a></li>
                    </ul>
                </li>
            </ul>
            <form class=\"navbar-form navbar-left\" role=\"search\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Recherche\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\">Envoyer</button>
            </form>
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Sofiane <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Mon compte</a></li>
                        <li><a href=\"#\">Paramètres</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Déconnexion</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>";
    }

    public function getTemplateName()
    {
        return "::nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 18,  37 => 17,  19 => 1,);
    }
}

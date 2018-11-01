<?php

/* base.html.twig */
class __TwigTemplate_98a5a19d8fa527190cd33c7d4120d1d62f5e6750ca4e7eb5f7fd23733bcdeb39 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt-BR\">
<head>
\t<meta charset=\"utf-8\" />
\t<meta name=\"description\" content=\"Fique por dentro das manchetes dos grandes portais em tempo real.\">
\t<meta http-equiv=\"refresh\" content=\"60\">
\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<link rel=\"shortcut icon\" href=\"img/bbc.ico\" />
\t<link rel=\"stylesheet\" href=\"css/bootstrap.css\" />
\t<link rel=\"stylesheet\" href=\"css/bootswatch.min.css\" />
\t<link rel=\"stylesheet\" href=\"css/style.css\" />
\t<script src=\"https://code.jquery.com/jquery-1.10.2.min.js\"></script>
\t<script type=\"text/javascript\" src=\"js/jquery.expander.min.js\"></script>
\t<script type=\"text/javascript\" src=\"js/expandir.js\"></script>
</head>
<body>
\t<div id=\"wrap\">
\t\t<div class=\"navbar navbar-default navbar-fixed-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<a href=\"../\" class=\"navbar-brand\"></a>
\t\t\t\t\t<button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-main\">
\t\t\t\t\t\t<span class=\"icon-bar\"></span> 
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"navbar-collapse collapse\" id=\"navbar-main\">
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li><a href=\"uol\">UOL</a></li>
\t\t\t\t\t\t<li><a href=\"terra\">Terra</a></li>
\t\t\t\t\t\t<li><a href=\"g1\">G1</a></li>
\t\t\t\t\t\t<li><a href=\"r7\">R7</a></li>\t\t\t\t\t\t
\t\t\t\t\t\t<li><a href=\"ig\">IG</a></li>
\t\t\t\t\t\t<li><a href=\"folha\">Folha de S.Paulo</a></li>
\t\t\t\t\t\t<li class=\"active\"><a href=\"abril\">BBC Brasil</a></li>
\t\t\t\t\t\t<li><a href=\"estadao\">Estadão</a></li>
\t\t\t\t\t\t<li><a href=\"yahoo\">Yahoo Notícias</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>\t\t\t
\t\t</div>
\t\t<div class=\"container\">

\t\t";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        echo "\t\t

\t\t</div>\t\t
\t\t<footer class=\"alt-footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t<li class=\"pull-right\"><a href=\"#top\">Ir para o topo</a></li>
\t\t\t\t\t\t<li>Fique por dentro das manchetes dos grandes portais.</li>
\t\t\t\t\t</ul>\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</div>
\t<script type=\"text/javascript\" src=\"js/bootstrap.min.js\"></script>
\t<script type=\"text/javascript\" src=\"js/analytics.js\"></script>
</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  101 => 45,  96 => 7,  74 => 45,  33 => 7,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\workspace\\feed_noticias\\templates\\base.html.twig");
    }
}

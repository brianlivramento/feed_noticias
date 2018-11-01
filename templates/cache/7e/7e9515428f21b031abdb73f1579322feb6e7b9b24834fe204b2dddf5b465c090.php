<?php

/* midias/midia.html.twig */
class __TwigTemplate_03a3cf83433b8f0397c68bd37e0419b833f71a010771c9754bb84b4f2c48b43e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "midias/midia.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"row\">\t\t\t\t
\t<div id=\"myTabContent\" class=\"col-lg-9 tab-content\">
\t\t<div id=\"principal\" class=\"tab-pane fade active in\">
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"noticia\">
\t\t\t\t\t<div class=\"titulo\">
\t\t\t\t\t\t<h3 class=\"in\"></h3>
\t\t\t\t\t</div>\t\t
\t\t\t\t\t<div class=\"descricao\">
\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t<a href=\"\" class=\"btn btn-default btn-xs pull-right\" target=\"_blank\">Leia mais</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"barra\"></div>
\t\t\t</div>\t
\t\t</div>
\t\t<div id=\"politica\" class=\"tab-pane fade\">
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"noticia\">
\t\t\t\t\t<div class=\"titulo\">
\t\t\t\t\t\t<h3 class=\"in\"></h3>
\t\t\t\t\t</div>\t\t
\t\t\t\t\t<div class=\"descricao\">
\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t<a href=\"\" class=\"btn btn-default btn-xs pull-right\" target=\"_blank\">Leia mais</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"barra\"></div>
\t\t\t</div>\t\t\t\t
\t\t</div>\t
\t\t<div id=\"economia\" class=\"tab-pane fade\">
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"noticia\">
\t\t\t\t\t<div class=\"titulo\">
\t\t\t\t\t\t<h3 class=\"in\"></h3>
\t\t\t\t\t</div>\t\t
\t\t\t\t\t<div class=\"descricao\">
\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t<a href=\"\" class=\"btn btn-default btn-xs pull-right\" target=\"_blank\">Leia mais</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"barra\"></div>
\t\t\t</div>\t\t\t\t
\t\t</div>\t
\t\t<div id=\"esporte\" class=\"tab-pane fade\">
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"noticia\">
\t\t\t\t\t<div class=\"titulo\">
\t\t\t\t\t\t<h3 class=\"in\"></h3>
\t\t\t\t\t</div>\t\t
\t\t\t\t\t<div class=\"descricao\">
\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t<a href=\"\" class=\"btn btn-default btn-xs pull-right\" target=\"_blank\">Leia mais</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"barra\"></div>
\t\t\t</div>\t\t\t\t
\t\t</div>\t
\t\t<div id=\"mundo\" class=\"tab-pane fade\">
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<div class=\"noticia\">
\t\t\t\t\t<div class=\"titulo\">
\t\t\t\t\t\t<h3 class=\"in\"></h3>
\t\t\t\t\t</div>\t\t
\t\t\t\t\t<div class=\"descricao\">
\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t<a href=\"\" class=\"btn btn-default btn-xs pull-right\" target=\"_blank\">Leia mais</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"barra\"></div>
\t\t\t</div>\t\t\t\t
\t\t</div>\t
\t</div>
\t<div class=\"col-lg-3 pull-right\">
\t\t<img class=\"logo\" src=\"img/g1.jpg\" alt=\"G1\"><br />
\t\t<small> ULTIMA_ATUALIZACAO </small>
\t\t<div class=\"space\"></div>
\t\t<input type=\"button\" class=\"btn btn-default\" value=\"Atualizar\" onclick=\"window.location.href=window.location.href\">
\t\t<div class=\"space\"></div>
\t\t<div class=\"painel\">
\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t<li class=\"active\"><a href=\"#principal\" data-toggle=\"tab\">Principais Notícias</a></li>
\t\t\t\t<li><a href=\"#politica\" data-toggle=\"tab\">Política</a></li>
\t\t\t\t<li><a href=\"#economia\" data-toggle=\"tab\">Economia</a></li>
\t\t\t\t<li><a href=\"#esporte\" data-toggle=\"tab\">Esporte</a></li>
\t\t\t\t<li><a href=\"#mundo\" data-toggle=\"tab\">Mundo</a></li>\t\t\t\t\t
\t\t\t</ul>
\t\t</div>\t\t\t\t\t
\t\t<div class=\"barra\"></div>\t\t\t\t\t
\t</div>\t\t\t\t
</div>\t

";
    }

    public function getTemplateName()
    {
        return "midias/midia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  38 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "midias/midia.html.twig", "C:\\workspace\\feed_noticias\\templates\\midias\\midia.html.twig");
    }
}

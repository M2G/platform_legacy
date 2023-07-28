<?php

/* player.html.twig */
class __TwigTemplate_03ea23109069f28cd8e7cfb26d34210361891eb2a2d795e9299eb33417b74626 extends Twig_Template
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
        $__internal_e3e8573d346e3ceb167eb3d63471e327cc2cc1c76f4d6d088a551ab9e597fce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e8573d346e3ceb167eb3d63471e327cc2cc1c76f4d6d088a551ab9e597fce0->enter($__internal_e3e8573d346e3ceb167eb3d63471e327cc2cc1c76f4d6d088a551ab9e597fce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "player.html.twig"));

        // line 1
        echo "<div class=\"c-control\">
  <div class=\"progress\">
    <div id=\"progress-bar\" class=\"progress-bar\" data-role=\"progressbar\" style=\"width: 0%\"></div>
  </div>
  <div class=\"c-play_control\">
      <button id=\"prev\" class=\"c-play_control__previous\" title=\"Passer au titre précédent\" ng-click=\"prev()\">
        <svg class=\"lnr lnr-chevron-left\">
          <use xlink:href=\"#lnr-chevron-left\"></use>
        </svg>
      </button>
      <button id=\"next\" class=\"c-play_control__next\" title=\"Passer au titre suivant\" ng-click=\"next()\">
        <svg class=\"lnr lnr-chevron-right\">
          <use xlink:href=\"#lnr-chevron-right\"></use>
        </svg>
      </button>
      <button id=\"loop\" title=\"Répéter le titre\">
        <svg class=\"lnr lnr-sync\">
          <use xlink:href=\"#lnr-sync\"></use>
        </svg>
      </button>
      <button title=\"Egaliseur\">
        <svg class=\"egaliseur lnr lnr-chart-bars\">
          <use xlink:href=\"#lnr-chart-bars\"></use>
        </svg>
      </button>
  </div>
  <div ng-controller=\"playerCtrl\" class=\"c-player\" id=\"player\"></div>
</div>
";
        
        $__internal_e3e8573d346e3ceb167eb3d63471e327cc2cc1c76f4d6d088a551ab9e597fce0->leave($__internal_e3e8573d346e3ceb167eb3d63471e327cc2cc1c76f4d6d088a551ab9e597fce0_prof);

    }

    public function getTemplateName()
    {
        return "player.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"c-control\">
  <div class=\"progress\">
    <div id=\"progress-bar\" class=\"progress-bar\" data-role=\"progressbar\" style=\"width: 0%\"></div>
  </div>
  <div class=\"c-play_control\">
      <button id=\"prev\" class=\"c-play_control__previous\" title=\"Passer au titre précédent\" ng-click=\"prev()\">
        <svg class=\"lnr lnr-chevron-left\">
          <use xlink:href=\"#lnr-chevron-left\"></use>
        </svg>
      </button>
      <button id=\"next\" class=\"c-play_control__next\" title=\"Passer au titre suivant\" ng-click=\"next()\">
        <svg class=\"lnr lnr-chevron-right\">
          <use xlink:href=\"#lnr-chevron-right\"></use>
        </svg>
      </button>
      <button id=\"loop\" title=\"Répéter le titre\">
        <svg class=\"lnr lnr-sync\">
          <use xlink:href=\"#lnr-sync\"></use>
        </svg>
      </button>
      <button title=\"Egaliseur\">
        <svg class=\"egaliseur lnr lnr-chart-bars\">
          <use xlink:href=\"#lnr-chart-bars\"></use>
        </svg>
      </button>
  </div>
  <div ng-controller=\"playerCtrl\" class=\"c-player\" id=\"player\"></div>
</div>
", "player.html.twig", "/Applications/MAMP/htdocs/www.silex.local/templates/player.html.twig");
    }
}

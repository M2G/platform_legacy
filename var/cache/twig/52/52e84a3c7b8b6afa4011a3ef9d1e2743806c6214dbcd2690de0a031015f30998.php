<?php

/* player.html.twig */
class __TwigTemplate_4e3bd2e6893e6a525b161bd9643b229a74c07983e75e246c801a4b035bb84406 extends Twig_Template
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
        $__internal_3201406eb2b33c6a5171c29ef646d02d9aa72ef74adec1f34fb2550de278a91e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3201406eb2b33c6a5171c29ef646d02d9aa72ef74adec1f34fb2550de278a91e->enter($__internal_3201406eb2b33c6a5171c29ef646d02d9aa72ef74adec1f34fb2550de278a91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "player.html.twig"));

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
        
        $__internal_3201406eb2b33c6a5171c29ef646d02d9aa72ef74adec1f34fb2550de278a91e->leave($__internal_3201406eb2b33c6a5171c29ef646d02d9aa72ef74adec1f34fb2550de278a91e_prof);

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
", "player.html.twig", "C:\\xampp\\htdocs\\www.silex.local\\templates\\player.html.twig");
    }
}

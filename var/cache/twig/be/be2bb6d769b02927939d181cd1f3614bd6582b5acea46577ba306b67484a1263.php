<?php

/* partials/equaliser.html.twig */
class __TwigTemplate_e7170d32a21011052701a226f01abf9e09bfb278275bfe7b7e36135758a0ab55 extends Twig_Template
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
        $__internal_b7cda1205ee41d33fdcdd0056c1305701faec0be57ed04800502625abb682d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7cda1205ee41d33fdcdd0056c1305701faec0be57ed04800502625abb682d26->enter($__internal_b7cda1205ee41d33fdcdd0056c1305701faec0be57ed04800502625abb682d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "partials/equaliser.html.twig"));

        // line 1
        echo "<!-- Sidebar right -->
<div class=\"c-sidebar__secondary\">
   <a class=\"egaliseur show_sidebar__second close-icon__second\" title=\"Toggle sidebar\">
   <span class=\"bar-4\"></span>
   <span class=\"bar-5\"></span>
   </a>
   <aside class=\"c-aside c-aside_nav__menu\">
      <select class=\"c-sidebar__choose\">
         <option value=\"plat\" selected>Plat</option>
         <option value=\"acoustique\">Acoustique</option>
         <option value=\"classique\">Classique</option>
         <option value=\"country\">Country</option>
         <option value=\"dance\">Dance</option>
         <option value=\"jazz\">Jazz</option>
         <option value=\"newage\">New-age</option>
         <option value=\"pop\">Pop</option>
         <option value=\"vocal\">Vocal</option>
         <option value=\"rock\">Rock</option>
         <option value=\"custom\">Custom</option>
      </select>
      <div class=\"c-sidebar__container\">
         <div id=\"filter\" class=\"o-padding--top\">
            <!-- Here be filter sliders -->
         </div>
      </div>
   </aside>
</div>
";
        
        $__internal_b7cda1205ee41d33fdcdd0056c1305701faec0be57ed04800502625abb682d26->leave($__internal_b7cda1205ee41d33fdcdd0056c1305701faec0be57ed04800502625abb682d26_prof);

    }

    public function getTemplateName()
    {
        return "partials/equaliser.html.twig";
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
        return new Twig_Source("<!-- Sidebar right -->
<div class=\"c-sidebar__secondary\">
   <a class=\"egaliseur show_sidebar__second close-icon__second\" title=\"Toggle sidebar\">
   <span class=\"bar-4\"></span>
   <span class=\"bar-5\"></span>
   </a>
   <aside class=\"c-aside c-aside_nav__menu\">
      <select class=\"c-sidebar__choose\">
         <option value=\"plat\" selected>Plat</option>
         <option value=\"acoustique\">Acoustique</option>
         <option value=\"classique\">Classique</option>
         <option value=\"country\">Country</option>
         <option value=\"dance\">Dance</option>
         <option value=\"jazz\">Jazz</option>
         <option value=\"newage\">New-age</option>
         <option value=\"pop\">Pop</option>
         <option value=\"vocal\">Vocal</option>
         <option value=\"rock\">Rock</option>
         <option value=\"custom\">Custom</option>
      </select>
      <div class=\"c-sidebar__container\">
         <div id=\"filter\" class=\"o-padding--top\">
            <!-- Here be filter sliders -->
         </div>
      </div>
   </aside>
</div>
", "partials/equaliser.html.twig", "/Applications/MAMP/htdocs/www.silex.local/templates/partials/equaliser.html.twig");
    }
}

<?php

/* register.html.twig */
class __TwigTemplate_62a211ebb24c5f48e5ce74e60b0d0cd7c37c899914e7e10d469162143f46e4ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "register.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46c37a053bb56235826daa9d40c4478322f16e7c31b2f2eb7ab3ff3b6cd72536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c37a053bb56235826daa9d40c4478322f16e7c31b2f2eb7ab3ff3b6cd72536->enter($__internal_46c37a053bb56235826daa9d40c4478322f16e7c31b2f2eb7ab3ff3b6cd72536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46c37a053bb56235826daa9d40c4478322f16e7c31b2f2eb7ab3ff3b6cd72536->leave($__internal_46c37a053bb56235826daa9d40c4478322f16e7c31b2f2eb7ab3ff3b6cd72536_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b287b9510e3f79003547ce263151d5c2a1c9a63b37d386663ab81038090f74fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b287b9510e3f79003547ce263151d5c2a1c9a63b37d386663ab81038090f74fb->enter($__internal_b287b9510e3f79003547ce263151d5c2a1c9a63b37d386663ab81038090f74fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "  <main id=\"main\" class=\"o-zone\">
    <div class=\"o-grid\">
      <form action=\"#\" method=\"post\">
        ";
        // line 8
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"form-group\">
          <input class=\"btn o-margin--top submit\" type=\"submit\" name=\"submit\"/>
        </div>
      </form>
    </div>
  </main>
";
        
        $__internal_b287b9510e3f79003547ce263151d5c2a1c9a63b37d386663ab81038090f74fb->leave($__internal_b287b9510e3f79003547ce263151d5c2a1c9a63b37d386663ab81038090f74fb_prof);

    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
  <main id=\"main\" class=\"o-zone\">
    <div class=\"o-grid\">
      <form action=\"#\" method=\"post\">
        {# avec le Twig Bridge, nous avons cette fonction pour générer les forms #}
        {{ form_widget(form) }}
        <div class=\"form-group\">
          <input class=\"btn o-margin--top submit\" type=\"submit\" name=\"submit\"/>
        </div>
      </form>
    </div>
  </main>
{% endblock %}
", "register.html.twig", "C:\\MAMP\\htdocs\\www.silex.local\\templates\\register.html.twig");
    }
}

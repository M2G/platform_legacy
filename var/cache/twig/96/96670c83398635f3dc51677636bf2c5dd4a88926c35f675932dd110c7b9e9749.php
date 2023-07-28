<?php

/* contact.html.twig */
class __TwigTemplate_a8eb30657f826b197660685bca391f6bef8cca46d1183b18c5b92f60ee28eb99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact.html.twig", 1);
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
        $__internal_f26cc301d37009fe23e913cf1a4a9c5b393e32fba1bd51da45cc9e0a1267a255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26cc301d37009fe23e913cf1a4a9c5b393e32fba1bd51da45cc9e0a1267a255->enter($__internal_f26cc301d37009fe23e913cf1a4a9c5b393e32fba1bd51da45cc9e0a1267a255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f26cc301d37009fe23e913cf1a4a9c5b393e32fba1bd51da45cc9e0a1267a255->leave($__internal_f26cc301d37009fe23e913cf1a4a9c5b393e32fba1bd51da45cc9e0a1267a255_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2dae5ead21fffbb9874f3a1a07c5a3a652cd323483189b4e5cffc669eb7d3606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dae5ead21fffbb9874f3a1a07c5a3a652cd323483189b4e5cffc669eb7d3606->enter($__internal_2dae5ead21fffbb9874f3a1a07c5a3a652cd323483189b4e5cffc669eb7d3606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "  <main id=\"main\" class=\"o-grid\">
    <form action=\"#\" method=\"post\">
      ";
        // line 7
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

      <input type=\"submit\" name=\"submit\">
    </form>
  </main>
";
        
        $__internal_2dae5ead21fffbb9874f3a1a07c5a3a652cd323483189b4e5cffc669eb7d3606->leave($__internal_2dae5ead21fffbb9874f3a1a07c5a3a652cd323483189b4e5cffc669eb7d3606_prof);

    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
  <main id=\"main\" class=\"o-grid\">
    <form action=\"#\" method=\"post\">
      {# avec le Twig Bridge, nous avons cette fonction pour générer les forms #}
      {{ form_widget(form) }}

      <input type=\"submit\" name=\"submit\">
    </form>
  </main>
{% endblock %}
", "contact.html.twig", "C:\\MAMP\\htdocs\\www.silex.local\\templates\\contact.html.twig");
    }
}

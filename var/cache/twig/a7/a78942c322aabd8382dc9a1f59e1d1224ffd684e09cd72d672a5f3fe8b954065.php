<?php

/* register.html.twig */
class __TwigTemplate_5a474f154a397a546b792cefd2288d501df5351f0161e68bcbc9a905a9b9c6f0 extends Twig_Template
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
        $__internal_09c8a38241f1c2b299d39152beb05776783e240be5b8117c335d4881b33110c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c8a38241f1c2b299d39152beb05776783e240be5b8117c335d4881b33110c4->enter($__internal_09c8a38241f1c2b299d39152beb05776783e240be5b8117c335d4881b33110c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09c8a38241f1c2b299d39152beb05776783e240be5b8117c335d4881b33110c4->leave($__internal_09c8a38241f1c2b299d39152beb05776783e240be5b8117c335d4881b33110c4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_baaf3fde6a194b79cebdbc774b0ab2c43f9a607293e34f8a32ea8ebec32528c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baaf3fde6a194b79cebdbc774b0ab2c43f9a607293e34f8a32ea8ebec32528c5->enter($__internal_baaf3fde6a194b79cebdbc774b0ab2c43f9a607293e34f8a32ea8ebec32528c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "  <main id=\"main\" class=\"o-grid\">
    <form action=\"#\" method=\"post\">
      ";
        // line 7
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

      <input class=\"btn o-margin--top\"type=\"submit\" name=\"submit\" />
    </form>
  </main>
";
        
        $__internal_baaf3fde6a194b79cebdbc774b0ab2c43f9a607293e34f8a32ea8ebec32528c5->leave($__internal_baaf3fde6a194b79cebdbc774b0ab2c43f9a607293e34f8a32ea8ebec32528c5_prof);

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

      <input class=\"btn o-margin--top\"type=\"submit\" name=\"submit\" />
    </form>
  </main>
{% endblock %}
", "register.html.twig", "/Applications/MAMP/htdocs/www.silex.local/templates/register.html.twig");
    }
}

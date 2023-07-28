<?php

/* register.html.twig */
class __TwigTemplate_1db1402751f128cc41ca5f789c4aa256487f94884e6d043841a9e018bf71d25b extends Twig_Template
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
        $__internal_1ae4cf0052381dba4338aa276ff51410244ca1b7480a68294507934c80f2f1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae4cf0052381dba4338aa276ff51410244ca1b7480a68294507934c80f2f1d5->enter($__internal_1ae4cf0052381dba4338aa276ff51410244ca1b7480a68294507934c80f2f1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ae4cf0052381dba4338aa276ff51410244ca1b7480a68294507934c80f2f1d5->leave($__internal_1ae4cf0052381dba4338aa276ff51410244ca1b7480a68294507934c80f2f1d5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_dbd80938a5842c6d1f42cc0ebeae92dac000c3b213ae4a096c0a77b297a3f762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd80938a5842c6d1f42cc0ebeae92dac000c3b213ae4a096c0a77b297a3f762->enter($__internal_dbd80938a5842c6d1f42cc0ebeae92dac000c3b213ae4a096c0a77b297a3f762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_dbd80938a5842c6d1f42cc0ebeae92dac000c3b213ae4a096c0a77b297a3f762->leave($__internal_dbd80938a5842c6d1f42cc0ebeae92dac000c3b213ae4a096c0a77b297a3f762_prof);

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
", "register.html.twig", "C:\\xampp\\htdocs\\www.silex.local\\templates\\register.html.twig");
    }
}

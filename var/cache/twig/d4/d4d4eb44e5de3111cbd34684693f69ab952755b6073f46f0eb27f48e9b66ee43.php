<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_721640facd36273f7a6c408d3b9c73d73f2c1556e04f74aed6dd28914e198c0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_343558ff8d0ed24966be1f67294f1900cbae94aab49f82f51148e71b58094763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343558ff8d0ed24966be1f67294f1900cbae94aab49f82f51148e71b58094763->enter($__internal_343558ff8d0ed24966be1f67294f1900cbae94aab49f82f51148e71b58094763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_343558ff8d0ed24966be1f67294f1900cbae94aab49f82f51148e71b58094763->leave($__internal_343558ff8d0ed24966be1f67294f1900cbae94aab49f82f51148e71b58094763_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bbc43f0a2b4cb6e934e1993d60ac85ab1a15e7e6375a3f89559f0c75dfd94413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc43f0a2b4cb6e934e1993d60ac85ab1a15e7e6375a3f89559f0c75dfd94413->enter($__internal_bbc43f0a2b4cb6e934e1993d60ac85ab1a15e7e6375a3f89559f0c75dfd94413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bbc43f0a2b4cb6e934e1993d60ac85ab1a15e7e6375a3f89559f0c75dfd94413->leave($__internal_bbc43f0a2b4cb6e934e1993d60ac85ab1a15e7e6375a3f89559f0c75dfd94413_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_af6e99b41f311611e727ab4a218443a06df2f8409fbd581f901bba67cca79b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6e99b41f311611e727ab4a218443a06df2f8409fbd581f901bba67cca79b69->enter($__internal_af6e99b41f311611e727ab4a218443a06df2f8409fbd581f901bba67cca79b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_af6e99b41f311611e727ab4a218443a06df2f8409fbd581f901bba67cca79b69->leave($__internal_af6e99b41f311611e727ab4a218443a06df2f8409fbd581f901bba67cca79b69_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a7b50c069582cc93d42bdf3cba025b02097b6f510ea6d8398daa65d70dc67296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b50c069582cc93d42bdf3cba025b02097b6f510ea6d8398daa65d70dc67296->enter($__internal_a7b50c069582cc93d42bdf3cba025b02097b6f510ea6d8398daa65d70dc67296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a7b50c069582cc93d42bdf3cba025b02097b6f510ea6d8398daa65d70dc67296->leave($__internal_a7b50c069582cc93d42bdf3cba025b02097b6f510ea6d8398daa65d70dc67296_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\MAMP\\htdocs\\www.silex.local\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

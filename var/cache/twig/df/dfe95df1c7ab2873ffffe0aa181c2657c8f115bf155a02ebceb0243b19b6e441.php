<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_eefa570aa5690645b8ba7df0b6b7588eda7d49fa059576df2929fb727b02d574 extends Twig_Template
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
        $__internal_89379c516e4ff45a0596f04d5214392ddc96a41d12838649deb18cd53087a4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89379c516e4ff45a0596f04d5214392ddc96a41d12838649deb18cd53087a4bd->enter($__internal_89379c516e4ff45a0596f04d5214392ddc96a41d12838649deb18cd53087a4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89379c516e4ff45a0596f04d5214392ddc96a41d12838649deb18cd53087a4bd->leave($__internal_89379c516e4ff45a0596f04d5214392ddc96a41d12838649deb18cd53087a4bd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e7c6dfc6626e7f05063cc8cbdcd848bb24dac624fdb1ae34c8eebdd9ca4ca867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c6dfc6626e7f05063cc8cbdcd848bb24dac624fdb1ae34c8eebdd9ca4ca867->enter($__internal_e7c6dfc6626e7f05063cc8cbdcd848bb24dac624fdb1ae34c8eebdd9ca4ca867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e7c6dfc6626e7f05063cc8cbdcd848bb24dac624fdb1ae34c8eebdd9ca4ca867->leave($__internal_e7c6dfc6626e7f05063cc8cbdcd848bb24dac624fdb1ae34c8eebdd9ca4ca867_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f1255d8fb13e2bcdfd3ff88e8cca1022d5911c474803cb836246c18ba5131f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1255d8fb13e2bcdfd3ff88e8cca1022d5911c474803cb836246c18ba5131f99->enter($__internal_f1255d8fb13e2bcdfd3ff88e8cca1022d5911c474803cb836246c18ba5131f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f1255d8fb13e2bcdfd3ff88e8cca1022d5911c474803cb836246c18ba5131f99->leave($__internal_f1255d8fb13e2bcdfd3ff88e8cca1022d5911c474803cb836246c18ba5131f99_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_28318a0bab6281045a1d0378886fc7530286c9600c7040277d537411a2fb67df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28318a0bab6281045a1d0378886fc7530286c9600c7040277d537411a2fb67df->enter($__internal_28318a0bab6281045a1d0378886fc7530286c9600c7040277d537411a2fb67df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_28318a0bab6281045a1d0378886fc7530286c9600c7040277d537411a2fb67df->leave($__internal_28318a0bab6281045a1d0378886fc7530286c9600c7040277d537411a2fb67df_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\www.silex.local\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

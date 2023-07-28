<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8be9ac40ecaf3a9224fb25562d9a5b20dbd3b9522e173474b2aac9a67e906514 extends Twig_Template
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
        $__internal_27e1ce59ca238558969e4a10e1e3b7b0ba3f359ad8233a4bcb6a326cbc39d293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e1ce59ca238558969e4a10e1e3b7b0ba3f359ad8233a4bcb6a326cbc39d293->enter($__internal_27e1ce59ca238558969e4a10e1e3b7b0ba3f359ad8233a4bcb6a326cbc39d293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27e1ce59ca238558969e4a10e1e3b7b0ba3f359ad8233a4bcb6a326cbc39d293->leave($__internal_27e1ce59ca238558969e4a10e1e3b7b0ba3f359ad8233a4bcb6a326cbc39d293_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_78f2553a95d57213d813e41476970bfe4299ea0452d551be42ccfcc93ea09c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f2553a95d57213d813e41476970bfe4299ea0452d551be42ccfcc93ea09c23->enter($__internal_78f2553a95d57213d813e41476970bfe4299ea0452d551be42ccfcc93ea09c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_78f2553a95d57213d813e41476970bfe4299ea0452d551be42ccfcc93ea09c23->leave($__internal_78f2553a95d57213d813e41476970bfe4299ea0452d551be42ccfcc93ea09c23_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1a776d6620c816b9a32745ec1c703c661e352b8bfb2e4e40d9ad505794231181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a776d6620c816b9a32745ec1c703c661e352b8bfb2e4e40d9ad505794231181->enter($__internal_1a776d6620c816b9a32745ec1c703c661e352b8bfb2e4e40d9ad505794231181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1a776d6620c816b9a32745ec1c703c661e352b8bfb2e4e40d9ad505794231181->leave($__internal_1a776d6620c816b9a32745ec1c703c661e352b8bfb2e4e40d9ad505794231181_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e7d2fdc84fc5f5ff8b6a51fce4c98ac5b8b57afcc28ce5ebe95ed8a94db0d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7d2fdc84fc5f5ff8b6a51fce4c98ac5b8b57afcc28ce5ebe95ed8a94db0d3e->enter($__internal_5e7d2fdc84fc5f5ff8b6a51fce4c98ac5b8b57afcc28ce5ebe95ed8a94db0d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5e7d2fdc84fc5f5ff8b6a51fce4c98ac5b8b57afcc28ce5ebe95ed8a94db0d3e->leave($__internal_5e7d2fdc84fc5f5ff8b6a51fce4c98ac5b8b57afcc28ce5ebe95ed8a94db0d3e_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/www.silex.local/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}

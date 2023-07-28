<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e51b004eeba1a43b5bd738f2bd038f14a6cb833b5ece8c46c696d6bb827515eb extends Twig_Template
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
        $__internal_013605516d1cd080f7f2dde3b548bda973574dd9388d3ffb6dac5dc5663869d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013605516d1cd080f7f2dde3b548bda973574dd9388d3ffb6dac5dc5663869d3->enter($__internal_013605516d1cd080f7f2dde3b548bda973574dd9388d3ffb6dac5dc5663869d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_013605516d1cd080f7f2dde3b548bda973574dd9388d3ffb6dac5dc5663869d3->leave($__internal_013605516d1cd080f7f2dde3b548bda973574dd9388d3ffb6dac5dc5663869d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f86734383eecd24c45c38c3a5ab6af499edb73f7590e45f5e278f374799006f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86734383eecd24c45c38c3a5ab6af499edb73f7590e45f5e278f374799006f4->enter($__internal_f86734383eecd24c45c38c3a5ab6af499edb73f7590e45f5e278f374799006f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f86734383eecd24c45c38c3a5ab6af499edb73f7590e45f5e278f374799006f4->leave($__internal_f86734383eecd24c45c38c3a5ab6af499edb73f7590e45f5e278f374799006f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0895265b11796ee894c6a78ce18d13005e7bdf1113e4b8b6b8e7efd5995c6c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0895265b11796ee894c6a78ce18d13005e7bdf1113e4b8b6b8e7efd5995c6c89->enter($__internal_0895265b11796ee894c6a78ce18d13005e7bdf1113e4b8b6b8e7efd5995c6c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0895265b11796ee894c6a78ce18d13005e7bdf1113e4b8b6b8e7efd5995c6c89->leave($__internal_0895265b11796ee894c6a78ce18d13005e7bdf1113e4b8b6b8e7efd5995c6c89_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f71163a3fb3e355c23c6261434bee3f1a90cba35c194e2713c37fd92e9d0197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f71163a3fb3e355c23c6261434bee3f1a90cba35c194e2713c37fd92e9d0197->enter($__internal_1f71163a3fb3e355c23c6261434bee3f1a90cba35c194e2713c37fd92e9d0197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f71163a3fb3e355c23c6261434bee3f1a90cba35c194e2713c37fd92e9d0197->leave($__internal_1f71163a3fb3e355c23c6261434bee3f1a90cba35c194e2713c37fd92e9d0197_prof);

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

<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_802519600257c50d179a521b50ffe0119f1f1b4ceca6196dd69590c7351b5e34 extends Twig_Template
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
        $__internal_b9fc6343ef284bc5690e09cf83a5df3e0da806cc566383f8c28e7b2dc42dc927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9fc6343ef284bc5690e09cf83a5df3e0da806cc566383f8c28e7b2dc42dc927->enter($__internal_b9fc6343ef284bc5690e09cf83a5df3e0da806cc566383f8c28e7b2dc42dc927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9fc6343ef284bc5690e09cf83a5df3e0da806cc566383f8c28e7b2dc42dc927->leave($__internal_b9fc6343ef284bc5690e09cf83a5df3e0da806cc566383f8c28e7b2dc42dc927_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eac7c1c69fe70a1b7aee482fb3f8adfbb4145795109d4430648320ce28a708eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac7c1c69fe70a1b7aee482fb3f8adfbb4145795109d4430648320ce28a708eb->enter($__internal_eac7c1c69fe70a1b7aee482fb3f8adfbb4145795109d4430648320ce28a708eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eac7c1c69fe70a1b7aee482fb3f8adfbb4145795109d4430648320ce28a708eb->leave($__internal_eac7c1c69fe70a1b7aee482fb3f8adfbb4145795109d4430648320ce28a708eb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_65c098a587c4338db02683fe5499419e79ae49a44b662c560eb7749cce04159d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c098a587c4338db02683fe5499419e79ae49a44b662c560eb7749cce04159d->enter($__internal_65c098a587c4338db02683fe5499419e79ae49a44b662c560eb7749cce04159d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_65c098a587c4338db02683fe5499419e79ae49a44b662c560eb7749cce04159d->leave($__internal_65c098a587c4338db02683fe5499419e79ae49a44b662c560eb7749cce04159d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_da29d8526b259c3fb2afb0bd3070e757211aaab632ad5fb916c0b92b38bcd9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da29d8526b259c3fb2afb0bd3070e757211aaab632ad5fb916c0b92b38bcd9cb->enter($__internal_da29d8526b259c3fb2afb0bd3070e757211aaab632ad5fb916c0b92b38bcd9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_da29d8526b259c3fb2afb0bd3070e757211aaab632ad5fb916c0b92b38bcd9cb->leave($__internal_da29d8526b259c3fb2afb0bd3070e757211aaab632ad5fb916c0b92b38bcd9cb_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}

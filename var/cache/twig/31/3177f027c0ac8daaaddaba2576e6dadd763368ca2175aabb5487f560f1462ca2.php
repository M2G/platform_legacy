<?php

/* base.html.twig */
class __TwigTemplate_cb9415cdd72c5225fe327608c70a735ab85ab95ea1be805c27fd67b69db37cd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a10596ca96d9da1a1d95844c004d916b98c48f5fa1622d8318121c644f826fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10596ca96d9da1a1d95844c004d916b98c48f5fa1622d8318121c644f826fa9->enter($__internal_a10596ca96d9da1a1d95844c004d916b98c48f5fa1622d8318121c644f826fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</title>

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "
  </head>
  <body>
    ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "  </body>
</html>
";
        
        $__internal_a10596ca96d9da1a1d95844c004d916b98c48f5fa1622d8318121c644f826fa9->leave($__internal_a10596ca96d9da1a1d95844c004d916b98c48f5fa1622d8318121c644f826fa9_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5ce50cf2b5f0326cb325ba5d5590a0b9a2514171a2dac00daad075ba1c114bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce50cf2b5f0326cb325ba5d5590a0b9a2514171a2dac00daad075ba1c114bab->enter($__internal_5ce50cf2b5f0326cb325ba5d5590a0b9a2514171a2dac00daad075ba1c114bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" href=\"css/plyr.css\">
    ";
        
        $__internal_5ce50cf2b5f0326cb325ba5d5590a0b9a2514171a2dac00daad075ba1c114bab->leave($__internal_5ce50cf2b5f0326cb325ba5d5590a0b9a2514171a2dac00daad075ba1c114bab_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bfbcaa47a67b221448fe79463de4c15e3e2059425968dba4425299259bd42ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfbcaa47a67b221448fe79463de4c15e3e2059425968dba4425299259bd42ce2->enter($__internal_bfbcaa47a67b221448fe79463de4c15e3e2059425968dba4425299259bd42ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "      <script src=\"https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js\"></script>
      <script async src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_bfbcaa47a67b221448fe79463de4c15e3e2059425968dba4425299259bd42ce2->leave($__internal_bfbcaa47a67b221448fe79463de4c15e3e2059425968dba4425299259bd42ce2_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_82c45dd66e0129e37b18758efcc16f1bd6b7765882275a820d3a03d6a1e7035c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c45dd66e0129e37b18758efcc16f1bd6b7765882275a820d3a03d6a1e7035c->enter($__internal_82c45dd66e0129e37b18758efcc16f1bd6b7765882275a820d3a03d6a1e7035c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <!-- Here all about my content -->
    ";
        
        $__internal_82c45dd66e0129e37b18758efcc16f1bd6b7765882275a820d3a03d6a1e7035c->leave($__internal_82c45dd66e0129e37b18758efcc16f1bd6b7765882275a820d3a03d6a1e7035c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 21,  95 => 20,  86 => 15,  83 => 14,  77 => 13,  66 => 9,  60 => 8,  51 => 23,  49 => 20,  44 => 17,  42 => 13,  39 => 12,  37 => 8,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{{ title }}</title>

    {% block stylesheets %}
      <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
      <link rel=\"stylesheet\" href=\"css/plyr.css\">
    {% endblock %}

    {% block javascripts %}
      <script src=\"https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js\"></script>
      <script async src=\"{{ asset('js/main.js') }}\"></script>
    {% endblock %}

  </head>
  <body>
    {% block content %}
    <!-- Here all about my content -->
    {% endblock %}
  </body>
</html>
", "base.html.twig", "C:\\MAMP\\htdocs\\www.silex.local\\templates\\base.html.twig");
    }
}

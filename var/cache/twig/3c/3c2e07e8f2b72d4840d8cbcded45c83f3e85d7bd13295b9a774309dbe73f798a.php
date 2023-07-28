<?php

/* base.html.twig */
class __TwigTemplate_e636f234d93ea6d1e10596a786cb64a8b977938cade3ed503fb796a74c5b34a3 extends Twig_Template
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
        $__internal_023c967d65b6f09b2a980ae76437529d65eb4644e00aff21e56e54765a4f4375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023c967d65b6f09b2a980ae76437529d65eb4644e00aff21e56e54765a4f4375->enter($__internal_023c967d65b6f09b2a980ae76437529d65eb4644e00aff21e56e54765a4f4375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
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
        
        $__internal_023c967d65b6f09b2a980ae76437529d65eb4644e00aff21e56e54765a4f4375->leave($__internal_023c967d65b6f09b2a980ae76437529d65eb4644e00aff21e56e54765a4f4375_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea4f5d3263b55c66e37474c4f341f6284fa639ade752e097d103eef4d5e7573f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4f5d3263b55c66e37474c4f341f6284fa639ade752e097d103eef4d5e7573f->enter($__internal_ea4f5d3263b55c66e37474c4f341f6284fa639ade752e097d103eef4d5e7573f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" href=\"css/plyr.css\">
    ";
        
        $__internal_ea4f5d3263b55c66e37474c4f341f6284fa639ade752e097d103eef4d5e7573f->leave($__internal_ea4f5d3263b55c66e37474c4f341f6284fa639ade752e097d103eef4d5e7573f_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_41487654fd8014ebd8356f9d9255ffd2b8040a33d006961f57e26cfe1d5dc18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41487654fd8014ebd8356f9d9255ffd2b8040a33d006961f57e26cfe1d5dc18f->enter($__internal_41487654fd8014ebd8356f9d9255ffd2b8040a33d006961f57e26cfe1d5dc18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "      <script src=\"https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js\"></script>
      <script async src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_41487654fd8014ebd8356f9d9255ffd2b8040a33d006961f57e26cfe1d5dc18f->leave($__internal_41487654fd8014ebd8356f9d9255ffd2b8040a33d006961f57e26cfe1d5dc18f_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_495c384f82249bb2efaa9a24b55b043eca382b2f618a848e104713ffe98ec571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495c384f82249bb2efaa9a24b55b043eca382b2f618a848e104713ffe98ec571->enter($__internal_495c384f82249bb2efaa9a24b55b043eca382b2f618a848e104713ffe98ec571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <!-- Here all about my content -->
    ";
        
        $__internal_495c384f82249bb2efaa9a24b55b043eca382b2f618a848e104713ffe98ec571->leave($__internal_495c384f82249bb2efaa9a24b55b043eca382b2f618a848e104713ffe98ec571_prof);

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
", "base.html.twig", "/Applications/MAMP/htdocs/www.silex.local/templates/base.html.twig");
    }
}

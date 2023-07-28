<?php

/* base.html.twig */
class __TwigTemplate_6598a9aaad4c651cc26e9a5f602fb9c695bb2f1ae9c840560110c9f3c464ff1f extends Twig_Template
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
        $__internal_c9108e3b1c1f855a77d298a7183fb6c27e531819a01838504a961dcf65111320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9108e3b1c1f855a77d298a7183fb6c27e531819a01838504a961dcf65111320->enter($__internal_c9108e3b1c1f855a77d298a7183fb6c27e531819a01838504a961dcf65111320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c9108e3b1c1f855a77d298a7183fb6c27e531819a01838504a961dcf65111320->leave($__internal_c9108e3b1c1f855a77d298a7183fb6c27e531819a01838504a961dcf65111320_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_80853c5f6d11cc01835fb67cc657dc7592183983ea40d30ae4645a5e70b0fdfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80853c5f6d11cc01835fb67cc657dc7592183983ea40d30ae4645a5e70b0fdfb->enter($__internal_80853c5f6d11cc01835fb67cc657dc7592183983ea40d30ae4645a5e70b0fdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" href=\"css/plyr.css\">
    ";
        
        $__internal_80853c5f6d11cc01835fb67cc657dc7592183983ea40d30ae4645a5e70b0fdfb->leave($__internal_80853c5f6d11cc01835fb67cc657dc7592183983ea40d30ae4645a5e70b0fdfb_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f52c0c41a5b96b5d7ab5e5705d08c1396d136a9f2ef6c59074314f565e0a134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f52c0c41a5b96b5d7ab5e5705d08c1396d136a9f2ef6c59074314f565e0a134->enter($__internal_7f52c0c41a5b96b5d7ab5e5705d08c1396d136a9f2ef6c59074314f565e0a134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "      <script src=\"https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js\"></script>
      <script async src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_7f52c0c41a5b96b5d7ab5e5705d08c1396d136a9f2ef6c59074314f565e0a134->leave($__internal_7f52c0c41a5b96b5d7ab5e5705d08c1396d136a9f2ef6c59074314f565e0a134_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_8f536abf1f0370e3aaa0b9a04827980bd12d81e424658659e20a7c2f98810525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f536abf1f0370e3aaa0b9a04827980bd12d81e424658659e20a7c2f98810525->enter($__internal_8f536abf1f0370e3aaa0b9a04827980bd12d81e424658659e20a7c2f98810525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <!-- Here all about my content -->
    ";
        
        $__internal_8f536abf1f0370e3aaa0b9a04827980bd12d81e424658659e20a7c2f98810525->leave($__internal_8f536abf1f0370e3aaa0b9a04827980bd12d81e424658659e20a7c2f98810525_prof);

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
", "base.html.twig", "C:\\xampp\\htdocs\\www.silex.local\\templates\\base.html.twig");
    }
}

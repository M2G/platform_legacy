<?php

/* base.html.twig */
class __TwigTemplate_2f7aa520aacb0d5b186b97e33efd6335b6e584cf68a0fd0eac628801a3fb18a2 extends Twig_Template
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
        $__internal_14420fc22ccb3f0d72f9001e9b252411a24df6b67a0246e0bfeb215daae10cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14420fc22ccb3f0d72f9001e9b252411a24df6b67a0246e0bfeb215daae10cc1->enter($__internal_14420fc22ccb3f0d72f9001e9b252411a24df6b67a0246e0bfeb215daae10cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 22
        echo "</body>
</html>
";
        
        $__internal_14420fc22ccb3f0d72f9001e9b252411a24df6b67a0246e0bfeb215daae10cc1->leave($__internal_14420fc22ccb3f0d72f9001e9b252411a24df6b67a0246e0bfeb215daae10cc1_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e75f79094873836f84472b38c02b567ab8893a49c48aeedded3d5e542bae7aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75f79094873836f84472b38c02b567ab8893a49c48aeedded3d5e542bae7aa4->enter($__internal_e75f79094873836f84472b38c02b567ab8893a49c48aeedded3d5e542bae7aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"css/plyr.css\">
  ";
        
        $__internal_e75f79094873836f84472b38c02b567ab8893a49c48aeedded3d5e542bae7aa4->leave($__internal_e75f79094873836f84472b38c02b567ab8893a49c48aeedded3d5e542bae7aa4_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3c0fdfd74d528db320600a4c816352b318e27f28874b9742094923d5c297537b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0fdfd74d528db320600a4c816352b318e27f28874b9742094923d5c297537b->enter($__internal_3c0fdfd74d528db320600a4c816352b318e27f28874b9742094923d5c297537b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "  <script src=\"https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js\"></script>
  <script async src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_3c0fdfd74d528db320600a4c816352b318e27f28874b9742094923d5c297537b->leave($__internal_3c0fdfd74d528db320600a4c816352b318e27f28874b9742094923d5c297537b_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_88ceb949ad9638619eac3c4d446d3447448b239b524088460b1d98f67da6dae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ceb949ad9638619eac3c4d446d3447448b239b524088460b1d98f67da6dae3->enter($__internal_88ceb949ad9638619eac3c4d446d3447448b239b524088460b1d98f67da6dae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "  ";
        
        $__internal_88ceb949ad9638619eac3c4d446d3447448b239b524088460b1d98f67da6dae3->leave($__internal_88ceb949ad9638619eac3c4d446d3447448b239b524088460b1d98f67da6dae3_prof);

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
        return array (  101 => 21,  95 => 20,  86 => 15,  83 => 14,  77 => 13,  66 => 9,  60 => 8,  51 => 22,  49 => 20,  44 => 17,  42 => 13,  39 => 12,  37 => 8,  32 => 6,  25 => 1,);
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
  {% endblock %}
</body>
</html>
", "base.html.twig", "C:\\MAMP\\htdocs\\www.silex.local\\templates\\base.html.twig");
    }
}

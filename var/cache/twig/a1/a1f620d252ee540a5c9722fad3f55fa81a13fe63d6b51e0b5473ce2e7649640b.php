<?php

/* base.html.twig */
class __TwigTemplate_ed4f34a546886e71ddd75aae9d8b4cf9e07032d6c9c1f9ce779d41c41718419f extends Twig_Template
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
        $__internal_2060327b02e6cdf8280ad09f486b20ef3595cf96a97050d232b583d7fe0a8d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2060327b02e6cdf8280ad09f486b20ef3595cf96a97050d232b583d7fe0a8d87->enter($__internal_2060327b02e6cdf8280ad09f486b20ef3595cf96a97050d232b583d7fe0a8d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</title>

  ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
  ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "</head>
<body>
  ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "</body>
</html>
";
        
        $__internal_2060327b02e6cdf8280ad09f486b20ef3595cf96a97050d232b583d7fe0a8d87->leave($__internal_2060327b02e6cdf8280ad09f486b20ef3595cf96a97050d232b583d7fe0a8d87_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_19f19f967171b0acc4f6bca8a08130dbcad8c2b742de194929efcb6f657e3321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f19f967171b0acc4f6bca8a08130dbcad8c2b742de194929efcb6f657e3321->enter($__internal_19f19f967171b0acc4f6bca8a08130dbcad8c2b742de194929efcb6f657e3321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_19f19f967171b0acc4f6bca8a08130dbcad8c2b742de194929efcb6f657e3321->leave($__internal_19f19f967171b0acc4f6bca8a08130dbcad8c2b742de194929efcb6f657e3321_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_785fefa17437d72ecd1dfde8f1f82d2e9d8b4b2c5a4b79d181171f3a0274fa35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785fefa17437d72ecd1dfde8f1f82d2e9d8b4b2c5a4b79d181171f3a0274fa35->enter($__internal_785fefa17437d72ecd1dfde8f1f82d2e9d8b4b2c5a4b79d181171f3a0274fa35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "  <script async src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_785fefa17437d72ecd1dfde8f1f82d2e9d8b4b2c5a4b79d181171f3a0274fa35->leave($__internal_785fefa17437d72ecd1dfde8f1f82d2e9d8b4b2c5a4b79d181171f3a0274fa35_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_a46bd0e9461990b6e706cd67fddd984b3875d9cf1f840c77b3fcb130ae4f4ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46bd0e9461990b6e706cd67fddd984b3875d9cf1f840c77b3fcb130ae4f4ff6->enter($__internal_a46bd0e9461990b6e706cd67fddd984b3875d9cf1f840c77b3fcb130ae4f4ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "  ";
        
        $__internal_a46bd0e9461990b6e706cd67fddd984b3875d9cf1f840c77b3fcb130ae4f4ff6->leave($__internal_a46bd0e9461990b6e706cd67fddd984b3875d9cf1f840c77b3fcb130ae4f4ff6_prof);

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
        return array (  98 => 18,  92 => 17,  82 => 13,  76 => 12,  67 => 9,  64 => 8,  58 => 7,  49 => 19,  47 => 17,  43 => 15,  41 => 12,  38 => 11,  36 => 7,  31 => 5,  25 => 1,);
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
  <title>{{ title }}</title>

  {% block stylesheets %}
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
  {% endblock %}

  {% block javascripts %}
  <script async src=\"{{ asset('js/main.js') }}\"></script>
  {% endblock %}
</head>
<body>
  {% block content %}
  {% endblock %}
</body>
</html>
", "base.html.twig", "/var/www/templates/base.html.twig");
    }
}

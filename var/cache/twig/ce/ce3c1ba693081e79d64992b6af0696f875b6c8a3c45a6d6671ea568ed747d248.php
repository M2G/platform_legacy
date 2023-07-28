<?php

/* login.html.twig */
class __TwigTemplate_761dafe988e95c855fe43b9419e2cbbbd1d7ab2851146d961d992e2534a2843e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13ad9aac2fb09b3bbc6cee31ffac3e9a7b17eb17905d75e0faffc2eb903ac8c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ad9aac2fb09b3bbc6cee31ffac3e9a7b17eb17905d75e0faffc2eb903ac8c4->enter($__internal_13ad9aac2fb09b3bbc6cee31ffac3e9a7b17eb17905d75e0faffc2eb903ac8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13ad9aac2fb09b3bbc6cee31ffac3e9a7b17eb17905d75e0faffc2eb903ac8c4->leave($__internal_13ad9aac2fb09b3bbc6cee31ffac3e9a7b17eb17905d75e0faffc2eb903ac8c4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f1a63500756402b10a5984df954112e290455d9d854b4ca6bae10953b1d82b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a63500756402b10a5984df954112e290455d9d854b4ca6bae10953b1d82b58->enter($__internal_f1a63500756402b10a5984df954112e290455d9d854b4ca6bae10953b1d82b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "  <main id=\"main\" class=\"o-grid\">
    ";
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <!-- <label for=\"username\">Username : </label>-->
        <div class=\"form-group\">
        <input id=\"username\" class=\"form-control\" type=\"text\" name=\"_username\" value=\"\" placeholder=\"Username\">
        </div>
        <!-- <label for=\"password\">Mot de passe : </label> -->
        <div class=\"form-group\">
        <input id=\"password\" class=\"form-control\" type=\"password\" name=\"_password\" placeholder=\"Mot de passe\">
        </div>
        <div class=\"form-group\">
        <input class=\"btn o-margin--top\" type=\"submit\" value=\"Connexion\">
        </div>
        ";
        // line 18
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 19
            echo "            <div class=\"error\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div>
        ";
        }
        // line 21
        echo "    </form>
  </main>
";
        
        $__internal_f1a63500756402b10a5984df954112e290455d9d854b4ca6bae10953b1d82b58->leave($__internal_f1a63500756402b10a5984df954112e290455d9d854b4ca6bae10953b1d82b58_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 21,  61 => 19,  59 => 18,  43 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
  <main id=\"main\" class=\"o-grid\">
    {# Ce chemin 'login_check' est généré automatiquement #}
    <form action=\"{{ path('login_check') }}\" method=\"post\">
        <!-- <label for=\"username\">Username : </label>-->
        <div class=\"form-group\">
        <input id=\"username\" class=\"form-control\" type=\"text\" name=\"_username\" value=\"\" placeholder=\"Username\">
        </div>
        <!-- <label for=\"password\">Mot de passe : </label> -->
        <div class=\"form-group\">
        <input id=\"password\" class=\"form-control\" type=\"password\" name=\"_password\" placeholder=\"Mot de passe\">
        </div>
        <div class=\"form-group\">
        <input class=\"btn o-margin--top\" type=\"submit\" value=\"Connexion\">
        </div>
        {% if error %}
            <div class=\"error\">{{ error }}</div>
        {% endif %}
    </form>
  </main>
{% endblock %}
", "login.html.twig", "/Applications/MAMP/htdocs/www.silex.local/templates/login.html.twig");
    }
}

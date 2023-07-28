<?php

/* login.html.twig */
class __TwigTemplate_041ac076a18a50d6400eba10f860a60f51ddcac6700f6fabc33c28385f54f784 extends Twig_Template
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
        $__internal_d0f0d4b6c7161a8b084b897c853da569a888b2bafdcb437dd40d1a055f089962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f0d4b6c7161a8b084b897c853da569a888b2bafdcb437dd40d1a055f089962->enter($__internal_d0f0d4b6c7161a8b084b897c853da569a888b2bafdcb437dd40d1a055f089962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0f0d4b6c7161a8b084b897c853da569a888b2bafdcb437dd40d1a055f089962->leave($__internal_d0f0d4b6c7161a8b084b897c853da569a888b2bafdcb437dd40d1a055f089962_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b01a4f1e7d65745cd67200bcc456e8b7fd48cdff52132ba155ff2010daf4de2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01a4f1e7d65745cd67200bcc456e8b7fd48cdff52132ba155ff2010daf4de2f->enter($__internal_b01a4f1e7d65745cd67200bcc456e8b7fd48cdff52132ba155ff2010daf4de2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "  <main id=\"main\" class=\"l-container\">
    ";
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <p><label for=\"username\">E-mail : </label><input id=\"username\" type=\"text\" name=\"_username\" value=\"\"></p>
        <p><label for=\"password\">Mot de passe : </label><input id=\"password\" type=\"password\" name=\"_password\"></p>
        <p><input type=\"submit\" value=\"Connéxion\"></p>
        ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "            <div class=\"error\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div>
        ";
        }
        // line 13
        echo "    </form>
  </main>
";
        
        $__internal_b01a4f1e7d65745cd67200bcc456e8b7fd48cdff52132ba155ff2010daf4de2f->leave($__internal_b01a4f1e7d65745cd67200bcc456e8b7fd48cdff52132ba155ff2010daf4de2f_prof);

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
        return array (  59 => 13,  53 => 11,  51 => 10,  43 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
  <main id=\"main\" class=\"l-container\">
    {# Ce chemin 'login_check' est généré automatiquement #}
    <form action=\"{{ path('login_check') }}\" method=\"post\">
        <p><label for=\"username\">E-mail : </label><input id=\"username\" type=\"text\" name=\"_username\" value=\"\"></p>
        <p><label for=\"password\">Mot de passe : </label><input id=\"password\" type=\"password\" name=\"_password\"></p>
        <p><input type=\"submit\" value=\"Connéxion\"></p>
        {% if error %}
            <div class=\"error\">{{ error }}</div>
        {% endif %}
    </form>
  </main>
{% endblock %}
", "login.html.twig", "/var/www/templates/login.html.twig");
    }
}

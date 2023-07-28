<?php

/* login.html.twig */
class __TwigTemplate_dde858c02be1db03774a0ca29119e324beaae9a5e526c4371be0098ae3f49964 extends Twig_Template
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
        $__internal_f93e7e9b85a060ceca884628657568bc80d47e861bc5c21538aea481166a388a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93e7e9b85a060ceca884628657568bc80d47e861bc5c21538aea481166a388a->enter($__internal_f93e7e9b85a060ceca884628657568bc80d47e861bc5c21538aea481166a388a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f93e7e9b85a060ceca884628657568bc80d47e861bc5c21538aea481166a388a->leave($__internal_f93e7e9b85a060ceca884628657568bc80d47e861bc5c21538aea481166a388a_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_daa43dd4a90ee7b83cf32a8bb84ce4b26fdc525c6f0053116b2376a56c2fe5d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa43dd4a90ee7b83cf32a8bb84ce4b26fdc525c6f0053116b2376a56c2fe5d0->enter($__internal_daa43dd4a90ee7b83cf32a8bb84ce4b26fdc525c6f0053116b2376a56c2fe5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "  <main id=\"main\" class=\"o-zone\">
    <div class=\"o-grid\">
      ";
        // line 6
        echo "      <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <div class=\"form-group\">
          <input id=\"username\" class=\"form-control\" type=\"text\" name=\"_username\" value=\"\" placeholder=\"Username\">
        </div>
        <div class=\"form-group\">
          <input id=\"password\" class=\"form-control\" type=\"password\" name=\"_password\" placeholder=\"Mot de passe\">
        </div>
        <div class=\"form-group\">
          <input class=\"btn o-margin--top submit\" type=\"submit\" value=\"Connexion\">
        </div>
        ";
        // line 16
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 17
            echo "          <div class=\"error\">";
            echo twig_escape_filter($this->env, ($context["error"] ?? $this->getContext($context, "error")), "html", null, true);
            echo "</div>
        ";
        }
        // line 19
        echo "      </form>
    </div>
  </main>
";
        
        $__internal_daa43dd4a90ee7b83cf32a8bb84ce4b26fdc525c6f0053116b2376a56c2fe5d0->leave($__internal_daa43dd4a90ee7b83cf32a8bb84ce4b26fdc525c6f0053116b2376a56c2fe5d0_prof);

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
        return array (  66 => 19,  60 => 17,  58 => 16,  44 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
  <main id=\"main\" class=\"o-zone\">
    <div class=\"o-grid\">
      {# Ce chemin 'login_check' est généré automatiquement #}
      <form action=\"{{ path('login_check') }}\" method=\"post\">
        <div class=\"form-group\">
          <input id=\"username\" class=\"form-control\" type=\"text\" name=\"_username\" value=\"\" placeholder=\"Username\">
        </div>
        <div class=\"form-group\">
          <input id=\"password\" class=\"form-control\" type=\"password\" name=\"_password\" placeholder=\"Mot de passe\">
        </div>
        <div class=\"form-group\">
          <input class=\"btn o-margin--top submit\" type=\"submit\" value=\"Connexion\">
        </div>
        {% if error %}
          <div class=\"error\">{{ error }}</div>
        {% endif %}
      </form>
    </div>
  </main>
{% endblock %}
", "login.html.twig", "C:\\MAMP\\htdocs\\www.silex.local\\templates\\login.html.twig");
    }
}

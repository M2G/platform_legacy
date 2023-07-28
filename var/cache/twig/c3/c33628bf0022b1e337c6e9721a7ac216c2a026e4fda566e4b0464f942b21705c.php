<?php

/* login.html.twig */
class __TwigTemplate_d4197f763d4a0549bc80934a57ec708d86b704fb2d6b27c6e8ce4994729b0aed extends Twig_Template
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
        $__internal_5e92d7f1ab48f3693796572ba6c6d176150a73bf14ab77b3b1bda9214fa1f54b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e92d7f1ab48f3693796572ba6c6d176150a73bf14ab77b3b1bda9214fa1f54b->enter($__internal_5e92d7f1ab48f3693796572ba6c6d176150a73bf14ab77b3b1bda9214fa1f54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e92d7f1ab48f3693796572ba6c6d176150a73bf14ab77b3b1bda9214fa1f54b->leave($__internal_5e92d7f1ab48f3693796572ba6c6d176150a73bf14ab77b3b1bda9214fa1f54b_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_83aa6363e3b3a5561531279c43e4cc9d1eb11b0eaff5f895baf6ec2c65f3271d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83aa6363e3b3a5561531279c43e4cc9d1eb11b0eaff5f895baf6ec2c65f3271d->enter($__internal_83aa6363e3b3a5561531279c43e4cc9d1eb11b0eaff5f895baf6ec2c65f3271d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 17
            echo "          <div class=\"error\">";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div>
        ";
        }
        // line 19
        echo "      </form>
    </div>
  </main>
";
        
        $__internal_83aa6363e3b3a5561531279c43e4cc9d1eb11b0eaff5f895baf6ec2c65f3271d->leave($__internal_83aa6363e3b3a5561531279c43e4cc9d1eb11b0eaff5f895baf6ec2c65f3271d_prof);

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
", "login.html.twig", "C:\\xampp\\htdocs\\www.silex.local\\templates\\login.html.twig");
    }
}

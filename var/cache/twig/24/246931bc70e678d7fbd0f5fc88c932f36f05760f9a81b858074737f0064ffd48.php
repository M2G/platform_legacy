<?php

/* edit.html.twig */
class __TwigTemplate_90a2431f884d03deebc851dc10f9b3a856aa8db734fdcef1853e9f371ca6d66e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "edit.html.twig", 1);
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
        $__internal_aaa7755b588082933d9dac93f49a45aab8c64b613fd4d0df2f9b4e7eaa78be6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa7755b588082933d9dac93f49a45aab8c64b613fd4d0df2f9b4e7eaa78be6b->enter($__internal_aaa7755b588082933d9dac93f49a45aab8c64b613fd4d0df2f9b4e7eaa78be6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaa7755b588082933d9dac93f49a45aab8c64b613fd4d0df2f9b4e7eaa78be6b->leave($__internal_aaa7755b588082933d9dac93f49a45aab8c64b613fd4d0df2f9b4e7eaa78be6b_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_5aca935d195020d13fa225a0f8408e844015b26886de27b2809f1d6c37eb0b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aca935d195020d13fa225a0f8408e844015b26886de27b2809f1d6c37eb0b24->enter($__internal_5aca935d195020d13fa225a0f8408e844015b26886de27b2809f1d6c37eb0b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "  <main class=\"o-zone\">
    <div id=\"main\" class=\"o-grid\">
      <div class=\"o-grid__row\">
        <form name=\"form\" method=\"post\" action=\"\">
        ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 8
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 9
                echo "          <div class=\"form-group\">
            <input class=\"form-control\" type=\"text\" name=\"id\" value=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\" disabled>
          </div>
          <div class=\"form-group\">
            <input class=\"form-control\" type=\"text\" name=\"username\" value=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "\">
          </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        ";
        }
        // line 17
        echo "        <div class=\"form-group\">
          <input class=\"btn o-margin--top submit\" type=\"submit\" name=\"submit\">
        </div>
      </form>
      </div>
    </div>
  </main>
";
        
        $__internal_5aca935d195020d13fa225a0f8408e844015b26886de27b2809f1d6c37eb0b24->leave($__internal_5aca935d195020d13fa225a0f8408e844015b26886de27b2809f1d6c37eb0b24_prof);

    }

    public function getTemplateName()
    {
        return "edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 17,  71 => 16,  62 => 13,  56 => 10,  53 => 9,  48 => 8,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
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
  <main class=\"o-zone\">
    <div id=\"main\" class=\"o-grid\">
      <div class=\"o-grid__row\">
        <form name=\"form\" method=\"post\" action=\"\">
        {% if is_granted('ROLE_USER') %}
        {% for user in users %}
          <div class=\"form-group\">
            <input class=\"form-control\" type=\"text\" name=\"id\" value=\"{{ user.id }}\" disabled>
          </div>
          <div class=\"form-group\">
            <input class=\"form-control\" type=\"text\" name=\"username\" value=\"{{ user.username }}\">
          </div>
          {%  endfor %}
        {% endif %}
        <div class=\"form-group\">
          <input class=\"btn o-margin--top submit\" type=\"submit\" name=\"submit\">
        </div>
      </form>
      </div>
    </div>
  </main>
{% endblock %}
", "edit.html.twig", "C:\\MAMP\\htdocs\\www.silex.local\\templates\\edit.html.twig");
    }
}

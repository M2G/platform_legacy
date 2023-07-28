<?php

/* list.html.twig */
class __TwigTemplate_ca3553c8e27fbdd30e4e289dfd54ccfc294891d5730cfcc7d2fbfb33acbfc07c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "list.html.twig", 1);
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
        $__internal_bf64b9be38f8de45a7c641a6e702c4ccb4348b9c019bdc4f4ff8128d843b3165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf64b9be38f8de45a7c641a6e702c4ccb4348b9c019bdc4f4ff8128d843b3165->enter($__internal_bf64b9be38f8de45a7c641a6e702c4ccb4348b9c019bdc4f4ff8128d843b3165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf64b9be38f8de45a7c641a6e702c4ccb4348b9c019bdc4f4ff8128d843b3165->leave($__internal_bf64b9be38f8de45a7c641a6e702c4ccb4348b9c019bdc4f4ff8128d843b3165_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_628b27e92668417a34c21ae030d1ecb0eff94f996473240a1f8d0daa26f7fa73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628b27e92668417a34c21ae030d1ecb0eff94f996473240a1f8d0daa26f7fa73->enter($__internal_628b27e92668417a34c21ae030d1ecb0eff94f996473240a1f8d0daa26f7fa73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "  <main id=\"main\" class=\"o-grid\">
    <div class=\"o-grid__row\">
          ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 6
            echo "          <table>
              <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Statut</th>
                <th>Supprimer un membre</th>
                </tr>
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 14
                echo "                <tr>
                  <td>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</td>
                  <td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "roles", array()), "html", null, true);
                echo "</td>
                  <td><a href='list/users/";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "' onclick='return(confirm(`Êtes-vous sûr de vouloir supprimer ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo " ?`))'>Supprimer ce membre</a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </table>
          ";
        }
        // line 23
        echo "      </div>
  </main>
";
        
        $__internal_628b27e92668417a34c21ae030d1ecb0eff94f996473240a1f8d0daa26f7fa73->leave($__internal_628b27e92668417a34c21ae030d1ecb0eff94f996473240a1f8d0daa26f7fa73_prof);

    }

    public function getTemplateName()
    {
        return "list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 23,  85 => 21,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  59 => 14,  55 => 13,  46 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
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
    <div class=\"o-grid__row\">
          {% if is_granted('ROLE_ADMIN') %}
          <table>
              <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Statut</th>
                <th>Supprimer un membre</th>
                </tr>
                {% for user in users %}
                <tr>
                  <td>{{ user.id }}</td>
                  <td>{{ user.username }}</td>
                  <td>{{ user.roles }}</td>
                  <td><a href='list/users/{{ user.id }}' onclick='return(confirm(`Êtes-vous sûr de vouloir supprimer {{ user.username }} ?`))'>Supprimer ce membre</a></td>
                </tr>
                {%  endfor %}
            </table>
          {% endif %}
      </div>
  </main>
{% endblock %}
", "list.html.twig", "C:\\xampp\\htdocs\\www.silex.local\\templates\\list.html.twig");
    }
}

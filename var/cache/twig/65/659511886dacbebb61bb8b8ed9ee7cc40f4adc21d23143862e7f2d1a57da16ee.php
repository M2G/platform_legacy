<?php

/* list.html.twig */
class __TwigTemplate_92c94eb7be991aed59cc0633aa811110914e32fc877689f22372d022201fd3e6 extends Twig_Template
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
        $__internal_88667c1b1e545f458272d8fd06c48ecda8d11d555efb8927f3eda1e787f8c2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88667c1b1e545f458272d8fd06c48ecda8d11d555efb8927f3eda1e787f8c2b3->enter($__internal_88667c1b1e545f458272d8fd06c48ecda8d11d555efb8927f3eda1e787f8c2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88667c1b1e545f458272d8fd06c48ecda8d11d555efb8927f3eda1e787f8c2b3->leave($__internal_88667c1b1e545f458272d8fd06c48ecda8d11d555efb8927f3eda1e787f8c2b3_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_bff3dc3b97f6a52fd0703eb8958c329b662620d98fe8d01ec30444e6d731ca82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff3dc3b97f6a52fd0703eb8958c329b662620d98fe8d01ec30444e6d731ca82->enter($__internal_bff3dc3b97f6a52fd0703eb8958c329b662620d98fe8d01ec30444e6d731ca82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
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
        
        $__internal_bff3dc3b97f6a52fd0703eb8958c329b662620d98fe8d01ec30444e6d731ca82->leave($__internal_bff3dc3b97f6a52fd0703eb8958c329b662620d98fe8d01ec30444e6d731ca82_prof);

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
", "list.html.twig", "C:\\MAMP\\htdocs\\www.silex.local\\templates\\list.html.twig");
    }
}

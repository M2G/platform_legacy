<?php

/* home.html.twig */
class __TwigTemplate_5b00b0827d620ee3b40530004d9ae71ae72396ab31ab2c0cef5acf3a90b6ebc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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
        $__internal_bc498d5d2955d52e91aa15103b4461929ce648578da19ede7e58181f175e55e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc498d5d2955d52e91aa15103b4461929ce648578da19ede7e58181f175e55e2->enter($__internal_bc498d5d2955d52e91aa15103b4461929ce648578da19ede7e58181f175e55e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc498d5d2955d52e91aa15103b4461929ce648578da19ede7e58181f175e55e2->leave($__internal_bc498d5d2955d52e91aa15103b4461929ce648578da19ede7e58181f175e55e2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_151be55fc150b5d63006bbd7e6164555e8a76a9add37085a96cac7c19481d113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151be55fc150b5d63006bbd7e6164555e8a76a9add37085a96cac7c19481d113->enter($__internal_151be55fc150b5d63006bbd7e6164555e8a76a9add37085a96cac7c19481d113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "  <main class=\"l-container\">

    ";
        // line 10
        echo "    <nav class=\"c-header__navigation\">
      <ul id=\"list\" class=\"u-inline-list\">
        ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 13
            echo "          <li>
            <span href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">
              Bienvenue ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["global"]) ? $context["global"] : $this->getContext($context, "global")), "user", array()), "html", null, true);
            echo "!
            </span>
          </li>
          <li>
            ";
            // line 20
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">
              Déconnexion
            </a>
          </li>
        ";
        } else {
            // line 25
            echo "          <li>
            <a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">
              Connexion
            </a>
          </li>
          <li>
            <a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\">
              Inscription
            </a>
          </li>
        ";
        }
        // line 36
        echo "      </ul>
    </nav>

    ";
        // line 40
        echo "    ";
        // line 41
        echo "    <!-- ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $this->getAttribute((isset($context["global"]) ? $context["global"] : $this->getContext($context, "global")), "session", array()));
        echo "
    ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $this->getAttribute((isset($context["global"]) ? $context["global"] : $this->getContext($context, "global")), "user", array()));
        echo "
    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $this->getAttribute((isset($context["global"]) ? $context["global"] : $this->getContext($context, "global")), "debug", array()));
        echo "
    ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["songs"]) ? $context["songs"] : $this->getContext($context, "songs")));
        echo " -->
    ";
        // line 46
        echo "
    ";
        // line 48
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "connexion"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
            // line 49
            echo "      <div class=\"error-message\">
        <div class=\"alert\"><strong>";
            // line 50
            echo twig_escape_filter($this->env, $context["alert"], "html", null, true);
            echo "</strong></div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "

    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["songs"]) ? $context["songs"] : $this->getContext($context, "songs")));
        foreach ($context['_seq'] as $context["_key"] => $context["song"]) {
            // line 56
            echo "      <div class=\"error-message\">
        <div class=\"alert\"><strong>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["song"], "title", array()), "html", null, true);
            echo "</strong></div>

        <audio controls>
                <source src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["song"], "url", array()), "html", null, true);
            echo "\" type=\"\">
              </audio>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['song'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
    <div class=\"container\" id=\"main\" ng-controller=\"searchCtrl\" ng-cloak>
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <form ng-submit=\"onSubmit()\">
            <div class=\"form-inline\">
              <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" ng-model=\"searchTerm\" placeholder=\"Rechercher un nom d'artiste, de groupe, ou de genre...\">
                </div>
                <div class=\"form-group\">
                <input class=\"form-control\" type=\"search\" ng-model=\"Filter\" placeholder=\"Filter by AngularJS\">
                </div>
                <span class=\"form-group\">
                <button class=\"btn btn-secondary\" type=\"submit\">Rechercher</button>
                </span>
              </div>
            </div>
          </form>

          <div id=\"search-results\" class=\"c-results\" ng-if=\"searchResults.length > 0\">
            <div ng-repeat=\"track in searchResults | filter:Filter\">
            ";
        // line 96
        echo "
            <ul>
               <li>
                 <img class=\"artwork_url\" ng-src=\"{{ track.artwork_url }}\">
                        <p class=\"text-center\">{{ track.title }}</p>
                     </li>
                  </ul>
                  <audio class=\"player loop\" controls crossorigin=\"anonymous\" style=\"width: 100%;\">
                     <source ng-src=\"{{ track.stream_url }}\">
                  </audio>
              <button type=\"button\" class=\"btn btn-defaut\" ng-click=\"addSong()\">Ajouter</button>
            ";
        echo "
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
";
        
        $__internal_151be55fc150b5d63006bbd7e6164555e8a76a9add37085a96cac7c19481d113->leave($__internal_151be55fc150b5d63006bbd7e6164555e8a76a9add37085a96cac7c19481d113_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 96,  163 => 64,  153 => 60,  147 => 57,  144 => 56,  140 => 55,  136 => 53,  127 => 50,  124 => 49,  119 => 48,  116 => 46,  112 => 44,  108 => 43,  104 => 42,  99 => 41,  97 => 40,  92 => 36,  84 => 31,  76 => 26,  73 => 25,  64 => 20,  57 => 15,  53 => 14,  50 => 13,  48 => 12,  44 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
  <main class=\"l-container\">

    {#
      Parce que nous l'avons configuré avant, le service sécurité de Silex nous
      donne cette fonction de base dans tous les templates twig.
    #}
    <nav class=\"c-header__navigation\">
      <ul id=\"list\" class=\"u-inline-list\">
        {% if is_granted('ROLE_USER') %}
          <li>
            <span href=\"{{ path('login') }}\">
              Bienvenue {{ global.user }}!
            </span>
          </li>
          <li>
            {# Ce chemin 'logout' est généré depuis app/config/security.php #}
            <a href=\"{{ path('logout') }}\">
              Déconnexion
            </a>
          </li>
        {% else %}
          <li>
            <a href=\"{{ path('login') }}\">
              Connexion
            </a>
          </li>
          <li>
            <a href=\"{{ path('register') }}\">
              Inscription
            </a>
          </li>
        {% endif %}
      </ul>
    </nav>

    {# Décommente ce bloc pour voir plein de trucs interessants ! #}
    {##}
    <!-- {{ dump(global.session) }}
    {{ dump(global.user) }}
    {{ dump(global.debug) }}
    {{ dump(songs) }} -->
    {##}

    {# On vérifie s'il y a des messages flash à montrer #}
    {% for alert in app.session.flashbag.get('connexion') %}
      <div class=\"error-message\">
        <div class=\"alert\"><strong>{{ alert }}</strong></div>
      </div>
    {% endfor %}


    {% for song in songs %}
      <div class=\"error-message\">
        <div class=\"alert\"><strong>{{ song.title }}</strong></div>

        <audio controls>
                <source src=\"{{ song.url }}\" type=\"\">
              </audio>
      </div>
    {% endfor %}

    <div class=\"container\" id=\"main\" ng-controller=\"searchCtrl\" ng-cloak>
      <div class=\"row\">
        <div class=\"col-sm-12\">
          <form ng-submit=\"onSubmit()\">
            <div class=\"form-inline\">
              <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" ng-model=\"searchTerm\" placeholder=\"Rechercher un nom d'artiste, de groupe, ou de genre...\">
                </div>
                <div class=\"form-group\">
                <input class=\"form-control\" type=\"search\" ng-model=\"Filter\" placeholder=\"Filter by AngularJS\">
                </div>
                <span class=\"form-group\">
                <button class=\"btn btn-secondary\" type=\"submit\">Rechercher</button>
                </span>
              </div>
            </div>
          </form>

          <div id=\"search-results\" class=\"c-results\" ng-if=\"searchResults.length > 0\">
            <div ng-repeat=\"track in searchResults | filter:Filter\">
            {% verbatim %}
            <ul>
               <li>
                 <img class=\"artwork_url\" ng-src=\"{{ track.artwork_url }}\">
                        <p class=\"text-center\">{{ track.title }}</p>
                     </li>
                  </ul>
                  <audio class=\"player loop\" controls crossorigin=\"anonymous\" style=\"width: 100%;\">
                     <source ng-src=\"{{ track.stream_url }}\">
                  </audio>
              <button type=\"button\" class=\"btn btn-defaut\" ng-click=\"addSong()\">Ajouter</button>
            {% endverbatim %}
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
{% endblock %}
", "home.html.twig", "C:\\MAMP\\htdocs\\www.silex.local\\templates\\home.html.twig");
    }
}

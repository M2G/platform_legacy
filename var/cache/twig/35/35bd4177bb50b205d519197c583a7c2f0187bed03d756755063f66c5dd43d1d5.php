<?php

/* home.html.twig */
class __TwigTemplate_f1bfb4a62c43afc65c78708a50e21296391369e3c8abbb72dac3a7e2e60ca227 extends Twig_Template
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
        $__internal_47821769f3ba808f7dd64f82a61afd0162f5b220b3856c96dd40ec392fdcfd15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47821769f3ba808f7dd64f82a61afd0162f5b220b3856c96dd40ec392fdcfd15->enter($__internal_47821769f3ba808f7dd64f82a61afd0162f5b220b3856c96dd40ec392fdcfd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47821769f3ba808f7dd64f82a61afd0162f5b220b3856c96dd40ec392fdcfd15->leave($__internal_47821769f3ba808f7dd64f82a61afd0162f5b220b3856c96dd40ec392fdcfd15_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_c40577f6db0b673d15796226d703ba20e9d32888abab10ebc41fbe6fced2a36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40577f6db0b673d15796226d703ba20e9d32888abab10ebc41fbe6fced2a36b->enter($__internal_c40577f6db0b673d15796226d703ba20e9d32888abab10ebc41fbe6fced2a36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "  <main id=\"scroll\">
  ";
        // line 8
        echo "<nav class=\"c-navigation__mobile\">
   <a class=\"show-sidebar\" title=\"Toggle sidebar\">
   <span class=\"bar-1\"></span>
   <span class=\"bar-2\"></span>
   <span class=\"bar-3\"></span>
   </a>
   <div class=\"c-sidebar__primary\">
      <aside class=\"c-aside c-aside_nav__menu\">
         <div class=\"c-sidebar__container\">
            <ul class=\"u-inline-list__mobile\">
               ";
        // line 18
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 19
            echo "               <li>
                  <a class=\"list\" thref=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">
                  Bienvenue ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["global"]) ? $context["global"] : $this->getContext($context, "global")), "user", array()), "html", null, true);
            echo " !
                  </a>
               </li>
               <li>
                  ";
            // line 26
            echo "                  <a class=\"list\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">
                  Déconnexion
                  </a>
               </li>
               ";
        } else {
            // line 31
            echo "               <li>
                  <a class=\"list\" href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">
                  Connexion
                  </a>
               </li>
               <li>
                  <a class=\"list\" href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\">
                  Inscription
                  </a>
               </li>
               ";
        }
        // line 42
        echo "               ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 43
            echo "               <li>
                  <a class=\"list\" href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list");
            echo "\">
                  Liste des utilisateurs
                  </a>
               </li>
               ";
        }
        // line 49
        echo "               ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 50
            echo "               <li>
                  <a class=\"list\" href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit");
            echo "\">
                  Modification du compte
                  </a>
               </li>
               ";
        }
        // line 56
        echo "            </ul>
         </div>
      </aside>
   </div>
</nav>
<nav class=\"c-navigation\">
   <ul class=\"u-inline-list\">
      ";
        // line 63
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 64
            echo "      <li>
         <a class=\"list\" thref=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">
         Bienvenue ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["global"]) ? $context["global"] : $this->getContext($context, "global")), "user", array()), "html", null, true);
            echo " !
         </a>
      </li>
      <li>
         ";
            // line 71
            echo "         <a class=\"list\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">
         Déconnexion
         </a>
      </li>
      ";
        } else {
            // line 76
            echo "      <li>
         <a class=\"list\" href=\"";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">
         Connexion
         </a>
      </li>
      <li>
         <a class=\"list\" href=\"";
            // line 82
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\">
         Inscription
         </a>
      </li>
      ";
        }
        // line 87
        echo "      ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 88
            echo "      <li>
         <a class=\"list\" href=\"";
            // line 89
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list");
            echo "\">
         Liste des utilisateurs
         </a>
      </li>
      ";
        }
        // line 94
        echo "      ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 95
            echo "      <li>
         <a class=\"list\" href=\"";
            // line 96
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit");
            echo "\">
         Modification du compte
         </a>
      </li>
      ";
        }
        // line 101
        echo "   </ul>
</nav>
";
        // line 104
        echo "<div class=\"o-grid\" id=\"main\">
   <!-- ngCloak est une directive AngularJS qui masque un élément jusqu'à ce que l'application soit correctement chargée. -->
   <div class=\"o-grid__row\" ng-controller=\"searchCtrl\" ng-cloak>
      <form ng-submit=\"onSubmit()\">
         <div class=\"form-inline\">
            <div class=\"form-group\">
               <input type=\"text\" class=\"form-control\" ng-model=\"searchTerm\" placeholder=\"Rechercher un nom d'artiste, de groupe, ou de genre...\">
            </div>
            <div class=\"form-group\">
               <input class=\"form-control\" type=\"search\" ng-model=\"Filter\" placeholder=\"Filter by AngularJS\">
            </div>
            <div class=\"form-group\">
               <button class=\"btn\" type=\"submit\">Rechercher</button>
            </div>
         </div>
      </form>
      <!-- Il s’agit d’une structure conditionnelle de type if qui s’utilise directement dans le template.
         Si l’expression qu’elle évalue est true, l’élément s’affiche, sinon il n’affiche pas. -->
      <div id=\"search-results\" ng-if=\"searchResults.length > 0\">
         <div class=\"o-padding--top\" ng-click=\"playSong(track)\" ng-repeat=\"track in searchResults | filter:Filter\">
            ";
        // line 133
        echo "
            <div class=\"c-results\">
               <img class=\"artwork\" ng-src=\"{{ track.artwork_url }}\">
               <!-- src=\"{{ track.artwork_url }} --> <!-- A RESOUDRE -->
               <p class=\"text-center\">{{ track.title }}</p>
            </div>
            <div class=\"c-playlist__tool o-padding--top\">
               <button type=\"button\" class=\"btn o-margin--right\" ng-click=\"addSong()\" title=\"Ajouter\">Ajouter</button>
            </div>
            ";
        echo "
         </div>
         <!-- end ng-repeat -->
      </div>
      <!-- end c-results -->
   </div>
   <!-- end ng-conroller -->
   ";
        // line 140
        $this->loadTemplate("partials/equaliser.html.twig", "home.html.twig", 140)->display($context);
        // line 141
        echo "   ";
        $this->loadTemplate("player.html.twig", "home.html.twig", 141)->display($context);
        // line 142
        echo "</div>
<!-- end id main -->
<a href=\"#scroll\">
   <svg class=\"lnr lnr-chevron-up\">
      <use xlink:href=\"#lnr-chevron-up\"></use>
   </svg>
</a>
<main>
";
        // line 152
        echo "    ";
        // line 156
        echo "    ";
        // line 157
        echo "    ";
        // line 161
        echo " ";
        
        $__internal_c40577f6db0b673d15796226d703ba20e9d32888abab10ebc41fbe6fced2a36b->leave($__internal_c40577f6db0b673d15796226d703ba20e9d32888abab10ebc41fbe6fced2a36b_prof);

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
        return array (  274 => 161,  272 => 157,  270 => 156,  268 => 152,  258 => 142,  255 => 141,  253 => 140,  234 => 133,  212 => 104,  208 => 101,  200 => 96,  197 => 95,  194 => 94,  186 => 89,  183 => 88,  180 => 87,  172 => 82,  164 => 77,  161 => 76,  152 => 71,  145 => 66,  141 => 65,  138 => 64,  136 => 63,  127 => 56,  119 => 51,  116 => 50,  113 => 49,  105 => 44,  102 => 43,  99 => 42,  91 => 37,  83 => 32,  80 => 31,  71 => 26,  64 => 21,  60 => 20,  57 => 19,  55 => 18,  43 => 8,  40 => 3,  34 => 2,  11 => 1,);
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
  <main id=\"scroll\">
  {#
Parce que nous l'avons configuré avant, le service sécurité de Silex nous
donne cette fonction de base dans tous les templates twig.
#}
<nav class=\"c-navigation__mobile\">
   <a class=\"show-sidebar\" title=\"Toggle sidebar\">
   <span class=\"bar-1\"></span>
   <span class=\"bar-2\"></span>
   <span class=\"bar-3\"></span>
   </a>
   <div class=\"c-sidebar__primary\">
      <aside class=\"c-aside c-aside_nav__menu\">
         <div class=\"c-sidebar__container\">
            <ul class=\"u-inline-list__mobile\">
               {% if is_granted('ROLE_USER') %}
               <li>
                  <a class=\"list\" thref=\"{{ path('login') }}\">
                  Bienvenue {{ global.user }} !
                  </a>
               </li>
               <li>
                  {# Ce chemin 'logout' est généré depuis app/config/security.php #}
                  <a class=\"list\" href=\"{{ path('logout') }}\">
                  Déconnexion
                  </a>
               </li>
               {% else %}
               <li>
                  <a class=\"list\" href=\"{{ path('login') }}\">
                  Connexion
                  </a>
               </li>
               <li>
                  <a class=\"list\" href=\"{{ path('register') }}\">
                  Inscription
                  </a>
               </li>
               {% endif %}
               {% if is_granted('ROLE_ADMIN') %}
               <li>
                  <a class=\"list\" href=\"{{ path('list') }}\">
                  Liste des utilisateurs
                  </a>
               </li>
               {% endif %}
               {% if is_granted('ROLE_USER') %}
               <li>
                  <a class=\"list\" href=\"{{ path('edit') }}\">
                  Modification du compte
                  </a>
               </li>
               {% endif %}
            </ul>
         </div>
      </aside>
   </div>
</nav>
<nav class=\"c-navigation\">
   <ul class=\"u-inline-list\">
      {% if is_granted('ROLE_USER') %}
      <li>
         <a class=\"list\" thref=\"{{ path('login') }}\">
         Bienvenue {{ global.user }} !
         </a>
      </li>
      <li>
         {# Ce chemin 'logout' est généré depuis app/config/security.php #}
         <a class=\"list\" href=\"{{ path('logout') }}\">
         Déconnexion
         </a>
      </li>
      {% else %}
      <li>
         <a class=\"list\" href=\"{{ path('login') }}\">
         Connexion
         </a>
      </li>
      <li>
         <a class=\"list\" href=\"{{ path('register') }}\">
         Inscription
         </a>
      </li>
      {% endif %}
      {% if is_granted('ROLE_ADMIN') %}
      <li>
         <a class=\"list\" href=\"{{ path('list') }}\">
         Liste des utilisateurs
         </a>
      </li>
      {% endif %}
      {% if is_granted('ROLE_USER') %}
      <li>
         <a class=\"list\" href=\"{{ path('edit') }}\">
         Modification du compte
         </a>
      </li>
      {% endif %}
   </ul>
</nav>
{##}
<div class=\"o-grid\" id=\"main\">
   <!-- ngCloak est une directive AngularJS qui masque un élément jusqu'à ce que l'application soit correctement chargée. -->
   <div class=\"o-grid__row\" ng-controller=\"searchCtrl\" ng-cloak>
      <form ng-submit=\"onSubmit()\">
         <div class=\"form-inline\">
            <div class=\"form-group\">
               <input type=\"text\" class=\"form-control\" ng-model=\"searchTerm\" placeholder=\"Rechercher un nom d'artiste, de groupe, ou de genre...\">
            </div>
            <div class=\"form-group\">
               <input class=\"form-control\" type=\"search\" ng-model=\"Filter\" placeholder=\"Filter by AngularJS\">
            </div>
            <div class=\"form-group\">
               <button class=\"btn\" type=\"submit\">Rechercher</button>
            </div>
         </div>
      </form>
      <!-- Il s’agit d’une structure conditionnelle de type if qui s’utilise directement dans le template.
         Si l’expression qu’elle évalue est true, l’élément s’affiche, sinon il n’affiche pas. -->
      <div id=\"search-results\" ng-if=\"searchResults.length > 0\">
         <div class=\"o-padding--top\" ng-click=\"playSong(track)\" ng-repeat=\"track in searchResults | filter:Filter\">
            {% verbatim %}
            <div class=\"c-results\">
               <img class=\"artwork\" ng-src=\"{{ track.artwork_url }}\">
               <!-- src=\"{{ track.artwork_url }} --> <!-- A RESOUDRE -->
               <p class=\"text-center\">{{ track.title }}</p>
            </div>
            <div class=\"c-playlist__tool o-padding--top\">
               <button type=\"button\" class=\"btn o-margin--right\" ng-click=\"addSong()\" title=\"Ajouter\">Ajouter</button>
            </div>
            {% endverbatim %}
         </div>
         <!-- end ng-repeat -->
      </div>
      <!-- end c-results -->
   </div>
   <!-- end ng-conroller -->
   {% include 'partials/equaliser.html.twig' %}
   {% include 'player.html.twig' %}
</div>
<!-- end id main -->
<a href=\"#scroll\">
   <svg class=\"lnr lnr-chevron-up\">
      <use xlink:href=\"#lnr-chevron-up\"></use>
   </svg>
</a>
<main>
{# Décommente ce bloc pour voir plein de trucs interessants ! {#
{##}
    {# {{ dump(global.session) }}
{{ dump(global.user) }}
{{ dump(global.debug) }}
{{ dump(songs) }} #}
    {##}
    {# On vérifie s'il y a des messages flash à montrer # } {% for alert in app.session.flashbag.get('connexion') %}
<div class=\"error-message\">
   <div class=\"alert\"> <strong>{{ alert }}</strong> </div>
</div>
{% endfor %} {##} {% endblock %}
", "home.html.twig", "/Applications/MAMP/htdocs/www.silex.local/templates/home.html.twig");
    }
}

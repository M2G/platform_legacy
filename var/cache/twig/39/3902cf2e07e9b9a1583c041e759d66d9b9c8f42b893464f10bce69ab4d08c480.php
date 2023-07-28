<?php

/* playlist.html.twig */
class __TwigTemplate_da5da0a8991262b89d3c961f719681f5c9fffcaf49b3d967cfba7f60dbb4a7f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "playlist.html.twig", 1);
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
        $__internal_2cbb42719e0d85ee7670934000142bea063e6bba353997720fb7df1a00c79f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbb42719e0d85ee7670934000142bea063e6bba353997720fb7df1a00c79f91->enter($__internal_2cbb42719e0d85ee7670934000142bea063e6bba353997720fb7df1a00c79f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "playlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cbb42719e0d85ee7670934000142bea063e6bba353997720fb7df1a00c79f91->leave($__internal_2cbb42719e0d85ee7670934000142bea063e6bba353997720fb7df1a00c79f91_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_77f23bfafed72f8a3a55e2da34a3a7a058f83fc13338974f50e07bc67d9edd56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f23bfafed72f8a3a55e2da34a3a7a058f83fc13338974f50e07bc67d9edd56->enter($__internal_77f23bfafed72f8a3a55e2da34a3a7a058f83fc13338974f50e07bc67d9edd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<main class=\"o-grid\">
   <div class=\"o-grid__row\">
      <div id=\"playlist\" class=\"c-playlist__Ctrl\" ng-controller=\"playlistCtrl\">
         <!-- boucle ici avec silex et twig sur les chansons du playlist -->
         ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 8
            echo "         ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["songs"]) ? $context["songs"] : $this->getContext($context, "songs")));
            foreach ($context['_seq'] as $context["_key"] => $context["song"]) {
                echo " <!-- boucle twig qui récupère les musiques depuis la database -->
         <div class=\"c-results\" data-audio=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["song"], "url", array()), "html", null, true);
                echo "\"> <!-- l'url soundcloud de la musique -->
            <img class=\"artwork\" src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["song"], "artwork", array()), "html", null, true);
                echo "\"> <!-- l'artwork (img) de la musique -->
            <p class=\"text-center\">";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["song"], "title", array()), "html", null, true);
                echo "</p> <!-- le titre de la musique -->
            <a class=\"o-margin--all\" href=\"playlist/";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["song"], "id", array()), "html", null, true);
                echo "\"><svg class=\"lnr lnr-cross\"><use xlink:href=\"#lnr-cross\"></use></svg></a> <!-- supprime sur la database {id} du songs -->
         </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['song'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "         <button class=\"btn o-margin--top\"><a href=\"playlist/0\">Reset playlist</button> <!-- reset tout la playlist de l'user qui est connecté -->
         ";
        }
        // line 17
        echo "      </div>
       ";
        // line 18
        $this->loadTemplate("player.html.twig", "playlist.html.twig", 18)->display($context);
        // line 19
        echo "   </div>
</main>
";
        // line 25
        echo "
<script id=\"playlist-data\" type=\"application/json\">
   {{ jsonString }}
</script>
";
        echo "
";
        
        $__internal_77f23bfafed72f8a3a55e2da34a3a7a058f83fc13338974f50e07bc67d9edd56->leave($__internal_77f23bfafed72f8a3a55e2da34a3a7a058f83fc13338974f50e07bc67d9edd56_prof);

    }

    public function getTemplateName()
    {
        return "playlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  85 => 19,  83 => 18,  80 => 17,  76 => 15,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  48 => 8,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
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
<main class=\"o-grid\">
   <div class=\"o-grid__row\">
      <div id=\"playlist\" class=\"c-playlist__Ctrl\" ng-controller=\"playlistCtrl\">
         <!-- boucle ici avec silex et twig sur les chansons du playlist -->
         {% if is_granted('ROLE_USER') %}
         {% for song in songs %} <!-- boucle twig qui récupère les musiques depuis la database -->
         <div class=\"c-results\" data-audio=\"{{ song.url }}\"> <!-- l'url soundcloud de la musique -->
            <img class=\"artwork\" src=\"{{ song.artwork }}\"> <!-- l'artwork (img) de la musique -->
            <p class=\"text-center\">{{ song.title }}</p> <!-- le titre de la musique -->
            <a class=\"o-margin--all\" href=\"playlist/{{ song.id }}\"><svg class=\"lnr lnr-cross\"><use xlink:href=\"#lnr-cross\"></use></svg></a> <!-- supprime sur la database {id} du songs -->
         </div>
         {%  endfor %}
         <button class=\"btn o-margin--top\"><a href=\"playlist/0\">Reset playlist</button> <!-- reset tout la playlist de l'user qui est connecté -->
         {% endif %}
      </div>
       {% include 'player.html.twig' %}
   </div>
</main>
{% verbatim %}
<script id=\"playlist-data\" type=\"application/json\">
   {{ jsonString }}
</script>
{% endverbatim %}
{% endblock %}
", "playlist.html.twig", "C:\\xampp\\htdocs\\www.silex.local\\templates\\playlist.html.twig");
    }
}

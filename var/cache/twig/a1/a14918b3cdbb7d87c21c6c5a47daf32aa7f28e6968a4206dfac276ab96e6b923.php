<?php

/* playlist.html.twig */
class __TwigTemplate_5817549194a9fc3f7c7c0745d35c532cc17b47322a0cae23f5ade1fe48c52022 extends Twig_Template
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
        $__internal_3bf0e2d639a793b8d43f5fb2dbe1e15e983d790eb72bec11ff979dc11273f1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf0e2d639a793b8d43f5fb2dbe1e15e983d790eb72bec11ff979dc11273f1ce->enter($__internal_3bf0e2d639a793b8d43f5fb2dbe1e15e983d790eb72bec11ff979dc11273f1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "playlist.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bf0e2d639a793b8d43f5fb2dbe1e15e983d790eb72bec11ff979dc11273f1ce->leave($__internal_3bf0e2d639a793b8d43f5fb2dbe1e15e983d790eb72bec11ff979dc11273f1ce_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_b7fbd0465de95b4cee6f789e19f744d38f48eca56c47f2545eabca918a61bdfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7fbd0465de95b4cee6f789e19f744d38f48eca56c47f2545eabca918a61bdfb->enter($__internal_b7fbd0465de95b4cee6f789e19f744d38f48eca56c47f2545eabca918a61bdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
<main class=\"o-grid\" id=\"main\">
   <div class=\"o-grid__row\">
      <div id=\"playlist\" class=\"c-playlist__Ctrl\" ng-controller=\"playlistCtrl\">
         <!-- boucle ici avec silex et twig sur les chansons du playlist -->
         ";
        // line 8
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
        echo "         <a class=\"btn\" href=\"playlist/0\">Reset playlist</a> <!-- reset tout la playlist de l'user qui est connecté -->

      </div>
       ";
        // line 18
        $this->loadTemplate("partials/equaliser.html.twig", "playlist.html.twig", 18)->display($context);
        // line 19
        echo "       ";
        $this->loadTemplate("player.html.twig", "playlist.html.twig", 19)->display($context);
        // line 20
        echo "   </div>
</main>
<script id=\"playlist-data\" type=\"application/json\">
   ";
        // line 23
        echo (isset($context["jsonString"]) ? $context["jsonString"] : $this->getContext($context, "jsonString"));
        echo "
</script>
";
        
        $__internal_b7fbd0465de95b4cee6f789e19f744d38f48eca56c47f2545eabca918a61bdfb->leave($__internal_b7fbd0465de95b4cee6f789e19f744d38f48eca56c47f2545eabca918a61bdfb_prof);

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
        return array (  89 => 23,  84 => 20,  81 => 19,  79 => 18,  74 => 15,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
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

<main class=\"o-grid\" id=\"main\">
   <div class=\"o-grid__row\">
      <div id=\"playlist\" class=\"c-playlist__Ctrl\" ng-controller=\"playlistCtrl\">
         <!-- boucle ici avec silex et twig sur les chansons du playlist -->
         {% for song in songs %} <!-- boucle twig qui récupère les musiques depuis la database -->
         <div class=\"c-results\" data-audio=\"{{ song.url }}\"> <!-- l'url soundcloud de la musique -->
            <img class=\"artwork\" src=\"{{ song.artwork }}\"> <!-- l'artwork (img) de la musique -->
            <p class=\"text-center\">{{ song.title }}</p> <!-- le titre de la musique -->
            <a class=\"o-margin--all\" href=\"playlist/{{ song.id }}\"><svg class=\"lnr lnr-cross\"><use xlink:href=\"#lnr-cross\"></use></svg></a> <!-- supprime sur la database {id} du songs -->
         </div>
         {%  endfor %}
         <a class=\"btn\" href=\"playlist/0\">Reset playlist</a> <!-- reset tout la playlist de l'user qui est connecté -->

      </div>
       {% include 'partials/equaliser.html.twig' %}
       {% include 'player.html.twig' %}
   </div>
</main>
<script id=\"playlist-data\" type=\"application/json\">
   {{ jsonString|raw }}
</script>
{% endblock %}
", "playlist.html.twig", "/Applications/MAMP/htdocs/www.silex.local/templates/playlist.html.twig");
    }
}

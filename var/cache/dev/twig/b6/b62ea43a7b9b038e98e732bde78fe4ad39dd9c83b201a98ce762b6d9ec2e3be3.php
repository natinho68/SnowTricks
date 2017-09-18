<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_a6a48fa54d2a4c202f23a67bc5bb2f3293742d43aeefb5f2c0774c7ff2a12a57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "UserBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_656a5fc5f89d433d2d9c02daabf4e51bcda78fa86b4e779afb68b88d35ba9cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656a5fc5f89d433d2d9c02daabf4e51bcda78fa86b4e779afb68b88d35ba9cf7->enter($__internal_656a5fc5f89d433d2d9c02daabf4e51bcda78fa86b4e779afb68b88d35ba9cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $__internal_223d61abf75b8de2ddafafc58636da56fc9af03ff4b5f9dc01305a7f76abc296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_223d61abf75b8de2ddafafc58636da56fc9af03ff4b5f9dc01305a7f76abc296->enter($__internal_223d61abf75b8de2ddafafc58636da56fc9af03ff4b5f9dc01305a7f76abc296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_656a5fc5f89d433d2d9c02daabf4e51bcda78fa86b4e779afb68b88d35ba9cf7->leave($__internal_656a5fc5f89d433d2d9c02daabf4e51bcda78fa86b4e779afb68b88d35ba9cf7_prof);

        
        $__internal_223d61abf75b8de2ddafafc58636da56fc9af03ff4b5f9dc01305a7f76abc296->leave($__internal_223d61abf75b8de2ddafafc58636da56fc9af03ff4b5f9dc01305a7f76abc296_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_76515186862ab301a87eab81271c8cfc8b1224c95fe69c7176981d53c487eedb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76515186862ab301a87eab81271c8cfc8b1224c95fe69c7176981d53c487eedb->enter($__internal_76515186862ab301a87eab81271c8cfc8b1224c95fe69c7176981d53c487eedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a187cbecb6dda85f08cb89cd6974151046ba6b6be1d537254654b3b894365801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a187cbecb6dda85f08cb89cd6974151046ba6b6be1d537254654b3b894365801->enter($__internal_a187cbecb6dda85f08cb89cd6974151046ba6b6be1d537254654b3b894365801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 8
        echo "
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 10
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                echo "            <div class=\"row\" style=\"padding-top:15px;\">
                <div class=\"col s12 m10 l10 offset-m1 offset-l1\">
                    <div class=\"chip black alert\">
                        <i class=\" close material-icons right white-text\">close</i>
                        <i class=\"material-icons white-text left\" style=\"padding-top: 2px;\">check_circle</i>
                        <h6 class=\"white-text\">";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "</h6>
                    </div>
                </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    ";
        // line 24
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 26
        echo "
";
        
        $__internal_a187cbecb6dda85f08cb89cd6974151046ba6b6be1d537254654b3b894365801->leave($__internal_a187cbecb6dda85f08cb89cd6974151046ba6b6be1d537254654b3b894365801_prof);

        
        $__internal_76515186862ab301a87eab81271c8cfc8b1224c95fe69c7176981d53c487eedb->leave($__internal_76515186862ab301a87eab81271c8cfc8b1224c95fe69c7176981d53c487eedb_prof);

    }

    // line 24
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5133920b00672fc2c451736ed46529a441549abe00a302730611285b6283813e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5133920b00672fc2c451736ed46529a441549abe00a302730611285b6283813e->enter($__internal_5133920b00672fc2c451736ed46529a441549abe00a302730611285b6283813e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d170b93ae9b6a4e6d3576cd90cf8f9fa3b9abf8e29176d5feaff3f33d0b4f808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d170b93ae9b6a4e6d3576cd90cf8f9fa3b9abf8e29176d5feaff3f33d0b4f808->enter($__internal_d170b93ae9b6a4e6d3576cd90cf8f9fa3b9abf8e29176d5feaff3f33d0b4f808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 25
        echo "    ";
        
        $__internal_d170b93ae9b6a4e6d3576cd90cf8f9fa3b9abf8e29176d5feaff3f33d0b4f808->leave($__internal_d170b93ae9b6a4e6d3576cd90cf8f9fa3b9abf8e29176d5feaff3f33d0b4f808_prof);

        
        $__internal_5133920b00672fc2c451736ed46529a441549abe00a302730611285b6283813e->leave($__internal_5133920b00672fc2c451736ed46529a441549abe00a302730611285b6283813e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 25,  106 => 24,  95 => 26,  92 => 24,  89 => 22,  83 => 21,  72 => 16,  65 => 11,  60 => 10,  56 => 9,  53 => 8,  50 => 6,  41 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# On étend notre layout #}
{% extends \"AppBundle::layout.html.twig\" %}

{# Dans notre layout, il faut définir le block body #}
{% block body %}

    {# On affiche les messages flash que définissent les contrôleurs du bundle #}

    {% for key, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"row\" style=\"padding-top:15px;\">
                <div class=\"col s12 m10 l10 offset-m1 offset-l1\">
                    <div class=\"chip black alert\">
                        <i class=\" close material-icons right white-text\">close</i>
                        <i class=\"material-icons white-text left\" style=\"padding-top: 2px;\">check_circle</i>
                        <h6 class=\"white-text\">{{ message|trans({}, 'FOSUserBundle') }}</h6>
                    </div>
                </div>
        </div>
        {% endfor %}
    {% endfor %}

    {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
    {% block fos_user_content %}
    {% endblock fos_user_content %}

{% endblock %}
", "UserBundle::layout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/UserBundle/Resources/views/layout.html.twig");
    }
}

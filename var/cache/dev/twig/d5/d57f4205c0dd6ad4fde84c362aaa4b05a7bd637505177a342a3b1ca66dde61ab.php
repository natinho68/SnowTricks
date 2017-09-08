<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_3e6f5e750dbcc360b571427a623b93ca2a5f48b2ecbfc89d25c27ef43d770603 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5749b4845996e1cadde05a9ea0076ac43fd1f9544d7a919e6632fb28a27614e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5749b4845996e1cadde05a9ea0076ac43fd1f9544d7a919e6632fb28a27614e1->enter($__internal_5749b4845996e1cadde05a9ea0076ac43fd1f9544d7a919e6632fb28a27614e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_3790e40a6dadf5098923caa31eedcaa0f98b2bd1a7b4c5c337cc288f8d1a1206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3790e40a6dadf5098923caa31eedcaa0f98b2bd1a7b4c5c337cc288f8d1a1206->enter($__internal_3790e40a6dadf5098923caa31eedcaa0f98b2bd1a7b4c5c337cc288f8d1a1206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5749b4845996e1cadde05a9ea0076ac43fd1f9544d7a919e6632fb28a27614e1->leave($__internal_5749b4845996e1cadde05a9ea0076ac43fd1f9544d7a919e6632fb28a27614e1_prof);

        
        $__internal_3790e40a6dadf5098923caa31eedcaa0f98b2bd1a7b4c5c337cc288f8d1a1206->leave($__internal_3790e40a6dadf5098923caa31eedcaa0f98b2bd1a7b4c5c337cc288f8d1a1206_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e5dc4a9651ea66bd0675caad653fea35efc937273ed2ffcb16a2be6b129c516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e5dc4a9651ea66bd0675caad653fea35efc937273ed2ffcb16a2be6b129c516->enter($__internal_4e5dc4a9651ea66bd0675caad653fea35efc937273ed2ffcb16a2be6b129c516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9bace8d9e11813b3940260712a78137271602cf4d97c6c7bf61a1ceae7decf91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bace8d9e11813b3940260712a78137271602cf4d97c6c7bf61a1ceae7decf91->enter($__internal_9bace8d9e11813b3940260712a78137271602cf4d97c6c7bf61a1ceae7decf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_9bace8d9e11813b3940260712a78137271602cf4d97c6c7bf61a1ceae7decf91->leave($__internal_9bace8d9e11813b3940260712a78137271602cf4d97c6c7bf61a1ceae7decf91_prof);

        
        $__internal_4e5dc4a9651ea66bd0675caad653fea35efc937273ed2ffcb16a2be6b129c516->leave($__internal_4e5dc4a9651ea66bd0675caad653fea35efc937273ed2ffcb16a2be6b129c516_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}

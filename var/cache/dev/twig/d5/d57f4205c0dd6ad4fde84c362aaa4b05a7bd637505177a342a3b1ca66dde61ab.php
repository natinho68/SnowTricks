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
        $__internal_0d56ce5a0232cf5eb61f6ac9d36a82b4f1b9f371a9a9ee2fbab7bb6764326ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d56ce5a0232cf5eb61f6ac9d36a82b4f1b9f371a9a9ee2fbab7bb6764326ad8->enter($__internal_0d56ce5a0232cf5eb61f6ac9d36a82b4f1b9f371a9a9ee2fbab7bb6764326ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_05674c284b36154afd49711ff7bd29864aec59a42f0f2644ba8006f28f9f9127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05674c284b36154afd49711ff7bd29864aec59a42f0f2644ba8006f28f9f9127->enter($__internal_05674c284b36154afd49711ff7bd29864aec59a42f0f2644ba8006f28f9f9127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d56ce5a0232cf5eb61f6ac9d36a82b4f1b9f371a9a9ee2fbab7bb6764326ad8->leave($__internal_0d56ce5a0232cf5eb61f6ac9d36a82b4f1b9f371a9a9ee2fbab7bb6764326ad8_prof);

        
        $__internal_05674c284b36154afd49711ff7bd29864aec59a42f0f2644ba8006f28f9f9127->leave($__internal_05674c284b36154afd49711ff7bd29864aec59a42f0f2644ba8006f28f9f9127_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_716d08d61e53d496f9d626574f1dc31a5fd72958c348f3f950c6cfc526fe512f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716d08d61e53d496f9d626574f1dc31a5fd72958c348f3f950c6cfc526fe512f->enter($__internal_716d08d61e53d496f9d626574f1dc31a5fd72958c348f3f950c6cfc526fe512f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a63c1176da0b139f0b7f831d8f0f74fab38c235c6f5a22c4b76687c6e57b835d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63c1176da0b139f0b7f831d8f0f74fab38c235c6f5a22c4b76687c6e57b835d->enter($__internal_a63c1176da0b139f0b7f831d8f0f74fab38c235c6f5a22c4b76687c6e57b835d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_a63c1176da0b139f0b7f831d8f0f74fab38c235c6f5a22c4b76687c6e57b835d->leave($__internal_a63c1176da0b139f0b7f831d8f0f74fab38c235c6f5a22c4b76687c6e57b835d_prof);

        
        $__internal_716d08d61e53d496f9d626574f1dc31a5fd72958c348f3f950c6cfc526fe512f->leave($__internal_716d08d61e53d496f9d626574f1dc31a5fd72958c348f3f950c6cfc526fe512f_prof);

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

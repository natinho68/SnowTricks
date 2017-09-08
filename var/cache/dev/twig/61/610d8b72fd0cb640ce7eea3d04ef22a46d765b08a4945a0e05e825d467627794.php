<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_290ce38760978f0db598839df3e1d384f0eae48af636154b5c7d15e0899b8d83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_8d3a61ece85e5d14d987d09c6d55cff90a0486d594aa023f43982b3a7fcfe912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d3a61ece85e5d14d987d09c6d55cff90a0486d594aa023f43982b3a7fcfe912->enter($__internal_8d3a61ece85e5d14d987d09c6d55cff90a0486d594aa023f43982b3a7fcfe912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_df5b2965d8bab7f0819adfd274ff4c67270006c83eb9977e7172289de72fdbd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5b2965d8bab7f0819adfd274ff4c67270006c83eb9977e7172289de72fdbd5->enter($__internal_df5b2965d8bab7f0819adfd274ff4c67270006c83eb9977e7172289de72fdbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d3a61ece85e5d14d987d09c6d55cff90a0486d594aa023f43982b3a7fcfe912->leave($__internal_8d3a61ece85e5d14d987d09c6d55cff90a0486d594aa023f43982b3a7fcfe912_prof);

        
        $__internal_df5b2965d8bab7f0819adfd274ff4c67270006c83eb9977e7172289de72fdbd5->leave($__internal_df5b2965d8bab7f0819adfd274ff4c67270006c83eb9977e7172289de72fdbd5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58eb8fc2a5f5fac28528e17e5f06df6f3a22937397970d5c70e8893b5938b890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58eb8fc2a5f5fac28528e17e5f06df6f3a22937397970d5c70e8893b5938b890->enter($__internal_58eb8fc2a5f5fac28528e17e5f06df6f3a22937397970d5c70e8893b5938b890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d0bdf99264f0824fd6d8dca9a8983156cf6dad48026bafbfe5e6f454680a0ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bdf99264f0824fd6d8dca9a8983156cf6dad48026bafbfe5e6f454680a0ddf->enter($__internal_d0bdf99264f0824fd6d8dca9a8983156cf6dad48026bafbfe5e6f454680a0ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d0bdf99264f0824fd6d8dca9a8983156cf6dad48026bafbfe5e6f454680a0ddf->leave($__internal_d0bdf99264f0824fd6d8dca9a8983156cf6dad48026bafbfe5e6f454680a0ddf_prof);

        
        $__internal_58eb8fc2a5f5fac28528e17e5f06df6f3a22937397970d5c70e8893b5938b890->leave($__internal_58eb8fc2a5f5fac28528e17e5f06df6f3a22937397970d5c70e8893b5938b890_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}

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
        $__internal_22650e9b5124210196e7042b612a1e13bfaafa891c8293814fbffdefc602632e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22650e9b5124210196e7042b612a1e13bfaafa891c8293814fbffdefc602632e->enter($__internal_22650e9b5124210196e7042b612a1e13bfaafa891c8293814fbffdefc602632e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_15402a2dbbf4bd28fdce1a54a595bcb8505d506d0cb9b470879d8652e2d49309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15402a2dbbf4bd28fdce1a54a595bcb8505d506d0cb9b470879d8652e2d49309->enter($__internal_15402a2dbbf4bd28fdce1a54a595bcb8505d506d0cb9b470879d8652e2d49309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22650e9b5124210196e7042b612a1e13bfaafa891c8293814fbffdefc602632e->leave($__internal_22650e9b5124210196e7042b612a1e13bfaafa891c8293814fbffdefc602632e_prof);

        
        $__internal_15402a2dbbf4bd28fdce1a54a595bcb8505d506d0cb9b470879d8652e2d49309->leave($__internal_15402a2dbbf4bd28fdce1a54a595bcb8505d506d0cb9b470879d8652e2d49309_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e225fa505df601c36340faed046cf8bd41a2d7e247c35da6249a05a07c010855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e225fa505df601c36340faed046cf8bd41a2d7e247c35da6249a05a07c010855->enter($__internal_e225fa505df601c36340faed046cf8bd41a2d7e247c35da6249a05a07c010855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e9c9f847706d020dd26f6fef7034056bfab9b1c84f3d4cfc31dd1c0360b1a202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9c9f847706d020dd26f6fef7034056bfab9b1c84f3d4cfc31dd1c0360b1a202->enter($__internal_e9c9f847706d020dd26f6fef7034056bfab9b1c84f3d4cfc31dd1c0360b1a202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e9c9f847706d020dd26f6fef7034056bfab9b1c84f3d4cfc31dd1c0360b1a202->leave($__internal_e9c9f847706d020dd26f6fef7034056bfab9b1c84f3d4cfc31dd1c0360b1a202_prof);

        
        $__internal_e225fa505df601c36340faed046cf8bd41a2d7e247c35da6249a05a07c010855->leave($__internal_e225fa505df601c36340faed046cf8bd41a2d7e247c35da6249a05a07c010855_prof);

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

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
        $__internal_3f5d3c360e6a27470fc15025175c95adbe55d0bc22876830fe60e7bd46e37df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5d3c360e6a27470fc15025175c95adbe55d0bc22876830fe60e7bd46e37df1->enter($__internal_3f5d3c360e6a27470fc15025175c95adbe55d0bc22876830fe60e7bd46e37df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_c61cc3881400f78cdb06479a5dff531384fcdbd0f11b32ee8d4053b768456c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61cc3881400f78cdb06479a5dff531384fcdbd0f11b32ee8d4053b768456c72->enter($__internal_c61cc3881400f78cdb06479a5dff531384fcdbd0f11b32ee8d4053b768456c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f5d3c360e6a27470fc15025175c95adbe55d0bc22876830fe60e7bd46e37df1->leave($__internal_3f5d3c360e6a27470fc15025175c95adbe55d0bc22876830fe60e7bd46e37df1_prof);

        
        $__internal_c61cc3881400f78cdb06479a5dff531384fcdbd0f11b32ee8d4053b768456c72->leave($__internal_c61cc3881400f78cdb06479a5dff531384fcdbd0f11b32ee8d4053b768456c72_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bcbc6d68f4df8b6bd7d258eecbf779a4c6fd7827afebf4f691d68ccb278b7e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcbc6d68f4df8b6bd7d258eecbf779a4c6fd7827afebf4f691d68ccb278b7e19->enter($__internal_bcbc6d68f4df8b6bd7d258eecbf779a4c6fd7827afebf4f691d68ccb278b7e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1d2790003cf3985501ff8e236f7d2b4675610ca5680acac805c080c54be07ccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2790003cf3985501ff8e236f7d2b4675610ca5680acac805c080c54be07ccf->enter($__internal_1d2790003cf3985501ff8e236f7d2b4675610ca5680acac805c080c54be07ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1d2790003cf3985501ff8e236f7d2b4675610ca5680acac805c080c54be07ccf->leave($__internal_1d2790003cf3985501ff8e236f7d2b4675610ca5680acac805c080c54be07ccf_prof);

        
        $__internal_bcbc6d68f4df8b6bd7d258eecbf779a4c6fd7827afebf4f691d68ccb278b7e19->leave($__internal_bcbc6d68f4df8b6bd7d258eecbf779a4c6fd7827afebf4f691d68ccb278b7e19_prof);

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

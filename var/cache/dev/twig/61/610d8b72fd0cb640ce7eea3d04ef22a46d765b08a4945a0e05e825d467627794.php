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
        $__internal_b716e7f89bbce2ceb0714a1f91ce439f05fbcb43a34760736aea3a4c352dbbef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b716e7f89bbce2ceb0714a1f91ce439f05fbcb43a34760736aea3a4c352dbbef->enter($__internal_b716e7f89bbce2ceb0714a1f91ce439f05fbcb43a34760736aea3a4c352dbbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_be52a3f28e791401f0c1390cbca1c57263c821790959ff0f55edde4709125601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be52a3f28e791401f0c1390cbca1c57263c821790959ff0f55edde4709125601->enter($__internal_be52a3f28e791401f0c1390cbca1c57263c821790959ff0f55edde4709125601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b716e7f89bbce2ceb0714a1f91ce439f05fbcb43a34760736aea3a4c352dbbef->leave($__internal_b716e7f89bbce2ceb0714a1f91ce439f05fbcb43a34760736aea3a4c352dbbef_prof);

        
        $__internal_be52a3f28e791401f0c1390cbca1c57263c821790959ff0f55edde4709125601->leave($__internal_be52a3f28e791401f0c1390cbca1c57263c821790959ff0f55edde4709125601_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11aba4990cebc364ca8fc3ff356c54136da61862fafa2e8bb7a0f318cedb11a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11aba4990cebc364ca8fc3ff356c54136da61862fafa2e8bb7a0f318cedb11a3->enter($__internal_11aba4990cebc364ca8fc3ff356c54136da61862fafa2e8bb7a0f318cedb11a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1412f988c4146dd39e1ade725b72eacdd817f52f420098ac3f3cf77e61b5be21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1412f988c4146dd39e1ade725b72eacdd817f52f420098ac3f3cf77e61b5be21->enter($__internal_1412f988c4146dd39e1ade725b72eacdd817f52f420098ac3f3cf77e61b5be21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1412f988c4146dd39e1ade725b72eacdd817f52f420098ac3f3cf77e61b5be21->leave($__internal_1412f988c4146dd39e1ade725b72eacdd817f52f420098ac3f3cf77e61b5be21_prof);

        
        $__internal_11aba4990cebc364ca8fc3ff356c54136da61862fafa2e8bb7a0f318cedb11a3->leave($__internal_11aba4990cebc364ca8fc3ff356c54136da61862fafa2e8bb7a0f318cedb11a3_prof);

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

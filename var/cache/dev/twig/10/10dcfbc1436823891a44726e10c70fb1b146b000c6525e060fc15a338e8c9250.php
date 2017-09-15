<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_36ea7196d08e8bba310370e57d5f781c91115dd4bff0bac696d025029cfc55eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_7153b510dcffd03da9b5318c425c76e01de19e1e897107231d9b8598bb05f8fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7153b510dcffd03da9b5318c425c76e01de19e1e897107231d9b8598bb05f8fa->enter($__internal_7153b510dcffd03da9b5318c425c76e01de19e1e897107231d9b8598bb05f8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_de734f081b8b9fc2fc41b469906bb50e370a7a2d509f770d6801caf35e4b57f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de734f081b8b9fc2fc41b469906bb50e370a7a2d509f770d6801caf35e4b57f4->enter($__internal_de734f081b8b9fc2fc41b469906bb50e370a7a2d509f770d6801caf35e4b57f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7153b510dcffd03da9b5318c425c76e01de19e1e897107231d9b8598bb05f8fa->leave($__internal_7153b510dcffd03da9b5318c425c76e01de19e1e897107231d9b8598bb05f8fa_prof);

        
        $__internal_de734f081b8b9fc2fc41b469906bb50e370a7a2d509f770d6801caf35e4b57f4->leave($__internal_de734f081b8b9fc2fc41b469906bb50e370a7a2d509f770d6801caf35e4b57f4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e23ccd6ea320aca62603dc38d7b2c72e8c418fd1cf04c558779cb870512239db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e23ccd6ea320aca62603dc38d7b2c72e8c418fd1cf04c558779cb870512239db->enter($__internal_e23ccd6ea320aca62603dc38d7b2c72e8c418fd1cf04c558779cb870512239db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7eb94aebcb4aa43da102b67c56ac9db10ffb8b0db8138904447892144f113fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb94aebcb4aa43da102b67c56ac9db10ffb8b0db8138904447892144f113fc1->enter($__internal_7eb94aebcb4aa43da102b67c56ac9db10ffb8b0db8138904447892144f113fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7eb94aebcb4aa43da102b67c56ac9db10ffb8b0db8138904447892144f113fc1->leave($__internal_7eb94aebcb4aa43da102b67c56ac9db10ffb8b0db8138904447892144f113fc1_prof);

        
        $__internal_e23ccd6ea320aca62603dc38d7b2c72e8c418fd1cf04c558779cb870512239db->leave($__internal_e23ccd6ea320aca62603dc38d7b2c72e8c418fd1cf04c558779cb870512239db_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}

<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_87763d4938b8a69549d8d249f60b1d24048edfceba0c859d6997ebb81fa85e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_debfc8dec30cab61a682c5033e69cb508d317f26dc385918650654599f921ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_debfc8dec30cab61a682c5033e69cb508d317f26dc385918650654599f921ebc->enter($__internal_debfc8dec30cab61a682c5033e69cb508d317f26dc385918650654599f921ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_b3277eeda3453e7cb2341d2fb2cbcd594970df21a7711a0ce37de8c26c2102bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3277eeda3453e7cb2341d2fb2cbcd594970df21a7711a0ce37de8c26c2102bd->enter($__internal_b3277eeda3453e7cb2341d2fb2cbcd594970df21a7711a0ce37de8c26c2102bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_debfc8dec30cab61a682c5033e69cb508d317f26dc385918650654599f921ebc->leave($__internal_debfc8dec30cab61a682c5033e69cb508d317f26dc385918650654599f921ebc_prof);

        
        $__internal_b3277eeda3453e7cb2341d2fb2cbcd594970df21a7711a0ce37de8c26c2102bd->leave($__internal_b3277eeda3453e7cb2341d2fb2cbcd594970df21a7711a0ce37de8c26c2102bd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd3138f1adc92ad839fd83d572550d246e0068bdb5ee45994f99453c6bcf7ec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd3138f1adc92ad839fd83d572550d246e0068bdb5ee45994f99453c6bcf7ec5->enter($__internal_bd3138f1adc92ad839fd83d572550d246e0068bdb5ee45994f99453c6bcf7ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e622b8080baf2054b2298af1366fef1ad537b60f038c3f7f4a40108d747b0fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e622b8080baf2054b2298af1366fef1ad537b60f038c3f7f4a40108d747b0fd3->enter($__internal_e622b8080baf2054b2298af1366fef1ad537b60f038c3f7f4a40108d747b0fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_e622b8080baf2054b2298af1366fef1ad537b60f038c3f7f4a40108d747b0fd3->leave($__internal_e622b8080baf2054b2298af1366fef1ad537b60f038c3f7f4a40108d747b0fd3_prof);

        
        $__internal_bd3138f1adc92ad839fd83d572550d246e0068bdb5ee45994f99453c6bcf7ec5->leave($__internal_bd3138f1adc92ad839fd83d572550d246e0068bdb5ee45994f99453c6bcf7ec5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}

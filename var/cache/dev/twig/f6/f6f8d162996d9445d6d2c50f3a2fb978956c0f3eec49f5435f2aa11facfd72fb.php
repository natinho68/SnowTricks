<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_593eee9993242872a9e8bbcae414c864ad7cbe11279d476c58b37bce791ae173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_d77e63f5e46c907280f60ea47e5c3a3019cbe84445194789614278896b9b61ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77e63f5e46c907280f60ea47e5c3a3019cbe84445194789614278896b9b61ed->enter($__internal_d77e63f5e46c907280f60ea47e5c3a3019cbe84445194789614278896b9b61ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_925a946e3bc3697968ca15ae46c8d04f537cbbbe22c3b2accda3156be920bbda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925a946e3bc3697968ca15ae46c8d04f537cbbbe22c3b2accda3156be920bbda->enter($__internal_925a946e3bc3697968ca15ae46c8d04f537cbbbe22c3b2accda3156be920bbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d77e63f5e46c907280f60ea47e5c3a3019cbe84445194789614278896b9b61ed->leave($__internal_d77e63f5e46c907280f60ea47e5c3a3019cbe84445194789614278896b9b61ed_prof);

        
        $__internal_925a946e3bc3697968ca15ae46c8d04f537cbbbe22c3b2accda3156be920bbda->leave($__internal_925a946e3bc3697968ca15ae46c8d04f537cbbbe22c3b2accda3156be920bbda_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dcb4e2131125d6ec39d799df7f94edbcdf9f4287ecd489d1244587e7ad82f042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb4e2131125d6ec39d799df7f94edbcdf9f4287ecd489d1244587e7ad82f042->enter($__internal_dcb4e2131125d6ec39d799df7f94edbcdf9f4287ecd489d1244587e7ad82f042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8cad8937fa7449955bff58c0bae9bb37b76b354a6df3b27dbb2461f42865d2be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cad8937fa7449955bff58c0bae9bb37b76b354a6df3b27dbb2461f42865d2be->enter($__internal_8cad8937fa7449955bff58c0bae9bb37b76b354a6df3b27dbb2461f42865d2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_8cad8937fa7449955bff58c0bae9bb37b76b354a6df3b27dbb2461f42865d2be->leave($__internal_8cad8937fa7449955bff58c0bae9bb37b76b354a6df3b27dbb2461f42865d2be_prof);

        
        $__internal_dcb4e2131125d6ec39d799df7f94edbcdf9f4287ecd489d1244587e7ad82f042->leave($__internal_dcb4e2131125d6ec39d799df7f94edbcdf9f4287ecd489d1244587e7ad82f042_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}

<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_92b2c4b4e50f874b8f58b3408bf890cbfb8607d01265f4d38109cc354eb216d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_4c29292b3afffa5352eb7a3038a4a4492a31f2d0ad9311a314847cd7ea61044c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c29292b3afffa5352eb7a3038a4a4492a31f2d0ad9311a314847cd7ea61044c->enter($__internal_4c29292b3afffa5352eb7a3038a4a4492a31f2d0ad9311a314847cd7ea61044c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_fd0031fc76591d80b62f8f18c13dd47b6e29eda6e94dda72509e190d56ebd6de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0031fc76591d80b62f8f18c13dd47b6e29eda6e94dda72509e190d56ebd6de->enter($__internal_fd0031fc76591d80b62f8f18c13dd47b6e29eda6e94dda72509e190d56ebd6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c29292b3afffa5352eb7a3038a4a4492a31f2d0ad9311a314847cd7ea61044c->leave($__internal_4c29292b3afffa5352eb7a3038a4a4492a31f2d0ad9311a314847cd7ea61044c_prof);

        
        $__internal_fd0031fc76591d80b62f8f18c13dd47b6e29eda6e94dda72509e190d56ebd6de->leave($__internal_fd0031fc76591d80b62f8f18c13dd47b6e29eda6e94dda72509e190d56ebd6de_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1b706e294cb0da5dd8199f251c41c438b1db9636db71e99dbf1cbda700fd511a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b706e294cb0da5dd8199f251c41c438b1db9636db71e99dbf1cbda700fd511a->enter($__internal_1b706e294cb0da5dd8199f251c41c438b1db9636db71e99dbf1cbda700fd511a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_090c66584bcf42d429bd4bd033c7a6d7879acd2ed753abbc5ffb21ece248adf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090c66584bcf42d429bd4bd033c7a6d7879acd2ed753abbc5ffb21ece248adf2->enter($__internal_090c66584bcf42d429bd4bd033c7a6d7879acd2ed753abbc5ffb21ece248adf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_090c66584bcf42d429bd4bd033c7a6d7879acd2ed753abbc5ffb21ece248adf2->leave($__internal_090c66584bcf42d429bd4bd033c7a6d7879acd2ed753abbc5ffb21ece248adf2_prof);

        
        $__internal_1b706e294cb0da5dd8199f251c41c438b1db9636db71e99dbf1cbda700fd511a->leave($__internal_1b706e294cb0da5dd8199f251c41c438b1db9636db71e99dbf1cbda700fd511a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}

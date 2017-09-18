<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_aa2bd50c6cba0a8439cc67d22b7a49edd8ddcfe04aeeb076ade1dcf46bc46f0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_f0e1966c498143582ce427ef3015c5dd29baa8c8d24ea0f5f546399e81fc0439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e1966c498143582ce427ef3015c5dd29baa8c8d24ea0f5f546399e81fc0439->enter($__internal_f0e1966c498143582ce427ef3015c5dd29baa8c8d24ea0f5f546399e81fc0439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_425c5b2e913853bda7cbae52e7c7abbfd5db88e39f57c0c2af97ec95c7013522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425c5b2e913853bda7cbae52e7c7abbfd5db88e39f57c0c2af97ec95c7013522->enter($__internal_425c5b2e913853bda7cbae52e7c7abbfd5db88e39f57c0c2af97ec95c7013522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0e1966c498143582ce427ef3015c5dd29baa8c8d24ea0f5f546399e81fc0439->leave($__internal_f0e1966c498143582ce427ef3015c5dd29baa8c8d24ea0f5f546399e81fc0439_prof);

        
        $__internal_425c5b2e913853bda7cbae52e7c7abbfd5db88e39f57c0c2af97ec95c7013522->leave($__internal_425c5b2e913853bda7cbae52e7c7abbfd5db88e39f57c0c2af97ec95c7013522_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_16cd17335edb22642a8f473626b27fbed96da6c17851ea7613047ef0eb844910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16cd17335edb22642a8f473626b27fbed96da6c17851ea7613047ef0eb844910->enter($__internal_16cd17335edb22642a8f473626b27fbed96da6c17851ea7613047ef0eb844910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bad3d13656800bc02615554fa58e9c05e15bdb52d4a67fb0270ac99264781e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad3d13656800bc02615554fa58e9c05e15bdb52d4a67fb0270ac99264781e1f->enter($__internal_bad3d13656800bc02615554fa58e9c05e15bdb52d4a67fb0270ac99264781e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_bad3d13656800bc02615554fa58e9c05e15bdb52d4a67fb0270ac99264781e1f->leave($__internal_bad3d13656800bc02615554fa58e9c05e15bdb52d4a67fb0270ac99264781e1f_prof);

        
        $__internal_16cd17335edb22642a8f473626b27fbed96da6c17851ea7613047ef0eb844910->leave($__internal_16cd17335edb22642a8f473626b27fbed96da6c17851ea7613047ef0eb844910_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}

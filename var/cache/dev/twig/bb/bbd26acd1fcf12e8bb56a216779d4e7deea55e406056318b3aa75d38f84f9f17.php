<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_eca13deb91d3d966ee2705303cb96f8790f416f49afe737ccf913c7de0cf2408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_695efb4fc049bbaee8dbd38ed1b0e6cf3a6e41a5957945051741eba77a704d39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695efb4fc049bbaee8dbd38ed1b0e6cf3a6e41a5957945051741eba77a704d39->enter($__internal_695efb4fc049bbaee8dbd38ed1b0e6cf3a6e41a5957945051741eba77a704d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_803dd00fb4a6a76318c1fbd9d56fe7f11dd645faee808ab0b89d3cf9adb1893b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_803dd00fb4a6a76318c1fbd9d56fe7f11dd645faee808ab0b89d3cf9adb1893b->enter($__internal_803dd00fb4a6a76318c1fbd9d56fe7f11dd645faee808ab0b89d3cf9adb1893b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_695efb4fc049bbaee8dbd38ed1b0e6cf3a6e41a5957945051741eba77a704d39->leave($__internal_695efb4fc049bbaee8dbd38ed1b0e6cf3a6e41a5957945051741eba77a704d39_prof);

        
        $__internal_803dd00fb4a6a76318c1fbd9d56fe7f11dd645faee808ab0b89d3cf9adb1893b->leave($__internal_803dd00fb4a6a76318c1fbd9d56fe7f11dd645faee808ab0b89d3cf9adb1893b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ccdd8929256e88687685a50ad3e03705c146ae0912f0df4f409e592ccaba5df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ccdd8929256e88687685a50ad3e03705c146ae0912f0df4f409e592ccaba5df->enter($__internal_9ccdd8929256e88687685a50ad3e03705c146ae0912f0df4f409e592ccaba5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e93644af66f2c08ccf0df7f3169dc2f4eb0273816ca41c0dd7169d145a2942be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93644af66f2c08ccf0df7f3169dc2f4eb0273816ca41c0dd7169d145a2942be->enter($__internal_e93644af66f2c08ccf0df7f3169dc2f4eb0273816ca41c0dd7169d145a2942be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e93644af66f2c08ccf0df7f3169dc2f4eb0273816ca41c0dd7169d145a2942be->leave($__internal_e93644af66f2c08ccf0df7f3169dc2f4eb0273816ca41c0dd7169d145a2942be_prof);

        
        $__internal_9ccdd8929256e88687685a50ad3e03705c146ae0912f0df4f409e592ccaba5df->leave($__internal_9ccdd8929256e88687685a50ad3e03705c146ae0912f0df4f409e592ccaba5df_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}

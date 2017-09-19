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
        $__internal_60d61439aafd47a53750f32ac9a562b44b68ed0459f872d3c3b182e19148861c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d61439aafd47a53750f32ac9a562b44b68ed0459f872d3c3b182e19148861c->enter($__internal_60d61439aafd47a53750f32ac9a562b44b68ed0459f872d3c3b182e19148861c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_8def77e47ac2fb7b784efb2ac8d34f08cd5bc25d6947fff6c43b89459aba0264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8def77e47ac2fb7b784efb2ac8d34f08cd5bc25d6947fff6c43b89459aba0264->enter($__internal_8def77e47ac2fb7b784efb2ac8d34f08cd5bc25d6947fff6c43b89459aba0264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60d61439aafd47a53750f32ac9a562b44b68ed0459f872d3c3b182e19148861c->leave($__internal_60d61439aafd47a53750f32ac9a562b44b68ed0459f872d3c3b182e19148861c_prof);

        
        $__internal_8def77e47ac2fb7b784efb2ac8d34f08cd5bc25d6947fff6c43b89459aba0264->leave($__internal_8def77e47ac2fb7b784efb2ac8d34f08cd5bc25d6947fff6c43b89459aba0264_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a9639c255b0a6494213052e112cd8203bef46ba6872ce2b6aa6fe7475f365c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9639c255b0a6494213052e112cd8203bef46ba6872ce2b6aa6fe7475f365c8c->enter($__internal_a9639c255b0a6494213052e112cd8203bef46ba6872ce2b6aa6fe7475f365c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cb6d70beb18e4b36f377df82a2e9747628d7fd770b06dea6b8b70226a331ea05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6d70beb18e4b36f377df82a2e9747628d7fd770b06dea6b8b70226a331ea05->enter($__internal_cb6d70beb18e4b36f377df82a2e9747628d7fd770b06dea6b8b70226a331ea05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_cb6d70beb18e4b36f377df82a2e9747628d7fd770b06dea6b8b70226a331ea05->leave($__internal_cb6d70beb18e4b36f377df82a2e9747628d7fd770b06dea6b8b70226a331ea05_prof);

        
        $__internal_a9639c255b0a6494213052e112cd8203bef46ba6872ce2b6aa6fe7475f365c8c->leave($__internal_a9639c255b0a6494213052e112cd8203bef46ba6872ce2b6aa6fe7475f365c8c_prof);

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

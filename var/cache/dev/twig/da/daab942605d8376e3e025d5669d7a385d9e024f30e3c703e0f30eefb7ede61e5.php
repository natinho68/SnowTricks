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
        $__internal_34d8e4bed1189b9dabd03b6c1b8b96253fa5b0ad96b895e4735ee730052c955c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d8e4bed1189b9dabd03b6c1b8b96253fa5b0ad96b895e4735ee730052c955c->enter($__internal_34d8e4bed1189b9dabd03b6c1b8b96253fa5b0ad96b895e4735ee730052c955c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_abff316762fd9eb535c3c74807745514aa48263104e4b8dbb231add6ea6c5437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abff316762fd9eb535c3c74807745514aa48263104e4b8dbb231add6ea6c5437->enter($__internal_abff316762fd9eb535c3c74807745514aa48263104e4b8dbb231add6ea6c5437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34d8e4bed1189b9dabd03b6c1b8b96253fa5b0ad96b895e4735ee730052c955c->leave($__internal_34d8e4bed1189b9dabd03b6c1b8b96253fa5b0ad96b895e4735ee730052c955c_prof);

        
        $__internal_abff316762fd9eb535c3c74807745514aa48263104e4b8dbb231add6ea6c5437->leave($__internal_abff316762fd9eb535c3c74807745514aa48263104e4b8dbb231add6ea6c5437_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fedfb1220575d26af370f869bc1ba63f91db9acd99c3f48d6fbef47c7068809b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fedfb1220575d26af370f869bc1ba63f91db9acd99c3f48d6fbef47c7068809b->enter($__internal_fedfb1220575d26af370f869bc1ba63f91db9acd99c3f48d6fbef47c7068809b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3d51738d9f0cb484e603264ac83d6b593e42795d29161ecb167158502a666f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d51738d9f0cb484e603264ac83d6b593e42795d29161ecb167158502a666f0a->enter($__internal_3d51738d9f0cb484e603264ac83d6b593e42795d29161ecb167158502a666f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_3d51738d9f0cb484e603264ac83d6b593e42795d29161ecb167158502a666f0a->leave($__internal_3d51738d9f0cb484e603264ac83d6b593e42795d29161ecb167158502a666f0a_prof);

        
        $__internal_fedfb1220575d26af370f869bc1ba63f91db9acd99c3f48d6fbef47c7068809b->leave($__internal_fedfb1220575d26af370f869bc1ba63f91db9acd99c3f48d6fbef47c7068809b_prof);

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

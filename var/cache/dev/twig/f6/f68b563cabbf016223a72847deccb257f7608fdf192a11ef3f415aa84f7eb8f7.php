<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_18e2f0bcc54199452edcd610b439d96e7b380c6c9bcbdc222b2ccc77b1ca3c52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_789b3e582963c894de4444c017f6f8e7fb52877aeeb52fdc54dee05f6903238c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789b3e582963c894de4444c017f6f8e7fb52877aeeb52fdc54dee05f6903238c->enter($__internal_789b3e582963c894de4444c017f6f8e7fb52877aeeb52fdc54dee05f6903238c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_4754418b8cb54bb9b8f377068d81a27f119ba1a090c762bbb16026c795719fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4754418b8cb54bb9b8f377068d81a27f119ba1a090c762bbb16026c795719fb1->enter($__internal_4754418b8cb54bb9b8f377068d81a27f119ba1a090c762bbb16026c795719fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_789b3e582963c894de4444c017f6f8e7fb52877aeeb52fdc54dee05f6903238c->leave($__internal_789b3e582963c894de4444c017f6f8e7fb52877aeeb52fdc54dee05f6903238c_prof);

        
        $__internal_4754418b8cb54bb9b8f377068d81a27f119ba1a090c762bbb16026c795719fb1->leave($__internal_4754418b8cb54bb9b8f377068d81a27f119ba1a090c762bbb16026c795719fb1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_17fa2674b4dbb629908d49fd1d547f8a70d40810ce5e3dc228c67aebd1a8ca28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17fa2674b4dbb629908d49fd1d547f8a70d40810ce5e3dc228c67aebd1a8ca28->enter($__internal_17fa2674b4dbb629908d49fd1d547f8a70d40810ce5e3dc228c67aebd1a8ca28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3f34561c3a03e553a9bafdc5e5496c191bb7d8861987fead5bc0eaec28f12a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f34561c3a03e553a9bafdc5e5496c191bb7d8861987fead5bc0eaec28f12a74->enter($__internal_3f34561c3a03e553a9bafdc5e5496c191bb7d8861987fead5bc0eaec28f12a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_3f34561c3a03e553a9bafdc5e5496c191bb7d8861987fead5bc0eaec28f12a74->leave($__internal_3f34561c3a03e553a9bafdc5e5496c191bb7d8861987fead5bc0eaec28f12a74_prof);

        
        $__internal_17fa2674b4dbb629908d49fd1d547f8a70d40810ce5e3dc228c67aebd1a8ca28->leave($__internal_17fa2674b4dbb629908d49fd1d547f8a70d40810ce5e3dc228c67aebd1a8ca28_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}

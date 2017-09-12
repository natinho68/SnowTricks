<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_dc265bafac2c1f716a9f87c703e742e29d919751276d3bc9ca2c1ef648d59478 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
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
        $__internal_a3d71565add5ad1221bf4bd8c52dde96d7d7d3dea5f17e71f0f7106572092046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3d71565add5ad1221bf4bd8c52dde96d7d7d3dea5f17e71f0f7106572092046->enter($__internal_a3d71565add5ad1221bf4bd8c52dde96d7d7d3dea5f17e71f0f7106572092046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $__internal_2c1ec5e103042ae5137b9a74493cb00c3d98abb174bdb34e40e287594d3c1c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1ec5e103042ae5137b9a74493cb00c3d98abb174bdb34e40e287594d3c1c08->enter($__internal_2c1ec5e103042ae5137b9a74493cb00c3d98abb174bdb34e40e287594d3c1c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3d71565add5ad1221bf4bd8c52dde96d7d7d3dea5f17e71f0f7106572092046->leave($__internal_a3d71565add5ad1221bf4bd8c52dde96d7d7d3dea5f17e71f0f7106572092046_prof);

        
        $__internal_2c1ec5e103042ae5137b9a74493cb00c3d98abb174bdb34e40e287594d3c1c08->leave($__internal_2c1ec5e103042ae5137b9a74493cb00c3d98abb174bdb34e40e287594d3c1c08_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d72b200e1e4c30c04db16587ea283b1a0408fecd1ad43cc734ba55dd089615a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d72b200e1e4c30c04db16587ea283b1a0408fecd1ad43cc734ba55dd089615a->enter($__internal_4d72b200e1e4c30c04db16587ea283b1a0408fecd1ad43cc734ba55dd089615a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1f8ff36678e1c3cbe44d9bfc3a8245e38f254ac25799cd89c0742799be70c27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8ff36678e1c3cbe44d9bfc3a8245e38f254ac25799cd89c0742799be70c27f->enter($__internal_1f8ff36678e1c3cbe44d9bfc3a8245e38f254ac25799cd89c0742799be70c27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_1f8ff36678e1c3cbe44d9bfc3a8245e38f254ac25799cd89c0742799be70c27f->leave($__internal_1f8ff36678e1c3cbe44d9bfc3a8245e38f254ac25799cd89c0742799be70c27f_prof);

        
        $__internal_4d72b200e1e4c30c04db16587ea283b1a0408fecd1ad43cc734ba55dd089615a->leave($__internal_4d72b200e1e4c30c04db16587ea283b1a0408fecd1ad43cc734ba55dd089615a_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}

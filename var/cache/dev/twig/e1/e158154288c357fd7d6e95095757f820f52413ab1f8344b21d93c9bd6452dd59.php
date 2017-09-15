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
        $__internal_c295bf4285cf759fc890f85a2aaf7aa93a66b060e279a82b83fdbcaeeb001f5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c295bf4285cf759fc890f85a2aaf7aa93a66b060e279a82b83fdbcaeeb001f5c->enter($__internal_c295bf4285cf759fc890f85a2aaf7aa93a66b060e279a82b83fdbcaeeb001f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_ab83d00bdd59fb94d97d45a856840c041815f745e475c0b1c7d4beccb1fb1704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab83d00bdd59fb94d97d45a856840c041815f745e475c0b1c7d4beccb1fb1704->enter($__internal_ab83d00bdd59fb94d97d45a856840c041815f745e475c0b1c7d4beccb1fb1704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c295bf4285cf759fc890f85a2aaf7aa93a66b060e279a82b83fdbcaeeb001f5c->leave($__internal_c295bf4285cf759fc890f85a2aaf7aa93a66b060e279a82b83fdbcaeeb001f5c_prof);

        
        $__internal_ab83d00bdd59fb94d97d45a856840c041815f745e475c0b1c7d4beccb1fb1704->leave($__internal_ab83d00bdd59fb94d97d45a856840c041815f745e475c0b1c7d4beccb1fb1704_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d9c8087c8398dd6a0a2c7d9959616021ff73f69dd6f0c1cfd6029c0d227fd02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d9c8087c8398dd6a0a2c7d9959616021ff73f69dd6f0c1cfd6029c0d227fd02->enter($__internal_3d9c8087c8398dd6a0a2c7d9959616021ff73f69dd6f0c1cfd6029c0d227fd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b8047898e77727184a5bc032bb09eb211012ec75849842122121bf1b714a9eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8047898e77727184a5bc032bb09eb211012ec75849842122121bf1b714a9eba->enter($__internal_b8047898e77727184a5bc032bb09eb211012ec75849842122121bf1b714a9eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_b8047898e77727184a5bc032bb09eb211012ec75849842122121bf1b714a9eba->leave($__internal_b8047898e77727184a5bc032bb09eb211012ec75849842122121bf1b714a9eba_prof);

        
        $__internal_3d9c8087c8398dd6a0a2c7d9959616021ff73f69dd6f0c1cfd6029c0d227fd02->leave($__internal_3d9c8087c8398dd6a0a2c7d9959616021ff73f69dd6f0c1cfd6029c0d227fd02_prof);

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

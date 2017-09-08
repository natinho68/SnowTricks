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
        $__internal_15c8c2907773d4e417d4c372175482c681544826e358a578d5aa3128e1ad1ff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15c8c2907773d4e417d4c372175482c681544826e358a578d5aa3128e1ad1ff6->enter($__internal_15c8c2907773d4e417d4c372175482c681544826e358a578d5aa3128e1ad1ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_5824be735cab5fd6bc63f5b9944690bd9027dae181b78d580965a5881ba4f9d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5824be735cab5fd6bc63f5b9944690bd9027dae181b78d580965a5881ba4f9d1->enter($__internal_5824be735cab5fd6bc63f5b9944690bd9027dae181b78d580965a5881ba4f9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15c8c2907773d4e417d4c372175482c681544826e358a578d5aa3128e1ad1ff6->leave($__internal_15c8c2907773d4e417d4c372175482c681544826e358a578d5aa3128e1ad1ff6_prof);

        
        $__internal_5824be735cab5fd6bc63f5b9944690bd9027dae181b78d580965a5881ba4f9d1->leave($__internal_5824be735cab5fd6bc63f5b9944690bd9027dae181b78d580965a5881ba4f9d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c1971aa8ad8729cf3886253a178af1dd6821e1f8079df85012ec3b8fc046fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1971aa8ad8729cf3886253a178af1dd6821e1f8079df85012ec3b8fc046fde->enter($__internal_5c1971aa8ad8729cf3886253a178af1dd6821e1f8079df85012ec3b8fc046fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a2fea33ad7086e36b1f7d9486625e6f981e9b38c8f7f7ddcab5c63cfbf5861e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2fea33ad7086e36b1f7d9486625e6f981e9b38c8f7f7ddcab5c63cfbf5861e4->enter($__internal_a2fea33ad7086e36b1f7d9486625e6f981e9b38c8f7f7ddcab5c63cfbf5861e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_a2fea33ad7086e36b1f7d9486625e6f981e9b38c8f7f7ddcab5c63cfbf5861e4->leave($__internal_a2fea33ad7086e36b1f7d9486625e6f981e9b38c8f7f7ddcab5c63cfbf5861e4_prof);

        
        $__internal_5c1971aa8ad8729cf3886253a178af1dd6821e1f8079df85012ec3b8fc046fde->leave($__internal_5c1971aa8ad8729cf3886253a178af1dd6821e1f8079df85012ec3b8fc046fde_prof);

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

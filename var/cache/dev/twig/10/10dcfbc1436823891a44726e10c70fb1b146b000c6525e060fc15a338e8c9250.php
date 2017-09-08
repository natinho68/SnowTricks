<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_36ea7196d08e8bba310370e57d5f781c91115dd4bff0bac696d025029cfc55eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_27cc2c7790e56cf897ed7ae713641ce7cb9c7a4788dd51332d19d9213b2ab8ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27cc2c7790e56cf897ed7ae713641ce7cb9c7a4788dd51332d19d9213b2ab8ee->enter($__internal_27cc2c7790e56cf897ed7ae713641ce7cb9c7a4788dd51332d19d9213b2ab8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_a3ec95b3f9efd6d3019b584585149fac42e331b82fe62729ad468a0fbd60606c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ec95b3f9efd6d3019b584585149fac42e331b82fe62729ad468a0fbd60606c->enter($__internal_a3ec95b3f9efd6d3019b584585149fac42e331b82fe62729ad468a0fbd60606c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27cc2c7790e56cf897ed7ae713641ce7cb9c7a4788dd51332d19d9213b2ab8ee->leave($__internal_27cc2c7790e56cf897ed7ae713641ce7cb9c7a4788dd51332d19d9213b2ab8ee_prof);

        
        $__internal_a3ec95b3f9efd6d3019b584585149fac42e331b82fe62729ad468a0fbd60606c->leave($__internal_a3ec95b3f9efd6d3019b584585149fac42e331b82fe62729ad468a0fbd60606c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_526ec5a90d6da86043cbb860870ff48e6484f010665e9e2b54b5618133d983b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526ec5a90d6da86043cbb860870ff48e6484f010665e9e2b54b5618133d983b3->enter($__internal_526ec5a90d6da86043cbb860870ff48e6484f010665e9e2b54b5618133d983b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2149e959e61b17795103d9b93ef94e2c9f67e9aa246c36aefde442a4d5ae65d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2149e959e61b17795103d9b93ef94e2c9f67e9aa246c36aefde442a4d5ae65d3->enter($__internal_2149e959e61b17795103d9b93ef94e2c9f67e9aa246c36aefde442a4d5ae65d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_2149e959e61b17795103d9b93ef94e2c9f67e9aa246c36aefde442a4d5ae65d3->leave($__internal_2149e959e61b17795103d9b93ef94e2c9f67e9aa246c36aefde442a4d5ae65d3_prof);

        
        $__internal_526ec5a90d6da86043cbb860870ff48e6484f010665e9e2b54b5618133d983b3->leave($__internal_526ec5a90d6da86043cbb860870ff48e6484f010665e9e2b54b5618133d983b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}

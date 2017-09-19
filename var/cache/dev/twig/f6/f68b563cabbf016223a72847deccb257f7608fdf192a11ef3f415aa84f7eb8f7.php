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
        $__internal_2ecbf25a55b6de9d031551814fba3a02fc30397c7461e4560381ff926cd2ed7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ecbf25a55b6de9d031551814fba3a02fc30397c7461e4560381ff926cd2ed7a->enter($__internal_2ecbf25a55b6de9d031551814fba3a02fc30397c7461e4560381ff926cd2ed7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_613b6fc7d7477fd257baf77a1b3269365070cc4be814b6ee79115cd6ba012d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613b6fc7d7477fd257baf77a1b3269365070cc4be814b6ee79115cd6ba012d16->enter($__internal_613b6fc7d7477fd257baf77a1b3269365070cc4be814b6ee79115cd6ba012d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ecbf25a55b6de9d031551814fba3a02fc30397c7461e4560381ff926cd2ed7a->leave($__internal_2ecbf25a55b6de9d031551814fba3a02fc30397c7461e4560381ff926cd2ed7a_prof);

        
        $__internal_613b6fc7d7477fd257baf77a1b3269365070cc4be814b6ee79115cd6ba012d16->leave($__internal_613b6fc7d7477fd257baf77a1b3269365070cc4be814b6ee79115cd6ba012d16_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d994c80ff88f585f8c5e75f4fd6976ef5bad245d7d06686269be879acbb75035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d994c80ff88f585f8c5e75f4fd6976ef5bad245d7d06686269be879acbb75035->enter($__internal_d994c80ff88f585f8c5e75f4fd6976ef5bad245d7d06686269be879acbb75035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ff7c31e6e3a6976b00936008c0608b9693746ecd2ccfee56f1c4ce6a9e440325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7c31e6e3a6976b00936008c0608b9693746ecd2ccfee56f1c4ce6a9e440325->enter($__internal_ff7c31e6e3a6976b00936008c0608b9693746ecd2ccfee56f1c4ce6a9e440325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ff7c31e6e3a6976b00936008c0608b9693746ecd2ccfee56f1c4ce6a9e440325->leave($__internal_ff7c31e6e3a6976b00936008c0608b9693746ecd2ccfee56f1c4ce6a9e440325_prof);

        
        $__internal_d994c80ff88f585f8c5e75f4fd6976ef5bad245d7d06686269be879acbb75035->leave($__internal_d994c80ff88f585f8c5e75f4fd6976ef5bad245d7d06686269be879acbb75035_prof);

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

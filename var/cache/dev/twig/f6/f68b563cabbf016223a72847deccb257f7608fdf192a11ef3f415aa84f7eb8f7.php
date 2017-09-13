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
        $__internal_24cf380993230b72da71d4d7b87a4a8178ac77185610e76ce17c80cc120e41b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24cf380993230b72da71d4d7b87a4a8178ac77185610e76ce17c80cc120e41b4->enter($__internal_24cf380993230b72da71d4d7b87a4a8178ac77185610e76ce17c80cc120e41b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_396a8e53eaae8865c3cc71c5262c4cc72073dfd5b594d0e3122da4e5663caac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_396a8e53eaae8865c3cc71c5262c4cc72073dfd5b594d0e3122da4e5663caac4->enter($__internal_396a8e53eaae8865c3cc71c5262c4cc72073dfd5b594d0e3122da4e5663caac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24cf380993230b72da71d4d7b87a4a8178ac77185610e76ce17c80cc120e41b4->leave($__internal_24cf380993230b72da71d4d7b87a4a8178ac77185610e76ce17c80cc120e41b4_prof);

        
        $__internal_396a8e53eaae8865c3cc71c5262c4cc72073dfd5b594d0e3122da4e5663caac4->leave($__internal_396a8e53eaae8865c3cc71c5262c4cc72073dfd5b594d0e3122da4e5663caac4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18ba512a1100f02a4f9c67052a79a06ed746fcda7b4fa8ae2e76a4c2862e1e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ba512a1100f02a4f9c67052a79a06ed746fcda7b4fa8ae2e76a4c2862e1e5d->enter($__internal_18ba512a1100f02a4f9c67052a79a06ed746fcda7b4fa8ae2e76a4c2862e1e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_653b6a1a3cfd6531fb9e79a57860c5ebb0bd3df88862f23b19439973f3103c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653b6a1a3cfd6531fb9e79a57860c5ebb0bd3df88862f23b19439973f3103c17->enter($__internal_653b6a1a3cfd6531fb9e79a57860c5ebb0bd3df88862f23b19439973f3103c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_653b6a1a3cfd6531fb9e79a57860c5ebb0bd3df88862f23b19439973f3103c17->leave($__internal_653b6a1a3cfd6531fb9e79a57860c5ebb0bd3df88862f23b19439973f3103c17_prof);

        
        $__internal_18ba512a1100f02a4f9c67052a79a06ed746fcda7b4fa8ae2e76a4c2862e1e5d->leave($__internal_18ba512a1100f02a4f9c67052a79a06ed746fcda7b4fa8ae2e76a4c2862e1e5d_prof);

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

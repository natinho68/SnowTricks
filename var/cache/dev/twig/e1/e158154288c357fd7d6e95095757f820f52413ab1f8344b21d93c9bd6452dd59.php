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
        $__internal_0adb6ce8e5c409acd1c30fbfd668bd20261959a90cc3d555fe5690ecb151caab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0adb6ce8e5c409acd1c30fbfd668bd20261959a90cc3d555fe5690ecb151caab->enter($__internal_0adb6ce8e5c409acd1c30fbfd668bd20261959a90cc3d555fe5690ecb151caab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_4f1c845447392b4bdebcf0fb9e7fb5e357218110d1bac930e6b024f7d2b19733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1c845447392b4bdebcf0fb9e7fb5e357218110d1bac930e6b024f7d2b19733->enter($__internal_4f1c845447392b4bdebcf0fb9e7fb5e357218110d1bac930e6b024f7d2b19733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0adb6ce8e5c409acd1c30fbfd668bd20261959a90cc3d555fe5690ecb151caab->leave($__internal_0adb6ce8e5c409acd1c30fbfd668bd20261959a90cc3d555fe5690ecb151caab_prof);

        
        $__internal_4f1c845447392b4bdebcf0fb9e7fb5e357218110d1bac930e6b024f7d2b19733->leave($__internal_4f1c845447392b4bdebcf0fb9e7fb5e357218110d1bac930e6b024f7d2b19733_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f85ea35e5a86da051bba6b392c9c380aac96fc86a1ad188763e17afef1501f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85ea35e5a86da051bba6b392c9c380aac96fc86a1ad188763e17afef1501f9e->enter($__internal_f85ea35e5a86da051bba6b392c9c380aac96fc86a1ad188763e17afef1501f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f05769406fcf6b0d07a8ed106670b399bfc6636be02f7d55fef99d929cc39f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05769406fcf6b0d07a8ed106670b399bfc6636be02f7d55fef99d929cc39f8c->enter($__internal_f05769406fcf6b0d07a8ed106670b399bfc6636be02f7d55fef99d929cc39f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f05769406fcf6b0d07a8ed106670b399bfc6636be02f7d55fef99d929cc39f8c->leave($__internal_f05769406fcf6b0d07a8ed106670b399bfc6636be02f7d55fef99d929cc39f8c_prof);

        
        $__internal_f85ea35e5a86da051bba6b392c9c380aac96fc86a1ad188763e17afef1501f9e->leave($__internal_f85ea35e5a86da051bba6b392c9c380aac96fc86a1ad188763e17afef1501f9e_prof);

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

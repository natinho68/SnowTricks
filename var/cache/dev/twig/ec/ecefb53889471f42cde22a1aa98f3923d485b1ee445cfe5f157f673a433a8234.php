<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_87763d4938b8a69549d8d249f60b1d24048edfceba0c859d6997ebb81fa85e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_b254a41c30b7037ba0832ca6f606878114deaca45706f8bd7b9dfb1f6bf7ffb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b254a41c30b7037ba0832ca6f606878114deaca45706f8bd7b9dfb1f6bf7ffb8->enter($__internal_b254a41c30b7037ba0832ca6f606878114deaca45706f8bd7b9dfb1f6bf7ffb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_866201d43c51b80626b518b2895e8d03c18d84f9d3f1f0288025c1f2289f774a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866201d43c51b80626b518b2895e8d03c18d84f9d3f1f0288025c1f2289f774a->enter($__internal_866201d43c51b80626b518b2895e8d03c18d84f9d3f1f0288025c1f2289f774a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b254a41c30b7037ba0832ca6f606878114deaca45706f8bd7b9dfb1f6bf7ffb8->leave($__internal_b254a41c30b7037ba0832ca6f606878114deaca45706f8bd7b9dfb1f6bf7ffb8_prof);

        
        $__internal_866201d43c51b80626b518b2895e8d03c18d84f9d3f1f0288025c1f2289f774a->leave($__internal_866201d43c51b80626b518b2895e8d03c18d84f9d3f1f0288025c1f2289f774a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7add93a4309dab1ae9669ab8fd720808723cdf752882c4db86557d0f9b71178e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7add93a4309dab1ae9669ab8fd720808723cdf752882c4db86557d0f9b71178e->enter($__internal_7add93a4309dab1ae9669ab8fd720808723cdf752882c4db86557d0f9b71178e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8658d974e30fbf8046e7fc08aedfdddf2ec40c95aad36c4897f99228d300f5e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8658d974e30fbf8046e7fc08aedfdddf2ec40c95aad36c4897f99228d300f5e0->enter($__internal_8658d974e30fbf8046e7fc08aedfdddf2ec40c95aad36c4897f99228d300f5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_8658d974e30fbf8046e7fc08aedfdddf2ec40c95aad36c4897f99228d300f5e0->leave($__internal_8658d974e30fbf8046e7fc08aedfdddf2ec40c95aad36c4897f99228d300f5e0_prof);

        
        $__internal_7add93a4309dab1ae9669ab8fd720808723cdf752882c4db86557d0f9b71178e->leave($__internal_7add93a4309dab1ae9669ab8fd720808723cdf752882c4db86557d0f9b71178e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}

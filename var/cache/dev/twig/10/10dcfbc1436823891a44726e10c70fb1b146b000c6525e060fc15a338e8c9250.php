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
        $__internal_9d62ccb605dc6e42ec04277349dc3d848c5b3c3436b3ede41361edae0cd7a6e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d62ccb605dc6e42ec04277349dc3d848c5b3c3436b3ede41361edae0cd7a6e6->enter($__internal_9d62ccb605dc6e42ec04277349dc3d848c5b3c3436b3ede41361edae0cd7a6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_78e5ec8e8579e11f3e82c1d165847899457970212324f6dc4fa034f32f57c78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e5ec8e8579e11f3e82c1d165847899457970212324f6dc4fa034f32f57c78a->enter($__internal_78e5ec8e8579e11f3e82c1d165847899457970212324f6dc4fa034f32f57c78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d62ccb605dc6e42ec04277349dc3d848c5b3c3436b3ede41361edae0cd7a6e6->leave($__internal_9d62ccb605dc6e42ec04277349dc3d848c5b3c3436b3ede41361edae0cd7a6e6_prof);

        
        $__internal_78e5ec8e8579e11f3e82c1d165847899457970212324f6dc4fa034f32f57c78a->leave($__internal_78e5ec8e8579e11f3e82c1d165847899457970212324f6dc4fa034f32f57c78a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_68d689c42a5d722fbbc18ae377a82962449a69b77769a7487ed05e4413fb7329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d689c42a5d722fbbc18ae377a82962449a69b77769a7487ed05e4413fb7329->enter($__internal_68d689c42a5d722fbbc18ae377a82962449a69b77769a7487ed05e4413fb7329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_98055c6d30232c8da8ca940efb9861fb39927e525b6292a36e47e9f74e414c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98055c6d30232c8da8ca940efb9861fb39927e525b6292a36e47e9f74e414c5a->enter($__internal_98055c6d30232c8da8ca940efb9861fb39927e525b6292a36e47e9f74e414c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_98055c6d30232c8da8ca940efb9861fb39927e525b6292a36e47e9f74e414c5a->leave($__internal_98055c6d30232c8da8ca940efb9861fb39927e525b6292a36e47e9f74e414c5a_prof);

        
        $__internal_68d689c42a5d722fbbc18ae377a82962449a69b77769a7487ed05e4413fb7329->leave($__internal_68d689c42a5d722fbbc18ae377a82962449a69b77769a7487ed05e4413fb7329_prof);

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
